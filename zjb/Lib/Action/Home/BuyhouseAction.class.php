<?php
 import('ORG.Util.Session');
// 本类由系统自动生成，仅供测试用途
class BuyhouseAction extends Action {
    public function buyhouse(){
	$c=Session::get(C('USER_AUTH_KEY'));
	$this-> assign('c',$c);
	$this->display();
	
    }
	
}

