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
                    <h2> $pro </h2> $pre <br><br>
                    <input type='button' value='+' class='afegir'>
                    <input type='text' id=i$id value='0'> 
                    <input type='button' value='-' class='treure'>
                    
                    </div>";
        }
        ?>
    
        <input type="submit" value="Comprar">
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
                    <h2> $pro </h2> $pre <br><br>
                    <input type='button' value='+' class='afegir'>
                    <input type='text' id=i$id value='0'> 
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

       if (hora > 12){

           mati.style.display = "none";
       }
       else{

        tarda.style.display = "none";
        }
      
   
</script>



</body>
</html>
