<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\ArticleTagMapDao;

class ArticleTagMapService extends ServiceBase {
    
    /**
     *
     * @var ArticleTagMapDao
     */
    private $articleTagMapDao;
    
    /**
     *
     * @var TagService
     */
    private $tagService;
    protected function init(){
        $this->log = $this->di->get('applicationLog');
        $this->articleTagMapDao = $this->di->get('dao\blog\ArticleTagMapDao');
        $this->tagService = $this->di->get('TagService');
    }
    
    /**
     * 根据文章ID获取文章的标签信息
     *
     * @param int $articleId            
     * @return array
     * @author zhouwei
     */
    public function getArticleMapByArticleId($articleId){
        $mapInfos = $this->articleTagMapDao->getByArticleId($articleId);
        $result = array();
        foreach ( $mapInfos as $value ) {
            $result[$value->getId()] = $value;
        }
        return $result;
    }
    
    /**
     * 根据文章的ID数组获取文章的标签信息
     *
     * @param array $articleIds            
     * @return array
     * @author zhouwei
     */
    public function getArticleMapByArticleIds(array $articleIds){
        $mapInfos = $this->articleTagMapDao->getByArticleIds($articleIds);
        $result = array();
        foreach ( $mapInfos as $value ) {
            $result[$value->getArticleId()][$value->getTagId()] = $value;
        }
        return $result;
    }
    
    /**
     * 根据标签ID获取所有的map信息
     *
     * @param int $tagId            
     * @return array
     * @author zhouwei
     */
    public function getArticleMapByTagId($tagId){
        $mapInfos = $this->articleTagMapDao->getByTagId($tagId);
        $result = array();
        foreach ( $mapInfos as $value ) {
            $result[$value->getArticleId()] = $value;
        }
        return $result;
    }
    
    /**
     * 根据标签ID获取所有的文章ID
     *
     * @param array $tagIds            
     * @return array
     * @author zhouwei
     */
    public function getArticleMapByTagIds(array $tagIds, $articleId = null){
        if (empty($tagIds)) {
            return array();
        }
        $mapInfos = $this->articleTagMapDao->getByTagIds($tagIds);
        $articleIds = array();
        foreach ( $mapInfos as $value ) {
            if (isset($articleId) && $articleId == $value->getArticleId()) {
                continue;
            }
            $articleIds[] = $value->getArticleId();
        }
        return array_unique($articleIds);
    }
    
    /**
     * 获取所有文章的标签信息，并获取各自的文章的条数
     *
     * @return array
     * @author zhouwei
     */
    public function getArchiveTag(){
        $tagMaps = $this->articleTagMapDao->getAllMapInfos();
        $allTag = $this->tagService->getAllTag();
        $result = array();
        foreach ( $tagMaps as $value ) {
            if (!isset($allTag[$value->getTagId()])) {
                continue;
            }
            if (isset($result[$value->getTagId()])) {
                $result[$value->getTagId()]['times'] = $result[$value->getTagId()]['times'] + 1;
            } else {
                $result[$value->getTagId()] = array(
                    'times' => 1,
                    'tag_name' => $allTag[$value->getTagId()]->getName() 
                );
            }
        }
        return $result;
    }
    
    /**
     * 保存文章与tag的map系你先
     * @param int $articleId
     * @param array $tagIds
     * @return void
     * @author zhouwei
     */
    public function saveArticleTagMap($articleId,array $tagIds){
        $tagIds = array_unique($tagIds);
        $this->articleTagMapDao->deleteByArticleId($articleId);
        foreach ($tagIds as $tagId){
            $this->articleTagMapDao->insert($articleId, $tagId);
        }
    }

    /**
	 * 根据文章ID删除tag的关系
	 * @param int $articleId
	 * @return int 影响的行数
	 * @author zhouwei
	 */
	public function deleteByArticleId($articleId){
		return $this->articleTagMapDao->deleteByArticleId($articleId);
	}
}
