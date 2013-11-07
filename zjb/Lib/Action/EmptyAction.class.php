<?php

class EmptyAction extends Action {

    public function _initialize() {
        if (M('Company')->where('id=' . MODULE_NAME)->find()) {
            if (($com = M('CompanyIndex')->where('company_id=' . MODULE_NAME)->find())) {
                $this->assign('com_info', $com);
                if (ACTION_NAME == 'index' || ACTION_NAME == '') {
                    $this->assign('ads', explode('|', $com['ads']));
                }
            } else {
                $this->error("该公司未开通商家主页！", U('Company/view?id=' . MODULE_NAME));
            }
        } else {
            $this->error('访问地址非法！');
        }
    }

    public function index() {
        $order = 'edit_time desc';
        if (($buyHouseInfo = D('HouseIndexView')->where(array('info_catagory' => 1, 'company_id' => MODULE_NAME))->order($order)->limit(C('INFO_NUM_COM'))->select())) {
            $this->assign('buyHouseInfo', $buyHouseInfo);
        }
        if (($rentHouseInfo = D('HouseIndexView')->where(array('info_catagory' => 2, 'company_id' => MODULE_NAME))->order($order)->limit(C('INFO_NUM_COM'))->select())) {
            $this->assign('rentHouseInfo', $rentHouseInfo);
        }
        if (($buyCarInfo = D('BuyCarView')->where(array('company_id' => MODULE_NAME))->order($order)->limit(C('INFO_NUM_COM'))->select())) {
            $this->assign('buyCarInfo', $buyCarInfo);
        }
        if (($rentCarInfo = D('RentCarView')->where(array('company_id' => MODULE_NAME))->order($order)->limit(C('INFO_NUM_COM'))->select())) {
            $this->assign('rentCarInfo', $rentCarInfo);
        }
        if (($loanInfo = D('LoanView')->where(array('company_id' => MODULE_NAME))->order($order)->limit(C('INFO_NUM_COM'))->select())) {
            $this->assign('loanInfo', $loanInfo);
        }
        if (($investInfo = D('InvestView')->where(array('company_id' => MODULE_NAME))->order($order)->limit(C('INFO_NUM_COM'))->select())) {
            $this->assign('investInfo', $investInfo);
        }
        if (($company_info = D('CompanyView')->where('Company.id=' . MODULE_NAME)->find())) {
            $this->assign('company_info', $company_info);
        }
        $this->display("Company:index");
    }

    public function article() {
        $condition['company_id'] = MODULE_NAME;
        $order = 'post_time desc';
        $db = M('article');
        if (isset($_GET['type'])) {
            $condition['column'] = intval($_GET['type']);
        }
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);

        if (($company_info = D('CompanyView')->where('Company.id=' . MODULE_NAME)->find())) {
            $this->assign('company_info', $company_info);
        }
        $this->display('Company:article');
    }

    public function article_view() {
        if (!isset($_GET['id'])) {
            $this->error('无访问权限');
        } else {
            if (($article = M('article')->where('id=' . $_GET['id'])->find())) {
                $this->assign('vo', $article);
            } else {
                $this->error('没有找到文章');
            }
        }
        $this->display('Company:article_view');
    }

    public function message() {
        $db = M('message');
        if ($this->isPost()) {
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->post_time = time();
            $db->poster = get_client_ip();
            $db->company_id = MODULE_NAME;

            if (!$db->add()) {
                $this->error('创建留言失败！');
            }
        }

        $condition['company_id'] = MODULE_NAME;
        $order = "post_time desc";
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);

        if (($company_info = D('CompanyView')->where('Company.id=' . MODULE_NAME)->find())) {
            $this->assign('company_info', $company_info);
        }
        $this->display("Company:message");
    }

    public function introduction() {
        $company = D('CompanyView')->where('Company.id=' . MODULE_NAME)->find();
        $this->assign('company', $company);
        $this->display('Company:introduction');
    }

    public function info() {
        if (isset($_GET['view'])) {
            $condition['company_id'] = MODULE_NAME;
            switch ($_GET['view']) {
                case 'buyHouse':
                    $db = D('HouseIndexView');
                    $condition['info_catagory'] = 1;
                    break;
                case 'rentHouse':
                    $db = D('HouseIndexView');
                    $condition['info_catagory'] = 2;
                    break;
                case 'buyCar':
                    $db = D('BuyCarView');
                    break;
                case 'rentCar':
                    $db = D('RentCarView');
                    break;
                case 'loan':
                    $db = D('LoanView');
                    break;
                case 'invest':
                    $db = D('InvestView');
                    break;
                default :
                    $this->error('没有此信息分类！');
            }
            $order = 'post_time desc';
            $counts = $db->where($condition)->count();
            import('ORG.Util.Page');
            $Page = new Page($counts, C('NUM_PER_PAGE'));
            $show = $Page->show();
            $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('list', $list);
            $this->assign('page', $show);
            $this->display('Company:info');
        }
    }

}

?>
