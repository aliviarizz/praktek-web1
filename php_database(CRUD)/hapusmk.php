<?php
// buka koneksi dengan MySQL
include("koneksi.php");

// mengecek apakah url ada GET kodeMK
if (isset($_GET["kodeMK"])) {
    // menyimpan variabel id dari url ke dalam variabel $kodeMK
    $id = $_GET["kodeMK"];

    // jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM t_matakuliah WHERE kodeMK='$id'";
    $hasil_query = mysqli_query($link, $query);

    // periksa query, apakah ada kesalahan
    if(!$hasil_query) {
        die ("Gagal menghapus data: " . mysqli_errno($link) .
        " - " . mysqli_error($link));
    }
}

// melakukan redirect ke halaman viewdosen.php
header("location:indexmhs.php");
?>