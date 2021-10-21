
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
echo "<h1><u>Vols compara aquests productes?</h1></u>";

foreach($_POST as $pro => $value) {

    if ($value!=0) {
        print "$pro : $value<br>";
    }
}
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
        if((document.getElementById("telefon").value.match(phoneno))
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
