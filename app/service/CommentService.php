<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\CommentDao;

class CommentService extends ServiceBase {
	
	/**
	 * @var Log
	 */
	private $log;
	
	/**
	 * @var CommentDao
	 */
	private $commentDao;
	
	protected function init(){
		$this->log					= $this->di->get('applicationLog');
		$this->commentDao			= $this->di->get('dao\\blog\\CommentDao');
	}
	
	/**
	 * 获取网站最新的Top10的评论
	 */
	public function getNewCommentTop10(){
		$comments = $this->commentDao->getNewestComment(10);
		$result = array();
		foreach ($comments as $value){
			$result[] = array(
				'content'			=> $value->getContent(),
				'name'				=> $value->getName(),
				'release_datetime'	=> $value->getReleaseDatetime(),
				'article_id'		=> $value->getArticleId(),
			);
		}
		return $result;
	}
	
}

