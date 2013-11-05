<?php

define('SELL_HOUSE', 1);
define('RENT_HOUSE', 2);
define('SELL_CAR', 3);
define('RENT_CAR', 4);
define('LOAN', 5);
define('INVEST', 6);

class PublishAction extends Action {

    public function _initialize() {
        if (!session('?mid'))
            $this->redirect('Index/login');
    }

    public function index() {
        $this->display();
    }

    public function sellHouse() {
        if ($this->isPost()) {
            $info_id = $this->create_info(SELL_HOUSE);

            $db = M('house');
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->info_id = $info_id;
            $area = M('area')->where("id=" . $_POST['zone_id'])->field('name')->find();
            $db->address = $area['name'] . $_POST['addr'];
            if (isset($_POST['upload_pic'])) {
                $db->cover = $_POST['upload_pic'][1][2]; //默认以中等缩略图为封面
                foreach ($_POST['upload_pic'] as $v) {
                    $db->describe_pic .= $v[0] . '|';
                    $db->thumb_max .= $v[2] . '|';
                }
                $db->describe_pic = rtrim($db->describe_pic, '|');
                $db->thumb_max = trim($db->thumb_max, '|');
            }
            if (!$db->add()) {
                $this->error('发布失败！');
            }
            $this->success("发布成功，等待审核...", 'index');
        }
        $this->display();
    }

    public function invest() {
        if ($this->isPost()) {
            $info_id = $this->create_info(INVEST);

            $db = M('invest');
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->info_id = $info_id;
            $area = M('area')->where("id=" . $_POST['zone_id'])->field('name')->find();
            $db->address = $area['name'] . $_POST['addr'];

            if (isset($_POST['upload_pic'])) {
                $db->cover = $_POST['upload_pic'][1][2]; //默认以中等缩略图为封面
                foreach ($_POST['upload_pic'] as $v) {
                    $db->describe_pic .= $v[0] . '|';
                    $db->thumb_max .= $v[2] . '|';
                }
                $db->describe_pic = rtrim($db->describe_pic, '|');
                $db->thumb_max = trim($db->thumb_max, '|');
            }
            if (!$db->add()) {
                $this->error('发布失败！');
            }
            $this->success("发布成功，等待审核...", 'index');
        }
        $this->display();
    }

    public function loan() {
        if ($this->isPost()) {
            $info_id = $this->create_info(LOAN);

            $db = M('loan');
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->info_id = $info_id;
            $area = M('area')->where("id=" . $_POST['zone_id'])->field('name')->find();
            $db->address = $area['name'] . $_POST['addr'];

            if (isset($_POST['upload_pic'])) {
                $db->cover = $_POST['upload_pic'][1][2]; //默认以中等缩略图为封面
                foreach ($_POST['upload_pic'] as $v) {
                    $db->describe_pic .= $v[0] . '|';
                    $db->thumb_max .= $v[2] . '|';
                }
                $db->describe_pic = rtrim($db->describe_pic, '|');
                $db->thumb_max = trim($db->thumb_max, '|');
            }
            if (!$db->add()) {
                $this->error('发布失败！');
            }
            $this->success("发布成功，等待审核...", 'index');
        }
        $this->display();
    }

    public function rentHouse() {
        if ($this->isPost()) {
            $info_id = $this->create_info(RENT_HOUSE);

            $db = M('house');
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->info_id = $info_id;
            $area = M('area')->where("id=" . $_POST['zone_id'])->field('name')->find();
            $db->address = $area['name'] . $_POST['addr'];
            if (isset($_POST['peizhi'])) {
                $db->equipment = getSetValue($_POST['peizhi']);
            }
            if (isset($_POST['upload_pic'])) {
                $db->cover = $_POST['upload_pic'][1][2]; //默认以中等缩略图为封面
                foreach ($_POST['upload_pic'] as $v) {
                    $db->describe_pic .= $v[0] . '|';
                    $db->thumb_max .= $v[2] . '|';
                }
                $db->describe_pic = rtrim($db->describe_pic, '|');
                $db->thumb_max = trim($db->thumb_max, '|');
            }
            if (!$db->add()) {
                $this->error('发布失败！');
            }
            $this->success("发布成功，等待审核...", 'index');
        }
        $this->display();
    }

