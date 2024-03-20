<?php
// Database credentials
$host = 'localhost';   //sql306.infinityfree.com
$dbname = 'restaurant_db'; //if0_35973697_restaurant_db
$username = 'root'; //if0_35973697
$password = ''; //Odys2003Seas

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
