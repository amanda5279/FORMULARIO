<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Alocação</title>
</head>
<body>

<h2>Formulário de Alocação</h2>

<form action="processa_alocacao.php" method="POST">
    <label>Área:</label>
    <input type="text" name="area" required><br><br>

    <label>Automóvel:</label>
    <input type="text" name="automovel" required><br><br>

    <label>Concessionária:</label>
    <input type="text" name="concessionariaa" required><br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" min="1" required><br><br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>
