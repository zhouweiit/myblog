<?php

namespace library\utils;

class StringUtils {
    
    private static $htmlEntityMap = array(
        '&'     => '&amp;',
        '<'     => '&lt;',
        '>'     => '&gt;',
        '"'     => '&quot;',
        '\''    => '&#x27;',
        '/'     => '&#x2f;',
    );
    
    /**
     * 得到一个随机的char数组
     *
     * @param int $strlength            
     * @param string $strdata            
     * @return array
     * @author zhouwei
     */
    public static function getRandString($strlength, $strdata = 'abcdefghijkmnpqrstuvwxyz123456789'){
        $captchCode = array();
        for($i = 0; $i < $strlength; $i++) {
            $fontcontent = substr($strdata,rand(0,strlen($strdata) - 1),1);
            $captchCode[] = $fontcontent;
        }
        return $captchCode;
    }
    
    /**
     * 讲任何类型转为字符串
     *
     * @param mix $value            
     * @return string
     * @author zhouwei
     */
    public static function transferToString($value){
        if (is_null($value)) {
            return 'NULL';
        } else if (is_bool($value)) {
            if (true === $value) {
                return 'true';
            } else {
                return 'false';
            }
        } else if (is_object($value)) {
            try {
                $reflection = new \ReflectionClass($value);
                $method = $reflection->getMethod('__toString');
                return $value->__toString();
            } catch ( \Exception $e ) {
                return print_r($value,1);
            }
        } else if (is_array($value)) {
            return print_r($value,1);
        } else {
            return strval($value);
        }
    }
    
    /**
     * 过滤敏感词，讲字符串中的敏感词替换为*
     * @param int $str
     * @param array $filterWorld
     * @return string
     * @author zhouwei
     */
    public static function fitlerWords($str,array $filterWord = array()){
        if (empty($filterWord)){
            return $str;
        }
        foreach ($filterWord as $value){
            $value = trim($value);
            $str = str_replace($value, '***', $str);
        }
        return $str;
    }
    
    /**
     * 再自字符串中检索关键次，并返回
     * @param string $str
     * @param array $keyWord
     * @return array
     * @author zhouwei
     */
    public static function keyWords($str,array $keyWord = array()){
        if (empty($keyWord)){
            return array();
        }
        $result = array();
        foreach ($keyWord as $value){
            $value = trim($value);
            if (strpos($str,$value) !== false){
                $result[] = $value;
            }
        }
        return $result;
    }
    
    /**
     * 过滤html实体标签
     * @param string str
     * @return string
     * @author zhouwei
     */
    public static function filterHtmlEntity($str){
        $htmlEntityMap = self::$htmlEntityMap;
        foreach ($htmlEntityMap as $key => $value){
            $str = str_replace($key, $value, $str);
        }
        return $str;
    }
}
