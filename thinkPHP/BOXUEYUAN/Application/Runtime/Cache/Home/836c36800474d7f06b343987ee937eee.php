<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8"/> 
<title>教材同步</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="/BOXUEYUAN/Public/before/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width:993px)" href="/BOXUEYUAN/Public/before/css/tinyScreen.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:993px)" href="/BOXUEYUAN/Public/before/css/smallScreen.css">
<style type="text/css">
   
  #hrr{
    width:200px;
    border:1px solid black;
    margin-left: 5px;
  }
   


</style>
</head>

<body style="overflow:-Scroll;overflow-x:hidden" >
<div class="container">
    <!--网站顶部-->
     <div class="row" style="margin-top:0.5%"> 
        <div class="col-xs-6 col-sm-6 col-md-6"><img src="/BOXUEYUAN/Public/before/images/logo.png" id="logoimg"/></div>
        <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top:2%">
            <form class="form-search">
              <input class="input-medium search-query" type="text" id="search"/> 
              <button type="submit" class="btn btn-primary btn-sm">查找</button>
            </form>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2" style="margin-top:1%">
            <img src="/BOXUEYUAN/Public/before/images/user.jpg" id="perimg"/>
            <p><a href="/BOXUEYUAN/Public/before/personalcenter/peraonal-message.html">个人中心</a></p>
        </div>
    </div>
    <!--导航-->
    <div class="row">
    <div class="col-md-12 column">
       <nav class="navbar navbar-default" role="navigation" >
    <div class="container-fluid" style="background-color:rgb(0,112,189);width:100%" >
    <div class="navbar-header" >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
           <!-- <span class="caret">导航栏</span>
           <a class="btn btn-primary"  role="button">保存</a>-->
           
           <span class="caret"></span> 导航栏 

 
           
        </button>
       
    </div>

    <div class="collapse navbar-collapse" id="example-navbar-collapse" >
        <ul class="nav navbar-nav" id="daohang" >
            <li ><a href="../index.html" style="color:white">首页</a></li>
            <li ><a href="../chinese/chineseone.html" style="color:white">语文</a></li>
            <li ><a href="../math/mathone.html" style="color:white">数学</a></li>
            <li ><a href="../english/englishone.html" style="color:white">英语</a></li>
            <li ><a href="jiaocaitongbu.html" style="color:white">文综</a></li>
            <li ><a href="../lizong/jiaocaitongbu.html" style="color:white">理综</a></li>
            <li><a href="../News/news.html" style="color:white">热点资讯</a></li>
            <li><a href="../About/about.html" style="color:white">关于我们</a></li>
        </ul>

    </div>
    </div>
      </nav>
    </div>
    </div>
    <!--banner图-->
    <div class="row clearfix">
    <div class="col-md-12 col-sm-12 column">
      <div class="carousel slide" id="carousel-432528">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel-432528">
          </li>
          <li data-slide-to="1" data-target="#carousel-432528">
          </li>
          <li data-slide-to="2" data-target="#carousel-432528">
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img alt="" src="/BOXUEYUAN/Public/before/images/banner1.jpg" />
          </div>
          <div class="item">
            <img alt="" src="/BOXUEYUAN/Public/before/images/banner2.jpg" />
            
          </div>
          <div class="item">
            <img alt="" src="/BOXUEYUAN/Public/before/images/banner3.jpg" />
            
          </div>
        </div> <a class="left carousel-control" href="#carousel-432528" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-432528" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
  </div>
  <!--面包屑-->
  <div class="row clearfix" style="margin-top:10px;">
    <div class="col-md-12 column">
      <ul class="breadcrumb">
        <li>
           <a href="#">首页</a>
        </li>
        <li>
           <a href="#">文科综合</a>
        </li>
        <li class="active">
          高考模拟
        </li>
      </ul>
    </div>
    
  </div>
  <!--内容-->
  <div class="row clearfix">
    <!--导航列表-->
    <div class="col-xs-3 col-sm-3 col-md-3 column">
      <div class="list-group">
        <div class="list-group-item">
         <h3 style="text-align:center;family-weight:bold;">导航列表</h3>
        </div>
        <div class="list-group-item active">
          <a href="jiaocaitongbu.html"><h4 style="text-align:center;color:black;">教材同步</h4></a>
        </div>
        <div class="list-group-item">
           <a href="gaokaomoni.html"><h4 style="text-align:center;color:black;">高考模拟</h4></a>
        </div> 
        <div class="list-group-item">
           <a href="beikaocelue.html"><h4 style="text-align:center;color:black;">备考策略</h4></a>
        </div>
        <div class="list-group-item">
           <a href="gaokaozhenti.html"><h4 style="text-align:center;color:black;">高考真题</h4></a>
        </div>
      </div>
    </div>
    <!--教材-->
    <div class=" col-xs-9 col-sm-9 col-md-9 column">
         <div class="row">
           <h1>政治同步</h1>
           <hr id="hrr"/>
        <div class="col-md-4">
           <input type="button" name="search" value="高一" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/zhengzhi1.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
           <input type="button" name="search" value="高二" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/zhengzhi2.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
       <div class="col-md-4">
           <input type="button" name="search" value="高三" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/zhengzhi3.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
         <a href="../content/tests.html"><button type="button" class="btn btn-default active" style="float:right">更多</button></a>
      </div>
      <div class="row">
      <h1>历史同步</h1>
           <hr id="hrr"/>
         <div class="col-md-4">
           <input type="button" name="search" value="高一" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/lishi1.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
         <div class="col-md-4">
           <input type="button" name="search" value="高二" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/lishi2.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
         <div class="col-md-4">
           <input type="button" name="search" value="高三" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/lishi3.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
        <a href="../content/tests.html"><button type="button" class="btn btn-default active" style="float:right">更多</button></a>
      </div>
      <div class="row">
      <h1>地理同步</h1>
           <hr id="hrr"/>
        <div class="col-md-4">
           <input type="button" name="search" value="高一" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/dili1.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
           <input type="button" name="search" value="高二" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/dili2.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
       <div class="col-md-4">
           <input type="button" name="search" value="高三" style="width:260px;text-align:center;background:rgb(240,240,240);" />
          <div class="thumbnail" style="margin-top:10px;">
            <img alt="300x200" src="/BOXUEYUAN/Public/before/images/dili3.jpg" style="width:300px;height:200px;"/>
            <div class="caption">
              <h3 style="text-align:center;">
                人民出版社
              </h3>
             
              <p style="text-align:center;">
                 <a class="btn" href="../content/read.html">阅读</a> <a class="btn" href="../buy/pay.html">购买</a>
              </p>
            </div>
          </div>
        </div>
        <a href="../content/tests.html"><button type="button" class="btn btn-default active" style="float:right">更多</button></a>
      </div>
    </div>
    </div>      
  </div> 
  
</div>
<!--页脚-->
<div class="container" style="background:rgb(0,112,189);margin-top:10px;">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <p style="text-align:center;padding-top:20px;">地址: 石家庄市裕华区南二环东路20号     石家庄河北师范大学软件学院</p>
            <p style="text-align:center;">冀ICP备XXXXXXXX号-X    站长统计</p>
    </div>
  </div>
</div>
<script src="/BOXUEYUAN/Public/before/js/jquery.js"></script>
<script src="/BOXUEYUAN/Public/before/js/bootstrap.min.js"></script>
</body>
</html>