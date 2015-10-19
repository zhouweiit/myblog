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
	
	/**
	 * @var LinksService
	 */
	private $linksService;
	
	protected function init(){
		$this->log					= $this->di->get('applicationLog');
		$this->articleService		= $this->di->get('ArticleService');
		$this->articleTagMapService = $this->di->get('ArticleTagMapService');
		$this->commentService		= $this->di->get('CommentService');
		$this->linksService			= $this->di->get('LinksService');
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
		$links 		 = $this->linksService->getAllLinks();
		return array(
			'newarticles'	=> $newArticles,
			'hotArticles'	=> $hotArticles,
			'archiveInfo'	=> $archiveInfo,
			'archiveTags'	=> $archiveTags,
			'newComments'	=> $newComments,
			'links'			=> $links,
		);
	}
	
	/**
	 * 将超链接从对象转为数组供smarty使用
	 * @param unknown $links
	 * @return multitype:multitype:NULL
	 */
	private function getLinksArray($links){
		$result = array();
		foreach ($links as $value){
			$result[] = array(
				'name' 	=> $value->getName(),
				'url'	=> $value->getUrl(),
				'id'	=> $value->getId(),	
			);
		}
		return $result;
	}
	
}
