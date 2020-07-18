<body background="bluebg.jpg" align="center">
<?php
$u_name=$_POST['u_name'];
$o_name=$_POST['o_name'];
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$mob=$_POST['mob'];
$abt=$_POST['abt'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	
$sql = "INSERT INTO employertable (uname,oname,pwd,email,mobno,abtcmp)
VALUES ('$u_name','$o_name','$pwd','$e_mail','$mob','$abt')";

			if (mysqli_query($conn, $sql)) {
    echo "You have registered successfully";?>
	
	<a href="jlogin.php">click here to login</a>
	<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?> 	