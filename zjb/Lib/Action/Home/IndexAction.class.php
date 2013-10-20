<?php

class IndexAction extends CommonAction {

  public function index() {
    $this->assign('zones', session('city_zones'));
    $this->display();
  }

  public function login() {
    if($this->isPost())
    {
      //验证码校验
      if(session('verify')!=  md5(strtoupper( $_POST['yzm'])))
        $this->error ('验证码错误！');
      
      //搜索数据库
      if($_POST['type']){
        $db = M('company');
      }
      else{
        $db = M('user');
      }
      $member = $db->where(array('mobile',$_POST['phone']))->field('id,username,password')->find();
      
      //验证密码
      if(!$member || $member['password']!=$this->_post('upwd','secmd5')){
        $this->error('帐号或密码错误！');
      }
      
      //自动登录
      if(isset($_POST['remember'])){
        $value = $member['id'].'|'.get_client_ip().'|'.$member['username'].$_POST['type'];
        $value = encrytion($value, 1);
        cookie('auto', $value, C('AUTO_LOGIN_LIFETIME'));
      }
      
      //设置session
      session('mid',$member['id']) ;
      session('mname',$member['username']) ;
      session('mtype',$_POST['type']) ;
      $this->redirect('Index/index');
    }
    $this->display();
  }
  
  public function logout()
  {
    if(isset($_COOKIE['auto'])){
      setcookie('auto', '',time()-1);
    }
    session_unset();
    session_destroy();
    redirect('Index/login');
  }

  public function zone() {
    
  }

}

