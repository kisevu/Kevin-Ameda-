<?php 
session_start();
if(!isset($_SESSION['user_level'])||($_SESSION['user_level']!=0)){
	header("Location: login.php");
	exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/owl.carousel.css"/>
	<link rel="stylesheet" href="base.css"/>
<title>Tenants</title>
</head>
<body class="bg-success">
	<?php include('includes\navigation.php');?>
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-capitalize text-center">Welcome to the Tenants space!</h1>
					<p class="text-capitalize text-primary text-center">On this page is where you can see your payment record and perform many tasks.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
							<ul class="nav nav-tabs nav-justified bg-danger">
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-credit-card"></span>Pay Bills here<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="Rent.php">Rent</a></li>
						<li><a href="#Water.php">Water bills</a></li>
						<li><a href="#Electricity.php">Buy Electrical tokens</a></li>
						
					</ul>
			</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-bookmark"></span>Get your payment Summary<b class="caret"></b>
							<ul class="dropdown-menu">
								<li><a href="#Annual.php">Annually</a></li>
								<li><a href="#Semi_annually.php">Semi annually</a></li>
								<li><a href="#Quartely.php">Quarterly</a></li>
								<li><a href="#Monthly.php">Monthly</a></li>
							</ul>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-home"></span>Complaint tab<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#switch.php">Switch houses</a></li>
								<li><a href="#Renovations.php">Renovations</a></li>
							</ul>
						</li>
								<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-"></span>Account Settings</a></li>
		<li>
			<form role="search" class="navbar-form navbar-right">
		<div class="form-group">
			<input type="text" placeholder="search here" class="form-control">
		</div>
	</form>
		</li>
		</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center text-capitalize text-primary">promast is a community that benefits everyone</h2>
					<img src="img/4k-wallpaper-audi-audi-r8-1402787 - Copy.jpg" class="img-responsive" alt="background color"/>
				</div>
>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="jumbotron">
			<?php include('includes\footer.php');?>
		</div>
	</div>
	<script src="bower_components/bootstrap/dist/jquery/dist/jquery.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<script src="main.js"></script>
</body>
</html>
