
<!doctype html>    
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>ADMIN UPLOAD</title>
    <style>
      .warning {
    border: 5px ridge #f00;
    background-color: pink;
    padding: .5rem;
    display: flex;
    flex-direction: column;
    width: 40%;
}

.warning img {
    width: 100%;
}

.warning p {
    font: small-caps bold 1.2rem sans-serif;
    text-align: center;
}

      </style>
  </head>
  <body>
  
    <?php require'partials/_nav.php'?>
   
    
        <center>
        <h2 class="text-centre"> ADMIN UPLOAD </h2>
       <div class="warning">
       <form action="adminhome.php" method="post" enctype="multipart/form-data">
       Movie Name:<input type="text" class="form-control"  name="name" placeholder="Name" required/><br/><br/>
       Movie Price:<input type="number" class="form-control" name="price" placeholder="Price"/><br/><br/>
        <b>Choose Moviee Image:</b>&nbsp&nbsp<input type="file" name="banner" class="form-control"><br/><br/><br/>
        <input type="submit" value="submit" class="btn btn-primary" name="sbmt">
        <input type="submit" value="Delete" class="btn btn-primary" name="del">
        <input type="button" onclick="document.location.href='http://localhost/moviebook/admin/upload.php';" value="View" name="button" class="btn btn-primary">
        <input type="button" onclick="document.location.href='http://localhost/moviebook/admin/admin.php';" value="Logout" name="button" class="btn btn-primary">
 </form>

</center>
</div>
 
 <?php
 include 'partials/_dbconnect.php';
if(isset($_POST["sbmt"])) 
{
  $name=$_POST['name'];
  $price=$_POST['price'];
 $banner=$_FILES['banner']['name']; 
 $expbanner=explode('.',$banner);
 $bannerexptype=$expbanner[1];
 date_default_timezone_set('Australia/Melbourne');
 $date = date('m/d/Yh:i:sa', time());
 $rand=rand(10000,99999);
 $encname=$date.$rand;
 //$bannername=md5($encname).'.'.$bannerexptype;
 //$bannername=md5($encname).'.'.$bannerexptype;
 //$bannerpath="uploads/".$bannername;
 $bannerpath="uploads/".$banner;
 move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);
 //echo "<script>alert('Uploaded Successfully');</script>";

 $sql="INSERT INTO upload (name,mname,price) VALUES ('$name','$banner','$price')";
            $result=mysqli_query($conn , $sql);
            if($result){
                $showAlert=true;
            }
 }




 if(isset($_POST["del"])) 
{
  $name=$_POST['name'];
  
 $sql="delete from upload where name='$name'";
            $result=mysqli_query($conn , $sql);
           
 }


 ?>
 

</body>
</html>