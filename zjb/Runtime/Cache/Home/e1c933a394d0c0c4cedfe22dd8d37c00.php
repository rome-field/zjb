<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <title>内页</title>
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


  <link rel="stylesheet" href="__ROOT__/Public/Home/innerpage.css" type="text/css" />






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
				<li class="navbar-right" style="text-align:right;"><a href="<?php echo U('Publish/index');?>>我要登记</a></li>
			</ul>
		</div>
		<h3><span class="label label-default">信息</span></h3>
		<div id="innmain">
		
			<div id="lmain">
				
			<div id="inn" >
				<div id="innimg" ><img src="__ROOT__/Public/images/logo.jpg" alt=""/></div>
				<div id="inntxt">
					<table>
						<tr>
							<td colspan="2">科鲁兹三厢 2012款 1.6 SE MT</td>

						</tr>
						<tr>
							<td>价格</td>
							<td>车型</td>
						</tr>
						<tr>
							<td>品牌</td>
							<td>售价</td>
						</tr>
						<tr>
							<td>行程</td>
							<td></td>
						</tr>
						<tr>
							
							<td>联系人</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="2">联系电话</td>
							
						</tr>
					</table>
				</div>
			</div>
			<div id="c1">
				<div id="xw">
					<ul>
						<li  onmouseover="tab('qbxw');">车源信息</li>
						<li onmouseover="tab('qydt');">新车参数</li>
						
					<ul>
				</div>
			
				<div id="qbxw">
				 
				<ul class="cyxx_new">
					<li><span>车辆地点：</span>浙江 杭州 </li>
					<li><span>牌照地点：</span>浙江 杭州</li>
					<li><span>排 气 量：</span>2.0T</li>
					<li><span>变 速 箱：</span>手自一体</li>
					<li><span>保险到期：</span>2014-12 </li>
					<li><span>年检到期：</span>2014-12</li>
					<li><span>车辆类型：</span>非营运 </li>
					<li><span>保养情况：</span>4S店定期保养</li>
					<li><span>车身颜色：</span>红色</li>
					<li style='display:none;'><span>内饰颜色：</span></li>
					<li id="liHuanbao" style="display:none"><span>环保标准：</span> 国4 <a href="#">可迁入地区&gt;&gt;</a> </li>
					<li class="line728"></li>
				</ul>
				<div id="carimp">
						<img src="__ROOT__/Public/images/logo.jpg"/>
						<img src="__ROOT__/Public/images/logo.jpg"/>
				</div>

				
			</div>
			<div id="qydt">
				<table cellspacing="0" id="carstableone" cellpadding="0">
