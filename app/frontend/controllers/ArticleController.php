<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;

class ArticleController extends ControllerBase {
	
	public function listAction(){
		$tag = $this->request->get('tag');
		$category = $this->request->get('category');
		$page = $this->request->get('page',null,1);
		$pageSize = 10;
		$params = $this->request->get();
	}
	
	public function infoAction(){
		
	}
	
}
