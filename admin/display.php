<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equip="x-UA-Compatible" content="IE-edge">
<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
<title>Movies Website</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/lightslider.css"/>
<!--js-link-------->
<script src="js/JQuery3.3.1.js"></script>
<script src="js/lightslider.js"></script>
<!--fav-icon----->
<link rel="shortcut-icon" href="images/fav icon.png"/>
<!--using FontAwesome-------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="annonymous"></script>

<style>
* {
  box-sizing: border-box;
}

div {
  float: left;
  width: 33.33%;
  padding: 5px;
  display: table;
  content: "";
}

</style>
</head>
<body>
  
<section id="main">
    <!--showcase-------->
    <!--heading-------->
    <h1 class="showcase-heading">Showcase</h1>
      
    <ul id="autoWidth" class="cs-hidden">
       <!--box-1----------------------->
        <li class="item-a">
     <!--showcase-box------>
      <div class="showcase-box">
        <img src="images new/z-1.jpg"/>
    </div>
        </li>   
         <!--box-2----------------------->
         <li class="item-b">
            <!--showcase-box------>
             <div class="showcase-box">
               <img src="images new/z-2.jpg"/>
           </div>
               </li> 
                <!--box-3----------------------->
        <li class="item-c">
            <!--showcase-box------>
             <div class="showcase-box">
               <img src="images new/z-3.jpg"/>
           </div>
               </li> 
                <!--box-4----------------------->
        <li class="item-d">
            <!--showcase-box------>
             <div class="showcase-box">
               <img src="images new/z-4.jpg"/>
           </div>
               </li> 
                <!--box-5----------------------->
        <li class="item-e">
            <!--showcase-box------>
             <div class="showcase-box">
               <img src="images new/z-5.jpg"/>
           </div>
               </li> 
      </ul>
</section>



<?php

$files = glob("uploads/*.*");
for ($i = 0; $i < count($files); $i++) {


  echo '<div class="row">
  <div class="column">';   
  
    $image = $files[$i];
    //echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
    echo '<img src="' . $image . '" alt="Random image" width=200px height=200px/>' . "<br /><br />";

  echo'  </div>
 
</div>';

}
?>


<div class="btns">
    <a href="/moviebook/seating/seat.php">Buy Tickets</a>
</div>


  
    <!--footer--------->
    <footer>
        <p>Going To Internet, Ltd Consumer Website</p>
        <p>Copuright 2021-GoingToInternet</p>
    </footer>




<!--slider-script--------------->
<script>
     $(document).ready(function() {
    $('#autoWidth,#autoWidth2').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
        } 
    });  
  });
</script>





</body>




</html>