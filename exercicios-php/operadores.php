<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>

<?php

    # operadores
    $aluna = "Thalita Miquiles";
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3 = $_GET["nota3"];
    $n4 = $_GET["nota4"];

    $media = ($n1+$n2+$n3+$n4) / 4;

    echo "Valores recebidos: $n1, $n2, $n3 e $n4 <br />";
    echo "A média da aluna $aluna é $media";
    
?>
    
</body>
</html>