<?php

class RegisterAction extends Action {

  public function register() {

    if ($this->isPost()) {
      if (session('verify') != md5(strtoupper($_POST['yzm']))) {
        $this->error("验证码错误");
      }
      $user = D('User');
      if (!$user->create()) {
        $this->error($user->getError());
      }

      $name = $user->username;
      if (!($mid = $user->add())) {
        $this->error("注册失败！");
      }

      $this->success('注册成功，正在为您跳转....',U('Index/login'));
    }
    $province = M('area')->where('level=1')->field('id,name')->select();
    $this->assign('province', $province);
    $this->display();
  }

  public function hyregister() {
    if ($this->isPost()) {
      if (session('verify') != md5(strtoupper($_POST['yzm']))) {
        $this->error("验证码错误！");
      }

      $pic = upload_pic();

      //组装数据
      $db = M('company');
      if (!$db->create()) {
        $this->error($db->getError());
      }
      $db->re_time = time();
      $db->logo = $pic[0]['savepath'].C('THUMB_PREFIX').$pic[0]['savename'];
      $zone = M('area')->where('id='.$_POST['town'])->field('name')->find();
      $db->address = $zone['name'].$_POST['addr'];
      if(!$cid=$db->add()){
       $this->error('注册失败！');
       }
      $db = D('User');
      if(!$db->create()){
        $this->error($db->getError());
      }
      $db->user_type = 1;
      $db->company_id = $cid;
      if(!$mid=$db->add()){
       $this->error('注册失败！');
       }
      
      //注册成功，等待审核
      $this->success('注册成功，请耐心等待审核....', U('Index/login'));
    }

    $province = M('area')->where('level=1')->field('id,name')->select();
    $this->assign('province', $province);
    $this->display();
  }

}

