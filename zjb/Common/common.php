<?php
/**
 * 注册用户密码加密方法
 * 
 */
function secmd5($str){
	return md5(C('SECMD5').$str);
}

/**
 * 异位或加密
 * @param  [type]  $value [description]
 * @param  integer $type  [description]
 * @return [type]         [description]
 */
function encrytion ($value, $type=0) {
	$key = md5(C('AUTO_LOGIN_KEY'));
	if ($type) {
		return str_replace('=', '', base64_encode($value ^ $key));
	}
	$value = base64_decode($value);
	return $value ^ $key;
}

?>
