<?php

namespace models\blog;

/**
 * 用户表
 * @author zhouwei
 *
 */
class User {
    
    /**
     * 自增主键ID
     * @var int
     */
    private $id;
    
    /**
     * 登录用户名
     * @var string
     */
    private $name;
    
    /**
     * 用户密码
     * @var string
     */
    private $password;
    
    /**
     * 昵称
     * @var string
     */
    private $nicename;
    
    /**
     * 用户状态
     * @var string
     */
    private $status;
    
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
    	    'name'				=> 'name',
    	    'password'			=> 'password',
    	    'nicename'			=> 'nicename',
    	    'status'			=> 'status',	
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
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $password
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @return the $nicename
	 */
	public function getNicename() {
		return $this->nicename;
	}

	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
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
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param string $password
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * @param string $nicename
	 */
	public function setNicename($nicename) {
		$this->nicename = $nicename;
	}

	/**
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
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