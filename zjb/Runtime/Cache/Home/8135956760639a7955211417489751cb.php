<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理页面</title>
<script src="__PUBLIC__/admin/js/prototype.lite.js" type="text/javascript"></script>
<script src="__PUBLIC__/admin/js/moo.fx.js" type="text/javascript"></script>
<script src="__PUBLIC__/admin/js/moo.fx.pack.js" type="text/javascript"></script>
  <link rel="stylesheet" href="__ROOT__/public/Home/form.css" type="text/css" />
<style>
body {
	font-size:12px;
	font-family:"宋体";
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}



</style>
</head>

<body style="background:#fff">
	<div class="cs">
		
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class="">表单名</legend>
      </div>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">昵称</label>
          <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
            <p class="help-block">Supporting help text</p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">姓名 </label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">邮箱</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">年龄</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">
          <label class="control-label">性别</label>
          <div class="controls">
      <!-- Inline Radios -->
      <label class="radio inline">
        <input type="radio" value="默认" name="group" checked="checked">
        默认
      </label>
      <label class="radio inline">
        <input type="radio" value="男" name="group">
        男
      </label>
      <label class="radio inline">
        <input type="radio" value="女" name="group">
        女
      </label>
  </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">QQ</label>
          <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
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
            <button class="btn btn-default">确定</button>
          </div>
        </div>

    

    </fieldset>
  </form>

	<div>
</body>
</html>