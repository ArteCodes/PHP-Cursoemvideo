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
      $n = isset($_GET["numero"])?$_GET["numero"]:1;
        $c = 1;
          echo "--Mostrando tabuada de $n-- </br>";
          do {
            Echo "$n x $c = ";
            $r = $n * $c;
            $c++;
            Echo "$r </br>";
          } while ($c<=10);
    ?>
    <a href="ex3.html"><h3>Voltar</h3></a>
    </font>
    
</div>
</body>
</html>