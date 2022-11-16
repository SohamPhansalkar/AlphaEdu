<?php 

session_start();

if(isset($_SESSION['user_name'])){
  
}else{
  header("location: index.php");
  exit;
}

echo "<input type='hidden' id='session_username' value='".$_SESSION['user_name']."'/>";
echo "<input type='hidden' id='session_password' value='".$_SESSION['user_pass']."'/>";


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
    
    <title>Chemistry Notes- Alpha edu</title>

    <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">

</head>
<body class="home-bodys">

<?php include "nav.php"; ?>

<h3 style="text-align : center; color:red;">XI std chapters</h3>


<div class="table-css">
<table class="table table-light table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
      <th scope="col">Notes</th>
      <th scope="col">Phones/Tablets</th>
      <th scope="col">PC/Laptops</th>
        </tr>
    </thead>
    <tbody>
    <?php 

    $NotesData = array("Chemical Bonding Set 1" => "1oOMeBbnfJxPnk7m52fwkKouegW4D7JAY");

    $srno = 0;
        foreach ($NotesData as $x=>$x_value) {
            $srno = $srno + 1;
       
            echo '
            <tr>
            <th scope="row">'.$srno.'</th>
            <td>'.$x.'</td>
            <td><a href="https://drive.google.com/uc?id='.$x_value.'" download><button class = "btn btn-primary">View</button></a></td>
            <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id='.$x_value.'"> <button class = "btn btn-warning">View [HD]</button></a></rd>
            </tr>
            ';
        }
        
    ?>
    </tbody>
    </table>
    </div>

    <br><br><br><br><br><br><br><br><hr>

    

    <footer class="footer">
    <hr>
    <div class="tm">
        <p class="by">Alpha edu</p>
        <p class="copyright">ALPHA &copy; - All rights reserved</p>
    </div>
    </footer>

    <script type="text/javascript" src="scriptjs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>