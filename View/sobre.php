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
        <h2>Sobre</h2>
        <br><hr><br><br><br>
        <h2>Sobre a plataforma MarketDB</h2>
        <div id="sobre_body">
            <p> Esta plataforma nasceu da grande volatilidade, que em tempos atuais estamos enfrentando nos preços dos produtos nos mercados. Com a intenção ajudar o consumidor a ter um registro
                organizado de suas compras, auxiliando tanto a lembrar todos os itens que deve comprar, através de sua lista, como também gerando automaticamente o valor total da compra, a cada item adicionado na sua lista.
                 Além de tudo, todas as listas ficarão salvas no nosso servidor, possibilitando que o usuário possa ter acesso a qualquer hora e de qualquer lugar, sem a necessidade de depender de aplicativos.
            </p>
            <p>    
                Foi percebido também, que mesmo com tantas informações e propagandas, é difícil conferir o valor de todos os produtos do mercado, para que possa ser feita uma comparação de qual mercado seria mais vantajoso
                de se fazer toda a sua compra por exemplo. Pensando nisso implementaremos futuramente, uma área de consulta de preços, onde retornaremos o valor mais recente do item buscado, nos diversos mercados cadastrados
                em nosso banco de dados. Possibilitando que o usuário faça uma pesquisa completa de preços sem precisar sair de casa, escolhendo assim o mercado onde suas compras sejam mais vantajosas.
            </p>
            
        </div>
    </div>
    <script src=".\..\Control\script.js"></script>
</body>
</html>