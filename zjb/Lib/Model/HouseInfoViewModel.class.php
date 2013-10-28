<?php



class HouseInfoViewModel extends ViewModel {

  public $viewFields = array(
      'House' => array('id','info_id','house_kind','parlors','rooms','bathrooms','equipment','describe_text','describe_pic','thumb_max','floors','floor_of','finish_level','year','price','area','cover','address', 'bus_info','contact','contact_phone'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'House.info_id=Info.id'),
      'User' => array('id'=>'user_id','company_id','username','mobile','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','logo','address'=>'company_addr','_on'=>'User.company_id=Company.id')
  );

}

?>
