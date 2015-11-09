<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use service\CategoryService;
use service\TagService;
use service\ArticleService;
use service\PageService;

class ArticleController extends ControllerBase {
    
    /**
     * @var CategoryService
     */
    private $categoryService;
    
    /**
     * @var TagService
     */
    private $tagService;
    
    /**
     * @var ArticleService
     */
    private $articleService;
    
    /**
     * @var PageService
     */
    private $pageService;
    
    protected function initialize(){
        $this->categoryService  = $this->di->get('CategoryService');
        $this->tagService       = $this->di->get('TagService');
        $this->articleService   = $this->di->get('ArticleService');
        $this->pageService      = $this->di->get('PageService');
    }
    
    public function listAction(){
        
        
        $page = $this->request->get('page',null,1);
        $pageSize = 3;
        // 获取文章
        $articleInfo = $this->articleService->getIndexArticleList($page - 1,$pageSize);
        
        //分页信息
        $pages = $this->pageService->createPageArray($articleInfo['count'],$page,$pageSize);
        $pageUrl = $this->pageService->createPageUrl($this->request->get(),'/backend/article/list');
        
        //一级分类
        $firstCategory = $this->categoryService->getFirstCategory();
        //二级分类
        $secondCategory = $this->categoryService->getSecondCategory();
        //标签
        $tags = $this->tagService->getAllTag();
        
        $this->view->setVar('articleInfo', $articleInfo['article']);
        $this->view->setVar('firstCategorys', $firstCategory);
        $this->view->setVar('secondCategorys', $secondCategory);
        $this->view->setVar('tags', $tags);
        $this->view->setVar('pages',$pages);
        $this->view->setVar('pageUrl',$pageUrl);
    }
    
}
