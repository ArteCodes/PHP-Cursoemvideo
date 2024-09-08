<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="/_css/estilo.css"/>
  <title>PHP | variaveis de variaveis</title>
  
</head>
<body>
<div>
    <center>
    <font color="white">
    <?php
      $site = "ArteCodes";
      $$site = "Criado por Edson";
      echo "<h3>$site</h3>";
      echo "<h4>$ArteCodes</h4>";
    
    ?>
    </font>
    </center>
</div>
</body>
</html>