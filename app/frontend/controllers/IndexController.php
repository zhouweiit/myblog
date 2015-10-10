<?php
namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\ArticleService;
use service\PageService;
class IndexController extends ControllerBase{
	
	/**
	 * @var ArticleService
	 */
	private $articleService;
	
	/**
	 * @var PageService
	 */
	private $pageService;
	
	protected function initialize(){
		$this->articleService 	= $this->di->get('ArticleService');
		$this->pageService 	= $this->di->get('PageService');
	}
    
	public function indexAction(){
		$page = $this->request->get('page',null,1);
		$pageSize = 10;
		$params = $this->request->get();
		$articleInfo = $this->articleService->getIndexArticleList($page - 1,$pageSize);
		$pages = $this->pageService->createPageArray($articleInfo['count'], $page, $pageSize);
		$pageUrl = $this->pageService->createPageUrl($this->request->get(),'/index/index');
		$this->view->setVar('articleInfo', $articleInfo['article']);
		$this->view->setVar('pages', $pages);
		$this->view->setVar('pageUrl', $pageUrl);
	}
	
}
