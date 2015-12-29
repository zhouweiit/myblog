<?php

namespace backend\controllers;

use library\mvc\ControllerBase;
use service\CommentService;
use library\utils\HttpUtils;
use service\PageService;
use Phalcon\Mvc\View;
class CommentController extends ControllerBase{
    
    /**
     * @var CommentService
     */
    private $commentService;
    
    /**
     * @var PageService
     */
    private $pageService;
    
    protected function initialize(){
        $this->commentService   = $this->di->get('CommentService');
        $this->pageService      = $this->di->get('PageService');
    }
    
    public function listAction(){
        $page = HttpUtils::filterInt($this->request->get('page'),1,array(0));
        $pageSize = 10;
        
        $commentInfo = $this->commentService->getCommentByArticleId(null, null, 0, $page - 1, $pageSize);
        
        //分页信息
        $pages = $this->pageService->createPageArray($commentInfo['count'],$page,$pageSize);
        $pageUrl = $this->pageService->createPageUrl($this->request->get(),'/backend/comment/list');
        
        $this->view->setVar('commentInfos', $commentInfo['commentInfo']);
        $this->view->setVar('pages',$pages);
        $this->view->setVar('pageUrl',$pageUrl);
        $this->view->setVar('request', $this->request->get());
    }
    
    /**
     * 审核
     */
    public function ajaxCheckAction(){
        $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
        $id = trim(HttpUtils::filterString($this->request->get('id')),",");
        $check = HttpUtils::filterInt($this->request->get('check'));
        $result = $this->commentService->updateCommentCheck(explode(',', $id), $check);
        if ($result > 0){
            $this->response->setContent('true');
        } else {
            $this->response->setContent('false');
        }
        
        $this->response->send();
    }
    
}
