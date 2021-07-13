-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 09:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(20) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(2, 'news', 1),
(4, 'sports', 1),
(5, 'entertainment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(20) NOT NULL,
  `categories_id` int(20) NOT NULL,
  `sub_categories_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `categories_id`, `sub_categories_id`, `name`, `url`, `description`, `status`) VALUES
(2, 4, 13, 'tensports', 'https://tensports.com', 'Ten Sports live. Watch ten sports live streaming', 1),
(3, 4, 14, 'Aljazerasporst', 'https://Aljazerasports.com', 'very entertaining chanell', 1),
(4, 4, 15, 'national sports', 'https://nationalSports.com', ' welcome to national sports,your home for all the latest sports', 1),
(6, 2, 5, 'geonews', 'https://geonews.com', 'Geo TV provides latest news, breaking news, urdu news from pakistan, world, sports, cricket, business, politics, health. watch geo news on live.geo.tv.', 1),
(7, 2, 5, 'expressnews', 'https://expressnew.com', 'Latest urdu news, breaking news, current news in urdu from Pakistan, World, Sports, Business, Cricket , Politics and Weather only at Express News', 1),
(8, 2, 7, 'humnews', 'https://humnews.com', 'hum news in pakistani news brand providing latest current affiars', 1),
(9, 2, 8, 'samanews', 'https://samanew.com', 'Comprehensive coverage of Pakistan, breaking news stories and analysis along with reporting on current affairs', 1),
(10, 5, 17, 'damakamovies', 'https://dhamakamoves.com', 'watch latest and old pakistani and indian movies', 1),
(11, 0, 0, 'ever green movies', 'https://evergreenmovies.com', 'watch old pakistani,indian and hollywood movies', 1),
(12, 5, 17, 'dailymotionmovies', 'https://dailymotonmoviescom', 'watch movies and search by name of movies', 1),
(13, 5, 18, 'sonydramas', 'https://sonydramas', 'emotional and entertaining dramas live and repeat', 1),
(14, 5, 19, 'umer sharif show', 'https://umersharif.com', 'see legend of comedy very entertaining personality', 1),
(15, 5, 20, 'vital signs', 'https://vitalSongscom', 'junaid jamsheed is the co founder of this band.this give dil dil pakistan national song', 1),
(16, 5, 19, 'khabardar show', 'https://pakistani shows.com', 'Iqbal qureshi is the host of this shows this provide educational khowledge.', 1),
(17, 6, 21, 'cat_sub_1_name', 'https://cat_sub_1.com', 'cat_sub_1_name description', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(20) NOT NULL,
  `categories_id` int(20) NOT NULL,
  `sub_categories` varchar(300) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(1, 1, 'cricket', 1),
(2, 1, 'football', 1),
(3, 1, 'hockey', 1),
(4, 1, 'boxing', 1),
(5, 2, 'geonews', 1),
(6, 2, 'express news', 1),
(7, 2, 'hum news', 1),
(8, 2, 'sama news', 1),
(9, 3, 'music', 1),
(10, 3, 'movies', 1),
(11, 3, 'dramas', 1),
(12, 3, 'shows', 1),
(13, 4, 'cricket', 1),
(14, 4, 'hockey', 1),
(15, 4, 'football', 1),
(16, 4, 'boxing', 1),
(17, 5, 'movies', 1),
(18, 5, 'dramas', 1),
(19, 5, 'shows', 1),
(20, 5, 'music', 1),
(21, 6, 'cat_sub_1', 1),
(22, 6, 'cat_sub_2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `comment`) VALUES
(3, 'Jhon Doe', 'Jhon@gmail.com', 'very beautiful site'),
(4, 'Jony', 'Jony@gmail.com', 'Its nice site');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
