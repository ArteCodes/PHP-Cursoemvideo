<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | valor do formulario html</title>
  <style>
    h2{color: #d0776a;}
  </style>
</head>
<body>
<div>
<center>
    <font color="white">

     <?php
      
    $valor = $_GET ["v"];
    $raiz = sqrt($valor);
    echo "<h4>O valor enviado foi: $valor</h4>";  
    
    echo "sua raiz é ". number_format($raiz,2);
    ?>
    <a href="8.html"><h2>voltar</h2></a>
    </font>
    </center>
</div>
</body>
</html>