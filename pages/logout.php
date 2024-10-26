<?php
session_start();
$_SESSION['logado'] = false; // Altera a variável de sessão
header("Location: login.php"); // Redireciona para a página de login
exit(); // Termina o script
?>