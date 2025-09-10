<?php

$data = [12, 32, 43, 54, 65, 764, 5];
$iterasi = 1;
$temp = [];
for ($index = 0; $index < count($data); $index++) {
    echo "Index ke-" . $iterasi++ . " => " . ($data[$index] . "<br>");
    if ($data[$index] % 2 == 0) {
        array_push($temp, $data[$index]);
    }
}
for ($index = 0; $index < count($temp); $index++) {
    echo $temp[$index] . "<br>";
}

?>