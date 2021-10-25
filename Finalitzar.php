<?php
session_start();
include 'header.php';
?>
<p>Aquesta es la pantalla de finalització</p>
<h1><u><br>Tiquet de compra</u></h1>
<?php
echo "Nom: ". $_GET["nom"]. "<br>";
echo "Correu: ". $_GET["correu"]. "<br>";
echo "Telefon: ". $_GET["telefon"]. "<br>";

$cookie_name="comprovant";
$cookie_value="feta";
setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
?>

<form action="./Finalitzar.php">
    <input type="submit" value="Acabar"/>
</form>