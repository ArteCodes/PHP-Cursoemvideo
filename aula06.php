<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Operadores de Atrbuição</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
    <?php
    $a = 2;
    $b = 3;
    echo "<h3>a = $a,  b= $b</h3>";
    echo "<h3>c <= a + b</h3>";
        $c = $a + $b;
    echo "<h3>c = $c</h3>";
    
    echo "<h3>c <= c + 5</h3>";
        $c += 5; //mesma coisa que: $c = $c + 5;
    echo "<h3>c = $c</h3>";

    echo "<h3>a <= a + 1</h3>";
    $a++; //pode tando se escrever do método tradicional, quanto por, "$a += 1;"
    echo "<h3>a = $a</h3>";



    ?>
</div>
</body>
</html>