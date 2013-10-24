<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class InfoModel extends RelationModel {

    protected $_link = array(
        'House' => array(
            'mapping_type' => HAS_ONE,
            'foreign_key' => 'info_id'
        ),
    );
    protected $_auto = array(
        array('post_time', 'time', 1, 'function'),
        array('edit_time', 'time', 1, 'function'),
    );

}

?>
