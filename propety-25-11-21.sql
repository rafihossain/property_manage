-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 03:02 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `billsetups`
--

CREATE TABLE `billsetups` (
  `id` int(11) NOT NULL,
  `billtype` varchar(50) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billsetups`
--

INSERT INTO `billsetups` (`id`, `billtype`, `property_id`, `created_at`, `updated_at`) VALUES
(8, 'ggg', 17, '2021-11-18 13:41:52', '2021-11-18 13:43:41'),
(9, 'ggg', 16, '2021-11-18 13:43:21', '2021-11-18 13:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `bill_diposit`
--

CREATE TABLE `bill_diposit` (
  `id` int(100) NOT NULL,
  `bill_type` varchar(100) NOT NULL,
  `bill_date` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_diposit`
--

INSERT INTO `bill_diposit` (`id`, `bill_type`, `bill_date`, `month`, `year`, `total_amount`, `bank_name`, `details`, `property_id`) VALUES
(7, 'Gas', '2020-11-09', 'January', 2021, 21000, 'sonali Bank', 'details is details..', 0),
(8, 'Water', '2021-11-09', 'September', 2022, 0, 'Patrick Woodard', 'Voluptatem quisquam ', 17);

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` int(11) NOT NULL,
  `mmembername` varchar(30) NOT NULL,
  `memail` varchar(40) NOT NULL,
  `mpassword` varchar(30) NOT NULL,
  `mphone` varchar(20) NOT NULL,
  `mpresentads` varchar(50) NOT NULL,
  `mpermanentads` varchar(50) NOT NULL,
  `mnid` varchar(20) NOT NULL,
  `mdesignation` varchar(20) NOT NULL,
  `mjoiningdate` varchar(20) NOT NULL,
  `mendingdate` varchar(20) NOT NULL,
  `mstaus` int(5) NOT NULL,
  `mimage` varchar(50) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`id`, `mmembername`, `memail`, `mpassword`, `mphone`, `mpresentads`, `mpermanentads`, `mnid`, `mdesignation`, `mjoiningdate`, `mendingdate`, `mstaus`, `mimage`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 'Octavia Dale', 'nuciz@mailinator.com', 'Pa$$w0rd!', '+1 (451) 911-8969', 'Alias quo excepteur ', 'In vel eos mollit c', '44', 'Security Gard', '2016-03-22', '2020-02-03', 1, '1637043080_b5030f023d0e7daf1efe.png', 0, '2021-11-16 06:10:49', '2021-11-16 06:11:20'),
(2, 'Oscar Knight', 'gyfe@mailinator.com', 'Pa$$w0rd!', '+1 (142) 512-6719', 'Repudiandae recusand', 'Ad distinctio Et co', 'Ut sint in duis magn', 'Pion', '1974-11-29', '1976-06-26', 1, '', 0, '2021-11-16 06:12:03', '2021-11-16 06:12:03'),
(3, 'Drake Bullock', 'kulivufofa@mailinator.com', 'Pa$$w0rd!', '+1 (602) 572-7261', 'Fuga Pariatur Quo ', 'Alias ut velit natu', 'Deleniti in duis dol', 'Moderator', '1982-03-20', '1998-03-21', 1, '', 17, '2021-11-18 08:49:29', '2021-11-18 08:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_owner_id` int(11) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_owner_id`, `status`) VALUES
(1, 1, 1),
(2, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `comtitle` varchar(50) NOT NULL,
  `comdescription` text NOT NULL,
  `comdate` varchar(20) NOT NULL,
  `comperson` int(5) NOT NULL,
  `comstatus` varchar(30) NOT NULL,
  `comsolution` text NOT NULL,
  `comass` varchar(100) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `comtitle`, `comdescription`, `comdate`, `comperson`, `comstatus`, `comsolution`, `comass`, `property_id`, `created_at`, `updated_at`) VALUES
(7, 'Molestias magna aut ', 'Ipsum voluptatem Co', '2021-11-16', 1, 'In progress', '', '18', 0, '2021-11-16 09:34:50', '2021-11-16 09:35:48'),
(8, 'Fugiat deserunt et ', 'Et qui est sint tene', '2021-11-16', 1, 'Completed', '', '19', 0, '2021-11-16 09:36:00', '2021-11-16 09:36:12'),
(9, 'Eligendi soluta accu', 'Ut deserunt aliquid ', '2021-11-16', 1, 'On hold', '', '18', 17, '2021-11-16 09:36:27', '2021-11-18 12:03:59'),
(10, 'Nam a quidem duis mo', 'Ipsum porro quaerat ', '2021-11-18', 1, 'In progress', '', '20', 17, '2021-11-18 09:56:53', '2021-11-18 12:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(100) NOT NULL,
  `symbol` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `symbol`, `name`, `property_id`) VALUES
(7, '£', 'euro', 17),
(8, '$', 'dolar', 17);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `present_address` varchar(500) NOT NULL,
  `parmanent_address` varchar(500) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `join_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `salary_per_month` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `contact_no`, `present_address`, `parmanent_address`, `nid`, `designation`, `join_date`, `end_date`, `salary_per_month`, `status`, `image`, `property_id`) VALUES
