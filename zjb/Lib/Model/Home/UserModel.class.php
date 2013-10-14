<?php
Class UserModel extends Model
{
  protected $_map = array(
      'pwd' => 'password',
  );
  
  protected $_validate = array(
      array('phone','number','手机号已注册或码格式错误！',1,'unique'),
      array('pwd1','pwd','两次密码不一样',1,'confirm'),
      array('email','email','邮箱地址格式错误')
  );
  
  protected $_auto = array(
      array('password','md5',1,fuction),
  );
}
?>
