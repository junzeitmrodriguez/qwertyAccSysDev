	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Branch</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Branch Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbbranches" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
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
												<label>Branch ID</label>
												<input id="txtidbranch" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Branch Name</label>
												<input id="txtbranchname" class="form-control">
											</div>
											<div class="form-group">
												<label>Category</label>
												<input id="txtbranchcategory" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtbranchencoder" readonly class="form-control" value="<?php echo $_SESSION['userid'] ?>">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input id="txtbranchdate" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Time</label>
												<input id="txtbranchtime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsavebranch" type="button" class="btn btn-primary">Save</button>
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
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Branch <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Branch ID</label>
						<div class="input-control text full-size">
							<input id="txtidbranch" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Branch Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtbranchname" type="text" />
						</div>
					</div>
					<div class="cell colspan3 padding10">
						<label>Category</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtbranchcategory" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtbranchencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtbranchdate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtbranchtime" type="text" readonly/>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavebranch" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12">
						<hr class="thin bg-grayLighter">
						<table id="tbbranches" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
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
	</div>-->
	
			<script type="text/javascript">
				$(function(){
					
					fnGetBranches2();
					var BranchesDataTable;

					$('#btnsavebranch').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savebranch';
						params['idbranch']=$('#txtidbranch').val();
						params['branchname']=$('#txtbranchname').val();
						params['branchcategory']=$('#txtbranchcategory').val();
						params['encoder']=$('#txtbranchencoder').val();
						
						fnSaveBranch(params);
					});
				});
				
				function fnGetBranches2(){
					var _params={};
					_params['action']='getbranches'	;
					BranchesDataTable=$('#tbbranches').DataTable();
					BranchesDataTable.destroy();
					BranchesDataTable=$('#tbbranches').DataTable({
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
							{ data: "idbranch" },
							{ data: "branchname" },
							{ data: "branchcategory" },
							{ data: "encoder" },
							{ data: "dateupd" },
							{ data: "timeupd" }
						]
					});
					$('body').on('dblclick','#tbbranches tbody tr',function(){
						var rowData = BranchesDataTable.row(this).data();
						
						$('#txtidbranch').val(rowData.idbranch);
						$('#txtbranchname').val(rowData.branchname);
						$('#txtbranchcategory').val(rowData.branchcategory);
						$('#txtbranchencoder').val(rowData.encoder);
						$('#txtbranchdate').val(rowData.dateupd);
						$('#txtbranchtime').val(rowData.timeupd);
						
						$('#myModal').modal('show')
					});
				}

				function fnSaveBranch(_params){
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
						PromptMessage(0,data.Message);
						fnGetBranches2();
					});
					
					req.fail(function(request,status,error){
						PromptMessage(1,request.responseText);
					});
				}
			</script>