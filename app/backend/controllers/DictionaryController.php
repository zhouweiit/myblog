<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use service\TagService;
use service\CategoryService;
use library\utils\HttpUtils;

class DictionaryController extends ControllerBase {
    
    /**
     * @var CategoryService
     */
    private $categoryService;
    
    /**
     * @var TagService
     */
    private $tagService;
    
    protected function initialize(){
        $this->categoryService  = $this->di->get('CategoryService');
        $this->tagService       = $this->di->get('TagService');
    }
    
    /**
     * 根据父分类ID获取子分类信息
     * 
     * @author zhouwei
     */
    public function ajaxChildCategoryAction(){
        $categoryId = HttpUtils::filterInt($this->request->get('category_id'));
        $category = array();
        if (isset($categoryId)){
            $category = $this->categoryService->getCategoryByPid($categoryId);
        }
        $this->response->setContent(json_encode(empty($category) ? false : $category));
        $this->response->send();
    }
    
    /**
     * 根据分类ID获取标签信息
     * 
     * @author zhouwei
     */
    public function ajaxTagByCategoryIdAction(){
        $categoryId = HttpUtils::filterInt($this->request->get('category_id'));
        $tag = array();
        if (isset($categoryId)){
            $tag = $this->tagService->getTagByCategoryId($categoryId);
        }
        $this->response->setContent(json_encode(empty($tag) ? false : $tag));
        $this->response->send();
    }
}
