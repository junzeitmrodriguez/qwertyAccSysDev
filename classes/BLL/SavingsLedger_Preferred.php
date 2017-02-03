<?php

include '../DAL/transactionDAL.php';

$params=$_POST['params'];

$fn = new transactionDAL();
$res= $fn->SavingsLedger_Preferred($params['acyear'],$params['idnum']); 
$ret=$res->fetchAll();

if($ret){
	//var_dump($ret);
	
	echo '<table><thead><tr>';
	echo '<th>Doc</th>';
	echo '<th>Reference #</th>';
	echo '<th>Date</th>';
	echo '<th align="right">Debit</th>';
	echo '<th align="right">Credit</th>';
	echo '</tr></thead><tbody>';
	
	$subtotaldebit=0;
	$subtotalcredit=0;
	$endingbal=0;
	
	foreach($ret as $r) {
		echo '<tr>';
		echo '<td>'.$r['description'].'</td><td>'.$r['DocRefNo'].'</td><td>'.$r['DocDate'].'</td>';
		if($r['Debit']==0.00){
			echo '<td></td>';
		}else{
			echo '<td align="right">'.number_format($r['Debit'],2).'</td>';
		}
		if($r['Credit']==0.00){
			echo '<td></td>';
		}else{
			echo '<td align="right">'.number_format($r['Credit'],2).'</td>';
		}
		$subtotaldebit=$subtotaldebit+$r['Debit'];
		$subtotalcredit=$subtotalcredit+$r['Credit'];
		echo '</tr>';
	}
	echo '<tr><td colspan=5><hr /></td></tr>';
	echo '<tr><td colspan=3>Total</td>';
	if($subtotaldebit==0.00){
		echo '<td></td>';
	}else{
		echo '<td align="right">'.number_format($subtotaldebit,2).'</td>';
	}
	if($subtotalcredit==0.00){
		echo '<td></td>';
	}else{
		echo '<td align="right">'.number_format($subtotalcredit,2).'</td>';
	}
	echo '</tr>';
	echo '<tr><td colspan=5><hr /></td></tr>';
	echo '<tr><td colspan=3>Ending Balance</td>';
	
	$endingbal = $subtotaldebit - $subtotalcredit;
	if($endingbal>0){
		echo '<td align="right">'.number_format($endingbal,2).'</td><td></td>';
	}
	else{
		echo '<td></td><td align="right">'.number_format($endingbal*-1,2).'</td>';
	}
	echo '</tr>';
	echo '</tbody></table>';
}
else{
	if(count($res)){
		echo 'No record/s found.';
	}
	else{
		echo print_r($res->errorInfo());
	}
}

?>