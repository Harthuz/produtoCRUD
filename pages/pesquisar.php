<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Produto</title>
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

        .pesquisarForm {
            display: flex;
            justify-content: center;
            align-items: center; /* Centraliza verticalmente */
            margin-bottom: 20px; /* Margem abaixo do formulário */
        }

        input[type="text"] {
            padding: 10px; /* Espaçamento interno do campo de texto */
            border: 1px solid #ccc; /* Borda do campo de texto */
            border-radius: 5px; /* Bordas arredondadas */
            margin-right: 10px; /* Margem à direita */
            width: 300px; /* Largura do campo de texto */
        }

        input[type="submit"] {
            background-color: #2196F3; /* Cor do botão pesquisar */
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

        .resultados {
            margin-top: 20px; /* Margem acima dos resultados */
            background-color: white; /* Fundo branco para resultados */
            border-radius: 8px; /* Bordas arredondadas */
            padding: 15px; /* Espaçamento interno */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
        }

        .resultados b {
            display: block; /* Cada linha em um bloco */
            margin: 5px 0; /* Margem acima e abaixo das linhas */
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
    </style>
</head>
<body>
    <h1 class="titulo">Pesquisar Produto</h1>
    <div class="pesquisarForm">
        <form action="" method="POST">
            <input type="text" placeholder="Digite o nome do produto" name="txtpesquisar" required>
            <input type="submit" name="btnenviar" value="Pesquisar">
        </form>
    </div>

    <div class="resultados">
        <?php
            if (isset($_POST['btnenviar'])) {
                include_once '../models/Produto.php';
                $p = new Produto();
                $p->setNome($_POST['txtpesquisar']);
                $produtos = $p->consultar();

                if ($produtos) {
                    echo "<b>ID &nbsp;&nbsp; NOME &nbsp;&nbsp; ESTOQUE</b>";
                    foreach ($produtos as $produto) {
                        echo "<b>" . $produto['id'] . " &nbsp;&nbsp;&nbsp; " . $produto['nome'] . " &nbsp;&nbsp;&nbsp; " . $produto['estoque'] . "</b>";
                    }
                } else {
                    echo "Nome do produto não encontrado.";
                }
            }
        ?>
    </div>

    <br>
    <button onclick="window.location.href='../index.php';">Voltar</button>
</body>
</html>
