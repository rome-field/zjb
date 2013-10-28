<?php



class RentCarInfoViewModel extends ViewModel {

  public $viewFields = array(
      'Rentcar' => array('id','info_id','type','deposit','miles','include_insure','price','address','cover','series','brand','year','seats','maintain','speedgear','new_level','output','describe_text','describe_pic','thumb_max','contact','contact_phone'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'Rentcar.info_id=Info.id'),
      'User' => array('id'=>'user_id','company_id','username','mobile','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','logo','address'=>'company_addr','_on'=>'User.company_id=Company.id')
  );

}

?>
