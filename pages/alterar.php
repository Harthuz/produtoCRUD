<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4; /* Cor de fundo suave */
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centraliza horizontalmente */
            text-align: center;
        }

        h1 {
            color: #333; /* Cor do cabeçalho */
            margin-bottom: 20px;
        }

        form {
            background-color: white; /* Fundo branco para o formulário */
            padding: 20px;
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
            width: 300px; /* Largura do formulário */
        }

        input[type="number"], input[type="submit"], input[type="reset"] {
            width: 100%; /* Campos ocupam a largura total */
            padding: 10px; /* Espaçamento interno */
            margin: 10px 0; /* Margem vertical entre os campos */
            border: 1px solid #ccc; /* Borda padrão */
            border-radius: 5px; /* Bordas arredondadas */
            box-sizing: border-box; /* Inclui padding e border na largura total */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Cor do botão de enviar */
            color: white; /* Texto do botão em branco */
            cursor: pointer; /* Cursor de ponteiro ao passar sobre o botão */
            transition: background-color 0.3s; /* Efeito de transição */
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Cor do botão ao passar o mouse */
        }

        input[type="reset"] {
            background-color: #f44336; /* Cor do botão de limpar */
            color: white; /* Texto do botão em branco */
        }

        input[type="reset"]:hover {
            background-color: #e53935; /* Cor do botão ao passar o mouse */
        }

        button {
            background-color: #2196F3; /* Cor do botão voltar */
            color: white; /* Texto do botão em branco */
            padding: 10px 20px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Cursor de ponteiro */
            transition: background-color 0.3s; /* Efeito de transição */
            margin-top: 20px; /* Margem acima do botão */
        }

        button:hover {
            background-color: #1976D2; /* Cor do botão ao passar o mouse */
        }
    </style>
</head>
<body>
    <h1>Alterar</h1>
    <form action="alterar2.php" method="post" name="cliente">
        <p>Informe o ID do produto que deseja alterar:</p>
        <input type="number" placeholder="ID" name="txtid" required> <br>
        <input name="btnenviar" type="submit" value="Consultar"> 
        <input type="reset" name="limpar" value="Limpar">
    </form>

    <button onclick="window.location.href='../index.php';">Voltar</button>
</body>
</html>
