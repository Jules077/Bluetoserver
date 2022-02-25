-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 12:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluetoserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcements_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcements_id`, `title`, `message`, `banner_image`, `created_at`, `created_user_id`) VALUES
(14, 'Thomas Test', 'Dit is even om te testen wat er mogelijk is hier.\n\n[i] dit is mooier dan de rest [/i]\n\n[b] bold []\n\n[b] [i] trestddsfgfdgf [i] []', NULL, '2022-02-24 11:28:59', 1),
(15, 'teaeadi fpao', 'Dit is even om te testen wat er mogelijk is hier.\n\n[i] dit is mooier dan de rest [/i]\n\n[b] bold [/b]\n\n[b] [i] trestddsfgfdgf [/i] [/b]', NULL, '2022-02-24 11:29:55', 1),
(16, 'ythjhj', 'jhjhj', NULL, '2022-02-24 11:33:12', 1),
(17, 'iyyi', 'ujyiy', NULL, '2022-02-24 11:33:36', 1),
(18, 'sfsdfsdf', 'dfdsfsdfsd', NULL, '2022-02-24 12:33:25', 1),
(19, 'sfsdfsdf', 'dfdsfsdfsd', NULL, '2022-02-24 12:33:35', 1),
(20, 'test2', '22222', NULL, '2022-02-24 12:36:05', 1),
(21, 'gffdf', 'dfdf', NULL, '2022-02-24 12:36:56', 1),
(22, 'fff', 'fff', NULL, '2022-02-24 12:37:15', 1),
(23, 'ff', 'fff', NULL, '2022-02-24 12:37:19', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcements_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcements_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
