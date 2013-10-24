<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class HouseInfoViewModel extends ViewModel {

  public $viewFields = array(
      'House' => array('house_kind', 'porlars', 'rooms'),
      'Info' => array('title', 'poster_id', 'city_id', 'zone_id','_on'=>'House.info_id=Info.id'),
      'User' => array(),
      'Company' => array()
  );

}

?>
