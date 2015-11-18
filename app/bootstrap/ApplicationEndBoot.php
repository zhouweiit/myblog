<?php
//判断是否是调用数据库管理器，这个比较特殊，不用参考
if (ADMINER === true){
    require_once ROOT.'/app/library/adminer.php';
}
