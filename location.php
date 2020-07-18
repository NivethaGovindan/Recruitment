<html>
<head>
<script>
function showUser(str) {
	if (str == "") {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
	
		if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
		} else {
	// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
	//var element=document.getElementById("strtTxt");
	//element.parentNode.removeChild(element);
	
	//document.getElementById("strtTxt").innerHTML = "";
document.getElementById("txtHint").innerHTML = this.responseText;

}
};
xmlhttp.open("GET","getloc.php?q="+str,true);
xmlhttp.send();
}
}
</script>

<title>jobseeker dashboard</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"/>
</head>
<body background="bluebg.jpg">
<form method='post' action=' '>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr><a href="jobseekerdashboard.php">home</tr>
<tr class="tablerow">prefereces

<select name="users" onchange="showUser(this.value)">
<option value="chennai">Select a location:</option>
<option value="chennai">chennai</option>
<option value="bangalore">bangalore</option>
<option value="mumbai">mumbai</option>
</select>

</tr>

<tr>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" >

<div id="txtHint">
</div>

</table></tr>

</table>
</form>
</body>
</html>       