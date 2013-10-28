<?php



class InvestViewModel extends ViewModel {

  public $viewFields = array(
      'Invest' => array('id','info_id','type','pawn','interest_rate','refund_way','deadline','price','address','cover'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'Invest.info_id=Info.id'),
      'User' => array('company_id','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','_on'=>'User.company_id=Company.id')
  );

}

?>
