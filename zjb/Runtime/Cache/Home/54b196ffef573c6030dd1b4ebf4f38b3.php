<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>管理中心</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<style>
	
</style>
</head>
<div id="con">
  <frameset cols="100,*,100"  id="frame"  frameborder = "0">
	<frame src="" name="leftFrame"  scrolling="no" target="main" />
		<frameset  rows="100,*" id="frame"  frameborder = "0">
			<frame src="" scrolling="no" target="main" />
				<frameset  cols="200,*" id="frame"  frameborder = "0">
							<frame src="<?php echo U('left');?>" name="leftFrame"  scrolling="no" target="main" />
					<frame src="<?php echo U('right');?>" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self" />
				</frameset>
			
		</frameset>
		<frame src="" name="leftFrame"  scrolling="no" target="main" />
	</frameset>

</div>
<noframes>
  <body></body>
    </noframes>
</html>