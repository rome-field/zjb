<?php

class IndexAction extends CommonAction {

    public function index() {

        //设置搜索区域
        $searchArray = array(
            array('name' => '区域', 'key' => 'zone', 'default' => '不限', 'data' => session('city_zones')),
            array('name' => '类别', 'key' => 'type', 'default' => '不限', 'data' => C('COMPANY_TYPE')),
            array('name' => '排序', 'key' => 'rank', 'default' => '默认', 'data' => C('COMPANY_SORT')),
        );
        $this->assign('searchArray', $searchArray);

        //设置搜索城市id
        $condition['city_id'] = session('city_id');

        if ($this->isGet()) {
            if (isset($_GET['zone'])) {
                $condition['zone_id'] = $_GET['zone'];
            }
            if (isset($_GET['type'])) {
                $condition['company_type'] = intval($_GET['type']);
            }
            if (isset($_GET['rank'])) {
                if ($_GET['rank'] == '1') {
                    $order = 'create_at desc';
                } elseif ($_GET['rank'] == '2') {
                    $order = 'recommends desc';
                }
            }
        }

        //默认排序
        if (!isset($order)) {
            $order = 're_time desc';
        }
        $db = D('CompanyView');
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function login() {
        if (session('?mid')) {
            $this->redirect('Index/index');
        }
        if ($this->isPost()) {
//验证码校验
            if (session('verify') != md5(strtoupper($_POST['yzm'])))
                $this->error('验证码错误！');

//搜索数据库
            $db = M('user');
            $member = $db->where(array('mobile' => $_POST['phone']))->field('id,username,user_type,is_authed,password')->find();

//验证密码
            if (!$member || $member['password'] != $this->_post('upwd', 'secmd5')) {
                $this->error('帐号或密码错误！');
            }

//自动登录
            if (isset($_POST['remember'])) {
                $value = $member['id'] . '|' . get_client_ip() . '|' . $member['username'] . '|' . $member['type'] . '|' . $member['is_authed'];
                $value = encrytion($value, 1);
                cookie('auto', $value, C('AUTO_LOGIN_LIFETIME'));
            }

//设置session
            session('mid', $member['id']);
            session('mname', $member['username']);
            session('mtype', $member['type']);
            session('is_authed', $member['is_authed']);
            $this->redirect('Index/index');
        }
        $this->display();
    }

    public function logout() {
        if (isset($_COOKIE['auto'])) {
            setcookie('auto', '', time() - 1);
        }
        session_unset();
        session_destroy();
        $this->redirect('Index/login');
    }

    public function recommend() {

        if (isset($_GET['zan'])) {
            if (cookie('recommended')) {
                $this->error('此IP今日已经推荐过，不可再推荐。');
            } else {
                $data['recommends'] = array('exp', 'recommends+1');
                $data['re_time'] = time();
                M('company')->where('id=' . $_GET['zan'])->save($data);
                cookie('recommended', 1, 3600 * 24);
            }
        }
        $this->redirect('Index/index');
    }

}

