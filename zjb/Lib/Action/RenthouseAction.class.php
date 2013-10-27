<?php

class RenthouseAction extends Action {

    protected $s_type = array(
        array('id' => 1, 'name' => '普通住宅'),
        array('id' => 2, 'name' => '高层住宅'),
        array('id' => 3, 'name' => '民房'),
        array('id' => 4, 'name' => '别墅'),
        array('id' => 5, 'name' => '公寓'),
        array('id' => 6, 'name' => '写字楼'),
        array('id' => 7, 'name' => '商铺'),
        array('id' => 8, 'name' => '厂房'),
        array('id' => 9, 'name' => '其他'),
    );
    protected $s_rooms = array(
        array('id' => 1, 'name' => '1室'),
        array('id' => 2, 'name' => '2室'),
        array('id' => 3, 'name' => '3室'),
        array('id' => 4, 'name' => '4室'),
        array('id' => 5, 'name' => '5室'),
        array('id' => 6, 'name' => '6室'),
        array('id' => 7, 'name' => '7室'),
        array('id' => 8, 'name' => '8室'),
        array('id' => 9, 'name' => '9室'),
        array('id' => 10, 'name' => '其他'),
    );
    protected $s_price = array(
        array('id' => 1, 'name' => '500元以下'),
        array('id' => 2, 'name' => '500～1000元'),
        array('id' => 3, 'name' => '1000～1500元'),
        array('id' => 4, 'name' => '1500～2000元'),
        array('id' => 5, 'name' => '2000元以上'),
    );
    protected $s_rank = array(
        array('id' => 1, 'name' => '最新'),
        array('id' => 2, 'name' => '租金'),
    );

    public function index() {

        //设置搜索区域
        $searchArray = array(
            array('name' => '区域', 'key' => 'zone', 'default' => '不限', 'data' => session('city_zones')),
            array('name' => '类型', 'key' => 'type', 'default' => '不限', 'data' => $this->s_type),
            array('name' => '户型', 'key' => 'rooms', 'default' => '不限', 'data' => $this->s_rooms),
            array('name' => '售价', 'key' => 'price', 'default' => '不限', 'data' => $this->s_price),
            array('name' => '排序', 'key' => 'rank', 'default' => '默认', 'data' => $this->s_rank),
        );
        $this->assign('searchArray', $searchArray);
        //设置搜索城市id
        $condition['city_id'] = session('city_id');
        $condition['info_catagory']=2;
        if ($this->isGet()) {
            if (isset($_GET['zone'])) {
                $condition['zone_id'] = $_GET['zone'];
            }
            if (isset($_GET['type'])) {
                $condition['house_kind'] = intval($_GET['type']);
            }
            if (isset($_GET['rooms'])) {
                $condition['rooms'] = intval($_GET['rooms']);
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
        $db = D('HouseIndexView');
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);

        $this->display();
    }

    protected function setPriceCondition($v) {
        switch ($v) {
            case '1':
                $cond = array('between', '1,50');
                break;
            case '2':
                $cond = array('between', '50,100');
                break;
            case '3':
                $cond = array('between', '100,150');
                break;
            case '4':
                $cond = array('between', '150,200');
                break;
            case '5':
                $cond = array('gt', 200);
                break;
            default :
                $cond = 0;
        }
        return $cond;
    }

}

?>