<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados</title>
</head>
<body>

<?php

    $valor = $_GET['valor'];
    $raiz = sqrt($valor);

    echo "A raiz quadrada de $valor é: " . number_format($raiz, 2);
?>
<a href="index.php">Voltar</a>
    
</body>
</html>