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
     $nome = isset($_GET["nome"])?$_GET["nome"] : "[nome não informado]";
     $anonascido = isset($_GET["idade"])?$_GET["idade"] : 0;
     $sexo =isset($_GET["sexo"])?$_GET["sexo"] : "[sem sexo]";
     $idade = date("Y") - $anonascido;
     $idade = $idade == date("Y")?"[idade não informado]":$idade + 0; 
    echo "$nome,é um $sexo de $idade anos de idade.";
    


    ?>
    <a href="8ex1.html"><h2>voltar</h2></a>
    </font>
    </center>
</div>
</body>
</html>