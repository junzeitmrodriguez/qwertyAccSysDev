		
			<h1 class="text-light text-shadow" style="padding-top: 3.125rem">Bank <small>Reconciliation</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				
				<div class="row cells12">
					<div class="cell padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<input id="txtbankreconid" type="text" readonly>
						</div>
					</div>
					<div class="cell padding10">
						<label>Bank Code</label>
						<div class="input-control select full-size">
							<select id="txtbankcode"></select>
						</div>
					</div>
					<div class="cell padding10">
						<label>Check #</label>
						<div class="input-control text full-size">
							<input id="txtcheck" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Check Date</label>
						<div class="input-control text full-size" data-role="datepicker" data-format="mm/dd/yyyy">
							<input id="txtcheckdate" type="text" />
							<button class="button"><span class="mif-calendar"></span></button>
						</div>
					</div>
					<div class="cell padding10">
						<label>Amount</label>
						<div class="input-control text full-size">
							<input id="txtamount" type="number"/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Document</label>
						<div class="input-control select full-size">
							<select id="txtdocument"></select>
						</div>
					</div>
					<div class="cell padding10">
						<label>DocRefNo</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtdocno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>DocDate</label>
						<div class="input-control text full-size" data-role="datepicker" data-format="mm/dd/yyyy">
							<input class="isrequired" id="txttrndate" type="text" />
							<button class="button"><span class="mif-calendar"></span></button>
						</div>
					</div>
				</div>
				
				<div class="row cells12">
					<div class="cell padding10">
						<label>RecStat</label>
						<div class="input-control select full-size">
							<select id="txtRecStat">
								<option value>-</option>
								<option value="1">Deposited</option>
								<option value="2">Cancelled</option>
								<option value="3">BouncedChk</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtbankencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtbankdate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtbanktime" type="text" readonly/>
						</div>
					</div>
				</div>
				
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavebankrecon" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				
				<div class="row cells12">
					<div id="dvtbbankrecon" class="cell colspan12 padding10">
					</div>
				</div>
				
			</div>
			<script type="text/javascript">
				$(function(){
					
					$('#txtamount').val(0);
					
					IsNumericOnly('#txtamount');
					
					fnGetDocument();
					fnGetBank();
					fnGetTBankRecon();
					
					$('body').on('dblclick','#tbbankrecon tbody tr',function(){
						var bankreconid=$(this).find('td').eq(0).text();
						var bankcode=$(this).find('td').eq(1).text();
						var check=$(this).find('td').eq(2).text();
						var checkdate=$(this).find('td').eq(3).text();
						var amount=$(this).find('td').eq(4).text();
						var document=$(this).find('td').eq(5).text();
						var docno=$(this).find('td').eq(6).text();
						var trndate=$(this).find('td').eq(7).text();
						var RecStat=$(this).find('td').eq(8).text();
						var bankencoder=$(this).find('td').eq(9).text();
						var bankdate=$(this).find('td').eq(10).text();
						var banktime=$(this).find('td').eq(11).text();
						
						$('#txtbankreconid').val(bankreconid);
						$('#txtbankcode').val(bankcode);
						$('#txtcheck').val(check);
						$('#txtcheckdate').val(checkdate);
						$('#txtamount').val(amount);
						$('#txtdocument').val(document);
						$('#txtdocno').val(docno);
						$('#txttrndate').val(trndate);
						$('#txtRecStat').val(RecStat);
						$('#txtbankencoder').val(bankencoder);
						$('#txtbankdate').val(bankdate);
						$('#txtbanktime').val(banktime);
					});
					
					$('#btnsavebankrecon').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savebankrecon';
						params['BankReconId']=$('#txtbankreconid').val();
						params['Bankcode']=$('#txtbankcode').val();
						params['CheckNo']=$('#txtcheck').val();
						params['CheckDate']=$('#txtcheckdate').val();
						params['Amount']=$('#txtamount').val();
						params['iddocument']=$('#txtdocument').val();
						params['DocRefNo']=$('#txtdocno').val();
						params['DocDate']=$('#txttrndate').val();
						params['RecStat']=$('#txtRecStat').val();
						params['encoder']=$('#txtbankencoder').val();
						
						fnSaveBankRecon(params);
						
						$('#txtbankreconid').val('');
						$('#txtbankcode').val('');
						$('#txtcheck').val('');
						$('#txtcheckdate').val('');
						$('#txtamount').val(0);
						$('#txtdocument').val('');
						$('#txtdocno').val('');
						$('#txttrndate').val('');
						$('#txtRecStat').val('');
					});
					
				});
				
				function fnGetDocument(){
					var req=GetDocument();
					
					req.done(function(data){
						var toAppend='';
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.documentcode+'">'+val.documentname+'</option>';
						});
						$('#txtdocument').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnGetTBankRecon(){
					var _params={};
					_params['action']='gettbankrecon';
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
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
						var toAppend='<table id="tbbankrecon">';
						toAppend+='<thead><tr>';
						toAppend+='<th>BankReconID</th><th>Bankcode</th><th>CheckNo</th><th>CheckDate</th><th>Amount</th>';
						toAppend+='<th>id_document</th><th>DocRefNo</th><th>DocDate</th><th>RecStat</th>';
						toAppend+='<th>encoder</th><th>dateupd</th><th>timeupd</th>';
						toAppend+='</tr></thead><tbody>';
						$.each(data,function(key,val) {
							toAppend+='<tr>';
							toAppend+='<td>'+val.BankReconID+'</td><td>'+val.Bankcode+'</td><td>'+val.CheckNo+'</td><td>'+val.CheckDate+'</td><td>'+val.amount+'</td>';
							toAppend+='<td>'+val.id_document+'</td><td>'+val.DocRefNo+'</td><td>'+val.DocDate+'</td><td>'+val.RecStat+'</td>';
							toAppend+='<td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						toAppend+='</tbody>';
						
						$('#dvtbbankrecon').append(toAppend);
						$('#tbbankrecon').datatable();
						
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnSaveBankRecon(_params){
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
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
						notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						
						fnGetTBankRecon();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
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
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
			</script>