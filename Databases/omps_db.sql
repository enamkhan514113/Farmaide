-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2023 at 09:21 PM
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
-- Database: `omps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `description`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(7, 'Vegetables-শাক সবজী', 'All the Daily Vegetables Should be lies in this Category. The Measuring Unit of the item Should be mention in description.\r\nসমস্ত দৈনিক শাকসবজির বিজ্ঞাপন এই বিভাগে দিতে হবে। আইটেমগুলোর পরিমাপের একক পণ্যের বর্ননায় উল্লেখ থাকতে হবে।', 1, 0, '2023-07-30 23:33:35', '2023-08-04 10:59:54'),
(8, 'Farmaide Special Kit-ফার্মেইড স্পেশাল কিট', 'These Kits are specially made for farmer to facilitate their farming.\r\nএই কিটগুলি বিশেষভাবে কৃষকদের জন্য তাদের চাষের সুবিধার্থে তৈরি করা হয়েছে।', 1, 0, '2023-08-02 13:27:46', '2023-08-04 11:02:02'),
(9, 'Seasonal Fruits-মৌসুমি ফল', 'All the Seasonal Fruits Should be lies in this Category. The Measuring Unit of the item Should be mention in description.\r\nসমস্ত মৌসুমি ফলের বিজ্ঞাপন এই বিভাগে দিতে হবে। আইটেমগুলোর পরিমাপের একক পণ্যের বর্ননায় উল্লেখ থাকতে হবে।', 1, 0, '2023-08-04 12:39:59', '2023-08-04 12:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `title` text NOT NULL,
  `category_id` int(30) NOT NULL,
  `short_description` text NOT NULL,
  `selling_price` float(15,2) NOT NULL DEFAULT 0.00,
  `stock` int(10) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Available, 0=Soldout',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `user_id`, `title`, `category_id`, `short_description`, `selling_price`, `stock`, `status`, `date_created`, `date_updated`) VALUES
(6, 4, 'Cucumber-শশা', 7, '', 15.00, 20, 1, '2023-08-02 12:00:03', '2023-08-24 13:13:11'),
(7, 6, 'Soil Moisture Sensor-মাটির আদ্রতা পরীক্ষণ সেন্সর', 8, 'This Kit Helps you to check the moisture level of soil and automatically produce water.', 1500.00, 95, 1, '2023-08-02 13:35:35', '2023-09-03 23:04:53'),
(8, 4, 'Gourd-লাউ', 7, '', 50.00, 23, 1, '2023-08-03 00:29:41', '2023-08-03 00:38:49'),
(9, 7, 'Cucumber-শশা', 7, '', 22.00, 40, 1, '2023-08-03 00:47:22', '2023-08-24 13:13:11'),
(10, 6, 'Irrigation Robocar-সেচ রোবোকার', 8, '', 4000.00, 0, 1, '2023-09-03 23:06:14', '2023-09-03 23:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `seller_meta`
--

CREATE TABLE `seller_meta` (
  `user_id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_meta`
--

INSERT INTO `seller_meta` (`user_id`, `meta_field`, `meta_value`) VALUES
(4, 'contact', '01773444729'),
(4, 'email', 'commonroomedf@gmail.com'),
(4, 'website', ''),
(4, 'fb_link', ''),
(6, 'contact', '01952763885'),
(6, 'email', 'enamkhan514113@gmail.com'),
(6, 'website', ''),
(6, 'fb_link', ''),
(7, 'contact', '01983091400'),
(7, 'email', 'sadia180116@diit.info'),
(7, 'website', ''),
(7, 'fb_link', '');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Farmaide Marketplace'),
(2, 'namebangla', 'ফার্মেইড মার্কেটপ্লেইস'),
(3, 'short_nameb', 'মার্কেটপ্লেইস'),
(6, 'short_name', 'Marketplace'),
(11, 'logo', 'uploads/568436.png?v=1649727378'),
(14, 'cover', 'uploads/38582727.png?v=1649727378');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Admin,\r\n2 = Seller\r\n',
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `type`, `last_login`, `date_added`, `date_updated`) VALUES
(1, 'Administrator', '', 'Admin', 'admin', '$2y$10$n2s5dbrCwxWa7i6Fr/U44O8miS9d9zB07ZQbGzrFg4LLu6rPTdFkq', 'uploads/users/avatar-1.png?v=1690961005', 1, '2022-03-30 03:48:55', '2022-03-30 09:49:16', '2023-08-02 13:23:25'),
(4, 'Enam', '', 'Khan', 'enam', '$2y$10$OW4.O5xZcNy4bLCsvLnsaeq1zTj52vSoR8iu4nTD/zMffmLFeNtAG', 'uploads/users/avatar-4.png?v=1691130610', 2, NULL, '2023-08-02 11:48:57', '2023-08-04 12:30:10'),
(6, 'Farmaide', '', 'Officials', 'foadmin', '$2y$10$idV2DEk2eg5vKHMCf9RXde/FtBw0iyrzWSLpDgHJjaTNLBu5.55dW', 'uploads/users/Avatar.png?v=1690961486', 2, NULL, '2023-08-02 13:31:26', '2023-08-02 16:04:07'),
(7, 'Farha', 'Afrin', 'Sadia', 'farha', '$2y$10$yIdzW3XdEL7R6BCl5TccJuuXKKp4PB0gkHM1s/E.b9GE3XW/6eVgi', 'uploads/users/avatar-7.png?v=1691130447', 2, NULL, '2023-08-03 00:45:42', '2023-08-04 12:27:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `seller_meta`
--
ALTER TABLE `seller_meta`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
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
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `product_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `seller_meta`
--
ALTER TABLE `seller_meta`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
