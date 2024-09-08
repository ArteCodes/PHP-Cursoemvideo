<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Curso em video</title>
  <style>
   
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
  <?php
    $n = 1;      
  
    while ($n <= 5){
      $var = "num".$n;
      $url = "v".$n;
      $$var = isset($_GET[$url])?$_GET[$url]:0;
      $n++;
    }
    echo "$num1 $num2 $num3 $num4 $num5 ";

  ?>
    </font>
    </center>
</div>
</body>
</html>