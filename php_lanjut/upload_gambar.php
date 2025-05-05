<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="244311035">
    <meta name="author" content="Alivia Rizka">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"])) {

    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // cek apakah file berupa gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    // deteksi apakah file dengan nama yang sama
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.<br>";
        $uploadOk = 0;
    }

    // check ukuran file
    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Maaf, ukuran file terlalu besar.<br>";
        $uploadOk = 0;
    }

    // filter format file
    if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
        echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diizinkan.<br>";
        $uploadOk = 0;
    }

    // proses upload jika semua validasi lolos
    if ($uploadOk == 0) {
        echo "Maaf, file gagal diupload.<br>";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File <b>" . htmlspecialchars(basename($_FILES["gambar"]["name"])) . "</b> berhasil diupload.<br>";
        } else {
            echo "Maaf, terjadi error saat mengupload file.<br>";
        }
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih gambar yang akan diupload:</label><br>
        <input type="file" name="gambar" id="gambar1"></p>
    <input type="submit" value="Upload Gambar" name="submit">
</form>

</body>
</html>