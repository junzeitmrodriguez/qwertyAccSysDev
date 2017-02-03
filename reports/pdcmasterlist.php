<?php
session_start();

if($_SESSION['userid']=="0"){
	header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<link rel="icon" href="img/Accounting-Calculator-icon.png">
		<title>DAMUCO</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../frameworks/css/reset.css" rel="stylesheet" type="text/css" />
		<link href="../frameworks/Metro-UI-CSS-master/build/css/metro.min.css" rel="stylesheet" type="text/css" />
		<link href="../frameworks/Metro-UI-CSS-master/build/css/metro-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="../frameworks/Metro-UI-CSS-master/build/css/metro-schemes.min.css" rel="stylesheet" type="text/css" />
		<script src="../frameworks/js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src="../frameworks/Metro-UI-CSS-master/build/js/metro.min.js" type="text/javascript"></script>
		<script src="../frameworks/DataTables-1.10.8/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="../js/base.js" type="text/javascript"></script>
	</head>
	<style type="text/css">
		html{
			font-size:80%;
		}
		.container{
			width:90%;
		}
		table tr td,table tr th{
			border:1px solid black;
			padding:10px;
		}
	</style>
	<body>
	
		<div data-role="dialog" class="dialogpreloader padding20 dialog bg-dark" data-overlay="true" style="width: auto; height: auto; display: none; left: 553.5px; top: 289px;">
			<div class="loader" data-role="preloader" data-type="ring"></div>
		</div>
		
		<div class="container">
			<h6 class="place-right" id="curdate">Date</h6>
			<h4 class="text-light text-shadow" style="padding-top: 3.125rem">DAVAO ACCOUNTANTS MULTI-PURPOSE COOPERATIVE <br />
			<small>POST DATED CHECKS MASTERLIST</small></h4>
			<h5 id="forthemonth"></h5>
			<hr class="thin bg-grayLighter">
			
			<div class="grid">
				<div id="tbposdatedchecks" class="row cells12">
					<table>
						<thead>
							<tr>
								<th>Doc. Code</th>
								<th>Doc. Ref #</th>
								<th>ID #</th>
								<th>Check #</th>
								<th>Check Date</th>
								<th>Bank Code</th>
								<th>Amount</th>
								<th>Loan Type</th>
								<th>Remarks</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
				<div id="" class="row cells12" style="margin-bottom:80px;">
				</div>
			</div>	
			
		</div>
		
	</body>
</html>		
<script type="text/javascript">
	$(function(){
		$('#curdate').text(fnGetDate());
		fnGetPosDatedChecks();
	});
	function fnGetPosDatedChecks(){
		$('#tbposdatedchecks tbody tr').remove();
		var _params={};
		_params['action']='getpdchecks';
		var req=$.ajax({
			url: '../classes/BLL/transactionBLL.php',
			method: 'post',
			datatype: 'json',
			data:{
				params:_params
			},
			beforeSend:function(){
				dialog('.dialogpreloader');
			},
			complete:function(){
				dialog('.dialogpreloader');
			}
		});
		
		req.done(function(data){
			var toAppend='';
			$.each(data,function(key,val) {
				toAppend+='<tr>';
				toAppend+='<td>'+val.id_document+'</td>';
				toAppend+='<td>'+val.DocRefNo+'</td>';
				toAppend+='<td>'+val.idnum+'</td>';
				toAppend+='<td>'+val.CheckNo+'</td>';
				toAppend+='<td>'+val.CheckDate+'</td>';
				toAppend+='<td>'+val.Bankcode+'</td>';
				toAppend+='<td>'+val.Bankcode+'</td>';
				if (val.LoanType === null){
						toAppend+='<td></td>';
				}
				else{
					toAppend+='<td>'+val.LoanType+'</td>';	
				}
				if (val.Remarks === null){
						toAppend+='<td></td>';
				}
				else{
					toAppend+='<td>'+val.Remarks+'</td>';	
				};
				toAppend+='</tr>';
			});
			
			$('#tbposdatedchecks tbody').append(toAppend);
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});
	}
</script>