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
    console.log(document.getElementById("cadastro_nome_mercado").value)
    console.log(document.getElementById("endereco_mercado").value)
    alert("Mercado cadastrado com sucesso!")
    //document.getElementById("cadastro_nome_mercado").value = ""
    //document.getElementById("endereco_mercado").value = ""
}


// Página meus mercados

//  Funçao para alterar o nome do mercado
let btn_edit_nome = document.querySelectorAll(".btn_edit_nome");
let lbl_nome_mercado = document.querySelectorAll(".lbl_nome_mercado");
let input_edit_nome = document.querySelectorAll(".input_edit_nome");

let mode_nome = false;
btn_edit_nome.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        if (mode_nome == false){
            lbl_nome_mercado[index].style.display = "none";
            input_edit_nome[index].style.display = "block";
            mode_nome = true;
            btn_edit_nome[index].innerHTML = "gravar"
            console.log(mode_nome);
        }else {
            lbl_nome_mercado[index].innerHTML = input_edit_nome[index].firstElementChild.value;
            lbl_nome_mercado[index].style.display = "block";
            input_edit_nome[index].style.display = "none";
            mode_nome = false;
            btn_edit_nome[index].innerHTML = "edit nome"
            console.log(mode_nome);
        }
        
    });
});




//  Funçao para alterar descrição do mercado
let btn_edit_desc = document.querySelectorAll(".btn_edit_desc");
let lbl_desc_mercado = document.querySelectorAll(".lbl_desc_mercado");
let input_edit_desc_mercado = document.querySelectorAll(".input_edit_desc_mercado");


let mode_desc = false;
btn_edit_desc.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        if (mode_desc == false){
            lbl_desc_mercado[index].style.display = "none";
            input_edit_desc_mercado[index].style.display = "block";
            mode_desc = true;
            btn_edit_desc[index].innerHTML = "gravar"
            console.log(mode_desc);
        }else {
            lbl_desc_mercado[index].innerHTML = input_edit_desc_mercado[index].firstElementChild.value;
            lbl_desc_mercado[index].style.display = "block";
            input_edit_desc_mercado[index].style.display = "none";
            mode_desc = false;
            btn_edit_desc[index].innerHTML = "edit desc"
            console.log(mode_desc);
        }
        
    });
});
