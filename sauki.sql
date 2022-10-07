-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2022 at 04:20 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19369351_sauki`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hospitalid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `userid`, `hospitalid`, `datetime`) VALUES
(13, '+2348023866816', '234', '1660065234'),
(16, '+2348023866816', '234', '1660406727'),
(17, '+2348023866816', '234', '1660406894'),
(18, '+2348023866816', '234', '1660406906'),
(22, '+2348023866816', '234', '1660731436'),
(23, '+2348023866816', '726', '1660822094'),
(28, '+2348023866816', '234', '1660822094'),
(29, '+2348023866816', '234', '1660806573'),
(30, '+2348023866816', '234', '1660806853'),
(31, '+2348023866816', '1', '1660809225'),
(32, '+2348023866816', '4', '1660822094'),
(33, '+2348114528985', '234', '1660822094'),
(34, '+2348114528985', '726', '1660822094'),
(35, '+2348023866816', '2', '1660828233'),
(36, '+2348037386998', '3', '1660831710'),
(37, '+2348037386998', '234', '1660831821'),
(38, '+2348023866816', '1', '1660836778'),
(39, '+2348023866816', '1', '1660837117'),
(40, '+2348023866816', '2', '1660839116'),
(41, '+2348023866816', '234', '1660839239'),
(42, '+2348037386998', '336', '1662226668'),
(43, '+2348114528984', '1', '1662238123'),
(44, '+2348114528984', '1', '1662238147'),
(45, '+2348023866816', '1', '1662457634'),
(46, '+2348027245179', '1', '1662473569'),
(47, '+2347067272110', '1', '1662475909'),
(48, '+2348114528984', '1', '1662481841'),
(49, '+2348114528984', '1', '1662481850'),
(50, '+2348023866811', '2', '1662482324'),
(51, '+2348023866811', '1', '1662488714'),
(52, '+2348027245179', '234', '1663663751'),
(53, '+2348037386998', '234', '1664811903'),
(54, '+2348037386998', '234', '1664812158'),
(55, '+2348037386998', '336', '1664812987'),
(56, '+2348037386998', '336', '1664813106'),
(57, '+2348037386998', '234', '1664815938'),
(58, '+2348037386998', '234', '1664817580'),
(59, '+2349061858947', '', '1664884631'),
(60, '+2349061858947', '', '1664885734'),
(61, '+2349061858947', '', '1664885750'),
(62, '+2349061858947', '', '1664885755'),
(63, '+2349061858947', '', '1664885757'),
(64, '+2349061858947', '', '1664885759'),
(65, '+2349061858947', '', '1664885762'),
(66, '+2349061858947', '', '1664885767'),
(67, '+2349061858947', '', '1664885769'),
(68, '+2349061858947', '', '1664885773'),
(69, '+2349061858947', '', '1664885910'),
(70, '+2349061858947', '', '1664885922'),
(71, '+2349061858947', '', '1664885972'),
(72, '+2349061858947', '', '1664886411'),
(73, '+2349061858947', '', '1664886418'),
(74, '+2349061858947', '', '1664886445'),
(75, '+2349061858947', '', '1664886857'),
(76, '+2349061858947', '', '1664887269'),
(77, '+2349061858947', '', '1664887272'),
(78, '+2349061858947', '', '1664887275'),
(79, '+2349061858947', '', '1664887284'),
(80, '+2349061858947', '', '1664887291'),
(81, '+2349061858947', '', '1664887295'),
(82, '+2349061858947', '', '1664887304'),
(83, '+2349061858947', '', '1664887331'),
(84, '+2349061858947', '', '1664887336'),
(85, '+2349061858947', '', '1664887339'),
(86, '+2349061858947', '', '1664887341'),
(87, '+2349061858947', '', '1664887349'),
(88, '+2349061858947', '', '1664887392'),
(89, '+2349061858947', '', '1664887394'),
(90, '+2349061858947', '', '1664887395'),
(91, '+2349061858947', '', '1664887397'),
(92, '+2349061858947', '', '1664887398'),
(93, '+2349061858947', '', '1664887478'),
(94, '+2349061858947', '', '1664887484'),
(95, '+2349061858947', '', '1664887487'),
(96, '+2349061858947', '', '1664887490'),
(97, '+2349061858947', '', '1664887498'),
(98, '+2349061858947', '', '1664887504'),
(99, '+2349061858947', '', '1664887509'),
(100, '+2349061858947', '', '1664887706'),
(101, '+2349061858947', '', '1664887709'),
(102, '+2349061858947', '', '1664887711'),
(103, '+2349061858947', '', '1664887712'),
(104, '+2349061858947', '', '1664887714'),
(105, '+2349061858947', '', '1664887778'),
(106, '+2349061858947', '', '1664887780'),
(107, '+2349061858947', '', '1664887782'),
(108, '+2349061858947', '', '1664888285'),
(109, '+2349061858947', '', '1664888445'),
(110, '+2349061858947', '', '1664888451'),
(111, '+2349061858947', '', '1664888463'),
(112, '+2349061858947', '', '1664888490'),
(113, '+2349061858947', '', '1664888497'),
(114, '+2349061858947', '', '1664888535'),
(115, '+2349061858947', '', '1664888539'),
(118, '+2348037386998', '', '1664906502'),
(119, '+2348037386998', '', '1664906556'),
(120, '+2348037386998', '', '1664907398'),
(121, '+2348023866816', '2', '1664921116'),
(122, '+2348037386998', '2', '1664959790'),
(123, '+2348037386998', '4', '1664960158'),
(124, '+2348037386998', '234', '1664965640'),
(125, '+2348037386998', '234', '1664965715'),
(126, '+2348037386998', '234', '1664965738'),
(127, '+2348037386998', '234', '1664965765'),
(128, '+2348037386998', '234', '1664965773'),
(129, '+2348037386998', '234', '1664965786'),
(130, '+2348037386998', '234', '1664970116');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `hname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hstate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hlg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hpic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hpwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bal` int(200) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hname`, `hstate`, `hlg`, `haddress`, `hpic`, `hpwd`, `hcode`, `dt`, `bal`) VALUES
(0000000001, 'Aminu Kano Teaching Hospital', 'Kano', 'Tarauni', 'Abeokuta', 'aminukano.jfif', 'e10adc3949ba59abbe56e057f20f883e', '234', '1659802953', 59366),
(0000000002, 'Muhammad Buhari Hospital', 'Kano', 'Tarauni', 'Abeokuta', 'buhari.jfif', 'e10adc3949ba59abbe56e057f20f883e', '336', '1659890390', 0),
(0000000003, 'Sir Muhammad Sunusi Hospital', 'Kano', 'Nasarawa', 'Abeokuta', 'sirSunusi.jfif', 'e10adc3949ba59abbe56e057f20f883e', '726', '1660797645', 40000),
(0000000004, 'Murtala Muhammad Hospital', 'Kano', 'fegge', 'Bompai police barracks, Kano', 'murtalamohd.jfif', 'e10adc3949ba59abbe56e057f20f883e', '645', '1660817164', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pending_payments`
--

CREATE TABLE `pending_payments` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hospitalid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `st` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Payment Status',
  `dt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pending_payments`
--

INSERT INTO `pending_payments` (`id`, `userid`, `hospitalid`, `amount`, `description`, `st`, `dt`) VALUES
(1, '+2348023866816', '234', '5500', 'Drugs', '1', '1660407147'),
(4, '+2348114528985', '726', '100', 'Drugs', '0', '1660816163'),
(5, '+2348037386998', '234', '1200', 'Drugs', '1', '1660819140'),
(6, '+2348023866816', '234', '1900', 'Drugs', '1', '1660819834'),
(7, '+2348023866816', '234', '1500', 'Drugs', '1', '1660839158'),
(8, '+234', '234', '', '', '0', '1664816053'),
(9, '+2349076543333', '234', '124', 'sfgh', '0', '1664908013'),
(10, '+2348023866816', '234', '3700', 'Drugs and injection', '0', '1664945087'),
(11, '+2348114528985', '234', '500', 'this book here are for science students', '0', '1664970176');

-- --------------------------------------------------------

--
-- Table structure for table `refs`
--

CREATE TABLE `refs` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `refcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `used` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `refs`
--

INSERT INTO `refs` (`id`, `refcode`, `used`, `dt`) VALUES
(0000000001, '4272374', 'true', '2022-10-04 14:11:32'),
(0000000002, '4272374', 'false', '2022-10-04 14:19:01'),
(0000000003, '4272374', 'false', '2022-10-04 14:45:44'),
(0000000004, '42723740', 'false', '2022-10-04 14:46:30'),
(0000000005, '42723740', 'false', '2022-10-04 14:46:44'),
(0000000006, '42723740', 'false', '2022-10-04 15:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reciever` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sender`, `reciever`, `amount`, `dt`) VALUES
(1, '+2348023866816', '+2348023866816', '122', '2022-08-08 16:03:28'),
(2, '+2348023866816', '+2348114528984', '111', '2022-08-08 16:15:54'),
(3, '+2348023866816', '+2348023866816', '100', '2022-08-17 10:07:48'),
(5, '+2348114528985', '234', '5000', '2022-08-18 12:57:21'),
(6, '+2348114528985', '234', '5000', '2022-08-18 12:57:30'),
(7, '+2348023866816', '+2348037386998', '100', '2022-08-18 14:46:23'),
(8, '+2348023866816', '+2348037386998', '100', '2022-08-18 14:51:14'),
(9, '+2348023866816', '+2348037386998', '100', '2022-08-18 15:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lga` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bal` int(200) DEFAULT 0,
  `tpin` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '4a7d1ed414474e4033ac29ccb8653d9b',
  `st` varchar(255) COLLATE utf8_unicode_ci DEFAULT '1',
  `dt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phone`, `email`, `state`, `lga`, `address`, `gender`, `picture`, `nin`, `language`, `bal`, `tpin`, `st`, `dt`) VALUES
(0000000004, 'faruq hassan', '+2348114528984', '', 'Kano', '', 'ahmadu bello', '', '', '', '1', -928, '', '1', '1659719888'),
(0000000008, 'Ibrahim Hassan Muhammad ', '+2348023866816', '', 'Kano', '', 'unguwa Uku ', '', '', '', '1', -37374, '81dc9bdb52d04dc20036dbd8313ed055', '1', '1659806092'),
(0000000009, 'boyd poundz', '+2348027245179', '', 'Kano', '', 'Ahmadu Bello', '', '', '', '1', 1000, '4a7d1ed414474e4033ac29ccb8653d9b', '', ''),
(0000000013, 'Boyd poundz ', '+2348027245179', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, '1', 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', NULL),
(0000000014, 'Faruq Hassan', '+2348114528985', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, '2', 3000, '4a7d1ed414474e4033ac29ccb8653d9b', '1', NULL),
(0000000015, 'Salma Gambo', '+2348037386998', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, '2', 1004000, '81dc9bdb52d04dc20036dbd8313ed055', '1', NULL),
(0000000016, 'Salma Gambo', '+2348037386999', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, NULL, 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', NULL),
(0000000017, 'Fatima Gambo', '+2348037386997', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, NULL, 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', NULL),
(0000000018, 'Fatima Gambo', '+2348037386996', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, NULL, 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', NULL),
(0000000019, 'Salaha Gambo', '+2349037386998', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, NULL, 10000, '4a7d1ed414474e4033ac29ccb8653d9b', '1', NULL),
(0000000020, 'Eniola Boluogun', '+2348092113111', '', 'Kano', '', 'Santa Clara Court, 1412, Ahmadu Bello Way, Victoria Island, Lagos, Nigeria', '', '', '', '1', 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', '1660839096'),
(0000000021, 'Abba Sani', '+2348089963050', '', 'Kano', '', 'Unguwa Uku', '', '', '', '1', 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', '1662458316'),
(0000000022, 'Mayowa Sunusi', '+2349061858947', NULL, 'Kano', NULL, NULL, NULL, NULL, NULL, NULL, 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', NULL),
(0000000023, 'Prince Achoja', '+2348162224407', '', 'Kano', '', '60 Ahmadu Bello way', '', '', '', '2', 0, '4a7d1ed414474e4033ac29ccb8653d9b', '1', '1664947935');

-- --------------------------------------------------------

--
-- Table structure for table `ussd_requests`
--

CREATE TABLE `ussd_requests` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ussd_requests`
--

INSERT INTO `ussd_requests` (`id`, `phone`, `service`) VALUES
(0000000006, '+2348027245179', 'Medical Assistance'),
(0000000007, '+2348027245179', 'Medical Assistance'),
(0000000008, '+2348027245179', 'QRP'),
(0000000009, '+2347067272110', 'Medical Assistance'),
(0000000010, '+2347067272110', 'QRP'),
(0000000011, '+2347067272110', 'Medical Assistance'),
(0000000012, '+2348114528984', 'QRP'),
(0000000013, '+2348114528984', 'Medical Assistance'),
(0000000014, '+2348023866811', 'Medical Assistance'),
(0000000015, '+2348023866811', 'QRP'),
(0000000016, '+2348114528984', 'Medical Assistance');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `dt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `code`, `amount`, `status`, `dt`) VALUES
(0000000001, '1234567890', '15000', '1', ''),
(0000000002, '112233445566', '1000', '1', '1659802953');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_payments`
--
ALTER TABLE `pending_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refs`
--
ALTER TABLE `refs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ussd_requests`
--
ALTER TABLE `ussd_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pending_payments`
--
ALTER TABLE `pending_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `refs`
--
ALTER TABLE `refs`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ussd_requests`
--
ALTER TABLE `ussd_requests`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
