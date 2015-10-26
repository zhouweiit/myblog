<?php

namespace library\utils;

class MathUtils {
    
    /**
     * 传入一个浮点数，根据保留的位数返回
     *
     * @param float $num            
     * @param int $places            
     * @return flaot
     * @author zhouwei
     */
    public static function round($num, $places) {
        return round ( $num, $places );
    }
}

