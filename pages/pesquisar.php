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

        .titulo {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1 class="titulo">Pesquisar Produto</h1>
    <div class="pesquisarForm">
        <div>
            <center>
                <form action="" method="POST">
                    <input type="text" placeholder="Digite o produto" name="txtpesquisar">
                    <!-- Adicionando o name ao botão de envio -->
                    <input type="submit" name="btnenviar" value="Pesquisar">
                </form>
            </center>
        </div>
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
    <center><a href="../index.html"><button>Voltar</button></a></center>
</body>
</html>
