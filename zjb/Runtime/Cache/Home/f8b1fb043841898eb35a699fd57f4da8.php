<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <title> 会员注册 </title>
   <meta charset="utf-8" />
<meta name="keywords" content="北京优途旧机动车经纪有限公司,优途汽车,优途汽车二手车,北京优途旧机动车经纪有限公司地址" />
<link rel="stylesheet" href="__ROOT__/public/images/reset.css" type="text/css" />
<script type="text/javascript" src="__ROOT__/Public/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="__ROOT__/Public/dist/js/bootstrap.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap-theme.css">
<link rel="stylesheet" href="__ROOT__/Public/Home/public.css">


   <script type="text/javascript" src="__ROOT__/Public/js/cityss.js"></script>
  <link rel="stylesheet" href="__ROOT__/Public/Home/login.css" type="text/css" />




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
							<li><a href="<?php echo U('Register/hyregister');?>#desc">会员注册</a></li>
							<li><a href="<?php echo U('Register/register');?>#desc">个人注册</a></li>
					</ul>
				</li>
			<li class="active"><a href="<?php echo U('Login/login');?>#desc">登录</a></li>
			<li class="active"><a href="<?php echo U('Audit/audit');?>#desc">欢迎  kkkk登录</a></li>
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
				<li class="active"><a href="<?php echo U('Index/index');?>#desc">合作商家</a></li>
				<li><a href="<?php echo U('Buyhouse/buyhouse');?>#desc">我要买房</a></li>
				<li><a href="<?php echo U('Zhuhouse/zhuhouse');?>#desc">我要租房</a></li>
				<li><a href="<?php echo U('Buycar/buycar');?>#desc">我要买车</a></li>
				<li><a href="<?php echo U('Zhucar/zhucar');?>#desc">我要租车</a></li>
				<li><a href="<?php echo U('Daikuang/daikuang');?>#desc">我要贷款</a></li>
				<li><a href="<?php echo U('Licai/licai');?>#desc">我要理财</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp
				<li class="navbar-right" style="text-align:right;"><a href="<?php echo U('Publish/publish');?>#desc">我要登记</a></li>
			</ul>
		</div>
		<div id="top">
				<span>
					会员注册
				</span>
		</div>
		<div id="main">
			<div id="lmain" style="width:450px;height:400px;float:left;margin-top:50px;">
			        <img src="__ROOT__/public/images/login.jpg" alt="banner" style="margin-left:50px;"/>
			</div>
			  <div class="loginbox" style="border-left:solid 2px #e7ebea">
				  <table   width="100%" class="logintable">
					<tr>
						<td></td>
						<td></td>
					</tr>
					  <tr id="usernametr" height="60">
						<td></td>
						<td>
						
						<ul>
								<li class="info"></li>
								<li class="info1"><span>用户名:&nbsp;</span><input type="text" name="uname" class="box"/></li>
								<li class="info1"><span>企业名称:&nbsp;</span><input type="text" name="uname" class="box"/></li>
								<li class="info1"><span>公司地址:&nbsp;</span><input type="text" name="address" class="box"/></li>
								<li class="info1"><span>公司电话:&nbsp;</span><input type="text" name="address" class="box"/></li>
								<li class="info1"><span>公司类型:</span>
								<select>
									  <option>房产中介</option>
									  <option>汽车服务</option>
									  <option>金融担保</option>
								</select></li>
								<li class="info1"><span>上传图片:</span><input class="input-file box" id="fileInput" type="file"></li>
								<li class="info1"><span>选择城市：&nbsp;</span><select id="s1" name="lz_sf"  style="width:100px"></select> <select name="lz_sx" id="s2" style="width:100px"></select></li>   
								 <li class="info1"><span>公司业务简介:</span><textarea type="" class="textarea" style="float:left;margin-top:9px;height:50px;"> </textarea></li>
								<li class="info1"><span>公司联系人:</span><input type="text" name="xm" class="box"/></li>
								<li class="info1"><span>公司电话:&nbsp;</span><input type="text" name="dh" class="box"/></li>
								<li class="info1"><span>&nbsp;&nbsp;&nbsp;&nbsp;密码:&nbsp;</span><input type="password" name="upwd" class="box"/></li>
								<li class="info1"><span>确认密码:&nbsp;</span><input type="password" name="upwd1" class="box"/></li>
								<li class="info1"><span>验证码:&nbsp;</span><input type="text" name="yzm" class="box" id="yzm" style="width:50px;"/></span>
								<img src="__URL__/verify" class="yzm" id="__URL__/verify"/></li>
							</ul>
						
						</td>
					  </tr>
					  <tr height="0px">
					  	<td></td>
						  <td style="padding-right:50pt;" >
							  <span class="butt" style="line-height:50px;">
							  <input type="submit" name="btnSubmit" value="登录" class="btns" accesskey="l" id="btnSubmit" />
							  </span><span class="reg-a" border="2"><a href="<?php echo U('Home/Login/login');?>">已有账号，直接登录</a></span>
						  </td>
					  </tr>
				  </table>
				</div>
				<!--scrool bg-->
			</div>
	
	
	
	

</form></div>
<script  type="text/javascript"> 
setup()
</script>
</body>
</html>