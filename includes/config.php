<?php
// Database credentials
$host = 'sql306.infinityfree.com';
$dbname = 'if0_35973697_restaurant_db';
$username = 'if0_35973697';
$password = 'Odys2003Seas';

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
