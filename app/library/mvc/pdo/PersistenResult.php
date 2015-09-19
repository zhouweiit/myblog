<?php

namespace library\mvc\pdo;

use Phalcon\Db\Result\Pdo;
use Phalcon\Db\ResultInterface;
use Phalcon\Db;
class PersistenResult {
	
	/**
	 * 对象映射类型常量
	 * @var int
	 */
	const ORM_OBJECT = 1;
	
	/**
	 * 数组映射类型常量
	 * @var int
	 */
	const ORM_ARRAY = 2;
	
	/**
	 * 抓取一条
	 * @var int
	 */
	const FETCH_ONE = 1;
	
	/**
	 * 抓去所有
	 * @var int
	 */
	const FETCH_ALL = 2;
	
	/**
	 * @var Pdo
	 */
	private $pdoResult;
	
	/**
	 * 抓去方式
	 * @var int
	 */
	private $fetchMode;
	
	/**
	 * 构造函数
	 * @param ResultInterface|bool $result
	 * @param int $fetchModel
	 * @return void
	 * @author zhouwei17
	 */
	public function __construct($result,$fetchModel = 1){
		$this->pdoResult = $result;
		$this->pdoResult->setFetchMode(Db::FETCH_ASSOC);
		$this->fetchMode = $fetchModel;
	}
	
    /**
     * Fetches an array/object of strings that corresponds to the fetched row, or FALSE if there are no more rows.
     * This method is affected by the active fetch flag set using Phalcon\Db\Result\Pdo::setFetchMode
     * @param string $className
     * @return array|object
     * @author zhouwei17
     */
	public function fetchOne($className){
		$result = $this->pdoResult->fetch();
		if (false === $result){
			$result = array();
		}
		return $this->orm($result,$className,PersistenResult::FETCH_ONE);
	}

    /**
     * Returns an array of arrays containing all the records in the result
     * This method is affected by the active fetch flag set using Phalcon\Db\Result\Pdo::setFetchMode
     * @param string $className
     * @return array|object
     * @author zhouwei17 
     */
	public function fetchAll($className){
		$result = $this->pdoResult->fetchAll();
		return $this->orm($result, $className,PersistenResult::FETCH_ALL);
	}
	
	/**
	 * 获取映射后的结果
	 * @param string $className
	 * @param array $result
	 * @param int $fetchType 抓去一条还是多条
	 * @return Object | array
	 * @author zhouwei17
	 */
	private function orm(&$result,$className,$fetchType){
		if (empty($className)){
			throw new ExceptionOrm('ORM映射的类名称不能为空');
		}
		$objectOrm = new ObjectOrm($result,$this->fetchMode,$className,$fetchType);
		return $objectOrm->ormObject();
	}

    /**
     * Changes the fetching mode affecting Phalcon\Db\Result\Pdo::fetch()
     *
     * @param int $fetchMode 
     * @return PersistenResult
     * @author zhouwei17
     */
	public function setFetchMode($fetchMode){
		$this->fetchMode = $fetchMode;
		return $this;
	}
}
