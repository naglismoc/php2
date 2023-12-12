<?php
print_r($_GET);
print_r($_POST);

if (count($_GET) >= 0) {
    $color = "green";
}
if (!empty($_POST)) {
    $color = "yellow";
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
    <form action="./uzd6.php" method="GET">
        <button type="submit" name="sub">submit GET</button>
    </form>
    <form action="./uzd6.php" method="POST">
        <button type="submit" name="sub">submit POST</button>
    </form>
</body>

</html>

<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skirtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->