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
        <form action="aula13ex2.php">
          escolha uma tabuada:
          <select name="tabuada">
            <?php for ($i=1;$i<=10;$i++){ echo("<option>$i</option>");} ?>
          </select>
          <input type="submit" value="enviar">
        </form>



    </font>
    </center>
</div>
</body>
</html>