<?php
$dsn = 'mysql:host=localhost;dbname=search_demo';
$username = 'root'; // Replace with your DB username
$password = '';     // Replace with your DB password

try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    die();
}
?>
