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

/**
 * 上传图片
 * 
 */
function upload_pic()
{
   import('ORG.Net.UploadFile');
      $upload = new UploadFile();
      $upload->maxSize = C('UPLOAD_MAX_SIZE');
      $upload->allowExts = C('UPLOAD_EXTS');
      $upload->savePath = C('UPLOAD_PATH').'company/logo/'.date('yW').'/';
      $upload->thumb = 'true';
      $upload->thumbMaxWidth = '240';
      $upload->thumbMaxHeight = '180';
      $upload->thumbPrefix = 't_';
      if(!$upload->upload()){
        //$this->error($upload->getErrorMsg());
        Log::write('upload pic failed!');
      }  else {
        $info = $upload->getUploadFileInfo();
      }
      return $info;
}
?>