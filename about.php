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
      <li class="nav-item">
        <a class="nav-link" href="reservation.php">Reservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- About Content -->
<div class="container mt-5">
    <h1>About Us</h1>
    <p>This is where you can tell the story of your restaurant. Talk about how it started, the idea behind it, what makes it special, and any awards or recognitions you've received. It's also a great place to introduce your team.</p>
    
    <!-- Example Section: History -->
    <h2>Our History</h2>
    <p>Share the history of your restaurant here. When was it founded? What inspired you to start it? How has it grown or changed over the years?</p>
    
    <!-- Example Section: Our Team -->
    <h2>Meet the Team</h2>
    <p>Introduce your key team members. This could include chefs, managers, and anyone else who plays a significant role in your restaurant's success.</p>
    
    <!-- Example Section: Our Vision -->
    <h2>Our Vision</h2>
    <p>What are your goals and aspirations for the restaurant? What unique experiences do you strive to provide your guests?</p>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
