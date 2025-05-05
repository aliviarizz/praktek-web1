<?php
// Cek apakah form disubmit dan cookie belum dibuat
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nama"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    setcookie("nama_user", $nama, time() + (86400 * 7)); // Cookie berlaku 7 hari
    header("Location: " . $_SERVER["PHP_SELF"]); // Refresh halaman agar cookie terbaca
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Identitas dengan Cookie</title>
</head>
<body>

<?php
if (isset($_COOKIE["nama_user"])) {
    echo "<h2>Halo, " . $_COOKIE["nama_user"] . "! Selamat datang kembali 😊</h2>";
} else {
?>
    <h2>Masukkan Identitas Anda</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nama: </label>
        <input type="text" name="nama" required><br>
        <input type="submit" value="Simpan">
    </form>
<?php
}
?>

</body>
</html>