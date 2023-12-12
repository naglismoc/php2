<?php
print_r($_GET);
print_r($_POST);

if (count($_GET) >= 0) {
    $color = "green";
}
if (!empty($_POST)) {
header("Location: ./uzd7.php");    
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
    <form action="./uzd7.php" method="GET">
        <button type="submit" name="sub">submit GET</button>
    </form>
    <form action="./uzd7.php" method="POST">
        <button type="submit" name="sub">submit POST</button>
    </form>
</body>

</html>

<!-- Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->