<?php 
include "connection.php";
session_start();

$name = $_GET['name'];
$OTP = $_GET['otp'];
$mail = $_GET['mail'];
$id = $_GET['id'];

$conn = mysqli_connect($serevr, $username, $password);

$verifyotp = "5ujkf".$name."68ifb";


if ($verifyotp == $OTP) {
    //$sql = "UPDATE `".$dbname."`.`vidyalankar_edu` SET `isVerified`=1, `email`='".$mail."' WHERE `vidyalankar_edu`.`no` = '".$id."'";
    $sql = "UPDATE `".$dbname."`.`vidyalankar_edu` SET `isVerified`=1, `email`='".$mail."' WHERE `vidyalankar_edu`.`no` = ".$id."";
    echo "<script>alert('Done E-mail verified! Back to login');</script>";
    if ($conn->query($sql) === TRUE) {
        //echo"$id, $name, $mail";
        echo "<script>window.location.href = 'https://vidyalankaredu.000webhostapp.com/logout.php';</script>";
    }else{
    echo $conn->error;
}}

//$sql = "UPDATE `".$dbname."`.`".$dbname."`.`vidyalankar_edu` SET `isVerified`=1, `email`='".$mail."' WHERE `vidyalankar_edu`.`no` = '".$userno."'";

//$sql = "UPDATE `".$dbname."`.`vidyalankar_edu` SET `isVerified`=1, `email`='testemail.com' WHERE `vidyalankar_edu`.no = 7";
//echo "<script>alert('Done E-mail verified! Back to login');</script>";
  
    //if($conn->query($sql) == True){
    //  echo "<script>window.location.href = 'https://vidyalankaredu.000webhostapp.com/logout.php';</script>";
   // }else{
    //  echo $conn->error;
 // }
$conn->close();

?>