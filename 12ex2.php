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
    $n = isset($_GET["n"])?$_GET["n"]:1;
    $c = $n;
      do {
        
        echo "$n ";
        $c--;
        $n = $n * $c;
      } while ($c >= 2);
    
    ?>
    </br>
    <a href="ex2.html"><h3>Voltar</h3></a>
    </font>
    </center>
</div>
</body>
</html>