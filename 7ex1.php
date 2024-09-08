<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Operadores relacionais</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
    <?php
    echo "<h4>ola usuario! gostaria de realizar qual operação?</h4>";
    echo "<h4>escreva:</br> 1- divisão</br> 2- soma</h4>";
    $a = $_GET ['a'];
    $b = $_GET ['b'];
    $operação = $_GET ['op'];
   
    $operaçãoe = $operação == 1 ?"$a/$b":"$a+$b";
        echo $operaçãoe;
    $operaçãoe = $operação == 1 ?$a/$b:$a+$b;
    echo "<h3>resultado:$operaçãoe</h3>";
  



    ?>
    </font>
    </center>
</div>
</body>
</html>