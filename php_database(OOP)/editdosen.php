<?php
include 'Koneksioop.php';
$db = new Koneksioop();

if (isset($_GET['idDosen'])) {
    $id = (int)$_GET['idDosen'];
    $data = $db->getDosenById($id);

    if (!$data) {
        die("Data dosen tidak ditemukan.");
    }

    $idDosen = $data["idDosen"];
    $namaDosen = $data["namaDosen"];
    $noHP = $data["noHP"];
} else {
    header("Location: viewdosen.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {
            text-align: center;
        }
        .container {
            width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_mahasiswa" action="proses_editdosen.php" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <p>
                    <label for="idDosen">ID: </label>
                    <input type="hidden" name="idDosen" value="<?php echo htmlspecialchars($idDosen); ?>">
                    <input type="text" name="idDosenDisabled" id="idDosenDisabled" value="<?php echo htmlspecialchars($idDosen); ?>" disabled>
                </p>
                <p>
                    <label for="namaDosen">Nama Dosen: </label>
                    <input type="text" name="namaDosen" value="<?php echo htmlspecialchars($namaDosen); ?>">
                </p>
                <p>
                    <label for="noHP">No HP: </label>
                    <input type="text" name="noHP" value="<?php echo htmlspecialchars($noHP); ?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>