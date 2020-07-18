<?php
// the message
$msg = "hey nivetha g\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("gnivetha1997@gmail.com","hey php test",$msg))
	echo "sent";
else
	echo "failed";
?>