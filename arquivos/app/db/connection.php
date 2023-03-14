<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fretes_chp";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
  die("A conexão com o banco de dados falhou: " . $conn->connect_error);
}
?>