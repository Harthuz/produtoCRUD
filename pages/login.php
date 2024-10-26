<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif; /* Fonte do corpo */
            background-color: #f4f4f4; /* Cor de fundo suave */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: 100vh; /* Altura total da tela */
            margin: 0; /* Remove margens */
        }

        .login-container {
            background-color: white; /* Fundo branco para o formulário */
            padding: 40px; /* Espaçamento interno */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
            width: 300px; /* Largura do formulário */
            text-align: center; /* Alinha o texto ao centro */
        }

        h1 {
            color: #333; /* Cor do cabeçalho */
            margin-bottom: 20px; /* Margem abaixo do cabeçalho */
        }

        input[type="text"], input[type="password"] {
            width: calc(100% - 20px); /* Largura do campo de texto */
            padding: 10px; /* Espaçamento interno */
            margin-bottom: 15px; /* Margem abaixo do campo de texto */
            border: 1px solid #ccc; /* Borda do campo de texto */
            border-radius: 5px; /* Bordas arredondadas */
            font-size: 1em; /* Tamanho da fonte */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Cor do botão */
            color: white; /* Texto do botão em branco */
            padding: 10px 15px; /* Espaçamento interno do botão */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Cursor de ponteiro */
            transition: background-color 0.3s; /* Efeito de transição */
            font-size: 1em; /* Tamanho da fonte do botão */
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Cor do botão ao passar o mouse */
        }

        .error-message {
            color: red; /* Cor da mensagem de erro */
            margin-top: 15px; /* Margem acima da mensagem de erro */
            font-size: 0.9em; /* Tamanho da fonte da mensagem de erro */
        }

        .msgerrologin{
            color: red; /* Cor da mensagem de erro */
            font-size: 1em; /* Tamanho da fonte da mensagem de erro */
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>
        <form action="" method="POST" onsubmit="return validateForm()">
            <input type="text" id="username" name="username" placeholder="Usuário (apenas letras)" required>
            <input type="password" id="password" name="password" placeholder="Senha (apenas números)" required>
            <input type="submit" value="Entrar" name="logar">
            <div class="error-message" id="error-message"></div>
        </form>
        <?php
            session_start();

            if (isset($_POST['logar'])) { // Verifica se o botão de login foi pressionado
                include_once '../models/Usuario.php';
                $user = new Usuario();
                $user->setUsuario($_POST['username']);
                $user->setSenha($_POST['password']);
                $status = $user->logar();

                // Verifica se há resultados
                if (!empty($status)) {
                    foreach ($status as $status_user) {
                        $_SESSION['usuario'] = $user->getUsuario();
                        header("location:./bemvindo.php");
                    }
                } else {
                    echo "<div class=\"msgerrologin\">Usuário ou senha inválidos</div>";
                }
            }
        ?>
    </div>

    <script>
        function validateForm() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');

            // Verifica se o usuário contém apenas letras
            const userRegex = /^[a-zA-Z]+$/;
            if (!userRegex.test(username)) {
                errorMessage.textContent = "O usuário deve conter apenas letras.";
                return false;
            }

            // Verifica se a senha contém apenas números
            const passRegex = /^[0-9]+$/;
            if (!passRegex.test(password)) {
                errorMessage.textContent = "A senha deve conter apenas números.";
                return false;
            }

            errorMessage.textContent = ""; // Limpa a mensagem de erro
            return true; // Formulário pode ser enviado
        }
    </script>
    
</body>
</html>
