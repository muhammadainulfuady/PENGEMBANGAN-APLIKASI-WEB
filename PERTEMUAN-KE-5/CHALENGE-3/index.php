<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge Ke-3</title>
</head>

<body>

    <?php

    function iteration($awal, $akhir, $color, $step )
    {
        for ($i = $awal; $i >= $akhir; $i -= $step) {
            if ($i % $step == 0) {
                echo "<p style='color: $color;'>Iteration number $i</p>"."<br>";
            } else {
                echo "<p>Iteration number $i</p>"."<br>";

            }
        }
    }
    iteration(28, 1, "green", 9);
        ?>

</body>

</html>