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
	</style>
	<body>
		
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
						<div class="cell colspan3 padding10">
							<label>No</label>
							<div class="input-control text full-size">
								<input id="txtdocno" type="text"/>
							</div>
						</div>
					</div>
					<div class="row cells12">
						<div class="cell colspan3 padding10">
							<button id="btnGenerateReports" class="image-button">
								Generate Report
								<span class="icon mif-checkmark"></span>
							</button>
						</div>
						<div class="cell colspan3 padding10">
							<button id="btnGenerateFile" class="image-button">
								Generate File
								<span class="icon mif-file-excel"></span>
							</button>
						</div>
					</div>
				</div>
				<span class="dialog-close-button"></span>
		</div>
		
		<div class="container">
		
			<h6 class="place-right" id="curdate">Date</h6>
			<h4 class="text-light text-shadow" style="padding-top: 3.125rem">DAVAO ACCOUNTANTS MULTI-PURPOSE COOPERATIVE   <br /><small>Transaction Register</small></h4>
			<h5 id="mnthyr"></h5>
			<br />
			<h5 id="entrytype"></h5>
			
			<div class="flex-grid">
				<div class="row cells12">
				</div>
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<hr class="thin bg-grayLighter">
						<table id="tbreports" class="datatable table hovered striped">
							<thead>
								<tr>
									
									<th>Ref. #</th>
									<th>Date</th>
									<th>GLA</th>
									<th>Location</th>
									<th>Branch</th>
									<th>Function</th>
									<th>Expense</th>
									<th>Item</th>
									<th>Asset</th>
									<th>ID</th>
									<th>Debit</th>
									<th>Credit</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan8 padding10">
					</div>
					<div class="cell colspan2 padding10">
						<h5 id="totaldeb"></h5>
					</div>
					<div class="cell colspan2 padding10">
						<h5 id="totalcred"</h5>
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
		
		IsNumericOnly('#txtacyear');
		IsNumericOnly('#txtdocno');
		
		fnGetMonthNames();
		
		fnGetApplication();
		
		$('#btnGenerateReports').click(function(){
			fnIsRequired();
			
			var params={};
			params['action']='getregisters';
			params['acyear']=$('#txtacyear').val();
			params['acmonth']=$('#txtacmonth').val();
			params['DocRefNo']=$('#txtdocno').val();
			if (params['DocRefNo']==''){
				params['DocRefNo']=0;
			}
			params['id_document']='<?php echo $_GET['c']; ?>';
			
			fnGetRegisters(params);
			
			$('#mnthyr').text($('#txtacmonth option:selected').text()+' '+$('#txtacyear').val());
			
			if(params['id_document']=='DS'){
				$('#entrytype').text('DEPOSIT SLIP');
			}
			
			if(params['id_document']=='JV'){
				$('#entrytype').text('JOURNAL VOUCHER');
			}
			
			if(params['id_document']=='OR'){
				$('#entrytype').text('OFFICIAL RECEIPT');
			}
			
			if(params['id_document']=='CV'){
				$('#entrytype').text('CHECK VOUCHER');
			}

			$('#dialog9').data('dialog').close();
		});
		
		$('#btnGenerateFile').click(function(){
			var params={};
			params['acyear']=$('#txtacyear').val();
			params['acmonth']=$('#txtacmonth').val();
			params['DocRefNo']=$('#txtdocno').val();
			if (params['DocRefNo']==''){
				params['DocRefNo']=0;
			}
			params['id_document']='<?php echo $_GET['c']; ?>';
			fnRegisterCSV(params);
		});
	})
	
	$.fn.digits = function(){ 
		return this.each(function(){ 
			$(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
		})
	}
	
	function fnTotalDebitCredit(){
		var debit=0;
		var credit=0;
		
		$('#tbreports tbody').each(function(){
			$(this).find('tr').each(function(){
				debit = debit + parseFloat($(this).find('td').eq(10).text());
				credit = credit + parseFloat($(this).find('td').eq(11).text());
			});
		});
		
		$('#totaldeb').text('Total Debit: ' +debit.toFixed(2));
		$('#totalcred').text('Total Credit: ' +credit.toFixed(2));
		
		$(".digits").digits();
		$("#totaldeb").digits();
		$("#totalcred").digits();
	}
	
	function fnGetRegisters(_params){
		var req=$.ajax({
			url: '../classes/BLL/transactionBLL.php',
			method: 'post',
			datatype: 'json',
			data:{
				params:_params
			}
		});
		
		req.done(function(data){
			var toAppend='';
			//console.log(data);
			$.each(data,function(key,val) {
				toAppend+='<tr>';
				
				toAppend+='<td>'+val.DocRefNo+'</td>';
				toAppend+='<td>'+val.DocDate+'</td>';
				toAppend+='<td>'+val.id_gla+'<br />'+val[6]+'</td>';
				toAppend+='<td>'+val.id_location+'</td>';
				toAppend+='<td>'+val.id_branch+'</td>';
				toAppend+='<td>'+val.id_function+'<br />'+val.functionname+'</td>';
				toAppend+='<td>'+val.id_expense+'<br />'+val.exname+'</td>';
				if (val.id_item==null){
					toAppend+='<td></td>';
				}
				else{
					toAppend+='<td>'+val.id_item+'</td>';
				}
				
				if (val.id_asset==null){
					toAppend+='<td></td>';
				}
				else{
					toAppend+='<td>'+val.id_asset+'</td>';
				}
				if (val.idnum==null){
					toAppend+='<td></td>';
				}
				else{
					toAppend+='<td>'+val.idnum+'<br />'+val.fullname+'</td>';
				}
				if(val.Debit==0.00){
					toAppend+='<td><p style="display:none;">'+val.Debit+'</p></td>';
				}else{
					toAppend+='<td align="right"><p class="digits">'+val.Debit+'</p></td>';
				}
				
				if(val.Credit==0.00){
					toAppend+='<td><p style="display:none;">'+val.Credit+'</p></td>';
				}else{
					toAppend+='<td align="right"><p class="digits">'+val.Credit+'</p></td>';
				}
				
				toAppend+='</tr>';
			});
			
			$('#tbreports').append(toAppend);
			
			fnTotalDebitCredit();
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
	
	function fnRegisterCSV(_params){
		/*var req=$.ajax({
			url: '../classes/BLL/registercsv.php',
			method: 'post',
			datatype: 'json',
			data:{
				params:_params
			}
		});
		
		req.done(function(data){
			console.log(data);
		});
		
		req.fail(function(request,status,error){
			notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
		});*/
		document.location.href='../classes/BLL/registercsv.php?acyear='+_params['acyear']+'&acmonth='+_params['acmonth']+'&id_document='+_params['id_document']+'&DocRefNo='+_params['DocRefNo']+'';
	}
</script>