<?php
include 'header.php';
?>
<p>Aquesta es la pantalla de finalització</p>
<h1><u><br>Tiquet de compra</u></h1>
<?php
echo "Nom: ". $_GET["nom"]. "<br>";
echo "Correu: ". $_GET["correu"]. "<br>";
echo "Telefon: ". $_GET["telefon"]. "<br>";

foreach($_POST as $pro => $value) {

    if ($value!=0) {
        print "$pro : $value";
    }
}
?>

<form action="./Finalitzar.php">
    <input type="submit" value="Acabar"/>
</form>