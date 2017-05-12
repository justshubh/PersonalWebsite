<?php 
$to = "shubham.jha96@gmail.com"; 
$subject = "Support requested by ".$_POST['name']; 
$name_field = $_POST['name']; 
$email_field = $_POST['email']; 
$message = $_POST['message']; 

$headers = 'From: '.$_POST['email'].'' . "\r\n" . 'Reply-To: '.$_POST['email'].'' . "\r\n" . 
'X-Mailer: PHP/' . phpversion(); 

$body = $message; 

@mail($to, $subject, $body, $headers ); header( 'Location:thankyou.php' ) ; //replace with landing page. ?>