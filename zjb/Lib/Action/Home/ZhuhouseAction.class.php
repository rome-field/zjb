<?php
 import('ORG.Util.Session');
// 本类由系统自动生成，仅供测试用途
class ZhuhouseAction extends Action {
    public function zhuhouse(){
	$c=Session::get(C('USER_AUTH_KEY'));
	$this-> assign('c',$c);
	$this->display();
	
    }
	
}

