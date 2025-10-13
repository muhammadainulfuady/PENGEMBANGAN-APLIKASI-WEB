<?php 
function display_month($month, $year){
    $first_day_of_month = mktime(0, 0, 0, $month, 1, $year);
    $first_day_of_week = date('w', $first_day_of_month);
    $days_in_month = date('t', $first_day_of_month);
    $month_name = date('F', $first_day_of_month);
    echo "<h1>$month_name $year</h1>";
    echo "<tr>";
    if ($first_day_of_week > 0) {
        echo "<td colspan='$first_day_of_week'>&nbsp;</td>";
    }
    $week = $first_day_of_week;
    $today = date("j");
    $thismonth = date("t");
    $thisyear = date("Y");
    for ($day_of_month= 1; $day_of_month <= $days_in_month;
        $day_of_month++){
        if ($week == 7) {
            echo "</tr><tr>";
            $week = 0;
        }if($day_of_month == $today && $month == $thismonth && $year == $thisyear){
            echo "<td style='background-color: yellow'>$day_of_month</td>";
        }else{
            echo "<td>$day_of_month</td>";
        }
        $week++;
    }
}
display_month(8, 2025)
?>

<!-- hari ini cetak 18 september 2025 tanggal besokl 19 september 2025 kemarin 17 september 2025 -->