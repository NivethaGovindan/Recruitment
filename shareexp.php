<h1>Register User</h1>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<body background="bluebg.jpg">
<form action="dbRegister.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<table border="0" cellpadding="10" cellspacing="1" width="1000" align="center">

<tr class="tablerow"><td>company </td><td>:</td><td><input type="text" name="company"><span id='b' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Duration </td><td>:</td><td><input type="text" name="duration"><span id='d' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Salary</td><td>:</td><td><input type="text" name="salary"><span id='d' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Overall Experience<td>:</td></td><td> <input type="radio" name="rating"
      value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
      <input type="radio" name="rating" value="3" /> 3 <input type="radio"
      name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1
	  <span id='d' style="color: red;"></span></td>
<tr class="tablerow"><td>work culture<td>:</td></td><td> <input type="radio" name="rating"
      value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
      <input type="radio" name="rating" value="3" /> 3 <input type="radio"
      name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1
	  <span id='d' style="color: red;"></span></td>
<tr class="tablerow"><td>selection process</td>:<td></td><td> <input type="radio" name="rating"
      value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
      <input type="radio" name="rating" value="3" /> 3 <input type="radio"
      name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1
	  <span id='d' style="color: red;"></span></td>
<tr class="tablerow"><td>recommend this company? </td><td>:</td><td><input type="text" name="age" ><span id='e' style="color: red;"></span></td></tr>

<tr class="tablerow"><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>

