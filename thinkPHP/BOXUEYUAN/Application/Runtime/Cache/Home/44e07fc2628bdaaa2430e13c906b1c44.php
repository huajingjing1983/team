<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8"/> 
<title>备考策略</title>
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
    
    <div class="col-md-12 column">
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
        <div class="list-group-item">
          <a href="jiaocaitongbu.html"><h4 style="text-align:center;color:black;">教材同步</h4></a>
        </div>
        <div class="list-group-item">
           <a href="gaokaomoni.html"><h4 style="text-align:center;color:black;">高考模拟</h4></a>
        </div> 
        <div class="list-group-item active">
           <a href="beikaocelue.html"><h4 style="text-align:center;color:black;">备考策略</h4></a>
        </div>
        <div class="list-group-item">
           <a href="gaokaozhenti.html"><h4 style="text-align:center;color:black;">高考真题</h4></a>
        </div>
      </div>
    </div>
    <!--教材-->
    <div class="col-xs-9 col-sm-9 col-md-9 column">
      <div class="row">
         <h3>临近高考，如何科学备考？</h3>
         <hr id="hrr"/></br>
         <h2>家长篇</h2>
         <ul>
            <li>
              怎么做一名合格的家长？<br/><br/>
              <p> “我都不知道怎么对孩子才好？就怕话说的重了，影响孩子的学习心情。”随着高考的临近，很多嘴上劝慰孩子不要紧张，要
沉着应对考试的家长其实自己心里已经混乱无章，不知该如何是好。龙文的高考老师告诉广大的家长，在这万分重要的十几天，
家长要以平常的心态，谨慎的关注，和考生并肩作战。在这时候，比起遮遮掩掩的担心，家长不如坦白告诉孩子自己的焦虑，
和孩子共同找出缓解焦虑和压力的方法，和孩子坦诚相待，共同面对随着考试的临近出现的一系列问题，比如和孩子商量考前
的饮食，家庭的氛围，需要家里给予什么样的支持和父母给予什么样的帮助等等。</p><br/>
             <img src="/BOXUEYUAN/Public/before/images/beikao1.jpg" width="220px" height="100px"/>
            </li>
            <li>
              孩子重要的后勤保障<br/><br/>
              <p>考生考试之前容易出现紧张、焦虑、寝食难安，脾气急躁，甚至有时候做梦都是在考试，更严重的是有的考生甚至出现睡不着觉或者彻夜失眠的状况。这是很多考生都会出现的现象。每个考生都是独立的个体，所以在面对考试的时候压力也会有所不同。家长们应该有针对性的对孩子进行“考前心理调适”。有的家长为了更好地照顾孩子，在孩子考试期间特意请假专门做孩子的高考后勤服务。其实，很多考生处于“高考高压期”的时候，心理非常敏感脆弱，家长突然表现的过于关心的举动，有时候会被误读为“逼孩子考出好成绩”，从而产生更大的心理压力。</p>
            </li>
            <li>
              参与孩子沟通<br/><br/>
              <p>     家长要鼓励孩子保持适度的锻炼。孩子原来喜欢什么运动，可以鼓励孩子继续，方式和强度也不要刻意的改变，随意就好。不要因为高考在即，时间紧迫就为此放弃，要知道，锻炼是恢复脑力劳动最有效的方法，也是很好的缓解压力的方法。高考也是件体力活，保持旺盛的精力，也是高考的必胜法宝。龙文的高考专家最后提醒家长，在高考面前更应该保持一颗平常心，相信孩子，多和孩子沟通，考生才能在考场上应对自如。</p><br/>
               <img src="/BOXUEYUAN/Public/before/images/beikao2.jpg" width="220px" height="100px"/>
            </li>
          </ul>
      </div>
      <div class="row">       
        <h2>饮食篇</h2>
        <p> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;高考不仅是一场考试，更有可能是一场决定命运的挑战。怎样给要参加高考的孩子合理安排饮食，是家长们最关心的问
题。营养师推荐食谱：</p>
        <ul>
          <li>早餐<br/><p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;早餐应含有鸡蛋、脱脂牛奶、酸奶或乳酪和粮食制品，比如：粥、燕麦片、全麦面包、果汁、几片面包夹一个煎鸡蛋，配一点西红柿、黄瓜或其他水果等，每周不定期地增加一些诸如核桃粉、黑芝麻糊等，不仅可以调剂口味，还可以缓解高度紧张的学习造成的脑疲劳。</p></li>
          <li>午餐<br/><p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    午餐要清淡点，但应摄入充足的热量和各种营养素。可吃些肉类、鸡蛋等含热量较高的食品，每周至少两次新鲜的海产品以补充增强抵抗力的脂肪酸。蔬菜应注意颜色搭配并变换花样，保证孩子摄取各种维生素、叶酸和植物纤维等。</p><br/><img src="/BOXUEYUAN/Public/before/images/beikao3.jpg" width="220px" height="100px"/></li>
          <li>晚餐<br/><p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;晚餐要清淡点，但应摄入充足的热量和各种营养素。可吃些肉类、鸡蛋等含热量较高的食品，每周至少两次新鲜的海产品以补充增强抵抗力的脂肪酸。蔬菜应注意颜色搭配并变换花样，保证孩子摄取各种维生素、叶酸和植物纤维等。</p></li>
        </ul>
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