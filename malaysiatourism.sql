-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 06:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malaysiatourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `ID` int(11) NOT NULL,
  `Place_ID` int(11) NOT NULL,
  `Hotel` varchar(500) NOT NULL,
  `Distance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`ID`, `Place_ID`, `Hotel`, `Distance`) VALUES
(1, 1, 'Hotel Richbaliz', '6km'),
(2, 2, 'Pangkor Coral Bay Resort', '2km'),
(3, 3, 'Resorts World Genting', '600m'),
(4, 4, 'Bayview Beach Resort', '3.5km'),
(5, 5, 'KB Street Boutique Hotel', '110m'),
(6, 6, 'Coral View Island Resort', '0km'),
(7, 7, 'Hatten Hotel Melaka', '10 mins walk to AFamosa,\r\n14 mins walk to Jonker Street'),
(8, 8, 'Travelodge City Centre', '150m'),
(9, 9, 'Sutera Sanctuary Lodges at Kinabalu Park', '6.6km'),
(10, 10, 'Alia Residence Business Resort', '6.7km'),
(11, 11, 'Mulu Marriott Resort & Spa', '2.6km'),
(12, 12, 'Ants Hotel', '4.5km'),
(13, 13, 'OYO 925 Nawawi\'s Cottage', '0km'),
(14, 14, 'Hotel Ramada by Wyndham Meridin Johor Bahru', '1.1km');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `ID` int(11) NOT NULL,
  `State_ID` int(11) NOT NULL,
  `Place` varchar(500) NOT NULL,
  `Activity` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`ID`, `State_ID`, `Place`, `Activity`) VALUES
(1, 1, 'Batu Caves', 'Climbing Stairs,\r\nSightseeing'),
(2, 2, 'Pangkor Island', 'Snorkeling,\r\nDiving,\r\nHealing'),
(3, 3, 'Genting Highlands', 'Enjoy Genting SkyWorlds Theme Park,\r\nRide Genting Skyway cable car'),
(4, 4, 'Batu Ferringhi Beach', 'Play water sports,\r\nEnjoy the seaview'),
(5, 5, 'Siti Khadijah Market', 'Shopping food and souvenirs'),
(6, 6, 'Perhentian Island', 'Snorkeling,\r\nDiving,\r\nWater sports,'),
(7, 7, 'Malacca City', 'Food Hunting\r\nSightseeing\r\nShopping'),
(8, 8, 'Central Market', 'Window Shopping,\r\nSightseeing'),
(9, 9, 'Kundasang', 'Hiking,\r\nWatching Sunrise,\r\nEnjoying nature'),
(10, 10, 'Langkawi Sky Bridge', 'Ride cable car,\r\nEnjoy the view,\r\nWindow Shopping'),
(11, 11, 'Gunung Mulu National Park', 'Explore the caves,\r\nEnjoy nature'),
(12, 12, 'Kota Kayang Museum', 'Gain knowledge of the history/culture, \r\nAppreciate arts'),
(13, 13, 'Rembau', 'Food Hunting'),
(14, 14, 'LEGOLAND Malaysia', 'Enjoy the waterpark, sea life museum and roller coaster');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `ID` int(11) NOT NULL,
  `State` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`ID`, `State`) VALUES
(1, 'Selangor'),
(2, 'Perak'),
(3, 'Pahang'),
(4, 'Pulau Pinang'),
(5, 'Kelantan'),
(6, 'Terengganu'),
(7, 'Melaka'),
(8, 'Kuala Lumpur'),
(9, 'Sabah'),
(10, 'Kedah'),
(11, 'Sarawak'),
(12, 'Perlis'),
(13, 'Negeri Sembilan'),
(14, 'Johor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Place_ID` (`Place_ID`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `State_ID` (`State_ID`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`Place_ID`) REFERENCES `place` (`ID`);

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`State_ID`) REFERENCES `states` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
