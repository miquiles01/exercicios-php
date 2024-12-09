<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
</head>
<body>

<?php
    # operadores de incremento
    #pré incremento: $a = $a + 1, ou seja, ++$a
    #pós incremento: $a = $a + 1, ou seja, $a++
    #pré decremento: $a = $a - 1, ou seja, --$a
    #pós decremento: $a = $a - 1, ou seja, $a--

    $ano_atual = $_GET["aa"];
    echo "o ano atual é $ano_atual e o ano anterior é " . --$ano_atual;
        

    
?>
    
</body>
</html>