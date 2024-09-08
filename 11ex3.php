<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | curso em video</title>
  <style>
    
  </style>
</head>
<body>
<div>
<font color="white">
<?php
  $inicio = isset($_GET["inicio"])?$_GET["inicio"]:1;
  $final = isset($_GET["final"])?$_GET["final"]:2;
  $incremeto = isset($_GET["incremento"])?$_GET["incremento"]:1;


  echo "Sua sequência de $inicio à $final: </br>";
  if ($inicio > $final){
    while ($inicio >= $final){
      echo "$inicio ";
      $inicio -= $incremeto;
    }
  }
    else{
  
  while($inicio <= $final){
    echo "$inicio ";
    $inicio += $incremeto;
  }
    }
?>
</font>
</div>
</body>
</html>   