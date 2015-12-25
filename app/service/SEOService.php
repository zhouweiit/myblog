<?php

namespace service;

use library\mvc\ServiceBase;
use library\utils\StringUtils;
class SEOService extends ServiceBase{
    
    public function init(){
    }
    
    /**
     * 文章详情页的TDK优化
     * 
     * 
     * @return array
     * @author zhouwei
     */
    public function articleInfoTDK($articleInfo,$tag){
        $keywords = '';
        foreach ($tag as $value){
            $keywords .= '【'.$value['name'].'】,';
        }
        $keywords .= '【程序】';
        return array(
            'description' => StringUtils::filterHtmlEntity(mb_substr($articleInfo['content'],0,300,'utf-8')),
            'title'       => $articleInfo['title'],
            'keywords'    => $keywords,
        );        
    }
}
