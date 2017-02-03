	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Asset</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Asset Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbassets" width="100%" class="table table-striped table-bordered table-hover">
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
												<label>Asset ID</label>
												<input id="txtidasset" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Asset Name</label>
												<input id="txtassetname" class="form-control">
											</div>
											<div class="form-group">
												<label>Asset Category</label>
												<input id="txtassetcategory" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtassetencoder" readonly class="form-control" value="<?php echo $_SESSION['userid'] ?>">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input id="txtassetdate" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Time</label>
												<input id="txtassettime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsaveasset" type="button" class="btn btn-primary">Save</button>
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
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Asset <small>Details</small></h1>
			<hr class="thin bg-grayLighter">

			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Asset ID</label>
						<div class="input-control text full-size">
							<input id="txtidasset" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Asset Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtassetname" type="text" />
						</div>
					</div>
					<div class="cell colspan3 padding10">
						<label>Category</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtassetcategory" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtassetencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtassetdate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtassettime" type="text" readonly/>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsaveasset" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<hr class="thin bg-grayLighter">
						<table id="tbassets" class="datatable table hovered striped">
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
	-->
			<script type="text/javascript">
				$(function(){
					
					fnGetAsset2();
					var AssetDataTable;
					/*$('body').on('dblclick','#tbassets tbody tr',function(){
						var idasset=$(this).find('td').eq(0).text();
						var assetname=$(this).find('td').eq(1).text();
						var assetcategory=$(this).find('td').eq(2).text();
						var encoder=$(this).find('td').eq(3).text();
						var dateupd=$(this).find('td').eq(4).text();
						var timeupd=$(this).find('td').eq(5).text();
						
						$('#txtidasset').val(idasset);
						$('#txtassetname').val(assetname);
						$('#txtassetcategory').val(assetcategory);
						$('#txtassetencoder').val(encoder);
						$('#txtassetdate').val(dateupd);
						$('#txtassettime').val(timeupd);
						
						$('#myModal').modal('show')
						
					});*/	
					
					$('#btnsaveasset').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='saveasset'
						params['idasset']=$('#txtidasset').val();
						params['assetname']=$('#txtassetname').val();
						params['assetcategory']=$('#txtassetcategory').val();
						params['encoder']=$('#txtassetencoder').val();
						
						fnSaveAssetMaster(params);
					});
				});
				
				function fnGetAsset2(){
					var _params={};
					_params['action']='getasset'	;
					AssetDataTable=$('#tbassets').DataTable();
					AssetDataTable.destroy();
					AssetDataTable=$('#tbassets').DataTable({
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
							{ data: "idasset" },
							{ data: "assetname" },
							{ data: "assetcategory" },
							{ data: "encoder" },
							{ data: "dateupd" },
							{ data: "timeupd" }
						]
					});
					$('body').on('dblclick','#tbassets tbody tr',function(){
						var rowData = AssetDataTable.row(this).data();
						
						$('#txtidasset').val(rowData.idasset);
						$('#txtassetname').val(rowData.assetname);
						$('#txtassetcategory').val(rowData.assetcategory);
						$('#txtassetencoder').val(rowData.encoder);
						$('#txtassetdate').val(rowData.dateupd);
						$('#txtassettime').val(rowData.timeupd);
						
						$('#myModal').modal('show')
					});
				}
				
				/*function fnGetAsset(){
					var _params={};
					_params['action']='getasset'	
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
							toAppend+='<td>'+val.idasset+'</td><td>'+val.assetname+'</td><td>'+val.assetcategory+'</td><td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbassets').append(toAppend);
						$('#tbassets').DataTable({
							responsive: true
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}*/
				
				function fnSaveAssetMaster(_params){
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
						fnGetAsset2();
					});
					
					req.fail(function(request,status,error){
						PromptMessage(1,request.responseText);
					});
				}
				
			</script>