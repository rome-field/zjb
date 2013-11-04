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

    public function company_ops() {

        if ($_REQUEST['option'] == 'approval') { //批准
            $data['User'] = array('is_authed' => 1);
        } elseif ($_REQUEST['option'] == 'reject') {//不批准
            $data['User'] = array('is_authed' => 0);
        } else {
            return 0;
        }
        $data['is_checked'] = 2;
        $data['id'] = intval($_REQUEST['cid']);
        D('Company')->relation(true)->where('id=' . $_REQUEST['cid'])->save($data);
        return 1;
    }

    public function company_auth() {
        if ($this->isGet()) {

            if (isset($_GET['type']) && $_GET['type'] != '不限') {
                $this->condition['company_type'] = intval($_GET['type']);
            }
            if (!empty($_GET['shi']) && $_GET['shi'] != '0') {
                $this->condition['city_id'] = $_GET['shi'];
                $v = M('area')->where('id=' . $_GET['shi'])->find();
                if ($v) {
                    $this->assign('cur_city', $v);
                }
            }
            if (isset($_GET['auth'])) {
                if ($_GET['auth'] == '1') {
                    $this->condition['is_checked'] = 1;
                } elseif ($_GET['auth'] == '2') {
                    $this->condition['is_authed'] = 1;
                } elseif ($_GET['auth'] == '3') {
                    $this->condition['is_checked'] = 2;
                    $this->condition['is_authed'] = 0;
                }
            }
        }
        if (empty($this->condition)) {
            $this->condition['is_checked'] = 1;
        }
        $order = 'create_at desc'; //默认按时间排序
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
        if ($this->isGet()) {
            if (isset($_GET['type']) && $_GET['type'] != '不限') {
                $this->condition['company_type'] = intval($_GET['type']);
            }
            if (!empty($_GET['shi']) && $_GET['shi'] != '0') {
                $this->condition['city_id'] = $_GET['shi'];
                $v = M('area')->where('id=' . $_GET['shi'])->find();
                if ($v) {
                    $this->assign('cur_city', $v);
                }
            }
            if (isset($_GET['auth'])) {
                if ($_GET['auth'] == '1') {
                    $this->condition['is_checked'] = 1;
                } elseif ($_GET['auth'] == '2') {
                    $this->condition['is_authed'] = 1;
                } elseif ($_GET['auth'] == '3') {
                    $this->condition['is_checked'] = 2;
                    $this->condition['is_authed'] = 0;
                }
            }
        }
        if (empty($this->condition)) {
            $this->condition['is_checked'] = 1;
        }
        $order = 'create_at desc'; //默认按时间排序
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

    public function branch() {
        $this->display();
    }

    public function logout() {
        
    }

}

?>
