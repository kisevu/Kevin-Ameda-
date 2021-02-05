<?php 
session_start();
if(!isset($_SESSION['user_level'])||($_SESSION['user_level']!=1)){
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
<title>Administrators page</title>
</head>

<body>
	<?php include('includes\navigation.php');?>
	<script src="bower_components/bootstrap/dist/jquery/dist/jquery.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<script src="main.js"></script>
</body>
</html>
