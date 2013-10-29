<?php



class LoanViewModel extends ViewModel {

  public $viewFields = array(
      'Loan' => array('id','info_id','type','loan_way','interest_rate','charge','deadline','price','address','cover'),
      'Info' => array('title', 'poster_id','post_time' ,'edit_time','info_catagory','is_verified','city_id', 'zone_id','_on'=>'Loan.info_id=Info.id'),
      'User' => array('company_id','user_type','_type'=>'LEFT','_on'=>'Info.poster_id=User.id'),
      'Company' => array('name'=>'company_name','_on'=>'User.company_id=Company.id'),
       'Area'=>array('name'=>'zone_name','_on'=>'User.zone_id=Area.id')
  );

}

?>
