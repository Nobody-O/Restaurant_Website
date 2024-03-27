<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Restaurant Name</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- About Content -->
<div class="container mt-5">
    <h1>About Us</h1>
    <p> Our restaurant have a deep histroy going back to 1970's, it started as a small buisness and started to pick up popularity around the 2000's due to our respectable selection of dishes and on top of all our attention to detail and love for every dish.
    
    <h2>Our History</h2>
    <p> The history of this restaurant started in 1970 when we were inspired to make an affordable, delicious and affordable options while not overwealming the customers with a too wide selection of dishes
      but the real reccognition started in the 2000's as we have perfected this formula and decided to go into upper potential of our restaurant.
    </p>
    
        <h2>Our Vision</h2>
    <p> Shit bro im blind </p>

    <!-- Meet the Team -->
    <h2>Meet the Team</h2>
    <div class="team-container">
      <?php
        // PHP code to fetch team members data
        $chefs = [
          ['name' => 'Chef Antonio', 'image' => 'assets/img/chefantonio.jpg'],
          ['name' => '         Chef Rosa', 'image' => 'assets/img/chefrosa.jpg'],
          ['name' => '         Emily', 'image' => 'assets/img/emily.jpg'],
          ['name' => '         Joch', 'image' => 'assets/img/joch.jpg'],
          ['name' => 'Rodriko', 'image' => 'assets/img/rodriko.png'],
          ['name' => 'Hottie of the restaurant', 'image' => 'assets/img/restaurant-manager-chef.jpg']
        ];
        
        foreach ($chefs as $chef) {
            echo '<div class="chef">';
            echo '<img src="' . htmlspecialchars($chef['image']) . '" alt="' . htmlspecialchars($chef['name']) . '" />';
            echo '<div class="chef-name">' . htmlspecialchars($chef['name']) . '</div>';
            echo '</div>';
        }
      ?>
    </div>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
