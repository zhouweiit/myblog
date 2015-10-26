<?php

namespace service;

use library\mvc\ServiceBase;
use library\mvc\Log;
use models\blog\Category;

class MenuService extends ServiceBase {
    
    /**
     *
     * @var CategoryService
     */
    private $categoryService;
    
    /**
     *
     * @var TagService
     */
    private $tagService;
    
    /**
     *
     * @var Log
     */
    private $log;
    protected function init(){
        $this->log = $this->di->get('applicationLog');
        $this->categoryService = $this->di->get('CategoryService');
        $this->tagService = $this->di->get('TagService');
    }
    
    /**
     * 根据连接传输的信息，正确的显示菜单与导航条
     *
     * @param int $categoryId            
     * @param int $tagid            
     * @param date $date            
     * @return array
     * @author zhouwei
     */
    public function getMenuInfo($categoryId = null, $tagid = null, $date = null){
        $navigation = '<h2 class="about_h">您现在的位置是：';
        $categoryid = null;
        if (!empty($date)) { // 优先查询日期的文章信息，并且再首页频道显示
            $dateTmp = date('Y年m月',strtotime($date));
            $navigation .= '<a href="/">首页</a>&gt;&nbsp;<a href="/index/index?date=' . date('Y-m',strtotime($date)) . '-01">' . $dateTmp . '</a></h2>';
        } else if (!empty($tagid)) { // 根据标签ID查询文章信息，并且根据标签的频道分类再频道显现
            $tag = $this->tagService->getTagById($tagid);
            if (!empty($tag)) {
                $categoryInfo = $this->categoryService->getCategoryById($tag->getCategoryId());
                $fatherCategory = $this->categoryService->getCategoryById($categoryInfo->getPid());
                $navigation .= '<a href="/index/index?category_id=' . $fatherCategory->getId() . '">' . $fatherCategory->getName() . '</a>&gt;&nbsp;<a href="/index/index?categoryid=' . $categoryInfo->getId() . '">' . $categoryInfo->getName() . '</a>' . '</a>&gt;&nbsp;<a href="/index/index?tagid=' . $tag->getId() . '">' . $tag->getName() . '</a></h2>';
                $categoryid = $fatherCategory->getId();
            } else {
                // TODO 错误的tag
            }
        } else if (!empty($categoryId)) { // 直接查询频道的数据
            $categoryInfo = $this->categoryService->getCategoryById($categoryId);
            if (empty($categoryInfo)) {
                // TODO 错误的分类
            } else if ($categoryInfo->getDepth() == Category::SECOND_CATEGORY_DEPTH) {
                $fatherCategory = $this->categoryService->getCategoryById($categoryInfo->getPid());
                $categoryid = $fatherCategory->getId();
                $navigation .= '<a href="/index/index?categoryid=' . $fatherCategory->getId() . '">' . $fatherCategory->getName() . '</a>&gt;&nbsp;<a href="/index/index?categoryid=' . $categoryInfo->getId() . '">' . $categoryInfo->getName() . '</a></h2>';
            } else {
                $navigation .= '<a href="/index/index?categoryid=' . $categoryInfo->getId() . '">' . $categoryInfo->getName() . '</a>&gt;&nbsp;最新文章</h2>';
                $categoryid = $categoryInfo->getId();
            }
        } else { // 显示首页的数据
            $navigation .= '<a href="/">首页</a>&gt;&nbsp;最新文章</h2>';
        }
        return array(
            'categoryid' => $categoryid,
            'navigation' => $navigation 
        );
    }
}
