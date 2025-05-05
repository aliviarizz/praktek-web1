<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .galeri img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<h2>Galeri Gambar</h2>
<div class="galeri">
    <?php
    $fileList = glob('gambar/*');
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            // Tampilkan hanya file gambar
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                echo '<img src="' . $filename . '" alt="gambar">';
            }
        }
    }
    ?>
</div>

</body>
</html>