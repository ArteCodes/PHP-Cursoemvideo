<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Operadores Aritméticos</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
    <?php

        
    $n1 = $_GET ["a"];
    $n2 = $_GET ["b"];
    
    echo "<h3>Os digitos referentes as operações são: $n1 e $n2</h3>";
     
    //soma
        $s = $n1 + $n2;
        echo "<h3>A soma vale $s</h3>";

    //subitração
        $s = $n1 - $n2;
        echo "<h3>A subitração vale $s</h3>";

    //multilicação
        $s = $n1 * $n2;
        echo "<h3>A multiplicação vale $s</h3>";

    //divisão 
        $s = $n1 / $n2;
        echo "<h3>A divisão vale $s</h3>";

    //módulo
        $s = $n1 % $n2;
        echo "<h3>o modulo de $n1 e $n2 é: $s</h3>";
    
    //media
        $m = ($n1 + $n2)/2;
        echo "<h3>A media é $m</h3>";


    ?>
</div>
</body>
</html>