<?php

class AdminAction extends Action {

    protected $condition;

    public function _initialize() {
        if (!session('?admin_name')) {
            $this->redirect('Adminlogin/login');
        }
    }

    public function index() {
        $db = M('user');
        //总会员数
        $total_mem = $db->count();
        $this->assign('total_mem', $total_mem);
        //总普通会员数
        $common_mem = $db->where('user_type=0')->count();
        $this->assign('common_mem', $common_mem);
        //总商家会员数（包括未审核及未通过审核的）
        $company_mem = $db->where('user_type=1')->count();
        $this->assign('company_mem', $company_mem);
        //总认证商家数
        $unauth_c_mem = $db->where('user_type=1 AND is_authed=1')->count();
        $this->assign('unauth_c_mem', $unauth_c_mem);

        $info = M('info');
        //卖房信息
        $sellhouse_info = $info->where('info_catagory=1')->count();
        $this->assign('sellhouse_info', $sellhouse_info);
        //租房信息
        $renthouse_info = $info->where('info_catagory=2')->count();
        $this->assign('renthouse_info', $renthouse_info);
        //卖车信息
        $sellcar_info = $info->where('info_catagory=3')->count();
        $this->assign('sellcar_info', $sellcar_info);
        //租车信息
        $rentcar_info = $info->where('info_catagory=4')->count();
        $this->assign('rentcar_info', $rentcar_info);
        //贷款信息
        $loan_info = $info->where('info_catagory=5')->count();
        $this->assign('loan_info', $loan_info);
        //理财信息
        $invest_info = $info->where('info_catagory=6')->count();
        $this->assign('invest_info', $invest_info);

        $this->display();
    }

    public function company_auth() {
        if ($this->isGet()) {
            $data['is_checked'] = 2;
            if (isset($_GET['approval'])) { //批准
                $data['User'] = array('is_authed' => 1);
                D('Company')->relation(true)->where('id=' . $_GET['approval'])->save($data);
            } elseif (isset($_GET['reject'])) {//不批准
                $data['User'] = array('is_authed' => 0);
                D('Company')->relation(true)->where('id=' . $_GET['reject'])->save($data);
            }
        }

        if ($this->isPost()) {
            if(isset($_POST['type_d'])){
                $this->condition['company_type'] = $_POST['type_d'];
            }
            if(!empty($_POST['shi'])){
                $this->condition['city_id'] = $_POST['shi'];
            }
            if($_POST['auth_d'] == '1'){
                $this->condition['is_checked'] = 1;
            }elseif($_POST['auth_d']=='2'){
                $this->condition['is_authed']=1;
            }elseif ($_POST['auth_d']=='3') {
                $this->condition['is_checked'] =1;
                $this->condition['is_authed'] = 0;
            }
        } 
        if(empty($this->condition)){
            $this->condition['is_checked'] = 1;
        }
        $order = 'create_at desc';//默认按时间排序
        $db = D('CompanyView');
        $counts = $db->where($this->condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($this->condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $province = M('area')->where('level=1')->select();
        $this->assign('province', $province);
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
