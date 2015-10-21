<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\AsideService;
use service\CategoryService;
use service\ArticleService;
use service\MenuService;
use service\CommentService;
use service\UserService;

class ArticleController extends ControllerBase {
	
	/**
	 * @var CategoryService
	 */
	private $categoryService;
	
	/**
	 * @var ArticleService
	 */
	private $articleService;
	
	/**
	 * @var MenuService
	 */
	private $menuService;
	
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
		$this->asideService		= $this->di->get('AsideService');
		$this->categoryService  = $this->di->get('CategoryService');
		$this->articleService	= $this->di->get('ArticleService');
		$this->menuService		= $this->di->get('MenuService');
		$this->commentService	= $this->di->get('CommentService');
		$this->userService		= $this->di->get('UserService');
	}
	
	public function infoAction(){
		$articleid = $this->request->get('articleid');
		$articleInfo = $this->articleService->getArticleInfoById($articleid);
		//todo 文章不存在，跳404
		$tagids = array_keys($articleInfo['tag']);
		//相关推荐
		$relatedArticle = $this->articleService->getRelatedArticlesTop10($tagids, $articleid);
		//菜单
		$menuInfo = $this->menuService->getMenuInfo($articleInfo['article']['category_id'],null,null);
		//右栏
		$asideInfo = $this->asideService->getAsideResult();
		//评论
		$comments = $this->commentService->getCommentTreeByArticleId($articleid);
		//当前评论人的cookie信息
		$userInfo = $this->userService->getUserCookies();
		$fristCategory = $this->categoryService->getFirstCategory();
		$this->view->setVar('firstCategory', $fristCategory);
		$this->view->setVar('firstCategoryId', $menuInfo['categoryid']);
		$this->view->setVar('navigation', $menuInfo['navigation']);
		$this->view->setVar('aside', $asideInfo);
		$this->view->setVar('article', $articleInfo['article']);
		$this->view->setVar('tags',$articleInfo['tag']);
		$this->view->setVar('relateArticle', $relatedArticle);
		$this->view->setVar('comments', $comments);
		$this->view->setVar('userInfo', $userInfo);
	}
	
	public function commitCommentAction(){
		$name = $this->request->get('name');
		$email = $this->request->get('email');
		$content = $this->request->get('content');
		$pid = $this->request->get('pid');
		$articleId = $this->request->get('articleid');
		$commentFloor = $this->request->get('comment_floor');
		$result = $this->commentService->addComment($articleId, $content, $pid, $name, $email);
		$this->userService->setUserCookies($name, $email);
		if ($result){
			$this->response->redirect('http://127.0.0.1:8889/article/info?articleid=1#floor-'.$commentFloor);
		} else {
			$this->response->redirect('http://127.0.0.1:8889/article/info?articleid=1#form_comment');
		}
	}
}
