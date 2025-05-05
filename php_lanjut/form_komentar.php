<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="name"><br><br>
    E-mail: <input type="email" name="email"><br><br>
    Komentar: <textarea name="comment" rows="5" cols="40"><img src="http://url.to.file./tidak.ada" 
    onerror="alert('hacked')";></textarea><br><br>
    <input type="submit" value="simpan">
    <input type="reset" value="bersihkan">
</form>

<?php
$name = $email = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    echo("Nama :".$name."<br>");
    echo("Email :".$email."<br>");
    echo("Komentar :".$comment."<br>");
    echo("<hr>");
}

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>