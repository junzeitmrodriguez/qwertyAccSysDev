<?php

include '../DAL/transactionDAL.php';

$params=$_POST['params'];

$fn = new transactionDAL();
$res= $fn->GetScheduleOfReceivables($params['acyear'],$params['acmonth']); 
$ret=$res->fetchAll();

$cnt=0;

$borrower='';
$totallnbal=0;
$totalcredit=0;
$totaldebit=0;
$totallnbal2=0;

if($ret){
	echo '<table><thead>';
	echo '<tr><td colspan=4></td><td colspan=2 align="center">This Month</td><td></td></tr>';
	echo '<tr><th>ID</th><th>Borrowers</th>';
	echo '<th>Loan Type</th>';
	echo '<th>Beginning Balance</th>';
	echo '<th>DEBIT</th>';
	echo '<th>CREDIT</th>';
	echo '<th>Ending Balance</th>';
	echo '</tr></thead><tbody>';
	foreach($ret as $r) {
		echo '<tr><td>'.$r['idnum'].'</td>';
		//echo '<td>'.$cnt.'</td>';
		
		if($borrower==$r['borrower']){
			echo '<td><p style="display:none;">'.$r['borrower'].'</p></td>';
		}
		else{
			echo '<td><p>'.$r['borrower'].'</p></td>';
			$borrower='';
			$cnt=$cnt+1;
		}
		
		echo '<td>'.$r['loantype'].'</td>';
		
		if($r['lnbal']<0){
			echo '<td align="right">('.($r['lnbal'] != null ? number_format($r['lnbal']*-1,2) : '').')</td>';
			//echo '<td align="right">'.($r['lnbal'] != null ? number_format($r['lnbal']*-1,2) : '').'</td>';
		}
		else{
			echo '<td align="right">'.($r['lnbal'] != null ? number_format($r['lnbal'],2) : '').'</td>';
		}
		
		if($r['debit']<0){
			//echo '<td align="right">('.($r['debit'] != null ? number_format($r['debit']*-1,2) : '').')</td>';
			echo '<td align="right">'.($r['debit'] != null ? number_format($r['debit']*-1,2) : '').'</td>';
		}
		else{
			echo '<td align="right">'.($r['debit'] != null ? number_format($r['debit'],2) : '').'</td>';
		}
		
		if($r['credit']<0){
			//echo '<td align="right">('.($r['credit'] != null ? number_format($r['credit']*-1,2) : '').')</td>';
			echo '<td align="right">'.($r['credit'] != null ? number_format($r['credit']*-1,2) : '').'</td>';
		}
		else{
			echo '<td align="right">'.($r['credit'] != null ? number_format($r['credit'],2) : '').'</td>';
		}
		
		if($r['lnbal2']<0){
			echo '<td align="right">('.($r['lnbal2'] != null ? number_format($r['lnbal2']*-1,2) : '').')</td>';
			//echo '<td align="right">'.($r['lnbal2'] != null ? number_format($r['lnbal2']*-1,2) : '').'</td>';
		}
		else{
			echo '<td align="right">'.($r['lnbal2'] != null ? number_format($r['lnbal2'],2) : '').'</td>';
		}
		
		echo '</tr>';
		
		$borrower=$r['borrower'];
		$totallnbal=$totallnbal+$r['lnbal'];
		$totallnbal2=$totallnbal2+$r['lnbal2'];
		$totalcredit=$totalcredit+$r['credit'];
		$totaldebit=$totaldebit+$r['debit'];
	};
	echo '<tr><td align="right">'.$cnt.'</td><td></td><td align="right"><strong><h4>Total</h4></strong></td><td align="right"><strong><h4>'.number_format($totallnbal,2).'</h4></strong></td><td align="right"><strong><h4>'.number_format($totaldebit,2).'</h4></strong></td>';
	if ($totalcredit<0){
		//echo '<td align="right">('.number_format($totalcredit*-1,2).')</td>';
		echo '<td align="right"><strong><h4>'.number_format($totalcredit*-1,2).'</h4></strong></td>';
	}
	else{
		echo '<td align="right"><strong><h4>'.number_format($totalcredit,2).'</h4></strong></td>';
	}
	echo '<td align="right"><strong><h4>'.number_format($totallnbal2,2).'</h4></strong></td></tr>';
	echo '</tbody></table>';
}
else{
	echo print_r($res->errorInfo());
}

?>