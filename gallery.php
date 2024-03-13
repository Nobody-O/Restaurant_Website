<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Restaurant Name</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="gallery.php">Gallery <span class="sr-only">(current)</span></a>
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

<!-- Gallery Content -->
<div class="container mt-5">
    <h1>Our Gallery</h1>
    <p>Take a look at our beautiful restaurant and delicious dishes.</p>
    <div class="row">
        <!-- Sample gallery item -->
        <div class="col-md-4">
            <div class="card">
                <img src="assets/img/sample-dish.jpg" class="card-img-top" alt="Sample Dish">
                <div class="card-body">
                    <h5 class="card-title">Delicious Dish</h5>
                    <p class="card-text">A brief description of the image.</p>
                </div>
            </div>
        </div>
        <!-- Repeat for more images -->
    </div>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
