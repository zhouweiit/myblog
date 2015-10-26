<?php

namespace models\blog;

class ArticleTagMap {
    
    /**
     * 自增主键ID
     * 
     * @var int
     */
    private $id;
    
    /**
     * 文章ID
     * 
     * @var int
     */
    private $articleId;
    
    /**
     * 标签ID
     * 
     * @var int
     */
    private $tagId;
    
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
    public static function columnMap() {
        return array (
                'id' => 'id',
                'article_id' => 'articleId',
                'tag_id' => 'tagId',
                'is_delete' => 'isDelete',
                'creation_date' => 'creationDate',
                'last_changed_date' => 'lastChangedDate' 
        );
    }
    
    /**
     *
     * @return the $id
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     *
     * @return the $articleId
     */
    public function getArticleId() {
        return $this->articleId;
    }
    
    /**
     *
     * @return the $tagId
     */
    public function getTagId() {
        return $this->tagId;
    }
    
    /**
     *
     * @return the $isDelete
     */
    public function getIsDelete() {
        return $this->isDelete;
    }
    
    /**
     *
     * @return the $creationDate
     */
    public function getCreationDate() {
        return $this->creationDate;
    }
    
    /**
     *
     * @return the $lastChangedDate
     */
    public function getLastChangedDate() {
        return $this->lastChangedDate;
    }
    
    /**
     *
     * @param number $id            
     */
    public function setId($id) {
        $this->id = $id;
    }
    
    /**
     *
     * @param number $articleId            
     */
    public function setArticleId($articleId) {
        $this->articleId = $articleId;
    }
    
    /**
     *
     * @param number $tagId            
     */
    public function setTagId($tagId) {
        $this->tagId = $tagId;
    }
    
    /**
     *
     * @param number $isDelete            
     */
    public function setIsDelete($isDelete) {
        $this->isDelete = $isDelete;
    }
    
    /**
     *
     * @param \models\blog\date $creationDate            
     */
    public function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }
    
    /**
     *
     * @param \models\blog\date $lastChangedDate            
     */
    public function setLastChangedDate($lastChangedDate) {
        $this->lastChangedDate = $lastChangedDate;
    }
}