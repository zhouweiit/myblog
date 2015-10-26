<?php
use Phalcon\Loader;

// 自动加载
$loader = new Loader ();

// 根据路径自动加载
$loader->registerDirs ( array (
        ROOT . '/app/library/smarty' 
), true );

// 根据命名空间自动加载
$loader->registerNamespaces ( array (
    'library' => ROOT . '/app/library/',
    'Predis' => ROOT . '/app/library/Predis/',
    'models' => ROOT . '/app/models/',
    'dao' => ROOT . '/app/dao/',
    'service' => ROOT . '/app/service/',
    'plugin' => ROOT . '/app/plugin/',
    'task' => ROOT . '/app/task/' 
), true );

$loader->register ();