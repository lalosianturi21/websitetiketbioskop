-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 04:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `image_upload_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `harga` int(255) NOT NULL,
  `batasusia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`, `harga`, `batasusia`) VALUES
(2, 'Die hard', 'Action', '917466698.jpg', 60000, '20 tahun'),
(7, 'Dracula', 'Action', '1408339151.jpg', 35000, '18 tahun'),
(8, 'Inception', 'Action', '1070261214.jpg', 50000, '16 tahun'),
(9, 'Iron Man', 'Action', '1872036017.jpg', 60000, '17 tahun'),
(10, 'John Wick 2', 'Action', '1688456779.jpg', 40000, '17 tahun'),
(11, 'Terminator 2', 'Action', '1536405117.jpg', 40000, '17 tahun'),
(12, 'The Gray', 'Action', '1016432719.jpg', 40000, '16 tahun'),
(13, 'The Rai', 'Action', '78424183.jpg', 50000, '17 tahun'),
(14, 'Akame ga kill', 'Anime', '179211348.png', 50000, '15 tahun'),
(15, 'Classroom of the elite', 'Anime', '122513086.jpg', 40000, '17 tahun'),
(16, 'Haikyu', 'Anime', '83557094.jpg', 50000, '16 tahun'),
(17, 'Kimi no nawa', 'Anime', '380709851.jpg', 30000, '18 tahun'),
(18, 'One piece', 'Anime', '1106184541.jpg', 40000, '17 tahun'),
(19, 'Secret World', 'Anime', '36636856.jpg', 35000, '16 tahun'),
(20, 'Tokyo Ghoul', 'Anime', '1472169633.jpg', 50000, '18 tahun'),
(21, 'Aladdin', 'Cartoons', '1822611921.jpg', 40000, '12 tahun'),
(22, 'The lion King', 'Comedy', '1717132818.jpg', 10000, '16 tahun '),
(32, 'Smile', 'Action', '1968874872.jfif', 40000, '16'),
(33, 'Gatot kaca', 'Action', '406003920.jfif', 45000, '17 tahun'),
(34, 'Laskar pelangi', 'Action', '1572374230.jfif', 40000, '17 tahun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
