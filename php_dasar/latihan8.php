<?php
// data kelas dengan array 2 dimensi
$array = array(
    "1C"=> array("udin", "ismail", "adi"),
    "1D"=> array("lukman", "fajri", "mahmud")
);
// menampilkan data array
print_r($array);
// menampilkan kelas 1C
print_r($array["1C"]);
// menampilkan kelas 1D dengan index 0
echo $array['1D'][0]."<br>";
// menampilkan fajri
echo $array['1D'][1]."<br>";
// menampilkan adi
echo $array['1C'][2]."<br>";

// data kelas bisa ditulis juga dengan
$array_simple = [
    "1C"=> ["udin", "ismail", "adi"],
    "1D"=> ["lukman", "fajri", "mahmud"]
];
?>