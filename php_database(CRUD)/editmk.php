<?php
include 'koneksi.php';

// Cek apakah parameter kodeMK ada di URL
if (!isset($_GET['kodeMK'])) {
    header('Location: indexmk.php');
    exit;
}

$kodeMK = $_GET['kodeMK'];
$query = "SELECT * FROM t_matakuliah WHERE kodeMK = '$kodeMK'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: white;
            padding: 20px 30px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 6px;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            color: #333;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #2980b9;
            outline: none;
        }

        input[type="submit"] {
            background-color: #2980b9;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #1f6391;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Edit Mata Kuliah</h2>
        <input type="hidden" name="kodeMK" value="<?= htmlspecialchars($data['kodeMK']) ?>">
        <p><label>Kode MK: 
            <input type="text" value="<?= htmlspecialchars($data['kodeMK']) ?>" disabled></label></p>
        <p><label>Nama MK: 
            <input type="text" name="namaMK" value="<?= htmlspecialchars($data['namaMK']) ?>" required></label></p>
        <p><label>SKS: 
            <input type="number" name="sks" value="<?= htmlspecialchars($data['sks']) ?>" required></label></p>
        <p><label>Jam: 
            <input type="number" name="jam" value="<?= htmlspecialchars($data['jam']) ?>" required></label></p>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $updateQuery = "UPDATE t_matakuliah 
                    SET namaMK = '$namaMK', sks = '$sks', jam = '$jam'
                    WHERE kodeMK = '$kodeMK'";
    mysqli_query($link, $updateQuery);
    header('Location: indexmhs.php');
}
?>