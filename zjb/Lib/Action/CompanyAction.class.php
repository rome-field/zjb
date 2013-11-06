<?php

// 本类由系统自动生成，仅供测试用途

class CompanyAction extends Action {

    public function view() {
        if ($_GET['id']) {
            $corp = D('CompanyView')->where('Company.id=' . $_GET['id'])->find();
            if (!$corp) {
                $this->error('未找到商家！');
            }
            $this->assign('vo', $corp);
            $this->display();
        } else {

            $this->error('没有可显示的商家！');
        }
    }

}

;

