<?php

include '../DAL/transactionDAL.php';

$params=$_POST['params'];

$fn = new transactionDAL();
$res= $fn->GetTrialBalance($params['acyear'],$params['acmonth']); 
$ret=$res->fetchAll();

$totdebit=0;
$totdebit2=0;
$totdebit3=0;

$totcredit=0;
$totcredit2=0;
$totcredit3=0;

if($ret){

	echo '<table><thead>';
	echo '<tr><th colspan=2></th><th colspan=2 align="center">Balance Beginning</th><th colspan=2 align="center">This Month</th><th colspan=2 align="center">Ending Balance</th>';
	echo '</tr>';
	echo '<tr><th colspan=2>ACCOUNTS TITLE</th>';
	echo '<th align="center">DR</th><th align="center">CR</th>';
	echo '<th align="center">DR</th><th align="center">CR</th>';
	echo '<th align="center">DR</th><th align="center">CR</th>';
	echo'</tr></thead><tbody>';
	
	foreach($ret as $r) {
		echo '<tr>';
		echo '<td>'.$r['id_gla'].'</td>';
		if($r['functionname']!=NULL){
			$r['functionname'] = ' / '.$r['functionname'];
		}
		if($r['expensename']!=NULL){
			$r['expensename'] = ' / '.$r['expensename'];
		}
		echo '<td>'.$r['name'].''.$r['functionname'].''.$r['expensename'].'</td>';
		
		if(number_format($r['debit'],2)!=0.00){
			echo '<td align="right">'.number_format($r['debit'],2).'</td>';
		}
		else{
			echo '<td align="right"></td>';
		}
		
		if(number_format($r['credit'],2)!=0.00){
			echo '<td align="right">'.number_format($r['credit']*-1,2).'</td>';
		}
		else{
			echo '<td align="right"></td>';
		}
		
		if(number_format($r['debit2'],2)!=0.00){
			echo '<td align="right">'.number_format($r['debit2'],2).'</td>';
		}
		else{
			echo '<td align="right"></td>';
		}
		
		if(number_format($r['credit2'],2)!=0.00){
			echo '<td align="right">'.number_format($r['credit2']*-1,2).'</td>';
		}
		else{
			echo '<td align="right"></td>';
		}
		
		if(number_format($r['debit3'],2)!=0.00){
			echo '<td align="right">'.number_format($r['debit3'],2).'</td>';
		}
		else{
			echo '<td align="right"></td>';
		}
		
		if(number_format($r['credit3'],2)!=0.00){
			echo '<td align="right">'.number_format($r['credit3']*-1,2).'</td>';
		}
		else{
			echo '<td align="right"></td>';
		}
		
		echo '</tr>';
		
		$totdebit=$totdebit+$r['debit'];
		$totdebit2=$totdebit2+$r['debit2'];
		$totdebit3=$totdebit3+$r['debit3'];
		
		if($r['credit'] != NULL){
			$totcredit=$totcredit+$r['credit'];
		}
		
		$totcredit2=$totcredit2+$r['credit2'];
		$totcredit3=$totcredit3+$r['credit3'];
	}
	
	echo '<tr><td colspan=2 align="right">Total</td><td align="right">'.number_format($totdebit,2).'</td><td align="right">'.number_format($totcredit*-1,2).'</td>';
	echo '<td align="right">'.number_format($totcredit2*-1,2).'</td><td align="right">'.number_format($totdebit2,2).'</td>';
	echo '<td align="right">'.number_format($totdebit3,2).'</td><td align="right">'.number_format($totcredit3*-1,2).'</td></tr>';
	
	echo '</tbody></table>';

}
else{
	echo print_r($res->errorInfo());
}

?>