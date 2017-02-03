	<div id="entryWindow" class="window" style="margin-top:60px;padding:15px;">			
			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Member <small>Details</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div data-role="dialog" id="dialog9" class="padding20 dialog" data-close-button="true" data-overlay="true" data-overlay-color="op-dark" style="width: auto; height: auto; display: none; left: 821.5px; top: 209px;">
				<h1>ID Master</h1>
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
			<span class="dialog-close-button"></span></div>
			
			<div class="flex-grid">
				<div class="row cells12">
					<div class="cell padding10">
						<button id="btnsearchidmas" class="image-button" onclick="fnDialog()">
							Search ID Master
							<span class="icon mif-search"></span>
						</button>
					</div>
					<div class="cell padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<input id="txtidnum" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>First Name</label>
						<div class="input-control text full-size">
							<input id="txtfirstname" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Middle Name</label>
						<div class="input-control text full-size">
							<input id="txtmiddlename" type="text" readonly/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Family Name</label>
						<div class="input-control text full-size">
							<input id="txtfamilyname" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Tel No.</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txttelno" type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Mobile No.</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtmobileno" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<label>Date of Birth</label>
						<div class="input-control text full-size" data-role="datepicker" data-format="mm/dd/yyyy">
							<input class="isrequired" id="txtbdate" type="text" />
							<button class="button"><span class="mif-calendar"></span></button>
						</div>
					</div>
					<div class="cell colspan3 padding10">
						<label>Place of Birth</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtplacebirth" type="text" />
						</div>
					</div>
					<div class="cell padding10">
						<label>Gender</label>
						<div class="input-control select full-size">
							<select id="txtgender">
								<option value="F">Female</option>
								<option value="M">Male</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Civil Status</label>
						<div class="input-control select full-size">
							<select></select>
						</div>
					</div>
					<div class="cell colspan3 padding10">
						<label>Email Address</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtemail" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan4 padding10">
						<label>Home Address</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txthomeadd" type="text" />
						</div>
					</div>	
					<div class="cell colspan4 padding10">
						<label>Permanent Address</label>
						<div class="input-control text full-size">
							<input id="txtpermadd" type="text" />
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Present Address</label>
						<div class="input-control text full-size">
							<input id="txtpresadd" id="txtpresadd" type="text" />
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan2 padding10">
						<label>Employer's Name</label>
						<div class="input-control text full-size">
							<input type="text" />
						</div>
					</div>
					<div class="cell colspan4 padding10">
						<label>Employer's Address</label>
						<div class="input-control text full-size">
							<input type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Name of Business</label>
						<div class="input-control text full-size">
							<input type="text" />
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Encoder</label>
						<div class="input-control text full-size">
							<input id="txtmemberencoder" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Date</label>
						<div class="input-control text full-size">
							<input id="txtmemberdate" type="text" readonly/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Time</label>
						<div class="input-control text full-size">
							<input id="txtmembertime" type="text" readonly/>
						</div>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavemember" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<table id="tbmembers" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>First Name</th>
									<th>Middle Name</th>
									<th>Last Name</th>
									<th>Tel #</th>
									<th>Mobile #</th>
									<th>E-mail</th>
									<th>Home Address</th>
									<th>Birth Date</th>
									<th>Birth Place</th>
									<th>Gender</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
	</div>
			<script type="text/javascript">
				$(function(){
					
					fnGetIDMas();
					
					fnGetMembers();
					
					$('body').on('dblclick','#tbidmas tbody tr',function(){
						var idnum=$(this).find('td').eq(0).text();
						var first_name=$(this).find('td').eq(1).text();
						var middle_name=$(this).find('td').eq(2).text();
						var family_name=$(this).find('td').eq(3).text();
						
						$('#txtidnum').val(idnum);
						$('#txtfirstname').val(first_name);
						$('#txtmiddlename').val(middle_name);
						$('#txtfamilyname').val(family_name);
						
						$('#dialog9').data('dialog').close();
					});
					
					$('body').on('dblclick','#tbmembers tbody tr',function(){
						var idnum=$(this).find('td').eq(0).text();
						var first_name=$(this).find('td').eq(1).text();
						var middle_name=$(this).find('td').eq(2).text();
						var family_name=$(this).find('td').eq(3).text();
						var telno=$(this).find('td').eq(4).text();
						var mobileno=$(this).find('td').eq(5).text();
						var email=$(this).find('td').eq(6).text();
						var homeadd=$(this).find('td').eq(7).text();
						var bdate=$(this).find('td').eq(8).text();
						var bplace=$(this).find('td').eq(9).text();
						var gender=$(this).find('td').eq(10).text();
						
						$('#txtidnum').val(idnum);
						$('#txtfirstname').val(first_name);
						$('#txtmiddlename').val(middle_name);
						$('#txtfamilyname').val(family_name);
						$('#txttelno').val(telno);
						$('#txtmobileno').val(mobileno);
						$('#txtemail').val(email);
						$('#txthomeadd').val(homeadd);
						$('#txtbdate').val(bdate);
						$('#txtplacebirth').val(bplace);
						$('#txtgender').val(gender);
						
						$('#dialog9').data('dialog').close();
					});

					$('#btnsavemember').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savemember';
						params['idnum']=$('#txtidnum').val();
						params['homeadd']=$('#txthomeadd').val();
						params['permadd']=$('#txtpermadd').val();
						params['presadd']=$('#txtpresadd').val();
						params['birthdate']=$('#txtbdate').val();
						params['placebirth']=$('#txtplacebirth').val();
						params['telno']=$('#txttelno').val();
						params['mobileno']=$('#txtmobileno').val();
						params['email']=$('#txtemail').val();
						params['gender']=$('#txtgender').val();
						params['encoder']=$('#txtmemberencoder').val();
						
						fnSaveMember(params);
					});
									
				});
				
				function fnSaveMember(_params){
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							dialog('.dialogpreloader');
						},
						complete:function(){
							dialog('.dialogpreloader');
						}
					});
					req.done(function(data){
						//notify('info', 'Info', data.Message, '<span class="mif-info"></span>');
						alert(data.Message);
						location.reload();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnGetMembers(){
					var _params={};
					_params['action']='getmembers';
					var req=$.ajax({
						url: 'classes/BLL/masterBLL.php',
						method: 'post',
						datatype: 'json',
						data:{
							params:_params
						},
						beforeSend:function(){
							dialog('.dialogpreloader');
						},
						complete:function(){
							dialog('.dialogpreloader');
						}
					});
					
					req.done(function(data){
						var toAppend='';
						$.each(data,function(key,val) {
							toAppend+='<tr>';
							toAppend+='<td>'+val.idnum+'</td><td>'+val.first_name+'</td><td>'+val.middle_name+'</td><td>'+val.family_name+'</td><td>'+val.telno+'</td><td>'+val.mobileno+'</td>';
							toAppend+='<td>'+val.email+'</td><td>'+val.homeadd+'</td><td>'+val.birthdate+'</td><td>'+val.placebirth+'</td><td>'+val.gender+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbmembers').append(toAppend);
						$('#tbmembers').datatable();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}
				
				function fnDialog(){
					$('#dialog9').data('dialog').open();
					$('#dialog9').css('top','100');
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
							dialog('.dialogpreloader');
						},
						complete:function(){
							dialog('.dialogpreloader');
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
						$('#tbidmas').datatable();
					});
					
					req.fail(function(request,status,error){
						notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
					});
				}

			</script>