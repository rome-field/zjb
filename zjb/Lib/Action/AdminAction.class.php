<?php

class AdminAction extends Action {

    public function _initialize() {
        if (!session('?admin_name')) {
            $this->redirect('Adminlogin/login');
        }
    }

    public function index() {
        $db = M('user');
        $total_mem = $db->count();
        $this->assign('total_mem',$total_mem);
        $common_mem = $db->where('user_type=0')->count();
        $this->assign('common_mem',$common_mem);
        $company_mem= $db->where('user_type=1')->count();
        $this->assign('company_mem',$company_mem);
        $this->display();
    }

    public function company_auth() {
        $this->display();
    }

    public function info_auth() {
        $this->display();
    }

    public function branch() {
        $this->display();
    }

    public function logout() {
        
    }

}

?>
