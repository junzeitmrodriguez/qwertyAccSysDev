	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Chart of Accounts Master</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Chart of Accounts
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbchartofaccounts" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>GLA ID</th>
										<th>Location ID</th>
										<th>Branch ID</th>
										<th>Function ID</th>
										<th>Expense ID</th>
										<th>Name</th>
										<th>LgItem</th>
										<th>LgAsset</th>
										<th>LgIdnum</th>
										<th>LgQuanty</th>
										<th>Annual Budget</th>
										<th>TypRecTT</th>
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
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Modal title</h4>
							</div>
							<div class="modal-body">
							
								<div class="row">
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>ID</label>
												<input id="txtidcoa" class="form-control" readonly>
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>GLA ID</label>
												<input id="txtidgla" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Location ID</label>
												<input id="txtidlocation" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Branch ID</label>
												<input id="txtidbranch" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Function ID</label>
												<input id="txtidfunction" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Expense ID</label>
												<input id="txtidexpense" class="form-control">
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Name</label>
												<input id="txtname" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Annual Budget</label>
												<input id="txtannualbudget" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-4">
										<form role="form">
											<div class="form-group">
												<label>Type Of Record</label>
												<input id="txttyprectt" class="form-control">
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>GLA needs item?</label>
												<select id="txtlgitem" class="form-control">
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>GLA needs asset?</label>
												<select id="txtlgasset" class="form-control">
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>GLA needs id num?</label>
												<select id="txtlgidnum" class="form-control">
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>GLA needs quantity?</label>
												<select id="txtlgquantity" class="form-control">
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<form role="form">
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtcoaencoder" readonly value="<?php echo $_SESSION['userid']; ?>" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-4">
										<form role="form">
											<div class="form-group">
												<label>Date</label>
												<input id="txtcoadate" readonly class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-4">
										<form role="form">
											<div class="form-group">
												<label>Time</label>
												<input id="txtcoatime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsavecoa" type="button" class="btn btn-primary">Save</button>
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
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Chart of Accounts</h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<input id="txtidcoa" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>GLA ID</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtidgla" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Location ID</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtidlocation" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Branch ID</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtidbranch" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Function ID</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtidfunction" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Expense ID</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtidexpense" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan6 padding10">
						<label>Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtname" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Annual Budget</label>
						<div class="input-control text full-size">
							<input id="txtannualbudget" type="text"/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Type Of Record</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txttyprectt" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<label>GLA needs item?</label>
						<div class="input-control select full-size">
							<select id="txtlgitem">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>GLA needs asset?</label>
						<div class="input-control select full-size">
							<select id="txtlgasset">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>GLA needs id num?</label>
						<div class="input-control select full-size">
							<select id="txtlgidnum">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>GLA needs quantity?</label>
						<div class="input-control select full-size">
							<select id="txtlgquantity">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtcoaencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtcoadate" type="text" readonly />
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtcoatime" type="text" readonly/>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavecoa" class="image-button">
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
						<table id="tbchartofaccounts" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>GLA ID</th>
									<th>Location ID</th>
									<th>Branch ID</th>
									<th>Function ID</th>
									<th>Expense ID</th>
									<th>Name</th>
									<th>LgItem</th>
									<th>LgAsset</th>
									<th>LgIdnum</th>
									<th>LgQuanty</th>
									<th>Annual Budget</th>
									<th>TypRecTT</th>
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
					
					var COADataTable;

					IsNumericOnly('#txtannualbudget');
					//fnGetCOA();
					
					fnGetCOA_DataTableVer();					
					
