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
			<small>OTHER COLLATERAL MASTERLIST</small></h4>
			<h5 id="forthemonth"></h5>
			<hr class="thin bg-grayLighter">
			
			<div class="grid">
				<div id="tbcollaterals" class="row cells12">
					<table>
						<thead>
							<tr>
								<th>Doc Ref #</th>
								<th>Type</th>
								<th>ID #</th>
								<th>Name</th>
								<th>TCT #</th>
								<th>Area</th>
								<th>Loc.</th>
								<th>Market Val.</th>
								<th>Cert. of Owner</th>
								<th>Particular</th>
								<th>Plate #</th>
								<th>CR #</th>
								<th>CR Date</th>
								<th>OR #</th>
								<th>OR Date</th>
								<th>Serial #</th>
								<th>Serial Date</th>
								<th>Model</th>
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
		fnGetCollaterals();
	});
	function fnGetCollaterals(){
		$('#tbcollaterals tbody tr').remove();
		var _params={};
		_params['action']='getcollaterals';
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
				toAppend+='<td>'+val.DocRefNo+'</td>';
				toAppend+='<td>'+val.ColType+'</td>';
				toAppend+='<td>'+val.idnum+'</td>';
				toAppend+='<td>'+val.name2+'</td>';
				toAppend+='<td>'+val.TCTNo+'</td>';
				toAppend+='<td>'+val.Area+'</td>';
				toAppend+='<td>'+val.Location+'</td>';
				toAppend+='<td>'+val.MarketValue+'</td>';
				toAppend+='<td>'+val.CertOfOwner+'</td>';
				toAppend+='<td>'+val.particular+'</td>';
				toAppend+='<td>'+val.plateno+'</td>';
				toAppend+='<td>'+val.CRNo+'</td>';
				toAppend+='<td>'+val.CRDate+'</td>';
				toAppend+='<td>'+val.ORNo+'</td>';
				toAppend+='<td>'+val.ORDate+'</td>';
				toAppend+='<td>'+val.SerialNo+'</td>';
				toAppend+='<td>'+val.SerialDate+'</td>';
				toAppend+='<td>'+val.Model+'</td>';
				toAppend+='<td>'+val.Remarks+'</td>';
				toAppend+='</tr>';
			});
			
			$('#tbcollaterals tbody').append(toAppend);
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});
	}
</script>