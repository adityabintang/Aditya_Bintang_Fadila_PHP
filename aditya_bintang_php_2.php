<?php
    $sepuluh_ribuan = 3;
    $sepuluh_ribuan = $sepuluh_ribuan * 10000;

    $lima_ribuan = 4;
    $lima_ribuan = $lima_ribuan * 5000;

    $dua_puluh_ribuan = 5;
    $dua_puluh_ribuan = $dua_puluh_ribuan * 20000;

    $harga_mainan = 55000;

    $total = ($lima_ribuan + $sepuluh_ribuan + $dua_puluh_ribuan) - $harga_mainan;

    echo 'Ini jawaban No.2<br>';
    echo '-----------------<br><br>';
    echo '<b>Langkah 1</b><br>';
    echo "3 lembar 10.000-an = {$sepuluh_ribuan}<br>";
    echo "4 lembar 5.000-an = {$lima_ribuan}<br>";
    echo "5 lembar 20.000-an = {$dua_puluh_ribuan}<br><br>";

    echo '<b>Langkah 2</b><br>';
    echo "Total Uang Syifa - 55.000 = {$total}<br>";


?>