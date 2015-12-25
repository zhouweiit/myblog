<?php

namespace models\blog;

class Links {
    
    /**
     * 自增主键ID
     *
     * @var int
     */
    private $id;
    
    /**
     * 友情连接的名称
     *
     * @var int
     */
    private $name;
    
    /**
     * 友情连接的地址
     *
     * @var string
     */
    private $url;
    
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
            'url' => 'url',
            'name' => 'name',
            'is_delete' => 'isDelete',
            'creation_date' => 'creationDate',
            'last_changed_date' => 'lastChangedDate' 
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
     * @return the $name
     */
    public function getName(){
        return $this->name;
    }
    
    /**
     *
     * @return the $url
     */
    public function getUrl(){
        return $this->url;
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
     * @param
     *            Ambigous <number, string> $name
     */
    public function setName($name){
        $this->name = $name;
    }
    
    /**
     *
     * @param string $url            
     */
    public function setUrl($url){
        $this->url = $url;
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
