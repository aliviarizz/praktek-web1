<?php
include 'Koneksioop.php';
$db = new Koneksioop();

if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];

    $berhasil = $db->deleteMataKuliah($kodeMK);

    if (!$berhasil) {
        die("Gagal menghapus data.");
    }
}

header("Location: index.php");
exit;
?>