<?php
include 'includes/config.php';

try {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image_url = $_POST['image_url'];

    $sql = "INSERT INTO menu_items (name, description, price, category, image_url) VALUES (:name, :description, :price, :category, :image_url)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
    $stmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);

    $stmt->execute();

    // Redirect to confirmation page
    header('Location: confirmation.php');
    exit();
} catch(PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
?>
