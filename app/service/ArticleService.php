<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\ArticleDao;

class ArticleService extends ServiceBase {
	
	/**
	 * @var ArticleDao
	 */
	private $articleDao;
	
	/**
	 * @var TagService
	 */
	private $tagService;
	
	/**
	 * @var ArticleTagMapService
	 */
	private $articleTagMapService;
	
	protected function init(){
		$this->log					= $this->di->get('applicationLog');
		$this->articleDao		  	= $this->di->get('dao\blog\ArticleDao');
		$this->tagService			= $this->di->get('TagService');
		$this->articleTagMapService = $this->di->get('ArticleTagMapService');
	}
	
	/**
	 * 获取首页的文章列表信息
	 * @return array
	 * @author zhouwei
	 */
	public function getIndexArticleList($page,$pageSize){
		$articlesInfo = $this->listByPage(null,null,null,null,5,$page,$pageSize);
		$articleTabInfos = $this->getListByIdsOrArticle(null,$articlesInfo['articles']);
		return array(
			'article' => $articleTabInfos,
			'count'	  => $articlesInfo['articles_count'],
		);
	}
	
	/**
	 * 根据文章ID或者文章信息组合成文章列表信息，其中如果两个参数都传，文章ID优先
	 * @param array $articleId
	 * @param array $articleInfo
	 * @param string $orderBy 可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
	 * @return array
	 * @author zhouwei
	 */
	public function getListByIdsOrArticle(array $articleId = null, array $articleInfo = null,$orderBy = null){
		if (empty($articleId) && empty($articleInfo)){
			return array();
		}
		if (!empty($articleId)){
			$articleInfo = $this->getArticleByIds($articleId);
		}
		$articleInfo = $this->bindArticlesTags($articleInfo);
		$tags = $this->tagService->getAllTag();
		$result = array();
		foreach ($articleInfo as $aid => $value){
			
			$tagResult = array();
			if (!empty($value['tag'])){
				foreach ($value['tag'] as $tid => $tag){
					if (empty($tags[$tid])){
						continue;
					}
					$tagResult[] = array(
						'name'	=> $tags[$tid]->getName(),
						'id'	=> $tid,	
					);
				}
				$tagResult[count($tagResult) - 1]['last'] = true;
			}
			
			$articleArrayInfo = array(
				'title'				=> $value['article']->getTitle(),
				'headcontent'		=> $value['article']->getHeadcontent(),
				'headimage'			=> $value['article']->getHeadimage(),
				'release_datetime' 	=> date('Y-m-d H:i',strtotime($value['article']->getReleaseDatetime())),
				'comment_times'		=> $value['article']->getCommentTimes(),
				'read_times'		=> $value['article']->getReadTimes(),
				'id'				=> $value['article']->getId(),
				'tag'				=> $tagResult,
			);
			
			$result[$aid] = $articleArrayInfo;
		}
		
		return $result;
	}
	
	/**
	 * 为单个文章绑定标签
	 * @param array $articles
	 * @return array
	 * @author zhouwei
	 */
	public function bindArticleTags($article){
		$result = $this->bindArticlesTags(array($article->getId() => $article));
		return $result[$article->getId()];
	}
	
	/**
	 * 为多个文章绑定标签
	 * @param array $articles
	 * @return array
	 * @author zhouwei
	 */
	public function bindArticlesTags(array $articles){
		$articleIds = array_keys($articles);
		$mapInfos = $this->articleTagMapService->getArticleMapByArticleIds($articleIds);
		foreach ($articles as $key => $value){
			$articles[$key] = array(
				'article'	=> $value,
				'tag'		=> $mapInfos[$key],
			);
		}
		return $articles;
	}
	
	/**
	 * 根据条件分页获取内容
	 * @param string $startdate
	 * @param string $enddate
	 * @param array $articleIds
	 * @param string $categoryIds
	 * @param string $orderBy 可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
	 * @param number $page
	 * @param number $pageSize
	 * @return array
	 * @author zhouwei
	 */
	public function listByPage($startdate = null,$enddate = null,array $articleIds = null,array $categoryIds = null,$orderBy = 1,$page = 0,$pageSize = 10){
		$articles = $this->articleDao->listByPage($startdate,$enddate,$articleIds,$categoryIds,$orderBy,$page,$pageSize,false);
		$articlesCount = $this->articleDao->listByPage($startdate,$enddate,$articleIds,$categoryIds,$orderBy,$page,$pageSize);
		return array(
			'articles' 			=> $articles,
			'articles_count'	=> $articlesCount->getCount(),
		);
	}
	
	/**
	 * 获取首页最新的文章列表信息
	 * @return array
	 * @author zhouwei
	 */
	public function getNewestArticleList($limit){
		$articles = $this->articleDao->newestByLimit($limit);
		$result = array();
		foreach ($articles as $value){
			$result[$value->getId()] = $value;
		}
		return $result;
	}
	
	/**
	 * 根据ID获取文章信息
	 * @param array $ids
	 * @param string $orderBy 可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
	 * @return array
	 * @author zhouwei
	 */
	public function getArticleByIds(array $ids,$orderBy = null){
		$articles = $this->articleDao->getByIds($ids,$orderBy);
		$result = array();
		foreach ($articles as $value){
			$result[$value->getId()] = $value;
		}
		return $result;
	}
	
}
