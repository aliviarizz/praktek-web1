<?php
include("Koneksioop.php");
$db = new Koneksioop();

// Periksa apakah parameter GET 'npm' tersedia
if (isset($_GET["npm"])) {
    $npm = intval($_GET["npm"]);

    $berhasil = $db->deleteMahasiswa($npm);

    if (!$berhasil) {
        die("Gagal menghapus data.");
    }
}

// Redirect ke halaman index
header("Location: index.php");
exit;
?>