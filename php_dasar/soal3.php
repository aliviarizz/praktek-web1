<?php
// array siswa
$siswa = [
    ["no_urut" => 1, "poin" => 75, "siswa" => "Adi"],
    ["no_urut" => 2, "poin" => 80, "siswa" => "Joni"],
    ["no_urut" => 3, "poin" => 65, "siswa" => "Jihan"],
    ["no_urut" => 4, "poin" => 70, "siswa" => "Aya"],
    ["no_urut" => 5, "poin" => 85, "siswa" => "Ita"],
    ["no_urut" => 6, "poin" => 90, "siswa" => "Budi"],
    ["no_urut" => 7, "poin" => 95, "siswa" => "Tini"],
    ["no_urut" => 8, "poin" => 65, "siswa" => "Sari"]
];

// poin siswa dengan nomor urut 5
echo "<h4>Poin siswa dengan nomor urut 5 </h4>";
echo "Nama: " . $siswa[4]["siswa"] . " - Poin: " , $siswa[4]["poin"] . "<br>";

// siswa yang memiliki poin 90
echo "<h4>Siswa dengan poin 90 </h4>";
foreach ($siswa as $data) {
    if ($data["poin"] == 90){
        echo "Nama: " . $data["siswa"] . "<br>";
    }
}

// siswa yang memiliki poin 100
echo "<h4>Siswa dengan poin 100 </h4>";
$found = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 100){
        echo "Nama: " . $data["siswa"] . "<br>";
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 100 <br>";
}
?>