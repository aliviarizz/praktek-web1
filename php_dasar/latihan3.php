<?php
$x = 5;
$y = 10;

//Aritmetic operators
echo "Penambahan ".$x + $y."<br>";
echo "Pengurangan ".$x - $y."<br>";
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "Modulos ".$x % $y."<br>";
echo "Exponensial ".$x ** $y."<br>";
echo("<br>");

//Assignment operators
$x += 2; // $x = $x + 2
$y += 2; // $y = $y + 2
echo "Penambahan x ".$x."<br>";
echo "Penambahan y ".$y."<br>";
echo("<br>");

//Increment/Decrement operators
echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi x = ".$x."<br>";
echo("<br>");
echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo("<br>");

//Conditional assignment operators
$user = "Andi darmawan";
//<kondisi> ? <nilai diisi dengan "red" jika $color tidak ada atau null
$status = (empty($user)) ? "kosong" : "Ada isi";
echo $status."<br>";
// variable $color diisi dengan "red" jika $color tidak ada atau null
?>