	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Application</h3>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Application Period
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>Year</label>
										<input id="txtacyear" type="number" class="form-control">
									</div>
									<button id="btnsaveapplication" type="button" class="btn btn-default">Save Application</button>
								</form>
							</div>
							<div class="col-lg-3">
								<form role="form">
									<div class="form-group">
										<label>Month</label>
										<select id="txtacmonth" class="form-control"></select>
									</div>
									<button id="btncloseperiod" type="button" class="btn btn-default">Close Period</button>
								</form>
							</div>
							<div class="col-lg-2">
								<form role="form">
									<div class="form-group">
										<label>APP CODE</label>
										<input id="txtappcode" type="text" class="form-control">
									</div>
									<button id="btnyearendclosing" type="button" class="btn btn-default">Year-End Closing</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
	
	<!--
	<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">

			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Application <small>Period</small></h1>
			<hr class="thin bg-grayLighter">

			<div class="flex-grid">
				<div class="row cells1">
					<div class="cell padding10">
						<label>Year</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtacyear" type="number" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Month</label>
						<div class="input-control select full-size">
							<select id="txtacmonth"></select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>App Code</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtappcode" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<button id="btnsaveapplication" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
					<div class="cell colspan2 padding10">
						<button id="btncloseperiod" class="image-button">
							Close Period
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
					<div class="cell colspan2 padding10">
						<button id="btnyearendclosing" class="image-button">
							Year-end Closing
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
			</div>
			<hr class="thin bg-grayLighter">
	</div>
	-->
			<script type="text/javascript">
				$(function(){
					
					fnGetMonthNames();
					
					fnGetApplication();
					
					$('#btnsaveapplication').click(function(){		
						fnIsRequired();
						
						var params={};
						params['action']='saveapplication';
						params['acyear']=$('#txtacyear').val();
						params['acmonth']=$('#txtacmonth').val();
						params['appcode']=$('#txtappcode').val();
						
						fnSaveApplication(params);
					});
					
					$('#btncloseperiod').click(function(){
						var params={};
						params['action']='closeperiod';
						params['acyear']=$('#txtacyear').val();
						params['acmonth']=$('#txtacmonth').val();
						params['encoder']='';
						
						fnClosePeriod(params);
					});
					
					$('#btnyearendclosing').click(function(){
						var params={};
						params['action']='yearendclosing';
						params['acyear']=$('#txtacyear').val();
						
						fnYearEndClosing(params);
					});
				});
				
				function fnGetMonthNames(){
					var toAppend;
					var months=fnGetMonths();
					for(var i=1;i<months.length;i++){
						toAppend+='<option value='+i+'>'+months[i]+'</option>';
					}
					$('#txtacmonth').append(toAppend);
				}
				
				function fnGetApplication(){
					var _params={};
					_params['action']='getapplication'
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
						$('#txtacyear').val(data[0].acyear);
						$('#txtacmonth').val(data[0].acmonth);
						$('#txtappcode').val(data[0].appcode);
					});
					
					req.fail(function(request,status,error){
						PromptMessage(1,request.responseText);
					});
				}
				
				function fnYearEndClosing(_params){
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
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
				
				function fnClosePeriod(_params){
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
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
				
				function fnSaveApplication(_params){
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
			</script>
