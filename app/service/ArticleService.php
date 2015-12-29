<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\ArticleDao;
use library\utils\DateUtils;
use library\mvc\Log;
use models\blog\Article;

class ArticleService extends ServiceBase {
    
    /**
     *
     * @var ArticleDao
     */
    private $articleDao;
    
    /**
     *
     * @var TagService
     */
    private $tagService;
    
    /**
     *
     * @var ArticleTagMapService
     */
    private $articleTagMapService;
    
    /**
     *
     * @var CategoryService
     */
    private $categoryService;
    
    /**
     *
     * @var Log
     */
    private $log;
    protected function init(){
        $this->log = $this->di->get('applicationLog');
        $this->articleDao = $this->di->get('dao\blog\ArticleDao');
        $this->tagService = $this->di->get('TagService');
        $this->articleTagMapService = $this->di->get('ArticleTagMapService');
        $this->categoryService = $this->di->get('CategoryService');
    }
    
    /**
     * 获取首页的文章列表信息
     *
     * @param int $page            
     * @param int $pageSize            
     * @param string $content
     *            内容信息
     * @param int $categoryId            
     * @param int $tagid            
     * @param date $date            
     * @return array
     * @author zhouwei
     */
    public function getIndexArticleList($page, $pageSize, $content = null, $categoryId = null, $tagid = null, $date = null, $orderby = null){
        if (!empty($content)) { // 全文搜索
            $articlesInfo = $this->listPageByContent($content,$orderby,$page,$pageSize,false);
        } else if (!empty($date)) { // 优先查询日期的文章信息，并且再首页频道显示
            $dateStartEnd = DateUtils::getDateByMonth($date);
            $articlesInfo = $this->listByPage($dateStartEnd['head'],$dateStartEnd['end'],null,null,null,null,null,null,null,$orderby,$page,$pageSize,false);
        } else if (!empty($tagid)) { // 根据标签ID查询文章信息，并且根据标签的频道分类再频道显现
            $mapInfos = $this->articleTagMapService->getArticleMapByTagId($tagid);
            $articlesInfo = $this->listByPage(null,null,array_keys($mapInfos),null,null,null,null,null,null,$orderby,$page,$pageSize,false);
        } else if (!empty($categoryId)) { // 直接查询频道的数据
            $categoryInfos = $this->categoryService->getCategoryByPid($categoryId);
            $categoryIds = array();
            if (empty($categoryInfos)) {
                $categoryIds = array(
                    $categoryId 
                );
            } else {
                foreach ($categoryInfos as $value){
                    $categoryIds[] = $value['id'];
                }
            }
            $articlesInfo = $this->listByPage(null,null,null,$categoryIds,null,null,null,null,null,$orderby,$page,$pageSize,false);
        } else { // 显示首页的数据
            $articlesInfo = $this->listByPage(null,null,null,null,null,null,null,null,null,$orderby,$page,$pageSize,false);
        }
        $articleTabInfos = $this->getListByIdsOrArticle(null,$articlesInfo['articles']);
        return array(
            'article' => $articleTabInfos,
            'count' => $articlesInfo['articles_count'] 
        );
    }
    
    /**
     * 获取后台文章列表的方法
     * @param array $articleIds         文章ID
     * @param string $title             文章标题
     * @param array $categoryIds        文章分类ID
     * @param int $readTimesStart       阅读的条数开始
     * @param int $readTimesEnd         阅读的条数结束
     * @param int $commentTimesStart    评论的条数开始
     * @param int $commentTimesEnd      评论的条数结束
     * @param array $tagIds             标签ID
     * @param date $releaseTimeStart    发布的开始时间
     * @param date $releaseTimeEnd      发布的结束时间
     * @param int $page                 页数
     * @param int $pageSize             每页显示的条数
     * @param string $orderby 可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime,5:last_changed_date
     * @return array
     * @author zhouwei
     */
    public function getBackendArticleList(array $articleIds = array(),$title = null,array $categoryIds = array(),$readTimesStart = null,$readTimesEnd = null,
            $commentTimesStart = null,$commentTimesEnd = null,array $tagIds = null,$releaseTimeStart = null,$releaseTimeEnd = null,$page = 1, $pageSize = 10,$orderby = null,$asc = true){
        
        if (!empty($tagIds)){
            $tagArticleIds = $this->articleTagMapService->getArticleMapByTagIds($tagIds);
            $articleIds = array_merge($articleIds,$tagArticleIds);
        }
        
        $articlesInfo = $this->listByPage($releaseTimeStart,$releaseTimeEnd,$articleIds,$categoryIds,$title,
                                                $readTimesStart,$readTimesEnd,$commentTimesStart,$commentTimesEnd,$orderby,$page,$pageSize,$asc);
        
        $articleTabInfos = $this->getListByIdsOrArticle(null,$articlesInfo['articles']);
        return array(
                'article' => $articleTabInfos,
                'count' => $articlesInfo['articles_count']
        );
    }
    
