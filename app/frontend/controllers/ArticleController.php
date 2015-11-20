<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\AsideService;
use service\CategoryService;
use service\ArticleService;
use service\MenuService;
use service\CommentService;
use service\UserService;
use service\PageService;
use service\TagService;
use Phalcon\Mvc\View;
use service\SEOService;

class ArticleController extends ControllerBase {
    
    /**
     *
     * @var CategoryService
     */
    private $categoryService;
    
    /**
     *
     * @var ArticleService
     */
    private $articleService;
    
    /**
     *
     * @var MenuService
     */
    private $menuService;
    
    /**
     *
     * @var AsideService
     */
    private $asideService;
    
    /**
     *
     * @var CommentService
     */
    private $commentService;
    
    /**
     *
     * @var UserService
     */
    private $userService;
    
    /**
     * 
     * @var TagService
     */
    private $tagService;
    
    /**
     * 
     * @var SEOService
     */
    private $seoService;
    
    /**
     *
     * @var PageService
     */
    private $pageService;
    
    protected function initialize(){
        $this->asideService     = $this->di->get('AsideService');
        $this->categoryService  = $this->di->get('CategoryService');
        $this->articleService   = $this->di->get('ArticleService');
        $this->menuService      = $this->di->get('MenuService');
        $this->commentService   = $this->di->get('CommentService');
        $this->userService      = $this->di->get('UserService');
        $this->pageService      = $this->di->get('PageService');
        $this->tagService       = $this->di->get('TagService');
        $this->seoService       = $this->di->get('SEOService');
    }
    
    /**
     * 文章的详情页
     * @author zhouwei
     */
    public function infoAction(){
        $page = $this->request->get('page',null,1);
        $pageSize = 30;
        $articleid = $this->request->get('articleid');
        $articleInfo = $this->articleService->getArticleInfoById($articleid);
        
        if (empty($articleInfo)) {
            $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
            $this->response->redirect('/404.html');
            return;
        }
        
        $tagids = array_keys($articleInfo['tag']);
        // 相关推荐
        $relatedArticle = $this->articleService->getRelatedArticlesTop10($tagids,$articleid);
        // 菜单
        $menuInfo = $this->menuService->getMenuInfo($articleInfo['article']['category_id'],null,null);
        // 右栏
        $asideInfo = $this->asideService->getAsideResult();
        // 当前评论人的cookie信息
        $userInfo = $this->userService->getUserCookies();
        // 评论
        $comments = $this->commentService->getCommentTreeByArticleId($articleid,$userInfo['username'],$page - 1,$pageSize);
        //seo优化信息
        $tdk = $this->seoService->articleInfoTDK($articleInfo['article'], $articleInfo['tag']);
        
        $pages = $this->pageService->createPageArray($comments['count'],$page,$pageSize);
        $pageUrl = $this->pageService->createPageUrl($this->request->get(),'/article/info');
        
        $fristCategory = $this->categoryService->getFirstCategory();
        $this->view->setVar('firstCategory',$fristCategory);
        $this->view->setVar('firstCategoryId',$menuInfo['categoryid']);
        $this->view->setVar('navigation',$menuInfo['navigation']);
        $this->view->setVar('aside',$asideInfo);
        $this->view->setVar('article',$articleInfo['article']);
        $this->view->setVar('tags',$articleInfo['tag']);
        $this->view->setVar('relateArticle',$relatedArticle);
        $this->view->setVar('comments',$comments['commentTress']);
        $this->view->setVar('userInfo',$userInfo);
        $this->view->setVar('TDK', $tdk);
        //分页信息
        $this->view->setVar('pages',$pages['pages']);
        $this->view->setVar('pageUrl',$pageUrl);
        $this->view->setVar('pageUrlOther','#comment');
    }
    
    /**
     * 预览页面
     *
     * @author zhouwei
     */
    public function previewAction(){
        if (empty($articleInfo)) {
            $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
            $this->response->redirect('/404.html');
            return;
        }
        
        $articleInfo = array(
            'article' => array(
                'id'            => $this->request->get('id'),
                'title'         => $this->request->get('title'),
                'category_id'   => $this->request->get('second_category'),
                'release_datetime' => date('Y-m-d H:i',strtotime($this->request->get('release_datetime'))),
                'comment_times' => $this->request->get('comment_times'),
                'read_times'    => $this->request->get('read_times'),
                'content'       => $this->request->get('content'),
            ),
        );
        
        $tagIds = $this->request->get('tag');
        $tagIds = empty($tagIds) ? array() : $tagIds;
        $tagInfos = $this->tagService->getTagByIds($tagIds);
        $tag = array();
        foreach ($tagInfos as $tagInfo){
            $tag[] = array(
                'id'    => $tagInfo->getId(),
                'name'  => $tagInfo->getName(),
            );
        }
        
        // 相关推荐
        $relatedArticle = $this->articleService->getRelatedArticlesTop10($tagIds,$this->request->get('id'));
        
        $menuInfo = $this->menuService->getMenuInfo($this->request->get('second_category'),null,null);
        $fristCategory = $this->categoryService->getFirstCategory();
        $this->view->setVar('firstCategory',$fristCategory);
        $this->view->setVar('firstCategoryId',$menuInfo['categoryid']);
        $this->view->setVar('navigation',$menuInfo['navigation']);
        $this->view->setVar('article',$articleInfo['article']);
        $this->view->setVar('tags',$tag);
        $this->view->setVar('relateArticle',$relatedArticle);
        $this->view->renderFix('article','info');
    }
    
    /**
     * 提交评论
     * @author zhouwei
     */
    public function commitCommentAction(){
    	$page = $this->request->get('page',null,1);
        $name = $this->request->get('name');
        $email = $this->request->get('email');
        $content = $this->request->get('content');
        $pid = $this->request->get('pid');
        $articleId = $this->request->get('articleid');
        $commentFloor = $this->request->get('comment_floor');
        $result = $this->commentService->addComment($articleId,$content,$pid,$name,$email);
        $this->userService->setUserCookies($name,$email);
        
        if ($articleId === '0') { // 如果是留言评论的跳转
        	$this->response->redirect('/message/leave?#comment');
        } else { // 如果是一般文章评论的跳转
            $this->response->redirect('/article/info?articleid=' . $articleId . '#comment');
        }
    }
}
