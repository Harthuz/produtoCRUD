<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Alterar</h1>
    <form action="alterar2.php" method="post" name="cliente">
        <p>Informe o id do produto que deseja alterar:</p>
        <input type="number" placeholder="ID" name="txtid"> <br><br>
        <input name="btnenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
        <input type="reset" name="limpar" value="Limpar">
    </form>

    <br><br><br>
    <button><a href="../index.html">Voltar</a></button>
</body>
</html>