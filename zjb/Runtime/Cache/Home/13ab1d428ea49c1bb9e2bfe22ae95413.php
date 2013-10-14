<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>发布</title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="__ROOT__/Public/images/reset.css" type="text/css" />
 

<script type="text/javascript" src="__ROOT__/Public/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="__ROOT__/Public/js/city.js"></script>
<script type="text/javascript" src="__ROOT__/Public/dist/js/bootstrap.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap.css">


<!-- Optional theme -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap-theme.css">

<link rel="stylesheet" href="__ROOT__/Public/dist/css/github.css"/>


<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap-responsive.css"/>

  <link rel="stylesheet" href="__ROOT__/Public/Home/publish.css" type="text/css" />
   <link rel="stylesheet" href="__ROOT__/Public/Home/form.css" type="text/css" />
   <link rel="stylesheet" href="__ROOT__/Public/Home/edit.css" type="text/css" />


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
		<img src="__ROOT__/Public/images/logo.jpg" alt=""/>
		<div id="rheader">
			<div id="city">
				<span><?php echo ($c); ?></span>&nbsp&nbsp&nbsp&nbsp
				<a href="<?php echo U('City/city');?>#desc" target="_blank">[城市切换]</a>
			</div>
			<p> 
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
			
				<li class="navbar-right"><a href="<?php echo U('Publish/publish');?>#desc">我要登记</a></li>
			</ul>
			
		</div>
		
		<div id="innmain">
		<h3 style="margin-bottom:0px;text-align:left"><span class="label label-default">发布信息</span></h3>
			<div id="lmain">



		<div class="span6">
     
      <ul class="thumbnails" style="text-align: center;margin-left: auto;margin-right: auto;">
        
        <li class="span50">
          <div class="thumbnail">
            <a href="<?php echo U('Home/Innerpage/innerpage');?>#desc" target="_blank"><img src="" alt=""></a>
            <div class="caption">
			<p style="text-align: center;"><a href="<?php echo U('Home/Publish/publishcar');?>#desc" class="btn btn-primary">个人</a> 
			<a href="<?php echo U('Home/Publish/hypublishcar');?>#desc" class="btn">企业</a></p>
            </div>
          </div>
        </li>
		<li class="span50">
          <div class="thumbnail">
            <a href="<?php echo U('Home/Innerpage/innerpage');?>#desc" target="_blank"><img src="" alt=""></a>
            <div class="caption">
            <p style="text-align: center;"><a href="<?php echo U('Home/Publish/publishhouse');?>#desc" class="btn btn-primary">个人</a> 
			<a href="<?php echo U('Home/Publish/hypublishhouse');?>#desc" class="btn">企业</a></p>

            </div>
            </div>
          
        </li>
		
		<li class="span50">
          <div class="thumbnail">
            <a href="<?php echo U('Home/Innerpage/innerpage');?>#desc" target="_blank"><img src="" alt=""></a>
            <div class="caption">
            <p style="text-align: center;"><a href="<?php echo U('Home/Publish/publishdk');?>#desc" class="btn btn-primary">个人</a> <a href="<?php echo U('Home/Publish/hypublishdk');?>#desc" class="btn">企业</a></p>
            </div>
          </div>
        </li>
		<li class="span50">
          <div class="thumbnail">
            <img src="" alt="">
            <div class="caption">
            <p style="text-align: center;"><a href="<?php echo U('Home/Publish/hypublishlc');?>#desc" class="btn btn-primary">个人</a> <a href="<?php echo U('Home/Publish/hypublishlc');?>#desc" class="btn">企业</a></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
		
		
				

			
				
		
					
					
		
		
		<div id="footer">
		
		
			
		</div>	
		

			 
	
	</div>
</form>
</body>
</html>