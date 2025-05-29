<?php
$con = new mysqli("localhost", "root", "", "db_praktik");
// check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>