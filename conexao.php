<?php
    $nome=$_POST['nome'];
    $concessionaria=$_POST['concessionaria'] ;
    $modelo=$_POST['modelo'];
    $preco=$POST['preco'];
    $area=$_POST['area'] ;
    $automovel=$_POST['automovel'];
    $concessionariaa=$_POST['concessionariaa'];
    $quantidade=$_POST['quantidade'];

    // Conectar ao banco de dados
    $strconexao = mysqli_connect('localhost', 'root', '', 'veiculo');

    // Verifica se a conexão foi estabelecida corretamente
    if (!$strconexao) {
        die('Não foi possível conectar ao banco de dados');
    }

    // Verifica a década do veículo e constrói a consulta SQL

    // Constrói a consulta SQL
    $sql = "INSERT INTO $table_name (nome, concessionaria, modelo, preco, area, automovel, concessionariaa, quantidade) 
            VALUES ('$nome', '$concessionaria', '$modelo', '$preco', '$area', '$automovel', '$concessionariaa', '$quantidade')";

    // Executa a consulta SQL
    mysqli_query($strconexao, $sql) or die ("Erro ao cadastrar");

    // Fecha a conexão com o banco de dados
    mysqli_close($strconexao);

?>
