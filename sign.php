<?php
    include "connection.php";

    if(isset($_POST['name'])){

    
    // INSERT INTO `vidyalankar_edu` (`name`, `password`, `other`) VALUES ('Keshav Phansalkar', '1234', 'for future');

    // $serevr = "localhost";
    // $username = "root";
    // $password = "";

    $conn = mysqli_connect($serevr, $username, $password);

    if(!$conn){
        die("Failed". mysqli_connect_error());
    }
    //echo "success";

    $name =$_POST['name'];
    $Password =$_POST['Password'];

    $sql = "INSERT INTO `id19449432_vidyalankar_edu`.`vidyalankar_edu` (`name`, `password`, `other`, `email`, `isVerified`) VALUES ('$name', '$Password', 'for future', ' ', 0);";

    if($conn->query($sql) == True){
      session_start();
      $_SESSION['user_name'] = $name;
      $_SESSION['user_pass'] = $Password;
      //$_SESSION['userno'] = $row['no'];
      
      $result = mysqli_query($conn, "SELECT * FROM `".$dbname."`.`vidyalankar_edu`");
      while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['userno'] = $row['no'];
      }
      
      header("location: vemail.php");
    }else{
        echo $conn->error;
    }
    

    $conn->close();

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>Alpha edu - signIn</title>

    <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    <link href="/static/static_root/css/ee-login.min.css" rel="stylesheet">

  </head>
  <body class="in-bodys">

    <div class="acard card">
    <div class="logodiv"><img src="alphaedulogo.png" class="card-img-top" alt="Vidyalankar logo"></div>
        <div class="card-body login-card">
          <h5 class="card-title">Sign-In</h5>
          <form method="post" action="sign.php">
          <p class="card-text"><img src="https://img.icons8.com/material-outlined/24/000000/user--v1.png" class="logpics"/><input autocomplete = "off" type="text" placeholder="Username" class="logintext text-fields" name="name" id="name">
          <br>
          <br>
          <p class="card-text"><img src="https://img.icons8.com/material-outlined/24/000000/lock--v1.png" class="logpics"/><input type="password" placeholder="Password" class="logintext text-fields" name="Password" id="Password">
          </p>
          <a href="index.php"> <button class="login">SignIN</button></a>
          </form>
          <br>
          <a href="index.php" class="createanaccount">Log-in</a>
        </div>
      </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
