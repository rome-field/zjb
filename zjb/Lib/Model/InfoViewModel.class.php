<?php

class InfoViewModel extends ViewModel {

    public $viewFields = array(
        'Info' => array('id','info_catagory','edit_time','is_verified','city_id','title','is_checked'),
        'User' => array('username','mobile','user_type','_on'=>'User.id=Info.poster_id','_type'=>'LEFT'),
        'Company'=> array('name'=>'company_name','_on'=>'User.company_id=Company.id'),
        'Area' => array('name'=>'city_name','_on'=>'Info.city_id=Area.id'),
    );

}

?>
