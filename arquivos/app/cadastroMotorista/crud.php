<?php
    // Inclui o arquivo de conexão com o banco de dados
    include("../db/connection.php");
    
    // Recupera os valores dos campos do formulário
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $marca = $_POST["marca"];
    $placa = $_POST["placa"];
    $cor = $_POST["cor"];
    $tipo = $_POST["tipo"];

    
    // Prepara o comando SQL para inserir os dados na tabela
    $sql = "INSERT INTO dados_usuario (nome, telefone, marca, placa, cor, tipo)
    VALUES ('$nome', '$telefone', '$marca', '$placa', '$cor', '$tipo')";

    // Executa o comando SQL e verifica se a inserção foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
      echo "Os dados foram inseridos com sucesso!";
      header('Location: ../detalhesFrete/detalhes.html');
    } else {
      echo "Erro ao inserir os dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>