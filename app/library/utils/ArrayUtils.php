<?php

namespace library\utils;

class ArrayUtils {
    
    /**
     * 对数组进行补齐
     * 
     * @param array $array            
     * @param int $num            
     * @param mix $obj            
     * @return array
     * @author zhouwei
     */
    public static function padArray($array, $num, $obj = '') {
        $length = count ( $array );
        if ($length >= $num) {
            return $array;
        } else {
            $i = $num - $length;
            while ( $i > 0 ) {
                array_push ( $array, $obj );
                $i --;
            }
            return $array;
        }
    }
}
