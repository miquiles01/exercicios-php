<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Relacionais</title>
</head>
<body>

<?php

    $a = 3;
    $b = "3";
    //$resultado = ($a == $b) ? "Sim" : "Não"; iguais 
    $resultado = ($a === $b) ? "Sim" : "Não"; // identicas


    echo "As variáveis A e B são idênticas? $resultado";

    // verificando a média 
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];

    $media = ($n1+$n2+$n3+$n4) / 4;

    $media_final = ($media >= 7) ? "aprovado!" : "reprovado! :(";

    echo "<br /> A média do aluno foi $media, o aluno está $media_final";
?>
    
</body>
</html>