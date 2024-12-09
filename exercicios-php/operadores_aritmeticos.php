<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>

<?php

    # operadores
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];

    echo "Valores recebidos: $n1 e $n2 <br />";
    echo "o valor absoluto de $n2 é " . abs($n2) . "<br />";
    echo "o valor de $n1<sup>$n2</sup> é " . pow($n1, $n2) . "<br />";
    echo "a raiz quadrada de $n2 é " . sqrt($n2) . "<br />";
    echo "o número em real é R$ " . number_format($n1, 2);
    
?>
    
</body>
</html>