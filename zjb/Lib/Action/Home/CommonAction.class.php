<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Class CommonAction extends Action
{
    Public function _initialize()
    {
        //Debug
        //session(null);
        //城市id和用户地址中的城市id不相关。默认根据ip地址设置城市id。用户可以手动切换。
        if(!session('?city_id'))
        {
          //TODO 根据IP获得城市id，暂时设置成丽水市
          $cityid = 1943;
          session('city_id',$cityid);
          $zone = M('area')->where('pid='.$cityid)->field('id, name')->select();
          session('city_zones',$zone);
          session('city_name','丽水');
        }
        
        //自动登录处理
		if (!session('?mid')  && cookie('auto')) {
			$value = explode('|', encrytion($_COOKIE['auto']));
			if ($value[1] == get_client_ip()) {
				session('mid', $value[0]);
				session('mname', $value[2]);
                session('mtype',$value[3]);
				//session('grade', $value[4]);
			}
		}
    }
    
    
    public function city()
    {
      if(!empty($_GET) && $_GET[shi]!=0)
      {
        $id = $_GET['shi'];
        session('city_id', $id);
        $name = M('area')->where('id='.$id)->field('name')->select();
        session('city_name',$name[0]['name']);
        $zones = M('area')->where('pid='.$id)->field('id, name')->select();
        session('city_zones', $zones);   
        $this->redirect('Index/index');
        exit();
      }
      $area = M('area')->where('level=1')->field('id, name')->select();
      $this->assign('province', $area);
      $this->display();
    }

    public function verify(){
		import('ORG.Util.Image');	
		Image::buildImageVerify();
	}
    
}
?>
