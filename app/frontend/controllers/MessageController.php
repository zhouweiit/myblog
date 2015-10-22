<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\CategoryService;
use service\AsideService;
use service\CommentService;
use service\UserService;

class MessageController extends ControllerBase {
	
	/**
	 * @var CategoryService
	 */
	private $categoryService;
	
	/**
	 * @var AsideService
	 */
	private $asideService;
	
	/**
	 * @var CommentService
	 */
	private $commentService;
	
	/**
	 * @var UserService
	 */
	private $userService;
	
	protected function initialize(){
		$this->categoryService  = $this->di->get('CategoryService');
		$this->asideService		= $this->di->get('AsideService');
		$this->commentService	= $this->di->get('CommentService');
		$this->userService		= $this->di->get('UserService');
	}
	
	public function leaveAction(){
		
		//当前评论人的cookie信息
		$userInfo = $this->userService->getUserCookies();
		
		//评论
		$comments = $this->commentService->getCommentTreeByArticleId(0,$userInfo['username']);
		
		$fristCategory = $this->categoryService->getFirstCategory();
		$asideInfo = $this->asideService->getAsideResult();
		$this->view->setVar('aside', $asideInfo);
		$this->view->setVar('firstCategory', $fristCategory);
		$this->view->setVar('leave', true);
		$this->view->setVar('comments', $comments);
		$this->view->setVar('userInfo', $userInfo);
	}
	
}

