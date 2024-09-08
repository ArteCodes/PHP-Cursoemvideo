<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | aula 9</title>
  <style>
    h4{color: #c91014;}
  
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
<?php
    //variaveis
      $n1 = isset($_GET["Nota1"])?$_GET["Nota1"]:"sem nota";
      $n2 = isset($_GET["Nota2"])?$_GET["Nota2"]:"sem nota";
      
      
      if($n1 === "sem nota" || $n2 === "sem nota"){
        Echo "Uma ou demais notas não foram informadas";
      }
      elseif(($n1>0 && $n1<11) && ($n2>0 && $n2<11)) {
        $media = ($n1 + $n2)/2;
        echo "Suas notas são $n1 e $n2, e sua media é $media</br>";
      
      }
      else{
        echo "notas invalidas";
      }
     if ($media>=7){
      $media = "APROVADO";
     } 
     elseif($media<4){
      $media = "REPROVADO";
     }
     else {
      $media = "RECUPERAÇÃO";
     }
      Echo "Situação do aluno:" ;    
      Echo "<h4>$media</h4>" ;
     
?>
    </font>
    </center>
</div>
</body>
</html>