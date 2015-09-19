<?php

namespace library\mvc\pdo;

use Phalcon\Db\Adapter\Pdo\Mysql;
class Persistent {
	
	/**
	 * 映射类型,1对象，2数组
	 * @var int
	 */
	private $ormType;
	
	/**
	 * @var Mysql
	 */
	private $pdo;
	
	/**
	 * 构造函数
	 * @param Mysql $pdo	PDO对象
	 * @param number $ormType	映射类型
	 * @return void
	 * @author zhouwei17
	 */
	public function __construct(Mysql $pdo,$ormType = 1){
		$this->pdo = $pdo;
		$this->ormType = $ormType;
	}
	
	/**
	 * 查询列表信息，只能用查询使用
	 * @param string $sqlStatement
	 * @param array $bindParams
	 * @param array $bindTypes
	 * @return PersistenResult
	 * @author zhouwei17
	 */
	public function query($sqlStatement, $bindParams = null, $bindTypes = null) {
		$result = $this->pdo->query($sqlStatement, $bindParams, $bindTypes);
		return new PersistenResult($result,$this->ormType);
	}
	
	/**
	 * 用作更新，插入与删除
	 * @param string $sqlStatement
	 * @param array $bindParams
	 * @param array $bindTypes
	 * @return boolean
	 * @author zhouwei17
	 */
	public function execute($sqlStatement, $bindParams = null, $bindTypes = null) {
		return $this->pdo->execute($sqlStatement,$bindParams,$bindTypes);
	}
	
	/**
	 * 影响的行数
	 * @return int
	 * @author zhouwei17
	 */
	public function affectedRows() {
		return $this->pdo->affectedRows();
	}

	/**
	 * 需要过滤的描述符
	 * @param array $identifier
	 * @return string
	 * @author zhouwei17
	 */
	public function escapeIdentifier($identifier) {
		return $this->pdo->escapeIdentifier($identifier);
	}

	/**
	 * SQL转移，避免SQL注入的风险
	 * @param string $str
	 * @return string
	 * @author zhouwei17
	 */
	public function escapeString($str) {
		return $this->pdo->escapeString($str);
	}

	/**
	 * 上次插入的自增的主键ID
	 * @return int
	 * @author zhouwei17
	 */
	public function lastInsertId() {
		return $this->pdo->lastInsertId();
	}

	/**
	 * 开始事务
	 * @return boolean
	 * @author zhouwei17
	 */
	public function begin() {
		return $this->pdo->begin();
	}

	/**
	 * 回滚事务
	 * @return boolean
	 * @author zhouwei17
	 */
	public function rollback() {
		return $this->pdo->rollback();
	}

	/**
	 * 提交事务
	 * @return boolean
	 * @author zhouwei17
	 */
	public function commit() {
		return $this->pdo->commit();
	}

	
}
