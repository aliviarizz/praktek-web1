<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Selamat datang, <?php echo $_SESSION["username"]; ?>!</h2>

<form method="post" action="logout.php">
    <input type="submit" value="Logout">
</form>

</body>
</html>