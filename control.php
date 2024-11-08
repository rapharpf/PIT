<?php

class Listar{
    public $id;
    public $nome_mkt;
    public $nome_edit;
    public $desc_mkt;

    function __construct($id, $nome_mkt, $desc_mkt){
        $this->id = $id;
        $this->nome_mkt = $nome_mkt;
        $this->desc_mkt = $desc_mkt;
    }

    function listar_print(){
        print_r("
            
            <form id=".$this->id." method='POST' action='meus_mercados.php'>
                <table class='tabela_meus_mercados'>
                    <tbody>
                        <tr>
                            <th class='th'>Nome:</th>
                            <td class='id_db'><input type='text' name='lbl_id' value=".$this->id."></input></td>
                            <td class='finput_edit_nome'><input class='input_edit_nome' type='text' name='input_edit_nome' placeholder=".$this->nome_mkt." value=".$this->nome_mkt."></input></td>
                            <td class='lbl_nome_mercado' name='lbl_nome_mercado'>".$this->nome_mkt."</td>
                            <td class='btn_edit_nome'>Editar</td>
                            <td class='fdel'><input class='s_del' type='text' name='s_del' value=".$this->id."></input></td>
                            <td class='btn_del_mercado'>delete</td>
                        </tr>
                        <tr>
                            <th>Endereço:</th>
                            <td class ='input_edit_desc_mercado'><input type='text' name='input_edit_desc_mercado' placeholder=".$this->desc_mkt." value=".$this->desc_mkt."></input></td>
                            <td class='lbl_desc_mercado'>".$this->desc_mkt."</td>
                            <td class='btn_edit_desc'>Editar</td>
                        </tr>
                    </tbody>   
                </table>    
            </form>
            
        ");
    
    }

}
?>
