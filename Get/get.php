<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando o metodo Get</title>
</head>
<body>

    <form action="dadosget.php" method="GET">
        Nome: <input type="text" name="nome">
        Numero: <input type="text" name="numero">
        <input type="submit" name="enviar">
    </form>
    <a href="dadosget.php?idade=18&sobrenome=Prado Leite">Enviar dados</a>
</body>
</html>