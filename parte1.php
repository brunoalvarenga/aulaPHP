<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <form action="parte2.php" method="get">
    <?php 
    $n = 1;
    while ($n <= 5) {
    	echo "Valor $n: <input type='number' name='$n' max='100' min='0' value='0'/><br>";
    	$n++;
    }
    ?>
      <input type="submit" class="botao" value="Verificar"><br>
    </form>

</div>
</body>
</html>
 