<?php include 'includes/header.php'; // Make sure this path is correct ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Restaurant Name</title>
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
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
      </li>
      <!-- Add other navigation items here -->
    </ul>
  </div>
</nav>

<!-- Thank You Content -->
<div class="container mt-5">
    <h1>Thank You!</h1>
    <p>We have received your message and will get back to you as soon as possible.</p>
    <p>If you need immediate assistance, please call us at (Restaurant phone number).</p>
    <a href="index.php" class="btn btn-primary">Return to Homepage</a>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; // Make sure this path is correct ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
