<?php
if(isset($_COOKIE["comprovant"])){
    header('Location: Error.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/footer_header.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <title>Document</title>

</head>
<body>
    <?php

    include 'header.php';
    ?>

    <!-- Menu Mati-->

<div id="total_menu">
    <form method="POST" action="Validacio.php" id="mati">
        <div class="orden">

        <?php
        $menu_json = file_get_contents('menuMati.json');
        $decoded_json = json_decode($menu_json, true);
        foreach($decoded_json as $key => $value) {
            $pro = $decoded_json[$key]["producto"];
            $pre = $decoded_json[$key]["precio"];
            $id = $decoded_json[$key]["id"];
            $img = $decoded_json[$key]["img"];
            echo "<div id='$id' class='imagenes'>
                        <img src='./img/$img' class='foto_menu'>
                        <h2> $pro </h2> $pre <br>
                        <input type='button' value='+' class='afegir'>
                        <input type='text' id=im_$id name =$id class='cantidades' value='0'> 
                        <input type='button' value='-' class='treure'>
                        </div>";
        }
        echo "<input id ='json_mati' name='menu' type='hidden' value='$menu_json'>";
        ?>


        <input type="submit" value="Comprar" class='comprar'>
        </div>
    </form>

    <!-- Menu Tarda-->



    <form method="POST" action="Validacio.php" id="tarda">
        <div class="orden">
        <?php
        $menu_json = file_get_contents('menuTarda.json');
        $decoded_json = json_decode($menu_json, true);
        foreach($decoded_json as $key => $value) {
            $pro = $decoded_json[$key]["producto"];
            $pre = $decoded_json[$key]["precio"];
            $id = $decoded_json[$key]["id"];
            $img = $decoded_json[$key]["img"];
            echo "<div id='$id' class='imagenes'>
                        <img src='./img/$img' class='foto_menu'>
                        <h2> $pro </h2> $pre <br>
                        <input type='button' value='+' class='afegir'>
                        <input type='text' id=it_$id name =$id class='cantidades' value='0'> 
                        <input type='button' value='-' class='treure'>
                        </div>";
        }
        echo "<input id ='json_tarda' type='hidden' name='menu' value='$menu_json'>";
        ?>


        <input id="c" type="hidden" value="1">
        <input type="submit" value="Comprar" class='comprar'>
        </div>
    </form>

    <script type="text/javascript" src="/js/Menu.js"></script>

    <div id="ticket">

    </div>

</div>

    <a href="./index.php"><button>Tornar</button></a>

    <?php
    include 'footer.php';
    ?>

</body>
</html>
