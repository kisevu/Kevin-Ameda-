<!--Code for connecting to the database-->
<?php
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','promastidb');
DEFINE('DB_PASSWORD','calvoh96');
DEFINE('DB_USER','root');
$dbcon=@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MYSQL'.mysqli_connect_error());
mysqli_set_charset($dbcon,'utf8');
?>