-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2022 at 05:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keramika`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `style` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `pic_one` varchar(500) NOT NULL,
  `pic_two` varchar(500) NOT NULL,
  `pic_three` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `profile_picture` varchar(450) NOT NULL,
  `rank_level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `phone_number`, `address`, `city`, `country`, `gender`, `profile_picture`, `rank_level`) VALUES
(1, 'Root', 'Admin', 'admin@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '0000000000', 'Sin nombre #0000', 'Mexico City', 'Mexico', 'Other', '../img/default.png', '3'),
(2, 'Joan', 'Parra', 'jrparratena@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '6366936768', 'Av Alvaro Obregon 3205', 'Nuevo Casas Grandes', 'Mexico', 'Masculine', 'img/default.png', '3'),
(3, 'Luis Antonio', 'Mendoza Varela', 'luisitolink@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '6361244556', 'Av Alvaro Obregon XXXX', 'Nuevo Casas Grandes', 'Mexico', 'Masculine', 'img/default.png', '3'),
(4, 'Joan', 'Parra', 'jrparratena@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '6366936768', 'Av Alvaro Obregon 3205', 'Nuevo Casas Grandes', 'Mexico', 'Masculine', 'img/default.png', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
