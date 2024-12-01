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
        <?php print_r("<h2>Bem Vindo(a) {$logado}!!!</h2>");?>
        <br><hr><br>
        <?php print_r("<h2>Olá {$logado}. Seja bem vindo(a) à plataforma MarketDB</h2>");?>
        <div id="home_body">
            <p> - No <b>menu lateral</b> você pode cadastrar os seus mercados favoritos, criar e gerenciar suas listas de compras, e incluir os itens nas suas listas.</p>
            <p> - No menu <b>Cadastar Mercado</b>, você pode cadastrar os seus mercados favoritos possibiltando futuramente a comparação dos preços com de outros mercados cadastrados. Você deve cadatrar ao menos um mercado
                para criar uma lista de compras.</p>
            <p> - No menu <b>Meus mercados</b> é possível deletar ou editar os mercados cadastrados.</p>
            <p> - No menu <b>Minhas Listas</b> você pode selecionar os mercados que você têm cadastrado e criar a sua lista de compras.</p>
            <p> - Ainda no menu <b>Minhas Listas</b>, você pode selecionar uma lista criada e adicionar os itens da usa compra, preenchendo
                os campos <b>item, quantidade e valor</b>.</p>
        </div>
    </div>
    <script src=".\..\Control\script.js"></script>
</body>
</html>