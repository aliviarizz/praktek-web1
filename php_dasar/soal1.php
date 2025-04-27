<?php
// data gaji
$gaji_pokok = 3250000;
$gaji_tunjangan = 1200000;

// gaji kotor
$gaji_kotor = $gaji_pokok + $gaji_tunjangan;

// menghitung pajak
$pajak = 0.10 * $gaji_kotor;

// menghitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// hasil
echo "Gaji pokok: Rp ". number_format($gaji_pokok, 0, ',', '.'). "<br>";
echo "Tunjangan jabatan: Rp ". number_format($gaji_tunjangan, 0, ',', '.'). "<br>";
echo "Gaji kotor: Rp ". number_format($gaji_kotor, 0, ',', '.'). "<br>";
echo "Pajak(10%): Rp ". number_format($pajak, 0, ',', '.'). "<br>";
echo "Gaji bersih: Rp". number_format($gaji_bersih, 0, ',', '.'). "<br>";
?>