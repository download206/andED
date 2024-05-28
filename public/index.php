<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            margin-top: 20px;
        }
        .date-time {
            margin-top: 20px;
            font-size: 1.2em;
            color: #333;
        }
    </style>
    <script>
        function showAlert() {
            alert('Você clicou no botão de alerta!');
        }

        function displayInputText() {
            const inputText = document.getElementById('inputField').value;
            document.getElementById('displayText').innerText = inputText;
        }

        function updateDateTime() {
            const now = new Date();
            const formattedDateTime = now.toLocaleString();
            document.getElementById('dateTime').innerText = formattedDateTime;
        }

        window.onload = function() {
            updateDateTime();
            setInterval(updateDateTime, 1000);
        }
    </script>
</head>
<body>
    <h1>Bem-vindo à Minha Página Inicial</h1>
    <p>Esta é uma página inicial simples para o meu projeto.</p>

    <div class="container">
        <button onclick="showAlert()">Clique aqui para um alerta</button>
    </div>

    <div class="container">
        <input type="text" id="inputField" placeholder="Digite algo aqui">
        <button onclick="displayInputText()">Mostrar texto</button>
        <p id="displayText"></p>
    </div>

    <div class="date-time">
        <p>Data e Hora Atuais: <span id="dateTime"></span></p>
    </div>
</body>
</html>

