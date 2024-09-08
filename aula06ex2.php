<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Exercicio incremento</title>
  <style>
    h3{color: white;}
  </style>
</head>
<body>
<div>
    <?php
    $ano = $_GET ["aa"];
        echo "<h3>Estamos no ano $ano</h3>";
            $ano--;
            /*em um cenario onde eu escrevesse a frase e a variavel na mesma linha.
            teria que fazer assim: echo "Sendo assim, o ano passado é ". --$ano;
            caso controrio o sistema iria escrever o valor da variavel antes 
            mesmo de realizar a operação resultando na repetição do mesmo valor.*/
        echo "<h3>Sendo assim, o ano passado é $ano</h3>";
        $ano = $_GET ["aa"];
        echo "o ano atual é ". $ano--. " sendo então o ano passado ". $ano;
    ?>
</div>
</body>
</html>