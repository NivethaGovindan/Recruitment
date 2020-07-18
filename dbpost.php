<body background="bluebg.jpg">
<?php
$cname=$_POST['c_name'];
$work=$_POST['work'];
$location=$_POST['location'];
$startdate=$_POST['startdate'];
$salary=$_POST['salary'];
$applyby=$_POST['applyby'];
$abtwork=$_POST['abtwork'];
$numvac=$_POST['numvac'];
$perk=$_POST['perk'];
$rqts=$_POST['rqts'];


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
	
	
$sql = "INSERT INTO posts (companyname,workname,location,startdate,salary,applyby,about,numavail,perks,reqmts)
VALUES ('$cname','$work','$location','$startdate','$salary','$applyby','$abtwork','$numvac','$perk','$rqts')";

			if (mysqli_query($conn, $sql)) {
    echo "your vaccancy has been posted successfully!!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?> 
</body>	