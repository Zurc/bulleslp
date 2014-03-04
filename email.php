<?php 

$to  = 'pastorjt@gmail.com' . ', '; // note the comma
$to .= 'cruzjurado@gmail.com';

$name = $_REQUEST["username"];
$mail = $_REQUEST["useremail"];

$subject = "Sent by $name ";
$subject .= " from Bulles d'Or Landing Page";
$message = "Hi!, $name";
$message .= " has confirmed his/her attendance to the event. His/her email is $mail" ;
$message .= ".";

$headers = "From: doree@bullesdor.co.uk";

mail($to, $subject, $message, $headers, "-f doree@bullesdor.co.uk");

?>
