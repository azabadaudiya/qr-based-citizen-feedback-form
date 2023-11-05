-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2023 at 07:00 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21486209_qr_feedbackform`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `FEEBACK_ID` int(20) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `OFFICER_NAME` varchar(50) NOT NULL,
  `PS_NAME` varchar(50) NOT NULL,
  `option1` longtext NOT NULL,
  `option2` longtext NOT NULL,
  `option3` text NOT NULL,
  `description` text NOT NULL,
  `AUDIO` text NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`FEEBACK_ID`, `CITY`, `OFFICER_NAME`, `PS_NAME`, `option1`, `option2`, `option3`, `description`, `AUDIO`, `DATE_TIME`) VALUES
(1, 'Ahmedabad', 'D.J Sosa', 'Amraiwadi Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'Good officer , helps alot and respect others', '20231030224839.mp3', '2023-10-30 17:18:39'),
(2, 'Bharuch', 'R.J Prajapati ', 'Ankleshwar City Police Station', 'Missing Kidnapping', 'Report filed and copy give', 'Yes', 'Good experience with the officers ', '20231101201022.', '2023-11-01 20:10:22'),
(3, 'Bharuch', 'R.M Shah', 'Ankleshwar City Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'Qq', '20231101214635.', '2023-11-01 21:46:35'),
(4, 'Bharuch', 'R.M Shah', 'Ankleshwar City Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'Qq', '20231101214635.', '2023-11-01 21:46:35'),
(5, 'Anand', 'AZABA', 'Anand Town Police Station', 'Corruption', 'Report filed and copy give', 'Yes', 'AZABA', '20231102124015.', '2023-11-02 12:40:15'),
(6, 'Ahmedabad', 'FN', 'Gayakwad Police Station', 'Missing Kidnapping', 'Report filed and copy give', 'Yes', '', '20231103210339.mp3', '2023-11-03 21:03:39'),
(7, 'Aravalli', 'DEMO', 'Bayad Police Station', 'Corruption', 'Report filed and copy give', 'Yes', 'DEMO', '20231103210602.mp3', '2023-11-03 21:06:02'),
(8, 'Amreli', 'ABC', 'Lathi Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'GOOD', '20231103211332.', '2023-11-03 21:13:32'),
(9, 'Banaskantha', 'DEMO2', 'Agthala Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'DWMO 2', '20231103211714.', '2023-11-03 21:17:14'),
(10, 'Anand', 'DEMO3', 'Bhalej Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'DEMO 3', '20231103212043.mp3', '2023-11-03 21:20:43'),
(11, 'Anand', 'DEMO3', 'Bhalej Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'DEMO 3', '20231103212101.mp3', '2023-11-03 21:21:01'),
(12, 'Aravalli', 'DEMO4', 'Isari Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'DEMO 4', '20231103212225.mp3', '2023-11-03 21:22:25'),
(13, 'Aravalli', 'DEMO4', 'Isari Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'DEMO 4', '20231103212341.mp3', '2023-11-03 21:23:41'),
(14, 'Ahmedabad', 'DEMO 5', 'Bapunagar Police Station', 'Women related crimes domestic violence', 'Report filed and copy give', 'No', 'description demo 4', '20231103214004.mp3', '2023-11-03 21:40:04'),
(15, 'Ahmedabad', 'Abc', 'Ghatlodiya Police Station', 'Women related crimes domestic violence', 'FIR registered and copy given', 'No', '', '20231103221245.', '2023-11-03 22:12:45'),
(16, 'Amreli', 'Demo 5', 'Lathi Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'Demo 5', '20231103222257.', '2023-11-03 22:22:57'),
(17, 'Vadodra', 'NA', 'Fatehgunj Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'N/A', '20231103223841.jpg', '2023-11-03 22:38:41'),
(18, 'Ahmedabad', ' DGP', 'Dariyapur Police Station', 'Women related crimes domestic violence', 'FIR registered and copy given', 'No', ' It\'s  nice visit of police station.', '20231103235626.', '2023-11-03 23:56:26'),
(19, 'Bhavnagar', 'Xyz', 'Mahuva Police Station', 'Missing Kidnapping', 'Report filed and copy give', 'No', '', '20231104070522.', '2023-11-04 07:05:22'),
(20, 'Bharuch', 'PQR', 'Palej Police Station', 'Corruption', 'Report filed and copy give', 'No', '', '20231104070611.', '2023-11-04 07:06:11'),
(21, 'Anand', 'Jkl', 'Bhalej Police Station', 'Women related crimes domestic violence', '', 'Yes', '', '20231104070655.mp3', '2023-11-04 07:06:55'),
(22, 'Amreli', 'Asd', 'Amreli City Police Station', 'Women related crimes domestic violence', 'FIR registered and copy given', 'No', '', '20231104070745.mp3', '2023-11-04 07:07:45'),
(23, 'Banaskantha', '', 'Agthala Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', '', '20231104070823.mp3', '2023-11-04 07:08:23'),
(24, 'Chhota Udaipur', 'Xcv', 'Rangpur Police Station', 'Corruption', 'Report filed and copy give', 'Yes', '', '20231104070950.', '2023-11-04 07:09:50'),
(25, 'Chhota Udaipur', 'Xcv', 'Rangpur Police Station', 'Corruption', 'Report filed and copy give', 'Yes', '', '20231104071128.mp3', '2023-11-04 07:11:28'),
(26, 'Dang', '', 'Saputara Police Station', 'Missing Kidnapping', 'FIR registered and copy given', 'Yes', '', '20231104071251.jpg', '2023-11-04 07:12:51'),
(27, 'Vadodra', '', 'Fatehgunj Police Station', 'Women related crimes domestic violence', 'Report filed and copy give', 'Yes', '', '20231104071319.', '2023-11-04 07:13:19'),
(28, 'Rajkot', '', 'Bhadala Police Station', 'Online Fraud', 'FIR registered and copy given', 'Yes', '', '20231104071351.', '2023-11-04 07:13:51'),
(29, 'Surat', '', 'Adajan Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', '', '20231104071849.', '2023-11-04 07:18:49'),
(30, 'Junagarh', '', 'B DIvision Police Station', 'Missing Kidnapping', 'FIR registered and copy given', 'No', '', '20231104071915.', '2023-11-04 07:19:15'),
(31, 'Panchmahal', '', 'Kalol Police Station', 'Missing Kidnapping', 'FIR registered and copy given', 'Yes', '', '20231104072225.', '2023-11-04 07:22:25'),
(32, 'Banaskantha', 'Manas Mehta ', 'Agthala Police Station', 'Missing Kidnapping', 'Report filed and copy give', 'Yes', 'Nice', '20231104073418.', '2023-11-04 07:34:18'),
(33, 'Botad', 'Demo', 'Botad Police Station', 'Missing Kidnapping', 'Report filed and copy give', 'No', 'Anything anything', '20231104100403.mp3', '2023-11-04 10:04:03'),
(34, 'Banaskantha', '', 'Agthala Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', '', '20231104101230.', '2023-11-04 10:12:30'),
(35, 'Ahmedabad', 'XYZ', 'Amraiwadi Police Station', 'Women related crimes domestic violence', 'Report filed and copy give', 'No', '', '20231104103327.', '2023-11-04 10:33:27'),
(36, 'Ahmedabad', '', 'Amraiwadi Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'XYZ', '20231104123433.mp3', '2023-11-04 12:34:33'),
(37, 'Ahmedabad', 'R.M Shah', 'Amraiwadi Police Station', 'Online Fraud', 'Report filed and copy give', 'Yes', 'axvd', '20231104155955.mp3', '2023-11-04 15:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ROLE` int(10) NOT NULL,
  `CITY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`id`, `name`, `password`, `email`, `ROLE`, `CITY`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1, ''),
(2, 'azaba', 'azaba', 'azaba@gmail.com', 2, 'Ahmedabad'),
(4, 'kirtan', 'kirtan', 'kirtan@gmail.com', 2, 'surat');

-- --------------------------------------------------------

--
-- Table structure for table `ps_details`
--

CREATE TABLE `ps_details` (
  `ps_id` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `ps_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ps_details`
--

INSERT INTO `ps_details` (`ps_id`, `city`, `area`, `ps_name`) VALUES
(1, 'Ahmedabad', 'Amraiwadi', 'Amraiwadi Police Station'),
(2, 'Ahmedabad', 'Anandnagar', 'Anandnagar Police Station'),
(3, 'Ahmedabad', 'Bapunagar', 'Bapunagar Police Station'),
(4, 'Ahmedabad', 'Chandkheda', 'Chandkheda Police Station'),
(5, 'Ahmedabad', 'Dariyapur', 'Dariyapur Police Station'),
(6, 'Ahmedabad', 'Ellisbridge', 'Ellisbridge Police Station'),
(7, 'Ahmedabad', 'Gayakwad', 'Gayakwad Police Station'),
(8, 'Ahmedabad', 'Ghatlodiya', 'Ghatlodiya Police Station'),
(9, 'Amreli', 'Amreli City', 'Amreli City Police Station'),
(10, 'Amreli', 'Lathi', 'Lathi Police Station'),
(11, 'Amreli', 'Lilia', 'Lilia Police Station'),
(12, 'Amreli', 'Damnagar', 'Damnagar Police Station'),
(13, 'Amreli', 'Vadia', 'Vadia Police Station'),
(14, 'Amreli', 'Vanda', 'Vanda Police Station'),
(15, 'Amreli', 'Rajula', 'Rajula Police Station'),
(16, 'Amreli', 'Dungar', 'Dungar Police Station'),
(17, 'Anand', 'Anand Rural', 'Anand Rural Police Station'),
(18, 'Anand', 'Anand Town', 'Anand Town Police Station'),
(19, 'Anand', 'Anklav', 'Anklav Police Station'),
(20, 'Anand', 'Bhalej', 'Bhalej Police Station'),
(21, 'Anand', 'Borsad Rural', 'Borsad Rural Police Station'),
(22, 'Anand', 'Borsad Town', 'Borsad Town Police Station'),
(23, 'Anand', 'Sojitra', 'Sojitra Police Station'),
(24, 'Aravalli', 'Ambaliyara', 'Ambaliyara Police Station'),
(25, 'Aravalli', 'Bayad', 'Bayad Police Station'),
(26, 'Aravalli', 'Bhiloda', 'Bhiloda Police Station'),
(27, 'Aravalli', 'Isari', 'Isari Police Station'),
(28, 'Aravalli', 'Shamlaji', 'Shamlaji Police Station'),
(29, 'Aravalli', 'Modasa', 'Modasa Police Station'),
(30, 'Banaskantha', 'Agthala', 'Agthala Police Station'),
(31, 'Bharuch', 'Ankleshwar City', 'Ankleshwar City Police Station'),
(32, 'Bharuch', 'Ankleshwar G.I.D.C', 'Ankleshwar G.I.D.C Police Station'),
(33, 'Bharuch', 'Ankleshwar Rural', 'Ankleshwar Rural Police Station'),
(34, 'Bharuch', 'Bharuch Taluka', 'Bharuch Taluka Police Station'),
(35, 'Bharuch', 'Palej', 'Palej Police Station'),
(36, 'Bhavnagar', 'Alang', 'Alang Police Station'),
(37, 'Bhavnagar', 'Alang Marine', 'Alang Marine City Police Station'),
(38, 'Bhavnagar', 'Bagdana', 'Bagdana Police Station'),
(39, 'Bhavnagar', 'Datha', 'Datha Rural Police Station'),
(40, 'Bhavnagar', 'Jesar', 'Jesar Police Station'),
(41, 'Bhavnagar', 'Mahuva', 'Mahuva Police Station'),
(42, 'Botad', 'Barwala', 'Barwala Police Station'),
(43, 'Botad', 'Botad', 'Botad Police Station'),
(44, 'Botad', 'Dhasa', 'Dhasa Police Station'),
(45, 'Botad', 'Gadhada', 'Gadhada Rural Police Station'),
(46, 'Botad', 'Paliyad', 'Paliyad Police Station'),
(47, 'Botad', 'Ranpur', 'Ranpur Police Station'),
(48, 'Chhota Udaipur', 'Bodeli', 'Bodeli Police Station'),
(49, 'Chhota Udaipur', 'Kadval', 'Kadval Police Station'),
(50, 'Chhota Udaipur', 'Karali', 'Karali Police Station'),
(51, 'Chhota Udaipur', 'Kawant', 'Kawant Police Station'),
(52, 'Chhota Udaipur', 'Nasavdi', 'Nasavdi Police Station'),
(53, 'Chhota Udaipur', 'Rangpur', 'Rangpur Police Station'),
(54, 'Dahod', 'Dahod Mahila', 'Dahod Mahila Police Station'),
(55, 'Dahod', 'Dahod Rural', 'Dahod Rural Police Station'),
(56, 'Dahod', 'Fatepura', 'Fatepura Police Station'),
(57, 'Dahod', 'Limdi', 'Limdi Police Station'),
(58, 'Dang', 'Ahwa', 'Ahwa Police Station'),
(59, 'Dang', 'Saputara', 'Saputara Police Station'),
(60, 'Dang', 'Subir', 'Subir Police Station'),
(61, 'Dang', 'Waghai', 'Waghai Police Station'),
(62, 'Devbhoomi Dwarka', 'Bhanvad', 'Bhanvad Police Station'),
(63, 'Devbhoomi Dwarka', 'Kalyanpur', 'Kalyanpur Police Station'),
(64, 'Devbhoomi Dwarka', 'Mithapur', 'Mithapur Police Station'),
(65, 'Devbhoomi Dwarka', 'Dwarka', 'Dwarka Police Station'),
(66, 'Gandhinagar', 'Adalaj', 'Adalaj Police Station'),
(67, 'Gandhinagar', 'Sector 21', 'Sector 21 Police Station'),
(68, 'Gandhinagar', 'Infocity', 'Infocity Police Station'),
(69, 'Gandhinagar', 'Dahegam', 'Dahegam Police Station'),
(70, 'Gandhinagar', 'Pethapur', 'Pethapur Police Station'),
(71, 'Gandhinagar', 'Santej', 'Santej Police Station'),
(72, 'Gir Somnath', 'Kodinar', 'Kodinar Police Station'),
(73, 'Gir Somnath', 'Veraval', 'Veraval Police Station'),
(74, 'Gir Somnath', 'Talala', 'Talala Police Station'),
(75, 'Gir Somnath', 'Una', 'Una Police Station'),
(76, 'Jamnagar', 'City A', 'City A Police Station'),
(77, 'Jamnagar', 'City B', 'City B Police Station'),
(78, 'Jamnagar', 'City C', 'City C Police Station'),
(79, 'Junagarh', 'A DIvision', 'A DIvision Police Station'),
(80, 'Junagarh', 'B DIvision', 'B DIvision Police Station'),
(81, 'Kheda', 'Limbasi', 'Limbasi Police Station'),
(82, 'Kheda', 'Mahila', 'Mahila Police Station'),
(83, 'Kutch', 'Khavda', 'Khavda Police Station'),
(84, 'Kutch', 'Naliya', 'Naliya Police Station'),
(85, 'Mahisagar', 'Bakor', 'Bakor Police Station'),
(86, 'Mahisagar', 'Kadana', 'Kadana Police Station'),
(87, 'Mehsana', 'Mehsana City A Division', 'Mehsana City A Division Police Station'),
(88, 'Mehsana', 'Mehsana City B Division', 'Mehsana City B Division Police Station'),
(89, 'Morbi', 'A Division Morbi City', 'A Division Morbi City Police Station'),
(90, 'Morbi', 'B Division Morbi City', 'B Division Morbi City Police Station'),
(91, 'Narmada', 'Amletha', 'Amletha Police Station'),
(92, 'Narmada', 'Dediapda', 'Dediapda Police Station'),
(93, 'Navsari', 'Bilimora', 'Bilimora Police Station'),
(94, 'Navsari', 'Chikhli', 'Chikhli Police Station'),
(95, 'Panchmahal', 'Halol', 'Halol Police Station'),
(96, 'Panchmahal', 'Kalol', 'Kalol Police Station'),
(97, 'Patan', 'Harij', 'Harij Police Station'),
(98, 'Patan', 'Mahila', 'Mahila Police Station'),
(99, 'Porbandar', 'Ranavav', 'Ranavav Police Station'),
(100, 'Rajkot', 'Bhadala', 'Bhadala Police Station'),
(101, 'Sabarkantha', 'Bayad', 'Bayad Police Station'),
(102, 'Surat', 'Adajan', 'Adajan Police Station'),
(103, 'Surat', 'Dumas', 'Dumas Police Station'),
(104, 'Surat', 'Varachha', 'Varchha Police Station'),
(105, 'Surendranagar', 'Patdi', 'Patdi Police Station'),
(106, 'Tapi', 'Vyara', 'Vyara Police Station'),
(107, 'Vadodra', 'Fatehgunj', 'Fatehgunj Police Station'),
(108, 'Valsad', 'Bhilad', 'Bhilad Police Station'),
(109, 'demo', 'demo', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`FEEBACK_ID`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ps_details`
--
ALTER TABLE `ps_details`
  ADD PRIMARY KEY (`ps_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `FEEBACK_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ps_details`
--
ALTER TABLE `ps_details`
  MODIFY `ps_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
