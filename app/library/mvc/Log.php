<?php

namespace library\mvc;

use Phalcon\Logger\Adapter\File;
use Phalcon\Config\Adapter\Ini;
use library\utils\StringUtils;
use Phalcon\Logger;

/**
 *
 * 使用debug,info,error
 *
 * @author zhouwei
 *        
 */
class Log {
    
    /**
     *
     * @var File
     */
    private $fileDebug;
    
    /**
     *
     * @var File
     */
    private $fileInfo;
    
    /**
     *
     * @var File
     */
    private $fileError;
    
    /**
     *
     * @var Ini
     */
    private $config;
    
    /**
     * 日志级别，1error,2info,3debug
     * 
     * @var int
     */
    private $logLevel = 3;
    
    /**
     * 是否使用日志
     * 
     * @var int
     */
    private $isUseLogFile = 0;
    
    /**
     * 是否出事日志
     * 
     * @var int
     */
    private $isEchoLog = 0;
    
    /**
     *
     * @var 日志文件夹
     */
    private $logDir = '/log';
    
    /**
     *
     * @var 唯一的流水号
     */
    private $serialNumber;
    
    /**
     * 前置名称
     * 
     * @var string
     */
    private $prefixName;
    
    /**
     * 配置信息
     * 
     * @param File $file            
     * @param Ini $config            
     * @return void
     * @author zhouwei17
     */
    public function __construct(Ini $config, $prefixName) {
        $this->config = $config;
        if (is_dir ( $this->config->application->root . $this->config->log->logDir )) {
            $this->logDir = $this->config->application->root . $this->config->log->logDir;
        } else {
            $this->logDir = $this->config->application->root . $this->logDir;
        }
        $this->logLevel = isset ( $config->log->logLevel ) ? intval ( $config->log->logLevel ) : 3;
        $this->isUseLogFile = isset ( $config->log->isUseLogFile ) ? intval ( $config->log->isUseLogFile ) : 0;
        $this->isEchoLog = isset ( $config->log->isEchoLog ) ? intval ( $config->log->isEchoLog ) : 0;
        $this->serialNumber = $config->application->serialNumber;
        $this->prefixName = $prefixName;
        $this->date = date ( 'Y-m-d' );
        $this->initLogFile ();
    }
    
    /**
     * 初始化日志文件
     * 
     * @return void
     * @author zhouwei17
     */
    private function initLogFile() {
        if (1 !== $this->isUseLogFile) {
            return;
        }
        $logLevel = Logger::ERROR;
        if ($this->logLevel >= 3) {
            $logLevel = Logger::DEBUG;
        } else if ($this->logLevel >= 2) {
            $logLevel = Logger::INFO;
        } else if ($this->logLevel >= 1) {
            $logLevel = Logger::ERROR;
        }
        $this->fileDebug = new File ( $this->logDir . '/' . $this->prefixName . '_debug.log' );
        $this->fileInfo = new File ( $this->logDir . '/' . $this->prefixName . '_info.log' );
        $this->fileError = new File ( $this->logDir . '/' . $this->prefixName . '_error.log' );
        $this->setLogLevel ( $logLevel );
    }
    
    /**
     * 设置日志级别
     * 
     * @param int $logLevel            
     * @return void
     * @author zhouwei17
     */
    private function setLogLevel($logLevel) {
        $this->fileDebug->setLogLevel ( $logLevel );
        $this->fileInfo->setLogLevel ( $logLevel );
        $this->fileError->setLogLevel ( $logLevel );
    }
    
    /**
     * 记录debug日志
     *
     * @param string $method
     *            请使用__METHOD__
     * @param
     *            mix 错误的日志信息或者对象
     * @param array $context
     *            占位符值
     * @return void
     * @author zhouwei17
     */
    public function debug($message, array $context = array(), $method = null) {
        $message = '[' . $this->serialNumber . ']' . StringUtils::transferToString ( $message );
        if ($method !== null) {
            $message = '[' . $method . ']' . $message;
        }
        if (1 === $this->isUseLogFile) {
            $message = $this->replaceMessageHolder ( $message, $context );
            $this->fileDebug->debug ( $message );
        }
    }
    
    /**
     * 记录info日志
     *
     * @param string $method
     *            请使用__METHOD__
     * @param
     *            mix 错误的日志信息或者对象
     * @param array $context
     *            占位符值
     * @return void
     * @author zhouwei17
     */
    public function info($message, array $context = array(), $method = null) {
        $message = '[' . $this->serialNumber . ']' . StringUtils::transferToString ( $message );
        if ($method !== null) {
            $message = '[' . $method . ']' . $message;
        }
        if (1 === $this->isUseLogFile) {
            $message = $this->replaceMessageHolder ( $message, $context );
            $this->fileInfo->info ( $message );
            if ($this->logLevel >= 3) {
                $this->fileDebug->info ( $message );
            }
        }
    }
    
    /**
     * 记录error日志
     *
     * @param string $method
     *            请使用__METHOD__
     * @param
     *            mix 错误的日志信息或者对象
     * @param array $context
     *            占位符值
     * @return void
     * @author zhouwei17
     */
    public function error($message, array $context = array(), $method = null) {
        $message = '[' . $this->serialNumber . ']' . StringUtils::transferToString ( $message );
        if ($method !== null) {
            $message = '[' . $method . ']' . $message;
        }
        if (1 === $this->isUseLogFile) {
            $message = $this->replaceMessageHolder ( $message, $context );
            $this->fileError->error ( $message );
            if ($this->logLevel >= 2) {
                $this->fileInfo->error ( $message );
            }
            if ($this->logLevel >= 3) {
                $this->fileDebug->error ( $message );
            }
        }
    }
    
    /**
     * 输出日志
     *
     * @param string $method
     *            请使用__METHOD__
     * @param
     *            mix 错误的日志信息或者对象
     * @param array $context
     *            占位符值
     * @return void
     * @author zhouwei17
     */
    public function echoLog($message, array $context = array(), $method = null) {
        if (1 === $this->isEchoLog) {
            $message = StringUtils::transferToString ( $message );
            $message = '[' . $method . ']' . $message;
            echo $this->replaceMessageHolder ( $message, $context );
        }
    }
    
    /**
     * 替换message的站维护
     * 
     * @param string $message            
     * @param array $context            
     * @return string
     * @author zhouwei17
     */
    private function replaceMessageHolder(&$message, array &$context = array()) {
        $messageArray = explode ( '{}', $message );
        if (count ( $messageArray ) === 1 || empty ( $context )) {
            return $message;
        }
        foreach ( $messageArray as $key => $value ) {
            if (count ( $context ) === 0) {
                break;
            }
            $messageArray [$key] = $value . strval ( StringUtils::transferToString ( array_shift ( $context ) ) );
        }
        return implode ( '', $messageArray );
    }
}
