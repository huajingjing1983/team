<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>用户-列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/admincss.css">  
   
</head>
<body>
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                     <a href="admin_index.html">首页</a>
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
                <img alt="140*140" src="/BOXUEYUAN/Public/after/images/logo.png" width="70%" id="logopic"/>
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
              ﻿<!DOCTYPE html>
<html>
  <head>
    <title>添加资料</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <meta charset="utf-8">
    <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/bootstrap.min.css">
    <link rel="stylesheet" href="/BOXUEYUAN/Public/after/css/book_add.css">	
    
  </head>
  <body>
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation"id="header">             
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="">
                     <a href="admin_index.html">首页</a>
                  </li>  
                  <li>
                     <a href="index.html">网站首页</a>
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
                     <a href="#">退出</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="row clearfix">
              <div class="col-md-2 column" id="admin-list">
                <img alt="140*140" src="/BOXUEYUAN/Public/after/images/logo.png" width="70%" id="logo"style="margin-left:18%;"/>
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
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="video_add.html">添加视频</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-briefcase"></span> 资料管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="book_all.html">所有资料</a>
                  </div>
                  <div class="list-group-item" >
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="book_add.html"style="color:blue;">添加资料</a>
                  </div>
                  <a href="#" class="list-group-item active" ><span class="glyphicon  glyphicon-globe"></span> 新闻管理</a>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="news_all.html">所有新闻</a>
                  </div>
                  <div class="list-group-item">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="news_add.html">添加新闻</a>
                  </div>
                </div>
              </div>
              <div class="col-md-10 column">
                <ul class="breadcrumb">
                  <li>
                     <a href="admin_index.html"><span class="glyphicon  glyphicon-home"></span> 首页</a>
                  </li>
                  <li>
                     <a href="book_all.html">资料管理</a>
                  </li>
                  <li class="active">
                    添加资料
                  </li>
                </ul>
                <form>
               <table>
                            <tr>
                                <td>科目:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="" id="kemuname" ></td>
                            </tr>
                            
                            <tr>
                                <td>类别:</td>
                                <td>&nbsp;</td>
                                <td><select
                                      <option value ="volvo">课上教材</option>
                                      <option value ="saab">辅导资料</option>
                                      <option value="opel">试题</option>
                                    </select>
                                </td>
                            </tr>
                             
                            <tr>
                                <td>书名:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="" id="bookname"></td>
                            </tr>
                                                     
                            <tr>
                                <td>选择文件:</td>
                                <td>&nbsp;</td>
                                <td><input type="file" name="xuanze"></td>
                            </tr>
                        
                            <tr>
                                <td>描述内容:<span>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><textarea rows="10" cols="30"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="button" value="提交" id="save"/></td>
                                <td>&nbsp;</td>
                                <td><button type="button"id="cancle">返回</button></td>
                            </tr>
               </table>
                </form>
              </div>
            </div>
            <div class="container" style="background:rgb(0,112,189);margin-top:10px;">
              <div class="row clearfix">
                <div class="col-md-12 column">
                   <p style="text-align:center;padding-top:20px;">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
                   <p style="text-align:center;">冀ICP备XXXXXXXX号-X    站长统计</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<script src="/BOXUEYUAN/Public/after/js/jquery.js"></script>    
<script src="/BOXUEYUAN/Public/after/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $("#save").click(function(){
    if($("#kemuname").val()==''){
      alert("科目不能为空");
    }
    else if($("#bookname").val()==''){
      alert("书名不能为空");
    }
    else if($("#kemuname").val()!='' && $("#bookname").val()!='' ){
        alert("成功");
        window.location.href="book_all.html";
    }
  });
    $("#cancle").click(function(){
     window.history.go(0);
});
</script>
      
  </body>
</html>
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
<script src="/BOXUEYUAN/Public/after/js/null_user.js"></script>

</html>