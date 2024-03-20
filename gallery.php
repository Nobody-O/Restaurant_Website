<?php include 'includes/header.php'; ?>

<!-- Gallery Content -->
<div class="container mt-5">
    <h1 class="text-center">Our Gallery</h1>
    <p class="text-center">Take a look at our beautiful restaurant and delicious dishes.</p>
    <div class="row">
        <?php
        $galleryItems = [
            ['image_name' => 'Bruschetta.png', 'title' => 'Bruschetta', 'description' => 'A traditional Italian starter made with fresh tomatoes and basil.'],
            ['image_name' => 'carbonara.png', 'title' => 'Carbonara', 'description' => 'A rich pasta dish with bacon, eggs, and parmesan.'],
            ['image_name' => 'ChickenParmesan.png', 'title' => 'Chicken Parmesan', 'description' => 'Crispy chicken breast covered with marinara sauce and melted cheese.'],
            ['image_name' => 'ChocolateBrownie.png', 'title' => 'Chocolate Brownie', 'description' => 'A chocolate lover’s delight, rich and fudgy.'],
            ['image_name' => 'ItalianCoffee.png', 'title' => 'Italian Coffee', 'description' => 'A strong and aromatic traditional espresso.'],
            ['image_name' => 'Lasagna.png', 'title' => 'Lasagna', 'description' => 'Layers of pasta, meat sauce, and cheese, baked to perfection.'],
            ['image_name' => 'Negroni.png', 'title' => 'Negroni', 'description' => 'A classic Italian cocktail with a bitter, sweet, and complex flavor.'],
            ['image_name' => 'Okonomiyaki.png', 'title' => 'Okonomiyaki', 'description' => 'A savory Japanese pancake with a variety of fillings.'],
            ['image_name' => 'Tiramisu.png', 'title' => 'Tiramisu', 'description' => 'A popular coffee-flavored Italian dessert.']
        ];

        foreach ($galleryItems as $item) {
            echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-4">';
            echo '<div class="card h-100">';
            echo '<img src="assets/img/' . htmlspecialchars($item['image_name']) . '" class="card-img-top" alt="' . htmlspecialchars($item['title']) . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($item['title']) . '</h5>';
            echo '<p class="card-text">' . htmlspecialchars($item['description']) . '</p>';
            echo '</div>'; // card-body
            echo '</div>'; // card
            echo '</div>'; // col
        }
          ?>
      </div> <!-- row -->

  </div> <!-- container -->
<?php include 'includes/footer.php'; ?>