<?php

include '../DAL/transactionDAL.php';
include '../MDL/transactionMDL.php';

$fn = new transactionDAL();
$registers=new RegistersMDL();
$registers->acyear=(int)$_GET['acyear'];
$registers->acmonth=(int)$_GET['acmonth'];
$registers->id_document=$_GET['id_document'];
$registers->DocRefNo=(int)$_GET['DocRefNo'];

$res= $fn->GetRegisters($registers); 

$ret=$res->fetchAll();

$today=getdate();
$today=$today['mon'].''.$today['mday'].''.$today['year'];

$FileName='register'.$registers->id_document.'_'.$today.'.csv';

header('Content-Type: text/csv');
header("Content-Transfer-Encoding: UTF-8");
header('Content-Disposition: attachment; filename='.$FileName.'');
// Disable caching
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1
header('Pragma: no-cache'); // HTTP 1.0
header('Expires: 0'); // Proxies

if($ret){
	$fp = fopen("php://output", 'w');
	
	$arrheaders=array(
		'RefNo','Date','GLA','Location','Branch','Function','Expense','Item','Asset','ID','Debit','Credit'
	);
	
	fputcsv($fp,$arrheaders);
	
	foreach ($ret as $fields) {
		$arrdata=array($fields['DocRefNo'],$fields['DocDate'],$fields['id_gla'],
		'"'.$fields['id_location'].'"',
		"'".$fields['id_branch'],
		"'".$fields['id_function'].' '.$fields['functionname'],
		"'".$fields['id_expense'].' '.$fields['exname'],
		"'".$fields['id_item'],
		"'".$fields['id_asset'],
		"'".$fields['idnum'],
		$fields['Debit'],
		$fields['Credit']
		);
		
		fputcsv($fp, $arrdata);
	}
	
	fclose($fp);
	
	exit();
	
}
else{
	echo print_r($res->errorInfo());
}

?>