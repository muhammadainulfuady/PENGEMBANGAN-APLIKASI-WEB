<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge Ke-2</title>
    <style> 
.color {
    color : green;
}

    </style>
</head>

<body>
    <?php
    $while_iterasi = 31;
    // $do_while_iterasi = 28;
    $number_rendah = 1;

    echo "<h1>While Iterasi</h1>";
    while ($while_iterasi >= $number_rendah) {
        if ($while_iterasi % 2 == 1) {
            echo "<p class='color'>Iteration number $while_iterasi</p>";
        } else {
            echo "<p>Iteration number $while_iterasi</p>";
        }
        $while_iterasi -= 3;
    }
    echo "<br>";

// angka terendah harus 1 menentukan,
// jumlah iterasi kalau angka yang muncul adalah ganjil selain warna hitam


    // echo "<h1>Do While Iterasi</h1>";
    // do {
    //     echo "<p>Iteration number $do_while_iterasi</p>";
    //     $do_while_iterasi -= 3;
    // }
    // while ($do_while_iterasi >= 1)
    ?>
</body>

</html>

<!-- 
