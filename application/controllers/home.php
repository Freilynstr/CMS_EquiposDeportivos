<?php

class Home extends CI_Controller{

  function __construct(){
    parent::__construct();
  }

  public function index(){
    $data = array(
      'content' => 'usuarios/index_view'
    );
    $this->load->view('themes/admin/template',$data);
  }

}
