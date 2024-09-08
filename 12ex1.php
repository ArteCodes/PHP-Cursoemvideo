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
    // progressiva
    $a = 1;
      do {
        echo "$a ";
          $a++;
      } while($a <= 10);
      echo "</br>";
      //regressiva
      $b = 10;
      do {
        echo "$b ";
          $b--;
      }while($b>=1);


    ?>
    </font>
    </center>
</div>
</body>
</html>