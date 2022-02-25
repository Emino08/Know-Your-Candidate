-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 03:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `know_your_candidate`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `details_id` int(11) NOT NULL,
  `candidate_photo` varchar(60) NOT NULL,
  `candidate_fname` varchar(15) NOT NULL,
  `candidate_mname` varchar(15) NOT NULL,
  `candidate_lname` varchar(15) NOT NULL,
  `political_party_photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`details_id`, `candidate_photo`, `candidate_fname`, `candidate_mname`, `candidate_lname`, `political_party_photo`) VALUES
(11, './uploads/jpk-new.jpg', 'James', 'Pundeh', 'Kamara', './uploads/c4c.png'),
(13, './uploads/photo_2021-06-24_00-00-19.jpg', 'Aminata', '', 'Turay', './uploads/slpp.png'),
(15, './uploads/7620EA1A-651E-4DE8-BEEC-DAD18657F88FL0001 (2).jpeg', 'Emmanuel', 'Mohamed', 'Koroma', './uploads/ngc.jpg'),
(18, './uploads/7620EA1A-651E-4DE8-BEEC-DAD18657F88FL0001 (2).jpeg', 'Saradugu', '', 'Saidu', './uploads/apc.png'),
(19, './uploads/jpk-new.jpg', 'Israel', 'Jasrel', 'Ndolie', './uploads/slpp.png');

-- --------------------------------------------------------

--
-- Table structure for table `election_details`
--

CREATE TABLE `election_details` (
  `election_details_id` int(11) NOT NULL,
  `election_name` varchar(20) NOT NULL,
  `constituency` varchar(20) NOT NULL,
  `election_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `election_details`
--
ALTER TABLE `election_details`
  ADD PRIMARY KEY (`election_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `election_details`
--
ALTER TABLE `election_details`
  MODIFY `election_details_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
