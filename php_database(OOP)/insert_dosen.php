<?php
// Koneksi ke database
$con = new mysqli("localhost", "root", "", "db_praktik");

// Cek koneksi
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (10, 'Rahmat Dwi Prasetya', 'rahmat@example.com')";

// Eksekusi query
if ($con->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Tutup koneksi
$con->close();
?>