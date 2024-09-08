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
        <form method="get" action="ex1-1.php">
  Tabuada <select name="tabuada">
            <?php
              for ($c = 1; $c <= 10;){
                echo "<option>$c</option>";
                $c++;
              }
            ?>  
          </select>
            <input type="submit" value="Tabuada"/>
        </form>



    </font>
    </center>
</div>
</body>
</html>