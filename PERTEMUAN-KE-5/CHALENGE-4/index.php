<?php

$my_fruits = ["Apel", "Jeruk", "Pisang"];

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
        <?php  
        echo "<ul>";
        foreach($my_fruits as $fruit) {
        if (count($my_fruits) % 2 == 1) {
            echo "<li style = 'color:red';>$fruit</li>";
        } else {
            echo "<li>$fruit</li>";
        }

        }
        echo "</ul>";
        ?>
    </ul>
</body>
</html>