    /**
     * 根据文章ID或者文章信息组合成文章列表信息，其中如果两个参数都传，文章ID优先
     *
     * @param array $articleId            
     * @param array $articleInfo            
     * @param string $orderBy
     *            可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
     * @return array
     * @author zhouwei
     */
    public function getListByIdsOrArticle(array $articleId = null, array $articleInfo = null, $orderBy = null){
        if (empty($articleId) && empty($articleInfo)) {
            return array();
        }
        if (!empty($articleId)) {
            $articleInfo = $this->getArticleByIds($articleId);
        }
        $articleInfo = $this->bindArticlesTags($articleInfo);
        $tags = $this->tagService->getAllTag();
        $categorys = $this->categoryService->getAllCategory();
        $categoryTree = $this->categoryService->getCategoryTree($categorys);
        $result = array();
        foreach ( $articleInfo as $aid => $value ) {
            
            //组合文章的tag信息
            $tagResult = array();
            if (!empty($value['tag'])) {
                foreach ( $value['tag'] as $tid => $tag ) {
                    if (empty($tags[$tid])) {
                        continue;
                    }
                    $tagResult[] = array(
                        'name' => $tags[$tid]->getName(),
                        'id' => $tid 
                    );
                }
                $tagResult[count($tagResult) - 1]['last'] = true;
            }
            
            //组合文章的分类信息
            $categoryInfo = $categorys[$value['article']->getCategoryId()];
            if (!empty($categoryInfo)){
                $fatherCategoryInfo = $categoryTree[$categoryInfo->getPid()]['category'];
            }
            $categoryResult = array();
            if (!empty($categoryInfo) && !empty($fatherCategoryInfo)){
                $categoryResult = array(
                    'frist' => array(
                        'name'  => $fatherCategoryInfo->getName(),
                        'id'    => $fatherCategoryInfo->getId(),
                    ),
                    'second'    => array(
                        'name'  => $categoryInfo->getName(),
                        'id'    => $categoryInfo->getId(),
                    ),
                );
            }
            
            $articleArrayInfo = array(
                'title'         => $value['article']->getTitle(),
                'headcontent'   => $value['article']->getHeadcontent(),
                'headimage'     => $value['article']->getHeadimage(),
                'release_datetime' => date('Y-m-d H:i',strtotime($value['article']->getReleaseDatetime())),
                'comment_times' => $value['article']->getCommentTimes(),
                'read_times'    => $value['article']->getReadTimes(),
                'id'            => $value['article']->getId(),
                'tag'           => $tagResult,
                'category'      => $categoryResult,
            );
            
            $result[$aid] = $articleArrayInfo;
        }
        return $result;
    }
    
    /**
     * 为单个文章绑定标签
     *
     * @param array $articles            
     * @return array
     * @author zhouwei
     */
    public function bindArticleTags($article){
        $result = $this->bindArticlesTags(array(
            $article->getId() => $article 
        ));
        return $result[$article->getId()];
    }
    
    /**
     * 为多个文章绑定标签
     *
     * @param array $articles            
     * @return array
     * @author zhouwei
     */
    public function bindArticlesTags(array $articles){
        $articleIds = array_keys($articles);
        $mapInfos = $this->articleTagMapService->getArticleMapByArticleIds($articleIds);
        foreach ( $articles as $key => $value ) {
            $articles[$key] = array(
                'article' => $value,
                'tag' => $mapInfos[$value->getId()] 
            );
        }
        return $articles;
    }
    
    /**
     * 根据条件分页获取内容
     *
     * @param string $startdate            
     * @param string $enddate            
     * @param array $articleIds            
     * @param string $categoryIds            
     * @param string $orderBy
     *            可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime,5:last_changed_date
     * @param number $page            
     * @param number $pageSize            
     * @return array
     * @author zhouwei
     */
    public function listByPage($startdate = null, $enddate = null, array $articleIds = null, array $categoryIds = null,$title = null,
            $readTimesStart = null,$readTimesEnd = null,$commentTimesStart = null,$commentTimesEnd = null, $orderBy = 1, $page = 0, $pageSize = 10,$asc = true){
        $articles = $this->articleDao->listByPage($startdate,$enddate,$articleIds,$categoryIds,$title,$readTimesStart,$readTimesEnd,$commentTimesStart,$commentTimesEnd,$orderBy,$page,$pageSize,false,$asc);
        $articlesCount = $this->articleDao->listByPage($startdate,$enddate,$articleIds,$categoryIds,$title,$readTimesStart,$readTimesEnd,$commentTimesStart,$commentTimesEnd,$orderBy,$orderBy,$page,$pageSize,$asc);
        $resultArticle = array();
        foreach ( $articles as $article ) {
            $resultArticle[$article->getId()] = $article;
        }
        return array(
            'articles' => $resultArticle,
            'articles_count' => $articlesCount->getCount() 
        );
    }
    
