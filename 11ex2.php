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
    <form method="get" action="ex3.php"> 
  <?php 
  $n = 1;
  //"a partir de um echo pode se madar comandos em html", apos usa o </br> eu não percebi que poderia usar mais de um.
  while($n <=5){
  echo "Valor $n: <input type='number' name='v$n' max='100' min='0' value='0'/> </br>";
  $n++;
}
  ?>
    <input type="submit" value="Enviar"/>

    </form>
    </font>
    </center>
</div>
</body>
</html>