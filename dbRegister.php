<body background="bluebg.jpg" align="center">
<?php
$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$gender=$_POST['gender'];
$mob=$_POST['mob'];
$city=$_POST['city'];
$deg=$_POST['deg'];
$clg=$_POST['clg'];
$cgpa=$_POST['cgpa'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$e1=$_POST['e1'];
$e2=$_POST['e2'];

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
	
	
$sql = "INSERT INTO jobseekertable (uname,fname,pwd,email,gender,mobno,city,degree,college,cgpa,aofi1,aofi2,aofi3,p1,p2,e1,e2)
VALUES ('$u_name','$f_name','$pwd','$e_mail','$gender','$mob','$city','$deg','$clg','$cgpa','$a1','$a2','$a3','$p1','$p2','$e1','$e2')";

			if (mysqli_query($conn, $sql)) {
    echo "registraion successful";?>
	<br/><a href="clogin.php">click here to login</a>
	<?php
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?> 	