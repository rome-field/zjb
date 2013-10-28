<?php



class RentCarViewModel extends ViewModel {

  public $viewFields = array(
      'Rentcar' => array('id','info_id','type','deposit','miles','include_insure','price','address','cover','seats'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'Rentcar.info_id=Info.id'),
      'User' => array('company_id','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','_on'=>'User.company_id=Company.id')
  );

}

?>
