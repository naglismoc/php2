<?php
$color = "#ff1234";
if(isset($_GET["color"])){
    $color = "#" . $_GET["color"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?=$color?>;">
    <a href="./uzd3.php">be be be</a>
    <a href="./uzd3.php?color=1">su</a>
    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">spalvoti</button>
    </form>
</body>
</html>

<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->