<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge Ke-2</title>
</head>

<body>
        <?php 
            function iterasi($number, $selisih) {
                $temp = 1;
                for ($i = $number; $i <= 10; $i++) {
                    echo "Iteration number " . $temp . "<br>";
                    $temp += $selisih;

                }
            }

            iterasi(1, 5);
        ?>


</body>

</html>