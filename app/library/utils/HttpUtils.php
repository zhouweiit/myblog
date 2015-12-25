<?php

namespace library\utils;

class HttpUtils {
    /**
     * 过滤HTTP提交的字符串参数
     * @param string $value     
     * @param int $length       校验字符串的长度
     * @param string $default
     * @param array $filterVar 需要过滤的信息
     * @return string
     * @author zhouwei
     */
    public static function filterString($value,$length,$default = null,array $filterVar = array()){
        if (!isset($value)){
            return $default;
        }
        $value = trim($value);
        $value = strval($value);
        if (strlen($value) <= $length || in_array($value, $filterVar)){
            return $default;
        }
        return $value;
    }
    
    /**
     * 过滤http提交的日期类型
     * @param string $value         YYYY-mm-dd的格式
     * @param string $default
     * @param array $filterVar 需要过滤的信息
     * @return string
     * @author zhouwei
     */
    public static function filterDate($value,$default = null,array $filterVar = array()){
        if (!isset($value)){
            return $default;
        }
        $value = trim($value);
        $date = date('Y-m-d',strtotime($value));
        if ($date != $value || in_array($value, $filterVar)){
            return $default;
        }
        return $value;
    }
    
    /**
     * 过滤http提交的日期时间类型
     * @param string $value     YYYY-mm-dd HH24:mm
     * @param string $default
     * @param array $filterVar 需要过滤的信息
     * @return string
     * @author zhouwei
     */
    public static function filterDateTime($value,$default = null,array $filterVar = array()){
        if (!isset($value)){
            return $default;
        }
        $value = trim($value);
        $date = date('Y-m-d H:i',strtotime($value));
        if ($date != $value || in_array($value, $filterVar)){
            return $default;
        }
        return $value;
    }
    
    /**
     * 过滤http提交的int类型
     * @param int $value
     * @param string $default
     * @param array $filterVar 需要过滤的信息
     * @return string|number
     * @author zhouwei
     */
    public static function filterInt($value,$default = null,array $filterVar = array()){
        if (!is_numeric($value)){
            return $default;
        }
        $value = intval($value);
        if (in_array($value, $filterVar)){
            return $default;
        }
        return $value;
    }
    
    /**
     * 过滤http提交的float类型
     * @param int $value
     * @param string $default
     * @param array $filterVar 需要过滤的信息
     * @return string|number
     * @author zhouwei
     */
    public static function filterFloat($value,$default = null,array $filterVar = array()){
        if (!is_numeric($value)){
            return $default;
        }
        $value = floatval($value);
        if (in_array($value, $filterVar)){
            return $default;
        }
        return $value;
    }
    
}
