<?php

namespace library\mvc;

use Phalcon\Di;
use Phalcon\Http\Response\Cookies;
use Phalcon\Session\AdapterInterface;
use library\utils\StringUtils;
/**
 * 实现phalcon的session，实现用redis作为session的容器
 * 
 * @author zhouwei
 */
class RedisSession implements AdapterInterface{
	
	/**
	 * redis中session的前缀
	 * @var string
	 */
	const REDIS_SESSION_PREFIX = 'session';
	
	/**
	 * @var Di
	 */
	private $di;
	
	/**
	 * @var string
	 */
	private $sessionId;
	
	/**
	 * redis的sessonkey
	 * @var string
	 */
	private $redisSessionKey;
	
	/**
	 * @var RedisClient
	 */
	private $redisClient;
	
	/**
	 * @var Cookies
	 */
	private $cookies;
	
	/**
	 * sessionid的名称
	 * @var string
	 */
	private $sessionName;
	
	/**
	 * session的过期时间
	 * @var int
	 */
	private $sessionTimeout;
	
	/**
	 * @var array
	 */
	private $options;
	
	/**
	 * session中的value
	 * @var array
	 */
	private $sessionValue;
	
	/**
	 * session中的值是否发生了改变
	 * @var boolean
	 */
	private $sessionValueChanged = false;
	
	/**
	 * @param Di $di
	 * @return void
	 * @author zhouwei17
	 */
	public function __construct(Di $di){
		$this->di = $di;
		$config = $this->di->get('configIni');
		$this->cookies = $this->di->get('cookies');
		$this->sessionName = $config->session->sessionIdName;
		$this->sessionTimeout = time() + $config->session->sessionTimeout;
	}
	
	/**
	 * 初始化session
	 * @return void
	 * @author zhouwei17
	 */
	private function initRedisSession (){
		if (!isset($this->sessionId) || empty($this->sessionId) || strlen($this->sessionId) !== 32){
			$this->sessionId = $this->createSessionId();
		}
		$this->redisSessionKey = RedisSession::REDIS_SESSION_PREFIX .'_'.$this->sessionId;
		$sessionValue = $this->redisClient->get($this->redisSessionKey);
		if (!empty($sessionValue)){
			$this->sessionValue = unserialize($sessionValue);
		}
		if (!is_array($this->sessionValue)){
			$this->sessionValue = array();
		}
	}
	
	/**
	 * 生成sessionId
	 * @return string
	 * @author zhouwei17
	 */
	private function createSessionId(){
	    return md5(implode('', StringUtils::getRandString(10)) . uniqid() . rand(10000000,999999999));   
	}
	
	/**
	 * 注册redis服务
	 * @return void
	 * @author zhouwei17
	 */
	private function registerRedisService(){
		$this->redisClient = $this->di->get('redisSessionClient');
	}
	
	/**
	 * 开启session服务
	 * @return void
	 * @author zhouwei17
	 */
	public function start() {
		if ($this->isStarted()){
			return;
		}
		$this->registerRedisService();
		$this->sessionId = $this->cookies->get($this->sessionName)->getValue();
		$this->initRedisSession();
		$this->cookies->set($this->sessionName,$this->sessionId,$this->sessionTimeout);
	}

	/**
	 * @param array $options
	 * @return void
	 * @author zhouwei
	 */
	public function setOptions(array $options) {
		$this->options = $options;
	}

	/**
	 * @return array
	 * @author zhouwei17
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * 从session中获取一个key的值
	 * @param string $key
	 * @param mix $value
	 * @return mix
	 * @author zhouwe17
	 */
	public function get($key, $defaultValue = null) {
		$value = $this->sessionValue[$key];
		return isset($value) ? $value : $defaultValue;
	}

	/**
	 * 设置一个session的值
	 * @param string $key
	 * @param mix	 $value 可以是任何类型，但是最好数据量不要太大，尤其不要将对象，特别是包含容器的phalcon对象
	 * @return booean
	 * @author zhouwei17
	 */
	public function set($key, $value) {
		if ($this->isStarted()){
			$this->sessionValueChanged = true;
			$this->sessionValue[$key] = $value;
			return true;
		}
		return false;
	}

	/**
	 * 判断session中是否包含一个值
	 * @param string $key
	 * @return boolean
	 * @author zhouwei17
	 */
	public function has($key) {
		if ($this->isStarted()){
			return array_key_exists($key, $this->sessionValue);
			return true;
		}
		return false;
	}

	/**
	 * 清除一个session的信息
	 * @param string $key
	 * @return boolean
	 * @author zhouwei17
	 */
	public function remove($key) {
		if ($this->isStarted()){
			$this->sessionValueChanged = true;
			unset($this->sessionValue[$key]);
			return true;
		}
		return false;
	}

	/**
	 * 获取sessionId
	 * @return string
	 * @author zhouwei17
	 */
	public function getId() {
		if ($this->isStarted()){
			return $this->sessionId;
		}
		return null;
	}

	/**
	 * 判断是否已经开始的session
	 * @return boolean
	 * @author zhouwei17
	 */
	public function isStarted() {
		if ($this->sessionId !== null){
			return true;
		}
		return false;
	}

	/**
	 * 清除session
	 * @return boolean true 成功,false失败
	 * @author zhouwei17
	 */
	public function destroy() {
		if ($this->isStarted()){
			$this->redisClient->del($this->redisSessionKey);
			$this->cookies->delete($this->sessionName);
			return true;
		}
		return false;
	}
	
	/**
	 * 将缓存中session的值持久话，注意，不要频繁调用，会造成与redis多次交互，也可以在结束后由服务统一持久
	 * 用户可以不用手动触发
	 * @return void
	 * @author zhouwei17
	 */
	public function flush(){
		if ($this->isStarted() && !empty($this->sessionValue)){
			if (true === $this->sessionValueChanged){
				$this->redisClient->set($this->redisSessionKey,serialize($this->sessionValue));
			}
			$this->redisClient->expire($this->redisSessionKey,$this->sessionTimeout);
		}
	}
	
	/**
	 * 得到所有的session_value
	 * @return array
	 * @author zhouwei17
	 */
	public function getSessionValue(){
		if (!isset($this->sessionValue)){
			return $this->sessionValue;
		}
		return array();
	}

}
