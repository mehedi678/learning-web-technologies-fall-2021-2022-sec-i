-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 05:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan_application`
--

CREATE TABLE `loan_application` (
  `first_name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `loan_amount` varchar(30) NOT NULL,
  `nid_no` varchar(20) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_application`
--

INSERT INTO `loan_application` (`first_name`, `email`, `loan_amount`, `nid_no`, `url`) VALUES
('Mehedi hasan Emon', 'hasanemon751@gmail.com', '1111', '12333', 'H:\\xampp\\htdocs\\Basic-Application-Form-master\\uploads\\hasanemon751@gmail.com.docx'),
('Lord Aj', 'raselsarker727352@gmail.c', '1200', '12333336788', 'H:\\xampp\\htdocs\\Basic-Application-Form-master\\uploads\\raselsarker727352@gmail.com.docx'),
('qq', 'raselsarker727352@gmail.c', '1122', '', 'H:\\xampp\\htdocs\\Basic-Application-Form-master\\uploads\\raselsarker727352@gmail.com.docx'),
('Mehedi hasan Emon', 'hasan.emon913@gmail.com', '1200', '', 'H:\\xampp\\htdocs\\Basic-Application-Form-master\\uploads\\hasan.emon913@gmail.com.docx'),
('Mehedi hasan Emon', 'hasanemon751@gmail.com', '12123', '222', 'H:\\xampp\\htdocs\\Basic-Application-Form-master\\uploads\\hasanemon751@gmail.com.docx'),
('Mehedi Hasan Emon', 'mhe360999@gmail.com', '1100', '123237338993404', 'H:\\xampp\\htdocs\\webtech\\E-Banking\\Bank_Loan\\uploads\\mhe360999@gmail.com.pdf'),
('kamal', 'mhe32260999@gmail.com', '110044', '78699609666', 'H:\\xampp\\htdocs\\webtech\\E-Banking\\Bank_Loan\\uploads\\mhe32260999@gmail.com.pdf'),
('Rifat', 'rifat60999@gmail.com', '1200', '78699609666', 'H:\\xampp\\htdocs\\webtech\\E-Banking\\Bank_Loan\\uploads\\rifat60999@gmail.com.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
