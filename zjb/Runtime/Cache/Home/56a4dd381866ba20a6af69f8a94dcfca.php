<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理页面</title>
<script src="__PUBLIC__/admin/js/prototype.lite.js" type="text/javascript"></script>
<script src="__PUBLIC__/admin/js/moo.fx.js" type="text/javascript"></script>
<script src="__PUBLIC__/admin/js/moo.fx.pack.js" type="text/javascript"></script>
  <link rel="stylesheet" href="__ROOT__/public/Home/form.css" type="text/css" />
  <link rel="stylesheet" href="__ROOT__/public/dist/css/bootstrap.css">

<script type="text/javascript" src="__ROOT__/public/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="__ROOT__/public/dist/js/bootstrap.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="__ROOT__/public/dist/css/bootstrap-theme.css">
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
	
	<ul class="list-group">
  <li class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Cras justo odio</li>
  <li class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Dapibus ac facilisis in</li>
  <li class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Morbi leo risus</li>
  <li class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Porta ac consectetur ac</li>
  <li class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Vestibulum at eros</li>
</ul>	
 



	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">选择框</h4>
      </div>
      <div class="modal-body">
        请选择你所要进行的操作？
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">修改</button>
        <button type="button" class="btn btn-primary">删除</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- 
</body>
</html>