<?php

class IndexAction extends CommonAction {

  public function index() {
    $this->assign('zones',session('city_zones'));
    $this->display();
  }
  
  public function zone()
  {
    
  }
}

