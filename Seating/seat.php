<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="seating.css" />
    <title>Movie Seat Booking</title>
    <style>
      input.larger {
        width: 30px;
        height: 50px;
      }
      .button,select {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

select {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 300px;
}

    </style>

  </head>
  <body>
  <label> Select a movie:</label>
  <?php
include 'partials/_dbconnect.php';
echo '<select>
<option>Select</option>';

$sqli = "SELECT name FROM upload";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
  
echo '<option>'.$row['name'].'</option>';
$name=$row['name'];
}

echo '</select>';



?>





   
<form method="post" action="http://localhost/moviebook/seating/seat.php">
 

    <div>
    <label> Select No of Seats:</label><br/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1"class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/><br/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/><br/>

  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/><br/>

  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/>
  <input type="checkbox" name="seat[]" value="1" class="larger"/><br/>

  <input type="submit" class="button" name="s" value="Submit">
  <input type="button" onclick="document.location.href='http://localhost/moviebook/admin/display.php';" value="Back" name="button" class="button">
  <input type="button" onclick="document.location.href='http://localhost/moviebook/login.php';" value="Logout" name="button" class="button">

</div>

</form>



<?php
if(isset($_POST["s"])) 
{

  include 'partials/_dbconnect.php';

  $sqli = "SELECT price FROM upload";
  $result1 = mysqli_query($conn, $sqli);
  while ($row = mysqli_fetch_array($result1)) {
  $m= $row['price'];
  //echo $m;
  }


  //print "Hai";
    //print "Movie name =$name<br/>";
    
    print "Movie Price=$m<br/>";
    $seat=$_POST['seat'];
    $total=0;
    for($i=0;$i<sizeof($seat);$i++)
    {
      $total=$total+$seat[$i];
      $final=$total*$m;

    }


    echo "<table border=1>
    <tr>
    <td>Movie name</td>
    <td>Movie Price</td>
    <td>No Of Seats</td>
    <td>Total Price</td>
    
    </tr>
    <tr>
    <td>$name</td>
    <td>$m</td>
    <td>$total</td>
    <td>$final</td>
    </tr>
    </table>";
  }
?>



<button onclick="window.print()">Print this page</button>




  </body>
</html>