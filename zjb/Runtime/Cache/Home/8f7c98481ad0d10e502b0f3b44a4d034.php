<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 登录 </title>
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
   <link rel="stylesheet" href="__ROOT__/public/Home/edit.css" type="text/css" />



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
    <fieldset style="width:720px;margin:0px auto;height:100%;background:#fff">
      <div id="legend" class="">
        <legend class="">租售车</legend>
      </div>
    

    

    

    

    <div class="control-group">
          <label class="control-label">类别</label>
          <div class="controls">
      <!-- Inline Radios -->
      <label class="radio inline">
        <input type="radio" value="出租" name="group" checked="checked">
        出租
      </label>
      <label class="radio inline">
        <input type="radio" value="出售" name="group">
        出售
      </label>
  </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">车型</label>
          <div class="controls">
            <select class="input-xlarge">
      <option>不限</option>
      <option>经济轿车</option>
      <option>中级轿车</option>
      <option>高档轿车</option>
      <option>商务车</option>
      <option>越野车</option>
      <option>面包车</option>
      <option>客车/中巴</option>
      <option>货车/皮卡</option>
      <option>其它</option></select>
          </div>

        </div>

    

    

    

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01" id="span_brand">品牌</label>
          <div class="controls">
			<div id="div_brand"><input type="hidden" name="brand" id="J_brand_num" value="0" />
        <input type="text" name="brandShowName" id="J_brand_name" value="" readonly="readonly" class="input3" size="50"/></div>
        <div id="div_title" style="display:none"><input type="text" id="title" name="title" value="" class="input3" size="50"/></div>   <div id="show_alert" style="display:none"><br><span>求购请写明意向车辆或车型，禁止出现电话号码及标点符号</span></div> 
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">首次上牌年份</label>
          <div class="controls">
            <select class="input-xlarge">
      <option>请选择</option>
      <option>2013</option>
      <option>2013</option>
      <option>2011</option>
      <option>2010</option>
      <option>2009</option>
      <option>2008</option>
      <option>2007</option>
      <option>2006</option>
      <option>2005</option>
      <option>2004</option>
      <option>2003</option>
      <option>2002</option>
      <option>2001</option>
      <option>2000</option>
      <option>1999</option>
      <option>1998</option>
      <option>1997</option>
      <option>1996</option>
      <option>1995以前</option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">行驶里程</label>
          <div class="controls">
            <input type="text" placeholder="万公里" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">车辆颜色</label>
          <div class="controls">
            <select class="input-xlarge">
     <option value="">选择颜色</option><option value="1" style="background-color:#ffffff;color:#000000">白色</option><option value="35" style="background-color:#EFEFEF;color:#000000">银白色</option><option value="2" style="background-color:#000000;color:#ffffff">黑色</option><option value="33" style="background-color:#94979C;color:#000000">灰色</option><option value="3" style="background-color:#D7DADF;color:#000000">银灰</option><option value="34" style="background-color:#E5E5E5;color:#000000">香槟银</option><option value="4" style="background-color:#676863;color:#000000">铁灰</option><option value="5" style="background-color:#8892C5;color:#000000">灰紫蓝</option><option value="6" style="background-color:#6C8D9E;color:#000000">青灰</option><option value="7" style="background-color:#8FAD53;color:#000000">绿色</option><option value="8" style="background-color:#0B481F;color:#000000">深绿</option><option value="9" style="background-color:#264a48;color:#000000">深灰绿</option><option value="10" style="background-color:#C8E8FF;color:#000000">淡蓝</option><option value="11" style="background-color:#439BCB;color:#000000">湖蓝</option><option value="12" style="background-color:#3476cc;color:#000000">天蓝</option><option value="13" style="background-color:#072d98;color:#000000">蓝色</option><option value="14" style="background-color:#dfd0e7;color:#000000">淡紫</option><option value="15" style="background-color:#ff9ed5;color:#000000">粉红</option><option value="16" style="background-color:#cd39a9;color:#000000">紫色</option><option value="17" style="background-color:#9a355f;color:#000000">酱紫</option><option value="18" style="background-color:#740568;color:#000000">深紫</option><option value="19" style="background-color:#ede9d3;color:#000000">浅香滨</option><option value="20" style="background-color:#dbcf97;color:#000000">金色</option><option value="21" style="background-color:#fffae9;color:#000000">珍珠白</option><option value="22" style="background-color:#fff5ae;color:#000000">淡黄色</option><option value="23" style="background-color:#ffdf6b;color:#000000">中黄</option><option value="24" style="background-color:#f8be2e;color:#000000">黄色</option><option value="25" style="background-color:#f15e00;color:#000000">橙色</option><option value="26" style="background-color:#d81207;color:#000000">红色</option><option value="27" style="background-color:#a62335;color:#000000">暗红</option><option value="28" style="background-color:#95000f;color:#000000">深红</option><option value="29" style="background-color:#c69374;color:#000000">灰赭</option><option value="30" style="background-color:#c67037;color:#000000">赭色</option><option value="31" style="background-color:#994129;color:#000000">褐色</option><option value="32" style="background-color:#582c2b;color:#000000">深褐</option><option value="99" style="background-color:#FFFFFF;color:#000000">其它</option></select>
          </div>

        </div>

    <div class="control-group">
          <label class="control-label">变速箱</label>
          <div class="controls">
      <!-- Inline Radios -->
      <label class="radio inline">
        <input type="radio" value="不限" name="group" checked="checked">
        不限
      </label>
      <label class="radio inline">
        <input type="radio" value="手动" name="group">
        手动
      </label>
      <label class="radio inline">
        <input type="radio" value="自动" name="group">
        自动
      </label>
  </div>
        </div>

    

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">年检到期</label>
          <div class="controls">
            <select class="input-xlarge">
      <option>请选择</option>
      <option>2015</option>
      <option>2014</option>
      <option>2013</option>
      <option>未检</option>
      <option></option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">排量</label>
          <div class="controls">
            <input type="text" placeholder="升" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">保险到期</label>
          <div class="controls">
            <select class="input-xlarge">
      <option>请选择</option>
      <option>2016</option>
      <option>2015</option>
      <option>2014</option>
      <option>已过</option></select>
          </div>

        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">价格</label>
          <div class="controls">
            <input type="text" placeholder="万元" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <label class="control-label"></label>

          <!-- Multiple Checkboxes -->
          <div class="controls">
      <!-- Inline Checkboxes -->
      <label class="checkbox inline">
        <input type="checkbox" value="带牌销售">
        带牌销售
      </label>
  </div>

        </div>

    <div class="control-group">
          <label class="control-label">车辆基本配置</label>

          <!-- Multiple Checkboxes -->
          <div class="controls">
      <!-- Inline Checkboxes -->
      <label class="checkbox inline">
        <input type="checkbox" value="真皮座椅">
        真皮座椅
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="加热器">
        加热器
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="ABC">
        ABC
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="电动窗">
        电动窗
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="天窗">
        天窗
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="防盗锁">
        防盗锁
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="电动后福镜">
        电动后福镜
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="铝毂">
        铝毂
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="DCD">
        DCD
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="车载电视">
        车载电视
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="GPS">
        GPS
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="倒车雷达">
        倒车雷达
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="安全气囊">
        安全气囊
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="巡航定速">
        巡航定速
      </label>
      <label class="checkbox inline">
        <input type="checkbox" value="助力转向">
        助力转向
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
	
          <label class="control-label"><input type="button" value="增加" onclick="if(picnum<11){$('#f2').append($('#f1').html());picnum++;}else{alert('最多只能上传10张图片！');}" style="cursor:pointer;  vertical-align:top;" /> 上传图片</label>

          <!-- File Upload -->
          <div class="controls"  style="line-height:10px; vertical-align:middle;">
            <div id='f1'><input name="upload_picture[]" type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="input2" size="30"><br /></div><div id='f2'></div><input name="Hupload_picture" type="hidden" id="Hupload_picture" value="">
          </div>
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
	
	<script type="text/javascript" src="__ROOT__/public/js/edit.js"></script>
	<script type="text/javascript" src="__ROOT__/public/js/artDialog.min.js"></script>
	

