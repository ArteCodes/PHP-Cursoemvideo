<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | aula 9</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
<?php
    //variaveis
      $anon = isset($_GET["anonascido"])?$_GET["anonascido"]:0;
      $idade = date("Y") - $anon;
    //
        if ($idade<16){
          $votar = "você não pode votar";
          $dirigir = "não pode dirigir."; 
        }
          elseif ($idade >= 16 && $idade<18){
              $votar = "seu voto é opcional";
              $dirigir = "não pode dirigir.";
            }
              elseif ($idade>=65){
                  $votar = "seu voto é opcional";
                  $dirigir = "pode dirigir.";
                }
                  else{
                    $votar = "seu voto é obrigatório";
                    $dirigir = "pode dirigir.";
                  } 
          
  echo "Você tem $idade, e com essa idade $votar e também, $dirigir";
?>
    </font>
    </center>
</div>
</body>
</html>