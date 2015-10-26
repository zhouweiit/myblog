<?php

namespace library\utils;

class RedisUtils {
    
    /**
     * key之间分隔符号
     * 
     * @var string
     */
    const KEY_SEPERATOR = '@_@';
    
    /**
     * 传入参数，计算redis的key的信息,最后将除prefix之后的所有用MD5加密，如redisKeyprefix_md5
     * 
     * @param string $redisKey
     *            redis的前缀
     * @param
     *            string retainKey 该值不会被计算至MD5，如果有值，会直接连接在redisKeyPrefix之后
     * @param mix $keys
     *            不定长参数，可以输入多个key用来计算
     * @return string
     * @author zhouwei
     */
    public static function getRedisKey($redisKey, $retainKey = null, $keys = null) {
        $args = func_get_args ();
        $retainKey = $retainKey === null ? '' : $retainKey;
        unset ( $args [0], $args [1] );
        $otherKesStr = '';
        if (! empty ( $args )) {
            foreach ( $args as $key => $value ) {
                self::checkIsOrHaveObject ( $value );
                if (is_array ( $value )) {
                    $value = self::getArrayToString ( $value );
                }
                $args [$key] = strval ( $value );
            }
            sort ( $args );
            if (intval ( $redisKey->ismd5 ) === 1) {
                $otherKesStr = md5 ( implode ( '', $args ) );
            } else {
                $otherKesStr = implode ( '', $args );
            }
        }
        return $redisKey->key . RedisUtils::KEY_SEPERATOR . $retainKey . RedisUtils::KEY_SEPERATOR . $otherKesStr;
    }
    
    /**
     * 将数组排序后，连接成一个字符串
     * 
     * @param array $array            
     * @return string
     * @author zhouwei
     */
    private static function getArrayToString(array $array) {
        foreach ( $array as $key => $value ) {
            if (is_array ( $value )) {
                $value = self::getArrayToString ( $value );
            }
            $array [$key] = strval ( $value );
        }
        sort ( $array );
        return implode ( '', $array );
    }
    
    /**
     * 检查某个值是否含有对象
     * 
     * @param mix $value            
     * @throws \Exception
     * @return void
     * @author zhouwei
     */
    private static function checkIsOrHaveObject($value) {
        if (is_object ( $value )) {
            throw new \Exception ( 'rediskey 不能含有对象' );
        } else if (is_array ( $value )) {
            foreach ( $value as $v ) {
                self::checkIsOrHaveObject ( $v );
            }
        }
    }
}
