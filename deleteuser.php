<?php
include "connection.php";
$conn = mysqli_connect($serevr, $username, $password);

$userid = $_GET['id'];

$sql = "DELETE FROM `".$dbname."`.`vidyalankar_edu` WHERE no=".$userid."";

    if ($conn->query($sql) === TRUE) {
    header("location: adminpannel.php");
    } else {
    echo "Error deleting record: " . $conn->error;
    }
    echo $fileInfo->getFilename();
?>