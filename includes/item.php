	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Item Master</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Item Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbitems" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Item Name</th>
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
												<label>Item ID</label>
												<input id="txtiditem" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Item Name</label>
												<input id="txtitemname" class="form-control">
											</div>
											<div class="form-group">
												<label>Category</label>
												<input id="txtitemcategory" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtitemencoder" readonly value="<?php echo $_SESSION['userid']; ?>" class="form-control">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input id="txtitemdate" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Time</label>
												<input id="txtitemtime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsaveitem" type="button" class="btn btn-primary">Save</button>
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
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Item <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Item ID</label>
						<div class="input-control text full-size">
							<input id="txtiditem" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Item Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtitemname" type="text" />
						</div>
					</div>
					<div class="cell colspan3 padding10">
						<label>Category</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtitemcategory" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtitemencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtitemdate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtitemtime" type="text" readonly/>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsaveitem" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<hr class="thin bg-grayLighter">
						<table id="tbitems" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Item Name</th>
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
					fnGetItems();
					
					$('body').on('dblclick','#tbitems tbody tr',function(){
						var iditem=$(this).find('td').eq(0).text();
						var name=$(this).find('td').eq(1).text();
						var cat=$(this).find('td').eq(2).text();
						var encoder=$(this).find('td').eq(3).text();
						var dateupd=$(this).find('td').eq(4).text();
						var timeupd=$(this).find('td').eq(5).text();
						
						$('#txtiditem').val(iditem);
						$('#txtitemname').val(name);
						$('#txtitemcategory').val(cat);
						$('#txtitemencoder').val(encoder);
						$('#txtitemdate').val(dateupd);
						$('#txtitemtime').val(timeupd);
						
						$('#myModal').modal('show')
					});	
					
					$('#btnsaveitem').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='saveitem';
						params['iditem']=$('#txtiditem').val();
						params['name']=$('#txtitemname').val();
						params['cat']=$('#txtitemcategory').val();
						params['encoder']=$('#txtitemencoder').val();
						
						fnSaveItem(params);
					});
				});
				
				function fnSaveItem(_params){
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
				
				function fnGetItems(){
					var _params={};
					_params['action']='getitem';
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
							toAppend+='<td>'+val.iditem+'</td><td>'+val.name+'</td><td>'+val.cat+'</td><td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbitems').append(toAppend);
						$('#tbitems').DataTable({
							responsive: true
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
			</script>