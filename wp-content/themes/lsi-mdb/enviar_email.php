<?php
$from 		= $_POST['from'];
$name 		= $_POST['name'];
$message 	= $_POST['message'];

$to      	= 'nathaniel.una@gmail.com';
$subject 	= '[SITE LSI] ' . $name;
$headers 	= 'From: ' . $from . "\r\n" .
		'Reply-To: ' . $from . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

$fp = fopen("emails.txt", "a");
fwrite($fp, "From: " . $name . " - " . $from . "\r\nMensagem: " . $message . "\r\n\r\n");
fclose($fp);

mail($to, $subject, $message, $headers);
?>

