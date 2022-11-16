<?php
    session_start();
    if(isset($_SESSION['user_name'])){
      header("location: home.php");
      exit;
    }


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

    $result = mysqli_query($conn, "SELECT * FROM `".$dbname."`.`vidyalankar_edu`");
    $checkmail = 0;
    
    //while ($row = mysqli_fetch_assoc($result)) {
    //  echo `<h1>`.$row['name'].`</h1>`;
    //}


    if(isset($_POST['subbtn'])){
      while ($row = mysqli_fetch_assoc($result)) {
        //echo `<h1>`.$row['name'].`</h1>`;
        if ($row['name'] == $name) {
          if ($row['password'] == $Password) {
            $_SESSION['user_name'] = $name;
            $_SESSION['user_pass'] = $Password;
            $_SESSION['userno'] = $row['no'];
            $row['isVerified'] = $checkmail;
            //header("location: home.php");
            echo "<input type='hidden' id='session_username' value='".$_SESSION['user_name']."'/>";
            echo "<input type='hidden' id='session_password' value='".$_SESSION['user_pass']."'/>";
          }else{
            echo 'wrong password';
          }
        }else{
          //echo"No Such account";
          echo '<script>window.location.href = "home.php";</script>';  
          
        }
      }
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
    
    <title>Alpha edu - login</title>

    <link rel="shortcut icon" href="alphaedulogo.png">
    <link href="/static/static_root/css/ee-login.min.css" rel="stylesheet">

  </head>
  <body class="in-bodys">

    <div class="acard card">
    <div class="logodiv"><img src="alphaedulogo.png" class="card-img-top" alt="Vidyalankar logo"></div>
        <div class="card-body login-card">
          <!-- <h5 class="card-title">Log-In</h5> -->
          <form method="post" action="index.php">
          <p class="card-text"><img src="https://img.icons8.com/material-outlined/24/000000/user--v1.png" class="logpics"/><input autocomplete = "off" type="text" placeholder="Username" class="logintext text-fields" name="name" id="name">
          <br>
          <br>
          <p class="card-text"><img src="https://img.icons8.com/material-outlined/24/000000/lock--v1.png" class="logpics"/><input type="password" placeholder="Password" class="logintext text-fields" name="Password" id="Password">
          </p>
          <!--<button class="login">LOGIN</button> --> 
          <input type="submit" value="LOGIN" name="subbtn" class="login" id="logbtn" onclick="testbtn()">
          </form>
          <br>
          <a href="sign.php" class="createanaccount">Create an account</a>
        </div>
      </div>

      <script type="text/javascript" src="scriptjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
