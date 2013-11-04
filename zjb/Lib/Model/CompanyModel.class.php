<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CompanyModel extends RelationModel {

    protected $_link = array(
        "User" => array(
            'mapping_type' => HAS_ONE,
            'class_name' => 'User',
            'foreign_key' => 'company_id',
            'mapping_fields' => 'is_authed',
        )
    );

}

?>
