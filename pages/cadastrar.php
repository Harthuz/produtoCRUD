<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Produto</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif; /* Fonte do corpo */
            background-color: #f4f4f4; /* Cor de fundo suave */
            margin: 0; /* Remove margens */
            padding: 20px; /* Espaçamento interno */
            display: flex;
            flex-direction: column;
            align-items: center; /* Centraliza horizontalmente */
            text-align: center; /* Alinha o texto ao centro */
        }

        h1 {
            color: #333; /* Cor do cabeçalho */
            margin-bottom: 20px; /* Margem abaixo do cabeçalho */
        }

        form {
            background-color: white; /* Fundo branco para o formulário */
            border-radius: 8px; /* Bordas arredondadas */
            padding: 20px; /* Espaçamento interno do formulário */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
            width: 300px; /* Largura do formulário */
        }

        input[type="text"] {
            width: calc(100% - 20px); /* Largura do campo de texto */
            padding: 10px; /* Espaçamento interno */
            margin-bottom: 15px; /* Margem abaixo do campo de texto */
            border: 1px solid #ccc; /* Borda do campo de texto */
            border-radius: 5px; /* Bordas arredondadas */
        }

        input[type="submit"], input[type="reset"] {
            background-color: #2196F3; /* Cor do botão */
            color: white; /* Texto do botão em branco */
            padding: 10px 15px; /* Espaçamento interno do botão */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Cursor de ponteiro */
            transition: background-color 0.3s; /* Efeito de transição */
            margin-right: 10px; /* Margem à direita */
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #1976D2; /* Cor do botão ao passar o mouse */
        }

        button {
            background-color: #f44336; /* Cor do botão voltar */
            color: white; /* Texto do botão em branco */
            padding: 10px 20px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Cursor de ponteiro */
            transition: background-color 0.3s; /* Efeito de transição */
        }

        button:hover {
            background-color: #d32f2f; /* Cor do botão ao passar o mouse */
        }

        .message {
            margin-top: 20px; /* Margem acima da mensagem */
            font-size: 1.2em; /* Aumenta o tamanho da fonte da mensagem */
            color: #333; /* Cor da mensagem */
        }
    </style>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form name="cliente" method="POST" action="">
        <p>Nome:</p>
        <input name="txtnome" type="text" maxlength="40" placeholder="Nome do Produto" required>
        <p>Estoque:</p>
        <input name="txtestoq" type="text" maxlength="40" placeholder="0" required>
        <input name="btenviar" type="submit" value="Cadastrar"> 
        <input name="limpar" type="reset" value="Limpar">
    </form>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btenviar)){
        include_once '../models/Produto.php';
        $pro=new Produto();
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoq);
        echo "<div class='message'>" . $pro->salvar() . "</div>";
    }
    ?>
    
    <br>
    <button onclick="window.location.href='../index.html';">Voltar</button>
</body>
</html>
