<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AjaxAction extends Action {

  public function getRegion() {
    $Region = M("area");
    $map['pid'] = $_REQUEST["pid"];
    $map['level'] = $_REQUEST["type"];
    $list = $Region->field('id,name')->where($map)->select();
    echo json_encode($list);
  }

//上传
  public function swfupload() {
    $display_width = 80;
    $display_height = 60;
    $imagesize = '80,60,240,180'; //图片上传大小
    $size = explode(",", $imagesize);

    import("ORG.Net.UploadFile");
    import("@.ORG.Image");
    $upload = new UploadFile(); // 实例化上传类
    $upload->maxSize = C("UPLOAD_MAX_SIZE");
    ; // 设置附件上传大小
    $upload->allowExts = C("UPLOAD_EXTS"); // 设置附件上传类型
    $upload->savePath = C("UPLOAD_PATH") . 'info_pic/' . date('Ymd') . '/'; // 设置头像上传目录
    if (!$upload->upload()) {// 上传错误提示错误信息
      echo json_encode(array('state' => $upload->getErrorMsg()));
      exit;
    } else {// 上传成功 获取上传文件信息
      $state = "SUCCESS";
    }

    $info2 = $upload->getUploadFileInfo();
    $field = C("UPLOAD_PATH") . 'info_pic/' . date('Ymd') . '/' . $info2[0]['savename'];
    $info = pathinfo($field);
    $fileData = array();
    $fileData[0]['path'] = $field; //上传后的大图 			
    $fileData[0]['url'] = __ROOT__ . '/' . $field; //上传后的大图URL

    $img = new Image();
    /*
      if ($field) {//图片水印
      $img->water($field, C('WATER_IMG'));
      }
     */
    if ($imagesize && $field) {//图片裁切处理
      $n = 1;
      for ($i = 0; $i < count($size); $i+=2) {
        $toFile = $info['dirname'] . '/' . $info['filename'] . $n . '.' . $info['extension'];

        $img->thumb($field, $toFile, '', $size[$i], $size[$i + 1], true);
        $fileData[$n]['path'] = $toFile;
        $n++;
      }
    }
    $json = array();

    $json['thumb']['file'] = __ROOT__ . '/' . $field;
    $json['state'] = $state;
    $json['fid'] = md5($field);
    $json['thumb']['w'] = $display_width;
    $json['thumb']['h'] = $display_height;
    $json['file'] = $fileData;
    echo json_encode($json);
    exit;
  }

  public function swfuploaddel() {
    echo 1;
  }

}

?>
