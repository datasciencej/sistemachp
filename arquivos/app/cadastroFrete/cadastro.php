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
  <h2>Cadastro do Frete</h2>   
    <img src="../../img/captura.png">
    </div>
     <form action = "crud.php" method = "POST">
      <label for="origem">Origem:</label>
      <input type="text" id="origem" name="origem"><br>

      <label for="destino">Destino:</label>
      <input type="text" id="destino" name="destino"><br>

      <label for="peso">Peso (Em Toneladas):</label>
      <input type="text" id="peso" name="peso"><br>

      <label for="dt_frete">Data de Saída do Frete:</label>
      <input type="date" id="dt_frete" name="dt_frete"><br>

      <label for="dt_previsao">Data de Previsão de Chegada:</label>
      <input type="date" id="dt_previsao" name="dt_previsao"><br>

      <input type="submit" value="Enviar">
      <!-- <input type="submit" value="Enviar" onclick="enviarFormulario()"> -->
    </form>

    <script>
    function enviarFormulario() {
      // Recupera os valores dos campos do formulário
      var origem = document.getElementById("origem").value;
      var destino = document.getElementById("destino").value;
      var peso = document.getElementById("peso").value;
      var dt_frete = document.getElementById("dt_frete").value;
      var dt_previsao = document.getElementById("dt_previsao").value;

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
      xhttp.send("origem=" + origem + "&destino=" + destino + "&peso=" + peso + "&dt_frete=" + dt_frete + "&dt_previsao=" + dt_previsao);
    }
    </script>
  </body>
</html>