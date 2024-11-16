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
        <a href="criar_lista.php">Criar Lista</a>
        <a href="#">Minhas Listas</a>
        <a href="#">Minhas Compras</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu empurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Criar lista</h2>
        <br><hr><br>
        <div>
        <h3>Crie a sua lista</h3>
        
            <label for="">Selecione o mercado onde fará suas compras: </label>
            <?php
                    include "teste.php";
                    $teste = new Lista_compras();
                    $select_mercados = $teste->consulta_mercados();
                    $entradas_select = count($select_mercados);
                    $count = 0;
                    print_r("<select name='escolher_mercado' id=''>");
                    while($entradas_select > $count){
                        print_r("<option value='{$select_mercados[$count]}'>{$select_mercados[$count]}</option>");
                        ++$count;
                    }
                    print_r("</select>");
            ?>
            <br><br><br>
            <label for="">Nome da lista: </label><input type="text" name="nome_nova_lista" placeholder="Nome da lista">
            <br><br><br>
        </div>
    
    </div>   
    <script src="script.js"></script>
</body>
</html>
