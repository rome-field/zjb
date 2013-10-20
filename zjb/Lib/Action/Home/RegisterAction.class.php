<?php

class RegisterAction extends Action {

  public function register() {
  
    if($this->isPost())
    {
      if(session('verify')!=md5(strtoupper($_POST['yzm']))) 
      {
        $this->error("验证码错误");
      }
      $user = D('User');
      if(!$user->create()){
        $this->error($user->getError());
      }

      $name = $user->username;
      if(!($mid=$user->add())){
        $this->error("注册失败！");
      }
      
      //注册成功，设置session
      session('mname',$name);
      session('mtype','0');
      session('mid',$mid);
      $this->success('注册成功，正在为您跳转....',__APP__);
    }
    $province = M('area')->where('level=1')->field('id,name')->select();
    $this->assign('province',$province);
    $this->display();  
  }

  public function hyregister() {
    $province = M('area')->where('level=1')->field('id,name')->select();
    $this->assign('province',$province);
    $this->display();
  }

}

