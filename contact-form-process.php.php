<?php 
$email_to = 'kushalkulle@gmail.com'; 
$email_subject = 'Site contact form'; 
$headers = "From: ".$_POST["Email"]."\r\n"; 
$headers .= "Reply-To: ".$_POST["Email"]."\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$email_message = "Name: ".$_POST["Name"].""; 
$email_message .= "Email: ".$_POST["Email"].""; 
$email_message .= "Comment: ".nl2br($_POST["Message"]).""; 
mail($email_to, $email_subject, $email_message, $headers) or die ("Failure"); 
?>