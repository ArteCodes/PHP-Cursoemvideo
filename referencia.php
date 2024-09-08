<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | referencia de variavel</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
    <?php
       echo "<h3>referencia entre variaveis</h3>";
       $a = 3;
       $b = &$a;
       echo "<h3>a= $a b= $b</h3>";
       echo "<h3>b = b + 3</h3>";
       $b += 3;
       echo "<h3>a= $a b= $b</h3>";
    ?>
</div>
</body>
</html>