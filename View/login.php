<?php

    session_start();

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
        <a href="cadastro_usuario.php">Cadastre-se</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu empurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>TESTE</h2>
        <br><hr><br>
        <div id="login_box">
            <form id="form_login" action=".\..\Control\login_c.php", method="POST">
                <label>Login</label><br>
                <input type='text' name='input_usuario_login' id='input_usuario_login'  required value='' placeholder='Usuário'></input><br><br>
                <label>Senha</label><br>
                <input type='password' name='input_passwd_login' id='input_passwd_login' required value='' placeholder='Senha'></input><br>
                <input type="submit" name="submit" value="Entrar"></input><br>
                <a href='#'>Esqueci minha senha</a><br>
                <a href='cadastro_usuario.php'>Criar conta</a>
            </form>
        </div>
    </div>
    <script src=".\..\Control\script.js"></script>
</body>
</html>