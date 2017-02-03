<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">			
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Loan <small>Application</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Record ID</label>
						<div class="input-control text full-size">
							<input id="txtrecid" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>CVRefNo</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtcvrefno" type="text"/>
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
					<div class="cell colspan2 padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<select id="txtid"></select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Loan Type</label>
						<div class="input-control select full-size">
							<select id="txtloantype"></select>
						</div>
					</div>
					
				</div>
				<div class="row cells12">
					<div class="cell padding10">
						<label>Amount</label>
						<div class="input-control text full-size">
							<input id="txtamount" type="number"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Interest Rate</label>
						<div class="input-control text full-size">
							<input id="txtintrate" type="number"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Term</label>
						<div class="input-control text full-size">
							<input id="txtterm" type="number"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>NoApploans</label>
						<div class="input-control text full-size">
							<input id="txtNoApploans" type="number"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>RecStat</label>
						<div class="input-control select full-size">
							<select id="txtRecStat">
								<option value>-</option>
								<option value="1">Approved</option>
								<option value="2">Disapproved</option>
								<option value="3">Cancelled</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtloanencoder" type="text" readonly/>
						</div>
					</div>
					<!-- <div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtloandate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtloantime" type="text" readonly/>
						</div>
					</div> -->
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsaveloanapp" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12">
						<hr class="thin bg-grayLighter">
						<table id="tbloanapplication" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>id_document</th>
									<th>CVRefNo</th>
									<th>DocRefNo</th>
									<th>DocDate</th>
									<th>idnum</th>
									<th>LoanType</th>
									<th>Amount</th>
									<th>Interest Rate</th>
									<th>Term</th>
									<th>NoApploans</th>
									<th>RecStat</th>
									<th>encoder</th>
									<th>Date Updated</th>
									<th>Time Updated</th>
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
					
					fnGetTLoan();
					fnGetLoanTypes();
					fnGetIDMas();
					
					IsNumericOnly($('#txtamount'));
					IsNumericOnly($('#txtterm'));
					IsNumericOnly($('#txtNoApploans'));
					
					$('body').on('dblclick','#tbloanapplication tbody tr',function(){
						var recid=$(this).find('td').eq(0).text();
						var CVRefNo=$(this).find('td').eq(2).text();
						var DocRefNo=$(this).find('td').eq(3).text();
						var DocDate=$(this).find('td').eq(4).text();
						var idnum=$(this).find('td').eq(5).text();
						var LoanType=$(this).find('td').eq(6).text();
						var Amount=$(this).find('td').eq(7).text();
						var IntRate=$(this).find('td').eq(8).text();
						var Term=$(this).find('td').eq(9).text();
						var NoApploans=$(this).find('td').eq(10).text();
						var RecStat=$(this).find('td').eq(11).text();
						
						$('#txtrecid').val(recid);
						$('#txtcvrefno').val(CVRefNo);
						$('#txtdocno').val(DocRefNo);
						$('#txttrndate').val(DocDate);
						$('#txtid').val(idnum);
						$('#txtloantype').val(LoanType);
						$('#txtamount').val(Amount);
						$('#txtintrate').val(IntRate);
						$('#txtterm').val(Term);
						$('#txtNoApploans').val(NoApploans);
						$('#txtRecStat').val(RecStat);
						
					});	
					
					$('#btnsaveloanapp').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='saveloanapp';
						params['recordid']=$('#txtrecid').val();
						params['CVRefNo']=$('#txtcvrefno').val();
						params['DocRefNo']=$('#txtdocno').val();
						params['DocDate']=$('#txttrndate').val();
						params['idnum']=$('#txtid').val();
						params['LoanType']=$('#txtloantype').val();
						params['Amount']=$('#txtamount').val();
						params['IntRate']=$('#txtintrate').val();
						params['Term']=$('#txtterm').val();
						params['NoApploans']=$('#txtNoApploans').val();
						params['RecStat']=$('#txtRecStat').val();
						params['encoder']=$('#txtloanencoder').val();
						
						fnSaveLoanApplication(params);
					});
					
				});
				
				function fnSaveLoanApplication(_params){	
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						}
					});
					
					req.done(function(data){
						//notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						alert(data.Message);
						location.reload();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						
						fnGetTLoan();
					});
				}
				
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
				
				
				function fnGetIDMas(){
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
							toAppend+='<option value="'+val.idnum+'">'+val.idnum+' - '+val.first_name+' ' +val.middle_name+' ' +val.family_name+'</option>';
						});
						
						$('#txtid').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				function fnGetTLoan(){
					var _params={};
					_params['action']='gettloan';
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
						if (data.length==0){
							notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						}
						else{
							var toAppend='';
							$.each(data,function(key,val) {
								toAppend+='<tr>';
								toAppend+='<td>'+val.recordid+'</td><td>'+val.id_document+'</td><td>'+val.CVRefNo+'</td><td>'+val.DocRefNo+'</td><td>'+val.DocDate+'</td><td>'+val.idnum+'</td><td>'+val.LoanType+'</td><td>'+val.Amount+'</td><td>'+val.IntRate+'</td><td>'+val.Term+'</td>';
								toAppend+='<td>'+val.NoApploans+'</td><td>'+val.RecStat+'</td><td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
								toAppend+='</tr>';
							});
							
							$('#tbloanapplication').append(toAppend);
							$('#tbloanapplication').datatable();
						}
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
			</script>