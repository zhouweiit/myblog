<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\CategoryService;
use service\AsideService;
use service\CommentService;
use service\UserService;
use service\PageService;

class MessageController extends ControllerBase {
    
    /**
     *
     * @var CategoryService
     */
    private $categoryService;
    
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
     * @var PageService
     */
    private $pageService;
    protected function initialize() {
        $this->categoryService = $this->di->get ( 'CategoryService' );
        $this->asideService = $this->di->get ( 'AsideService' );
        $this->commentService = $this->di->get ( 'CommentService' );
        $this->userService = $this->di->get ( 'UserService' );
        $this->pageService = $this->di->get ( 'PageService' );
    }
    public function leaveAction() {
        $page = $this->request->get ( 'page', null, 1 );
        $pageSize = 40;
        
        // 当前评论人的cookie信息
        $userInfo = $this->userService->getUserCookies ();
        
        // 评论
        $comments = $this->commentService->getCommentTreeByArticleId ( 0, $userInfo ['username'], $page - 1, $pageSize );
        
        $pages = $this->pageService->createPageArray ( $comments ['count'], $page, $pageSize );
        $pageUrl = $this->pageService->createPageUrl ( $this->request->get (), '/article/info' );
        
        $fristCategory = $this->categoryService->getFirstCategory ();
        $asideInfo = $this->asideService->getAsideResult ();
        $this->view->setVar ( 'aside', $asideInfo );
        $this->view->setVar ( 'firstCategory', $fristCategory );
        $this->view->setVar ( 'leave', true );
        $this->view->setVar ( 'comments', $comments ['commentTress'] );
        $this->view->setVar ( 'userInfo', $userInfo );
        $this->view->setVar ( 'pages', $pages );
        $this->view->setVar ( 'pageUrl', $pageUrl );
        $this->view->setVar ( 'pageUrlOther', '#comment' );
    }
}

