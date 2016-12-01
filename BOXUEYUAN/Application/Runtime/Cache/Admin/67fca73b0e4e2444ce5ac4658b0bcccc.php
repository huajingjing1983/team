<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>用户-列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="/BOXUEYUAN1/Public/after/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/BOXUEYUAN1/Public/after/css/admincss.css">  
   
</head>
<body>
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                     <a href="<?php echo U('index/index');?>">首页</a>
                  </li>  
                  <li>
                     <a href="#">网站首页</a>
                  </li>                                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="<?php echo U('admin/all');?>">管理员</a>
                  </li>
                  <li>
                     <a href="<?php echo U('admin/password');?>">修改密码</a>
                  </li>
                  <li>
                     <a href="<?php echo U('admin/login');?>">退出</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="row clearfix">
               <div class="col-md-2 column" id="admin-list">
                <img alt="140*140" src="/BOXUEYUAN1/Public/after/images/logo.png" width="70%" id="logopic"/>
              <div class="list-group">
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 用户管理</a>
                  <div class="list-group-item">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user_all.html">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user_add.html" style="color:blue">添加用户</a>
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
                  <li><a href="<?php echo U('index/index');?>">首页</a></li>
                  <li><a href="<?php echo U('admin/all');?>">管理员管理</a></li>
                  <li class="active">所有管理员</li>
                </ul>
              <form  action="/BOXUEYUAN1/index.php/Admin/admin/delete" role="form" >
                <div class="row" id="add-del">
            
                	<div class="col-md-2 column">
                	  <span class="glyphicon  glyphicon-user"></span> <a href="<?php echo U('admin/add');?>">添加管理员</a>
		            </div>
		       
		        <div class="col-md-2 column">
			         <button type="submit"><span class="glyphicon  glyphicon-user">批量删除</a></span> </button>
		        </div>
		        <div class="col-md-3 column">
		        </div>
		       <div class="col-md-5 column"><input type="text" id="search" value="请输入信息"><span><button>搜索</button></span> 
		       </div>
                </div>
                <div class="row" id="admin-table" style="margin-left: 3%">
                <table class="table" style="margin-left: 0%; border-spacing:0px;  " >
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="checkbox-all"></th>
                       <th>adminID</th>
                      <th>管理员姓名</th>
                      <th> 注册时间</th>
                      <th> 最近一次登录时间 </th>
                       <th>操作</th>
                    </tr>
                  </thead>
           <!--        <tbody> 
                    <tr class="info">
                    <td> <input type="checkbox" id="checkbox1"> </td>
                     <td>1</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td> Call in to confirm</td>
                    <td> <a href="delete/userId/<?php echo ($u["id"]); ?>">删除</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="<?php echo U('admin/edit');?>">编辑</a></td>
                    </tr>
                       <tr class="info">
                    <td> <input type="checkbox" id="checkbox1"> </td>
                     <td>1</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td> Call in to confirm</td>
                    <td> <a href="delete/userId/<?php echo ($u["id"]); ?>">删除</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="<?php echo U('admin/edit');?>">编辑</a></td>
                    </tr>
 <tr class="info">
                    <td> <input type="checkbox" id="checkbox1"> </td>
                     <td>1</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td> Call in to confirm</td>
                    <td> <a href="delete/userId/<?php echo ($u["id"]); ?>">删除</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="<?php echo U('admin/edit');?>">编辑</a></td>
                    </tr>

                     <tr class="info">
                    <td> <input type="checkbox" id="checkbox2"> </td>
                     <td>2</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td> Call in to confirm</td>
                    <td> <a href="delete/Gid/<?php echo ($u["id"]); ?>">删除</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="<?php echo U('admin/edit');?>">编辑</a></td>
                    </tr>
                  </tbody> -->
<!--              
<form action="/BOXUEYUAN1/index.php/Admin/admin/delete"> -->
             <?php if(is_array($administrator)): $i = 0; $__LIST__ = $administrator;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
                <td><input type="checkbox" name="administratorId[]" id="checkbox" value="<?php echo ($u["gid"]); ?>">
                  <label for="checkbox"></label></td>
                <td><?php echo ($u["gid"]); ?></td>
                <td><?php echo ($u["username"]); ?></td>
                
                <td><?php echo ($u["registertime"]); ?> </td>
                <td><?php echo ($u["lasttime"]); ?> </td>
                <td><a href="/BOXUEYUAN1/index.php/Admin/admin/edit/administratorId/<?php echo ($u["gid"]); ?>">编辑</a><a href="#"></a> <a href="delete/administratorId/<?php echo ($u["gid"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>


<!-- </form> -->





                </table>

                </div>
            </form>
               <!--  <ul class="pagination">
                  <li> <a href="#">Prev</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a> </li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">Next</a></li>
                </ul> -->
                <div style="float: right;">
                <?php echo ($page); ?>
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


</body>
<script src="/BOXUEYUAN1/Public/after/js/jquery.js"></script>    
<script src="/BOXUEYUAN1/Public/after/js/bootstrap.min.js"></script>
<!-- <script src="/BOXUEYUAN1/Public/after/js/null_user.js"></script> -->

</html>