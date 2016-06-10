-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2016 at 05:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodtable`
--

CREATE TABLE `foodtable` (
  `dish_id` int(3) NOT NULL,
  `category_internal` varchar(15) DEFAULT NULL,
  `restaurant` varchar(21) DEFAULT NULL,
  `dish_name` varchar(33) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `rating` varchar(17) DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `ingredients` varchar(36) DEFAULT NULL,
  `photo_link` varchar(82) DEFAULT NULL,
  `comments` varchar(77) DEFAULT NULL,
  `is_validated` tinyint(1) DEFAULT NULL,
  `instagram_handle` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodtable`
--

INSERT INTO `foodtable` (`dish_id`, `category_internal`, `restaurant`, `dish_name`, `location`, `type`, `rating`, `price`, `ingredients`, `photo_link`, `comments`, `is_validated`, `instagram_handle`) VALUES
(1, 'burger', 'Burger Cafe', 'Chilly Paneer Burger', 'CP', 'veg', '3', 100, NULL, NULL, NULL, 1, 'foodcompiler'),
(2, 'burger', 'Burger Cafe', 'Egg Burger', 'CP', 'egg', '3', 75, NULL, NULL, NULL, 1, 'foodcompiler'),
(3, 'burger', 'Burger Hub ', 'Paneer Burger', 'CP', 'veg', '1', 85, NULL, NULL, NULL, 1, 'foodcompiler'),
(5, 'burger', 'Burger Hub ', 'Chicken Tikka Burger', 'CP', 'chicken', '5', 145, NULL, NULL, NULL, 1, 'foodcompiler'),
(6, 'burger', 'Burger Singh', 'United States Burger', 'CP', 'veg', '1', 110, NULL, NULL, NULL, 1, 'foodcompiler'),
(7, 'burger', 'Burger King', 'Chicken Whooper', 'CP', 'chicken', '3', 90, NULL, NULL, NULL, 1, 'foodcompiler'),
(8, 'burger', 'Burger King', 'Chicken Cheese Egg', 'CP', 'chicken', '1', 100, NULL, NULL, NULL, 1, 'foodcompiler'),
(12, 'burger', 'Burger Hut', 'Bacon burger', 'CP', 'bacon', '3', 145, NULL, NULL, NULL, 1, 'foodcompiler'),
(13, 'burger', 'Burger Hut', 'Soya Burger', 'CP', 'veg', '5', 85, NULL, NULL, NULL, 1, 'foodcompiler'),
(56, 'paratha', 'Paratha point', 'Chicken Paratha', 'lajpat nagar 4', 'nonveg', '5', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(57, 'paratha', 'Paratha point', 'Chicken Egg Paratha', 'lajpat nagar 4', 'nonveg', '3', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(58, 'paratha', 'Paratha point', 'Egg Paratha', 'lajpat nagar 4', 'nonveg', '1', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(59, 'paratha', 'Paratha point', 'Paneer Paratha', 'lajpat nagar 4', 'veg', '1', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(61, 'paratha', 'Paratha point', 'Mix veg paratha', 'lajpat nagar 4', 'veg', '3', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(62, 'paratha', 'Paratha point', 'Gobhi paratha', 'lajpat nagar 4', 'veg', '5', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(63, 'paratha', 'Paratha point', 'Aloo paratha', 'lajpat nagar 4', 'veg', '3', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(64, 'paratha', 'Paratha point', 'Gobhi aloo paratha', 'lajpat nagar 4', 'veg', '5', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(65, 'paratha', 'Paratha point', 'Bhuna mutton paratha', 'lajpat nagar 4', 'nonveg', '3', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(66, 'paratha', 'Paratha point', 'butter chicken paratha', 'lajpat nagar 4', 'nonveg', '5', 120, NULL, NULL, NULL, 1, 'foodcompiler'),
(67, 'beverage', 'Cafe Coffee Day', 'Hot Chocolate', 'Punjabi Bagh', 'hot', '1', 110, 'chocoate', NULL, NULL, 1, 'foodcompiler'),
(68, 'beverage', 'Cafe Coffee Day', 'Cold Eskimo', 'Punjabi Bagh', 'cold', '3', 115, NULL, NULL, NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodtable`
--
ALTER TABLE `foodtable`
  ADD PRIMARY KEY (`dish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodtable`
--
ALTER TABLE `foodtable`
  MODIFY `dish_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
