<?php

    $bolpoin = 1750;
    $per_lusin = 12;
    $lembar = 5;
    $jumlah = 5000;
    $uang_rian = $lembar * $jumlah;
    $harga = $per_lusin * $bolpoin;
    $kembalian = $uang_rian - $harga;


    echo "Ini jawaban No.1<br>";
    echo '-----------------<br><br>';
    echo '<b>Langkah 1</b><br>';
    echo "harga 1 bolpoin = {$bolpoin}<br>";
    echo "1 lusin = {$per_lusin}<br><br>";

    echo '<b>Langkah 2</b><br>';
    echo "Uang Rian = {$uang_rian}<br><br>";

    echo '<b>Langkah 3</b><br>';
    echo "Harga = {$harga}<br><br>";

    echo '<b>Langkah 4</b><br>';
    echo "Maka uang kembalian dari Rian adalah : <br>";
    echo "Kembalian = 25.000 - 12.000 = {$kembalian}<br>";


?>