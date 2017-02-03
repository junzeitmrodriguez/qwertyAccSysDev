	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>ID Master</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						ID Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbidmas" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>First Name</th>
										<th>Middle Name</th>
										<th>Family Name</th>
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
												<label>ID</label>
												<input id="txtidnum" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>First Name</label>
												<input id="txtfirstname" class="form-control">
											</div>
											<div class="form-group">
												<label>Middle Name</label>
												<input id="txtmiddlename" class="form-control">
											</div>
											<div class="form-group">
												<label>Last Name</label>
												<input id="txtfamilyname" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-6">
										<form role="form">
											<div class="form-group">
												<label>Category</label>
												<select id="txtcategory" class="form-control"></select>
											</div>
											<div class="form-group">
												<label>Encoder</label>
												<input id="txtidencoder" readonly value="<?php echo $_SESSION['userid']; ?>" class="form-control">
											</div>
											<div class="form-group">
												<label>Date</label>
												<input id="txtiddate" readonly class="form-control">
											</div>
											<div class="form-group">
												<label>Time</label>
												<input id="txtidtime" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsaveidmas" type="button" class="btn btn-primary">Save</button>
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
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">ID <small>Master</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<input id="txtidnum" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>First Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtfirstname" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Middle Name</label>
						<div class="input-control text full-size">
							<input id="txtmiddlename" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Family Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtfamilyname" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Category</label>
						<div class="input-control text full-size">
							<select id="txtcategory"></select>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtidencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtiddate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtidtime" type="text" readonly/>
						</div>
					</div>
				</div>	
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsaveidmas" class="image-button">
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
						<table id="tbidmas" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>First Name</th>
									<th>Middle Name</th>
									<th>Family Name</th>
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
					fnGetIDMas();
					fnGetIDCategory();
					
					$('body').on('dblclick','#tbidmas tbody tr',function(){
						var idnum=$(this).find('td').eq(0).text();
						var first_name=$(this).find('td').eq(1).text();
						var middle_name=$(this).find('td').eq(2).text();
						var family_name=$(this).find('td').eq(3).text();
						var cat=$(this).find('td').eq(4).text();
						var encoder=$(this).find('td').eq(5).text();
						var dateupd=$(this).find('td').eq(6).text();
						var timeupd=$(this).find('td').eq(7).text();
						
						$('#txtidnum').val(idnum);
						$('#txtfirstname').val(first_name);
						$('#txtmiddlename').val(middle_name);
						$('#txtfamilyname').val(family_name);
						$('#txtcategory option:selected').text(cat);
						$('#txtidencoder').val(encoder);
						$('#txtiddate').val(dateupd);
						$('#txtidtime').val(timeupd);
						
						$('#myModal').modal('show')
					});	
					
					$('#btnsaveidmas').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='saveidmas';
						params['idnum']=$('#txtidnum').val();
						params['first_name']=$('#txtfirstname').val();
						params['middle_name']=$('#txtmiddlename').val();
						params['family_name']=$('#txtfamilyname').val();
						params['cat']=$('#txtcategory option:selected').text();
						params['encoder']=$('#txtidencoder').val();
						
						fnSaveIDMas(params);
					});
				});
				
				function fnGetIDCategory(){
					var _params={};
					_params['action']='getidcategory';
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
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.id_category+'">'+val.categoryname+'</option>';
						});
						
						$('#txtcategory').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnSaveIDMas(_params){
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
							toAppend+='<td>'+val.idnum+'</td><td>'+val.first_name+'</td><td>'+val.middle_name+'</td><td>'+val.family_name+'</td><td>'+val.cat+'</td>';
							toAppend+='<td>'+val.encoder+'</td><td>'+val.dateupd+'</td><td>'+val.timeupd+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbidmas').append(toAppend);
						$('#tbidmas').DataTable({
							responsive: true
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}

			</script>