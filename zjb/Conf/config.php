<?php

return array(
    //'配置项'=>'配置值'
    
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
    
    //上传文件大小 2M
    "UPLOAD_MAX_SIZE" => "2097152",
    "UPLOAD_EXTS" => array('jpg', 'gif', 'png', 'jpeg', 'bmp'),
    "UPLOAD_PATH" => "uploads/", //上传路径
    'THUMB_PREFIX' => 't_', //缩略图前缀
    'UPLOAD_LIMIT' => '10',
    'SWFUPLOAD_THUMB_WIDTH' => '80', //SWF前端上传时显示宽度
    'SWFUPLOAD_THUMB_HEIGHT' => '60', //SWF前端上传时显示高度
    'SWFUPLOAD_IMAGESIZE' => '80,60,240,180',
    'URL_ROUTER_ON' => true, //开启路由
    'URL_ROUTE_RULES' => array(//定义路由规则
        'company/:id\d' => 'Company/index',
        'buyhouse/:id\d' => 'Buyhouse/view',
        'renthouse/:id\d' => 'Renthouse/view',
        'buycar/:id\d' => 'Buycar/view',
        'rentcar/:id\d' => 'Rentcar/view',
    ),
    
    //每页显示记录个数
    'NUM_PER_PAGE' => '2',
    
   
);
?>
