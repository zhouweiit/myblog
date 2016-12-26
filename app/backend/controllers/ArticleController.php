<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use service\CategoryService;
use service\TagService;
use service\ArticleService;
use service\PageService;
use library\utils\HttpUtils;
use Phalcon\Mvc\View;

class ArticleController extends ControllerBase {
    
    /**
     * @var CategoryService
     */
    private $categoryService;
    
    /**
     * @var TagService
     */
    private $tagService;
    
    /**
     * @var ArticleService
     */
    private $articleService;
    
    /**
     * @var PageService
     */
    private $pageService;
    
    protected function initialize(){
        $this->categoryService  = $this->di->get('CategoryService');
        $this->tagService       = $this->di->get('TagService');
        $this->articleService   = $this->di->get('ArticleService');
        $this->pageService      = $this->di->get('PageService');
    }
    
    /**
     * 文章列表
     * 
     * @author zhouwei
     */
    public function listAction(){
        $articleId          = HttpUtils::filterInt($this->request->get('article_id'));
        $title              = HttpUtils::filterString($this->request->get('title'), 0);
        $readTimesStart     = HttpUtils::filterInt($this->request->get('read_times_start'));
        $readTimesEnd       = HttpUtils::filterInt($this->request->get('read_times_end'));
        $firstCategoryId    = HttpUtils::filterInt($this->request->get('first_category'));
        $secondCategoryId   = HttpUtils::filterInt($this->request->get('second_category'));
        $commentTimesStart  = HttpUtils::filterInt($this->request->get('comment_times_start'));
        $commentTimesEnd    = HttpUtils::filterInt($this->request->get('comment_times_end'));
        $releaseTimeStart   = HttpUtils::filterDateTime($this->request->get('release_time_start'));
        $releaseTimeEnd     = HttpUtils::filterDateTime($this->request->get('release_time_end'));
        $tagIds             = $this->request->get('tag',null,array());
        $page = HttpUtils::filterInt($this->request->get('page'),1,array(0));
        $pageSize = 10;
        
        //过滤标签ID
        $newTagIds = array();
        foreach ($tagIds as $tag){
            $tag = HttpUtils::filterInt($tag);
            if (isset($tag)){
                $newTagIds[] = $tag;
            }
        }
        
        //过滤分类ID
        $categoryIds = $this->categoryService->getCategoryIdByPid($firstCategoryId);
        if (isset($secondCategoryId)){
            $categoryIds[] = $secondCategoryId;
        }
       
        // 获取文章
        $articleInfo = $this->articleService->getBackendArticleList(isset($articleId) ? array($articleId) : array(),$title,$categoryIds,$readTimesStart,$readTimesEnd,
                $commentTimesStart,$commentTimesEnd,$newTagIds,$releaseTimeStart,$releaseTimeEnd,$page - 1,$pageSize,5);
        
        //分页信息
        $pages = $this->pageService->createPageArray($articleInfo['count'],$page,$pageSize);
        $pageUrl = $this->pageService->createPageUrl($this->request->get(),'/backend/article/list');
        
        //一级分类
        $firstCategory = $this->categoryService->getFirstCategory();

        //二级分类
        $secondCategory = array();
        if (!empty($firstCategoryId)){
            $secondCategory = $this->categoryService->getCategoryByPid($firstCategoryId);
        }
        
        //标签
        $tags = $this->tagService->getAllTagsInfo();
        
        $this->view->setVar('articleInfo', $articleInfo['article']);
        $this->view->setVar('firstCategorys', $firstCategory);
        $this->view->setVar('secondCategorys', $secondCategory);
        $this->view->setVar('tags', $tags);
        $this->view->setVar('pages',$pages);
        $this->view->setVar('pageUrl',$pageUrl);
        $this->view->setVar('request', $this->request->get());
    }
    
