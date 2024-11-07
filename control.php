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
            
            <form method='POST' action='meus_mercados.php'>
                <table class='tabela_meus_mercados'>
                    <tbody>
                        <tr>
                            <th style='padding-top:20px'>Nome:</th>
                            <td class='id_db'><input type='text' name='lbl_id' value=".$this->id."></input></td>
                            <td class='finput_edit_nome'><input class='input_edit_nome' type='text' name='input_edit_nome' placeholder=".$this->nome_mkt." value=".$this->nome_mkt."></input></td>
                            <td class='lbl_nome_mercado' name='lbl_nome_mercado'>".$this->nome_mkt."</td>
                            <td class='fbtn_edit_nome'><input class='btn_edit_nome' type='button' name='btn_edit_nome' value='Editar'></input></input><input class='btn_submit_nome' type='submit' name='btn_submit_nome' value='Gravar'></td>
                            <td class='btn_del_mercado' style='padding:20px 0 0 0px'>delete</td>
                        </tr>
                        <tr>
                            <th>Endereço:</th>
                            <td class ='input_edit_desc_mercado'><input type='text' name='input_edit_desc_mercado' placeholder=".$this->desc_mkt." value=".$this->desc_mkt."></input></td>
                            <td class='lbl_desc_mercado'>".$this->desc_mkt."</td>
                            <td class='btn_edit_desc'>edit desc</td>
                        </tr>
                    </tbody>   
                </table>    
            </form>
            
        ");
    
    }

}
?>
