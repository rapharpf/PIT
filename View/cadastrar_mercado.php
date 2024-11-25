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
        <a href="cadastrar_Mercado.php">Cadastrar Mercado</a>
        <a href="meus_mercados.php">Meus Mercados</a>
        <a href="minha_lista.php">Minhas Listas</a>
        <a href="#">Sair</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu empurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Cadastrar Mercado</h2>
        <br><hr><br>
        <form id="form_cadastrar_mercado" action=".\..\Control\cadastrar_mercado_c.php", method="POST">
            <label for="cadastro_nome_mercado">Nome do mercado:</label><br>
            <input type="text" id="cadastro_nome_mercado" name="cadastro_nome_mercado" placeholder="Nome do mercado" required></input><br>
            <label for="endereco_mercado">Endereço/Descrição</label><br>
            <input type="text" id="endereco_mercado" name="endereco_mercado" placeholder="Rua fulano de tal, N. 3/4"><br>
            <input type="button" class="btn" id="btn_cadastrar_mercado" name="btn_cadastrar_mercado" value="Cadastrar"></input>
        </form>
    </div>
        <script src=".\..\Control\cadastrar_mercado.js"></script>
</body>
</html>