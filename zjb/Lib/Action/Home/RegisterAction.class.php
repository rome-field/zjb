<?php
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
    public function  register(){
	$this->display();
    }
	public function verify(){
		import('ORG.Util.Image');	
		Image::buildImageVerify();
	}
}

