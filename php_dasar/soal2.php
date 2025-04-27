<?php
// jumlah uang Ani
$jumlah_uang = 1387500;

// daftar uang pecahan
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

// hasil
$hasil = [];

// menghitung jumlah uang pecahan
foreach ($pecahan as $uang) {
    $jumlah_pecahan = intdiv($jumlah_uang, $uang);
    $hasil[$uang] = $jumlah_pecahan;
    $jumlah_uang %= $uang;
}

// menampilkan hasil
echo "Rincian uang pecahan Ani: <br>";
echo "<ul>";
foreach ($hasil as $pecah => $jumlah) {
    echo "<li>Pecahan Rp ". number_format($pecah, 0, ',', '.'). " = ". $jumlah. " lembar</li>";
}
echo "</ul>";
?>