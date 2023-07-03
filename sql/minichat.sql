-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 03, 2023 at 02:21 PM
-- Server version: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minichat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contents` text NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `date`, `contents`, `iduser`) VALUES
(1, '2023-06-30 10:03:02', 'bonjour, je m\'appelle mathieu', 1),
(2, '2023-06-30 10:08:00', 'Au revoir les gars', 1),
(3, '2023-06-30 13:59:56', 'Salut !', 1),
(4, '2023-06-30 14:12:52', 'ça va ?', 1),
(5, '2023-06-30 14:12:56', 'j\'ai faim', 1),
(6, '2023-06-30 14:16:30', 'J\'ai chaud', 1),
(7, '2023-06-30 14:19:13', 'yyeeahhh', 1),
(8, '2023-06-30 14:20:29', 'salut liam', 1),
(9, '2023-06-30 14:30:52', 'j\'ai le compte pro', 1),
(10, '2023-06-30 15:22:32', 'voici l\'heure !', 1),
(11, '2023-06-30 15:33:32', 'ouf', 1),
(12, '2023-06-30 15:33:59', 'hello', 1),
(14, '2023-06-30 16:18:05', 'yo', 5),
(15, '2023-06-30 16:20:36', 'yo', 1),
(18, '2023-06-30 16:37:40', 'yyoo', 14),
(19, '2023-06-30 19:26:55', 'bonjour, je m\'appelle mathieu', 1),
(22, '2023-07-01 14:56:20', 'j\'ai faim', 1),
(23, '2023-07-01 14:57:22', 'bosse fainéant !', 2),
(24, '2023-07-01 16:04:48', 'yo', 2),
(25, '2023-07-02 22:03:57', 'salut tout le monde', 1),
(26, '2023-07-02 23:25:53', 'hello', 1),
(27, '2023-07-02 23:25:56', 'ça marche !', 1),
(28, '2023-07-02 23:28:39', 'dede', 1),
(29, '2023-07-02 23:28:48', 'rf', 1),
(30, '2023-07-02 23:29:14', 'fr', 1),
(31, '2023-07-02 23:34:24', 'etr', 1),
(32, '2023-07-02 23:34:24', 'ça marche ?', 1),
(33, '2023-07-03 08:52:22', 'sdddd', 1),
(34, '2023-07-03 08:52:22', 'sddddezz', 1),
(35, '2023-07-03 08:57:02', 'sddddezz', 1),
(36, '2023-07-03 08:58:09', 'regfe', 1),
(37, '2023-07-03 09:30:13', 'ezfzf', 1),
(38, '2023-07-03 09:30:13', 'yo', 1),
(39, '2023-07-03 09:31:24', 'cool', 1),
(40, '2023-07-03 09:32:35', 'cool', 1),
(41, '2023-07-03 09:32:35', 'ouaaiiss', 1),
(42, '2023-07-03 09:33:26', 'ouaaiiss', 1),
(43, '2023-07-03 09:33:26', 'hola', 1),
(44, '2023-07-03 09:34:16', 'hola', 1),
(45, '2023-07-03 09:57:40', 'salut', 1),
(46, '2023-07-03 10:00:23', 'de', 1),
(47, '2023-07-03 10:15:00', 'yo', 1),
(48, '2023-07-03 10:28:34', 'salut', 18),
(53, '2023-07-03 11:15:56', 'yo', 9),
(54, '2023-07-03 11:15:56', 'salut ', 24),
(55, '2023-07-03 11:15:56', 'salut ', 24),
(56, '2023-07-03 11:37:01', 'salut', 1),
(63, '2023-07-03 12:38:49', 'yo', 1),
(64, '2023-07-03 12:39:01', 'mannnnggeerr', 1),
(65, '2023-07-03 12:44:36', 'hop', 1),
(66, '2023-07-03 12:45:07', 'hola', 1),
(67, '2023-07-03 12:55:59', 'roh', 1),
(68, '2023-07-03 12:55:59', 'j\'ai faim', 1),
(69, '2023-07-03 13:00:24', 'ouii', 1),
(70, '2023-07-03 13:01:57', 'op', 1),
(71, '2023-07-03 13:03:38', 'fe', 1),
(72, '2023-07-03 13:06:24', 'ouuiii', 1),
(73, '2023-07-03 13:06:24', 'huy', 1),
(74, '2023-07-03 13:06:24', 'gneh', 1),
(75, '2023-07-03 13:06:55', 'ouf', 1),
(76, '2023-07-03 13:09:07', 'ouuue', 1),
(77, '2023-07-03 13:09:07', 'arf', 1),
(78, '2023-07-03 13:09:07', 'ah oui', 1),
(79, '2023-07-03 13:24:31', 'huj', 1),
(80, '2023-07-03 13:24:39', 'jjuuu', 1),
(81, '2023-07-03 13:27:23', 'trop facile', 1),
(82, '2023-07-03 16:08:30', 'oouuii', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `ip` tinytext NOT NULL,
  `photo` tinytext NOT NULL,
  `couleur` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `ip`, `photo`, `couleur`, `password`) VALUES
(1, 'mathieu', '127.0.0.1', 'images/photo.png', '#0b1f75', '$2y$10$xeXYb7RPHWvJcOwV2zvclusuBimVIzkDGqCnQ.i7O5r1JwEXwYY8m'),
(2, 'alexandre', '172.16.238.1', 'images/fleur.jpg', '#4e2424', ''),
(5, 'david', '172.16.238.1', 'images/pierre.png', '#4607bb', ''),
(9, 'soslan', '172.16.238.1', 'images/pikachu.png', '#af1717', ''),
(14, 'lea', '172.16.238.1', 'images/pierre.png', '#1caf17', '$2y$10$ZGkbgtTyaecjaJ1DdQ96o.sQ1YwHjPvyRyRnG5zjHo5Y/psODRm.a'),
(16, 'Gérard', '172.16.238.1', 'images/pierre.png', '#e886a8', ''),
(18, 'julien', '172.16.238.1', 'images/pierre.png', '#ed4c3d', ''),
(24, 'pierrick', '172.16.238.1', 'images/pierre.png', '#f4a666', ''),
(27, 'fabrice', '172.16.238.1', 'images/photo.png', '#35e0d2', '$2y$10$tNd88HYnrak/5FMc1BwYoOry/uW3kH6/1fBmA13vRiT1Y0vb4/haa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `user_to_message` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
