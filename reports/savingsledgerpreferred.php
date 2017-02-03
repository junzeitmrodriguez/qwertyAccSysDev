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
		table tr td,table tr th{
			
			padding:5px;
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
						<div class="cell colspan8 padding10">
							<label>ID Num</label>
							<div class="input-control select full-size">
								<select id="txtid"></select>
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
			<h4 class="text-light text-shadow" style="padding-top: 3.125rem">DAVAO ACCOUNTANTS MULTI-PURPOSE COOPERATIVE <br />
			<small>Capital Share Ledger - Preferred </small><br /><small>Beginning - Current</small></h4>
			<hr class="thin bg-grayLighter">
			<h4 id="borrowersname"></h4>
			<div class="grid">
				<div id="tbresults" class="row cells12">
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

		fnGetApplication();
		
		$('#btnGenerateReports').click(function(){
			$('#dialog9').data('dialog').close();
			var _params={};
			_params['acyear']=$('#txtacyear').val();
			_params['idnum']=$('#txtid').val();
			fnGetSavingsLedgerPreferred(_params);
		});
	});
	
	function fnGetSavingsLedgerPreferred(_params){
		$('#borrowersname').text('');
		var req=$.ajax({
			url: '../classes/BLL/SavingsLedger_Preferred.php',
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
			$('#tbresults').html(data);
			
			$('#borrowersname').text("Member's Name: "+$('#txtid option:selected').attr('name'));
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
			
			fnGetIDMas();
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});
	}
	
	function fnGetIDMas(){
		var _params={};
		_params['action']='getidmasbycat';
		_params['cat']='Preferred';
		var req=$.ajax({
			url: '../classes/BLL/masterBLL.php',
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
			toAppend+='<option value>-</option>';
			$.each(data,function(key,val) {
				toAppend+='<option name="' +val.family_name+', '+val.first_name+' ' +val.middle_name+' ' +val.family_name+'" value="'+val.idnum+'">' +val.family_name+', '+val.first_name+' ' +val.middle_name+'</option>';
			});
			
			$('#txtid').append(toAppend);
			
			$('#dialog9').data('dialog').open();
			$('#dialog9').css('top','100');
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});
	}
</script>