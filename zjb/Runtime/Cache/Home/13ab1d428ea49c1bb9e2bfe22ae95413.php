<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>内页</title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="__ROOT__/Tpl/public/images/reset.css" type="text/css" />
  <link rel="stylesheet" href="__ROOT__/Tpl/public/Home/publish.css" type="text/css" />

<script type="text/javascript" src="__ROOT__/Tpl/public/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="__ROOT__/Tpl/public/dist/js/bootstrap.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="__ROOT__/Tpl/public/dist/css/bootstrap.css">


<!-- Optional theme -->
<link rel="stylesheet" href="__ROOT__/Tpl/public/dist/css/bootstrap-theme.css">



<style type="text/css">
*:focus {outline: none}


tr,td{font-size:15px;
color:#000000;
background:#fff;
border:1px;
}
#login-header{
	float:left;
	font:15px;
}
#cityname{
	float:left;
}
</style>
<script type="text/javascript">
	
	function tab(pid)
	
	{
		var ps=['qbxw','qydt','yhcx'];
			for(var i=0,len=ps.length;i<len;i++){
				if(ps[i]==pid){
					document.getElementById(ps[i]).style.display='block';
					}else{
						document.getElementById(ps[i]).style.display='none';
				}
			}
	}

</script>


</head>
<body style="background-color:#e7ebea;">
<div id="container">
<form name="submitForm" method="post" action="" id="submitForm" target="formSubmit">
	
	<div id="pos" >
		
		<ul class="nav nav-tabs ">
			
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					 注册<span class="caret"></span>
				</a>
					<ul class="dropdown-menu">
							<li><a href="<?php echo U('Register/hyregister');?>#desc" target="_blank">会员注册</a></li>
							<li><a href="<?php echo U('Register/register');?>#desc" target="_blank">个人注册</a></li>
					</ul>
				</li>
			<li class="active"><a href="<?php echo U('Register/register');?>#desc" target="_blank">登录</a></li>
			<li class="active"><a href="<?php echo U('Audit/audit');?>#desc" target="_blank">欢迎  kkkk登录</a></li>
		</ul>
	
	</div>	
	
	<div id="header">
		<img src="__ROOT__/Tpl/public/images/logo.jpg" alt=""/>
		<div id="rheader">
			<div id="city">
				<span><?php echo ($c); ?></span>&nbsp&nbsp&nbsp&nbsp
				<a href="<?php echo U('City/city');?>#desc" target="_blank">[城市切换]</a>
			</div>
			<span> 中介服务<span>
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
			
				<li class="navbar-right"><a href="<?php echo U('Publish/publish');?>#desc">我要登记</a></li>
			</ul>
			
		</div>
		
		<div id="innmain">
		<h3 style="margin-bottom:0px;"><span class="label label-default">New</span></h3>
			<div id="lmain">
				
			<div id="inn" >
				<div id="innimg" > <dl>
              <dt>免费发布</dt>
              <dd>免费快速发布车源，操作简单</dd>
              
              <dt>最多用户</dt>
              <dd>最多用户的二手车网站</dd>
              
              <dt>权威平台</dt>
              <dd>最权威的二手车交易平台</dd> 
           </dl>
         <div class="maichebut">
            <span class="butbox1"><a href="<?php echo U('Home/Publishcar/publishcar');?>#desc">123</a><input name="" type="button" value="个人发布二手车" onclick="" style="background:#f49c1b;font-color:#fff;"/></span> <span class="butbox2"><input name="" type="button" value="商家发布" onclick=""/></span>
        </div>
</div>
				<div id="inntxt"><dl>
              <dt>免费发布</dt>
              <dd>免费快速发布车源，操作简单</dd>
              
              <dt>最多用户</dt>
              <dd>最多用户的二手车网站</dd>
              
              <dt>权威平台</dt>
              <dd>最权威的二手车交易平台</dd> 
           </dl>
         <div class="maichebut">
            <span class="butbox1"><input name="" type="button" value="个人发布二手车" onclick="" style="background:#f49c1b;font-color:#fff;"/></span> <span class="butbox2"><input name="" type="button" value="商家发布" onclick=""/></span>
        </div></div>
				
		</div>
		</div>
			
			
				<div id="c3">
				<div class="rb1">
				
				<h4><span class="label label-default">New</span></h4>
				
				
				<ul>
					<li>方便的货物管理</a></li>
					<li>自定义会员类型</a></li>
					<li>丰线支付功能</a></li>
					<li>丰富的订单统计</a></li>
					<li>财物报表生成</a></li>
				</ul>
				
			</div>
			</div>
			
			
				
		
					
					
		
		
		<div id="footer">
		
		
			
		</div>	
		

			 
	
	</div>
</form>
</body>
</html>