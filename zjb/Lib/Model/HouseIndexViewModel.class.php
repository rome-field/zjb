<?php



class HouseIndexViewModel extends ViewModel {

  public $viewFields = array(
      'House' => array('id','info_id','house_kind','parlors','rooms','floors','floor_of','finish_level','year','price','area','cover','address'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'House.info_id=Info.id'),
      'User' => array('company_id','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','_on'=>'User.company_id=Company.id'),
       'Area'=>array('name'=>'zone_name','_on'=>'User.zone_id=Area.id')
  );

}

?>
