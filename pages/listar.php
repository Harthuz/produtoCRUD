<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produto</title>
</head>
<body>
    <center>
        <h1>Relação de Produtos Cadastrados</h1>

        <?php
        include_once '../models/Produto.php';
        $p = new Produto();
        $pro_bd = $p->listar();
        ?>

        <b>Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Estoque</b>

        <?php
        foreach($pro_bd as $pro_mostrar){
            ?>
            <br><br>
            <b><?php echo $pro_mostrar[0]; ?></b>   &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $pro_mostrar[1]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $pro_mostrar[2]; ?>
        <?php
            }
        ?>

        <br><br><button onclick="window.location.href='../index.html';">Voltar</button>
    </center>
</body>
</html>