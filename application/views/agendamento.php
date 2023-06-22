<!DOCTYPE html>
<html>
<head>
    <title>Tela de Agendamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form {
            text-align: left;
            width: 300px;
        }
        .form label {
            display: block;
            margin-bottom: 5px;
        }
        .form input[type="text"],
        .form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .form input[type="submit"] {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Agendamento</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>

                <div class="col-sm-6 col-sm-offset-3">
                <label class="form-control">
                <option>Serviços:</option>
                <select name="servicos" class="form-control">
                <option value="" selected=>Selecione um serviço</option>
                <option>teste01 -- R$00,00</option>
                <option>teste02 -- R$00,00</option> 
                <option>teste03 -- R$00,00</option> 
                <option>teste04 -- R$00,00</option> 
                <option>teste05 -- Sob consulta</option>
            </select> 
                
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required>
                
                <label for="horario" style="margin-top: 10px;">Horário:</label>
                <input type="time" id="horario" name="horario" required>

                <input type="submit" value="Agendar">
                
            </form>
        </div>
    </div>
</body>
</html>
