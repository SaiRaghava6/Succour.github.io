<?php
if(!empty($_POST["send"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	
	$message = $_POST["message"];

	$toEmail = "srkoundinya@gmail.com";
	$mailHeaders = "From: " . $fname . " " . $lname . "<". $email .">\r\n". $message;
	if(mail($toEmail, $message, $mailHeaders)) {
	    $message1 = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact.html";
?>