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
        if (!session('?full_admin')) {//非全能管理员，则限制其所辖城市
            $condition['city_id'] = session('admin_city');
        }
        if ($this->isGet()) {

            if (isset($_GET['type']) && $_GET['type'] != '不限') {
                $condition['company_type'] = intval($_GET['type']);
            }
            if (!empty($_GET['shi']) && $_GET['shi'] != '0') {
                $condition['city_id'] = $_GET['shi'];
                $v = M('area')->where('id=' . $_GET['shi'])->find();
                if ($v) {
                    $this->assign('cur_city', $v);
                }
            }
            if (isset($_GET['auth'])) {
                if ($_GET['auth'] == '1') {
                    $condition['is_checked'] = 1;
                } elseif ($_GET['auth'] == '2') {
                    $condition['is_authed'] = 1;
                } elseif ($_GET['auth'] == '3') {
                    $condition['is_checked'] = 2;
                    $condition['is_authed'] = 0;
                }
            }
        }
        if (empty($condition)) {
            $condition['is_checked'] = 1;
        }
        $order = 'create_at desc'; //默认按时间排序
        $db = D('CompanyView');
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $province = M('area')->where('level=1')->select();
        $this->assign('province', $province);
        $this->display();
    }

    public function info_auth() {
        if (!session('?full_admin')) {//非全能管理员，则限制其所辖城市
            $condition['city_id'] = session('admin_city');
        }
        if ($this->isGet()) {
            if (isset($_GET['type']) && $_GET['type'] != '不限') {
                $condition['info_catagory'] = intval($_GET['type']);
            }
            if (!empty($_GET['shi']) && $_GET['shi'] != '0') {
                $condition['city_id'] = $_GET['shi'];
                $v = M('area')->where('id=' . $_GET['shi'])->find();
                if ($v) {
                    $this->assign('cur_city', $v);
                }
            }
            if (isset($_GET['auth'])) {
                if ($_GET['auth'] == '1') {//未审核
                    $condition['is_checked'] = 1;
                } elseif ($_GET['auth'] == '2') {//审核已经通过
                    $condition['is_verified'] = 2;
                } elseif ($_GET['auth'] == '3') {//审核未通过
                    $condition['is_checked'] = 2;
                    $condition['is_verified'] = 1;
                }
            }
        }
        if (empty($condition)) {
            $condition['is_checked'] = 1;
        }
        $order = 'edit_time desc'; //默认按时间排序
        $db = D('InfoView');
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $province = M('area')->where('level=1')->select();
        $this->assign('province', $province);
        $this->display();
    }

    public function info_ops() {

        if ($_REQUEST['option'] == 'approval') { //批准
            $data['is_verified'] = 2;
        } elseif ($_REQUEST['option'] == 'reject') {//不批准
            $data['is_verified'] = 1;
        } else {
            return 0;
        }
        $data['is_checked'] = 2;
        M('info')->where('id=' . $_REQUEST['info_id'])->save($data);
        return 1;
    }

    public function branch() {
        if (!session('?full_admin')) {
            $this->error('当前用户无权限查看分站信息！');
        }
        $db = D('BranchView');
        $counts = $db->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function edit_branch() {
        if (!session('?full_admin')) {
            $this->error('当前用户无权限创建分站信息！');
        }

        if ($this->isPost()) {
            $admin = M('admin');
            $city = M('citylist');
            if (isset($_POST['edit_ops'])) {//编辑操作
                if (!empty($_POST['business_corp']) || !empty($_POST['fund_corp']) || !empty($_POST['upload_pic'])) {
                    if (!$city->create()) {
                        $this->error($city->getError());
                    }
                    if (!empty($_POST['upload_pic'])) {//保存轮播广告图片
                        foreach ($_POST['upload_pic'] as $v) {
                            $city->ads .= $v[0] . '|';
                        }
                        $city->ads = rtrim($city->ads, '|');
                    }
                    if (!$city->where('city_id=' . $_POST['city_id'])->save()) {
                        $this->error($city->getError());
                    }
                }
                if (!empty($_POST['username']) || !empty($_POST['password'])) {
                    if (!$admin->create()) {
                        $this->error($admin->getError());
                    }
                    if (!empty($_POST['password'])) {
                        $admin->password = secmd5($admin->password);
                    }
                    if (!$admin->where('city_id=' . $_POST['city_id'])->save()) {
                        $this->error($admin->getError());
                    }
                }
            } else {//新增操作
                if (!$admin->create()) {
                    $this->error($admin->getError());
                }
                $admin->password = secmd5($admin->password);
                if (!$admin->add()) {
                    $this->error($admin->getError());
                }
                if (!$city->create()) {
                    $this->error($city->getError());
                }
                if (isset($_POST['upload_pic'])) {
                    foreach ($_POST['upload_pic'] as $v) {
                        $city->ads .= $v[0] . '|';
                    }
                    $city->ads = rtrim($city->ads, '|');
                }
                if (!$city->add()) {
                    $this->error($city->getError());
                }
            }
            $this->success('操作成功！', 'branch');
            exit;
        }
        if ($this->isGet()) {//修改分站信息
            $this->assign('edit', $_GET['cid']);
            $this->assign('cname', $_GET['cname']);
        } else {
            $province = M('area')->where('level=1')->select();
            $this->assign('province', $province);
        }

        $this->display();
    }

    public function logout() {
        session_unset();
        session_destroy();
        $this->redirect('Adminlogin/login');
    }

}

?>
