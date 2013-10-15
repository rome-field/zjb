<?php
// 本类由系统自动生成，仅供测试用途

class AnswersAction extends Action{
	public function answers(){
	$Data = M('Data'); // 实例化Data数据对象
    import('ORG.Util.Page');// 导入分页类
    $count      = $Data->where($map)->count();// 查询满足要求的总记录数
    $Page       = new Page($count);// 实例化分页类 传入总记录数
    // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
    $nowPage = isset($_GET['p'])?$_GET['p']:1;
    $list = $Data->where($map)->order('create_time')->page($nowPage.','.$Page->listRows)->select();
    $show       = $Page->show();// 分页显示输出
    $this->assign('page',$show);// 赋值分页输出
    $this->assign('list',$list);// 赋值数据集
	$this->display();
    }
	

};

