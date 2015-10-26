<?php

namespace library\mvc;

use Predis\Client;
use Phalcon\Config\Adapter\Ini;
use Phalcon\DiInterface;

/**
 * 集成phpredis的clent实现
 *
 * @author zhouwei
 */
class RedisClient extends Client {
    
    /**
     *
     * @var Ini
     */
    private $config;
    
    /**
     *
     * @var boolean
     */
    private $redisSession = false;
    
    /**
     *
     * @param string $parameters            
     * @param string $options            
     * @param DiInterface $di            
     * @param Ini $config            
     * @return void
     * @author zhouwei17
     */
    public function __construct($config, $parameters = null, $options = null, $redisSession = false) {
        parent::__construct ( $parameters, $options );
        $this->config = $config;
        $this->redisSession = $redisSession;
    }
    
    /**
     * 代理__call方法，如果应用层不开启redis，则直接退出方法，返回null
     *
     * @param string $commandID            
     * @param mix $arguments            
     * @return mix 静止后都是返回null，应用层注意check
     * @author zhouwei17
     */
    public function __call($commandID, $arguments) {
        if (1 === intval ( $this->config->application->isUseRedis ) || true === $this->redisSession) {
            return parent::__call ( $commandID, $arguments );
        }
        return null;
    }
}
