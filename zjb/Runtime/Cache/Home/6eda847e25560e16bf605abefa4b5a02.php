<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <title>
      中介邦
    </title>
  <meta charset="utf-8" />
<meta name="keywords" content="中介帮 rome 信息发布" />
<link rel="stylesheet" href="__ROOT__/public/images/reset.css" type="text/css" />
<script type="text/javascript" src="__ROOT__/Public/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="__ROOT__/Public/dist/js/bootstrap.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap-theme.css">
<link rel="stylesheet" href="__ROOT__/Public/Home/public.css">


  <link rel="stylesheet" href="__ROOT__/Public/Home/index.css" type="text/css" />
</head>
<body> 	
  <div class="container" style="width:85%; min-width:1170px;">
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
				<li class="active"><a href="<?php echo U('Index/index');?>#desc">合作商家</a></li>
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
      <img src="__ROOT__/Public/images/about_banner.jpg" style="width: 100%;" alt="banner"/>
      <form class="form-search form-inline">
        <input class="input-medium search-query" type="text" />
        <button class="btn" contenteditable="true" type="submit">查找</button>
      </form>
      <div id="c2">
        <?php if(is_array($searchArray)): $i = 0; $__LIST__ = $searchArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><a class="navbar-brand" href="#"><?php echo ($s['name']); ?> :</a>
  <ul class="nav nav-pills navbar-brand">
    <li <?php if(!isset($_GET[$s['key']])): ?>class="active"<?php endif; ?>>
    <a href=<?php echo (isset($_GET[$s['key']])?filterUrl($s['key']):'#')?>><?php echo ($s['default']); ?></a>
    </li>
    <?php if(is_array($s['data'])): foreach($s['data'] as $key=>$v): ?><li <?php if($_GET[$s['key']] == $v['id']): ?>class="active"<?php endif; ?>>
      <a href=<?php echo filterUrl($s['key']).'/'.$s['key'].'/'.$v['id'];?>><?php echo ($v['name']); ?></a>
      </li><?php endforeach; endif; ?>
  </ul><?php endforeach; endif; else: echo "" ;endif; ?>



      </div>
    </div>	
    <div id="footer">
      <div class="span6">
        <ul class="thumbnails">
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="span3">
              <div class="thumbnail">
                <a  href="<?php echo U('company/'.$vo['id']);?>"><img src='__ROOT__/<?php echo ($vo["logo"]); ?>' alt="暂无logo"></a>
                <div class="caption">
                  <h3  style="text-align: center;"><?php echo ($vo["name"]); ?></h3>
                  <p><span>地址：</span>&nbsp&nbsp &nbsp <span><?php echo ($vo["address"]); ?></span></p>
                  <p><span>主营： </span>&nbsp&nbsp &nbsp <span><?php echo ($vo["business"]); ?></span></p>
                  <p><span>联系人：</span><span><?php echo ($vo["username"]); ?></span>&nbsp&nbsp &nbsp <span>手机：</span><span><?php echo ($vo["mobile"]); ?></span></p>
                  <p style="text-align: center;">
                    <a href="__SELF__zan/<?php echo ($vo['id']); ?>"  class="btn btn-primary">推荐</a> 
                    <a href="#" class="btn">评论</a>
                  </p>
                </div>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>	
        </ul>
      </div>
    </div>
    <div class="yahoo2">
      <?php echo ($page); ?>
    </div>
</body>
</html>