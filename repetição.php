<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | curso em video</title>
  <style>
    
  </style>
</head>
<body>
<div>
<center>
    <font color="white">
    <?php
    //repetição progressiva.
    $var = 1;
      while($var<=10){
        echo "$var ";
        $var++;        
      }
      echo"</br>";
      //repetição regressiva.
      $var =10;
      while($var >=1){
        echo "$var ";
        $var--;
      }
      echo"</br>";
      $var = 10;
      while($var>=0){
        echo "$var ";
        $var -= 2; //$var = $var - 2
      }
    ?>
    </font>
    </center>
</div>
</body>
</html>