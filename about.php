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
        
        <title>About - AlphaEdu</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    
</head>
<body class="home-bodys">

<?php include "nav.php"; ?>

<h1 align="center" style="color:red;"> Welcome to About page</h1>

<div class="accordion accordionExample1" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        The End Goal
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Everything at one place.</strong> As our tag line says "One Step Solution" we want to bring all the study related content at one place in diffrent formats like PDF's, Videos, Notes and one of the most important thing <strong>Labs</strong>. So the students dont need to surf the net.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        What are Labs?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Lab is the place to play around.</strong> Labs helps students to get answers in steps and with thir inputs. This helps students understand concepts in an interactive way encouraging them to study.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Supporting Formats
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Supports almost all formats.</strong> This is one of our USP that our website supports all formats like Video, text, labs which gives students options to select from, we also also looking forward to add Visuals and audio. As each students have his own way to understand things.
      </div>
    </div>
  </div>
</div>

<br><br>
<div class="table-css">
<table class="table table-light table-striped table-hover">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Icons</th>
    <th scope="col">Meaning</th>
    </tr>
  </thead>
  <tbody>
  <?php 

  $NotesData = array("https://img.icons8.com/fluency/30/null/notepad.png" => "This indicates printed books", "https://img.icons8.com/fluency/30/null/hand-with-pen.png" => "This indicates Hand written notes", "https://img.icons8.com/external-flaticons-lineal-color-flat-icons/30/null/external-calculations-engineering-flaticons-lineal-color-flat-icons.png" =>"This indicates that it contains labs", "https://img.icons8.com/plasticine/30/null/youtube-tourtials.png" =>"This indicates video/YT tutorials", "https://img.icons8.com/arcade/30/null/code-file.png" =>"This indicates online code editor", "https://img.icons8.com/ios/25/000000/not-applicable.png" =>"This indicates content not available", "https://img.icons8.com/sf-black/30/FA5252/logout-rounded.png" =>"This logs out you");

  $srno = 0;
  foreach ($NotesData as $x=>$x_value) {
      $srno = $srno + 1;
  
      echo '
      <tr>
      <th scope="row">'.$srno.'</th>
      <td><img src="'.$x.'"></td>
      <td>'.$x_value.'</td>
      </tr>
      ';
  }
  
?>
</tbody>
</table>
</div>
<br>



<footer class="footer">
  <hr>
  <div class="tm">
      <p class="by">Vidyalankar,by ALPHA</p>
      <p class="copyright">ALPHA &copy; - All rights reserved</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>