<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kuning {
            background-color: yellow;
        }
        .biru {
            background-color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nomer1">Nomer1</label>
        <input type="text" name="nomer1" required> <br>
        <label for="nomer2">Nomer2</label>
        <input type="text" name="nomer2" required> <br>
        <button type="sumbit" name="submit">Submit</button>
        <table border="1" cellpadding="10" cellspacing="0">
        <?php
        if (isset($_POST['submit'])) {
            $baris = $_POST['nomer1'];
            $kolom = $_POST['nomer2'];
            for($i = 0; $i <= $baris; $i++) {
            echo "<tr>";
            for($j = 0; $j <= $kolom; $j++){
                if ($i == 0 && $j == 0) {
                    echo "<td></td>";
                } elseif ($j == 0) {
                    echo "<td class='kuning'>".$i."</td>";
                } elseif ($i == 0) {
                    echo "<td class='kuning'>".$j."</td>";
                } else {
                    if($i == $j) {
                        echo "<td class='kuning'>". $i * $j ."</td>";
                    } else {
                        echo "<td>". $i * $j ."</td>";
                    }
                }
            }
            echo "</tr>";
        }
    } else {
        echo "Isi duluan bang";
    }
?>
    </table>
</form>
</body>
</html>