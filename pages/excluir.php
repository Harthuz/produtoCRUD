<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Registro</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Excluir Registro</h1>
    <form name="cliente" method="POST" action="">
        <label for="id">ID do Registro:</label> <br><br>
        <input type="text" id="txtid" name="txtid" placeholder="Digite o ID" required> <br> <br>
        <input name="btnenviar" type="submit" value="Excluir"> <br><br><br>
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
