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

        $this->display("Company:index");
    }
    public function article(){
        $this->display('Company:article');
    }
    public function message(){
        $this->display("Company:message");
    }
    public function introduction(){
        $this->display('Company:introduction');
    }
}

?>
