
<?php
    if(isset($_POST["input_edit_nome"])) {
        
        include_once "config.php";
        $input_edit_nome = $_POST["input_edit_nome"];
        $id = $_POST["lbl_id"];
        $sql = "UPDATE `marketdb`.`cadastro_mercados` SET `nome_mercado` = '$input_edit_nome' WHERE (`id` = '$id');";
        $conexao->query($sql);
    }

    if(isset($_POST["input_edit_desc_mercado"])) {
    
        include_once "config.php";
        $input_edit_desc_mercado = $_POST["input_edit_desc_mercado"];
        $id = $_POST["lbl_id"];
        $sql = "UPDATE `marketdb`.`cadastro_mercados` SET `desc_mercado` = '$input_edit_desc_mercado' WHERE (`id` = '$id');";
        $conexao->query($sql);
    }

    if(isset($_POST["s_del"])) {

        include_once "config.php";
        $s_del = $_POST["s_del"];
        $id = $_POST["lbl_id"];
        $sql = "DELETE FROM `marketdb`.`cadastro_mercados` WHERE (`id` = '$id');";
        $conexao->query($sql);
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
        <a href="criar_lista.php">Criar Lista</a>
        <a href="#">Minhas Listas</a>
        <a href="#">Minhas Compras</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu empurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Meus Mercados</h2>
        <br><hr></br>
        <div id="meus_mercados_bg">        
                        <?php
                            include_once "config.php";
                            include_once "control_teste.php";
                            $resultado = $conexao->query("SELECT * FROM cadastro_mercados");
                            if ($resultado->num_rows > 0) {
                                // output data of each row
                                while($row = $resultado->fetch_assoc()) {          
                                    $Listar = new Listar($row['id'], $row['nome_mercado'], $row['desc_mercado']);
                                    $Listar->listar_print();
                                }
                            } else {
                                echo "Sem registros";
                            }
                        ?>
        </div>
    </div>   
    <script src="script.js"></script>
</body>
</html>
