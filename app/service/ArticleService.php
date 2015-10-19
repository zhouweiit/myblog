<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\ArticleDao;
use library\utils\DateUtils;
use library\mvc\Log;

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
	
	/**
	 * @var CategoryService
	 */
	private $categoryService;
	
	/**
	 * @var Log
	 */
	private $log;
	
	protected function init(){
		$this->log					= $this->di->get('applicationLog');
		$this->articleDao		  	= $this->di->get('dao\blog\ArticleDao');
		$this->tagService			= $this->di->get('TagService');
		$this->articleTagMapService = $this->di->get('ArticleTagMapService');
		$this->categoryService		= $this->di->get('CategoryService');
	}
	
	/**
	 * 获取首页的文章列表信息
	 * @param int $page			需要查询的页数
	 * @param int $pageSize		每页小时的条数
	 * @param int $categoryId	分类ID	一级与二级分类都可以
	 * @param int $tagid		标签ID
	 * @param date $date		日期 
	 * @return array
	 * @author zhouwei
	 */
	public function getIndexArticleList($page,$pageSize,$categoryId = null,$tagid = null,$date = null,$orderby = null){
		if (!empty($date)){//优先查询日期的文章信息，并且再首页频道显示
			$dateStartEnd = DateUtils::getDateByMonth($date);
			$articlesInfo = $this->listByPage($dateStartEnd['head'],$dateStartEnd['end'],null,null,$orderby,$page,$pageSize);
		} else if (!empty($tagid)){//根据标签ID查询文章信息，并且根据标签的频道分类再频道显现
			$mapInfos = $this->articleTagMapService->getArticleMapByTagId($tagid);
			$articlesInfo = $this->listByPage(null,null,array_keys($mapInfos),null,$orderby,$page,$pageSize);
		} else if (!empty($categoryId)){//直接查询频道的数据
			$categoryInfos = $this->categoryService->getCategoryByPid($categoryId);
			$categoryIds = null;
			if (empty($categoryInfos)){
				$categoryIds = array($categoryId);
			} else {
				$categoryIds = array_keys($categoryInfos);
			}
			$articlesInfo = $this->listByPage(null,null,null,$categoryIds,$orderby,$page,$pageSize);
		} else {//显示首页的数据
			$articlesInfo = $this->listByPage(null,null,null,null,$orderby,$page,$pageSize);
		}
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
				'tag'		=> $mapInfos[$value->getId()],
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
		$resultArticle = array();
		foreach ($articles as $article){
			$resultArticle[$article->getId()] = $article;
		}
		return array(
			'articles' 			=> $resultArticle,
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
	
	/**
	 * 获取所有文章的基本信息
	 * @return array
	 * @author zhouwei
	 */
	public function getAllAticleBaseInfo(){
		$articles = $this->articleDao->getAllAticle();
		return $articles;
	}
	
	/**
	 * 根据发布时间，获取最新的10篇文章基本信息'
	 * @param array $allArticles
	 * @return array
	 * @author zhouwei
	 */
	public function getNewArticleTop10(array $allArticles){
		$result = array();
		$count = 0;
		foreach ($allArticles as $value){
			if ($count >= 10){
				break;
			}
			$result[$value->getId()] = array(
				'id'	=> $value->getId(),
				'name'	=> $value->getTitle(),
			);
			$count++;
		}
		return $result;
	}
	
	/**
	 * 根据浏览的次数、评论的条数已经发布的时间，获取最热门的10篇文章基本信息
	 * @param array $allArticles
	 * @return array
	 * @author zhouwei
	 */
	public function getHotArticleTop10(array $allArticles){
		$score = array();
		$nowtime = time();
		$allArticlesTmp = array();
		foreach ($allArticles as $value){
			$score[$value->getId()] = $value->getCommentTimes() * 20 
								+ $value->getReadTimes() 
								+ (strtotime($value->getReleaseDatetime()) - $nowtime) / 86400;
			$allArticlesTmp[$value->getId()] = $value;
		}
		arsort($score);
		$result = array();
		$count = 0;
		foreach ($score as $key => $scoreVal){
			if ($count >= 10){
				break;
			}
			$article = $allArticlesTmp[$key];
			$result[] = array(
				'id'	=> $article->getId(),
				'name'	=> $article->getTitle(),
			);
			$count++;
		}
		return $result;
	}
	
	/**
	 * 根据所有的文章，获取文章的分类，包含日期与category，并获取各自的文章的条数
	 * @param array $allArticles
	 * @return array
	 * @author zhouwei
	 */
	public function getArchiveInfo(array $allArticles){
		$dates = array();
		$categorys = array();
		$allCategorys = $this->categoryService->getAllCategory();
		foreach ($allArticles as $value){
			$date = date('Y年m月',strtotime($value->getReleaseDatetime()));
			if (isset($dates[$date])){
				$dates[$date]['times'] = $dates[$date]['times'] + 1;
			} else {
				$dates[$date] = array(
					'times'		=> 1,
					'date'		=> date('Y-m',strtotime($value->getReleaseDatetime())),
				);
			}
			$category = $value->getCategoryId();
			if (!isset($allCategorys[$category])){
				continue;
			}
			if (isset($categorys[$category])){
				$categorys[$category]['times'] = $categorys[$category]['times'] + 1;
			} else {
				$categorys[$category] = array(
					'times'			=> 1,
					'category_name'	=> $allCategorys[$category]->getName(),
					'category_id'	=> $allCategorys[$category]->getId(),
				);
			}
		}
		return array(
			'date' 		=> $dates,
			'category'	=> $categorys,		
		);
	}
	
	/**
	 * 根据文章ID获取文章信息
	 * @param int $articleId
	 * @return array
	 * @author zhouwei
	 */
	public function getArticleInfoById($articleId){
		$articleInfo = $this->articleDao->getById($articleId);
		$tagInfo = $this->getArticleTagsInfo($articleId);
		return array(
			'article'	=> array(
				'title'				=> $articleInfo->getTitle(),
				'category_id'		=> $articleInfo->getCategoryId(),
				'headcontent'		=> $articleInfo->getHeadcontent(),
				'headimage'			=> $articleInfo->getHeadimage(),
				'release_datetime' 	=> date('Y-m-d H:i',strtotime($articleInfo->getReleaseDatetime())),
				'comment_times'		=> $articleInfo->getCommentTimes(),
				'read_times'		=> $articleInfo->getReadTimes(),
				'content'			=> $articleInfo->getContent(),
				'id'				=> $articleInfo->getId(),
			),		
			'tag'		=> $tagInfo,
		);
	}
	
	/**
	 * 根据文章获取文章的标签信息
	 * @param unknown $articleId
	 */
	public function getArticleTagsInfo($articleId){
		$maps = $this->articleTagMapService->getArticleMapByArticleId($articleId);
		$tags = $this->tagService->getAllTag();
		$result = array();
		foreach ($maps as $map){
			if (isset($tags[$map->getTagId()])){
				$result[] = array(
					'name'	=> $tags[$map->getTagId()]->getName(),
					'id'	=> $map->getTagId(),
				);
			}
		}
		$result[count($result) - 1]['last'] = true;
		return $result;
	}
	
}
