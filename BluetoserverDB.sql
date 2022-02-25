-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 12:05 PM
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
(11, 'ddddddd', '[img]https://media.discordapp.net/attachments/489701774161346560/945991089494589460/IMG_20220223_113014.jpg?width=188&height=418[/img]', NULL, '2022-02-23 11:01:00', 1),
(12, 'iets', '[img]https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpicfiles.alphacoders.com%2F288%2Fthumb-1920-288440.jpg&f=1&nofb=1[/img]\n[b]test[/b]\n[i]italicized text[/i]\n[url]https://en.wikipedia.org[/url]\n[url=https://en.wikipedia.org]English Wikipedia', NULL, '2022-02-24 08:44:39', 1),
(13, 'yeet', 'test', NULL, '2022-02-24 11:04:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `email`, `created_at`, `password`, `admin`) VALUES
(1, 'Bluetodark', 'jzwarts70@gmail.com', '2022-02-01 09:30:14', 'Welkom1234', 1),
(2, 'AdminAccount1', 'nepmail@nepmail.com', '2022-02-24 11:01:47', 'Admin1', 1),
(3, 'AdminAccount2', 'nepmail@nepmail.com', '2022-02-24 11:01:47', 'Admin2', 1),
(6, 'NonAdmin1', 'nepemail@mail.com', '2022-02-24 11:02:58', 'Non1', 0),
(7, 'NonAdmin2', 'nepemail@mail.com', '2022-02-24 11:02:58', 'Non2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `votes_id` int(11) NOT NULL,
  `votes_type` varchar(255) DEFAULT NULL,
  `votes_count` int(11) DEFAULT NULL,
  `votes_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `voted_user_id` int(11) DEFAULT NULL,
  `votes_announcements_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcements_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`votes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcements_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `votes_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
