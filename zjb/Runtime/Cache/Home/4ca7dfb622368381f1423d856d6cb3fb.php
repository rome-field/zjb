<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>
            发布房子
        </title>
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


    <!--[if lte IE 6]>
    <!-- bsie css 补丁文件 -->
    <link rel="stylesheet" href="__ROOT__/Public/dist/css/bootstrap-ie6.css"/>
    <!-- bsie 额外的 css 补丁文件 -->
    <link rel="stylesheet" href="__ROOT__/Public/dist/css/ie.css"/>
    <![endif]-->
    <!-- Optional theme -->
    <link rel="stylesheet" href="__ROOT__/Public/Home/publish.css" type="text/css" />
    <link rel="stylesheet" href="__ROOT__/Public/Home/form.css" type="text/css" />
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
    <div id="container" >
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

        <div id="main">
            <form class="form-horizontal pull-left" action="<?php echo U('Publish/sellHouse');?>" method='post' >
                <fieldset style="width:700px;margin:0px auto">
                    <div id="legend" class="">
                        <legend class="">出售房屋</legend>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">标题</label>
                        <div class="controls">
                            <input name='title' type="text" placeholder="输入嘹亮的信息标题" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Select Basic -->
                        <label class="control-label" style="clear:both;" >房屋类型</label>
                        <div class="controls">
                            <select name='house_kind' class='input-xlarge' >
                                <option style="border: solid 1px #000">请选择</option>
                                <option value='1'>普通住宅</option>
                                <option value='2'>高层住宅</option>
                                <option value='3'>民房</option>
                                <option value='4'>别墅</option>
                                <option value='5'>公寓</option>
                                <option value='6'>写字楼</option>
                                <option value='7'>商铺</option>
                                <option value='8'>厂房</option>
                                <option value='9'>其他</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">客厅</label>
                        <div class="controls">
                            <input name='parlors' type="text" placeholder="客厅的个数" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">卧室</label>
                        <div class="controls">
                            <input name='rooms' type="text" placeholder="卧室的个数" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">卫生间</label>
                        <div class="controls">
                            <input name='bathrooms' type="text" placeholder="卫生间的个数" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">共有楼层</label>
                        <div class="controls">
                            <input name='floors' type="text" placeholder="房屋所在大楼总楼层数" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">所在楼层</label>
                        <div class="controls">
                            <input name='floor_of' type="text" placeholder="输入本房所在楼层" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">年代</label>
                        <div class="controls">
                            <input name='year' type="text" placeholder="房屋何年投入使用，如“2006”" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">面积</label>
                        <div class="controls">
                            <input name='area' type="text" placeholder="" class="input-xlarge">  平方米
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="clear:both;" >装修程度</label>
                        <div class="controls">
                            <select name='finish_level' class='input-xlarge' >
                                <option style="border: solid 1px #000">请选择</option>
                                <option value='1'>毛坯</option>
                                <option value='2'>简单装修</option>
                                <option value='3'>中等装修</option>
                                <option value='4'>精装修</option>
                                <option value='5'>豪华装修</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Text input-->
                        <label class="control-label">地址</label>
                        <div class="controls">
                            <select name='zone_id' >
                                <option>选择当前城市的区县</option>
                                <?php if(is_array($_SESSION['city_zones'])): foreach($_SESSION['city_zones'] as $key=>$zone): ?><option value="<?php echo ($zone["id"]); ?>"><?php echo ($zone["name"]); ?></option><?php endforeach; endif; ?>
                            </select>
                            <p class="help-block"></p>
                            <input name='addr' type="text" placeholder="建议地址具体到小区名" class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">公交信息</label>
                        <div class="controls">
                            <input name='bus_info' type="text" placeholder="输入周边公交地铁信息" class="input-xlarge"> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <!-- Text input-->
                        <label class="control-label">价格</label>
                        <div class="controls">
                            <input name='area' type="text" placeholder="" class="input-xlarge"> 万元
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Textarea -->
                        <label class="control-label">卖家评点</label>
                        <div class="controls">
                            <div class="textarea">
                                <textarea name='describe_text' > </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">上传图片</label>
                        <!-- File Upload -->
                        <div class="controls">
                            <?php  $swfupload_id = isset($swfupload_id) ? ++$swfupload_id : 0; if($swfupload_id==0): ?>

