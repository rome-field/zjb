<?php

import('ORG.Util.Session');

// 本类由系统自动生成，仅供测试用途
class BuycarAction extends Action {

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
    protected $s_brand = array(
        array('id' => 1, 'name' => '大众'),
        array('id' => 2, 'name' => '本田'),
        array('id' => 3, 'name' => '别克'),
        array('id' => 4, 'name' => '丰田'),
        array('id' => 5, 'name' => '夏利'),
        array('id' => 6, 'name' => '日产'),
        array('id' => 7, 'name' => '奇瑞'),
        array('id' => 8, 'name' => '宝马'),
        array('id' => 9, 'name' => '现代'),
        array('id' => 10, 'name' => '奥迪'),
        array('id' => 11, 'name' => '马自达'),
        array('id' => 12, 'name' => '比亚迪'),
        array('id' => 13, 'name' => '铃木'),
        array('id' => 14, 'name' => '雪铁龙'),
        array('id' => 15, 'name' => '吉利'),
        array('id' => 16, 'name' => '奔驰'),
        array('id' => 17, 'name' => '福特'),
        array('id' => 18, 'name' => '雪弗兰'),
        array('id' => 19, 'name' => '起亚'),
        array('id' => 20, 'name' => '标致'),
        array('id' => 21, 'name' => '其他'),
    );
    protected $s_series = array(
        array('id' => 1, 'name' => '捷达'),
        array('id' => 2, 'name' => '帕萨特'),
        array('id' => 3, 'name' => '速腾'),
        array('id' => 4, 'name' => 'QQ3'),
        array('id' => 5, 'name' => 'A6L'),
        array('id' => 6, 'name' => '宝来'),
        array('id' => 7, 'name' => '凯越'),
        array('id' => 8, 'name' => '雅阁'),
        array('id' => 9, 'name' => '凯美瑞'),
        array('id' => 10, 'name' => '思域'),
        array('id' => 11, 'name' => '桑塔纳'),
        array('id' => 12, 'name' => '马自达6'),
        array('id' => 13, 'name' => 'POLO'),
    );
    protected $s_price = array(
        array('id' => 1, 'name' => '1万以下'),
        array('id' => 2, 'name' => '1～2万'),
        array('id' => 3, 'name' => '2～3万'),
        array('id' => 4, 'name' => '3～4万'),
        array('id' => 5, 'name' => '4～6万'),
        array('id' => 6, 'name' => '6～8万'),
        array('id' => 7, 'name' => '8～10万'),
        array('id' => 8, 'name' => '10万以上'),
    );
    protected $s_age = array(
        array('id' => 1, 'name' => '1年以下'),
        array('id' => 2, 'name' => '1～2年'),
        array('id' => 3, 'name' => '3～5年'),
        array('id' => 4, 'name' => '6～8年'),
        array('id' => 5, 'name' => '9～11年'),
        array('id' => 6, 'name' => '12年以上'),
    );
    protected $s_rank = array(
        array('id' => 1, 'name' => '最新'),
        array('id' => 2, 'name' => '售价'),
    );

    public function index() {
        //设置搜索区域
        $searchArray = array(
            array('name' => '区域', 'key' => 'zone', 'default' => '不限', 'data' => session('city_zones')),
            array('name' => '车型', 'key' => 'type', 'default' => '不限', 'data' => $this->s_type),
            array('name' => '品牌', 'key' => 'brand', 'default' => '不限', 'data' => $this->s_brand),
            array('name' => '车系', 'key' => 'series', 'default' => '不限', 'data' => $this->s_series),
            array('name' => '售价', 'key' => 'price', 'default' => '不限', 'data' => $this->s_price),
            array('name' => '车龄', 'key' => 'age', 'default' => '不限', 'data' => $this->s_age),
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
            if (isset($_GET['brand'])) {
                $condition['brand'] = intval($_GET['brand']);
            }
            if (isset($_GET['series'])) {
                $condition['series'] = intval($_GET['series']);
            }
            if (isset($_GET['price'])) {
                $vo = $this->setPriceCondition($_GET['price']);
                if ($vo) {
                    $condition['price'] = $vo;
                }
            }
            if (isset($_GET['age'])) {
                $vo = $this->setAgeCondition($_GET['age']);
                if ($vo) {
                    $condition['year'] = $vo;
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
        $db = D('BuyCarView');
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
                $cond = array('lt', 10000);
                break;
            case '2':
                $cond = array('between', '10000,20000');
                break;
            case '3':
                $cond = array('between', '20000,30000');
                break;
            case '4':
                $cond = array('between', '30000,40000');
                break;
            case '5':
                $cond = array('between', '40000,60000');
                break;
            case '6':
                $cond = array('between', '60000,80000');
                break;
            case '7':
                $cond = array('between', '80000,100000');
                break;
            case '8':
                $cond = array('gt', 100000);
                break;
            default :
                $cond = 0;
        }
        return $cond;
    }

    private function setAgeCondition($v) {
        $thisyear = intval(date('Y'));
        switch ($v) {
            case '1':
                $cond = array('eq', $thisyear);
                break;
            case '2':
                $cond = array('between', ($thisyear-1).','.($thisyear-2));
                break;
            case '3':
                $cond = array('between', ($thisyear-3).','.($thisyear-5));
                break;
            case '4':
                $cond = array('between', ($thisyear-6).','.($thisyear-8));
                break;
            case '5':
                $cond = array('between', ($thisyear-9).','.($thisyear-11));
                break;
            case '6':
                $cond = array('gt', $thisyear-11);
                break;
            default :
                $cond = 0;
        }
        return $cond;
    }

}

?>