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
        
    if(isset($_POST["cadastro_nome_mercado"])) {

        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/

        $cadastro_nome_mercado = $_POST["cadastro_nome_mercado"];
        $endereco_mercado = $_POST["endereco_mercado"];

        $cadastrar_mercado = new Cadastro_mercados(0, "$cadastro_nome_mercado", "$endereco_mercado");
        $cadastrar_mercado->insert();

        header("location: .\..\View\cadastrar_mercado.php");
        
    }



?>