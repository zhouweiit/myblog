<?php

namespace models\blog;

/**
 * 文章类
 *
 * @author zhouwei
 */
class Article {
    
    /**
     * 主键ID
     *
     * @var int
     */
    private $id;
    
    /**
     * 主题
     *
     * @var string
     */
    private $title;
    
    /**
     * 内容
     *
     * @var string
     */
    private $content;
    
    /**
     * 用户id
     *
     * @var int
     */
    private $userId;
    
    /**
     * 文章分类ID
     *
     * @var int
     */
    private $categoryId;
    
    /**
     * 列表页的内容
     *
     * @var string
     */
    private $headcontent;
    
    /**
     * 列表页图片
     *
     * @var string
     */
    private $headimage;
    
    /**
     * 评论的次数
     *
     * @var int
     */
    private $commentTimes;
    
    /**
     * 阅读次数
     *
     * @var int
     */
    private $readTimes;
    
    /**
     * 文章的tag
     *
     * @var string
     */
    private $tag;
    
    /**
     * 发布的时间
     *
     * @var date
     */
    private $releaseDatetime;
    
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
            'title' => 'title',
            'content' => 'content',
            'user_id' => 'userId',
            'category_id' => 'categoryId',
            'headcontent' => 'headcontent',
            'headimage' => 'headimage',
            'comment_times' => 'commentTimes',
            'read_times' => 'readTimes',
            'tag' => 'tag',
            'release_datetime' => 'releaseDatetime',
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
     * @return the $title
     */
    public function getTitle(){
        return $this->title;
    }
    
    /**
     *
     * @return the $content
     */
    public function getContent(){
        return $this->content;
    }
    
    /**
     *
     * @return the $userId
     */
    public function getUserId(){
        return $this->userId;
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
     * @return the $headcontent
     */
    public function getHeadcontent(){
        return $this->headcontent;
    }
    
    /**
     *
     * @return the $headimage
     */
    public function getHeadimage(){
        return $this->headimage;
    }
    
    /**
     *
     * @return the $commentTimes
     */
    public function getCommentTimes(){
        return $this->commentTimes;
    }
    
    /**
     *
     * @return the $readTimes
     */
    public function getReadTimes(){
        return $this->readTimes;
    }
    
    /**
     *
     * @return the $tag
     */
    public function getTag(){
        return $this->tag;
    }
    
    /**
     *
     * @return the $releaseDatetime
     */
    public function getReleaseDatetime(){
        return $this->releaseDatetime;
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
     * @param string $title            
     */
    public function setTitle($title){
        $this->title = $title;
    }
    
    /**
     *
     * @param string $content            
     */
    public function setContent($content){
        $this->content = $content;
    }
    
    /**
     *
     * @param number $userId            
     */
    public function setUserId($userId){
        $this->userId = $userId;
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
     * @param string $headcontent            
     */
    public function setHeadcontent($headcontent){
        $this->headcontent = $headcontent;
    }
    
    /**
     *
     * @param string $headimage            
     */
    public function setHeadimage($headimage){
        $this->headimage = $headimage;
    }
    
    /**
     *
     * @param number $commentTimes            
     */
    public function setCommentTimes($commentTimes){
        $this->commentTimes = $commentTimes;
    }
    
    /**
     *
     * @param number $readTimes            
     */
    public function setReadTimes($readTimes){
        $this->readTimes = $readTimes;
    }
    
    /**
     *
     * @param string $tag            
     */
    public function setTag($tag){
        $this->tag = $tag;
    }
    
    /**
     *
     * @param \models\blog\date $releaseDatetime            
     */
    public function setReleaseDatetime($releaseDatetime){
        $this->releaseDatetime = $releaseDatetime;
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