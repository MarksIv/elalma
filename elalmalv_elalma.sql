-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 20, 2023 at 08:40 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elalmalv_elalma`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `song` varchar(256) NOT NULL,
  `artist` varchar(256) DEFAULT NULL,
  `genre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `song`, `artist`, `genre`) VALUES
(1, 'Caminando por la calle', 'Gipsy Kings', 'Spanish'),
(2, 'La Camisa Negra', 'Juanes', 'Spanish'),
(3, 'Trista pena', 'Gipsy Kings', 'Spanish'),
(4, 'Un Amor', 'Gipsy Kings', 'Spanish'),
(5, 'Besame Mucho', 'Chiko&Gipsy', 'Spanish'),
(6, 'Historija de un Amor', 'Chiko&Gipsy', 'Spanish'),
(7, 'Desperados', 'Banderas', 'Spanish'),
(8, 'La bamba', 'Los Lobos&Gipsy Kings', 'Spanish'),
(9, 'Habla Me', 'Gipsy Kings', 'Spanish'),
(10, 'Como siento yo', 'Gipsy Kings', 'Spanish'),
(11, 'Baila Me', 'Gipsy Kings', 'Spanish'),
(12, 'Bambaleo', 'Gipsy Kings', 'Spanish'),
(13, 'Feelings', 'Chiko&Gipsy', 'Spanish'),
(14, 'A mi manera', 'Gipsy Kings', 'Spanish'),
(15, 'Volare', 'Gipsy Kings', 'Spanish'),
(16, 'Rumba de Nikolas', 'Gipsy Kings', 'Spanish'),
(17, 'Guantanamera', '', 'Spanish'),
(18, 'Djobi Djoba', 'Gipsy Kings', 'Spanish'),
(19, 'Canto a Brazil', 'Gipsy Kings', 'Spanish'),
(20, 'Hotel California', 'Gipsy Kings', 'Spanish'),
(21, 'Como ayer', 'Gipsy Kings', 'Spanish'),
(22, 'Despacito', 'Luis Fonsi', 'Spanish'),
(23, 'Vamos A Bailar', 'Gipsy Kings', 'Spanish'),
(24, 'Inspiration', 'Gipsy Kings', 'Spanish'),
(25, 'Pharaon', 'Gipsy Kings', 'Spanish'),
(26, 'Un Hombre', 'Gipsy Kings', 'Spanish'),
(27, 'Moorea', 'Gipsy Kings', 'Spanish'),
(28, 'Rip it up', 'Bill Haley', 'Rock-n-Roll'),
(29, 'Rock Around the Clock', 'Bill Haley', 'Rock-n-Roll'),
(30, 'Johnny B Goode', 'Chuck Berry', 'Rock-n-Roll'),
(31, 'Blue Suede Shoes', 'Elvis Presley', 'Rock-n-Roll'),
(32, 'Hound dog', 'Elvis Presley', 'Rock-n-Roll'),
(33, 'It\'s now or never', 'Elvis Presley', 'Rock-n-Roll'),
(34, 'Love me tender', 'Elvis Presley', 'Rock-n-Roll'),
(35, 'Bring My Baby Back', 'Gary Moore', 'Rock-n-Roll'),
(36, 'Down the Line', 'Gary Moore', 'Rock-n-Roll'),
(37, 'Be-Bop-A-Lula', 'Gene Vincent', 'Rock-n-Roll'),
(38, 'Looking for the summer', 'Chris Rea', 'Pop'),
(39, 'Road to Hell', 'Chris Rea', 'Pop'),
(40, 'The Bug', 'Dire Straits', 'Pop'),
(41, 'Autumn Leaves', 'Eric Clapton', 'Pop'),
(42, 'Lay down Sally', 'Eric Clapton', 'Pop'),
(43, 'Layla', 'Eric Clapton', 'Pop'),
(44, 'Tears in Heaven', 'Eric Clapton', 'Pop'),
(45, 'My Father\'s Son', 'Joe Cocker', 'Pop'),
(46, 'Maybe I Maybe You', 'Scorpions', 'Pop'),
(47, 'Every Breath You Take', 'Sting', 'Pop'),
(48, 'Fragile', 'Sting', 'Pop'),
(49, 'Blue Café', 'Chris Rea', 'Pop'),
(50, 'On the beach', 'Chris Rea', 'Pop'),
(51, 'Faith', 'George Michael', 'Pop'),
(52, 'Livin La Vida Loca', 'Ricky Martin', 'Pop'),
(53, 'Road to Mandalay', 'Robbie Williams', 'Pop'),
(54, 'Love of my life', 'Santana', 'Pop'),
(55, 'Kingston Town', 'UB40', 'Pop'),
(56, 'Beggin', 'Maneskin', 'Pop'),
(57, 'Feelings', 'Morris Albert', 'Pop'),
(58, 'Lady', 'Modjo', 'Pop'),
(59, 'Wearing out my shoes', 'Club Des Belugas', 'Pop'),
(60, 'Wicked Games', 'Chris Isaak', 'Pop'),
(61, 'Close to you', 'Maxi Priest', 'Pop'),
(62, 'You\'re my heart you\'re my soul', 'Modern Talking', 'Pop'),
(63, 'Manana', 'Santana', 'Pop'),
(64, 'Smooth', 'Santana', 'Pop'),
(65, 'I Belong To You', 'Lenny Kravitz', 'Pop'),
(66, 'Sway', 'Michael Buble', 'Pop'),
(67, 'Corazon Espinado', 'Santana', 'Pop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
