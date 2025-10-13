<?php
// checkdate() → cek valid atau tidak
var_dump(checkdate(2, 29, 2024)); // true (karena 2024 kabisat)
var_dump(checkdate(2, 29, 2023)); // false
echo "<br>";

// date_add() → tambah waktu
$date = date_create("2025-09-17");
date_add($date, date_interval_create_from_date_string("10 days"));
echo date_format($date, "Y-m-d") . "<br>"; // Output: 2025-09-27

// date_diff() → selisih waktu
$awal = date_create("2025-01-01");
$akhir = date_create("2025-09-17");
$diff = date_diff($awal, $akhir);
echo $diff->format("%a hari") . "<br>"; // Output: 259 hari

// strtotime() → ubah string jadi timestamp
echo strtotime("next Monday") . "<br>";

// date() → format tanggal
echo date("Y-m-d H:i:s") . "<br>"; // Output: contoh 2025-09-17 02:45:00

// getdate() → info lengkap tanggal sekarang
print_r(getdate());
echo "<br>";

// mktime() → bikin timestamp manual
echo date("Y-m-d", mktime(0, 0, 0, 12, 25, 2025)) . "<br>"; // Output: 2025-12-25

// time() → timestamp sekarang
echo time() . "<br>";
?>