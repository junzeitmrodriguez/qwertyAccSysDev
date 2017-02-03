	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Company</h3>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Company Details
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-1">
								<form role="form">
									<div class="form-group">
										<label>ID</label>
										<input id="txtidcompany" readonly type="text" class="form-control">
									</div>
								</form>
							</div>
							<div class="col-lg-9">
								<form role="form">
									<div class="form-group">
										<label>Company Name</label>
										<input id="txtcompanyname" type="text" class="form-control">
									</div>
								</form>
							</div>
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>Initial</label>
										<input id="companyinitial" type="text" class="form-control">
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<form role="form">
									<div class="form-group">
										<label>Company Address</label>
										<input id="txtcompanyaddress" type="text" class="form-control">
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>Tel #</label>
										<input id="txtcompanytelno" type="text" class="form-control">
									</div>
									<button id="btnsavecompany" type="button" class="btn btn-default">Save Record</button>
								</form>
							</div>
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>VAT #</label>
										<input id="txtcompanyvatno" type="text" class="form-control">
									</div>
								</form>
							</div>
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>PAG-IBIG #</label>
										<input id="txtcompanypagibig" type="text" class="form-control">										
									</div>
								</form>
							</div>
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>TIN #</label>
										<input id="txtcompanytin" type="text" class="form-control">
									</div>
								</form>
							</div>
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>SSS #</label>
										<input id="txtcompanysssno" type="text" class="form-control">
									</div>
								</form>
							</div>
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>PhilHealth</label>
										<input id="txtcompanyphealth" type="text" class="form-control">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- /.row -->
	</div>
	
	<!--<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">		
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Company <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<label>Company ID</label>
						<div class="input-control text full-size">
							<input id="txtidcompany" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Company Name</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtcompanyname" type="text" />
						</div>
					</div>
					<div class="cell colspan3 padding10">
						<label>Initial</label>
						<div class="input-control text full-size">
							<input id="companyinitial" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<label>PagIbig</label>
						<div class="input-control text full-size">
							<input id="txtcompanypagibig" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Tin #</label>
						<div class="input-control text full-size">
							<input id="txtcompanytin" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>SSS #</label>
						<div class="input-control text full-size">
							<input id="txtcompanysssno" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>PhilHealth</label>
						<div class="input-control text full-size">
							<input id="txtcompanyphealth" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Vat #</label>
						<div class="input-control text full-size">
							<input id="txtcompanyvatno" type="text" />
						</div>
					</div>
				</div>	
				<div class="row cells12">
					<div class="cell colspan6 padding10">
						<label>Address</label>
						<div class="input-control text full-size">
							<input id="txtcompanyaddress" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Tel #</label>
						<div class="input-control text full-size">
							<input id="txtcompanytelno" type="text" />
						</div>
					</div>
				</div>	
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavecompany" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
			</div>
	</div>
	
	-->
			<script type="text/javascript">
				$(function(){
					
					GetCompany();
					
					$('#btnsavecompany').click(function(){
						
						fnIsRequired();
						
						var params={};
						params['action']='savecompany';
						params['idcompany']=$('#txtidcompany').val();
						params['name']=$('#txtcompanyname').val();
						params['initial']=$('#companyinitial').val();
						params['pagibig']=$('#txtcompanypagibig').val();
						params['tin']=$('#txtcompanytin').val();
						params['sssno']=$('#txtcompanysssno').val();
						params['phealth']=$('#txtcompanyphealth').val();
						params['address']=$('#txtcompanyaddress').val();
						params['telno']=$('#txtcompanytelno').val();
						params['vatno']=$('#txtcompanyvatno').val();
						
						fnSaveCompany(params);
					});
				});
				
				function fnSaveCompany(_params){
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
					});
					
					req.fail(function(request,status,error){
						PromptMessage(1,request.responseText);
					});
				}
				
				function GetCompany(){
					var _params={};
					_params['action']='getcompany';
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
						$('#txtidcompany').val(data[0].idcompany);
						$('#txtcompanyname').val(data[0].companyname);
						$('#companyinitial').val(data[0].companyinitial);
						$('#txtcompanypagibig').val(data[0].pagibig);
						$('#txtcompanytin').val(data[0].tin);
						$('#txtcompanysssno').val(data[0].sssno);
						$('#txtcompanyphealth').val(data[0].phealth);
						$('#txtcompanyaddress').val(data[0].address);
						$('#txtcompanytelno').val(data[0].telno);
						$('#txtcompanyvatno').val(data[0].vatno);
					});
					
					req.fail(function(request,status,error){
						PromptMessage(1,request.responseText);
					});
				}

			</script>