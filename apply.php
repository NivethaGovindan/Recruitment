<body background="bluebg.jpg" align="center">
<?php
session_start();
$sid=$_SESSION['user_id'];
$hrid=$_POST['hrid'];
$conn = mysqli_connect("localhost","root","","recruitment");
$sql = "INSERT INTO applications (uid,cid)
			VALUES ('$sid','$hrid')";
if (mysqli_query($conn, $sql)) {
    echo "Your application sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//header("Location:apsuccess.php");?>