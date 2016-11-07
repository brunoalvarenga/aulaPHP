<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

Abs pega o valor absoluto do elemento
<body>
<div>

    <style>
      h2  {
            font-color: #2539ee;
            color: #2539ee
        ;
        }
    </style>
    <?php



    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<H2>Valorea recebidos: $v1 e $v2</H2>";
    echo "O valor absoluto de $v2 e " . abs($v2);
   "o valor de $v1 em modeda e R$". number_format($v1, 2);



    ?>







</div>
</body>
</html>

