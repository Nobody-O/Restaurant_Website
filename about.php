<?php
include 'includes/header.php';
?>

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

<div class="container mt-5">
    <h1>About Us</h1>
    <p>Our restaurant has a deep history going back to the 1970s. It started as a small business and gained popularity around the 2000s due to our respectable selection of dishes and attention to detail.</p>
    
    <h2>Our History</h2>
    <p>Started in the 1970s, our restaurant aimed to provide affordable and delicious options. Our recognition grew in the 2000s as we perfected our formula.</p>
    
    <h2>Our Vision</h2>
    <p>Our vision is to continue providing exceptional dining experiences while maintaining the essence of our tradition and quality.</p>

    <h2>Meet the Team</h2>
    <div id="teamCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/chefantonio.jpg" class="d-block w-100" alt="Chef Antonio">
            </div>
            <div class="carousel-item">
                <img src="assets/img/chefrosa.jpg" class="d-block w-100" alt="Chef Rosa">
            </div>
            <div class="carousel-item">
                <img src="assets/img/emily.jpg" class="d-block w-100" alt="Emily">
            </div>
            <div class="carousel-item">
                <img src="assets/img/joch.jpg" class="d-block w-100" alt="Joch">
            </div>
            <div class="carousel-item">
                <img src="assets/img/restaurant-manager-chef.jpg" class="d-block w-100" alt="Restaurant Manager">
            </div>
            <div class="carousel-item">
                <img src="assets/img/Rodriko.png" class="d-block w-100" alt="Rodriko">
            </div>
        </div>
        <a class="carousel-control-prev" href="#teamCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#teamCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
