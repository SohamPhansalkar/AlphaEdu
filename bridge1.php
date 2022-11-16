<?php
session_start();

$user_mail = $_GET['umail'];
$user_name = $_GET['user_name'];
$user_id = $_GET['user_id'];

$url = "https://alphaeducation.w3spaces.com/superbridge.html?mail=".$user_mail."&otp=5ujkf".$user_name."68ifb&name=".$user_name."&id=".$user_id."";
$url2 = "https://vidyalankaredu.000webhostapp.com/updatemail.php?mail=".$user_mail."&otp=5ujkf".$user_name."68ifb&name=".$user_name."&id=".$user_id."";

// $emailsent = mail($to, $subject, $message, $headers);

// if($emailsent){
//     echo $emailsent;
// }
//header("sign.php");
//echo "<script>document.getElementById('hideE').style.display = 'none';</script>";

$email = $user_mail;

$to = $email;
$subject = "Email Verification";
$message = "
    <!doctype html>
    <html lang='en'>
    <head>
    <meta charset='utf-8'>
    </head>
    <body>
    Click the <a href='".$url."'>LINK</a> to verify your E-mail.<p><h4>After verifying your email you will be able to use all the features of the website!</h4></p>
    </body>
    ";
$headers = "From: 9222.phansalkar.soham.svhs@gmail.com \r\n";
$headers .="MIME-Version: 1.0"."\r\n";
$headers .="Content-type:text/html;charset=UTF-8"."\r\n";

$emailsent = mail($to, $subject, $message, $headers);

if($emailsent){
    echo $emailsent;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Alpha edu- verify</title>
  </head>
  <body>

    <br>
    <br>
    <br>

<div class="card text-center">
  <div class="card-header">
    Email Verification
  </div>
  <div class="card-body">
    <h5 class="card-title">Check Your mail  <img src="https://img.icons8.com/color/48/000000/gmail-new.png"/></h5>
    <p class="card-text">Just click the link given in your mail to verify your account.<br>After verification all the features will be unlocked!</p>
    <a href="https://mail.google.com/" class="btn btn-primary">Open G-mail</a>
  </div>
  <div class="card-footer text-muted">
    <img src="https://img.icons8.com/fluency/20/000000/gmail.png"/>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
