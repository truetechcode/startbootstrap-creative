<?php
// Check for empty fields
if (empty($_POST['email'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Please provide your email!";
   return false;
   }
if(empty($_POST['email_add'])){  
$email_address = strip_tags(htmlspecialchars($_POST['email']));
   
// Create the email and send the message
$to = 'subscribe@truetech.com.ng'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "icHUB Subscription";
$email_body = "Inform me when you are up and runing";
$headers = "From: noreply@truetech.com.ng\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
}
?>