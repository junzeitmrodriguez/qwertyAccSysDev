<?php

include '../DAL/transactionDAL.php';

$params=$_POST['params'];

$fn = new transactionDAL();
$res= $fn->GetCurrentAccount($params['acyear'],$params['acmonth']); 
$ret=$res->fetchAll();

if($ret){
	echo '<table><thead>';
	echo '<th>Bank</th>';
	echo '<th>Particular</th>';
	echo '<th>DEBIT</th>';
	echo '<th>CREDIT</th>';
	echo '<th>Total</th>';
	echo '</tr></thead><tbody>';
	foreach($ret as $r) {
		
		echo '<tr>';
		echo '<td>'.$r['functionname'].'</td><td>'.$r['id_document'].'</td>';
		echo '<td align="right">'.number_format($r['Debit'],2).'</td><td align="right">'.number_format($r['Credit'],2).'</td>';
		if ($r['Total']<0){
			echo '<td align="right">('.number_format($r['Total']*-1,2).')</td>';
		}
		else{
			echo '<td align="right">'.number_format($r['Total'],2).'</td>';
		}
		echo '</tr>';
		
	}
	echo '</tbody></table>';
}
else{
	echo print_r($res->errorInfo());
}

?>