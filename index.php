<?php
session_start();
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Name</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation" aria-label="Main Navigation">
    <a class="navbar-brand" href="#">Restaurant Name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reservation.php">Reservation</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user_id'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<!-- Carousel -->
<div id="homeCarousel" class="carousel slide" data-ride="carousel" aria-label="Home Carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/outside.png" class="d-block w-100" alt="Restaurant Outside">
        </div>
        <div class="carousel-item">
            <img src="assets/img/atmosphere.png" class="d-block w-100" alt="Restaurant Atmosphere">
        </div>
        <div class="carousel-item">
            <img src="assets/img/service.png" class="d-block w-100" alt="Restaurant Service">
        </div>
    </div>
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev" aria-label="Previous">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next" aria-label="Next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Welcome Section -->
<div class="container mt-5">
    <h1>Welcome to Our Restaurant</h1>
    <p>This is a placeholder for the restaurant description. introduce restaurant,  special dishes, and any other information for visitors.</p>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