    /**
     * 编辑页面
     * 
     * @author zhouwei
     */
    public function editAction(){
        $articleId = HttpUtils::filterInt($this->request->get('articleid'));
        $articleInfo = $this->articleService->getArticleInfoById($articleId);
        
        //文章不存在，跳转至列表页
        if (empty($articleInfo)){
            $this->response->redirect('/backend/article/list');
            return;
        }
        
        $firstCategory = $this->categoryService->getFirstCategory();
        $categoryInfo = $this->categoryService->getCategoryById($articleInfo['article']['category_id']);
        $secondCategory = $this->categoryService->getCategoryByPid($categoryInfo->getPid());
        $tags = $this->tagService->getAllTagsInfo();
        
        $this->view->setVar('articletag', array_values($articleInfo['tag']));
        $this->view->setVar('firstCategorys', $firstCategory);
        $this->view->setVar('secondCategorys', $secondCategory);
        $this->view->setVar('tags', $tags);
        $this->view->setVar('firstCategoryId', $categoryInfo->getPid());
        $this->view->setVar('secondCategoryId', $articleInfo['article']['category_id']);
        $this->view->setVar('article',$articleInfo['article']);
        $this->view->setVar('type','edit');
    }
    
    /**
     * 发布页面
     * 
     * @author zhouwei
     */
    public function releaseAction(){
        $firstCategory = $this->categoryService->getFirstCategory();
        $this->view->setVar('firstCategorys', $firstCategory);
        $this->view->setVar('type','release');
        $tags = $this->tagService->getAllTagsInfo();
        $this->view->setVar('tags', $tags);
        $this->view->renderFix('article', 'edit');
    }
    
    /**
     * ajax提交页面
     * 
     * @author zhouwei
     */
    public function ajaxSubmitAction(){
        $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
        
        $id             = HttpUtils::filterInt($this->request->get('id'));
        $title          = HttpUtils::filterString($this->request->get('title'));
        $readTimes      = HttpUtils::filterInt($this->request->get('read_times'));
        $commentTimes   = HttpUtils::filterInt($this->request->get('comment_times'));
        $releaseDatetime= HttpUtils::filterDateTime($this->request->get('release_datetime'));
        $firstCategory  = HttpUtils::filterInt($this->request->get('first_category'));
        $secondCategory = HttpUtils::filterInt($this->request->get('second_category'));
        $tag            = HttpUtils::filterString($this->request->get('tag'),0,'');
        $headimage      = HttpUtils::filterString($this->request->get('headimage'));
        $headcontent    = HttpUtils::filterString($this->request->get('headcontent'));
        $content        = HttpUtils::filterString($this->request->get('content'));
        $keywords       = HttpUtils::filterString($this->request->get('keywords'));
        
        //处理tag信息
        $tags = explode(',', $tag);
        $tagIds = array();
        foreach ($tags as $value){
            if (!empty($value) && is_numeric($value)){
                $tagIds[] = intval($value);
            }
        }
        
        //todo 基本类型校验,没时间写了,以后补
        
        //todo 业务逻辑校验,没时间写了,以后补
        
        try {
            $this->articleService->saveArticle($id, $title, $readTimes, $commentTimes, $releaseDatetime, $firstCategory, $secondCategory, $tagIds, $headimage, $headcontent, $content,$keywords);
            $this->response->setContent('true');
        } catch (\Exception $e) {
            $this->response->setContent('false');
        }
        $this->response->send();
    }
    
    /**
     * ajax删除文章
     * 
     * @author zhouwe
     */
    public function ajaxDeleteAction(){
        $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
        
        $id = HttpUtils::filterInt($this->request->get('id'));
        try {
            if (!empty($id)){
                $result = $this->articleService->deleteArticle($id);
            }
            if ($result > 0){
                $this->response->setContent('true');
            } else {
                $this->response->setContent('false');
            }
        } catch (\Exception $e) {
            $this->response->setContent('false');
        }
        $this->response->send();
    }
    
}