    public function sellCar() {
        if ($this->isPost()) {
            $info_id = $this->create_info(SELL_CAR);
            $db = M('sellcar');
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->info_id = $info_id;
            $area = M('area')->where("id=" . $_POST['zone_id'])->field('name')->find();
            $db->address = $area['name'] . $_POST['addr'];

            if (isset($_POST['upload_pic'])) {
                $db->cover = $_POST['upload_pic'][1][2]; //默认以中等缩略图为封面
                foreach ($_POST['upload_pic'] as $v) {
                    $db->describe_pic .= $v[0] . '|';
                    $db->thumb_max .= $v[2] . '|';
                }
                $db->describe_pic = rtrim($db->describe_pic, '|');
                $db->thumb_max = trim($db->thumb_max, '|');
            }
            if (!$db->add()) {
                $this->error('发布失败！');
            }
            $this->success("发布成功，等待审核...", 'index');
        }
        $this->prepare_car_data();
        $this->display();
    }

    public function rentCar() {

        if ($this->isPost()) {
            $info_id = $this->create_info(RENT_CAR);
            $db = M('rentcar');
            if (!$db->create()) {
                $this->error($db->getError());
            }
            $db->info_id = $info_id;
            $area = M('area')->where("id=" . $_POST['zone_id'])->field('name')->find();
            $db->address = $area['name'] . $_POST['addr'];

            if (isset($_POST['upload_pic'])) {
                $db->cover = $_POST['upload_pic'][1][2]; //默认以中等缩略图为封面
                foreach ($_POST['upload_pic'] as $v) {
                    $db->describe_pic .= $v[0] . '|';
                    $db->thumb_max .= $v[2] . '|';
                }
                $db->describe_pic = rtrim($db->describe_pic, '|');
                $db->thumbe_max = trim($db->thumb_max, '|');
            }
            if (!$db->add()) {
                $this->error('发布失败！');
            }
            $this->success("发布成功，等待审核...", 'index');
        }
        $this->prepare_car_data();
        $this->assign('car_seats', array('5座', '7座', '9座', '11座', '12座', '14座', '15座', '16座', '17座', '22座', '24座', '29座', '33座', '39座', '40座'));
        $this->display();
    }

    //创建info表的内容，提供给本类中的发布函数使用

    private function create_info($type) {
        $info = D('Info');
        if (!$info->create()) {
            $this->error($info->getError());
        }
        $info->poster_id = session('mid');
        $info->info_catagory = $type; //123456分别与导航栏对应
        $info->is_verified = intval(session('is_authed')) + 1;
        $this->is_checked = session('is_authed')?2:1;
        $info->city_id = session('city_id');

        if (!$id = $info->add()) {
            $this->error($info->getError());
        }

        return $id;
    }

    private function prepare_car_data() {

        $this->assign('car_type', array('轿车', '越野SUV', 'MPV', '跑车', '客车', '货车', '面包车', '皮卡', '工程车'));
        $this->assign('car_brand', array('大众', '本田', '别克', '丰田', '夏利', '日产', '奇瑞', '宝马', '现代', '奥迪', '马自达', '比亚迪', '铃木', '雪铁龙', '吉利', '奔驰', '福特', '雪弗兰', '起亚', '标志', '其他'));
        $this->assign('car_series', array('捷达', '帕萨特', '速腾', 'QQ3', 'A6L', '宝来（经典）', '凯越', '雅阁', '凯美瑞', '思域', '桑塔纳', '伊兰特', '马自达6', 'POLO'));
        $this->assign('car_year', range(date('Y'), '2000'));
    }

}

?>