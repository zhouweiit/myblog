<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use service\FileService;
use library\utils\HttpUtils;
use service\PageService;
use Phalcon\Mvc\View;
use models\common\FileExtension;
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
    
    /**
     * 文件列表
     */
    public function listAction(){
        $page = HttpUtils::filterInt($this->request->get('page'),1);
        $pageSize = 9;
        $fileName = HttpUtils::filterString($this->request->get('file_name'), 0);
        $sizeStart = HttpUtils::filterInt($this->request->get('size_start'));
        $sizeEnd = HttpUtils::filterInt($this->request->get('size_end'));
        $path = HttpUtils::filterString($this->request->get('path'),0);
        $creationDateStart = HttpUtils::filterDateTime($this->request->get('creation_date_start'));
        $creationDateEnd = HttpUtils::filterDateTime($this->request->get('creation_date_End'));
        $extension = $this->request->get('extension',null,array());
        
        $result = $this->fileService->getFileList($fileName,$sizeStart,$sizeEnd,$path,$creationDateStart,$creationDateEnd,$extension,$page - 1,$pageSize,1,false);

        //分页信息
        $pages = $this->pageService->createPageArray($result['count'],$page,$pageSize);
        $pageUrl = $this->pageService->createPageUrl($this->request->get(),'/backend/file/list');
        
        $this->view->setVar('extensions', FileExtension::getFileExtension());
        $this->view->setVar('files', $result['files']);
        $this->view->setVar('request', $this->request->get());
        $this->view->setVar('pages',$pages);
        $this->view->setVar('pageUrl',$pageUrl);
    }
    
    /**
     * 上传页面
     */
    public function uploadAction(){
    }
    
    /**
     * 上传文件
     * 
     * @author zhouwei
     */
    public function ajaxUploadAction(){
        $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
        $result = 'false';

        $extension = $this->fileService->getExtension($_FILES['file']['name']);
        $path = $this->fileService->createPath($_FILES['file']['name'], $extension);
        
        if (move_uploaded_file($_FILES['file']['tmp_name'], $path['fullpath'])) {
            $this->fileService->insertFile($_FILES['file']['name'], $path['relativepath'],$_FILES['file']['size']/1024,$extension);
            $result = 'true';
        }
        
        $this->response->setContent($result);
        $this->response->send();
    }
    
}
