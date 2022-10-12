<?php
$showAlert=false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $existsql="SELECT * FROM `users`WHERE username = '$username'";
    $result=mysqli_query($conn,$existsql);
    $numExistRows=mysqli_num_rows($result);
    if($numExistRows>0){
        $showError="username Already Exists";
    }
    else{
        if($password==$cpassword){
            $sql="INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
            $result=mysqli_query($conn , $sql);
            if($result){
                $showAlert=true;
            }
    
        }
        else{
            $showError ="passwords do not match";
        }
    }

    }

   
?>

<!doctype html>    
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>SIGNUP</title>
  </head>
  <body>
  
    <?php require'partials/_nav.php'?>
    <?php 
    if($showAlert){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>sucessful!</strong> Your account is created now u can login!!!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    if($showError){
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>
    <div class = "container">
       <h1 class="text-centre"> Signup  </h1>
       <form action ="/moviebook/signup.php" method = "post">
    <div class="form-group clo-md-6">
        <label for="username">username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        
    </div>
    <div class="form-group clo-md-6">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" name="password">
     </div>
     <div class="form-group clo-md-6">
        <label for="exampleInputPassword1">comfrim Password</label>
        <input type="cpassword" class="form-control" id="cpassword" name="cpassword">
        <small id="emailHelp" class="form-text text-muted">make sure u enter same password.</small>
    </div>   
  <button type="submit" class="btn btn-primary">signup</button>
</form>
     



    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>