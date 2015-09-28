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
		$articleInfo = $this->articleService->getIndexArticleList($page - 1,10);
		$pages = $this->pageService->createPageArray($articleInfo['count'], $page, 1);
		$this->view->setVar('articleInfo', $articleInfo['article']);
		$this->view->setVar('pages', $pages);
	}
	
}