    /**
     * 根据条件分页获取内容
     *
     * @param string $content
     *            文章内容
     * @param string $orderBy
     *            可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
     * @param number $page            
     * @param number $pageSize            
     * @return array
     * @author zhouwei
     */
    public function listPageByContent($content, $orderBy = 1, $page = 0, $pageSize = 10,$asc = true){
        $articles = $this->articleDao->listByContentPage($content,$orderBy,$page,$pageSize,false,$asc);
        $articlesCount = $this->articleDao->listByContentPage($content,$orderBy,$page,$pageSize,$asc);
        $resultArticle = array();
        foreach ( $articles as $article ) {
            $resultArticle[$article->getId()] = $article;
        }
        return array(
            'articles' => $resultArticle,
            'articles_count' => $articlesCount->getCount() 
        );
    }
    
    /**
     * 获取首页最新的文章列表信息
     *
     * @return array
     * @author zhouwei
     */
    public function getNewestArticleList($limit){
        $articles = $this->articleDao->newestByLimit($limit);
        $result = array();
        foreach ( $articles as $value ) {
            $result[$value->getId()] = $value;
        }
        return $result;
    }
    
    /**
     * 根据ID获取文章信息
     *
     * @param array $ids            
     * @param string $orderBy
     *            可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
     * @return array
     * @author zhouwei
     */
    public function getArticleByIds(array $ids, $orderBy = null){
        $articles = $this->articleDao->getByIds($ids,$orderBy);
        $result = array();
        foreach ( $articles as $value ) {
            $result[$value->getId()] = $value;
        }
        return $result;
    }
    
    /**
     * 获取所有文章的基本信息
     *
     * @return array
     * @author zhouwei
     */
    public function getAllAticleBaseInfo(){
        $articles = $this->articleDao->getAllAticle();
        return $articles;
    }
    
    /**
     * 根据发布时间，获取最新的10篇文章基本信息'
     *
     * @param array $allArticles            
     * @return array
     * @author zhouwei
     */
    public function getNewArticleTop10(array $allArticles){
        $result = array();
        $count = 0;
        foreach ( $allArticles as $value ) {
            if ($count >= 10) {
                break;
            }
            $result[$value->getId()] = array(
                'id' => $value->getId(),
                'name' => $value->getTitle() 
            );
            $count++;
        }
        return $result;
    }
    
    /**
     * 根据浏览的次数、评论的条数已经发布的时间，获取最热门的10篇文章基本信息
     *
     * @param array $allArticles            
     * @return array
     * @author zhouwei
     */
    public function getHotArticleTop10(array $allArticles){
        $score = array();
        $nowtime = time();
        $allArticlesTmp = array();
        foreach ( $allArticles as $value ) {
            $score[$value->getId()] = $value->getCommentTimes() * 20 + $value->getReadTimes() + (strtotime($value->getReleaseDatetime()) - $nowtime) / 86400;
            $allArticlesTmp[$value->getId()] = $value;
        }
        arsort($score);
        $result = array();
        $count = 0;
        foreach ( $score as $key => $scoreVal ) {
            if ($count >= 10) {
                break;
            }
            $article = $allArticlesTmp[$key];
            $result[] = array(
                'id' => $article->getId(),
                'name' => $article->getTitle() 
            );
            $count++;
        }
        return $result;
    }
    
    /**
     * 获取相关文章的TOP10
     *
     * @param array $tagIds            
     * @param int $articleId            
     * @return array
     * @author zhouwei
     */
    public function getRelatedArticlesTop10(array $tagids, $articleId){
        $articleIds = $this->articleTagMapService->getArticleMapByTagIds($tagids,$articleId);
        if (empty($articleIds)) {
            return array();
        }
        $articleInfos = $this->articleDao->getByIds($articleIds);
        $articleInfosHot = $this->getHotArticleTop10($articleInfos);
        return $articleInfosHot;
    }
    