(18, 'Kaka', 'Kaka@gmail.com', '123456', '01789653214', 'Dhaka', 'Dhaka', '123456', 'Secretary General', '2021-11-14', '2021-11-16', '15000', 'Active', '1636897041_cae8565435d0129b53d5.png', 0),
(19, 'kaka 3', 'kaka2@gmail.com', '123456', '01256984589', 'khulna', 'khulna', '3333334', 'Moderator', '2021-11-17', '2021-11-25', '20000', 'Active', 'empty_image.jpg', 0),
(20, 'Cecilia Robertson', 'pure@mailinator.com', 'Pa$$w0rd!', 'Ut quia ut harum est', 'Aut aut dolor non qu', 'Error enim do ab tem', 'Voluptate dolore tem', 'Maker', '1995-06-09', '2009-08-19', '3000', 'Leave', '1637158675_2ea784f53a2430d46037.png', 17),
(21, 'Guinevere Oliver', 'legiq@mailinator.com', 'Pa$$w0rd!', 'Quia cillum quia ven', 'Officiis quae eaque ', 'Libero sed aliquid s', 'Voluptate ut laborum', 'Caretaker', '2011-02-17', '2016-09-02', '20000', 'Active', '1637209268_eca92e2c31b8671e9832.png', 17);

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `id` int(100) NOT NULL,
  `employee_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `salary_per_month` double(10,2) NOT NULL,
  `issue_date` varchar(100) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`id`, `employee_id`, `name`, `designation`, `month`, `year`, `salary_per_month`, `issue_date`, `property_id`) VALUES
(18, 18, 'Kaka', 'Secretary General', 'October', '2021', 15000.00, '2021-11-16', 0),
(19, 19, 'kaka2', 'Moderator', 'November', '2021', 20000.00, '2021-11-16', 0),
(21, 21, 'Guinevere Oliver', 'Caretaker', 'February', '2019', 20000.00, '2021-11-18', 17),
(22, 20, 'Cecilia Robertson', 'Maker', 'February', '2022', 3000.00, '2021-11-18', 17);

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` int(11) NOT NULL,
  `floorno` varchar(50) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floorno`, `property_id`, `created_at`, `updated_at`) VALUES
(5, '1st floor', 0, '2021-11-14 12:48:05', '2021-11-14 12:48:05'),
(6, '2nd floor', 0, '2021-11-14 12:48:19', '2021-11-14 12:48:19'),
(7, '3rd floor', 0, '2021-11-14 12:48:30', '2021-11-14 12:48:30'),
(8, '4th floor', 0, '2021-11-14 12:48:51', '2021-11-14 12:48:51'),
(9, '6th Floor edit', 17, '2021-11-17 11:13:49', '2021-11-17 11:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` int(100) NOT NULL,
  `owner_id` int(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_image` varchar(500) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `issue_date` varchar(100) NOT NULL,
  `total_amount` double(10,2) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `owner_id`, `owner_name`, `owner_image`, `month`, `year`, `issue_date`, `total_amount`, `purpose`, `property_id`) VALUES
(14, 34, 'shukriti', '1636896266_ee4969864b3043b87340.png', 'January', '2021', '2021-11-16', 20000.00, 'nothing !!', 0),
(15, 35, 'rafi', '1636896335_750daf0c29ff6b7c0cd4.png', 'January', '2019', '2021-11-16', 999.00, 'nI', 0),
(16, 36, 'Nazmul', '1636896395_711d0288075319c80468.png', 'May', '2020', '2021-11-16', 11111.00, 'NI', 0),
(17, 37, 'Vance Burt', 'empty_image.jpg', 'February', '2021', '2021-11-18', 200.00, 'gf gtghh', 0),
(20, 45, 'Wyoming Dale', 'empty_image.jpg', 'July', '2022', '1987-06-14', 0.00, 'Nesciunt facilis su', 17);

-- --------------------------------------------------------

--
-- Table structure for table `mailsms`
--

CREATE TABLE `mailsms` (
  `id` int(11) NOT NULL,
  `maildate` varchar(20) NOT NULL,
  `mailsub` varchar(50) NOT NULL,
  `mailmess` text NOT NULL,
  `mailtenant` varchar(20) DEFAULT '',
  `mailemployee` varchar(20) DEFAULT '',
  `mailowner` varchar(20) DEFAULT '',
  `schedule` varchar(20) NOT NULL,
  `mailmesstype` varchar(20) NOT NULL,
  `mailstatus` int(5) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mailsms`
--

INSERT INTO `mailsms` (`id`, `maildate`, `mailsub`, `mailmess`, `mailtenant`, `mailemployee`, `mailowner`, `schedule`, `mailmesstype`, `mailstatus`, `created_at`, `updated_at`) VALUES
(33, '25/11/21', 'Invoice Print', 'Hi {receiver_name}\r\n\r\nYour request for reset password has been approved from {app_name}. Press the button below to reset the password.\r\n\r\nReset Password\r\n\r\nWe are highly expecting you as soon as possible. Hope you\'ll join us.\r\n\r\nThanks for being with us.\r\n\r\nThanks & Regards,\r\n\r\n{app_name}', NULL, '0', NULL, '2021-11-25', 'email', 1, '2021-11-25 11:49:39', '2021-11-25 13:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `mailsmsdatas`
--

CREATE TABLE `mailsmsdatas` (
  `id` int(11) NOT NULL,
  `dmailname` varchar(50) NOT NULL,
  `dmailemail` varchar(40) NOT NULL,
  `dmailphone` varchar(20) NOT NULL,
  `dmailsubject` varchar(50) NOT NULL,
  `dmailmessage` text NOT NULL,
  `dmailstatus` int(5) NOT NULL,
  `dmailtype` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mailsmsdatas`
--

INSERT INTO `mailsmsdatas` (`id`, `dmailname`, `dmailemail`, `dmailphone`, `dmailsubject`, `dmailmessage`, `dmailstatus`, `dmailtype`, `created_at`, `updated_at`) VALUES
(43, 'Kaka', 'Kaka@gmail.com', '01789653214', 'Invoice Print', 'Hi {receiver_name}\r\n\r\nYour request for reset password has been approved from {app_name}. Press the button below to reset the password.\r\n\r\nReset Password\r\n\r\nWe are highly expecting you as soon as possible. Hope you\'ll join us.\r\n\r\nThanks for being with us.\r\n\r\nThanks & Regards,\r\n\r\n{app_name}', 0, 'email', '2021-11-25 13:35:59', '2021-11-25 13:35:59'),
(44, 'kaka 3', 'kaka2@gmail.com', '01256984589', 'Invoice Print', 'Hi {receiver_name}\r\n\r\nYour request for reset password has been approved from {app_name}. Press the button below to reset the password.\r\n\r\nReset Password\r\n\r\nWe are highly expecting you as soon as possible. Hope you\'ll join us.\r\n\r\nThanks for being with us.\r\n\r\nThanks & Regards,\r\n\r\n{app_name}', 0, 'email', '2021-11-25 13:36:00', '2021-11-25 13:36:00'),
(45, 'Cecilia Robertson', 'pure@mailinator.com', 'Ut quia ut harum est', 'Invoice Print', 'Hi {receiver_name}\r\n\r\nYour request for reset password has been approved from {app_name}. Press the button below to reset the password.\r\n\r\nReset Password\r\n\r\nWe are highly expecting you as soon as possible. Hope you\'ll join us.\r\n\r\nThanks for being with us.\r\n\r\nThanks & Regards,\r\n\r\n{app_name}', 0, 'email', '2021-11-25 13:36:00', '2021-11-25 13:36:00'),
(46, 'Guinevere Oliver', 'legiq@mailinator.com', 'Quia cillum quia ven', 'Invoice Print', 'Hi {receiver_name}\r\n\r\nYour request for reset password has been approved from {app_name}. Press the button below to reset the password.\r\n\r\nReset Password\r\n\r\nWe are highly expecting you as soon as possible. Hope you\'ll join us.\r\n\r\nThanks for being with us.\r\n\r\nThanks & Regards,\r\n\r\n{app_name}', 0, 'email', '2021-11-25 13:36:00', '2021-11-25 13:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` int(11) NOT NULL,
  `maindate` varchar(20) NOT NULL,
  `mainmonth` varchar(20) NOT NULL,
  `mainyear` varchar(20) NOT NULL,
  `maintitle` varchar(50) NOT NULL,
  `mainamount` double(10,2) NOT NULL,
  `maindetails` text NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintenances`
--

INSERT INTO `maintenances` (`id`, `maindate`, `mainmonth`, `mainyear`, `maintitle`, `mainamount`, `maindetails`, `property_id`, `created_at`, `updated_at`) VALUES
(1, '2021-11-18', '3', '2020', 'title 1', 111111.00, 'gtyhrty b rtr y53t', 17, '2021-11-18 08:16:44', '2021-11-18 08:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `meeissuedate` varchar(20) NOT NULL,
  `meetitle` varchar(50) NOT NULL,
  `meedescription` text NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `meeissuedate`, `meetitle`, `meedescription`, `property_id`, `created_at`, `updated_at`) VALUES
(5, '2021-11-19', 'title1', '<p>hello world</p>', 17, '2021-11-18 10:08:47', '2021-11-18 10:09:07'),
(6, '1992-08-08', 'Fugiat iste consecte', '<p>sdfgasd</p>', 17, '2021-11-21 11:22:48', '2021-11-21 11:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `membersetups`
--

CREATE TABLE `membersetups` (
  `id` int(11) NOT NULL,
  `membertype` varchar(50) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membersetups`
--

INSERT INTO `membersetups` (`id`, `membertype`, `property_id`, `created_at`, `updated_at`) VALUES
(6, 'member2', 17, '2021-11-18 13:52:33', '2021-11-18 13:53:10'),
(7, 'mem', 1, '2021-11-18 13:52:41', '2021-11-18 13:52:55'),
(8, 'www', 17, '2021-11-20 05:22:30', '2021-11-20 05:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2021-10-30-091114', 'App\\Database\\Migrations\\Useraccounts', 'default', 'App', 1635658759, 1),
(6, '2021-10-31-052620', 'App\\Database\\Migrations\\Poperties', 'default', 'App', 1635658760, 1),
(7, '2021-11-25-083440', 'App\\Database\\Migrations\\Mailsmsdatas', 'default', 'App', 1637829741, 2);

-- --------------------------------------------------------

--
-- Table structure for table `monthsetups`
--

CREATE TABLE `monthsetups` (
  `id` int(11) NOT NULL,
  `monthname` varchar(20) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monthsetups`
--

INSERT INTO `monthsetups` (`id`, `monthname`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 'January', 17, '2021-11-11 13:07:53', '2021-11-17 12:00:19'),
(2, 'February', 17, '2021-11-11 13:08:03', '2021-11-17 12:00:19'),
(3, 'March', 17, '2021-11-11 13:08:10', '2021-11-17 12:00:19'),
(4, 'April', 17, '2021-11-11 13:08:19', '2021-11-18 13:56:24'),
(5, 'May', 17, '2021-11-11 13:08:25', '2021-11-17 12:00:19'),
(6, 'June', 17, '2021-11-11 13:08:30', '2021-11-17 12:00:19'),
(7, 'July', 17, '2021-11-11 13:08:36', '2021-11-17 12:00:19'),
(8, 'Auguest', 17, '2021-11-11 13:08:43', '2021-11-17 12:00:19'),
(9, 'September', 17, '2021-11-11 13:08:53', '2021-11-17 12:00:19'),
(10, 'October', 17, '2021-11-11 13:09:02', '2021-11-17 12:00:19'),
(11, 'November', 17, '2021-11-11 13:09:09', '2021-11-17 12:00:19'),
(12, 'December', 17, '2021-11-11 13:09:16', '2021-11-17 12:00:19'),
(14, 'rgrfgtret', 16, '2021-11-18 13:55:15', '2021-11-18 13:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `notice_type` int(100) NOT NULL,
  `text_area` varchar(5000) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `date`, `status`, `notice_type`, `text_area`, `property_id`) VALUES
(5, 'notice 1', '22-22-2344', 0, 1, '<p>please always be quiet..</p>', 0),
(6, 'fff', '31-May-2009', 1, 2, '<p>hello world</p>', 17),
(7, 'Non incididunt dolor', '31-May-2009', 1, 3, '<p>hello world</p>', 17);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `mailsub` text DEFAULT NULL,
  `mailbody` text DEFAULT NULL,
  `mailtags` text DEFAULT NULL,
  `systags` varchar(1000) DEFAULT NULL,
  `syscontent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `mailsub`, `mailbody`, `mailtags`, `systags`, `syscontent`) VALUES
(1, 'User invitation formm {app_name}', '                                                                      <p><img src=\"http://property_final.com/uploads/avater.png\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\"></p><p>Hi {receiver_name}</p>\r\n\r\n          <p>Hope this mail finds you well and healthy. We are informing you that you\'ve been invited to our application by {action_by}. It\'ll be a great opportunity to work with you.</p>\r\n          <p><button class=\"btn btn-primary btn-sm\">Accept Invitation</button></p>\r\n\r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p><p></p>                                           ', 'action_by,app_name,app_logo,receiver_name,invitation_url', NULL, NULL),
(2, 'Password reset link provided by {app_name}', '                               \r\n          <p>Hi {receiver_name}</p>\r\n\r\n          <p>Your request for reset password has been approved from {app_name}. Press the button below to reset the password.</p>\r\n          <p><a href=\"{link}\" class=\"btn btn-primary btn-sm\">Reset Password</a></p>\r\n          <p>We are highly expecting you as soon as possible. Hope you\'ll join us.</p>\r\n          <p>Thanks for being with us.</p>\r\n\r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p>                                   ', 'app_name,app_logo,receiver_name,reset_password_url', NULL, NULL),
(3, 'You have been invited to join {app_name} by {action_by}', '                                    <p><img src=\"http://property_final2.com/uploads/empty_image.jpg\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\"><br></p>                                       <p class=\"text_add\"><br></p>      \r\n          <p>Hello {receiver_name}</p>\r\n\r\n          <p>Your Login credentials are given,\r\n          Email : {email}\r\n          Password : {password}\r\n          To set up your account, please use these credentials and go to the following link.</p>\r\n\r\n          <p><button class=\"btn btn-primary btn-sm\">Go to your account</button></p>\r\n          <p>You can change your password from your account password settings.</p>\r\n          <p>Hope you will find useful!</p>\r\n          <p>Thanks for being with us.</p>\r\n          <p>Regards,</p>  \r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p>                                    ', 'action_by,app_name,app_logo,receiver_name,invitation_url,email,password', NULL, NULL),
(4, 'Invoice {invoice_number} for due {date}', '                                            <p class=\"text_add\"><img src=\"#\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\">{invoice_number}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n          <p>Hello {receiver_name}</p>\r\n\r\n          <p>I hope you’re well!\r\n          Please see attached invoice {invoice_number}.\r\n          Don’t hesitate to contact us if you have any questions.</p>\r\n\r\n          <p>Thanks for being with us.</p>\r\n\r\n          <p>Regards,</p>  \r\n\r\n          <p>{app_name}</p>                           ', 'app_name,app_logo,receiver_name,invoice_number,date', NULL, NULL),
(5, 'Payment reminder for invoice {invoice_number}', '                                      <p class=\"text_add\">{app_name}{date}{receiver_name}<img src=\"#\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\">{date}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n          <p>Hello {receiver_name}</p>\r\n\r\n          <p>We hope that you’re enjoying our service\r\n          We did want to quickly mention that we haven’t received payment from you yet.</p>\r\n          <p>If you have any questions don’t hesitate to reply to this email.</p>\r\n          <p>Thanks for being with us.</p>\r\n\r\n          <p>Regards,</p>  \r\n\r\n          <p>{app_name}</p>                        ', 'app_name,app_logo,receiver_name,invoice_number,date', NULL, NULL),
(6, 'A new user has been joined in {app_name}', '<p><img src=\"http://property_final.com/uploads/avater.png\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\"></p><p>Hi {receiver_name}</p>\r\n\r\n          <p>Hope this mail finds you well and healthy. We are informing you that you\'ve been invited to our application by {action_by}. It\'ll be a great opportunity to work with you.</p>\r\n          <p><button class=\"btn btn-primary btn-sm\">Accept Invitation</button></p>\r\n\r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p><p></p> ', 'name,action_by,app_name,app_logo,receiver_name,resource_url', 'app_name', 'A new user has been joined in {app_name}{app_name}'),
(7, 'A new roles has been created in {app_name}', '                    <p>{name}{name}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n            <p>Hi {receiver_name}</p>\r\n\r\n            <p>It\'s a piece of good news that a new roles named {name} has been created in our application by {action_by}. Please have a look at that.</p>\r\n\r\n            <p><button class=\"btn btn-primary btn-sm\">View Roles</button></p>\r\n            <p>Thanks for being with us.</p>\r\n\r\n            <p>Regards,</p>  \r\n\r\n            <p>{app_name}</p>                   ', 'name,action_by,app_name,app_logo,receiver_name,resource_url', 'name,action_by', 'A new roles named {name} has been created by {action_by}.'),
(8, 'A roles has been updated in {app_name}', '                    <p>{name}{name}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n            <p>Hi {receiver_name}</p>\r\n\r\n            <p>It\'s a piece of good news that a new roles named {name} has been created in our application by {action_by}. Please have a look at that.</p>\r\n\r\n            <p><button class=\"btn btn-primary btn-sm\">View Roles</button></p>\r\n            <p>Thanks for being with us.</p>         ', 'name,action_by,app_name,app_logo,receiver_name,resource_url', 'name,action_by', 'A roles named {name} has been updated by {action_by}.'),
(9, 'A roles has been deleted in {app_name}', '          <p class=\"text_add\">{name}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n            <p>Hi {receiver_name}</p>\r\n\r\n            <p>We are going to inform you that a roles named has been deleted from our application by {action_by}.</p>\r\n\r\n            <p>Thanks for being with us.</p>\r\n\r\n            <p>Regards,</p>  \r\n\r\n            <p>{app_name}</p>         ', 'name,action_by,app_name,app_logo,receiver_name', 'name,action_by', 'A roles named {name} has been deleted by {action_by}.');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `present_address` varchar(500) NOT NULL,
  `parmanent_address` varchar(500) NOT NULL,
  `nid` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `name`, `email`, `password`, `contact_no`, `present_address`, `parmanent_address`, `nid`, `image`, `property_id`) VALUES
(34, 'shukriti', 'shukriti@gmail.com', '111111', '01782782217', 'bonosri', 'bonosri', 6221345, '1636896266_ee4969864b3043b87340.png', 0),
(35, 'rafi', 'rafi@gmail.com', '12345', '123456', 'gulisthan', 'gulisthan', 2345, '1636896335_750daf0c29ff6b7c0cd4.png', 0),
(36, 'Nazmul', 'nazmul@gmail.com', '123456', '54321', 'demra', 'demra', 456654, 'empty_image.jpg', 0),
(40, 'Sandra Cash', 'dupobate@mailinator.com', 'Pa$$w0rd!', 'Aliquam laborum vero', 'Et autem quibusdam e', 'Odit dolor est ipsa', 2222, 'empty_image.jpg', 17),
(45, 'Wyoming Dale', 'sibizybili@mailinator.com', 'Pa$$w0rd!', 'Est quo perferendis', 'Blanditiis cupiditat', 'Quia corporis laboru', 0, 'empty_image.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `owners_utility`
--

CREATE TABLE `owners_utility` (
  `id` int(100) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `water_bill` varchar(100) NOT NULL,
  `electric_bill` varchar(100) NOT NULL,
  `gas_bill` varchar(100) NOT NULL,
  `security_bill` varchar(100) NOT NULL,
  `utility_bill` varchar(100) NOT NULL,
  `others_bill` varchar(100) NOT NULL,
  `total_rent` varchar(100) NOT NULL,
  `issue_date` varchar(1000) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners_utility`
--

INSERT INTO `owners_utility` (`id`, `floor_id`, `unit_id`, `owner_name`, `owner_id`, `month`, `year`, `water_bill`, `electric_bill`, `gas_bill`, `security_bill`, `utility_bill`, `others_bill`, `total_rent`, `issue_date`, `property_id`) VALUES
(17, 9, 0, 'Sandra Cash', 40, 'February', 2022, '0.00', '0.00', '800', '900', '0.00', '333', '2033', '55-55-51', 17);

-- --------------------------------------------------------

--
-- Table structure for table `owner_to_unit`
--

CREATE TABLE `owner_to_unit` (
  `id` int(100) NOT NULL,
  `unit_id` int(100) NOT NULL,
  `unit_name` varchar(500) NOT NULL,
  `owner_id` int(100) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_to_unit`
--

INSERT INTO `owner_to_unit` (`id`, `unit_id`, `unit_name`, `owner_id`, `property_id`) VALUES
(102, 19, 'Unit  6B edit', 45, 17),
(103, 20, 'Unit 6C', 45, 17);

-- --------------------------------------------------------

--
-- Table structure for table `popertieimages`
--

CREATE TABLE `popertieimages` (
  `id` int(11) NOT NULL,
  `popertyid` int(5) NOT NULL,
  `multiimage` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `poperties`
--

CREATE TABLE `poperties` (
  `id` int(11) NOT NULL,
  `propertyname` varchar(50) NOT NULL,
  `streetads` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `owner` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poperties`
--

INSERT INTO `poperties` (`id`, `propertyname`, `streetads`, `city`, `state`, `zip`, `country`, `owner`, `image`, `company_id`, `created_at`, `updated_at`) VALUES
(12, 'Rogan Riddle', 'Non aut nisi cupidit', 'Doloribus cupiditate', 'Est cupidatat sit ', '19554', 'BH', 1, '1637138553_06c6aae9e6078cc73c31.png', 2, '2021-11-17 08:42:33', '2021-11-17 08:42:33'),
(13, 'Hedy Hooper', 'Adipisicing commodo ', 'In do aute qui ut of', 'Omnis tempor sit ma', '36009', 'AZ', 1, '1637139435_54d5833465a4b05d3e9f.png', 4, '2021-11-17 08:57:15', '2021-11-17 08:57:15'),
(14, 'Isaiah Carpenter', 'Expedita sit at atq', 'Voluptatibus quae co', 'Molestiae ut consequ', '45299', 'BD', 1, '1637139454_9d58305e0767abe2adb9.png', 5, '2021-11-17 08:57:34', '2021-11-17 08:57:34'),
(15, 'Oren Savage', 'Odio quia voluptatem', 'Dolores iure quas vo', 'Doloremque id repreh', '78973', 'KH', 1, '1637141320_039e3449bd5c1f177867.png', 6, '2021-11-17 09:28:40', '2021-11-17 09:28:40'),
(16, 'Emi Duncan', 'Maxime possimus ill', 'Voluptate sunt conse', 'Autem mollit impedit', '24470', 'AZ', 1, '1637142218_ade168a1964afa915fae.png', 7, '2021-11-17 09:43:38', '2021-11-17 09:43:38'),
(17, 'Clark Russo', 'Vero tempora velit ', 'Id duis possimus of', 'Minima dolor ab dolo', '91824', 'AZ', 1, '1637142268_388cb0cd2f97f6eba3e2.png', 8, '2021-11-17 09:44:28', '2021-11-17 09:44:28'),
(18, 'Clark Russo', 'Vero tempora velit ', 'Id duis possimus of', 'Minima dolor ab dolo', '91824', 'AZ', 1, '1637142326_2c215d3b34770d71a65b.png', 9, '2021-11-17 09:45:26', '2021-11-17 09:45:26'),
(19, 'Knox Stephenson', 'Dolorem dolor cumque', 'Consequatur praesent', 'In ullamco recusanda', '33922', 'AZ', 1, '1637142481_ec1692530a077ab2c452.png', 10, '2021-11-17 09:48:01', '2021-11-17 09:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(100) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `renter_name` varchar(100) NOT NULL,
  `tenent_id` int(100) NOT NULL,
  `tenent_image` varchar(500) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `water_bill` varchar(100) NOT NULL,
  `gas_bill` varchar(100) NOT NULL,
  `electric_bill` varchar(100) NOT NULL,
  `security_bill` varchar(100) NOT NULL,
  `utility_bill` varchar(100) NOT NULL,
  `other_bill` varchar(100) NOT NULL,
  `total_rent` varchar(100) NOT NULL,
  `issue_date` varchar(100) NOT NULL,
  `bill_paid_date` varchar(100) NOT NULL,
  `bill_status` int(100) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `floor_id`, `unit_id`, `month`, `year`, `renter_name`, `tenent_id`, `tenent_image`, `rent`, `water_bill`, `gas_bill`, `electric_bill`, `security_bill`, `utility_bill`, `other_bill`, `total_rent`, `issue_date`, `bill_paid_date`, `bill_status`, `property_id`) VALUES
(12, 9, 19, 'March', '2020', 'Yasir Daniel', 9, '', '400', '333', '0.00', '800', '900', '0.00', '0.00', '2033', '2021-11-18', '2021-11-16', 0, 17),
(13, 9, 20, 'March', '2020', 'Myra Frye', 8, '1637157937_a51cacf2edafc25b8d53.png', '800', '33', '0.00', '800', '900', '0.00', '0.00', '1733', '2021-11-18', '2021-11-16', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(3) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `sgroup` varchar(100) NOT NULL,
  `svalue` text NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sname`, `sgroup`, `svalue`, `property_id`) VALUES
(1, 'utilitybill', 'utilitybillsetup', '{\"gas_bill\":\"1111\",\"security_bill\":\"1\",\"property_id\":\"17\"}', 17),
(2, 'language', 'system', '{\"language\":\"English\"}', 17),
(4, 'email', 'system', '{\"mail_option\":\"smtp\",\"smtp_hostname\":\"mail.therssoftware.com\",\"smtp_username\":\"newest@therssoftware.com\",\"smtp_password\":\"PLJZQwjHq2b%\",\"smtp_post\":\"465\",\"smtp_secure\":\"ssl\"}', 17),
(5, 'sms', 'system', '{\"clickAtell_username\":\"ffff\",\"clickAtell_password\":\"Pa$$w0rd!2\",\"clickAtell_api_key\":\"Aliqua Dicta deseru2\"}', 17),
(8, 'currency', 'system', '{\"currency\":\"$\",\"currency_separator\":\".\",\"currency_position\":\"right\",\"currency_decimal\":\"2\",\"image\":\"1637241863_fb3550cbc3555a5fa001.png\"}', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `tename` varchar(50) NOT NULL,
  `teemail` varchar(40) NOT NULL,
  `tepass` varchar(30) NOT NULL,
  `tecontrctno` varchar(20) NOT NULL,
  `teads` varchar(50) NOT NULL,
  `tenid` varchar(20) NOT NULL,
  `floorno` varchar(50) NOT NULL,
  `unitno` varchar(50) NOT NULL,
  `teadvancerent` double(10,2) NOT NULL,
  `terentpermonth` varchar(20) NOT NULL,
  `teissuedate` varchar(20) NOT NULL,
  `terentmonth` varchar(20) NOT NULL,
  `terentyear` varchar(20) NOT NULL,
  `testatus` int(5) NOT NULL,
  `teownerphoto` varchar(50) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `tename`, `teemail`, `tepass`, `tecontrctno`, `teads`, `tenid`, `floorno`, `unitno`, `teadvancerent`, `terentpermonth`, `teissuedate`, `terentmonth`, `terentyear`, `testatus`, `teownerphoto`, `property_id`, `created_at`, `updated_at`) VALUES
(3, 'Aidan Alford', 'dejumarify@mailinator.com', 'Pa$$w0rd!', '01789562145', 'Soluta at est ducimu', 'Velit tempor rem ver', '5', '', 0.00, '9', '2014-12-10', '', '', 1, '', 0, '2021-11-16 06:48:19', '2021-11-25 09:16:50'),
(4, 'Riley Tucker', 'xihe@mailinator.com', 'Pa$$w0rd!', '01965231568', 'Vero ipsum aut pari', 'Voluptatem reprehen', '7', '', 0.00, '9', '2014-09-16', 'April', '2019', 0, '1637045331_43f8bb86f158ab528c63.png', 0, '2021-11-16 06:48:51', '2021-11-25 09:17:00'),
(5, 'Clio Small', 'dyva@mailinator.com', 'Pa$$w0rd!', '01965231568', 'Tempora hic et id do', 'Vitae at impedit do', '6', '', 0.00, '10', '2020-04-04', '', '', 1, '', 0, '2021-11-16 06:49:12', '2021-11-25 09:17:20'),
(6, 'Dustin Hill', 'juhymogovo@mailinator.com', 'Pa$$w0rd!', '01965231568', 'Fugiat earum laboris', 'Voluptates voluptate', '6', 'Unit 2A', 0.00, '8', '2014-09-28', '', '', 1, '', 0, '2021-11-16 10:07:23', '2021-11-25 09:17:26'),
(7, 'Dai Dennis', 'sytyb@mailinator.com', 'Pa$$w0rd!', '01965231568', 'Ullam nostrud qui et', 'Animi vel minim ut ', '8', '', 0.00, '1', '2013-05-13', '', '', 1, '', 0, '2021-11-16 10:08:01', '2021-11-25 09:17:32'),
(8, 'Myra Frye', 'razuryzur@mailinator.com', 'Pa$$w0rd!', '01965231568', 'Quasi non sit commo', 'Accusantium est labo', '9', 'Unit 6C', 0.00, '800', '2015-05-22', 'February', '2019', 1, '1637157937_a51cacf2edafc25b8d53.png', 17, '2021-11-17 14:05:37', '2021-11-25 09:17:37'),
(9, 'Yasir Daniel', 'hiwug@mailinator.com', 'Pa$$w0rd!', '01965231568', 'Aliquam cupidatat et', 'Dolor atque consequa', '9', 'Unit  6B edit', 0.00, '400', '1973-07-11', 'February', '2022', 1, '', 17, '2021-11-18 04:38:17', '2021-11-25 09:17:43'),
(10, 'Garth Garcia', 'nikeha@mailinator.com', 'Pa$$w0rd!', '01965231568', 'Ullamco omnis eos c', 'Magni quaerat labore', '9', 'Unit 6C', 0.00, '300', '2017-06-01', 'January', '2019', 1, '', 17, '2021-11-18 04:38:42', '2021-11-25 09:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `floorid` int(5) NOT NULL,
  `unitno` varchar(50) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `floorid`, `unitno`, `property_id`, `created_at`, `updated_at`) VALUES
(10, 5, 'Unit 1A', 0, '2021-11-14 12:49:28', '2021-11-14 12:49:28'),
(11, 5, 'Unit 1B', 0, '2021-11-14 12:49:46', '2021-11-14 12:49:46'),
(12, 6, 'Unit 2A', 0, '2021-11-14 12:50:20', '2021-11-14 12:50:20'),
(13, 6, 'Unit 2B', 0, '2021-11-14 12:50:35', '2021-11-14 12:50:35'),
(14, 7, 'Unit 3A', 0, '2021-11-14 12:50:50', '2021-11-14 12:50:50'),
(15, 7, 'Unit 3B', 0, '2021-11-14 12:51:04', '2021-11-14 12:51:04'),
(16, 8, 'Unit 4A', 0, '2021-11-14 12:51:19', '2021-11-14 12:51:19'),
(17, 8, 'Unit 4B', 0, '2021-11-14 12:51:36', '2021-11-14 12:51:36'),
(18, 9, 'Unit 6A', 0, '2021-11-17 11:20:04', '2021-11-17 11:20:04'),
(19, 9, 'Unit  6B edit', 17, '2021-11-17 11:22:16', '2021-11-17 11:22:31'),
(20, 9, 'Unit 6C', 17, '2021-11-17 13:34:13', '2021-11-17 13:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passresttoken` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `user_type` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `rememberkey` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `passresttoken`, `branch`, `type`, `user_type`, `image`, `company_id`, `rememberkey`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '121212', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 2, 0, '', 1, '', '2021-11-13 04:27:16', '2021-11-20 06:18:39'),
(4, 'Hadley Griffin', 'jira@mailinator.com', 'Recusandae Ut aute ', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 0, 0, '', 0, '', '2021-11-10 14:08:48', '2021-11-17 07:30:06'),
(5, 'Marsden Green', 'keveli@mailinator.com', 'Placeat ut facilis ', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 0, 0, '', 0, '', '2021-11-10 14:12:09', '2021-11-17 05:05:38'),
(6, 'Lucy Mcdowell', 'qasapuh@mailinator.com', 'Neque beatae est ne', 'Pa$$w0rd!', '', '', 0, 0, '', 0, '', '2021-11-10 14:12:53', '2021-11-16 12:59:11'),
(7, 'Lee Travis4', 'qogawizewi4@mailinator.com', '11111111', '222', '', '8', 0, 0, '1636618283_f4890ec8bed217f5a34d.png', 0, '', '2021-11-11 05:07:17', '2021-11-16 12:59:16'),
(9, 'Emmanuel Stokes', 'heruva@mailinator.com', 'Totam ad anim amet ', 'Pa$$w0rd!', '', '8', 0, 2, '1637069162_822d2b95765976a93987.png', 0, '', '2021-11-16 13:26:02', '2021-11-16 13:26:41'),
(10, 'Colton Oneill', 'qaxan@mailinator.com', 'Iste nobis voluptate', 'Pa$$w0rd!', '', '7', 1, 4, 'empty_image.jpg', 1, '', '2021-11-17 07:10:59', '2021-11-17 07:10:59'),
(11, 'Chastity Odonnell', 'mesyzafy@mailinator.com', 'Aperiam ratione numq', 'Pa$$w0rd!', '', '7', 1, 2, 'empty_image.jpg', 1, '', '2021-11-17 07:12:40', '2021-11-17 07:12:40'),
(12, 'Kenneth Clemons', 'pago@mailinator.com', 'Pariatur Nostrum en', 'Pa$$w0rd!', '', '7', 2, 5, 'empty_image.jpg', 0, '', '2021-11-17 07:18:28', '2021-11-17 07:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `type_id` int(100) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`type_id`, `type_name`) VALUES
(2, 'Admin'),
(3, 'Owner'),
(4, 'Employee'),
(5, 'Tenent');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `visientrydate` varchar(30) NOT NULL,
  `visiname` varchar(50) NOT NULL,
  `visimobile` varchar(20) NOT NULL,
  `visiads` text NOT NULL,
  `floorid` int(5) NOT NULL,
  `unitid` varchar(500) NOT NULL,
  `visiintime` varchar(20) NOT NULL,
  `visiouttime` varchar(20) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `visientrydate`, `visiname`, `visimobile`, `visiads`, `floorid`, `unitid`, `visiintime`, `visiouttime`, `property_id`, `created_at`, `updated_at`) VALUES
(16, '2021-11-14', 'Freya Cantrell', 'Ut irure officiis qu', '                                                                                        Aliquid pariatur Te                                                                                ', 8, 'Unit 4B', 'Aut eveniet nulla e', 'Molestiae et ea dolo', 0, '2021-11-16 08:24:14', '2021-11-16 08:41:03'),
(17, '2021-11-16', 'rafi', 'Sed deserunt laboris', '                                                                                                                                    Tempora libero tenet                                                                                                                        ', 5, 'Unit 1B', 'Consectetur praesen', 'Consectetur reprehe', 0, '2021-11-16 08:33:29', '2021-11-16 08:40:43'),
(18, '2021-10-16', 'Henry Duffy', 'Quaerat do est ut ve', '                                                                                        Dolor incidunt temp                                                                                ', 6, 'Unit 2B', 'Nulla aliquip exerci', 'Recusandae Fugit s', 17, '2021-11-16 08:41:24', '2021-11-18 12:01:15'),
(19, '2021-11-18', 'ffffffffff', 'Non doloribus ut atq', '                                            Nam fugiat magna aut                                        ', 9, 'Unit 6C', 'Enim iste quidem bla', 'Cillum deserunt dolo', 17, '2021-11-18 10:03:49', '2021-11-18 11:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `property_id`) VALUES
(1, 2021, 17),
(2, 2022, 17),
(3, 2019, 17),
(4, 2020, 17),
(6, 2017, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billsetups`
--
ALTER TABLE `billsetups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_diposit`
--
ALTER TABLE `bill_diposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailsms`
--
ALTER TABLE `mailsms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailsmsdatas`
--
ALTER TABLE `mailsmsdatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membersetups`
--
ALTER TABLE `membersetups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthsetups`
--
ALTER TABLE `monthsetups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `owners_utility`
--
ALTER TABLE `owners_utility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_to_unit`
--
ALTER TABLE `owner_to_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popertieimages`
--
ALTER TABLE `popertieimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poperties`
--
ALTER TABLE `poperties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billsetups`
--
ALTER TABLE `billsetups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bill_diposit`
--
ALTER TABLE `bill_diposit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mailsms`
--
ALTER TABLE `mailsms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mailsmsdatas`
--
ALTER TABLE `mailsmsdatas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `membersetups`
--
ALTER TABLE `membersetups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `monthsetups`
--
ALTER TABLE `monthsetups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `owners_utility`
--
ALTER TABLE `owners_utility`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `owner_to_unit`
--
ALTER TABLE `owner_to_unit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `popertieimages`
--
ALTER TABLE `popertieimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `poperties`
--
ALTER TABLE `poperties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `type_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
