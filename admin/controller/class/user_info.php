<?php
  require_once($_SESSION['BASE_DIR_BACKEND'].'/model/login_model.php'); 
  class User_Info{
    private $Response;
    private $Action;
    private $CRUD;

    public function __construct(){
      $this->CRUD     = new Login_Model(); 
    }
    private function get_Response(){

    }
    private function set_Response(){
      $this
    }
    public function Initialize(){    

    }
    public function __destruct(){
    }
  }
?>
