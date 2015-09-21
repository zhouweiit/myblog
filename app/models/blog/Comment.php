<?php

namespace models\blog;

/**
 * 文章评论
 * @author zhouwei
 *
 */
class Comment {
    
    /**
     * 自增主键ID
     * @var int
     */
    private $id;
    
    /**
     * 文章ID
     * @var int
     */
    private $articleId;
    
    /**
     * 评论内容
     * @var string
     */
    private $content;
    
    /**
     * 引用的品论id
     * @var int
     */
    private $pid;
    
    /**
     * 发表评论的名称
     * @var string
     */
    private $name;
    
    /**
     * 用户的邮箱
     * @var string
     */
    private $email;
    
    /**
     * 评论发布时间
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
    		'article_id' 		=> 'articleId',
    		'content' 			=> 'content',
   			'pid' 				=> 'pid',
    		'name' 				=> 'name',
    		'email' 			=> 'email',
   			'releaseDatetime' 	=> 'releaseDatetime',
   			'is_delete' 		=> 'isDelete',
   			'creation_date'		=> 'creationDate',
   			'last_changed_date'	=> 'lastChangedDate',
    	);
    }
    
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $articleId
	 */
	public function getArticleId() {
		return $this->articleId;
	}

	/**
	 * @return the $content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @return the $pid
	 */
	public function getPid() {
		return $this->pid;
	}

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $email
	 */
	public function getEmail() {
		return $this->email;
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
	 * @param number $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param number $articleId
	 */
	public function setArticleId($articleId) {
		$this->articleId = $articleId;
	}

	/**
	 * @param string $content
	 */
	public function setContent($content) {
		$this->content = $content;
	}

	/**
	 * @param number $pid
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @param \models\blog\date $releaseDatetime
	 */
	public function setReleaseDatetime($releaseDatetime) {
		$this->releaseDatetime = $releaseDatetime;
	}

	/**
	 * @param number $isDelete
	 */
	public function setIsDelete($isDelete) {
		$this->isDelete = $isDelete;
	}

	/**
	 * @param \models\blog\date $creationDate
	 */
	public function setCreationDate($creationDate) {
		$this->creationDate = $creationDate;
	}

	/**
	 * @param \models\blog\date $lastChangedDate
	 */
	public function setLastChangedDate($lastChangedDate) {
		$this->lastChangedDate = $lastChangedDate;
	}
}