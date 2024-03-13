<?php
include 'includes/config.php'; // DB connection

try {
    // Retrieve form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image_url = $_POST['image_url'];

    // Prepare an insert statement
    $sql = "INSERT INTO menu_items (name, description, price, category, image_url) VALUES (:name, :description, :price, :category, :image_url)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
    $stmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);
    
    // Execute the prepared statement
    $stmt->execute();

    echo "Menu item added successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
?>
