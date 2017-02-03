<?php
ob_start();
session_start();
if (!isset($_SESSION['userid'])){
	$_SESSION['userid']=0;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMS 2.0</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	
	<!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Bootstrap Datetimepicker -->
    <link href="bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.sidebar .nav-fourth-level li {
	  border-bottom: none !important;
	}
	.sidebar .nav-fourth-level li a {
		padding-left:67px;
	}
	</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php">Company name here..</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="classes/BLL/sessiondestroy.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
			
			<!--<div id="sidebar-wrapper"> -->
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
						
						<li>
                            <a href="#"><i class="fa fa-database fa-fw"></i> System Administrator<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li><a href="main.php?page=appperiod">Application Period</a></li>
									<li><a href="main.php?page=company">Company</a></li>
									<li><a href="main.php?page=document">Document</a></li>
								</ul>
						</li>
						<li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Accounting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="#">Master <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
										<li><a href="main.php?page=asset">Asset</a></li>
										<li><a href="main.php?page=branch">Branch/Lot</a></li>
										<li><a href="main.php?page=chartofaccounts">Chart of Accounts</a></li>
										<li><a href="main.php?page=expense">Expense</a></li>
										<li><a href="main.php?page=function">Function</a></li>
										<li><a href="main.php?page=idmas">ID Master</a></li>	
										<li><a href="main.php?page=item">Item</a></li>
										<li><a href="main.php?page=location">Location/Farm</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Transactions <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="#">Entry <span class="fa arrow"></span></a>
											<ul class="nav nav-third-level nav-fourth-level">
												
												<li><a href="main.php?page=entry&c=CV&n=Check Voucher">Check Voucher</a></li>
												<li><a href="main.php?page=entry&c=CI&n=Commercial Invoice">Commercial Invoice</a></li>
												<!--<li><a href="main.php?page=entry&c=DS&n=Deposit Slip">Deposit Slip</a></li>-->
												<li><a href="main.php?page=entry&c=JV&n=Journal Voucher">Journal Voucher</a></li>
												<li><a href="main.php?page=entry&c=OR&n=Official Receipt">Official Receipt</a></li>
												<li><a href="main.php?page=entry&c=RfJV&n=Request for JV">Request for JV</a></li>
												<li><a href="main.php?page=entry&c=RfP&n=Request for Payment">Request for Payment</a></li>
											</ul>
										</li>
										
									</ul>
								</li>
								<li>
									<a href="#">Reports <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="#">Daily <span class="fa arrow"></span></a>
											<ul class="nav nav-third-level">
											</ul>
										</li>
										<li>
											<a href="#">Month-end <span class="fa arrow"></span></a>
											<ul class="nav nav-third-level">
											</ul>
										</li>
										<li>
											<a href="#">Registers <span class="fa arrow"></span></a>
											<ul class="nav nav-third-level nav-fourth-level">
												<li><a target="_blank" href="reports/register.php?c=CV">CV Register</a></li>
												<li><a target="_blank" href="reports/register.php?c=JV">JV Register</a></li>
												<li><a target="_blank" href="reports/register.php?c=OR">OR Register</a></li>
												<li><a target="_blank" href="reports/commercialinvoice.php?c=CI">Commercial Invoice</a></li>
												<li><a target="_blank" href="reports/financial.php">Balance Sheet</a></li>
												<li><a target="_blank" href="reports/income.php">Income Statement</a></li>
												<li><a target="_blank" href="reports/tbal.php">Trial Balance</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Quarterly <span class="fa arrow"></span></a>
											<ul class="nav nav-third-level">
											</ul>
										</li>
										<li>
											<a href="#">Yearly <span class="fa arrow"></span></a>
											<ul class="nav nav-third-level">
											</ul>
										</li>
										<li>
											<a href="#">Other Facilities <span class="fa arrow"></span></a>
											<ul class="nav nav-third-level">
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-money fa-fw"></i> Payroll<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Purchasing<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-cubes fa-fw"></i> Inventory<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							</ul>
						</li>
					</ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
			
			<!--</div> -->
			
        </nav>

        <!-- Page Content -->
        <!--<div id="page-wrapper" style="min-height: 158px;">-->
		<div id="page-wrapper">
		
			<!-- jQuery -->
			<script src="vendor/jquery/jquery.min.js"></script>
			
			<!-- BASE -->
			<script src="js/base.js"></script>
			
			<?php
				if(isset($_GET['page'])){
					
					$page = $_GET['page'];
					
					if($_SESSION['userid']=="0"){
						header('Location: classes/BLL/sessiondestroy.php');
					}
					
					switch($page){
						case 'appperiod':
							include 'includes/application.php';
							break;
						case 'asset':
							include 'includes/asset.php';
							break;
						case 'bank':
							include 'includes/bank.php';
							break;
						case 'branch':
							include 'includes/branch.php';
							break;
						case 'chartofaccounts':
							include 'includes/chartofaccounts.php';
							break;
						case 'asset':
							include 'includes/asset.php';
							break;
						case 'company':
							include 'includes/company.php';
							break;
						case 'document':
							include 'includes/document.php';
							break;
						case 'employee':
							include 'includes/employee.php';
							break;
						case 'expense':
							include 'includes/expense.php';
							break;
						case 'function':
							include 'includes/function.php';
							break;
						case 'idmas':
							include 'includes/idmas.php';
							break;
						case 'item':
							include 'includes/item.php';
							break;
						case 'loans':
							include 'includes/loans.php';
							break;
						case 'location':
							include 'includes/location.php';
							break;
						case 'member':
							include 'includes/member.php';
							break;
						case 'entry':
							include 'includes/entry.php';
							break;
						case 'summary':
							include 'includes/summary.php';
							break;
						case 'loanapplication':
							include 'includes/loanapplication.php';
							break;
						case 'bankrecon':
							include 'includes/bankrecon.php';
							break;
						case 'collateral':
							include 'includes/collateral.php';
							break;
						case 'pdcheck':
							include 'includes/pdcheck.php';
							break;
						case 'scheduleofpayment':
							include 'includes/scheduleofpayment.php';
							break;
					}
				}
			?>
			
        </div>
        <!-- /#page-wrapper -->
		
		<!-- Modal -->
		<div class="modal fade" id="myGlobalModal" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<!--<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 id="GlobalModalTitle" class="modal-title"></h4>
					</div>-->
					<div class="modal-body">
						<p id="GlobalModalMessage" class="text-center"></p>
					</div>
				</div>
			</div>
		</div>
		
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
	
	<!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	
	<!-- Bootstrap Datetimepicker -->
    <script src="bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	
	<!-- loadingoverlay.min -->
    <script src="js/loadingoverlay.min.js"></script>
	
	<!-- loadingoverlay_progress.min -->
    <script src="js/loadingoverlay.min.js"></script>
	
</body>

</html>
<script type="text/javascript">
	$(function(){
		
		var uid= <?php echo "'".$_SESSION['userid']."'"; ?>;
		
		if(uid == 0){
			//$('#login').data('dialog').open();
			window.location.href ='index.php';
		}
	});
</script>
<?php
ob_end_flush();
?>
