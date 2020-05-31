-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 06:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_body` varchar(10000) NOT NULL,
  `sys_creation_date` datetime NOT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `created_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_body`, `sys_creation_date`, `sys_update_date`, `created_by`) VALUES
(2, 'Which are the best and cheapest hosting for WordPress with good resources in India?', 'There are quite a few options for cheap and good web hosting providers for WordPress in India.\r\n\r\nThe question is: how to choose the best one? To do that, we have to put a few factors into consideration. Now, without further ado, let’s start.\r\n\r\nWhen choosing a host, look for the one that has an easy WP installation and quick setup. Remember that not all hosting providers support WordPress.\r\n\r\nThose who want to keep their budget tight should try to look for hosting with prices starting with no higher than ?45/month. Remember that cheap doesn’t mean low-quality.\r\n\r\nYou can enjoy a good quality WordPress website, without spending a lot of money.\r\nFor the best resources, look for hosting providers who offer unlimited bandwidth and MySQL databases on almost all plans, the disk space should be no less than 10GB.\r\n\r\nAs resources depend on what kind of website you want to host, we at Hostinger\r\n\r\nbelieve that you should pay only for what you actually need.\r\n\r\nIt means that you can start with a plan and upgrade your hosting anytime as your website grows.\r\n\r\nThere are more important factors:\r\n\r\n    Uptime. It is crucial for your website to be up and running with as little downtime as possible. Search for providers that have at least 99.9% uptime, because you surely deserve the best!\r\n\r\nKeep in mind that uptime depends not only on a web hosting company but on your setup as well. If your website is running on old platforms, the chances of errors arise. It is recommended that you always upgrade your software to the latest version. Moreover, wrong configuration settings can be a cause of downtime too.\r\n\r\n    Support. Look for a host that has a customer support service and works 24/7/365 to help you make your webmastering journey as smooth as possible! Maybe someday you will need help in the middle of the night, so it is great to have someone to keep you covered. Time is money, so look for support that has a fast response time.\r\n    .in Domains. If you’re considering registering your website with .in TLD, you should know that not all hosting companies sell those. Of course, you can always buy a domain elsewhere, but then you should know how to point it to your host\r\n\r\n.\r\nTutorials. Always check if your host has a tutorial page\r\n\r\n    or a help center available. That way, you can learn by exploring hundreds of helpful tutorials and how-to guides.\r\n    Payment methods. The most popular payment methods for hosting in India are credit/debit cards and PayPal, so your preferable host should have at least one of these options. For example, with Hostinger, you have an option to pay by eight different payment methods including Bitcoin!\r\n    Freebies. Usually, if you tend to buy a more advanced hosting plan for a more extended period, you get a bunch of freebies, including free SSL, a domain, and emails. So, as a result, you get a better plan and you don’t have to pay for additional features.\r\n    30-day money-back guarantee. If you’re not satisfied with hosting services, it is always great to have the possibility to get your money back.\r\n\r\nTo sum up, the amount of resources depends on the type of website you want to host. I believe that you shouldn’t pay for something you don’t even need.\r\n\r\nMost importantly, you, without a doubt, can enjoy good quality hosting with great support, tutorials, freebies, good resources and more without breaking the bank.\r\n\r\nI wish you to find the most suitable and affordable WordPress hosting in India. Good luck!\r\n', '2020-04-22 13:10:38', NULL, 'ccadmin123');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `blog_id` int(10) NOT NULL,
  `blog_comment_id` int(10) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `sys_creation_date` datetime NOT NULL,
  `commented_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`blog_id`, `blog_comment_id`, `comment`, `sys_creation_date`, `commented_by`) VALUES
(2, 1, ' nice', '2020-04-22 13:10:59', 'ccadmin123'),
(2, 2, 'bvbv', '2020-04-22 13:24:32', ''),
(2, 3, 'jkshg oirhjr', '2020-04-23 21:51:14', 'ccadmin123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(160) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact_no` bigint(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sys_creation_date` datetime NOT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `is_admin` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `contact_no`, `email`, `sys_creation_date`, `sys_update_date`, `is_admin`) VALUES
(1, '12345678', '03072df361cf6a6dbc90a41ae19badc47ca2f079', 'As', 'Df', 1234567890, 'asdf@gmail.com', '2020-04-19 20:46:20', '2020-04-19 22:15:48', 'N'),
(2, 'ccadmin123', '03072df361cf6a6dbc90a41ae19badc47ca2f079', 'Career', 'Configure', 987654321, 'chetanpawar968@gmail.com', '2020-04-19 20:52:51', '2020-04-24 02:40:45', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`blog_id`,`blog_comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
