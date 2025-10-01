-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 08:16 AM
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
-- Database: `kashmir_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` varchar(11) NOT NULL,
  `c_dot` date NOT NULL,
  `c_nop` int(11) NOT NULL,
  `c_add` varchar(255) NOT NULL,
  `c_requirements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`id`, `p_name`, `price`, `location`, `c_name`, `c_email`, `c_phone`, `c_dot`, `c_nop`, `c_add`, `c_requirements`) VALUES
(13, 'trip to gurez valley', 10000, 'gurez valley', 'saloni', 'saloni@gmail.com', '7689564738', '2025-04-09', 4, 'gsp', ''),
(14, 'srinagar elite voyage', 20000, 'srinagar', 'pawan', 'pawan@gmail.com', '8147483647', '2025-04-08', 5, 'amritsar', ''),
(15, 'kashmir winter wonderland', 15000, 'patnitop', 'anchal', 'anchal32@gmail.com', '9364756748', '2025-04-25', 7, 'delhi', ''),
(16, 'nature and culture retreat', 10000, 'sonmarg', 'raj', 'raj447@gmail.com', '9847483798', '2025-04-22', 9, 'mumbai', ''),
(18, 'mystic mountain getaway', 15000, 'gulmarg', 'rohan', 'its_rohan@gmail.com', '7890455749', '2025-04-28', 7, 'kerala', '');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work_exp` varchar(255) NOT NULL,
  `charges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `img`, `name`, `location`, `phone`, `email`, `work_exp`, `charges`) VALUES
(10, 'guide4.jpg', 'vishal', 'pahalgam', '8975356764', 'vishal12@email.com', '7', 1500),
(13, 'guide2.jpg', 'vizay malya', 'patnitop', '8764903575', 'vizay_420@email.com', '6', 800),
(15, 'guide6.jpg', 'samaira mehta', 'verinag', '8975356764', 'samaira@email.com', '5', 1200),
(16, 'guide5.jpg', 'aditya sohi', 'patnitop', '7890466795', 'aditya555@gmail.com', '6', 1000),
(17, 'guide3.jpg', 'krunal raina', 'gurez valley', '7886958653', 'krunalraina@email.com', '20', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `night` int(11) NOT NULL,
  `loc_from` varchar(255) NOT NULL,
  `loc_to` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `img`, `name`, `day`, `night`, `loc_from`, `loc_to`, `price`) VALUES
(13, 'gurez.jpg', 'trip to gurez valley', 3, 2, 'jammu', 'gurez valley', 10000),
(22, 'Indian Traveller.jfif', 'srinagar elite voyage', 6, 5, 'haryana', 'srinagar', 20000),
(23, 'kshmir3.jpg', 'kashmir winter wonderland', 5, 4, 'delhi', 'patnitop', 15000),
(24, 'sonmarg.jpg', 'nature and culture retreat', 3, 2, 'mumbai', 'sonmarg', 10000),
(25, 'landscape2 (4).jpg', 'mystic mountain getaway', 4, 3, 'delhi', 'gulmarg', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'arsh', 'test@abcc.com', 'gvgvg'),
(2, 'ak', 'test@cdef.com', '235456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
