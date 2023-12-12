<?php
$color = "black";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $color = "white";
}
$letters = ['A','B','C','D','E','F','G','H','I','J'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        color: red;
    }
</style>

<body style="background-color: <?= $color ?>;">
    <?php if ($_SERVER['REQUEST_METHOD'] == "GET") { ?>
        <form action="" method="post">
            <?php for ($i = 0; $i < rand(3, 10); $i++) { ?>
                <label for="cb<?=$i?>"> <?=$letters[$i]?> </label>
                <input type="checkbox" name="cb[]" id="cb<?=$i?>">
            <?php } ?>
            <button type="submit">submit</button>
        </form>

    <?php }else { ?>
        <h1><?=count($_POST['cb'])?></h1>
        <a href="">reset</a>
        <?php } ?>
</body>

</html>

<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->