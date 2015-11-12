<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use service\FileService;
use library\utils\HttpUtils;
use service\PageService;
class FileController extends ControllerBase{
    
    /**
     * @var FileService
     */
    private $fileService;
    
    /**
     * @var PageService
     */
    private $pageService;
    
    protected function initialize(){
        $this->fileService  = $this->di->get('FileService');
        $this->pageService  = $this->di->get('PageService');
    }
    
    public function listAction(){
        $page = HttpUtils::filterInt($this->request->get('page'),1);
        $pageSize = 9;
        $fileName = HttpUtils::filterString($this->request->get('file_name'), 0);
        $sizeStart = HttpUtils::filterInt($this->request->get('size_start'));
        $sizeEnd = HttpUtils::filterInt($this->request->get('size_end'));
        $path = HttpUtils::filterString($this->request->get('path'),0);
        $creationDateStart = HttpUtils::filterDateTime($this->request->get('creation_date_start'));
        $creationDateEnd = HttpUtils::filterDateTime($this->request->get('creation_date_End'));
        
        $result = $this->fileService->getFileList($fileName,$sizeStart,$sizeEnd,$path,$creationDateStart,$creationDateEnd,array(),$page - 1,$pageSize,1,false);

        //分页信息
        $pages = $this->pageService->createPageArray($result['count'],$page,$pageSize);
        $pageUrl = $this->pageService->createPageUrl($this->request->get(),'/backend/file/list');
        
        $this->view->setVar('files', $result['files']);
        $this->view->setVar('request', $this->request->get());
        $this->view->setVar('pages',$pages);
        $this->view->setVar('pageUrl',$pageUrl);
    }
    
    public function uploadAction(){
        
    }
    
}
