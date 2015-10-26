<?php

namespace library\mvc\pdo;

/**
 * 数据库映射
 * @author zhouwei17
 *
 */
class ObjectOrm {
	
	/**
	 * 类名，如果有命名空间，需要包含命名空间
	 * @var string
	 */
	private $className;
	
	/**
	 * 抓去的模式
	 * @var int
	 */
	private $fetchModel;
	
	/**
	 * 数据库结果
	 * @var array
	 */
	private $result;
	
	/**
	 * 是否抓取一个
	 * @var boolean
	 */
	private $fetchType = false;
	
	/**
	 * @var \ReflectionClass
	 */
	private $reflectionClass;
	
	/**
	 * 类中的字段与属性的map信息
	 * @var array
	 */
	private $columnMap;
	
	/**
	 * 查询出来的数据库字段名称
	 * @var array
	 */
	private $fields;
	
	/**
	 * 根据数据库字段匹配出的对象属性
	 * @var array
	 */
	private $properties = array();
	
	/**
	 * 反射出来的对象属性的set方法
	 * @var array
	 */
	private $methods = array();
	
	/**
	 * @param string $className
	 * @param array $result
	 * @return void
	 * @author zhouwei17
	 */
	public function __construct(&$result,$fetchModel,$className,$fetchType){
		$this->className = $className;
		$this->result = $result;
		$this->fetchModel = $fetchModel;
		$this->fetchType = $fetchType;
		$this->init();
	}
	
	/**
	 * 初始化
	 * @return void
	 * @author zhouwei17
	 */
	private function init(){
		$this->setReflectionCalss();
		$this->getColumnMap();
		$this->setFieldsByResult();
		$this->checkFieldIsExist();
		if (PersistenResult::ORM_OBJECT == $this->fetchModel){
			$this->getObjectSetMethod();
		}
	}
	
	/**
	 * 初始化反射类
	 * @throws ExceptionOrm
	 * @return void
	 * @author zhouwei17
	 */
	private function setReflectionCalss(){
		try {
			$this->reflectionClass = new \ReflectionClass($this->className);
		} catch (\Exception $e){
			throw new ExceptionOrm('类'.$this->className.'不存在');	
		}
	}
	
	/**
	 * 设置查询出来的数据库字段数组
	 * @return void
	 * @author zhouwei17
	 */
	private function setFieldsByResult(){
		if (empty($this->result)){
			$this->fields = array();
		} else if (isset($this->result[0]) && is_array($this->result[0])){
			$this->fields = array_keys($this->result[0]);
		} else {
			$this->fields = array_keys($this->result);
		}
	}
	
	/**
	 * 获取bean中字段与属性的对应关系
	 * @param string $className
	 * @throws ExceptionOrm
	 * @return array
	 * @author zhouwei17
	 */
	public function getColumnMap(){
		$method = new \ReflectionMethod($this->className,'columnMap');
		$columnMap = $method->invoke(null);
		if (empty($columnMap)){
			throw new ExceptionOrm($this->className.'的columnMap不存在或者为空');
		}
		$this->columnMap = $columnMap;
		try {
			$method = new \ReflectionMethod($this->className,'noStandardColumnMap');
			if (!empty($method)){
				$columnMap = $method->invoke(null);
				$this->columnMap = array_merge($this->columnMap,$columnMap);
			}
		} catch (\Exception $e){
		}
	}
	
	/**
	 * 校验查询很出来的字段名称是否在map中存在
	 * @param array $result
	 * @param array $column
	 * @throws ExceptionOrm
	 * @return void
	 * @author zhouwei17
	 */
	private function checkFieldIsExist(){
		foreach ($this->fields as $field){
			if (empty($this->columnMap[$field])){
				throw new ExceptionOrm('字段:'.$field.'未在'.$this->className.'的columnMap中找到或者为空');
			}
		}
	}
	
	/**
	 * 获object中的方法信息
	 * @return void
	 * @author zhouwei17
	 */
	private function getObjectSetMethod(){
		foreach ($this->fields as $field){
			$property = $this->columnMap[$field];
			$this->properties[$field] = $property;
			$this->methods[$property] = $this->checkMethodIsExist($this->createSetMethodNameByField($property));
		}
	}
	
	/**
	 * 结果映射对象
	 * @return object | array
	 * @author zhouwei17
	 */
	public function ormObject(){
		if (PersistenResult::FETCH_ONE === $this->fetchType){
			return PersistenResult::ORM_OBJECT == $this->fetchModel ? $this->objectOrm($this->result) : $this->arrayOrm($this->result);
		} else {
			$objects = array();
			foreach ($this->result as $value){
				$objects[] = PersistenResult::ORM_OBJECT == $this->fetchModel ? $this->objectOrm($value) : $this->arrayOrm($value);
			}
			return $objects;
		}
	}
	
	/**
	 * 根据一组值返回一个object对象
	 * @param array $result
	 * @return object
	 * @author zhouwei17
	 */
	private function objectOrm(array &$result){
		if (empty($result)){
			return null;
		}
		$object = $this->reflectionClass->newInstance();
		foreach ($result as $key => $value){
			$this->methods[$this->properties[$key]]->invoke($object,$value);
		}
		return $object;
	}
	
	/**
	 * 根据一组值返回一个数组
	 * @param array $result
	 * @return array
	 * @author zhouwei17
	 */
	private function arrayOrm(array $result){
		$array = array();
		foreach ($result as $key => $value){
			$array[$this->columnMap[$key]] = $value;
		}
		return $array;
	}
	
	/**
	 * 根据属性名称其对应的set的方法名称
	 * @param string $field
	 * @return string
	 * @author zhouwei17
	 */
	private function createSetMethodNameByField($field){
		return 'set'.ucfirst($field);
	}
	
	/**
	 * 校验类中方法是否存在
	 * @param string $methodName
	 * @param mix $method
	 * @throws ExceptionOrm
	 * @return \ReflectionMethod
	 * @author zhouwei17
	 */
	private function checkMethodIsExist($methodName){
		try {
			return $this->reflectionClass->getMethod($methodName);
		} catch (\Exception $e){
			throw new ExceptionOrm($this->className.'中不存在方法'.$methodName);
		}
	}
}