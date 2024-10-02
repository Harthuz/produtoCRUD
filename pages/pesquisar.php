<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar produto</title>
    <style>
        .pesquisarForm{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div>
        <center>
            <h1 class="titulo">Pesquisar Produto</h1>
            <form action="" method="POST">
                <input type="text" placeholder="Digite o nome do produto" name="txtpesquisar">
                <input type="submit" name="btnenviar" value="Pesquisar">
            </form>
        </center>
    </div>

    <center>
    <?php
        if (isset($_POST['btnenviar'])) {
            include_once '../models/Produto.php';
            $p = new Produto();
            $p->setNome($_POST['txtpesquisar']);
            $produtos = $p->consultar();

            echo "<br> ID &nbsp; NOME &nbsp; ESTOQUE <br><br>";

            if ($produtos) {
                foreach ($produtos as $produto) {
                    echo $produto['id'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
                    echo $produto['nome'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
                    echo $produto['estoque'] . "<br>";
                }
            } else {
                echo "Nome do produto não encontrado.";
            }
        }
    ?>
    </center>

    <br>
    <center><button onclick="window.location.href='../index.html';">Voltar</button></center>
</body>
</html>
