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
    <p> Our restaurant have a deep histroy going back to 1970's, it started as a small buisness and started to pick up popularity around the 2000's due to our respectable selection of dishes and on top of all our attention to detail and love for every dish.
    
    <h2>Our History</h2>
    <p> The history of this restaurant started in 1970 when we were inspired to make an affordable, delicious and affordable options while not overwealming the customers with a too wide selection of dishes
      but the real reccognition started in the 2000's as we have perfected this formula and decided to go into upper potential of our restaurant.
    </p>
    
    <h2>Meet the Team</h2>
    <p> key team members. Including chefs, staff , manager and anyone else who plays a significant role in your restaurant's success.
      <img src="chefantonio.jpg"> <alt="HeadChef">
      <img src="chefrosa.jpg"> <alt="HeadChef">
      <img src="emily.jpg"> <alt="Waiter">
      <img src="joch.jpg"> <alt="Waiter">
      <img src="marco.jpeg"> <alt="Waiter">
    </p>
    
    <h2>Our Vision</h2>
    <p> goals and aspirations for the restaurant? What unique experiences we strive to provide our guests?</p>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
