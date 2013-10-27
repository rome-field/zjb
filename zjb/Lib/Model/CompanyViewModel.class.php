<?php

class CompanyViewModel extends ViewModel {

    protected $viewFields = array(
        'company' => array('id', 'name', 'address', 'company_type', 'logo', 'business', 're_time', 'recommends', '_type' => 'LEFT'),
        'User' => array('username', 'mobile', 'create_at', 'city_id', 'zone_id', '_on' => 'User.company_id=company.id'),
    );

}

?>
