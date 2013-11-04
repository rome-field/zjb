<?php

class CompanyViewModel extends ViewModel {

    protected $viewFields = array(
        'Company' => array('id', 'name', 'address', 'company_type', 'logo', 'business', 're_time', 'recommends','is_checked', '_type' => 'LEFT'),
        'User' => array('username', 'mobile', 'create_at','is_authed', 'city_id', 'zone_id', '_on' => 'User.company_id=company.id'),
        'Area'=>array('name'=>'city_name','_on'=>'User.city_id=Area.id')
    );

}

?>
