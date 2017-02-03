	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h3>Document</h3>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Document Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbdocuments" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Document Code</th>
										<th>Document Name</th>
										<th>Document Initial</th>
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
												<label>Document ID</label>
												<input id="txtiddocument" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Document Code</label>
												<input id="txtdocumentcode" class="form-control">
											</div>
											<div class="form-group">
												<label>Document Name</label>
												<input id="txtdocumentname" class="form-control">
											</div>
											<div class="form-group">
												<label>Document Initial</label>
												<input id="txtdocumentinitial" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtdocumentencoder" readonly value="<?php echo $_SESSION['userid']; ?>" class="form-control">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input id="txtdocumentdate" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Time</label>
												<input id="txtdocumenttime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsavedocument" type="button" class="btn btn-primary">Save</button>
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
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Document <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Document ID</label>
						<div class="input-control text full-size">
							<input id="txtiddocument" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Document Code</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtdocumentcode" type="text"/>
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Document Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtdocumentname" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Document Initial</label>
						<div class="input-control text full-size">
							<input id="txtdocumentinitial" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtdocumentencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtdocumentdate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtdocumenttime" type="text" readonly/>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavedocument" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<hr class="thin bg-grayLighter">
						<table id="tbdocuments" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Document Code</th>
									<th>Document Name</th>
									<th>Document Initial</th>
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
					
					var DocumentDataTable;
					
					//fnGetDocument();
					fnGetDocument2();
					
					/*$('body').on('dblclick','#tbdocuments tbody tr',function(){
						var iddocument=$(this).find('td').eq(0).text();
						var documentcode=$(this).find('td').eq(1).text();
						var documentname=$(this).find('td').eq(2).text();
						var documentinitial=$(this).find('td').eq(3).text();
						var documentencoder=$(this).find('td').eq(4).text();
						var dateupd=$(this).find('td').eq(5).text();
						var timeupd=$(this).find('td').eq(6).text();
						
						$('#txtiddocument').val(iddocument);
						$('#txtdocumentcode').val(documentcode);
						$('#txtdocumentname').val(documentname);
						$('#txtdocumentinitial').val(documentinitial);
						$('#txtdocumentencoder').val(documentencoder);
						$('#txtdocumentdate').val(dateupd);
						$('#txtdocumenttime').val(timeupd);
						
						$('#myModal').modal('show')
					});	
					*/
					
					$('#btnsavedocument').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savedocument'
						params['iddocument']=$('#txtiddocument').val();
						params['documentcode']=$('#txtdocumentcode').val();
						params['documentname']=$('#txtdocumentname').val();
						params['documentinitial']=$('#txtdocumentinitial').val();
						params['encoder']=$('#txtdocumentencoder').val();
						
						fnSaveDocument(params);
					});
				});
				
				function fnSaveDocument(_params){
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
						fnGetDocument2();
					});
					
					req.fail(function(request,status,error){
						PromptMessage(1,request.responseText);
					});
				}
				
				function fnGetDocument2(){
					var _params={};
					_params['action']='getdocument'	;
					DocumentDataTable=$('#tbdocuments').DataTable();
					DocumentDataTable.destroy();
					DocumentDataTable=$('#tbdocuments').DataTable({
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
							{ data: "iddocument" },
							{ data: "documentcode" },
							{ data: "documentname" },
							{ data: "documentinitial" },
							{ data: "encoder" },
							{ data: "dateupd" },
							{ data: "timeupd" }
						]
					});
					$('body').on('dblclick','#tbdocuments tbody tr',function(){
						var rowData = DocumentDataTable.row(this).data();
						
						$('#txtiddocument').val(rowData.iddocument);
						$('#txtdocumentcode').val(rowData.documentcode);
						$('#txtdocumentname').val(rowData.documentname);
						$('#txtdocumentinitial').val(rowData.documentinitial);
						$('#txtdocumentencoder').val(rowData.encoder);
						$('#txtdocumentdate').val(rowData.dateupd);
						$('#txtdocumenttime').val(rowData.timeupd);
						
						$('#myModal').modal('show')
					});
				}
				
			</script>