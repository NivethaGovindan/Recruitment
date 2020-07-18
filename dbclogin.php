<?php
session_start();

$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM jobseekertable WHERE email='".$_POST['email']."' AND pwd = '". $_POST['password']."'");
$row = mysqli_fetch_array($result);
//if the username and password are in db then its stored in session variables
// or else the message invalid username or password is displayed.
$_SESSION['user_id'] = $row['uid'];
if(is_array($row)) {
	
header("Location:jobseekerdashboard.php");
} else {
$message = "Invalid Username or Password!";
}


?>