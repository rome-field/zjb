<?php
// 本类由系统自动生成，仅供测试用途

class CompanyAction extends Action{
	public function company(){
	$Data = M('Data'); // 实例化Data数据对象
    import('ORG.Util.Page');// 导入分页类
	
    $count      = $Data->where($map)->count();// 查询满足要求的总记录数
    $Page       = new Page($count,12);// 实例化分页类 传入总记录数
    // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
    $nowPage = isset($_GET['p'])?$_GET['p']:1;
    $list = $Data->where($map)->order('create_time')->page($nowPage.','.$Page->listRows)->select();
    $show       = $Page->show();// 分页显示输出
    $this->assign('page',$show);// 赋值分页输出
    $this->assign('list',$list);// 赋值数据集
	$this->display();
    }
	

};

//验证登录
/*	public function check(){
		header('Content-Type:text/html;charset=utf-8');
		if (!isset($_POST['isopenjs'])){
			echo '<p style="line-height:20px; font-size:12px; text-align:center"><img src="../../Public/images/formimg/onFocus.gif" style="vertical-align:middle"/>系统检测到您关闭了JS, 请开启! 体验更人性化的效果!</p>';
		}
		if ($_SESSION['verify'] != md5($_POST['yzm'])){
			echo '验证码错误';
			return;
		}	
			
		$user = M('user');
		$uname = $_POST['uname'];
		$upwd = md5($_POST['upwd']);
		$list = $user->field(array('userpwd','username','name','loginnums'))->where('username="'.$uname.'"')->find();	
		if ($list['userpwd'] != $upwd){
			echo '用户名或密码错误';
			return;
		}else{
			session_start();
			$_SESSION['uname'] = $list['username'];
			$_SESSION['name'] = $list['name'];
			echo '正在登录..';		
		}			
		
		if (!isset($_POST['isopenjs'])){
			header('');
		}
		
	}
	
	//退出登录
	public function outlogin(){
		header('Content-Type:text/html;charset=utf-8');
		session_start();
		$_SESSION = array();
		if (isset($_COOKIE[session_name()])){
			setCookie(session_name(),'',time()-100);
		}
		session_destroy();
		echo '<script>alert("退出成功");location.href="../../admin.php/login"</script>';
		echo '成功退出';
		
	}
*/