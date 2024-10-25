<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produto</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif; /* Fonte do corpo */
            background-color: #f4f4f4; /* Cor de fundo suave */
            margin: 0;
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

        table {
            width: 100%; /* Largura da tabela */
            max-width: 800px; /* Largura máxima da tabela */
            border-collapse: collapse; /* Remove bordas duplicadas */
            margin: 20px 0; /* Margem acima e abaixo da tabela */
            background-color: white; /* Fundo da tabela */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
            border-radius: 8px; /* Bordas arredondadas */
        }

        th, td {
            padding: 12px; /* Espaçamento interno das células */
            text-align: left; /* Alinhamento do texto à esquerda */
            border-bottom: 1px solid #ddd; /* Linha de separação entre as linhas */
        }

        th {
            background-color: #2196F3; /* Cor do cabeçalho da tabela */
            color: white; /* Cor do texto no cabeçalho */
        }

        tr:hover {
            background-color: #f1f1f1; /* Cor de fundo ao passar o mouse */
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
    <h1>Relação de Produtos Cadastrados</h1>

    <?php
    include_once '../models/Produto.php';
    $p = new Produto();
    $pro_bd = $p->listar();
    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Estoque</th>
        </tr>

        <?php
        foreach($pro_bd as $pro_mostrar) {
            ?>
            <tr>
                <td><?php echo $pro_mostrar[0]; ?></td>
                <td><?php echo $pro_mostrar[1]; ?></td>
                <td><?php echo $pro_mostrar[2]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <button onclick="window.location.href='../index.php';">Voltar</button>
</body>
</html>
