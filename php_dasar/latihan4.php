<?php
/* Operator logika yang bisa digunakan
* ==  Sama Dengan           $x == $y
* === Identical             $x === $y
* !=  Tidak sama dengan     $x != $y
* <>  Tidak sama dengan     $x <> $y
* !== Not identical         $x !== $y
* >   Lebih dari            $x > $y
* <   Kurang dari           $x < $y
* >=  Lebih besar atau sama dengan  $x >= $y
* <=  Kurang dari atau sama dnegan  $x <= $y
* <=> Spaceship     $x <=> $y
*/

$t = date("H"); // mendapatkan jam dengan format 1-24
echo "If ";
if ($t < 16) {
    echo "Selamat siang!";
}

// If else
$t = date("H"); // mendapatkan jam dengan format 1-24
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

//Nested if
echo "<br> Nested if <br>";
if ($t < 10) {
    echo "Selamat pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
?>