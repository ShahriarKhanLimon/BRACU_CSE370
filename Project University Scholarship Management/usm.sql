-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 09:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`, `email`) VALUES
(101, 'Sadman Shihab', 'shihab', 'shihab@gmail.com'),
(102, 'Rayhan Rahman', 'ray', 'rayhan@gmail.com'),
(103, 'Keya Bela', 'keya', 'keya@gmail.com'),
(104, 'sadik ahmed', 'sadik', 'sadik@gmail.com'),
(105, 'pial rahman', 'pial', 'pial@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `available_percentage`
--

CREATE TABLE `available_percentage` (
  `category` varchar(100) NOT NULL,
  `percentage` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_percentage`
--

INSERT INTO `available_percentage` (`category`, `percentage`) VALUES
('Freedom Fighter', '50'),
('Merit Based', '100'),
('Merit Based', '25'),
('Merit Based', '50'),
('Merit Based', '75'),
('Sibling ', '50'),
('Spouse', '50');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `admin_id` int(3) NOT NULL,
  `student_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modify`
--

CREATE TABLE `modify` (
  `admin_id` int(3) NOT NULL,
  `registration_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_category`
--

CREATE TABLE `scholarship_category` (
  `category` varchar(100) NOT NULL,
  `submission_deadline` date NOT NULL,
  `CGPA` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship_category`
--

INSERT INTO `scholarship_category` (`category`, `submission_deadline`, `CGPA`) VALUES
('Freedom Fighter', '2022-02-10', '3.85'),
('Merit Based', '2022-02-12', '3.75'),
('Sibling ', '2022-02-11', '3.50'),
('Spouse', '2022-02-10', '3.70');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_form`
--

CREATE TABLE `scholarship_form` (
  `registration_id` int(7) NOT NULL,
  `student_id` int(5) NOT NULL,
  `department` varchar(3) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `percentage` varchar(7) NOT NULL,
  `status` text NOT NULL,
  `reason` text NOT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship_form`
--

INSERT INTO `scholarship_form` (`registration_id`, `student_id`, `department`, `semester`, `category`, `percentage`, `status`, `reason`, `submission_date`) VALUES
(1, 10000, 'CSE', '2021 fall', 'Merit Based', '', 'Pending', '', '2021-09-03'),
(2, 20000, 'MNS', '2022 spring', 'Freedom Fighter', '100', 'Approved', 'Sufficient CGPA ', '2021-09-04'),
(3, 50000, 'PHY', '2020 summer', 'Sibling ', '', 'Pending', '', '2021-05-03'),
(4, 30000, 'CSE', '2021 fall', 'Freedom Fighter', '', 'Pending', '', '2021-09-07'),
(5, 40000, 'CSE', '2021 fall', 'Merit Based', '', 'Pending', '', '2021-09-04'),
(6, 10000, 'CSE', '2021 summer', 'Spouse', '50', 'Approved', 'Enough CGPA & from Spouse category', '2021-05-04'),
(9, 20000, 'MNS', '2019 spring', 'Freedom Fighter', '', 'Declined', 'Not Enough CGPA to meet', '2021-01-06'),
(10, 10000, 'CSE', '2020 fall', 'Merit Based', '75', 'Approved', 'Sufficient CGPA', '2020-09-03'),
(11, 10000, 'CSE', '2020 summer', 'Spouse', '75', 'Approved', 'Enough CGPA & from Spouse category', '2020-05-04'),
(13, 20000, 'MNS', '2020 fall', 'Freedom Fighter', '', 'Pending', '', '2020-09-04'),
(16, 30000, 'CSE', '2021 spring', 'Freedom Fighter', '75', 'Approved', 'Sufficient CGPA', '2021-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `selects`
--

CREATE TABLE `selects` (
  `student_id` int(5) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `CGPA` decimal(3,2) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `CGPA`, `address`, `phone_no`, `password`, `email`) VALUES
(10000, 'shailee', '4.00', 'uttara', '0178', 'shailee', 'shailee@gmail.com'),
(20000, 'Keya', '3.95', 'malibag', '01611', 'keya', 'keya@gmail.com'),
(30000, 'zubair', '4.00', 'mirpur', '01611', 'zubair', 'zubair@gmail.com'),
(40000, 'mahir', '4.00', 'mohakhali', '01711', 'mahir', 'mahir@gmail.com'),
(50000, 'limon', '3.85', 'Banani', '12345', '12345', 'abcd@gmail.com'),
(70000, 'mahir', '4.00', 'mohakhali', '01711', 'mahir', 'mahir@gmail.com'),
(80000, 'mahi', '4.00', 'mohakhali', '01711', 'mahi', 'mahi@gmail.com'),
(90000, 'sara', '3.70', 'mohakhali', '01711203856', 'sara', 'sara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `view/edit`
--

CREATE TABLE `view/edit` (
  `admin_id` int(3) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `available_percentage`
--
ALTER TABLE `available_percentage`
  ADD PRIMARY KEY (`category`,`percentage`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `admin_id` (`admin_id`) USING BTREE;

--
-- Indexes for table `modify`
--
ALTER TABLE `modify`
  ADD KEY `admin_id` (`admin_id`,`registration_id`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `scholarship_category`
--
ALTER TABLE `scholarship_category`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `scholarship_form`
--
ALTER TABLE `scholarship_form`
  ADD PRIMARY KEY (`registration_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `selects`
--
ALTER TABLE `selects`
  ADD KEY `student_id` (`student_id`,`category`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `view/edit`
--
ALTER TABLE `view/edit`
  ADD KEY `admin_id` (`admin_id`,`category`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `scholarship_form`
--
ALTER TABLE `scholarship_form`
  MODIFY `registration_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `available_percentage`
--
ALTER TABLE `available_percentage`
  ADD CONSTRAINT `available_percentage_ibfk_1` FOREIGN KEY (`category`) REFERENCES `scholarship_category` (`category`);

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `modify`
--
ALTER TABLE `modify`
  ADD CONSTRAINT `modify_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `modify_ibfk_2` FOREIGN KEY (`registration_id`) REFERENCES `scholarship_form` (`registration_id`);

--
-- Constraints for table `scholarship_form`
--
ALTER TABLE `scholarship_form`
  ADD CONSTRAINT `scholarship_form_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `scholarship_form_ibfk_2` FOREIGN KEY (`category`) REFERENCES `scholarship_category` (`category`);

--
-- Constraints for table `selects`
--
ALTER TABLE `selects`
  ADD CONSTRAINT `selects_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `selects_ibfk_2` FOREIGN KEY (`category`) REFERENCES `scholarship_category` (`category`);

--
-- Constraints for table `view/edit`
--
ALTER TABLE `view/edit`
  ADD CONSTRAINT `view/edit_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `view/edit_ibfk_2` FOREIGN KEY (`category`) REFERENCES `scholarship_category` (`category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
