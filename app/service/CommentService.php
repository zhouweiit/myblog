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
	 * @return array
	 * @author zhouwei
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
	
	/**
	 * 获取一个文章的评论信息，并根据父子关系列成树
	 * @param int $articleId
	 * @return array
	 * @author zhouwei
	 */
	public function getCommentTreeByArticleId($articleId){
		$commentInfos = $this->getCommentByArticleId($articleId);
		$commentTrees = array();
		foreach ($commentInfos as $comment){
			$commentTrees[$comment->getId()] = array(
				'comment'	=> $comment,
				'date'		=> date('Y年m月d日 H:i',strtotime($comment->getReleaseDatetime())),
			);
			$pid = trim($comment->getPid());
			if (!empty($pid)){
				$father = explode(',', $pid);
				$count = 1;
				foreach ($father as $id){
					if (isset($commentInfos[$id]) && $count <= 9){
						$commentTrees[$comment->getId()]['father'][$commentInfos[$id]->getId()] = array(
							'comment' 	=> $commentInfos[$id],
							'count'		=> $count,
						);
					}
					$count++;
				}
				if ($count > 9){
					$commentTrees[$comment->getId()]['father'][] = array(
						'comment' 	=> '......',
						'count'		=> 10,
					);
					$commentTrees[$comment->getId()]['fatherDesc'][] = array(
						'comment' 	=> '......',
						'count'		=> 10,
					);
				}
				$commentTrees[$comment->getId()]['fatherDesc'] = array_reverse($commentTrees[$comment->getId()]['father']);
			}
		}
		return $commentTrees;
	}
	
	/**
	 * 根据文章的ID获取文章的评论信息,按发布时间倒序
	 * @param int $articleId
	 * @author zhouwei
	 */
	public function getCommentByArticleId($articleId){
		$commentInfo = $this->commentDao->getCommentByArticleId($articleId);
		$result = array();
		foreach ($commentInfo as $value){
			$result[$value->getId()] = $value;
		}
		return $result;
	}
	
	/**
	 * 新增一条评论信息
	 * @param int $articleId
	 * @param string $content
	 * @param int $pid
	 * @param string $name
	 * @param string $email
	 * @return void
	 * @author zhouwei
	 */
	public function addComment($articleId,$content,$pid,$name,$email){
		if (empty($pid)){
			$pid = null;
		} else if (empty($articleId) || empty($content) || empty($name)){
			return false;
		}
		$this->commentDao->insertComment($articleId, $content, $pid, $name, $email);
		return true;
	}
	
}