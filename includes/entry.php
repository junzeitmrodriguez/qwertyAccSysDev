	


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
						<div class='btn-group' >
						  <button id="btnModalNew" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</button>
						</div>
						<div class='btn-group'>
						  <button id="btnupdateentry" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Update</button>
						</div>
						<div class='btn-group'>
						  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
						</div>
					</div>
				  </div>
					<h2 id="trnHeader" 
					<?php
					if(isset($_GET['c'])){
						echo 'documentcode='.$_GET['c'];
					}?>
					
					 class="text-light text-shadow">
					<?php if(isset($_GET['n'])){
						echo $_GET['n'];
					} ?>
					
					<small id="txtacmonth" monthnum></small>
					<small id="txtacyear"></small>
					<small id="txtidtbook" style="display:none;"></small>
					
					</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Transaction Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbtbook" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>No</th>
										<th>Date</th>
										<th>GLA</th>
										<th>Location</th>
										<th>Branch</th>
										<th>Function</th>
										<th>Expense</th>
										<th>Item</th>
										<th>Asset</th>
										<th>ID</th>
										<th>Qty</th>
										<th>Debit</th>
										<th>Credit</th>
										<th>FxChnRate</th>
										<th>Check No</th>
										<th>Check date</th>
										<th>Bankcode</th>
										<th>Explan01</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-lg-6"></div>
							<div class="col-lg-3">
								<p id="totaldebit" class="text-right"></p>
							</div>
							<div class="col-lg-3">
								<p id="totalcredit" class="text-left"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-12">
										<form role="form">
											<div class="form-group">
												<label>Search Seq. #</label>
												<input id="txtfindseqno" type="number" class="form-control">
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog modal-lg" style="width: 98%;height: 98%;">
						<div class="modal-content">
							<div class="modal-header">
								<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Transaction Entry</h4>
								-->
							</div>
							
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										
										<div class="row">
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Seq. #</label>
														<input id="txtisupdate" type="hidden" readonly class="form-control" value=0>
														<input id="txtdocno" readonly class="form-control">
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group date" >
														<label>Date</label>
														<input id="txttrndate" type="text" value="" readonly class="form-control">
													</div>
												</form>
											</div>
											<div class="col-md-4">
												<form role="form">
													<div class="form-group">
														<label>GLA</label>
														<select id="txtgla" class="form-control"></select>
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Location</label>
														<select id="txtlocation" class="form-control"></select>
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Branch</label>
														<select id="txtbranch" class="form-control"></select>
													</div>
												</form>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Function</label>
														<select id="txtfunction" class="form-control"></select>
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Expense</label>
														<select id="txtexpense" class="form-control"></select>
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Item</label>
														<select id="txtitem" class="form-control"></select>
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Asset</label>
														<select id="txtasset" class="form-control"></select>
													</div>
												</form>
											</div>
											<div class="col-md-4">
												<form role="form">
													<div class="form-group">
														<label>ID</label>
														<select id="txtid" class="form-control"></select>
													</div>
												</form>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Qty</label>
														<input id="txtqty" class="form-control">
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Debit</label>
														<input id="txtdebitamount" class="form-control">
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Credit</label>
														<input id="txtcreditamount" class="form-control">
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>FxChnRate</label>
														<input id="txtFxChnRate" class="form-control">
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group">
														<label>Check #</label>
														<input id="txtcheck" class="form-control">
													</div>
												</form>
											</div>
											<div class="col-md-2">
												<form role="form">
													<div class="form-group date" >
														<label>Check Date</label>
														<input id="txtcheckdate" type="text" value="" readonly class="form-control">
													</div>
												</form>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<form role="form">
													<div class="form-group">
														<label>Bank Code</label>
														<select id="txtbankcode" class="form-control"></select>
													</div>
												</form>
											</div>
											<div class="col-md-9">
												<form role="form">
													<div class="form-group">
														<label>Explanation</label>
														<input id="txtexplan01" class="form-control">
													</div>
												</form>
											</div>
										</div>
										
										<div class="panel panel-primary">
											<div class="panel-heading">
												<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Transaction Entry
											</div>
											<div class="panel-body">

												<div class="row">
													<div class="col-md-12">
														<div class="table-responsive">
															<table id="tbtemptbook" width="100%" class="table table-striped table-bordered table-hover">
																<thead>
																	<tr>
																		<th>No</th>
																		<th>Date</th>
																		<th>GLA</th>
																		<th>Location</th>
																		<th>Branch</th>
																		<th>Function</th>
																		<th>Expense</th>
																		<th>Item</th>
																		<th>Asset</th>
																		<th>ID</th>
																		<th>Qty</th>
																		<th>Debit</th>
																		<th>Credit</th>
																		<th>FXRate</th>
																		<th>Check #</th>
																		<th>Check<br/>Date</th>
																		<th>Bank<br/>Code</th>
																		<th>Explanation</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody></tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-4"></div>
													<div class="col-md-4">
														<p id="temptotaldebit" class="text-right"></p>
													</div>
													<div class="col-md-4">
														<p id="temptotalcredit" class="text-right"></p>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>	
								<div class="row">
									<div class="col-lg-12">
										<div class="btn-group pull-right">
											<button id="btninsertentrytotemp" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Insert</button>
											<button id="btnclearentrytotemp" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Clear</button>
											<button id="btnsaveentry" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Save</button>
											<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Close</button>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
			</div>
		</div>
	</div>

	<script type="text/javascript">
				$(function(){
					
					var TBookDataTable;
					var tempidnum;
					var updateexisting;
					updateexisting=false;
					
					//$('#myGlobalModal').modal('show')
					
					var ornew=false;
					$('#myModal').on('shown.bs.modal', function (e) {
						var docno = $('#txtdocno').val();
						//alert(ornew)
						if ($('#trnHeader').attr('documentcode')=='OR'){
							$('#txtdocno').prop('readonly', false);
							if(docno=='' && ornew==false){
								$('#myModal').modal('hide')
								alert('NO RECORD TO UPDATE!')
								$('#txtdocno').prop('readonly', true);
							}
							else{
								$('#txtdocno').prop('readonly', false);
								ornew=false;
							}
						}
						else{
							$('#txtdocno').prop('readonly', true);
						}
						if(docno==''){
							if ($('#trnHeader').attr('documentcode')=='OR'){
								$('#txtdocno').removeClass('readonly');
							}
							else{
								$('#myModal').modal('hide')
								alert('NO RECORD TO UPDATE!')
							}
						}
						else{

						}
					});
					
					$('#myModal3').on('hidden.bs.modal', function (e) {
						$('#txtfindseqno').val('');
					})
					$('#myModal').on('hidden.bs.modal', function (e) {
						 $('#txtdocno').val('')
						fnClear();
						$('#btnclearentrytotemp').click();
					})
					
					 $("#txttrndate").datetimepicker({
						format: "mm/dd/yyyy",
						autoclose: true,
						todayBtn: true,
						todayHighlight: true,
						minView: 3
					});
					$("#txtcheckdate").datetimepicker({
						format: "mm/dd/yyyy",
						autoclose: true,
						todayBtn: true,
						todayHighlight: true,
						minView: 3
					});
					
					$('#txtdebitamount').val(0);
					$('#txtcreditamount').val(0);
					
					if(typeof $('#trnHeader').attr('documentcode')=='undefined'){
						//alert(1);
					}
					
					fnGetApplication();
					fnGetCOA();
					fnGetBank();
					
					IsNumericOnly('#txtdebitamount');
					IsNumericOnly('#txtcreditamount');
					IsNumericOnly('#txtqty');
					IsNumericOnly('#txtFxChnRate');
					
					$('#txtdebitamount').keyup(function(){
						if($('#txtdebitamount').val()>0){
							$('#txtcreditamount').hide();
						}
						else{
							$('#txtcreditamount').show();
						}
						$('#txtcreditamount').val(0);
					});
					
					$('#txtcreditamount').keyup(function(){
						if($('#txtcreditamount').val()>0){
							$('#txtdebitamount').hide();
						}
						else{
							$('#txtdebitamount').show();
						}
						$('#txtdebitamount').val(0);
					});
					
					$('#btninsertentrytotemp').click(function(){
						fnIsRequired();
						
						if(parseFloat($('#txtdebitamount').val()).toFixed(2)==0 
						&& parseFloat($('#txtcreditamount').val()).toFixed(2)==0){
							alert('Error: Debit or Credit value is not valid.');
							return false;
						}
						
						if($.trim($('#txtgla').val()).length==0){
							$('#txtgla').focus();
						}
						else{
							var toAppend='';
							toAppend+='<tr>';
							toAppend+='<td>'+$('#txtdocno').val()+'</td>';
							toAppend+='<td>'+$('#txttrndate').val()+'</td>';
							toAppend+='<td>'+$('#txtgla').val()+'</td>';
							toAppend+='<td>'+$('#txtlocation').val()+'</td>';
							toAppend+='<td>'+$('#txtbranch').val()+'</td>';
							toAppend+='<td>'+$('#txtfunction').val()+'</td>';
							toAppend+='<td>'+$('#txtexpense').val()+'</td>';
							toAppend+='<td>'+$('#txtitem').val()+'</td>';
							toAppend+='<td>'+$('#txtasset').val()+'</td>';
							toAppend+='<td>'+$('#txtid').val()+'</td>';
							toAppend+='<td>'+$('#txtqty').val()+'</td>';
							toAppend+='<td>'+parseFloat($('#txtdebitamount').val()).toFixed(2)+'</td>';
							toAppend+='<td>'+parseFloat($('#txtcreditamount').val()).toFixed(2)+'</td>';
							toAppend+='<td>'+$('#txtFxChnRate').val()+'</td>';
							toAppend+='<td>'+$('#txtcheck').val()+'</td>';
							toAppend+='<td>'+$('#txtcheckdate').val()+'</td>';
							toAppend+='<td>'+$('#txtbankcode').val()+'</td>';
							toAppend+='<td>'+$('#txtexplan01').val()+'</td>';
							toAppend+='<td><a class="rtemp" href="#rtemp"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';
							toAppend+='</tr>';
							
							tempidnum=$('#txtid').val();
							
							$('#txtgla').val('');
							//$('#txttrndate').val('');
							$('#txtdebitamount').val(0);
							$('#txtcreditamount').val(0);
							$('#txtdebitamount').show();
							$('#txtcreditamount').show();
							fnClear();
							//$('#txtcheck').val('');
							//$('#txtcheckdate').val('');
							//$('#txtexplan01').val('')
							
							$('#tbtemptbook tbody').append(toAppend);
							$('#txtgla').focus();
							
							fnTotalTempDebitCredit();
							
							$('#myTabs a[href="#profile"]').tab('show');
						}
					});
					
					$('body').on('click','#tbtemptbook tbody tr td .rtemp', function(){
							$(this).closest('tr').remove();
							fnTotalTempDebitCredit();
						});
					
					$('#btnclearentrytotemp').click(function(){
						updateexisting=false;
						$('#txtisupdate').val(0);
						$('#tbtemptbook tbody tr').remove();
						fnTotalTempDebitCredit();
					});
					
					$('#txtfindseqno').change(function(){
						//fnGetTBoook();
						fnGetTBoook2(1);
						//fnTotalDebitCredit();
					});
					
					$('#txtgla').change(function(){
						fnGetCOAByGLA(tempidnum);
					});
					
					$('#btnsaveentry').click(function(){
						
						var debit=0;
						var credit=0;
						
						$('#tbtemptbook tbody').each(function(){
							$(this).find('tr').each(function(){
								debit = debit + parseFloat($(this).find('td').eq(11).text());
								credit = credit + parseFloat($(this).find('td').eq(12).text());
							});
						});
						if (parseFloat(debit).toFixed(2) != parseFloat(credit).toFixed(2)){
							alert('Error: Debit or Credit value is not valid\n\nDebit: ' + debit + '\nCredit: ' + credit);
						}
						else{
							
							if(updateexisting==true || $('#txtisupdate').val() == 1){
								//alert(updateexisting);
								$('#tbtemptbook tbody').each(function(){
									$(this).find('tr').each(function(){
										var params={};
										params['action']='deleteentry';
										params['acyear']=$('#txtacyear').text();
										params['acmonth']=$('#txtacmonth').attr('monthnum');
										params['document']=$('#trnHeader').attr('documentcode');
										params['docno']=$(this).find('td').eq(0).text();
										//console.log(params);
										fnDeleteEntry(params);
									});
								});
								updateexisting=false;
								$('#txtisupdate').val(0)
								//alert(updateexisting);
							}
							
							if($('#tbtemptbook tbody tr').length>0){
								var ret=confirm("Are you sure you want to save this entry?");
								if(ret==true){
									$('#tbtemptbook tbody').each(function(){
										$(this).find('tr').each(function(){
											var params={};
											params['action']='saveentry';
											params['acyear']=$('#txtacyear').text();
											params['acmonth']=$('#txtacmonth').attr('monthnum');
											params['document']=$('#trnHeader').attr('documentcode');
											params['docno']=$(this).find('td').eq(0).text();
											params['date']=$(this).find('td').eq(1).text();
											params['gla']=$(this).find('td').eq(2).text();
											params['location']=$(this).find('td').eq(3).text();
											params['branch']=$(this).find('td').eq(4).text();
											params['function']=$(this).find('td').eq(5).text();
											params['expense']=$(this).find('td').eq(6).text();
											params['item']=$(this).find('td').eq(7).text();
											params['asset']=$(this).find('td').eq(8).text();
											params['id']=$(this).find('td').eq(9).text();
											params['qty']=$(this).find('td').eq(10).text();
											if($(this).find('td').eq(11).text()==0 && $(this).find('td').eq(12).text()>0){
												params['amount']=parseFloat($(this).find('td').eq(12).text())*-1;
											}
											if($(this).find('td').eq(11).text()>=0 && $(this).find('td').eq(12).text()==0){
												params['amount']=parseFloat($(this).find('td').eq(11).text());
											}
											params['FxChnRate']=$(this).find('td').eq(13).text();
											params['check']=$(this).find('td').eq(14).text();
											params['checkdate']=$(this).find('td').eq(15).text();
											params['bankcode']=$(this).find('td').eq(16).text();
											params['explan01']=$(this).find('td').eq(17).text();
											
											fnSaveEntry(params);
											
										});
										
										$('#txtdocno').focus();
										
										$('#txttrndate').val('');
										$('#txtFxChnRate').val('');
										$('#txtcheck').val('');
										$('#txtcheckdate').val('');
										$('#txtbankcode').val('');
										$('#txtexplan01').val('');
										
										//fnGetTBoook();
										fnGetTBoook2();
										
										fnGetSeries()
										
										tempidnum='';
										fnClear();
										
										$('#tbtemptbook tbody tr').remove();
										fnTotalTempDebitCredit();
									});
								}
							}
						}
						
					});
					
					$('body').on('dblclick','#tbtbook tbody tr',function(){
						var id_tbook=$(this).find('td').eq(0).text();
						var trndate=$(this).find('td').eq(2).text();
						var gla=$(this).find('td').eq(3).text();
						var location=$(this).find('td').eq(4).text();
						var branch=$(this).find('td').eq(5).text();
						var txfunction=$(this).find('td').eq(6).text();
						var expense=$(this).find('td').eq(7).text();
						var item=$(this).find('td').eq(8).text();
						var asset=$(this).find('td').eq(9).text();
						var id=$(this).find('td').eq(10).text();
						
						$('#txtidtbook').text(id_tbook);
						$('#txttrndate').val(trndate);
						$('#txtgla').val(gla);
						$('#txtlocation').val(location);
						$('#txtbranch').val(branch);
						$('#txtfunction').val(txfunction);
						$('#txtexpense').val(expense);
						$('#txtitem').val(item);
						$('#txtasset').val(asset);
						$('#txtid').val(id);
						
						//alert($('#txtidtbook').text());
					});
					
					$('#btnModalNew').click(function(){
						ornew=true;
						$('#myTabs a[href="#home"]').tab('show');
						$('#btnclearentrytotemp').click();
						fnClear();
						fnGetSeries()
					});
					
				});
				
				function fnGetSeries(){
					if($('#trnHeader').attr('documentcode')=='DS'){
						fnGetDSSeries();
					}
					
					if($('#trnHeader').attr('documentcode')=='JV'){
						fnGetJVSeries();
					}
					
					if($('#trnHeader').attr('documentcode')=='CV'){
						fnGetCVSeries();
					}
				}
				
				function fnClear(){
					$('#txtlocation option').remove();
					$('#txtbranch option').remove();
					$('#txtfunction option').remove();
					$('#txtexpense option').remove();
					$('#txtitem option').remove();
					$('#txtasset option').remove();
					$('#txtid option').remove();
					$('#txtqty').val('');
				}
				
				function fnTotalTempDebitCredit(){
					var debit=0;
					var credit=0;
					
					$('#tbtemptbook tbody').each(function(){
						$(this).find('tr').each(function(){
							debit = debit + parseFloat($(this).find('td').eq(11).text());
							credit = credit + parseFloat($(this).find('td').eq(12).text());
						});
					});
					
					$('#temptotaldebit').html('<strong>Total Debit: ' +debit.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</strong>');
					$('#temptotalcredit').html('<strong>Total Credit: ' +credit.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</strong>');
				}
				
				function fnTotalDebitCredit(){
					var debit=0;
					var credit=0;
					
					/*$('#tbtbook tbody').each(function(){
						$(this).find('tr').each(function(){
							debit = debit + parseFloat($(this).find('td').eq(12).text());
							credit = credit + parseFloat($(this).find('td').eq(13).text());
						});
					});
					*/
					TBookDataTable.rows().every(function ( rowIdx, tableLoop, rowLoop ){
							var data=this.data();
							debit = debit + parseFloat(data.Debit);
							credit = credit + parseFloat(data.Credit);
					});
					
					$('#totaldebit').html('<strong>Total Debit: ' +debit.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</strong>');
					$('#totalcredit').html('<strong>Total Credit: ' +credit.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</strong>');
				}
				
				function fnGetDSSeries(){
					var _params={};
					_params['action']='getdsseries';
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
						method: 'post',
						datatype: 'json',
						async:false,
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						$('#txtdocno').val(data[0].DSSeries);
						$('#txtdocno').change(function(){
							var docno=parseInt($('#txtdocno').val());
							var docseries=parseInt(data[0].DSSeries);
							if(docno>docseries){
								$('#txtdocno').val(docseries);
							}
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetJVSeries(){
					var _params={};
					_params['action']='getjvseries';
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
						method: 'post',
						datatype: 'json',
						async:false,
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						$('#txtdocno').val(data[0].JVseries);
						$('#txtdocno').change(function(){
							var docno=parseInt($('#txtdocno').val());
							var docseries=parseInt(data[0].JVseries);
							if(docno>docseries){
								$('#txtdocno').val(docseries);
							}
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetCVSeries(){
					var _params={};
					_params['action']='getcvseries';
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
						method: 'post',
						datatype: 'json',
						async:false,
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						$('#txtdocno').val(data[0].CVSeries);
						$('#txtdocno').change(function(){
							var docno=parseInt($('#txtdocno').val());
							var docseries=parseInt(data[0].CVSeries);
							if(docno>docseries){
								$('#txtdocno').val(docseries);
							}
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetExpense(){
					var _params={};
					_params['action']='getexpense';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						var toAppend='';
						//toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.expensecode+'">'+val.expensecode+' - ' +val.name+'</option>';
						});
						
						$('#txtexpense').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetFunction(cat){
					var _params={};
					_params['action']='getfunctionbycat';
					_params['cat']=cat;
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						var toAppend='';
						if(data.length == 0){
							toAppend+='<option value="'+cat+'">'+cat+'</option>';
						}
						else{
							$.each(data,function(key,val) {
							toAppend+='<option value="'+val.idfunction+'">'+val.idfunction+' - '+val.functionname+' - '+val.cat+'</option>';
							});
						}
						$('#txtfunction').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetBranches(){
					var _params={};
					_params['action']='getbranches';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						var toAppend='';
						//toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.idbranch+'">'+val.branchname+'</option>';
						});
						
						$('#txtbranch').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetLocation(){
					var _params={};
					_params['action']='getlocation'	
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						var toAppend='';
						//toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.idlocation+'">'+val.name+'</option>';
						});
						
						$('#txtlocation').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetIDMas(tempidnum){
					var _params={};
					_params['action']='getidmas';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						var toAppend='';
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.idnum+'">'+val.idnum+' - '+val.first_name+' ' +val.middle_name+' ' +val.family_name+'</option>';
						});
						
						$('#txtid').append(toAppend);
						$('#txtid').val(tempidnum);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetApplication(){
					var _params={};
					_params['action']='getapplication';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						$('#txtacyear').text(data[0].acyear);
						$('#txtacmonth').attr('monthnum',data[0].acmonth);
						$('#txtacmonth').text(fnGetMonths()[parseInt(data[0].acmonth)]);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetCOAByGLA(tempidnum){
					var _params={};
					_params['action']='getcoabygla';
					_params['idgla']=$('#txtgla').val();
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						
						fnClear();
						
						$('#txtitem').removeClass('isrequired');
						$('#txtasset').removeClass('isrequired');
						$('#txtid').removeClass('isrequired');
						$('#txtqty').removeClass('isrequired');
						
						if(data.length>0){
							
							$('#txtlocation').append('<option value="'+data[0].idlocation+'">'+data[0].idlocation+'</option>');
							$('#txtbranch').append('<option value="'+data[0].idbranch+'">'+data[0].idbranch+'</option>');
							//$('#txtexpense').append('<option value="'+data[0].idexpense+'">'+data[0].idexpense+'</option>');
							if(data[0].idexpense=='*ALL'){
								fnGetExpense();
							}
							else{
								$('#txtexpense').append('<option value="'+data[0].idexpense+'">'+data[0].idexpense+'</option>');
							}
							
							fnGetFunction(data[0].idfunction);
							
							if(data[0].lgitem==1){
								$('#txtitem').addClass('isrequired');
								fnGetItem();
							}
							if(data[0].lgasset==1){
								$('#txtasset').addClass('isrequired');
								fnGetAsset();
							}
							if(data[0].lgidnum==1){
								$('#txtid').addClass('isrequired');
								fnGetIDMas(tempidnum);
							}
							if(data[0].lgQuanty==1){
								$('#txtqty').addClass('isrequired');
							}
						}
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetCOA(){
					var _params={};
					_params['action']='getcoa';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						var toAppend='';
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.idgla+'">'+val.idgla+' - '+val.name+'</option>';
						});
						
						$('#txtgla').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetItem(){
					var _params={};
					_params['action']='getitem';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						var toAppend='';
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.iditem+'">'+val.iditem+' - '+val.name+'</option>';
						});
						
						$('#txtitem').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetAsset(){
					var _params={};
					_params['action']='getasset';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						var toAppend='';
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.idasset+'">'+val.assetname+'</option>';
						});
						
						$('#txtasset').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetBank(){
					var _params={};
					_params['action']='getbank';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						var toAppend='';
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.bankcode+'">'+val.bankcode+'</option>';
						});
						
						$('#txtbankcode').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function UpdateTransactionEntry(){
					$('#btnupdateentry').click(function(){
						ornew=false;
						//$('#txtdocno').val($('#txtfindseqno').val());
						//$('#txtfindseqno').val('')
						
						var cntex=0;
						$('#tbtemptbook tbody tr').remove();
						
						var toAppend='';
						TBookDataTable.rows().every(function ( rowIdx, tableLoop, rowLoop ){
							var data=this.data();
							//console.log(data.id_tbook);
							
							$('#txtdocno').val(data.DocRefNo);
							
							toAppend+='<tr>';
							toAppend+='<td>'+data.DocRefNo+'</td>';
							toAppend+='<td>'+data.DocDate+'</td>';
							toAppend+='<td>'+data.id_gla+'</td>';
							toAppend+='<td>'+data.id_location+'</td>';
							toAppend+='<td>'+data.id_branch+'</td>';
							toAppend+='<td>'+data.id_function+'</td>';
							toAppend+='<td>'+data.id_expense+'</td>';
							toAppend+='<td>'+data.id_item+'</td>';
							toAppend+='<td>'+data.id_asset+'</td>';
							toAppend+='<td>'+data.idnum+'</td>';
							toAppend+='<td>'+data.quanty+'</td>';
							toAppend+='<td>'+data.Debit+'</td>';
							toAppend+='<td>'+data.Credit+'</td>';
							toAppend+='<td>'+data.FxChnRate+'</td>';
							toAppend+='<td>'+data.CheckNo+'</td>';
							toAppend+='<td>'+data.CheckDate+'</td>';
							toAppend+='<td>'+data.Bankcode+'</td>';
							toAppend+='<td>'+data.explan01+'</td>';
							toAppend+='<td><a class="rtemp" href="#rtemp"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';
							toAppend+='</tr>';
							
							cntex=cntex+1;
						
						});
						
						$('#tbtemptbook tbody').append(toAppend);
						
						fnTotalTempDebitCredit();
												
						if(cntex>=0){
							updateexisting=true;
							$('#txtisupdate').val(1);
						}
						else{
							updateexisting=false;
							$('#txtisupdate').val(0);
						}
						
						
						$('#myTabs a[href="#profile"]').tab('show');
						
					});
				}
				
				function fnGetTBoook2(flag=0){
					var _params={};
					_params['action']='gettbook';
					if (flag==0){
						_params['docno']=$('#txtdocno').val();
					}
					else if(flag==1){
						_params['docno']=$('#txtfindseqno').val();
					}
					_params['documentcode']=$('#trnHeader').attr('documentcode');
					_params['acyear']=$('#txtacyear').text();					
					TBookDataTable=$('#tbtbook').DataTable();
					TBookDataTable.destroy();
					TBookDataTable=$('#tbtbook').DataTable({
						responsive: true,
						processing: true,
						ajax: {
							type: 'post',
							//contentType: 'application/json; charset=utf-8',
							url: 'classes/BLL/transactionBLL.php',
							data: {
								'params':_params
							},
							dataSrc: function (json) {
								//console.log(json);
								return json;
							}
						},
						initComplete: function( settings, json ) {
							var debit=0;
							var credit=0;
							$.each(json, function(i, data) {
								debit = debit + parseFloat(data.Debit);
								credit = credit + parseFloat(data.Credit);
							})
							$('#totaldebit').html('<strong>Total Debit: ' +debit.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</strong>');
							$('#totalcredit').html('<strong>Total Credit: ' +credit.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</strong>');
						},
						columns:[
							{ data: "id_tbook" },
							{ data: "DocRefNo" },
							{ data: "DocDate" },
							{ data: "id_gla" },
							{ data: "id_location" },
							{ data: "id_branch" },
							{ data: "id_function" },
							{ data: "id_expense" },
							{ data: "id_item" },
							{ data: "id_asset" },
							{ data: "idnum" },
							{ data: "quanty" },
							{ data: "Debit" },
							{ data: "Credit" },
							{ data: "FxChnRate" },
							{ data: "CheckNo" },
							{ data: "CheckDate" },
							{ data: "Bankcode" },
							{ data: "explan01" }
						]
					});
					UpdateTransactionEntry();
					//fnTotalDebitCredit();
				}
				
				function fnGetTBoook(){
					$('#tbtbook tbody tr').remove();
					var _params={};
					_params['action']='gettbook';
					_params['docno']=$('#txtdocno').val();
					_params['documentcode']=$('#trnHeader').attr('documentcode');
					_params['acyear']=$('#txtacyear').text();
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						$('#btnclearentrytotemp').click();
						var toAppend='';
						$.each(data,function(key,val) {
							toAppend+='<tr>';
							toAppend+='<td>'+val.id_tbook+'</td>';
							toAppend+='<td>'+val.DocRefNo+'</td>';
							toAppend+='<td>'+val.DocDate+'</td>';
							toAppend+='<td>'+val.id_gla+'</td>';
							toAppend+='<td>'+val.id_location+'</td>';
							toAppend+='<td>'+val.id_branch+'</td>';
							toAppend+='<td>'+val.id_function+'</td>';
							toAppend+='<td>'+val.id_expense+'</td>';
							toAppend+='<td>'+val.id_item+'</td>';
							toAppend+='<td>'+val.id_asset+'</td>';
							toAppend+='<td>'+val.idnum+'</td>';
							toAppend+='<td>'+val.quanty+'</td>';
							toAppend+='<td>'+val.Debit+'</td>';
							toAppend+='<td>'+val.Credit+'</td>';
							toAppend+='<td>'+val.FxChnRate+'</td>';
							toAppend+='<td>'+val.CheckNo+'</td>';
							toAppend+='<td>'+val.CheckDate+'</td>';
							toAppend+='<td>'+val.Bankcode+'</td>';
							toAppend+='<td>'+val.explan01+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbtbook tbody').append(toAppend);
						
						//fnTotalDebitCredit();
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnSaveEntry(_params){	
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
						method: 'post',
						datatype: 'json',
						async:false,
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						//notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						alert(data.Message)
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
						//fnGetTBoook();
					});
				}
				
				function fnDeleteEntry(_params){	
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
						method: 'post',
						datatype: 'json',
						async:false,
						data:{
							params:_params
						},
						beforeSend:function(){
							//dialog('.dialogpreloader');
						},
						complete:function(){
							//dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						//notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						//alert(data.Message);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText);
						//fnGetTBoook();
					});
				}
				
			</script>