<?php 
$_SERVER="localhost";
$username="root";
$password="";
$database="users";
$conn = mysqli_connect($_SERVER,$username,$password,$database);
if(!$conn){
    die("Error".mysqli_connect_error());
}
?>