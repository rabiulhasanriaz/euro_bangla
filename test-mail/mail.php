<?php

	$name = "Abu Bin Oalid";
	$location = "Location";
	$mobile = "01719134842";
	$email = "oalid.mmj@gmail.com";
	$from = "FROM:$name<$email>";
	$to = "oalid@iglweb.com, $email";
	$budget = "5000";
	$reson = "ABCD REASON";
	$department = "Department";
	$subject = "want $reson by BDT $budget";
	$user_message = "Custom Message";
	$message = "$name From $location to $department department <br/> Message:$user_message"
			. "<br> my cell number :$mobile";
	$mail = mail($to, $subject, $message, $from);
	var_dump($mail);
	die("END");

?>