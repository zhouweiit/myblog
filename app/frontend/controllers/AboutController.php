<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\CategoryService;

class AboutController extends ControllerBase {
    
    /**
     *
     * @var CategoryService
     */
    private $categoryService;
    
    protected function initialize() {
        $this->categoryService = $this->di->get ( 'CategoryService' );
    }
    
    public function blogAction() {
        $fristCategory = $this->categoryService->getFirstCategory ();
        $this->view->setVar ( 'firstCategory', $fristCategory );
        $this->view->setVar ( 'blog', true );
    }
}

