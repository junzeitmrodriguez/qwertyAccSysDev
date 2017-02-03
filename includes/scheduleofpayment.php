			
			<h1 class="text-light text-shadow" style="padding-top: 3.125rem">Schedule of <small>Payment</small></h1>
			<hr class="thin bg-grayLighter">
			
			<div class="flex-grid">
				
				<div class="row cells12">
					<div class="cell padding10" style="display:none;">
						<label>Schedule Id</label>
						<div class="input-control text full-size">
							<input class="" id="txtscheduleid" type="text" readonly>
						</div>
					</div>
					<div class="cell padding10">
						<label>DocRefNo</label>
						<div class="input-control text full-size">
							<input class="isrequired" id="txtdocno" type="text"/>
						</div>
					</div>
					<div class="cell padding10">
						<label>Schedule Date</label>
						<div class="input-control text full-size" data-role="datepicker" data-format="mm/dd/yyyy">
							<input id="txtscheduledate" type="text" />
							<button class="button"><span class="mif-calendar"></span></button>
						</div>
					</div>
					<div class="cell padding10">
						<label>Schedule Amount</label>
						<div class="input-control text full-size">
							<input id="txtscheduleamount" type="text"/>
						</div>
					</div>

				</div>
				
				<div class="row cells12">
					<div class="cell colspan3 padding10">
						<button id="btnsaveschedule" class="image-button">
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
						<table id="tbschedules" class="datatable table hovered striped">
							<thead>
								<tr>
									<th>Schedule ID</th>
									<th>DocRefNo</th>
									<th>Schedule Date</th>
									<th>Schedule Amount</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
				$(function(){
					IsNumericOnly('#txtscheduleamount');
				});
				
			</script>