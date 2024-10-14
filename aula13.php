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
        $a = isset($_GET["inicio"])?$_GET["inicio"]:1;
        $b = isset($_GET["sequencia"])?$_GET["sequencia"]:1;
        $c = isset($_GET["passos"])?$_GET["passos"]:2;
            for ($i = 1; $i <= $c; $i++){
                echo ("$a ");
                $a += $b;
                
            }
?>

    </font>
    </center>
</div>
</body>
</html>