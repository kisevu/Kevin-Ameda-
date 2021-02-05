<?php
	session_start();
	include('mysqli-connect.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/owl.carousel.css"/>
	<link rel="stylesheet" href="base.css"/>
<title>Log in</title>
</head>
<body class="bg-success">
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-capitalize text-center">Welcome back and pick from where you left buddy!</h1> 
				</div>
			</div>
			<div class="row">
				<?php
				if(isset($_POST['login'])){
					if(isset($_POST['email']) && isset($_POST['psword']) ){
						$email = mysqli_real_escape_string($dbcon,$_POST['email']);
						$password = $_POST['psword'];
						$sql = "SELECT * FROM personal_info WHERE email = '$email'";
						$query = $dbcon->query($sql);

						if($query->num_rows < 1){
							$_SESSION['error'] = 'Cannot find account with the Email';
						}
						else{
							$row = $query->fetch_assoc();
							if(password_verify($password, $row['psword'])){
								$_SESSION['user_id'] = $row['email'];
								$_SESSION['user_level'] = $row['user_level'];
								if($row['user_level']==0)
								header('location: Tenants.php');
								else
								{
									header('location:admin.php');
								}
							}
							else{
								$_SESSION['error'] = 'Incorrect password';
								echo $_POST['psword'];
							}
						}
						
					}
					else{
						$_SESSION['error'] = "Fill in all the fields";
					}
				}
				
				
				
				
				
				
				/*
				
				if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
					require('mysqli-connect.php');
					if(!empty($_POST['email'])){
						$e=mysqli_real_escape_string($dbcon,$_POST['email']);
					}else{
						$e=FALSE;
						echo '<p class="error">You forgot to enter your email address</p>.';
					}
					if(!empty($_POST['psword'])){
						$p=mysqli_real_escape_string($dbcon,$_POST['psword']);
					}else{
						$p=FALSE;
						echo '<p class="error>You have to enter your </p>"';
					}
					if ($e && $p){
						//if the query did run correctly then do the following:
						$q="SELECT user_id,fname,user_level FROM personal_info WHERE (email='$e' AND psword=SHA1('$p'));)";
						$result=mysqli_query($dbcon,$q);
						if(@mysqli_num_rows($result)==1){
							session_start();
							$_SESSION=mysqli_fetch_array($result,MYSQLI_ASSOC);
							//ensure the user_level is an integer and not true or false for that matter:
							$_SESSION['user_level']=(int) $_SESSION['user_level'];
							$url=($_SESSION['user_level']===1)? 'Admin.php': 'Tenants.php';
							header('Location: '.$url);
							exit();
							mysqli_free_result($result);
							mysqli_close($dbcon);
						}else { // No match was made.
echo '<p class="error">The e-mail address and password entered do not match our records 
<br>Perhaps you need to register, just click the Register button on the header menu</p>';
}
					}else { // If there was a problem.
echo '<p class="error">Please try again.</p>';
}
mysqli_close($dbcon);
				} */
				?>
						<form method="post" action="#" class="form-horizontal">
							<div class="form-group">
						<label class="col-md-2 control-label" for="email">Email Address</label>
						<div class="col-offset-md-2 col-md-6">
							<input type="email" class="form-control" id="Email" placeholder="promastorg@gmail.com"
								   name="email" size="30" maxlength="40" value="<?php if(isset($_POST['email']))
	echo $_POST['email']; ?>"/>
						</div>
					</div>
									<div class="form-group">
						<label class="col-md-2 control-label" for="password">Password</label>
						<div class="col-offset-md-2 col-md-6">
							<input type="password" class="form-control" id="password" placeholder="Enter your password here"
								   name="psword" size="12" maxlength="12"/>
						</div>
					</div>
							<div class="form-group">
						<div class="col-md-offset-2 col-md-10">
						<button type="submit" name="login" class="btn btn-danger">Submit</button>
						<?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; unset($_SESSION['error']); } ?>
					</div>
					</div>
						</form>
				
		</div>
	</div>
		<div class="container-fluid">
			<div class="jumbotron">
				<h2 class="text-center text-info text-capitalize">We got plenty of houses if you need shifting,worry no more we got you!</h2>
								<div class="col-md-5">
					<!--carousel-->
						<div id="carousel-notification" class="carousel slides" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/rowan-heuvel-51244-unsplash.jpg" width="512" alt="house at loresho"/>
						<div class="carousel-caption">
							<p>Vacant house at Loresho ridge</p>
							<!--the below code for ol  for addition of the carousel-indicators-->
							<ol class="carousel-indicators">
								<li data-target="#carousel-notification" data-slide-to="0" class="active"></li>
<li data-target="#carousel-notification" data-slide-to="1"></li>
<li data-target="#carousel-notification" data-slide-to="2"></li>
							</ol>
							<!--carousel-navigation controls-->
							<a class="left carousel-control" href="#carousel-notification" role="button"
data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-notification" role="button"
data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
						</div>
					</div>
					<div class="item">
						<img src="img/eric-muhr-1299451-unsplash.jpg" width="512" alt="house at donny"/>
						<div class="carousel-caption">
							<p>Vacant house at donholm</p>
												<ol class="carousel-indicators">
								<li data-target="#carousel-notification" data-slide-to="0" class="active"></li>
<li data-target="#carousel-notification" data-slide-to="1"></li>
<li data-target="#carousel-notification" data-slide-to="2"></li>
							</ol>
							<a class="left carousel-control" href="#carousel-notification" role="button"
data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-notification" role="button"
data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
						</div>
					</div>
					<div class="item">
						<img src="img/rowan-heuvel-51244-unsplash.jpg" width="512" alt="house at kitisuru"/>
						<div class="carousel-caption">
							<P>Vacant house at Kitisuru</P>
												<ol class="carousel-indicators">
								<li data-target="#carousel-notification" data-slide-to="0" class="active"></li>
<li data-target="#carousel-notification" data-slide-to="1"></li>
<li data-target="#carousel-notification" data-slide-to="2"></li>
							</ol>
							<a class="left carousel-control" href="#carousel-notification" role="button"
data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-notification" role="button"
data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
						</div>
					</div>
				</div>
			</div>
					<!--carousel-->
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
