<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">
  <head>
    <title>城市切换</title>
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


  <script src="__ROOT__/Public/js/region.js"></script>
</head>

<body>
  <div class='container'>
    <div class='row'>
      <div class='clo-md-4 col-md-offset-4'>
        <form class="form-inline" method='get' action="<?php echo U(Common/city);?>" role="form">
          <select id="sheng" name="sheng" onchange="loadRegion('sheng', 2, 'shiqu', '<?php echo U('Ajax/getRegion');?>');" class='form-control'>
            <option value='0'selected>省份/直辖市</option>
            <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$area): $mod = ($i % 2 );++$i;?><option value="<?php echo ($area["id"]); ?>"><?php echo ($area["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select> 
          <select id="shiqu" name="shi"  class='form-control'>
            <option value="0">市/县</option>
          </select>
          <input class="btn btn-primary btn-lg" type="submit" value="Submit">
        </form>
      </div>
    </div>
</body>

</html>