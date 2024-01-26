-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 02:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porfoliobuild`
--

-- --------------------------------------------------------

--
-- Table structure for table `about-section`
--

CREATE TABLE `about-section` (
  `uid` varchar(7) NOT NULL,
  `A-heading` varchar(100) NOT NULL,
  `A-subHeading` varchar(100) NOT NULL,
  `A-conHeading` varchar(100) NOT NULL,
  `A-content` varchar(500) NOT NULL,
  `A-p1` varchar(50) NOT NULL,
  `A-p2` varchar(50) NOT NULL,
  `A-p3` varchar(50) NOT NULL,
  `A-image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `contact-section`
--

CREATE TABLE `contact-section` (
  `uid` varchar(7) NOT NULL,
  `C-heading` varchar(50) NOT NULL,
  `C-subheading` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `locatiton` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `hero-section`
--

CREATE TABLE `hero-section` (
  `uid` varchar(7) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `imageSrc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `hero-section`
--

INSERT INTO `hero-section` (`uid`, `heading`, `subheading`, `description`, `imageSrc`) VALUES
('1234568', 'I\'am Malaloum Djou Mireille', 'Web developer', 'Bringing your ideas to live', 'img/placeholder.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pwd`) VALUES
('malaloummireille@gmail.com', '$2y$10$ffHK02q5km.CQtD8BbCYOOXAzTN6GuGA40hqKMy88ACdDkPMZTF3e'),
('ngoupayouhabil@gmail.com', '$2y$10$X6gn8KTNKf6G3SuV9cU4C.k282uoBxTQGAUI95LkBWwfaVYznsAm.'),
('providence@gmail.com', '$2y$10$HU9/3J7V4lB6NliUCOqxoetQ4yjuMLATeCbpZoHz6doL1odCYuMOS');

-- --------------------------------------------------------

--
-- Table structure for table `projects-section`
--

CREATE TABLE `projects-section` (
  `uid` varchar(7) NOT NULL,
  `P-heading` varchar(50) NOT NULL,
  `col1-image` varchar(100) NOT NULL,
  `col1-heading` varchar(30) NOT NULL,
  `col1-content` varchar(500) NOT NULL,
  `col1-link` varchar(50) NOT NULL,
  `col2-image` varchar(100) NOT NULL,
  `col2-heading` varchar(30) NOT NULL,
  `col2-content` varchar(500) NOT NULL,
  `col2-link` varchar(50) NOT NULL,
  `col3-image` varchar(100) NOT NULL,
  `col3-heading` varchar(30) NOT NULL,
  `col3-content` varchar(500) NOT NULL,
  `col3-link` varchar(50) NOT NULL,
  `col4-image` varchar(100) NOT NULL,
  `col4-heading` varchar(30) NOT NULL,
  `col4-content` varchar(500) NOT NULL,
  `col4-link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userID` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `tel` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `userProfile` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userID`, `fname`, `lname`, `tel`, `email`, `country`, `city`, `userProfile`, `pwd`, `date`) VALUES
('mM1987', 'malaloum', 'mireille', 674957496, 'mmalaloum@gmail.com', 'cameroon', 'douala', '', '$2y$10$U/E4Qq9NsD/Uyd2MmhfAyOg1ifo.eft2zlrUuiugXA4Xraq.cLo8.', '2023-09-25 22:23:43'),
('mM9688', 'malaloum', 'mireille', 674957495, 'malaloummireille@gmail.com', 'cameroon', 'douala', '', '$2y$10$ffHK02q5km.CQtD8BbCYOOXAzTN6GuGA40hqKMy88ACdDkPMZTF3e', '2023-11-29 23:07:08'),
('nP1830', 'ngonjoh', 'Providence', 656564345, 'providence@gmail.com', 'Cameroon', 'Douala', '', '$2y$10$HU9/3J7V4lB6NliUCOqxoetQ4yjuMLATeCbpZoHz6doL1odCYuMOS', '2023-09-23 00:24:29'),
('nS6534', 'Ngoupayou', 'Salim', 694730737, 'ngoupayouhabil@gmail.com', 'Cameroon', 'Douala', '', '$2y$10$X6gn8KTNKf6G3SuV9cU4C.k282uoBxTQGAUI95LkBWwfaVYznsAm.', '2023-09-26 09:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `skills-section`
--

CREATE TABLE `skills-section` (
  `uid` varchar(7) NOT NULL,
  `S-heading` varchar(50) NOT NULL,
  `S-col1heading` varchar(50) NOT NULL,
  `S-col1Subheading` varchar(50) NOT NULL,
  `S-col1p1` varchar(30) NOT NULL,
  `S-col1p2` varchar(30) NOT NULL,
  `S-col1p3` varchar(30) NOT NULL,
  `S-col2heading` varchar(50) NOT NULL,
  `S-col2Subheading` varchar(50) NOT NULL,
  `S-col2p1` varchar(30) NOT NULL,
  `S-col2p2` varchar(30) NOT NULL,
  `S-col2p3` varchar(30) NOT NULL,
  `S-col3heading` varchar(50) NOT NULL,
  `S-col3Subheading` varchar(50) NOT NULL,
  `S-col3p1` varchar(30) NOT NULL,
  `S-col3p2` varchar(30) NOT NULL,
  `S-col3p3` varchar(30) NOT NULL,
  `S-col3p4` varchar(30) NOT NULL,
  `S-col3p5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `TID` int(30) NOT NULL,
  `Tname` varchar(50) NOT NULL,
  `Tstructure` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Tstructure`)),
  `style` text NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`TID`, `Tname`, `Tstructure`, `style`, `dateCreated`, `userID`) VALUES
(65, '', '[{\"section_id\":\"section1Input\",\"content\":\"I am MALALOUM DJOU M. , I\'am a Software Engeneer, I have a great Passion and interest with anything concerning IT(Information Technology). I live in DOUALA CAMERRON. I have always love involving myself in anything concerning computing since I was little, but my passion is more concern in codding, since I stated learning some programming in secondary school. So after secondary school I have decide to study Software Engeneering, where I have learn FrontEnd Development and BackEnd Develpement, with a certification in Networking with Cisco Parket Tracer, AT VTIB(Vocational Training Institude Besttechnology).\"},{\"section_id\":\"section2Input\",\"content\":null}]', '', '2023-11-21 20:47:57', '0'),
(66, '', '[{\"section_id\":\"section1Input\",\"content\":\"  Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi                 facilis ornare velit non\"},{\"section_id\":\"section2Input\",\"content\":null}]', '', '2024-01-15 13:37:58', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about-section`
--
ALTER TABLE `about-section`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `contact-section`
--
ALTER TABLE `contact-section`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `hero-section`
--
ALTER TABLE `hero-section`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects-section`
--
ALTER TABLE `projects-section`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `skills-section`
--
ALTER TABLE `skills-section`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `TID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
