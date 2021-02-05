<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rent</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/owl.carousel.css"/>
	<link rel="stylesheet" href="base.css"/>
</head>
<body class="bg-success">
	<?php include('includes\navigation.php');?>
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-capitalize text-center">Welcome and see your Rent payment summary</h1>
					<p class="text-capitalize text-primary text-center">On this page is where you can see your payment record and perform many tasks.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="jumbotron">
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
						echo '<table class="table table-stripped table-bordered bg-info">
<tr class="bg-primary"><td>First Name</td><td>Second Name</td><td>user identification number</td><td><b>present date</b></td><td><b>Stay period</b></td><td><b>Total amount paid</b></td></tr>';
// Fetch and print all the records: 
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<tr>
<td><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
<td><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
<td>' . $row['fname'] . '</td> 
<td>' . $row['lname'] . '</td>
<td>' . $row['user_id'] . '</td>
<td>' . $row['present_date'] . '</td>
<td>'.$row['stay_period'].'</td>
<td>'.$row['Amount'].'</td></tr>';
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
mysqli_close($dbcon);
					?>
				</div>
			</div>
		</div>
	</div>
	<?php include('includes\footer.php');?>
	<script src="bower_components/bootstrap/dist/jquery/dist/jquery.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<script src="main.js"></script>
</body>
</html>