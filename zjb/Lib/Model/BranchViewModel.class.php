<?php

class BranchViewModel extends ViewModel {

    public $viewFields = array(
        'Citylist' => array('city_id','business_corp','fund_corp'),
        'Admin' => array('username','_on'=>'Citylist.city_id=Admin.city_id'),
        'Area' => array('name'=>'city_name','_on'=>"Area.id=Citylist.city_id")
    );

}
?>
