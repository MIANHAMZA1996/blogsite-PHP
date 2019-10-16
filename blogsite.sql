-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 05:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `1signup`
--

CREATE TABLE `1signup` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `retypepassword` varchar(2555) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1signup`
--

INSERT INTO `1signup` (`id`, `username`, `email`, `password`, `retypepassword`, `usertype`) VALUES
(1, 'Hassan', 'hassan@gmail.com', '1234', '123456', 'Admin'),
(2, 'hamza', 'hamza@gmail.com', '12345', '12345', 'Author'),
(3, 'ali', 'ali@gmail.com', '1234567', '1234567', 'Reader'),
(4, 'ali28', 'ali12@gmail.com', '1234567', '1234567', 'Admin'),
(5, 'hamza', '', '1234', '1234', 'Author'),
(6, 'hamza', '', '1234', '1234', 'Admin'),
(7, 'ali', 'ali@gmail.com', '111', '111', 'Admin'),
(8, 'arslan@gmail.com', 'Mohsin@icloud.com', '123', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `2contactus`
--

CREATE TABLE `2contactus` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2contactus`
--

INSERT INTO `2contactus` (`id`, `name`, `mobilenumber`, `country`, `subject`) VALUES
(1, 'Muhammad Hamza', '03344331235', 'PAKISTAN', 'I want  author account.\r\ni already have a reader account'),
(2, 'Aleena', '02081331295', 'Lahore', 'I want  author account.\r\ni already have a reader account');

-- --------------------------------------------------------

--
-- Table structure for table `3posts`
--

CREATE TABLE `3posts` (
  `id` int(255) NOT NULL,
  `posttitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3posts`
--

INSERT INTO `3posts` (`id`, `posttitle`, `image`, `category`, `description`) VALUES
(2, 'Computer', 'Screenshot (11).png', 'BIKE', 'Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an online. People who write blogs'),
(3, 'Watch;', 'Screenshot (11).png', 'TECHNOLOGY', 'Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an online. People who write blogs'),
(4, 'Mouse', 'Screenshot (25).png', 'TECHNOLOGY', 'Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an online. People who write blogs'),
(5, 'Pad', 'Screenshot (19).png', 'NEPAL', 'Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an online. People who write blogs'),
(6, 'Laptop', 'Screenshot (18).png', 'SPORTS', 'Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an online. People who write blogs'),
(7, 'Glasses', 'Screenshot (15).png', 'FOOD', 'Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an online. People who write blogs');

-- --------------------------------------------------------

--
-- Table structure for table `4category`
--

CREATE TABLE `4category` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4category`
--

INSERT INTO `4category` (`id`, `title`, `category`, `description`) VALUES
(1, 'Women', 'Women', 'descriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescription'),
(2, 'Women', 'Women', 'descriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescription'),
(3, 'Men', 'asdasda', 'style=\"color: #000000style=\"color: #000000style=\"color: #000000style=\"color: #000000style=\"color: #000000style=\"color: #000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1signup`
--
ALTER TABLE `1signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2contactus`
--
ALTER TABLE `2contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3posts`
--
ALTER TABLE `3posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4category`
--
ALTER TABLE `4category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1signup`
--
ALTER TABLE `1signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `2contactus`
--
ALTER TABLE `2contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `3posts`
--
ALTER TABLE `3posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `4category`
--
ALTER TABLE `4category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
