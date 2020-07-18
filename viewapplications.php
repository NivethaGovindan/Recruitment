<?php
session_start();
$cid=$_SESSION['companyid'];

$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM applications WHERE cid= $cid");
$row = mysqli_fetch_array($result);
//if the username and password are in db then its stored in session variables
// or else the message invalid username or password is displayed.
	if(is_array($row)) {
	
	header("Location:companyapplications.php");
	} else {
$message = "Sorry!!! No applicaitons....";
}


?>