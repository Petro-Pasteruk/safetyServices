<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$text = $_POST["text"];
$messageForm = $_POST["message"];

$message = 'I left an application '.$name.'. ';
$message .= ''.$email.'- his mail. ';
$message .= ''.$phone.'-his phone. ';
$message .= ''.$text.'-his text. ';
$message .= ''.$messageForm.'-his message. ';

$subject = 'Quest Safety Services';
$to = 'petropasteruk@gmail.com';
$spectex = '<!DOCTYPE HTML><html><head><title>Quest</title></head><body>';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
if (isset($_POST['send'])) {
    mail( $to , $subject, $spectex.$message.'</body></html>', $headers );
}

?>

