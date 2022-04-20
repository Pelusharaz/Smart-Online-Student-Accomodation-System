-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 01:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart-accommodation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatpassword` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `repeatpassword`, `Date`, `Time`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$2L7h6ia4ue3qPn9ly.K0Xu8oBX7i.MoZF0hsSVdtgwTNby.W5v/Tu', '$2y$10$1JDqGp3FI1WR2nsiyNwz9uZPIy2yKgcBgtu5WdSryRWHrXr03dJ7W', '2022-03-16', '2022-03-16 09:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `eaddress` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `hostelname` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pricerange` varchar(100) NOT NULL,
  `numberofroomates` varchar(100) NOT NULL,
  `numberofrooms` int(10) NOT NULL,
  `reportingdate` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `gender`, `address`, `zip`, `city`, `state`, `eaddress`, `phone`, `hostelname`, `type`, `pricerange`, `numberofroomates`, `numberofrooms`, `reportingdate`, `payment`, `Date`, `Time`) VALUES
(4, 'lareine', 'female', '56789', '39377157', 'nairobi', 'Kenya', 'lareinepetersoon@gmail.com', '0791386752', 'Manhattan Hostels', 'Bedsitters', 'moderate', 'none', 1, '1999-09-09', 'mpesa', '2022-04-05', '14:35:34.0');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `country` varchar(80) NOT NULL,
  `eaddress` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `country`, `eaddress`, `phone`, `subject`, `Date`, `Time`) VALUES
(1, 'Pelu', 'Nguta', 'Kenya', 'pelunguta@gmail.com', 791386752, 'test', '2022-04-04', '17:17:25.0'),
(3, 'Pelu', 'Nguta', 'Kenya', 'pelunguta@gmail.com', 791386752, 'MY MONEY\r\nPESA ZANGU', '2022-04-05', '14:42:10.0');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `pricerange` varchar(100) NOT NULL,
  `typeofhostel` varchar(100) NOT NULL,
  `security` varchar(100) NOT NULL,
  `distancefromschool` varchar(100) NOT NULL,
  `allhostels` varchar(100) NOT NULL,
  `Amenities` varchar(100) NOT NULL,
  `information` varchar(100) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `hostelimage` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `name`, `price`, `pricerange`, `typeofhostel`, `security`, `distancefromschool`, `allhostels`, `Amenities`, `information`, `location`, `hostelimage`, `Date`, `Time`) VALUES
(1, 'Ebenezer Hostels', 7600, 'expensive', '1-Bedroom', 'high', 'near', 'allhostels', 'Wifi,water,entertainment', 'Exquisite and Affordable Hostels to let', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.0101912334126!2d36.9606997!3d-1.153211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1715590d5607%3A0x8067a87f7aead19!2sZetech%20University!5e0!3m2!1sen!2ske!4v1648645495452!5m2!1sen!2ske', 'home5.jpg', '2022-03-29', '16:33:01.0'),
(2, 'Manhattan Hostels', 7000, 'moderate', 'Bedsitters', 'standard', 'far', 'allhostels', 'Dining Services,Laundry Services', 'Exquisite and Affordable Hostels to let', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.0101912334126!2d36.9606997!3d-1.153211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1715590d5607%3A0x8067a87f7aead19!2sZetech%20University!5e0!3m2!1sen!2ske!4v1648645495452!5m2!1sen!2ske', 'Home2.jpg', '2022-03-29', '17:05:22.0'),
(3, 'Chica Hostels', 9000, 'expensive', '1-Bedroom', 'high', 'very far', 'allhostels', 'entertainment spaces , High speed Wifi', 'Luxurious and Affordable Hostels to let', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.0101912334126!2d36.9606997!3d-1.153211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1715590d5607%3A0x8067a87f7aead19!2sZetech%20University!5e0!3m2!1sen!2ske!4v1648645495452!5m2!1sen!2ske', 'home8.jpeg', '2022-03-29', '17:10:33.0'),
(6, 'zetech hostels', 5200, 'cheap', 'Bedsitters', 'high', 'very near', 'allhostels', 'wifi.water,entertainment spaces', 'Customised to fit your Descriptions', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.0101912334126!2d36.9606997!3d-1.153211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1715590d5607%3A0x8067a87f7aead19!2sZetech%20University!5e0!3m2!1sen!2ske!4v1648645495452!5m2!1sen!2ske', 'home11.jpeg', '2022-03-29', '17:37:21.0'),
(10, 'Lillys Hostels', 8000, 'expensive', '1-Bedroom', 'high', 'very far', 'allhostels', 'High Speed Wifi ,Full-time water ,Entertainment Spaces', 'Exquisite and Affordable Hostels to let', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.0101912334126!2d36.9606997!3d-1.153211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1715590d5607%3A0x8067a87f7aead19!2sZetech%20University!5e0!3m2!1sen!2ske!4v1648645495452!5m2!1sen!2ske', 'home7.jpg', '2022-03-30', '15:55:52.0'),
(16, 'test', 8000, 'cheap', '1-Bedroom', 'high', 'far', 'allhostels', 'wifi.water,entertainment spaces', 'Exquisite and Affordable Hostels to let', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.0101912334126!2d36.9606997!3d-1.153211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1715590d5607%3A0x8067a87f7aead19!2sZetech%20University!5e0!3m2!1sen!2ske!4v1648645495452!5m2!1sen!2ske', 'home5.jpg', '2022-04-05', '14:06:31.0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatpassword` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `repeatpassword`, `Date`, `Time`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$XxJ/nC.2xrHC6HOvGcjzSOvLSefU5gB4vLBazR6cj1vK5PvEfvnru', '$2y$10$nd56.sx3lWGcN88pD.xCLuo5nMg5G9VVSiiF2C9/gtl4G.wodUrPi', '2022-03-15', '16:41:14.0'),
(3, 'la reine peterson', 'lareinepeterson@gmail.com', '$2y$10$BrFXM5fTRzJas1lqKlbOUODDoHGvQEBHndmxf3KpfRf2dHFZmTJki', '$2y$10$C19Iay5WelO7LFTJWkPfAOSgoWjiSGOALFy0xOvfoKNhZS/sb6Cx2', '2022-04-05', '14:31:47.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
