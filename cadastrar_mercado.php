<?php

    if(isset($_POST["btn_cadastrar_mercado"])) {
        //echo "Deu certo!";
        //print_r($_POST["cadastro_nome_mercado"]);
        //print_r($_POST["endereco_mercado"]);

        include_once "config.php";

        $cadastro_nome_mercado = $_POST["cadastro_nome_mercado"];
        $endereco_mercado = $_POST["endereco_mercado"];
        
        $conexao->query("INSERT INTO cadastro_mercados(nome_mercado, desc_mercado) 
        VALUES ('$cadastro_nome_mercado', '$endereco_mercado')");
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
        <a href="index.php">Início</a>
        <a href="cadastrar_Mercado.php">Cadastrar Mercado</a>
        <a href="#">Escolher Mercado</a>
        <a href="#">Criar Lista</a>
        <a href="#">Minhas Listas</a>
        <a href="#">Minhas Compras</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu impurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Cadastrar Mercado</h2>
        <form action="cadastrar_mercado.php", method="POST">
            <label for="cadastro_nome_mercado">Nome do mercado:</label><br>
            <input type="text" id="cadastro_nome_mercado" name="cadastro_nome_mercado" placeholder="Nome do mercado"><br>
            <label for="endereco_mercado">Endereço/Descrição</label><br>
            <input type="text" id="endereco_mercado" name="endereco_mercado" placeholder="Rua fulano de tal, N. 3/4"><br>
            <input type="submit" class="btn" id="btn_cadastrar_mercado" name="btn_cadastrar_mercado" value="Cadastrar" onclick="cadastrarMercado()">
        </form>
    </div>
        <script src="script.js"></script>
</body>
</html>