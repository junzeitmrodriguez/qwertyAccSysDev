<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=master_db;charset=utf8','root');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>