<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Belajar Fungsi Waktu PHP</title>
</head>

<body>

    <?php
    // =====================================
// 1. time() → timestamp sekarang
// =====================================
    echo "<h3>1. Fungsi time()</h3>";
    $now = time();
    echo "Timestamp sekarang: " . $now . "<br>";
    // Timestamp = jumlah detik sejak 1 Jan 1970 (UNIX Epoch)
    

    // =====================================
// 2. date() → format tanggal
// =====================================
    echo "<h3>2. Fungsi date()</h3>";
    echo "Tanggal sekarang (format Y-m-d H:i:s): " . date("Y-m-d H:i:s") . "<br>";
    echo "Hari ini: " . date("l, d F Y", $now) . "<br>";
    // Format: Hari, tanggal Bulan Tahun
    

    // =====================================
// 3. strtotime() → ubah string ke timestamp
// =====================================
    echo "<h3>3. Fungsi strtotime()</h3>";
    $nextMonday = strtotime("next Monday");
    echo "Timestamp next Monday: " . $nextMonday . "<br>";
    echo "Tanggal next Monday: " . date("Y-m-d", $nextMonday) . "<br>";


    // =====================================
// 4. mktime() → bikin timestamp manual
// =====================================
    echo "<h3>4. Fungsi mktime()</h3>";
    $christmas = mktime(0, 0, 0, 12, 25, 2025);
    echo "Timestamp Natal 2025: " . $christmas . "<br>";
    echo "Tanggal Natal 2025: " . date("l, d F Y", $christmas) . "<br>";
    echo date("Y-m-d") . "<br>";     // Output: 2025-09-18
    echo date("l") . "<br>";         // Output: Thursday
    echo date("F") . "<br>";         // Output: September
    echo date("l, d F Y") . "<br>";  // Output: Thursday, 18 September 2025
    

    // =====================================
// 5. getdate() → info lengkap tanggal
// =====================================
    echo "<h3>5. Fungsi getdate()</h3>";
    $info = getdate();
    echo "Detail tanggal sekarang:<br>";
    echo "Hari: " . $info['weekday'] . "<br>";
    echo "Tanggal: " . $info['mday'] . "<br>";
    echo "Bulan: " . $info['month'] . "<br>";
    echo "Tahun: " . $info['year'] . "<br>";


    // =====================================
// 6. date_create() dan date_format()
// =====================================
    echo "<h3>6. Fungsi date_create() & date_format()</h3>";
    $date = date_create("2025-09-18");
    echo "Tanggal dibuat dengan date_create: " . date_format($date, "l, d F Y") . "<br>";


    // =====================================
// 7. date_add() → menambahkan waktu
// =====================================
    echo "<h3>7. Fungsi date_add()</h3>";
    $date2 = date_create("2025-09-18");
    date_add($date2, date_interval_create_from_date_string("10 days"));
    echo "Tambah 10 hari dari 18 Sep 2025: " . date_format($date2, "Y-m-d") . "<br>";


    // =====================================
// 8. date_diff() → menghitung selisih tanggal
// =====================================
    echo "<h3>8. Fungsi date_diff()</h3>";
    $awal = date_create("2025-01-01");
    $akhir = date_create("2025-09-18");
    $diff = date_diff($awal, $akhir);
    echo "Selisih antara 1 Jan 2025 dan 18 Sep 2025: " . $diff->format("%R%a hari") . "<br>";
    ?>

</body>

</html>