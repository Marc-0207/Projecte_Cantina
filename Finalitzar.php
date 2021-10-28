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
<p>Aquesta es la pantalla de finalització</p>
<h1><u><br>Tiquet de compra</u></h1>
<?php
   

    $cookie_name="comprovant";
    $cookie_value="feta";
    //setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");

    session_start();
  
    echo "Nom: ". $_GET["nom"]. "<br>";
    echo "Correu: ". $_GET["correu"]. "<br>";
    echo "Telefon: ". $_GET["telefon"]. "<br>";
    echo $_SESSION["ticket"];

?>

<form action="./Finalitzar.php">
    <input type="submit" value="Acabar"/>
</form>
</body>
</html>