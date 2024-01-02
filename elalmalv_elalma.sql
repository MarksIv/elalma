-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 02, 2024 at 07:33 PM
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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(256) NOT NULL,
  `event_place` varchar(128) NOT NULL,
  `event_location` varchar(256) NOT NULL,
  `event_location_url` varchar(256) DEFAULT NULL,
  `event_url` varchar(256) DEFAULT NULL,
  `event_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_place`, `event_location`, `event_location_url`, `event_url`, `event_date`) VALUES
(1, 'Trio concert', 'Doma dārzs', 'Doma laukums, Rīga', 'https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462', 'https://www.facebook.com/DOMADARZS/', '2023-08-30 19:00:00'),
(2, 'Full band concert', 'Doma dārz', 'Doma laukums, Rīga', 'https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462', 'https://www.facebook.com/DOMADARZS/', '2023-09-01 19:00:00'),
(3, 'Full band concert', 'Doma dārz', 'Doma laukums, Rīga', 'https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462', 'https://www.facebook.com/DOMADARZS/', '2023-09-07 19:00:00'),
(4, 'Full band concert', 'Doma dārz', 'Doma laukums, Rīga', 'https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462', 'https://www.facebook.com/DOMADARZS/', '2023-09-09 19:00:00'),
(5, 'Full band concert', 'Doma dārz', 'Doma laukums, Rīga', 'https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462', 'https://www.facebook.com/DOMADARZS/', '2023-09-15 19:00:00'),
(6, 'Full band concert', 'Doma dārz', 'Doma laukums, Rīga', 'https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462', 'https://www.facebook.com/DOMADARZS/', '2023-09-21 19:00:00'),
(7, 'Full band concert', 'Doma dārz', 'Doma laukums, Rīga', 'https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462', 'https://www.facebook.com/DOMADARZS/', '2023-09-23 19:00:00'),
(8, 'Full band concert', 'The Stage, by Two More Beers', 'Līvu laukums, Rīga', '\"https://goo.gl/maps/zeXbiUTC49AYWkEY7', 'https://www.facebook.com/TheStageBy2MB', '2023-09-30 20:00:00'),
(9, 'Full band concert', 'The Stage, by Two More Beers', 'Līvu laukums, Rīga', '\"https://goo.gl/maps/zeXbiUTC49AYWkEY7', 'https://www.facebook.com/TheStageBy2MB', '2023-10-05 20:00:00'),
(10, 'Full band concert', 'The Stage, by Two More Beers', 'Līvu laukums, Rīga', '\"https://goo.gl/maps/zeXbiUTC49AYWkEY7', 'https://www.facebook.com/TheStageBy2MB', '2023-10-21 20:00:00'),
(11, 'Full band concert', 'The Stage, by Two More Beers', 'Līvu laukums, Rīga', '\"https://goo.gl/maps/zeXbiUTC49AYWkEY7', 'https://www.facebook.com/TheStageBy2MB', '2023-11-04 20:00:00'),
(12, 'Full band concert', 'The Stage, by Two More Beers', 'Līvu laukums, Rīga', '\"https://goo.gl/maps/zeXbiUTC49AYWkEY7', 'https://www.facebook.com/TheStageBy2MB', '2023-12-01 20:00:00'),
(13, 'Full band concert', 'The Stage, by Two More Beers', 'Līvu laukums, Rīga', '\"https://goo.gl/maps/zeXbiUTC49AYWkEY7', 'https://www.facebook.com/TheStageBy2MB', '2023-12-16 20:00:00'),
(14, 'NEW YEAR CELEBRATION with full band', 'The Stage, by Two More Beers', 'Līvu laukums, Rīga', '\"https://goo.gl/maps/zeXbiUTC49AYWkEY7', 'https://www.facebook.com/photo?fbid=277353305307006&set=a.159269130448758', '2023-12-31 20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(30) NOT NULL,
  `photoName` varchar(256) NOT NULL,
  `photoGroupId` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photoName`, `photoGroupId`) VALUES
(1, 'L1010290.JPG', 1),
(2, 'L1010238.JPG', 1),
(3, 'DSC05540.JPG', 1),
(4, 'DSC05549.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photosGroup`
--

CREATE TABLE `photosGroup` (
  `id` int(30) NOT NULL,
  `photoTitle` varchar(256) NOT NULL,
  `titlePhotoName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photosGroup`
--

INSERT INTO `photosGroup` (`id`, `photoTitle`, `titlePhotoName`) VALUES
(1, 'Doma dārzs', 'L1010290.JPG');

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photoGroupId` (`photoGroupId`);

--
-- Indexes for table `photosGroup`
--
ALTER TABLE `photosGroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photosGroup`
--
ALTER TABLE `photosGroup`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photosGroup`
--
ALTER TABLE `photosGroup`
  ADD CONSTRAINT `photosgroup_ibfk_1` FOREIGN KEY (`id`) REFERENCES `photos` (`photoGroupId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
