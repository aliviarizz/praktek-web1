<?php
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

foreach ($angka as $nomor) {
    if ($nomor % 2 == 0) {
        echo "Nomor : $nomor Genap <br>";
    } else {
        echo "Nomor : $nomor Ganjil <br>";
    }
}
?>