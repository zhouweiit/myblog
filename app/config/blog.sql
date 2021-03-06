

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `article`
-- ----------------------------

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `title` varchar(128) NOT NULL COMMENT '文章标题',
  `content` longtext COMMENT '文章内容',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `category_id` int(11) NOT NULL COMMENT '分类ID',
  `headcontent` varchar(4000) DEFAULT NULL COMMENT '需要再list展示的文章内容',
  `headimage` varchar(128) DEFAULT NULL COMMENT '列表页图片',
  `comment_times` int(11) NOT NULL DEFAULT '0' COMMENT '评论的条数',
  `read_times` int(11) NOT NULL DEFAULT '0' COMMENT '阅读次数',
  `release_datetime` datetime NOT NULL COMMENT '发布时间',
  `is_delete` smallint(1) NOT NULL COMMENT '是否删除，0未删除，1删除',
  `creation_date` datetime DEFAULT NULL COMMENT '创建时间',
  `last_changed_date` datetime DEFAULT NULL COMMENT '上次修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `article`
-- ----------------------------

BEGIN;
INSERT INTO `article` VALUES ('1', '犯错了怎么办？2', '<p>2014第二版黑色Html5个人博客模板主题《如影随形》，如精灵般的影子会给人一种神秘的感觉。一张剪影图黑白搭配，如果整个网站用黑白灰三色，会显得比较太过沉重，于是，在选择亮色方面，用以红为主色，蓝为辅色。这样就铺上了一些神秘甚至有些俏皮的元素。2</p>\n\n<p>如果你更喜欢用蓝色或者绿色，这也不错，替换关键的颜色值就行了，推荐颜色值：<img alt=\"黑色Html5个人博客模板\" src=\"/static/frontend/images/color.jpg\" /></p>\n\n<p>Html5响应式两栏布局，LOGO重点突出，首页推荐文章列表以Logo中轴线为时间轴，鼠标Hover触发时间轴左侧栏显示文章发布时间，文字banner动画均以css3代码来实现效果。</p>\n\n<p><strong>首页效果图：</strong></p>\n\n<p><img alt=\"黑色Html5个人博客模板\" src=\"/static/frontend/images/xgt.jpg\" /></p>\n\n<p><strong>移动设备和平板电脑浏览效果：</strong></p>\n\n<p><img alt=\"黑色Html5个人博客模板\" src=\"/static/frontend/images/ltpic.jpg\" /></p>\n\n<p><img alt=\"黑色Html5个人博客模板\" src=\"/static/frontend/images/col.jpg\" /></p>', '1', '2', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>1', '/static/frontend/images/01.jpg', '3', '3', '2015-11-12 05:30:00', '0', '2015-09-23 17:26:34', '2015-11-14 23:36:46'), ('2', '2犯错了怎么办？', '呵呵看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '2', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/02.jpg', '28', '322', '2015-10-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-11-15 15:32:01'), ('3', '3犯错了怎么办？', '呵呵看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '3', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/03.jpg', '33', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('4', '4犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '4', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/03.jpg', '44', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('5', '5犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '5', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/04.jpg', '55', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('6', '6犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '6', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/04.jpg', '66', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('7', '7犯错了怎么办？', '呵呵看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '7', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '77', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('8', '8犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '8', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '88', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('9', '9犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '9', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '99', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('10', '10犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '1', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '10', '322', '2015-09-23 17:26:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('11', '11犯错了怎么办？', '呵呵看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '2', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '13', '322', '2015-09-23 17:28:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('12', '12犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '3', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '15', '322', '2015-09-23 17:28:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('13', '13犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '4', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '1', '322', '2015-09-23 17:28:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('14', '呵呵14犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '5', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '7', '322', '2015-09-23 17:28:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('15', '15犯错了怎么办？', '看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。', '1', '6', '<p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>\n          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>', '/static/frontend/images/01.jpg', '22', '322', '2015-09-23 17:28:31', '0', '2015-09-23 17:26:34', '2015-09-23 17:26:35'), ('16', 'test', '<p>test</p>', '0', '1', 'test', '/static/frontend/images/02.jpg', '2', '1', '2015-11-19 13:00:00', '0', '2015-11-12 13:30:27', '2015-11-12 14:17:57');
COMMIT;

-- ----------------------------
--  Table structure for `article_tag_map`
-- ----------------------------

DROP TABLE IF EXISTS `article_tag_map`;
CREATE TABLE `article_tag_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL COMMENT '文章ID',
  `tag_id` int(11) NOT NULL COMMENT '标签ID',
  `is_delete` smallint(1) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `last_changed_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `article_tag_map`
-- ----------------------------

BEGIN;
INSERT INTO `article_tag_map` VALUES ('1', '1', '1', '1', null, '2015-11-12 14:06:36'), ('2', '1', '2', '1', null, '2015-11-12 14:06:36'), ('3', '1', '3', '1', null, '2015-11-12 14:06:36'), ('4', '2', '2', '0', null, null), ('5', '2', '3', '0', null, null), ('6', '2', '4', '0', null, null), ('7', '3', '5', '0', null, null), ('8', '3', '6', '0', null, null), ('9', '3', '7', '0', null, null), ('10', '4', '7', '0', null, null), ('11', '4', '8', '0', null, null), ('12', '4', '9', '0', null, null), ('13', '5', '1', '0', null, null), ('14', '5', '2', '0', null, null), ('15', '5', '3', '0', null, null), ('16', '6', '2', '0', null, null), ('17', '6', '3', '0', null, null), ('18', '6', '4', '0', null, null), ('19', '7', '4', '0', null, null), ('20', '7', '5', '0', null, null), ('21', '7', '6', '0', null, null), ('22', '8', '5', '0', null, null), ('23', '8', '6', '0', null, null), ('24', '8', '7', '0', null, null), ('25', '9', '6', '0', null, null), ('26', '9', '7', '0', null, null), ('27', '9', '8', '0', null, null), ('28', '10', '7', '0', null, null), ('29', '10', '8', '0', null, null), ('30', '10', '9', '0', null, null), ('31', '11', '1', '0', null, null), ('32', '11', '2', '0', null, null), ('33', '11', '3', '0', null, null), ('34', '12', '2', '0', null, null), ('35', '12', '3', '0', null, null), ('36', '12', '4', '0', null, null), ('37', '13', '4', '0', null, null), ('38', '13', '5', '0', null, null), ('39', '13', '6', '0', null, null), ('40', '14', '5', '0', null, null), ('41', '14', '6', '0', null, null), ('42', '14', '7', '0', null, null), ('43', '15', '6', '0', null, null), ('44', '15', '7', '0', null, null), ('45', '15', '8', '0', null, null), ('46', '16', '1', '1', '2015-11-12 13:57:52', '2015-11-12 13:59:16'), ('47', '16', '9', '1', '2015-11-12 13:57:52', '2015-11-12 13:59:16'), ('48', '16', '1', '1', '2015-11-12 13:58:01', '2015-11-12 13:59:16'), ('49', '16', '1', '1', '2015-11-12 13:58:06', '2015-11-12 13:59:16'), ('50', '16', '1', '0', '2015-11-12 13:59:16', '2015-11-12 13:59:16'), ('51', '16', '9', '0', '2015-11-12 13:59:16', '2015-11-12 13:59:16'), ('52', '1', '2', '1', '2015-11-12 14:00:56', '2015-11-12 14:06:36'), ('53', '1', '2', '1', '2015-11-12 14:05:09', '2015-11-12 14:06:36'), ('54', '1', '2', '1', '2015-11-12 14:05:36', '2015-11-12 14:06:36'), ('55', '1', '2', '1', '2015-11-12 14:05:53', '2015-11-12 14:06:36'), ('56', '1', '2', '1', '2015-11-12 14:06:04', '2015-11-12 14:06:36'), ('57', '1', '2', '0', '2015-11-12 14:06:36', '2015-11-12 14:06:36');
COMMIT;

-- ----------------------------
--  Table structure for `category`
-- ----------------------------

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `pid` int(11) NOT NULL COMMENT '父分类ID',
  `name` varchar(64) NOT NULL COMMENT '分类名称',
  `depth` smallint(1) NOT NULL DEFAULT '0' COMMENT '分类深度',
  `priority` smallint(1) NOT NULL DEFAULT '1' COMMENT '优先级，越小，优先级越大',
  `is_delete` smallint(1) NOT NULL COMMENT '是否删除，0未删除，1已经删除',
  `creation_date` datetime DEFAULT NULL COMMENT '创建时间',
  `last_changed_date` datetime DEFAULT NULL COMMENT '上次修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `category`
-- ----------------------------

BEGIN;
INSERT INTO `category` VALUES ('1', '11', '技术文章', '2', '1', '0', null, null), ('2', '12', '幽默搞笑1', '2', '1', '0', null, null), ('3', '13', '心情随笔', '2', '1', '0', null, null), ('4', '11', '生活游记1', '2', '1', '0', null, null), ('5', '12', '计算机原理', '2', '1', '0', null, null), ('6', '13', '网络工程', '2', '1', '0', null, null), ('7', '11', '操作系统', '2', '1', '0', null, null), ('8', '12', '程序设计', '2', '1', '0', null, null), ('9', '13', '软件工程', '2', '1', '0', null, null), ('11', '0', '技术文档', '1', '2', '0', null, null), ('12', '0', '幽默搞笑', '1', '3', '0', null, null), ('13', '0', '生活杂记', '1', '4', '0', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `comment`
-- ----------------------------

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `article_id` int(11) NOT NULL COMMENT '文章ID',
  `content` varchar(4000) DEFAULT NULL COMMENT '评论信息',
  `pid` varchar(255) DEFAULT NULL COMMENT '引用的评论ID串',
  `name` varchar(64) NOT NULL COMMENT '名称',
  `email` varchar(128) DEFAULT NULL COMMENT '邮箱，非必填',
  `keywords` varchar(4000) DEFAULT '' COMMENT '评论中存在的关键字',
  `is_check` smallint(1) NOT NULL DEFAULT '0' COMMENT '是否审核通过，0为审核，1通过，2未通过',
  `release_datetime` datetime NOT NULL COMMENT '发布时间',
  `is_delete` smallint(1) NOT NULL COMMENT '是否删除。0未删除，1删除',
  `creation_date` datetime DEFAULT NULL COMMENT '创建时间',
  `last_changed_date` datetime DEFAULT NULL COMMENT '上次修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `comment`
-- ----------------------------

BEGIN;
INSERT INTO `comment` VALUES ('1', '1', '评论1,这真的是一个非常好的文章，值得推荐啊1', '', '游客1', null, '', '1', '2015-10-14 16:06:01', '0', null, null), ('2', '1', '评论1,这真的是一个非常好的文章，值得推荐啊2', '1', '游客2', null, '', '1', '2015-10-15 16:08:02', '0', null, null), ('3', '1', '评论1,这真的是一个非常好的文章，值得推荐啊3', '2,1', '游客3', null, '', '1', '2015-10-15 16:08:03', '0', null, null), ('4', '1', '评论1,这真的是一个非常好的文章，值得推荐啊4', '3,2', '游客4', null, '', '1', '2015-10-15 16:08:04', '0', null, null), ('5', '1', '评论1,这真的是一个非常好的文章，值得推荐啊5', '4,1', '游客5', null, '', '1', '2015-10-15 16:08:05', '0', null, null), ('6', '1', '评论1,这真的是一个非常好的文章，值得推荐啊6', '5,1', '游客6', null, '', '1', '2015-10-15 16:08:06', '0', null, null), ('7', '1', '评论1,这真的是一个非常好的文章，值得推荐啊7', '6,1', '游客7', null, '', '1', '2015-10-15 16:08:07', '0', null, null), ('8', '1', '评论1,这真的是一个非常好的文章，值得推荐啊8', '7', '游客8', null, '', '1', '2015-10-15 16:08:08', '0', null, null), ('9', '1', '评论1,这真的是一个非常好的文章，值得推荐啊9', '8,5,1', '游客9', null, '', '1', '2015-10-15 16:08:09', '0', null, null), ('10', '1', '评论1,这真的是一个非常好的文章，值得推荐啊10', '9,4,3,2,1', '游客10', null, '', '1', '2015-10-15 16:08:10', '0', null, null), ('11', '1', '评论1,这真的是一个非常好的文章，值得推荐啊11', '10,5', '游客11', null, '', '1', '2015-10-15 16:08:11', '0', null, null), ('12', '1', '评论1,这真的是一个非常好的文章，值得推荐啊12', '11,2,1', '游客12', null, '', '1', '2015-10-15 16:08:12', '0', null, null), ('13', '1', '评论1,这真的是一个非常好的文章，值得推荐啊', '12,11,10,9,8,7,6,5,4,3,2,1', '游客13', null, '', '1', '2015-10-15 16:08:29', '0', null, null), ('14', '1', '<div class=\"atuser\">@程序狗：</div>评论1,这真的是一个非常好的文章，值得推荐啊', '0', '游客15', null, '', '1', '2015-10-15 16:08:29', '0', null, null), ('15', '1', '评论1,这真的是一个非常好的文章，值得推荐啊', '0', '游客16', null, '', '1', '2015-10-15 16:08:29', '0', null, null), ('16', '1', '评论1,这真的是一个非常好的文章，值得推荐啊', '0', '游客17', null, '', '1', '2015-10-15 16:08:29', '0', null, null), ('17', '1', 'test', '', 'test', 'test', '', '1', '2015-10-21 17:00:28', '0', '2015-10-21 17:00:28', '2015-10-21 17:00:28'), ('18', '1', 'test', '', 'tets', 'tets', '', '1', '2015-10-21 17:02:00', '0', '2015-10-21 17:02:00', '2015-10-21 17:02:00'), ('19', '1', 'test', '', 'tets', 'tets', '', '1', '2015-10-21 17:02:14', '0', '2015-10-21 17:02:14', '2015-10-21 17:02:14'), ('20', '1', '<div class=\"atuser\">@tets：</div>\r\ntest', null, 'test', '$pid', '', '1', '2015-10-21 17:04:53', '0', '2015-10-21 17:04:53', '2015-10-21 17:04:53'), ('21', '1', '<div class=\"comment_quote_hider\">#10</div>\r\ntest', '10,9,4,3,2,1', 'test', 'test', '', '1', '2015-10-21 17:14:11', '0', '2015-10-21 17:14:11', '2015-10-21 17:14:11'), ('22', '1', '<div class=\"comment_quote_hider\">#20</div>\r\ntest', '20,', 'test', 'test', '', '1', '2015-10-21 17:22:41', '0', '2015-10-21 17:22:41', '2015-10-21 17:22:41'), ('23', '1', '<div class=\"atuser\">@游客15：</div>\r\ntest', null, 'aaa', 'bbb', '', '1', '2015-10-21 17:23:52', '0', '2015-10-21 17:23:52', '2015-10-21 17:23:52'), ('24', '1', '<div class=\"atuser\">@aaa：</div>\r\ntest', null, 'test', 'test', '', '1', '2015-10-21 17:24:10', '0', '2015-10-21 17:24:10', '2015-10-21 17:24:10'), ('25', '1', '<div class=\"atuser\">@test：</div>\r\nbbb', null, 'bbb', 'bbb', '', '1', '2015-10-21 17:24:27', '0', '2015-10-21 17:24:27', '2015-10-21 17:24:27'), ('26', '1', '<div class=\"comment_quote_hider\">#25</div>\r\nbbb', '25,', 'bbb', 'bbb', '', '1', '2015-10-21 17:24:38', '0', '2015-10-21 17:24:38', '2015-10-21 17:24:38'), ('27', '1', '<div class=\"comment_quote_hider\">#25</div>\r\n只能呵呵了', '25,', '程序员', 'chengxu@baidu.com', '', '1', '2015-10-21 17:25:45', '0', '2015-10-21 17:25:45', '2015-10-21 17:25:45'), ('28', '1', '<div class=\"comment_quote_hider\">#23</div>\r\n吼吼', '23,', '呵呵', '哈哈', '', '1', '2015-10-21 17:26:12', '0', '2015-10-21 17:26:12', '2015-10-21 17:26:12'), ('29', '1', '小旋风的评论', null, '小旋风', 'xiaoxuanfeng@baidu.com', '', '1', '2015-10-21 17:32:01', '0', '2015-10-21 17:32:01', '2015-10-21 17:32:01'), ('30', '1', '这篇文章的确写的非常的不错，很深入的描写了文章的主题，CSS布局的非常不错。\r\n建议楼主开源出来，大家可以共享。\r\n谢谢哈', null, '小旋风', 'xiaoxuanfeng@baidu.com', '', '1', '2015-10-21 17:32:41', '0', '2015-10-21 17:32:41', '2015-10-21 17:32:41'), ('31', '1', '<div class=\"comment_quote_hider\">#30</div>\r\n嗯，的确，我建议楼主多出点类似的这种文章。', '30,', '小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 10:44:30', '0', '2015-10-22 10:44:30', '2015-10-22 10:44:30'), ('32', '1', '<div class=\"comment_quote_hider\">#31</div>\r\n评价的很棒，这个开发的确实不错！！', '31,30,', '小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 11:43:28', '0', '2015-10-22 11:43:28', '2015-10-22 11:43:28'), ('33', '1', 'test', null, '小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 11:54:41', '0', '2015-10-22 11:54:41', '2015-10-22 11:54:41'), ('34', '1', 'test', null, '小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 11:55:30', '0', '2015-10-22 11:55:30', '2015-10-22 11:55:30'), ('35', '1', 'test', null, '小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 11:55:49', '0', '2015-10-22 11:55:49', '2015-10-22 11:55:49'), ('36', '1', '小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:00:50', '0', '2015-10-22 12:00:50', '2015-10-22 12:00:50'), ('37', '1', '小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:00:57', '0', '2015-10-22 12:00:57', '2015-10-22 12:00:57'), ('38', '1', '小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:01:06', '0', '2015-10-22 12:01:06', '2015-10-22 12:01:06'), ('39', '1', '小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:01:32', '0', '2015-10-22 12:01:32', '2015-10-22 12:01:32'), ('40', '1', '小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:03:19', '0', '2015-10-22 12:03:19', '2015-10-22 12:03:19'), ('41', '1', '小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:03:56', '0', '2015-10-22 12:03:56', '2015-10-22 12:03:56'), ('42', '1', 'print_r($userInfo);\r\nprint_r($comments);exit;', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:05:05', '0', '2015-10-22 12:05:05', '2015-10-22 12:05:05'), ('43', '1', 'test', null, '小旋风小旋风小旋风小旋风小旋风小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:06:24', '0', '2015-10-22 12:06:24', '2015-10-22 12:06:24'), ('44', '1', '小旋风', null, '小旋风', '小旋风', '', '0', '2015-10-22 12:07:11', '0', '2015-10-22 12:07:11', '2015-10-22 12:07:11'), ('45', '1', '小旋风', null, '小旋风小旋风小旋风', '小旋风', '', '0', '2015-10-22 12:07:20', '0', '2015-10-22 12:07:20', '2015-10-22 12:07:20'), ('46', '1', '小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风', '小旋风小旋风小旋风', '', '0', '2015-10-22 12:07:36', '0', '2015-10-22 12:07:36', '2015-10-22 12:07:36'), ('47', '1', '小旋风小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风', '小旋风小旋风小旋风', '', '0', '2015-10-22 12:07:43', '0', '2015-10-22 12:07:43', '2015-10-22 12:07:43'), ('48', '1', '小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风', '小旋风小旋风小旋风', '', '0', '2015-10-22 12:07:49', '0', '2015-10-22 12:07:49', '2015-10-22 12:07:49'), ('49', '1', '小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风', '小旋风小旋风小旋风', '', '0', '2015-10-22 12:07:51', '0', '2015-10-22 12:07:51', '2015-10-22 12:07:51'), ('50', '1', '小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风', '小旋风小旋风小旋风', '', '0', '2015-10-22 12:07:52', '0', '2015-10-22 12:07:52', '2015-10-22 12:07:52'), ('51', '1', '小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风小旋风', null, '小旋风小旋风小旋风小旋风', '小旋风小旋风小旋风', '', '0', '2015-10-22 12:07:54', '0', '2015-10-22 12:07:54', '2015-10-22 12:07:54'), ('52', '1', '他', null, '小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:08:19', '0', '2015-10-22 12:08:19', '2015-10-22 12:08:19'), ('53', '1', '小旋风小旋风小旋风小旋风小旋风', null, '小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:08:38', '0', '2015-10-22 12:08:38', '2015-10-22 12:08:38'), ('54', '1', '小旋风小旋风小旋风小旋风小旋风', null, '小旋风', 'xiaoxuanfeng@baidu.com', '', '0', '2015-10-22 12:08:54', '0', '2015-10-22 12:08:54', '2015-10-22 12:08:54'), ('55', '1', '小旋风 ', null, '小旋风 小旋风 ', '小旋风 小旋风 ', '', '0', '2015-10-22 12:13:21', '0', '2015-10-22 12:13:21', '2015-10-22 12:13:21'), ('56', '1', '小旋风 小旋风 小旋风 ', null, '小旋风 小旋风 ', '小旋风 小旋风 ', '', '0', '2015-10-22 12:13:25', '0', '2015-10-22 12:13:25', '2015-10-22 12:13:25'), ('57', '1', '小旋风', null, '小旋风', '小旋风', '', '0', '2015-10-22 12:16:52', '0', '2015-10-22 12:16:52', '2015-10-22 12:16:52'), ('58', '1', '小旋风', null, '小旋风', '小旋风', '', '0', '2015-10-22 12:17:00', '0', '2015-10-22 12:17:00', '2015-10-22 12:17:00'), ('59', '0', '收条留言测试', null, '小旋风', '小旋风', '', '0', '2015-10-22 18:12:13', '0', '2015-10-22 18:12:13', '2015-10-22 18:12:13'), ('60', '0', '第二条留言测试！', null, '小旋风', '小旋风', '', '0', '2015-10-22 18:14:35', '0', '2015-10-22 18:14:35', '2015-10-22 18:14:35'), ('61', '0', '第三条留言测试', null, '小旋风', '小旋风', '', '0', '2015-10-22 18:17:08', '0', '2015-10-22 18:17:08', '2015-10-22 18:17:08'), ('62', '0', '第四条留言', null, '小旋风', '小旋风', '', '0', '2015-10-22 18:21:44', '0', '2015-10-22 18:21:44', '2015-10-22 18:21:44'), ('63', '0', '<div class=\"atuser\">@小旋风：</div>\r\n测试回复', null, '小旋风', '小旋风', '', '0', '2015-10-22 18:30:26', '0', '2015-10-22 18:30:26', '2015-10-22 18:30:26'), ('64', '0', '<div class=\"comment_quote_hider\">63</div>\r\n测试引用', '63,', '小旋风', '小旋风', '', '0', '2015-10-22 18:30:34', '0', '2015-10-22 18:30:34', '2015-10-22 18:30:34'), ('65', '2', '这个文章很好', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-22 22:47:37', '0', '2015-10-22 22:47:37', '2015-10-22 22:47:37'), ('66', '2', '这个文章很好', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-22 22:47:46', '0', '2015-10-22 22:47:46', '2015-10-22 22:47:46'), ('67', '2', 'test', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-22 22:47:55', '0', '2015-10-22 22:47:55', '2015-10-22 22:47:55'), ('68', '2', 'test很好的', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-22 22:50:21', '0', '2015-10-22 22:50:21', '2015-10-22 22:50:21'), ('69', '2', '这篇文章非常好，多谢博主的这篇文章', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-22 22:51:12', '0', '2015-10-22 22:51:12', '2015-10-22 22:51:12'), ('70', '0', 'test', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 17:17:30', '0', '2015-10-26 17:17:30', '2015-10-26 17:17:30'), ('71', '1', 'test', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 17:17:38', '0', '2015-10-26 17:17:38', '2015-10-26 17:17:38'), ('72', '1', 'test', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 17:17:46', '0', '2015-10-26 17:17:46', '2015-10-26 17:17:46'), ('73', '1', 'test', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 17:54:45', '0', '2015-10-26 17:54:45', '2015-10-26 17:54:45'), ('74', '1', 'test啊发撒都疯', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 18:00:04', '0', '2015-10-26 18:00:04', '2015-10-26 18:00:04'), ('75', '0', '楼主你好，我哈哈', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 18:07:29', '0', '2015-10-26 18:07:29', '2015-10-26 18:07:29'), ('76', '0', '楼主，好啊', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 18:07:39', '0', '2015-10-26 18:07:39', '2015-10-26 18:07:39'), ('77', '0', '锚点跳', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 18:08:19', '0', '2015-10-26 18:08:19', '2015-10-26 18:08:19'), ('78', '1', '锚点跳起来', null, '小旋风', 'zhouwei_work@163.com', '', '0', '2015-10-26 18:08:31', '0', '2015-10-26 18:08:31', '2015-10-26 18:08:31'), ('79', '16', '*** *** 呵呵 江泽民 第六代领导第3代领导', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 18:17:25', '0', '2015-11-14 18:17:25', '2015-11-14 18:17:25'), ('80', '16', '呵呵', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 18:17:52', '0', '2015-11-14 18:17:52', '2015-11-14 18:17:52'), ('81', '1', 'hehe ', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 18:18:56', '0', '2015-11-14 18:18:56', '2015-11-14 18:18:56'), ('82', '1', '江泽民', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 18:19:02', '0', '2015-11-14 18:19:02', '2015-11-14 18:19:02'), ('83', '1', '江泽民 ***', null, '小旋风', 'zhouwei_work@163.com', '江泽民', '1', '2015-11-14 18:22:29', '0', '2015-11-14 18:22:29', '2015-11-15 11:20:00'), ('84', '1', 'test', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 23:11:23', '0', '2015-11-14 23:11:23', '2015-11-14 23:11:23'), ('85', '1', 'test', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 23:12:09', '0', '2015-11-14 23:12:09', '2015-11-14 23:12:09'), ('86', '1', 'test', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 23:12:25', '0', '2015-11-14 23:12:25', '2015-11-14 23:12:25'), ('87', '1', '哈哈，怎么回答', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 23:12:41', '0', '2015-11-14 23:12:41', '2015-11-14 23:12:41'), ('88', '1', '呵呵\r\n哈哈\r\n吼吼', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-14 23:36:46', '0', '2015-11-14 23:36:46', '2015-11-14 23:36:46'), ('89', '16', '江泽民 第六代领导第3代领导', null, '小旋风', 'zhouwei_work@163.com', '第六代领导|第3代领导|江泽民', '0', '2015-11-15 13:17:10', '0', '2015-11-15 13:17:10', '2015-11-15 13:17:10'), ('90', '2', '&lt;adfasdf&gt;adf&#x27;|&quot;|&amp;', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-15 14:30:17', '0', '2015-11-15 14:30:17', '2015-11-15 14:30:17'), ('91', '2', '@小旋风：\r\n我顶楼主了', '65,', '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-15 14:34:52', '0', '2015-11-15 14:34:52', '2015-11-15 14:34:52'), ('92', '2', '@小旋风：\r\n我顶楼主', null, '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-15 14:35:07', '0', '2015-11-15 14:35:07', '2015-11-15 14:35:07'), ('93', '2', '@小旋风：\r\n特殊', '65,', '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-15 14:37:08', '0', '2015-11-15 14:37:08', '2015-11-15 14:37:08'), ('94', '2', '#9\r\n盖盖盖', '65,', '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-15 14:53:48', '0', '2015-11-15 14:53:48', '2015-11-15 14:53:48'), ('95', '2', '盖楼：test', '65,', '小旋风', 'zhouwei_work@163.com', null, '1', '2015-11-15 15:32:01', '0', '2015-11-15 15:32:01', '2015-11-15 15:32:01');
COMMIT;

-- ----------------------------
--  Table structure for `file`
-- ----------------------------

DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增主键ID',
  `file_name` varchar(255) NOT NULL COMMENT '文件名称',
  `path` varchar(355) NOT NULL COMMENT '文件路径',
  `size` decimal(12,2) NOT NULL,
  `extension` varchar(20) NOT NULL COMMENT '文件扩展',
  `is_delete` smallint(1) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `last_changed_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `file`
-- ----------------------------
BEGIN;
INSERT INTO `file` VALUES ('1', '图片1', '/static/frontend/images/001.jpg', '0.00', 'jpg', '0', '2015-11-12 23:34:42', null), ('2', '图片2', '/static/frontend/images/002.jpg', '0.00', 'jpg', '0', null, null), ('3', '图片3', '/static/frontend/images/003.jpg', '0.00', 'jpg', '0', null, null), ('4', '图片4', '/static/frontend/images/004.jpg', '0.00', 'jpg', '0', null, null), ('5', '图片5', '/static/frontend/images/005.jpg', '0.00', 'jpg', '0', null, null), ('6', '图片6', '/static/frontend/images/006.jpg', '0.00', 'jpg', '0', null, null), ('7', '图片7', '/static/frontend/images/007.jpg', '0.00', 'jpg', '0', null, null), ('8', '图片8', '/static/frontend/images/008.jpg', '0.00', 'jpg', '0', null, null), ('9', '图片9', '/static/frontend/images/01.jpg', '0.00', 'jpg', '0', null, null), ('10', '图片11', '/static/frontend/images/01.jpg', '0.00', 'jpg', '0', null, null), ('11', '图片12', '/static/frontend/images/02.jpg', '0.00', 'jpg', '0', null, null), ('12', '图片13', '/static/frontend/images/03.jpg', '0.00', 'jpg', '0', null, null), ('13', '图片14', '/static/frontend/images/xgt.jpg', '0.00', 'jpg', '0', null, null), ('14', 'people.png', '/upload/image/2015_11/1447425499people.png', '0.00', 'png', '0', '2015-11-13 22:38:19', '2015-11-13 22:38:19'), ('15', 'zyUpload.zip', '/upload/other/2015_11/1447425499zyUpload.zip', '0.00', 'zip', '0', '2015-11-13 22:38:19', '2015-11-13 22:38:19'), ('16', 'imglogo-r.png', '/upload/image/2015_11/1447425499imglogo-r.png', '0.00', 'png', '0', '2015-11-13 22:38:19', '2015-11-13 22:38:19'), ('17', 'zyUpload.zip', '/upload/other/2015_11/1447427398zyUpload.zip', '0.00', 'zip', '0', '2015-11-13 23:09:58', '2015-11-13 23:09:58'), ('18', '1447425499zyUpload.zip', '/upload/other/2015_11/14474279581447425499zyUpload.zip', '236.55', 'zip', '0', '2015-11-13 23:19:18', '2015-11-13 23:19:18'), ('19', 'weiyingxiaojuezezhuli.jpg', '/upload/image/2015_11/1447428878weiyingxiaojuezezhuli.jpg', '9.35', 'jpg', '0', '2015-11-13 23:34:38', '2015-11-13 23:34:38'), ('20', '01_BAIDU_ZCB_Data_color.jpg', '/upload/image/2015_11/144742892401_BAIDU_ZCB_Data_color.jpg', '114.54', 'jpg', '0', '2015-11-13 23:35:24', '2015-11-13 23:35:24');
COMMIT;

-- ----------------------------
--  Table structure for `links`
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增好组件',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '连接的名称',
  `url` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '网站的连接',
  `is_delete` smallint(1) NOT NULL DEFAULT '0' COMMENT '0有效，1无效',
  `creation_date` datetime DEFAULT NULL,
  `last_changed_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `links`
-- ----------------------------

BEGIN;
INSERT INTO `links` VALUES ('1', '网易', 'http://www.163.com', '0', null, null), ('2', '百度', 'http://www.baidu.com', '0', null, null), ('3', '微博', 'http://www.weibo.com', '0', null, null), ('4', '阿里妈妈', 'http://www.tmall.com', '0', null, null), ('5', '房天下', 'http://www.fang.com', '0', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `tag`
-- ----------------------------

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '标签名称',
  `category_id` int(11) NOT NULL,
  `is_delete` smallint(1) NOT NULL DEFAULT '0' COMMENT '是否删除，0未删除，1已经删除',
  `creation_date` datetime DEFAULT NULL,
  `last_changed_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tag`
-- ----------------------------

BEGIN;
INSERT INTO `tag` VALUES ('1', 'HTTP', '1', '0', null, null), ('2', 'TCP/IP', '2', '0', null, null), ('3', 'JAVA', '3', '0', null, null), ('4', '照片', '4', '0', null, null), ('5', '杂谈', '5', '0', null, null), ('6', '暴走漫画', '6', '0', null, null), ('7', '轻松一刻', '7', '0', null, null), ('8', 'Linux', '9', '0', null, null), ('9', 'Mysql', '1', '0', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL COMMENT '登录名',
  `password` varchar(128) NOT NULL COMMENT 'md5(密码)',
  `nicename` varchar(64) NOT NULL COMMENT '昵称',
  `email` varchar(64) DEFAULT NULL COMMENT '邮箱',
  `status` smallint(1) NOT NULL DEFAULT '1' COMMENT '是否有效，0无效，1有效',
  `is_delete` smallint(1) NOT NULL DEFAULT '0' COMMENT '是否删除，0未删除，1删除',
  `creation_date` datetime DEFAULT NULL COMMENT '创建时间',
  `last_changed_date` datetime DEFAULT NULL COMMENT '上次修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `user`
-- ----------------------------


SET FOREIGN_KEY_CHECKS = 1;
