-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 01:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkx`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactusmsg`
--

CREATE TABLE `contactusmsg` (
  `msgID` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactusmsg`
--

INSERT INTO `contactusmsg` (`msgID`, `firstName`, `lastName`, `email`, `phoneNumber`, `topic`, `msg`) VALUES
(1, 'abc', 'hjk', 'zxcv@gmail.com', '0215156165', 'fgfdd', 'fdsafdsa'),
(2, 'abcffgg', 'hjkffgg', 'zxcvffgg@gmail.com', '0215156145', 'fasfafs', 'msg2');

-- --------------------------------------------------------

--
-- Table structure for table `create_at`
--

CREATE TABLE `create_at` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_at`
--

INSERT INTO `create_at` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'fasdfasdf', '$2y$10$QSnEccojS7K3ee6sYQnPKew31NlS5MHR.d5fXcecWrVsWWXrRhMTW', 'fdsfasf@gmail.com', '2023-10-16 19:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `userId` text DEFAULT NULL,
  `vehicleId` text DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `userId`, `vehicleId`, `feedback`, `added_date`) VALUES
(1, 'user22', 'dddddd', 'ddddddddddddddddd', '2023-10-16 20:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `issues` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `issues`) VALUES
(1, 'blalala'),
(2, 'ggfsfafds'),
(3, 'blalala');

-- --------------------------------------------------------

--
-- Table structure for table `parking_lots`
--

CREATE TABLE `parking_lots` (
  `LotID` int(11) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parking_lots`
--

INSERT INTO `parking_lots` (`LotID`, `Location`, `Contact_no`) VALUES
(1, 'Colombo', 112908908);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_ID` int(11) NOT NULL,
  `vType` varchar(20) DEFAULT NULL,
  `li_Num` varchar(20) DEFAULT NULL,
  `inDate` date DEFAULT NULL,
  `in_Time` time DEFAULT NULL,
  `sNote` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_ID`, `vType`, `li_Num`, `inDate`, `in_Time`, `sNote`) VALUES
(70, '123', '213', '2023-10-28', '17:20:00', ''),
(73, 'gsgsffffff', 'fgfgj', '2023-10-05', '13:20:00', 'uyjhg');

-- --------------------------------------------------------

--
-- Table structure for table `retrieve`
--

CREATE TABLE `retrieve` (
  `ret_ID` int(11) NOT NULL,
  `res_ID` int(11) DEFAULT NULL,
  `out_Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `retrieve`
--

INSERT INTO `retrieve` (`ret_ID`, `res_ID`, `out_Time`) VALUES
(45, 70, '13:20:00'),
(48, 70, '13:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Contact_no` int(11) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Address1` varchar(255) DEFAULT NULL,
  `New_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactusmsg`
--
ALTER TABLE `contactusmsg`
  ADD PRIMARY KEY (`msgID`);

--
-- Indexes for table `create_at`
--
ALTER TABLE `create_at`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_lots`
--
ALTER TABLE `parking_lots`
  ADD PRIMARY KEY (`LotID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_ID`);

--
-- Indexes for table `retrieve`
--
ALTER TABLE `retrieve`
  ADD PRIMARY KEY (`ret_ID`),
  ADD KEY `ret` (`res_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactusmsg`
--
ALTER TABLE `contactusmsg`
  MODIFY `msgID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `create_at`
--
ALTER TABLE `create_at`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parking_lots`
--
ALTER TABLE `parking_lots`
  MODIFY `LotID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `retrieve`
--
ALTER TABLE `retrieve`
  MODIFY `ret_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `retrieve`
--
ALTER TABLE `retrieve`
  ADD CONSTRAINT `ret` FOREIGN KEY (`res_ID`) REFERENCES `reservation` (`res_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
