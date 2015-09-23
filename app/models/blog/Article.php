<?php

namespace models\blog;

/**
 * 文章类
 * @author zhouwei
 */
class Article {
    
    /**
     * 主键ID
     * @var int
     */
    private $id;
    
    /**
     * 主题
     * @var string
     */
    private $title;
    
    /**
     * 内容
     * @var string
     */
    private $content;
    
    /**
     * 用户id
     * @var int
     */
    private $userId;
    
    /**
     * 文章分类ID
     * @var int
     */
    private $categorId;
    
    /**
     * 列表页图片
     */
    private $headimage;
    
    /**
     * 阅读次数
     * @var int
     */
    private $readTimes;
    
    /**
     * 文章的tag
     * @var string
     */
    private $tag;
    
    /**
     * 发布的时间
     * @var date
     */
    private $releaseDatetime;
    
    /**
     * 是否删除
     * @var int
     */
    private $isDelete;
    
    /**
     * 插入表的时间
     * @var date
     */
    private $creationDate;
    
    /**
     * 上次修改时间
     * @var date
     */
    private $lastChangedDate;
    
    public static function columnMap(){
    	return array(
    		'id' 				=> 'id',
    		'title' 			=> 'title',
    		'content' 			=> 'content',
    		'user_id' 			=> 'userId',
    		'category_id' 		=> 'categoryId',
    		'headimage'			=> 'headimage',
    		'readTimes' 		=> 'readTimes',
    		'tag' 				=> 'tag',
    		'releaseDatetime' 	=> 'releaseDatetime',
    		'is_delete' 		=> 'isDelete',
    	    'creation_date'		=> 'creationDate',
    	   	'last_changed_date'	=> 'lastChangedDate',
    	);
    }
    
	/**
	 * @return the $headimage
	 */
	public function getHeadimage() {
		return $this->headimage;
	}

	/**
	 * @param field_type $headimage
	 */
	public function setHeadimage($headimage) {
		$this->headimage = $headimage;
	}

	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return the $content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @return the $userId
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * @return the $categorId
	 */
	public function getCategorId() {
		return $this->categorId;
	}

	/**
	 * @return the $readTimes
	 */
	public function getReadTimes() {
		return $this->readTimes;
	}

	/**
	 * @return the $tag
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * @return the $releaseDatetime
	 */
	public function getReleaseDatetime() {
		return $this->releaseDatetime;
	}

	/**
	 * @return the $isDelete
	 */
	public function getIsDelete() {
		return $this->isDelete;
	}

	/**
	 * @return the $creationDate
	 */
	public function getCreationDate() {
		return $this->creationDate;
	}

	/**
	 * @return the $lastChangedDate
	 */
	public function getLastChangedDate() {
		return $this->lastChangedDate;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @param field_type $content
	 */
	public function setContent($content) {
		$this->content = $content;
	}

	/**
	 * @param field_type $userId
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}

	/**
	 * @param field_type $categorId
	 */
	public function setCategorId($categorId) {
		$this->categorId = $categorId;
	}

	/**
	 * @param field_type $readTimes
	 */
	public function setReadTimes($readTimes) {
		$this->readTimes = $readTimes;
	}

	/**
	 * @param field_type $tag
	 */
	public function setTag($tag) {
		$this->tag = $tag;
	}

	/**
	 * @param field_type $releaseDatetime
	 */
	public function setReleaseDatetime($releaseDatetime) {
		$this->releaseDatetime = $releaseDatetime;
	}

	/**
	 * @param field_type $isDelete
	 */
	public function setIsDelete($isDelete) {
		$this->isDelete = $isDelete;
	}

	/**
	 * @param field_type $creationDate
	 */
	public function setCreationDate($creationDate) {
		$this->creationDate = $creationDate;
	}

	/**
	 * @param field_type $lastChangedDate
	 */
	public function setLastChangedDate($lastChangedDate) {
		$this->lastChangedDate = $lastChangedDate;
	}

}