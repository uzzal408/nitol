-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 04:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nitolelectronics_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_medium` double(10,2) DEFAULT NULL,
  `price_personal` double(10,2) DEFAULT NULL,
  `price_family` double(10,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(11) NOT NULL,
  `attachment_id` int(11) NOT NULL,
  `attachment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storeLocator` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `order` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `storeLocator`, `image`, `publication_status`, `parent_id`, `order`, `created_at`, `updated_at`) VALUES
(2, 'TELEVISION', NULL, NULL, 'attached_images/categories/2/2-megamenu_digital_electronics_1.jpg', 1, '0', 1, '2019-01-15 20:21:57', '2019-04-09 00:15:23'),
(12, 'AUDIO SYSTEM', NULL, NULL, NULL, 0, '0', 1, '2019-01-26 17:42:09', '2019-04-08 22:36:41'),
(13, 'Smart LED TV', NULL, NULL, NULL, 1, '2', 1, '2019-01-26 17:43:36', '2019-04-08 22:35:13'),
(14, 'Basic LED TV', NULL, NULL, NULL, 1, '2', 1, '2019-01-26 17:43:50', '2019-10-13 02:52:31'),
(15, '30inch - 40inch', NULL, NULL, NULL, 1, '13', 1, '2019-01-26 18:09:52', '2019-04-08 22:53:46'),
(16, '23inch - 29inch', 'For Basic Led TV', NULL, NULL, 1, '14', 1, '2019-01-26 18:10:02', '2019-10-16 04:00:43'),
(17, '47inch - 55inch', NULL, NULL, NULL, 1, '13', 1, '2019-01-26 18:13:11', '2019-04-08 22:54:36'),
(18, '30inch - 40inch', NULL, NULL, NULL, 1, '14', 2, '2019-01-26 18:13:19', '2019-04-08 23:01:01'),
(19, 'AIR CONDITIONAR', NULL, NULL, 'attached_images/categories/19/megamenu_kid_toy_1.jpg', 1, '0', 3, '2019-04-07 03:44:02', '2019-04-08 23:34:51'),
(21, 'HOME APPLIANCES', NULL, NULL, 'attached_images/categories/21/2-megamenu_furniture_home_decors_1.jpg', 1, '0', 1, '2019-04-07 03:44:58', '2019-04-09 00:17:22'),
(22, 'REFRIGERATOR', NULL, NULL, NULL, 1, '0', 1, '2019-04-07 03:45:20', '2019-10-27 23:45:17'),
(23, 'FREEZER', NULL, NULL, NULL, 1, '0', 1, '2019-04-07 03:45:44', '2019-10-27 23:57:29'),
(24, 'SPLITE TYPE', NULL, NULL, NULL, 1, '19', NULL, '2019-04-08 23:04:10', '2019-04-08 23:04:10'),
(25, 'Ceiling Mounted Type', NULL, NULL, NULL, 1, '19', NULL, '2019-04-08 23:05:11', '2019-04-08 23:05:11'),
(26, 'CASSETTE TYPE', NULL, NULL, NULL, 1, '19', NULL, '2019-04-08 23:05:35', '2019-04-08 23:05:35'),
(27, 'RICE COOKER', NULL, NULL, NULL, 1, '21', NULL, '2019-04-08 23:06:58', '2019-04-08 23:06:58'),
(28, 'MULTI COOKER', NULL, NULL, NULL, 1, '21', NULL, '2019-04-08 23:07:14', '2019-04-08 23:07:14'),
(29, 'MICROWAVE', NULL, NULL, NULL, 1, '21', NULL, '2019-04-08 23:07:36', '2019-04-08 23:07:36'),
(30, 'KETTLE', NULL, NULL, NULL, 1, '21', NULL, '2019-04-08 23:08:03', '2019-04-08 23:08:03'),
(31, 'HandMixer', NULL, NULL, NULL, 1, '21', 1, '2019-04-08 23:08:22', '2019-09-19 01:12:31'),
(32, 'BLENDER', NULL, NULL, NULL, 1, '21', NULL, '2019-04-08 23:08:45', '2019-04-08 23:08:45'),
(33, '150 Ltr. - 200 Ltr.', NULL, NULL, NULL, 1, '22', NULL, '2019-04-09 00:51:11', '2019-04-09 00:51:11'),
(34, '150 Ltr. - 200 Ltr.', NULL, NULL, NULL, 1, '23', NULL, '2019-04-09 00:51:18', '2019-04-09 00:51:18'),
(35, '215 Ltr. - 300 Ltr.', NULL, NULL, NULL, 1, '22', NULL, '2019-04-09 00:51:59', '2019-04-09 00:51:59'),
(36, '215 Ltr. - 300 Ltr.', NULL, NULL, NULL, 1, '23', NULL, '2019-04-09 00:52:07', '2019-04-09 00:52:07'),
(37, '310 Ltr. - 400 Ltr.', NULL, NULL, NULL, 1, '22', NULL, '2019-04-09 00:52:31', '2019-04-09 00:52:31'),
(38, '310 Ltr. - 400 Ltr.', NULL, NULL, NULL, 1, '23', NULL, '2019-04-09 00:52:42', '2019-04-09 00:52:42'),
(39, '1.0 ton - 2.0 ton', NULL, NULL, NULL, 1, '24', 1, '2019-04-09 00:53:45', '2019-09-18 23:40:06'),
(40, '1.0 ton - 2.0 ton', NULL, NULL, NULL, 1, '25', 1, '2019-04-09 00:53:58', '2019-09-18 23:41:31'),
(41, '1.0 ton - 2.0 ton', NULL, NULL, NULL, 1, '26', 1, '2019-04-09 00:54:11', '2019-09-18 23:41:11'),
(42, '3.0 ton - 4.0 ton', NULL, NULL, NULL, 1, '24', NULL, '2019-04-09 00:54:29', '2019-04-09 00:54:29'),
(43, '3.0 ton - 4.0 ton', NULL, NULL, NULL, 1, '25', NULL, '2019-04-09 00:54:47', '2019-04-09 00:54:47'),
(44, '3.0 ton - 4.0 ton', NULL, NULL, NULL, 1, '26', NULL, '2019-04-09 00:54:58', '2019-04-09 00:54:58'),
(45, '5.0 ton - 5.5 ton', NULL, NULL, NULL, 1, '24', NULL, '2019-04-09 00:55:19', '2019-04-09 00:55:19'),
(46, '5.0 ton - 5.5 ton', NULL, NULL, NULL, 1, '25', NULL, '2019-04-09 00:55:26', '2019-04-09 00:55:26'),
(47, '5.0 ton - 5.5 ton', NULL, NULL, NULL, 1, '26', NULL, '2019-04-09 00:55:33', '2019-04-09 00:55:33'),
(59, 'COLOR', 'All Color', NULL, NULL, 1, '0', NULL, '2019-07-21 03:26:19', '2019-07-21 03:26:19'),
(60, 'RED', 'Red Color', NULL, NULL, 1, '59', NULL, '2019-07-21 03:36:33', '2019-07-21 03:36:33'),
(61, 'YELLOW', 'Yellow Color', NULL, NULL, 1, '59', NULL, '2019-07-21 03:38:00', '2019-07-21 03:38:00'),
(62, 'BLACK', 'Black Color', NULL, NULL, 1, '59', NULL, '2019-07-21 03:40:35', '2019-07-21 03:40:35'),
(63, 'BLUE', 'Blue Color', NULL, NULL, 1, '59', NULL, '2019-07-21 03:41:21', '2019-07-21 03:41:21'),
(64, 'GRAY', 'Gray Color', NULL, NULL, 1, '59', NULL, '2019-07-21 03:41:41', '2019-07-21 03:41:41'),
(65, 'PINK', 'Pink Color', NULL, NULL, 1, '59', NULL, '2019-07-21 03:42:01', '2019-07-21 03:42:01'),
(66, 'Slider Image', 'Home Page Slider', NULL, NULL, 1, '0', NULL, '2019-07-22 22:41:04', '2019-07-22 22:41:04'),
(67, 'Atashi TV', 'TV Slider', NULL, 'attached_images/categories/67/TV-2.jpg', 0, '66', 1, '2019-07-22 22:44:22', '2020-02-01 22:03:56'),
(68, 'Atashi Air Condition', 'Slider Air Condition', NULL, 'attached_images/categories/68/AC-2.jpg', 1, '66', 1, '2019-07-22 22:46:54', '2019-08-07 23:05:59'),
(69, 'Atashi Refrigerator', 'Atashi Refrigerator Slider', NULL, 'attached_images/categories/69/Refrigerators-1.jpg', 1, '66', 1, '2019-07-22 23:27:17', '2019-08-07 23:06:50'),
(71, 'Atashi Chest Freezer', 'Atashi Chest Freezer Slider', NULL, 'attached_images/categories/71/Home-Appliance.jpg', 1, '66', 1, '2019-07-22 23:31:11', '2019-08-08 01:09:44'),
(73, 'Banner', 'Banner Image', NULL, NULL, 1, '0', NULL, '2019-07-22 23:57:28', '2019-07-22 23:57:28'),
(74, 'LED TV Banner', 'LED TV  Banner Image', NULL, 'attached_images/categories/74/LED TV.jpg', 1, '73', 1, '2019-07-23 00:11:12', '2019-08-26 04:55:14'),
(75, 'Air Conditioner Banner', 'Air Conditioner Banner Image', NULL, 'attached_images/categories/75/Refrigerators-1.jpg', 1, '73', 1, '2019-07-23 00:14:50', '2020-02-01 22:31:44'),
(76, 'Refrigerators Banner', 'Refrigerators Banner Image', NULL, 'attached_images/categories/76/Refrigerator.jpg', 1, '73', 1, '2019-07-23 00:17:10', '2019-08-26 04:56:54'),
(77, 'Kitchen Appliance Banner', 'Kitchen Appliance Banner Image', NULL, 'attached_images/categories/77/Home Appliance.jpg', 1, '73', 1, '2019-07-23 00:21:12', '2019-08-26 04:57:13'),
(78, 'Best Seller TV', 'Best Seller TV Category', NULL, NULL, 1, '2', 1, '2019-07-23 01:53:36', '2019-07-23 02:00:19'),
(79, 'New Arrivals TV', 'New Arrivals TV Category', NULL, NULL, 1, '2', NULL, '2019-07-23 01:54:42', '2019-07-23 01:54:42'),
(80, 'Top Rated TV', 'Top Rated TV Category', NULL, NULL, 1, '2', NULL, '2019-07-23 01:56:30', '2019-07-23 01:56:30'),
(81, 'Best Seller AC', 'Best Seller AC Category', NULL, NULL, 1, '19', NULL, '2019-07-23 02:08:12', '2019-07-23 02:08:12'),
(82, 'New Arrivals AC', 'New Arrivals AC Category', NULL, NULL, 1, '19', NULL, '2019-07-23 02:09:28', '2019-07-23 02:09:28'),
(83, 'Top Rated AC', 'Top Rated AC Category', NULL, NULL, 1, '19', NULL, '2019-07-23 02:09:59', '2019-07-23 02:09:59'),
(87, 'Best Seller Home Appliance', 'Best Seller Home Appliance Category', NULL, NULL, 1, '21', NULL, '2019-07-23 02:44:29', '2019-07-23 02:44:29'),
(88, 'New Arrivals Home Appliance', 'New Arrivals Home Appliance Category', NULL, NULL, 1, '21', NULL, '2019-07-23 02:45:38', '2019-07-23 02:45:38'),
(89, 'Top Rated Home Appliance', 'Top Rated Home Appliance Category', NULL, NULL, 1, '21', NULL, '2019-07-23 02:46:28', '2019-07-23 02:46:28'),
(90, 'WHITE', 'WHITE Color', NULL, NULL, 1, '59', NULL, '2019-07-23 03:04:03', '2019-07-23 03:04:03'),
(91, 'Header Right', 'Header Image', NULL, 'attached_images/categories/91/Atashii.jpg', 1, '0', 1, '2019-07-23 08:52:04', '2020-02-03 00:22:59'),
(92, 'Header Image 1', 'Header Image One Description', NULL, 'attached_images/categories/92/Offer Ad 02.jpg', 1, '91', 1, '2019-07-23 08:56:41', '2019-10-10 03:14:16'),
(93, 'Header Image 2', 'Header Image Two Description', NULL, 'attached_images/categories/93/download.jpg', 1, '91', 1, '2019-07-23 08:57:23', '2020-02-01 22:08:58'),
(94, 'Company Overview', 'Nitol Electronics Limited (NEL) is one of fastest growing electronics product manufacturer in Bangladesh. We offer world class electronic manufacturing services and support test', NULL, NULL, 1, '0', 1, '2019-07-23 23:55:41', '2020-02-03 00:47:27'),
(95, 'Youtube Link', 'https://www.youtube.com/watch?v=98e_ghR3UAk&t=2s', NULL, NULL, 1, '0', 1, '2019-07-24 00:45:03', '2019-11-07 01:38:59'),
(96, 'Youtube Link One', 'https://www.youtube.com/embed/o-6vXG5G6zg?start=17\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', NULL, NULL, 1, '95', 1, '2019-07-24 00:47:41', '2019-11-07 03:08:36'),
(97, 'Youtube Link Two', 'https://www.youtube.com/watch?v=o-6vXG5G6zg', NULL, NULL, 1, '95', 1, '2019-07-24 00:48:37', '2019-11-07 01:43:21'),
(98, 'Youtube Link Three', 'https://www.youtube.com/embed/EIDhkxPPA40', NULL, NULL, 1, '95', NULL, '2019-07-24 00:51:54', '2019-07-24 00:51:54'),
(99, 'Most Viewed', 'Most Viewed Products', NULL, NULL, 1, '0', NULL, '2019-07-24 03:40:16', '2019-07-24 03:40:16'),
(100, 'Most Popular', 'Most Popular Products', NULL, NULL, 1, '0', NULL, '2019-07-24 03:41:03', '2019-07-24 03:41:03'),
(101, 'Store Locator', 'Division List', NULL, NULL, 1, '0', NULL, '2019-08-03 23:01:04', '2019-08-03 23:01:04'),
(102, 'Dhaka', 'Dhaka Division', NULL, NULL, 1, '101', 1, '2019-08-03 23:01:40', '2019-08-03 23:02:31'),
(103, 'Barishal', 'Barishal Division', NULL, NULL, 1, '101', NULL, '2019-08-03 23:03:16', '2019-08-03 23:03:16'),
(104, 'Chittagong', 'Chittagong Division', NULL, NULL, 1, '101', NULL, '2019-08-03 23:03:43', '2019-08-03 23:03:43'),
(105, 'Khulna', 'Khulna Division', NULL, NULL, 1, '101', NULL, '2019-08-03 23:04:19', '2019-08-03 23:04:19'),
(106, 'Mymensingh', 'Mymensingh Division', NULL, NULL, 1, '101', NULL, '2019-08-03 23:04:49', '2019-08-03 23:04:49'),
(107, 'Rajshahi', 'Rajshahi Division', NULL, NULL, 1, '101', NULL, '2019-08-03 23:05:25', '2019-08-03 23:05:25'),
(108, 'Rangpur', 'Rangpur Division', NULL, NULL, 1, '101', NULL, '2019-08-03 23:05:46', '2019-08-03 23:05:46'),
(109, 'Sylhet', 'Sylhet Division', NULL, NULL, 1, '101', NULL, '2019-08-03 23:06:08', '2019-08-03 23:06:08'),
(110, 'Dhaka(Dis)', 'Dhaka District', NULL, NULL, 1, '102', NULL, '2019-08-03 23:08:22', '2019-08-03 23:08:22'),
(117, 'Shipping Cost', '200', NULL, NULL, 1, '0', 1, '2019-08-18 21:31:01', '2019-09-17 05:16:10'),
(118, 'Mohakhali', 'Nitol Electronics\r\n17, RC Tower (Ground Floor),\r\nMohakhali C/A, Dhaka-1212\r\nMob: 01955517131', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0767652651425!2d90.40403421429752!3d23.78028059355257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7115bbb37e3%3A0xfc53bbd3c0e4bcee!2sNitol%20Electronics%20Ltd!5e0!3m2!1sbn!2sbd!4v1582198550980!5m2!1sbn!2sbd', 'attached_images/categories/118/Dhaka SR.jpg', 1, '110', 1, '2019-09-01 23:31:21', '2020-02-20 05:38:40'),
(119, 'Chittagong(Dis)', 'Chittagong District', NULL, NULL, 1, '104', NULL, '2019-09-01 23:38:42', '2019-09-01 23:38:42'),
(120, 'Chowmuhoni, Chittagong', 'Nitol Electronics\r\nNoor Complex (Ground floor),\r\nSK Mujib Road, Pathantuli, Chowmuhoni, Chittagong\r\nMobile 01955517124', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.5532364311125!2d91.81052325006468!3d22.332730047289473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8b7d4a13f39%3A0x5c0befde62155de!2sHalishahar%20Rd%20%26%20Pathantuli%20Rd%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1567402871076!5m2!1sen!2sbd', 'attached_images/categories/120/CTG SR.jpg', 1, '119', 1, '2019-09-01 23:41:47', '2019-12-28 07:30:10'),
(121, 'Khulna(Dis)', 'Khulna District', NULL, NULL, 1, '105', NULL, '2019-09-01 23:43:19', '2019-09-01 23:43:19'),
(122, 'KDA Avenue, KHULNA', 'Nitol Electronics Ltd.\r\n16, KDA Avenue, KHULNA\r\nMobile: 01936667958', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6037610236567!2d89.551452814964!3d22.81714168505739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff900422f8c9e9%3A0x7d0cbafc14e3a463!2sKDA%20Ave%2C%20Khulna!5e0!3m2!1sen!2sbd!4v1567403241784!5m2!1sen!2sbd', 'attached_images/categories/122/Khulna SR.jpg', 1, '121', 1, '2019-09-01 23:48:07', '2019-12-28 07:33:12'),
(123, 'Bogura', 'Bogura District', NULL, NULL, 1, '107', NULL, '2019-09-01 23:51:38', '2019-09-01 23:51:38'),
(124, 'Katnarpara , Bogra', 'Nitol Electronics\r\nPanir Tank Road (Dutta Bari),\r\nKatnarpara , Bogra.\r\nMobile: 01955517125', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.173978922152!2d89.36676800011135!3d24.85790685140463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc5502de27353f%3A0x150113c31a28cb01!2z4Kaq4Ka-4Kaw4Kat4KeH4KacIOCmt-CnjeCmn-Cni-CmsA!5e0!3m2!1sen!2sbd!4v1567403695959!5m2!1sen!2sbd', 'attached_images/categories/124/Bogura SR.jpg', 1, '123', 1, '2019-09-01 23:55:54', '2019-12-28 07:41:44'),
(125, 'Gazipur', 'Gazipur Dhaka District', NULL, NULL, 1, '102', NULL, '2019-09-01 23:57:09', '2019-09-01 23:57:09'),
(126, 'Jessore', 'Jessore khulna district', NULL, NULL, 1, '105', NULL, '2019-09-01 23:57:53', '2019-09-01 23:57:53'),
(127, 'Joypurhat', 'Joypurhat Rajshahi Division', NULL, NULL, 1, '107', NULL, '2019-09-01 23:59:19', '2019-09-01 23:59:19'),
(128, 'Sylhet(Dis)', 'Sylhet District', NULL, NULL, 1, '109', NULL, '2019-09-01 23:59:52', '2019-09-01 23:59:52'),
(129, 'Naogaon', 'Naogaon District Rajshahi Division', NULL, NULL, 1, '107', NULL, '2019-09-02 00:01:00', '2019-09-02 00:01:00'),
(130, 'Kushtia', 'Kushtia District Khulna Division', NULL, NULL, 1, '105', NULL, '2019-09-02 00:02:13', '2019-09-02 00:02:13'),
(131, 'Konabari, Gazipur', 'Nitol Electronics\r\nBaimail, Konabari, Gazipur, Bangladesh.\r\nMobile: 01777709918', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12259.236350810907!2d90.32526472025995!3d24.00662372744746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755dda95958e945%3A0xc866334decc1ce3a!2sBaimail!5e0!3m2!1sen!2sbd!4v1567404278736!5m2!1sen!2sbd', 'attached_images/categories/131/Gazipur SR.jpg', 1, '125', 1, '2019-09-02 00:05:17', '2019-12-28 07:31:47'),
(132, 'Pal Barir Moor, Jessore', 'Nitol Electronics\r\nRARS Road, Notun Khoer Tola,\r\nPal Barir Moor, Jessore-7400\r\nMob: 01958294374', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58690.19311456737!2d89.15844399300013!3d23.165196872634393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff108aeabe908b%3A0x4cf73775c6e12126!2sSheikh%20Mujib%20Monument!5e0!3m2!1sen!2sbd!4v1567404538456!5m2!1sen!2sbd', 'attached_images/categories/132/Jessore SR.jpg', 1, '126', 1, '2019-09-02 00:09:32', '2019-12-28 07:34:52'),
(133, 'Sadar Road,  Joypurhat', 'Nitol Electronics LTD.\r\n1040, Amtoli, Sadar Road,\r\nJoypurhat\r\nMobile: 01955517127', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.048700354451!2d89.03214755011616!3d25.100212741710212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c7e1739165be5f8!2zQW10b2xpIEphbWUgTW9zcXVlINmF2LPYrNiv!5e0!3m2!1sen!2sbd!4v1567404645895!5m2!1sen!2sbd', 'attached_images/categories/133/Joypurhat SR.jpg', 1, '127', 1, '2019-09-02 00:11:40', '2019-12-28 07:36:36'),
(134, 'Chok Anayet, Naogaon', 'Nitol Electronics Ltd.\r\nRubir Moor, Chok Anayet\r\nNaogaon\r\nMobile: 01955517118', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57947.048164496046!2d88.90205300105295!3d24.806049017242092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc7b563db2ee85%3A0x30ccd5950337b4fb!2sNaogaon!5e0!3m2!1sen!2sbd!4v1567404978600!5m2!1sen!2sbd', 'attached_images/categories/134/storeImage.jpg', 1, '129', NULL, '2019-09-02 00:19:49', '2019-09-02 00:19:49'),
(135, 'Ambarkhana, Sylhet', 'Nitol Electronics\r\nAl Fazal Plaza, Suvessa 26,\r\nDorshon Dewri, Ambarkhana, Sylhet\r\nMob: 01955517132', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.77189599619!2d91.86483255011233!3d24.905761149496847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552614566da7%3A0x905d2f5c9dc0cfcc!2sThe%20New%20Sylhet%20Auto%20Workshop!5e0!3m2!1sen!2sbd!4v1567405230253!5m2!1sen!2sbd', 'attached_images/categories/135/Sylhet SR.jpg', 1, '128', 1, '2019-09-02 00:21:14', '2019-12-28 07:38:25'),
(136, 'B.K Tower, Kushtia', '10 Nitol Electronics Ltd.\r\n164, N.S Road, B.K Tower,\r\nKushtia\r\nMobile: 01936667969', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.5447921485948!2d89.13468115009304!3d23.90575528866562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe97018596d041%3A0x2b8c1557b1128e3!2sLovely%20Tower%2C%20Kushtia!5e0!3m2!1sen!2sbd!4v1567405329488!5m2!1sen!2sbd', 'attached_images/categories/136/storeImage.jpg', 1, '130', NULL, '2019-09-02 00:22:49', '2019-09-02 00:22:49'),
(137, 'Dealer Locator', 'Dealer Locator Root', NULL, NULL, 0, '0', 1, '2019-09-17 05:24:17', '2019-12-28 07:47:13'),
(138, 'Mymensing(Dis)', 'Mymensing District', NULL, NULL, 1, '106', 1, '2019-09-17 05:29:16', '2019-12-28 07:46:38'),
(139, 'Gaforgaon', 'Mymensing Thana', NULL, NULL, 1, '138', 1, '2019-09-17 05:30:59', '2019-12-28 07:46:30'),
(140, '16inch - 30inch', 'LED TV', NULL, NULL, 1, '13', NULL, '2019-09-18 00:46:39', '2019-09-18 00:46:39'),
(141, '100 Ltr. - 150 Ltr.', 'Refregerator', NULL, NULL, 1, '22', NULL, '2019-09-18 22:06:28', '2019-09-18 22:06:28'),
(142, '100 Ltr. - 150 Ltr.', 'Freezer', NULL, NULL, 1, '23', NULL, '2019-09-18 22:37:49', '2019-09-18 22:37:49'),
(143, '2.0 ton - 3.0 ton', 'Split AC', NULL, NULL, 1, '24', NULL, '2019-09-18 23:28:04', '2019-09-18 23:28:04'),
(144, '2.0 ton - 3.0 ton', 'Celling Type', NULL, NULL, 1, '25', NULL, '2019-09-18 23:42:22', '2019-09-18 23:42:22'),
(145, '2.0 ton - 3.0 ton', 'Cassate', NULL, NULL, 1, '26', 1, '2019-09-18 23:42:52', '2019-09-18 23:44:29'),
(146, 'Accessories', 'All Accessories', NULL, NULL, 1, '0', NULL, '2019-09-19 01:42:51', '2019-09-19 01:42:51'),
(147, 'TV Clump', 'TV Clump All', NULL, NULL, 1, '146', NULL, '2019-09-19 05:17:44', '2019-09-19 05:17:44'),
(148, 'TV Remote', 'TV Remote All', NULL, NULL, 1, '146', NULL, '2019-09-19 05:18:08', '2019-09-19 05:18:08'),
(149, 'Angle For AC', 'Angle For AC All', NULL, NULL, 1, '146', NULL, '2019-09-19 05:18:45', '2019-09-19 05:18:45'),
(150, 'Sound Bar', 'Sound Bar All', NULL, NULL, 1, '21', 1, '2019-09-19 05:19:21', '2019-10-13 02:57:05'),
(151, 'AC Remote', 'AC Remote All', NULL, NULL, 1, '146', NULL, '2019-09-19 05:19:45', '2019-09-19 05:19:45'),
(152, 'Free Shipping Cost', '20000, If your purchase product cost more than 20000 then we have to free on delivery.', NULL, NULL, 1, '0', 1, '2019-09-30 03:54:21', '2019-09-30 21:48:39'),
(153, 'Best Seller Frezeer', 'Best Seller Frezeer Body', NULL, NULL, 1, '23', NULL, '2019-10-28 00:47:57', '2019-10-28 00:47:57'),
(154, 'New Arrivals Frezeer', 'New Arrivals Frezeer  Body', NULL, NULL, 1, '23', NULL, '2019-10-28 00:48:33', '2019-10-28 00:48:33'),
(155, 'Top Rated Frezeer', 'Top Rated Frezeer Body', NULL, NULL, 1, '23', NULL, '2019-10-28 00:48:53', '2019-10-28 00:48:53'),
(156, 'Best Seller Refregerator', 'Best Seller Refregerator Body', NULL, NULL, 1, '22', NULL, '2019-10-28 01:05:59', '2019-10-28 01:05:59'),
(157, 'New Arrivals Refregerator', 'New Arrivals Refregerator Body', NULL, NULL, 1, '22', NULL, '2019-10-28 01:06:23', '2019-10-28 01:06:23'),
(158, 'Top Rated Refregerator', 'Top Rated Refregerator Body', NULL, NULL, 1, '22', NULL, '2019-10-28 01:06:45', '2019-10-28 01:06:45'),
(159, 'Magenta', 'Magenta Color', NULL, NULL, 1, '59', NULL, '2019-11-26 03:02:51', '2019-11-26 03:02:51'),
(160, 'Orange', 'Refrigerator', NULL, NULL, 1, '59', NULL, '2019-11-27 22:18:04', '2019-11-27 22:18:04'),
(162, 'test cate-1', NULL, NULL, 'attached_images/categories/162/Refrigerators-1.jpg', 1, '13', 1, '2020-02-01 22:49:40', '2020-02-01 22:51:48'),
(163, 'Test Tv Category', NULL, NULL, NULL, 1, '2', NULL, '2020-02-01 23:28:13', '2020-02-01 23:28:13'),
(164, 'Dhaka sadar', 'Lorem ipshum isset. Lorem ipshum isset lorerm ipshum isset.', NULL, 'attached_images/categories/164/3.jpg', 1, '110', NULL, '2020-02-01 23:58:50', '2020-02-01 23:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_sales`
--

