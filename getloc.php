<head>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
</head>
<?php
$q = $_GET['q'];
$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM posts where location='".$q."'");
?>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<?php
while($row=mysqli_fetch_assoc($result)){
	?>
<tr class="tableheader">
<b><td align="left"><?php echo $row['workname']; ?></td>
<td></td><td></td><td></td>
</tr>
<tr class="tablerow" width="1000">
<td align="left">start date</td>
<td align="left">salary</td>
<td align="left">apply by</td>
<td align="left">location</td>
</tr>

<tr class="tablerow">
<td align="left"><?php echo $row['startdate'];?></td>
<td align="left"><?php echo $row['salary']; ?></td>
<td><?php echo $row['applyby']; ?></td>
<td><?php echo $row['location']; ?></td>
</tr>
<tr class="tablerow">
<td></td><td></td><td></td>
<?php $postid=$row['postid'];?>
<td align="right"><a href="view_details.php?postid=<?php echo $postid?> " >view details</td>
</tr>

 <?php
}
mysqli_close($conn);
?>