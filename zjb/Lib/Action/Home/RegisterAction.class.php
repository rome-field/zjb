<?php

class RegisterAction extends Action {

  public function register() {
    
    $this->display();
  }

  public function hyregister() {
    $c = Session::get(C('USER_AUTH_KEY'));
    $this->assign('c', $c);
    $this->display();
  }

}

