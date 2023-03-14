<?php
    // Inclui o arquivo de conexão com o banco de dados
    include("../db/connection.php");
    
    // Recupera os valores dos campos do formulário
    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $peso = $_POST["peso"];
    $dt_frete = $_POST["dt_frete"];
    $dt_previsao = $_POST["dt_previsao"];

    
    // Prepara o comando SQL para inserir os dados na tabela
    $sql = "INSERT INTO frete (origem, destino, peso, dt_frete, dt_previsao)
    VALUES ('$origem', '$destino', '$peso', '$dt_frete', '$dt_previsao')";

    // Executa o comando SQL e verifica se a inserção foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
      echo "Os dados foram inseridos com sucesso!";
      header('Location: ../frete/detalhes.html');
    } else {
      echo "Erro ao inserir os dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>