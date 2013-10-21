<?php

class CompanyModel extends Model {

  protected $_map = array(
      'upwd' => 'password',
      'uname' => 'username',
      'phone' => 'mobile',
      'shi' => 'city_id',
      'town' => 'zone_id'
  );
  protected $_validate = array(
      array('username', 'require', '用户名不能为空'),
      array('mobile', 'number', '手机号已注册或码格式错误！', 1, 'unique'),
      array('upwd1', 'password', '两次密码不一样', 1, 'confirm'),
      array('email', 'email', '邮箱地址格式错误')
  );
  protected $_auto = array(
      array('password', 'secmd5', 1, 'function'),
  );

}

?>
