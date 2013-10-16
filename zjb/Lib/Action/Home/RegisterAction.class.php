<?php
	import('ORG.Util.Session');
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
    public function  register(){
	$c=Session::get(C('USER_AUTH_KEY'));
	$this-> assign('c',$c);
	$this->display();
    }
	 public function  hyregister(){
	$c=Session::get(C('USER_AUTH_KEY'));
	$this-> assign('c',$c);
	$this->display();
    }
	public function verify(){
		import('ORG.Util.Image');	
		Image::buildImageVerify();
	}
}

