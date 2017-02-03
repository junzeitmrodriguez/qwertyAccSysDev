	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Expense Master</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Expense Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbexpense2" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Expense Code</th>
										<th>Expense Name</th>
										<th>Annual Budget</th>
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
												<label>Expense ID</label>
												<input id="txtidexpense" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Expense Code</label>
												<input id="txtexpensecode" class="form-control">
											</div>
											<div class="form-group">
												<label>Expense Name</label>
												<input id="txtexpensename" class="form-control">
											</div>
											<div class="form-group">
												<label>Annual Budget</label>
												<input id="txtannualbudget" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Category</label>
												<input id="txtcategory" class="form-control">
											</div>
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtexpenseencoder" readonly value="<?php echo $_SESSION['userid']; ?>" class="form-control">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input id="txtexpensedate" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Time</label>
												<input id="txtexpensetime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsaveexpense" type="button" class="btn btn-primary">Save</button>
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
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Expense <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<input id="txtidexpense" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Expense Code</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtexpensecode" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Expense Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtexpensename" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Annual Budget</label>
						<div class="input-control text full-size">
							<input id="txtannualbudget" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Category</label>
						<div class="input-control text full-size">
							<input id="txtcategory" type="text" />
						</div>
					</div>			
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtexpenseencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtexpensedate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtexpensetime" type="text" readonly/>
						</div>
					</div>
				</div>	
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsaveexpense" class="image-button">
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
						<table id="tbexpense2" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Expense Code</th>
									<th>Expense Name</th>
									<th>Annual Budget</th>
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
					
					IsNumericOnly('#txtannualbudget');
					//fnGetExpense();
					var ExpenseDataTable;
					
					fnGetExpense2()
					
					/*$('body').on('dblclick','#tbexpense2 tbody tr',function(){
						var idexpense=$(this).find('td').eq(0).text();
						var expensecode=$(this).find('td').eq(1).text();
						var expensename=$(this).find('td').eq(2).text();
						var annualbudget=$(this).find('td').eq(3).text();
						var cat=$(this).find('td').eq(4).text();
						var encoder=$(this).find('td').eq(5).text();
						var dateupd=$(this).find('td').eq(6).text();
						var timeupd=$(this).find('td').eq(7).text();
						
						$('#txtidexpense').val(idexpense);
						$('#txtexpensecode').val(expensecode);
						$('#txtexpensename').val(expensename);
						$('#txtannualbudget').val(annualbudget);
						$('#txtcategory').val(cat);
						$('#txtexpenseencoder').val(encoder);
						$('#txtexpensedate').val(dateupd);
						$('#txtexpensetime').val(timeupd);

						$('#myModal').modal('show')
					});	
					*/
					
					$('#btnsaveexpense').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='saveexpense';
						params['idexpense']=$('#txtidexpense').val();
						params['expensecode']=$('#txtexpensecode').val();
						params['name']=$('#txtexpensename').val();
						params['annualbudget']=$('#txtannualbudget').val();
						params['cat']=$('#txtcategory').val();
						params['encoder']=$('#txtexpenseencoder').val();
						
						fnSaveExpense(params);
					});
					
				});
				
				function fnSaveExpense(_params){
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							$.LoadingOverlay("show");
						},
						complete:function(){
							$.LoadingOverlay("hide");
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
				
				function fnGetExpense2(){
					var _params={};
					_params['action']='getexpense'	;
					ExpenseDataTable=$('#tbexpense2').DataTable();
					ExpenseDataTable.destroy();
					ExpenseDataTable=$('#tbexpense2').DataTable({
						responsive: true,
						processing: true,
						//serverSide: true,
						ajax: {
							type: 'post',
							//contentType: 'application/json; charset=utf-8',
							url: 'classes/BLL/masterBLL.php',
							data: {
								'params':_params
							},
							dataSrc: function (json) {
								//console.log(json);
								return json;
							}
						},
						columns:[
							{ data: "idexpense" },
							{ data: "expensecode" },
							{ data: "name" },
							{ data: "annualbudget" },
							{ data: "cat" },
							{ data: "encoder" },
							{ data: "dateupd" },
							{ data: "timeupd" }
						]
					});
					$('body').on('dblclick','#tbexpense2 tbody tr',function(){
						var rowData = ExpenseDataTable.row(this).data();
						
						$('#txtidexpense').val(rowData.idexpense);
						$('#txtexpensecode').val(rowData.expensecode);
						$('#txtexpensename').val(rowData.name);
						$('#txtannualbudget').val(rowData.annualbudget);
						$('#txtcategory').val(rowData.cat);
						$('#txtexpenseencoder').val(rowData.encoder);
						$('#txtexpensedate').val(rowData.dateupd);
						$('#txtexpensetime').val(rowData.timeupd);
						
						$('#myModal').modal('show')
					});
				}
				
				/*function fnGetExpense(){
					var _params={};
					_params['action']='getexpense';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							$.LoadingOverlay("show");
						},
						complete:function(){
							$.LoadingOverlay("hide");
						}
					});
					
					req.done(function(data){
						var toAppend='';
						$.each(data,function(key,val) {
							toAppend+='<tr>';
							toAppend+='<td>'+val.idexpense+'</td><td>'+val.expensecode+'</td><td>'+val.name+'</td><td>'+val.annualbudget+'</td><td>'+val.cat+'</td>';
							toAppend+='<td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbexpense2 tbody').append(toAppend);
						$('#tbexpense2').DataTable({
							responsive: true
						});	
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				*/
			
			</script>