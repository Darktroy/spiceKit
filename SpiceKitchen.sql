-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2019 at 05:47 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SpiceKitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg_images`
--

CREATE TABLE `bg_images` (
  `bgImages_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bgImages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg_images`
--

INSERT INTO `bg_images` (`bgImages_id`, `created_at`, `updated_at`, `bgImages`) VALUES
(2, NULL, NULL, '01.jpg'),
(3, NULL, NULL, '02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `contactUsid` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4,
  `phone` int(191) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`contactUsid`, `created_at`, `updated_at`, `message`, `phone`, `name`, `email`) VALUES
(3, '2019-02-05 04:46:27', '2019-02-05 04:46:27', 'qw3fev', 1002433739, 'Iessa darktroy', 'eng.iessa.mostafa@gmail.com'),
(4, '2019-02-05 04:46:54', '2019-02-05 04:46:54', 'AWEVFQ3GQERWBGWEQARGAQERGAWREG', 1002433739, 'Iessa darktroy', 'eng.iessa.mostafa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `galleryId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`galleryId`, `created_at`, `updated_at`, `image`) VALUES
(3, '2019-01-24 10:17:00', '2019-01-24 10:17:00', 'menuItems1548332220.png'),
(4, '2019-01-25 14:59:29', '2019-01-25 14:59:29', 'menuItems1548435569.png'),
(5, '2019-01-25 14:59:47', '2019-01-25 14:59:47', 'menuItems1548435587.png'),
(6, NULL, NULL, 'g01.jpg'),
(7, NULL, NULL, 'g02.jpg'),
(8, NULL, NULL, 'g03.jpg'),
(9, NULL, NULL, 'g05.jpg'),
(10, NULL, NULL, 'g06.jpg'),
(11, NULL, NULL, 'g07.jpg'),
(12, NULL, NULL, 'g08.jpg'),
(13, NULL, NULL, 'g09.jpg'),
(14, NULL, NULL, 'g10.jpg'),
(15, NULL, NULL, 'g11.jpg'),
(16, '2019-01-27 01:53:04', '2019-01-27 01:53:04', 'menuItems1548561184.png'),
(17, '2019-01-27 02:09:15', '2019-01-27 02:09:15', 'menuItems1548562155.png');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `homepageid` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p2` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`homepageid`, `created_at`, `updated_at`, `p1`, `p2`, `title`) VALUES
(1, NULL, '2019-02-07 01:50:48', 'Welcome to The Spice Kitchen! As\r\nhistory puts it, the Hakkas who left\r\nSouthern China and settled in India\r\nloved eating the local spices and\r\nincorporated it with their cooking\r\nstyle since the early 19th century.', 'An authentic Indian-Chinese,\r\nIndian and Thai restaurant where\r\ntraditional Hakka recipes infused\r\nwith Indian spices take dishes to\r\nanother level of culinary delights\r\nand set to tickle your palate with', 'Hi There');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `created_at`, `updated_at`) VALUES
(1, 'Starters', '2019-02-08 05:37:31', '0000-00-00 00:00:00'),
(2, 'Soup', '2019-02-08 05:37:39', '0000-00-00 00:00:00'),
(3, 'Indian Main Cuisine', '2019-02-09 03:28:26', '0000-00-00 00:00:00'),
(4, 'Indian Chinese Cuisine', '2019-02-09 03:28:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `menuItemsId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menutypeId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemDescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(3) NOT NULL,
  `memberprice` int(2) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenuid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`menuItemsId`, `created_at`, `updated_at`, `image`, `title`, `menutypeId`, `itemDescription`, `price`, `memberprice`, `menu_id`, `submenuid`) VALUES
