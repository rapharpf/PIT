<?php

class Usuarios{
//  Página cadastro_usuario / login
    public $id;
    public $user;
    public $passwd;
    public $email;

    function __construct($id = 0, $user = "", $passwd = "", $email = ""){

        include "config.php";
        $this->id = $id;
        $this->user = $user;
        $this->passwd = $passwd;
        $this->email = $email;
    }

    // Criar um registro na tabela (novo usuário)
    function insert(){
        include "config.php";
        $sql = "INSERT INTO usuarios(user, passwd) VALUES ('{$this->user}', '{$this->passwd}');";
        $conexao->query($sql);
        $conexao->close();
    }

    //  Alterar registro na tabela
    function update(){
        include "config.php";
        $sql = "UPDATE `marketdb`.`usuarios` SET `desc_mercado` = '$var' WHERE (`id` = '$id')";
        $conexao->query($sql);
        $conexao->close();
    }

    //  Remover um registro da tabela
    function remove(){
        include "config.php";
        $sql = "DELETE FROM `marketdb`.`cadastro_mercados` WHERE (`id` = '$id');";
        $conexao->query($sql);
        $conexao->close();
    }

    

}

#####################################################################################################################################################################################
#####################################################################################################################################################################################


class Cadastro_mercados{
//  cadastrar_mercados / meus mercados
    public $id;
    public $nome_mkt;
    public $nome_edit;
    public $desc_mkt;

    function __construct($id = 0, $nome_mkt = '', $desc_mkt = ''){
        $this->id = $id;
        $this->nome_mkt = $nome_mkt;
        $this->desc_mkt = $desc_mkt;
    }

    //  Lista os mercados cadastrados na pag meus_mercados
    function cadastro_mercado_print(){
        print_r("
            
            <form id='{$this->id}' method='POST' action='meus_mercados.php'>
                <table class='tabela_meus_mercados'>
                    <tbody>
                        <tr>
                            <th class='th'>Nome:</th>
                            <td class='id_db'><input type='text' name='lbl_id' value='{$this->id}'></input></td>
                            <td class='finput_edit_nome'><input class='input_edit_nome' type='text' name='input_edit_nome' placeholder='{$this->nome_mkt}' value='{$this->nome_mkt}'></input></td>
                            <td class='lbl_nome_mercado' name='lbl_nome_mercado'>{$this->nome_mkt}</td>
                            <td class='btn_edit_nome'>Editar</td>
                            <td class='fdel'><input class='s_del' type='text' name='s_del' value='{$this->id}'></input></td>
                            <td class='btn_del_mercado'>delete</td>
                        </tr>
                        <tr>
                            <th>Endereço:</th>
                            <td class ='input_edit_desc_mercado'><input type='text' name='input_edit_desc_mercado' placeholder='{$this->desc_mkt}' value='{$this->desc_mkt}'></input></td>
                            <td class='lbl_desc_mercado'>{$this->desc_mkt}</td>
                            <td class='btn_edit_desc'>Editar</td>
                        </tr>
                    </tbody>
                </table>
            </form>
            
        ");
    
    }

    //  Lista os mercados cadastrados na pag meus_mercados
    function listar(){
        include "config.php";
        $resultado = $conexao->query("SELECT * FROM cadastro_mercados");
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {          
                $Listar = new Cadastro_mercados($row['id_mercado'], $row['nome_mercado'], $row['desc_mercado']);
                $Listar->cadastro_mercado_print();
            }
        } else {
                echo "Sem registros";
        }
        $conexao->close();
    }

    /*
    function create(){
            
        include ("config.php");

        $sql = "CREATE TABLE `marketdb`.`{$this->nome_lista}` (
                `id_lista` INT NOT NULL AUTO_INCREMENT,
                `id_mercado` VARCHAR(45) NULL,
                `nome_lista` VARCHAR(45) NULL,
                `data_criacao` VARCHAR(45) NULL,
                PRIMARY KEY (`id_lista`));";

        $conexao->query($sql);
    } */


    // Cadastra um mercado na tabela cadastro_mecados pag cadastrar_mercado
    function insert(){
        include ("config.php");
        $sql = "INSERT INTO cadastro_mercados(nome_mercado, desc_mercado) 
        VALUES ('{$this->nome_mkt}', '{$this->desc_mkt}')";
        $conexao->query($sql);
        $conexao->close();
    }
    
    // Modifica o cadastro de um mercado pag meus_mercados
    function update_nome(){
        include ("config.php");
        $sql = "UPDATE `marketdb`.`cadastro_mercados` SET `nome_mercado` = '{$this->nome_mkt}' WHERE (`id_mercado` = '{$this->id}')";
        $conexao->query($sql);
        $conexao->close();
    }

