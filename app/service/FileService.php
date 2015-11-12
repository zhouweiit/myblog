<?php

namespace service;

use library\mvc\ServiceBase;
use library\mvc\Log;
use dao\blog\FileDao;

class FileService extends ServiceBase {
    
    /**
     *
     * @var Log
     */
    private $log;
    
    /**
     * 
     * @var FileDao
     */
    private $fileDao;

    protected function init(){
        $this->log = $this->di->get('applicationLog');
        $this->fileDao = $this->di->get('dao\\blog\\FileDao');
    }
    
    /**
     * 根据条件获取文件列表信息
     * @param string $name          文件名称
     * @param float $sizeStart      文件大小的开始
     * @param float $sizeEnd        文件大小的结束
     * @param string $path          路径
     * @param datetime $creationDateStart   创建的开始时间
     * @param datetime $creationDateEnd     创建的结束时间
     * @param array $extension      文件扩展名
     * @param int $page             页码
     * @param int $pageSize         每页显示的条数
     * @param boolean $count        总数
     * @param int $orderby          排序字段,1:creation_date
     * @param boolean $asc          排序规则
     * @return array
     * @author zhouwei
     */
    public function getFileList($fileName = null,$sizeStart = null,$sizeEnd = null,$path = null,$creationDateStart = null,
            $creationDateEnd = null,array $extension = array(),$page = 0,$pageSize = 9,$orderBy = 1,$asc = true){
        $fileInfo = $this->fileDao->getFileList($fileName,$sizeStart,$sizeEnd,$path,$creationDateStart,$creationDateEnd,$extension,$page,$pageSize,false,$orderBy,false);
        $fileCount = $this->fileDao->getFileList($fileName,$sizeStart,$sizeEnd,$path,$creationDateStart,$creationDateEnd,$extension,$page,$pageSize,true,$orderBy);
        $result = array();
        foreach ( $fileInfo as $file ) {
            $result[$file->getId()] = $file;
        }
        return array(
            'files' => $result,
            'count' => $fileCount->getCount(),
        );
    }
    
}
