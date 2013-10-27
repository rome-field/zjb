<?php

import('ORG.Util.Session');

// 本类由系统自动生成，仅供测试用途
class RentcarAction extends Action {

    protected $s_type = array(
        array('id' => 1, 'name' => '轿车'),
        array('id' => 2, 'name' => '越野SUV'),
        array('id' => 3, 'name' => 'MPV'),
        array('id' => 4, 'name' => '跑车'),
        array('id' => 5, 'name' => '客车'),
        array('id' => 6, 'name' => '货车'),
        array('id' => 7, 'name' => '面包车'),
        array('id' => 8, 'name' => '皮卡'),
        array('id' => 9, 'name' => '工程车'),
    );
    protected $s_price = array(
        array('id' => 1, 'name' => '200元以下'),
        array('id' => 2, 'name' => '200～300元'),
        array('id' => 3, 'name' => '300～400元'),
        array('id' => 4, 'name' => '400～600元'),
        array('id' => 5, 'name' => '600～1000元'),
        array('id' => 6, 'name' => '1000～2000元'),
        array('id' => 8, 'name' => '2000元以上'),
    );
    protected $s_seats= array(
        array('id' => 1, 'name' => '5座'),
        array('id' => 2, 'name' => '7座'),
        array('id' => 3, 'name' => '9座'),
        array('id' => 4, 'name' => '11座'),
        array('id' => 5, 'name' => '12座'),
        array('id' => 6, 'name' => '14座'),
        array('id' => 7, 'name' => '15座'),
        array('id' => 8, 'name' => '16座'),
        array('id' => 9, 'name' => '17座'),
        array('id' => 10, 'name' => '22座'),
        array('id' => 11, 'name' => '24座'),
        array('id' => 12, 'name' => '29座'),
        array('id' => 13, 'name' => '33座'),
        array('id' => 14, 'name' => '39座'),
        array('id' => 15, 'name' => '40座'),
    );
    protected $s_rank = array(
        array('id' => 1, 'name' => '最新'),
        array('id' => 2, 'name' => '租金'),
    );

    public function index() {
        //设置搜索区域
        $searchArray = array(
            array('name' => '区域', 'key' => 'zone', 'default' => '不限', 'data' => session('city_zones')),
            array('name' => '车型', 'key' => 'type', 'default' => '不限', 'data' => $this->s_type),
            array('name' => '座位', 'key' => 'seats', 'default' => '不限', 'data' => $this->s_seats),
            array('name' => '售价', 'key' => 'price', 'default' => '不限', 'data' => $this->s_price),
            array('name' => '排序', 'key' => 'rank', 'default' => '默认', 'data' => $this->s_rank),
        );
        $this->assign('searchArray', $searchArray);
        //设置搜索城市id
        $condition['city_id'] = session('city_id');
        if ($this->isGet()) {
            if (isset($_GET['zone'])) {
                $condition['zone_id'] = $_GET['zone'];
            }
            if (isset($_GET['type'])) {
                $condition['type'] = intval($_GET['type']);
            }
            
            if (isset($_GET['seats'])) {
                $condition['series'] = intval($_GET['seats']);
            }
            if (isset($_GET['price'])) {
                $vo = $this->setPriceCondition($_GET['price']);
                if ($vo) {
                    $condition['price'] = $vo;
                }
            }
            
            if (isset($_GET['rank'])) {
                if ($_GET['rank'] == '1') {
                    $order = 'post_time desc';
                } elseif ($_GET['rank'] == '2') {
                    $order = 'price asc';
                }
            }
        }
        if (!isset($order)) {
            $order = 'edit_time desc';
        }
        $db = D('RentCarView');
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);

        $this->display();
    }

    private function setPriceCondition($v) {
        switch ($v) {
            case '1':
                $cond = array('lt', 200);
                break;
            case '2':
                $cond = array('between', '200,300');
                break;
            case '3':
                $cond = array('between', '300,400');
                break;
            case '4':
                $cond = array('between', '400,600');
                break;
            case '5':
                $cond = array('between', '600,1000');
                break;
            case '6':
                $cond = array('between', '1000,2000');
                break;
            case '7':
                $cond = array('gt', 2000);
                break;
            default :
                $cond = 0;
        }
        return $cond;
    }

}

?>