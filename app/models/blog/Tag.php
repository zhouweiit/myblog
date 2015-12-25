<?php

namespace models\blog;

class Tag {
    
    /**
     * 自增主键ID
     *
     * @var int
     */
    private $id;
    
    /**
     * 分类ID
     *
     * @var int
     */
    private $categoryId;
    
    /**
     * 分类名称
     *
     * @var string
     */
    private $name;
    
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
            'category_id' => 'categoryId',
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
     * @return the $categoryId
     */
    public function getCategoryId(){
        return $this->categoryId;
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
     * @param number $categoryId            
     */
    public function setCategoryId($categoryId){
        $this->categoryId = $categoryId;
    }
    
    /**
     *
     * @param string $name            
     */
    public function setName($name){
        $this->name = $name;
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
