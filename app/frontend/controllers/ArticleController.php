<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\AsideService;
use service\CategoryService;
use service\ArticleService;
use service\MenuService;
use service\CommentService;

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
	
	protected function initialize(){
		$this->asideService		= $this->di->get('AsideService');
		$this->categoryService  = $this->di->get('CategoryService');
		$this->articleService	= $this->di->get('ArticleService');
		$this->menuService		= $this->di->get('MenuService');
		$this->commentService	= $this->di->get('CommentService');
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
		$fristCategory = $this->categoryService->getFirstCategory();
		$this->view->setVar('firstCategory', $fristCategory);
		$this->view->setVar('firstCategoryId', $menuInfo['categoryid']);
		$this->view->setVar('navigation', $menuInfo['navigation']);
		$this->view->setVar('aside', $asideInfo);
		$this->view->setVar('article', $articleInfo['article']);
		$this->view->setVar('tags',$articleInfo['tag']);
		$this->view->setVar('relateArticle', $relatedArticle);
		$this->view->setVar('comments', $comments);
	}
	
}
