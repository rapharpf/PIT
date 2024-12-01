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
        <a href="cadastro_usuario.php">Cadastre-se</a>
        <a href="sobre_un.php">Sobre</a>
        <a href="contato_un.php">Contato</a>
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