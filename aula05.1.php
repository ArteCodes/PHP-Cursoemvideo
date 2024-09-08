<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Funções aritmeticas</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
    <?php
       $v1 = $_GET ["x"];
       $v2 = $_GET ["y"];
//valor total
    $valor = abs($v2);
    echo "<h3>Valores recebidos $v1 e $v2.</h3>";
    echo "<h3>Valor absolutode de $v2 é $valor</h3>";
//potenciação 
    $valor = pow($v1, $v2);
    echo "<h3>O valor de $v1<sup>$v2</sup>  é $valor</h3>";
//raiz
    $valor = sqrt($v1);
    echo "<h3>A raiz de $v1 é $valor</h3>";
//aredondamento
//Além do round existem o ceil e o floor, com a mesma função, porém o ceil sempre arrendonda para cima, e o floor, para baixo.
    $valor = round($v2);
    echo "<h3>o valor arredondado de $v2 é $valor</h3>";

//pegar valor inteiro de um numero
    $valor = intval($v2);
    echo "<h3>A parte inteira de $v2 é $valor</h3>";    
//formatação 
$valor = number_format($v1, 2, ',', '.');
echo "<h3>O valor formatado de $v1 em reais é R$$valor</h3>";
    
    
    ?>
</div>
</body>
</html>