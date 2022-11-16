<?php 

session_start();

if(isset($_SESSION['user_name'])){
  
}else{
  header("location: index.php");
  exit;
}

echo "<input type='hidden' id='session_username' value='".$_SESSION['user_name']."'/>";
echo "<input type='hidden' id='session_password' value='".$_SESSION['user_pass']."'/>";


include "connection.php";

    if(isset($_POST['newname'])){

    
    // INSERT INTO `vidyalankar_edu` (`name`, `password`, `other`) VALUES ('Keshav Phansalkar', '1234', 'for future');

    // $serevr = "localhost";
    // $username = "root";
    // $password = "";

    $conn = mysqli_connect($serevr, $username, $password);

    if(!$conn){
        die("Failed". mysqli_connect_error());
    }
    //echo "success";

    $newname =$_POST['newname'];
    $newpass =$_POST['newpass'];
    $userno = $_SESSION['userno'];

    $sql = "UPDATE `".$dbname."`.`vidyalankar_edu` SET `name` = '".$newname."', `password` = '".$newpass."', `other` = 'for the future' WHERE `vidyalankar_edu`.`no` = '".$userno."'";
  
    if($conn->query($sql) == True){
      echo '<script>window.location.href = "logout.php";</script>';
    }else{
      echo $conn->error;
  }
  }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        
        <title>Settings - Alpha edu</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
        <link href="/static/static_root/css/ee-login.min.css" rel="stylesheet">
    
    </head>
<body class="home-bodys" onload="ask_pass()">

<?php include "nav.php"; ?>

<div class="settings-div">
<div class="inner-settings">
<form method="post" action="settings.php">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <?php echo'<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="newname" placeholder = "current name - '.$_SESSION['user_name'].'">'?>
    <div id="emailHelp" class="form-text">We'll never share your Information with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">New Password</label> <img src="https://img.icons8.com/ios-glyphs/15/000000/visible--v1.png" onmouseover="mouseOver()" onmouseout="mouseOver()" onclick="mouseOver()"/>
    <input type="password" class="form-control" id="exampleInputPassword1" name="newpass">
    <div id="emailHelp2" class="form-text wrong-password">Passwords are not identical.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirn New Password</label> <img src="https://img.icons8.com/ios-glyphs/15/000000/visible--v1.png" onclick="mouseOver2()" onmouseover="mouseOver2()" onmouseout="mouseOver2()"/>
    <input type="password" class="form-control" id="exampleInputPassword2" name="newconpass">
    <div id="emailHelp1" class="form-text wrong-password">Passwords are not identical.</div>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick = "settingsbtn()">
    <label class="form-check-label" for="exampleCheck1">Confirm</label>
  </div>
  <button class="btn btn-primary" id="updateinfobtn" type="submit">Submit</button>
</form>
</div>
</div>




<script type="text/javascript" src="scriptjs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>