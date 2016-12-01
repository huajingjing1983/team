<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>用户-列表</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/admincss.css">	
  <link rel="stylesheet" href="css/admin_style.css">
  
</head>
<body>
  <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active">
                     <a href="admin_index.html">首页</a>
                  </li>  
                  <li>
                     <a href="#">网站首页</a>
                  </li>                                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a href="<?php echo U('admin/admin_all');?>">1管理员</a>
                  </li>
                  <li>
                     <a href="admin_password.html">修改密码</a>
                  </li>
                  <li>
                     <a href="login.html">退出</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="row clearfix">
               <div class="col-md-2 column" id="admin-list">
                <img alt="140*140" src="/BXY/Public/end/images/logo.png" width="70%" id="logopic"/>
                <div class="list-group">
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 用户管理</a>
                  <div class="list-group-item">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user_all.html">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user_add.html">添加用户</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 名师管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="teacher_all.html">名师列表</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="teacher_add.html">添加名师</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-play-circle"></span> 视频管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="video_all.html">所有视频</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="video_add.thml">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="book_all.html">所有资料</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="book_add.html">添加资料</a>
                  </div>
                  <a href="#" class="list-group-item active"><span class="glyphicon  glyphicon-globe"></span>新闻管理</a>
                  <div class="list-group-item">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="news_all.html">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="news_add.html">添加新闻</a>
                  </div>
                </div>

              </div>
              <div class="col-md-10 column">
                <ul class="breadcrumb">
                  <li><a href="admin_index.html">首页</a></li>
                
                  <li class="active"></li>
                </ul>

                <div class="row" id="welcome">          
                    <div class=" col-md-1 column">
                    <img alt="80*80" src="/BXY/Public/end/images/logo.png" />
                    </div>
                    <div class="col-md-11 column">
                    <p>
                     欢迎登陆博学苑网站后台
                    </p>
                    </div>
                </div> 
                <div id="message" class="row"> 
                      <h2>网站信息：</h2>
                      <h3>网站版本：</h3>
                      <p>博学网站V1.0版本</p>
                   
                      <h3>网站定位：</h3>
                      <p>该网站面向各高校高中学生和老师，使其可以在网上学习</p>
                      <h3>网站兼容性：</h3>
                      <p>兼容谷歌浏览器，火狐等浏览器，不兼容IE9以下版本及360浏览器</p>
                </div>
                
              </div>
            </div>
          </div>
	</div>
	<div class="row" id="admin-footer">
		<div class="col-md-12 column">
			<p style="text-align:center;padding-top:20px;">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p style="text-align:center;">冀ICP备XXXXXXXX号-X    站长统计</p>
		</div>
	</div>
</div>

</body>
<script src="js/jquery.js"></script>    
<script src="js/bootstrap.min.js"></script>	
</html>