<?php

if($_POST['arrayData']) { 
	    
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$text = $_POST["text"];
	$messageForm = $_POST["message"];

	$message = 'I left an application '.$name.'. ' . "<br />";
	$message .= $email.'- his mail. ' . "<br />";
	$message .= $phone.'-his phone. ' . "<br />";
	$message .= $text.'-his text. ' . "<br />";
	$message .= $messageForm.'-his message. ' . "<br />";

   $project_name = "Sefety Services";
   $admin_email = "example@gmail.com";

    
function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name) . '<noreply@yourdomain.com>' . PHP_EOL . 
'Reply-To: '.$admin_email.'' . PHP_EOL; 


mail($admin_email, adopt($project_name), $message, $headers );
    

?>

