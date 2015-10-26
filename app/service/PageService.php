<?php

namespace service;

use library\mvc\ServiceBase;

class PageService extends ServiceBase {
    
    /**
     *
     * @var Log
     */
    private $log;
    protected function init() {
        $this->log = $this->di->get ( 'applicationLog' );
    }
    
    /**
     * 根据数据，生成需要分页的数组
     *
     * @param int $countNum            
     * @param int $nowpage            
     * @param int $pageSize            
     * @return array
     * @author zhouwei
     */
    public function createPageArray($countNum, $nowpage, $pageSize) {
        $count = ceil ( $countNum / $pageSize );
        $pagesArray = array ();
        if ($count <= 9) { // 总页数小于等于9
            for($i = 1; $i <= $count; $i ++) {
                if ($i == $nowpage) {
                    $pagesArray [] = array (
                        'type' => '2',
                        'value' => $i 
                    );
                } else {
                    $pagesArray [] = array (
                        'type' => '1',
                        'value' => $i 
                    );
                }
            }
        } else { // 总页数大于9
            if ($nowpage <= 4) { // 左边无省略号
                
                for($i = 1; $i <= 7; $i ++) {
                    
                    if ($i == $nowpage) {
                        $pagesArray [] = array (
                            'type' => '2',
                            'value' => $i 
                        );
                    } else {
                        $pagesArray [] = array (
                            'type' => '1',
                            'value' => $i 
                        );
                    }
                }
                $pagesArray [] = array (
                    'type' => '3',
                    'value' => '...' 
                );
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => $count 
                );
            } else if ($nowpage >= $count - 3) { // 右边无省略号
                
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => 1 
                );
                $pagesArray [] = array (
                    'type' => '3',
                    'value' => '...' 
                );
                for($i = $count - 6; $i <= $count; $i ++) {
                    if ($i == $nowpage) {
                        $pagesArray [] = array (
                            'type' => '2',
                            'value' => $i 
                        );
                    } else {
                        $pagesArray [] = array (
                            'type' => '1',
                            'value' => $i 
                        );
                    }
                }
            } else { // 左右两边都有省略号
                
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => 1 
                );
                $pagesArray [] = array (
                    'type' => '3',
                    'value' => '...' 
                );
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => $nowpage - 2 
                );
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => $nowpage - 1 
                );
                $pagesArray [] = array (
                    'type' => '2',
                    'value' => $nowpage 
                );
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => $nowpage + 1 
                );
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => $nowpage + 2 
                );
                $pagesArray [] = array (
                    'type' => '3',
                    'value' => '...' 
                );
                $pagesArray [] = array (
                    'type' => '1',
                    'value' => $count 
                );
            }
        }
        return $pagesArray;
    }
    
    /**
     * 根据传递的参数生成
     *
     * @param array $params            
     * @param string $baseUrl
     *            所需要跳转的url
     * @param array $filterParams
     *            需要过滤掉的参数信息
     * @return string
     * @author zhouwei
     */
    public function createPageUrl(array $params, $baseUrl = '/', array $filterParams = array('p','page','_url')) {
        $paramUrl = '?';
        foreach ( $params as $key => $param ) {
            if (in_array ( $key, $filterParams )) {
                continue;
            }
            $paramUrl .= $key . '=' . urlencode ( $param ) . '&';
        }
        return $baseUrl . $paramUrl;
    }
}
