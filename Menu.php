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
echo "Aquest es el Menu";
?>
<form action="./Validacio.php">
    
    <input type="submit" value="Següent"/>
</form>
<div>
    <a href="./Pantalla_Principal.php"><button>Tornar</button></a>
</div>
<?php
 
$menu_json = file_get_contents('menu.json');
 
$decoded_json = json_decode($menu_json, true); 
 
foreach($decoded_json as $key => $value) {
    $pro = $decoded_json[$key]["producto"];
    $pre = $decoded_json[$key]["precio"];
     
    echo $pro.' is '.$pre.'.';

}
?>
    
</body>
</html>







