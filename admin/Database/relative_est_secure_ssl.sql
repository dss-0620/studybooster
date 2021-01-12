-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 07:12 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relative_est_secure_ssl`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowed_users`
--

CREATE TABLE `allowed_users` (
  `unique_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ppi_spi_secure`
--

CREATE TABLE `ppi_spi_secure` (
  `secure_id` int(10) NOT NULL,
  `ppi_val` float NOT NULL,
  `ppi_sem` int(3) NOT NULL,
  `ppi_credits` int(3) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppi_spi_secure`
--

INSERT INTO `ppi_spi_secure` (`secure_id`, `ppi_val`, `ppi_sem`, `ppi_credits`, `user_id`) VALUES
(31, 7.53, 1, 15, 210),
(32, 8, 2, 20, 210),
(33, 7.16, 3, 19, 210),
(40, 7.444, 0, 54, 165),
(45, 8.067, 1, 15, 459),
(47, 8.5, 1, 15, 202),
(48, 8.7, 2, 20, 202),
(49, 7.6, 3, 19, 202),
(50, 7.67, 1, 15, 539),
(51, 7.1, 2, 20, 539),
(52, 6.5, 3, 19, 539);

-- --------------------------------------------------------

--
-- Table structure for table `relative_com_data_val`
--

CREATE TABLE `relative_com_data_val` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(10) NOT NULL,
  `comp_marks` int(3) NOT NULL,
  `subject_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relative_com_data_val`
--

INSERT INTO `relative_com_data_val` (`comp_id`, `comp_name`, `comp_marks`, `subject_id`) VALUES
(1, 'CE', 83, 1),
(2, 'SEE', 90, 1),
(3, 'CE', 68, 2),
(4, 'SEE', 82, 2),
(5, 'CE', 67, 3),
(6, 'LPW', 79, 3),
(7, 'SEE', 50, 3),
(8, 'CE', 73, 4),
(9, 'LPW', 81, 4),
(10, 'SEE', 78, 4),
(11, 'CE', 75, 5),
(12, 'LPW', 81, 5),
(13, 'SEE', 91, 5),
(14, 'CE', 61, 6),
(15, 'SEE', 56, 6),
(16, 'CE', 65, 7),
(17, 'SEE', 81, 7),
(18, 'CE', 70, 8),
(19, 'SEE', 80, 8),
(20, 'CE', 71, 9),
(21, 'LPW', 82, 9),
(22, 'SEE', 57, 9),
(23, 'CE', 74, 10),
(24, 'LPW', 74, 10),
(25, 'SEE', 81, 10),
(26, 'CE', 69, 11),
(27, 'LPW', 85, 11),
(28, 'SEE', 92, 11),
(29, 'CE', 64, 12),
(30, 'SEE', 56, 12),
(31, 'CE', 78, 13),
(32, 'SEE', 76, 13),
(33, 'CE', 77, 14),
(34, 'SEE', 78, 14),
(35, 'CE', 86, 15),
(36, 'LPW', 92, 15),
(37, 'SEE', 65, 15),
(38, 'CE', 71, 16),
(39, 'LPW', 82, 16),
(40, 'SEE', 74, 16),
(41, 'CE', 76, 17),
(42, 'LPW', 84, 17),
(43, 'SEE', 82, 17),
(44, 'CE', 70, 18),
(45, 'SEE', 50, 18),
(46, 'CE', 66, 19),
(47, 'SEE', 73, 19),
(48, 'CE', 69, 20),
(49, 'SEE', 75, 20),
(50, 'CE', 66, 21),
(51, 'LPW', 83, 21),
(52, 'SEE', 60, 21),
(53, 'CE', 68, 22),
(54, 'LPW', 82, 22),
(55, 'SEE', 75, 22),
(56, 'CE', 70, 23),
(57, 'LPW', 79, 23),
(58, 'SEE', 84, 23),
(59, 'CE', 72, 24),
(60, 'SEE', 65, 24),
(61, 'CE', 68, 25),
(62, 'SEE', 53, 25),
(63, 'CE', 50, 26),
(64, 'SEE', 75, 26),
(65, 'CE', 51, 27),
(66, 'LPW', 80, 27),
(67, 'SEE', 48, 27),
(68, 'CE', 71, 28),
(69, 'LPW', 79, 28),
(70, 'SEE', 69, 28),
(71, 'CE', 59, 29),
(72, 'LPW', 82, 29),
(73, 'SEE', 78, 29),
(74, 'CE', 57, 30),
(75, 'SEE', 57, 30),
(76, 'CE', 0, 31),
(77, 'SEE', 0, 31),
(78, 'CE', 0, 32),
(79, 'SEE', 0, 32),
(80, 'CE', 0, 33),
(81, 'LPW', 0, 33),
(82, 'SEE', 0, 33),
(83, 'CE', 0, 34),
(84, 'LPW', 0, 34),
(85, 'SEE', 0, 34),
(86, 'CE', 0, 35),
(87, 'LPW', 0, 35),
(88, 'SEE', 0, 35),
(89, 'CE', 0, 36),
(90, 'SEE', 0, 36),
(91, 'CE', 0, 37),
(92, 'SEE', 0, 37),
(93, 'CE', 0, 38),
(94, 'SEE', 0, 38),
(95, 'CE', 0, 39),
(96, 'LPW', 0, 39),
(97, 'SEE', 0, 39),
(98, 'CE', 0, 40),
(99, 'LPW', 0, 40),
(100, 'SEE', 0, 40),
(101, 'CE', 0, 41),
(102, 'LPW', 0, 41),
(103, 'SEE', 0, 41),
(104, 'CE', 0, 42),
(105, 'SEE', 0, 42),
(106, 'CE', 0, 43),
(107, 'SEE', 0, 43),
(108, 'CE', 0, 44),
(109, 'SEE', 0, 44),
(110, 'CE', 0, 45),
(111, 'LPW', 0, 45),
(112, 'SEE', 0, 45),
(113, 'CE', 0, 46),
(114, 'LPW', 0, 46),
(115, 'SEE', 0, 46),
(116, 'CE', 0, 47),
(117, 'LPW', 0, 47),
(118, 'SEE', 0, 47),
(119, 'CE', 0, 48),
(120, 'SEE', 0, 48),
(121, 'CE', 68, 49),
(122, 'SEE', 79, 49),
(123, 'CE', 73, 50),
(124, 'SEE', 85, 50),
(125, 'CE', 58, 51),
(126, 'LPW', 95, 51),
(127, 'SEE', 55, 51),
(128, 'CE', 61, 52),
(129, 'LPW', 75, 52),
(130, 'SEE', 63, 52),
(131, 'CE', 70, 53),
(132, 'LPW', 77, 53),
(133, 'SEE', 67, 53),
(134, 'CE', 65, 54),
(135, 'SEE', 50, 54),
(136, 'CE', 91, 55),
(137, 'SEE', 99, 55),
(138, 'CE', 76, 56),
(139, 'SEE', 77, 56),
(140, 'CE', 73, 57),
(141, 'LPW', 78, 57),
(142, 'SEE', 58, 57),
(143, 'CE', 71, 58),
(144, 'LPW', 86, 58),
(145, 'SEE', 88, 58),
(146, 'CE', 90, 59),
(147, 'LPW', 88, 59),
(148, 'SEE', 92, 59),
(149, 'CE', 75, 60),
(150, 'SEE', 82, 60),
(151, 'CE', 87, 61),
(152, 'SEE', 86, 61),
(153, 'CE', 82, 62),
(154, 'SEE', 91, 62),
(155, 'CE', 89, 63),
(156, 'LPW', 84, 63),
(157, 'SEE', 69, 63),
(158, 'CE', 72, 64),
(159, 'LPW', 90, 64),
(160, 'SEE', 90, 64),
(161, 'CE', 82, 65),
(162, 'LPW', 88, 65),
(163, 'SEE', 98, 65),
(164, 'CE', 84, 66),
(165, 'SEE', 68, 66),
(166, 'CE', 83, 67),
(167, 'SEE', 85, 67),
(168, 'CE', 83, 68),
(169, 'SEE', 80, 68),
(170, 'CE', 73, 69),
(171, 'LPW', 80, 69),
(172, 'SEE', 77, 69),
(173, 'CE', 72, 70),
(174, 'LPW', 90, 70),
(175, 'SEE', 82, 70),
(176, 'CE', 75, 71),
(177, 'LPW', 82, 71),
(178, 'SEE', 87, 71),
(179, 'CE', 73, 72),
(180, 'SEE', 72, 72),
(181, 'CE', 71, 73),
(182, 'SEE', 83, 73),
(183, 'CE', 73, 74),
(184, 'SEE', 88, 74),
(185, 'CE', 59, 75),
(186, 'LPW', 88, 75),
(187, 'SEE', 71, 75),
(188, 'CE', 71, 76),
(189, 'LPW', 88, 76),
(190, 'SEE', 68, 76),
(191, 'CE', 80, 77),
(192, 'LPW', 88, 77),
(193, 'SEE', 89, 77),
(194, 'CE', 79, 78),
(195, 'SEE', 64, 78),
(196, 'CE', 81, 79),
(197, 'SEE', 74, 79),
(198, 'CE', 72, 80),
(199, 'SEE', 90, 80),
(200, 'CE', 72, 81),
(201, 'LPW', 91, 81),
(202, 'SEE', 72, 81),
(203, 'CE', 80, 82),
(204, 'LPW', 79, 82),
(205, 'SEE', 84, 82),
(206, 'CE', 72, 83),
(207, 'LPW', 86, 83),
(208, 'SEE', 93, 83),
(209, 'CE', 73, 84),
(210, 'SEE', 63, 84),
(211, 'CE', 76, 85),
(212, 'SEE', 84, 85),
(213, 'CE', 81, 86),
(214, 'SEE', 90, 86),
(215, 'CE', 84, 87),
(216, 'LPW', 91, 87),
(217, 'SEE', 67, 87),
(218, 'CE', 77, 88),
(219, 'LPW', 87, 88),
(220, 'SEE', 86, 88),
(221, 'CE', 80, 89),
(222, 'LPW', 89, 89),
(223, 'SEE', 95, 89),
(224, 'CE', 78, 90),
(225, 'SEE', 69, 90),
(226, 'CE', 85, 91),
(227, 'SEE', 82, 91),
(228, 'CE', 78, 92),
(229, 'SEE', 84, 92),
(230, 'CE', 67, 93),
(231, 'LPW', 25, 93),
(232, 'SEE', 68, 93),
(233, 'CE', 79, 94),
(234, 'LPW', 22, 94),
(235, 'SEE', 76, 94),
(236, 'CE', 78, 95),
(237, 'LPW', 19, 95),
(238, 'SEE', 96, 95),
(239, 'CE', 45, 96),
(240, 'SEE', 68, 96),
(241, 'CE', 79, 97),
(242, 'SEE', 80, 97),
(243, 'CE', 87, 98),
(244, 'SEE', 85, 98),
(245, 'CE', 80, 99),
(246, 'LPW', 96, 99),
(247, 'SEE', 73, 99),
(248, 'CE', 69, 100),
(249, 'LPW', 85, 100),
(250, 'SEE', 78, 100),
(251, 'CE', 76, 101),
(252, 'LPW', 93, 101),
(253, 'SEE', 97, 101),
(254, 'CE', 65, 102),
(255, 'SEE', 68, 102),
(256, 'CE', 87, 103),
(257, 'SEE', 85, 103),
(258, 'CE', 79, 104),
(259, 'SEE', 92, 104),
(260, 'CE', 69, 105),
(261, 'LPW', 84, 105),
(262, 'SEE', 74, 105),
(263, 'CE', 76, 106),
(264, 'LPW', 75, 106),
(265, 'SEE', 84, 106),
(266, 'CE', 75, 107),
(267, 'LPW', 82, 107),
(268, 'SEE', 90, 107),
(269, 'CE', 74, 108),
(270, 'SEE', 67, 108),
(271, 'CE', 78, 109),
(272, 'SEE', 88, 109),
(273, 'CE', 57, 110),
(274, 'SEE', 54, 110),
(275, 'CE', 74, 111),
(276, 'LPW', 75, 111),
(277, 'SEE', 65, 111),
(278, 'CE', 78, 112),
(279, 'SEE', 80, 112),
(280, 'CE', 72, 113),
(281, 'SEE', 72, 113),
(282, 'LPW', 87, 114),
(283, 'CE', 67, 115),
(284, 'SEE', 68, 115),
(285, 'CE', 84, 116),
(286, 'SEE', 90, 116),
(287, 'CE', 80, 117),
(288, 'SEE', 92, 117),
(289, 'CE', 77, 118),
(290, 'LPW', 83, 118),
(291, 'SEE', 92, 118),
(292, 'CE', 83, 119),
(293, 'LPW', 85, 119),
(294, 'SEE', 90, 119),
(295, 'CE', 79, 120),
(296, 'LPW', 79, 120),
(297, 'SEE', 97, 120),
(298, 'CE', 88, 121),
(299, 'SEE', 69, 121),
(300, 'CE', 81, 122),
(301, 'SEE', 81, 122),
(302, 'CE', 88, 123),
(303, 'SEE', 81, 123),
(304, 'CE', 84, 124),
(305, 'LPW', 95, 124),
(306, 'SEE', 76, 124),
(307, 'CE', 73, 125),
(308, 'LPW', 81, 125),
(309, 'SEE', 75, 125),
(310, 'CE', 79, 126),
(311, 'LPW', 90, 126),
(312, 'SEE', 86, 126),
(313, 'CE', 71, 127),
(314, 'SEE', 68, 127),
(315, 'CE', 79, 128),
(316, 'SEE', 97, 128),
(317, 'CE', 86, 129),
(318, 'SEE', 97, 129),
(319, 'CE', 79, 130),
(320, 'LPW', 96, 130),
(321, 'SEE', 84, 130),
(322, 'CE', 79, 131),
(323, 'LPW', 92, 131),
(324, 'SEE', 84, 131),
(325, 'CE', 84, 132),
(326, 'LPW', 87, 132),
(327, 'SEE', 97, 132),
(328, 'CE', 84, 133),
(329, 'SEE', 70, 133);

-- --------------------------------------------------------

--
-- Table structure for table `relative_grade_est_data_val`
--

CREATE TABLE `relative_grade_est_data_val` (
  `data_id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `sem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relative_grade_est_data_val`
--

INSERT INTO `relative_grade_est_data_val` (`data_id`, `user_id`, `sem_id`) VALUES
(1, 226, 4),
(2, 202, 4),
(3, 28, 4),
(4, 246, 4),
(5, 165, 4),
(6, 165, 4),
(7, 165, 4),
(8, 165, 4),
(9, 135, 4),
(10, 346, 4),
(11, 167, 4),
(12, 233, 4),
(13, 338, 4),
(14, 351, 4),
(15, 238, 4),
(16, 164, 4),
(17, 235, 4),
(18, 344, 3),
(19, 281, 4),
(20, 529, 4),
(21, 92, 4),
(22, 533, 4);

-- --------------------------------------------------------

--
-- Table structure for table `relative_sub_data_val`
--

CREATE TABLE `relative_sub_data_val` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_credit` int(2) NOT NULL,
  `subject_grade_points` int(2) NOT NULL,
  `result_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relative_sub_data_val`
--

INSERT INTO `relative_sub_data_val` (`subject_id`, `subject_name`, `subject_credit`, `subject_grade_points`, `result_id`) VALUES
(1, 'Discrete Mathematics', 3, 8, 1),
(2, 'Digital Communication', 3, 8, 1),
(3, 'Digital Electronics', 3, 7, 1),
(4, 'Object Oriented Programming', 4, 8, 1),
(5, 'Data Structures & Algo.', 4, 8, 1),
(6, 'Principles of Economics', 2, 7, 1),
(7, 'Discrete Mathematics', 3, 7, 2),
(8, 'Digital Communication', 3, 8, 2),
(9, 'Digital Electronics', 3, 7, 2),
(10, 'Object Oriented Programming', 4, 8, 2),
(11, 'Data Structures & Algo.', 4, 8, 2),
(12, 'Principles of Economics', 2, 7, 2),
(13, 'Discrete Mathematics', 3, 8, 3),
(14, 'Digital Communication', 3, 8, 3),
(15, 'Digital Electronics', 3, 8, 3),
(16, 'Object Oriented Programming', 4, 9, 3),
(17, 'Data Structures & Algo.', 4, 8, 3),
(18, 'Principles of Economics', 2, 7, 3),
(19, 'Discrete Mathematics', 3, 7, 4),
(20, 'Digital Communication', 3, 8, 4),
(21, 'Digital Electronics', 3, 7, 4),
(22, 'Object Oriented Programming', 4, 8, 4),
(23, 'Data Structures & Algo.', 4, 7, 4),
(24, 'Principles of Economics', 2, 8, 4),
(25, 'Discrete Mathematics', 3, 6, 5),
(26, 'Digital Communication', 3, 6, 5),
(27, 'Digital Electronics', 3, 6, 5),
(28, 'Object Oriented Programming', 4, 7, 5),
(29, 'Data Structures & Algo.', 4, 7, 5),
(30, 'Principles of Economics', 2, 6, 5),
(31, 'Discrete Mathematics', 3, 10, 6),
(32, 'Digital Communication', 3, 10, 6),
(33, 'Digital Electronics', 3, 10, 6),
(34, 'Object Oriented Programming', 4, 10, 6),
(35, 'Data Structures & Algo.', 4, 10, 6),
(36, 'Principles of Economics', 2, 10, 6),
(37, 'Discrete Mathematics', 3, 10, 7),
(38, 'Digital Communication', 3, 10, 7),
(39, 'Digital Electronics', 3, 10, 7),
(40, 'Object Oriented Programming', 4, 10, 7),
(41, 'Data Structures & Algo.', 4, 10, 7),
(42, 'Principles of Economics', 2, 10, 7),
(43, 'Discrete Mathematics', 3, 10, 8),
(44, 'Digital Communication', 3, 10, 8),
(45, 'Digital Electronics', 3, 10, 8),
(46, 'Object Oriented Programming', 4, 10, 8),
(47, 'Data Structures & Algo.', 4, 10, 8),
(48, 'Principles of Economics', 2, 10, 8),
(49, 'Discrete Mathematics', 3, 7, 9),
(50, 'Digital Communication', 3, 8, 9),
(51, 'Digital Electronics', 3, 7, 9),
(52, 'Object Oriented Programming', 4, 7, 9),
(53, 'Data Structures & Algo.', 4, 7, 9),
(54, 'Principles of Economics', 2, 7, 9),
(55, 'Discrete Mathematics', 3, 10, 10),
(56, 'Digital Communication', 3, 8, 10),
(57, 'Digital Electronics', 3, 7, 10),
(58, 'Object Oriented Programming', 4, 8, 10),
(59, 'Data Structures & Algo.', 4, 10, 10),
(60, 'Principles of Economics', 2, 8, 10),
(61, 'Discrete Mathematics', 3, 8, 11),
(62, 'Digital Communication', 3, 9, 11),
(63, 'Digital Electronics', 3, 8, 11),
(64, 'Object Oriented Programming', 4, 8, 11),
(65, 'Data Structures & Algo.', 4, 9, 11),
(66, 'Principles of Economics', 2, 9, 11),
(67, 'Discrete Mathematics', 3, 8, 12),
(68, 'Digital Communication', 3, 8, 12),
(69, 'Digital Electronics', 3, 8, 12),
(70, 'Object Oriented Programming', 4, 8, 12),
(71, 'Data Structures & Algo.', 4, 8, 12),
(72, 'Principles of Economics', 2, 8, 12),
(73, 'Discrete Mathematics', 3, 7, 13),
(74, 'Digital Communication', 3, 8, 13),
(75, 'Digital Electronics', 3, 7, 13),
(76, 'Object Oriented Programming', 4, 8, 13),
(77, 'Data Structures & Algo.', 4, 8, 13),
(78, 'Principles of Economics', 2, 8, 13),
(79, 'Discrete Mathematics', 3, 8, 14),
(80, 'Digital Communication', 3, 8, 14),
(81, 'Digital Electronics', 3, 8, 14),
(82, 'Object Oriented Programming', 4, 8, 14),
(83, 'Data Structures & Algo.', 4, 8, 14),
(84, 'Principles of Economics', 2, 8, 14),
(85, 'Discrete Mathematics', 3, 8, 15),
(86, 'Digital Communication', 3, 9, 15),
(87, 'Digital Electronics', 3, 8, 15),
(88, 'Object Oriented Programming', 4, 9, 15),
(89, 'Data Structures & Algo.', 4, 9, 15),
(90, 'Principles of Economics', 2, 9, 15),
(91, 'Discrete Mathematics', 3, 8, 16),
(92, 'Digital Communication', 3, 8, 16),
(93, 'Digital Electronics', 3, 8, 16),
(94, 'Object Oriented Programming', 4, 8, 16),
(95, 'Data Structures & Algo.', 4, 8, 16),
(96, 'Principles of Economics', 2, 6, 16),
(97, 'Discrete Mathematics', 3, 8, 17),
(98, 'Digital Communication', 3, 9, 17),
(99, 'Digital Electronics', 3, 8, 17),
(100, 'Object Oriented Programming', 4, 8, 17),
(101, 'Data Structures & Algo.', 4, 8, 17),
(102, 'Principles of Economics', 2, 8, 17),
(103, 'Discrete Mathematics', 3, 8, 18),
(104, 'Digital Communication', 3, 9, 18),
(105, 'Digital Electronics', 3, 8, 18),
(106, 'Object Oriented Programming', 4, 8, 18),
(107, 'Data Structures & Algo.', 4, 8, 18),
(108, 'Principles of Economics', 2, 8, 18),
(109, 'Applied Maths. for Electrical Engg.', 4, 8, 19),
(110, 'Analog & Digital Electronics', 3, 7, 19),
(111, 'Network Analysis and Syn.', 5, 8, 19),
(112, 'Electromagnetic Field Theory', 4, 9, 19),
(113, 'Signals Systems', 3, 8, 19),
(114, 'Analog & Digital Electr. Lab', 2, 9, 19),
(115, 'Principles of Management', 2, 7, 19),
(116, 'Discrete Mathematics', 3, 8, 20),
(117, 'Digital Communication', 3, 9, 20),
(118, 'Digital Electronics', 3, 9, 20),
(119, 'Object Oriented Programming', 4, 9, 20),
(120, 'Data Structures & Algo.', 4, 8, 20),
(121, 'Principles of Economics', 2, 9, 20),
(122, 'Discrete Mathematics', 3, 8, 21),
(123, 'Digital Communication', 3, 9, 21),
(124, 'Digital Electronics', 3, 8, 21),
(125, 'Object Oriented Programming', 4, 8, 21),
(126, 'Data Structures & Algo.', 4, 9, 21),
(127, 'Principles of Economics', 2, 8, 21),
(128, 'Discrete Mathematics', 3, 8, 22),
(129, 'Digital Communication', 3, 9, 22),
(130, 'Digital Electronics', 3, 9, 22),
(131, 'Object Oriented Programming', 4, 9, 22),
(132, 'Data Structures & Algo.', 4, 9, 22),
(133, 'Principles of Economics', 2, 9, 22);

-- --------------------------------------------------------

--
-- Table structure for table `stored_credits`
--

CREATE TABLE `stored_credits` (
  `credit_id` int(10) NOT NULL,
  `credit_val` int(3) NOT NULL,
  `credit_branch_id` int(3) NOT NULL,
  `credit_sem_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stored_credits`
--

INSERT INTO `stored_credits` (`credit_id`, `credit_val`, `credit_branch_id`, `credit_sem_id`) VALUES
(1, 19, 1, 3),
(2, 20, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowed_users`
--
ALTER TABLE `allowed_users`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `ppi_spi_secure`
--
ALTER TABLE `ppi_spi_secure`
  ADD PRIMARY KEY (`secure_id`);

--
-- Indexes for table `relative_com_data_val`
--
ALTER TABLE `relative_com_data_val`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `relative_grade_est_data_val`
--
ALTER TABLE `relative_grade_est_data_val`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `relative_sub_data_val`
--
ALTER TABLE `relative_sub_data_val`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `stored_credits`
--
ALTER TABLE `stored_credits`
  ADD PRIMARY KEY (`credit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowed_users`
--
ALTER TABLE `allowed_users`
  MODIFY `unique_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppi_spi_secure`
--
ALTER TABLE `ppi_spi_secure`
  MODIFY `secure_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `relative_com_data_val`
--
ALTER TABLE `relative_com_data_val`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `relative_grade_est_data_val`
--
ALTER TABLE `relative_grade_est_data_val`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `relative_sub_data_val`
--
ALTER TABLE `relative_sub_data_val`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `stored_credits`
--
ALTER TABLE `stored_credits`
  MODIFY `credit_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
