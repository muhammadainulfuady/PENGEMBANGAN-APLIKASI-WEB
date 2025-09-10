<?php

$konversiNilai = [
    'A' => "(80 <= Nilai <= 100)",
    'B+' => "(75 <= Nilai < 80)",
    'B' => "(70 <= Nilai < 75)",
    'C+' => "(60 <= Nilai < 70)",
    'C' => "(55 <= Nilai < 60)",
    'D+' => "(50 <= Nilai < 55)",
    'D' => "(45 <= Nilai < 50)",
    'E' => "(0 <= Nilai < 45)",
];
if (isset($_GET['submit'])) {
    $nilai = htmlspecialchars($_GET['nilai']);
} else {
    $_GET['nilai'] = 75;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge-1</title>
    <style>
        .yellow {
            background-color: yellow;
        }

        .green {
            background-color: lightgreen;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php $iterasi = 1 ?>
        <?php foreach ($konversiNilai as $nilai => $value): ?>
            <tr>
                <td class="yellow">
                    <?= $iterasi++ . "." ?>
                </td>
                <td class="green">
                    <?= $nilai ?>
                </td>
                <td class="green">
                    <?= $value ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <form action="" method="get">
        <label for="angka">Nilai angka :</label>
        <input type="text" name="nilai">
        <button type="submit" name="submit">Kirim</button>
    </form>
    <?php if ($_GET['nilai'] >= 80 && $_GET['nilai'] <= 100): ?>
        <p>Nilai huruf : <b>A</b></p>
    <?php elseif ($_GET['nilai'] >= 75 && $_GET['nilai'] < 80): ?>
        <p>Nilai huruf : <b>B+</b></p>
    <?php elseif ($_GET['nilai'] >= 70 && $_GET['nilai'] < 75): ?>
        <p>Nilai huruf : <b>B</b></p>
    <?php elseif ($_GET['nilai'] >= 60 && $_GET['nilai'] < 70): ?>
        <p>Nilai huruf : <b>C+</b></p>
    <?php elseif ($_GET['nilai'] >= 55 && $_GET['nilai'] < 60): ?>
        <p>Nilai huruf : <b>C</b></p>
    <?php elseif ($_GET['nilai'] >= 50 && $_GET['nilai'] < 55): ?>
        <p>Nilai huruf : <b>D+</b></p>
    <?php elseif ($_GET['nilai'] >= 45 && $_GET['nilai'] < 50): ?>
        <p>Nilai huruf : <b>D</b></p>
    <?php elseif ($_GET['nilai'] >= 0 && $_GET['nilai'] < 45): ?>
        <p>Nilai huruf : <b>E</b></p>
    <?php else: ?>
        <p>
            <b>Input tidak valid! Pastikan angka anda adalah :
                <br>
                <i>0 - 100</i>
            </b>
        </p>
    <?php endif ?>
</body>

</html>