<?php 
session_start();

if(isset($_SESSION['user_name'])){
  
}else{
  header("location: index.php");
  exit;
}

$pdfname = $_GET['submit'];
$std = $_GET['std'];


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
        
        <title>preview - Alpha edu</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
        <link href="/static/static_root/css/ee-login.min.css" rel="stylesheet">
    
    </head>
<body class="home-bodys">

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img class="logo-nav" src="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidyalankar_logotext.svg">Vidyalankar</a>
    <form class="d-flex">
      <?php echo "<p class='right-name'>Hi, ".$_SESSION['user_name']."</p>";
      ?>
      <button class="btn btn-outline-danger"><a href="logout.php">logout</a></button>
    </form>
  </div>
</nav>
    </div>

    <div class="preview-div">
      <?php
        echo '<embed src="'.$std.'\\'.$pdfname.'" type="application/pdf" height="100%" width="100%" class="preview-pdf" id="preview-pdf"allowfullscreen="true">';
      ?>
    </div>
    
    
    

    

        <footer class="footer">
          <hr>
          <div class="tm">
              <p class="by">Vidyalankar,by ALPHA inc.</p>
              <p class="copyright">ALPHA inc.&copy; - All rights reserved</p>
          </div>
        </footer>
  
        <script type="text/javascript" src="scriptjs.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
  </html>