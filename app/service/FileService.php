<?php

namespace service;

use library\mvc\ServiceBase;
use library\mvc\Log;
use dao\blog\FileDao;
use models\blog\File;

class FileService extends ServiceBase {
    
    const IMAGE_FOLDER = 'image';
    
    const OTHER_FOLDER = 'other';
    
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
    
    /**
     * @var string
     */
    private $uploadFilePath;

    /**
     * 相对路径
     * @var string
     */
    private $relativePath;
    
    protected function init(){
        $this->log      = $this->di->get('applicationLog');
        $this->fileDao  = $this->di->get('dao\\blog\\FileDao');
        $this->uploadFilePath = ROOT.'/public/upload';
        $this->relativePath = '/upload';
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
    
    /**
     * 插入一条file
     * @param string $fileName
     * @param int $size
     * 
     * @return int  插入的file的新ID
     * @author zhouwei
     */
    public function insertFile($fileName,$path,$size,$extension){
        $file = new File();
        $file->setFileName($fileName);
        $file->setPath($path);
        $file->setSize($size);
        $file->setExtension($extension);
        return $this->fileDao->insert($file);
    }
    
    /**
     * 获取文件存的文件夹
     * @param string $fileName
     * @param string $extension
     * @return string
     * @author zhouwei
     */
    public function createPath($fileName,$extension){
        $folder = null;
        switch ($extension){
            case 'jpg':$folder = FileService::IMAGE_FOLDER;break;
            case 'png':$folder = FileService::IMAGE_FOLDER;break;
            case 'jpeg':$folder = FileService::IMAGE_FOLDER;break;
            case 'gif':$folder = FileService::IMAGE_FOLDER;break;
            default : $folder = FileService::OTHER_FOLDER;
        }
        $date = date('Y_m');
        $fileName = time().$fileName;
        $dir = $this->uploadFilePath.'/'.$folder.'/'.$date;
        if (!is_dir($dir)){
            mkdir($dir);
        }
        return array(
            'fullpath'      => $dir.'/'.$fileName,
            'relativepath'  => $this->relativePath .'/' .$folder.'/'.$date .'/' .$fileName,
        );
    }
    
    /**
     * 根据文件获取文件的扩展名
     * @param string $fileName
     * @return string
     * @author zhouwei
     */
    public function getExtension($fileName){
        $result = explode('.', $fileName);
        return strtolower(array_pop($result));
    }
}
