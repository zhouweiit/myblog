<?php

namespace library\utils;

class NumUtils {
    
    /**
     * 传入数字，若为null，则返回默认值
     *
     * @param number $num            
     * @param number $default            
     * @return number
     * @author zhouwei
     */
    public static function getNullDefault($num, $default = 0) {
        if (isset ( $num )) {
            return $num;
        }
        return $default;
    }
}

