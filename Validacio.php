<<<<<<< Updated upstream
<?php
include 'header.php';
echo "<h1><u>Vols compara aquests productes?</h1></u>";
foreach($_POST as $pro => $value) {

    if ($value!=0) {
        print "$pro : $value<br>";
    }
}
?>
<p>Aquesta es la validacio</p>



<div id="contenidor_val">
    <div id="validacio">
        <table>
            <tr>
                <td><label>Nom: </label></td>
                <td><input type="text" name="nom"></td>
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
            <input type="submit" value="compras"/>
        </div>
</div>


<div>
    <form action="./Finalitzar.php">
        <input type="submit" value="Següent"/>
    </form>
    <div>
        <a href="./Menu.php"><button>Tornar</button></a>
    </div>
</div>
<?php
include 'footer.php';
?>
=======
<?php
include 'header.php';
echo "<h1><u>Vols compara aquests productes?</h1></u>";
//echo $_GET["prodcuto"];
?>
<p>Aquesta es la validacio</p>



<div id="contenidor_val">
    <div id="validacio">
        <table>
            <tr>
                <td><label>Nom: </label></td>
                <td><input type="text" name="nom"></td>
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
            <input type="submit" value="compras"/>
        </div>
</div>


<div>
    <form action="./Finalitzar.php">
        <input type="submit" value="Següent"/>
    </form>
    <div>
        <a href="./Menu.php"><button>Tornar</button></a>
    </div>
</div>
<?php
include 'footer.php';
?>
>>>>>>> Stashed changes
