<?php
use Phalcon\Db\Adapter\Pdo\Mysql;
use library\mvc\RedisClient;
use library\mvc\pdo\Persistent;

// 设置redis
$di->setShared ( 'redisClient', function () use($applicationIni) {
    return new RedisClient ( $applicationIni, array (
            'host' => $applicationIni->redis->host,
            'port' => $applicationIni->redis->port 
    ), null, false );
} );

// 设置redisSession
$di->setShared ( 'redisSessionClient', function () use($applicationIni) {
    return new RedisClient ( $applicationIni, array (
            'host' => $applicationIni->redis->host,
            'port' => $applicationIni->redis->port 
    ), null, true );
} );

// 设置资产榜数据库的PDO
$di->setShared ( 'blog', function () use($applicationIni) {
    return new Mysql ( array (
            'host' => $applicationIni->blogDB->host,
            'username' => $applicationIni->blogDB->username,
            'password' => $applicationIni->blogDB->password,
            'dbname' => $applicationIni->blogDB->dbname,
            'charset' => 'utf8' 
    ) );
} );

// 设置资产数据库的持久层
$di->setShared ( 'blogPersistent', function () use($di) {
    return new Persistent ( $di->get ( 'blog' ) );
} );