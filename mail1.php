<?php 
$email = "sohampp26nov@gmail.com";//$_POST['email'];

$to = $email;
$subject = "Email Verification";
$message = "Click the <a href='".$email."'>LINK</a> to verify your E-mail.<p><h4>After verifying your email you will be able to use all the features of the website!</h4></p>";
$headers = "From: 9222.phansalkar.soham.svhs@gmail.com \r\n";
$headers .="MIME-Version: 1.0"."\r\n";
$headers .="Content-type:text/html;charset=UTF-8"."\r\n";

$emailsent = mail($to, $subject, $message, $headers);

if($emailsent){
    echo $emailsent;
}


?>