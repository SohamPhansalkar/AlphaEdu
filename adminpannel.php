<?php
    include "connection.php";

    if(isset($_POST['name'])){

    $conn = mysqli_connect($serevr, $username, $password);
    //$result = mysqli_query($conn, "SELECT * FROM `vidyalankar_edu`.`vidyalankar_edu`");


    if(!$conn){
        die("Failed". mysqli_connect_error());
    }
    //echo "success";

    // while ($row = mysqli_fetch_assoc($result)) {
    //     //echo `<h1>`.$row['name'].`</h1>`;
    //     if ($row['name'] == $name) {
    //     $_SESSION['user_name'] = $name;
    //     $_SESSION['user_pass'] = $Password;
    //     $_SESSION['userno'] = $row['no'];
    //     }

    

    $conn->close();

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>Alphaedu -Admin Pannel</title>

    <link rel="shortcut icon" href="https://ezexam-mum.s3.ap-south-1.amazonaws.com/static_root/img/vidya/vidya-favicon.ico">
    <link href="/static/static_root/css/ee-login.min.css" rel="stylesheet">

</head>
<body class="home-bodys">

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="alphaedulogo.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
      Alpha Edu - Admin Pannel
    </a>
  </div>
</nav>

<div class="table-css">
    <table class="table table-light table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Student Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $conn = mysqli_connect($serevr, $username, $password);
        $result = mysqli_query($conn, "SELECT * FROM `".$dbname."`.`vidyalankar_edu`");
        $srno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $Password = $row['password'];
            $email = $row['email'];
            $unique = $row['no'];

            $srno +=1;

            echo '
            <tr>
            <th scope="row">'.$srno.'</th>
            <td>'.$name.'</td>
            <th scope="row">'.$email.'</th>
            <td><button type="button" class="btn btn-outline-danger"><a href="deleteuser.php?id='.$unique.'" >Delete</a></button></td>
            </tr>
            ';
        }
        
        ?>
        </tbody>
      </table>
      </div>

      <hr>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scriptjs2.js"></script>
    
 <script>
    window.stop();
    let pass = prompt("Enter Password : ");

    function timeoutadmin(){
      window.location.href = "home.php";
      console.log("timeout");
    }

    if (pass != "TheAlphaEduAdmin@root"){
      alert("Un-authorised user ");
      window.location.href ="home.php";
    }else{
      setTimeout(timeoutadmin, 60000*2);
    }

</script>
    
</body>
</html>
