<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge Ke-2</title>
</head>

<body>
    <?php
    $while_iterasi = 1;
    // $do_while_iterasi = 1;
    $batas = 37;


    echo "<h1>While Iterasi</h1>";
    while ($while_iterasi <= $batas) {
        if ($while_iterasi % 2 == 0) {
            echo "<p style='color: red;'>Iteration number $while_iterasi</p>";
        } else {
            echo "<p>Iteration number $while_iterasi</p>";
        }
        $while_iterasi += 3;
    }
    echo "<br>";

    // echo "<h1>Do While Iterasi</h1>";
    // do {
    //     echo "<p>Iteration number $do_while_iterasi</p>";
    //     $do_while_iterasi += 3;
    // }
    // while ($do_while_iterasi <= 28)
    ?>
</body>

</html>