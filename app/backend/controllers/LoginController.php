<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use library\utils\StringUtils;
use service\UserService;
use models\common\RsaKeys;
use service\RsaService;

class LoginController extends ControllerBase {
    
    /**
     * @var UserService
     */
    private $userService;
    
    /**
     * @var RsaKeys
     */
    private $rsaKeys;
    
    /**
     * @var RsaService
     */
    private $rsaService;
    
    private $session;
    
    protected function initialize(){
        $this->userService  = $this->di->get('UserService');
        $this->rsaKeys      = $this->di->get('RsaKeys');
        $this->rsaService   = $this->di->get('RsaService');
        $this->session      = $this->di->get('session');
    }
    
    /**
     * 用户登录页面
     * @return void
     * @author zhouwei17
     */
    public function indexAction(){
        if ($this->userService->isLogin()){
            $this->response->redirect("/backend/index/index");
        }
        $this->view->setVar('publickey', $this->rsaKeys->getPublicKey());
    }
    
    /**
     * 用户提交登录请求
     * @return void
     * @author zhouwei17
     */
    public function loginAction(){
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
        $username = $this->request->get('username');//用户名
        $password = $this->request->get('password');//密码
        $captcha  = $this->request->get('captcha');//验证码
        $result = 0;
        $this->session->start();
        
        $sessionCaptcha = $this->session->get('captcha');
        if ($sessionCaptcha === $captcha){
            $password = $this->rsaService->decrypt($password);//解密密码
            //1登录成功，2用户不存在，3用户密码错误，4验证码错误
            $result = $this->userService->login($username, $password);
        } else {
            $result = 4;//验证码错误
        }
        
        $this->response->setContent(json_encode(array('status' => $result)));
        $this->response->send();
    }
    
    /**
     * 用户登出请求
     * @return void
     */
    public function logoutAction(){
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
        $this->userService->logout();
    }
    
    /**
     * 生成验证码
     * @return void
     * @author zhouwei17
     */
    public function captchaAction(){
        $this->response->setHeader('content-type', 'image/png');
        $this->response->sendHeaders();
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
        $image = imagecreatetruecolor(114,35);//创建一个宽100，高度30的图片
        $bgcolor=imagecolorallocate($image,255,255,255);//图片背景是白色
        imagefill($image,0,0,$bgcolor);//图片填充白色
    
        //随机数据，下面的例子是随机数据，包括字母和数字
        $captcha = StringUtils::getRandString(4);
        $this->session->start();
        $this->session->set('captcha',implode('', $captcha));
        
        $i = 0;
        foreach ($captcha as $char){
            $x=($i++*100/4) + rand(5,10);
            $y=35/5 + rand(5,10);
            $fontcolor=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
            imagestring($image,20,$x,$y,$char,$fontcolor);
        }
    
        //随机点，生成干扰点
        for($i=0;$i<25;$i++){
            $pointcolor=imagecolorallocate($image,rand(50,120),rand(50,120),rand(50,120));
            imagesetpixel($image,rand(1,110),rand(1,110),$pointcolor);
        }
    
        //随机线，生成干扰线
        for($i=0;$i<1;$i++){
            $linecolor=imagecolorallocate($image,rand(80,220),rand(80,220),rand(80,220));
            imageline($image,rand(1,110),rand(1,110),rand(1,110),rand(1,110),$linecolor);
        }
    
        imagepng($image);
    }
    
}
