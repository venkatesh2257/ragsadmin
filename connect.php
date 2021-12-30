<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename ="work_details";

$conn =mysqli_connect($servername,$username,$password,$databasename);
// checking the connectin 
if (!$conn) {
	die("connectin failed" . mysqli_connect_error());
}
?>