<?php
$host = 'localhost';
$dbname = 'app';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $conexion = new PDO($dsn, $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>
