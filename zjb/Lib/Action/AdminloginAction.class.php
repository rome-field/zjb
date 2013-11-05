<?php

class AdminloginAction extends Action {

    public function login() {
        
        if ($this->isPost()) {
            if (session('verify') != md5(strtoupper($_POST['yzm']))) {
                $this->error('验证码错误');
            }

            if (!$user = M('admin')->where(array('username' => $_POST['uname']))->find()) {
                $this->error("未发现该管理员用户");
            }

            if (secmd5($_POST['upwd']) == $user['password']) {
                if($user['user_type']){
                    session('full_admin',1);//设置全能管理员
                }else{
                    session('admin_city',$user['city_id']);//设置分站管理员
                    $area = M('area')->where('id='.$user['city_id'])->find();
                    session('admin_city_name',$area['name']);
                }
                session('admin_name',$user['username']);//设置管理员名称
                $this->redirect('Admin/index');
            } else {
                $this->error('密码错误');
            }
        }
        
        $this->display();
    }

}

?>
