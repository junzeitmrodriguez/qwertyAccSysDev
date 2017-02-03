<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMS 2</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Log-In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input id="txtuserid" class="form-control" placeholder="Employee Number" name="text" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input id="txtpassword" class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!--<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a id="btnlogin" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- Modal -->
		<div class="modal fade" id="myGlobalModal1" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<p id="GlobalModalMessage1" class="text-center"></p>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<!--<div class="modal fade" id="myLoginLoader" role="dialog" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="loader"></div>
					</div>
				</div>
			</div>
		</div>-->
		
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	
	<!-- loadingoverlay.min -->
    <script src="js/loadingoverlay.min.js"></script>
	
	<!-- loadingoverlay_progress.min -->
    <script src="js/loadingoverlay.min.js"></script>
	
	<!--<style>
		.loader {
			border: 16px solid #f3f3f3; /* Light grey */
			border-top: 16px solid #3498db; /* Blue */
			border-radius: 50%;
			width: 120px;
			height: 120px;
			animation: spin 2s linear infinite;
			float: none;
			margin: 0 auto;
		}

		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
	</style>
	-->

</body>

</html>
<script type="text/javascript">
	$(function() {
			
		$('#txtuserid').focus();
		//$('#myLoginLoader').modal('show')
		
		$('#btnlogin').click(function(){
			if($.trim($('#txtuserid').val())==''){
				$('#txtuserid').focus();
			}
			else if($.trim($('#txtpassword').val())==''){
				$('#txtpassword').focus();
			}
			else{
				
				var _params={};
				_params['userid']=$('#txtuserid').val();
				_params['password'] =$('#txtpassword').val();
				
				var req=$.ajax({
					url: 'classes/BLL/setsessionvars.php',
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
					//alert(data.Message);
					$('#myGlobalModal1').modal('show')
					var retValue=data.Message;
					if (retValue.includes('Welcome')==true){
						retValue='<div class="alert alert-success">'+retValue+'</div>';
					}
					else{
						retValue='<div class="alert alert-danger">'+retValue+'</div>';
					}
					$('#GlobalModalMessage1').html(retValue)
					
					$('#myGlobalModal1').on('hidden.bs.modal', function (e) {
						if(data.Status==0){
							window.location.href = "main.php";
						}
					})
				});
				
				req.fail(function(request,status,error){
					$('#myGlobalModal1').modal('show')
					$('#GlobalModalMessage1').html('<div class="alert alert-danger">'+request.responseText+'</div>')
					$('#txtuserid').focus();
				});
				
			}
			
		});
	});
	
</script>
