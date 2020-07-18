
<title>Register</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<form action="dbpost.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<table border="0" cellpadding="10" cellspacing="1" width="1000" align="center">
<tr class="tableheader">
	<td>POST</td><td></td>
	<td></td>
</tr>
<tr class="tablerow">
	<td>company name</td><td>:</td>
	<td><input type="text" name="c_name" ><span id='a' style="color: red;"></span></td>
</tr>
<tr class="tablerow"><td>Work</td><td>:</td><td><input type="text" name="work"><span id='b' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Location</td><td>:</td><td><input type="text" name="location"><span id='c' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>start date</td><td>:</td><td><input type="text" name="startdate"><span id='d' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Salary</td><td>:</td><td><input type="text" name="salary" ><span id='e' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Apply By</td><td>:</td><td><input type="text" name="applyby"><span id='g' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>About Work</td><td>:</td><td><textarea rows="3" cols="17" name="abtwork"></textarea><span id='f' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Number Of VACCANCIES</td><td>:</td><td><input type="text" name="numvac"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Perks</td><td>:</td><td><textarea rows="3" cols="17" name="perk"></textarea><span id='f' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Requirements</td><td>:</td><td><textarea rows="3" cols="17" name="rqts"></textarea><span id='f' style="color: red;"></span></td></tr>

<tr class="tablerow"><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table>
</form>

