<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <title> 登录 </title>
  <meta charset="utf-8" />
<meta name="keywords" content="中介帮 rome 信息发布" />
<link rel="stylesheet" href="__ROOT__/Public/images/reset.css" type="text/css" />
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

  </style>

</head>
<body style="background-color:#e7ebea;">
  <div id="container">
    <form name="submitForm" method="post" action="<?php echo U('Index/login');?>" id="submitForm" target="formSubmit">

      <div id="pos" >	
    <ul class="nav nav-tabs ">
        <?php if(session('?mname')): ?><li class="active">欢迎您，<?php echo (session('mname')); ?></li>
            <li class="active"><a href="<?php echo U('Member/index');?>">会员中心</a></li>
            <li class='active'><a href='<?php echo U("Index/logout");?>'>注销</a></li>
        <?php else: ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    注册<span class="caret"></span>
                </a>
		<ul class="dropdown-menu">
			<li><a href="<?php echo U('Register/register');?>">普通会员注册</a></li>
			<li><a href="<?php echo U('Register/hyregister');?>">商家会员注册</a></li>
		</ul>
            </li>
            <li class="active"><a href="<?php echo U('Index/login');?>">登录</a></li><?php endif; ?>
			
    </ul>
	
</div>	
	
      
	<div id="header">
		<img src="__ROOT__/Public/images/logo.jpg" alt=""/>
		<div id="rheader">
			<div id="city">
				<span><?php echo (session('city_name')); ?></span>&nbsp&nbsp&nbsp&nbsp
				<a href="<?php echo U('Common/city');?>" target="_blank">[城市切换]</a>

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
          登录
        </span>
      </div>
      <div id="main">
        <div id="lmain" style="width:450px;height:400px;float:left;margin-top:50px;">
          <img src="__ROOT__/Public/images/login.jpg" alt="banner" style="margin-left:50px;"/>
        </div>
        <div class="loginbox" style="border-left:solid 2px #e7ebea">
          <table   width="90%" class="logintable">
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr id="usernametr" height="60">
              <td></td>
              <td>
                <ul>
                  <li class="info"></li>
                  <li class="info1"><span>手机号:&nbsp;</span><input type="text" name="phone" class="box"/></li>
                  <li class="info1"><span>密码:&nbsp;</span><input type="password" name="upwd" class="box"/></li>
                  <li class="info1"><span>用户类型:&nbsp;</span>
                    <div style="text-align: left;">
                      <input type="radio" value="0" name="type" checked="checked">普通会员
                      <input type="radio" value="1" name="type" >商家会员
                    </div>
                  </li>
                  <li class="info1"><span>验证码:&nbsp;</span><input type="text" name="yzm" class="box" id="yzm" style="width:50px;"/></span><img src="__APP__/Common/verify" class="yzm" id="verify"/></li>
                </ul>
              </td>
            </tr>
            <tr height="60px">
              <td></td>
              <td style="padding-left: -20pt;">
                <input type="checkbox" style="vertical-align: middle;" id="coks"  name="remember" />
                <label class="logintip" for="coks">下次自动登录 (公共场所慎用)</label>
              </td>
            </tr>
            <tr height="0px">
              <td></td>
              <td style="padding-right:50pt;" >
                <span class="butt" style="line-height:50px;">
                  <input type="submit" name="btnSubmit" value="登录" class="btns" accesskey="l" id="btnSubmit" />
                </span><span class="reg-a" border="2"><a href="<?php echo U('Register/register');?>">免费注册</a>|<a href="/forgetpassword" id="herf">找回密码</a> </span>
              </td>
            </tr>
          </table>
        </div>
        <!--scrool bg-->
      </div>





    </form></div>
</body>
</html>