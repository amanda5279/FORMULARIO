<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alocação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Formulário de Alocação</h2>

<form action="processa_alocacao.php" method="POST">
    <label for="area">Área:</label>
    <input type="text" id="area" name="area" required>

    <label for="automovel">Automóvel:</label>
    <input type="text" id="automovel" name="automovel" required>

    <label for="concessionaria">Concessionária:</label>
    <input type="text" id="concessionaria" name="concessionaria" required>

    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade" min="1" required>

    <button type="submit">Enviar</button>
</form>

</body>
</html>
