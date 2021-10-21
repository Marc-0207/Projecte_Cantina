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
        $menu_json = file_get_contents('menu.json');
        $decoded_json = json_decode($menu_json, true);
        foreach($decoded_json as $key => $value) {
            $pro = $decoded_json[$key]["producto"];
            $pre = $decoded_json[$key]["precio"];
            $id = $decoded_json[$key]["id"];
            echo "<div id='$id'>
                    <h2> $pro </h2> $pre <br>
                    <input type='button' value='+' class='afegir'>
                    <input type='text' id=i$id name =$pro value='0'> 
                    <input type='button' value='-' class='treure'>
                    </div>";
        }
        ?>
    
        <input type="submit" value="Comprar">


   <!-- Menu Tarda-->
    </form>

        <form method="POST" action="Validacio.php" id="tarda">

        <?php
        echo "tarda";
        $menu_json = file_get_contents('menu.json');
        $decoded_json = json_decode($menu_json, true);
        foreach($decoded_json as $key => $value) {
            $pro = $decoded_json[$key]["producto"];
            $pre = $decoded_json[$key]["precio"];
            $id = $decoded_json[$key]["id"];
            echo "<div id='$id'>
                    <h2> $pro </h2> $pre <br>
                    <input type='button' value='+' class='afegir'>
                    <input type='text' id=i$id name =$pro value='0'> 
                    <input type='button' value='-' class='treure'>
                    </div>";
        }
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
        }
        else if (e.target.classList.contains('treure')){
            treureProducte(e.target.parentNode.id);
        }
        function afegirProducte(idProducte){
            document.getElementById("i"+idProducte).value++;
        }
        function treureProducte(idProducte){
            if(document.getElementById("i"+idProducte).value>0){
                document.getElementById("i"+idProducte).value--;
            }}
    });

</script>



</body>
</html>
