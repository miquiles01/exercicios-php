<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Referenciadas</title>
</head>
<body>

<?php
    
    $a = 9;
    $b = $a;
    $b += 8;

    echo "A variavél A vale " . $a . " e a variável B vale " . $b;
   

    
?>
    
</body>
</html>