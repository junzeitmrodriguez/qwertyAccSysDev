	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Bank Master</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Bank Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbbanks" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Bank ID</th>
										<th>Bank Code</th>
										<th>Bank Address</th>
										<th>Bank Name</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Modal title</h4>
							</div>
							<div class="modal-body">
							
								<div class="row">
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Bank ID</label>
												<input id="txtidbank" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Bank Code</label>
												<input id="txtbankcode" class="form-control">
											</div>
											
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Bank Address</label>
												<input id="txtbankaddress" class="form-control">
											</div>
											<div class="form-group">
												<label>Bank Name</label>
												<input id="txtbankname" class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsavebank" type="button" class="btn btn-primary">Save</button>
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
	
	<!--<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Bank <small>Details</small></h1>
			<hr class="thin bg-grayLighter">

			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Bank ID</label>
						<div class="input-control text full-size">
							<input id="txtidbank" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Bank Code</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtbankcode" type="text" />
						</div>
					</div>
					<div class="cell colspan5 padding10">
						<label>Bank Address</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtbankaddress" type="text" />
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Bank Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtbankname" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<button id="btnsavebank" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<hr class="thin bg-grayLighter">
						<table id="tbbanks" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>Bank ID</th>
									<th>Bank Code</th>
									<th>Bank Address</th>
									<th>Bank Name</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
	</div>
	-->
			<script type="text/javascript">
				$(function(){
					fnGetBank();
					
					$('body').on('dblclick','#tbbanks tbody tr',function(){
						var idbank=$(this).find('td').eq(0).text();
						var bankcode=$(this).find('td').eq(1).text();
						var bankaddress=$(this).find('td').eq(2).text();
						var bankname=$(this).find('td').eq(3).text();
						
						$('#txtidbank').val(idbank);
						$('#txtbankcode').val(bankcode);
						$('#txtbankaddress').val(bankaddress);
						$('#txtbankname').val(bankname);
						
						$('#myModal').modal('show')
					});	
					
					$('#btnsavebank').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savebank';
						params['idbank']=$('#txtidbank').val();
						params['bankcode']=$('#txtbankcode').val();
						params['bankaddress']=$('#txtbankaddress').val();
						params['bankname']=$('#txtbankname').val();
						
						fnSaveBank(params);
					});
				});
				
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
						$.each(data,function(key,val) {
							toAppend+='<tr>';
							toAppend+='<td>'+val.idbank+'</td><td>'+val.bankcode+'</td><td>'+val.bankaddress+'</td><td>'+val.bankname+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbbanks').append(toAppend);
						$('#tbbanks').DataTable({
							responsive: true
						});	
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnSaveBank(_params){
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
						//notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						alert(data.Message);
						location.reload();
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}

			</script>