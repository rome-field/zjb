<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class AjaxAction extends Action
{
  	public function getRegion(){
		$Region=M("area");
		$map['pid']=$_REQUEST["pid"];
		$map['level']=$_REQUEST["type"];
		$list=$Region->where($map)->select();
		echo json_encode($list);
	}
	
}
?>
