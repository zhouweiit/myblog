<?php
use Phalcon\Config\Adapter\Ini;
use Phalcon\Config;
use library\utils\StringUtils;

//加载环境
$environment = new Ini(ROOT . '/app/config/environment.ini');
$environmentPath = null;

//配置文件路径
if ('1' === $environment->environment->environment) {
    $environmentPath = 'online';
} else {
    if ('2' === $environment->environment->environment) {
        $environmentPath = 'testing';
    } else {
        $environmentPath = 'development';
    }
}

//application的配置信息
$applicationIni = new Ini(ROOT . '/app/config/' . $environmentPath . '/application.ini');

//合并ini属性
$applicationIni->merge($environment);
$createConfig = new Config(array(
    'application' => array(
        'root' => ROOT,
        'serialNumber' => md5(implode(StringUtils::getRandString(15),'') . uniqid()),
    ),
));
$applicationIni->merge($createConfig);
$di->setShared('configIni', $applicationIni);

//rediskey的配置文件
$redisKeyIni = new Ini(ROOT . '/app/config/' . $environmentPath . '/rediskey.ini');
$di->setShared('rediskey', $redisKeyIni);