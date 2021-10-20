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
    <form method="GET" action="Validacio.php" class="mati" id="formulario">

        <?php
        $menu_json = file_get_contents('menu.json');
        $decoded_json = json_decode($menu_json, true);
        foreach($decoded_json as $key => $value) {
            $pro = $decoded_json[$key]["producto"];
            $pre = $decoded_json[$key]["precio"];
            $id = $decoded_json[$key]["id"];
            echo "<div id='$id'>
                    <h2> $pro </h2> $pre <br><br><input type='button' value='+' class='afegir'><input type='text' id=i$id value='0'> <input type='button' value='-' class='treure'>
                    
                    </div>";
        }
        ?>
        <input type="submit" value="Comprar">
    </form>

<script> 

        let gallery = document.getElementById('formulario');
        gallery.addEventListener('click', e => {

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


<?php
include 'footer.php';
?>
</body>
</html>
