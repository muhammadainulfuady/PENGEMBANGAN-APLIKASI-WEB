<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chalenge Ke-4</title>
    <style>
        .kuning {
            background-color: yellow;
        }

        .biru {
            background-color: blue;
        }

        .coklat {
            background-color: brow;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= 10; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<td></td>";
                } elseif ($j == 0) {
                    echo "<td  class='kuning'>" . $i . "</td>";
                } elseif ($i == 0) {
                    echo "<td class='kuning'>" . $j . "</td>";
                } else {
                    $coba = $i < $j;
                    echo $coba;
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>