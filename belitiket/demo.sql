-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 04:17 AM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `row` int(2) NOT NULL,
  `seat` int(100) NOT NULL,
  `section` char(1) NOT NULL,
  `namapembeli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `date`, `time`, `row`, `seat`, `section`, `namapembeli`) VALUES
(21, 'sdsdsd', '2022-11-04', '21:57:00', 0, 13, 'A', 'tio fulalo simatupang'),
(22, 'sdsdsd', '2022-11-04', '09:02:00', 2, 13, 'A', 'Tio'),
(23, 'Transformer', '2022-11-07', '10:24:00', 2, 13, 'A', 'Melky eka putra damanik'),
(24, 'Transformer', '2022-11-07', '10:24:00', 2, 13, 'A', 'Melky eka putra damanik'),
(25, 'Hello world', '2022-11-17', '17:17:00', 20, 67, 'B', 'tio fulalo simatupang'),
(26, 'Black panther', '2022-11-12', '02:18:00', 1, 2, 'B', 'Gauri ananda sanjaya'),
(27, 'murayamasan', '2022-11-17', '05:28:00', 2, 13, 'B', 'Melky eka putra damanik'),
(28, 'Avengers', '2022-11-10', '16:38:00', 2, 18, 'B', 'Gauri ananda sanjaya'),
(29, 'demam', '2022-11-10', '02:44:00', 2, 15, 'B', 'Gauri ananda sanjaya'),
(30, 'sdsdsd', '2022-11-20', '01:51:00', 2, 18, 'A', 'tio fulalo simatupang'),
(31, 'obat diapet', '2022-11-10', '04:01:00', 2, 10, 'B', 'Gauri ananda sanjaya'),
(33, 'sdsdsd', '2022-11-09', '12:33:00', 2, 0, 'A', 'Melky eka putra damanik'),
(34, 'sdsdsd', '2022-11-09', '12:33:00', 2, 0, 'A', 'Melky eka putra damanik'),
(35, 'sdsdsd', '2022-11-20', '01:51:00', 2, 18, 'A', 'tio fulalo simatupang'),
(36, 'sdsdsd', '2022-11-14', '15:12:00', 1, 11, 'A', 'Melky eka putra damanik'),
(37, 'Transformer', '2022-11-15', '17:14:00', 2, 10, 'A', 'Tio'),
(39, 'sdsdsd', '2022-11-06', '19:29:00', 2, 15, 'A', 'Melky eka putra damanik'),
(40, 'Transformer', '2022-11-09', '21:39:00', 12, 1, 'A', 'Melky eka putra damanik'),
(41, 'sdsdsd', '2022-11-10', '08:28:00', 2, 1, 'A', 'Melky eka putra damanik'),
(42, 'sdsdsd', '2022-11-16', '08:43:00', 2, 1, 'A', 'Melky eka putra damanik'),
(43, 'Avengers', '2022-12-16', '01:24:00', 12, 11, 'A', 'Melky eka putra damanik'),
(44, 'power ranger', '2022-12-07', '02:48:00', 2, 4, 'A', 'Melky eka putra damanik'),
(45, 'power ranger', '2022-12-07', '02:48:00', 2, 4, 'A', 'Wahyu ramadhan'),
(46, 'sdsdsd', '2022-12-08', '12:23:00', 4, 15, 'A', 'Melky eka putra damanik'),
(47, 'Avatar', '2022-12-20', '20:08:00', 2, 1, 'A', 'Harry binur pratama'),
(48, 'Avengers', '2023-01-16', '10:14:00', 2, 11, 'A', 'Ardiansyah putra'),
(49, 'Avengers', '2023-01-16', '10:14:00', 2, 11, 'A', 'Ardiansyah putra'),
(50, 'Transformer', '2023-01-23', '10:19:00', 2, 5, 'A', 'lawak dek'),
(51, 'Transformer', '2023-01-23', '10:19:00', 2, 5, 'A', 'lawak dek'),
(52, 'Transformer', '2023-01-05', '22:22:00', 2, 5, 'B', 'Melky eka putra damanik'),
(53, 'black panther', '2023-01-12', '19:00:00', 2, 4, 'A', 'Hansen purba'),
(54, 'Haikyu', '2023-01-10', '01:03:00', 2, 5, 'A', 'Sir dany');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
