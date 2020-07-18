<?php
session_start();
$cid=$_SESSION['companyid'];?>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
<body background="bluebg.jpg">
<table border="0" cellpadding="10" cellspacing="1" width="1000" align="center">
<?php
$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT jobseekertable.fname,jobseekertable.uid FROM jobseekertable,applications where applications.uid=jobseekertable.uid and applications.cid=$cid");


while($row=mysqli_fetch_assoc($result)){
?>

<tr class="tableheader" width="1000">
<td align="left">applicant's name</td>
<td align="left">applicant's resume</td>
</tr>

<tr class="tablerow">
<td align="left"><?php echo $row['fname'];?></td>
<td align="left"><a href="fpdf13\resumes\cresume.php?resumeid=<?php echo $row['uid']?>">resume</td>
</tr>
<?php  } ?>
</table>
</body>