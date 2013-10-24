<?php

define('SELL_HOUSE', 1);
define('RENT_HOUSE', 2);
define('SELL_CAR', 3);
define('RENT_CAR', 4);
define('LOAN', 5);
define('INVEST', 6);

class PublishAction extends Action {

    function index() {
        $this->display();
    }

    public function sellHouse() {
        if ($this->isPost()) {
            $info_id = $this->create_info(SELL_HOUSE);
            
            $db=M('house');
            if(!$db->create()){
                $this->error($db->getError());
            }
            $db->info_id = $info_id;
            $area = M('area')->fields('name')->find($_POST['zone_id']);
            $db->address =$area['name'].$_POST['addr'];
        }
        $this->display();
    }

   //创建info表的内容，提供给本类中的发布函数使用

    private function create_info($type) {
        $info = D('Info');
        if (!$info->create()) {
            $this->error($info->getError());
        }
        $info->poster_id = session('mid');
        $info->catagory_id = $type; //123456分别与导航栏对应
        $info->is_verified = session('is_authed');
        $info->city_id = session('city_id');

        if (!$id = $info->add()) {
            $this->error('发布信息失败！');
        }
        
        return $id;
    }

}

?>