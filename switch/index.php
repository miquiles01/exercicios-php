<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <form action="dados.php" method="get">
        <label>Digite um número</label>
        <input type="number" name="num" />
        <fieldset>
            <legend>Operação</legend>
            <input type="radio" name="oper" value="1" id="dobro" />
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" value="2" id="cubo" />
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" value="3" id="raiz" />
            <label for="raiz">Raiz Quadrada</label>
        </fieldset>

        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>