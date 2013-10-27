<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class InfoModel extends Model {

    protected $_auto = array(
        array('post_time', 'time', 1, 'function'),
        array('edit_time', 'time', 1, 'function'),
    );

}

?>