CREATE TABLE `corporate_sales` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate_sales`
--

INSERT INTO `corporate_sales` (`id`, `full_name`, `company_name`, `contact_number`, `email_address`, `address`, `city`, `country`, `enquiry_type`, `category`, `enquiry`, `created_at`, `updated_at`) VALUES
(1, 'Noman', 'Aamra', '01711406821', 'lorem@gmail.com', 'Dhaka', 'Dhaka', 'BD', 'Dealer Business', 'Refrigerator', 'Good Produt', '2019-10-03 02:06:05', '2019-10-03 02:06:05'),
(2, 'Kamrul', 'NITS Service Pvt. Ltd.', '01955517112', 'kamrul.nel@gmail.com', 'Mohakhali, Dhaka', 'Dhaka', 'Bangladesh', 'Corporate Business', 'Preferred Category', 'We want to buy 100 TV', '2019-12-26 01:22:08', '2019-12-26 01:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email_address`, `phone_number`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Noman', 'test@example.com', '01711406821', 'Good', '2019-08-19 22:38:01', '2019-08-19 22:38:01'),
(2, 'Noman', 'test@example.com', '01711406821', 'Very Good', '2019-08-19 22:53:14', '2019-08-19 22:53:14'),
(3, 'Fabian Crump', 'noreply@gplforest4265.website', '070 0187 8549', 'Hello,\r\n\r\nAre you working with Wordpress/Woocommerce or maybe might you intend to implement it sooner or later ? We currently offer a little over 2500 premium plugins and additionally themes free to get : http://heurl.xyz/udCdK\r\n\r\nRegards,\r\n\r\nFabian', '2019-10-15 02:01:05', '2019-10-15 02:01:05'),
(4, 'Akilah Haney', 'akilah.haney@hotmail.com', '07832 16 63 69', 'Hi,\r\nDo you want to reach brand-new customers? \r\n\r\nWe are personally welcoming you to join one of the leading influencer and affiliate networks on the web. \r\nThis network finds influencers and affiliates in your niche who will promote your products/services on their sites and social network channels. \r\nBenefits of our program include: brand name recognition for your business, increased credibility, and possibly more customers. \r\n\r\nIt\'s the most safe, easiest and most efficient method to increase your sales! \r\n\r\nWhat do you think?\r\n\r\nLearn more: http://socialinfluencer.nicheadvertising.online', '2019-10-19 15:47:06', '2019-10-19 15:47:06'),
(5, 'Lillian Fysh', 'lillian.fysh@hotmail.com', '091 513 19 94', 'Would you like to post your ad on thousands of advertising sites every month? One tiny investment every month will get you virtually unlimited traffic to your site forever!Get more info by visiting: http://adposting.n3t.n3t.store', '2019-10-22 17:57:55', '2019-10-22 17:57:55'),
(6, 'BrianCip', 'no_reply@irqmail.com', '89538841168', 'To: The President/CEO \r\nWe are interested in your products and services for long terms procurement contracts. Please send us details of your products and services brochure if available, to enable a quick review by our international trade officer. Please contact through the listed email below. Thank you. \r\n \r\nFadhil Alkhouri \r\nAlmarif General Trading \r\nprocure@irqmail.net', '2019-10-24 10:17:39', '2019-10-24 10:17:39'),
(7, 'Arlene Westcott', 'arlenewestcott66@gmail.com', '4055523417', 'Hi,\r\n\r\nI am a passionate reader and reaching you in context to something like this. I would like to do a contribution to your website by providing a guest post. \r\n\r\nThe guest post would surely be based on a great topic aligned with your reader’s interests. The content would be of high quality and will be plagiarism-free. However, in return would need a favor of backlink within the main body of the article.\r\n\r\nKindly let me know if I can interest you with some great topic ideas?\r\n\r\nLooking forward.\r\n\r\nSincerely,\r\n\r\nArlene Westcott', '2019-10-24 21:37:18', '2019-10-24 21:37:18'),
(8, 'Jerrycef', 'dorthy6@gmail.com', '85349384254', 'Hello \r\n \r\nBuy all styles of Oakley & Ray Ban Sunglasses only 19.95 dollars.  Paypal Accepted. 100% Satisfaction Guaranteed. \r\n \r\nIf interested, please visit our site: www.raybanoutlets.online \r\n \r\n \r\nTo your success, \r\n \r\nNitol Electronics - nitolelectronics.com', '2019-10-27 13:46:06', '2019-10-27 13:46:06'),
(10, 'MoliBab', 'fullfuflo@lenta.ru', '87657759964', 'This Pin was discovered by Lauren Kushnick. Discover (and save!) your own Pins on Pinterest.  \r\n<a href=http://fluffycat.ga/art/fat-fluffy-cats/>Fat fluffy cats</a>', '2019-10-31 04:55:01', '2019-10-31 04:55:01'),
(11, 'Marguerite Dreyer', 'dreyer.marguerite@outlook.com', '078 1223 2016', 'Hi,\r\nDo you want to reach new customers? \r\n\r\nWe are personally inviting you to sign up with one of the leading influencer and affiliate networks on the web. \r\nThis network sources influencers and affiliates in your niche who will promote your business on their websites and social network channels. \r\nBenefits of our program include: brand recognition for your product or service, increased reputation, and possibly more customers. \r\n\r\nIt is the most safe, easiest and most effective way to increase your sales! \r\n\r\nWhat do you think?\r\n\r\nLink: http://bit.ly/influencerpromo2019', '2019-11-01 20:16:16', '2019-11-01 20:16:16'),
(12, 'Juli Lynn', 'juli.lynn@gmail.com', '034605 35 72', 'Hello! Since you\'re reading this message then you\'re living proof that advertising through contact forms works! We can send your advertisement to people via their feedback form on their website. The advantage of this type of advertising is that messages sent through feedback forms are inherently whitelisted. This dramatically improves the probability that your advertisement will be seen. No Pay per click costs! Pay a one time fee and reach millions of people. For more information send a message to: mary4864kir@gmail.com', '2019-11-04 00:33:14', '2019-11-04 00:33:14'),
(13, 'KennethChork', 'robertgag@gmail.com', '84546929755', 'How to avoid risks and get the maximum return on your investment? \r\nThere is a better solution! \r\nShort-term investments with maximum profit! \r\nInvestment period 2 days. \r\nProfit from investing + 10% \r\nRegistration for the international investment fund is available on the official website: \r\nhttps://www.crypto-mmm.com/?source=ebtc', '2019-11-07 15:13:29', '2019-11-07 15:13:29'),
(14, 'Miriam Clary', 'clary.miriam@gmail.com', '06-72035132', 'Would you like to promote your business on 1000\'s of Advertising sites every month? Pay one flat rate and get virtually unlimited traffic to your site forever! To find out more check out our site here: http://www.postmyads.tech', '2019-11-08 01:45:19', '2019-11-08 01:45:19'),
(15, 'Eric Jones', 'eric@talkwithcustomer.com', '416-385-3200', 'Hey,\r\n\r\nYou have a website nitolelectronics.com, right?\r\n\r\nOf course you do. I am looking at your website now.\r\n\r\nIt gets traffic every day – that you’re probably spending $2 / $4 / $10 or more a click to get.  Not including all of the work you put into creating social media, videos, blog posts, emails, and so on.\r\n\r\nSo you’re investing seriously in getting people to that site.\r\n\r\nBut how’s it working?  Great? Okay?  Not so much?\r\n\r\nIf that answer could be better, then it’s likely you’re putting a lot of time, effort, and money into an approach that’s not paying off like it should.\r\n\r\nNow… imagine doubling your lead conversion in just minutes… In fact, I’ll go even better.\r\n \r\nYou could actually get up to 100X more conversions!\r\n\r\nI’m not making this up.  As Chris Smith, best-selling author of The Conversion Code says: Speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 14 minutes vs being contacted within 5 minutes.\r\n\r\nHe’s backed up by a study at MIT that found the odds of contacting a lead will increase by 100 times if attempted in 5 minutes or less.\r\n\r\nAgain, out of the 100s of visitors to your website, how many actually call to become clients?\r\n\r\nWell, you can significantly increase the number of calls you get – with ZERO extra effort.\r\n\r\nTalkWithCustomer makes it easy, simple, and fast – in fact, you can start getting more calls today… and at absolutely no charge to you.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive to find out how.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS: Don’t just take my word for it, TalkWithCustomer works:\r\nEMA has been looking for ways to reach out to an audience. TalkWithCustomer so far is the most direct call of action. It has produced above average closing ratios and we are thrilled. Thank you for providing a real and effective tool to generate REAL leads. - P MontesDeOca.\r\nBest of all, act now to get a no-cost 14-Day Test Drive – our gift to you just for giving TalkWithCustomer a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=nitolelectronics.com', '2019-11-09 08:01:23', '2019-11-09 08:01:23'),
(16, 'Franklin Drake', 'drake.franklin@gmail.com', '0365 7471014', 'Hi,\r\nWould you like to reach new clients? \r\n\r\nWe are personally welcoming you to sign up with one of the leading influencer and affiliate networks on the internet. \r\nThis network sources influencers and affiliates in your niche who will promote your products/services on their websites and social network channels. \r\nBenefits of our program consist of: brand recognition for your business, increased trustworthiness, and potentially more clients. \r\n\r\nIt is the best, most convenient and most reliable way to increase your sales! \r\n\r\nWhat do you think?\r\n\r\nFind out more: http://www.advertisewithinfluencers.site', '2019-11-10 12:39:29', '2019-11-10 12:39:29'),
(17, 'Laura Sacks', 'laura@mybizexplained.com', '917-675-5528', 'Hey again, \r\n\r\nI was recently on your site and I can see you continue to pour time and energy into your digital presence. Your hard work shows and it’s really coming along!\r\n\r\n\r\nWhat caught my eye was, despite the engaging layout & clear investment in your site, you’re still missing an explainer video to easily convey information to website viewers. \r\n\r\n\r\nIt\'s sad to say, but web visitors today are lazier than ever! Without high-quality video content on your site, you are missing out on potential customers. These potential customers are already on your site - you just need to convert them!\r\n\r\n\r\nFYI - I work at an amazing explainer video & marketing firm that specializes in creating fun and easily digestible homepage videos. We have actually created several such videos in your industry. We have offices in California + Jerusalem Israel.\r\n\r\n\r\nI would love to chat further about how I can help. Email me laura@MyBizExplained.com or see some samples on www.MyBizExplained.com\r\n \r\n\r\n--\r\nLaura Sacks\r\nManager\r\nwww.MyBizExplained.com\r\nLaura@MyBizExplained.com', '2019-11-11 01:47:09', '2019-11-11 01:47:09'),
(18, 'Holly Babin', 'babin.holly63@gmail.com', '03.55.80.66.29', 'Do you want to promote your advertisement on tons of online ad sites every month? One tiny investment every month will get you virtually endless traffic to your site forever!For more information just visit: http://www.submitmyadnow.tech', '2019-11-15 16:44:29', '2019-11-15 16:44:29'),
(19, 'MichaelRip', 'raphaeClattestadly@gmail.com', '89255669756', 'Good day!  nitolelectronics.com \r\n \r\nHave you ever heard that you can send a message through the contact form? \r\nThese forms are located on many sites. We sent you our message in the same way, and the fact that you received and read it shows the effectiveness of this method of sending messages. \r\nSince people in any case will read the offer received through the contact form. \r\nOur database includes more than 35 million websites from all over the world. \r\nThe price of sending one million messages 49 USD. \r\nThere is a discount program for large orders. \r\n \r\nFree proof mailing of 50,000 messages to any country of your choice. \r\n \r\n(We also provide other services. \r\n1. Mailing email message to corporate addresses of any country \r\n2. Selling the email database of any country in the world) \r\n \r\nThis offer is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', '2019-11-17 23:22:03', '2019-11-17 23:22:03'),
(20, 'Xavier Schlink', 'schlink.xavier@outlook.com', '218-379-8298', 'Get rid of fees for credit card processing from your business forever details here: http://bit.ly/neverfees', '2019-11-19 08:59:54', '2019-11-19 08:59:54'),
(21, 'Eric Jones', 'eric@talkwithcustomer.com', '416-385-3200', 'Hi,\r\n\r\nMy name is Eric and I was looking at a few different sites online and came across your site nitolelectronics.com.  I must say - your website is very impressive.  I am seeing your website on the first page of the Search Engine. \r\n\r\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\r\n \r\nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \r\n\r\nTalkWithCustomer is a widget which captures a website visitor’s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website — while they\'re hot! Best feature of all, International Long Distance Calling is included!\r\n  \r\nTry TalkWithCustomer Live Demo now to see exactly how it works.  Visit http://www.talkwithcustomer.com\r\n\r\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\r\n\r\nIf you would like to talk to me about this service, please give me a call.  We have a 14 days trial.  Visit http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nThanks and Best Regards,\r\nEric\r\n\r\nIf you\'d like to unsubscribe go to http://liveserveronline.com/talkwithcustomer.aspx?d=nitolelectronics.com', '2019-11-19 14:31:07', '2019-11-19 14:31:07'),
(22, 'Maribel Harrington', 'harrington.maribel@outlook.com', '(15) 6910-3529', 'Do you want to submit your advertisement on over 1000 ad sites every month? Pay one low monthly fee and get virtually unlimited traffic to your site forever! To find out more check out our site here: http://www.postingmoreads.xyz', '2019-11-20 22:32:44', '2019-11-20 22:32:44'),
(23, 'Monkeygax', 'rodgerPef@outlook.com', '81769371411', 'Local Business Citations are powerful ranking tools for any local business. But Not All Business Citations are created equal. Get Top Local Citations for your business that will help you get higher Local Rank and also increase your local visibility in your area. You will get 1500 Quality Back Links from citation sites to increase the position of your business in local search. \r\n \r\nMore info: \r\nhttps://www.monkeydigital.co/product/google-maps-citations/ \r\n \r\nthanks and regards \r\nMonkey Digital Team \r\nsupport@monkeydigital.co', '2019-11-22 03:38:07', '2019-11-22 03:38:07'),
(24, 'Adeline Perkins', 'adeline.perkins@yahoo.com', '03841 28 58 08', 'Beloved Sir/Madam,\r\n\r\nHave you  obtained  surprising emails from  Amazon.com  educating you that your listing is being  finished  as a result of infringe some  brand name\'s  license?\r\n\r\nI  totally understood the  tension and  disturbed when your best  marketing listing or shop was  prohibited because I am running a  store in  Amazon.com  as well!\r\n\r\nIt  actually makes my heart pounding like crazy when  obtaining those emails!\r\n\r\nNo  concern  currently! As we  obtained the  innovation to  recoup/ appeal your  prohibited  checklist.  Initial  rate US$ 200.0/ listing\r\n\r\nPlease  call: sales@bestapplestore.com\r\nskype: live: sales_89588.\r\nfor quotation.\r\n\r\n Appears increditable?  Settlement by Paypal  and also 100%  reimbursement to you if not sucessful. 100% protected  as well as confidence.\r\n\r\n Ideal  pertains to,.\r\nMatthew.\r\nHKSEO Ltd.\r\n\r\nHKSEO  Developed in 2010, we are specialized in  Search Engine Optimization  advertising and marketing  and also a leading Amazon  company to  consumers in a wide variety of  markets.', '2019-11-22 12:19:39', '2019-11-22 12:19:39'),
(25, 'Cornelius Tedesco', 'noreplygooglealexarank@gmail.com', '0378 6983331', 'Increase ranks and visibility for nitolelectronics.com with a monthly SEO plan that is built uniquely for your website\r\n\r\nIncrease SEO metrics and ranks while receiving complete reports on monthly basis\r\n\r\nCheck out our plans\r\nhttps://googlealexarank.com/index.php/seo-packages/\r\n\r\nthanks and regards\r\nTop SEO Experts', '2019-11-25 08:55:30', '2019-11-25 08:55:30'),
(26, 'Mellissa Tobey', 'tobey.mellissa@gmail.com', '928 30 216', 'Looking for powerful online promotion that isn\'t full of BS? I apologize for sending you this message on your contact form but actually that was the whole point. We can send your ad copy to websites via their contact forms just like you\'re reading this note right now. You can target by keyword or just do mass blasts to websites in the location of your choice. So let\'s assume you need to send an ad to all the contractors in the United States, we\'ll scrape websites for just those and post your ad message to them. Providing you\'re promoting some kind of offer that\'s relevant to that type of business then you\'ll be blessed with an amazing response! \r\n\r\nWrite a quickie email to evie2535gre@gmail.com for the details', '2019-11-27 14:04:59', '2019-11-27 14:04:59'),
(27, 'crypto-mmm', 'williamwhacy@gmail.com', '82122919914', 'The legendary \"CRYPTO-M\" investment Fund has returned to the international cryptocurrency market in your country. \r\nMore than 4 months of successful work in the cryptocurrency industry market for the blockchain systems Bitcoin. \r\n \r\n10% BTC to each member of the club \"Crypto-M\" \r\n10 % accrual to your bitcoin wallet every 2 days. \r\n9% Daily bonus to each member of the affiliate program. \r\n \r\nFree registration only on the official website of \"Crypto-M\" \r\nhttps://www.crypto-mmm.com/?source=engbtc', '2019-11-27 19:22:09', '2019-11-27 19:22:09'),
(28, 'Sonja Bavin', 'sonja.bavin@googlemail.com', '079 0057 3451', 'Trying to find powerful advertising that isn\'t full of BS? I apologize for sending you this message on your contact form but actually that was the whole point. We can send your promotional message to websites via their contact forms just like you\'re reading this note right now. You can target by keyword or just execute bulk blasts to websites in any country you choose. So let\'s say you want to send an ad to all the web developers in the United States, we\'ll grab websites for just those and post your ad text to them. As long as you\'re advertising a product or service that\'s relevant to that business category then you\'ll get awesome results! \r\n\r\nSend a quick message to evie2535gre@gmail.com for the full details', '2019-11-27 20:13:53', '2019-11-27 20:13:53'),
(29, 'Shayna Macalister', 'shayna.macalister56@msn.com', '0930-4679540', 'Unlimited FREE Traffic + Website On Autopilot\r\n\r\nImagine making $50,000+ PER MONTH WITHOUT the need to have a mailing list to get started or any experience…\r\n\r\n...and doing it in just 20 MINUTES a day.\r\n\r\nThat\'s EXACTLY what you\'ll learn how to do when you pick up Lazee Profitz.\r\n\r\nclick here---->> http://bit.ly/unlimitedwebtrafficandfreesite\r\n\r\nLearn the same system that made them $50,000+ PER MONTH...\r\n\r\nclick here--->> http://bit.ly/unlimitedwebtrafficandfreesite\r\n\r\nJason and Mosh are exposing a top SECRET software for making money online that is super EASY…\r\n\r\nForget about wasting your time with the same rehashed garbage that you\'re sick and tired of seeing…\r\n\r\nWhen you pick this up, you\'ll be able to start getting results in just 30 mins/day.\r\n\r\nTo your continued success,\r\n\r\nlazee profitz\r\n\r\nhttp://bit.ly/unlimitedwebtrafficandfreesite', '2019-11-28 17:44:03', '2019-11-28 17:44:03'),
(30, 'Claytonlig', 'noreply.venuscoin@gmail.com', '82132514754', 'Hi, This is Venus Coin Project. \r\n \r\nVenus Coin is a new cryptocurrency used in the $ 350 billion night entertainment market (clubs, bars, dating clubs, sexual customs, etc.). \r\n \r\nWe already developed wallet app, exceeded 100,000 downloads worldwide, and settlements are now possible at 15,000 stores in this market. \r\n \r\nVenus Coin is planning to list on the world\'s largest exchange in February 2020, and we decided to start the biggest sale before listing. \r\n \r\nIn this sale, you can get Venus Coin at 70% before the listing, so don\'t miss this chance. \r\n \r\nList price on exchange: $ 0.1 \r\n70% off with referral code : $ 0.1 > $ 0.03 \r\n \r\n—————————————— \r\nReferral code: 9`aw*e2DwL \r\n* Expiration date Dec 31, 2019 \r\nPurchase : https://venuscoin.ge/purchase/ \r\n—————————————— \r\n \r\nEasy to purchase \r\n1. Install Venus Walle apps \r\niPhone > https://apps.apple.com/jp/app/venus-wallet/id1447838722?l=en \r\nandroid > https://play.google.com/store/apps/details?id=ge.cryptolive.venuswallet&hl=en \r\n2. Enter the form and referral code > http://venuscoin.ge/purchase/ \r\n3. Enter the amount you want to purchase and pay with BTC or ETH. \r\n4. You will receive Venus Coin within 3 business days after purchase. \r\nMinimum purchase amount is 0.05 BTC~ \r\n \r\nCEO and founder Keisuke Chiba says that the price of Venus Coin will be raised more than $ 30 by 2022, and this sale is the Last chance for you to get at this price, so don\'t miss it!! \r\n \r\nAny questions or concerns, please feel free to contact our support. \r\n \r\n<About Venus Coin> \r\nOfficial site: https://Venuscoin.ge/ \r\n \r\nTwitter: @venus_coin \r\nInstagram: @venus_coin_project \r\nFacebook: @vnsproject \r\nYoutube: https://www.youtube.com/channel/UCIk_9GAYAttM0n8WwzBJDCQ/ \r\n \r\nSkype: CryptoLiveJapan \r\nTelegram: https://t.co/rObAKQz0mQ?amp=1 \r\nLINE: @ 514zrjrz \r\n \r\n<Company> \r\nCryptoLive OU \r\nNarva mnt 5, Tallinn, Harjumaa 10117 \r\n+ 372-618-9563 \r\nhttps://cryptolive.ge', '2019-11-30 17:07:51', '2019-11-30 17:07:51'),
(31, 'Jacqueline Follett', 'jacqueline.follett@hotmail.com', '070 8752 5770', 'Are You interested in advertising that costs less than $40 per month and sends thousands of people who are ready to buy directly to your website? Reply to: walter3519rob@gmail.com to find out how this works.', '2019-12-01 23:33:23', '2019-12-01 23:33:23'),
(32, 'MD.Jahangir Hussain', 'jahangir02061989@gmail.com', '01637516688', 'Nitol Electronics This is an establishment of Nitol Niloy Group. Currently it is a reputed company in our country. It is bringing quality products to our country. I would love to work as a sales representative for Nitol Electronics if given the opportunity. Please restrain me from working.', '2019-12-03 02:29:09', '2019-12-03 02:29:09'),
(33, 'Kurt Helena', 'helena.kurt@yahoo.com', '60-90-25-05', 'We\'re looking for website owners like yourself who want to automate their existing business and make some extra income... Continuous Residual Income and the product practically sells itself on auto pilot. Check out: http://trimurl.co/AutomateAnyBusiness.', '2019-12-07 02:36:03', '2019-12-07 02:36:03'),
(34, 'ThomasAnderson', 'anthonyFiery@gmail.com', '82187726779', 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successful person write: \r\nTelegram: @Tom_proinvest \r\nSkype: live:.cid.18b402177db5105c             Thomas Anderson \r\n \r\nhttp://bit.ly/2OUL6L8', '2019-12-08 07:53:32', '2019-12-08 07:53:32'),
(35, 'Alan Cohen', 'cohen.alan@outlook.com', '0498 79 73 29', 'hi there\r\nGet quality dofollow backlinks through PBN blogs Posts.\r\nIncrease ranks and visibility with PBN Marketing\r\n\r\nTake advantage of this great service today:\r\nhttps://www.monkeydigital.co/product/50-pbn-posts/\r\n\r\n\r\nthanks and regards\r\nMonkey Digital Team', '2019-12-09 10:48:43', '2019-12-09 10:48:43'),
(36, 'Evan Pierce', 'pierce.evan@outlook.com', '510-329-1913', 'Tired of paying for clicks and getting lousy results? Now you can post your ad on 1000s of ad websites and you only have to pay a single monthly fee. Never pay for traffic again! Get more info by visiting: http://www.instantadsposted.tech', '2019-12-09 14:23:45', '2019-12-09 14:23:45'),
(37, 'http://bit.ly/2XLB9ni', 'paul.smith@gmail.com', '84368567319', 'Please note a goodoffer for you. http://bit.ly/2DfXU9c', '2019-12-09 20:26:03', '2019-12-09 20:26:03'),
(38, 'Timothynic', 'no-reply-hilkomdigital@gmail.com', '85569577776', 'hi there \r\nI have just checked nitolelectronics.com for the ranking keywords and to see your SEO metrics and found that you website could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart boosting your business sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2019-12-13 17:31:54', '2019-12-13 17:31:54'),
(39, 'Eric Jones', 'eric@talkwithcustomer.com', '416-385-3200', 'Hello nitolelectronics.com,\r\n\r\nPeople ask, “why does TalkWithCustomer work so well?”\r\n\r\nIt’s simple.\r\n\r\nTalkWithCustomer enables you to connect with a prospective customer at EXACTLY the Perfect Time.\r\n\r\n- NOT one week, two weeks, three weeks after they’ve checked out your website nitolelectronics.com.\r\n- NOT with a form letter style email that looks like it was written by a bot.\r\n- NOT with a robocall that could come at any time out of the blue.\r\n\r\nTalkWithCustomer connects you to that person within seconds of THEM asking to hear from YOU.\r\n\r\nThey kick off the conversation.\r\n\r\nThey take that first step.\r\n\r\nThey ask to hear from you regarding what you have to offer and how it can make their life better. \r\n\r\nAnd it happens almost immediately. In real time. While they’re still looking over your website nitolelectronics.com, trying to make up their mind whether you are right for them.\r\n\r\nWhen you connect with them at that very moment it’s the ultimate in Perfect Timing – as one famous marketer put it, “you’re entering the conversation already going on in their mind.”\r\n\r\nYou can’t find a better opportunity than that.\r\n\r\nAnd you can’t find an easier way to seize that chance than TalkWithCustomer. \r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive and see what a difference “Perfect Timing” can make to your business.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS:  If you’re wondering whether NOW is the perfect time to try TalkWithCustomer, ask yourself this:\r\nWill doing what I’m already doing now produce up to 100X more leads?\r\nBecause those are the kinds of results we know TalkWithCustomer can deliver.  \r\nIt shouldn’t even be a question, especially since it will cost you ZERO to give it a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start your free 14-day test drive today.\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=nitolelectronics.com', '2019-12-17 18:16:54', '2019-12-17 18:16:54'),
(40, 'Mike Saffern', 'mike@graphicdesignisrael.co', '917-722-5127', 'Shalom, Mike here.\r\n\r\nYour website and business look great and both seem well established.\r\n\r\nI am messaging you today to compliment your business + let you know about the unreasonably low pricing u am charging for a limited time to new clients interested in my graphic design services. \r\n\r\nReply back to say Hi, ask to see my portfolio, or check out my site. \r\n\r\nEmail me: Mike@graphicdesignisrael.co Website: GraphicDesignIsrael.co\r\n\r\n--\r\nMike Saffern\r\ngraphicdesignisrael.co\r\nMike@graphicdesignisrael.co', '2019-12-19 21:30:42', '2019-12-19 21:30:42'),
(41, 'Claudio Loyola', 'claudio.loyola@hotmail.com', '0688 619 93 06', 'Looking for fresh buyers? Receive hundreds of people who are ready to buy sent directly to your website. Boost your profits fast. Start seeing results in as little as 48 hours. To get details Have a look at: http://www.moreleadsandsales.xyz', '2019-12-21 13:36:52', '2019-12-21 13:36:52'),
(42, 'Ibrahim Shapan', 'ibrahim.shapan@evaly.com.bd', '01711199586', 'Dear Concern\r\nThis is Ibrahim from evaly Limited, we are a online ecommerce site and we would like to enlist Nitol Electronics on our platform.\r\n\r\nCan we get a Concerns number so we can process?\r\n\r\nThanks', '2019-12-25 06:21:55', '2019-12-25 06:21:55'),
(43, 'Genia Niall', 'genia.niall38@googlemail.com', '781-249-3260', 'Sick of paying big bucks for ads that suck? Now you can post your ad on 1000s of ad sites and you only have to pay a single monthly fee. Never pay for traffic again! Get more info by visiting: http://www.instantadsposted.tech', '2019-12-27 22:56:25', '2019-12-27 22:56:25'),
(44, 'Grant Buck', 'grant.buck@gmail.com', '66 510 45 58', 'Do you want to promote your advertisement on thousands of advertising sites every month? One tiny investment every month will get you virtually unlimited traffic to your site forever! Get more info by visiting: http://www.postyouradsontonsofsites.xyz', '2019-12-29 00:05:14', '2019-12-29 00:05:14'),
(45, 'Kerri Walker', 'walker8294@gmail.com', '502-863-0094', 'It looks like you\'ve misspelled the word \"Refregerator\" on your website.  I thought you would like to know :).  Silly mistakes can ruin your site\'s credibility.  I\'ve used a tool called SpellScan.com in the past to keep mistakes off of my website.\r\n\r\n-Kerri', '2019-12-29 16:22:13', '2019-12-29 16:22:13'),
(46, 'DavidTic', 'raphaeClattestadly@gmail.com', '83294769599', 'Good day!  nitolelectronics.com \r\n \r\nDid you know that it is possible to send message completely lawful? \r\nWe put a new legal way of sending request through contact forms. Such forms are located on many sites. \r\nWhen such messages are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nAlso, messages sent through feedback Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', '2019-12-30 09:35:35', '2019-12-30 09:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `customer_logins`
--

CREATE TABLE `customer_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidNumber` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateOfBirth` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_aadress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_logins`
--

INSERT INTO `customer_logins` (`id`, `name`, `email`, `phone_number`, `nidNumber`, `dateOfBirth`, `Gender`, `present_aadress`, `permanent_address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aamra ltd', 'test@example.com', '01724623023', '5343457465878', '12/12/1995', 'Male', 'Kalsi, Mirpur', 'Kalsi, Mirpur', NULL, '$2y$12$6hIJ.V6D/UXsvHHBnz6VXuV03axTP2Vd4/P/6gUNUZF7ODynNuBL2', '71A91GHCs4WiXPVuHgnQ7zmiSB6xbzCZXGaRqRC0', '2019-07-22 05:54:17', '2019-07-29 05:52:48'),
(2, 'Noman', 'noman@massive.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$laWE7IijThzJmCv/qR8jQeXgzoMn1/iLqG/87luFgOwHrTqpitsf6', 'Fh1vxSdQVMozzy0rcJKD49yy3S4bQgbAS620HQDO', '2019-08-18 03:42:12', '2019-08-18 03:42:12'),
(3, 'ddd', 'ddd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Fa4NdD2o4bEZbBg1uTnAPOegz04Do2W6EaCf5S0JkcGtSxS2F0uSm', 'yCDr1V1DwW3X2XqiBsdlGLkJIZBUD0s21YugWjHo', '2019-08-19 04:11:55', '2019-08-19 04:11:55'),
(4, 'hhh', 'hhh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$FPnvTvekjyL1zDiZfLSf3uo4yKpKm91o3AvlkSqa8NwZHM9UhItNW', 'iQtOCDJ2iVzUZIqo22AemxxZrAVHgkbJASUrR09Y', '2019-08-19 04:22:28', '2019-08-19 04:22:28'),
(5, 'lorem@fuck.com', 'lorem@fuck.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kAXpbd5.wBq8U93NkNeXKOMKqNRlHJuLgK2lz7OwxEJNxvM/OwYxW', 'QaB94HdauEB7NKazk9raVFyzvrajdZU2v38xkK8o', '2019-08-19 05:05:04', '2019-08-19 05:05:04'),
(6, 'qqq', 'qqq@abcd.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$trzkDjhyEyx5rgZxd0De5uDf0a37rI9UAWGOydSfA8uktpI5eyZaa', 'iQtOCDJ2iVzUZIqo22AemxxZrAVHgkbJASUrR09Y', '2019-08-19 05:05:18', '2019-08-19 05:05:18'),
(7, 'Farhad khan', 'farhad.ntrack@gmail.com', '01936667984', '19872696654358394', '03-08-1987', 'Male', 'Charu Neer, 704/ka, Boro Moghbazar, Dhaka-1217.', 'Charu Neer, 704/ka, Boro Moghbazar, Dhaka-1217.', NULL, '$2y$10$XGCTzgmpmJS.onTqJoX4.eqiif/HbsVb1a/1BLM54NCak55O0YDO6', 'taldzHajr198s6k6BESdvlR9JBBhg5dkCXsD5sgR', '2019-09-19 00:14:58', '2019-09-19 00:22:42'),
(8, 'Nasimur', 'nasimur.jaman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$sOveHI9o.E5anA.O.kiH6uvR63zXtxU3i8rqGLLOw7.u18q6ys0Rm', 'jLdP2T3pwCJAKycJL3A2kPsVofXs3z1JRXeNPFHr', '2019-09-28 10:31:06', '2019-09-28 10:31:06'),
(9, 'Md.Mahbub Alam Khan', 'leomahbub@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$moXe3mpS8VPINzYek9i3XepA5epe7yzUc1G1WkWxsxhQ4KUDLYnIG', 'IFK1gDLZyGgw7VGq6iBP7NLKg9W47DcsftaLdh6h', '2019-09-29 23:46:39', '2019-09-29 23:46:39'),
(10, 'anis', 'anis.bdinfo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kfiUj5ZfUSQeC0IVgO6FXOXvhysH6HxW8o4yleFYbJAPtQVLFojdC', 'SzpdXA1oHug30QgSJGc6psvK87tALXm5UCgXALNo', '2019-09-30 00:50:17', '2019-09-30 00:50:17'),
(11, 'New Man', 'newman@gmail.com', '01724623023', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Y7.FcNnI8mRKvejJFgGzFOMBd4am6h5baLcHUbRryZ52EmqtY.NIC', '8kIkla2n5cr2XdPTBc2WmDQ1ToEAz9V68lZtbcWQ', '2019-10-14 00:07:59', '2019-10-14 00:07:59'),
(12, 'Saidal Asad', 'asad.ntrack@gmail.com', '01722840972', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$fJMzOWA7tY7iYdSaXEDW7ua0HqoP7WaVXfaA0bUcmLm9w8QQ5C0hi', 'UYrTZibR1KDmkNiRg31tVqSYq1cmynn3QeINOFSH', '2019-10-14 21:15:16', '2019-10-14 21:15:16'),
(13, 'Test', 'test@gmail.com', '01111111111', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$euBFFD55VLFdNgAkrteavOIw01IM.95ULUVgoYzFTJ2b0QOw9SJ32', 'uzXyDsvKv9W1Ehbw0GF6W5CW6iVFQM6T2rSxQmGF', '2019-10-16 03:49:14', '2019-10-16 03:49:14'),
(14, 'Name', 'e@mail.com', '01234567890', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$iBAcBZ5AlOzZl6FbhHWNfOGssqqagsszUAgDUPKm4uivdcjB7UJFi', 'rEuaInUiiqc0DU8yexbYEvsML9Apq5325ogvKBdA', '2019-10-16 04:21:14', '2019-10-16 04:21:14'),
(15, 'Admin test', 'support@sslcommerz.com', '09612226222', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$3.ro5oj8k6kxdimoCA1SXO9F77/lFc8obwdFHCLJWx19jGwhe5j1C', 'Uz7aHwYYkfsldE92B0QP0xNx9qTs36JFdw25iXw9', '2019-10-16 04:58:52', '2019-10-16 04:58:52'),
(16, 'Ali Hossen', 'hossen189@gmail.com', '008801955342275', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$8e.GoDMTexSyQVjVbJvH8.Vpm8/ZHONjT838WrXi3DGzZAn3WAHay', 'od5KCE83Z5EisGp3OdQqyL7BRMDpA1tl4y6VjBCX', '2019-10-17 11:15:45', '2019-10-17 11:15:45'),
(17, 'Md.Rasel Mia', 'samsul5879@gmail.com', '01976132506', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MoJ65YiWGHE9Mz0Wt2nxyeNb4F2RmufFH8.NmDGrTsktNZLEScxty', 'cNKSDeT18e9Ovj2GFCvFSdcHMXcRvNRy4ME3wSj2', '2019-10-20 20:55:42', '2019-10-20 20:55:42'),
(18, 'Moniza', 'badhon@gmail.com', '01955517111', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$lX160AbyjfbZhNQgPHn73OtKML2Q0kY9q34Bo.KDwQziFV1.ks8em', 'wg3YzDE5sOCXs6tDDcUFfeF9kI4LiW06OpasU8Md', '2019-10-21 02:54:15', '2019-10-21 02:54:15'),
(19, 'Kamrul Hassan', 'kamrulhassanrana@gmail.com', '01955517112', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$FV3Fj2U8AhZzWa4MLbfcvuKyEfQJuCVLqT2WLKcXMgBPHWOKf5pcq', 'IStrtwrqlgS5XdHK698I0vpbNrsMhVYvlqmMrbjn', '2019-10-21 03:03:12', '2019-10-21 03:03:12'),
(20, 'na', 'naimur.rahman@sslwireless.com', '01922626056', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$xPuQ2V9nhw60EVHZvdDHo.52k964Q/W5rkr3SpP1SObFCI2fzLDcC', '664lUNTKxNCkTViLdNPDTgphQd9NEpprwcqjwuiJ', '2019-10-21 04:24:09', '2019-10-21 04:24:09'),
(21, 'umme Islam', 'islam.pritom@yahoo.com', '01676524678', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$lKX9wJJa3s41L9L7vMkOyu3JVQHnH.VfUPJbsQKgg40bzoo1qi3HG', '5dJiUSt5V6z1ltGbjXBe0niz4zXJDCHu3kXvie4b', '2019-10-24 01:08:38', '2019-10-24 01:08:38'),
(22, 'Nirob', 'Smartnishat1@gmail.com', '01521570034', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$P9w58Hv.BVpYPIHI8Yzx4uNE.97E08K5l769/Uqc/rnjj9N1zAHTq', 'R1k73kleCxHG0ykQyY7NXVeE8GPmtliWikOYPIIg', '2019-10-27 14:26:25', '2019-10-27 14:26:25'),
(23, 'aongon faria', 'fariaaongon199717@gmail.com', '01682844823', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$znq9qk6E8t5GTRctoGLhremDxcH6LSR0NdkR68nwQ859oEm6bwTK.', 'QmJBwtbXDm8d3XSEzYtDz3G6AOtsxWLSepNd6ciX', '2019-10-29 00:19:08', '2019-10-29 00:19:08'),
(24, 'Fahim Dewanzee', 'fahimdewanzee@gmail.com', '01777339119', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6BIx4weSRbCuPacazKC9KeNYObrBnonHkd8qb5CnJlUrcg26u98uC', '7NDaCzNQN5pA7B39OWRbMsSpxTOuwqtrrNOKvpT7', '2019-11-07 01:53:11', '2019-11-07 01:53:11'),
(25, 'Forex + Cryptocurrency = $ 5911 per week: http://qr.garagebrewers.com/r.php?c=gY9Y', 'goldsend@schule.at', '82445684441', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$x7wk.cFcIhR7FQre4sF/EO2Jdwt8W/f06tgO8uUkJzZVsUjgJjWF2', 'eGuvZkGbm2SGHDFjYTKk3fDVcpjNJKl2OtnVeKAY', '2019-11-18 02:45:27', '2019-11-18 02:45:27'),
(26, 'Invest $ 6791 and get $ 9867 every month: https://ecuadortenisclub.com/earnmorebitcoins431553', 'annabell.priester@web.de', '81824714689', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$s9/3a9Z8IPtt2DLILkeTmewqzZLzn0w620SrBt3nvuRe5SI9OKzYu', 'kR3YlT0tV5rzJp6jHRJM0MfDkWhG0XEyKe5gzIwE', '2019-11-19 00:34:09', '2019-11-19 00:34:09'),
(27, 'How to get $ 7468 per day: https://us-au-ca.blogspot.com.es?eq=65', 'glanas@t-online.de', '82437217879', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6gHoEnhwzh59FN5C5h5nz.Ra7P7uz2ol/YYCr9B9Yb9QWHs6qw39K', 'ussdFqUWe7jEAeCAASQtH2qVL8h4BHvbgbItp60V', '2019-11-19 12:37:32', '2019-11-19 12:37:32'),
(28, 'How to earn on investments in Cryptocurrency from $ 7168 per day: https://hh-o-lp.blogspot.com.ar?qm=20', 'p.hatebur@web.de', '83414731643', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$pL4Es8KTiGIap3ggbVq8EuPgFXbjxL9sdYqeBQfg5bGTLR/kECn8C', 'ltdAoyLT7tHdk7piX0jBzipGmsxLRVOJs7F2rYwL', '2019-11-19 17:43:29', '2019-11-19 17:43:29'),
(29, 'Binary options + Cryptocurrency = $ 8573 per week: https://get-2-btc-per-day.blogspot.gr?t=93', 'nataschetschka@gmx.de', '86658399565', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$zLC3zyXKLcZAvk62VgSXXe4W0WuR1B76mYO5ZM8yrFGhITThVSSoa', 'gLArzBmCYy8lo8zY0MNKvK7GY14uu0d1cCkdc1fX', '2019-11-19 18:55:22', '2019-11-19 18:55:22'),
(30, 'How to invest in Bitcoin $ 7148 - get a return of up to 5523%: https://us-au-ca.blogspot.sk?kd=97', 'laura-comp@yahoo.de', '86494463628', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$2A.zOOvMIJ1KjjKcDbZWiutI4gIbyVduIdbXpXBbdmYG.OjWIkl5i', '3WCxOH2wZgC7fssdcXejfgsntnMEpIGUASvNWjA4', '2019-11-19 20:38:52', '2019-11-19 20:38:52'),
(31, 'Invest $ 6971 in Bitcoin once and get $ 61557 passive income per month: https://qq-au-sa.blogspot.co.nz?kd=62', 'pechovnik@msn.com', '88445883695', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$b/hTaYTdxwfpyeiPD48WDOdUzEp1.jO0xw2vZLMUu1WKExga/pFMW', 'y634KJzE5mXVwhXcVdyTEo4zi7hbHqn30Cf1ApZ5', '2019-11-21 02:20:24', '2019-11-21 02:20:24'),
(32, 'How to earn 0,952 BTC per week: https://kl-po-lo.blogspot.fr?el=71', 'gedevet_07400@web.de', '84842467615', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$0LwIYewMEgZ7G0y0gwQJKur.0yMGyOg0meriRAOSHxYe2SkTIxCkK', 'MLpXmahN1fQ5E1jIZDYTrQ9L8uRNsBts7CImhMAc', '2019-11-21 04:19:30', '2019-11-21 04:19:30'),
(33, 'How  would certainly you use $55629 to make more  loan: https://vv-bs-f.blogspot.be?nc=23', 'rebeyhiller@t-online.de', '83458237931', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OH887nqBQbgz8KoFJjIuxOPeN21Q0Sc3ReJLk0.6E6ylOWn.28TXm', 'AKPQ7mDciTyKUBnZYU1WffEIcDVMZYtP0SXen15V', '2019-11-21 13:59:43', '2019-11-21 13:59:43'),
(34, 'What\'s the  simplest way to  gain $69677 a month: https://get-3-btc-per-day.blogspot.in?e=41', 'terrilroberts@yahoo.com', '89478689678', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$du207gVN.ZujMfyl9IQfP.AnLURYeJy4vCPS0MRgxS7ZFBtV6ekgG', 'mkMthjy6pdKhPMefAEGu41AZkoyJWj1XfCbhlqHG', '2019-11-22 01:31:40', '2019-11-22 01:31:40'),
(35, 'Meet sexy girls in your city UK: http://plasdoupubto.tk/za7q', 'Irene.zanna@yahoo.it', '81216527611', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$0kotUWQVHkfkgtEBgBdv9efH2xfvVYIPAZVdx/elP2yBt5DEX2Hh6', 'm1BGR5MHwhz8l2KXsqlleaxz9Zhf9p0PsrSUHK8G', '2019-11-22 05:10:13', '2019-11-22 05:10:13'),
(36, 'Adult dating at 35 years old: http://kaecelfeado.tk/mtdz', 'JABDCDCJAB@yahoo.com', '86928441816', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$pnehZkWTsR9sD5KjfsQrPOxTw5o9DUq3Zhr5ZBcNDV0o5IwQPGXRi', 'xisqILPIYdXFROSxS9mkTLjUbQFamwr9cEPd4POq', '2019-11-22 15:14:33', '2019-11-22 15:14:33'),
(37, 'Adult dating american ladies online: http://alryoumatemp.tk/lzca', 'kmetk08@yahoo.com', '87633592267', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$j5HnjzIYPRGuZXe8mvJBiemVqgKrlOGl7Cny7JxqMtI8iM9tHkvAa', 'zpS0aUJHUaSZsIOU0I72NVtPNgaoUaDIRdJqS3N0', '2019-11-22 22:02:24', '2019-11-22 22:02:24'),
(38, 'Kamrul Hassan', 'ra_na6900@yahoo.com', '01955517112', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$lSPAOPrHPuF6op0aS76o/uYdAAL0wwtx4pe/MrnnBxYbEPKYLoyFC', 'UXY9GGnGoXyFX3ZfbJp9fyp5IxdxBhUdObFG7QgG', '2019-11-23 22:45:43', '2019-11-23 22:45:43'),
(39, 'Проверенный заработок в интернете от 8686 р. в день: http://reichlorleri.tk/9r3c', 'dr_pers@mail.ru', '89918538285', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$4gt3LP/m2kPMnY/O9IzLy.9sidDHkWyyzA7tqE2QNwowf6g2E1tDy', 'vTim98LeRmjc4UR6UiW4s0T5b5cDu18UkR5qJOB2', '2019-11-24 10:30:47', '2019-11-24 10:30:47'),
(40, 'На вашу карту поступило 82157 рублей: http://xsle.net/zarabotaymillion373854', 'nikokitnikokit@gmail.comg', '88227569424', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kUba3SsdCtzTKMNbHMzlMeMx.z5gGRmtmi5NNwU268biGEYEpQT36', 'r4O2ezK9Nae7WJJDsYUJTbBQ75blltbC8wgRZCVZ', '2019-11-25 05:00:03', '2019-11-25 05:00:03'),
(41, 'Md.Shamsur Rahman Khan', 'mdshamsuraz@gmail.com', '01730335413', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$heoREniizf0KmWp3sF9speyTZ8/x6wt2qygF.iGIx/H6evftzjjRC', 'o2ganoPrs8hcSZPi7yiv1kfbdfV0XkZjPh9X75Uy', '2019-11-25 05:52:02', '2019-11-25 05:52:02'),
(42, 'Earnings on the Internet from $5157 per day: http://arcenbirdbor.tk/o8sdn', 'oliver-ebersbach@t-online.de', '83294874359', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$N4irfiD3Y7ieyEmIZGxYROBVF/alzDVJFioAK4VvXZkDvQyLuT55.', 'lWFkyBCKuPqDmw72p2SsFuc6kRdTdGEcigjsfWBC', '2019-11-26 00:31:09', '2019-11-26 00:31:09'),
(43, 'Fast and Big money on the Internet from $6917 per day: http://egygimaq.gq/6nrd', 'meredith.benzazon@free.fr', '85726481432', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$BfXWnq.mtixCxdSvNgyZ3.QiU4rzbrntD8i/4BjB1685UeCspzIHq', 'YXBD7h0qvkvEA4F9i56q5pWGIMJY2AgZ07tFcXlq', '2019-11-28 07:24:50', '2019-11-28 07:24:50'),
(44, 'Sojib ahmed', 'Sojibchowdhury90@gmail.com', '01719077241', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$bIdrXFPfJGMzWhNHZB0d.O2ThNK6iIyx0ELEhHvHk8aRoBtNtvw0a', '8LqHgis0oJmkHy8acXGOB8ctMzvnjLsQHOcYc4tw', '2019-11-28 23:25:41', '2019-11-28 23:25:41'),
(45, 'Mohammad Jobaer', 'shuvo7166@gmail.com', '01746791536', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$VLiS5ztjTpfALsJMLbqLA.bVleMIA2z5tsb/GzIiPXHsjJqMaQ56O', 'yg1nxDpUbyczFjkwL0MvTvhw0XLEMIpgUjngkAn7', '2019-11-30 08:06:54', '2019-11-30 08:06:54'),
(46, 'MD.Jahangir Hussain', 'jahangir02061989@gmail.com', '01637516688', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$gKXQeZebVXD7270Bd1y23.lUWJKz26rMvgWP5AL53M5VXUmtC5gWO', 'b99jqgBHBmg5uHCyFQJtShTFXMNmNGp26kZYOZgn', '2019-12-03 02:07:12', '2019-12-03 02:07:12'),
(47, 'Pertho', 'pertho.khandaker@gmail.com', '01712792125', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$S0HTA/kOhiqJi0xgq6euSuYLebxmH5y8xYxqKDFCIO1GyD5TWCyqO', 'dOtHeZheDU3HLt228Mie406kDOY48u5f2NsjkxFs', '2019-12-03 06:01:33', '2019-12-03 06:01:33'),
(48, 'Adesh Chandra', 'adeshkumarray27@gmail.com', '01701987744', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$KauY/pw.enhSRIYFM7aeZ.fGLAKKfjgi0thC5EbvW97M1xfTeWEFC', 'UkvhvxBF4k3c4R7w38LUF4Y3RKPRgUizS0hBbFMK', '2019-12-08 08:31:27', '2019-12-08 08:31:27'),
(49, 'Verified earnings on the Internet from $7641 per week: https://q1-get-10-bitcoin-162.blogspot.de?r=12', 'timothylawhon@nethere.com', '87169558627', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MTqIaOyQAdjy9eAXov2O5O4lyGd3DpzWts6aEpZRso7kyjDgT.kNO', 'wMJd8klTEVMdg5k1Z8CZXmh7yH0oOiEXV13NMncW', '2019-12-09 05:48:39', '2019-12-09 05:48:39'),
(50, '84 Legit Ways To Make Money And Passive Income Online - How To Make Money Online $7265 per day: https://q2-earn-5000usd-per-week-162.blogspot.ro?y=62', 'zehra_01@hotmail.de', '81955515486', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$IDZMjxj2wtoZSdQNLVhUfOzWy8F31Oy/7xS30rhJ.K8qX4lATidLC', '2MY03GSaO63oH1V7FZo4yH1aNd5wjdFcifIjMVDX', '2019-12-10 11:56:16', '2019-12-10 11:56:16'),
(51, 'Verified earnings on the Internet from $7528 per week: https://q1-get-7-bitcoin-162.blogspot.nl?w=92', 'jackps@epost.de', '88435961936', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$PYzxR201JD1NKbX5OgyDzOgKMLL8k2wlE7fSgrsWfYlRoVYeqtuLO', 'kmUBsGiodvCGv9GMk4Msf7uYlZ2jWANnVpK1e3mN', '2019-12-11 07:59:40', '2019-12-11 07:59:40'),
(52, 'Earnings on the Internet from $6132 per week: https://q3-get-1-bitcoin-162.blogspot.de?i=41', 'immer.93@web.de', '88236869512', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$JBgC53mOlI4eifhaZgiwpeX0K6QU6WHFfsNn72Wqdeo2b9t6kxyba', 'xrDHjb0lw0lHPQFIQJeYcvClJmw8fl537qr9cZpX', '2019-12-11 09:10:16', '2019-12-11 09:10:16'),
(53, 'A proven way to make money on the Internet from $5243 per week: https://q2-get-4-bitcoin-162.blogspot.fr?x=51', 'mukunda108@gmx.de', '86655383764', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$NZiudWu7v6UUfuEFRKR8qe7pr4vXrSxB1RWQVmcMMAl5Ri1LXwLtm', 'GtbJ1AcOaTOTdfiuv1kElYYCFyfU0bHqp1LAoItu', '2019-12-12 01:08:02', '2019-12-12 01:08:02'),
(54, 'Самое надежное онлайн казино, ВЫИГРАЙ 500000 РУБЛЕЙ СЕЙЧАС: https://darknesstr.com/winjackpot73361', 'efim1941@yandex.ru', '88385461146', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kNBtS0t0UMHjBACL5hyND.IlD30c.trjzA85SKCBH3swBTieZ5mRG', 'aNVcAj3ihnxtefOwK2dsNADbTTLACR8PWSzZsCKS', '2019-12-12 06:48:49', '2019-12-12 06:48:49'),
(55, 'Список лучших онлайн казино, ПРИВЕТСТВЕННЫЙ БОНУС %50 НА ДЕПОЗИТ + 100 ФРИСПИНОВ: https://bogazicitente.com/onlinecasino322559', 'ragilia2010@mail.ru', '84795444825', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Enq9lawhEWO3K8xpHESeyu1sILSCyKgdYFUlXvOgK3AvkYjenjEre', 'JgTA2osBwmJNkOgXdPdQ563xVaqUzFnB7bsbPKLj', '2019-12-12 13:10:50', '2019-12-12 13:10:50'),
(56, 'Kurazhrix', 'kurazh1212@yandex.ru', '81937595894', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ihb6qAggu5sewEZZsgf64um/xFL9PaDKfNccB9jhCbEAMzPzbZP7e', '8qoJiZkrLMvlnvG86t7gXa2hU81rdbp8nyI8jC2j', '2019-12-14 18:41:01', '2019-12-14 18:41:01'),
(57, 'Md.Jahangir Bhuiyan', 'jahangir5000@gmail.com', '01678083674', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$79VpPE21Nw.WSWSdCBYDh.p1PnBgCOrh12V2SG2zwpH7RuFqp4z.u', 'WONkhpLPHG7rggkpZIKz3snKxFElQ9k07gyIQuBF', '2019-12-18 05:58:02', '2019-12-18 05:58:02'),
(58, 'Michaeljouby', 'zinaidagornacheva@rambler.ru', '85118966131', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$4MV0fu.JByuIEoniG7V9FO/Ru2TH5NduE7LYrrdCAqLHxAH0kw21a', '5TFegG81VnrOvyAsp17qBChsEHeNAZyqHShw0pde', '2019-12-19 06:16:33', '2019-12-19 06:16:33'),
(59, 'Azmat', 'konabarighatail@gmail.com', '01766812602', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$imTwWgkaIY8bCHwpn7DdPuvlAB3F2cv8GFxg.ot.bHkFvN59FXR3S', 'c2deYUVv9CI0zdQqraFP3OoXPIh1rfgocrcYEsIk', '2019-12-23 10:30:39', '2019-12-23 10:30:39'),
(60, 'Kazi amdadul Islam', 'kaziamdadulislam55@gmail.com', '01811989655', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MxCczbPIOGO5JDKIWwbyiu/E1L9oXElYA/TGRgcn8Y/oi80RWSeSu', 'l3UZwazXabTd3sdiP2diZKcAnh5RJAV5qx2LctU1', '2019-12-24 21:39:01', '2019-12-24 21:39:01'),
(61, 'mansur', 'nirzoralam@gmail.com', '01670123091', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$9l5CQLpEDzcRXV6pL7IFoeVL9pxvKH/lTEPoNeWbGLvmFCmYKAvtS', 'msHWfGK0gkLBsGuEkMa2l2hdotKacOHgPcP52XUY', '2019-12-25 14:05:36', '2019-12-25 14:05:36'),
(62, 'Tawrat Jahan', 'tawrat1990@gmail.com', '01711281897', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OXEW07RW7tJZ8iQNQZeTl.JLMfcL69ewJnAJ25XrcZxQjjd1cBkCG', 'uk2F8H6vEFM1tjRG7MNDwTfAShFHk0ezjtfB4rqC', '2019-12-26 11:50:29', '2019-12-26 11:50:29'),
(63, 'Mohammed Shahjahan Qureshi', 'polashqureshi@gmail.com', '01713328153', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$nc9t/UDg8PXrmZpSmL1LVuZYgSsJ6yLsy4fNqbPYgrcUZnOTVuRMu', 'wKrIYkBOhMaRpoKNeIchnjwGWLLjddFxSFbM1DBy', '2019-12-28 12:13:29', '2019-12-28 12:13:29'),
(64, 'Rikon Khan', 'rikonkhan1988@gmail.com', '01914656236', '19884795131557871', '32-12-1988', 'Mel', 'Nita Company Ltd, Basundia, Jessore.', 'Nita Company Ltd, Basundia, Jessore.', NULL, '$2y$10$ycVXL8Dv29f1PYXazjRgbeH1pYuhwhxxAYKnRLuSGpYrO2qisoH.q', 'XnNcwgKRgSeQUfy2PBCwXnigZFNWXGnnfi37RnSy', '2019-12-29 03:48:13', '2019-12-29 03:52:46'),
(65, 'Al Shohel', 'shohelseu88@gmail.com', '01704194024', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$rwGF0XLZ2z0ZmrXqPRjHe.YQFXddE3EV7Dw4rp0DbLJ14WOmtf/.O', 'wMk7PNParVoaGqn0rCgf4kFMPwwwFTICbcUCm4jF', '2019-12-29 04:22:13', '2019-12-29 04:22:13'),
(66, 'Zahid Newaz', 'newazzahid@ymail.com', '01710049909', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$qKqoVOpJqEaOSTRJv5d5OOkrMtdwE5qCAsWKfZpLcEoijkV1FJFEi', 'bAckDaG8emgBZsxXmK0zlxXpPbb2RKtecsbB6WFv', '2019-12-29 10:16:18', '2019-12-29 10:16:18'),
(67, 'Dilip', 'dilipkb813@gmail.com', '01715791813', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$HD1X7/HzH2MmlOu1yk5lsOixwE0cPJvv20MmD0vT3PPpaSZf6BpD6', 'LHvpbQgXs6K7mIqYIJcWdrqIOg2pWKvQ2VWBTrdU', '2020-01-01 18:11:48', '2020-01-01 18:11:48'),
(68, 'Md. Ismail Hossen', 'imail2226@diu.edu.bd', '01788111408', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Io/4xApCwv0MP2soDgk4TewAmopAV0zn7udt/l3Wzcu04oVzdAjYW', 'Xlpz67WIU7GwnTNTYL71g0wV97FWxusRISCbV2UX', '2020-02-18 22:01:58', '2020-02-18 22:01:58'),
(69, 'Md. Ismail Hossen', 'test@example11.com', '01788111408', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Z91GO3cdQtD2qmouQMcgSut1zAQBLnWci2TkatAD8ousKFj9/bI1S', 'CpzuDsJ00wuFT6vLeEzZQMGOuABUXvHcuaX1Cf3H', '2020-02-20 03:14:44', '2020-02-20 03:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `shipping_detail_id` int(10) UNSIGNED NOT NULL,
  `delivering_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2018_11_06_110725_create_categories_table', 1),
(4, '2018_11_11_100357_create_products_table', 2),
(5, '2018_11_12_062741_create_addons_table', 1),
(6, '2018_11_12_062806_create_ingredients_table', 1),
(7, '2018_11_13_055514_create_product_elements_table', 1),
(8, '2018_11_13_060048_create_products_categories_table', 1),
(9, '2018_11_26_125302_create_orders_table', 1),
(10, '2018_11_26_125325_create_order_details_table', 1),
(11, '2018_11_26_131114_create_stores_table', 1),
(12, '2018_11_26_131308_create_take_aways_table', 1),
(13, '2018_11_26_131310_create_shipping_details_table', 1),
(14, '2018_11_26_131317_create_deliveries_table', 1),
(15, '2018_11_26_131353_create_customers_table', 1),
(16, '2018_11_26_131508_create_billing_details_table', 1),
(17, '2018_12_27_094829_order_addons', 1),
(18, '2019_01_15_043821_user_stores', 1),
(19, '2019_01_16_075457_create_attachments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_login_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `order_total` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Delivery',
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_status` enum('PENDING','VALID','VALIDATED','SUCCESS','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_login_id`, `store_id`, `order_total`, `order_type`, `order_status`, `payment_status`, `is_deleted`, `status_description`, `address`, `country`, `zip_code`, `city`, `created_at`, `updated_at`) VALUES
('1', NULL, NULL, '2.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-01-17 02:19:33', '2019-10-27 06:33:33'),
('10', 1, NULL, '15.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-28 04:45:13', '2019-10-27 06:33:42'),
('11', 1, NULL, '1.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-29 04:14:37', '2019-10-27 06:34:00'),
('12', 1, NULL, '448.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-07 02:10:02', '2019-12-09 02:27:52'),
('2', NULL, NULL, '666.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-05-29 20:57:05', '2019-07-22 21:11:00'),
('3', NULL, NULL, '666.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-18 00:49:56', '2019-07-22 21:10:55'),
('4', NULL, NULL, '555.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-21 00:40:44', '2019-12-09 02:28:04'),
('5', 1, NULL, '333.00', 'Delivery', 'Processing', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-22 22:18:51', '2019-12-09 02:28:21'),
('6', 1, NULL, '4.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-23 22:49:55', '2019-12-09 02:28:26'),
('7', 1, NULL, '333.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-25 00:32:31', '2019-12-09 02:28:49'),
('8', 1, NULL, '222.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-25 00:33:43', '2019-12-09 02:28:54'),
('9', 1, NULL, '3.00', 'Delivery', 'Shipped', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-07-28 02:50:29', '2019-12-09 02:28:59'),
('NN1565198409', 1, NULL, '222.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-07 11:20:09', '2019-12-09 02:29:04'),
('NN1565199784', 1, NULL, '450.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-07 11:43:04', '2019-12-09 02:29:09'),
('NN1565199902', 1, NULL, '200.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-07 11:45:02', '2019-12-09 02:29:14'),
('NN1565200051', 1, NULL, '400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-07 11:47:31', '2019-12-09 02:29:18'),
('NN1565204829', 1, NULL, '389.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-07 13:07:09', '2019-12-09 02:29:23'),
('NN1565204944', 1, NULL, '4.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-07 13:09:04', '2019-12-09 02:29:28'),
('NN1566191195', 1, NULL, '333.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-18 23:06:35', '2019-12-09 02:29:33'),
('NN1566191352', 1, NULL, '672.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-18 23:09:12', '2019-12-09 02:29:38'),
('NN1566192238', 1, NULL, '10', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-18 23:23:58', '2019-12-09 02:29:42'),
('NN1566193284', 1, NULL, '1,215.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-18 23:41:24', '2019-12-09 02:29:49'),
('NN1566197805', 1, NULL, '320.00', 'Delivery', 'Processing', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-08-19 00:56:45', '2019-12-09 02:29:54'),
('NN1568873804', 7, NULL, '36,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-09-19 00:16:44', '2019-12-09 02:29:59'),
('NN1569994326', 1, NULL, '21,975.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-01 23:32:06', '2019-12-09 02:30:03'),
('NN1570099475', 1, NULL, '1,000.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-03 04:44:35', '2019-12-09 02:30:07'),
('NN1570099476', 1, NULL, '1,000.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-03 04:44:36', '2019-12-09 02:30:12'),
('NN1571219554', 13, NULL, '33,000.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 03:52:34', '2019-12-09 02:30:16'),
('NN1571223577', 15, NULL, '93,500.00', 'Delivery', 'Processing', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 04:59:37', '2019-12-09 02:30:20'),
('NN1571288616', 13, NULL, '44,650.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:03:36', '2019-12-09 02:30:25'),
('NN1571288673', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:04:33', '2019-12-09 02:30:30'),
('NN1571288700', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:05:00', '2019-12-09 02:30:34'),
('NN1571288742', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:05:42', '2019-12-09 02:30:38'),
('NN1571288763', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:06:03', '2019-12-09 02:30:43'),
('NN1571288836', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:07:16', '2019-12-09 02:30:47'),
('NN1571288871', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:07:51', '2019-12-09 02:30:51'),
('NN1571288973', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:09:33', '2019-12-09 02:30:55'),
('NN1571290243', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:30:43', '2019-12-09 02:30:59'),
('NN1571290298', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:31:38', '2019-12-09 02:31:02'),
('NN1571290953', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:42:33', '2019-12-09 02:31:09'),
('NN1571290987', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:43:07', '2019-12-09 02:31:13'),
('NN1571291099', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:44:59', '2019-12-09 02:35:50'),
('NN1571291261', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:47:41', '2019-12-09 02:35:48'),
('NN1571291301', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:48:21', '2019-12-09 02:35:45'),
('NN1571291304', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:48:24', '2019-12-09 02:31:17'),
('NN1571291314', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:48:34', '2019-12-09 02:35:43'),
('NN1571291481', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:51:21', '2019-12-09 02:35:40'),
('NN1571291554', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:52:34', '2019-12-09 02:35:38'),
('NN1571291639', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:53:59', '2019-12-09 02:35:36'),
('NN1571291668', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:54:28', '2019-12-09 02:35:53'),
('NN1571291712', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:55:12', '2019-12-09 02:35:28'),
('NN1571291824', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:57:04', '2019-12-09 02:35:26'),
('NN1571291857', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:57:37', '2019-12-09 02:35:24'),
('NN1571291908', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:58:28', '2019-12-09 02:35:21'),
('NN1571291956', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-16 23:59:16', '2019-12-09 02:35:19'),
('NN1571292021', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:00:21', '2019-12-09 02:35:17'),
('NN1571292103', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:01:43', '2019-12-09 02:35:15'),
('NN1571292289', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:04:49', '2019-12-09 02:35:12'),
('NN1571292337', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:05:37', '2019-12-09 02:35:31'),
('NN1571292361', 13, NULL, '115,800.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:06:01', '2019-12-09 02:35:09'),
('NN1571292393', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:06:33', '2019-12-09 02:35:03'),
('NN1571292433', 13, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:07:13', '2019-12-09 02:35:01'),
('NN1571292459', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:07:39', '2019-12-09 02:34:58'),
('NN1571292488', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:08:08', '2019-12-09 02:35:06'),
('NN1571292511', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:08:31', '2019-12-09 02:34:54'),
('NN1571292528', 13, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:08:48', '2019-12-09 02:35:34'),
('NN1571292567', 13, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:09:27', '2019-12-09 02:34:48'),
('NN1571292571', 13, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:09:31', '2019-12-09 02:34:44'),
('NN1571292597', 13, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:09:57', '2019-12-09 02:34:41'),
('NN1571292635', 13, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:10:35', '2019-12-09 02:34:39'),
('NN1571292674', 13, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:11:14', '2019-12-09 02:34:51'),
('NN1571292719', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:11:59', '2019-12-09 02:34:37'),
('NN1571292761', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:12:41', '2019-12-09 02:34:34'),
('NN1571292813', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:13:33', '2019-12-09 02:34:31'),
('NN1571292822', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:13:42', '2019-12-09 02:34:25'),
('NN1571292859', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:14:19', '2019-12-09 02:34:28'),
('NN1571292889', 13, NULL, '55,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:14:49', '2019-12-09 02:35:56'),
('NN1571292958', 13, NULL, '55,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:15:58', '2019-12-09 02:34:23'),
('NN1571292989', 13, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:16:29', '2019-12-09 02:34:19'),
('NN1571293036', 13, NULL, '41,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:17:16', '2019-12-09 02:34:17'),
('NN1571293091', 13, NULL, '41,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:18:11', '2019-12-09 02:34:15'),
('NN1571293110', 13, NULL, '41,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 00:18:30', '2019-12-09 02:34:10'),
('NN1571295697', 13, NULL, '41,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 01:01:37', '2019-12-09 02:34:21'),
('NN1571298258', 13, NULL, '63,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 01:44:18', '2019-12-09 02:34:08'),
('NN1571298724', 13, NULL, '63,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 01:52:04', '2019-12-09 02:33:57'),
('NN1571301241', 13, NULL, '63,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 02:34:01', '2019-12-09 02:34:05'),
('NN1571302516', 13, NULL, '63,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 02:55:16', '2019-12-09 02:33:51'),
('NN1571303254', 13, NULL, '63,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 03:07:34', '2019-12-09 02:33:46'),
('NN1571303715', 13, NULL, '63,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 03:15:15', '2019-12-09 02:33:48'),
('NN1571304619', 13, NULL, '63,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 03:30:19', '2019-12-09 02:33:53'),
('NN1571306324', 13, NULL, '13,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 03:58:44', '2019-12-09 02:33:43'),
('NN1571306407', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 04:00:07', '2019-12-09 02:33:41'),
('NN1571306448', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 04:00:48', '2019-12-09 02:33:37'),
('NN1571306500', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17 04:01:40', '2019-12-09 02:33:35'),
('NN1571552217', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:16:57', '2019-12-09 02:33:39'),
('NN1571553201', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:33:21', '2019-12-09 02:33:33'),
('NN1571553653', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:40:53', '2019-12-09 02:33:30'),
('NN1571553704', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:41:44', '2019-12-09 02:33:55'),
('NN1571553886', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:44:46', '2019-12-09 02:33:28'),
('NN1571553963', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:46:03', '2019-12-09 02:33:26'),
('NN1571554231', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:50:31', '2019-12-09 02:33:23'),
('NN1571554276', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:51:16', '2019-12-09 02:33:21'),
('NN1571554308', 1, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 00:51:48', '2019-12-09 02:33:17'),
('NN1571558725', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:05:25', '2019-12-09 02:33:15'),
('NN1571558770', 1, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:06:10', '2019-12-09 02:33:12'),
('NN1571558898', 1, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:08:18', '2019-12-09 02:33:10'),
('NN1571559386', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:16:26', '2019-12-09 02:33:19'),
('NN1571559552', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:19:12', '2019-12-09 02:33:05'),
('NN1571559582', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:19:42', '2019-12-09 02:33:03'),
('NN1571559654', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:20:54', '2019-12-09 02:33:00'),
('NN1571559689', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:21:29', '2019-12-09 02:32:59'),
('NN1571559756', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:22:36', '2019-12-09 02:32:57'),
('NN1571559849', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:24:09', '2019-12-09 02:32:54'),
('NN1571560009', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:26:49', '2019-12-09 02:33:08'),
('NN1571560097', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:28:17', '2019-12-09 02:32:49'),
('NN1571560228', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:30:28', '2019-12-09 02:32:48'),
('NN1571560285', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:31:25', '2019-12-09 02:32:45'),
('NN1571560356', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:32:36', '2019-12-09 02:32:43'),
('NN1571560421', 1, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:33:41', '2019-12-09 02:32:52'),
('NN1571561195', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 02:46:35', '2019-12-09 02:34:13'),
('NN1571562344', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 03:05:44', '2019-12-09 02:32:40'),
('NN1571562855', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 03:14:15', '2019-12-09 02:35:59'),
('NN1571562916', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 03:15:16', '2019-12-09 02:32:32'),
('NN1571562926', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 03:15:26', '2019-12-09 02:32:30'),
('NN1571563174', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 03:19:34', '2019-12-09 02:32:28'),
('NN1571564263', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 03:37:43', '2019-12-09 02:32:23'),
('NN1571565592', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 03:59:52', '2019-12-09 02:32:25'),
('NN1571565627', 1, NULL, '107,400.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 04:00:27', '2019-12-09 02:32:18'),
('NN1571568251', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 04:44:11', '2019-12-09 02:32:16'),
('NN1571568556', 1, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 04:49:16', '2019-12-09 02:32:21'),
('NN1571592869', 1, NULL, '33,000.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 11:34:29', '2019-12-09 02:32:35'),
('NN1571630140', 13, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 21:55:40', '2019-12-09 02:32:12'),
('NN1571631890', 13, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 22:24:50', '2019-12-09 02:32:10'),
('NN1571634275', 13, NULL, '93,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:04:35', '2019-12-09 02:32:07'),
('NN1571634344', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:05:44', '2019-12-09 02:32:04'),
('NN1571634922', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:15:22', '2019-12-09 02:32:01'),
('NN1571634955', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:15:55', '2019-12-09 02:31:59'),
('NN1571635087', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:18:07', '2019-12-09 02:31:56'),
('NN1571635197', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:19:57', '2019-12-09 02:31:50'),
('NN1571635501', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:25:01', '2019-12-09 02:31:48'),
('NN1571635658', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:27:38', '2019-12-09 02:31:52'),
('NN1571636143', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:35:43', '2019-12-09 02:31:46'),
('NN1571636155', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:35:55', '2019-12-09 02:31:44'),
('NN1571636182', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:36:22', '2019-12-09 02:31:40'),
('NN1571642842', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:27:22', '2019-12-09 02:31:37'),
('NN1571642901', 13, NULL, '8,075.00', 'Delivery', 'Processing', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:28:21', '2019-12-09 02:31:35'),
('NN1571643294', 13, NULL, '22,325.00', 'Delivery', 'Processing', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:34:54', '2019-12-09 02:31:33'),
('NN1571643654', 13, NULL, '8,075.00', 'Delivery', 'Failed', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:40:54', '2019-12-09 02:31:30'),
('NN1571643740', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:42:20', '2019-12-09 02:31:42'),
('NN1571643801', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:43:21', '2019-12-09 02:32:14'),
('NN1571644047', 13, NULL, '22,325.00', 'Delivery', 'Cancelled', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:47:27', '2019-12-09 02:31:26'),
('NN1571644178', 13, NULL, '22,325.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:49:38', '2019-12-09 02:31:28'),
('NN1571646611', 13, NULL, '8,075.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 02:30:11', '2019-12-09 02:31:21'),
('NN1571648927', 19, NULL, '18,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 03:08:47', '2019-11-02 02:24:25'),
('NN1571650392', 19, NULL, '13,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 03:33:12', '2019-11-02 02:24:22'),
('NN1571650621', 19, NULL, '57,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 03:37:01', '2019-11-02 02:24:20'),
('NN1571653510', 20, NULL, '2,500.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-21 04:25:10', '2019-11-02 02:24:16'),
('NN1571743857', 7, NULL, '6,999.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-22 05:30:57', '2019-11-02 02:23:55'),
('NN1572247102', 19, NULL, '26,000.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-10-28 01:18:22', '2019-11-02 02:23:47'),
('NN1573962096', 1, NULL, '13,900.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-11-16 21:41:36', '2019-12-09 02:31:19'),
('NN1574571129', 38, NULL, '15,750.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-11-23 22:52:09', '2019-12-09 02:31:23'),
('NN1574740095', 1, NULL, '12,450.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-11-25 21:48:15', '2019-12-09 02:32:38'),
('NN1574742056', 1, NULL, '12,450.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-11-25 22:20:56', '2019-12-09 02:36:03'),
('NN1574744963', 1, NULL, '12,450.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-11-25 23:09:23', '2019-12-09 02:36:05'),
('NN1574745045', 1, NULL, '12,450.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-11-25 23:10:45', '2019-12-09 02:36:09'),
('NN1574745125', 1, NULL, '12,450.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-11-25 23:12:05', '2019-12-09 02:36:11'),
('NN1575876443', 38, NULL, '15,750.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-12-09 01:27:23', '2019-12-26 00:52:47'),
('NN1575876922', 38, NULL, '0.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-12-09 01:35:22', '2019-12-09 02:36:18'),
('NN1575877082', 38, NULL, '110,700.00', 'Delivery', 'Delivered', 'PENDING', 0, NULL, NULL, NULL, NULL, NULL, '2019-12-09 01:38:02', '2019-12-09 02:27:42'),
('NN1575882839', 38, NULL, '36,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, NULL, NULL, NULL, NULL, '2019-12-09 03:13:59', '2019-12-09 03:13:59'),
('NN1575888117', 7, NULL, '1,500.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, NULL, NULL, NULL, NULL, '2019-12-09 04:41:57', '2019-12-09 04:41:57'),
('NN1575891497', 7, NULL, '1,500.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, NULL, NULL, NULL, NULL, '2019-12-09 05:38:17', '2019-12-09 05:38:17'),
('NN1576058233', 7, NULL, '69,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, NULL, NULL, NULL, NULL, '2019-12-11 03:57:13', '2019-12-11 03:57:13'),
('NN1576670513', 57, NULL, '6,999.00', 'Delivery', 'Delivered', 'PENDING', 1, NULL, NULL, NULL, NULL, NULL, '2019-12-18 06:01:53', '2020-01-02 02:40:58'),
('NN1577342828', 38, NULL, '15,750.00', 'Delivery', 'Pending', 'PENDING', 1, NULL, 'Goran, Khilgaon, Dhaka', 'Bangladesh', '1219', 'Dhaka', '2019-12-26 00:47:08', '2019-12-28 02:22:12'),
('NN1580622271', 1, NULL, '1,200.00', 'Delivery', 'Delivered', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-01 23:44:31', '2020-02-01 23:45:59'),
('NN1582086033', 68, NULL, '4,950.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '345', 'dhaka', '2020-02-18 22:20:33', '2020-02-18 22:20:33'),
('NN1582086653', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '345', 'dhaka', '2020-02-18 22:30:53', '2020-02-18 22:30:53'),
('NN1582087270', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '345', 'dhaka', '2020-02-18 22:41:10', '2020-02-18 22:41:10'),
('NN1582087320', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '345', 'dhaka', '2020-02-18 22:42:00', '2020-02-18 22:42:00'),
('NN1582087374', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '345', 'dhaka', '2020-02-18 22:42:54', '2020-02-18 22:42:54'),
('NN1582088026', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '345', 'dhaka', '2020-02-18 22:53:46', '2020-02-18 22:53:46'),
('NN1582088066', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '345', 'dhaka', '2020-02-18 22:54:26', '2020-02-18 22:54:26'),
('NN1582092639', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-19 00:10:39', '2020-02-19 00:10:39'),
('NN1582092729', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-19 00:12:09', '2020-02-19 00:12:09'),
('NN1582096200', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-19 01:10:00', '2020-02-19 01:10:00'),
('NN1582096244', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-19 01:10:44', '2020-02-19 01:10:44'),
('NN1582096305', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-19 01:11:45', '2020-02-19 01:11:45'),
('NN1582096348', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-19 01:12:28', '2020-02-19 01:12:28'),
('NN1582096742', 68, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '234', 'dhaka', '2020-02-19 01:19:02', '2020-02-19 01:19:02'),
('NN1582191867', 69, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 03:44:27', '2020-02-20 03:44:27'),
('NN1582191885', 69, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 03:44:45', '2020-02-20 03:44:45'),
('NN1582191920', 69, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 03:45:20', '2020-02-20 03:45:20'),
('NN1582191954', 69, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 03:45:54', '2020-02-20 03:45:54'),
('NN1582193484', 69, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 04:11:24', '2020-02-20 04:11:24'),
('NN1582193683', 69, NULL, '43,900.00', 'Delivery', 'Pending', 'PENDING', 0, NULL, 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 04:14:43', '2020-02-20 04:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_addons`
--

CREATE TABLE `order_addons` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_detail_id` smallint(6) NOT NULL,
  `addon_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` smallint(6) NOT NULL,
  `customer_login_id` int(11) DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `customer_login_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 4, 'Product - 1', 222.00, 12, '2019-01-17 02:19:34', '2019-01-17 02:19:34'),
(2, '2', 1, 5, 'LCD television', 222.00, 3, '2019-05-29 20:57:06', '2019-05-29 20:57:06'),
(3, '3', 1, 3, 'LCD television', 222.00, 3, '2019-07-18 00:49:57', '2019-07-18 00:49:57'),
(4, '4', 1, 3, 'LCD television', 222.00, 1, '2019-07-21 00:40:44', '2019-07-21 00:40:44'),
(5, '4', 4, 2, 'Android TV', 333.00, 1, '2019-07-21 00:40:44', '2019-07-21 00:40:44'),
(6, '5', 4, 1, 'Android TV', 333.00, 1, '2019-07-22 22:18:52', '2019-07-22 22:18:52'),
(7, '6', 43, 1, 'Atashi AC', 4000.00, 1, '2019-07-23 22:49:56', '2019-07-23 22:49:56'),
(8, '7', 4, 1, 'Android TV', 333.00, 1, '2019-07-25 00:32:31', '2019-07-25 00:32:31'),
(9, '8', 7, 1, 'NA-32LSU1', 222.00, 1, '2019-07-25 00:33:43', '2019-07-25 00:33:43'),
(10, '9', 37, 1, 'Splite AC', 3000.00, 1, '2019-07-28 02:50:29', '2019-07-28 02:50:29'),
(11, '10', 7, 1, 'NA-32LSU1', 222.00, 1, '2019-07-28 04:45:13', '2019-07-28 04:45:13'),
(12, '10', 1, 1, 'LCD television', 222.00, 1, '2019-07-28 04:45:14', '2019-07-28 04:45:14'),
(13, '10', 38, 1, 'MOUNTED AC', 5060.00, 3, '2019-07-28 04:45:14', '2019-07-28 04:45:14'),
(14, '11', 12, 1, 'NA-32LU2', 499.00, 3, '2019-07-29 04:14:37', '2019-07-29 04:14:37'),
(15, '11', 23, 1, 'NRA-22SB-GBL (Violet)', 356.00, 1, '2019-07-29 04:14:37', '2019-07-29 04:14:37'),
(16, '12', 14, 1, 'NMC22 900-A', 199.00, 1, '2019-08-07 02:10:02', '2019-08-07 02:10:02'),
(17, '12', 31, 1, 'Inverter AC', 249.00, 1, '2019-08-07 02:10:02', '2019-08-07 02:10:02'),
(18, 'NN1565198409', 1, 1, 'LCD television', 222.00, 1, '2019-08-07 11:20:09', '2019-08-07 11:20:09'),
(19, 'NN1565199784', 9, 1, 'NA-55LSU1', 450.00, 1, '2019-08-07 11:43:04', '2019-08-07 11:43:04'),
(20, 'NN1565199902', 13, 1, 'NRA15 H500-B', 200.00, 1, '2019-08-07 11:45:02', '2019-08-07 11:45:02'),
(21, 'NN1565200051', 15, 1, 'NMW90D25AL-B8-A', 400.00, 1, '2019-08-07 11:47:31', '2019-08-07 11:47:31'),
(22, 'NN1565204829', 28, 1, 'NRA-23 HT (Purpel)', 389.00, 1, '2019-08-07 13:07:09', '2019-08-07 13:07:09'),
(23, 'NN1565204944', 45, 1, 'Atashi Freeze', 4500.00, 1, '2019-08-07 13:09:04', '2019-08-07 13:09:04'),
(24, 'NN1566191195', 4, 1, 'Android TV', 333.00, 1, '2019-08-18 23:06:35', '2019-08-18 23:06:35'),
(25, 'NN1566191352', 1, 1, 'LCD television', 222.00, 1, '2019-08-18 23:09:12', '2019-08-18 23:09:12'),
(26, 'NN1566191352', 9, 1, 'NA-55LSU1', 450.00, 1, '2019-08-18 23:09:12', '2019-08-18 23:09:12'),
(27, 'NN1566192238', 40, 1, 'Atashi AC', 9999.00, 1, '2019-08-18 23:23:58', '2019-08-18 23:23:58'),
(28, 'NN1566192238', 1, 1, 'LCD television', 222.00, 1, '2019-08-18 23:23:58', '2019-08-18 23:23:58'),
(29, 'NN1566193284', 17, 1, 'NKA-K960', 405.00, 3, '2019-08-18 23:41:24', '2019-08-18 23:41:24'),
(30, 'NN1566197805', 20, 1, 'NRA-19 KT - GMN (Maroon)', 320.00, 1, '2019-08-19 00:56:46', '2019-08-19 00:56:46'),
(31, 'NN1568873804', 59, 7, 'NA-39LSU1', 36900.00, 1, '2019-09-19 00:16:44', '2019-09-19 00:16:44'),
(32, 'NN1569994326', 55, 1, 'NB-16LCJ', 8075.00, 1, '2019-10-01 23:32:06', '2019-10-01 23:32:06'),
(33, 'NN1569994326', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-01 23:32:06', '2019-10-01 23:32:06'),
(34, 'NN1570099475', 138, 1, 'TV Clump (55\")', 1000.00, 1, '2019-10-03 04:44:35', '2019-10-03 04:44:35'),
(35, 'NN1570099476', 138, 1, 'TV Clump (55\")', 1000.00, 1, '2019-10-03 04:44:36', '2019-10-03 04:44:36'),
(36, 'NN1571219554', 69, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-16 03:52:34', '2019-10-16 03:52:34'),
(37, 'NN1571223577', 115, 15, 'Inverter  AC', 93500.00, 1, '2019-10-16 04:59:37', '2019-10-16 04:59:37'),
(38, 'NN1571288616', 58, 13, 'HD Smart TV', 22325.00, 2, '2019-10-16 23:03:36', '2019-10-16 23:03:36'),
(39, 'NN1571291481', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-16 23:51:21', '2019-10-16 23:51:21'),
(40, 'NN1571291554', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-16 23:52:34', '2019-10-16 23:52:34'),
(41, 'NN1571291639', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-16 23:53:59', '2019-10-16 23:53:59'),
(42, 'NN1571291668', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-16 23:54:28', '2019-10-16 23:54:28'),
(43, 'NN1571291712', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-16 23:55:12', '2019-10-16 23:55:12'),
(44, 'NN1571291824', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-16 23:57:04', '2019-10-16 23:57:04'),
(45, 'NN1571292021', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 00:00:21', '2019-10-17 00:00:21'),
(46, 'NN1571292361', 118, 13, 'Regular AC', 57900.00, 2, '2019-10-17 00:06:01', '2019-10-17 00:06:01'),
(47, 'NN1571292433', 118, 13, 'Regular AC', 57900.00, 1, '2019-10-17 00:07:13', '2019-10-17 00:07:13'),
(48, 'NN1571292488', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 00:08:08', '2019-10-17 00:08:08'),
(49, 'NN1571292528', 118, 13, 'Regular AC', 57900.00, 1, '2019-10-17 00:08:48', '2019-10-17 00:08:48'),
(50, 'NN1571292567', 118, 13, 'Regular AC', 57900.00, 1, '2019-10-17 00:09:27', '2019-10-17 00:09:27'),
(51, 'NN1571292571', 118, 13, 'Regular AC', 57900.00, 1, '2019-10-17 00:09:31', '2019-10-17 00:09:31'),
(52, 'NN1571292597', 118, 13, 'Regular AC', 57900.00, 1, '2019-10-17 00:09:57', '2019-10-17 00:09:57'),
(53, 'NN1571292635', 118, 13, 'Regular AC', 57900.00, 1, '2019-10-17 00:10:35', '2019-10-17 00:10:35'),
(54, 'NN1571292674', 118, 13, 'Regular AC', 57900.00, 1, '2019-10-17 00:11:14', '2019-10-17 00:11:14'),
(55, 'NN1571292813', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 00:13:33', '2019-10-17 00:13:33'),
(56, 'NN1571292822', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 00:13:42', '2019-10-17 00:13:42'),
(57, 'NN1571292859', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 00:14:19', '2019-10-17 00:14:19'),
(58, 'NN1571292889', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 00:14:49', '2019-10-17 00:14:49'),
(59, 'NN1571292889', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 00:14:49', '2019-10-17 00:14:49'),
(60, 'NN1571292958', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 00:15:58', '2019-10-17 00:15:58'),
(61, 'NN1571292958', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 00:15:58', '2019-10-17 00:15:58'),
(62, 'NN1571293036', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 00:17:16', '2019-10-17 00:17:16'),
(63, 'NN1571293036', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 00:17:16', '2019-10-17 00:17:16'),
(64, 'NN1571293091', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 00:18:11', '2019-10-17 00:18:11'),
(65, 'NN1571293091', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 00:18:11', '2019-10-17 00:18:11'),
(66, 'NN1571293110', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 00:18:30', '2019-10-17 00:18:30'),
(67, 'NN1571293110', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 00:18:30', '2019-10-17 00:18:30'),
(68, 'NN1571295697', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 01:01:37', '2019-10-17 01:01:37'),
(69, 'NN1571295697', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 01:01:37', '2019-10-17 01:01:37'),
(70, 'NN1571298258', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 01:44:18', '2019-10-17 01:44:18'),
(71, 'NN1571298258', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 01:44:18', '2019-10-17 01:44:18'),
(72, 'NN1571298258', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 01:44:18', '2019-10-17 01:44:18'),
(73, 'NN1571298724', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 01:52:04', '2019-10-17 01:52:04'),
(74, 'NN1571298724', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 01:52:04', '2019-10-17 01:52:04'),
(75, 'NN1571298724', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 01:52:04', '2019-10-17 01:52:04'),
(76, 'NN1571301241', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 02:34:01', '2019-10-17 02:34:01'),
(77, 'NN1571301241', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 02:34:01', '2019-10-17 02:34:01'),
(78, 'NN1571301241', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 02:34:01', '2019-10-17 02:34:01'),
(79, 'NN1571302516', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 02:55:16', '2019-10-17 02:55:16'),
(80, 'NN1571302516', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 02:55:16', '2019-10-17 02:55:16'),
(81, 'NN1571302516', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 02:55:16', '2019-10-17 02:55:16'),
(82, 'NN1571303254', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 03:07:34', '2019-10-17 03:07:34'),
(83, 'NN1571303254', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 03:07:34', '2019-10-17 03:07:34'),
(84, 'NN1571303254', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 03:07:34', '2019-10-17 03:07:34'),
(85, 'NN1571303715', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 03:15:15', '2019-10-17 03:15:15'),
(86, 'NN1571303715', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 03:15:15', '2019-10-17 03:15:15'),
(87, 'NN1571303715', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 03:15:15', '2019-10-17 03:15:15'),
(88, 'NN1571304619', 71, 13, 'TOP MOUNTED', 33000.00, 1, '2019-10-17 03:30:19', '2019-10-17 03:30:19'),
(89, 'NN1571304619', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 03:30:19', '2019-10-17 03:30:19'),
(90, 'NN1571304619', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-17 03:30:19', '2019-10-17 03:30:19'),
(91, 'NN1571306324', 56, 13, 'FHD Panel TV', 13900.00, 1, '2019-10-17 03:58:44', '2019-10-17 03:58:44'),
(92, 'NN1571306407', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 04:00:07', '2019-10-17 04:00:07'),
(93, 'NN1571306448', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 04:00:48', '2019-10-17 04:00:48'),
(94, 'NN1571306500', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-17 04:01:40', '2019-10-17 04:01:40'),
(95, 'NN1571552217', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 00:16:57', '2019-10-20 00:16:57'),
(96, 'NN1571553201', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 00:33:21', '2019-10-20 00:33:21'),
(97, 'NN1571553653', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 00:40:53', '2019-10-20 00:40:53'),
(98, 'NN1571553704', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 00:41:44', '2019-10-20 00:41:44'),
(99, 'NN1571553886', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 00:44:46', '2019-10-20 00:44:46'),
(100, 'NN1571553963', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 00:46:03', '2019-10-20 00:46:03'),
(101, 'NN1571554231', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 00:50:31', '2019-10-20 00:50:31'),
(102, 'NN1571554276', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 00:51:16', '2019-10-20 00:51:16'),
(103, 'NN1571558725', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 02:05:25', '2019-10-20 02:05:25'),
(104, 'NN1571559582', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:19:42', '2019-10-20 02:19:42'),
(105, 'NN1571559654', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:20:54', '2019-10-20 02:20:54'),
(106, 'NN1571559689', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:21:29', '2019-10-20 02:21:29'),
(107, 'NN1571559756', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:22:36', '2019-10-20 02:22:36'),
(108, 'NN1571559849', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:24:09', '2019-10-20 02:24:09'),
(109, 'NN1571560009', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:26:49', '2019-10-20 02:26:49'),
(110, 'NN1571560097', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:28:17', '2019-10-20 02:28:17'),
(111, 'NN1571560228', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:30:28', '2019-10-20 02:30:28'),
(112, 'NN1571560285', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:31:25', '2019-10-20 02:31:25'),
(113, 'NN1571560356', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:32:36', '2019-10-20 02:32:36'),
(114, 'NN1571560421', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:33:41', '2019-10-20 02:33:41'),
(115, 'NN1571561195', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 02:46:35', '2019-10-20 02:46:35'),
(116, 'NN1571561195', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 02:46:35', '2019-10-20 02:46:35'),
(117, 'NN1571562344', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 03:05:44', '2019-10-20 03:05:44'),
(118, 'NN1571562344', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 03:05:44', '2019-10-20 03:05:44'),
(119, 'NN1571562855', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 03:14:15', '2019-10-20 03:14:15'),
(120, 'NN1571562855', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 03:14:15', '2019-10-20 03:14:15'),
(121, 'NN1571562916', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 03:15:16', '2019-10-20 03:15:16'),
(122, 'NN1571562916', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 03:15:16', '2019-10-20 03:15:16'),
(123, 'NN1571562926', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 03:15:26', '2019-10-20 03:15:26'),
(124, 'NN1571562926', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 03:15:26', '2019-10-20 03:15:26'),
(125, 'NN1571563174', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 03:19:34', '2019-10-20 03:19:34'),
(126, 'NN1571563174', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 03:19:34', '2019-10-20 03:19:34'),
(127, 'NN1571564263', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 03:37:43', '2019-10-20 03:37:43'),
(128, 'NN1571564263', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 03:37:43', '2019-10-20 03:37:43'),
(129, 'NN1571565592', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 03:59:52', '2019-10-20 03:59:52'),
(130, 'NN1571565592', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 03:59:52', '2019-10-20 03:59:52'),
(131, 'NN1571565627', 115, 1, 'Inverter  AC', 93500.00, 1, '2019-10-20 04:00:27', '2019-10-20 04:00:27'),
(132, 'NN1571565627', 56, 1, 'FHD Panel TV', 13900.00, 1, '2019-10-20 04:00:27', '2019-10-20 04:00:27'),
(133, 'NN1571568251', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 04:44:11', '2019-10-20 04:44:11'),
(134, 'NN1571568556', 118, 1, 'Regular AC', 57900.00, 1, '2019-10-20 04:49:16', '2019-10-20 04:49:16'),
(135, 'NN1571592869', 71, 1, 'TOP MOUNTED', 33000.00, 1, '2019-10-20 11:34:29', '2019-10-20 11:34:29'),
(136, 'NN1571630140', 115, 13, 'Inverter  AC', 93500.00, 1, '2019-10-20 21:55:40', '2019-10-20 21:55:40'),
(137, 'NN1571631890', 115, 13, 'Inverter  AC', 93500.00, 1, '2019-10-20 22:24:50', '2019-10-20 22:24:50'),
(138, 'NN1571634275', 115, 13, 'Inverter  AC', 93500.00, 1, '2019-10-20 23:04:35', '2019-10-20 23:04:35'),
(139, 'NN1571634344', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:05:44', '2019-10-20 23:05:44'),
(140, 'NN1571634922', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:15:22', '2019-10-20 23:15:22'),
(141, 'NN1571634955', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:15:55', '2019-10-20 23:15:55'),
(142, 'NN1571635087', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:18:07', '2019-10-20 23:18:07'),
(143, 'NN1571635197', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:19:57', '2019-10-20 23:19:57'),
(144, 'NN1571635501', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:25:01', '2019-10-20 23:25:01'),
(145, 'NN1571635658', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:27:38', '2019-10-20 23:27:38'),
(146, 'NN1571636143', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:35:43', '2019-10-20 23:35:43'),
(147, 'NN1571636155', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:35:55', '2019-10-20 23:35:55'),
(148, 'NN1571636182', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-20 23:36:22', '2019-10-20 23:36:22'),
(149, 'NN1571642842', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-21 01:27:22', '2019-10-21 01:27:22'),
(150, 'NN1571642901', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-21 01:28:21', '2019-10-21 01:28:21'),
(151, 'NN1571643294', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-21 01:34:54', '2019-10-21 01:34:54'),
(152, 'NN1571643654', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-21 01:40:54', '2019-10-21 01:40:54'),
(153, 'NN1571643740', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-21 01:42:20', '2019-10-21 01:42:20'),
(154, 'NN1571643801', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-21 01:43:21', '2019-10-21 01:43:21'),
(155, 'NN1571644047', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-21 01:47:27', '2019-10-21 01:47:27'),
(156, 'NN1571644178', 58, 13, 'HD Smart TV', 22325.00, 1, '2019-10-21 01:49:38', '2019-10-21 01:49:38'),
(157, 'NN1571646611', 55, 13, 'NB-16LCJ', 8075.00, 1, '2019-10-21 02:30:11', '2019-10-21 02:30:11'),
(158, 'NN1571648927', 57, 19, 'HD Smart TV', 18900.00, 1, '2019-10-21 03:08:47', '2019-10-21 03:08:47'),
(159, 'NN1571650392', 56, 19, 'FHD Panel TV', 13900.00, 1, '2019-10-21 03:33:12', '2019-10-21 03:33:12'),
(160, 'NN1571650621', 118, 19, 'Regular AC', 57900.00, 1, '2019-10-21 03:37:01', '2019-10-21 03:37:01'),
(161, 'NN1571653510', 126, 20, 'NBA-B152', 2500.00, 1, '2019-10-21 04:25:10', '2019-10-21 04:25:10'),
(162, 'NN1571743857', 136, 7, 'Atashii Sound Bar', 6999.00, 1, '2019-10-22 05:30:57', '2019-10-22 05:30:57'),
(163, 'NN1572247102', 108, 19, 'Glass door', 26000.00, 1, '2019-10-28 01:18:22', '2019-10-28 01:18:22'),
(164, 'NN1573962096', 56, 1, 'ATASHII HD TV', 13900.00, 1, '2019-11-16 21:41:36', '2019-11-16 21:41:36'),
(165, 'NN1574571129', 57, 38, 'ATASHII HD TV', 15750.00, 1, '2019-11-23 22:52:09', '2019-11-23 22:52:09'),
(166, 'NN1574740095', 56, 1, 'ATASHII HD TV', 12450.00, 1, '2019-11-25 21:48:15', '2019-11-25 21:48:15'),
(167, 'NN1574744963', 56, 1, 'ATASHII HD TV', 12450.00, 1, '2019-11-25 23:09:23', '2019-11-25 23:09:23'),
(168, 'NN1574745045', 56, 1, 'ATASHII HD TV', 12450.00, 1, '2019-11-25 23:10:45', '2019-11-25 23:10:45'),
(169, 'NN1574745125', 56, 1, 'ATASHII HD TV', 12450.00, 1, '2019-11-25 23:12:05', '2019-11-25 23:12:05'),
(170, 'NN1575876443', 57, 38, 'ATASHII HD TV', 15750.00, 1, '2019-12-09 01:27:23', '2019-12-09 01:27:23'),
(171, 'NN1575877082', 59, 38, 'ATASHII FHD Smart TV', 36900.00, 3, '2019-12-09 01:38:02', '2019-12-09 01:38:02'),
(172, 'NN1575882839', 59, 38, 'ATASHII FHD Smart TV', 36900.00, 1, '2019-12-09 03:13:59', '2019-12-09 03:13:59'),
(173, 'NN1575888117', 132, 7, 'ATASHII ELECTRIC KETTLE (1.8 Ltr.)', 1500.00, 1, '2019-12-09 04:41:57', '2019-12-09 04:41:57'),
(174, 'NN1575891497', 132, 7, 'ATASHII ELECTRIC KETTLE (1.8 Ltr.)', 1500.00, 1, '2019-12-09 05:38:17', '2019-12-09 05:38:17'),
(175, 'NN1576058233', 62, 7, 'ATASHII 4K ULTRA HD TV', 69900.00, 1, '2019-12-11 03:57:13', '2019-12-11 03:57:13'),
(176, 'NN1576670513', 136, 57, 'ATASHII SOUND BAR', 6999.00, 1, '2019-12-18 06:01:53', '2019-12-18 06:01:53'),
(177, 'NN1577342828', 57, 38, 'ATASHII HD TV', 15750.00, 1, '2019-12-26 00:47:08', '2019-12-26 00:47:08'),
(178, 'NN1580622271', 150, 1, 'test tv 12', 1200.00, 1, '2020-02-01 23:44:31', '2020-02-01 23:44:31'),
(179, 'NN1582086033', 55, 68, 'ATASHII LED TV', 4950.00, 1, '2020-02-18 22:20:33', '2020-02-18 22:20:33'),
(180, 'NN1582086653', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-18 22:30:53', '2020-02-18 22:30:53'),
(181, 'NN1582087270', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-18 22:41:10', '2020-02-18 22:41:10'),
(182, 'NN1582087320', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-18 22:42:00', '2020-02-18 22:42:00'),
(183, 'NN1582087374', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-18 22:42:54', '2020-02-18 22:42:54'),
(184, 'NN1582088026', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-18 22:53:46', '2020-02-18 22:53:46'),
(185, 'NN1582088066', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-18 22:54:26', '2020-02-18 22:54:26'),
(186, 'NN1582092639', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-19 00:10:39', '2020-02-19 00:10:39'),
(187, 'NN1582092729', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-19 00:12:09', '2020-02-19 00:12:09'),
(188, 'NN1582096200', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-19 01:10:00', '2020-02-19 01:10:00'),
(189, 'NN1582096244', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-19 01:10:44', '2020-02-19 01:10:44'),
(190, 'NN1582096305', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-19 01:11:45', '2020-02-19 01:11:45'),
(191, 'NN1582096348', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-19 01:12:28', '2020-02-19 01:12:28'),
(192, 'NN1582096742', 117, 68, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-19 01:19:02', '2020-02-19 01:19:02'),
(193, 'NN1582191867', 117, 69, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-20 03:44:27', '2020-02-20 03:44:27'),
(194, 'NN1582191885', 117, 69, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-20 03:44:45', '2020-02-20 03:44:45'),
(195, 'NN1582191920', 117, 69, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-20 03:45:20', '2020-02-20 03:45:20'),
(196, 'NN1582191954', 117, 69, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-20 03:45:54', '2020-02-20 03:45:54'),
(197, 'NN1582193484', 117, 69, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-20 04:11:24', '2020-02-20 04:11:24'),
(198, 'NN1582193683', 117, 69, 'ATASHII REGULAR AC', 43900.00, 1, '2020-02-20 04:14:43', '2020-02-20 04:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_capacity` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screen_size` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity_litre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `sale_price` double(10,2) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `specification`, `ac_capacity`, `screen_size`, `capacity_litre`, `price`, `sale_price`, `discount`, `quantity`, `description`, `additional_information`, `created_at`, `updated_at`, `image1`, `image2`, `image3`, `image4`) VALUES
(55, 'ATASHII LED TV', 'Model: NB-16LCJ,Screen Size: 16\",LED TV', NULL, '16', NULL, 8500.00, 4950.00, NULL, 19, '<p>LED Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frame less Design. It makes all your favorite shows, movies, games and media content comes to life. Enjoy an intuitive, connected home entertainment experience with this device. Get a clear moving picture resolution, processing speed and back<b></b><b></b>light technology.\r\n\r\n</p>', '[{\"High Definition (HD) TV\":\"Resolution: 1366x768\"},{\"Multimedia USB\":\"HDMI Connectivity (VGA)\"},{\"PC Audio In\":\"Audio Video (AV) In\"},{\"Component Video (YPbPr)\":\"Headphone\"},{\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\":null}]', '2019-09-18 01:00:39', '2020-02-18 22:20:33', 'attached_images/products/55/NB-16-LCJ.jpg', NULL, NULL, NULL),
(56, 'ATASHII HD TV', 'Model: NA-24LU1,Screen Size: 24\",Resolution: 1920x1080P', NULL, '24', NULL, 13900.00, 12450.00, 0, 6, '<p>\r\n\r\nLED Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frame less Design. It makes all your favorite shows, movies, games and media content comes to life. Enjoy an intuitive, connected home entertainment experience with this device. Get a clear moving picture resolution, processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content.<br>Note: You must have a source of FHD programming in order to take full advantage of NA-24LU2 Color TV 24\" Contact your local cable or satellite TV provider for details on how to upgrade.\r\n\r\n<br></p>', '[{\"High Definition (FHD) TV\":\"Resolution: 1920x1080\"},{\"Full HD (1920x1080) in HDMI Mode\":\"Wide Viewing angle: 170\\u00b0\\/160\\u00b0\"},{\"Multimedia USB\":\"HDMI Connectivity (VGA)\"},{\"PC Audio In\":\"Audio Video (AV) In\"},{\"Headphone\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"}]', '2019-09-18 01:06:28', '2019-12-06 22:11:43', 'attached_images/products/56/NA-24LU1--(24in-LED-TV)-03.jpg', 'attached_images/products/56/NA-24LU1--(24in-LED-TV)-04.jpg', 'attached_images/products/56/NA-24LU1  (24in LED TV) 02.jpg', 'attached_images/products/56/NA-24LU1  (24in LED TV) 01.jpg'),
(57, 'ATASHII HD TV', 'Model: NA-32LU1,Screen Size: 32\",Resolution: 1366x768p,', NULL, '32', NULL, 18900.00, 15750.00, 0, 18, '<p>\r\n\r\nLED Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frame less Design. It makes all your favorite shows, movies, games and media content comes to life. Enjoy an intuitive, connected home entertainment experience with this device. Get a clear moving picture resolution, processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content.<br>Note: You must have a source of HD programming in order to take full advantage of NA-32 LU-1 Color TV 32\" Contact your local cable or satellite TV provider for details on how to upgrade.\r\n\r\n<br></p>', '[{\"High Definition (HD) TV\":\"Resolution: 1366x768\"},{\"Full HD (1920x1080) in HDMI Mode\":\"Wide Viewing angle: 176\\u00b0\\/176\\u00b0\"},{\"Multimedia USB\":\"HDMI Connectivity (VGA)\"},{\"PC Audio In\":\"Audio Video (AV) In\"},{\"Component Video (YPbPr)\":\"Headphone\"},{\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\":null}]', '2019-09-18 01:14:11', '2019-12-26 00:47:08', 'attached_images/products/57/NA-24LU1  (24in LED TV) 03.jpg', 'attached_images/products/57/NA-32LU2--(32-in-LED-TV)-01.jpg', 'attached_images/products/57/NA-32LU2 (32in LED TV) 03.jpg', 'attached_images/products/57/NA-32LU2 (32in LED TV) 02.jpg'),
(58, 'ATASHII HD Smart TV', 'Model: NA-32LSU1,Screen Size: 32\",Resolution: 1366X768p', NULL, '32', NULL, 23500.00, NULL, NULL, 10, '<p>\r\n\r\n</p><p>Atashii NA-32 LSU-1 LED TV 32\" improves your entertainment time. LED Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frameless Design. It makes all your favorite shows, movies, games and media content comes to life. The 1366x768p smart HDTV provides twice the resolution of standard TV. Enjoy an intuitive, connected home entertainment experience with this device. Processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content. With this TV, you can access your favorite program choices, Google Chrome, You tube, Game, live TV, Video on demand, Apps and Social Media. It comes in one easy-to-browse navigation experience. The built-in Wi-Fi will enhance your family\'s TV viewing experience by effortlessly connecting with more content. Practical features include HDMI inputs and the ability to mount it on the wall. The built-in tuner makes it easy to watch digital broadcasts when available.</p><p>Note: You must have a source of HD programming in order to take full advantage of NA-32 LSU-1 Color TV 32\" Contact your local cable or satellite TV provider for details on how to upgrade.</p><p></p>', '[{\"HD (1366X768p) LED TV\":\"Full HD (1920x1080) in HDMI Mode\"},{\"Wide Viewing angle: 176\\u00b0\\/176\\u00b0\":\"Built-in-Wifi\"},{\"Android Operating System 4.4\":\"DDR RAM 512M\"},{\"Processor: Processor ARM Cortex-A7 Quad Core\":\"External Storage Support: 600GB\"},{\"Google Chrome, Youtube, Facebook, Game etc.\":\"USB 2(2.0)\"},{\"External Key Board & Mouse Support\":\"External Key Board & Mouse Support\"},{\"Digital Media Player (DMP) Technology\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"},{\"DDR RAM 512M\":null},{\"External Storage Support 600GB\":null}]', '2019-09-18 01:16:58', '2019-12-06 22:12:37', 'attached_images/products/58/NA-32LSU1.jpg', 'attached_images/products/58/NA-32LU2 (32in LED TV) 03.jpg', 'attached_images/products/58/NA-32LU2 (32in LED TV) 02.jpg', NULL),
(59, 'ATASHII FHD Smart TV', 'Model: NA-39LSU1,Screen Size: 39\",Resolution: 1920x1080p', NULL, '39', NULL, 36900.00, NULL, 0, 16, '<p>\r\n\r\n</p><p>NA-39 LSU-1 LED TV 39\" improves your entertainment time. LED Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frameless Design. It makes all your favorite shows, movies, games and media content comes to life. The 1366x768p smart HDTV provides twice the resolution of standard TV. Enjoy an intuitive, connected home entertainment experience with this device. Processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content. With this TV, you can access your favorite program choices, Google Chrome, You tube, Game, live TV, Video on demand, Apps and Social Media. It comes in one easy-to-browse navigation experience. The built-in Wi-Fi will enhance your family\'s TV viewing experience by effortlessly connecting with more content. Practical features include HDMI inputs and the ability to mount it on the wall. The built-in tuner makes it easy to watch digital broadcasts when available.</p><p>Note: You must have a source of HD programming in order to take full advantage ofNA-39 LSU-1 Color TV 39\" Contact your local cable or satellite TV provider for details on how to upgrade.</p><p></p>', '[{\"HD (1366X768p) LED TV\":\"Google Chrome, Youtube, Facebook, Game etc.\"},{\"Wide Viewing angle: 176\\u00b0\\/176\\u00b0\":\"External Key Board & Mouse Support\"},{\"Android Operating System 4.4\":\"External Storage Support: 600GB\"},{\"DDR RAM 512M\":\"Built-in-Wifi\"},{\"Full HD (1920x1080) in HDMI Mode\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"},{\"Digital Media Player (DMP) Technology\":null},{\"USB 2(2.0)\":null}]', '2019-09-18 01:18:40', '2019-12-09 03:13:59', 'attached_images/products/59/NA-39LSU1 (39in SMART LED TV) 01.jpg', NULL, NULL, NULL),
(60, 'ATASHII FHD Smart TV', 'Model: NA-39LSU2,Screen Size: 39\",Resolution: 1920X1080p', NULL, '39', NULL, 32900.00, NULL, 0, 20, '<p>\r\n\r\n</p><p>NA-39 LSU2 LED TV 39\" improves your entertainment time. LED Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frameless Design. It makes all your favorite shows, movies, games and media content comes to life. The 1366x768p smart HDTV provides twice the resolution of standard TV. Enjoy an intuitive, connected home entertainment experience with this device. Processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content. With this TV, you can access your favorite program choices, Google Chrome, You tube, Game, live TV, Video on demand, Apps and Social Media. It comes in one easy-to-browse navigation experience. The built-in Wi-Fi will enhance your family\'s TV viewing experience by effortlessly connecting with more content. Practical features include HDMI inputs and the ability to mount it on the wall. The built-in tuner makes it easy to watch digital broadcasts when available.</p><p>Note: You must have a source of HD programming in order to take full advantage of NA-39 LSU2 Color TV 39\" Contact your local cable or satellite TV provider for details on how to upgrade.</p><p></p>', '[{\"Android Operating System 7.1\":\"Processor ARM Corte-A53-4\"},{\"Built-in-Wifi\":\"RAM: 1GB\"},{\"ROM: 4GB\":\"External Storage Support: 1 TB\"},{\"High Definition LED TV\":\"Full HD (1920x1080) in HDMI Mode\"},{\"Wide Viewing angle: 176\\u00b0\\/176\\u00b0\":\"Bluetooth Support\"},{\"E-share Support\":\"Mira cast Support\"},{\"External Key Board & Mouse Support\":\"Google Chrome, Youtube, Facebook, Game etc.\"},{\"Digital Media Player (DMP) Technology\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"},{\"\":null}]', '2019-09-18 01:20:14', '2019-12-30 22:04:51', 'attached_images/products/60/NA-39LSU2 (39in SMART LED TV) 01.jpg', NULL, NULL, NULL),
(61, 'ATASHII ULTRA HD TV', 'Model: NA-55LSU1,Screen Size: 55\",Resolution: 1920x1080', NULL, '55', NULL, 69900.00, NULL, 0, 20, '<p>\r\n\r\n</p><p>NA-55 LSU1 UHD TV 55\" improves your entertainment time. \r\n\r\nUHD \r\n\r\nSuperior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frameless Design. It makes all your favorite shows, movies, games and media content comes to life. The 1920pX1080p smart UHD TV provides twice the resolution of standard TV. Enjoy an intuitive, connected home entertainment experience with this device. Processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content. With this TV, you can access your favorite program choices, Google Chrome, You tube, Game, live TV, Video on demand, Apps and Social Media. It comes in one easy-to-browse navigation experience. The built-in Wi-Fi will enhance your family\'s TV viewing experience by effortlessly connecting with more content. Practical features include HDMI inputs and the ability to mount it on the wall. The built-in tuner makes it easy to watch digital broadcasts when available.</p><p>Note: You must have a source of UHD programming in order to take full advantage of NA-55 LSU1 Color TV 55\" Contact your local cable or satellite TV provider for details on how to upgrade.</p><p></p>', '[{\"Full HD (1920x1080) in HDMI Mode\":\"External Storage Support: 600GB\"},{\"Android Operating System 4.4\":\"Google Chrome, Youtube, Facebook, Game etc.\"},{\"Processor ARM Cortex-A7 Duel Core\":\"External Key Board & Mouse Support\"},{\"Wide Viewing angle: 176\\u00b0\\/176\\u00b0\":\"Digital Media Player (DMP) Technology\"},{\"Built-in-Wifi\":\"E-share Support\"},{\"DDR RAM 1GB\":\"Miracast Support\"},{\"USB 2 (2.0)\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"}]', '2019-09-18 01:21:45', '2019-12-10 03:04:33', 'attached_images/products/61/NA-55LSU1 (55in SMART LED TV) 01.jpg', 'attached_images/products/61/NA-32LU2 (32in LED TV) 03.jpg', 'attached_images/products/61/NA-32LU2 (32in LED TV) 02.jpg', 'attached_images/products/61/NA-55LSU2-(55in SMART LED TV)-01.jpg'),
(62, 'ATASHII 4K ULTRA HD TV', 'Model: NA-55LSU2,Screen Size: 55\",Resolution: 4K (3840X2160p),', NULL, '55', NULL, 69900.00, NULL, 0, 19, '<p>\r\n\r\n</p><p>NA-55 LSU2 4K LED TV 55\" improves your entertainment time. UHD Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frameless Design. It makes all your favorite shows, movies, games and media content comes to life. The 1920pX1080p smart \r\n\r\nUHD \r\n\r\nTV provides twice the resolution of standard TV. Enjoy an intuitive, connected home entertainment experience with this device. Processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content. With this TV, you can access your favorite program choices, Google Chrome, You tube, Game, live TV, Video on demand, Apps and Social Media. It comes in one easy-to-browse navigation experience. The built-in Wi-Fi will enhance your family\'s TV viewing experience by effortlessly connecting with more content. Practical features include HDMI inputs and the ability to mount it on the wall. The built-in tuner makes it easy to watch digital broadcasts when available.</p><p>Note: You must have a source of \r\n\r\nUHD \r\n\r\nprogramming in order to take full advantage of NA-55 LSU2 4K \r\n\r\nUHD \r\n\r\nTV 55\" Contact your local cable or satellite TV provider for details on how to upgrade.</p><p></p>', '[{\"Ultra High Definition (UHD) LED TV\":\"Resolution: 4K (3840X2160p)\"},{\"Wide Viewing angle: 176\\u00b0\\/176\\u00b0\":\"Android Operating System 7.0\"},{\"Processor ARM Corte-A73*2\":\"Built-in-Wifi\"},{\"RAM: 1GB\":\"ROM: 4GB\"},{\"External Storage Support: 1 TB\":\"E-share Support\"},{\"Mira cast Support\":\"External Key Board & Mouse Support\"},{\"Google Chrome, Youtube, Facebook, Game etc.\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"},{\"Digital Media Player (DMP) Technology\":\"Free: Sound Bar\"},{\"\":null}]', '2019-09-18 01:23:02', '2019-12-11 03:57:13', 'attached_images/products/62/NA-55LSU2-(55in SMART LED TV)-01.jpg', 'attached_images/products/62/NA-55LSU1 (55in SMART LED TV) 02.jpg', 'attached_images/products/62/NA-55LSU1 (55in SMART LED TV) 03.jpg', 'attached_images/products/62/NA-55LSU2 (55in SMART LED TV) 01.jpg'),
(63, 'ATASHII FHD Panel TV', 'Model: NA-24LU2,Screen Size: 24\",Resolution: 1920X1080p', NULL, '24', NULL, 13900.00, NULL, 0, 20, '<p>\r\n\r\nFHD Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design.Energy-saving Technologies. Integrated Frame less Design. It makes all your favorite shows, movie s, games and media content comes to life. Enjoy an intuitive, connected home entertainment experience with this device. Get a clear moving picture resolution, processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content.<br>Note: You must have a source of FHD programming in order to take full advantage of NA-24 LU2 Color TV 24\" Contact your local cable or satellite TV provider for details on how to upgrade.\r\n\r\n<br></p>', '[{\"High Definition (FHD) TV\":\"Resolution: 1920x1080\"},{\"Full HD (1920x1080) in HDMI Mode\":\"Wide Viewing angle: 170\\u00b0\\/160\\u00b0\"},{\"Multimedia USB\":\"HDMI Connectivity (VGA)\"},{\"PC Audio In\":\"Audio Video (AV) In\"},{\"Headphone\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"}]', '2019-09-18 01:24:22', '2019-12-06 22:15:45', 'attached_images/products/63/NA-24LU2  (24in LED TV) 01.jpg', NULL, NULL, NULL),
(64, 'ATASHII HD Panel TV', 'Model: NA-32LU2,Screen Size: 32\",Resolution: 1366x768P', NULL, '32', NULL, 18900.00, NULL, 0, 20, '<p>\r\n\r\nHD Superior and True Color. Cavity Reflex Speaker Design. Back Plug-in Design. Energy-saving Technologies. Integrated Frame less Design. It makes all your favorite shows, movies, games and media content comes to life. Enjoy an intuitive, connected home entertainment experience with this device. Get a clear moving picture resolution, processing speed and backlight technology. The 16:9 aspect ratio allows you to see every image as the director intended with enriched colors, even with older, non-HD content.<br>Note: You must have a source of HD programming in order to take full advantage of NA-32 LU2 Color TV 32\" Contact your local cable or satellite TV provider for details on how to upgrade.\r\n\r\n<br></p>', '[{\"High Definition (HD) TV\":\"Resolution: 1366x768\"},{\"Full HD (1920x1080) in HDMI Mode\":\"Wide Viewing angle: 176\\u00b0\\/176\\u00b0\"},{\"Multimedia USB\":\"HDMI Connectivity\"},{\"Monitor Connectivity (VGA)\":\"PC Audio In\"},{\"Audio Video (AV) In\":\"Component Video (YPbPr)\"},{\"Headphone\":\"Warranty: Panel 2 yrs (Replacement Guarantee, if not broken), Spares 2 yrs, Free Services 3 yrs\"}]', '2019-09-18 01:25:41', '2019-12-06 22:16:17', 'attached_images/products/64/NA-32LU2 (32in LED TV) 01.jpg', NULL, NULL, NULL),
(71, 'TOP MOUNTED', 'Model: NRA-23HT-GPL,Capacity: 245 Ltr,', NULL, NULL, '245', 33000.00, 30500.00, 0, 10, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 200 Ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Top Mount Refrigerator.\":\"Shiny Glass Finishing\"},{\"8 Years Compressor Warranty\":null}]', '2019-09-18 02:55:08', '2019-11-26 00:48:09', 'attached_images/products/71/NRA-23 HT - GPL (240 Ltr.) (Purpel) 01.jpg', 'attached_images/products/71/NRA-23 HT - GPL (240 Ltr.) (Purpel) 02.jpg', 'attached_images/products/71/NRA-23 HT - GPL (240 Ltr.) (Purpel) 03.jpg', NULL),
(72, 'TOP MOUNTED', 'Model: NRA-23HT-GRD,Capacity: 245 ltr,', NULL, NULL, '245', 33000.00, 30500.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 245 Ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing    Top Mount Refrigerator.\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 02:56:49', '2019-11-27 01:06:02', 'attached_images/products/72/NRA-23 HT - GRD (240 Ltr.) (Red) 01.jpg', 'attached_images/products/72/NRA-23 HT - GRD (240 Ltr.) (Red) 02.jpg', 'attached_images/products/72/NRA-23 HT - GRD (240 Ltr.) (Red) 03.jpg', NULL),
(74, 'TOP MOUNTED', 'Model: NRA-23HT-GDR,245 Ltr,', NULL, NULL, '245', 33000.00, 30500.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 245 Ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 03:03:41', '2019-11-27 01:06:46', 'attached_images/products/74/NRA-23 HT - GDR (245 Ltr.) (Deep Red) 01.jpg', 'attached_images/products/74/NRA-23 HT - GDR (245 Ltr.) (Deep Red) 02 .jpg', 'attached_images/products/74/NRA-23 HT - GDR (245 Ltr.) (Deep Red) 03.jpg', NULL),
(77, 'TOP MOUNTED', 'Model: NRA-21HT-GBL SI,Capacity: 215 ltr,', NULL, NULL, '215', 29500.00, 27900.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 215 Ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 03:11:39', '2019-11-27 01:31:33', 'attached_images/products/77/NRA-21HT-GBL-Si-01.jpg', 'attached_images/products/77/NRA-21HT-GBL-Si-02.jpg', 'attached_images/products/77/NRA-21HT-GBL-Si-03.jpg', 'attached_images/products/77/NRA-21HT-GBL-Si-04.jpg'),
(78, 'TOP MOUNTED', 'Model: NRA-21HT-GPL,Capacity: 215 ltr,', NULL, NULL, '215', 29500.00, 27900.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 215 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 03:13:13', '2019-11-27 02:28:36', 'attached_images/products/78/NRA-21 HT - GPL (000 Ltr.) (Purpel) 01.jpg', 'attached_images/products/78/NRA-21 HT - GPL (000 Ltr.) (Purpel) 02.jpg', 'attached_images/products/78/NRA-21 HT - GPL (000 Ltr.) (Purpel) 03.jpg', 'attached_images/products/78/NRA-21 HT - GPL (000 Ltr.) (Purpel) 03.jpg'),
(79, 'TOP MOUNTED', 'Model: NRA-21HT-GRD,Capacity : 215 Ltr.,', NULL, NULL, '215', 29500.00, 27900.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 200 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Top Mount Refrigerator\":\"Quick Freezing\"},{\"CFC Free\":\"Finished glass door\"},{\"Finished glass door\":\"Shiny Glass Finishing\"},{\"Mold proof door gasket\":\"Adjustable thermostate\"},{\"Low power consumption\":\"High Efficiency Evaporator\"},{\"Auto Defrost technology\":\"Low noise\"},{\"8 Years Compressor Warranty\":null}]', '2019-09-18 03:17:07', '2019-11-27 02:29:59', 'attached_images/products/79/NRA-21 HT - GRD (000 Ltr.) (Red) 01.jpg', 'attached_images/products/79/NRA-21 HT - GRD (000 Ltr.) (Red) 02.jpg', 'attached_images/products/79/NRA-21 HT - GRD (000 Ltr.) (Red) 03.jpg', NULL),
(82, 'TOP MOUNTED', 'Model: NRA-21HT-GRD SI,Capacity: 215 ltr,', NULL, NULL, '215', 29500.00, 27900.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 215 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 03:30:10', '2019-12-17 01:35:49', 'attached_images/products/82/NRA-21HT-GRD-Si.jpg', 'attached_images/products/82/NRA-21HT-GRD-Si.jpg', 'attached_images/products/82/NRA-21 HT - GRD (000 Ltr.) (Red) 03.jpg', NULL),
(83, 'TOP MOUNTED (Jamdani  Flower)', 'Model: NRA-21HT-GRD (Jamdani  Flower),Capacity: 215 ltr,', NULL, NULL, '215', 29500.00, 27900.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 215 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.<br></p>', '[{\"Finished glass door\":\"Shiny Glass Finishing\"},{\"Quick Freezing\":\"Low power consumption\"},{\"Mold proof door gasket\":\"Adjustable thermostate\"},{\"CFC free\":\"Auto Defrost technology\"},{\"High Efficiency Evaporator\":\"Elegant Design\"},{\"8 Years Compressor Warranty\":null}]', '2019-09-18 03:32:26', '2019-11-27 02:31:25', 'attached_images/products/83/05.jpg', 'attached_images/products/83/12.jpg', NULL, NULL),
(84, 'BOTTOM MOUNTED', 'Model: NRA-22 SB-GPL,Capacity: 220 ltr,', NULL, NULL, '220', 32300.00, 31300.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 220 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 03:34:46', '2019-12-17 01:49:30', 'attached_images/products/84/NRA-22SB-GPL & NRA-25SB-GPL (000 Ltr. & 000 Ltr.) Purple 01.jpg', 'attached_images/products/84/NRA-22SB-GPL & NRA-25SB-GPL (000 Ltr. & 000 Ltr.) Purple 02.jpg', NULL, NULL),
(85, 'BOTTOM MOUNTED', 'Model: NRA-22 SB-GBL,Capacity: 220 ltr,', NULL, NULL, '220', 32300.00, 31300.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 200L. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.<br></p>', '[{\"Bottom Mount Refrigerator\":\"CFC Free\"},{\"Quick Freezing\":\"High Efficiency Evaporator\"},{\"Auto Defrost technology\":\"Low power consumption\"},{\"Mold proof door gasket\":\"Adjustable thermostate\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"}]', '2019-09-18 03:37:33', '2019-11-27 02:33:14', 'attached_images/products/85/NRA-22SB-GBL & NRA-25SB-GBL (000 Ltr. & 000 Ltr.) (Violet) 01.jpg', 'attached_images/products/85/NRA-22SB-GBL & NRA-25SB-GBL (000 Ltr. & 000 Ltr.) (Violet) 02.jpg', NULL, NULL),
(87, 'Bottom  MOUNTED', 'Model: NRA-25 SB-GPL,Capacity: 250 ltr,', NULL, NULL, '250', 35300.00, 34300.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 250 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator\":null}]', '2019-09-18 03:59:34', '2019-11-27 02:34:56', 'attached_images/products/87/NRA-22SB-GPL & NRA-25SB-GPL (000 Ltr. & 000 Ltr.) Purple 01.jpg', 'attached_images/products/87/NRA-22SB-GPL & NRA-25SB-GPL (000 Ltr. & 000 Ltr.) Purple 02.jpg', 'attached_images/products/87/Inner.jpg', NULL),
(88, 'Bottom MOUNTED', 'Model: NRA-25 SB-GBL,Capacity: 250 ltr,', NULL, NULL, '250', 35300.00, 34300.00, 0, NULL, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 250 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator , Shiny Glass Finishing\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator\":null}]', '2019-09-18 04:04:42', '2019-11-27 02:36:07', 'attached_images/products/88/NRA-22SB-GBL & NRA-25SB-GBL (000 Ltr. & 000 Ltr.) (Violet) 01.jpg', 'attached_images/products/88/NRA-22SB-GBL & NRA-25SB-GBL (000 Ltr. & 000 Ltr.) (Violet) 02.jpg', 'attached_images/products/88/Inner.jpg', NULL),
(89, 'Bottom MOUNTED', 'Model: NRA-25 SB-GRD,Capacity: 250 ltr,', NULL, NULL, '250', 35300.00, 34300.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 250 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator\":null}]', '2019-09-18 04:55:09', '2019-11-27 02:36:44', 'attached_images/products/89/NRA-22SB-GRD (000 Ltr.) & (000 Ltr.) (Red) 01.jpg', 'attached_images/products/89/NRA-22SB-GRD (000 Ltr.) & (000 Ltr.) (Red) 02.jpg', 'attached_images/products/89/Inner.jpg', NULL),
(90, 'Bottom MOUNTED', 'Model: NRA-22KB-GRD (Shadow Flower),Capacity: 225 ltr,', NULL, NULL, '225', 33300.00, 30700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 225 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator\":null}]', '2019-09-18 05:19:24', '2019-11-27 02:38:28', 'attached_images/products/90/NRA-22KB-GRD & NRA-24KB-GRD (Shadow Flower) 01.jpg', 'attached_images/products/90/NRA-22KB-GRD & NRA-24KB-GRD (Shadow Flower) 02.jpg', 'attached_images/products/90/Inner.jpg', NULL),
(91, 'BOTTOM MOUNTED  (Camellia Flower)', 'Model: NRA-22KB-GRD (Camellia Flower),Capacity: 225 ltr,', NULL, NULL, '225', 33300.00, 30700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 225 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.<br></p>', '[{\"Bottom Mount Refrigerator\":\"CFC Free\"},{\"Quick Freezing\":\"High Efficiency Evaporator\"},{\"Auto Defrost technology\":\"Low power consumption\"},{\"Mold proof door gasket\":\"Adjustable thermostate\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"}]', '2019-09-18 05:23:36', '2019-11-27 02:37:30', 'attached_images/products/91/NRA-22KB-GRD & NRA-24KB-GRD (Camellia Flower) 01.jpg', 'attached_images/products/91/NRA-22KB-GRD & NRA-24KB-GRD (Camellia Flower) 02.jpg', 'attached_images/products/91/Inner.jpg', NULL),
(93, 'BOTTOM MOUNTED (Camellia Flower)', 'Model: NRA-22KB-GBK (Camellia Flower),Capacity: 225 ltr,', NULL, NULL, '225', 33300.00, 30700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 225 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Bottom Mount Refrigerator\":\"CFC Free\"},{\"Quick Freezing\":\"High Efficiency Evaporator\"},{\"Low power consumption\":\"Auto Defrost technology\"},{\"Adjustable thermostate\":\"Mold proof door gasket\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"\":null}]', '2019-09-18 21:11:12', '2019-11-27 02:39:17', 'attached_images/products/93/NRA-22KB-GBK & NRA-24KB-GBK (Camellia Flower) 01.jpg', 'attached_images/products/93/NRA-22KB-GBK & NRA-24KB-GBK (Camellia Flower) 02.jpg', 'attached_images/products/93/Inner.jpg', NULL),
(94, 'BOTTOM MOUNTED', 'Model: NRA-22KB-GBL (Camellia Flower),Capacity: 225 ltr,', NULL, NULL, '225', 33300.00, 30700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 225 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"Shiny Glass Finishing\"},{\"High Efficiency Evaporator\":\"Bottom Mount Refrigerator\"},{\"8 Years Compressor Warranty\":null}]', '2019-09-18 21:13:06', '2019-11-27 02:41:00', 'attached_images/products/94/NRA-22KB-GBL & NRA-24KB-GBL (Camellia Flower) 01.jpg', 'attached_images/products/94/NRA-22KB-GBL & NRA-24KB-GBL (Camellia Flower) 02.jpg', 'attached_images/products/94/Inner.jpg', NULL),
(95, 'BOTTOM MOUNTED', 'Model: NRA-24KB-GRD  (Shadow Flower),Capacity: 255 ltr,', NULL, NULL, '255', 36300.00, 32700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 255 Ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator.\":null}]', '2019-09-18 21:14:52', '2019-11-27 02:42:12', 'attached_images/products/95/NRA-22KB-GRD & NRA-24KB-GRD (Shadow Flower) 01.jpg', 'attached_images/products/95/NRA-22KB-GRD & NRA-24KB-GRD (Shadow Flower) 02.jpg', 'attached_images/products/95/Inner.jpg', NULL),
(96, 'BOTTOM MOUNTED', 'Model: NRA-24KB-GRD (Camellia Flower),Capacity: 255 ltr,', NULL, NULL, '255', 36300.00, 32700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 255 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator.\":null}]', '2019-09-18 21:17:09', '2019-11-27 02:43:14', 'attached_images/products/96/NRA-22KB-GRD & NRA-24KB-GRD (Camellia Flower) 01.jpg', 'attached_images/products/96/NRA-22KB-GRD & NRA-24KB-GRD (Camellia Flower) 02.jpg', 'attached_images/products/96/Inner.jpg', NULL),
(97, 'BOTTOM MOUNTED', 'Model: NRA-24KB-GRD (Jamdani Flower),Capacity: 255 ltr,', NULL, NULL, '255', 36300.00, 32700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 255 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick FreezingTop Mount Refrigerator.\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator\":null}]', '2019-09-18 21:19:52', '2019-12-17 02:40:23', 'attached_images/products/97/NRA-22KB-GRD & NRA-24KB-GRD.jpg', 'attached_images/products/97/05.jpg', 'attached_images/products/97/Inner.jpg', NULL),
(98, 'BOTTOM MOUNTED', 'Model: NRA-24KB-GBK (Camellia Flower),Capacity: 255 ltr,', NULL, NULL, '255', 36300.00, 32700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 255 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator\":null}]', '2019-09-18 21:30:02', '2019-11-27 02:44:57', 'attached_images/products/98/NRA-22KB-GBK & NRA-24KB-GBK (Camellia Flower) 01.jpg', 'attached_images/products/98/NRA-22KB-GBK & NRA-24KB-GBK (Camellia Flower) 02.jpg', 'attached_images/products/98/Inner.jpg', NULL),
(99, 'BOTTOM MOUNTED', 'Model: NRA-24KB-GBL (Camellia Flower),Capacity: 255 ltr,', NULL, NULL, '255', 36300.00, 32700.00, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 255 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Bottom Mount Refrigerator\":null}]', '2019-09-18 21:44:15', '2019-11-27 02:45:33', 'attached_images/products/99/NRA-22KB-GBL & NRA-24KB-GBL (Camellia Flower) 01.jpg', 'attached_images/products/99/NRA-22KB-GBL & NRA-24KB-GBL (Camellia Flower) 02.jpg', 'attached_images/products/99/Inner.jpg', NULL),
(100, 'TOP MOUNTED', 'Model: NRA-14NT-GBK (Black),Capacity: 145 ltr,', NULL, NULL, '145', 20500.00, NULL, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 145 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"Shiny Glass Finishing\"},{\"8 Years Compressor Warranty\":\"High Efficiency Evaporator\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 22:27:45', '2019-11-23 04:31:52', 'attached_images/products/100/02.jpg', 'attached_images/products/100/Inner.jpg', NULL, NULL),
(101, 'TOP MOUNTED', 'Model: NRA-14NT-GBL (Blue),Capacity: 145 ltr,', NULL, NULL, '145', 20500.00, NULL, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 142 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator.\":null}]', '2019-09-18 22:28:51', '2019-11-23 04:33:05', 'attached_images/products/101/03.jpg', 'attached_images/products/101/Inner.jpg', NULL, NULL),
(102, 'TOP MOUNTED', 'Model: NRA-14NT-GRD (Red),Capacity: 145 ltr,', NULL, NULL, '145', 20500.00, NULL, 0, 20, '<p>\r\n\r\nPerfect for your home space. Its design is elegant enough to add a value to your kitchen. With its additional distinct features like a mold proof door gasket, adjustable thermostat, this has a large capacity of about 145 ltr. This CFC free refrigerator exhibits low noise and has a feature of low power consumption with an addition of Auto-Defrost technology.\r\n\r\n<br></p>', '[{\"Quick Freezing\":\"Low Electricity Cost\"},{\"CFC Free\":\"High Efficiency Evaporator\"},{\"Shiny Glass Finishing\":\"8 Years Compressor Warranty\"},{\"Top Mount Refrigerator\":null}]', '2019-09-18 22:30:13', '2019-11-23 04:33:59', 'attached_images/products/102/01.jpg', 'attached_images/products/102/Inner.jpg', NULL, NULL),
(104, 'ATASHII CHEST FREEZER', 'Model: NFA-100NI-GOR,Capacity: 100 Ltr.', NULL, NULL, '100', 21000.00, NULL, 0, 20, '<p>\r\n\r\n</p><p>This Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 100 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.</p><p></p>', '[{\"Capacity: 100 Liters\":\"Glass-door freezer for easy clean\"},{\"Quick freezing capacity\":\"Adjustable thermostat\"},{\"Easy rolling wheels\":\"Interior LED lighting\"},{\"Removable storage basket\":\"R600a GAS CFC Free and Environmental friendly\"},{\"Attractive interior decoration\":\"High-pressure foam freezer chamber for efficient temperature preservation\"},{\"High-quality compressor and cooling system for low power consumption\":\"Defrost water drainage system\"},{\"Sliding Glass shelf for the preservation of cooling and rapid using\":null}]', '2019-09-18 22:49:12', '2019-11-27 22:19:46', 'attached_images/products/104/02.jpg', 'attached_images/products/104/01.png', NULL, NULL),
(105, 'ATASHII CHEST FREEZER', 'Model: NFA-100NI-GBL,Capacity: 100 ltr.,', NULL, NULL, '100', 21000.00, NULL, 0, 20, '<p>\r\n\r\nThis Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 100 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.\r\n\r\n<br></p>', '[{\"Capacity: 100 Liters\":\"Glass-door freezer for easy clean\"},{\"Quick freezing capacity\":\"Adjustable thermostat\"},{\"Easy rolling wheels\":\"Interior LED lighting\"},{\"Removable storage basket\":\"R600a GAS CFC Free and Environmental friendly\"},{\"Attractive interior decoration\":\"High-pressure foam freezer chamber for efficient temperature preservation\"},{\"High-quality compressor and cooling system for low power consumption\":\"Defrost water drainage system\"},{\"Sliding Glass shelf for the preservation of cooling and rapid using\":null}]', '2019-09-18 22:50:54', '2019-11-02 04:10:48', 'attached_images/products/105/NFA-100 Ni-GBL (01).jpg', 'attached_images/products/105/NFA-100 Ni-GBL (02).jpg', NULL, NULL),
(106, 'ATASHII CHEST FREEZER', 'Model: NFA-100NI-GPK,Capacity: 100 ltr,', NULL, NULL, '100', 21000.00, NULL, 0, 20, '<p>\r\n\r\nThis Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 100 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.\r\n\r\n<br></p>', '[{\"Capacity: 100 Liters\":\"Glass-door freezer for easy clean\"},{\"Quick freezing capacity\":\"Adjustable thermostat\"},{\"Easy rolling wheels\":\"Interior LED lighting\"},{\"Removable storage basket\":\"R600a GAS CFC Free and Environmental friendly\"},{\"Attractive interior decoration\":\"High-pressure foam freezer chamber for efficient temperature preservation\"},{\"High-quality compressor and cooling system for low power consumption\":\"Defrost water drainage system\"},{\"Sliding Glass shelf for the preservation of cooling and rapid using\":null}]', '2019-09-18 23:01:54', '2019-11-02 04:16:36', 'attached_images/products/106/NFA-100 Ni-GPK (01).jpg', 'attached_images/products/106/NFA-100 Ni-GPK (02).jpg', NULL, NULL),
(108, 'ATASHII CHEST FREEZER', 'Model: NFA-155NI-GOR,Capacity: 155 ltr,', NULL, NULL, '155', 26000.00, NULL, 0, 20, '<p>\r\n\r\nThis Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 155 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.\r\n\r\n<br></p>', '[{\"Capacity: 155 Liters\":\"Glass-door freezer for easy clean\"},{\"Quick freezing capacity\":\"Adjustable thermostat\"},{\"Easy rolling wheels\":\"Interior LED lighting\"},{\"Removable storage basket\":\"R600a GAS CFC Free and Environmental friendly\"},{\"Attractive interior decoration\":\"High-pressure foam freezer chamber for efficient temperature preservation\"},{\"High-quality compressor and cooling system for low power consumption\":\"Defrost water drainage system\"},{\"Sliding Glass shelf for the preservation of cooling and rapid using\":null}]', '2019-09-18 23:06:21', '2019-11-02 04:24:50', 'attached_images/products/108/NFA-155 Ni-GOR (01).png', 'attached_images/products/108/NFA-155 Ni-GOR (02).jpg', NULL, NULL);
INSERT INTO `products` (`id`, `title`, `specification`, `ac_capacity`, `screen_size`, `capacity_litre`, `price`, `sale_price`, `discount`, `quantity`, `description`, `additional_information`, `created_at`, `updated_at`, `image1`, `image2`, `image3`, `image4`) VALUES
(109, 'ATASHII CHEST FREEZER', 'Model: NFA-155NI-GBL,Capacity: 155 Ltr.,', NULL, NULL, '155', 26000.00, NULL, 0, 20, '<p>\r\n\r\nThis Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 155 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.\r\n\r\n<br></p>', '[{\"Capacity: 155 Liters\":\"Glass-door freezer for easy clean\"},{\"Quick freezing capacity\":\"Adjustable thermostat\"},{\"Easy rolling wheels\":\"Interior LED lighting\"},{\"Removable storage basket\":\"R600a GAS CFC Free and Environmental friendly\"},{\"Attractive interior decoration\":\"High-pressure foam freezer chamber for efficient temperature preservation\"},{\"High-quality compressor and cooling system for low power consumption\":\"Defrost water drainage system\"},{\"Sliding Glass shelf for the preservation of cooling and rapid using\":null}]', '2019-09-18 23:07:58', '2019-11-02 04:30:35', 'attached_images/products/109/NFA-155 Ni-GBL(01).jpg', 'attached_images/products/109/NFA-155 Ni-GBL (02).jpg', NULL, NULL),
(110, 'ATASHII CHEST FREEZER', 'Model: NFA-155NI-GYL,Capacity: 155 Ltr.,', NULL, NULL, '155', 26000.00, NULL, 0, 20, '<p>\r\n\r\nThis Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 155 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.\r\n\r\n<br></p>', '[{\"Capacity: 155 Liters\":\"Glass-door freezer for easy clean\"},{\"Quick freezing capacity\":\"Adjustable thermostat\"},{\"Easy rolling wheels\":\"Interior LED lighting\"},{\"Removable storage basket\":\"R600a GAS CFC Free and Environmental friendly\"},{\"Attractive interior decoration\":\"High-pressure foam freezer chamber for efficient temperature preservation\"},{\"High-quality compressor and cooling system for low power consumption\":\"Defrost water drainage system\"},{\"Sliding Glass shelf for the preservation of cooling and rapid using\":null}]', '2019-09-18 23:09:12', '2019-11-02 04:36:38', 'attached_images/products/110/NFA-155Ni-GYL-(155-Ltr).jpg', NULL, NULL, NULL),
(112, 'ATASHII CHEST FREEZER', 'Model: NFA-200NI-GOR,Capacity: 200 Ltr.,', NULL, NULL, '200', 30000.00, NULL, 0, 20, '<p>\r\n\r\nThis Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 200 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.\r\n\r\n<br></p>', '[{\"Capacity: 200 Liters\":\"Glass-door freezer for easy clean\"},{\"Quick freezing capacity\":\"Adjustable thermostat\"},{\"Easy rolling wheels\":\"Interior LED lighting\"},{\"Removable storage basket\":\"R600a GAS CFC Free and Environmental friendly\"},{\"Attractive interior decoration\":\"High-pressure foam freezer chamber for efficient temperature preservation\"},{\"High-quality compressor and cooling system for low power consumption\":\"Defrost water drainage system\"},{\"Sliding Glass shelf for the preservation of cooling and rapid using\":null}]', '2019-09-18 23:12:01', '2019-11-02 04:41:42', 'attached_images/products/112/NFA-200 Ni-GOR (01).png', 'attached_images/products/112/NFA-200 Ni-GOR (02).jpg', NULL, NULL),
(114, 'VCM Door', 'Model: NFA-300NI-BL,Capacity: 300 ltr,', NULL, NULL, '300', 31900.00, NULL, 0, 20, '<p>\r\n\r\nThis Chest freezer provides energy saving compressor with efficiency, super micro-hole foaming layer, first-class insulation technology, optimal door seal design for better coldness storage, anti-bacterial inner feature for preventing the growth of bacteria. It can be a perfect choice for you and your family with its deep Fridge design. This wonderfully designed Freezer of 300 liters capacity is fully equipped with various healthy features to help store your food without any health hazards. Low noise design ensures comfort. This Freezer comes with amazing Reversible Door with Magnetic Door Seal, Mechanical Temperature Control, Direct Cooling, Super Large Freezing Chamber, Lock &amp; key system and Energy saving with optimized insulation thickness.\r\n\r\n<br></p>', '[{\"Capacity: 300 Liters\":\"Quick freezing capacity\"},{\"Adjustable thermostat\":\"Easy rolling wheels\"},{\"Interior LED lighting\":\"Removable storage basket\"},{\"R600a GAS CFC Free and Environmental friendly\":\"Attractive interior decoration\"},{\"High-pressure foam freezer chamber for efficient temperature preservation\":\"High-quality compressor and cooling system for low power consumption\"},{\"Defrost water drainage system\":\"Sliding Glass shelf for the preservation of cooling and rapid using\"}]', '2019-09-18 23:18:33', '2019-11-02 04:46:17', 'attached_images/products/114/NFA-300Ni-BL-(300-Ltr)-.jpg', NULL, NULL, NULL),
(115, 'ATASHII INVERTER  AC', 'Model: NA-24CR-INV,Capacity: 2 Ton,', '2', NULL, NULL, 93500.00, NULL, 0, 20, '<p>\r\n\r\n<p>The Atashii Inverter air condition is about what you need for today\'s living comfort. The cool comfort Atashii Inverter air conditioner is designed from Atashii extensive research and broad-based feedback from customers, which is why they address several user demands. The Atashii Inverter air conditioner offer simplicity of operation and, quite importantly, efficient air cooling performance.</p><h4><strong>Some Other Features</strong></h4><p>Height Indoor Unit: 325mm, Height Outdoor Unit: 555mmLength Indoor Unit: 980mm, Length Outdoor Unit: 770mm, Specialty: Inverter Type, Auto Restart Function, Temp Compensation, Turbo Mode, Cold Catalyst Filter, 4-Way Multi-Directional Airflow, Anti-rust Cabinet, Dry Mode Operation, Self Clean Function Conformal Coated PCB</p></p>', '[{\"Free installation all Over Bangladesh\":\"Product Type: Inverter AC 2.0 Ton\\/24000 BTU\"},{\"Superior Operating Range\":\"Cooling: 17\\u00b0C to 30\\u00b0C\"},{\"Quiet Operation\":\"Auto Restart Mode\"},{\"Turbo Mode\":\"24 Hour Timer On\\/Off\"},{\"4-Way Multi-Directional Airflow\":\"HEPA-BIO Filter\"},{\"Demand Response Enabled\":\"Remote Mode: On\\/Off\"},{\"Dry Mode Operation\":\"Sleep Program\"},{\"Fan Speed: Auto, Quiet, Low, Med, High\":\"Follow Me Function\"},{\"Powder Coated Panels\":\"Hydrophilic Indoor and Outdoor Coil Protection\"},{\"Self Clean Function Conformal Coated PCB\":null}]', '2019-09-18 23:30:07', '2019-11-02 05:33:25', 'attached_images/products/115/Inverter AC (NA-24CR-INV, NA-18CR-INV).jpg', NULL, NULL, NULL),
(116, 'ATASHII CASSETTE TYPE  AC', 'Model: MCC-48-CR (Cassette),Capacity: 4.0 Ton,', '4.0', NULL, NULL, 160000.00, NULL, 0, 20, '<p>\r\n\r\nAn easy installation of an air conditioner means less mess, or disruption, for your home or downtime for your business. Thinking about your convenience Atashii came up with their MCC-48-CR (Cassette) Air Conditioner. Easy to maintain. Its sleek design makes your space look elegant and does not occupy much space of your ceiling which is perfectly convenient for you. Both the indoor and outdoor units are designed for quiet operation. This 4.0 ton eco-friendly energy efficient device comes with some unique features like Refrigerant Leakage Detector, Cold Catalyst Filter, Self diagnosis auto protections and Internal Thermal Protector Compressor.\r\n\r\n<br></p>', '[{\"Product Type: Cassette Type Air Conditioner\":\"Energy efficient\"},{\"Refrigerant Leakage Detector\":\"Cold Catalyst Filter\"},{\"Self diagnosis auto protection\":\"Internal Thermal Protector Compressor\"},{\"Eco Friendly\":\"Compressor - 3 Years, Spare Parts -1 Year, After Sales Service - 1 Year\"},{\"Copper Pipe Not Included\":null}]', '2019-09-18 23:32:00', '2019-11-02 05:58:48', 'attached_images/products/116/MCC48CR-(4-Ton)-&-MCC60CR-(5-Ton).jpg', NULL, NULL, NULL),
(117, 'ATASHII REGULAR AC', 'Model: NA-12CR-AR,Capacity: 1.0 ton,', '1.0', NULL, NULL, 43900.00, NULL, 0, 1, '<p>\r\n\r\nThis Atashii Regular Air Conditioner is an intelligent air conditioner. It is the new definition of cool and smart. It is the perfect fit for your home in hot and cold weather. It regulates temperature to the perfect condition, leaving your home/office odor free and a breath of fresh air everywhere. This air conditioner does not only cool your home, it purifies the air so that you can stay healthy. It performs all these functions while still saving energy. Your energy bills will always stay low.\r\n\r\n<br></p>', '[{\"Free installation all Over Bangladesh\":\"Capacity: 1.0 Ton\\/12000 BTU\"},{\"Energy Efficient\":\"Refrigerant Leakage Detector\"},{\"Cold Catalyst Filter\":\"Self Diagnosis Auto Protections\"},{\"Internal Thermal Protector Compressor\":\"Eco-Friendly\"},{\"\":null}]', '2019-09-19 00:19:47', '2020-02-20 04:14:43', 'attached_images/products/117/NA-12CR-AR (1 Ton), NA-18CR-AR (1.5 Ton), NA-24CR-AR (2 Ton), NA-30CR-AR (2.5 Ton) .jpg', NULL, NULL, NULL),
(118, 'ATASHII REGULAR AC', 'Model: NA-18CR-AR,Capacity: 1.5 Ton,,', '1.5', NULL, NULL, 57900.00, NULL, 0, 20, '<p>\r\n\r\nThis Atashii Split Air Conditioner is an intelligent air conditioner. It is the new definition of cool and smart. It is the perfect fit for your home in hot and cold weather. It regulates temperature to the perfect condition, leaving your home/office odor free and a breath of fresh air everywhere. This air conditioner does not only cool your home, it purifies the air so that you can stay healthy. It performs all these functions while still saving energy. Your energy bills will always stay low.\r\n\r\n<br></p>', '[{\"Free installation all Over Bangladesh\":\"Capacity: 1.5 Ton\\/18000 BTU\"},{\"Energy efficient\":\"Refrigerant Leakage Detector\"},{\"Cold Catalyst Filter\":\"Self-diagnosis auto protections\"},{\"Internal Thermal Protector Compressor\":\"Eco-Friendly\"},{\"3 Years Compressor and 1 Year Spare Warranty with 1 Year Free Service\":null}]', '2019-09-19 00:21:08', '2019-11-05 23:12:07', 'attached_images/products/118/NA-12CR-AR (1 Ton), NA-18CR-AR (1.5 Ton), NA-24CR-AR (2 Ton), NA-30CR-AR (2.5 Ton) .jpg', NULL, NULL, NULL),
(120, 'CEILING MOUNTED AC', 'Model: MCD-48CRN1,Capacity: 4.0 ton,', '4.0', NULL, NULL, 160000.00, NULL, 0, 20, '<p>\r\n\r\nAn easy installation of an air conditioner means less mess, or disruption, for your home or downtime for your business. Thinking about your convenience Atashii came up with their MCD-48CRN1 Ceiling Mounted Air Conditioner. Easy to maintain. Its sleek design makes your space look elegant and does not occupy much space of your ceiling which is perfectly convenient for you. Both the indoor and outdoor units are designed for quiet operation. This 4.0 ton eco-friendly energy efficient device comes with some unique features like Refrigerant Leakage Detector, Cold Catalyst Filter, Self-diagnosis auto protections and Internal Thermal Protector Compressor.\r\n\r\n<br></p>', '[{\"After installation AC\'s are not eligible of our return policy\":\"Product Type: Ceiling Mounted Air Conditioner\"},{\"Energy efficient\":\"Refrigerant Leakage Detector\"},{\"Cold Catalyst Filter\":\"Self diagnosis auto protection\"},{\"Internal Thermal Protector Compressor\":\"Eco Friendly\"},{\"Installation Charge TK 5000\":\"Angle Cost if needed TK 2500\"},{\"Copper Pipe not Included\":\"Extra Copper Pipe per feet Cost TK 350\"},{\"Based on the Floor Level and Location of Air Conditioner\'s outer unit the installation charges may vary\":null}]', '2019-09-19 00:28:52', '2019-11-06 00:04:54', 'attached_images/products/120/MUE48CR-(4-Ton)-&-MUE60CR-(5-Ton).jpg', NULL, NULL, NULL),
(121, 'CEILING MOUNTED AC', 'Model: MUE-48CRN1,Capacity: 4.0 Ton,', '4.0', NULL, NULL, 160000.00, NULL, 0, 20, '<p>\r\n\r\nAn easy installation of an air conditioner means less mess, or disruption, for your home or downtime for your business. Thinking about your convenience Atashii came up with their MUE-48CRN1 Ceiling Mounted Air Conditioner. Easy to maintain. Its sleek design makes your space look elegant and does not occupy much space of your ceiling which is perfectly convenient for you. Both the indoor and outdoor units are designed for quiet operation. This 4.0 ton eco-friendly energy efficient device comes with some unique features like Refrigerant Leakage Detector, Cold Catalyst Filter, Self-diagnosis auto protections and Internal Thermal Protector Compressor.\r\n\r\n<br></p>', '[{\"After installation AC\'s are not eligible of our return policy\":\"Eco Friendly\"},{\"Product Type: Ceiling Mounted Air Conditioner\":\"Energy efficient\"},{\"Refrigerant Leakage Detector\":\"Cold Catalyst Filter\"},{\"Self diagnosis auto protection\":\"Internal Thermal Protector Compressor\"},{\"Installation Charge TK 5000\":\"Copper Pipe Not Included\"},{\"Angle Cost if needed TK 2500\":\"Extra Copper Pipe per feet Cost TK 350\"},{\"Based on the Floor Level and Location of Air Conditioner\'s outer unit the installation charges may vary\":null}]', '2019-09-19 00:29:51', '2019-11-06 01:06:26', 'attached_images/products/121/MUE48CR-(4-Ton)-&-MUE60CR-(5-Ton).jpg', NULL, NULL, NULL),
(122, 'CEILING MOUNTED AC', 'Model: MUE-60-CRN1,Capacity: 5.0 Ton,', '5.0', NULL, NULL, 175000.00, NULL, 0, 20, '<p>\r\n\r\nAn easy installation of an air conditioner means less mess, or disruption, for your home or downtime for your business. Thinking about your convenience Atashii came up with their MUE-60-CRN1 Ceiling Mounted Air Conditioner. Easy to maintain. Its sleek design makes your space look elegant and does not occupy much space of your ceiling which is perfectly convenient for you. Both the indoor and outdoor units are designed for quiet operation. This 5.0 ton eco-friendly energy efficient device comes with some unique features like Refrigerant Leakage Detector, Cold Catalyst Filter, Self-diagnosis auto protections and Internal Thermal Protector Compressor.\r\n\r\n<br></p>', '[{\"After installation AC\'s are not eligible of our return policy\":\"Product Type: Ceiling Mounted Air Conditioner\"},{\"Eco Friendly\":\"Energy efficient\"},{\"Refrigerant Leakage Detector\":\"Cold Catalyst Filter\"},{\"Self diagnosis auto protection\":\"Internal Thermal Protector Compressor\"},{\"Installation Charge TK 5000\":\"Copper Pipe Not Included\"},{\"Angle Cost if needed TK 2500\":\"Extra Copper Pipe per feet Cost TK 350\"},{\"Based on the Floor Level and Location of Air Conditioner\'s outer unit the installation charges may vary\":null}]', '2019-09-19 00:32:00', '2019-11-06 01:16:49', 'attached_images/products/122/MUE48CR-(4-Ton)-&-MUE60CR-(5-Ton).jpg', NULL, NULL, NULL),
(123, 'ATASHII REGULAR AC', 'Model: NA-24CR-AR,Capacity: 2.0 Ton,', '2.0', NULL, NULL, 69900.00, NULL, 0, 20, '<p>\r\n\r\nThis Atashii Split type Regular Air Conditioner is an intelligent air conditioner. It is the new definition of cool and smart. It is the perfect fit for your home in hot and cold weather. It regulates temperature to the perfect condition, leaving your home/office odor free and a breath of fresh air everywhere. This air conditioner does not only cool your home, it purifies the air so that you can stay healthy. It performs all these functions while still saving energy. Your energy bills will always stay low.\r\n\r\n<br></p>', '[{\"Free installation all over Bangladesh\":\"Capacity: 2.0 Ton\\/24000 BTU\"},{\"Energy efficient\":\"Cold Catalyst Filter\"},{\"Refrigerant Leakage Detector\":\"Self diagnosis auto protections\"},{\"Internal Thermal Protector Compressor\":\"Eco Friendly\"}]', '2019-09-19 00:33:02', '2019-11-13 03:43:25', 'attached_images/products/123/NA-12CR-AR (1 Ton), NA-18CR-AR (1.5 Ton), NA-24CR-AR (2 Ton), NA-30CR-AR (2.5 Ton) .jpg', NULL, NULL, NULL),
(124, 'CEILING MOUNTED AC', 'Model: NA-48CR-CD,Capacity: 4.0 Ton,', '4.0', NULL, NULL, 160000.00, NULL, 0, 20, '<p>\r\n\r\nAn easy installation of an air conditioner means less mess, or disruption, for your home or downtime for your business. Thinking about your convenience Atashii came up with their \r\n\r\nNA-48CR-CD\r\n\r\nCeiling Mounted Air Conditioner. Easy to maintain. Its sleek design makes your space look elegant and does not occupy much space of your ceiling which is perfectly convenient for you. Both the indoor and outdoor units are designed for quiet operation. This 4.0 ton eco-friendly energy efficient device comes with some unique features like Refrigerant Leakage Detector, Cold Catalyst Filter, Self-diagnosis auto protections and Internal Thermal Protector Compressor.\r\n\r\n<br></p>', '[{\"After installation AC\'s are not eligible of our return policy\":\"Product Type: Ceiling Mounted Air Conditioner\"},{\"Eco Friendly\":\"Energy efficient\"},{\"Refrigerant Leakage Detector\":\"Cold Catalyst Filter\"},{\"Self diagnosis auto protection\":\"Internal Thermal Protector Compressor\"},{\"Installation Charge TK 5000\":\"Angle Cost if needed TK 2500\"},{\"Copper Pipe Not Included\":\"Extra Copper Pipe per feet Cost TK 350\"},{\"Based on the Floor Level and Location of Air Conditioner\'s outer unit the installation charges may vary\":null}]', '2019-09-19 00:35:55', '2019-11-13 04:03:47', 'attached_images/products/124/MUE48CR-(4-Ton)-&-MUE60CR-(5-Ton).jpg', NULL, NULL, NULL),
(125, 'CEILING MOUNTED AC', 'Model: NA-60CR-CD,Capacity: 5.0 Ton,', '5.0', NULL, NULL, 175000.00, NULL, 0, 20, '<p>\r\n\r\nAn easy installation of an air conditioner means less mess, or disruption, for your home or downtime for your business. Thinking about your convenience Atashii came up with their NA-60CR-CD Ceiling Mounted Air Conditioner. Easy to maintain. Its sleek design makes your space look elegant and does not occupy much space of your ceiling which is perfectly convenient for you. Both the indoor and outdoor units are designed for quiet operation. This 5.0 ton eco-friendly energy efficient device comes with some unique features like Refrigerant Leakage Detector, Cold Catalyst Filter, Self-diagnosis auto protections and Internal Thermal Protector Compressor.\r\n\r\n<br></p>', '[{\"After installation AC\'s are not eligible of our return policy\":\"Product Type: Ceiling Mounted Air Conditioner\"},{\"Eco Friendly\":\"Energy efficient\"},{\"Refrigerant Leakage Detector\":\"Cold Catalyst Filter\"},{\"Self diagnosis auto protection\":\"Internal Thermal Protector Compressor\"},{\"Installation Charge TK 5000\":\"Angle Cost if needed TK 2500\"},{\"Copper Pipe Not Included\":\"Extra Copper Pipe per feet Cost TK 350\"},{\"Based on the Floor Level and Location of Air Conditioner\'s outer unit the installation charges may vary\":null}]', '2019-09-19 00:39:27', '2019-11-13 04:08:11', 'attached_images/products/125/MUE48CR-(4-Ton)-&-MUE60CR-(5-Ton).jpg', NULL, NULL, NULL),
(126, 'ATASHII BLENDER (1.5 Ltr.)', '1.5 Ltr.,Model: NBA-B152,Blender', NULL, NULL, NULL, 2500.00, NULL, 0, 20, '<p>\r\n\r\n<a target=\"_blank\" rel=\"nofollow\">Blenders &amp; Juicers </a>make your most kitchen related works easier. We are that’s why selling all original blenders and juicers of all types like Personal Blender, High power Blender, Blender &amp; juicer combo, Mini Juicer Machine, fruit Blender machine and juicer and blender of the top brands.You can get the latest models with all specifications and details in our website <strong><a target=\"_blank\" rel=\"nofollow\" href=\"http://www.nitolelectronics.com.\">www.nitolelectronics.com.bd</a></strong>withthe best price in Bangladesh. \r\n\r\n<br></p>', '[{\"Modern European Design\":\"6 Control button with pulse function for   Chop, Mix, Grate, Blend, Liquefy.\"},{\"Over Heat Protector\":\"Safety Locking System\"},{\"Durable sharp cutting stainless steel blade\":\"1.5 Liter Plastic Jug Capacity\"},{\"2 Speed with Pulse function\":\"Grinder & Grater for wet & dry use\"},{\"300 W Power Motor\":\"Operating Voltage: 220~240 V AC, 50 Hz\"}]', '2019-09-19 00:47:26', '2019-10-30 03:16:23', 'attached_images/products/126/Blender ( NBA-B152).jpg', NULL, NULL, NULL),
(127, 'ATASHII BLENDER (1.5 Ltr.)', '1.5 Ltr.,Model: NBL 15300-A,Blender', NULL, NULL, NULL, 2499.00, NULL, 0, 20, '<p>\r\n\r\n<a target=\"_blank\" rel=\"nofollow\">Blenders &amp; Juicers&nbsp;</a>make your most kitchen related works easier. We are that’s why selling all original blenders and juicers of all types like Personal Blender, High power Blender, Blender &amp; juicer combo, Mini Juicer Machine, fruit Blender machine and juicer and blender of the top brands.You can get the latest models with all specifications and details in our website <strong><a target=\"_blank\" rel=\"nofollow\" href=\"http://www.nitolelectronics.com.bd\" title=\"Link: http://www.nitolelectronics.com.bd\">www.nitolelectronics.com.bd</a></strong>withthe best price in Bangladesh.\r\n\r\n<br></p>', '[{\"1.5 Liter Plastic Jug Capacity\":\"Durable sharp cutting stainless steel blade\"},{\"2 Speed with Pulse function\":\"Over heat protector\"},{\"Grinder & Grater for wet & dry use\":\"300 W Power Motor\"},{\"Operating Voltage: 220~240 V AC, 50 Hz\":\"Modern European Design\"},{\"3 in 1 blender. Juicer, Grinder & Grater\":\"Heavy duty motor\"},{\"Easy to operate & store\":\"Rotary Safety Switch\"},{\"\":null}]', '2019-09-19 00:48:45', '2019-10-30 03:11:46', 'attached_images/products/127/NBL 15300-A .jpg', NULL, NULL, NULL),
(128, 'ATASHII MICROWAVE OVEN (23 Ltr.)', '23 Ltr.,Model: NMW-90D23AL-G1A (G) Silver,', NULL, NULL, NULL, 9499.00, NULL, 0, 20, '<p>\r\n\r\nATASHII NMW-90D23AL-G1A  Microwave Oven with Grill, often colloquially shortened to microwave, is a kitchen appliance that heats food by bombarding it with electromagnetic radiation in the microwave spectrum causing polarized molecules in the food to rotate and build up thermal energy in a process known as dielectric heating. This microwave oven with the grill function heats food quickly and efficiently; food is evenly heated throughout (except in thick, dense items).\r\n\r\n<br></p>', '[{\"Capacity: 23 Ltr.\":\"Dimensions (W X D x H): 54.7cm X 43cm X 33.7cm\"},{\"Multiple Power Levels; Multiple Cooking Mood\":\"Weight: 10kg\"},{\"Speed & Weight Defrost\":\"Power Consumption: 900 W\"},{\"Turn table Tray\":\"Power Requirement: Voltage- 220-240V & Frequency- 50Hz\"},{\"Cooking End Signal & Cooking Timer\":\"Made in China\"}]', '2019-09-19 00:50:48', '2019-10-29 23:53:21', 'attached_images/products/128/NMW90D25AL-G1-A (25 Ltr.).jpg', 'attached_images/products/128/NMW90D25AL-G1-A-(25-Ltr.jpg', NULL, NULL),
(129, 'ATASHII MICROWAVE OVEN (25 Ltr.)', '25 Ltr.,Model: NMW-90D25AL-B8A (G)Black,', NULL, NULL, NULL, 11299.00, NULL, 0, 20, '<p>\r\n\r\nATASHII NMW-90D25AL-B8A (G)Black Microwave Oven, often colloquially shortened to microwave, is a kitchen appliance that heats food by bombarding it with electromagnetic radiation in the microwave spectrum causing polarized molecules in the food to rotate and build up thermal energy in a process known as dielectric heating.\r\n\r\n<br></p>', '[{\"Capacity: 25 Ltr.\":\"Dimensions (W X D x H): 54.7cm X 45.6cm X 33.7cm\"},{\"Multiple Power Levels\":\"Weight: 10kg\"},{\"Multiple Cooking Mood\":\"Power Consumption: 900 W\"},{\"Speed & Weight Defrost\":\"Power Requirement: Voltage- 220-240 V & Frequency- 50 Hz\"},{\"Turn table Tray\":\"Made in China\"},{\"Cooking End Signal & Cooking Timer\":null}]', '2019-09-19 00:52:27', '2019-12-17 07:09:40', 'attached_images/products/129/(NMW90D25AL-B8-A) & (NMW80D20AP-D2-A).jpg', 'attached_images/products/129/(NMW90D25AL-B8-A) & (NMW80D20AP-D2-A) 02.jpg', NULL, NULL),
(130, 'ATASHII MICROWAVE OVEN (25 Ltr.)', '25 Ltr.,Model: NMW-90D25AL-G1A (G) Silver,', NULL, NULL, NULL, 11499.00, NULL, 0, 20, '<p>\r\n\r\nATASHII NMW-90D25AL-G1A (G) Silver Microwave Oven W/Grill, often colloquially shortened to microwave, is a kitchen appliance that heats food by bombarding it with electromagnetic radiation in the microwave spectrum causing polarized molecules in the food to rotate and build up thermal energy in a process known as dielectric heating. This microwave oven with the grill function heats food quickly and efficiently; food is evenly heated throughout (except in thick, dense items).\r\n\r\n<br></p>', '[{\"Capacity: 25 Ltr.\":\"Turn table Tray\"},{\"Multiple Power Levels\":\"Cooking End Signal & Cooking Timer\"},{\"Multiple Cooking Mood\":\"Speed & Weight Defrost\"}]', '2019-09-19 00:56:23', '2019-10-30 00:01:43', 'attached_images/products/130/NMW90D25AL-G1-A (25 Ltr.).jpg', 'attached_images/products/130/NMW90D25AL-G1-A-(25-Ltr.jpg', NULL, NULL),
(131, 'ATASHII MULTI COOKER (6.0 Ltr.)', '6.0 Ltr.,Model: NMC-22900A,', NULL, NULL, NULL, 4599.00, NULL, 0, 20, '<p>\r\n\r\nThe ATASHII NMC22900-A Multi Cooker is an electric kitchen appliance for automated cooking with a timer which comes in a large variety of cooking modes.<br>This product can boil, bake, fry, roast, stew, and steam. All you have to do with this cooker is select a recipe, put ingredients inside the multi-cooker, set the corresponding program and the multi-cooker cooks according to the selected settings. After turning the machine on, the NMC22900-A multicooker does not require user intervention. In addition to cooking programs, it may have functions such as \"KEEP WARM\", \"REHEAT\", and \"TIME DELAY\".&nbsp;</p><p>\r\n\r\n<b>Number of programs 12 automatic</b><b><br></b>Prepares Rice, Crispy Rice, Fry, Porridge, Fish, Soup, Steam, Stew, Yoghurt, Bake, Meat, Pasta.&nbsp;</p><p>\r\n\r\n<b>Ideal for regular meal</b><b><br></b>COOK: Comes to a boiling point and maintains it for a predetermined amount of time. This program is ideal for making soup, broth, oatmeal with milk, rice and grains.<br>PASTA: Heats to a boiling point and pauses when it’s time to put in the ingredients. After the ingredients are in, it comes to a boil again and maintains the temperature for a predetermined amount of time. The program can be used for cooking pasta, dumplings, eggs, sausages and other products that need boiling water.<br>STEW: Comes to a boiling point and then continues at a slightly lower temperature. This program can make steamed vegetables, meat and seafood.<br>FRYING: This program can be used to fry meat, poultry, fish, vegetables and seafood. Fry with an open or closed lid.<br>BAKE: Bake biscuits, casseroles, cakes and pastries.<br>RICE/GRAIN: Heats to a boil and maintains the boil until the water is gone (via evaporation or absorption of the ingredients). Use this program to cook boiled rice, buckwheat, peas, beans and coarse grains.<br>STEAM: Steams vegetables, meat, dumplings and baby food.<br>SOUP: Makes soup, broth and various drinks.<br>YOGURT: Makes homemade yogurt.\r\n\r\n&nbsp;\r\n<br>\r\n\r\n\r\n\r\n<b>PACKAGE INCLUDES</b><b><br></b>1. Multi cooker with removable bowl, 2. Steam basket,3. Measuring cup,4. Serving spoon,5. Stir paddle,6. Service &amp; Warranty booklet,7. Power Cord,8. Instruction Manual\r\n\r\n<br></p>', '[{\"Bowl Capacity: 6 Ltr.\":\"Number of programs: 12 automatic\"},{\"Bowl Coating: Non Stick Aluminum Coated\":\"Keep warm function: Upto 12 hours\"},{\"Display: LED Digital\":\"Present timer: 12 hours\"},{\"Cooking Technology: Thermal\":\"Made in China\"},{\"Temperature adjustment: Yes\":\"Power Consumption: 900 W\"},{\"Removable steam valve: Yes\":\"Power Requirement: Voltage- 220-240 V & Frequency- 50 Hz\"},{\"Removable inner lid: Yes\":null}]', '2019-09-19 00:57:58', '2019-10-30 00:26:14', 'attached_images/products/131/Multi Cooker (NMC22 900-A) 6 Ltr (01).jpg', 'attached_images/products/131/Multi Cooker (NMC22 900-A) 6 Ltr (02).jpg', NULL, NULL),
(132, 'ATASHII ELECTRIC KETTLE (1.8 Ltr.)', '1.8 Ltr.,Model: NKA-K960,', NULL, NULL, NULL, 1500.00, NULL, 0, 18, '<p>\r\n\r\nSmart way to make tea or any hot beverages without using stove is having a good Electric Kettle at home which you can buy from us as selling all original toasters of the top brands. You can get the latest models with all specifications and details ﻿in ﻿our website <a href=\"http://www.nitolelectronics.com\" title=\"Link: http://www.nitolelectronics.comwith\">www.nitolelectronics.comwith</a> the best price in Bangladesh. So, stay with us to be updated about the new best deals or offers and enjoy your online shopping with us! You can also find our showroom near to your area to buy these products.\r\n\r\n﻿<br></p>', '[{\"Stainless steel body for hygiene\":\"Protection against over heating\"},{\"Automatically switches off after boiling\":\"360\\u00b0 Rotation\"},{\"LED to indicate switch on mode\":\"1.8 L Capacity\"},{\"Protection From boil- drying\":null},{\"\":null}]', '2019-09-19 00:59:46', '2019-12-09 05:38:17', 'attached_images/products/132/Electric Kettle ( NKA-K960).jpg', NULL, NULL, NULL),
(134, 'ATASHII MIXER GRINDER (1.5 Lt.)', '1.5 Lt.,Model: NGA-B145,', NULL, NULL, NULL, 3500.00, NULL, 0, 20, '<p>\r\n\r\nSmart way to ﻿work in the kitchen is to have a mixer/Grinder in your kitchen which you can buy from us as selling all original toasters of the top brands. You can get the latest models with all specifications and details ﻿in ﻿our website <a href=\"http://www.nitolelectronics.com\" title=\"Link: http://www.nitolelectronics.comwith\">www.nitolelectronics.comwith</a> the best price in Bangladesh. So, stay with us to be updated about the new best deals or offers, discounts and enjoy your online shopping with us. You can also find our showroom near to your area. So buy now to make your life easier.\r\n\r\n﻿<br></p>', '[{\"Capacity: 1.5 Lt.\":\"3 Speed Function with Pulse Control\"},{\"Glass jar for hygienic operation\":\"pulse function for finishing quick chores\"},{\"Blades made from high grade stainless steel\":\"Ideal for fruit & vegetable blending, coffee beans and spices grinding\"},{\"Efficiently grinds, blends and mixes\":\"Overheating protection\"}]', '2019-09-19 01:16:42', '2019-10-30 01:13:17', 'attached_images/products/134/Smart Mixer Grinder KLD (NGA-B145).jpg', NULL, NULL, NULL),
(136, 'ATASHII SOUND BAR', 'Model: NEL-BTSS-1805A,55 W,', NULL, NULL, NULL, 6999.00, NULL, 0, 19, '<small><b>Enhance your TV experience with rich sound using the </b></small><small><small><b>NEL-BTSS-1805A multifunctional Sound&nbsp; from ATASHII</b></small><b>&nbsp;allows you to connect wirelessly. The ATASHII sound bar has been designed to be the perfect partner to your large LED TV.</b></small><b>\r\n</b>\r\n<br>', '[{\"Remote control operation facility\":\"USB support (Pen drive\\/ USB supported device)\"},{\"FM Radio\":\"Blue-tooth connectivity from mobile or other device\"},{\"Built-in Sub-woofer\":\"Audio (AUX) input\"},{\"3.5mm Portable Audio Input Jack\":\"Coaxial & Optical Input\"},{\"55 watt PMPO\":\"Large LED display and preset equalizer\"},{\"Wall mount facility\":null}]', '2019-09-19 02:52:31', '2019-12-18 06:01:53', 'attached_images/products/136/Sound-Bar.jpg', NULL, NULL, NULL),
(137, 'TV Clump Small size (24\")', 'Accessories', NULL, NULL, NULL, 300.00, NULL, 0, 20, '<p>\r\n\r\n</p><ul><li>24\" Wall Mount</li><li>Designed for small flat panel televisions.</li><li>It features an easy and fast installation</li><li>Load Capacity: 25 kg.</li></ul><p></p>', NULL, '2019-09-19 02:54:42', '2019-11-27 06:11:32', 'attached_images/products/137/Capture.JPG', NULL, NULL, NULL),
(138, 'TV Clump (55\")', 'Accessories', NULL, NULL, NULL, 1000.00, NULL, 0, 20, '<p>\r\n\r\nDesigned for larger TVs - 43 49 50 55 58 65 70 75 80 inches in size, up to 220 pounds, and will fit nearly all television brands. Comes with a built-in level for accurate mounting the very first try.\r\n\r\n<br></p>', NULL, '2019-09-19 02:55:21', '2019-11-27 06:18:26', 'attached_images/products/138/Capture.JPG', NULL, NULL, NULL),
(139, 'TV Remote (24\"  to 32\")', 'Accessories', NULL, NULL, NULL, 500.00, NULL, 0, 20, NULL, NULL, '2019-09-19 02:56:32', '2019-11-27 06:20:57', 'attached_images/products/139/Capture.JPG', 'attached_images/products/139/TV-Remote-02.jpg', 'attached_images/products/139/TV-Remote-02.jpg', 'attached_images/products/139/TV-Remote-02.jpg'),
(140, 'TV Remote- 42\"', 'Accessories', NULL, NULL, NULL, 1000.00, NULL, 0, 20, NULL, NULL, '2019-09-19 02:58:45', '2019-10-13 23:15:58', 'attached_images/products/140/TV-Remote-03.jpg', 'attached_images/products/140/TV-Remote-03.jpg', 'attached_images/products/140/TV-Remote-03.jpg', 'attached_images/products/140/TV-Remote-03.jpg'),
(141, 'TV Remote- 55\"', 'Accessories', NULL, NULL, NULL, 1500.00, NULL, 0, 20, NULL, NULL, '2019-09-19 03:00:17', '2019-10-13 23:11:44', 'attached_images/products/141/TV-Remote-01.jpg', 'attached_images/products/141/TV-Remote-01.jpg', 'attached_images/products/141/TV-Remote-01.jpg', 'attached_images/products/141/TV-Remote-01.jpg'),
(142, 'Angle for AC Outdoor (1.0 to 1.50 Ton)', 'Accessories', NULL, NULL, NULL, 1500.00, NULL, 0, 20, NULL, NULL, '2019-09-19 03:10:04', '2019-09-19 03:10:04', NULL, NULL, NULL, NULL),
(143, 'Angle for AC Outdoor (2.50 ton)', 'Accessories', NULL, NULL, NULL, 2000.00, NULL, 0, 20, NULL, NULL, '2019-09-19 03:12:07', '2019-09-19 03:12:07', NULL, NULL, NULL, NULL),
(144, 'Angle for AC Outdoor (4.00 and 5.00 ton)', 'Accessories', NULL, NULL, NULL, 2500.00, NULL, 0, 20, NULL, NULL, '2019-09-19 03:12:37', '2019-09-19 03:12:37', NULL, NULL, NULL, NULL),
(145, 'AC Remote', 'Accessories', NULL, NULL, NULL, 2000.00, NULL, 0, 20, NULL, NULL, '2019-09-19 03:13:02', '2019-09-19 03:13:02', NULL, NULL, NULL, NULL),
(146, 'Test Product-1', 'Model:222,Screensize:14', '2.5', '2', '1.5', 50.00, NULL, 5, 2, 'Lorem Ipshum isset,Lorem Ipshum isset,Lorem Ipshum isset,', '[{\"TEst1\":\"12\"},{\"test-2\":\"34\"},{\"test-3\":\"3\"},{\"test-4\":\"4\"}]', '2020-01-02 02:38:32', '2020-01-02 02:38:32', NULL, NULL, NULL, NULL),
(147, 'Televation test product', 'spacification 1,spacification 2', NULL, '16', NULL, 50000.00, 50000.00, NULL, 1, NULL, NULL, '2020-02-01 23:30:51', '2020-02-01 23:30:51', 'attached_images/products/147/Refrigerators-1.jpg', NULL, NULL, NULL),
(148, 'tv 25 \"', 'spacification,spacification 2', NULL, '14', NULL, 1200.00, 1200.00, 0, 2, 'Lorem ipshum isset. Lorem ipshum isset.', '[{\"Brand\":\"good\"},{\"condition\":\"best\"}]', '2020-02-01 23:34:12', '2020-02-01 23:34:12', 'attached_images/products/148/3.jpg', 'attached_images/products/148/4.jpg', NULL, NULL),
(149, 'test Tev', 'spacification 1,spacification 2', NULL, '23', NULL, 1200.00, 1200.00, NULL, 5, 'Lorem ipshum isset. Lorem iphsum isset lorem ipshum isset. Lorem ipshum isset', '[{\"condition\":\"good\"},{\"Warrenty\":\"Yes\"}]', '2020-02-01 23:37:05', '2020-02-01 23:37:05', 'attached_images/products/149/3.jpg', NULL, NULL, NULL),
(150, 'test tv 12', 'spacification 1,spacification 2', NULL, '24', NULL, 1200.00, 1200.00, 0, 0, 'Lorem ipshum isset. Lorem ishum isset. Lorem ipshum isset.', '[{\"condition\":\"good\"},{\"Warrenty\":\"yes\"}]', '2020-02-01 23:39:06', '2020-02-01 23:44:31', 'attached_images/products/150/3.jpg', NULL, NULL, NULL),
(151, 'Refrezator-1', 'Spacificaation -One,Spacification-two', NULL, NULL, NULL, 30000.00, 30000.00, NULL, 1, NULL, NULL, '2020-02-17 21:49:03', '2020-02-17 21:49:03', 'attached_images/products/151/istockphoto-940975782-612x612.jpg', 'attached_images/products/151/rt34k5032s8.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`id`, `category_id`, `product_id`) VALUES
(270, 2, 55),
(272, 140, 55),
(273, 2, 56),
(275, 140, 56),
(276, 2, 57),
(278, 15, 57),
(279, 2, 58),
(280, 13, 58),
(281, 15, 58),
(282, 2, 59),
(283, 13, 59),
(284, 15, 59),
(285, 2, 60),
(286, 13, 60),
(287, 15, 60),
(288, 2, 61),
(289, 13, 61),
(290, 17, 61),
(291, 2, 62),
(292, 13, 62),
(293, 17, 62),
(294, 2, 63),
(295, 13, 63),
(296, 140, 63),
(297, 2, 64),
(298, 13, 64),
(299, 15, 64),
(319, 22, 71),
(320, 35, 71),
(322, 22, 72),
(323, 35, 72),
(328, 22, 74),
(329, 35, 74),
(337, 22, 77),
(338, 35, 77),
(340, 22, 78),
(341, 35, 78),
(343, 22, 79),
(344, 35, 79),
(349, 22, 82),
(350, 35, 82),
(352, 22, 83),
(353, 35, 83),
(355, 22, 84),
(356, 35, 84),
(358, 22, 85),
(359, 35, 85),
(364, 22, 87),
(365, 35, 87),
(367, 22, 88),
(368, 35, 88),
(373, 22, 90),
(374, 35, 90),
(376, 22, 91),
(377, 35, 91),
(382, 22, 93),
(383, 35, 93),
(385, 22, 94),
(386, 35, 94),
(388, 22, 95),
(389, 35, 95),
(391, 22, 96),
(392, 35, 96),
(394, 22, 97),
(395, 35, 97),
(397, 22, 98),
(398, 35, 98),
(400, 22, 99),
(401, 35, 99),
(403, 22, 100),
(404, 141, 100),
(406, 22, 101),
(407, 141, 101),
(409, 22, 102),
(410, 141, 102),
(415, 23, 104),
(416, 142, 104),
(418, 23, 105),
(419, 142, 105),
(421, 23, 106),
(422, 142, 106),
(427, 23, 108),
(430, 23, 109),
(433, 23, 110),
(439, 23, 112),
(440, 34, 112),
(442, 34, 108),
(443, 34, 109),
(444, 34, 110),
(449, 23, 114),
(450, 36, 114),
(451, 19, 115),
(452, 24, 115),
(453, 143, 115),
(454, 19, 116),
(455, 26, 116),
(456, 44, 116),
(457, 19, 117),
(458, 24, 117),
(459, 39, 117),
(460, 19, 118),
(461, 24, 118),
(462, 39, 118),
(466, 19, 120),
(469, 19, 121),
(472, 19, 122),
(475, 19, 123),
(476, 24, 123),
(477, 39, 123),
(478, 19, 124),
(481, 19, 125),
(484, 21, 126),
(485, 32, 126),
(486, 21, 127),
(487, 32, 127),
(488, 21, 128),
(489, 29, 128),
(490, 21, 129),
(491, 29, 129),
(492, 21, 130),
(493, 29, 130),
(494, 21, 131),
(496, 21, 132),
(497, 30, 132),
(500, 21, 134),
(501, 31, 134),
(505, 146, 137),
(506, 146, 138),
(507, 146, 139),
(508, 146, 140),
(509, 146, 141),
(510, 146, 142),
(511, 146, 143),
(512, 146, 144),
(513, 146, 145),
(515, 147, 137),
(516, 147, 138),
(517, 148, 139),
(518, 148, 140),
(519, 148, 141),
(520, 149, 142),
(521, 149, 143),
(522, 149, 144),
(523, 151, 145),
(524, 99, 56),
(525, 100, 56),
(526, 21, 136),
(527, 78, 58),
(528, 79, 58),
(529, 80, 58),
(533, 150, 136),
(534, 81, 118),
(536, 25, 125),
(537, 46, 125),
(538, 25, 124),
(539, 43, 124),
(540, 25, 122),
(541, 46, 122),
(542, 25, 121),
(543, 43, 121),
(544, 25, 120),
(545, 43, 120),
(557, 59, 104),
(559, 99, 104),
(560, 87, 136),
(561, 89, 136),
(562, 59, 136),
(563, 62, 136),
(564, 99, 136),
(565, 100, 136),
(566, 14, 55),
(567, 14, 56),
(568, 16, 56),
(569, 78, 56),
(570, 59, 56),
(571, 62, 56),
(572, 14, 57),
(573, 18, 57),
(574, 78, 57),
(575, 59, 57),
(576, 62, 57),
(577, 99, 57),
(578, 59, 58),
(579, 62, 58),
(580, 78, 59),
(581, 80, 59),
(582, 59, 59),
(583, 62, 59),
(584, 99, 59),
(585, 100, 59),
(586, 79, 60),
(587, 80, 60),
(588, 59, 60),
(589, 62, 60),
(590, 78, 61),
(591, 80, 61),
(592, 59, 61),
(593, 62, 61),
(594, 99, 61),
(595, 79, 62),
(596, 80, 62),
(597, 59, 62),
(598, 62, 62),
(599, 99, 62),
(600, 78, 63),
(601, 79, 63),
(602, 59, 63),
(603, 62, 63),
(604, 79, 64),
(605, 80, 64),
(606, 59, 64),
(607, 62, 64),
(612, 59, 79),
(613, 60, 79),
(619, 59, 83),
(620, 60, 83),
(621, 99, 83),
(622, 100, 83),
(624, 59, 93),
(625, 62, 93),
(626, 99, 93),
(627, 100, 93),
(630, 59, 91),
(631, 60, 91),
(632, 99, 91),
(633, 100, 91),
(636, 59, 85),
(637, 63, 85),
(638, 99, 85),
(645, 99, 71),
(646, 153, 104),
(647, 154, 104),
(648, 155, 104),
(649, 156, 71),
(650, 158, 71),
(651, 60, 72),
(652, 60, 77),
(653, 63, 77),
(654, 60, 74),
(655, 87, 126),
(656, 88, 126),
(657, 90, 126),
(658, 100, 126),
(659, 88, 128),
(660, 99, 128),
(661, 100, 130),
(662, 87, 129),
(663, 62, 129),
(664, 99, 129),
(665, 88, 132),
(666, 62, 132),
(667, 100, 132),
(668, 28, 131),
(669, 88, 131),
(670, 90, 131),
(671, 99, 131),
(672, 88, 134),
(673, 59, 134),
(674, 62, 134),
(675, 100, 134),
(676, 59, 137),
(677, 62, 137),
(678, 59, 138),
(679, 62, 138),
(680, 87, 127),
(681, 59, 127),
(682, 62, 127),
(683, 90, 127),
(684, 100, 127),
(685, 59, 126),
(686, 59, 105),
(687, 63, 105),
(688, 99, 105),
(689, 154, 105),
(690, 59, 106),
(691, 65, 106),
(692, 100, 106),
(693, 155, 108),
(694, 59, 108),
(695, 100, 108),
(696, 155, 109),
(697, 59, 109),
(698, 63, 109),
(699, 100, 109),
(700, 59, 110),
(701, 61, 110),
(702, 100, 110),
(703, 154, 112),
(704, 59, 112),
(705, 100, 112),
(706, 155, 114),
(707, 59, 114),
(708, 63, 114),
(709, 99, 114),
(710, 82, 115),
(711, 83, 115),
(712, 59, 115),
(713, 90, 115),
(714, 66, 115),
(715, 68, 115),
(716, 71, 115),
(717, 99, 115),
(718, 83, 116),
(719, 59, 116),
(720, 90, 116),
(721, 81, 117),
(722, 83, 117),
(723, 59, 117),
(724, 90, 117),
(725, 100, 117),
(726, 83, 118),
(727, 59, 118),
(728, 90, 118),
(729, 100, 118),
(730, 83, 120),
(731, 59, 120),
(732, 90, 120),
(733, 100, 120),
(734, 82, 121),
(735, 59, 121),
(736, 90, 121),
(737, 82, 122),
(738, 59, 122),
(739, 90, 122),
(740, 82, 123),
(741, 59, 123),
(742, 90, 123),
(743, 82, 124),
(744, 59, 124),
(745, 90, 124),
(746, 82, 125),
(747, 59, 125),
(748, 90, 125),
(749, 59, 100),
(750, 62, 100),
(751, 59, 101),
(752, 63, 101),
(753, 59, 102),
(754, 60, 102),
(755, 78, 55),
(756, 59, 55),
(757, 62, 55),
(758, 160, 104),
(759, 2, 146),
(760, 13, 146),
(761, 140, 146),
(762, 78, 146),
(763, 79, 146),
(764, 80, 146),
(765, 2, 147),
(766, 13, 147),
(767, 162, 147),
(768, 78, 147),
(769, 2, 148),
(770, 13, 148),
(771, 78, 148),
(772, 78, 149),
(773, 163, 150);

-- --------------------------------------------------------

--
-- Table structure for table `product_elements`
--

CREATE TABLE `product_elements` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_element_id` int(11) NOT NULL,
  `product_element_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_review` int(10) DEFAULT NULL,
  `product_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `customer_id`, `product_review`, `product_comment`, `customer_name`, `customer_email_address`, `created_at`, `updated_at`) VALUES
(1, '56', '1', 4, 'Good Quality', 'Aamra ltd', NULL, '2019-10-03 04:22:31', '2019-10-03 04:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=normal text, 2=long text, 3=image or file',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'brotuiar', 'attached_images/settings/1/rt34k5032s8.png', 3, '2020-02-18 05:54:30', '2020-02-18 00:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'test',
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'test@test.com',
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `customer_id`, `order_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `country`, `zip_code`, `town`, `created_at`, `updated_at`) VALUES
(128, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 21:55:40', '2019-10-20 21:55:40'),
(129, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 22:24:50', '2019-10-20 22:24:50'),
(130, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:04:35', '2019-10-20 23:04:35'),
(131, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:05:44', '2019-10-20 23:05:44'),
(132, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:15:22', '2019-10-20 23:15:22'),
(133, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:15:55', '2019-10-20 23:15:55'),
(134, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:18:07', '2019-10-20 23:18:07'),
(135, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:19:57', '2019-10-20 23:19:57'),
(136, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:25:01', '2019-10-20 23:25:01'),
(137, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:27:38', '2019-10-20 23:27:38'),
(138, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:35:43', '2019-10-20 23:35:43'),
(139, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:35:55', '2019-10-20 23:35:55'),
(140, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-20 23:36:22', '2019-10-20 23:36:22'),
(141, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:27:22', '2019-10-21 01:27:22'),
(142, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:28:21', '2019-10-21 01:28:21'),
(143, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:34:54', '2019-10-21 01:34:54'),
(144, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:40:54', '2019-10-21 01:40:54'),
(145, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:42:20', '2019-10-21 01:42:20'),
(146, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:43:21', '2019-10-21 01:43:21'),
(147, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:47:27', '2019-10-21 01:47:27'),
(148, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 01:49:38', '2019-10-21 01:49:38'),
(149, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 02:30:11', '2019-10-21 02:30:11'),
(150, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 03:08:47', '2019-10-21 03:08:47'),
(151, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 03:33:12', '2019-10-21 03:33:12'),
(152, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 03:37:01', '2019-10-21 03:37:01'),
(153, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-21 04:25:10', '2019-10-21 04:25:10'),
(154, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-22 05:30:57', '2019-10-22 05:30:57'),
(155, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-10-28 01:18:22', '2019-10-28 01:18:22'),
(156, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-11-16 21:41:36', '2019-11-16 21:41:36'),
(157, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-11-23 22:52:09', '2019-11-23 22:52:09'),
(158, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-11-25 21:48:15', '2019-11-25 21:48:15'),
(159, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-11-25 23:09:23', '2019-11-25 23:09:23'),
(160, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-11-25 23:10:45', '2019-11-25 23:10:45'),
(161, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-11-25 23:12:05', '2019-11-25 23:12:05'),
(162, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-09 01:27:23', '2019-12-09 01:27:23'),
(163, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-09 01:35:22', '2019-12-09 01:35:22'),
(164, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-09 01:38:02', '2019-12-09 01:38:02'),
(165, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-09 03:13:59', '2019-12-09 03:13:59'),
(166, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-09 04:41:57', '2019-12-09 04:41:57'),
(167, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-09 05:38:17', '2019-12-09 05:38:17'),
(168, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-11 03:57:13', '2019-12-11 03:57:13'),
(169, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-18 06:01:53', '2019-12-18 06:01:53'),
(170, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2019-12-26 00:47:08', '2019-12-26 00:47:08'),
(171, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-01 23:44:31', '2020-02-01 23:44:31'),
(172, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-18 22:20:33', '2020-02-18 22:20:33'),
(173, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-18 22:30:53', '2020-02-18 22:30:53'),
(174, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-18 22:41:10', '2020-02-18 22:41:10'),
(175, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-18 22:42:00', '2020-02-18 22:42:00'),
(176, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-18 22:42:54', '2020-02-18 22:42:54'),
(177, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-18 22:53:46', '2020-02-18 22:53:46'),
(178, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-18 22:54:26', '2020-02-18 22:54:26'),
(179, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-19 00:10:39', '2020-02-19 00:10:39'),
(180, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-19 00:12:09', '2020-02-19 00:12:09'),
(181, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-19 01:10:00', '2020-02-19 01:10:00'),
(182, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-19 01:10:44', '2020-02-19 01:10:44'),
(183, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-19 01:11:45', '2020-02-19 01:11:45'),
(184, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-19 01:12:28', '2020-02-19 01:12:28'),
(185, 0, '0', 'test', NULL, 'test@test.com', NULL, NULL, NULL, NULL, NULL, '2020-02-19 01:19:02', '2020-02-19 01:19:02'),
(186, 69, 'NN1582191954', 'Md ismail', 'Hossen', 'admin@admin.com', '01788111408', 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 03:45:54', '2020-02-20 03:45:54'),
(187, 69, 'NN1582193484', 'Md ismail', 'Hossen', 'admin@admin.com', '01788111408', 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 04:11:24', '2020-02-20 04:11:24'),
(188, 69, 'NN1582193683', 'Md ismail', 'Hossen', 'admin@admin.com', '01788111408', 'Dhaka, bangladesh', 'Bangladesh', '123', 'dhaka', '2020-02-20 04:14:43', '2020-02-20 04:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` tinyint(4) NOT NULL DEFAULT 0,
  `order` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `take_aways`
--

CREATE TABLE `take_aways` (
  `id` int(10) UNSIGNED NOT NULL,
  `pickup_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'admin', 'admin@example.com', NULL, '$2b$10$7WMs3eW8Mv5dwAabTKvu8OaEa5VllfFC0QJ78vNRet6nHrNCnIska', 'H2O0vaC28WSOCsZQV5zjZW6nYMeQnL8rTGj1HAJzb5WEZYxDtB3oE7dZqYgQ', '2019-01-15 20:19:33', '2019-01-15 20:19:33'),
(2, 'Test Nitol', 'test@example.com', NULL, '$2y$10$fFMo3/rmTmiDvJJ.xK5FquLA9YmjWP59r.uCITw3P/oLN1zLrkoMO', NULL, '2019-07-16 22:28:50', '2019-07-16 22:28:50'),
(3, 'Admin SSL', 'admin@ssl.com', NULL, '$2y$10$euBFFD55VLFdNgAkrteavOIw01IM.95ULUVgoYzFTJ2b0QOw9SJ32', 'TiQOb3pYkXWekSuTrRxtx2oK5hN8Ax9PonbjyXDH4lCJShQA9qr66X4tuZIS', '2019-01-15 20:19:33', '2019-10-16 04:17:43'),
(4, 'Forhad Khan', 'farhad.ntrack@gmail.com', NULL, '$2y$10$Jgo1NLjt7TrUxhoO5/RqR.ec4P1xrkyk5Th2lNnLlyrJIzfqLB7w6', 'vMcj0tngNawBOuW3iF5eU5KxKiNzbe84QCnTt3tcpukty7DV5ajpkRxPsKVw', '2019-10-17 01:10:21', '2019-10-17 01:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_stores`
--

CREATE TABLE `user_stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `store_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_sales`
--
ALTER TABLE `corporate_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_address` (`email_address`(191));

--
-- Indexes for table `customer_logins`
--
ALTER TABLE `customer_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveries_shipping_detail_id_foreign` (`shipping_detail_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `order_addons`
--
ALTER TABLE `order_addons`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categories_category_id_foreign` (`category_id`),
  ADD KEY `products_categories_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_elements`
--
ALTER TABLE `product_elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `take_aways`
--
ALTER TABLE `take_aways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_stores`
--
ALTER TABLE `user_stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_stores_user_id_foreign` (`user_id`),
  ADD KEY `user_stores_store_id_foreign` (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `corporate_sales`
--
ALTER TABLE `corporate_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `customer_logins`
--
ALTER TABLE `customer_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_addons`
--
ALTER TABLE `order_addons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=774;

--
-- AUTO_INCREMENT for table `product_elements`
--
ALTER TABLE `product_elements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `take_aways`
--
ALTER TABLE `take_aways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_stores`
--
ALTER TABLE `user_stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_shipping_detail_id_foreign` FOREIGN KEY (`shipping_detail_id`) REFERENCES `shipping_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `products_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_stores`
--
ALTER TABLE `user_stores`
  ADD CONSTRAINT `user_stores_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
