<?php
  require_once($_SESSION['BASE_DIR_BACKEND'].'/model/login_model.php'); 
  class User_Cccess{
    private $Request;
    private $Response;
    private $Action;
    private $CRUD;

    public function __construct(){
    }
    private function get_Response(){
    }
    private function set_Response(){
      $this->Request['Departament'] = array();
      $this->Request['Departament']['User_access'] = array();
    }
    public function Initialize(){    
      switch($_SESSION['ACTION_USER']){
        case '1':
          break;
        case '2':
          break;
        default:
          break;
      }
    }
    public function __destruct(){
    }
  }
?>
