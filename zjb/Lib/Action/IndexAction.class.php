<?php

class IndexAction extends CommonAction {

    protected $s_type = array(
        array('id' => 1, 'name' => '房产中介'),
        array('id' => 2, 'name' => '汽车服务'),
        array('id' => 3, 'name' => '金融担保'),
    );
    protected $s_sort = array(
        array('id' => 1, 'name' => '最新'),
        array('id' => 2, 'name' => '人气'),
    );

    public function index() {

        //设置搜索区域
        $searchArray = array(
            array('name' => '区域', 'key' => 'zone', 'default' => '不限', 'data' => session('city_zones')),
            array('name' => '类别', 'key' => 'type', 'default' => '不限', 'data' => $this->s_type),
            array('name' => '排序', 'key' => 'rank', 'default' => '默认', 'data' => $this->s_sort),
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
            if (isset($_GET['search'])) {
                $this->addSearchCondition($condition);
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
            $member = $db->where(array('mobile' => $_POST['phone']))->field('id,username,user_type,is_authed,password,company_id')->find();

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
            session('mtype', $member['user_type']);
            session('is_authed', $member['is_authed']);
            if ($member['user_type']) {
                session('m_company_id', $member['company_id']);
            }
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

    //加入搜索需要的复合查询
    private function addSearchCondition(&$condition) {
        $cond['Company.name'] = array('like', '%' . $_GET['search'] . '%');
        $cond['address'] = array('like', '%' . $_GET['search'] . '%');
        $cond['mobile'] = array('like', '%' . $_GET['search'] . '%');
        $cond['_logic'] = 'or';
        $condition['_complex'] = $cond;
    }

}

