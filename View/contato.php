<?php
    session_start();
    if((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true)){
        $logado = $_SESSION['login'];

    }else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></link>
    <title>MarketDB</title>
</head>
<body>
    <!--Links da nav bar lateral-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" id="openBtn" onclick="openNav()">&equiv;</a>
        <a href="javascript:void(0)" id="closeBtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Início</a>
        <a href="cadastrar_mercado.php">Cadastrar Mercado</a>
        <a href="meus_mercados.php">Meus Mercados</a>
        <a href="minha_lista.php">Minhas Listas</a>
        <a href="sobre.php">Sobre</a>
        <a href="contato.php">Contato</a>
        <a href=".\..\Control\sair_c.php"><button id="btn_sair">Sair</button></a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu empurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Contato</h2>
        <br><hr><br><br><br>
        <h2>MarketDB</h2>
        <div id="sobre_body">
            <p> Universidade Cruzeiro do Sul</p>
            <p> Projeto Integrador Transdisciplinar em Ciência da Computação II</p>
            
        </div>
    </div>
    <script src=".\..\Control\script.js"></script>
</body>
</html>