<thead><tr><th colspan="4">基本信息</th></tr></thead><tbody><tr><th width='28%'>车型名称</th><td width='22%'>12款 2.0T Coupe 3门耀致版</td><th width='28%'>厂商指导价</th><td width='22%'>63.80万元</td></tr><tr><th width='28%'>厂商</th><td width='22%'>路虎</td><th width='28%'>类别</th><td width='22%'>SUV</td></tr><tr><th width='28%'>发动机型号</th><td width='22%'>204PT</td><th width='28%'>变速箱</th><td width='22%'>手自一体</td></tr><tr><th width='28%'>车门数</th><td width='22%'>3</td><th width='28%'>座位数(座)</th><td width='22%'>4</td></tr><tr><th width='28%'>车身型式</th><td width='22%'>两厢</td><th width='28%'>长×宽×高(mm)</th><td width='22%'>4355*1965*1605</td></tr><tr><th width='28%'>轴距(mm)</th><td width='22%'>2660</td><th width='28%'>整备质量(Kg)</th><td width='22%'>1640</td></tr><tr><th width='28%'>油箱容积(L)</th><td width='22%'>70</td><th width='28%'>行李箱容积(L)</th><td width='22%'>575</td></tr></tbody>
</table>
<table cellspacing="0" cellpadding="0" id="configtableone">
<thead><tr><th colspan="4">发动机&变速箱</th></tr></thead><tbody><tr><th width='28%'>进气型式</th><td width='22%'>涡轮增压</td><th width='28%'>最大马力(Ps)</th><td width='22%'>240</td></tr><tr><th width='28%'>最大功率(kW)</th><td width='22%'>177</td><th width='28%'>最大功率转速(rpm)</th><td width='22%'>5500</td></tr><tr><th width='28%'>最大扭矩(N•m)</th><td width='22%'>340</td><th width='28%'>扭矩转速(rpm)</th><td width='22%'>1750</td></tr><tr><th width='28%'>供油方式</th><td width='22%'>直喷</td><th width='28%'>环保标准</th><td width='22%'>欧5</td></tr><tr><th width='28%'>变速箱类型</th><td width='22%'>手自一体</td><th width='28%'>挡位个数</th><td width='22%'>6</td></tr></tbody><thead><tr><th colspan="4">底盘转向及车轮制动</th></tr></thead><tbody><tr><th width='28%'>驱动方式</th><td width='22%'>全时四驱</td><th width='28%'>助力类型</th><td width='22%'>电子液压</td></tr><tr><th width='28%'>前悬挂型式</th><td width='22%'>多连杆式独立悬架</td><th width='28%'>后悬挂型式</th><td width='22%'>多连杆式独立悬架</td></tr><tr><th width='28%'>前制动类型</th><td width='22%'>通风盘</td><th width='28%'>后制动类型</th><td width='22%'>盘式</td></tr><tr><th width='28%'>手刹类型</th><td width='22%'>电子驻车制动</td><th width='28%'>前轮胎规格</th><td width='22%'>235/55 R19</td></tr><tr><th width='28%'>后轮胎规格</th><td width='22%'>235/55 R19</td><th width='28%'></th><td width='22%'></td></tr></tbody><thead><tr><th colspan="4">安全装备</th></tr></thead><tbody><tr><th width='28%'>驾驶座安全气囊</th><td width='22%'>有</td><th width='28%'>副驾驶安全气囊</th><td width='22%'>有</td></tr><tr><th width='28%'>前排侧气囊</th><td width='22%'>有</td><th width='28%'>后排侧气囊</th><td width='22%'>无</td></tr><tr><th width='28%'>前排头部气囊(气帘)</th><td width='22%'>有</td><th width='28%'>后排头部气囊(气帘)</th><td width='22%'>有</td></tr><tr><th width='28%'>膝部气囊</th><td width='22%'>有</td><th width='28%'>遥控钥匙</th><td width='22%'>有</td></tr><tr><th width='28%'>无钥匙启动系统</th><td width='22%'>有</td><th width='28%'></th><td width='22%'></td></tr></tbody><thead><tr><th colspan="4">操控配置</th></tr></thead><tbody><tr><th width='28%'>ABS防抱死</th><td width='22%'>有</td><th width='28%'>动力分配(EBD/CBC等)</th><td width='22%'>有</td></tr><tr><th width='28%'>刹车辅助(EBA/BAS/BA等)</th><td width='22%'>有</td><th width='28%'>牵引力控制(ASR/TCS/TRC等)</th><td width='22%'>有</td></tr><tr><th width='28%'>车身稳定控制(ESP/DSC/VSC等)</th><td width='22%'>有</td><th width='28%'>自动驻车/上坡辅助</th><td width='22%'>有  有</td></tr><tr><th width='28%'>陡坡缓降</th><td width='22%'>有</td><th width='28%'>空气悬挂</th><td width='22%'>无</td></tr></tbody><thead><tr><th colspan="4">外部配置</th></tr></thead><tbody><tr><th width='28%'>天窗型式</th><td width='22%'>全景</td><th width='28%'>天窗开合方式</th><td width='22%'>电动</td></tr><tr><th width='28%'>轮毂材料</th><td width='22%'>铝合金</td><th width='28%'>电动吸合门</th><td width='22%'>无</td></tr></tbody><thead><tr><th colspan="4">内部配置</th></tr></thead><tbody><tr><th width='28%'>方向盘表面材料</th><td width='22%'>真皮</td><th width='28%'>多功能方向盘</th><td width='22%'>有</td></tr><tr><th width='28%'>方向盘前后调节</th><td width='22%'>有</td><th width='28%'>方向盘上下调节</th><td width='22%'>有</td></tr><tr><th width='28%'>方向盘调节方式</th><td width='22%'>待查</td><th width='28%'>变速箱变速杆位置</th><td width='22%'>待查</td></tr><tr><th width='28%'>定速巡航</th><td width='22%'>有</td><th width='28%'>泊车辅助</th><td width='22%'>有</td></tr><tr><th width='28%'>倒车视频影像</th><td width='22%'>有</td><th width='28%'>行车电脑显示屏</th><td width='22%'>有</td></tr><tr><th width='28%'>HUD抬头数字显示</th><td width='22%'>无数据</td><th width='28%'></th><td width='22%'></td></tr></tbody><thead><tr><th colspan="4">座椅配置</th></tr></thead><tbody><tr><th width='28%'>座椅材质</th><td width='22%'>真皮</td><th width='28%'>运动座椅</th><td width='22%'>无</td></tr><tr><th width='28%'>驾驶座座椅调节方向</th><td width='22%'>8</td><th width='28%'>驾驶座腰部支撑调节</th><td width='22%'>有</td></tr><tr><th width='28%'>驾驶座座椅调节方式</th><td width='22%'>电动</td><th width='28%'>电动座椅记忆</th><td width='22%'>有</td></tr><tr><th width='28%'>座椅加热</th><td width='22%'>前排座椅</td><th width='28%'>座椅通风</th><td width='22%'>无</td></tr><tr><th width='28%'>座椅按摩</th><td width='22%'>无</td><th width='28%'>前座中央扶手</th><td width='22%'>有</td></tr><tr><th width='28%'>后座中央扶手</th><td width='22%'>无</td><th width='28%'>行李箱盖开合方式</th><td width='22%'>电动</td></tr></tbody><thead><tr><th colspan="4">多媒体配置</th></tr></thead><tbody><tr><th width='28%'>GPS导航系统</th><td width='22%'>有</td><th width='28%'>中控台液晶屏</th><td width='22%'>有</td></tr><tr><th width='28%'>CD</th><td width='22%'>有</td><th width='28%'>DVD</th><td width='22%'>无</td></tr><tr><th width='28%'>蓝牙/车载电话</th><td width='22%'>有  有</td><th width='28%'>扬声器数量</th><td width='22%'>8</td></tr></tbody><thead><tr><th colspan="4">灯光配置</th></tr></thead><tbody><tr><th width='28%'>大灯类型</th><td width='22%'>氙气</td><th width='28%'>日间行车灯</th><td width='22%'>有</td></tr><tr><th width='28%'>自动头灯</th><td width='22%'>有</td><th width='28%'>车内氛围灯</th><td width='22%'>无</td></tr><tr><th width='28%'>转向头灯(辅助灯)</th><td width='22%'>有</td><th width='28%'>前雾灯</th><td width='22%'>有</td></tr><tr><th width='28%'>大灯高度可调</th><td width='22%'>有</td><th width='28%'>大灯清洗装置</th><td width='22%'>有</td></tr></tbody><thead><tr><th colspan="4">玻璃/后视镜</th></tr></thead><tbody><tr><th width='28%'>车窗</th><td width='22%'>前电动窗</td><th width='28%'>车窗防夹手功能</th><td width='22%'>待查</td></tr><tr><th width='28%'>后视镜电动调节</th><td width='22%'>有</td><th width='28%'>后视镜加热</th><td width='22%'>有</td></tr><tr><th width='28%'>内后视镜防眩目功能</th><td width='22%'>有</td><th width='28%'>后视镜电动折叠</th><td width='22%'>有</td></tr><tr><th width='28%'>后视镜记忆</th><td width='22%'>有</td><th width='28%'>感应雨刷</th><td width='22%'>有</td></tr></tbody><thead><tr><th colspan="4">空调/冰箱</th></tr></thead><tbody><tr><th width='28%'>空调控制方式</th><td width='22%'>自动</td><th width='28%'>后排独立空调</th><td width='22%'>无</td></tr><tr><th width='28%'>后排出风口</th><td width='22%'>有</td><th width='28%'>温度分区控制</th><td width='22%'>有</td></tr><tr><th width='28%'>空气调节/花粉过滤</th><td width='22%'>有</td><th width='28%'>车载冰箱</th><td width='22%'>无</td></tr></tbody><thead><tr><th colspan="4">高科技配置</th></tr></thead><tbody><tr><th width='28%'>自动泊车入位</th><td width='22%'>有</td><th width='28%'>并线辅助</th><td width='22%'>无</td></tr><tr><th width='28%'>主动刹车/主动安全系统</th><td width='22%'>无</td><th width='28%'>整体主动转向系统</th><td width='22%'>无数据</td></tr><tr><th width='28%'>夜视系统</th><td width='22%'>无</td><th width='28%'>中控台液晶屏</th><td width='22%'>有</td></tr><tr><th width='28%'>自适应巡航</th><td width='22%'>无数据</td><th width='28%'>全景摄像头</th><td width='22%'>选配</td></tr></tbody>
</table>

			</div>
			<div id="yhcx">
				
				1231231
				
			</div>
			
		
			</div>
		</div>
			
			
				<div id="c3">
				<div class="rb1">
				
				<h4><span class="label label-default">公司信息</span></h4>
				
				
				<ul>
					<li style="font-weight:bold;font-size:15px;">北京优途旧机动车经纪有限公司<li>
					<li><span>公司类型：</span>&nbsp&nbsp &nbsp <span>专业公司</span></li>
					<li><span>公司地址：</span>&nbsp&nbsp &nbsp <span>面积:150㎡</span></li>
					<li><span>邮政编码：</span>&nbsp&nbsp &nbsp <span>面积:150㎡</span></li>
					<li><span>&nbsp &nbsp&nbsp联系人：</span>&nbsp&nbsp &nbsp <span>面积:150㎡</span></li>
					<li><span>&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp电话：</span>&nbsp&nbsp &nbsp <span>面积:150㎡</span></li>
					<li><span>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp传真：</span>&nbsp&nbsp &nbsp <span>面积:150㎡</span></li>
					<li><span>注册时间：</span>&nbsp&nbsp &nbsp <span>面积:150㎡</span></li>
				</ul>
				
			</div>
			
			
			
				
		
					
					
		
		
		<div id="footer">
		
		
			
		</div>	
		

			 
	
	</div>
</form>
</body>
</html>