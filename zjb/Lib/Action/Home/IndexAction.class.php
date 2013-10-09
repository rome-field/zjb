<?php
 import('ORG.Util.Session');
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index($c='绍兴'){
	
	$this-> assign('c',$c);
Session::set(C('USER_AUTH_KEY'),$c);
	$this->display();
	
    }
	
	
}

