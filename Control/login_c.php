<?php

    session_start();



    if(isset($_POST["submit"]) && (!empty($_POST['input_usuario_login'])) && (!empty($_POST['input_passwd_login']))) {
        
        include ".\..\Model\config.php";

        $input_usuario_login = $_POST["input_usuario_login"];
        $input_passwd_login = $_POST["input_passwd_login"];

        
        $sql = "SELECT * FROM usuarios WHERE user = '$input_usuario_login' and passwd = '$input_passwd_login'";

        $result = $conexao->query($sql);


        if(mysqli_num_rows($result) > 0) {
            $_SESSION['login'] = $input_usuario_login;
            $_SESSION['senha'] = $input_passwd_login;
            header("location: .\..\View\home.php");
        } else {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header("Location: .\..\View\login.php");
        }
    }
?>