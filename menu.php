<?php include 'includes/header.php'; ?>

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

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Restaurant Name</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reservation.php">Reservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Menu Content -->
<div class="container mt-5">
    <h1>Our Menu</h1>
    <p>Discover our lovingly curated dishes.</p>
    
    <!-- Appetizers -->
    <h2>Appetizers</h2>
    <div class="row">
        <div class="col-md-4">
            <h3>Bruschetta</h3>
            <p>Tomato, basil, onion, and mozzarella on toasted bread.</p>
            <p>$8.99</p>
        </div>
        <!-- Add more appetizers here -->
    </div>
    
    <!-- Main Courses -->
    <h2>Main Courses</h2>
    <div class="row">
        <div class="col-md-4">
            <h3>Lasagna</h3>
            <p>Layers of pasta, homemade sauce, beef, and cheese.</p>
            <p>$14.99</p>
        </div>
        <!-- Add more main courses here -->
    </div>
    
    <!-- Desserts -->
    <h2>Desserts</h2>
    <div class="row">
        <div class="col-md-4">
            <h3>Tiramisu</h3>
            <p>Classic Italian dessert made with espresso-soaked ladyfingers and mascarpone cheese.</p>
            <p>$6.99</p>
        </div>
        <!-- Add more desserts here -->
    </div>
    
    <!-- Beverages -->
    <h2>Beverages</h2>
    <div class="row">
        <div class="col-md-4">
            <h3>Italian Coffee</h3>
            <p>Rich espresso blend, served hot or iced.</p>
            <p>$3.99</p>
        </div>
        <!-- Add more beverages here -->
    </div>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
