<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Operadores logicos </title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
    <?php
      echo "<h4>Vamos saber se vc é obrigado a votar ou não!</h4>";
      
      $anodenascido = $_GET ["ano"];
          $idade = 2024 - $anodenascido;
        echo "Quem nasceu em $anodenascido tem $idade anos de idade, logo:";
        
          $resultado = ($idade>=18 and $idade<=64)?" Vc e obrigado a votar":"Vc não é obrigado a votar";
        echo $resultado;
    ?>
    </font>
    </center>
</div>
</body>
</html>