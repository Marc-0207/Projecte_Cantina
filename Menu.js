const dia = new Date();
let hora = dia.getHours();

//console.log(hora);

let tarda=document.getElementById("tarda");
let mati=document.getElementById("mati");

let mati_o_tarda="";
if (hora <= 14){
    mati_o_tarda="tarda";
    mati.style.display = "none";
}
else {
    mati_o_tarda="mati";
    tarda.style.display = "none";
}


document.getElementById(mati_o_tarda).addEventListener('click', e => {

    if(e.target.classList.contains('afegir')){
        afegirProducte(e.target.parentNode.id);
        //console.log(e.target.parentNode.id);
    }
    else if (e.target.classList.contains('treure')){
        treureProducte(e.target.parentNode.id);
    }
    function afegirProducte(idProducte){

        document.getElementById((mati_o_tarda=="mati" ? "im_" : "it_") + idProducte).value++;
        actualitzarTicket(menuList);
    }

    function treureProducte(idParcial){

        let idProducto = (mati_o_tarda=="mati" ? "im_" : "it_") + idParcial;

        if(document.getElementById(idProducto).value>0){
            document.getElementById(idProducto).value--;
            actualitzarTicket(menuList);
        }
    }

});
function actualitzarTicket(datosMenu){

    console.log("ey");
    let ticket=document.getElementById("ticket");

    cantidades = document.getElementsByClassName("cantidades");
    let textTicket="";
    let Preu_total=0;
    for(let index = 0;index < cantidades.length;index++){
        if(index >= 0) {
            console.log("entro 1r if");
            if (cantidades[index].value != 0) {
                console.log("entro 2do if");
                textTicket += " Article: " + datosMenu[cantidades[index].parentNode.id].producto;
                textTicket += "<br>";
                textTicket += " Unitats: " + cantidades[index].value;
                textTicket += "<br>";
                textTicket += "   Preu unitari: " + datosMenu[cantidades[index].parentNode.id].precio + "€";
                textTicket += "<br>";
                textTicket += "   Preu total:   " + datosMenu[cantidades[index].parentNode.id].precio * cantidades[index].value + "€";
                Preu_total += datosMenu[cantidades[index].parentNode.id].precio * cantidades[index].value;
                textTicket += "<br><br>";
            }
        }
    }
    "<br><br>";
    textTicket+="<h2>   Preu total de todos los productos:   " +  Preu_total + "€</h2>";

    ticket.innerHTML = textTicket;
}
menuList = JSON.parse(document.getElementById("json").value);

/*    let str =JSON.stringify([]);
document.getElementById("json").value = str;*/