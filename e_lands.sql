-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2025 at 01:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_lands`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `starting_time` varchar(255) NOT NULL,
  `ending_time` varchar(255) NOT NULL,
  `starting_price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `poster_id`, `property_id`, `starting_time`, `ending_time`, `starting_price`, `date`) VALUES
(1, 1, 1, '2025-3-12 11:15AM', '2025-3-17 11:15AM', '250000', '2025-1-7 11:15AM');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `bid_amount` varchar(255) NOT NULL,
  `bid_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `property_id`, `buyer_id`, `bid_amount`, `bid_time`) VALUES
(1, 1, 1, '280000', '2025-3-13 11:15AM'),
(2, 1, 1, '285000', '2025-3-14 11:15AM'),
(3, 1, 1, '350000', '2025-3-14 11:18AM');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_receipt`
--

CREATE TABLE `buyer_receipt` (
  `id` int(11) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_added` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `noofItem` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `category_type`) VALUES
(1, 'commercial_lands', 'assets/images/background/categories.jpeg', ''),
(2, 'residential_lands', 'assets/images/background/categories.jpeg', ''),
(3, 'industrial_lands', 'assets/images/background/categories.jpeg', ''),
(4, 'lands_for_lease', 'assets/images/background/categories.jpeg', ''),
(5, 'farm_lands', 'assets/images/background/categories.jpeg', ''),
(6, 'private_ property', 'assets/images/background/categories.jpeg', ''),
(7, 'city_lands', 'assets/images/background/categories.jpeg', ''),
(8, 'prime_lands', 'assets/images/background/categories.jpeg', ''),
(9, 'estate_lands', 'assets/images/background/categories.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `noofitem` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `shipping_address` text NOT NULL,
  `lga` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `mykey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `mykey`) VALUES
(1, 'pk_test_7580449c6abedcd79dae9c1c08ff9058c6618351');

-- --------------------------------------------------------

--
-- Table structure for table `key_features`
--

CREATE TABLE `key_features` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_feature_1` varchar(255) NOT NULL,
  `option_feature_2` varchar(255) NOT NULL,
  `option_feature_3` varchar(255) NOT NULL,
  `option_feature_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `key_features`
--

INSERT INTO `key_features` (`id`, `product_id`, `option_feature_1`, `option_feature_2`, `option_feature_3`, `option_feature_4`) VALUES
(1, 1, 'Gated community with 24/7 security', 'Good road network and drainage system', 'Proximity to major landmarks such as The Palms Shopping Mall and Lekki Beach.', 'Documented with Governor\'s Consent for guaranteed ownership');

-- --------------------------------------------------------

--
-- Table structure for table `member_message`
--

CREATE TABLE `member_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `compose` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `compose` text NOT NULL,
  `receiver_email` varchar(255) NOT NULL,
  `has_read` tinyint(11) NOT NULL,
  `is_sender_deleted` tinyint(11) NOT NULL,
  `is_receiver_deleted` tinyint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `picx`
--

CREATE TABLE `picx` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pictures` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `property_id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `poster_type` varchar(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_price` int(11) NOT NULL,
  `property_image` varchar(255) NOT NULL,
  `property_details` text NOT NULL,
  `property_category` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `property_location` varchar(11) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `property_quantity` int(11) NOT NULL,
  `property_size` varchar(255) NOT NULL,
  `sold` tinyint(11) NOT NULL,
  `property_views` int(11) NOT NULL,
  `property_likes` int(11) NOT NULL,
  `property_rating` int(11) NOT NULL,
  `property_discount` int(11) NOT NULL,
  `featured_product` tinyint(11) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`property_id`, `poster_id`, `poster_type`, `property_name`, `property_price`, `property_image`, `property_details`, `property_category`, `property_type`, `service`, `property_location`, `property_address`, `quantity_sold`, `property_quantity`, `property_size`, `sold`, `property_views`, `property_likes`, `property_rating`, `property_discount`, `featured_product`, `date_added`) VALUES
(1, 1, 'merchant', 'Green Valley Estate Plot 15', 25000000, 'uploads/lands/product-img.jpeg', 'This prime plot of land is located in the heart of Lekki Phase 1, an upscale and fast-developing area in Lagos. It is suitable for residential or mixed-use purposes. The land is fenced, cleared, and ready for immediate development.', 'commercial_lands', '', '', 'lagos state', 'lekki phase 1', 0, 10, ' acre', 0, 0, 0, 0, 0, 0, 'jan 5, 2025');

-- --------------------------------------------------------

--
-- Table structure for table `seller_comment`
--

CREATE TABLE `seller_comment` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `pending` tinyint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_rating` varchar(255) NOT NULL,
  `verified` tinyint(11) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `reset_token_expiry` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_name`, `user_email`, `user_password`, `user_type`, `user_image`, `user_phone`, `user_location`, `lga`, `user_address`, `user_rating`, `verified`, `vkey`, `reset_token`, `reset_token_expiry`, `date_added`) VALUES
(1, 'Neeyo', 'ngnimitech@gmail.com', '$2y$10$HGiVDPgxxDNG.l49vYKXBe8ZLHEbVC.lk0VTmsn3ey9DQt42JMfcW', 'Vendor', 'uploads/profile/neeyo.png', '09074456453', 'Lagos', '', 'iyalla street, Ikeja Alausa', '0', 1, 'a5ec3ee7fd2cab423930471f709ed1a5', '9489a247b2fff01dde8dd4e915d4f5397ac9d1ec8ebd76aa98daad04da658242', '2025-01-31 20:30:44', '2025-01-31 16:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `verify_seller`
--

CREATE TABLE `verify_seller` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `verified` tinyint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_receipt`
--
ALTER TABLE `buyer_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_features`
--
ALTER TABLE `key_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_message`
--
ALTER TABLE `member_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picx`
--
ALTER TABLE `picx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `seller_comment`
--
ALTER TABLE `seller_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_seller`
--
ALTER TABLE `verify_seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buyer_receipt`
--
ALTER TABLE `buyer_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `key_features`
--
ALTER TABLE `key_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_message`
--
ALTER TABLE `member_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picx`
--
ALTER TABLE `picx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller_comment`
--
ALTER TABLE `seller_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify_seller`
--
ALTER TABLE `verify_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
