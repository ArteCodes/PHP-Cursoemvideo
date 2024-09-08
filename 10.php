<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Aula 10</title>
  <style>
    
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
    <?php
     $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
     $op = isset($_GET["operação"])?$_GET["operação"]:1;

   
    
      switch($op){
        case 1:
            $op = "Dobro";
            $resultado = $n1*2;
        break;
        case 2:
          $op = "Cubo";
          $resultado = $n1**3;
        break;
        case 3:
          $op = "Raiz quadrada";
          $resultado = number_format(sqrt($n1),2) ;
        break;
        default:
            echo "Erro";
    }
    echo "Você escolheu, $op, do número $n1, resultado: $resultado";  
    ?>
    </br>
    <a href="10.html"><h3>Voltar</h3></a>
    </font>
    </center>
</div>
</body>
</html>