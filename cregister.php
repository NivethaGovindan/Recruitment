<script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_name.value == "" ||
		form1.f_name.value == "" ||
		form1.pwd.value == "" ||
		form1.e_mail.value == ""||
		form1.gender.value == ""||
		form1.dob.value == ""||
		form1.add.value == ""||
		form1.sta.value == "" ||
		form1.cou.value == "" )
		{
		
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
				//alert("Please, Enter The Username");
			form1.u_name.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The Username");
				form1.u_name.focus();
				
			}
			 if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			 if (form1.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();

			}
			
			 if (form1.e_mail.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
			}
			 if (form1.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
				
			}else
			{
				document.getElementById("spuid").innerHTML = "";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
			}
			 if (form1.dob.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter date of birth.";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();
				
			}
			else
			{
				document.getElementById("e").innerHTML = "";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();

			}
			 if (form1.add.value == "")
			{
				document.getElementById("f").innerHTML = "Please, Enter address.";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
				
			}
			else
			{
				document.getElementById("f").innerHTML = "";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
			}
			 if (form1.sta.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter state.";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();
				
			}
			else
			{
				document.getElementById("g").innerHTML = "";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();

			}
			 if (form1.cou.value == "")
			{
				document.getElementById("h").innerHTML = "Please, Enter country.";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
				
			}
			else
			{
				document.getElementById("h").innerHTML = "";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
			}
			return false;
		}
		else
			return true;
	}
</script>




<title>Register</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<form action="dbRegister.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<table border="0" cellpadding="10" cellspacing="1" width="1000" align="center">
<tr class="tableheader"><td>JOB SEEKER REGISTRAION</td><td></td><td></td></tr>
<tr class="tablerow">
	<td>Username</td><td>:</td>
	<td><input type="text" name="u_name" ><span id='a' style="color: red;"></span></td>
</tr>
<tr class="tablerow"><td>Fullname</td><td>:</td><td><input type="text" name="f_name"><span id='b' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Password</td><td>:</td><td><input type="password" name="pwd"><span id='c' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>E_Mail</td><td>:</td><td><input type="text" name="e_mail"><span id='d' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Gender</td><td>:</td><td><input type="radio" name="gender" value="1" checked="checked">male <input type="radio" name="gender" value="2">female<span id='spuid' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Mobile Number</td><td>:</td><td><input type="text" name="mob"><span id='g' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>City</td><td>:</td><td><input type="text" name="city"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Degree</td><td>:</td><td><input type="text" name="deg"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>College</td><td>:</td><td><input type="text" name="clg"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Cgpa</td><td>:</td><td><input type="text" name="cgpa"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>area of interest (1)</td><td>:</td><td><input type="text" name="a1"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>area of interest (2)</td><td>:</td><td><input type="text" name="a2"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>area of interest (3)</td><td>:</td><td><input type="text" name="a3"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Project (1)</td><td>:</td><td><input type="text" name="p1"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Project (2)</td><td>:</td><td><input type="text" name="p2"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Experience (1)</td><td>:</td><td><input type="text" name="e1"><span id='h' style="color: red;"></span></td></tr>
<tr class="tablerow"><td>Experience (2)</td><td>:</td><td><input type="text" name="e2"><span id='h' style="color: red;"></span></td></tr>


<tr class="tablerow"><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>

