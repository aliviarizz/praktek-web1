<?php
// variabel dalam php
$txt = "Selamat datang !";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo "<p>isi variabel txt adalah: $txt</p>";
echo "<p>isi variabel txt adalah: $x</p>";
echo "<p>isi variabel txt adalah: $y</p>";
echo "Belajar PHP di " . $txt2 . "<br>";
echo $x + $y;

//PHP konstanta
define("nama_konstanta", "{Alivia Rizka W}");
echo "<br>".nama_konstanta;
?>