<?php
// Configurações de conexão
$host = 'localhost';  // Geralmente "localhost", mas pode variar
$senha = '';
$banco = 'veiculo';

// Criando a conexão
$conexao = new mysqli($host, $senha, $banco);

// Verificando se há erros na conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Mensagem de sucesso
echo "Conexão bem-sucedida ao banco de dados!";
?>

   