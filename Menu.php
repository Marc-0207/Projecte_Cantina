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
                    <input type='text' id=im_$id name =$id value='0'> 
                    <input type='button' value='-' class='treure'>
                    </div>";
        }
        echo "<input id ='json' type='hidden' value='0'/>";
        echo "<input id ='json' type='hidden' value='$menu_json'/>";
        ?>
        <h2><u>Total productes</u></h2><br>
        <input type="submit" value="Comprar"/>

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
                    <input type='text' id=it_$id name =$pro value='0'> 
                    <input type='button' value='-' class='treure'>
                    </div>";
        }
        echo "<input name='ident' type='hidden' value='1'>";
        echo "<input id ='json' type='hidden' value='$menu_json'>";
        ?>
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
            console.log(e.target.parentNode.id);
            ticket(e.target.parentNode.id);
        }
        else if (e.target.classList.contains('treure')){            
            treureProducte(e.target.parentNode.id);
        }
        function afegirProducte(idProducte){

            document.getElementById((mati_o_tarda=="mati" ? "im_" : "it_") + idProducte).value++;

        }

        function treureProducte(idParcial){

            let idProducto = (mati_o_tarda=="mati" ? "im_" : "it_") + idParcial;

            if(document.getElementById(idProducto).value>0){
                document.getElementById(idProducto).value--;
            }
        }

    });
    function ticket(nomProducte, quantitat, idProducte){
        nomProducte = ((mati_o_tarda=="mati" ? "im_" : "it_") + idProducte).name
        quantitat = ((mati_o_tarda=="mati" ? "im_" : "it_") + idProducte).value
        console.log(nomProducte, quantitat);

    }

</script>



</body>
</html>
