<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
  </head>
  <body>

  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">

  <div class="w3-white">
  <button class="w3-button w3-white w3-xlarge" onclick="w3_open()">☰</button>
  </div>
  
  <a class="navbar-brand" href="home.php"><img class="logo-nav" src="alphaedulogo.png"/></a>
    <form class="d-flex">
      <?php echo "<p class='right-name'>Hi, ".$_SESSION['user_name']."</p>";
      ?>
      <button class="btn btn-outline-danger"><a href="logout.php"><img src="https://img.icons8.com/sf-black/20/FA5252/logout-rounded.png"/></a></button>
      <a href="settings.php" class="settings-btn"><img src="https://img.icons8.com/ios-glyphs/30/000000/settings--v1.png"/></a>
    </form>
  </div>
</nav>

<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <img src="https://img.icons8.com/color/33/null/xbox-x--v1.png" onclick="w3_close()"/>
  <a href="home.php" class="w3-bar-item w3-button">Home <img src="https://img.icons8.com/stickers/30/null/search-in-list.png"/></a>
  <a href="settings.php" class="w3-bar-item w3-button">Settings <img src="https://img.icons8.com/3d-fluency/30/null/gear--v2.png"/></a>
  <a href="textbooks.php" class="w3-bar-item w3-button">XI Textbooks <img src="https://img.icons8.com/external-prettycons-lineal-color-prettycons/30/null/external-books-education-prettycons-lineal-color-prettycons-1.png"/></a>
  <a href="https://github.com/SohamPhansalkar/AlphaEdu" class="w3-bar-item w3-button">View code <img src="https://img.icons8.com/color/30/null/code.png"/></a>
  <a href="https://www.instagram.com/soham.phansalkar/" class="w3-bar-item w3-button">Social Media <img src="https://img.icons8.com/color/30/null/instagram-new--v1.png"/></a>
  <a href="mailto:sohampp26nov@gmail.com" class="w3-bar-item w3-button">E-mail <img src="https://img.icons8.com/3d-fluency/30/null/gmail.png"/></a>
  <a href="https://sohamphansalkar.github.io/texttospeech/" class="w3-bar-item w3-button">Text to speech <img src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/30/000000/external-speaker-interface-kiranshastry-gradient-kiranshastry.png"></a>    
  <a href="about.php" class="w3-bar-item w3-button">About <img src="https://img.icons8.com/flat-round/30/null/info.png"/></a>  
  <a href="logout.php" class="w3-bar-item w3-button">Log Out <img src="https://img.icons8.com/sf-black/30/FA5252/logout-rounded.png"/></a>  
  <a href="adminpannel.php" class="w3-bar-item w3-button">Adminpannel<img src="https://img.icons8.com/color/30/null/admin-settings-male.png"/></a>
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

<script type="text/javascript" src="scriptjs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  </body>
</html>





