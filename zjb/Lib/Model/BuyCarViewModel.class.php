<?php



class BuyCarViewModel extends ViewModel {

  public $viewFields = array(
      'Sellcar' => array('id','type','brand','miles','jiaoqiangxian_date','year','price','address','cover'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'Sellcar.info_id=Info.id'),
      'User' => array('company_id','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','_on'=>'User.company_id=Company.id')
  );

}

?>
