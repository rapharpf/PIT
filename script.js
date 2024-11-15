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
        console.log(index);
        console.log(form);
        form.submit();
    });
});