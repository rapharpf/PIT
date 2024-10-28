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