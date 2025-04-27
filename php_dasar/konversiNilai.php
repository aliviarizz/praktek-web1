<?php
//Nilai yang akan dikonvesi
$nilai = 89;

//Konversi nilai
if ($nilai >= 0 && $nilai <= 59) {
    $grade = "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    $grade = "BC";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $grade = "B";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $grade = "AB";
}elseif ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
}else {
    $grade = "Nilai tidak valid";
}

//Hasil
echo "Nilai angka: $nilai<br>";
echo "Nilai Huruf: $grade";
?>