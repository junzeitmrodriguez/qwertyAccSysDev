<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">		
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Post Dated <small>Checks</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				
				<div class="row cells12">
					<div class="cell padding10" style="display:none;">
						<label>PDC Id</label>
						<div class="input-control text full-size">
							<input class="" id="txtpdcid" type="text" readonly>
						</div>
					</div>
					<div class="cell padding10">
						<label>Document Code</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtdocumentcode" type="text" value="PDC" readonly>
						</div>
					</div>
					<div class="cell padding10">
						<label>DocRefNo</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtdocno" type="text"/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<select id="txtid"></select>
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
						<label>Bank Code</label>
						<div class="input-control select full-size">
							<select id="txtbankcode"></select>
						</div>
					</div>
					<div class="cell padding10">
						<label>Amount</label>
						<div class="input-control text full-size">
							<input id="txtamount" type="text"/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Loan Type</label>
						<div class="input-control text full-size">
							<select id="txtloantype"></select>
						</div>
					</div>
				</div>
				
				<div class="row cells12">
					<div class="cell colspan5 padding10">
						<label>Remarks</label>
						<div class="input-control text full-size">
							<input id="txtremarks" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>RecStat</label>
						<div class="input-control select full-size">
							<select id="txtRecStat">
								<option value>-</option>
								<option value="1">Deposited</option>
								<option value="2">Cancelled</option>
								<option value="3">OnHand</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtpdencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtpddate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtpdtime" type="text" readonly/>
						</div>
					</div>
				</div>
				
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavepdcheck" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				
			</div>
			
			<br />
			
			<div class="grid">
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<table id="tbpdcheck" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>PDC ID</th>
									<th>Document Code</th>
									<th>DocRefNo</th>
									<th>ID</th>
									<th>Check #</th>
									<th>Check Date</th>
									<th>Bank Code</th>
									<th>Amount</th>
									<th>LoanType</th>
									<th>Remarks</th>
									<th>RecStat</th>
									<th>Encoder</th>
									<th>Date</th>
									<th>Time</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
</div>			
			<script type="text/javascript">
				$(function(){
					IsNumericOnly('#txtamount');
					
					fnGetPDChecks();
					
					fnGetBank();
					fnGetIDMas();
					fnGetLoanTypes();
					
					$('body').on('dblclick','#tbpdcheck tbody tr',function(){
						var idpdcheck=$(this).find('td').eq(0).text();
						var id_document=$(this).find('td').eq(1).text();
						var DocRefNo=$(this).find('td').eq(2).text();
						var idnum=$(this).find('td').eq(3).text();
						var CheckNo=$(this).find('td').eq(4).text();
						var CheckDate=$(this).find('td').eq(5).text();
						var Bankcode=$(this).find('td').eq(6).text();
						var amount=$(this).find('td').eq(7).text();
						var loantype=$(this).find('td').eq(8).text();
						var remarks=$(this).find('td').eq(9).text();
						var RecStat=$(this).find('td').eq(10).text();
						var encoder=$(this).find('td').eq(11).text();
						var dateUpd=$(this).find('td').eq(12).text();
						var timeUpd=$(this).find('td').eq(13).text();
						
						$('#txtpdcid').val(idpdcheck);
						$('#txtdocumentcode').val(id_document);
						$('#txtdocno').val(DocRefNo);
						$('#txtid').val(idnum);
						$('#txtcheck').val(CheckNo);
						$('#txtcheckdate').val(CheckDate);
						$('#txtbankcode').val(Bankcode);
						$('#txtamount').val(amount);
						$('#txtloantype').val(loantype);
						$('#txtremarks').val(remarks);
						$('#txtRecStat').val(RecStat);
						$('#txtpdencoder').val(encoder);
						$('#txtpddate').val(dateUpd);
						$('#txtpdtime').val(timeUpd);
					});
					
					$('#btnsavepdcheck').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savepdcheck';
						params['idpdcheck']=$('#txtpdcid').val();
						params['idnum']=$('#txtid').val();
						params['Bankcode']=$('#txtbankcode').val();
						params['CheckNo']=$('#txtcheck').val();
						params['CheckDate']=$('#txtcheckdate').val();
						params['amount']=$('#txtamount').val();
						params['loantype']=$('#txtloantype').val();
						params['remarks']=$('#txtremarks').val();
						params['id_document']=$('#txtdocumentcode').val();
						params['DocRefNo']=$('#txtdocno').val();
						params['RecStat']=$('#txtRecStat').val();
						params['encoder']=$('#txtpdencoder').val();
						
						fnSavePDCheck(params);
						
						$('#txtpdcid').val('');
						$('#txtbankcode').val('');
						$('#txtcheck').val('');
						$('#txtcheckdate').val('');
						$('#txtamount').val(0);
						$('#txtdocument').val('');
						$('#txtdocno').val('');
						$('#txtRecStat').val('');
						$('#txtremarks').val('');
						$('#txtloantype option:selected').text('-');
					});
				});
				
				function fnGetLoanTypes(){
					var req=GetLoans();
					
					req.done(function(data){
						var toAppend='';
						toAppend='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.loantype+'">'+val.loanname+'</option>';
						});
						
						$('#txtloantype').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnSavePDCheck(_params){
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
						//notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						alert(data.Message);
						location.reload();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnGetIDMas(){
					var _params={};
					_params['action']='getidmas';
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
							toAppend+='<option value="'+val.idnum+'">'+val.idnum+' - '+val.first_name+' ' +val.middle_name+' ' +val.family_name+'</option>';
						});
						
						$('#txtid').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnGetPDChecks(){
					$('#tbpdcheck tbody tr').remove();
					var _params={};
					_params['action']='getpdchecks';
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
						var toAppend='';
						$.each(data,function(key,val) {
							toAppend+='<tr>';
							toAppend+='<td>'+val.id_pdcheck+'</td>';
							toAppend+='<td>'+val.id_document+'</td>';
							toAppend+='<td>'+val.DocRefNo+'</td>';
							toAppend+='<td>'+val.idnum+'</td>';
							toAppend+='<td>'+val.CheckNo+'</td>';
							toAppend+='<td>'+val.CheckDate+'</td>';
							toAppend+='<td>'+val.Bankcode+'</td>';
							toAppend+='<td>'+val.amount+'</td>';
							toAppend+='<td>'+val.LoanType+'</td>';
							toAppend+='<td>'+val.Remarks+'</td>';
							toAppend+='<td>'+val.RecStat+'</td>';
							toAppend+='<td>'+val.encoder+'</td>';
							toAppend+='<td>'+val.dateUpd+'</td>';
							toAppend+='<td>'+val.timeUpd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbpdcheck tbody').append(toAppend);
						$('#tbpdcheck').datatable();
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
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
			</script>