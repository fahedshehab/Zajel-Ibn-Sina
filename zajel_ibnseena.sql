-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2013 at 08:07 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zajel_ibnseena`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `course_id`) VALUES
('arabic', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE IF NOT EXISTS `student1` (
  `first_name` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `second_name` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `third_name` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `last_name` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `id_student` int(100) NOT NULL,
  `password` int(111) NOT NULL,
  `phone_number` int(151) NOT NULL,
  `city` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `cell_number` int(15) NOT NULL,
  `street` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `e_mail` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `first_exam` int(11) NOT NULL,
  `second_exam` int(11) NOT NULL,
  `final_exam` int(11) NOT NULL,
  `Absences` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `date` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id_student`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`first_name`, `second_name`, `third_name`, `last_name`, `id_student`, `password`, `phone_number`, `city`, `cell_number`, `street`, `e_mail`, `course_id`, `first_exam`, `second_exam`, `final_exam`, `Absences`, `note`, `age`, `date`) VALUES
('fahed', 'naief', 'mohammad', 'shehab', 11108403, 595085608, 92382677, 'nablus', 595085608, 'nablus', 'fahed.shehab@hotmail.com', 3, 0, 0, 0, 0, '', 20, '12/1/1993');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `first_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `third_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(10) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `city` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `street` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `cell_number` int(11) NOT NULL,
  `e_mail` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `date` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id_teacher`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`first_name`, `second_name`, `third_name`, `last_name`, `id_teacher`, `password`, `course_id`, `city`, `street`, `phone_number`, `cell_number`, `e_mail`, `age`, `date`) VALUES
('fahed', 'naief', 'mohammad', 'shehab', 12345, 12345, 3, '', '', 0, 0, '', 0, ''),
('kkkkf', 'fff', 'ffffff', 'ffffff', 22222, 22222, 3, 'ggggg', 'gggggg', 55555555, 555555, 'hhhhhhhhhhh', 0, ''),
('mohammad', 'naief', 'moneer', 'sharaf', 55555, 44444, 3, 'jeneen', 'ibn roshod', 599157766, 2147483647, 'mohammad.sharaf@hotmail.com', 30, '15/3/1983');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);
