<?php
include '../header.php';
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
<p>Aquesta es la pantalla d'administracio</p>

<div>
    <a href="../index.php"><button>Tornar</button></a>
</div>
<?php
echo "<h2>Totes les comandes</h2>";

$dir = "../admin/comandes";
// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        echo "<ul>";
        while (($file = readdir($dh)) !== false) {

            if($file != "." && $file != "..") {
                echo "<li><h4>" . $file . "</h4></li>";
                $texto = file_get_contents("./comandes/".$file);
                $texto = nl2br($texto);
                echo $texto;
                echo "<br><br>";
            }
        }
        closedir($dh);
        echo "</ul>";
    }
}

?>


<?php
include '../footer.php';
?>
</body>
</html>
