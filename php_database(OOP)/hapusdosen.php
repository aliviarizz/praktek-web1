<?php
include 'Koneksioop.php';
$db = new Koneksioop();

// Cek apakah parameter GET idDosen ada
if (isset($_GET["idDosen"])) {
    $id = $_GET["idDosen"];

    // Panggil method hapusDosen dari class koneksi
    $success = $db->hapusDosen($id);

    if (!$success) {
        die("Gagal menghapus data dosen.");
    }
}

// Redirect ke halaman daftar dosen
header("Location: index.php");
exit;
?>