<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuição</title>
</head>
<body>

<?php

    # atribuição
    $preco = $_GET["p"];
    echo "o valor da bicicleta é de R$ " . number_format($preco, 2, ".", ",");
    $preco -= ($preco*10/100);
    echo "<br /> o valor com 10% de desconto é R$ " . number_format($preco, 2, ".", ",");


    # operadores de incremento
    #pré incremento: $a = $a + 1, ou seja, ++$a
    #pós incremento: $a = $a + 1, ou seja, $a++
    #pré decremento: $a = $a - 1, ou seja, --$a
    #pós decremento: $a = $a - 1, ou seja, $a--

    $ano_atual = $_GET["aa"];
        

    
?>
    
</body>
</html>