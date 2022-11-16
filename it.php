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
        
        <title>IT - Vidyalankar</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    
</head>
<body class="home-bodys">

<?php include "nav.php"; ?>

<div class="table-css">
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Whats New?</h5>
    <p class="card-text">This is the textbook of Information Technology (IT) XI. You can download the book (.pdf) or even view the book without downloading it if you are on PC.</p>
  </div>
  <div class="card-footer text-muted">
    more new updates on their way..!
  </div>
</div>

<hr>
<br>

<div class="card mb-3">
  <img src="https://imageio.forbes.com/specials-images/imageserve/628b8de7a18d8436b8782e88/Artificial-intelligence-robot-control-futuristic-data-screen/960x0.jpg?format=jpg&width=960" class="card-img-top" alt="text book cover">
  <div class="card-body">
    <h5 class="card-title">It textbook <img src="https://img.icons8.com/ios-glyphs/20/40C057/verified-account--v1.png"/></h5>
    <p class="card-text">Information Technology textbook in pdf format.</p>
    <a href="https://vidyalankaredu.000webhostapp.com/preview.php?submit=IT eleven textbook.pdf&std=otherpdfs" class="downloadlinks"><button type="button" class="btn btn-outline-warning">For <img src="https://img.icons8.com/fluency/38/null/technology-items.png"/></a></button></td>
    <a href="otherpdfs\\IT eleven textbook.pdf" download="IT eleven textbook.pdf" class="downloadlinks"><button type="button" class="btn btn-outline-success">For <img src="https://img.icons8.com/fluency/38/null/iphone14-pro.png"/></a></button>
    <a href="https://vidyalankaredu.000webhostapp.com/textbooks.php"><button type="button" class="btn btn-outline-info">All textbooks <img src="https://img.icons8.com/fluency/38/null/books.png"/></button></a>

    <p class="card-text"><small class="text-muted">XI</small></p>
  </div>
</div>

<br><br>

<div class="card mb-3">
  <img src="https://www.silicon.fr/wp-content/uploads/2015/05/logiciel-programmation-code.jpg" class="card-img-top" alt="code online">
  <div class="card-body">
    <h5 class="card-title">Code online <img src="https://img.icons8.com/ios-glyphs/20/40C057/verified-account--v1.png"/></h5>
    <p class="card-text">You can code online without any need to download any softwate.<br>Supports - 
    <img src="https://img.icons8.com/color/28/000000/html-5--v1.png"/> <img src="https://img.icons8.com/color/28/000000/css3.png"/> <img src="https://img.icons8.com/color/28/000000/javascript--v1.png"/></p>
    <a href="https://www.programiz.com/html/online-compiler/"><button type="button" class="btn btn-success">HTML & CSS</button></a> <a href="https://www.programiz.com/javascript/online-compiler/"><button type="button" class="btn btn-success">JS</button></a>

    <p class="card-text"><small class="text-muted">XI</small></p>
  </div>
</div>
</div>

<h2 align="center">Video tutorials for HTML, CSS & JS</h2>

<div >
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://youtube.com/embed/HcOc7P5BMi4"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language : Hindi</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/ApnaCollegeOfficial">Apna College</a></li>
            <li>Duration - 2:5:59 </li>
            <li>Published on - Mar 22, 2022</li>
          </ul>
          <a href="https://youtu.be/HcOc7P5BMi4"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://www.programiz.com/html/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://youtube.com/embed/pQN-pnXPaVg"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language : English</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/Freecodecamp">freeCodeCamp.org</a></li>
            <li>Duration - 2:2:31 </li>
            <li>Published on - Sep 18, 2018</li>
          </ul>
          <a href="https://youtu.be/pQN-pnXPaVg"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://atom.io/">Atom</a>, <a href="https://www.programiz.com/html/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://www.youtube.com/embed/qz0aGYrrlhU"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language - English</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/programmingwithmosh">Programming with Mosh</a></li>
            <li>Duration - 1:9:33 </li>
            <li>Published on - Jan 11, 2021</li>
          </ul>
          <a href="https://youtu.be/qz0aGYrrlhU"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://www.programiz.com/html/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
</div>
</div>  
<br>

<div >
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://youtube.com/embed/hKB-YGF14SY"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language : Hindi</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/CodeWithHarry">CodeWithHarry</a></li>
            <li>Duration - 3:44:16 </li>
            <li>Published on - May 16, 2020</li>
          </ul>
          <a href="https://youtu.be/hKB-YGF14SY"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://www.programiz.com/javascript/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://youtube.com/embed/zJSY8tbf_ys"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language : English</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/Freecodecamp">freeCodeCamp.org</a></li>
            <li>Duration - 21:14:41 </li>
            <li>Published on - Aug 24, 2022</li>
          </ul>
          <a href="https://youtu.be/zJSY8tbf_ys"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://www.programiz.com/javascript/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://www.youtube.com/embed/W6NZfCO5SIk"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language - English</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/programmingwithmosh">Programming with Mosh</a></li>
            <li>Duration - 0:48:16 </li>
            <li>Published on - Apr 24, 2018</li>
          </ul>
          <a href="https://youtu.be/W6NZfCO5SIk"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://www.programiz.com/javascript/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
</div>
</div>


<br><br>


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