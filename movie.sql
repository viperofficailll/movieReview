-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 03:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movieinfo`
--

CREATE TABLE `movieinfo` (
  `id` int(10) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `rating` int(2) NOT NULL,
  `num_reviews` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieinfo`
--

INSERT INTO `movieinfo` (`id`, `image`, `description`, `rating`, `num_reviews`) VALUES
(1, 'anamnagar_bajeko_sekuwa.jpeg\r\n', 'hahah', 4, 2),
(2, 'kungfupanda.jpg', 'khatra hai ta  ', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(22) NOT NULL,
  `name` varchar(225) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `cast` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `genre`, `cast`, `image`, `rating`) VALUES
(1, 'dhoom', 'action', 'anmolkc', 'anamnagar_bajeko_sekuwa.jpeg', 5),
(2, 'kungfupanda', 'action', 'panda', 'kungfupanda.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `rating`, `review`) VALUES
('1', '4', 'fdf'),
('2', '5', 'fdfd'),
('2', '1', 'test gareko hai'),
('2', '1', 'test'),
('2', '5', 'la vayo kya'),
('2', '5', 'masu ko jhool'),
('2', '1', '1 '),
('2', '1', 'masu ko jhool'),
('2', '1', 'masu ko jhool'),
('2', '5', 'op');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`email`, `password`) VALUES
('c', 'c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
