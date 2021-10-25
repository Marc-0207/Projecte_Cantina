<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'header.php';
?>

<!-- Menu Mati-->


<form method="POST" action="Validacio.php" id="mati">

    <?php
    echo "mati";
    $menu_json = file_get_contents('menuMati.json');
    $decoded_json = json_decode($menu_json, true);
    foreach($decoded_json as $key => $value) {
        $pro = $decoded_json[$key]["producto"];
        $pre = $decoded_json[$key]["precio"];
        $id = $decoded_json[$key]["id"];
        echo "<div id='$id'>
                    <h2> $pro </h2> $pre <br>
                    <input type='button' value='+' class='afegir'>
                    <input type='text' id=im_$id name =$id class='cantidades' value='0'> 
                    <input type='button' value='-' class='treure'>
                    </div>";
    }
    echo "<input id ='json' type='hidden' value='$menu_json'>";
    ?>

    <div id="ticket">

    </div>
    <input type="submit" value="Comprar">

</form>
<!-- Menu Tarda-->

<form method="POST" action="Validacio.php" id="tarda">

    <?php
    echo "tarda";
    $menu_json = file_get_contents('menuTarda.json');
    $decoded_json = json_decode($menu_json, true);
    foreach($decoded_json as $key => $value) {
        $pro = $decoded_json[$key]["producto"];
        $pre = $decoded_json[$key]["precio"];
        $id = $decoded_json[$key]["id"];

        echo "<div id='$id'>
                    <h2> $pro </h2> $pre <br>
                    <input type='button' value='+' class='afegir'>
                    <input type='text' id=it_$id name =$id class='cantidades' value='0'> 
                    <input type='button' value='-' class='treure'>
                    </div>";
    }
    echo "<input id ='json' type='hidden' value='$menu_json'>";
    ?>

    <div id="ticket">

    </div>
    <input type="submit" value="Comprar">
</form>
<script>

    const dia = new Date();
    let hora = dia.getHours();

    console.log(hora);

    let tarda=document.getElementById("tarda");
    let mati=document.getElementById("mati");

    let mati_o_tarda="";
    if (hora >= 14){
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

        let ticket=document.getElementById("ticket");

        cantidades = document.getElementsByClassName("cantidades");
        let textTicket="";
        let Preu_total=0;
        for(let index = 0;index < cantidades.length;index++){
            console.log(cantidades.length);
            if(cantidades[index].value != 1){
                textTicket += " Article: " + datosMenu[cantidades[index-1].parentNode.id].producto;
                textTicket += "<br>";
                textTicket += " Unitats: " + cantidades[index-1].value;
                textTicket += "<br>";
                textTicket +="   Preu unitari: " + datosMenu[cantidades[index-1].parentNode.id].precio +"€";
                textTicket += "<br>";
                textTicket +="   Preu total:   " + datosMenu[cantidades[index-1].parentNode.id].precio * cantidades[index-1].value +"€";
                Preu_total +=  datosMenu[cantidades[index].parentNode.id].precio * cantidades[index].value;
                textTicket += "<br><br>";
            }
        }
        "<br><br>";
        textTicket+="<h2>   Preu total de todos los productos:   " +  Preu_total + "€</h2>";

        ticket.innerHTML = textTicket;
    }
    menuList = JSON.parse(document.getElementById("json").value);

</script>



</body>
</html>
