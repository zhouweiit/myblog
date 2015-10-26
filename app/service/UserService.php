<?php

namespace service;

use library\mvc\ServiceBase;
use library\mvc\Log;
use Phalcon\Http\Response\Cookies;

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
    protected function init() {
        $this->log = $this->di->get ( 'applicationLog' );
        $this->cookies = $this->di->get ( 'cookies' );
    }
    
    /**
     * 获取评论人员的cookie信息
     * 
     * @return array
     * @author zhouwei
     */
    public function getUserCookies() {
        $username = $this->cookies->get ( 'username' )->getValue ();
        $useremail = $this->cookies->get ( 'useremail' )->getValue ();
        if (empty ( $username )) {
            return array ();
        } else if (empty ( $useremail )) {
            return array (
                    'username' => $username 
            );
        } else {
            return array (
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
    public function setUserCookies($name, $email) {
        if (! empty ( $name ) && ! empty ( $email )) {
            $this->cookies->set ( 'username', $name, time () + 3600 * 24 * 365 );
            $this->cookies->set ( 'useremail', $email, time () + 3600 * 24 * 365 );
        }
    }
}