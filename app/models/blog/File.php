<?php

namespace models\blog;

class File {
    
    /**
     * 主键ID
     * 
     * @var int
     */
    private $id;
    
    /**
     * 文件名称
     * 
     * @var string
     */
    private $fileName;
    
    /**
     * 文件路径
     * 
     * @var string
     */
    private $path;
    
    /**
     * 文件大小
     * 
     * @var int
     */
    private $size;
    
    /**
     * 文件扩展名
     * 
     * @var string
     */
    private $extension;
    
    /**
     * 是否删除
     *
     * @var int
     */
    private $isDelete;
    
    /**
     * 插入表的时间
     *
     * @var date
     */
    private $creationDate;
    
    /**
     * 上次修改时间
     *
     * @var date
     */
    private $lastChangedDate;
    
    public static function columnMap(){
        return array(
            'id' => 'id',
            'file_name' => 'fileName',
            'path' => 'path',
            'size' => 'size',
            'extension' => 'extension',
            'is_delete' => 'isDelete',
            'creation_date' => 'creationDate',
            'last_changed_date' => 'lastChangedDate',
        );
    }
    
    /**
     *
     * @return the $id
     */
    public function getId(){
        return $this->id;
    }
    
    /**
     *
     * @return the $fileName
     */
    public function getFileName(){
        return $this->fileName;
    }
    
    /**
     *
     * @return the $path
     */
    public function getPath(){
        return $this->path;
    }
    
    /**
     *
     * @return the $size
     */
    public function getSize(){
        return $this->size;
    }
    
    /**
     *
     * @return the $extension
     */
    public function getExtension(){
        return $this->extension;
    }
    
    /**
     *
     * @return the $isDelete
     */
    public function getIsDelete(){
        return $this->isDelete;
    }
    
    /**
     *
     * @return the $creationDate
     */
    public function getCreationDate(){
        return $this->creationDate;
    }
    
    /**
     *
     * @return the $lastChangedDate
     */
    public function getLastChangedDate(){
        return $this->lastChangedDate;
    }
    
    /**
     *
     * @param number $id            
     */
    public function setId($id){
        $this->id = $id;
    }
    
    /**
     *
     * @param string $fileName            
     */
    public function setFileName($fileName){
        $this->fileName = $fileName;
    }
    
    /**
     *
     * @param string $path            
     */
    public function setPath($path){
        $this->path = $path;
    }
    
    /**
     *
     * @param number $size            
     */
    public function setSize($size){
        $this->size = $size;
    }
    
    /**
     *
     * @param string $extension            
     */
    public function setExtension($extension){
        $this->extension = $extension;
    }
    
    /**
     *
     * @param number $isDelete            
     */
    public function setIsDelete($isDelete){
        $this->isDelete = $isDelete;
    }
    
    /**
     *
     * @param \models\blog\date $creationDate            
     */
    public function setCreationDate($creationDate){
        $this->creationDate = $creationDate;
    }
    
    /**
     *
     * @param \models\blog\date $lastChangedDate            
     */
    public function setLastChangedDate($lastChangedDate){
        $this->lastChangedDate = $lastChangedDate;
    }
}
