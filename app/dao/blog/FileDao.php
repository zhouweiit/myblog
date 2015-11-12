<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\utils\SqlUtils;
class FileDao extends DaoBase {
    
    /**
     *
     * @var Persistent
     */
    private $persistent;
    
    /**
     *
     * @var string
     */
    private $className = 'models\blog\File';
    
    /**
     *
     * @return void
     * @author zhouwei
     */
    protected function init(){
        parent::init();
        $this->persistent = $this->di->get('blogPersistent');
    }
    
    /**
     * 根据条件获取文件列表信息
     * @param string $name          文件名称
     * @param float $sizeStart      文件大小的开始
     * @param float $sizeEnd        文件大小的结束
     * @param string $path          路径
     * @param datetime $creationDateStart   创建的开始时间
     * @param datetime $creationDateEnd     创建的结束时间
     * @param array $extension      文件扩展名
     * @param int $page             页码
     * @param int $pageSize         每页显示的条数
     * @param boolean $count        总数
     * @param int $orderby          排序字段,1:creation_date
     * @param boolean $asc          排序规则
     * @return array
     * @author zhouwei
     */
    public function getFileList($fileName = null,$sizeStart = null,$sizeEnd = null,$path = null,$creationDateStart = null,
            $creationDateEnd = null,array $extension = array(),$page = 0,$pageSize = 9,$count = true,$orderBy = 1,$asc = true){
        if ($count) {
            $sql = 'select count(*) as count from file where is_delete = 0';
        } else {
            $sql = 'select * from file where is_delete = 0';
        }
        $data = array();
        if (isset($fileName)){
            $sql .= ' and file_name like ?';
            $data[] = '%'.$fileName.'%';
        }
        if (isset($sizeStart)){
            $sql .= ' and size >= ?';
            $data[] = $sizeStart;
        }
        if (isset($sizeEnd)){
            $sql .= ' and size <= ?';
            $data[] = $sizeEnd;
        }
        if (isset($path)){
            $sql .= ' and path like ?';
            $data[] = '%'.$path.'%';
        }
        if (isset($creationDateStart)){
            $sql .= ' and creation_date >= ?';
            $data[] = $creationDateStart;
        }
        if (isset($creationDateEnd)){
            $sql .= ' and creation_date <= ?';
            $data[] = $creationDateEnd;
        }
        if (!empty($extension)){
            $inSqlCondition = SqlUtils::getInSqlCondition($extension);
            $sql .= ' and extension in (' . $inSqlCondition['conditinSql'] . ')';
            $data = array_merge($data,$inSqlCondition['bindArray']);
        }
        
        $order = null;
        if ($orderBy == 1) {
            $order = 'creation_date';
        } else {
            $order = 'id';
        }
        
        $asc = null;
        if ($asc){
            $desc = 'asc';
        } else {
            $desc = 'desc';
        }
        
        if ($count) {
            $result = $this->persistent->query($sql,$data);
            return $result->fetchOne('models\common\SpecialColumn');
        } else {
            $sql .= ' order by ' . $order . ' ' .$desc;
            $sql .= ' limit ' . $page * $pageSize . ',' . $pageSize;
            $result = $this->persistent->query($sql,$data);
            return $result->fetchAll($this->className);
        }
        
    }
    
}
