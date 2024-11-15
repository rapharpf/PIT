<?php

    if(isset($_POST["submit"]) && (!empty($_POST['input_usuario_login'])) && (!empty($_POST['input_passwd_login']))) {
        print_r($_POST);
        
        include_once("config.php");
        
        print_r($_POST);

        $input_usuario_login = $_POST["input_usuario_login"];
        $input_passwd_login = $_POST["input_passwd_login"];

        print_r('<p> CONTROLE </p>');
        
        $sql = "SELECT * FROM usuarios WHERE user = '$input_usuario_login' and passwd = '$input_passwd_login'";

        $result = $conexao->query($sql);

        print_r('<pre>');
        var_dump($result);
        print_r('</pre>');

        if(mysqli_num_rows($result) > 0) {
            header("location: home.php");
            print_r('O usuário existe');
        } else {
            print_r('Não achado');
            header("Location: login.php");
        }
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
        <a href="cadastrar_mercado.php">Cadastrar Mercado</a>
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
        <h2>TESTE</h2>
        <br><hr><br>
        <div id="login_box">
            <form action="login.php", method="POST">
                <h2>Login</h2>
                <label>Login</label>
                <input type='text' name='input_usuario_login' id='input_usuario_login' value='' placeholder='Usuário'></input><br>
                <label>Senha</label>
                <input type='password' name='input_passwd_login' id='input_passwd_login' value='' placeholder='Senha'></input><br>
                <input type="submit" name="submit" value="Entrar"></input><br>
                <a href='#'>Esqueci minha senha</a><br>
                <a href='cadastro_usuario.php'>Criar conta</a>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>