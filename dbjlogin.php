<?php
session_start();


$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM employertable WHERE email='".$_POST['email']."' AND pwd = '". $_POST['password']."'");
$row = mysqli_fetch_array($result);
//if the username and password are in db then its stored in session variables
// or else the message invalid username or password is displayed.

if(is_array($row)) {
	$_SESSION['companyid']=$row['hrid'];
header("Location:employerdashboard.php");
} else {
$message = "Invalid Username or Password!";
echo $message;
}


?>