<?php

include '../DAL/transactionDAL.php';

$params=$_POST['params'];

$fn = new transactionDAL();
$res= $fn->IndivLoanLedger($params['acyear'],$params['idnum']); 
//$res= $fn->IndivLoanLedger(2015,711116); 
$ret=$res->fetchAll();

$tempdesc='';
$tempfn='';
$subtotaldebit=0;
$subtotalcredit=0;
$subbal=0;
$lasttotaldebit=0;
$lasttotalcredit=0;
$lastbal=0;

if($ret){

	echo '<table><thead><tr>';
	echo '<th>Loan Type</th>';
	echo '<th>Doc</th>';
	echo '<th>Reference #</th>';
	echo '<th>Date</th>';
	echo '<th align="right">Debit</th>';
	echo '<th align="right">Credit</th>';
	echo '<th align="right">Interest Paid</th>';
	echo '<th align="right">Fines Paid</th>';
	echo '</tr></thead><tbody>';
	foreach($ret as $r) {
		
		if($tempfn!=$r['id_function'] && $tempfn!=''){
			echo '<tr><td colspan=8><hr /></td></tr>';
			echo '<tr><td colspan=4 align="right">Total</td><td align="right">'.number_format($subtotaldebit,2).'</td><td align="right">'.number_format($subtotalcredit,2).'</td></tr>';
			
			$subbal=$subtotaldebit-$subtotalcredit;
			if($subtotaldebit>$subtotalcredit){
				echo '<tr><td colspan=4 align="right">Balance</td><td align="right">'.number_format($subbal,2).'</td><td></td></tr>';
			}
			else{
				echo '<tr><td colspan=4 align="right">Balance</td><td></td><td align="right">'.number_format($subbal,2).'</td>';
			}
			
			echo '<tr><td colspan=8><hr /></td></tr>';
			
			$lastbal=$lastbal+$subbal;
			$lasttotaldebit=$lasttotaldebit+$subtotaldebit;
			$lasttotalcredit=$lasttotalcredit+$subtotalcredit;
			
			$subbal=0;
			$subtotaldebit=0;
			$subtotalcredit=0;
		}
		
		echo '<tr>';
		if($tempdesc!=$r['functionname']){
			echo '<td>'.$r['functionname'].'</td>';
		}
		else{
			echo '<td></td>';
		}
		echo '<td>'.$r['description'].'</td>';
		echo '<td>'.$r['DocRefNo'].'</td>';
		echo '<td>'.$r['DocDate'].'</td>';
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
		
		if($r['InterestPaid']==0.00){
			echo '<td></td>';
		}else{
			echo '<td align="right">'.number_format($r['InterestPaid'],2).'</td>';
		}
		if($r['FinesPaid']==0.00){
			echo '<td></td>';
		}else{
			echo '<td align="right">'.number_format($r['FinesPaid'],2).'</td>';
		}
		
		echo '</tr>';
		$tempdesc=$r['functionname'];
		$tempfn=$r['id_function'];
		$subtotaldebit=$subtotaldebit+$r['Debit'];
		$subtotalcredit=$subtotalcredit+$r['Credit'];
	}
	
	if($subtotaldebit<>0 && $subtotalcredit<>0){
		echo '<tr><td colspan=8><hr /></td></tr>';
		echo '<tr><td colspan=4 align="right">Total</td><td align="right">'.number_format($subtotaldebit,2).'</td><td align="right">'.number_format($subtotalcredit,2).'</td></tr>';
			
		$subbal=$subtotaldebit-$subtotalcredit;
		if($subtotaldebit>$subtotalcredit){
			echo '<tr><td colspan=4 align="right">Balance</td><td align="right">'.number_format($subbal,2).'</td><td></td></tr>';
		}
		else{
			echo '<tr><td colspan=4 align="right">Balance</td><td></td><td align="right">'.number_format($subbal,2).'</td>';
		}
		
		$lastbal=$lastbal+$subbal;
		$lasttotaldebit=$lasttotaldebit+$subtotaldebit;
		$lasttotalcredit=$lasttotalcredit+$subtotalcredit;
		
		echo '<tr><td colspan=8><hr /></td></tr>';
		echo '<tr><td>Last Total</td><td colspan=3 align="right"></td><td align="right">'.number_format($lasttotaldebit,2).'</td><td align="right">'.number_format($lasttotalcredit,2).'</td></tr>';
		if($lasttotaldebit>$lasttotalcredit){
			echo '<tr><td>Last Loan Balance</td><td colspan=3 align="right"></td><td align="right">'.number_format($lastbal,2).'</td><td></td></tr>';
		}
		else{
			echo '<tr><td>Last Loan Balance</td><td colspan=3 align="right"></td><td></td><td align="right">'.number_format($lastbal,2).'</td>';
		}
		
		$subbal=0;
		$subtotaldebit=0;
		$subtotalcredit=0;
		
		$lasttotaldebit=0;
		$lasttotalcredit=0;
		$lastbal=0;
	}
	
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