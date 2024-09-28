<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Produto</title>

    <style>
        body{
            padding: 0 30vw;
        }
    </style>
</head>
<body>
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Dados do Produto</b></legend>
            <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto" </p>
            <p>Estoque: <input name="txtestoq" type="text" size="40" maxlength="40" placeholder="0"></p>
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b>Opções:</b></legend>
            <br>
            <input name="btenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btenviar)){
        include_once '../models/Produto.php';
        $pro=new Produto();
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoq);
        echo "<h3><br><br>" .$pro->salvar() ."</h3>";
    }
    ?>
    <br>
    <center>
    <button><a href="../index.html">Voltar</a></button>
</body>
</html>