<?php
    
    session_start();
    if((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true)){
        $logado = $_SESSION['login'];
        
    }else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        
        header('Location: login.php');
    }
    
    include ".\..\Model\\teste.php";

    if(isset($_POST["criar_lista"])) {
        //  Criar uma nova tabela de lista de itens e adiciona a lista na tabela lista de itens
        $input_nome_mercado =  $_POST["nome_mercado"];
        $input_nome_nova_lista = $_POST["nome_nova_lista"];
        $input_nome_lista = $_POST['nome_nova_lista'];

        $cadastrar_lista_compras = new Lista_compras(0, 0, "$input_nome_mercado", "$input_nome_nova_lista", 0);
        $cadastrar_lista_compras->insert();
        $create_lista_itens = new Itens_lista(0,0,0,0,"$input_nome_nova_lista");
        $create_lista_itens->create();

        $_SESSION['nome_lista'] = $input_nome_lista;

        header("Location: .\..\View\minha_lista.php");

    }

    if(isset($_POST["selecionar_lista"])) {
        //  Selecionar uma das listas itens
        $_SESSION['nome_lista'] = $_POST['nome_lista'];
        $input_nome_lista = $_POST['nome_lista'];

        header("Location: .\..\View\minha_lista.php");
    }

    if(isset($_POST["remover_lista"])) {
        //  Remover uma lista de itens da tabela lista de itens e remover a tabela da lista
        
        $input_nome_remove_lista = $_POST['nome_lista'];
        $remover_lista_compras = new Lista_compras(0,0,0,"$input_nome_remove_lista",0);
        $remover_lista_compras->remove();
        $remover_lista_itens = new Itens_lista(0,0,0,0, "$input_nome_remove_lista");
        $remover_lista_itens->drop();

        unset($_SESSION['nome_lista']);
        
        header("Location: .\..\View\minha_lista.php");
    }

    if(isset($_POST["adicionar_item"])) {
        //  Adicionar um item à lista de itens
        
        $input_item = $_POST['input_item'];
        $input_qnt = $_POST['input_qnt'];
        $input_valor = str_replace(",",".",$_POST['input_valor']);
        $input_nome_lista = $_POST['nome_lista'];


        $adicionar_item_lista = new Itens_lista(0, "$input_item", "$input_qnt", "$input_valor", "$input_nome_lista");
        $adicionar_item_lista->insert();

        header("Location: .\..\View\minha_lista.php");
    }

    if(isset($_POST["btn_edit_item"])) {
        //  Editar um item da lista de itens
        
        $input_id_item = $_POST['lbl_id'];
        $input_nome_item = $_POST['input_nome_item'];
        $input_qnt_item = $_POST['input_qnt_item'];
        $input_valor_item = str_replace(",",".", $_POST['input_valor_item']);
        $input_nome_lista = $_POST['item_nome_lista'];

        $adicionar_item_lista = new Itens_lista("$input_id_item", "$input_nome_item", "$input_qnt_item", "$input_valor_item", "$input_nome_lista");
        $adicionar_item_lista->update();

        header("Location: .\..\View\minha_lista.php");
    }


    if(isset($_POST["btn_del_item"])) {
        //  Remover um item da lista de itens
        
        $input_id_item = $_POST['lbl_id'];
        $input_nome_item = $_POST['input_nome_item'];
        $input_qnt_item = $_POST['input_qnt_item'];
        $input_valor_item = $_POST['input_valor_item'];
        $input_nome_lista = $_POST['item_nome_lista'];


        $adicionar_item_lista = new Itens_lista("$input_id_item", "$input_nome_item", "$input_qnt_item", "$input_valor_item", "$input_nome_lista");
        $adicionar_item_lista->remove();
        
        header("Location: .\..\View\minha_lista.php");
    }
?>