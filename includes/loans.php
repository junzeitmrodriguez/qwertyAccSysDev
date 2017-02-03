	<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Loan <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Loan ID</label>
						<div class="input-control text full-size">
							<input id="txtloanid" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Loan Type</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtloantype" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Loan Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtloanname" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Max Loan Amount</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtmaxloanamount" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Interest Rate</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtinterestrate" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Service Fee Rate</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtservicefeerate" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Share Retention</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtshareretention" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Max Loan Term</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtmaxloanterm" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtloanencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
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
					</div>
				</div>	
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsaveloan" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
			</div>
			
			<div class="grid">
				<div class="row cells12">
					<div class="cell colspan12">
						<hr class="thin bg-grayLighter">
						<table id="tbloans" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Type</th>
									<th>Name</th>
									<th>Max Loan Amount</th>
									<th>Interest</th>
									<th>Service Fee</th>
									<th>Share Retention</th>
									<th>Max Loan Term</th>
									<th>Encoder</th>
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
					fnGetLoans();
					
					$('body').on('dblclick','#tbloans tbody tr',function(){
						var loanid=$(this).find('td').eq(0).text();
						var loantype=$(this).find('td').eq(1).text();
						var loanname=$(this).find('td').eq(2).text();
						var maxloamt=$(this).find('td').eq(3).text();
						var intraperc=$(this).find('td').eq(4).text();
						var servfeeperc=$(this).find('td').eq(5).text();
						var shrretperc=$(this).find('td').eq(6).text();
						var maxloterm=$(this).find('td').eq(7).text();
						var encoder=$(this).find('td').eq(8).text();
						var dateupd=$(this).find('td').eq(9).text();
						var timeupd=$(this).find('td').eq(10).text();
						
						$('#txtloanid').val(loanid);
						$('#txtloantype').val(loantype);
						$('#txtloanname').val(loanname);
						$('#txtmaxloanamount').val(maxloamt);
						$('#txtinterestrate').val(intraperc);
						$('#txtservicefeerate').val(servfeeperc);
						$('#txtshareretention').val(shrretperc);
						$('#txtmaxloanterm').val(maxloterm);
						$('#txtloanencoder').val(encoder);
						$('#txtloandate').val(dateupd);
						$('#txtloantime').val(timeupd);
					});	
					
					$('#btnsaveloan').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='saveloans';
						params['loanid']=$('#txtloanid').val();
						params['loantype']=$('#txtloantype').val();
						params['loanname']=$('#txtloanname').val();
						params['maxloamt']=$('#txtmaxloanamount').val();
						params['intraperc']=$('#txtinterestrate').val();
						params['servfeeperc']=$('#txtservicefeerate').val();
						params['shrretperc']=$('#txtshareretention').val();
						params['maxloterm']=$('#txtmaxloanterm').val();
						params['encoder']=$('#txtloanencoder').val();
						
						fnSaveLoans(params);
					});
				});
				
				function fnSaveLoans(_params){
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
						//notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						alert(data.Message);
						location.reload();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnGetLoans(){
					var req=GetLoans();
					
					req.done(function(data){
						var toAppend='';
						$.each(data,function(key,val) {
							toAppend+='<tr>';
							toAppend+='<td>'+val.loanid+'</td><td>'+val.loantype+'</td><td>'+val.loanname+'</td><td>'+val.maxloamt+'</td><td>'+val.intraperc+'</td><td>'+val.servfeeperc+'</td>';
							toAppend+='<td>'+val.shrretperc+'</td><td>'+val.maxloterm+'</td><td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbloans').append(toAppend);
						$('#tbloans').datatable();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
			</script>