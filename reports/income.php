<?php
session_start();

if($_SESSION['userid']=="0"){
	header('Location: ../index.php');
}
?><!DOCTYPE html>
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
		table td{
			padding-bottom:1.5px;
		}
	</style>
	<body>
		
		<div data-role="dialog" class="dialogpreloader padding20 dialog bg-dark" data-overlay="true" style="width: auto; height: auto; display: none; left: 553.5px; top: 289px;">
			<div class="loader" data-role="preloader" data-type="ring"></div>
		</div>
		
		<div data-role="dialog" id="dialog9" class="padding20 dialog" data-close-button="true" data-overlay="true" data-overlay-color="op-dark" style="width: auto; height: auto; display: none; left: 821.5px; top: 209px;">
				<h1>Report Parameters</h1>
				<div class="grid">
					<div class="row cells12">
						<hr class="thin bg-grayLighter">
						<div class="cell colspan3 padding10">
							<label>Year</label>
							<div class="input-control text full-size">
								<input class="isrequired" id="txtacyear" type="text" />
							</div>
						</div>
						<div class="cell colspan5 padding10">
							<label>Month</label>
							<div class="input-control select full-size">
								<select id="txtacmonth"></select>
							</div>
						</div>
					</div>
					<div class="row cells12">
						<div class="cell colspan3 padding10">
							<button id="btnGenerateReports" class="image-button">
								Generate
								<span class="icon mif-checkmark"></span>
							</button>
						</div>
					</div>
				</div>
				<span class="dialog-close-button"></span>
		</div>
		
		<div class="container">
		
			<h6 class="place-right" id="curdate">Date</h6>
			<h4 class="text-light text-shadow" style="padding-top: 3.125rem">DAVAO ACCOUNTANTS MULTI-PURPOSE COOPERATIVE   <br /><small>CUMULATIVE INCOME STATEMENT</small></h4>
			<h5 id="mnthyr"></h5>
			<br />
			<h5 id="entrytype"></h5>
			
			<div class="grid" style="margin-bottom:120px;">
				<div class="row cells12">
				</div>
				<div class="row cells12">
					<div class="cell colspan12">
						<hr class="thin bg-grayLighter">
						<table id="tbcumulativeincome" class="" style="width:85%;">
							<thead>
								<tr>
									<!--<th align="center" colspan=2 style="width:350px;"></th>
									<th align="center" colspan=2>This Month</th>
									<th align="center" colspan=2>TO DATE</th>
									<th align="center" colspan=2>Budget</th>
									<th align="center" colspan=2>Last Year</th>
									<th align="center" colspan=2>%</th>-->
									<th align="center"></th>
									<th align="center">This Month</th>
									<th align="center">TO DATE</th>
									<th align="center">Budget</th>
									<th align="center">Last Year</th>
									<th align="center">%</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3">
						<label>Prepared By:</label>
						<p id="preparedby" style="margin-top:30px;"></p>
						<p id="preposition"></p>
					</div>
					<div class="cell colspan3">
						<label>Verified By:</label>
						<p id="verifiedby" style="margin-top:30px;"></p>
					</div>
					<div class="cell colspan3">
						<label>Noted By:</label>
						<p id="notedby" style="margin-top:30px;"></p>
						<p id="notposition"></p>
					</div>
				</div>
			</div>

		</div>
	
	</body>
</html>
<script type="text/javascript">
	$(function(){
		$('#curdate').text(fnGetDate());
		$('#mnthyr').text();
		$('#entrytype').text();
		
		$('#dialog9').data('dialog').open();
		$('#dialog9').css('top','100');
		
		fnGetMonthNames();
		
		fnGetApplication();
		
		$('#btnGenerateReports').click(function(){
			fnIsRequired();
			
			var params={};
			params['action']='getcumincome';
			params['acyear']=$('#txtacyear').val();
			params['acmonth']=$('#txtacmonth').val();
			
			$('#mnthyr').text('As of '+$('#txtacmonth option:selected').text()+' '+$('#txtacyear').val());
			//$('#thismonth').text('This month');
			//$('#toDATE').html('TO DATE');
			//$('#PropBudget').html('Budget');
			var lastyr=parseInt($('#txtacyear').val())-1;
			//$('#ACTUAL').html('Last Year');
			
			$('#dialog9').data('dialog').close();
			
			fnGetCumulativeIncomeStatement(params);
			
		});
		
	});
	
	function fnGetCumulativeIncomeStatement(_params){
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
			//console.log(data);
			$.each(data,function(key,val) {
				
				if(val.name == 'Total'){
					toAppend+='<tr><td colspan=6><hr /></td></tr>';
				}
				toAppend+='<tr>';
				if (val.name.indexOf(':') != -1){
					toAppend+='<td ><h5>'+val.name+'</h5></td>';
				}
				else{
					toAppend+='<td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+val.name+'</td>';
				}
				
				if (val.thismonthamount==null){
					toAppend+='<td align="right"></td>';
				}
				else{
					toAppend+='<td align="right">'+val.thismonthamount+'</td>';
				}
				
				if (val.todateamount==null){
					toAppend+='<td  align="right"></td>';
				}
				else{
					toAppend+='<td align="right">'+val.todateamount+'</td>';
				}
				
				if (val.budgetamount==null){
					toAppend+='<td  align="right"></td>';
				}
				else{
					toAppend+='<td  align="right">'+val.budgetamount+'</td>';
				}
				
				if (val.actualamount==null){
					toAppend+='<td  align="right"></td>';
				}
				else{
					toAppend+='<td  align="right">'+val.actualamount+'</td>';
				}
				
				if (val.budget==null){
					toAppend+='<td  align="right"></td>';
				}
				else{
					toAppend+='<td  align="right">'+val.budget+'</td>';
				}
				
				toAppend+='</tr>';
				if(val.name == 'Total'){
					toAppend+='<tr><td colspan=6><hr /></td></tr>';
				}
			});
			toAppend+='<tr><td colspan=6><hr /></td></tr>';
			$('#tbcumulativeincome').append(toAppend);
			
			var _params2={};
			_params2['action']='getreportfooter';
			_params2['reportname']='cumulativeincomestatement';
			fnGetReportFooter(_params2);
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});
	}
	
	function fnGetMonthNames(){
		var toAppend;
		var months=fnGetMonths();
		for(var i=1;i<months.length;i++){
			toAppend+='<option value='+i+'>'+months[i]+'</option>';
		}
		$('#txtacmonth').append(toAppend);
	}
	
	function fnGetReportFooter(_params){
		var req=$.ajax({
			url: '../classes/BLL/transactionBLL.php',
			method: 'post',
			datatype: 'json',
			data:{
				params:_params
			}
		});
		
		req.done(function(data){
			$('#preparedby').html('<hr />'+data[0].preparedby);
			$('#preposition').html(data[0].preposition);
			$('#verifiedby').html('<hr />'+data[0].verifiedby);
			$('#notedby').html('<hr />'+data[0].notedby);
			$('#notposition').html(data[0].notposition);
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});
	}
	
	function fnGetApplication(){
		var _params={};
		_params['action']='getapplication'
		var req=$.ajax({
			url: '../classes/BLL/masterBLL.php',
			method: 'post',
			datatype: 'json',
			data:{
				params:_params
			}
		});
		
		req.done(function(data){
			$('#txtacyear').val(data[0].acyear);
			$('#txtacmonth').val(data[0].acmonth);
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});
	}
</script>