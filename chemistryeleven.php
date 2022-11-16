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
        
        <title>Chemistry- Alpha edu</title>
    
        <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    
</head>
<body class="home-bodys">

<?php include "nav.php"; ?>

    <h3 style="text-align : center; color:red;">XI std chapters</h3>


    <div class="table-css">

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</symbol>
<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</symbol>
<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-primary d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
<div>
Chemestry hand written notes now available! <img src="https://img.icons8.com/bubbles/40/null/hand-with-pen.png"/> <a href="chemestrynotes.php">check Out<a>
</div>
</div>

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
          foreach (new DirectoryIterator("chemistryeleven") as $fileInfo) {
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
            <td><a href="https://vidyalankaredu.000webhostapp.com/preview.php?submit='.$untuchedpdfname.'&std=chemistryeleven" class="downloadlinks"><button type="button" class="btn btn-outline-warning"><img src="https://img.icons8.com/external-sbts2018-outline-color-sbts2018/28/null/external-preview-basic-ui-elements-2.4-sbts2018-outline-color-sbts2018.png"/></button></a></td>
            <td><a href="chemistryeleven\\'.$untuchedpdfname.'" download="'.$untuchedpdfname.'" class="downloadlinks"><button type="button" class="btn btn-outline-success"><img src="https://img.icons8.com/plasticine/28/null/downloading-updates.png"/></button></a></td>
            </tr>
            ';
          }
            }
            
        ?>
        </tbody>
      </table>
      </div>

      <hr>

    <!-- <h3 style="text-align : center; color:red;">XII std chapters</h3>

    <div class="table-css">
    <form action="" method="get">
    <table class="table table-light table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">File Name</th>
            <th scope="col">Preview(PC.only)</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        //$srno = 0;
        //   foreach (new DirectoryIterator("Twelthpdfs") as $fileInfo) {
        //     $fileInfo->getFilename();

        //     if ($fileInfo == '.') {
              
        //     }else if($fileInfo == '..'){

        //     }else{
        //       $srno +=1;
        //       $untuchedpdfname = $fileInfo;
        //       $fileInfo = strtolower($fileInfo);
        //       $fileInfo = ucwords($fileInfo);
        //     //echo $fileInfo->getFilename();
        //     echo '
        //     <tr>
        //     <th scope="row">'.$srno.'</th>
        //     <td>'.$fileInfo.'</td>
        //     <td><button type="button" class="btn btn-outline-warning"><a href="https://vidyalankaredu.000webhostapp.com/preview.php?submit='.$untuchedpdfname.'&std=Twelthpdfs" class="downloadlinks">Preview</a></button></td>
        //     <td><button type="button" class="btn btn-outline-success"><a href="Twelthpdfs\\'.$fileInfo.'" download="'.$fileInfo.'" class="downloadlinks">Download</a></button></td>
        //     </tr>
        //     ';
        //   }
        //     }
            
        ?>
        </tbody>
      </table>
    </form>
      </div> -->

      

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