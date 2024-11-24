/*Alterando a largura do menu lateral para 280px*/
function openNav() {
    document.getElementById("mySidenav").style.width = "280px";
    document.getElementById("main").style.marginLeft = "280px";
    document.getElementById("openBtn").style.display = "none";
    document.getElementById("closeBtn").style.display = "initial";
    document.body.style.backgroundColor = "rgba(32,32,32)";
}

/* Alterando a largura do menu lateral para 30px*/
function closeNav() {
    document.getElementById("mySidenav").style.width = "30px";
    document.getElementById("main").style.marginLeft = "30px";
    document.getElementById("openBtn").style.display = "initial";
    document.getElementById("closeBtn").style.display = "none";
    document.body.style.backgroundColor = "rgba(40,40,40)";
}


// Página de cadastro


function cadastrarMercado() {
    console.log(document.getElementById("cadastro_nome_mercado").value);
    console.log(document.getElementById("endereco_mercado").value);
    alert("Mercado cadastrado com sucesso!")
}


// Página meus mercados

//  Funçao para alterar o nome do mercado

let btn_edit_nome = document.querySelectorAll('.btn_edit_nome');
let lbl_nome_mercado = document.querySelectorAll(".lbl_nome_mercado");
let finput_edit_nome = document.querySelectorAll(".finput_edit_nome");
let input_edit_nome = document.querySelectorAll(".input_edit_nome");




btn_edit_nome.forEach((item, index)=>{
    item.addEventListener("click",(t)=>{
        let form_id = document.querySelectorAll('.id_db')[index].firstElementChild.value;
        let form = document.getElementById(form_id);
        if (btn_edit_nome[index].innerHTML == "Editar"){
            lbl_nome_mercado[index].style.display = "none";
            finput_edit_nome[index].style.display = "block";
            btn_edit_nome[index].innerHTML = "Salvar";
            s_del[index].setAttribute("disabled", "true");
            console.log(form);
        }else {
            console.log(input_edit_nome[index].value);
            lbl_nome_mercado[index].innerHTML = input_edit_nome[index].value;
            lbl_nome_mercado[index].style.display = "block";
            finput_edit_nome[index].style.display = "none";
            btn_edit_nome[index].innerHTML = "Editar";
            form.submit();
        }
        
    });
});



//  Funçao para alterar descrição do mercado
let btn_edit_desc = document.querySelectorAll(".btn_edit_desc");
let lbl_desc_mercado = document.querySelectorAll(".lbl_desc_mercado");
let input_edit_desc_mercado = document.querySelectorAll(".input_edit_desc_mercado");




btn_edit_desc.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        let form_id = document.querySelectorAll('.id_db')[index].firstElementChild.value;
        let form = document.getElementById(form_id);
        if (btn_edit_desc[index].innerHTML == "Editar"){
            lbl_desc_mercado[index].style.display = "none";
            input_edit_desc_mercado[index].style.display = "block";
            btn_edit_desc[index].innerHTML = "Salvar";
            s_del[index].setAttribute("disabled", "true");  // Não deixa apagar a entrada alterada quando da submit
            console.log(form);
        }else {
            lbl_desc_mercado[index].innerHTML = input_edit_desc_mercado[index].firstElementChild.value;
            lbl_desc_mercado[index].style.display = "block";
            input_edit_desc_mercado[index].style.display = "none";
            btn_edit_desc[index].innerHTML = "Editar";
            form.submit();
        }
        
    });
});


// Função para deletar entrada mercado

let s_del = document.getElementsByName("s_del");
let btn_del_mercado = document.querySelectorAll(".btn_del_mercado");

btn_del_mercado.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        let form_id = document.querySelectorAll('.id_db')[index].firstElementChild.value;
        let form = document.getElementById(form_id);
        form.submit();
    });
});



// Página criar_lista


// Exibir lista de itens
let lista_de_itens = document.querySelectorAll(".lista_de_itens");
let btn_selecionar_lista = document.getElementsByName("selecionar_lista");

btn_selecionar_lista.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        console.log(lista_de_itens);
        console.log(btn_selecionar_lista);
    });
});


// Página minha lista> lista de itens

let btn_edit_item = document.querySelectorAll(".btn_edit_item");
let btn_del_item = document.querySelectorAll(".btn_del_item");
let input_nome_item = document.querySelectorAll(".input_nome_item");
let input_qnt_item = document.querySelectorAll(".input_qnt_item");
let input_valor_item = document.querySelectorAll(".input_valor_item");
let input_edit_item = document.querySelectorAll(".btn_input_edit_item");
let input_del_item = document.querySelectorAll(".btn_input_del_item");
let item_nome_lista = document.querySelectorAll(".item_nome_lista");


//  Editar um item da lista de itens
btn_edit_item.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        let form_id = document.querySelectorAll(".finput_id_item")[index].firstElementChild.value;
        let form = document.getElementById("item_"+form_id);
        if(btn_edit_item[index].innerHTML == "Editar"){
            input_del_item[index].setAttribute("disabled", "true"); // Não apaga o item ao dar submit
            btn_edit_item[index].innerHTML = "Salvar";
            console.log(input_valor_item[index]);
            console.log(input_del_item[index]);
            input_nome_item[index].removeAttribute("readonly");
            input_qnt_item[index].removeAttribute("readonly");
            input_valor_item[index].removeAttribute("readonly");
        }else{
            form.submit();
        }
    });
});


btn_del_item.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        let form_id = document.querySelectorAll(".finput_id_item")[index].firstElementChild.value;
        let form = document.getElementById("item_"+form_id);
        form.submit();
    });
});