(1, NULL, '2019-01-24 05:22:44', NULL, 'title test 2 up', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(2, '2019-01-24 07:38:45', '2019-01-24 07:38:45', 'menuItems1548322725.png', 'title 2', '1', 'item description 2', 23, 0, 1, NULL),
(3, '2019-01-24 07:39:52', '2019-01-24 07:39:52', 'menuItems1548322792.png', 'title ..3', '1', 'item description 3', 14, 0, 2, NULL),
(4, '2019-01-24 07:40:06', '2019-01-24 07:40:06', 'menuItems1548322806.png', 'title 4', '2', 'item description 4', 52, 0, 1, NULL),
(5, '2019-01-24 07:40:27', '2019-01-24 07:40:27', 'menuItems1548322827.png', 'title 5', '2', 'item description 5', 8, 0, 2, NULL),
(11, '2019-01-24 07:41:30', '2019-01-24 07:41:30', 'menuItems1548322890.png', 'title ..test 11', '2', 'item description testitem description testitem description testitem description test 11', 30, 0, 2, NULL),
(12, '2019-01-24 07:38:45', '2019-01-24 07:38:45', 'menuItems1548322725.png', 'title 2 menu type 3', '3', 'item description 2', 23, 0, 2, NULL),
(14, '2019-01-24 07:40:06', '2019-01-24 07:40:06', 'menuItems1548322806.png', 'title 4 menu type 3', '3', 'item description 4', 52, 0, 2, NULL),
(20, '2019-01-24 07:41:30', '2019-01-24 07:41:30', 'menuItems1548322890.png', 'title ..test 10 menu type 3', '3', 'item description testitem description testitem description testitem  menu type 3 description test 10', 46, 0, 2, NULL),
(22, '2019-01-30 00:53:37', '2019-01-30 01:05:49', NULL, '30', '1', '130', 15, 0, 1, NULL),
(23, NULL, '2019-01-24 05:22:44', NULL, 'title test 2 up3', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(24, NULL, '2019-01-24 05:22:44', NULL, 'title test 2 u4p3', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(25, NULL, '2019-01-24 05:22:44', NULL, 'title test 5', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(26, NULL, '2019-01-24 05:22:44', NULL, 'title test665', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(27, NULL, '2019-01-24 05:22:44', NULL, 'title test62265', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(28, NULL, '2019-01-24 05:22:44', NULL, 'title 55', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(29, NULL, '2019-01-24 05:22:44', NULL, 'title test 2 up', '1', 'description ,efokmjv test', 5, 0, 1, NULL),
(30, '2019-02-09 05:35:58', '2019-02-09 05:35:58', NULL, 'qewdtitle ...', '1', 'Description ...qwacd', 3, 9, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_types`
--

CREATE TABLE `menu_types` (
  `menuTypeId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_types`
--

INSERT INTO `menu_types` (`menuTypeId`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'Left Menu'),
(2, NULL, NULL, 'Middle Menu'),
(3, NULL, NULL, 'Right Menu');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `submenuid` int(3) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_name` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`submenuid`, `menu_id`, `submenu_name`, `created_at`, `updated_at`) VALUES
(1, 3, 'Lamb Dishes', '2019-02-09 03:40:48', '0000-00-00 00:00:00'),
(2, 3, 'SeaFood Dishes', '2019-02-09 03:40:48', '0000-00-00 00:00:00'),
(3, 3, 'Vegetarian Dishes', '2019-02-09 03:41:23', '0000-00-00 00:00:00'),
(4, 4, 'Vegetable Dishes', '2019-02-09 03:41:23', '0000-00-00 00:00:00'),
(5, 4, 'Chicken Dishes', '2019-02-09 03:41:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', NULL, '$2y$10$HHCQcZHGyPmhzPkSLuMc3OMgLkjgJ76WNsv/WPp6zC7pwUc29yztC', 'UWfoFfcdiiVdWKQSNCZwM2fcDedKXwoobteCVMbjPFAWcqVeULkKc54I7C8O', '2019-01-23 03:35:59', '2019-01-23 03:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg_images`
--
ALTER TABLE `bg_images`
  ADD PRIMARY KEY (`bgImages_id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`contactUsid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`galleryId`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`homepageid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`menuItemsId`);

--
-- Indexes for table `menu_types`
--
ALTER TABLE `menu_types`
  ADD PRIMARY KEY (`menuTypeId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`submenuid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg_images`
--
ALTER TABLE `bg_images`
  MODIFY `bgImages_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `contactUsid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `galleryId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `homepageid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `menuItemsId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menu_types`
--
ALTER TABLE `menu_types`
  MODIFY `menuTypeId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `submenuid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
