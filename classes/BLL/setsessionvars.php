<?php

header("Content-Type: application/json");

include '../DAL/masterDAL.php';

session_start();

$params=$_POST['params'];

$fn = new MasterDAL();
$res= $fn->CheckLogin($params['userid'],$params['password']);

$ret=$res->fetch(PDO::FETCH_ASSOC);

if(!$ret){
	
	echo print_r($res->errorInfo());
	
}
else{
	
	if($ret['Status']=="0"){
		$_SESSION['userid']=$params['userid'];
		$_SESSION['password']=$params['password'];
	}
	
	echo json_encode($ret);
}

?>