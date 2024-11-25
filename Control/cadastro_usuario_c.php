<?php

    if(isset($_POST["btn_cadastrar_usuario"])) {
        
        include ".\..\Model\\teste.php";


        $input_cadastro_usuario = $_POST["input_cadastro_usuario"];
        $input_cadastro_senha = $_POST["input_cadastro_senha"];


        $cadastrar = new Usuarios(0, "$input_cadastro_usuario", "$input_cadastro_senha", "...");
        $cadastrar->insert();

        header("location: .\..\View\cadastro_usuario.php");


    }
?>