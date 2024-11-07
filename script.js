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
    //document.getElementById("cadastro_nome_mercado").value = ""
    //document.getElementById("endereco_mercado").value = ""
}


// Página meus mercados

//  Funçao para alterar o nome do mercado

let btn_edit_nome = document.querySelectorAll('.btn_edit_nome');
let lbl_nome_mercado = document.querySelectorAll(".lbl_nome_mercado");
let finput_edit_nome = document.querySelectorAll(".finput_edit_nome");
let input_edit_nome = document.querySelectorAll(".input_edit_nome");
let btn_submit_nome = document.querySelectorAll(".btn_submit_nome");



let mode_nome = false;
btn_edit_nome.forEach((item, index)=>{
    item.addEventListener("click",(t)=>{
        //t.preventDefault();
        if (mode_nome == false){
            lbl_nome_mercado[index].style.display = "none";
            finput_edit_nome[index].style.display = "block";
            //mode_nome = true;
            btn_edit_nome[index].style.display = "none";
            btn_submit_nome[index].style.display = "block";
            //console.log(mode_nome);
        }else {
            //lbl_nome_mercado[index].innerHTML = input_edit_nome[index].firstElementChild.value;
            //lbl_nome_mercado[index].style.display = "block";
            //input_edit_nome[index].style.display = "none";
            //mode_nome = false;
            //console.log(mode_nome);
            console.log("Não funcionou");
        }
        
    });
});

/*function submit(item, index){
    item.addEventListener("click",(t)=>{
        console.log("submit mode");
        console.log(input_edit_nome[index].value)
        lbl_nome_mercado[index].innerHTML = input_edit_nome[index].value;
        lbl_nome_mercado[index].style.display = "block";
        finput_edit_nome[index].style.display = "none";
        btn_edit_nome[index].style.display = "block";
        btn_submit_nome[index].style.display = "none";
        console.log("fim");
    })
}

*/


btn_submit_nome.forEach((item, index)=>{
    item.addEventListener("click",(t)=>{
        //t.preventDefault();
        console.log("modo submit");
        console.log(input_edit_nome[index].value);
        lbl_nome_mercado[index].innerHTML = input_edit_nome[index].value;
        lbl_nome_mercado[index].style.display = "block";
        finput_edit_nome[index].style.display = "none";
        btn_edit_nome[index].style.display = "block";
        btn_submit_nome[index].style.display = "none";
        }
    )
});





//  Funçao para alterar descrição do mercado
let btn_edit_desc = document.querySelectorAll(".btn_edit_desc");
let lbl_desc_mercado = document.querySelectorAll(".lbl_desc_mercado");
let input_edit_desc_mercado = document.querySelectorAll(".input_edit_desc_mercado");


let mode_desc = false;
btn_edit_desc.forEach((item,index)=>{
    item.addEventListener("click",(t)=>{
        //t.preventDefault();
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
