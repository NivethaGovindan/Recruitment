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
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xmlhttp.open("GET","try2.php?q="+str,true);
xmlhttp.send();
}
}
</script>
</head>
<body>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a location:</option>
<option value="chennai">chennai</option>
<option value="bangalore">bangalore</option>
<option value="mumbai">mumbai</option>
</select>
<div id="txtHint"><b>Person info will be listed here...</b></div>
</body>
</html>
