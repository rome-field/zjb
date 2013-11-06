<?php

class CompanyManAction extends Action {

    public function _initialize() {
        if (!session('?m_company_id')) {
            $this->error('无权限！');
        }
        if (!session('?m_company_name')) {
            $com = M('company')->where('id=' . session('m_company_id'))->find();
            session('m_company_name', $com['name']);
        }
    }

    public function index() {
        $db = M('article');
        $condition['company_id']=  session('m_company_id');
        $order = 'post_time desc';
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function setting() {
        $db = D('CompanyIndex');
        if (($company = $db->where('company_id=' . session('m_company_id'))->find())) {
            $this->assign('company', $company);
        }
        if ($this->isPost()) {
            if (!$db->create()) {
                $this->error($db->getError());
            }
            if (!empty($_POST['upload_pic'])) {
                foreach ($_POST['upload_pic'] as $v) {
                    $ads .= $v[0] . '|';
                }
                $db->ads = rtrim($ads, '|');
            }
            if (($pic = upload_pic())) {
                $db->big_logo = $pic[0]['savepath'] . $pic[0]['savename'];
            }
            if (isset($_POST['edit'])) {//修改
                if (!$db->where('company_id=' . session('m_company_id'))->save()) {
                    $this->error('修改失败！');
                }
            } else {//新增
                $db->company_id = session('m_company_id');
                if (!$db->add()) {
                    $this->error('添加失败！');
                }
            }

            $this->success('操作成功！');
        }
        $this->display();
    }

    public function add_article() {
        if (isset($_GET['edit'])) {
            $ar = M('article')->where('id=' . $_GET['edit'])->find();
            $this->assign('article', $ar);
        }
        if ($this->isPost()) {
            $db = M('article');
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->post_time = time();
            
            if (isset($_POST['edit'])) {//编辑文章
                if (!$db->where('id=' . $_POST('edit'))->save()) {
                    $this->error('修改失败！');
                }
            } else {//新增文章
                $db->company_id = session('m_company_id');
                if (!$db->add()) {
                    $this->error('添加失败！');
                }
            }
            $this->success('操作成功！','index');
        }
        $this->display();
    }

    public function message() {
        $this->display();
    }

}

?>
