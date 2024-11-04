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
        <a href="#">Criar Lista</a>
        <a href="#">Minhas Listas</a>
        <a href="#">Minhas Compras</a>
    </div>

    <!--Elemento para abrir a barra lateral-->
    <!--<span id="openBtn" onclick="openNav()">=</span>-->

    <!--Para que o menu impurre a página para o lado, o seu conteúdo
    deve ficar dentro da div "main"-->
    <div id="main">
        <h2>Meus Mercados</h2>
        <br><hr></br>
        <div id="meus_mercados_bg">
            <table id="tabela_meus_mercados">
                <tbody>
                    <?php
                        include_once "config.php";
                        $resultado = $conexao->query("SELECT * FROM cadastro_mercados");
                        if ($resultado->num_rows > 0) {
                            // output data of each row
                            while($row = $resultado->fetch_assoc()) {          
                                print_r("    <tr>
                                                        <th style='padding-top:20px'>Nome:</th>
                                                        <td class ='input_edit_nome'><input type='text' name='input_edit_nome' placeholder='teste' value=".$row['nome_mercado']."></input></td>
                                                        <td class='lbl_nome_mercado' style='padding:20px 0 0 0px'>".$row['nome_mercado']."</td>
                                                        <td class='btn_edit_nome' style='padding:20px 0 0 0px'>edit nome</td>
                                                        <td class='btn_del_mercado' style='padding:20px 0 0 0px'>delete</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Endereço:</th>
                                                        <td class ='input_edit_desc_mercado'><input type='text' name='input_edit_desc_mercado' placeholder=".$row["desc_mercado"]." value=".$row["desc_mercado"]."></input></td>
                                                        <td class='lbl_desc_mercado' style='padding-left:0px'>".$row["desc_mercado"]."</td>
                                                        <td class='btn_edit_desc' style='padding-left:0px'>edit desc</td>
                                                    </tr>");
                            }
                        } else {
                            echo "Nada";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>   
    <script src="script.js"></script>
</body>
</html>
