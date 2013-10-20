<?php

class Company extends Model{
  
    protected $_map = array(
      'upwd' => 'password',
      'uname'=> 'username',
      'phone'=> 'mobile',
      
  );
  
  protected $_validate = array(
      array('uname', 'require', '用户名不能为空'),
      array('phone','number','手机号已注册或码格式错误！',1,'unique'),
      array('upwd1','upwd','两次密码不一样',1,'confirm'),
      array('email','email','邮箱地址格式错误')
  );
  
  protected $_auto = array(
      array('password','secmd5',1,fuction),
  );
}
?>
