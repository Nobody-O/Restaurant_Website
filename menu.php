<?php include 'includes/header.php'; // Ensure this path is correct ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Restaurant Name</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Menu Content -->
<div class="container mt-5">
    <h1>Our Menu</h1>
    <?php
    require 'includes/config.php'; // Ensure this path is correct and the config file is set up properly

    try {
        $sql = "SELECT * FROM menu_items ORDER BY category, name";
        $result = $pdo->query($sql);
        
        if ($result->rowCount() > 0) {
            $currentCategory = null;
            while ($row = $result->fetch()) {
                if ($row['category'] !== $currentCategory) {
                    if ($currentCategory !== null) echo "</div>"; // Close previous category div if not first category
                    echo "<h2>" . htmlspecialchars($row['category']) . "</h2><div class='menu-category'>";
                    $currentCategory = $row['category'];
                }
                
                echo "<div class='menu-item'>";
                echo "<h3>" . htmlspecialchars($row['name']) . " - $" . number_format($row['price'], 2) . "</h3>";
                if (!empty($row['image_url'])) {
                    // The image URL should be a relative path to where the images are stored on your server
                    echo "<img src='" . htmlspecialchars($row['image_url']) . "' alt='" . htmlspecialchars($row['name']) . "' class='menu-item-image'>";
                }
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "</div>";
            }
            if ($currentCategory !== null) echo "</div>"; // Close the last category div
        } else {
            echo "<p>No menu items found.</p>";
        }
    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
    ?>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; // Ensure this path is correct ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
