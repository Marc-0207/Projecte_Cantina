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

        <form method="GET" action="./Finalitzar.php">
            <div id="contenidor_val">
                <div id="validacio">
                    <table>
                        <tr>
                            <td><label>Nom: &emsp;&emsp;&emsp;</label></td>
                            <td><input type="text" name="nom" id="nom" required style="margin-bottom: 5px" size="40"></td>
                        </tr>
                        <tr>
                            <td><label>Telefon: </label></td>
                            <td><input type="text" name="telefon" id="telefon" ></td>
                        </tr>
                        <tr>
                            <td><label>Correu electronic: </label></td>
                            <td><input type="text" name="correu" id="correu"></td>
                        </tr>
                    </table>

                    <input type="submit" id="seguent" value="Seguent"/>
                    <a href="./Menu.php"><button>Tornar</button></a>
                </div>

                <div id= "compra">
                    <div>


                        <?php


                            $Preu_total = 0;
                            
                            $menu_json = json_decode($_POST["menu"], true);

                            

                            foreach ($_POST as $id => $value) {
                                if (($value != 0) && ($id != "menu")) {
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
                            }
                            "<br><br>";
                            echo "Preu Total de los productos: " . $Preu_total . "€";


                            $comanda="";
                            $Preu_total = 0;
                            foreach ($_POST as $id => $value) {
                                if (($value != 0) && ($id != "menu")) {
                                    $comanda.="Nombre de producto: " . $menu_json[$id]["producto"] .
                                        "---" .
                                        "Unitats: " . $value .
                                        "----" .
                                        "Preu unitari: " . $menu_json[$id]["precio"] . "€" .
                                        "--" .
                                        "Preu total: " . $menu_json[$id]["precio"] * $value . "€" .
                                        "----";
                                        $Preu_total += $menu_json[$id]["precio"] * $value;
                                  
                                }
                            }

                            session_start();
                            $_SESSION["ticket"] = $comanda;

                        ?>

                    </div>
                </div>
            </div>
        </form>

            <script type="text/javascript" src="/js/Validacio.js"></script>

            <?php
            include 'footer.php';
            ?>
</body>
</html>