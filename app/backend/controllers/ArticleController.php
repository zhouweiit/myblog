<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use service\CategoryService;
use service\TagService;
use service\ArticleService;
use service\PageService;
use library\utils\HttpUtils;

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
        $tagIds             = $this->request->get('tag');
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
                $commentTimesStart,$commentTimesEnd,$newTagIds,$releaseTimeStart,$releaseTimeEnd,$page - 1,$pageSize);
        
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
        $tags = array();
        if (!empty($secondCategoryId)){
            $tags = $this->tagService->getTagByCategoryId($secondCategoryId);
        }
        
        $this->view->setVar('articleInfo', $articleInfo['article']);
        $this->view->setVar('firstCategorys', $firstCategory);
        $this->view->setVar('secondCategorys', $secondCategory);
        $this->view->setVar('tags', $tags);
        $this->view->setVar('pages',$pages);
        $this->view->setVar('pageUrl',$pageUrl);
        $this->view->setVar('request', $this->request->get());
    }
    
    public function editAction(){
        $articleId = HttpUtils::filterInt($this->request->get('articleid'));
        $articleInfo = $this->articleService->getArticleInfoById($articleId);
        
        if (empty($articleInfo)){
            //todo 文章不存在，跳转列表页
        }
        
        $firstCategory = $this->categoryService->getFirstCategory();
        $categoryInfo = $this->categoryService->getCategoryById($articleInfo['article']['category_id']);
        $secondCategory = $this->categoryService->getCategoryByPid($categoryInfo->getPid());
        $tags = $this->tagService->getTagByCategoryId($articleInfo['article']['category_id']);
        
        $this->view->setVar('articletag', array_values($articleInfo['tag']));
        $this->view->setVar('firstCategorys', $firstCategory);
        $this->view->setVar('secondCategorys', $secondCategory);
        $this->view->setVar('tags', $tags);
        $this->view->setVar('firstCategoryId', $categoryInfo->getPid());
        $this->view->setVar('secondCategoryId', $articleInfo['article']['category_id']);
        $this->view->setVar('article',$articleInfo['article']);
        $this->view->setVar('type','edit');
    }
    
    public function releaseAction(){
        $firstCategory = $this->categoryService->getFirstCategory();
        
        
        $this->view->setVar('firstCategorys', $firstCategory);
        $this->view->setVar('type','release');
        $this->view->renderFix('article', 'edit');
    }
    
}
