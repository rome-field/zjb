<?php

class LoanAction extends Action {

    protected $s_type = array(
        array('id' => 1, 'name' => '个人资金'),
        array('id' => 2, 'name' => '企业资金'),
        array('id' => 3, 'name' => '银行资金'),
    );
    protected $s_time = array(
        array('id' => 1, 'name' => '1个月以下'),
        array('id' => 2, 'name' => '1～3个月'),
        array('id' => 3, 'name' => '4～6个月'),
        array('id' => 4, 'name' => '7～12个月'),
        array('id' => 5, 'name' => '1年以上'),
    );
    protected $s_price = array(
        array('id' => 1, 'name' => '10万以下'),
        array('id' => 2, 'name' => '10万～50万'),
        array('id' => 3, 'name' => '50万～100万'),
        array('id' => 4, 'name' => '100万～500万'),
        array('id' => 5, 'name' => '500万以上'),
    );
    protected $s_rank = array(
        array('id' => 1, 'name' => '最新'),
        array('id' => 2, 'name' => '金额'),
    );

    public function index() {

        //设置搜索区域
        $searchArray = array(
            array('name' => '区域', 'key' => 'zone', 'default' => '不限', 'data' => session('city_zones')),
            array('name' => '类型', 'key' => 'type', 'default' => '不限', 'data' => $this->s_type),
            array('name' => '金额', 'key' => 'price', 'default' => '不限', 'data' => $this->s_price),
            array('name' => '期限', 'key' => 'time', 'default' => '不限', 'data' => $this->s_time),
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
            if (isset($_GET['time'])) {
                $vo = $this->setTimeCondition($_GET['time']);
                if ($vo) {
                    $condition['deadline'] = $vo;
                }
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
        $db = D('LoanView');
        $counts = $db->where($condition)->count();
        import('ORG.Util.Page');
        $Page = new Page($counts, C('NUM_PER_PAGE'));
        $show = $Page->show();
        $list = $db->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);

        $this->display();
    }

    protected function setTimeCondition($v) {
        switch ($v) {
            case '1':
                $cond = array('eq', 1);
                break;
            case '2':
                $cond = array('between', '2,3');
                break;
            case '3':
                $cond = array('between', '4,6');
                break;
            case '4':
                $cond = array('between', '7,12');
                break;
            case '5':
                $cond = array('gt', 13);
                break;
            default :
                $cond = 0;
        }
        return $cond;
    }
    
    protected function setPriceCondition($v) {
        switch ($v) {
            case '1':
                $cond = array('lt', 10);
                break;
            case '2':
                $cond = array('between', '10,50');
                break;
            case '3':
                $cond = array('between', '50,100');
                break;
            case '4':
                $cond = array('between', '100,500');
                break;
            case '5':
                $cond = array('gt', 500);
                break;
            default :
                $cond = 0;
        }
        return $cond;
    }

}

?>