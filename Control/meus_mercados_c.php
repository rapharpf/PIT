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


    if(isset($_POST["input_edit_nome"])) {
        $input_edit_nome = $_POST["input_edit_nome"];
        $id = $_POST["lbl_id"];
        $cadastro_mercados = new Cadastro_mercados("$id", "$input_edit_nome");
        $cadastro_mercados->update_nome();
        header("Location: .\..\View\meus_mercados.php");
        
    }

    if(isset($_POST["input_edit_desc_mercado"])) {

        $input_edit_desc_mercado = $_POST["input_edit_desc_mercado"];
        $id = $_POST["lbl_id"];
        $cadastro_mercados = new Cadastro_mercados("$id", '', "$input_edit_desc_mercado");
        $cadastro_mercados->update_desc();
        header("Location: .\..\View\meus_mercados.php");

    }

    if(isset($_POST["s_del"])) {
        
        $s_del = $_POST["s_del"];
        $id = $_POST["lbl_id"];
        $cadastro_mercados = new Cadastro_mercados("$id");
        $cadastro_mercados->remove();
        header("Location: .\..\View\meus_mercados.php");
        
    }
?>
