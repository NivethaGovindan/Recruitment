<?php
session_start();
?>
<html>
<head>
<title>jobseeker dashboard</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
</head>
<body background="bluebg.jpg">

<br/>
<form method='post' action=' '>
<table border="0" cellpadding="10" cellspacing="1" width="1000" align="center">
<tr class="tablerow">
<td></br>


</td>
<td>Jobs</td><td></td>
</tr>
<tr>
<td class="mycol">
<a href="nloc.php">search by location


</td>
<td>
<table border="0" cellpadding="10" cellspacing="1" width="800" >
<?php

$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM posts");

while($row=mysqli_fetch_assoc($result)){

?>

<div id="strtTxt">
<tr class="tableheader">
<b><td align="left"><?php echo $row['workname']; ?></td>
<td></td><td></td>
</tr>
<tr class="tablerow" width="1000">
<td align="left">start date</td>
<td align="left">salary</td>
<td align="left">apply by</td>
</tr>

<tr class="tablerow">
<td align="left"><?php echo $row['startdate'];?></td>
<td align="left"><?php echo $row['salary']; ?></td>
<td><?php echo $row['applyby']; ?></td>
</tr>
<tr class="tablerow">
<td></td><td></td>
<?php $postid=$row['postid'];?>
<td align="right"><a href="view_details.php?postid=<?php echo $postid?> " >view details</td>
</tr>

</div>
<div id="txtHint">
</div>
<?php }
mysqli_close($conn); ?>
</table>
</td>
<!--<td class="mycol">-->
<!--<a href="shareexp.php">share your experience</td>-->
<!--<td class="mycol"><a href="reviews.php">Company reviews</td>-->
<td class="mycol"><a href="fpdf13\resumes\resume.php">resume</td>
</tr>
</table>
<input type="hidden" name="sid" value="<?php echo $_sid?>">
</form>
</body>
</html>       