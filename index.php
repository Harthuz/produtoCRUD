<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Menu</title>
</head>
<body>
    <?php
        session_start();

        // Verifica se o usuário está logado
        if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
            header("location:./pages/login.php");
        }
    ?>
    
    <div class="titulo"><h1>PRODUTOS</h1></div>
    <hr>

    <div class="containerBotoes">
        <a href="./pages/pesquisar.php">
            <div class="buttonall">
                <div class="circlebutton">
                    <img src="./assets/images/icon_pesquisar.png" alt="">
                </div>
                <div class="button">
                    <div>
                        <p>PESQUISAR</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="./pages/cadastrar.php">
            <div class="buttonall">
                <div class="circlebutton">
                    <img src="./assets/images/icon_cadastrar.png" alt="">
                </div>
                <div class="button">
                    <div>
                        <p>CADASTRAR</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="./pages/listar.php">
            <div class="buttonall">
                <div class="circlebutton">
                    <img src="./assets/images/icon_listar.png" alt="">
                </div>
                <div class="button">
                    <div>
                        <p>LISTAR</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="./pages/alterar.php">
            <div class="buttonall">
                <div class="circlebutton">
                    <img src="./assets/images/icon_alterar.png" alt="">
                </div>
                <div class="button">
                    <div>
                        <p>ALTERAR</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="./pages/excluir.php">
            <div class="buttonall">
                <div class="circlebutton">
                    <img src="./assets/images/icon_excluir.png" alt="">
                </div>
                <div class="button">
                    <div>
                        <p>EXCLUIR</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="sair" onclick="window.location.href='./pages/logout.php'">
        <div>
            Sair
        </div>
    </div>
</body>
</html>