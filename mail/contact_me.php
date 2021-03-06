<?php
require 'establecerConexion.php';

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Falto algun campo.";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$phoneos = strip_tags(htmlspecialchars($_POST['phoneos']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Log data to DB
$sql = "INSERT INTO subscribers (name, email, phone, phoneos, message) VALUES ('$name','$email_address','$phone','$phoneos','$message')";
mysqli_query($conn, $sql);

// Create the email and send the message
$to = "redir@domene96.com";
$email_subject = "Subscriber: $name";
$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email_address\n\n$phoneos Phone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@domene96.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";
$headers = "From: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
