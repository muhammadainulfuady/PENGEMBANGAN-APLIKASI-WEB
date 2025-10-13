<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge Ke-1</title>
</head>

<body>
    <p>Challenge - 1</p>

    <?php

    function iteration($number, $increment)
    {
        $iter = $number;
        for ($i = 10; $i >= $number; $increment) {
            echo "Iteration number " . $i . "<br>";
        }
    }
    iteration(1, $increment --= 1);

        ?>

</body>

</html>