<link href='__ROOT__/Public/swf/css/default.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='__ROOT__/Public/swf/js/handlers.js'></script>
<script type='text/javascript' src='__ROOT__/Public/swf/swfupload/swfupload.js'></script>
<script type='text/javascript' src='__ROOT__/Public/swf/swfupload/swfupload.queue.js'></script>
<script type='text/javascript' src='__ROOT__/Public/swf/js/fileprogress.js'></script>
<script type='text/javascript' src='__ROOT__/Public/swf/hd_set.js'></script>
<?php endif; ?>

<script type="text/javascript">
            //HQL
    if(typeof swfupload=='undefined'){
        swfupload_file=[];//记录添加或删除文件数据
    }
    $(function(){
        var swfu;
        var settings = {
            flash_url : '__ROOT__/Public/swf/swfupload/swfupload.swf',
            flash9_url : '__ROOT__/Public/swf/swfupload/swfupload_fp9.swf',
            upload_url: '__APP__/Ajax/swfupload',
            post_params: {},//POST参数
            file_size_limit : '<?php echo C("UPLOAD_MAX_SIZE");?>',
            file_types : '*.jpg;*jpeg;*.png;*.gif',
            file_types_description : 'Files:',
            file_upload_limit :'<?php echo C("UPLOAD_LIMIT");?>',
            file_queue_limit : 0,
            custom_settings : {
                progressTarget : 'fsUploadProgress<?php echo $swfupload_id ?>',
                cancelButtonId : 'btnCancel'
            },
            debug: false,
            button_width: '110',
            button_height: '26',
            button_placeholder_id: 'spanButtonPlaceHolder',
            button_text: '<span class="theFont">上传图片</span>',
            button_text_style: '.theFont { display:block;font-size: 14;font-weight:bold;color:#ffffff; }',
            button_text_left_padding: 30,
            button_text_top_padding: 3,
            button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
            button_cursor: SWFUpload.CURSOR.HAND,
            swfupload_preload_handler : preLoad,
            swfupload_load_failed_handler : loadFailed,
            file_queued_handler : fileQueued,
            file_queue_error_handler : fileQueueError,
            file_dialog_complete_handler : fileDialogComplete,
            upload_start_handler : uploadStart,
            upload_progress_handler : uploadProgress,
            upload_error_handler : uploadError,
            upload_success_handler : uploadSuccess,
            upload_complete_handler : uploadComplete,
            queue_complete_handler : queueComplete	// Queue plugin event
        };
        settings.post_params['<?php echo session_name();?>']='<?php echo session_id();?>';
        settings.post_params['dir']='/';
        settings.post_params['upload_display_width']='<?php echo C("SWFUPLOAD_THUMB_WIDTH");?>';
        settings.post_params['upload_display_height']='<?php echo C("SWFUPLOAD_THUMB_HEIGHT");?>';
        settings.post_params['imagesize']='<?php echo C("SWFUPLOAD_IMAGESIZE");?>';
        settings.post_params['swfupload_size']='<?php echo C("UPLOAD_MAX_SIZE");?>';
        //settings.post_params['water_on']='<?php echo $water_on; ?>';
        swfu = new SWFUpload(settings);
        var file_upload={
            "swfuobj":swfu,//上传对象
            "file_upload_limit":swfu.settings.file_upload_limit,//允许上传的总的文件数量，删除操作不会改变
            "file_allow_total":swfu.settings.file_upload_limit,//允许上传的总的文件数量,删除操作会改变
            "file_success_nums":0,//成功上传的文件数量
            "file_nums":0,//已经上传的文件数量，包括删除的文件
            "delurl":"__APP__/Ajax/swfuploaddel",
            "input_name":"upload_pic"
        };
        swfupload_file.push(file_upload);
    })
</script>
<div class='fieldset flash' id="fsUploadProgress<?php echo ($swfupload_id); ?>">

</div>
<div class='swfupload_button'  href='javascript:;'>
  <span id='spanButtonPlaceHolder'></span>
  <i class='ico-btn ib-upload' style='position:absolute;left:10px;top:5px;'></i>
</div>
<div id='swfupload_message<?php echo ($swfupload_id); ?>'></div>
<div  class='swfupload_file_show' id='swfupload_file_show<?php echo ($swfupload_id); ?>'>
  <?php if($swfupload_id==0):?>
  <div class='swfupload_input'></div>
  <?php endif;?>
  <ul></ul>
</div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人</label>
                        <div class="controls">
                            <input name='contact' type="text" placeholder="" class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Text input-->
                        <label class="control-label">联系电话</label>
                        <div class="controls">
                            <input name='contact_phone' type="text" placeholder="" class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-default">发布</button>
                            <p class='text-muted'>非认证商家会员发布信息需要通过审核</p>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>