    function update_desc(){
        include ("config.php");
        $sql = "UPDATE `marketdb`.`cadastro_mercados` SET `desc_mercado` = '{$this->desc_mkt}' WHERE (`id_mercado` = '{$this->id}')";
        $conexao->query($sql);
        $conexao->close();
    }

    // Remove um mercado cadastrado pag meus_mercados
    function remove(){
        include ("config.php");
        $sql = "DELETE FROM `marketdb`.`cadastro_mercados` WHERE (`id_mercado` = '{$this->id}');";
        $conexao->query($sql);
        $conexao->close();
    }

    

}

#####################################################################################################################################################################################
#####################################################################################################################################################################################

class Lista_compras{

    public $id_lista;
    public $id_mercado;
    public $nome_mercado;
    public $nome_lista;
    public $data_criacao;

    function __construct($id_lista = 0, $id_mercado = "",$nome_mercado = "", $nome_lista = "", $data_criacao = ""){
        
        $this->id_lista = $id_lista;
        $this->id_mercado = $id_mercado;
        $this->nome_mercado = $nome_mercado;
        $this->nome_lista = $nome_lista;
        $this->data_criacao = $data_criacao;

    }

    function create(){
            
        include ("config.php");

        $sql = "CREATE TABLE `marketdb`.`{$this->nome_lista}` (
            `id_lista` INT NOT NULL AUTO_INCREMENT,
            `id_mercado` VARCHAR(45) NULL,
            `nome_lista` VARCHAR(45) NOT NULL,
            `data_criacao` VARCHAR(45) NULL,
            PRIMARY KEY (`id_lista`));";

            $conexao->query($sql);
            $conexao->close();
    }

    function insert(){
        include "config.php";
        $sql = "INSERT INTO `marketdb`.`listas_compras` (`nome_lista`, `nome_mercado`) VALUES ('{$this->nome_lista}', '{$this->nome_mercado}');";
        $conexao->query($sql);
        $conexao->close();
    }
    function update(){
        include "config.php";
        $sql = "UPDATE `marketdb`.`_________` SET `desc_mercado` = '$var' WHERE (`id` = '$id')";
        $conexao->query($sql);
        $conexao->close();
    }

    function remove(){
        include "config.php";
        $sql = "DELETE FROM `marketdb`.`listas_compras` WHERE (`nome_lista` = '{$this->nome_lista}');";
        $conexao->query($sql);
        $conexao->close();
    }

    function consulta_mercados(){
        include "config.php";
        $sql = "SELECT nome_mercado FROM `marketdb`.`cadastro_mercados`";
        $resultado = $conexao->query($sql);
        $select;
        $contdor_consulta_mercados = 0;
        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()) {
                $select[$contdor_consulta_mercados] = $row['nome_mercado'];
                ++$contdor_consulta_mercados;
            }
        }
        $conexao->close();
        return ($select);
        
    }

    function consulta_lista_compras(){
        include "config.php";
        $sql = "SELECT nome_lista FROM `marketdb`.`listas_compras`";
        $resultado = $conexao->query($sql);
        $select[0]="";
        $contador_consulta_listas = 0;
        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()) {
                $select[$contador_consulta_listas] = $row['nome_lista'];
                ++$contador_consulta_listas;
            }
        }
        $conexao->close();
        return ($select);
    }
}


#####################################################################################################################################################################################
#####################################################################################################################################################################################


class Itens_lista{

    public $id_item;
    public $item;
    public $qnt;
    public $valor;
    public $nome_lista;

    function __construct($id_item = 0, $item = 0, $qnt = 0, $valor = 0, $nome_lista = ""){
        
        $this->id_item = $id_item;
        $this->item = $item;
        $this->qnt = $qnt;
        $this->valor = $valor;
        $this->nome_lista = $nome_lista;

    }

    function create(){
            
        include "config.php";

        $sql = "CREATE TABLE `marketdb`.`{$this->nome_lista}` (
            `id_item` INT NOT NULL AUTO_INCREMENT,
            `item` VARCHAR(45) NULL,
            `qnt` INT NULL,
            `valor` DECIMAL(10,2) NULL,
            PRIMARY KEY (`id_item`),
            UNIQUE INDEX `id_item_UNIQUE` (`id_item` ASC) VISIBLE);";

