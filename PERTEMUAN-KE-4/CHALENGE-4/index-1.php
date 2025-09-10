<?php

$daftar_buah = ["Apel", "Jeruk", "Pisang"]

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge-4</title>
</head>

<body>
    <h1>Daftar Buah :</h1>
    <ul>
        <?php foreach ($daftar_buah as $buah): ?>
            <li><?= $buah ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>