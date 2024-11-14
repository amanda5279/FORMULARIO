<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Automoveis</title>
</head>
<body>

<h2>Formulário de Automoveis</h2>

<form action="processa_alocacao.php" method="POST">
    <label>Modelo:</label>
    <input type="text" name="modelo" required><br><br>

    <label>Preço:</label>
    <input type="number" name="preco" min="1" required><br><br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>