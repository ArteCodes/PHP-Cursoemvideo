<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | Curso em video</title>
  <style>
   
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
        <?php
        $a = isset($_GET["tabuada"])?$_GET["tabuada"]:1;
        for ($i = 1; $i <= 10; $i++){
            $resultado = $a * $i;    
            echo ("$a x $i = $resultado.</br>");
                
            }
?>
<a href="javascript:history.go(-1)"><h2>voltar</h2></a>
    </font>
    </center>
</div>
</body>
</html>