-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 08:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(6, 'test', 'test@gmail.com', 'test', '2024-05-15 21:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`, `category`, `image_url`) VALUES
(1, 'Bruschetta', 'Grilled bread garlic, tomatoes, olive oil.', 5.50, 'Appetizers', 'assets/img/Bruschetta.png'),
(2, 'Caesar Salad', 'Fresh romaine lettuce, Caesar dressing, croutons, and Parmesan cheese.', 7.50, 'Appetizers', 'assets/img/caesar_salad.png'),
(3, 'Italian Coffee', 'Strong and rich espresso.', 3.50, 'Beverages', 'assets/img/ItalianCoffee.png'),
(4, 'Mojito', 'Refreshing cocktail with mint, lime, sugar, and rum.', 7.00, 'Cocktails', 'assets/img/mojito.png'),
(5, 'Negroni', 'A classic Italian cocktail made with gin, vermouth rosso, and Campari.', 8.00, 'Cocktails', 'assets/img/Negroni.png'),
(6, 'Chocolate Brownie', 'Rich chocolate brownie with nuts and ice cream on top.', 6.00, 'Desserts', 'assets/img/ChocolateBrownie.png'),
(7, 'Panna Cotta', 'Italian dessert made with cream, milk, and sugar, topped with berry sauce.', 7.00, 'Desserts', 'assets/img/panna_cotta.png'),
(8, 'Tiramisu', 'Coffee-flavored Italian dessert.', 6.00, 'Desserts', 'assets/img/Tiramisu.png'),
(9, 'Carbonara', 'Creamy pasta with eggs, cheese, bacon, and black pepper.', 11.00, 'Main Course', 'assets/img/carbonara.png'),
(10, 'Chicken Parmesan', 'Breaded chicken breast topped with marinara sauce and mozzarella.', 15.00, 'Main Course', 'assets/img/ChickenParmesan.png'),
(11, 'Grilled Salmon', 'Perfectly grilled salmon fillet served with a side of vegetables.', 18.00, 'Main Course', 'assets/img/grilled_salmon.png'),
(12, 'Lasagna', 'Layers of pasta, meat sauce, and cheese, baked and topped with mozzarella.', 12.00, 'Main Course', 'assets/img/Lasagna.png'),
(13, 'Okonomiyaki', 'Savory Japanese pancake with cabbage and various fillings.', 10.00, 'Main Course', 'assets/img/Okonomiyaki.png'),
(14, 'Pizza Margherita', 'Classic pizza with fresh tomatoes, mozzarella cheese, and basil.', 9.00, 'Main Course', 'assets/img/pizza.png'),
(15, 'Ravioli', 'Pasta filled with spinach and ricotta, served with marinara sauce.', 13.00, 'Main Course', 'assets/img/ravioli.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guests_number` int(11) NOT NULL,
  `special_requests` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `date`, `time`, `guests_number`, `special_requests`, `created_at`) VALUES
(1, 'test', 'test@gmail.com', '2024-05-23', '19:47:00', 5, '', '2024-05-17 16:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$6FUdWmvcrFbpVRYX6K1GAOBGsQGLdb2M0EMcKAlcoYwUVF4KSCO02', 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
