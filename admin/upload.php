
<html>
<head>
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
</body>
</html>