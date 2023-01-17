-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 04:21 AM
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
-- Database: `niagahoster_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin User', 'admin', '2138cb5b0302e84382dd9b3677576b24'),
(2, 'lalo sianturi ', 'lalosianturi21', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Niagahoster Tutorial', 'nhtutorial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'tiofulalo21', 'murayama@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'tiofulalo21', 'fulalotio@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'lalo', 'masterfulalo@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'tio fulalo simatupang', 'helloworld@gmail.com', '91fb86fd3f0f06ef3f08aaef5d325dfc'),
(6, 'helloworld', 'hahaha@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'tio fulalo simatupang', 'nadya@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'helloworld', 'akusayang@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'k_tarro', 'thelordvoldemort2003@gmail.com', '80fc2a8aa26caff7124fe423b42c7aae'),
(10, 'Tio fulalo simatupang', 'tio@gmail.com', '91fb86fd3f0f06ef3f08aaef5d325dfc'),
(11, 'Tio fulalo simatupang', 'gg@gmail.com', '91fb86fd3f0f06ef3f08aaef5d325dfc'),
(12, 'Kocak', 'kocak@gmail.con', '202cb962ac59075b964b07152d234b70'),
(13, 'Gg', 'aowwkwkk@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'k_tarro', 'ktaro@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'hadeh', 'hadeh@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(16, 'yoadh', 'yodah@gmail.com', '91fb86fd3f0f06ef3f08aaef5d325dfc'),
(17, 'hadeh', 'hadeh12@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 'hadeh', 'hadeh123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(19, 'tio', 'tio123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'tio', 'tio1233@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'lalosianturi21', 'lalo123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(22, 'lalo sianturi', 'tiofulalo21@gmail.com', '202cb962ac59075b964b07152d234b70'),
(23, 'melky eka putra damanik', 'melky@gmail.com', '202cb962ac59075b964b07152d234b70'),
(24, 'alpha', 'alpha@gmail', '202cb962ac59075b964b07152d234b70'),
(25, 'wahyu', 'wahyu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(26, 'tio fulalo simatupang', 'harry@gmail.com', '202cb962ac59075b964b07152d234b70'),
(27, 'melky eka ', 'melky123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(28, 'tio fulalo simatupang', 'tiofulalo@gmail.com', '202cb962ac59075b964b07152d234b70'),
(29, 'Rangga aditya', 'rangg@gmail.com', '202cb962ac59075b964b07152d234b70');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
