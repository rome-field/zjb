<?php

/**
 * 注册用户密码加密方法
 * 
 */
function secmd5($str) {
    return md5(C('SECMD5') . $str);
}

/**
 * 异位或加密
 * @param  [type]  $value [description]
 * @param  integer $type  [description]
 * @return [type]         [description]
 */
function encrytion($value, $type = 0) {
    $key = md5(C('AUTO_LOGIN_KEY'));
    if ($type) {
        return str_replace('=', '', base64_encode($value ^ $key));
    }
    $value = base64_decode($value);
    return $value ^ $key;
}

/**
 * 上传图片
 * 
 */
function upload_pic() {
    import('ORG.Net.UploadFile');
    $upload = new UploadFile();
    $upload->maxSize = C('UPLOAD_MAX_SIZE');
    $upload->allowExts = C('UPLOAD_EXTS');
    $upload->savePath = C('UPLOAD_PATH') . 'company/logo/' . date('yW') . '/';
    $upload->thumb = 'true';
    $upload->thumbMaxWidth = '240';
    $upload->thumbMaxHeight = '180';
    $upload->thumbPrefix = 't_';
    if (!$upload->upload()) {
        //$this->error($upload->getErrorMsg());
        Log::write('upload pic failed!');
    } else {
        $info = $upload->getUploadFileInfo();
    }
    return $info;
}

/**
 *  卸载指定的GET参数重组URL
 *
 * @param  $remove  需要过滤的字段  多个以数组方式传递
 * @return String     URL地址
 */
function filterUrl($remove) {
    $get = $_GET;
    unset($get['_URL_']);
    if (is_array($remove)) {
        foreach ($remove as $v) {
            unset($get[$v]);
        }
    } else {
        unset($get[$remove]);
    }
    $url = '';
    foreach ($get as $k => $v) {
        $url .= '/' . $k . '/' . $v;
    }
    return __ACTION__ . $url;
}

//计算出多选框post过来的数值
function getSetValue($arr) {
    foreach ($arr as $v) {
        $t += intval($v);
    }
    return $t;
}

/**
 * 返回发布时间字符串
 * @param type $time
 */
function getPublishTime($time) {
    $now = $_SERVER['REQUEST_TIME'];
    $str = '';
    switch ($time) {
        case $now - $time < 60:
            $str = ($now - $time) . '秒前';
            break;
        case $now - $time < 3600 :
            $str = floor(($now - $time) / 60) . '分钟前';
            break;
        case $now - $time < 3600 * 8:
            $str = floor(($now - $time) / 3600) . '小时前';
            break;
        case strtotime(date('Y-m-d', $now)) < $time:
            $str = '今天';
            break;
        case strtotime(date('Y-m-d', $now) . '-1 day') < $time:
            $str = '昨天';
            break;
        default:
            $str = date('Y-m-d', $time);
    }
    return $str;
}

/*
 * 根据信息类型和信息id生成信息浏览url
 * 
 */

function getInfoUrl($type, $id) {
    switch ($type) {
        case '卖房':
            return U('buyhouse/' . $id);
            break;
        case '租房':
            return U('renthouse/' . $id);
            break;
        case '卖车':
            return U('buycar/' . $id);
            break;
        case '租车':
            return U('rentcar/' . $id);
            break;
        case '贷款':
            return U('loan/' . $id);
            break;
        case '理财':
            return U('invest/' . $id);
            break;
        default :
            return '#';
    }
}

?>
