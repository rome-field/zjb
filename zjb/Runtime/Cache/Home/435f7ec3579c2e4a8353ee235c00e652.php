<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>
中介邦
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="北京优途旧机动车经纪有限公司,优途汽车,优途汽车二手车,北京优途旧机动车经纪有限公司地址" />
<script type="text/javascript" src="__ROOT__/public/js/jquery-1.7.1.js"></script>

<script type="text/javascript" src="__ROOT__/public/dist/js/bootstrap.js"></script>
<!-- Latest compiled and minified CSS -->


<link rel="stylesheet" href="__ROOT__/public/dist/css/bootstrap.css">


<!-- Optional theme -->
<link rel="stylesheet" href="__ROOT__/public/dist/css/bootstrap-theme.css">
<link rel="stylesheet" href="__ROOT__/public/images/reset.css" type="text/css" />
<link rel="stylesheet" href="__ROOT__/public/home/index.css" type="text/css" />
<link rel="stylesheet" href="__ROOT__/Tpl/Public/dist/css/github.css"/>
 <!--[if lte IE 6]>
  <!-- bsie css 补丁文件 -->
<link rel="stylesheet" href="__ROOT__/Tpl/Public/dist/css/bootstrap-ie6.css"/>
<!-- bsie 额外的 css 补丁文件 -->
<link rel="stylesheet" href="__ROOT__/Tpl/Public/dist/css/ie.css"/>
 <![endif]-->
<!-- Optional theme -->






<style type="text/css">
</style>
<script language="javascript">
  function myfunction(){
        for(var i=1;i<=5;i++){  
              document.getElementById(i).style.display= "block" ;
           }  
			 }
  function dothings(){
  var txt1=document.getElementById("ins");
  txt1.value=" ";
  txt1.focus();

 }
         
                              
</script>
 </head>
 <body onload="myfunction()">

        
 

 	
 <div class="container" style="width:85%; min-width:1170px;">
	<div id="pos" >
		
		<ul class="nav nav-tabs ">
			
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					 注册<span class="caret"></span>
				</a>
					<ul class="dropdown-menu">
							<li><a href="<?php echo U('Register/hyregister');?>#desc">会员注册</a></li>
							<li><a href="<?php echo U('Register/register');?>#desc">个人注册</a></li>
					</ul>
				</li>
			<li class="active"><a href="<?php echo U('Login/login');?>#desc">登录</a></li>
			<li class="active"><a href="<?php echo U('Audit/audit');?>#desc">欢迎  kkkk登录</a><a href="<?php echo U('Comaudit/audit');?>#desc"></a></li>
		</ul>
	
	</div>	
	
	<div id="header">
		<img src="__ROOT__/public/images/logo.jpg" alt=""/>
		<div id="rheader">
			<div id="city">
				<span><?php echo ($c); ?></span>&nbsp&nbsp&nbsp&nbsp
				<a href="<?php echo U('City/city');?>#desc" target="_blank">[城市切换]</a>

			</div>
			<p style="width:480px;"> 
				fddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
			
			<div id="ing">
				<span>商家合作：133-0578-0578<br>
				资金合作：153-0578-0578
				</span>
			</div>
		</div>
    </div>
		 <div>
			<ul class="nav nav-tabs navbar nav1">
				<li class="active"><a href="#">合作商家</a></li>
				<li><a href="<?php echo U('Buyhouse/buyhouse');?>#desc">我要买房</a></li>
				<li><a href="<?php echo U('Zhuhouse/zhuhouse');?>#desc">我要租房</a></li>
				<li><a href="<?php echo U('Buycar/buycar');?>#desc">我要买车</a></li>
				<li><a href="<?php echo U('Zhucar/zhucar');?>#desc">我要租车</a></li>
				<li><a href="<?php echo U('Daikuang/daikuang');?>#desc">我要贷款</a></li>
				<li><a href="<?php echo U('Licai/licai');?>#desc">我要理财</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp
				<li style="width:450px"> </li>
				<li class="navbar-right" style="text-align:right;"><a href="<?php echo U('Publish/publish');?>#desc">我要登记</a></li>
			</ul>
		</div>
	 <div id="main">
			
				<img src="__ROOT__/public/images/about_banner.jpg" style="width: 100%;" alt="banner"/>
			
			
	<form class="form-search form-inline"><input class="input-medium search-query" type="text" /><button class="btn" contenteditable="true" type="submit">查找</button></form> 

				<div id="c2">
					<a class="navbar-brand" href="#">区域 :</a>
						<ul class="nav nav-pills navbar-brand">
							<li class="active"><a href="#">不限</a></li>
							<li><a href="#">莲都</a></li>
							<li><a href="#">云和</a></li>
							<li><a href="#">景宁</a></li>
							<li><a href="#">龙泉</a></li>
							<li><a href="#">庆元</a></li>
							<li><a href="#">松阳</a></li>
							<li><a href="#">遂昌</a></li>
							<li><a href="#">青田</a></li>
							<li><a href="#">缙云</a></li>
						</ul>
					<a class="navbar-brand" href="#">分类 :</a>							
						<ul class="nav nav-pills navbar-brand">
							<li class="active"><a href="#">不限</a></li>
							<li><a href="#">房产中介</a></li>
							<li><a href="#">汽车服务</a></li>
							<li><a href="#">金融担保</a></li>
						</ul>
				
					<a class="navbar-brand" href="#">排序 :</a>							
						<ul class="nav nav-pills navbar-brand">
							<li class="active"><a href="#">默认</a></li>
							<li><a href="#">最新</a></li>
							<li><a href="#">人气</a></li>
						</ul>					
				</div>		
 

	</div>	
 <div id="footer">
			
		
			<div class="span6">
     
      <ul class="thumbnails">
        <li class="span3" id="1">
          <div class="thumbnail">
           <a href="<?php echo U('Company/company');?>#desc"> 
				<img src="__ROOT__/public/images/about_banner.jpg" alt=""></a>
            <div class="caption">
			 <h3>缩略图标签</h3>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
              <p><a href="#" class="btn btn-primary">按钮</a> <a href="#" class="btn">按钮</a></p>
            </div>
          </div>
        </li>
         <li class="span3" id="2">
          <div class="thumbnail">
            <img src="" alt="">
            <div class="caption">
			<h3>缩略图标签</h3>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
              <p><a href="#" class="btn btn-primary">推荐</a> <a href="#" class="btn">评论</a></p>
            </div>
          </div>
        </li>
		 <li class="span3" id="3">
          <div class="thumbnail">
            <img src="" alt="">
            <div class="caption">
			<h3>缩略图标签</h3>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
             <p><a href="#" class="btn btn-primary">推荐</a> <a href="#" class="btn">评论</a></p>
            </div>
          </div>
        </li>
		 <li class="span3" id="4">
          <div class="thumbnail">
            <img src="" alt="">
            <div class="caption">
			 <h3>缩略图标签</h3>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
              <p><a href="#" class="btn btn-primary">推荐</a> <a href="#" class="btn">评论</a></p>
            </div>
          </div>
        </li>
		 <li class="span3" id="5">
          <div class="thumbnail">
            <img src="" alt="">
            <div class="caption">
			 <h3>缩略图标签</h3>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
			<p>方便的货物管理</p>
             <p><a href="#" class="btn btn-primary">推荐</a> <a href="#" class="btn">评论</a></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
	</div>
	<ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
  </div>
 </body>
</html>