<?php

namespace service;

use library\mvc\ServiceBase;
use library\mvc\Log;

class AsideService extends ServiceBase {
	
	/**
	 * @var Log
	 */
	private $log;
	
	/**
	 * @var ArticleService
	 */
	private $articleService;
	
	/**
	 * @var ArticleTagMapService
	 */
	private $articleTagMapService;
	
	/**
	 * @var CommentService
	 */
	private $commentService;
	
	protected function init(){
		$this->log					= $this->di->get('applicationLog');
		$this->articleService		= $this->di->get('ArticleService');
		$this->articleTagMapService = $this->di->get('ArticleTagMapService');
		$this->commentService		= $this->di->get('CommentService');
	} 
	
	/**
	 * 获取站点右边的所有的信息
	 * @return array
	 * @author zhouwei
	 */
	public function getAsideResult(){
		$allArticles = $this->articleService->getAllAticleBaseInfo();
		$newArticles = $this->articleService->getNewArticleTop10($allArticles);
		$hotArticles = $this->articleService->getHotArticleTop10($allArticles);
		$archiveInfo = $this->articleService->getArchiveInfo($allArticles);
		$archiveTags = $this->articleTagMapService->getArchiveTag();
		$newComments = $this->commentService->getNewCommentTop10();
		return array(
			'newarticles'	=> $newArticles,
			'hotArticles'	=> $hotArticles,
			'archiveInfo'	=> $archiveInfo,
			'archiveTags'	=> $archiveTags,
			'newComments'	=> $newComments,
		);
	}
}
