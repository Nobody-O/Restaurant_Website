<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1>Our Menu</h1>
    <?php
    require 'includes/config.php';

    try {
        $sql = "SELECT * FROM menu_items ORDER BY category, name";
        $result = $pdo->query($sql);
        
        if ($result->rowCount() > 0) {
            $currentCategory = null;
            while ($row = $result->fetch()) {
                if ($row['category'] !== $currentCategory) {
                    if ($currentCategory !== null) echo "</div></div>"; // Close previous category div if not first category
                    echo "<h2>" . htmlspecialchars($row['category']) . "</h2><div class='menu-category'><div class='row'>";
                    $currentCategory = $row['category'];
                }
                
                echo "<div class='col-md-4'>";
                echo "<div class='menu-item'>";
                if (!empty($row['image_url'])) {
                    echo "<img src='" . htmlspecialchars($row['image_url']) . "' alt='" . htmlspecialchars($row['name']) . "' class='img-fluid'>";
                }
                echo "<h3>" . htmlspecialchars($row['name']) . " - $" . number_format($row['price'], 2) . "</h3>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "</div>";
                echo "</div>";
            }
            if ($currentCategory !== null) echo "</div></div>"; // Close the last category div
        } else {
            echo "<p>No menu items found.</p>";
        }
    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
