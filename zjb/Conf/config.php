<?php

return array(
    //'配置项'=>'配置值'
    'APP_GROUP_LIST' => 'Admin,Home',
    'DEFAULT_GROUP' => 'Home',
    //'SHOW_PAGE_TRACE' => true, // 显示页面Trace信息
    'USER_AUTH_KEY' => 'authId',
    
    //数据库信息
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'zjb', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '2013zjb', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 'zjb_', // 数据库表前缀
    
    
    //用户密码加密KEY值
    'SECMD5' => 'zjb',
    //COOKIE异位或加密KEY值
    'AUTO_LOGIN_KEY' => md5('zjb'),
    //自动登录有效时间=5天
	'AUTO_LOGIN_LIFETIME' => 3600 * 24 * 5,
);
?>
