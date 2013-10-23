<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>发布</title>
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

  </style>


</head>
<body style="background-color:#e7ebea;">
  <div id="container">	
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
				<li class="navbar-right" style="text-align:right;"><a href="<?php echo U('Publish/index');?>">我要登记</a></li>
			</ul>
		</div>

    <div id="innmain">
      <h3 style="margin-bottom:0px;text-align:left"><span class="label label-default">发布信息</span></h3>
      <div id="lmain">
        <div class="span6">
          <ul class="thumbnails" style="text-align: center;margin-left: auto;margin-right: auto;">
            <li class="span50">
              <div class="thumbnail">
                <a href="<?php echo U('Publish/sellHouse');?>" target="_blank"><img src="__ROOT__/Public/images/1.jpg" alt=""></a>
                <div class="caption">
                  <p style="text-align: center;">
                    <a href="<?php echo U('Publish/sellHouse');?>" class="btn btn-primary">卖房信息</a> 
                </div>
              </div>
            </li>
            <li class="span50">
              <div class="thumbnail">
                <a href="<?php echo U('Publish/rentHouse');?>" target="_blank"><img src="__ROOT__/Public/images/1.jpg" alt=""></a>
                <div class="caption">
                  <p style="text-align: center;">
                    <a href="<?php echo U('Publish/rentHouse');?>" class="btn btn-primary">租房信息</a> 
                </div>
              </div>
            </li>
            <li class="span50">
              <div class="thumbnail">
                <a href="<?php echo U('Publish/sellCar');?>" target="_blank"><img src="__ROOT__/Public/images/1.jpg" alt=""></a>
                <div class="caption">
                  <p style="text-align: center;">
                    <a href="<?php echo U('Publish/sellCar');?>" class="btn btn-primary">二手车信息</a> 
                </div>
              </div>
            </li>
            <li class="span50">
              <div class="thumbnail">
                <a href="<?php echo U('Publish/rentCar');?>" target="_blank"><img src="__ROOT__/Public/images/1.jpg" alt=""></a>
                <div class="caption">
                  <p style="text-align: center;">
                    <a href="<?php echo U('Publish/rentCar');?>" class="btn btn-primary">租车信息</a> 
                </div>
              </div>
            </li>
            <li class="span50">
              <div class="thumbnail">
                <a href="<?php echo U('Publish/loan');?>" target="_blank"><img src="__ROOT__/Public/images/1.jpg" alt=""></a>
                <div class="caption">
                  <p style="text-align: center;">
                    <a href="<?php echo U('Publish/loan');?>" class="btn btn-primary">贷款信息</a> 
                </div>
              </div>
            </li>
            <li class="span50">
              <div class="thumbnail">
                <a href="<?php echo U('Publish/invest');?>" target="_blank"><img src="__ROOT__/Public/images/1.jpg" alt=""></a>
                <div class="caption">
                  <p style="text-align: center;">
                    <a href="<?php echo U('Publish/invest');?>" class="btn btn-primary">理财信息</a> 
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div id="footer">
      </div>	
    </div>
  </div>
</body>
</html>