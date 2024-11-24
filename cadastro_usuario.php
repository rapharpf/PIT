<?php

    if(isset($_POST["btn_cadastrar_usuario"])) {
        
        include "teste.php";

        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/

        /*
        $input_cadastro_usuario = $_POST["input_cadastro_usuario"];
        $input_cadastro_senha = $_POST["input_cadastro_senha"];
        
        $conexao->query("INSERT INTO usuarios(user, passwd) 
        VALUES ('$input_cadastro_senha', '$input_cadastro_senha')");
        */

        $input_cadastro_usuario = $_POST["input_cadastro_usuario"];
        $input_cadastro_senha = $_POST["input_cadastro_senha"];


        $cadastrar = new Usuarios(0, "$input_cadastro_usuario", "$input_cadastro_senha", "...");
        $cadastrar->insert();


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
        <a href="meus_mercados.php">Meus Mercados</a>
        <a href="criar_lista.php">Criar Lista</a>
        <a href="#">Minhas Listas</a>
        <a href="#">Minhas Compras</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu empurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Cadastrar Usuário</h2>
        <br><hr><br>
        <form action="cadastro_usuario.php", method="POST">
            <label id="cadastro_usuario">Usuário:</label>
            <input type="text" id="input_cadastro_usuario" name="input_cadastro_usuario" placeholder="Nome de usuário"><br>
            <label id='cadastro_senha'>Senha:</label>
            <input type="password" id="input_cadastro_senha" name="input_cadastro_senha" placeholder="Digite uma senha"><br>
            <input type="submit" class="btn" id="btn_cadastrar_usuario" name="btn_cadastrar_usuario" value="Cadastrar">
        </form>
    </div>
        <script src="script.js"></script>
</body>
</html>