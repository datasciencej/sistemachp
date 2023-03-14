<?php
include "../db/connection.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cadastro.css">
   </head>
  <body>
    <div class="Superior"> 
    <h2>Cadastro do Freteiro</h2>   
    <img src="../../img/captura.png">
    </div> 
    <div id="container">
    <div class="titulo">
    </div>   
    <div class="login">
    <form action = "crud.php" method = "POST">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome"><br>

      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone"><br>

      <label for="marca">Marca do Caminhão:</label>
      <input type="text" id="marca" name="marca"><br>

      <label for="placa">Placa do Caminhão:</label>
      <input type="text" id="placa" name="placa"><br>

      <label for="cor">Cor do Caminhão:</label>
      <input type="text" id="cor" name="cor"><br>

      <label for="tipo">Tipo do Caminhão:</label>
      <input type="text" id="tipo" name="tipo"><br>

      <input type="submit" value="Enviar">
      <!-- <input type="submit" value="Enviar" onclick="enviarFormulario()"> -->
    </form>


    <script>
    function enviarFormulario() {
      // Recupera os valores dos campos do formulário
      var nome = document.getElementById("nome").value;
      var telefone = document.getElementById("telefone").value;
      var marca = document.getElementById("marca").value;
      var placa = document.getElementById("placa").value;
      var cor = document.getElementById("cor").value;
      var tipo = document.getElementById("tipo").value;

      // Cria um objeto XMLHttpRequest
      var xhttp = new XMLHttpRequest();

      // Define a função de retorno de chamada que será chamada quando a resposta do servidor for recebida
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Mostra uma mensagem informando que os dados foram enviados com sucesso
          alert(this.responseText);
        }
      };

      // Abre uma conexão com o back-end em PHP
      xhttp.open("POST", "../db/crud.php", true);

      // Define o cabeçalho da requisição HTTP
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      // Envia os dados do formulário para o back-end em PHP
      xhttp.send("nome=" + nome + "&telefone=" + telefone + "&marca=" + marca + "&placa=" + placa + "&cor=" + cor + "&tipo=" + tipo);
    }
    </script>
  </body>
</html>