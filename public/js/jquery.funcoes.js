let tela = $(document).width();
console.log(tela);
let largura_tela;
let val_toggle;

if(tela < 600){
    largura_tela = 0;
    val_toggle = 0;
}else{
    largura_tela = '250px';
    val_toggle = 1;
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

