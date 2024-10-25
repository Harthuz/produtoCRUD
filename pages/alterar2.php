<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
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

        fieldset {
            background-color: white; /* Fundo branco para o campo */
            border: 1px solid #ccc; /* Borda do campo */
            border-radius: 8px; /* Bordas arredondadas */
            padding: 20px; /* Espaçamento interno do campo */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
            width: 300px; /* Largura do campo */
        }

        legend {
            font-weight: bold; /* Texto em negrito */
            font-size: 1.5em; /* Tamanho da fonte do legend */
            color: #333; /* Cor do texto */
        }

        input[type="text"] {
            width: calc(100% - 20px); /* Largura do campo de texto */
            padding: 10px; /* Espaçamento interno */
            margin-bottom: 15px; /* Margem abaixo do campo de texto */
            border: 1px solid #ccc; /* Borda do campo de texto */
            border-radius: 5px; /* Bordas arredondadas */
        }

        input[type="submit"] {
            background-color: #2196F3; /* Cor do botão */
            color: white; /* Texto do botão em branco */
            padding: 10px 15px; /* Espaçamento interno do botão */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Cursor de ponteiro */
            transition: background-color 0.3s; /* Efeito de transição */
        }

        input[type="submit"]:hover {
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
    <h1>Alteração de Produtos Cadastrados</h1>
    <fieldset>
        <legend>Alterar</legend>
        <?php
            $txtid = $_POST["txtid"];
            include_once '../models/Produto.php'; 
            $p = new Produto();
            $p->setId($txtid);
            $pro_bd = $p->alterar();
        ?>
        
        <form name="cliente2" method="POST" action="">
            <?php
                foreach ($pro_bd as $pro_mostrar) {
            ?>
                <input type="hidden" name="txtid" value="<?php echo $pro_mostrar[0]; ?>">
                <b><?php echo "ID: " . $pro_mostrar[0]; ?></b><br><br>
                <b><?php echo "Nome: "; ?></b>
                <input type="text" name="txtnome" value="<?php echo $pro_mostrar[1]; ?>" required><br><br>
                <b><?php echo "Estoque: "; ?></b>
                <input type="text" name="txtestoque" value="<?php echo $pro_mostrar[2]; ?>" required><br><br>
                <center>
                    <input name="btalterar" type="submit" value="Alterar">
                </center>
            <?php 
                }
            ?>
        </form>
    </fieldset>

    <?php
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btalterar)){
            include_once '../models/Produto.php';
            $pro = new Produto();
            $pro->setNome($txtnome);
            $pro->setEstoque($txtestoque);
            $pro->setId($txtid);
            echo "<div class='message'>" .$pro->alterar2() ."</div>";
        }
    ?>
    
    <br>
    <button onclick="window.location.href='../index.html';">Voltar</button>
</body>
</html>
