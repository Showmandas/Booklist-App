-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 06:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `username`, `bookid`) VALUES
(1, 'sanu', 1),
(4, 'sanu', 5),
(5, 'soumen', 8),
(6, 'soumen', 9);

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`id`, `email`, `password`, `username`) VALUES
(1, 'admin@admin.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booklists`
--

CREATE TABLE `booklists` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publication` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booklists`
--

INSERT INTO `booklists` (`id`, `username`, `title`, `author`, `publication`, `edition`, `files`) VALUES
(8, 'sanu', 'book1', 'shanu', 'sgffg', '3', '../pdf/vaccinecard (3).pdf'),
(11, 'dipti', 'harry', 'poter', 'poters', '5', '../pdf/2021_07_29_15-17-36_pm (1).pdf'),
(13, 'javu', 'javed', 'javu', 'javs', '4', '../pdf/vaccinecard (3).pdf'),
(15, 'topu', 'shonkhochil', 'shoknu', 'shonkho', '3', '../pdf/ksolaunch.exe'),
(16, 'soumen', 'data structure', 'dhali', 'dhalidon', '6', '../pdf/vaccinecard (2) (2).pdf'),
(19, 'arjun', 'arya', 'sukku', 'geetha', '2', '../pdf/CSE 501 DBMS Set-2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `rembook`
--

CREATE TABLE `rembook` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publication` varchar(255) NOT NULL,
  `edition` int(255) NOT NULL,
  `files` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rembook`
--

INSERT INTO `rembook` (`id`, `title`, `author`, `publication`, `edition`, `files`) VALUES
(1, 'micro', 'microsons', 'microprocessor', 8, '../pdf/2021_07_29_15-17-36_pm (1) (1).pdf'),
(5, 'ami topu', 'jafar iqbal', 'ddfdf', 4, '../pdf/vaccinecard (2).pdf'),
(8, 'trook', 'tooker', 'tooks', 8, '../pdf/python-interview-questions-answers.pdf'),
(9, 'algorithm', 'alogos', 'algo', 7, '../pdf/Biodata.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `address`, `division`, `gender`) VALUES
(1, 'soumen', 'soumen@gmail.com', '$2y$10$Y72p4XaEIicoqxc.LZ0BkOmcM5lJlZvhoQU.mZnxNveMpftLGST.K', 'dampara', 'Chattogram', 'male'),
(2, 'sanu', 'sanu@gmail.com', '$2y$10$oA4gO4hMYLGAYqwkQ13a/u4YrrfWP8MT8V.bvJg/v686WBpU48/r.', 'chittagong', 'Chattogram', 'male'),
(3, 'arjun', 'krish@gmail.com', '$2y$10$4NuZdfmemgTz0k1Z7CfEEeqTTocAQUZwz8cJdHHczbNFYdR.dMOKa', 'sylhet', 'Sylhet', 'male'),
(4, 'dipti', 'dipti@gmail.com', '$2y$10$JMV7Oq396N7lauwam.Txse.mupclU8bNtx.YxiM3zprgrDmueRjDa', 'wasa', 'Rajshahi', 'female'),
(5, 'javu', 'javu@gmail.com', '$2y$10$CE7U34aJ9mLZ1oKeXE3BD.R4ZmngIuPfP563jXd8j18kj1.NsC9SG', 'chandpur', 'Rajshahi', 'male'),
(6, 'topu', 'topu@gmail.com', '$2y$10$hNRab/3mWVKu6Y3FaOdx4OfLG7rH5R9C69Ndh4pMo3YXRf.W9sGS.', 'bagghona', 'Khulna', 'male'),
(8, 'arjun', 'allu@gmail.com', '$2y$10$ZiyBS04suxQgNRkgvMa52.IIP1DGL.SG8DXYq.5Ifweh5naLGJzh.', 'market', 'Chattogram', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklists`
--
ALTER TABLE `booklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rembook`
--
ALTER TABLE `rembook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booklists`
--
ALTER TABLE `booklists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rembook`
--
ALTER TABLE `rembook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
