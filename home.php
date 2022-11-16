<?php 

session_start();
include "connection.php";

if(isset($_SESSION['user_name'])){
  
}else{
  header("location: index.php");
  exit;
}

$conn = mysqli_connect($serevr, $username, $password);
$result = mysqli_query($conn, "SELECT * FROM `".$dbname."`.`vidyalankar_edu`");
while ($row = mysqli_fetch_assoc($result)) {
    $checkMail = $row['isVerified'];
    if($row['name'] == $_SESSION['user_name']){
        if($checkMail == 0){
            echo $checkMail;
            header("location: vemail.php");
    }
        //header("location: vemail.php");
    }else{
        
    }
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
        
        <title>Home - Vidyalankar</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">

    
    </head>
<body class="home-bodys" >

<?php include "nav.php"; ?>
<div class="alert alert-info " role="alert">
  This website is in <a href="https://www.productplan.com/glossary/beta-test/">beta testing. </a> Therefore not all features are available, there might be some bugs.
  If you spot any bug or spelling error please report it <a href="https://web.whatsapp.com/"> WhtasApp - +91 7021522021. </a><h4>~<a href="https://vidyalankaredu.000webhostapp.com/chemestrynotes.php">CS</a> card now open!</h4>
</div>

    <div class="sub-body">
      <div class="card-group">
        <div class="card card-paddings">
          <img src="https://media.istockphoto.com/vectors/hand-drawn-physics-doodles-vector-illustration-vector-id1205747131" class="card-img-top" alt="Physics">
          <div class="card-body">
            <h5 class="card-title">Physics <img src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/40/null/external-physics-science-smashingstocks-mixed-smashing-stocks-2.png"/></h5>
            <p class="card-text">The PDF's will be available soon. <br><br> <button type="button" class="btn btn-outline-success disabled">View <img src="https://img.icons8.com/carbon-copy/35/null/light.png"/></button></p>
            <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/ios/25/000000/not-applicable.png"/></small></p>
          </div>
        </div>
        <div class="card card-paddings">
          <img src="https://www.cmuse.org/wp-content/uploads/2020/05/learn-chemistry-lessons-online.jpg" class="card-img-top" alt="chemestry">
          <div class="card-body">
            <h5 class="card-title">Chemestry <img src="https://img.icons8.com/external-justicon-blue-justicon/40/null/external-atom-science-justicon-blue-justicon.png"/></h5>
            <p class="card-text">Hand written nots available<br><br><a href="chemistryeleven.php"><button type="button" class="btn btn-outline-success">View <img src="https://img.icons8.com/plasticine/35/null/light.png"/></button></a></p>
            <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/fluency/30/null/notepad.png"/> | <img src="https://img.icons8.com/fluency/30/null/hand-with-pen.png"/></small></p>
          </div>
        </div>
        <div class="card card-paddings">
          <img src="https://www.21clhk.org/wp-content/uploads/2020/12/Creativity-in-Mathematics.png" class="card-img-top" alt="Maths">
          <div class="card-body">
            <h5 class="card-title"><br><br>Maths <img src="https://img.icons8.com/color/40/000000/alpha.png"/></h5>
            <p class="card-text">Download all the PDF's of Marvel Publications. <br><br> <a href="math.php"><button type="button" class="btn btn-outline-success">View <img src="https://img.icons8.com/plasticine/35/null/light.png"/></button></a></a></p>
            <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/fluency/30/null/notepad.png"/></small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="sub-body">
        <div class="card-group">
          <div class="card card-paddings">
            <img src="https://www.ndtv.com/education/cache-static/media/presets/625X400/article_images/2022/5/21/biology-featured-image.webp" class="card-img-top" alt="biology">
            <div class="card-body">
              <h5 class="card-title"><br>Biology <img src="https://img.icons8.com/external-bartama-glyph-64-bartama-graphic/40/0B8C00/external-Biology-education-and-school-glyph-bartama-glyph-64-bartama-graphic.png"/></h5>
              <p class="card-text">The PDF's will be available soon. <br><br> <button type="button" class="btn btn-outline-success disabled">View <img src="https://img.icons8.com/carbon-copy/35/null/light.png"/></button></p>
              <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/ios/25/000000/not-applicable.png"/></small></p>
            </div>
          </div>
          <div class="card card-paddings">
            <img src="https://previews.123rf.com/images/maslakhatul/maslakhatul1812/maslakhatul181200007/127292937-computer-science-engineering-education-doodle-art-with-color-colour-full-fun-style-vector-illustrati.jpg" class="card-img-top" alt="C.S">
            <div class="card-body">
              <h5 class="card-title">Computer Science <img src="https://img.icons8.com/fluency/40/null/c-plus-plus-logo.png"/></h5>
              <p class="card-text">Exciting lab calculation are waiting for you. Online C++ tutorials available! <br><br> <a href="cs.php"> <button type="button" class="btn btn-outline-success">View <img src="https://img.icons8.com/plasticine/35/null/light.png"/></button></a></p>
              <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/30/null/external-calculations-engineering-flaticons-lineal-color-flat-icons.png"/> | <img src="https://img.icons8.com/plasticine/30/null/youtube-tourtials.png"/> | <img src="https://img.icons8.com/arcade/30/null/code-file.png"/></small></p>
            </div>
          </div>
          
          <div class="card card-paddings">
            <img src="https://ritajms.com/wp-content/uploads/2019/11/52351011-english-british-england-language-education-concept.jpg" class="card-img-top" alt="English">
            <div class="card-body">
              <h5 class="card-title">English <img src="https://img.icons8.com/office/40/null/geography.png"/></h5>
              <p class="card-text">PPt presentations on there way!!. <br><br> <button type="button" class="btn btn-outline-success disabled">View <img src="https://img.icons8.com/carbon-copy/35/null/light.png"/></button></p>
              <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/ios/25/000000/not-applicable.png"/></small></p>
            </div>
          </div>
          <div class="card">
          <img src="https://images.pond5.com/information-technology-animated-word-cloud-footage-078643703_iconl.jpeg" class="card-img-top" alt="IT">
          <div class="card-body">
            <h5 class="card-title">Information Technology <img src="https://img.icons8.com/fluency/40/null/console.png"/></h5>
            <p class="card-text">IT online code editor and text book is available now.<br><br> <a href="it.php"><button type="button" class="btn btn-outline-success">View <img src="https://img.icons8.com/plasticine/35/null/light.png"/></button></a></p>
            <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/arcade/30/null/code-file.png"/> | <img src="https://img.icons8.com/plasticine/30/null/youtube-tourtials.png"/></small></p>
          </div>
          </div>
          </div>
        
      

      <footer class="footer">
        <hr>
        <div class="tm">
            <p class="by">AlphaEdu,by Soham Prasad Phansalkar</p>
            <p class="copyright">ALPHA &copy; - All rights reserved</p>
        </div>
      </footer>

      <script type="text/javascript" src="scriptjs.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>