</div>
<script type="text/javascript">
var show_mileage = '<input type="radio" name="MV_mileage" value="0" checked />不限　 <input type="radio" name="MV_mileage" value="I"  />3万公里以下　 <input type="radio" name="MV_mileage" value="II"  />3万以上到5万公里　 <input type="radio" name="MV_mileage" value="III"  />5万以上到10万公里　 <input type="radio" name="MV_mileage" value="IV"  />10万公里以上　 ';
var show_input_mileage = '<input type="text" name="MV_mileage" id="J_mileage" class="input3" size="10" value="" /> 万公里';
var show_price = '<input type="radio" name="price" value="0" checked />不限　 <input type="radio" name="price" value="I"  />3万以下　 <input type="radio" name="price" value="II"  />3万以上到5万　 <input type="radio" name="price" value="III"  />5万以上到8万　 <input type="radio" name="price" value="IV"  />8万以上到12万　 <input type="radio" name="price" value="V"  />12万以上到18万　 <input type="radio" name="price" value="VI"  />18万以上到24万　 <input type="radio" name="price" value="VII"  />24万以上　 ';
var show_input_price = '<input type="text" name="price" id="J_price" class="input3" size="10" maxlength="15" value=""> 万元　　<input name="MV_isSellLicense" type="checkbox" id="MV_isSellLicense" value="1" checked/> 带牌销售';
var picnum=1;
function setg(nowpage){
	var imgbox = document.getElementById('imgbox');
	var pagebox = document.getElementById('pagebox');
	var maxi = img.length;
	var pageboxhtml='';
	for(i=1;i<maxi;i++){
		pageboxhtml += '<span style="cursor:pointer;" onclick="setg('+i+')" class="'+((nowpage==i)?'':'un')+'dtImg">'+i+'</span>';
	}
	pagebox.innerHTML = pageboxhtml;
	imgbox.innerHTML = img[nowpage];
}
function scrollImg(x,y,obj){
	var w = obj.width;
	var h = obj.height;
	var maxP = Math.min(x/obj.width,y/obj.height);
	if(maxP>1){return true;}
	obj.width = w*maxP;
	obj.height = h*maxP;
	return true;
}
function checkSecondhandForm(){
    var form = document.form1;
    var isType = $("input[name='type_ix']:checked").val();    
    if( isType==1 ){    // 转让
		if( form.brand.value<1000  ){ alert("请选取品牌！"); $('#J_brand_name').focus(); return false; }
        if( $('#J_firstlicenseyear').val()==0 ){ alert('请选择首次上牌年份！'); return false; }
        if( $('#J_mileage').val()=='' ){ alert('请填写行驶公里！'); $('#J_mileage').focus(); return false; }
        if( isNaN($('#J_mileage').val()) ){ alert('行驶公里必须是数字！'); $('#J_mileage').focus(); return false; }
        if( $('#J_mileage').val()<=0){ alert('行驶公里必须大于0！'); $('#J_mileage').focus(); return false; }
        if( $('#J_displacement').val()=='' ){ alert('请填写排量！'); $('#J_displacement').focus(); return false; }
        if( isNaN($('#J_displacement').val()) ){ alert('排量必须是数字！'); $('#J_displacement').focus(); return false; }
        if( $('#J_displacement').val()<=0){ alert('排量必须大于0！'); $('#J_displacement').focus(); return false; }
        if( $('#J_asexpire').val()==0 ){ alert('请选择年检到期时间！'); return false; }
		if( $('#J_insure_expire_year').val()=='' || $('#J_insure_expire_month').val()==''){ alert('请选择保险到期时间！'); $('#J_insure_expire_year').focus(); return false; }
    }else{
		if( form.title.value=="" ){ alert("请填写求购意向！"); form.title.focus(); return false; }
	}
    if( $('#J_mileage').val()!='' && isType==1){
        if( isNaN($('#J_mileage').val()) ){ alert('行驶公里必须是数字！'); $('#J_mileage').focus(); return false; }
        if( $('#J_mileage').val()<=0){ alert('行驶公里必须大于0！'); $('#J_mileage').focus(); return false; }
    }
    if( $('#J_displacement').val()!='' ){
        if( isNaN($('#J_displacement').val()) ){ alert('排量必须是数字！'); $('#J_displacement').focus(); return false; }
        if( $('#J_displacement').val()<=0){ alert('排量必须大于0！'); $('#J_displacement').focus(); return false; }
    }
    if( $('#J_price').val()=='' ){ alert('请填写价格！'); $('#J_price').focus(); return false; }
    if( isType==1 ){    // 转让
        if( isNaN($('#J_price').val()) ){ alert('价格必须是数字！'); $('#J_price').focus(); return false; }
        if( $('#J_price').val()<=0){ alert('价格必须大于0！'); $('#J_price').focus(); return false; }
    }
    if( form.poster.value=="" ){ alert("请填写联系人！"); form.poster.focus(); return false; }
    if( form.contacts.value=="" ){ alert("请填写联系方式！"); form.contacts.focus(); return false; }
    if( form.password.value=="" ){ alert("请填写预留密码！"); form.password.focus(); return false; }
    if( form.imgcode.value=="" ){ alert("请填写验证码！"); form.imgcode.focus(); return false; }
	return true;
} 

