<?php
session_start();
?>
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
$menu = file_get_contents('menuMati.json');

$menu_json = json_decode($menu,true);

$Preu_total = 0;
foreach ($_POST as $id => $value) {
    if ($value != 0) {
        echo "Nombre de producto: " . $menu_json[$id]["producto"] .
            "<br>" .
            "Unitats: " . $value .
            "<br>" .
            "Preu unitari: " . $menu_json[$id]["precio"] . "€" .
            "<br>" .
            "Preu total: " . $menu_json[$id]["precio"] * $value . "€" .
            "<br><br>";
        $Preu_total += $menu_json[$id]["precio"] * $value;
    }
    $_SESSION["Nombre_pro"]=$menu_json[$id]["producto"];
}
"<br><br>";
echo "Preu Total de los productos: ".$Preu_total."€";
?>

<form method="GET" action="Finalitzar.php">
    <div id="contenidor_val">
        <div id="validacio">
            <table>
                <tr>
                    <td><label>Nom: &emsp;&emsp;&emsp;</label></td>
                    <td><input type="text" name="nom" required style="margin-bottom: 5px" size="40"></td>
                </tr>
                <tr>
                    <td><label>Telefon: </label></td>
                    <td><input type="text" name="telefon" id="telefon" ></td>
                </tr>
                <tr>
                    <td><label>Correu electronic: </label></td>
                    <td><input type="text" name="correu"></td>
                </tr>
            </table>
        </div>

        <div id= "compra">
            <h1>Hola</h1>
            <div>
                <form action="./Finalitzar.php">
                    <input type="submit" value="Següent"/>
                </form>
                <div>
                    <a href="./Menu.php"><button>Tornar</button></a>
                </div>
            </div>


            <script>

                document.getElementById("telefon"){
                    phonenumber();
                }
                function phonenumber()
                {
                    let phoneno = "/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im";
                    if((document.getElementById("telefon").value.match(phoneno)))
                    {
                        alert("Es correcte");
                        return true;
                    }
                    else
                    {
                        alert("No es correcte");
                        console.log("a");
                        return false;
                    }
                }
            </script>
            <?php
            include 'footer.php';
            ?>
</body>
</html>