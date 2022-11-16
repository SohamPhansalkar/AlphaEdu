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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="style.css">
        
        <title>CS - AlphaEdu</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    
</head>
<body class="home-bodys">

<?php include "nav.php"; ?>

<br>
<br>
<div class="card text-center">
  <div class="card-header">
    Calculate resistance <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/36/null/external-resistor-engineering-flaticons-lineal-color-flat-icons-2.png"/>
  </div>
  <div class="card-body">
    <h5 class="card-title">This is a 4 band resisor calculator</h5>
    <p class="card-text">Enter the color as input and get output with steps.</p>
    <div class="inputsres">
    Bands: 1 <select id="b1">
    <option value="0">Black</option>
    <option value="1">Brown</option>
    <option value="2">Red</option>
    <option value="3">Orange</option>
    <option value="4">Yellow</option>
    <option value="5">Green</option>
    <option value="6">Blue</option>
    <option value="7">Violet</option>
    <option value="8">Gray</option>
    <option value="9">White</option>
  </select>

  2 <select id="b2">
  <option value="0">Black</option>
    <option value="1">Brown</option>
    <option value="2">Red</option>
    <option value="3">Orange</option>
    <option value="4">Yellow</option>
    <option value="5">Green</option>
    <option value="6">Blue</option>
    <option value="7">Violet</option>
    <option value="8">Gray</option>
    <option value="9">White</option>
  </select>

  3 <select id="b3">
    <option value="1">Black</option>
    <option value="10">Brown</option>
    <option value="100">Red</option>
    <option value="1000">Orange</option>
    <option value="10000">Yellow</option>
    <option value="100000">Green</option>
    <option value="1000000">Blue</option>
    <option value="10000000">Violet</option>
    <option value="100000000">Gray</option>
    <option value="1000000000">White</option>
    <option value="0.1">Gold</option>
    <option value="0.01">Silver</option>
  </select>

  4 <select id="b4">
    <option value="1">Brown</option>
    <option value="2">Red</option>
    <option value="0.05">Orange</option>
    <option value="0.02">Yellow</option>
    <option value="0.5">Green</option>
    <option value="0.25">Blue</option>
    <option value="0.1">Violet</option>
    <option value="001">Gray</option>
    <option value="5">Gold</option>
    <option value="10">Silver</option>
  </select>

    </div>
    <br>
    <a href="#" class="btn btn-primary" onclick="calculateresistance()">Calculate <img src="https://img.icons8.com/external-others-aquariid/30/null/external-calculate-education-others-aquariid.png"/></a>
    <br><br>

  <span id="calc1">The result will be displayed here.</span><br><br>
  <span id="calc2"><image src="https://circuitdigest.com/sites/default/files/inlineimages/resistance-calculation.png"></image></span><br>
  <span id="calc3">where, <br>
  'a' represents the 1st significant digit, which is the first band color of resistor.

<br>'b' represents the 2nd  significant digit, which is the second band color of resistor.

<br>'c' represents the 3rd significant digit, which is the third band color of resistor and this is the multiplier value.

<br>'d' represents the 4th  significant digit, which is the fourth band color of resistor and this is the tolerance value.</span><br>
<h2><span id="finalans"></span></h2>

  </div>
  <div class="card-footer text-muted">
  <div class="w3-dropdown-hover">
    <button class="w3-button">View Color code table</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <img src="https://www.calculator.net/img/resistor/4-band.png" class="w3-border w3-padding" alt="resistor">
    </div>
  </div>
</div>

<h2> Video tutorials for C++</h2><br>

<div >
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://youtube.com/embed/yGB9jhsEsr8"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language : Hindi</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/CodeWithHarry">CodeWithHarry</a></li>
            <li>Duration - 1:16:48 </li>
            <li>Published on - May 12, 2019</li>
          </ul>
          <a href="https://youtu.be/yGB9jhsEsr8"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://sourceforge.net/projects/mingw-w64/">C++ Compiler (g++)</a>, <a href="https://www.programiz.com/cpp-programming/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://youtube.com/embed/ZzaPdXTrSb8"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language : English</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/programmingwithmosh">Programming with Mosh </a></li>
            <li>Duration - 1:22:55 </li>
            <li>Published on - Aug 10, 2022</li>
          </ul>
          <a href="https://youtu.be/ZzaPdXTrSb8"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://sourceforge.net/projects/mingw-w64/">C++ Compiler (g++)</a>, <a href="https://www.programiz.com/cpp-programming/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <iframe height="300" src="https://www.youtube.com/embed/_bYFu9mBnr4"></iframe>      
      <div class="card-body">
        <h5 class="card-title">Language - English</h5>
        <p class="card-text">
          <ul>
            <li>Source - <a href="https://www.youtube.com/c/CalebTheVideoMaker2">Caleb Curry</a></li>
            <li>Duration - 10:28:14 </li>
            <li>Published on - Jul 24, 2019</li>
          </ul>
          <a href="https://youtu.be/_bYFu9mBnr4"><button type="button" class="btn btn-primary">Strt leaning</button></a>
        </p>
        <p>Tools Used - <a href="https://code.visualstudio.com/download">VS Code</a>, <a href="https://sourceforge.net/projects/mingw-w64/">C++ Compiler (g++)</a>, <a href="https://www.programiz.com/cpp-programming/online-compiler/">Online editor</a>
      </div>
    </div>
  </div>
</div>
</div>   
   
<br><br>
<footer class="footer">
<hr>
<div class="tm">
    <p class="by">AlphaEdu,by Soham Phansalkar</p>
    <p class="copyright">ALPHA &copy; - All rights reserved</p>
</div>
</footer>

<script type="text/javascript" src="scriptjs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="cs.js"></script>

</body>
</html>