<?php

namespace models\common;

/**
 *
 * 特殊的数据库字段集合
 *
 * @author zhouwei
 *        
 */
class SpecialColumn {
    
    /**
     * 总行数
     *
     * @var int
     */
    private $count;
    public static function columnMap() {
        return array (
            'count' => 'count' 
        );
    }
    
    /**
     *
     * @return the $count
     */
    public function getCount() {
        return $this->count;
    }
    
    /**
     *
     * @param number $count            
     */
    public function setCount($count) {
        $this->count = $count;
    }
}