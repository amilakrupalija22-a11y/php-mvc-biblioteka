<?php
$conn = new mysqli("localhost", "root", "", "biblioteka");

if ($conn->connect_error) {
    die("Greška: " . $conn->connect_error);
}
?>
