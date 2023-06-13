<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "palacehotel";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}