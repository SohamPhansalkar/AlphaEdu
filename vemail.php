<?php
include "connection.php";
session_start();
$username = $_SESSION['user_name'];
$uniqueueid = $_SESSION['userno'];

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

    <title>Verify Email</title>
</head>
<body>

<div class="vemaildiv">
  <form action="bridge1.php" method="get">
  <div class="mb-4" style="width : 440px;">
  <label for="exampleInputEmail1" class="form-label" style="margin-left : 7px; margin-top : 3px;">Email address</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name = "umail">
  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  <?php echo'<input type="hidden" name="user_name" value="'.$username.'">';?>
  <?php echo'<input type="hidden" name="user_id" value="'.$uniqueueid.'">';?>
</div>
  
  <button style="margin-left : 15px; margin-bottom : 10px" type="success" class="btn btn-primary">Send Email</button>
  </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="scriptjs2.js"></script>
  </body>
</html>
