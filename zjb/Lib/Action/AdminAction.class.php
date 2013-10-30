<?php

class AdminAction extends Action {

    public function _initialize() {
        if (!session('?admin_name')) {
            $this->redirect('Adminlogin/login');
        }
    }

    public function index() {
        $db = M('user');
        //总会员数
        $total_mem = $db->count();
        $this->assign('total_mem',$total_mem);
        //总普通会员数
        $common_mem = $db->where('user_type=0')->count();
        $this->assign('common_mem',$common_mem);
        //总商家会员数（包括未审核及未通过审核的）
        $company_mem= $db->where('user_type=1')->count();
        $this->assign('company_mem',$company_mem);
        //总认证商家数
        $unauth_c_mem = $db->where('user_type=1 AND is_authed=1')->count();
        $this->assign('unauth_c_mem',$unauth_c_mem);
        
        $info = M('info');
        //卖房信息
        $sellhouse_info = $info->where('info_catagory=1')->count();
        $this->assign('sellhouse_info',$sellhouse_info);
        //租房信息
        $renthouse_info = $info->where('info_catagory=2')->count();
        $this->assign('renthouse_info',$renthouse_info);
        //卖车信息
        $sellcar_info = $info->where('info_catagory=3')->count();
        $this->assign('sellcar_info',$sellcar_info);
        //租车信息
        $rentcar_info = $info->where('info_catagory=4')->count();
        $this->assign('rentcar_info',$rentcar_info);
        //贷款信息
        $loan_info = $info->where('info_catagory=5')->count();
        $this->assign('loan_info',$loan_info);
        //理财信息
        $invest_info = $info->where('info_catagory=6')->count();
        $this->assign('invest_info',$invest_info);
        
        $this->display();
    }

    public function company_auth() {
        $province = M('area')->where('level=1')->select();
        $this->assign('province',$province);
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
