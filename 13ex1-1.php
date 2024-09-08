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
<center>
    <font color="white">
    <?php
    /*
      for($c = 1; $c <= 10; $c++){
        echo "$c ";
      }
    echo "<br/>";
      for ($c = 10; $c >=1; $c--){
        echo "$c ";
      }
    echo "<br/>";
      for ($c = 20; $c >= 0; $c -= 2){
        echo "$c ";
      }
    echo "<br/>";
      for ($c = 0; $c <= 50; $c += 5){
        echo "$c ";
      }
    */
    $numero = isset($_GET["tabuada"])?$_GET["tabuada"]:1;  
      for ($c = 1; $c <= 10;){
        $r = $numero * $c;
        echo "$numero x $c = $r";
        $c++;
        echo "<br/>";
      }
    ?>
    <a href="javascript:history.go{-1}">voltar</a>
    </font>
    </center>
</div>
</body>
</html>