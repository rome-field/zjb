<?php
 import('ORG.Util.Session');
// 本类由系统自动生成，仅供测试用途
class DaikuangAction extends Action {
    public function daikuang(){
	$c=Session::get(C('USER_AUTH_KEY'));
	$this-> assign('c',$c);
	$this->display();
	
    }
	
}

