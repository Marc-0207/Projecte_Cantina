<?php
include 'header.php';
echo "<h1><u>Vols compara aquests productes?</h1></u>";

foreach($_POST as $pro => $value) {

    if ($value!=0) {
        print "$pro : $value";
        print "$pre";
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
                    <td><input type="text" name="telefon"></td>
                </tr>
                <tr>
                    <td><label>Correu electronic: </label></td>
                    <td><input type="text" name="correu"></td>
                </tr>
            </table>
        </div>

            <div id= "compra">
                <h1>Hola</h1>

                <br>
                <input type="submit" value="comprar"/>
            </div>
    </div>
    <input type="submit" value="Següent"/>
</form>

<div>
        <a href="./Menu.php"><button>Tornar</button></a>
</div>
<?php
include 'footer.php';
?>
