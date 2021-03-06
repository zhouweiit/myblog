<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\TagDao;
use library\mvc\Log;

class TagService extends ServiceBase {
    
    /**
     *
     * @var TagDao
     */
    private $tagDao;
    
    /**
     *
     * @var Log
     */
    private $log;
    protected function init(){
        $this->log = $this->di->get('applicationLog');
        $this->tagDao = $this->di->get('dao\blog\TagDao');
    }
    
    /**
     * 获取所有的tag
     *
     * @return array
     * @author zhouwei
     */
    public function getAllTag(){
        $tags = $this->tagDao->getAllTag();
        $result = array();
        foreach ( $tags as $value ) {
            $result[$value->getId()] = $value;
        }
        return $result;
    }
    
    /**
     * 根据id数组获取标签信息
     *
     * @return array
     * @author zhouwei
     */
    public function getTagByIds(array $ids){
        if (empty($ids)){
            return array();
        }
        $tags = $this->tagDao->getTagByIds($ids);
        $result = array();
        foreach ( $tags as $value ) {
            $result[$value->getId()] = $value;
        }
        return $result;
    }
    
    /**
     * 根据标签ID获取标签信息
     *
     * @param int $id            
     * @return array
     * @author zhouwei
     */
    public function getTagById($id){
        return $tag = $this->tagDao->getTagById($id);
    }
    
    /**
     * 根据分类ID获取标签信息
     * @param int $categoryId
     * 
     * @return array
     * @author zhouwei
     */
    public function getTagByCategoryId($categoryId){
        $tags = $this->tagDao->getTagByCategoryId($categoryId);
        $result = array();
        foreach ($tags as $value){
            $result[] = array(
                'id'    => $value->getId(),
                'name'  => $value->getName(),
            );
        }
        return $result;
    }

    public function getAllTagsInfo(){
        $tags = $this->tagDao->getAllTag();
        $result = array();
        foreach ($tags as $value){
            $result[] = array(
                'id'    => $value->getId(),
                'name'  => $value->getName(),
            );
        }
        return $result;
    }
}

