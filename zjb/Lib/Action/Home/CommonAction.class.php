<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Class CommonAction extends Action
{
    Public function _initialize()
    {
        
    }
    public function verify(){
		import('ORG.Util.Image');	
		Image::buildImageVerify();
	}
    
}
?>
