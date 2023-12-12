-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 12:59 PM
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
-- Database: `alcremie`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `igd_name` varchar(20) NOT NULL,
  `igd_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`igd_name`, `igd_type`) VALUES
('Bacon', 'meatandprotein'),
('Bagoong', 'products'),
('Basil', 'herbsandspices'),
('Bay Leaf', 'herbsandspices'),
('Beef', 'meatandprotein'),
('Bell Pepper', 'vegetables'),
('Bitter Gourd', 'vegetables'),
('Breadcrumbs', 'products'),
('Breading Mix', 'products'),
('Butter', 'pantryessentials'),
('Cabbage', 'vegetables'),
('Calamansi', 'pantryessentials'),
('Carrot', 'vegetables'),
('Chayote', 'vegetables'),
('Cheese', 'dairy'),
('Chicken', 'meatandprotein'),
('Chili Flakes', 'herbsandspices'),
('Chili Pepper', 'vegetables'),
('Coconut Milk', 'products'),
('Condensed Milk', 'dairy'),
('Cucumber', 'vegetables'),
('Curry Powder', 'herbsandspices'),
('Eggplant', 'vegetables'),
('Eggs', 'pantryessentials'),
('Evaporated Milk', 'dairy'),
('Fish', 'meatandprotein'),
('Flour', 'pantryessentials'),
('Garlic', 'pantryessentials'),
('Garlic Powder', 'herbsandspices'),
('Ginger', 'pantryessentials'),
('Green Peas', 'vegetables'),
('Ground Beef', 'meatandprotein'),
('Ground Pork', 'meatandprotein'),
('Ham', 'meatandprotein'),
('Heavy Cream', 'dairy'),
('Hotdog', 'meatandprotein'),
('Lettuce', 'vegetables'),
('Liver Spread', 'products'),
('Malunggay', 'vegetables'),
('Milk', 'dairy'),
('Mirin', 'pantryessentials'),
('Mung Beans', 'vegetables'),
('Mushrooms', 'vegetables'),
('Noodles', 'pantryessentials'),
('Oil', 'pantryessentials'),
('Onion', 'pantryessentials'),
('Onion Powder', 'herbsandspices'),
('Oregano', 'herbsandspices'),
('Papaya', 'vegetables'),
('Paprika', 'herbsandspices'),
('Parsley', 'herbsandspices'),
('Pasta', 'pantryessentials'),
('Peanut Butter', 'products'),
('Pepper', 'pantryessentials'),
('Peppercorn', 'herbsandspices'),
('Pork', 'meatandprotein'),
('Pork Belly', 'meatandprotein'),
('Potato', 'vegetables'),
('Pumpkin', 'vegetables'),
('Rice', 'pantryessentials'),
('Salt', 'pantryessentials'),
('Sausage', 'meatandprotein'),
('Sesame Oil', 'products'),
('Sinigang Mix', 'products'),
('Soy Sauce', 'pantryessentials'),
('Spam', 'meatandprotein'),
('Spinach', 'vegetables'),
('Steak', 'meatandprotein'),
('String Beans', 'vegetables'),
('Sugar', 'pantryessentials'),
('Tomato', 'vegetables'),
('Tomato Sauce', 'products'),
('Turmeric', 'herbsandspices'),
('Vinegar', 'pantryessentials');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `rcp_name` varchar(50) NOT NULL,
  `rcp_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`rcp_name`, `rcp_type`) VALUES
('Adobo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `selectedingredients`
--

CREATE TABLE `selectedingredients` (
  `ingredients` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`igd_name`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`rcp_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
