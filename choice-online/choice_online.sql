-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 04:47 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choice_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Otobi', 'A brand furniture', 1, '2021-08-18 09:54:41', '2021-08-19 02:19:27'),
(2, 'RFL', 'A big brand', 1, '2021-08-18 09:56:48', '2021-08-23 09:42:25'),
(3, 'Bengal', 'Our Native Brand', 0, '2021-08-18 09:58:16', '2021-08-23 09:42:09'),
(4, 'Nike', 'A international brand', 0, '2021-08-19 02:18:14', '2021-08-23 09:42:15'),
(6, 'Hp', 'A good quality brand', 1, '2021-08-22 01:38:43', '2021-08-22 01:38:43'),
(7, 'Swift', 'Very luxirary', 1, '2021-08-23 09:29:15', '2021-08-23 09:29:15'),
(8, 'Yahma', 'Very Nice', 1, '2021-08-23 09:39:38', '2021-08-23 09:39:38'),
(9, 'Symphony', 'A good product.', 1, '2021-08-24 06:54:01', '2021-08-24 06:54:01'),
(10, 'Vivo', 'A indian company', 1, '2021-08-24 06:54:28', '2021-08-24 06:54:28'),
(11, 'Redmi', 'Good brand', 1, '2021-08-24 06:55:33', '2022-07-31 10:36:33'),
(12, 'Suzuki', 'A big brand', 1, '2021-08-24 06:56:50', '2021-08-26 20:13:28'),
(13, 'Fz', 'A Brand Bike', 1, '2021-08-24 06:57:20', '2021-08-26 20:24:53'),
(14, 'BMW', 'A indian TATA group product', 1, '2021-08-24 06:58:01', '2021-08-26 20:30:28'),
(15, 'Lenovo', 'Very big brand', 1, '2021-08-24 08:40:13', '2021-08-24 08:40:13'),
(16, 'TechDrone', 'Softtech drone is use for finder', 1, '2021-08-24 23:17:39', '2021-08-24 23:17:39'),
(17, 'Easy', 'Easy brand products good', 1, '2021-08-24 23:18:59', '2021-08-24 23:18:59'),
(18, 'Outlook', 'Very gorgeious', 1, '2021-08-24 23:19:38', '2021-08-24 23:19:38'),
(19, 'Apple', 'A high level company', 1, '2021-08-24 23:24:40', '2021-08-24 23:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Car', 'Today car is very smart', 1, '2021-08-17 07:27:17', '2021-08-17 09:02:14'),
(2, 'Laptop', 'Laptop is very easy carry able', 1, '2021-08-17 07:39:53', '2021-08-17 20:56:29'),
(3, 'Android', 'Today Smart use rapidly in bad sector.', 1, '2021-08-17 21:01:54', '2021-08-17 21:01:54'),
(4, 'Furniture', 'Today most useable furniture is wood', 1, '2021-08-17 21:15:14', '2021-08-17 23:26:03'),
(6, 'Bike', 'Today fashionable bike', 1, '2021-08-18 22:19:36', '2021-08-18 22:20:00'),
(7, 'Computer', 'Desktop service is long lasting.', 1, '2021-08-24 06:59:13', '2021-08-26 20:15:13'),
(8, 'Electronics', 'Today electronics product use available', 1, '2021-08-24 07:00:31', '2021-08-24 07:00:31'),
(9, 'Men', 'Men good wear', 1, '2021-08-24 23:11:00', '2021-08-24 23:13:09'),
(10, 'Women', 'Women products', 1, '2021-08-24 23:12:27', '2021-08-24 23:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'karim', 'khan', 'mdsayedarif84@gmail.com', '$2y$10$RSBGstPRGzO7r6Gu91.Xe.Wh3bef.qjir.9XFwKAQjTdQHfD2IJF2', '01855479190', 'Noakhali,keranibazar', '2021-08-31 22:36:53', '2021-08-31 22:36:53'),
(5, 'karim', 'Khan', 'fsjhilmil84@gmail.com', '$2y$10$hW6xtEGsfxvoVV/Xc1YQWeKmrATvCuxrJ.C0g9yRdZE1II38vCT6K', '01855479190', 'dhaka', '2021-09-01 08:38:02', '2021-09-01 08:38:02'),
(9, 'Arafat', 'Hossen', 'janokallan84@gmail.com', '$2y$10$tEr/i4/IgPKmk5eQc9eONOmpEJ8vV8C1V2vdqwN7GSES5mAiaMl.O', '01855479190', 'dhaka', '2021-09-01 10:21:42', '2021-09-01 10:21:42'),
(10, 'Arafat', 'Khan', 'super84@yahoo.com', '$2y$10$6YRTKBWxmNlNywFhGpYFuuQXFXIjqQnbXTNalBvMyNRl5RaA/c3wG', '01855479190', 'Noakhali, Khasher Hat', '2021-09-01 10:24:53', '2021-09-01 10:24:53'),
(11, 'Asuly', 'moon', 'asulymoon84@gmail.com', '$2y$10$5AdWZeMOgDjitACZhC9e6e3PZVcFr/oIeTJtetKTyNjLCriRQcmuq', '01866554587', 'Dhaka', '2022-07-15 10:38:24', '2022-07-15 10:38:24'),
(13, 'Short', 'Learning', 'shortlearning84@gmail.com', '$2y$10$NjhO0deVy3yjxmGk3/HZduKcjeOibixNpRTU/Csd8XN0uPMIFnLR6', '43434343', 'Dhaka', '2022-07-31 01:55:20', '2022-07-31 01:55:20'),
(14, 'gdgd', 'dsgsdg', 'ustora84@gmail.com', '$2y$10$oIUL.H2n42gQ5Ckl9iQKp.0GwTLkJFlLhbUVxdflgjz4s0iQR74I6', '86465', 'Dhaka', '2022-07-31 04:03:41', '2022-07-31 04:03:41'),
(15, 'test', 'Learning', 'test84@gmail.com', '$2y$10$FVX/pcYz0dM4EcSBodEfaO0Vz5NBHCFZSV/dzeleue7M2.c3MA4B6', '556465447', 'CTG', '2022-07-31 04:46:32', '2022-07-31 04:46:32'),
(16, 'test2', 'Learning', 'test84@2gmail.com', '$2y$10$uBL3nTdsiWc6JMSylKgF5uHJzQkgNJHPI1vlmNino3Zb3A3JN22V.', '55558656', 'Dhaka', '2022-07-31 04:50:42', '2022-07-31 04:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_17_121855_create_categories_table', 2),
(5, '2021_08_18_063557_create_brands_table', 3),
(6, '2021_08_21_152516_create_products_table', 4),
(7, '2021_08_29_072651_create_shoppingcart_table', 5),
(8, '2021_09_01_022438_create_customers_table', 5),
(9, '2021_09_01_153004_create_shippings_table', 6),
(10, '2021_09_01_164753_create_orders_table', 7),
(11, '2021_09_01_165056_create_payments_table', 7),
(12, '2021_09_01_165425_create_order_details_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 10, 2, 152000.00, 'Pending', '2021-09-01 11:46:34', '2021-09-01 11:46:34'),
(2, 1, 3, 87000.00, 'Pending', '2021-09-02 09:08:54', '2021-09-02 09:08:54'),
(3, 1, 3, 250000.00, 'Pending', '2021-09-02 09:10:50', '2021-09-02 09:10:50'),
(4, 5, 4, 500000.00, 'Pending', '2021-09-03 23:18:25', '2021-09-03 23:18:25'),
(5, 11, 5, 1500000.00, 'Pending', '2022-07-15 11:12:15', '2022-07-15 11:12:15'),
(6, 13, 6, 9000.00, 'Pending', '2022-07-31 02:00:54', '2022-07-31 02:00:54'),
(7, 15, 7, 2334000.00, 'Pending', '2022-07-31 04:53:46', '2022-07-31 04:53:46'),
(8, 15, 8, 2334000.00, 'Pending', '2022-07-31 04:58:59', '2022-07-31 04:58:59'),
(9, 15, 8, 2334000.00, 'Pending', '2022-07-31 04:59:10', '2022-07-31 04:59:10'),
(10, 15, 8, 2334000.00, 'Pending', '2022-07-31 05:01:19', '2022-07-31 05:01:19'),
(11, 15, 8, 2334000.00, 'Pending', '2022-07-31 05:01:48', '2022-07-31 05:01:48'),
(12, 15, 8, 2334000.00, 'Pending', '2022-07-31 06:30:59', '2022-07-31 06:30:59'),
(13, 15, 8, 70000.00, 'Pending', '2022-07-31 10:33:14', '2022-07-31 10:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 'white-coat', 3500.00, 2, '2021-09-01 11:46:34', '2021-09-01 11:46:34'),
(2, 1, 5, 'RFL', 35000.00, 2, '2021-09-01 11:46:34', '2021-09-01 11:46:34'),
(3, 1, 3, 'Yahma-100', 25000.00, 3, '2021-09-01 11:46:34', '2021-09-01 11:46:34'),
(4, 2, 3, 'Yahma-100', 25000.00, 3, '2021-09-02 09:08:55', '2021-09-02 09:08:55'),
(5, 2, 15, 'pod-1', 150000.00, 8, '2021-09-02 09:08:55', '2021-09-02 09:08:55'),
(6, 3, 10, 'fz-150', 250000.00, 1, '2021-09-02 09:10:50', '2021-09-02 09:10:50'),
(7, 4, 17, 'Yahma-200', 250000.00, 2, '2021-09-03 23:18:25', '2021-09-03 23:18:25'),
(8, 5, 9, 'Apple', 1500000.00, 1, '2022-07-15 11:12:15', '2022-07-15 11:12:15'),
(9, 6, 14, 'short-skart', 3000.00, 3, '2022-07-31 02:00:54', '2022-07-31 02:00:54'),
(10, 10, 14, 'short-skart', 3000.00, 3, '2022-07-31 05:01:19', '2022-07-31 05:01:19'),
(11, 10, 11, 'mecendise', 150000.00, 1, '2022-07-31 05:01:19', '2022-07-31 05:01:19'),
(12, 10, 3, 'Yahma-100', 25000.00, 3, '2022-07-31 05:01:20', '2022-07-31 05:01:20'),
(13, 10, 1, 'Hp-coreI5', 1000000.00, 2, '2022-07-31 05:01:20', '2022-07-31 05:01:20'),
(14, 10, 13, 'I-phone', 100000.00, 1, '2022-07-31 05:01:20', '2022-07-31 05:01:20'),
(15, 13, 5, 'RFL', 35000.00, 2, '2022-07-31 10:33:14', '2022-07-31 10:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('choiceonline84@gmail.com', '$2y$10$NO1EaTeqvEftwj0EraMMrOJhFEMmLohgOMmkHEFrB83cHTZchbG4q', '2021-09-12 06:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2021-09-01 11:46:34', '2021-09-01 11:46:34'),
(2, 2, 'Cash', 'Pending', '2021-09-02 09:08:54', '2021-09-02 09:08:54'),
(3, 3, 'Cash', 'Pending', '2021-09-02 09:10:50', '2021-09-02 09:10:50'),
(4, 4, 'Cash', 'Pending', '2021-09-03 23:18:25', '2021-09-03 23:18:25'),
(5, 5, 'Cash', 'Pending', '2022-07-15 11:12:15', '2022-07-15 11:12:15'),
(6, 6, 'Cash', 'Pending', '2022-07-31 02:00:54', '2022-07-31 02:00:54'),
(7, 10, 'Cash', 'Pending', '2022-07-31 05:01:19', '2022-07-31 05:01:19'),
(8, 11, 'Cash', 'Pending', '2022-07-31 05:01:48', '2022-07-31 05:01:48'),
(9, 12, 'Cash', 'Pending', '2022-07-31 06:30:59', '2022-07-31 06:30:59'),
(10, 13, 'Cash', 'Pending', '2022-07-31 10:33:14', '2022-07-31 10:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,3) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 'Hp-coreI5', 1000000.000, 6, 'Very long lasting laptop', '<p>I like it so much for design</p>', 'product-image/Hp-coreI5.jpg', 1, '2021-08-23 09:24:29', '2021-12-04 04:29:37'),
(2, 1, 7, 'swift', 1500002.000, 5, '5 Luxurious New Model Cars Available Right Now - Fastest Cars On the Market', '<h1>WEIRDEST CAR</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>SUNDAY, JUNE 6, 2010</h2>\r\n\r\n<p><a name=\"5535024921855850920\"></a></p>\r\n\r\n<h3>2010 latest cars</h3>\r\n\r\n<p>&nbsp;</p>', 'product-image/swift.jpg', 1, '2021-08-23 09:38:34', '2021-12-04 04:29:49'),
(3, 6, 8, 'Yahma-100', 25000.000, 10, 'very nice', '<p>I like it</p>', 'product-image/self.jpg', 1, '2021-08-23 09:41:16', '2021-08-26 20:09:46'),
(4, 2, 6, 'Hp', 50000.000, 5, 'HP laptop to make the best possible performance', '<p>Having an issue with your&nbsp;<strong>HP laptop drivers</strong>&nbsp;and longing to update the drivers in your HP laptop to make the best possible performance? You&rsquo;ve come to the right place! This post will show you how to download or update your HP laptop drivers quickly and easily.</p>', 'product-image/Hp.png', 1, '2021-08-23 09:47:56', '2021-08-23 09:47:56'),
(5, 4, 2, 'RFL', 35000.000, 25, 'RFL Plastics: The Largest Plastic Company in Bangladesh', '<h2>What is the difference between copyright and privacy?</h2>\r\n\r\n<p>Just because you appear in a video, image or audio recording does not mean that you own the copyright to it. For example, if your friend took a picture of you, she would own the copyright to the image that she took. If your friend, or someone else, uploaded a video, image or recording of you without your permission, and you feel it violates your privacy or safety, you may wish to&nbsp;</p>', 'product-image/RFL.jpg', 1, '2021-08-23 09:56:50', '2021-08-23 09:56:50'),
(6, 2, 15, 'lenovo', 700000.000, 15, 'Very nice', '<p>Looks awesome</p>', 'product-image/lenovo.jpg', 1, '2021-08-24 08:41:35', '2021-08-24 08:41:35'),
(7, 10, 17, 'T-shirt', 1500.000, 15, 'Very good', '<p>Digital women like it so much</p>', 'product-image/T-shirt.jpg', 0, '2021-08-24 23:21:33', '2022-07-31 10:36:00'),
(8, 8, 16, 'softtech', 50000.000, 30, 'Very Inteligent drone', '<p>To find out use it</p>', 'product-image/softtech.jpg', 1, '2021-08-24 23:23:46', '2021-08-24 23:23:46'),
(9, 7, 19, 'Apple', 1500000.000, 45, 'Very taskable', '<p>I like so much</p>', 'product-image/Apple.jpg', 1, '2021-08-24 23:26:03', '2021-08-24 23:26:03'),
(10, 6, 13, 'fz-150', 250000.000, 150, 'A Good Bike Name', '<p>I like it</p>', 'product-image/fz-150.jpg', 1, '2021-08-26 20:19:18', '2022-07-31 10:36:06'),
(11, 1, 14, 'mecendise', 150000.000, 20, 'Stylish car', '<p>Looks awesome car</p>', 'product-image/mecendise.jpg', 1, '2021-08-26 20:29:25', '2021-08-27 07:35:56'),
(12, 1, 14, 'bmw', 5000000.000, 12, 'nice car', '<p>very ambicous car</p>', 'product-image/bmw.jpg', 1, '2021-08-26 20:32:12', '2021-08-26 20:32:12'),
(13, 3, 19, 'I-phone', 100000.000, 25, 'nice it', '<p>I like it</p>', 'product-image/I-phone.jpg', 1, '2021-08-26 20:33:50', '2021-08-26 20:33:50'),
(14, 10, 18, 'short-skart', 3000.000, 23, 'today stylish girls like it', '<p>This wear of weastern girls coat</p>', 'product-image/short-skart.png', 1, '2021-08-26 20:37:19', '2021-08-26 20:37:19'),
(15, 10, 17, 'pod-1', 1500.000, 50, 'womens like it', '<p>today fashionable like it so much</p>', 'product-image/pod-1.png', 1, '2021-08-26 20:39:11', '2021-08-26 20:39:11'),
(16, 10, 18, 'white-coat', 3500.000, 45, 'A likeable white coat', '<p>this is western packet</p>', 'product-image/white-coat.jpg', 1, '2021-08-26 20:44:26', '2021-08-26 20:44:26'),
(17, 6, 8, 'Yahma-200', 250000.000, 25, 'A fashonable bike', '<p>i like it</p>', 'product-image/Yahma-200.jpg', 1, '2021-08-26 20:49:46', '2021-08-26 20:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'karim Khan', 'fsjhilmil84@gmail.com', '01855479190', 'dhaka', '2021-09-01 09:59:36', '2021-09-01 09:59:36'),
(2, 'Arafat Khan', 'super84@yahoo.com', '01855479190', 'Noakhali, Khasher Hat', '2021-09-01 10:25:10', '2021-09-01 10:25:10'),
(3, 'karim khan', 'mdsayedarif84@gmail.com', '01855479190', 'Noakhali,keranibazar', '2021-09-02 09:04:20', '2021-09-02 09:04:20'),
(4, 'Rahim Khan', 'fsjhilmil84@gmail.com', '01634173029', 'dhaka', '2021-09-03 23:18:17', '2021-09-03 23:18:17'),
(5, 'Asuly moon', 'asulymoon84@gmail.com', '01866554587', 'Dhaka', '2022-07-15 11:09:35', '2022-07-15 11:09:35'),
(6, 'Short Learning', 'shortlearning84@gmail.com', '43434343', 'Dhaka', '2022-07-31 01:56:45', '2022-07-31 01:56:45'),
(7, 'test Learning', 'test84@gmail.com', '556465447', 'CTG', '2022-07-31 04:53:07', '2022-07-31 04:53:07'),
(8, 'test Learning', 'test84@gmail.com', '556465447', 'CTG', '2022-07-31 04:56:06', '2022-07-31 04:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `auth_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Choice Online', 'choiceonline84@gmail.com', NULL, '$2y$10$DgUwxq3YyFiGoF9Vd/L2RuimQMTpGA/Ay4lOsJNmZB6dM6aBLC.sW', 'admin', NULL, '2021-08-12 22:40:16', '2021-08-12 22:40:16'),
(2, 'Choice Online2', 'choiceonline2@gmail.com', NULL, '$2y$10$kr3wVisSrk/iGb3c3mJrneMBR734l23wko3q2P4pwBGLknijWiiNm', '', NULL, '2021-08-12 23:07:54', '2021-08-12 23:07:54'),
(3, 'MD .Sayed Arif', 'mdsayedarif84@gmail.com', NULL, '$2y$10$xWER5ft4ftsXT6WWe7t90.srmB2KG7UNRe14.VyQ7oyxxP7wJ5Sum', 'admin', 'fZL18YGOjvNcdqKTmFHoU64ldasdCktndRhh11Hfod4y2vaSQKyG6FqxgifZ', '2021-09-12 06:57:40', '2022-09-20 11:15:48'),
(4, 'Fariya Islam', 'mdsayedarif84@yahoo.com', NULL, '$2y$10$2C3eyASuANuNZQNntAKiZ.BrHHHPjtU2DDUUrT/DTsh1T7FLOlc46', '', 'IWHcC43HWZW30e2ck53Bw9XRwsxNTZ4s55dXNuBRxeaILn3eHg3uGr7bgyuh', '2021-09-13 05:38:13', '2021-09-13 05:53:47'),
(5, 'Choice Online', 'choice_online84@gmail.com', NULL, '$2y$10$ZoKQWnJ27bcbUets1ooIjeqVAmy0nnufsTIWmmHKv3XQ5J7mugu9S', '', NULL, '2021-12-11 22:30:26', '2021-12-11 22:30:26'),
(6, 'Fabin', 'fabin84@yahoo.com', NULL, '$2y$10$msMQ5Dymkwy15W/h8/.EZuSgTqP9tYAUkMSZVEtg5Lvj/ol8ogw9i', 'user', NULL, '2022-07-15 10:32:49', '2022-07-15 10:32:49'),
(7, 'Reuben Goodwin DDS', 'salvatore97@example.net', NULL, 'eyJpdiI6ImlacVpFWEFjWVpHb3ZXUWVWTExRNWc9PSIsInZhbHVlIjoiWFFyUkhjdDZQdk41OGZ1Ulk3cDZqUT09IiwibWFjIjoiZWYyOGVjYjdkNjE1YzdmMWVjMzU2MTAwZDE1MjJiMzViYjIxMmM3Njg3NThjODE3NGI4MWZjYzcyZDAwNjdhZSIsInRhZyI6IiJ9', '', NULL, '2022-01-22 02:14:30', NULL),
(8, 'Ignacio Keeling', 'joana45@example.com', NULL, 'eyJpdiI6IlJsOS9pdGV2SzFTb0Y0VThnV2IvTEE9PSIsInZhbHVlIjoiNHJoMzhJb3ZBRHBOL2JxSDA5Y3pGdz09IiwibWFjIjoiN2U4YWNiMzU4ZDE4ODNiYzVhOTAxODE2OTVlZDJmNzNlNmI3OTljNmE0NzQwNTZmMDJmYzNhNTVkYzlhMjEzZCIsInRhZyI6IiJ9', '', NULL, '2022-07-05 12:41:22', NULL),
(9, 'Harmony Murray', 'hartmann.iliana@example.org', NULL, 'eyJpdiI6ImZCaUVRWUJ6bkFvL21FREl3UkFjaUE9PSIsInZhbHVlIjoiT0VSZUlwUFNXRVpwdkIvdnFSMGZGUT09IiwibWFjIjoiYTFlODJiMDBiNzBhNDVlODEyYmNjNWRkNjMyYzkwZDExZTRhNGM1YmU3OWY1NzBhN2YxZmQyMWRmNTNmMTgyNCIsInRhZyI6IiJ9', '', NULL, '2022-07-10 06:58:20', NULL),
(10, 'Miss Teagan Casper', 'varmstrong@example.com', NULL, 'eyJpdiI6Im90L1MwKzRaYWJXTmhGbUo5c0ZSRlE9PSIsInZhbHVlIjoiUXVVTCtOU0Y5YSt2K1dDbEhKR1l4QT09IiwibWFjIjoiMDAwZmQzMzkxZjBiYTE3ZTAwNTNjMDdkODZkYmFlYjVjY2NhZDAzMWMzZTA1Y2Q0MmFkOTcxNGExNmY1MjA2ZCIsInRhZyI6IiJ9', '', NULL, '2022-05-15 16:33:21', NULL),
(11, 'Katarina Dach', 'vcorwin@example.com', NULL, 'eyJpdiI6ImRCOWJVME83dTQyVlFaL0t6Zy9wanc9PSIsInZhbHVlIjoidHVzYlUxNHhwclQ5eGYrL3hLQXdVUT09IiwibWFjIjoiMGIzYTdiMzY5NzEwMmI0ZWUxMjM3Y2Y3MDc4MDU0YmE0ZDlhODlkNDcxYTlhODY5YmNmMGVjYTQ2NjljYTI0ZSIsInRhZyI6IiJ9', '', NULL, '2022-08-13 01:59:21', NULL),
(12, 'Sam Bartoletti', 'padberg.clara@example.org', NULL, 'eyJpdiI6ImszR0JDQVpiWVdCV1kwSldDd3ZPdHc9PSIsInZhbHVlIjoicWwwV2paN1FPQ3VwMDdkSjJwd0pXQT09IiwibWFjIjoiNjU5OTkwYTc4OWQzOWU3YTRiNzI2MDU2OWU2OGVhODhjZGMzZTc2ZjBiOGE1ZjVlOGE3NzU4MzJhZGQ4MTFhNCIsInRhZyI6IiJ9', '', NULL, '2022-03-05 04:49:03', NULL),
(13, 'Maxine Lind', 'casimir.rogahn@example.net', NULL, 'eyJpdiI6Ik96dmRZVFAwa2tyV1RZOUdNeFo1S1E9PSIsInZhbHVlIjoiSndHb1pEMnlxUHNZQ1FPbkJFT0FMQT09IiwibWFjIjoiMDUwMjRiM2E1NDlhOWY0OGZkYzM2YzE0NmU0YmFlOWRlODNiZTI3NjViYzhmNTllZGZjYjk4NzA2YjU5MjVhMSIsInRhZyI6IiJ9', '', NULL, '2022-07-18 21:28:50', NULL),
(14, 'Ambrose Conroy DVM', 'schowalter.alvera@example.net', NULL, 'eyJpdiI6Imx3NUN2NUczRnp6NmtXajdZWG03c3c9PSIsInZhbHVlIjoicVVKK1Z4QlBJWkc2ZVpFa1pUbStaQT09IiwibWFjIjoiYWFkYWI0YTBiMTU3MzE2Mjc5ZTVjZjcxMzQ3NDEzNTIxZDEyYTNkYTM4Y2ZkMjE1ZWFhMDgzMGExY2FmNmU5OCIsInRhZyI6IiJ9', '', NULL, '2022-03-12 16:47:11', NULL),
(15, 'Drake Botsford', 'willis34@example.org', NULL, 'eyJpdiI6IkIxcWZ3STUybmJxMVpob0pxbkQxZFE9PSIsInZhbHVlIjoibDRDNTVCU2l2aHBxSzZYWEd5SHh1dz09IiwibWFjIjoiMzc2OGU2NDJlZTY0N2U2ZWRiMGM1ZThjMTYwZjFmNGYxNzZiNzQxMDI5YTYyMzBlM2NmYmJhODliOTI2YzU1MiIsInRhZyI6IiJ9', '', NULL, '2022-04-12 06:16:15', NULL),
(16, 'Arlie Dickens II', 'hane.carolyne@example.net', NULL, 'eyJpdiI6ImlCV28xa0V1dWhjWVQvdldIRW5wWUE9PSIsInZhbHVlIjoiY3pnd0VRTjBySTlQSzRLTTJEYW5wQT09IiwibWFjIjoiN2IxY2JiNDM5ZThhZGY3OGNhYmRjMGJjMzE5MmJkMWYwY2IzZjVmOGE1MDQ2MTlhYTEzMWI1YjE5YjQxYTg5MSIsInRhZyI6IiJ9', '', NULL, '2022-01-22 10:20:55', NULL),
(17, 'Araf Islam', 'arafislam84@gmail.com', NULL, '$2y$10$Jpugp9w.mdI2aANoG2xodei5QqR8BOFFAlxRGGMD3pB/yZUx9a3Gy', 'user', NULL, '2022-09-21 02:22:43', '2022-09-21 02:22:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
