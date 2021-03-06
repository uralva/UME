<?php
   @session_start();
   require_once($_SESSION['BASE_DIR_BACKEND'].'/model/config/database.php'); 
   $Connection   = Database::Connect();
	$Query                   =    array();
   $Query['SQL_A']          =    "SELECT COUNT(id_user) as VAL FROM user_access";
   $Query['SQL_B']          =    "SELECT id_user, user_login_name FROM user_access";
   $DATA                    =    array("COUNT" => null,"INFO" => array());
   $result_1 = $Connection->prepare($Query['SQL_A']);
   $result_1->execute();
   while($row = $result_1->fetch(PDO::FETCH_ASSOC)){
      $DATA['COUNT'] = $row['VAL'];
   }
   $result_2 = $Connection->prepare($Query['SQL_B']);
   $result_2->execute();
   while($row = $result_2->fetch(PDO::FETCH_ASSOC)){
      array_push($DATA['INFO'],$row);
   }
   header('Content-Type: application/json');
   echo json_encode($DATA);
?>