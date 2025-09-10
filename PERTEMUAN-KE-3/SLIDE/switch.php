<?php

$warna = "red";
$betul = "green";
switch ($warna) {
    case "green":
        $warna = "hijau";
        switch ($betul) {
            case "merah";
                $betul = "warna merah adalah warna kesukaan saya";
                break;
        }
    case "blue":
        $warna = "biru";
        break;
    case "red":
        $warna = "merah";
        break;
    default:
        $warna = "";

}
echo $warna;
?>