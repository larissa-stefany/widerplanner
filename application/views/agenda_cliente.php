    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            font-size: 32px;
            margin: 0; 
        }
        form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            margin-top: 20px;
        }
        label {
            display: block;
            margin-top: 10px; 
            text-align: left;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .form-row label {
            flex-basis: 30%;
            margin: 0;
        }
        .form-row input[type="text"],
        .form-row input[type="tel"],
        .form-row input[type="email"],
        .form-row select,
        .form-row textarea {
            flex: 1;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-row textarea {
            resize: vertical;
        }
        .date-time-container {
            display: flex;
            justify-content: space-between; 
            align-items: center;
            margin-bottom: 10px; 
        }
        .date-container,
        .time-container {
            flex: 1;
            display: flex;
            flex-direction: column; 
            align-items: center; 
        }
        .date-container label,
        .time-container label {
            display: block;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Agendamento</h2>
    <form action="processar_agendamento.php" method="post">
        <div class="form-row">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-row">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
        </div>
        
        <div class="form-row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-row">
            <label for="servico">Serviço:</label>
            <select id="servico" name="servico" required>
                <option value="" disabled selected>Selecione um serviço</option>
                <option value="servico1">Serviço 1</option>
                <option value="servico2">Serviço 2</option>
                <option value="servico3">Serviço 3</option>
                <option value="servico4">Serviço 4</option>
                <option value="servico5">Serviço 5</option>
            </select>
        </div>
        
        <div class="form-row date-time-container">
            <div class="date-container">
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required>
            </div>
            
            <div class="time-container">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" required>
            </div>
        </div>
        
        <input type="submit" value="Agendar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>
