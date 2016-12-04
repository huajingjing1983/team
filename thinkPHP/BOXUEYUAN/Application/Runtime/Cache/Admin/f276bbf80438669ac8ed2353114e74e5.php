<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>用户-列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/admincss.css">  
   <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/news_all.css">
  <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/admin_style.css">
</head>
<body>
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                     <a href="/BOXUEYUAN/index.php/Admin/Index/index">首页</a>
                  </li>  
                  <li>
                     <a href="#">网站首页</a>
                  </li>                                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="/BOXUEYUAN/index.php/Admin/Admin/all">管理员</a>
                  </li>
                  <li>
                     <a href="/BOXUEYUAN/index.php/Admin/Admin/password">修改密码</a>
                  </li>
                  <li>
                     <a href="/BOXUEYUAN/index.php/Admin/Login/login">退出</a>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/User/user_all">所有用户</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/User/user_add" >添加用户</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-user"></span> 名师管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/Teacher/teacher_all">名师列表</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/Teacher/teacher_add">添加名师</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-play-circle"></span> 视频管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/video/video_all">所有视频</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/video/video_add">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/Test/test_all">所有资料</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/Test/test_add">添加资料</a>
                  </div>
                   <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 教材管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/Book/book_all">所有教材</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/Book/book_add">添加教材</a>
                  </div>
                  <a href="#" class="list-group-item active"><span class="glyphicon  glyphicon-globe"></span>新闻管理</a>
                  <div class="list-group-item">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/BOXUEYUAN/index.php/Admin/News/all">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/BOXUEYUAN/index.php/Admin/News/add">添加新闻</a>
                  </div>
                </div>
              </div>
              ﻿
              <div class="col-md-10 column">  
                <ul class="breadcrumb">
                  <li>
                     <a href="/BOXUEYUAN/index.php/Admin/Index/index"><span class="glyphicon  glyphicon-home"></span> 首页</a>
                  </li>
                  <li>
                     <a href="/BOXUEYUAN/index.php/Admin/Book/book_all">教材管理</a>
                  </li>
                  <li class="active">
                    所有教材
                  </li>
                </ul>
                <div class="row" id="book_top"> 
                年级 
                <select>  
                  <option value ="1"></option>  
                  <option value ="2">Saab</option>  
                  <option value="3">Opel</option>  
                  <option value="4">Audi</option>  
                </select>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                科目
                <select>  
                  <option value ="1"></option>  
                  <option value ="2">Saab</option>  
                  <option value="3">Opel</option>  
                  <option value="4">Audi</option>  
                </select>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                类别
                <select>  
                  <option value ="1"></option>  
                  <option value ="2">Saab</option>  
                  <option value="3">Opel</option>  
                  <option value="4">Audi</option>  
                </select>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <form class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" />
                  </div> <button type="submit" class="btn btn-default">搜索</button>
                </form>
                </div>
               
                 <form action="/BOXUEYUAN/index.php/Admin/Book/delete" id="heng">
                <div class="row" id="book_add">
                   <button type="button" class="btn btn-default"><span class="glyphicon  glyphicon-plus"></span><a href="/BOXUEYUAN/index.php/Admin/Book/book_add" style="color:black;">添加资料</a></button>
                   <button type="submit" class="btn btn-default"><span class="glyphicon  glyphicon-remove"></span>批量删除</button>             
                </div>
                <table class="table" id="book_table" style="margin-left:-0px;">
                  <thead>
                    <tr>
                      <th>
                        
                      </th>
                      <th>
                        ID
                      </th>
                      <th>
                        科目
                      </th>
                      <th>
                        年级
                      </th>
                      <th>
                        教材、资料
                      </th>
                      <th>
                        书名
                      </th>
                      <th>
                        摘要
                      </th>
                      <th>
                        上传时间
                      </th>
                     
                      <th>
                        操作
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
                      <td>
                         
                        <label><input name="dataId[]" type="checkbox" id="checkbox" value="<?php echo ($d["zid"]); ?>" /></label> 
                        
                      </td>
                      <td>
                        <?php echo ($d["zid"]); ?>
                      </td>
                      <td>
                        <?php echo ($d["subject"]); ?>
                      </td>
                      <td>
                        <?php echo ($d["grade"]); ?>
                      </td>
                      <td>
                         <img src="/BOXUEYUAN/Public/<?php echo ($d["thumb"]); ?>" border="0" style="width:150px;height:105px;" >
<!--                          <?php echo (html_entity_decode($d["thumb"])); ?> -->
                      </td>
                      <td>
                        <?php echo ($d["dataname"]); ?>
                      </td>
                      <td>
                        <?php echo ($d["zhaiyao"]); ?>
                      </td>
                      <td>
                        <?php echo ($d["addtime"]); ?>
                      </td>
                     
                      <td>
                        <a href="/BOXUEYUAN/index.php/Admin/Book/book_edit/id/<?php echo ($d["zid"]); ?>">编辑</a>/<a  href="delete/dataId/<?php echo ($d["zid"]); ?>">删除</a>
                      </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
                  </tbody>
                </table>

                </form>
                <div style="float:right"><?php echo ($page); ?></div>
               
               
                
              </div>
            </div>
            <div class="container" style="background:rgb(0,112,189);margin-top:10px;">
              
          </div>
        </div>
      </div>

<style>
  #book_top,#heng{
    margin-left:3%;
  }
</style>
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