<?php
session_start();
$postid=$_GET['postid'];
?>
<html>
<head>

<title>details</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
</head>
<body background="bluebg.jpg">
<br/>
<form method='post' action='apply.php'>
<td>
<table border="0" cellpadding="10" cellspacing="1" width="1000" align="center">
<?php

$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM posts where postid=$postid");

while($row=mysqli_fetch_assoc($result)){

?>
<tr class="tableheader">
<td>job details <?php echo $row['workname']?></td></tr>

<tr class="tablerow"><td align="left">Company Name:</td></tr>
<tr class="tablerow"><td align="left"><?php echo $row['companyname'];?></td></tr>

<tr class="tablerow"><td align="left">start date:</td></tr>
<tr class="tablerow"><td align="left"><?php echo $row['startdate'];?></td></tr>

<tr class="tablerow"><td align="left">salary:</td></tr>
<tr class="tablerow"><td align="left"><?php echo $row['salary']; ?></td></tr>

<tr class="tablerow"><td align="left">apply by:</td></tr>
<tr class="tablerow"><td align="left"><?php echo $row['applyby']; ?></td></tr>


<tr class="tablerow"><td>aboutwork:</td></tr>
<tr class="tablerow"><td><?php echo $row['about']?></td></tr>

<tr class="tablerow"><td>number of vacancies:</td></tr>
<tr class="tablerow"><td><?php echo $row['numavail']?></td></tr>

<tr class="tablerow"><td>perks:</td></tr>
<tr class="tablerow"><td><?php echo $row['perks']?></td></tr>

<tr class="tablerow"><td>requirements:</td></tr>
<tr class="tablerow"><td><?php echo $row['reqmts']?></td></tr>
<input type="hidden" name="sid" value="<?php echo $_POST['sid']?>">

<tr class="tablerow"><td><input type="submit" value="apply"></td></tr>

<input type="hidden" name="hrid" value="<?php echo $row['companyid']?>">


<?php }
mysqli_close($conn); ?>
</table>

</form>
</body>
</html>       