<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | igual identico </title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
    <?php
      echo "<h4>inicio da aula</h4>";
      $a = 3;
      $b = "3";
      //igual
        $r = $a == $b? "sim":"nao";
          echo $r; 
          //indentico
          $r = $a === $b? "sim":"nao";
          echo $r;



    ?>
    </font>
    </center>
</div>
</body>
</html>