function changetype(v){
	if(v=='1'){
		var str = '<font class="color1">*</font> ';
		$('#span_firstlicenseyear').html(str);
		$('#span_MV_mileage').html(str);
		$('#span_color').html(str);
		$('#span_MV_displacement').html(str);
		$('#span_asexpire').html(str);
		$('#span_insureexpireyear').html(str);
		document.getElementById('tr_asexpire').style.display='';
		document.getElementById('tr_basic').style.display='';
		document.getElementById('tr_color').style.display='';
		document.getElementById('tr_firstlicenseyear').style.display='';
		document.getElementById('tr_insureexpireyear').style.display='';
		document.getElementById('tr_MV_displacement').style.display='';
		$('#span_brand').html('品牌');
		$('#div_brand').show();
		$('#div_title').hide();
		$('#div_MV_mileage').html(show_input_mileage);
		$('#div_price').html(show_input_price);
		$('#show_alert').hide();
	}else if(v=='2'){
		$('#span_firstlicenseyear').html('');
		$('#span_MV_mileage').html('');
		$('#span_color').html('');
		$('#span_MV_displacement').html('');
		$('#span_asexpire').html('');
		$('#span_insureexpireyear').html('');
		document.getElementById('tr_asexpire').style.display='none';
		document.getElementById('tr_basic').style.display='none';
		document.getElementById('tr_color').style.display='none';
		document.getElementById('tr_firstlicenseyear').style.display='none';
		document.getElementById('tr_insureexpireyear').style.display='none';
		document.getElementById('tr_MV_displacement').style.display='none';
		$('#span_brand').html('求购意向');
		$('#div_brand').hide();
		$('#div_title').show();
		$('#div_MV_mileage').html(show_mileage);
		$('#div_price').html(show_price);
		$('#show_alert').show();
		
	}
}
/* 全选 */
function chkAll(o, name){
    var chklist = document.getElementsByName(name);
    for(var i = 0; i < chklist.length; i++){
        chklist[i].checked = o.checked ? true : false;
    }
}

/* 选取.地图坐标（保持同一域名） */
$('#J_pointer_btn').click(function(){
    art.dialog.open('?controller=Main&action=baiduMapSelectPointDialog', { title: '选取位置<span style="color:red;">（请在地图上点击）</span>', width:'720px', height:'420px', fixed:true }, false);
});
</script>
</body>
</html>