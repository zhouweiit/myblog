<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <link href="{%uri name="backend:static/css/common.css"%}" rel="stylesheet">
  <link href="{%uri name="backend:static/css/style.css"%}" rel="stylesheet">
  <script src="{%uri name="common:static/js/jquery-1.8.1.min.js"%}"></script>
  <script src="{%uri name="backend:static/js/jquery.SuperSlide.js"%}"></script>
  <script src="{%uri name="backend:static/js/common.js"%}"></script>
  <script type="text/javascript">
  $(function(){
      $("#logout").click(function(){
          $.ajax({
              url: '/backend/login/logout',
              type: 'post',
              success: function( resp, status ) {
                  window.location = "/backend/login/index";
              },
              error: function (data, status, e)
              {
              }
          });
      });
  });
  </script>
	
  <title>zwiter博客管理后台</title>
</head>
<body>
    <div class="top">
      <div id="top_t">
        <div id="logo" class="fl">只有逆风的方向，才更适合飞翔</div>
        <div id="photo_info" class="fr">
          <div id="photo" class="fl">
          </div>
          <div id="base_info" class="fr">
            <div class="help_info">
            </div>
            <div class="info_center">
                <a href="javascript:void(0)" id="logout" style="color:white;">退出登录</a>
            </div>
          </div>
        </div>
      </div>
      <div id="side_here">
        <div id="side_here_l" class="fl"></div>
        <div id="side_here_r">欢迎您</div>
      </div>
    </div>
    <div class="side">
        <div class="sideMenu" style="margin:0 auto">
          <h3>文章管理</h3>
          <ul>
            <li href="/backend/article/list">文章列表</li>
            <li href="/backend/article/release">文章发布</li>
            <li href="/backend/comment/list">评论审核</li>
          </ul>
          <h3>文件管理</h3>
          <ul>
            <li href="/backend/file/list">文件列表</li>
            <li href="/backend/file/upload">文件上传</li>
          </ul>
          <h3>字典管理</h3>
          <ul>
            <li>分类管理</li>
            <li>标签管理</li>
            <li>友情链接管理</li>
          </ul>
          <h3>工具集</h3>
          <ul>
            <li href="/backend/index/main">html demo</li>
          </ul>
       </div>
    </div>
    <div class="main">
       <iframe name="right" id="rightMain" src="/backend/index/welcom" frameborder="no" scrolling="auto" width="100%" height="auto" allowtransparency="true"></iframe>
    </div>
    <div class="bottom">
      <div id="bottom_bg">zwiter博客管理后台</div>
    </div>
    <div class="scroll">
        <a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(1);"></a>
        <a href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(2);"></a>
    </div>
</body>
</html>