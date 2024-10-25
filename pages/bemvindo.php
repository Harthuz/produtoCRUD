<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f4f8;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
        }

        .button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>
        Bem-vindo, 
        <?php
        session_start();
        $_SESSION['logado'] = true;
        $usuario = $_SESSION['usuario'];
        echo $usuario
        ?>
    </h1>
    <button class="button" onclick="entrar()">Entrar</button>

    <script>
        function entrar() {
            // Aqui você pode redirecionar para a página de login ou outra página desejada
            window.location.href = "../index.php"; // Altere para o caminho da sua página de login
        }
    </script>
    
</body>
</html>
