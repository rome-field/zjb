<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class InfoModel extends RelationModel{
  protected $_link = array(
    'House'=> array(
        'mapping_type'=>HAS_ONE,
        'foreign_key'=>'info_id'
    )  ,
      'Car'=> array(
          'mapping_type'=>HAS_ONE,
          'foreign_key'=>'info_id'
      )
  );
  
  public function volidate_house(){
    
  }
  
}
?>
