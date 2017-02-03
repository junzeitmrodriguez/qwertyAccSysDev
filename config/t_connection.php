<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=transaction_db;charset=utf8','root');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>