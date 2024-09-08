<!DOCTYPE html>
<html>
<head>
<?php
  $texto = isset($_GET["t"])?$_GET["t"]:"não informado";
  $tamanho = isset($_GET["tam"])?$_GET["tam"]:"12pt";
  $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
?>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | valor do formulario html</title>
  <style>
    span.texto {
      font-size: <?php echo $tamanho; ?>;
      color: <?php echo $cor; ?>;
    }
    h2{color: #d0776a;}
  </style>
</head>
<body>
<div>
<center>
    <font color="white">

     <?php
    echo "seu texo:";
    
    echo "<span class= 'texto'>$texto</span>";
   
   ?>
    <a href="8ex1.html"><h2>voltar</h2></a>
    </font>
    </center>
</div>
</body>
</html>