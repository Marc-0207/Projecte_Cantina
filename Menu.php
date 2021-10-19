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
?>


<form action="./Validacio.php">    

<?php
 
$menu_json = file_get_contents('menu.json'); 
 
$decoded_json = json_decode($menu_json, true); 
 
foreach($decoded_json as $key => $value) {
    $pro = $decoded_json[$key]["producto"];
    $pre = $decoded_json[$key]["precio"];
    $id = $decoded_json[$key]["id"];

    echo "<ul>";
    echo "<li> $pro </li> <br> $pre <br><br><button>+</button></button><input type 'text' $id=$key value='0'> <button>+</button><br>";
    echo "</ul>";
}
?>
<?php
include 'footer.php';
?>
</body>
</html>


