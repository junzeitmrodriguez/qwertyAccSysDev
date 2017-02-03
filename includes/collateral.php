	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class='page-header'>
				  <div class='btn-toolbar pull-right'>
					<div class='btn-group'>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button>
					</div>
				  </div>
				  <h2>Collaterals</h2>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Collateral Details
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="tbcollaterals" width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Loan Ref No</th>
										<th>Collateral Type</th>
										<th>Idnum</th>
										<th>name 2</th>
										<th>TCTNo</th>
										<th>Area</th>
										<th>Location</th>
										<th>Market Value</th>
										<th>Certificate of ownership</th>
										<th>Particular</th>
										<th>Plate #</th>
										<th>CR #</th>
										<th>CR Date</th>
										<th>OR #</th>
										<th>OR Date</th>
										<th>Serial #</th>
										<th>Serial Date</th>
										<th>Model</th>
										<th>Remarks</th>
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
												<label>Collateral ID</label>
												<input id="txtidcollateral" readonly class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Loan Ref No</label>
												<input id="txtdocno" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>Collateral Type</label>
												<select id="txtColType" class="form-control">
													<option value>-</option>
													<option value="Chattel">Chattel</option>
													<option value="Memorial Lots">Memorial Lots</option>
													<option value="Real State">Real State</option>
												</select>
											</div>
										</form>
									</div>
									<div class="col-lg-5">
										<form role="form">
											<div class="form-group">
												<label>ID</label>
												<select id="txtid" class="form-control"></select>
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<form role="form">
											<div class="form-group">
												<label>Name 2</label>
												<input id="txtname2" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>TCT No</label>
												<input id="txttctno" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Area</label>
												<input id="txtarea" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-4">
										<form role="form">
											<div class="form-group">
												<label>Location</label>
												<input id="txtlocation" class="form-control">
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Market Value</label>
												<input id="txtmarketvalue" type="number" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>Certificate of Ownership</label>
												<input id="txtcertofown" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-4">
										<form role="form">
											<div class="form-group">
												<label>Particular</label>
												<input id="txtparticular" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>Remarks</label>
												<input id="txtremarks" class="form-control">
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group">
												<label>Plate #</label>
												<input id="txtplateno" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>CR #</label>
												<input id="txtcrno" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group date " >
												<label>CR Date</label>
												<input id="txtcrdate" type="text" value="" readonly class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>OR #</label>
												<input id="txtorno" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group date " >
												<label>OR Date</label>
												<input id="txtordate" type="text" value="" readonly class="form-control">
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>Serial #</label>
												<input id="txtserialno" class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-2">
										<form role="form">
											<div class="form-group date " >
												<label>Serial Date</label>
												<input id="txtserialdate" type="text" value="" readonly class="form-control">
											</div>
										</form>
									</div>
									<div class="col-lg-3">
										<form role="form">
											<div class="form-group">
												<label>Model</label>
												<input id="txtmodel" class="form-control">
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button id="btnsavecollateral" type="button" class="btn btn-primary">Save</button>
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

			<h1 class="text-light text-shadow" style="padding-top: 1.125rem">Collaterals <small></small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				
				<div class="row cells12">
					<div class="cell padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<input class="" id="txtidcollateral" type="text" readonly>
						</div>
					</div>
					<div class="cell padding10">
						<label>Loan Ref No</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtdocno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Collateral Type</label>
						<div class="input-control select full-size">
							<select id="txtColType">
								<option value>-</option>
								<option value="Chattel">Chattel</option>
								<option value="Memorial Lots">Memorial Lots</option>
								<option value="Real State">Real State</option>
							</select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>ID</label>
						<div class="input-control text full-size">
							<select id="txtid"></select>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Name 2</label>
						<div class="input-control text full-size">
							<input id="txtname2" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>TCT No</label>
						<div class="input-control text full-size">
							<input id="txttctno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Area</label>
						<div class="input-control text full-size">
							<input id="txtarea" type="text"/>
						</div>
					</div>
					
				</div>
				
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<label>Location</label>
						<div class="input-control text full-size">
							<input id="txtlocation" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Market Value</label>
						<div class="input-control text full-size">
							<input id="txtmarketvalue" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Certificate of ownership</label>
						<div class="input-control text full-size">
							<input id="txtcertofown" type="text"/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Particular</label>
						<div class="input-control text full-size">
							<input id="txtparticular" type="text"/>
						</div>
					</div>
					<div class="cell colspan2 padding10">
						<label>Remarks</label>
						<div class="input-control text full-size">
							<input id="txtremarks" type="text"/>
						</div>
					</div>
				</div>
				
				<div class="row cells12">
					<div class="cell padding10">
						<label>Plate #</label>
						<div class="input-control text full-size">
							<input id="txtplateno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>CR #</label>
						<div class="input-control text full-size">
							<input id="txtcrno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>CR Date</label>
						<div class="input-control text full-size" data-role="datepicker" data-format="mm/dd/yyyy">
							<input id="txtcrdate" type="text" />
							<button class="button"><span class="mif-calendar"></span></button>
						</div>
					</div>
					<div class="cell padding10">
						<label>OR #</label>
						<div class="input-control text full-size">
							<input id="txtorno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>OR Date</label>
						<div class="input-control text full-size" data-role="datepicker" data-format="mm/dd/yyyy">
							<input id="txtordate" type="text" />
							<button class="button"><span class="mif-calendar"></span></button>
						</div>
					</div>
					<div class="cell padding10">
						<label>Serial #</label>
						<div class="input-control text full-size">
							<input id="txtserialno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Serial Date</label>
						<div class="input-control text full-size" data-role="datepicker" data-format="mm/dd/yyyy">
							<input id="txtserialdate" type="text" />
							<button class="button"><span class="mif-calendar"></span></button>
						</div>
					</div>
					<div class="cell padding10">
						<label>Model</label>
						<div class="input-control text full-size">
							<input id="txtmodel" type="text"/>
						</div>
					</div>
				</div>
				
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsavecollateral" class="image-button">
							Save Record
							<span class="icon mif-checkmark"></span>
						</button>
					</div>
				</div>
				
			</div>
			
			<br />
			
			<div class="grid">
				<div class="row cells12">
					<div class="cell colspan12 padding10">
						<table id="tbcollaterals" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Loan Ref No</th>
									<th>Collateral Type</th>
									<th>Idnum</th>
									<th>name 2</th>
									<th>TCTNo</th>
									<th>Area</th>
									<th>Location</th>
									<th>Market Value</th>
									<th>Certificate of ownership</th>
									<th>Particular</th>
									<th>Plate #</th>
									<th>CR #</th>
									<th>CR Date</th>
									<th>OR #</th>
									<th>OR Date</th>
									<th>Serial #</th>
									<th>Serial Date</th>
									<th>Model</th>
									<th>Remarks</th>
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
					
					IsNumericOnly('#txtmarketvalue');
					
					 $("#txtcrdate").datetimepicker({
						format: "mm/dd/yyyy",
						autoclose: true,
						todayBtn: true,
						todayHighlight: true,
						minView: 3
					});
					$("#txtordate").datetimepicker({
						format: "mm/dd/yyyy",
						autoclose: true,
						todayBtn: true,
						todayHighlight: true,
						minView: 3
					});
					$("#txtserialdate").datetimepicker({
						format: "mm/dd/yyyy",
						autoclose: true,
						todayBtn: true,
						todayHighlight: true,
						minView: 3
					});
					
					var CollateralDataTable;
					
					fnGetIDMas();
					fnGetCollaterals2();
					
					/*$('body').on('dblclick','#tbcollaterals tbody tr',function(){
						var id_collateral=$(this).find('td').eq(0).text();
						var DocRefNo=$(this).find('td').eq(1).text();
						var ColType=$(this).find('td').eq(2).text();
						var idnum=$(this).find('td').eq(3).text();
						var name2=$(this).find('td').eq(4).text();
						var TCTNo=$(this).find('td').eq(5).text();
						var Area=$(this).find('td').eq(6).text();
						var Location=$(this).find('td').eq(7).text();
						var MarketValue=$(this).find('td').eq(8).text();
						var CertOfOwner=$(this).find('td').eq(9).text();
						var particular=$(this).find('td').eq(10).text();
						var plateno=$(this).find('td').eq(11).text();
						var CRNo=$(this).find('td').eq(12).text();
						var CRDate=$(this).find('td').eq(13).text();
						var ORNo=$(this).find('td').eq(14).text();
						var ORDate=$(this).find('td').eq(15).text();
						var SerialNo=$(this).find('td').eq(16).text();
						var SerialDate=$(this).find('td').eq(17).text();
						var Model=$(this).find('td').eq(18).text();
						var Remarks=$(this).find('td').eq(19).text();
						
						$('#txtidcollateral').val(id_collateral);
						$('#txtdocno').val(DocRefNo);
						$('#txtColType').val(ColType);
						$('#txtid').val(idnum);
						$('#txtname2').val(name2);
						$('#txttctno').val(TCTNo);
						$('#txtarea').val(Area);
						$('#txtlocation').val(Location);
						$('#txtmarketvalue').val(MarketValue);
						$('#txtcertofown').val(CertOfOwner);
						$('#txtparticular').val(particular);
						$('#txtplateno').val(plateno);
						$('#txtcrno').val(CRNo);
						$('#txtcrdate').val(CRDate);
						$('#txtorno').val(ORNo);
						$('#txtordate').val(ORDate);
						$('#txtserialno').val(SerialNo);
						$('#txtserialdate').val(SerialDate);
						$('#txtmodel').val(Model);
						$('#txtremarks').val(Remarks);
					});
					*/
					
					$('#btnsavecollateral').click(function(){
						fnIsRequired();
						
						var params={};
						params['action']='savecollateral';
						params['id_collateral']=$('#txtidcollateral').val();
						params['DocRefNo']=$('#txtdocno').val();
						params['ColType']=$('#txtColType').val();
						params['idnum']=$('#txtid').val();
						params['name2']=$('#txtname2').val();
						params['TCTNo']=$('#txttctno').val();
						params['Area']=$('#txtarea').val();
						params['Location']=$('#txtlocation').val();
						params['MarketValue']=$('#txtmarketvalue').val();
						params['CertOfOwner']=$('#txtcertofown').val();
						params['particular']=$('#txtparticular').val();
						params['plateno']=$('#txtplateno').val();
						params['CRNo']=$('#txtcrno').val();
						params['CRDate']=$('#txtcrdate').val();
						params['ORNo']=$('#txtorno').val();
						params['ORDate']=$('#txtordate').val();
						params['SerialNo']=$('#txtserialno').val();
						params['SerialDate']=$('#txtserialdate').val();
						params['Model']=$('#txtmodel').val();
						params['Remarks']=$('#txtremarks').val();
						
						fnSaveCollateral(params);
						
						$('#txtidcollateral').val('');
						$('#txtdocno').val('');
						$('#txtColType').val('');
						$('#txtid').val('');
						$('#txtname2').val('');
						$('#txttctno').val('');
						$('#txtarea').val('');
						$('#txtlocation').val('');
						$('#txtmarketvalue').val('');
						$('#txtcertofown').val('');
						$('#txtparticular').val('');
						$('#txtplateno').val('');
						$('#txtcrno').val('');
						$('#txtcrdate').val('');
						$('#txtorno').val('');
						$('#txtordate').val('');
						$('#txtserialno').val('');
						$('#txtserialdate').val('');
						$('#txtmodel').val('');
						$('#txtremarks').val('');
					});
					
				});
				
				function fnSaveCollateral(_params){
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
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
						}
					});
					
					req.done(function(data){
						var toAppend='';
						toAppend+='<option value>-</option>';
						$.each(data,function(key,val) {
							toAppend+='<option value="'+val.idnum+'">'+val.idnum+' - '+val.first_name+' ' +val.middle_name+' ' +val.family_name+'</option>';
						});
						
						$('#txtid').append(toAppend);
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
				
				function fnGetCollaterals2(){
					var _params={};
					_params['action']='getcollaterals';	
					CollateralDataTable=$('#tbcollaterals').DataTable();
					CollateralDataTable.destroy();
					CollateralDataTable=$('#tbcollaterals').DataTable({
						responsive: true,
						processing: true,
						ajax: {
							type: 'post',
							//contentType: 'application/json; charset=utf-8',
							url: 'classes/BLL/transactionBLL.php',
							data: {
								'params':_params
							},
							dataSrc: function (json) {
								//console.log(json);
								return json;
							}
						},
						columns:[
							{ data: "id_collateral" },
							{ data: "DocRefNo" },
							{ data: "ColType" },
							{ data: "idnum" },
							{ data: "name2" },
							{ data: "TCTNo" },
							{ data: "Area" },
							{ data: "Location" },
							{ data: "MarketValue" },
							{ data: "CertOfOwner" },
							{ data: "particular" },
							{ data: "plateno" },
							{ data: "CRNo" },
							{ data: "CRDate" },
							{ data: "ORNo" },
							{ data: "ORDate" },
							{ data: "SerialNo" },
							{ data: "SerialDate" },
							{ data: "Model" },
							{ data: "Remarks" }
						]
					});
					$('body').on('dblclick','#tbcollaterals tbody tr',function(){
						var rowData = CollateralDataTable.row(this).data();
						
						$('#txtidcollateral').val(rowData.id_collateral);
						$('#txtdocno').val(rowData.DocRefNo);
						$('#txtColType').val(rowData.ColType);
						$('#txtid').val(rowData.idnum);
						$('#txtname2').val(rowData.name2);
						$('#txttctno').val(rowData.TCTNo);
						$('#txtarea').val(rowData.Area);
						$('#txtlocation').val(rowData.Location);
						$('#txtmarketvalue').val(rowData.MarketValue);
						$('#txtcertofown').val(rowData.CertOfOwner);
						$('#txtparticular').val(rowData.particular);
						$('#txtplateno').val(rowData.plateno);
						$('#txtcrno').val(rowData.CRNo);
						$('#txtcrdate').val(rowData.CRDate);
						$('#txtorno').val(rowData.ORNo);
						$('#txtordate').val(rowData.ORDate);
						$('#txtserialno').val(rowData.SerialNo);
						$('#txtserialdate').val(rowData.SerialDate);
						$('#txtmodel').val(rowData.Model);
						$('#txtremarks').val(rowData.Remarks);
						
						$('#myModal').modal('show')
					});
				}
				
				function fnGetCollaterals(){
					$('#tbcollaterals tbody tr').remove();
					var _params={};
					_params['action']='getcollaterals';
					var req=$.ajax({
						url: 'classes/BLL/transactionBLL.php',
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
							toAppend+='<td>'+val.id_collateral+'</td>';
							toAppend+='<td>'+val.DocRefNo+'</td>';
							toAppend+='<td>'+val.ColType+'</td>';
							toAppend+='<td>'+val.idnum+'</td>';
							toAppend+='<td>'+val.name2+'</td>';
							toAppend+='<td>'+val.TCTNo+'</td>';
							toAppend+='<td>'+val.Area+'</td>';
							toAppend+='<td>'+val.Location+'</td>';
							toAppend+='<td>'+val.MarketValue+'</td>';
							toAppend+='<td>'+val.CertOfOwner+'</td>';
							toAppend+='<td>'+val.particular+'</td>';
							toAppend+='<td>'+val.plateno+'</td>';
							toAppend+='<td>'+val.CRNo+'</td>';
							toAppend+='<td>'+val.CRDate+'</td>';
							toAppend+='<td>'+val.ORNo+'</td>';
							toAppend+='<td>'+val.ORDate+'</td>';
							toAppend+='<td>'+val.SerialNo+'</td>';
							toAppend+='<td>'+val.SerialDate+'</td>';
							toAppend+='<td>'+val.Model+'</td>';
							toAppend+='<td>'+val.Remarks+'</td>';
							toAppend+='</tr>';
						});
						
						$('#tbcollaterals tbody').append(toAppend);
						$('#tbcollaterals').DataTable({
							responsive: true
						});
					});
					
					req.fail(function(request,status,error){
						//notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
						alert(request.responseText)
					});
				}
			</script>