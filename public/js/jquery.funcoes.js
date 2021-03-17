let tela = $(document).width();
console.log(tela);
let largura_tela; //variavel para add a largura da tela
let val_toggle; //variavel para saber o menu sidebar está aberto. 1 = aberto, 0 = fechado

if(tela < 600){
    largura_tela = 0;
    val_toggle = 0; //se a a largura da tela for menor que 600 pixels o menu é fechado
}else{
    largura_tela = '250px';
    val_toggle = 1; //se a a largura da tela for maior que 600 pixels o menu é aberto
}

function openNav() {
    if(val_toggle == 0){
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = largura_tela;
        document.getElementById("openbtn").style.marginLeft = "250px";
        val_toggle = 1;
    }else{
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.getElementById("openbtn").style.marginLeft = "0";
        val_toggle = 0;
    }
    
    
}

