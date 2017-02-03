	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Function Master</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Function Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbfunctions" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Function Name</th>
										<th>Category</th>
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
												<label>Function ID</label>
												<input id="txtidfunction" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Function Name</label>
												<input id="txtfunctionname" class="form-control">
											</div>
											<div class="form-group">
												<label>Category</label>
												<input id="txtfunctioncategory" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtfunctionencoder" readonly value="<?php echo $_SESSION['userid']; ?>" class="form-control">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input id="txtfunctiondate" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Time</label>
												<input id="txtfunctiontime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsavefunction" type="button" class="btn btn-primary">Save</button>
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
	
	<!--
	<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">		
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Function <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Function ID</label>
						<div class="input-control text full-size">
							<input id="txtidfunction" type="text"/>
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Function Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtfunctionname" type="text" />
						</div>
					</div>
					<div class="cell colspan3 padding10">
						<label>Category</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtfunctioncategory" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtfunctionencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtfunctiondate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtfunctiontime" type="text" readonly/>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavefunction" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
			</div>
			
			<div class="grid">
				<div class="row cells12">
					<div class="cell colspan12 padding10">
					
						<hr class="thin bg-grayLighter">
						<table id="tbfunctions" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Function Name</th>
									<th>Category</th>
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
	-->
	
	<script type="text/javascript">
				$(function(){
					fnGetFunction();
					
					$('body').on('dblclick','#tbfunctions tbody tr',function(){
						var idfunction=$(this).find('td').eq(0).text();
						var functionname=$(this).find('td').eq(1).text();
						var cat=$(this).find('td').eq(2).text();
						var encoder=$(this).find('td').eq(3).text();
						var dateupd=$(this).find('td').eq(4).text();
						var timeupd=$(this).find('td').eq(5).text();
						
						$('#txtidfunction').val(idfunction);
						$('#txtfunctionname').val(functionname);
						$('#txtfunctioncategory').val(cat);
						$('#txtfunctionencoder').val(encoder);
						$('#txtfunctiondate').val(dateupd);
						$('#txtfunctiontime').val(timeupd);
						
						$('#myModal').modal('show')
					});	
					
					$('#btnsavefunction').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savefunction';
						params['idfunction']=$('#txtidfunction').val();
						params['functionname']=$('#txtfunctionname').val();
						params['cat']=$('#txtfunctioncategory').val();
						params['encoder']=$('#txtfunctionencoder').val();
						
						fnSaveFunction(params);
					});
					
				});
				
				function fnSaveFunction(_params){
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
				
				function fnGetFunction(){
					var _params={};
					_params['action']='getfunction'	
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
							toAppend+='<td>'+val.idfunction+'</td><td>'+val.functionname+'</td><td>'+val.cat+'</td><td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbfunctions tbody').append(toAppend);
						$('#tbfunctions').DataTable({
							responsive: true
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}

			</script>