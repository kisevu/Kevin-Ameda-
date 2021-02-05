<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/owl.carousel.css"/>
	<link rel="stylesheet" href="base.css"/>
</head>
<body class="bg-success">
		<?php include('includes\homePageNav.php');?>
	<div class="container-fluid">
			<div class="row jumbotron bg-info">
				<div class="col-md-2">
					<img src="img/Promast.png" class="img-responsive" alt="Promast's logo"/>
				</div>
			<div class="col-md-10">
			<h1 class="text-capitalize text-center">promast rental management system</h1>
				<p class="text-center">Welcome to Promast rental management system, a place where we give you the best of our outcome.</p>
				<p class="text-center">Our houses are lowly priced making anyone able to reside at our premises.</p>
		</div>
		</div>
		</div>
	<div class="container-fluid">
			<div class="row">
		<div class="col-md-8">
			<section id="newsletter" class="text-center pull-right">
<h4 class="text-primary">We believe that life should be made easy if houses are affordable.</h4>
		<h4 class="text-primary">Living made easier in Nairobi with houses at affordable prices.</h4>
		<h4 class="text-primary">Experience a five star lifestyle within our premises.</h4>
		<h4 class="text-primary">Register your details below for vacancy updates.</h4>
<form class="form-inline" method="POST" action="contact.php">
<div class="form-group">
<input class="form-control" placeholder="Your name">
</div>
<div class="form-group">
<input class="form-control" placeholder="Your email">
</div>
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#tenants-modal">Daily mailings 
	</button>
</form>
</section>
		</div>
	</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<img src="img/rowan-heuvel-51244-unsplash.jpg" class="img-responsive" alt="house at kikuyu" data-toggle="popover"
					 data-trigger="focus" title="House at kikuyu"/>
			</div>
			<div class="col-md-6">
				<img src="img/eric-muhr-1299451-unsplash.jpg" class="img-responsive" alt="house at Lavington" data-toggle="popover"
					 data-trigger="focus" title="house at lavington"/>
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