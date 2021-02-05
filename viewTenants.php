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
<title>View Tenants details</title>
</head>

<body class="bg-success">
	<?php include('includes\navigation.php');?>
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-2">
					<img src="img/Promast.png" class="img-responsive" alt="promast community logo"/>
				</div>
				<div class="col-md-10">
					<h1 class="text-capitalize text-center">Here are the Tenants details at a glance&#33;</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php 
					require('mysqli-connect.php'); // make a connection to the database to retrieve the data:
					$q="SELECT fname,lname,DATE_FORMAT(registration_date,'%M %d, %Y')AS registration_date,
					email,psword,user_id, user_level
					FROM personal_info ORDER BY user_id ASC";
					$result=@mysqli_query($dbcon,$q);
					if($result){
						// include('table.php');
						echo '<table class="table table-stripped table-hover table-bordered bg-info">
<tr class="bg-primary"><td><b>Edit Records</b></td><td><b>Delete Records</b></td><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>Registration date</b></td><td><b>email address</b></td><td><b>User identification number</b></td><td><b>password characters</b></td><td><b>User_level</b></td></tr>';
// Fetch and print all the records: 
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<tr>
<td><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
<td><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
<td>' . $row['fname'] . '</td> 
<td>' . $row['lname'] . '</td>
<td>' . $row['registration_date'] . '</td>
<td>' . $row['email'] . '</td>
<td>' . $row['user_id'] . '</td>
<td>' . $row['psword'] . '</td>
<td>' . $row['user_level'] . '</td></tr>';
}
echo '</table>'; // Close the table so that it is ready for displaying.
mysqli_free_result ($result); // Free up the resources.
} else { // If it did not run OK.
// Error message:
echo '<p class="error">The current users could not be retrieved. We apologize 
for any inconvenience.</p>';
// Debug message:
echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} // End of if ($result)
mysqli_close($dbcon); // Close the database connection:
					?>
			
				</div>
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
