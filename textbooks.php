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
        
        <title>IT - Alpha edu</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    
</head>
<body class="home-bodys">

<?php include "nav.php"; ?>

<div class="table-css">
<div class="card text-center">
  <div class="card-header">
    Textbooks of XI
  </div>
  <div class="card-body">
    <h5 class="card-title">textbooks available!</h5>
    <p class="card-text">These are the textbooks of XI gov board in .pdf format there are 2 types one for mobile and one for pc.</p>
  </div>
  <div class="card-footer text-muted">
    more new updates on their way..!
  </div>
</div>
<br><br><br>


<table class="table table-striped table-hover">
<thead>
  <tr>
    <th scope="col"><img src="https://img.icons8.com/ios/30/null/hashtag-large.png"/></th>
    <th scope="col">File Name <img src="https://img.icons8.com/color/38/null/pdf.png"/></th>
    <th scope="col">Byfocal</th>
    <th scope="col">for <img src="https://img.icons8.com/fluency/38/null/iphone14-pro.png"/></th>
    <th scope="col">for <img src="https://img.icons8.com/fluency/38/null/technology-items.png"/></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Physics</td>
      <td><img src="https://img.icons8.com/material-outlined/25/000000/multiply--v1.png"/></td>
      <td><a href="https://drive.google.com/uc?id=1ceQTPRBn2Ag7cZh1G898DU_kyhvubbCv" download><button class = "btn btn-primary">View</button></a></td>
      <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id=1ceQTPRBn2Ag7cZh1G898DU_kyhvubbCv"> <button class = "btn btn-warning">View [HD]</button></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chemestry</td>
      <td><img src="https://img.icons8.com/material-outlined/25/000000/multiply--v1.png"/></td>
      <td><a href="https://drive.google.com/uc?id=18yBpUMmYhn8sk0Oi9TLechGagvtdwQNY" download><button class = "btn btn-primary">View</button></a></td>
      <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id=18yBpUMmYhn8sk0Oi9TLechGagvtdwQNY"> <button class = "btn btn-warning">View [HD]</button></a></rd>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Maths I</td>
      <td><img src="https://img.icons8.com/material-outlined/25/000000/multiply--v1.png"/></td>
      <td><a href="https://drive.google.com/uc?id=1wXaB5-fmF2zN1Ew2RULDRkdGM2uso_cj" download><button class = "btn btn-primary">View</button></a></td>
      <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id=1wXaB5-fmF2zN1Ew2RULDRkdGM2uso_cj"> <button class = "btn btn-warning">View [HD]</button></a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Maths II</td>
      <td><img src="https://img.icons8.com/material-outlined/25/000000/multiply--v1.png"/></td>
      <td><a href="https://drive.google.com/uc?id=1pdSkSHFpCKxfsBJBfy3HN6nQFkbEdCmj" download><button class = "btn btn-primary">View</button></a></td>
      <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id=1pdSkSHFpCKxfsBJBfy3HN6nQFkbEdCmj"> <button class = "btn btn-warning">View [HD]</button></a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Biology</td>
      <td><img src="https://img.icons8.com/material-outlined/25/000000/multiply--v1.png"/></td>
      <td><a href="https://drive.google.com/uc?id=1pdSkSHFpCKxfsBJBfy3HN6nQFkbEdCmj" download><button class = "btn btn-primary">View</button></a></td>
      <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id=1pdSkSHFpCKxfsBJBfy3HN6nQFkbEdCmj"> <button class = "btn btn-warning">View [HD]</button></a></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>IT</td>
      <td><img src="https://img.icons8.com/external-regular-kawalan-studio/25/000000/external-tick-user-interface-regular-kawalan-studio.png"/></td>
      <td><a href="https://drive.google.com/uc?id=1IVPZwrWQ7QCccLXcBYnKA97bYj_f_4yQ" download><button class = "btn btn-primary">View</button></a></td>
      <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id=1IVPZwrWQ7QCccLXcBYnKA97bYj_f_4yQ"> <button class = "btn btn-warning">View [HD]</button></a></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>English</td>
      <td><img src="https://img.icons8.com/external-regular-kawalan-studio/25/000000/external-tick-user-interface-regular-kawalan-studio.png"/></td>
      <td><a href="https://drive.google.com/uc?id=1Yv0CbwEtEMmVGRAfBcvBDRYPo-AZ6qUW" download><button class = "btn btn-primary">View</button></a></td>
      <td><a href="https://vidyalankaredu.000webhostapp.com/viewtextbooks.php?id=1Yv0CbwEtEMmVGRAfBcvBDRYPo-AZ6qUW"> <button class = "btn btn-warning">View [HD]</button></a></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>CS</td>
      <td><img src="https://img.icons8.com/external-regular-kawalan-studio/25/000000/external-tick-user-interface-regular-kawalan-studio.png"/></td>
      <td>----</td>
      <td>----</td>
    </tr>
  </tbody>
</table>
</div>

<br><br><br>


<footer class="footer">
  <hr>
  <div class="tm">
      <p class="by">Alpha edu,by ALPHA inc.</p>
      <p class="copyright">ALPHA inc.&copy; - All rights reserved</p>
  </div>
</footer>


      <script type="text/javascript" src="scriptjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>