<?php

namespace library\utils;

class RsaUtils {
    
    /**
     * 根据私有key得到资源信息
     *
     * @param string $privatKey            
     * @return resource on sucess or false on error
     * @author zhouwei
     */
    public static function opensslPkeyGetPrivate($privatKey){
        return openssl_pkey_get_private($privatKey);
    }
    
    /**
     * 根据公有key得到资源信息
     *
     * @param string $publicKey            
     * @return resource on sucess or false on error
     * @author zhouwei
     */
    public static function opensslPkeyGetPublic($publicKey){
        return openssl_pkey_get_public($publicKey);
    }
    
    /**
     * 根据私有key资源实现加密
     *
     * @param string $data            
     * @param string $privateKey            
     * @param boolean $base64Encode            
     * @return boolean|string
     * @author zhouwei
     */
    public static function opensslPrivateEncrypt($data, $privateKey, $base64Encode = true){
        $privateKey = self::opensslPkeyGetPrivate($privateKey);
        if (false === $privateKey) {
            return false;
        }
        $encrypted = '';
        if (false === openssl_private_encrypt($data,$encrypted,$privateKey)) {
            return false;
        }
        if ($base64Encode === true) {
            $encrypted = base64_encode($encrypted);
        }
        return $encrypted;
    }
    
    /**
     * 根据共有key进行解密
     *
     * @param string $data            
     * @param string $publicKey            
     * @param boolean $base64Encode            
     * @return boolean|string
     * @author zhouwei
     */
    public static function opensslPublicDecrypt($data, $publicKey, $base64Encode = true){
        $publicKey = self::opensslPkeyGetPublic($publicKey);
        if (false === $publicKey) {
            return false;
        }
        $encrypted = '';
        if ($base64Encode === true) {
            $data = base64_decode($data);
        }
        if (false === openssl_public_decrypt($data,$encrypted,$publicKey)) {
            return false;
        }
        return $encrypted;
    }
    
    /**
     * 根据共有key资源实现加密
     *
     * @param string $data            
     * @param string $publicKey            
     * @param boolean $base64Encode            
     * @return boolean|string
     * @author zhouwei
     */
    public static function opensslPublicEncrypt($data, $publicKey, $base64Encode = true){
        $publicKey = self::opensslPkeyGetPublic($publicKey);
        if (false === $publicKey) {
            return false;
        }
        $encrypted = '';
        if (false === openssl_public_encrypt($data,$encrypted,$publicKey)) {
            return false;
        }
        if ($base64Encode === true) {
            $encrypted = base64_encode($encrypted);
        }
        return $encrypted;
    }
    
    /**
     * 根据私有key进行解密
     *
     * @param string $data            
     * @param string $privateKey            
     * @param boolean $base64Encode            
     * @return boolean|string
     * @author zhouwei
     */
    public static function opensslPrivateDecrypt($data, $privateKey, $base64Encode = true){
        $privateKey = self::opensslPkeyGetPrivate($privateKey);
        if (false === $privateKey) {
            return false;
        }
        $encrypted = '';
        if ($base64Encode === true) {
            $data = base64_decode($data);
        }
        if (false === openssl_private_decrypt($data,$encrypted,$privateKey)) {
            return false;
        }
        return $encrypted;
    }
}
