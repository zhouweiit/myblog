<?php

namespace service;

use library\mvc\ServiceBase;
use library\mvc\Log;
use dao\blog\CategoryDao;
use models\blog\Category;

class CategoryService extends ServiceBase {
    
    /**
     *
     * @var Log
     */
    private $log;
    
    /**
     *
     * @var CategoryDao
     */
    private $categoryDao;
    protected function init(){
        $this->log = $this->di->get('applicationLog');
        $this->categoryDao = $this->di->get('dao\\blog\\CategoryDao');
    }
    
    /**
     * 根据分类ID获取分类信息
     *
     * @param int $id            
     * @return Category
     * @author zhouwei
     */
    public function getCategoryById($id){
        return $this->categoryDao->getCategoryById($id);
    }
    
    /**
     * 获取所有的分类ID信息，并按照深度、PID、优先级排序
     *
     * @return array
     * @author zhouwei
     */
    public function getAllCategory(){
        $categorys = $this->categoryDao->getAllCategory();
        $result = array();
        foreach ( $categorys as $value ) {
            $result[$value->getId()] = $value;
        }
        return $result;
    }
    
    /**
     * 根据分类组成分类树
     * 
     * @param array categorys
     *
     * @return array
     * @author zhouwei
     */
    public function getCategoryTree($categorys = null){
        if (empty($categorys)){
            $categorys = $this->getAllCategory();
        }
        $categoryTree = array();
        foreach ( $categorys as $value ) {
            if ($value->getDepth() == Category::FIRST_CATEGORY_DEPTH) {
                $categoryTree[$value->getId()] = array('category' => $value);
            } else if ($value->getDepth() == Category::SECOND_CATEGORY_DEPTH) {
                $categoryTree[$value->getPid()]['child'][$value->getId()] = $value;
            }
        }
        return $categoryTree;
    }
    
    /**
     * 根据分类的ID获取子分类ID信息
     * @param int $pid
     * @return array
     * @author zhouwei
     */
    public function getCategoryIdByPid($pid){
        if (!isset($pid)){
            return array();
        }
        $cateogoryTree = $this->getCategoryTree();
        $child = $cateogoryTree[$pid]['child'];
        if (isset($child)){
            return array_keys($child);
        }
        return array();
    }
    
    /**
     * 根据父ID获取所有的子分类信息
     *
     * @param int $pid
     *            父分类ID
     * @return array
     * @author zhouwei
     */
    public function getCategoryByPid($pid){
        $categorys = $this->categoryDao->getCategoryByPid($pid);
        $result = array();
        foreach ($categorys as $value){
            $result[] = array(
                'id'    => $value->getId(),
                'name'  => $value->getName(),
            );
        }
        return $result;
    }
    
    /**
     * 获取所有的一级分类
     *
     * @return array
     * @author zhouwei
     */
    public function getFirstCategory(){
        $categorys = $this->categoryDao->getCategoryByDepth(Category::FIRST_CATEGORY_DEPTH);
        $result = array();
        foreach ( $categorys as $value ) {
            $result[$value->getId()] = array(
                'name' => $value->getName(),
                'id' => $value->getId(),
            );
        }
        return $result;
    }
    
    /**
     * 获取所有的二级分类
     * 
     * @return array
     * @author zhouwei
     */
    public function getSecondCategory(){
        $categorys = $this->categoryDao->getCategoryByDepth(Category::SECOND_CATEGORY_DEPTH);
        $result = array();
        foreach ( $categorys as $value ) {
            $result[$value->getId()] = array(
                'name' => $value->getName(),
                'id' => $value->getId(),
            );
        }
        return $result;
    }
}
