<?php

namespace models\common;

class FileExtension {
    
    private static $fileExtension = array(
        'png','jpg','jpeg','gif','zip','rar','gz','txt','pdf','exe'
    );
    
    public static function getFileExtension(){
        return self::$fileExtension;
    }
}