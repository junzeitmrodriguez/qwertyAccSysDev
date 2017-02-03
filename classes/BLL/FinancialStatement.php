<?php

//header("Content-Type: application/json");

include '../DAL/transactionDAL.php';

$params=$_POST['params'];

$fn = new transactionDAL();
$res= $fn->FinancialReport(); 
$ret=$res->fetchAll();

$overalltotal=0;
$overalltotal2=0;
$subtotal=0;
$subtotal2=0;
$amount=0;
$amount2=0;
$lastamt=0;
$lastamt2=0;

$netbookvalue=0;
$netbookvalue2=0;

echo '<table class="1" style="width:85%;"><tbody>';
if($ret){
	
	foreach($ret as $r) {
		
		if($r['isheader']==0){
			
			$id_gla=trim($r['id_gla']);
			$fn2 = new transactionDAL();
			$res2= $fn2->GetSumBookByGLA($id_gla,$params['acyear'],$params['acmonth']); 
			$ret2=$res2->fetchAll();
			
			foreach($ret2 as $r2) {
				
				
				if($r2['functionname']==''){
					$fnname='';
				}
				else{
					$fnname=' / '.$r2['functionname'];
				}
				
				if($r2['amount']< 0){
					$num1 = '('.number_format($r2['amount']*-1,2).')';
				}
				else{
					$num1=number_format($r2['amount'],2);
				}
				
				if($r2['amount2']< 0){
					$num2 = '('.number_format($r2['amount2']*-1,2).')';
				}
				else{
					$num2=number_format($r2['amount2'],2);
				}
				
				echo '<tr>
				<td colspan=2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$r2['id_gla'].'-'.$r2['glaname'].''.$fnname.'</td>
				<td class="place-right">'.$num1.'</td>
				<td colspan=3 style="width:50px;">&nbsp</td>
				<td class="place-right">'.$num2.'</td>
				</tr>';
				
				$amount=$amount+$r2['amount'];
				$amount2=$amount2+$r2['amount2'];
			}
			
			unset($res2);
		}
		
		if ($r['isheader']==2){
			echo '<tr><td colspan=7><hr class="thin bg-dark"></td></tr>';
			
			if($r['title']=='TOTAL CURRENT'){
				echo '<tr style="visibility:hidden;">';
			}else{
				echo '<tr>';	
			}
			
			echo '<td colspan=2>'.$r['title'].'</td>
			<td class="place-right">'.number_format($subtotal,2).'</td>
			<td colspan=3 style="width:50px;">&nbsp</td>
			<td class="place-right">'.number_format($subtotal2,2).'</td>
			</tr>';
			
			$subtotal=0;
			$subtotal2=0;
		}
		
		if ($r['isheader']==3){
			echo '<tr><td colspan=7><hr class="thin bg-dark"></td></tr>';
			echo '<tr>
			<td colspan=2>'.$r['title'].'</td>
			<td class="place-right">'.number_format($overalltotal,2).'</td>
			<td colspan=3 style="width:50px;">&nbsp</td>
			<td class="place-right">'.number_format($overalltotal2,2).'</td>
			</tr>';
			
			$overalltotal=0;
			$overalltotal2=0;
		}
		
		if ($r['isheader']==1 && $r['title']=='Total'){
			echo '<tr><td colspan=7><hr class="thin bg-dark"></td></tr>';
			echo '<tr>
			<td colspan=2>Total:</td>
			<td class="place-right">'.number_format($amount,2).'</td>
			<td colspan=3 style="width:50px;">&nbsp</td>
			<td class="place-right">'.number_format($amount2,2).'</td>
			</tr>';
			
			$lastamt=$amount;
			$lastamt2=$amount2;
			
			$overalltotal=$overalltotal+$amount;
			$overalltotal2=$overalltotal2+$amount2;
			
			$subtotal=$subtotal+$amount;
			$subtotal2=$subtotal2+$amount2;
			
			$amount=0;
			$amount2=0;
		}
		
		if ($r['isheader']==1 && $r['title']!='Total' && $r['title'] != 'Net Book Value'){
			echo '<tr><td colspan=7>'.$r['title'].'</td></tr>';
		}
		
		if ($r['isheader']==1 && $r['title']=='Net Book Value'){
			
			$overalltotal=$overalltotal+($amount);
			$overalltotal2=$overalltotal2+($amount2);
			
			$subtotal=$subtotal+$amount;
			$subtotal2=$subtotal2+$amount2;
			
			$amount=$lastamt-abs($amount);
			$amount2=$lastamt2-abs($amount2);
			
			$subtotal=$subtotal-$amount;
			$subtotal2=$subtotal2-$amount2;
			
			$lastamt=0;
			$lastamt2=0;
			
			$overalltotal=$overalltotal-$amount;
			$overalltotal2=$overalltotal2-$amount2;
			
			echo '<tr><td colspan=7><hr class="thin bg-dark"></td></tr>';
			echo '<tr>
			<td colspan=2>Net Book Value:</td>
			<td class="place-right">'.number_format($amount,2).'</td>
			<td colspan=3 style="width:50px;">&nbsp</td>
			<td class="place-right">'.number_format($amount2,2).'</td>
			</tr>';
			
			//$amount=0;
			//$amount2=0;
		}
		
	}
}
else{
	echo print_r($res->errorInfo());
}
echo '</tbody></table>';
?>