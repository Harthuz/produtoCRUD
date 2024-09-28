<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"], button {
            background-color: #202124;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #030303;
        }
        .message {
            margin-top: 20px;
            font-size: 16px;
            color: #111111;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Excluir Registro</h1>
        <form name="cliente" method="POST" action="">
            <label for="id">ID do Registro:</label>
            <input type="text" id="txtid" name="txtid" placeholder="Digite o ID" required>
            <input name="btnenviar" type="submit" value="Excluir">
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
    </div>
</body>
</html>
