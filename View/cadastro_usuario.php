<?php
    
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
        <a href="login.php">Login</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu empurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Cadastrar Usuário</h2>
        <br><hr><br>
        <div id="login_box">
            <form action=".\..\Control\cadastro_usuario_c.php", method="POST">
                <label id="cadastro_usuario">Usuário:</label><br>
                <input type="text" id="input_cadastro_usuario" name="input_cadastro_usuario" placeholder="Nome de usuário" required><br><br>
                <label id='cadastro_senha'>Senha:</label><br>
                <input type="password" id="input_cadastro_senha" name="input_cadastro_senha" placeholder="Digite a sua senha" required><br>
                <input type="submit" class="btn" id="btn_cadastrar_usuario" name="btn_cadastrar_usuario" value="Cadastrar">
            </form>
        </div>
    </div>
        <script src=".\..\Control\script.js"></script>
</body>
</html>