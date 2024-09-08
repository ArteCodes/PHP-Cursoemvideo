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
      
    $a = 85;
    $b = 4;
    $maior = $a > $b?$a:$b;
    //equivalente a um se então.
    echo "<h4>Vamos ver se vc passou de ano!!</h4>";
    echo "<h4>escreva sua nota na url.</h4>";
    //para colocar mais de uma variavel na url, usasse um & para separalas.
    $nota1 = $_GET ["n1"];
    $nota2 = $_GET ["n2"];
    $nota3 = $_GET ["n3"];
    $nota4 = $_GET ["n4"];
    $media = ($nota1+$nota2+$nota3+$nota4)/4;
    $resultado = $media >= 7?"aprovado":"reprovado";
    echo "<h3>$resultado</h3>";
    echo "<h3>verificamos, e sua media é $media</h3>";

  echo "a situaao e ". ($media >= 7?"aprovado":"reprovado");



    ?>
    </font>
    </center>
</div>
</body>
</html>