            $conexao->query($sql);
            $conexao->close();
    }

    function insert(){
        include "config.php";
        $sql = "INSERT INTO `marketdb`.`{$this->nome_lista}` (`item`, `qnt`, `valor`) VALUES ('{$this->item}', '{$this->qnt}', '{$this->valor}');";
        $conexao->query($sql);
        $conexao->close();
    }
    function update(){
        include "config.php";
        $sql = "UPDATE `marketdb`.`{$this->nome_lista}` SET `item` = '{$this->item}', `qnt` = '{$this->qnt}', `valor` = '{$this->valor}' WHERE (`id_item` = '{$this->id_item}');";
        $conexao->query($sql);
        $conexao->close();
    }

    function remove(){
        include "config.php";
        $sql = "DELETE FROM `marketdb`.`{$this->nome_lista}` WHERE (`id_item` = '{$this->id_item}');";
        $conexao->query($sql);
        $conexao->close();
    }

    function drop(){
        include "config.php";
        $sql = "DROP TABLE `marketdb`.`{$this->nome_lista}`;";
        $conexao->query($sql);
        $conexao->close();

    }

    function consulta_mercados(){
        include "config.php";
        $sql = "SELECT nome_mercado FROM `marketdb`.`cadastro_mercados`";
        $resultado = $conexao->query($sql);
        $select;
        $contdor_consulta_mercados = 0;
        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()) {
                $select[$contdor_consulta_mercados] = $row['nome_mercado'];
                ++$contdor_consulta_mercados;
            }
        }
        $conexao->close();
        return ($select);
        
    }

    function consulta_itens_lista(){
        include "config.php";
        $sql = "SELECT * FROM `marketdb`.`{$this->nome_lista}`";
        if($this->nome_lista != ''){
            $resultado = $conexao->query($sql);
            if($resultado->num_rows > 0){
                $valor_total = 0;
                $preco_alterado;
                while($row = $resultado->fetch_assoc()) {
                    $valor_alterado = str_replace(".",",", $row['valor']);
                    $Listar = new Itens_lista($row['id_item'], $row['item'], $row['qnt'], "$valor_alterado", "$this->nome_lista");
                    $Listar->itens_lista_print();
                    $valor_total += ($row['valor'] * $row['qnt']);
                    $valor_total_alterado = str_replace(".",",", $valor_total);
                }
                print_r("<label><h3 style='background-color:rgb(30, 30, 30, 0.6);'>Valor total: R$ {$valor_total_alterado}</h3></label>");
            }else{
                    print_r("<label><h3 style='background-color:rgb(30, 30, 30, 0.6);'>Você ainda não adicionou nenhum item à esta lista.</h3></label>");
            }
        }
    }

    function itens_lista_print(){

        print_r("
            
            <form id='item_{$this->id_item}' method='POST' action='minha_lista.php'>
                <table class='tabela_itens'>
                    <tbody>
                        <tr>
                            <th class='lbl_item_nome'>Item: </th>
                            <td class='finput_id_item' hidden='true'><input type='text' readonly='true' name='lbl_id' value='{$this->id_item}'></input></td>
                            <td class='finput_nome_item'><input class='input_nome_item' type='text' name='input_nome_item' readonly='true' placeholder='{$this->item}' value='{$this->item}'></input></td>
                            <th class='lbl_unidade_item'>Unidades: </th>
                            <td class='finput_qnt'><input class='input_qnt_item' type='text' name='input_qnt_item' readonly='true' placeholder='{$this->qnt}' value='{$this->qnt}'></input></td>
                            <td class='' name='lbl_nome_item' hidden='true'>'{$this->item}'</td>
                            <th class='lbl_valor_item'>Valor R$ </th>
                            <td class='finput_valor_item'><input class='input_valor_item' type='text' name='input_valor_item' readonly='true' placeholder='{$this->valor}'value=".$this->valor."></input></td>
                            <td class='btn_edit_item'>Editar</td>
                            <td hidden><input class='btn_input_edit_item type='text' name='btn_edit_item' readonly value='Editar'</input></td>
                            <td class='btn_del_item'>Delete</td>
                            <td hidden><input class='btn_input_del_item' type='text' name='btn_del_item' readonly value='Delete'></input></td>
                            <td hidden><input class='item_nome_lista' type='text' name='item_nome_lista' readonly value='{$this->nome_lista}'></input></td>
                            <td><label class='abrir_dropdown'>+</label></td>
                        </tr>
                        <tr class='dropdown_{$this->id_item}' hidden>
                            <td>teste</td>
                        </tr>
                    </tbody>   
                </table>    
            </form>
            
        ");
    }
}
?>