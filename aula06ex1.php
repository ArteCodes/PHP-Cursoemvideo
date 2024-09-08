<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | |Exercicio Operadores</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
    <?php
       echo "<h3>10% de desconto na nossa compra</h3>";
       $valor = $_GET["p"];
       echo "<h3> valor inicial do produto R$$valor</h3>";
        $valor -= $valor*10/100;
        $valor = number_format ($valor, 2, ',','.');
       echo "<h3> valor do produto após o desconto R$$valor</h3>";
        
        
        
        







    ?>
</div>
</body>
</html>