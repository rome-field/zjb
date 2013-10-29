<?php

class AdminAction extends Action
{
    public function _initialize(){
        if(!session('?admin_name')){
            $this->redirect('Adminlogin/login');
        }
    }

    public function index(){
        $this->display();
    }
}
?>
