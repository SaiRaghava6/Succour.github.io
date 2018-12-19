<?php

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mailFrom=$_POST['email'];
	$message=$_POST['message'];
	
	$mailTo="raghavsai106@gmail.com";
	$headers="From: ".$mailFrom;
	$txt="You have received an email from ".$fname." ".$lname.".\n\n".$message;
	
	mail($mailTo, $txt, $headers);
	header("Location: contact.html?mailsend");
}
	