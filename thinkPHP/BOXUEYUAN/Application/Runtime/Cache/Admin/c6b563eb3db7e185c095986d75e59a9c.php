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
               
                <li class="active">
               <a htef="#">当前用户：<?php echo session('username'); ?></a>
                </li>
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
                     <a href="/BOXUEYUAN/index.php/Admin/News/all">新闻管理</a>
                  </li>
                  <li class="active">
                    编辑新闻
                  </li>
                </ul>
                <div class="row" id="admin-admin"><h2>编辑新闻</h2></div><br/> 
                <form action="" method="post">
                 <?php if(is_array($newsx)): $i = 0; $__LIST__ = $newsx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newsx): $mod = ($i % 2 );++$i;?><table>
                            <tr>
                                <td>新闻标题:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="title" id="newsname" value="<?php echo ($newsx["title"]); ?>"></td>
                            </tr>
                            
                            <tr>
                                <td>年级:</td>
                                <td>&nbsp;</td>
                                <td><select name="grade">
                                      <option value ="<?php echo ($newsx["grade"]); ?>">高<?php echo ($newsx["grade"]); ?></option>
                                      <option value ="一">高一</option>
                                      <option value ="二">高二</option>
                                      <option value="三">高三</option>
                                    </select>
                                </td>
                            </tr>
                             
                            <tr>
                                <td>科目:<span></span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="course" id="kemuname" value="<?php echo ($newsx["course"]); ?>"></td>
                            </tr>
                                                     
                             <tr>
                                <td>摘要:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="summary" id="kemuname" value="<?php echo ($newsx["summary"]); ?>"></td>
                            </tr>
                                   
                         <tr>
                                <td>发布人:<span></span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="name" id="kemuname" value="<?php echo ($newsx["name"]); ?>"></td>
                            </tr>
                             <tr>
                                <td>发布社:<span>*</span></td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="from" id="kemuname" value="<?php echo ($newsx["from"]); ?>"></td>
                            </tr>
                        
                            <tr>
                                <td>描述内容:<span>*</td>
                                <td>&nbsp;</td>
                                <td><textarea rows="10" cols="30" name="content"><?php echo ($newsx["content"]); ?></textarea></td>
                            </tr>
                            <tr>
                                <td><button type="submit" value="保存" id="save">保存</button></td>
                                <td>&nbsp;</td>
                                <td><button type="button"id="cancle" onclick="history.back(-1)">取消</button></td>
                            </tr>
                </table><?php endforeach; endif; else: echo "" ;endif; ?>
                </form>
              </div>
            </div>
            <div class="container" style="background:rgb(0,112,189);margin-top:10px;">
              <div class="row clearfix">
                
              </div>
           
          </div>
        </div>
      </div> 


<script type="text/javascript">
    $("#save").click(function(){
    if($("#newsname").val()==''){
      alert("新闻标题不能为空");
    }
    else if($("#kemuname").val()==''){
      alert("科目不能为空");
    }
    else if($("#newsname").val()!='' && $("#kemuname").val()!='' ){
        alert("成功");
        window.location.href="news_all.html";
    }
  });
    $("#cancle").click(function(){
     window.history.go(0);
});
</script>
      
 
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