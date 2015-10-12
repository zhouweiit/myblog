<?php
namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\ArticleService;
use service\PageService;
use service\MenuService;
use service\CategoryService;
class IndexController extends ControllerBase{
	
	/**
	 * @var ArticleService
	 */
	private $articleService;
	
	/**
	 * @var MenuService
	 */
	private $menuService;
	
	/**
	 * @var PageService
	 */
	private $pageService;
	
	/**
	 * @var CategoryService
	 */
	private $categoryService;
	
	protected function initialize(){
		$this->articleService 	= $this->di->get('ArticleService');
		$this->pageService 		= $this->di->get('PageService');
		$this->menuService		= $this->di->get('MenuService');
		$this->categoryService  = $this->di->get('CategoryService');
	}
    
	public function indexAction(){
		$page = $this->request->get('page',null,1);
		$tagid = $this->request->get('tagid');
		$date = $this->request->get('date');
		$categoryId = $this->request->get('categoryid');
		$pageSize = 10;
		$params = $this->request->get();
		$articleInfo = $this->articleService->getIndexArticleList($page - 1,$pageSize,$categoryId,$tagid,$date);
		$pages = $this->pageService->createPageArray($articleInfo['count'], $page, $pageSize);
		$pageUrl = $this->pageService->createPageUrl($this->request->get(),'/index/index');
		$menuInfo = $this->menuService->getMenuInfo($categoryId,$tagid,$date);
		$fristCategory = $this->categoryService->getFirstCategory();
		$this->view->setVar('articleInfo', $articleInfo['article']);
		$this->view->setVar('pages', $pages);
		$this->view->setVar('pageUrl', $pageUrl);
		$this->view->setVar('firstCategory', $fristCategory);
		$this->view->setVar('firstCategoryId', $menuInfo['categoryid']);
		$this->view->setVar('navigation', $menuInfo['navigation']);
		$this->view->setVar('index', !isset($menuInfo['categoryid']) ? true : false);
	}
	
}
