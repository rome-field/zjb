<?php
// $json = json_encode(array("state" => 'ok'));
// echo $json;
// exit;
// /*
defined('THINK_PATH') or exit();
C("debug", 0);
$display_width = (int)$_POST['upload_display_width'];
$display_height = (int)$_POST['upload_display_height'];
$water_on = isset($_POST['water_on']) ? intval($_POST['water_on']) : C("WATER_ON");
$swfupload_size = (int)$_POST['swfupload_size'];
$imagesize = $_POST['imagesize']; //图片上传大小
if ($imagesize) {
    $size = explode(",", $imagesize);
    if (count($size) % 2 != 0) {
        $json = json_encode(array("state" => 'upload上传插件属性imagesize宽，高值必须成对出现如100,200,300,400'));
        echo $json;
        exit;
    }
}
//$dir = isset($_POST['dir']) ? $_POST['dir'] : ''; //上传目录
$dir = ''; //上传目录
$thumb_type = isset($_POST['thumb_type']) ? (int)$_POST['thumb_type'] : 6; //缩略方式
C("THUMB_ON", 0);
C("WATER_ON", $water_on);
$upload = new upload2($dir, '', $swfupload_size);
$uploadFile = $upload->upload();
$state = empty($upload->error) ? "SUCCESS" : $upload->error;
if (!$uploadFile) {//上传失败
    $json = json_encode(array("state" => $state));
    echo $json;
    exit;
}
$field = $uploadFile[0]['path']; //上传成功文件物理路径 
$info = pathinfo($field);
$fileData = array();
$fileData[0]['path'] = $field; //上传后的大图 


//摘至HD框架,swfload250页面必须
$host = $_SERVER['HTTP_HOST'] ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
define("__HOST2__", "http://" . trim($host, '/')); //域名
$root = trim(str_ireplace($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME'])), '/');
$root = empty($root) ? "" : '/' . $root;
define("__ROOT2__", __HOST2__ . $root); //主页URL根地址地址






$fileData[0]['url'] = __ROOT2__ . '/' . $field; //上传后的大图URL
$json = array();
$json['state'] = $state;
$json['fid'] = md5($field);
if (getimagesize($field)) {//图片裁切处理
    $img = new image2();
    $img->water($field);
    $json['thumb']['file'] = __ROOT2__ . '/' . $field;
    $json['thumb']['w'] = $display_width;
    $json['thumb']['h'] = $display_height;
}
if ($imagesize && getimagesize($field)) {//图片裁切处理
    $n = 1;
    for ($i = 0; $i < count($size); $i+=2) {
        $toFile = $info['filename'] . $n . '.' . $info['extension'];
        $img->thumb($field, $toFile, '', $size[$i], $size[$i + 1], $thumb_type);
        $fileData[$n]['path'] = $info['dirname'] . '/' . $toFile;
        $n++;
    }
}
$json['file'] = $fileData;
echo json_encode($json);
exit;
?>