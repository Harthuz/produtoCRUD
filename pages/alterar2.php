<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
    <style>
    </style>
</head>
<body>
    <center>
        <font face="Century Gothic" size="6"><b>Alteracao de Produtos Cadastrados</b></font><br>
        <font face="Century Gothic" size="3"><br>
        <fieldset>
            <legend><b>Alterar</b></legend>
            <?php
                $txtid = $_POST["txtid"];
                include_once '../models/Produto.php'; 
                $p = new Produto();
                $p->setId($txtid);
                $pro_bd = $p->alterar();

            ?>
            
            <br><form name="cliente2" method="POST" action="">
            <?php
                foreach ($pro_bd as $pro_mostrar) {
            ?>
                <input type="hidden" name="txtid" size="5" value="<?php echo $pro_mostrar[0]; ?>">
                <b><?php echo "ID: " . $pro_mostrar[0]; ?></b><br><br>
                <b><?php echo "Nome: "; ?></b>
                <input type="text" name="txtnome" size="25" value="<?php echo $pro_mostrar[1]; ?>"><br><br>
                <b><?php echo "Estoque: "; ?></b>
                <input type="text" name="txtestoque" size="10" value="<?php echo $pro_mostrar[2]; ?>"><br><br>
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
                echo "<br><br><h3>" .$pro->alterar2() ."</h3>";
            }
        ?>

    <button><a href="../index.html">Voltar</a></button>

    </center>
</body>
</html>
