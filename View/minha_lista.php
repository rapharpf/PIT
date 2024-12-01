<?php

    session_start();

    $input_nome_lista = "__sem_lista__";

    include ".\..\Model\\teste.php";

    if((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true)){
        $logado = $_SESSION['login'];

    }else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    if(isset($_SESSION['nome_lista']) and ($_SESSION['nome_lista'] != "")){
        $input_nome_lista = $_SESSION['nome_lista'];
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
        <h2>Minhas listas</h2>
        <br><hr><br>
        <div>
            <h3>Crie a sua lista</h3>
            
            <div id="form_criar_lista">
                <form action=".\..\Control\minha_lista_c.php" method="POST">
                <label for="">Selecione o mercado onde fará suas compras: </label><br>
                    <?php
                            //include_once "teste.php";
                            $minha_lista_mercados = new Lista_compras();
                            $select_mercados = $minha_lista_mercados->consulta_mercados();
                            $entradas_select = count($select_mercados);
                            $count = 0;
                            print_r("<select name='nome_mercado' id=''>");
                            while($entradas_select > $count){
                                print_r("<option value='{$select_mercados[$count]}'>{$select_mercados[$count]}</option>");
                                ++$count;
                            }
                            print_r("</select>");
                    ?><br>
                    <label for="nome_nova_lista">Nome da lista: </label><br><input type="text" name="nome_nova_lista" required placeholder="Nome da lista">
                    <br>
                    <button type="submit" name="criar_lista" value="cadastrar">Cadastrar</button>
                </form>
            </div>
        </div>
        <br><hr><br>
        <div>
            <h3>Minhas listas</h3>
            <br>
            <form action=".\..\Control\minha_lista_c.php" method="POST">
                <label for="">Selecione sua lista de compras: </label>
                    <?php
                            //include_once "teste.php";
                            $minha_lista_compras = new Lista_compras();
                            $select_minha_lista = $minha_lista_compras->consulta_lista_compras();
                            $entradas_lista = count($select_minha_lista);
                            $count = 0;
                            print_r("<select name='nome_lista' id=''>");
                            while($entradas_lista > $count){
                                print_r("<option value='{$select_minha_lista[$count]}'>{$select_minha_lista[$count]}</option>");
                                ++$count;
                            }
                            print_r("</select>");
                    ?>
                    <button type="submit" name="selecionar_lista" value="selecionar">Selecionar</button>
                    <button type="submit" name="remover_lista" value="remover">Remover</button>

            </form>
            <br><hr><br>
        </div>
        <div>
            <h3>Inserir item</h3>

            <form action=".\..\Control\minha_lista_c.php" method="POST">
                <label for="item">Item: </label><input type="text" name="input_item" placeholder="Nome do item"></input>
                <label for="qnt">Quantidade: </label><input type="text" name="input_qnt" placeholder="quantidade"></input>
                <label for="valor">Valor R$: </label><input type="text" name="input_valor" placeholder="10,00"></input>
                <input type="text" name="nome_lista" readonly hidden="true" value="<?php echo"$input_nome_lista"?>"></input>
                <button type="submit" name="adicionar_item" value="adicionar">Adicionar</button>
                
        
            </form>
            <br><hr><br>
        </div>
        <div id="itens_lista_bg">
            <?php // Exibindo os itens da lista de itens
                if($input_nome_lista != '__sem_lista__'){
                    $listar_itens_lista = new Itens_lista(0,0,0,0, "$input_nome_lista");
                    print_r("<label><h2 style='background-color:rgb(30, 30, 30, 0.6);'>{$input_nome_lista}</h2></label>");
                    $listar_itens_lista->consulta_itens_lista();
                }else{ 
                    print_r("Selecione a sua lista.");
                }
    
            ?>
        </div>
    
    </div>   
    <script src=".\..\Control\script.js"></script>
</body>
</html>
