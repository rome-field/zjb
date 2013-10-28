<?php

class MemberAction extends Action {

    public function _initialize() {
        if (!session('?mid')) {
            $this->error('请先登录！', U('Index/login'));
        }
    }

    public function index() {

        $this->display();
    }

    public function mem_info() {
        $db = D('User');

        if ($this->isPost()) {
            if ($_POST['username']) {
                $data['username'] = $_POST['username'];
            }
            if ($_POST['email']) {
                $data['email'] = $_POST['email'];
            }
            if ($_POST['mobile']) {
                if ($db->where('mobile=' . $_POST['mobile'])->find()) {
                    $this->error('手机号码有重复或未修改');
                } else {
                    $data['mobile'] = $_POST['mobile'];
                }
            }
            if (isset($data)) {
                $db->where('id=' . session('mid'))->save($data);
                if ($_POST['username']) {
                    session('mname', $_POST['username']);
                }
            }
        }
        $user = $db->where('id=' . session('mid'))->field('mobile,username,email')->find();
        $this->assign('user', $user);
        $this->display();
    }

    public function password() {
        if ($this->isPost()) {
            $db=M('user');
            $user = $db->where('id='.session('mid'))->field('password')->find();
            if(secmd5($_POST['password']==$user['password'])){
                $user['password']=  secmd5($_POST['new_password']);
                $db->where('id='.session('mid'))->save($user);
                $this->success('密码修改成功');
            }else{
                $this->error('密码错误');
            }
                
        }
        $this->display();
    }

}

?>