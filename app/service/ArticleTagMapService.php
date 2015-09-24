<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\ArticleTagMapDao;

class ArticleTagMapService extends ServiceBase {
	
	/**
	 * @var ArticleTagMapDao
	 */
	private $articleTagMapDao;
	
	/**
	 * @var TagService
	 */
	private $tagService;
	
	protected function init(){
		$this->log				= $this->di->get('applicationLog');
		$this->articleTagMapDao	= $this->di->get('dao\blog\ArticleTagMapDao');
		$this->tagService		= $this->di->get('TagService');
	}
	
	/**
	 * 根据文章ID获取文章的标签信息
	 * @param int $articleId
	 * @return array
	 * @author zhouwei
	 */
	public function getArticleMapByArticleId($articleId){
		$mapInfos = $this->articleTagMapDao->getByArticleId($articleId);
		$result = array();
		foreach ($mapInfos as $value){
			$result[$value->getId()] = $value;
		}
		return $result;
	}
	
	/**
	 * 根据文章的ID数组获取文章的标签信息
	 * @param array $articleIds
	 * @return array
	 * @author zhouwei
	 */
	public function getArticleMapByArticleIds(array $articleIds){
		$mapInfos = $this->articleTagMapDao->getByArticleIds($articleIds);
		$result = array();
		foreach ($mapInfos as $value){
			$result[$value->getArticleId()][$value->getTagId()] = $value;
		}
		return $result;
	}
}
