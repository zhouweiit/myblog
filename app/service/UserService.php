<?php

namespace service;

use library\mvc\ServiceBase;
use library\mvc\Log;
use Phalcon\Http\Response\Cookies;
use Phalcon\Flash\Session;
use dao\blog\UserDao;

class UserService extends ServiceBase {
    
    /**
     *
     * @var Log
     */
    private $log;
    
    /**
     *
     * @var Cookies
     */
    private $cookies;
    
    /**
     * @var Session
     */
    private $session;
    
    /**
     * @var UserDao
     */
    private $userDao;
    
    protected function init(){
        $this->log      = $this->di->get('applicationLog');
        $this->cookies  = $this->di->get('cookies');
        $this->session	= $this->di->get('session');
        $this->userDao  = $this->di->get('dao\\blog\\UserDao');
    }
    
    /**
     * 获取评论人员的cookie信息
     *
     * @return array
     * @author zhouwei
     */
    public function getUserCookies(){
        $username = $this->cookies->get('username')->getValue();
        $useremail = $this->cookies->get('useremail')->getValue();
        if (empty($username)) {
            return array();
        } else if (empty($useremail)) {
            return array(
                'username' => $username 
            );
        } else {
            return array(
                'username' => $username,
                'useremail' => $useremail 
            );
        }
    }
    
    /**
     * 设置用户的cookies信息
     *
     * @return array
     * @author zhouwei
     */
    public function setUserCookies($name, $email){
        if (!empty($name) && !empty($email)) {
            $this->cookies->set('username',$name,time() + 3600 * 24 * 365);
            $this->cookies->set('useremail',$email,time() + 3600 * 24 * 365);
        }
    }
    
    /**
     * 用户登录
     * @param string $username
     * @param string $password
     * @return number  1成功，2用户不存在，3密码错误
     * @author zhouwei
     */
    public function login($username,$password){
        $this->session->start();
        $userInfo = $this->userDao->getUserByName($username);
        if (empty($userInfo)){
            return 2;
        }
        if ($userInfo->getPassword() == md5($password)){
            return 1;
        }
        $this->session->set('isLogin',true);
        return 3;
    }
    
    /**
     * 校验是否已经登录
     * 
     * @return boolean
     * @author zhouwei
     */
    public function isLogin(){
        $this->session->start();
        if (true === $this->session->get('isLogin')){
            return true;
        }
        return false;
    }
    
    /**
     * 登出
     * @return void
     * @author zhouwei
     */
    public function logout(){
        $this->session->start();
        $this->session->destroy();
    }
}