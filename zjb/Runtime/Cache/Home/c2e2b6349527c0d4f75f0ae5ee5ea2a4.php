<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>公司发布 </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="__ROOT__/public/images/reset.css" type="text/css" />

<script type="text/javascript" src="__ROOT__/public/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="__ROOT__/public/dist/js/bootstrap.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="__ROOT__/public/dist/css/bootstrap.css">


<!-- Optional theme -->
<link rel="stylesheet" href="__ROOT__/public/dist/css/bootstrap-theme.css">

<link rel="stylesheet" href="__ROOT__/Public/dist/css/github.css"/>
 <!--[if lte IE 6]>
  <!-- bsie css 补丁文件 -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap-ie6.css"/>
<!-- bsie 额外的 css 补丁文件 -->
<link rel="stylesheet" href="__ROOT__/Public/dist/css/ie.css"/>
 <![endif]-->
<!-- Optional theme -->

<link rel="stylesheet" href="__ROOT__/public/dist/css/bootstrap-responsive.css"/>

  <link rel="stylesheet" href="__ROOT__/public/Home/publish.css" type="text/css" />
   <link rel="stylesheet" href="__ROOT__/public/Home/form.css" type="text/css" />



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
		<img src="__ROOT__/public/images/logo.jpg" alt=""/>
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
		
		<div id="main">
  <form class="form-horizontal" style="float:left;" >
    <fieldset style="width:700px;margin:0px auto">
      <div id="legend" class="">
        <legend class="">租售房</legend>
      </div>
    
<div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">公司名称</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    

    

    

    <div class="control-group">
		 <div class="control-group" style="clear:both;">
          <label class="control-label">类型</label>
          <div class="controls">
      <!-- Inline Radios -->
      <label class="radio inline">
        <input type="radio" value="无装修" name="group" checked="checked">
        出租
      </label>
      <label class="radio inline">
        <input type="radio" value="简单装修" name="group">
       出售
      </label>
      
  </div>
        </div>
          <!-- Select Basic -->
          <label class="control-label" style="clear:both;" >户型</label>
          <div class="controls">
            <select class="input-xlarge" >
      <option style="border: solid 1px #000">1室1厅1卫</option>
      <option>2室1厅1卫</option>
      <option>2室2厅1卫</option>
      <option>3室1厅1卫</option>
      <option>3室2厅1卫</option>
      <option>3室2厅2卫</option>
      <option>4室2厅2卫</option>
      <option>5室2厅2卫</option>
      <option>独立别墅</option>
      <option>屋顶</option>
      <option></option>
      <option></option></select>
          </div>

        </div>

    

    

    

    <div class="control-group" >

          <!-- Text input-->
          <label class="control-label" for="input01">面积</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
          平方米
            <p class="help-block"></p>
          </div>
        </div>

    
    <div class="control-group" style="float:left;">

          <!-- Text input-->
          <label class="control-label" for="input01">价格</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge" style="float:left width:200px;">
            <p class="help-block"></p>            
          </div>
		  </div>
		  <div><select class="input-xlarge"  style="float:left;width:100px;margin-left:10px;">
      <option>万元</option>
      <option>元/月</option>
      <option>元/平方</option>
      <option>元/年</option>
		</select>
		</div>
        <div class="control-group">
	


          <!-- Text input-->
          <label class="control-label" for="input01">地址</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <label class="control-label">基本设施</label>

          <!-- Multiple Checkboxes -->
          <div class="controls">
      <!-- Inline Checkboxes -->
      <label class="checkbox inline">
        <input type="checkbox" value="有线">
        有线
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="管媒">
        管媒
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="水电">
        水电
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="热水">
        热水
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="家具">
        家具
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="卫生设施">
        卫生设施
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="宽带">
        宽带
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="厨房设施">
        厨房设施
      </label>
  </div>

        </div>

    

    

    <div class="control-group" style="clear:both;">
          <label class="control-label">家用电器</label>

          <!-- Multiple Checkboxes -->
          <div class="controls">
      <!-- Inline Checkboxes -->
      <label class="checkbox inline" >
        <input type="checkbox" value="电视">
        电视
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="冰箱" >
        冰箱
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="空调">
        空调
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="电话">
        电话
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="洗衣机">
        洗衣机
      </label>
  </div>

        </div>

    <div class="control-group" style="clear:both;">
          <label class="control-label">装修情况</label>
          <div class="controls">
      <!-- Inline Radios -->
      <label class="radio inline">
        <input type="radio" value="无装修" name="group" checked="checked">
        无装修
      </label>
      <label class="radio inline">
        <input type="radio" value="简单装修" name="group">
        简单装修
      </label>
      <label class="radio inline">
        <input type="radio" value="中档装修" name="group">
        中档装修
      </label>
      <label class="radio inline">
        <input type="radio" value="较佳装修" name="group">
        较佳装修
      </label>
      <label class="radio inline">
        <input type="radio" value="豪华装修" name="group">
        豪华装修
      </label>
  </div>
        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">更多描述</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" class=""> </textarea>
            </div>
          </div>
        </div>

    

    <div class="control-group">
          <label class="control-label">上传图片</label>

          <!-- File Upload -->
          <div class="controls">
            <input class="input-file" id="fileInput" type="file">
          </div>
        </div>


    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">联系人</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>
	 

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">联系电话</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <label class="control-label"></label>

          <!-- Button -->
          <div class="controls">
            <button class="btn btn-default">提交</button>
          </div>
        </div>

    </fieldset>
  </form>

			</div>

	
	
	

</div>
</body>
</html>