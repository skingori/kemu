-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2016 at 10:51 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(15) NOT NULL,
  `client` varchar(10) NOT NULL,
  `consultant` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `client`, `consultant`, `status`) VALUES
(1, 'client', 'karis', 'SOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msgid` int(100) NOT NULL,
  `sender` varchar(11) NOT NULL,
  `recipient` varchar(11) NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msgid`, `sender`, `recipient`, `msg`, `date`, `status`) VALUES
(14, 'smaina', 'jmaina', '[[[[[/......;''', '2014-09-23 17:42:01', 'READ'),
(15, 'jmaina', 'sam', 'iu', '2014-09-23 14:33:48', 'UNREAD'),
(16, 'smaina', 'jmaina', '''''''', '2014-09-23 15:41:08', 'UNREAD'),
(17, 'jmaina', 'smaina', '/////', '2014-09-23 17:36:30', 'UNREAD'),
(18, 'jmaina', 'sam', 'please', '2014-09-23 17:41:46', 'UNREAD'),
(19, 'jmaina', 'smaina', '....', '2014-09-23 17:45:21', 'READ'),
(20, 'smaina', 'jmaina', 'kkkk', '2014-09-23 17:45:27', 'UNREAD'),
(21, 'smaina', 'jmaina', 'lll', '2014-09-23 17:45:38', 'UNREAD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `category` tinyint(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `speciality` varchar(56) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `cspeciality` varchar(50) DEFAULT NULL,
  `odetails` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `category`, `username`, `password`, `firstname`, `lastname`, `status`, `speciality`, `email`, `cname`, `cspeciality`, `odetails`) VALUES
(15, 3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'samson', 'mwangi', 'active', 'N/A', 'we@gg.com', NULL, NULL, NULL),
(16, 1, 'admin1', '81dc9bdb52d04dc20036dbd8313ed055', 'saasas', 'asasas', 'active', 'N/A', 'as@as.com', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msgid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
