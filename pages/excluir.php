<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Registro</title>
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

        label {
            font-weight: bold; /* Deixar o texto do rótulo em negrito */
            margin-bottom: 5px; /* Margem abaixo do rótulo */
            display: block; /* Para que o rótulo ocupe uma linha inteira */
        }

        input[type="text"], input[type="submit"] {
            width: 100%; /* Campos ocupam a largura total */
            padding: 10px; /* Espaçamento interno */
            margin: 10px 0; /* Margem vertical entre os campos */
            border: 1px solid #ccc; /* Borda padrão */
            border-radius: 5px; /* Bordas arredondadas */
            box-sizing: border-box; /* Inclui padding e border na largura total */
        }

        input[type="submit"] {
            background-color: #f44336; /* Cor do botão de excluir */
            color: white; /* Texto do botão em branco */
            cursor: pointer; /* Cursor de ponteiro ao passar sobre o botão */
            transition: background-color 0.3s; /* Efeito de transição */
        }

        input[type="submit"]:hover {
            background-color: #d32f2f; /* Cor do botão ao passar o mouse */
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

        .message {
            margin-top: 20px; /* Margem acima da mensagem */
            font-weight: bold; /* Deixa a mensagem em negrito */
            color: #333; /* Cor da mensagem */
        }
    </style>
</head>
<body>
    <h1>Excluir Registro</h1>
    <form name="cliente" method="POST" action="">
        <label for="txtid">ID do Registro:</label> 
        <input type="text" id="txtid" name="txtid" placeholder="Digite o ID" required> 
        <input name="btnenviar" type="submit" value="Excluir"> 
        <button type="button" onclick="window.location.href='../index.html';">Voltar</button>
    </form>

    <?php
        if(isset($_POST['btnenviar'])){
            include_once '../models/Produto.php';
            $p = new Produto();
            $p->setId($_POST['txtid']);
            echo "<div class='message'>" . $p->exclusao() . "</div>";
        }
    ?>
</body>
</html>
