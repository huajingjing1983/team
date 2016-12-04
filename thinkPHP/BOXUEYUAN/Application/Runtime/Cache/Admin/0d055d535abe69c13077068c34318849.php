<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>用户-列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/admincss.css">  
   <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/news_all.css">
</head>
<body>
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                     <a href="<?php echo U('Admin/Index/index');?>">首页</a>
                  </li>  
                  <li>
                     <a href="#">网站首页</a>
                  </li>                                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="admin_all.html">管理员</a>
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
                <!--<img alt="140*140" src="/BOXUEYUAN/Public/after/images/logo.png" width="70%" id="logopic"/>-->
              <div class="list-group">
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 用户管理</a>
                  <div class="list-group-item">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/User/user_all');?>">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/User/user_add');?>" >添加用户</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 名师管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/Teacher/teacher_all');?>">名师列表</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/Teacher/teacher_add');?>">添加名师</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-play-circle"></span> 视频管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/video/video_all');?>">所有视频</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/video/video_add');?>">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/Test/test_all');?>">所有资料</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/Test/test_add');?>">添加资料</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 教材管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/Book/book_all');?>">所有教材</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/Book/book_add');?>">添加教材</a>
                  </div>
                  <a href="#" class="list-group-item active"><span class="glyphicon  glyphicon-globe"></span>新闻管理</a>
                  <div class="list-group-item">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Admin/News/all');?>">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/News/add');?>">添加新闻</a>
                  </div>
                </div>
              </div>
               
              <div class="col-md-10 column">
                <ul class="breadcrumb">
                  <li><a href="admin_index.html">首页</a></li> 
                  <li><a href="teacher_all.html">资料试题</a></li>
                  <li class="active">所有资料</li>
                </ul>
                <form action="/BOXUEYUAN/index.php/Admin/Test/del">
                <div class="row" id="add-del">
                
                	<div class="col-md-2 column">
                	  
                    <button type="button"><span class="glyphicon  glyphicon-user"></span> <a href="test_add.html"  >添加资料</a></button>
		            </div>
		       
		        <div class="col-md-2 column">
                 <button type="submit"><span class="glyphicon  glyphicon-user"></span> 批量删除</button>
		        </div>
		        <div class="col-md-3 column">
		        </div>
		       <div class="col-md-5 column"><input type="text" id="search" value="请输入信息"><span><button>搜索</button></span> 
		       </div>
                </div>
                <div class="row" id="admin-table">
                <table class="table" style="margin-left:-40px">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="checkbox-all"></th>
                       <th>ID</th>
                      <th>科目</th>
                      <th>年级</th>
                      <th> 资料名称 </th>
                      <th>摘要</th>
                      <th>上传时间</th>
                      <th>更新时间</th>
                    </tr>
                  </thead>
                  <tbody> 
                  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr >
                    <td> <input name="dataId[]" type="checkbox" id="checkbox" value="<?php echo ($d["id"]); ?>" /></td>
                    <td> <?php echo ($d["id"]); ?></td>
                    <td> <?php echo ($d["grade"]); ?></td>
                    <td> <?php echo ($d["zname"]); ?></td>
                    <td> <?php echo ($d["zhaiyao"]); ?></td>
                    <td> <?php echo ($d["addtime"]); ?></td>
                    <td> <?php echo ($d["updatetime"]); ?></td>
                    <td> <a href="/BOXUEYUAN/index.php/Admin/Test/test_edit/id/<?php echo ($d["id"]); ?>">编辑</a>/<a  href="del/dataId/<?php echo ($d["id"]); ?>">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    
                  </tbody>
                </table>
                 
                </div>
                </form>
              <div style="float:right"><?php echo ($page); ?></div>
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
<script src="/BOXUEYUAN/Public/after/js/jquery.js"></script>    
<script src="/BOXUEYUAN/Public/after/js/bootstrap.min.js"></script>
<!--<script src="/BOXUEYUAN/Public/after/js/null_user.js"></script>-->

</html>