<?php
include 'header.php';
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

<div class='final'>
        <h1>La teva comanda s'a fet correctament</h1>

</div>
<div id="acaba">
    <form action="./index.php">
        <input type="submit" value="Acabar"/>
    </form>
</div>


<?php
   

    $cookie_name="comprovant";
    $cookie_value="feta";
    setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");

    session_start();
  
    //echo "Nom: ". $_GET["nom"]. "<br>";
    //echo "Correu: ". $_GET["correu"]. "<br>";
    //echo "Telefon: ". $_GET["telefon"]. "<br>";
    //echo $_SESSION["ticket"];


    $hora = date("H");
    $min = date("i");

    if(($hora < 11) || ($hora == 11 && $min <= 30)) {
        $nomFitxer = date("m.d.y") . "_mati.txt";
    } else {
        $nomFitxer = date("m.d.y") . "_tarda.txt";
    }

    $fitxer = fopen("./admin/comandes/".$nomFitxer, "a+") or die("Se produjo un error al crear el archivo");

    $texto = <<<_END
        \n
        USUARI
        ----------------
        Nom : $_GET[nom]
        Telefon: $_GET[telefon]
        Correu: $_GET[correu]
    
        PEDIDO
        ----------------
    
        $_SESSION[ticket]
_END;

    fwrite($fitxer,$texto);
    fclose($fitxer);


    session_destroy();



?>



<?php
include 'footer.php';
?>
</body>
</html>