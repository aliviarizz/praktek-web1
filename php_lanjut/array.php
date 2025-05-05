<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Array ke JSON</title>
</head>
<body>

<h2>Data Mahasiswa (Array → JSON)</h2>

<pre>
<?php
// 1. Buat array dengan index nama dan umur (15 data)
$data = [
    ["nama" => "Alivia", "umur" => 20],
    ["nama" => "Rizka", "umur" => 19],
    ["nama" => "Bayu", "umur" => 21],
    ["nama" => "Dewi", "umur" => 22],
    ["nama" => "Fajar", "umur" => 18],
    ["nama" => "Nina", "umur" => 20],
    ["nama" => "Andi", "umur" => 23],
    ["nama" => "Lia", "umur" => 19],
    ["nama" => "Budi", "umur" => 22],
    ["nama" => "Citra", "umur" => 21],
    ["nama" => "Eka", "umur" => 20],
    ["nama" => "Raka", "umur" => 18],
    ["nama" => "Dina", "umur" => 19],
    ["nama" => "Hadi", "umur" => 23],
    ["nama" => "Sari", "umur" => 21]
];

// 2. Konversi ke JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// 3. Tampilkan
echo $jsonData;
?>
</pre>

</body>
</html>