<?php



class BuyCarInfoViewModel extends ViewModel {

  public $viewFields = array(
      'Sellcar' => array('id','info_id','type','brand','series','miles','jiaoqiangxian_date','year','price','address','cover','commercial_date','yearcheck_date','useful','maintain','accident','speedgear','new_level','color','output','describe_text','describe_pic','thumb_max','contact','contact_phone'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'Sellcar.info_id=Info.id'),
      'User' => array('id'=>'user_id','company_id','username','mobile','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','logo','address'=>'company_addr','_on'=>'User.company_id=Company.id')
  );

}

?>
