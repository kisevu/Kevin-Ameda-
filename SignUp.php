<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign up</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/owl.carousel.css"/>
	<link rel="stylesheet" href="base.css"/>
</head>
<body class="bg-success">
	<div class="container-fluid">
		<div class="jumbotron">
			<h1 class="text-capitalize text-center">Welcome to the promast community!</h1>
		</div>
	</div>
	<section id="contact" class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<?php 
				//performing an insert query and adding records to our database table:
				if($_SERVER['REQUEST_METHOD']=='POST'){
					$errors=array(); //here we initialize an array of errors:
					//was the first name entered?
					if(empty($_POST['fname'])){
						$errors[]='You did not enter your first name.';
					}else{
						$fn=trim($_POST['fname']);
					}
					if(empty($_POST['lname'])){
						$errors[]='you did not enter your last name.';
					}else{
						$ln=trim($_POST['lname']);
					}
					//did the two passwords match?
					if(!empty($_POST['psword1'])){
						if($_POST['psword1']!=$_POST['psword2']){
							$errors[]='Your passwords did not match.';
						}else{
							$p=trim($_POST['psword1']);
						}
					}else{
						$errors[]='you did not enter your password.';
					}
					if(empty($_POST['email'])){
						$errors[]='You did not enter your email address.';
					}else{
						$e=trim($_POST['email']);
					}
					//start a successful session: i.e all the fields were field out?
					if(empty($errors)){ //if no problems register users to the database:
						require('mysqli-connect.php'); //make a connection:
						//make the query:
						$hashed_p = password_hash($p,PASSWORD_DEFAULT);
						$q="INSERT INTO personal_info(user_id,fname,lname,email,psword,registration_date)VALUES
						(' ','$fn','$ln','$e','$hashed_p',NOW() )";
						$result=@mysqli_query($dbcon,$q); //run the query:
						if($result){
							 //if the query ran correctly?
							//echo some wonderful message after the successful registration:
							echo '<p class="text-center text-success">You have successfully been registered to the promast community</p>';
						 //header("location:  login.php");
							exit();// End of successful session:
						}else{
							//if the form handler or the database contained some problems:
							echo '<h2>System error</h2>
							<p class="error">You could not be registered due to system error.
							We apologize for any inconvinience.</p>';
							//debug message:
							echo '<p>'.mysqli_error($dbcon).'<br><br>Query:'.$q.'</p>';
						}
						mysqli_close($dbcon);
						exit();
					}else{
						echo '<p class="text-capitalize text-info">You were successfully registered into Promast community.</p>';
						header("location:  login.php");
					}
					
				}
				?>
				<form class="form-horizontal" action="SignUp.php" method="post">
					<div class="form-group">
						<label class="col-md-2 control-label" for="fname">First Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="fname" placeholder="Enter your First name"
								   name="fname" size="30" maxlength="40" value="<?php if(isset($_POST['fname']))
	echo $_POST['fname']; ?>"/>
						</div>
					</div>
					<div class="form-group">
			<label class="col-md-2 control-label" for="lname">Last Name</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="lname" placeholder="Enter your second name" 
					   name="lname" size="30" maxlength="50" value="<?php if(isset($_POST['lname']))
	echo $_POST['lname']; ?>"/>
			</div>
					</div>
					<div class="form-group">
			<label class="col-md-2 control-label" for="psword1">Password</label>
			<div class="col-md-10">
				<input type="password" class="form-control" id="psword1" placeholder="Enter your password"
					   name="psword1" size="12" maxlength="12" value="<?php if(isset($_POST['psword1']))
	echo $_POST['psword1']; ?>"/>&nbsp;
			</div>
					</div>
					<div class="form-group">
			<label class="col-md-2 control-label" for="psword2">Confirm password</label>
			<div class="col-md-10">
				<input type="password" class="form-control" id="psword2" placeholder="Confirm your password"
					  name="psword2" size="12" maxlength="12" value="<?php if(isset($_POST['psword2']))
	echo $_POST['psword2']; ?>" />&nbsp; 
				
			</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="email">Email address</label>
						<div class="col-md-10">
							<input type="email" class="form-control" id="email" placeholder="promast@gmail.com"
								   name="email" size="30" maxlength="60" value="<?php if(isset($_POST['email']))
	echo $_POST['email']; ?>"/>
						</div>
					</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<label class="checkbox">
						<input type="checkbox" value="">
						By signing up you show that you'll comply to the regulations and the copy right of the promast community.
					</label>
				</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-10">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
					</div>
	</form>
			</div>
		</div>
	</section>
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
