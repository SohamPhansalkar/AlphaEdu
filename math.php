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
        
        <title>Math I- Alpha edu</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    
</head>
<body class="home-bodys">

<?php include "nav.php"; ?>

    <h3 style="text-align : center; color:red;">XI std chapters</h3>


    <div class="table-css">
    <table class="table table-light table-striped table-hover">
        <thead>
          <tr>
            <th scope="col"><img src="https://img.icons8.com/ios/30/null/hashtag-large.png"/></th>
            <th scope="col">File Name <img src="https://img.icons8.com/color/38/null/pdf.png"/></th>
            <th scope="col">for <img src="https://img.icons8.com/fluency/38/null/technology-items.png"/></th>
            <th scope="col">for <img src="https://img.icons8.com/fluency/38/null/iphone14-pro.png"/></th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $srno = 0;
          foreach (new DirectoryIterator("math1eleven") as $fileInfo) {
            $fileInfo->getFilename();

            if ($fileInfo == '.') {
              
            }else if($fileInfo == '..'){

            }else{
              $srno +=1;
              $untuchedpdfname = $fileInfo;
              $fileInfo = strtolower($fileInfo);
              $fileInfo = ucwords($fileInfo);
            //echo $fileInfo->getFilename();
            echo '
            <tr>
            <th scope="row">'.$srno.'</th>
            <td>'.$fileInfo.'</td>
            <td><button type="button" class="btn btn-outline-warning"><a href="https://vidyalankaredu.000webhostapp.com/preview.php?submit='.$untuchedpdfname.'&std=math1eleven" class="downloadlinks"><img src="https://img.icons8.com/external-sbts2018-outline-color-sbts2018/28/null/external-preview-basic-ui-elements-2.4-sbts2018-outline-color-sbts2018.png"/></a></button></td>
            <td><button type="button" class="btn btn-outline-success"><a href="math1eleven\\'.$untuchedpdfname.'" download="'.$fileInfo.'" class="downloadlinks"><img src="https://img.icons8.com/plasticine/28/null/downloading-updates.png"/></a></button></td>
            </tr>
            ';
          }
            }
            
        ?>
        </tbody>
      </table>
      </div>

      <hr>

      <h3 style="text-align : center; color:red;">XII std chapters</h3>

    <div class="table-css">
    <form action="" method="get">
    <table class="table table-light table-striped table-hover">
        <thead>
          <tr>
            <th scope="col"><img src="https://img.icons8.com/ios/30/null/hashtag-large.png"/></th>
            <th scope="col">File Name <img src="https://img.icons8.com/color/38/null/pdf.png"/></th>
            <th scope="col">for <img src="https://img.icons8.com/fluency/38/null/technology-items.png"/></th>
            <th scope="col">for <img src="https://img.icons8.com/fluency/38/null/iphone14-pro.png"/></th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $srno = 0;
          foreach (new DirectoryIterator("Twelthpdfs") as $fileInfo) {
            $fileInfo->getFilename();

            if ($fileInfo == '.') {
              
            }else if($fileInfo == '..'){

            }else{
              $srno +=1;
              $untuchedpdfname = $fileInfo;
              $fileInfo = strtolower($fileInfo);
              $fileInfo = ucwords($fileInfo);
            //echo $fileInfo->getFilename();
            echo '
            <tr>
            <th scope="row">'.$srno.'</th>
            <td>'.$fileInfo.'</td>
            <td><button type="button" class="btn btn-outline-warning"><a href="https://vidyalankaredu.000webhostapp.com/preview.php?submit='.$untuchedpdfname.'&std=Twelthpdfs" class="downloadlinks"><img src="https://img.icons8.com/external-sbts2018-outline-color-sbts2018/28/null/external-preview-basic-ui-elements-2.4-sbts2018-outline-color-sbts2018.png"/></a></button></td>
            <td><button type="button" class="btn btn-outline-success"><a href="Twelthpdfs\\'.$fileInfo.'" download="'.$fileInfo.'" class="downloadlinks"><img src="https://img.icons8.com/plasticine/28/null/downloading-updates.png"/></a></button></td>
            </tr>
            ';
          }
            }
            
        ?>
        </tbody>
      </table>
    </form>
      </div>

      

      <footer class="footer">
        <hr>
        <div class="tm">
            <p class="by">Vidyalankar,by ALPHA</p>
            <p class="copyright">ALPHA &copy; - All rights reserved</p>
        </div>
      </footer>

      <script type="text/javascript" src="scriptjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>