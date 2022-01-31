<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_form = 'vector74ai@gmail.com';
	
	$email_subject = "Message form website";
	
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
	
	
	$to = "sunit02sharma@gmail.com";
	
	$headers = "From: $email_form \r\n";
	$headers .= "Reply-to: $visitors_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	
	header("location: contact.html")



?>