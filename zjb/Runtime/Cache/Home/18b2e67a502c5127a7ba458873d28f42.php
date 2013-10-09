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

<link rel="stylesheet" href="__ROOT__/Tpl/public/dist/css/bootstrap-responsive.css"/>
<style type="text/css">
</style>
<script language="javascript">
  function myfunction(){
        for(var i=1;i<=8;i++){  
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
 	
 <div id="container">
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
			<li class="active"><a href="<?php echo U('Audit/audit');?>#desc">欢迎  kkkk登录</a></li>
		</ul>
	
	</div>	
	
	<div id="header">
		<img src="__ROOT__/public/images/logo.jpg" alt=""/>
		<div id="rheader">
			<div id="city">
				<span><?php echo ($c); ?></span>
				<a href="<?php echo U('City/city');?>#desc" target="_blank">城市切换</a>
			</div>
			<span>中介邦<span>
			<div id="ing">
				<span>商家合作：133-0578-0578<br>
				资金合作：153-0578-0578
				</span>
			</div>
		</div>
    </div>
		 <div>
			<ul class="nav nav-tabs navbar nav1">
				<li class="active"><a href="<?php echo U('Index/index');?>#desc">合作商家</a></li>
				<li><a href="<?php echo U('Buyhouse/buyhouse');?>#desc">我要买房</a></li>
				<li><a href="<?php echo U('Zhuhouse/zhuhouse');?>#desc">我要租房</a></li>
				<li><a href="<?php echo U('Buycar/buycar');?>#desc">我要买车</a></li>
				<li><a href="<?php echo U('Zhucar/zhucar');?>#desc">我要租车</a></li>
				<li><a href="<?php echo U('Daikuang/daikuang');?>#desc">我要贷款</a></li>
				<li><a href="<?php echo U('Licai/licai');?>#desc">我要理财</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp
			
				<li class="navbar-right"><a href="<?php echo U('Licai/licai');?>#desc">我要理财</a></li>
			</ul>
			
		</div>
	 <div id="main">
			
			<form class="form-search form-inline"><input class="input-medium search-query" type="text" /><button class="btn" contenteditable="true" type="submit">查找</button></form> 

				<div id='c2'>
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
		
		
			<div class="b1" id="1">
				
				<a href="<?php echo U('Company/company');?>#desc" target="_blank"><img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" /></a>
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="2">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="3">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="4">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="5">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="6">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="7">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1"id="8">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="9">
				
				<a href="<?php echo U('Company/company');?>#desc" target="_blank"><img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" /></a>
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="10">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="11">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="12">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="13">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="14">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="15">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			<div class="b1" id="16">
				
				<img src="__ROOT__/MYphp/Tpl/public/images/eshop_service.jpg" alt="" />
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
		
		</div>	
		
  </div>
 </body>
</html>