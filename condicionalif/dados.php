<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    
    $idade = $_GET['idade'];

    if($idade >= 18){
        echo "Maior de idade, é obrigatório votar";
    } else {
        echo "Menor de idade, não precisa votar";
    }
    ?>

    <a href="index.php">Voltar</a>
    
</body>
</html>