    /**
     * 根据所有的文章，获取文章的分类，包含日期与category，并获取各自的文章的条数
     *
     * @param array $allArticles            
     * @return array
     * @author zhouwei
     */
    public function getArchiveInfo(array $allArticles){
        $dates = array();
        $categorys = array();
        $allCategorys = $this->categoryService->getAllCategory();
        foreach ( $allArticles as $value ) {
            $date = date('Y年m月',strtotime($value->getReleaseDatetime()));
            if (isset($dates[$date])) {
                $dates[$date]['times'] = $dates[$date]['times'] + 1;
            } else {
                $dates[$date] = array(
                    'times' => 1,
                    'date' => date('Y-m',strtotime($value->getReleaseDatetime())) 
                );
            }
            $category = $value->getCategoryId();
            if (!isset($allCategorys[$category])) {
                continue;
            }
            if (isset($categorys[$category])) {
                $categorys[$category]['times'] = $categorys[$category]['times'] + 1;
            } else {
                $categorys[$category] = array(
                    'times' => 1,
                    'category_name' => $allCategorys[$category]->getName(),
                    'category_id' => $allCategorys[$category]->getId() 
                );
            }
        }
        return array(
            'date' => $dates,
            'category' => $categorys 
        );
    }
    
    /**
     * 根据文章ID获取文章信息
     *
     * @param int $articleId            
     * @return array
     * @author zhouwei
     */
    public function getArticleInfoById($articleId){
        $articleInfo = $this->articleDao->getById($articleId);
        if (empty($articleInfo)){
            return array();
        }
        $tagInfo = $this->getArticleTagsInfo($articleId);
        return array(
            'article' => array(
                'title' => $articleInfo->getTitle(),
                'category_id' => $articleInfo->getCategoryId(),
                'headcontent' => $articleInfo->getHeadcontent(),
                'headimage' => $articleInfo->getHeadimage(),
                'release_datetime' => date('Y-m-d H:i',strtotime($articleInfo->getReleaseDatetime())),
                'comment_times' => $articleInfo->getCommentTimes(),
                'read_times' => $articleInfo->getReadTimes(),
                'content' => $articleInfo->getContent(),
                'id' => $articleInfo->getId(), 
            ),
            'tag' => $tagInfo 
        );
    }
    
    /**
     * 根据文章获取文章的标签信息
     *
     * @param int $articleId            
     */
    public function getArticleTagsInfo($articleId){
        $maps = $this->articleTagMapService->getArticleMapByArticleId($articleId);
        $tags = $this->tagService->getAllTag();
        $result = array();
        foreach ( $maps as $map ) {
            if (isset($tags[$map->getTagId()])) {
                $result[$map->getTagId()] = array(
                    'name' => $tags[$map->getTagId()]->getName(),
                    'id' => $map->getTagId() 
                );
            }
        }
        $result[count($result) - 1]['last'] = true;
        return $result;
    }
    
    /**
     * 保存文章信息，根据ID有无判断是新增还是更新
     * 
     * @return int
     * @author zhouwei
     *
     */
    public function saveArticle($id,$title,$readTimes,$commentTimes,$releaseDatetime,$firstCategory,$secondCategory,$tag,$headimage,$headcontent,$content){
        $article = $this->getArticle($id, $title, $readTimes, $commentTimes, $releaseDatetime, $firstCategory, $secondCategory, $tag, $headimage, $headcontent, $content);
        if (empty($id)){
            $articleId = $this->articleDao->insert($article);
            $this->articleTagMapService->saveArticleTagMap($articleId, $tag);
            return $articleId;
        } else {
            $effecRows = $this->articleDao->update($article);
            $this->articleTagMapService->saveArticleTagMap($id, $tag);
            return $effecRows;
        }
    }
    
    /**
     * 组合文章的pojo的信息
     * 
     * @return Article
     * @author zhouwei
     */
    public function getArticle($id,$title,$readTimes,$commentTimes,$releaseDatetime,$firstCategory,$secondCategory,$tag,$headimage,$headcontent,$content){
        $article = new Article();
        $article->setId($id);
        $article->setContent($content);
        $article->setTitle($title);
        $article->setReadTimes($readTimes);
        $article->setCommentTimes($commentTimes);
        $article->setReleaseDatetime($releaseDatetime);
        $article->setCategoryId($secondCategory);
        $article->setHeadimage($headimage);
        $article->setHeadcontent($headcontent);
        return $article;
    }
    
    /**
     * 根据文章ID删除
     * @param int $id
     * @return number
     * @author zhouwei
     */
    public function deleteArticle($id){
        return $this->articleDao->delete($id);
    }
    
    /**
     * 更新文章的评论次数
     * @param string $id
     * @param int $times
     *
     * @return void
     * @author zhouwei
     */
    public function commentTimesAddUpdate($id,$times){
        return $this->articleDao->commentTimesAddUpdate($id, $times);
    }

	/**
	 * 更新文章的阅读次数
	 * @param int $id
	 * @param int $times
	 * @return void
	 * @author zhouwei
	 */ 
	public function readTimesAddUpdate($id,$times){
		return $this->articleDao->readTimesAddUpdate($id,$times);
	}
}