/*					
					$('body').on('dblclick','#tbchartofaccounts tbody tr',function(){
						
						var idcoa=$(this).find('td').eq(0).text();
						var idgla=$(this).find('td').eq(1).text();
						var idlocation=$(this).find('td').eq(2).text();
						var idbranch=$(this).find('td').eq(3).text();
						var idfunction=$(this).find('td').eq(4).text();
						var idexpense=$(this).find('td').eq(5).text();
						var name=$(this).find('td').eq(6).text();
						var lgitem=$(this).find('td').eq(7).text();
						var lgasset=$(this).find('td').eq(8).text();
						var lgidnum=$(this).find('td').eq(9).text();
						var lgquantity=$(this).find('td').eq(10).text();
						var annualbudget=$(this).find('td').eq(11).text();
						var typrectt=$(this).find('td').eq(12).text();
						var coaencoder=$(this).find('td').eq(13).text();
						var dateupd=$(this).find('td').eq(14).text();
						var timupd=$(this).find('td').eq(15).text();
						
						$('#txtidcoa').val(idcoa);
						$('#txtidgla').val(idgla);
						$('#txtidlocation').val(idlocation);
						$('#txtidbranch').val(idbranch);
						$('#txtidfunction').val(idfunction);
						$('#txtidexpense').val(idexpense);
						$('#txtname').val(name);
						$('#txtlgitem').val(lgitem);
						$('#txtlgasset').val(lgasset);
						$('#txtlgidnum').val(lgidnum);
						$('#txtlgquantity').val(lgquantity);
						$('#txtannualbudget').val(annualbudget);
						$('#txttyprectt').val(typrectt);
						$('#txtcoaencoder').val(coaencoder);
						$('#txtcoadate').val(dateupd);
						$('#txtcoatime').val(timupd);
						
						$('#myModal').modal('show')
					});
*/					
					
					$('#btnsavecoa').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savecoa';
						params['idcoa']=$('#txtidcoa').val();
						params['idgla']=$('#txtidgla').val();
						params['idlocation']=$('#txtidlocation').val();
						params['idbranch']=$('#txtidbranch').val();
						params['idfunction']=$('#txtidfunction').val();
						params['idexpense']=$('#txtidexpense').val();
						params['name']=$('#txtname').val();
						params['lgitem']=$('#txtlgitem').val();
						params['lgasset']=$('#txtlgasset').val();
						params['lgidnum']=$('#txtlgidnum').val();
						params['lgquantity']=$('#txtlgquantity').val();
						params['annualbudget']=$('#txtannualbudget').val();
						params['typrectt']=$('#txttyprectt').val();
						params['encoder']=$('#txtcoaencoder').val();
						
						 fnSaveCOA(params);
						
					});
					
				});
				
				function fnGetCOA_DataTableVer(){
					var _params={};
					_params['action']='getcoa';	
					COADataTable=$('#tbchartofaccounts').DataTable();
					COADataTable.destroy();
					COADataTable=$('#tbchartofaccounts').DataTable({
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
							{ data: "idcoa" },
							{ data: "idgla" },
							{ data: "idlocation" },
							{ data: "idbranch" },
							{ data: "idfunction" },
							{ data: "idexpense" },
							{ data: "name" },
							{ data: "lgitem" },
							{ data: "lgasset" },
							{ data: "lgidnum" },
							{ data: "lgquantity" },
							{ data: "annualbudget" },
							{ data: "typrectt" },
							{ data: "encoder" },
							{ data: "dateupd" },
							{ data: "timeupd" }
						]
					});
					$('body').on('dblclick','#tbchartofaccounts tbody tr',function(){
						var rowData = COADataTable.row(this).data();
						
						$('#txtidcoa').val(rowData.idcoa);
						$('#txtidgla').val(rowData.idgla);
						$('#txtidlocation').val(rowData.idlocation);
						$('#txtidbranch').val(rowData.idbranch);
						$('#txtidfunction').val(rowData.idfunction);
						$('#txtidexpense').val(rowData.idexpense);
						$('#txtname').val(rowData.name);
						$('#txtlgitem').val(rowData.lgitem);
						$('#txtlgasset').val(rowData.lgasset);
						$('#txtlgidnum').val(rowData.lgidnum);
						$('#txtlgquantity').val(rowData.lgquantity);
						$('#txtannualbudget').val(rowData.annualbudget);
						$('#txttyprectt').val(rowData.typrectt);
						$('#txtcoaencoder').val(rowData.coaencoder);
						$('#txtcoadate').val(rowData.dateupd);
						$('#txtcoatime').val(rowData.timeupd);
						
						$('#myModal').modal('show')
					});
				}
				
				function fnGetCOA(){
					var _params={};
					_params['action']='getcoa';
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
							toAppend+='<td>'+val.idcoa+'</td><td>'+val.idgla+'</td><td>'+val.idlocation+'</td><td>'+val.idbranch+'</td><td>'+val.idfunction+'</td><td>'+val.idexpense+'</td>';
							toAppend+='<td>'+val.name+'</td><td>'+val.lgitem+'</td><td>'+val.lgasset+'</td><td>'+val.lgidnum+'</td><td>'+val.lgquantity+'</td><td>'+val.annualbudget+'</td><td>'+val.typrectt+'</td>';
							toAppend+='<td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbchartofaccounts').append(toAppend);
						$('#tbchartofaccounts').DataTable({
							responsive: true
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnSaveCOA(_params){
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
						//location.reload();
						fnGetCOA_DataTableVer();
						$('#myModal').modal('hide')
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
			</script>