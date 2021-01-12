-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 07:10 PM
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
-- Database: `studybooster_getresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `activate_account`
--

CREATE TABLE `activate_account` (
  `action_id` int(5) NOT NULL,
  `action_name` varchar(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `admin_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activate_account`
--

INSERT INTO `activate_account` (`action_id`, `action_name`, `user_id`, `admin_id`) VALUES
(1, 'deactivated', 2, 1),
(2, 'activated', 2, 1),
(3, 'deactivated', 2, 1),
(4, 'activated', 2, 1),
(5, 'activated', 117, 1),
(6, 'deactivated', 5, 1),
(7, 'activated', 5, 1),
(8, 'deactivated', 135, 24),
(9, 'activated', 135, 24),
(10, 'deactivated', 158, 1),
(11, 'activated', 158, 1),
(12, 'activated', 158, 1),
(13, 'deactivated', 158, 24),
(14, 'activated', 158, 24),
(15, 'deactivated', 111, 24),
(16, 'activated', 111, 24),
(17, 'deactivated', 165, 24),
(18, 'activated', 165, 24),
(19, 'deactivated', 165, 24),
(20, 'activated', 165, 24),
(21, 'deactivated', 16, 24),
(22, 'deactivated', 15, 24),
(23, 'activated', 15, 24),
(24, 'activated', 16, 24),
(25, 'deactivated', 158, 1),
(26, 'activated', 158, 2),
(27, 'deactivated', 132, 24),
(28, 'activated', 132, 24),
(29, 'deactivated', 183, 24),
(30, 'deactivated', 16, 24),
(31, 'activated', 16, 24),
(32, 'activated', 183, 24),
(33, 'deactivated', 183, 24),
(34, 'activated', 191, 24),
(35, 'deactivated', 191, 24),
(36, 'activated', 191, 24),
(37, 'activated', 210, 24),
(38, 'deactivated', 210, 24),
(39, 'activated', 210, 24),
(40, 'deactivated', 51, 24),
(41, 'activated', 51, 24),
(42, 'deactivated', 165, 24),
(43, 'activated', 165, 24),
(44, 'deactivated', 256, 24),
(45, 'deactivated', 276, 24),
(46, 'deactivated', 277, 24),
(47, 'deactivated', 278, 24),
(48, 'activated', 3, 1),
(49, 'activated', 88, 1),
(50, 'deactivated', 280, 24),
(51, 'activated', 280, 24),
(52, 'deactivated', 311, 24),
(53, 'deactivated', 286, 24),
(54, 'deactivated', 33, 24),
(55, 'deactivated', 16, 24),
(56, 'deactivated', 22, 24),
(57, 'deactivated', 306, 24),
(58, 'activated', 311, 24),
(59, 'deactivated', 311, 24),
(60, 'deactivated', 165, 24),
(61, 'activated', 165, 24),
(62, 'deactivated', 280, 1),
(63, 'activated', 280, 1),
(64, 'deactivated', 7, 1),
(65, 'activated', 7, 1),
(66, 'deactivated', 152, 1),
(67, 'activated', 152, 1),
(68, 'deactivated', 417, 1),
(69, 'deactivated', 22, 1),
(70, 'deactivated', 19, 1),
(71, 'deactivated', 20, 1),
(72, 'deactivated', 20, 1),
(73, 'activated', 20, 1),
(74, 'activated', 417, 1),
(75, 'activated', 524, 1),
(76, 'deactivated', 537, 24),
(77, 'deactivated', 545, 24),
(78, 'deactivated', 562, 24),
(79, 'deactivated', 561, 24),
(80, 'deactivated', 560, 24),
(81, 'deactivated', 559, 24),
(82, 'deactivated', 554, 24),
(83, 'deactivated', 555, 24),
(84, 'deactivated', 556, 24),
(85, 'deactivated', 557, 24),
(86, 'deactivated', 558, 24),
(87, 'deactivated', 564, 24),
(88, 'deactivated', 565, 24),
(89, 'deactivated', 567, 24);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(1) NOT NULL,
  `category_name` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'CLS'),
(2, 'CS'),
(3, 'L'),
(4, 'C'),
(5, 'CL'),
(6, 'C1LS'),
(7, 'C2');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` int(3) NOT NULL,
  `college_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`) VALUES
(2, 'Institute of technology,Nirma University');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `component_id` int(2) NOT NULL,
  `component_name` varchar(3) NOT NULL,
  `category_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`component_id`, `component_name`, `category_id`) VALUES
(1, 'CE', 1),
(2, 'LPW', 1),
(3, 'SEE', 1),
(4, 'CE', 2),
(5, 'SEE', 2),
(6, 'LPW', 3),
(7, 'CE', 4),
(8, 'CE', 5),
(9, 'LPW', 5),
(10, 'CE1', 6),
(11, 'LP1', 6),
(12, 'SEE', 6),
(13, 'CE2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `feedback_type` varchar(15) NOT NULL,
  `feedback_title` varchar(90) NOT NULL,
  `feedback_text` varchar(300) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_type`, `feedback_title`, `feedback_text`, `user_id`) VALUES
(1, 'Feedback', 'Very Good', 'Excellent! Keep it up', 2),
(2, 'Feedback', 'Hello', 'World', 165),
(3, 'Feedback', 'Hello', 'World', 0),
(4, 'Feature', 'view password icon', 'Password always remains hidden while entering!\r\nA view password icon would help the users to correct their mistake without having to reenter the wholepassword again.', 164),
(5, 'Feedback', 'Good Work..!!!', 'Devansh , amazing work bro. \r\n\r\nKind regards,\r\nTirth HIhoriya', 188),
(6, 'Feedback', 'Feedback', 'Great work, this is very useful site for all the students as it gives an idea of spi , so that one could work accordingly.This should be spread to more students , so that relative grading can come into effect and more students can get benifit.\r\nThanks, keep it up..', 15),
(7, 'Feedback', 'Excellent work..!', 'Nice site bro..!Really like it..ðŸ˜˜', 233),
(8, 'Feedback', 'Saras', 'Ha moj ha!!!!', 224),
(9, 'Feedback', 'urvashi.ramdasani@gmail.com', 'Nice work... Keep it up ðŸ’ªðŸ‘ŒðŸ‘\r\n', 242),
(10, 'Feedback', 'Great Work', 'Awesome website and superbb efforts man !! ðŸ¤˜ðŸ¤˜', 167),
(16, 'Feature', 'Course wise grade', 'Subject wise grade is not included in it. Otherwise, result which is generated is quite accurate.', 11),
(17, 'Feedback', 'question!', 'in the  first sem relative marking. or original marking.and not then this show right', 206),
(18, 'Feature', 'add other college exam pattern', 'in our college the spi are counted on basis on 30 mid sem+ 70 final semester end +50  (viva +assignments+attendance+projects)', 340),
(19, 'Feedback', 'Bahot Mast', 'Keep it up!!! \r\n', 338),
(24, 'Feedback', 'asdij', '<script>alert(1)</script>', 552),
(25, 'Feedback', 'hello1', 'hello2', 554);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(1) NOT NULL,
  `grade_name` varchar(2) NOT NULL,
  `grade_points` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade_name`, `grade_points`) VALUES
(1, 'A+', 10),
(2, 'A', 9),
(3, 'B+', 8),
(4, 'B', 7),
(5, 'C+', 6),
(6, 'C', 5),
(7, 'IF', 0);

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE `online_users` (
  `id` int(5) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_users`
--

INSERT INTO `online_users` (`id`, `session_id`, `time`) VALUES
(1, '1eg2llldmgf7e7mmd8lvbsg9oj', 1560665207),
(2, '5onjajvcm1s5jtl358tbaams64', 1560665395),
(3, '7hfs8r86skapj43o2k3t376mku', 1560665433),
(4, '4k7eg9fjhd42mc8qhpqdsoc2oj', 1560665310),
(5, 'uj6qpchp64q7n85vi85h0gmgov', 1560673990),
(6, '1rib92t3aqui0u9lo809ihvqdv', 1560707414),
(7, 't28p379nd08fjit6gvhd2sj3h3', 1560707409),
(8, 'b51nua40j134nr7kos93l23a51', 1560759354),
(9, 'kdnjgrjpeuu7bga95khbjlvqm7', 1560771624),
(10, 'og80sjd534u21bm0m6j17oomcq', 1560777518),
(11, 'gj80a1bhtejmboeu71es4hp8cm', 1560792222),
(12, 'eeonm1mmu2gg6rf6v28sl4gh1u', 1560832307),
(13, 'ie3t2e2ftn0vpto3sc6ejk8tgv', 1560842981),
(14, 'dli76tvddplmi4cesm7uq552r5', 1560865361),
(15, 'ekok5ftqltt5883k304kdiq35n', 1561273067);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(2) NOT NULL,
  `semester_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth'),
(5, 'Fifth'),
(6, 'Sixth');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(3) NOT NULL,
  `subject_name` varchar(45) NOT NULL,
  `subject_credit` int(1) NOT NULL,
  `college_id` int(5) NOT NULL,
  `branch_id` int(2) NOT NULL,
  `semester_id` int(5) NOT NULL,
  `group_id` int(1) NOT NULL DEFAULT '0',
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_credit`, `college_id`, `branch_id`, `semester_id`, `group_id`, `category_id`) VALUES
(1, 'Discrete Mathematics', 3, 2, 1, 3, 0, 2),
(2, 'Digital Communication', 3, 2, 1, 3, 0, 2),
(3, 'Digital Electronics', 3, 2, 1, 3, 0, 1),
(4, 'Object Oriented Programming', 4, 2, 1, 3, 0, 1),
(5, 'Data Structures & Algo.', 4, 2, 1, 3, 0, 1),
(6, 'Principles of Economics', 2, 2, 1, 3, 0, 2),
(7, 'Probability and Stats.', 3, 2, 1, 4, 0, 1),
(8, 'Computer Architecture', 4, 2, 1, 4, 0, 2),
(9, 'Operating Systems', 4, 2, 1, 4, 0, 1),
(10, 'Prog. For Scientific Comp.', 3, 2, 1, 4, 0, 1),
(11, 'Database Management Systems', 4, 2, 1, 4, 0, 1),
(12, 'Principles of Mana.', 2, 2, 1, 4, 0, 2),
(13, 'Software Engineering', 4, 2, 1, 5, 0, 1),
(14, 'Design & Analysis of Algo.', 4, 2, 1, 5, 0, 1),
(15, 'Computer Networks', 4, 2, 1, 5, 0, 2),
(16, 'Machine Learning', 4, 2, 1, 5, 0, 1),
(17, 'Humanities Elective', 3, 2, 1, 5, 0, 2),
(18, 'Open Elective', 3, 2, 1, 5, 0, 2),
(19, 'Artificial Intelligence', 3, 2, 1, 6, 0, 1),
(20, 'Dept. Elect. 1', 3, 2, 1, 6, 0, 1),
(21, 'Dept. Elect. 2', 3, 2, 1, 6, 0, 1),
(22, 'Dept. Elect. 3', 4, 2, 1, 6, 0, 1),
(23, 'University Elect. ', 3, 2, 1, 6, 0, 2),
(24, 'Database App. Development', 2, 2, 1, 6, 0, 5),
(25, 'Minor Project', 2, 2, 1, 6, 0, 3),
(26, 'Organisational Behaviour', 2, 2, 1, 6, 0, 1),
(27, 'Linear Algebra', 4, 2, 1, 1, 1, 2),
(28, 'Computer Programming', 4, 2, 1, 1, 0, 1),
(29, 'EEEE', 4, 2, 1, 1, 0, 1),
(30, 'EWP', 1, 2, 1, 1, 0, 3),
(31, 'Physics', 4, 2, 1, 1, 0, 1),
(32, 'Environmental Studies', 2, 2, 1, 1, 0, 7),
(33, 'Intro. To Engg.', 1, 2, 1, 1, 2, 4),
(34, 'Calculus and Diff. Eq.', 4, 2, 1, 2, 2, 2),
(35, 'Engineering Graphics', 4, 2, 1, 2, 0, 6),
(36, 'English Communication', 3, 2, 1, 2, 0, 1),
(37, 'Chemistry', 3, 2, 1, 2, 0, 1),
(38, 'Mechanical Workshop', 1, 2, 1, 2, 0, 3),
(39, 'Vector Cal., Complex Var. and Prob. Dist.', 4, 2, 3, 3, 0, 2),
(40, 'Network Theory', 3, 2, 3, 3, 0, 2),
(41, 'Electr. Devices & Circuits', 4, 2, 3, 3, 0, 1),
(42, 'Digital Design Lab.', 1, 2, 3, 3, 0, 3),
(43, 'Digital Logic Design', 4, 2, 3, 3, 0, 2),
(44, 'Signals and Systems', 3, 2, 3, 3, 0, 2),
(45, 'Principles of Economics', 3, 2, 3, 3, 0, 2),
(46, 'Electromagnetics and Wave Propagation', 3, 2, 3, 4, 0, 2),
(47, 'Microprocessors and Microcontrollers', 4, 2, 3, 4, 0, 1),
(48, 'Analog Circuits', 4, 2, 3, 4, 0, 1),
(49, 'Communication Systems', 4, 2, 3, 4, 0, 1),
(50, 'Control Systems', 3, 2, 3, 4, 0, 1),
(51, 'Principles of Management', 2, 2, 3, 4, 0, 2),
(52, 'Electromagnetics Enginnering', 3, 2, 3, 5, 0, 2),
(53, 'Integrated Circuits and Applications', 4, 2, 3, 5, 0, 1),
(54, 'Microprocessor & Computer Arch.', 3, 2, 3, 5, 0, 2),
(55, 'Digital Communication', 4, 2, 3, 5, 0, 1),
(56, 'Department Elective-1 (with Lab)', 4, 2, 3, 5, 0, 1),
(57, 'Microprocessor & Microcontroller Lab', 1, 2, 3, 5, 0, 3),
(58, 'Open Elective-1', 3, 2, 3, 5, 0, 2),
(59, 'Organizational Behaviour', 2, 2, 3, 5, 0, 2),
(60, 'Digital System Design', 4, 2, 3, 6, 0, 1),
(61, 'Data Comm. & Networking', 4, 2, 3, 6, 0, 1),
(62, 'Department Elective-2', 3, 2, 3, 6, 0, 2),
(63, 'Department Elective-3 (with Lab)', 4, 2, 3, 6, 0, 1),
(64, 'Open Elective-2', 3, 2, 3, 6, 0, 2),
(65, 'Minor Project', 2, 2, 3, 6, 0, 3),
(66, 'Embedded System', 4, 2, 3, 7, 0, 1),
(67, 'Department Elective-4', 3, 2, 3, 7, 0, 2),
(68, 'Department Elective-5 (with Lab)', 4, 2, 3, 7, 0, 1),
(69, 'Department Elective-6', 3, 2, 3, 7, 0, 2),
(70, 'Open Elective-3', 3, 2, 3, 7, 0, 2),
(71, 'Major Project', 6, 2, 3, 7, 0, 3),
(72, 'Organic Chemistry', 4, 2, 2, 3, 0, 1),
(73, 'Heat Transfer Operations', 4, 2, 2, 3, 0, 1),
(74, 'Solid Fluid Operations', 4, 2, 2, 3, 0, 1),
(75, 'Fluid Flow Operations', 4, 2, 2, 3, 0, 1),
(76, 'Principles of Mana.', 2, 2, 2, 3, 0, 2),
(77, 'Instrumentation and Process Control', 4, 2, 2, 4, 0, 2),
(78, 'Chemical Process Industries', 4, 2, 2, 4, 0, 1),
(79, 'Process Calculations', 4, 2, 2, 4, 0, 2),
(80, 'Chemical Engg. Thermodynamics', 4, 2, 2, 4, 0, 2),
(81, 'Mass Transfer Operation-1', 4, 2, 2, 4, 0, 1),
(82, 'Principle of Eco.', 2, 2, 2, 4, 0, 2),
(83, 'Material Science', 3, 2, 2, 5, 0, 2),
(84, 'Mass Transfer Operation-1', 4, 2, 2, 5, 0, 1),
(85, 'Instru. and Process Control', 4, 2, 2, 5, 0, 1),
(86, 'Modeling and Simulation', 3, 2, 2, 5, 0, 1),
(87, 'Department Elective-2', 3, 2, 2, 5, 0, 2),
(88, 'Open Elective-1', 3, 2, 2, 5, 0, 2),
(89, 'Organisational Behaviour', 2, 2, 2, 5, 0, 2),
(90, 'Chemical Reaction Engg. -1', 4, 2, 2, 6, 0, 2),
(91, 'Mass Transfer Operations-2', 4, 2, 2, 6, 0, 2),
(92, 'Process Technology & Eco.', 3, 2, 2, 6, 0, 2),
(93, 'Department Elective-3', 3, 2, 2, 6, 0, 2),
(94, 'Department Elective-4', 3, 2, 2, 6, 0, 2),
(95, 'Chemical Engineering Lab.', 2, 2, 2, 6, 0, 3),
(96, 'Minor Project', 2, 2, 2, 6, 0, 3),
(97, 'Applied Maths. for Civil Engg.', 4, 2, 5, 3, 0, 2),
(98, 'Principles of Mana.', 2, 2, 5, 3, 0, 2),
(99, 'Civil Eng. drawing Building Plan.', 3, 2, 5, 3, 0, 1),
(100, 'Structural Mechanics-1', 4, 2, 5, 3, 0, 1),
(101, 'Construction Materials', 4, 2, 5, 3, 0, 1),
(102, 'Surveying', 4, 2, 5, 3, 0, 1),
(104, 'Structural Mechanics-II', 4, 2, 5, 4, 0, 1),
(105, 'Transportation Engineering', 4, 2, 5, 4, 0, 1),
(106, 'Geotechnical Engineering', 3, 2, 5, 4, 0, 1),
(107, 'Fluid Mechanics', 3, 2, 5, 4, 0, 1),
(108, 'Construction Technology', 4, 2, 5, 4, 0, 1),
(109, 'Principles Of Economics', 2, 2, 5, 4, 0, 2),
(110, 'Organizational Behaviour', 2, 2, 5, 5, 0, 2),
(111, 'Foundation Engg.', 4, 2, 5, 5, 0, 1),
(112, 'Design of Concrete Structure', 4, 2, 5, 5, 0, 1),
(113, 'Construction Plant and Equipment', 3, 2, 5, 5, 0, 2),
(114, 'Water Resources and Irrigation', 4, 2, 5, 5, 0, 1),
(115, 'Environmental Engg.', 4, 2, 5, 5, 0, 1),
(116, 'Computational Tools', 1, 2, 5, 5, 0, 3),
(117, 'Design of Steel Structure', 4, 2, 5, 6, 0, 1),
(118, 'Const. and Project Mana.', 4, 2, 5, 6, 0, 1),
(119, 'Department Elective - 1', 4, 2, 5, 6, 0, 1),
(120, 'Department Elective - 2', 3, 2, 5, 6, 0, 2),
(121, 'Department Elective - 3', 3, 2, 5, 6, 0, 2),
(122, 'Open Elective - 1', 3, 2, 5, 6, 0, 2),
(123, 'Minor Project', 2, 2, 5, 6, 0, 3),
(124, 'Applied Maths. for Electrical Engg.', 4, 2, 4, 3, 0, 2),
(125, 'Analog & Digital Electronics', 3, 2, 4, 3, 0, 2),
(126, 'Network Analysis and Syn.', 5, 2, 4, 3, 0, 1),
(127, 'Electromagnetic Field Theory', 4, 2, 4, 3, 0, 2),
(128, 'Signals Systems', 3, 2, 4, 3, 0, 2),
(129, 'Control Systems Engineering', 3, 2, 4, 4, 0, 1),
(130, 'Electrical Measurements and Transducers', 3, 2, 4, 4, 0, 1),
(131, 'Fundamentals of Power System', 4, 2, 4, 4, 0, 2),
(132, 'Transformers and DC Machines', 4, 2, 4, 4, 0, 1),
(133, 'Power Electronic Converters and Applications', 3, 2, 4, 4, 0, 2),
(134, 'Power Electronics Laboratory', 2, 2, 4, 4, 0, 3),
(135, 'Power Sys. Operation and Control', 4, 2, 4, 5, 0, 1),
(136, 'Power Elec. Converters, Drivers & Traction', 4, 2, 4, 5, 0, 1),
(137, 'Digital Signal Process. for Elec. Engg.', 4, 2, 4, 5, 0, 1),
(138, 'Electrical Machine Design', 4, 2, 4, 5, 0, 1),
(139, 'Commi. and Main. of Elect. App. ', 3, 2, 4, 6, 0, 1),
(140, 'Power Sys. Protec. & Switchgear', 5, 2, 4, 6, 0, 1),
(141, 'Organi. Behaviour', 2, 2, 4, 6, 0, 2),
(142, 'Elective-II', 3, 2, 4, 6, 0, 1),
(143, 'Elective-III', 3, 2, 4, 6, 0, 2),
(144, 'Open Elective-II', 3, 2, 4, 6, 0, 2),
(145, 'App. Maths for IC Engg.', 4, 2, 6, 3, 0, 2),
(146, 'Control Theory', 4, 2, 6, 3, 0, 1),
(147, 'Basic Electronics', 4, 2, 6, 3, 0, 1),
(148, 'Microprocessor & Microcontroller', 4, 2, 6, 3, 0, 1),
(149, 'Signals and Systems', 3, 2, 6, 4, 0, 2),
(150, 'Circuit Theory', 3, 2, 6, 3, 0, 1),
(151, 'Electrical and Electronics Measurement', 4, 2, 6, 4, 0, 1),
(152, 'Principles of Eco.', 4, 2, 6, 3, 0, 2),
(153, 'Process Control', 4, 2, 6, 5, 0, 1),
(154, 'Transdu. and Measure.', 4, 2, 6, 5, 0, 1),
(155, 'App. Electronics', 4, 2, 6, 5, 0, 1),
(156, 'Dept. Elective-II', 4, 2, 6, 5, 0, 1),
(157, 'Open Elective-I', 3, 2, 6, 5, 0, 2),
(158, 'Control System Design', 4, 2, 6, 4, 0, 1),
(159, 'Virtual Instru.', 1, 2, 6, 5, 0, 3),
(160, 'Linear Integrated Circuits', 4, 2, 6, 4, 0, 1),
(161, 'Industrial Electronics', 4, 2, 6, 4, 0, 1),
(162, 'Principles of Management', 2, 2, 6, 4, 0, 2),
(163, 'Minor Project', 2, 2, 6, 6, 0, 3),
(164, 'Depart. Elect.-3', 4, 2, 6, 6, 0, 1),
(165, 'Organi. Behaviour', 2, 2, 6, 6, 0, 2),
(166, 'Dept. Elect.-4', 3, 2, 6, 6, 0, 1),
(167, 'Industrial Electronics', 4, 2, 6, 6, 0, 1),
(168, 'Open Elective-II', 3, 2, 6, 6, 0, 2),
(169, 'Virtual Instru. App.', 1, 2, 6, 6, 0, 3),
(170, 'Instru. System', 3, 2, 6, 6, 0, 2),
(171, 'Civil Eng. drawing Building Plan.', 2, 2, 5, 3, 0, 3),
(172, 'Theory of Machines', 4, 2, 7, 3, 0, 1),
(173, 'Mechanics of Solid', 4, 2, 7, 3, 0, 2),
(174, 'Thermodynamics', 3, 2, 7, 3, 0, 2),
(175, 'Material Sci. and Engg.', 4, 2, 7, 3, 0, 1),
(176, 'Manufacturing Processes-I', 4, 2, 7, 3, 0, 2),
(177, 'Principles of Mana.', 2, 2, 7, 3, 0, 2),
(178, 'ICAD', 1, 2, 7, 3, 0, 3),
(179, 'Appl. Maths for Chemical Engg.', 3, 2, 2, 3, 0, 1),
(180, 'Analog & Digital Electr. Lab', 2, 2, 4, 3, 0, 3),
(181, 'Web Technologies', 2, 2, 1, 4, 0, 3),
(182, 'Metrology &  Quality  Control', 4, 2, 7, 4, 0, 1),
(183, 'Fluid Mechanics & Hydraulic Mach.', 4, 2, 7, 4, 0, 1),
(184, 'Manufacturing Processes-II', 4, 2, 7, 4, 0, 1),
(185, 'Dynamics of Machines', 4, 2, 7, 4, 0, 1),
(186, 'Mathematics for Mechanical Engg.', 3, 2, 7, 4, 0, 2),
(187, 'Intro. to Machine Design', 1, 2, 7, 4, 0, 3),
(188, 'Principles of Economics', 2, 2, 7, 4, 0, 2),
(189, 'Principles Of Economics', 2, 2, 4, 4, 0, 2),
(190, 'Principles of Management', 2, 2, 4, 3, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sub_components`
--

CREATE TABLE `sub_components` (
  `sub_component_id` int(2) NOT NULL,
  `sub_component_name` varchar(30) NOT NULL,
  `component_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_components`
--

INSERT INTO `sub_components` (`sub_component_id`, `sub_component_name`, `component_id`) VALUES
(1, 'Class Test', 1),
(2, 'Sessional Exam', 1),
(3, 'Tutorial / Assignment / Test', 1),
(4, 'Lab File', 2),
(5, 'Viva', 2),
(6, 'SEE', 3),
(7, 'Class Test', 4),
(8, 'Sessional Exam', 4),
(9, 'Tutorial / Assignment / Test', 4),
(10, 'SEE', 5),
(11, 'Viva', 6),
(12, 'Lab File', 6),
(13, 'Class Test', 7),
(14, 'Sessional Exam', 7),
(15, 'Tutorial / Assignment / Test', 7),
(16, 'Class Test', 8),
(17, 'Sessional Exam', 8),
(18, 'Tutorial / Assignment / Test', 8),
(19, 'Lab File', 9),
(20, 'Viva', 9),
(21, 'Class Test', 10),
(22, 'Sessional Exam', 10),
(23, 'Term Assignment', 10),
(24, 'Drawing Sheets', 11),
(25, 'AutoCAD Sketch', 11),
(26, 'SEE', 12),
(27, 'Class test', 13),
(28, 'Sessional Exam', 13),
(29, 'Tutorial', 13),
(30, 'Sketch Book', 11),
(31, 'Viva', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `username_id` varchar(30) DEFAULT 'no@^&null',
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(10) NOT NULL DEFAULT 'user',
  `user_account_status` varchar(15) NOT NULL DEFAULT 'active',
  `user_semester_id` int(11) NOT NULL,
  `user_branch_id` int(1) NOT NULL,
  `user_college_id` int(3) NOT NULL,
  `user_group` varchar(1) NOT NULL,
  `storage` int(2) NOT NULL DEFAULT '0',
  `user_registration_date` date NOT NULL,
  `wrong_attemps` int(2) NOT NULL DEFAULT '0',
  `token` varchar(100) NOT NULL,
  `visits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `username`, `username_id`, `user_password`, `user_role`, `user_account_status`, `user_semester_id`, `user_branch_id`, `user_college_id`, `user_group`, `storage`, `user_registration_date`, `wrong_attemps`, `token`, `visits`) VALUES
(3, 'Akshar', 'Kher', 'aksharkher@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(4, 'Deep', 'Chaklasiya', 'deepbchaklasiya1002@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(5, 'Akshit', 'Patel', '18bce011@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 2),
(6, 'SAHIL', 'BHINGRADIA', '18bce027@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 3),
(7, 'Neel', 'Shah', 'shahneel9016@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(8, 'Raj', 'Kanakhara ', 'kanakhararaj2002@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 2, 2, '2', 0, '0000-00-00', 0, '', 1),
(9, 'Pranshu', 'Shah', '19i030@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(10, 'Rohan', 'Modi', 'r.c.m.modi2810@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(11, 'Vasubhai', 'Mavani', '18i064@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 2, '0000-00-00', 0, '', 2),
(12, 'Vivek', 'ZALARIYA', 'vivekzalariya12345@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 2, '0000-00-00', 0, '', 2),
(13, 'Gshsd', '', 'Spydii259@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(14, 'Jddj', 'Hxhx', 'tarobaap@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(15, 'Shivam', '', 'ska18102000@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 8),
(16, '...', '...', '...@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'disabled', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(17, 'Pranav', 'Singh', 'www.parth0507@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '2', 2, '0000-00-00', 0, '', 3),
(18, 'Drumil', 'patel', '19E079@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(19, 'Mewada Ashok ', '', 'godprajapati2000@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'disabled', 4, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(20, 'Parmar ', 'Jaydeep ', '19L033@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(21, 'Hardik', 'Palsanawala', 'hardikpalsanawala@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(22, 'A', 'S', 'hydraalphaclasher@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'disabled', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(23, 'Mihir', 'Soni', '18bec109@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '2', 1, '0000-00-00', 0, '', 1),
(24, 'Devansh', 'Suthar', 'devanshsuthar0612@gmail.com ', 'dss06', '$2y$10$Y1x3QQLOKh/e/WTzn2fAfODEEjzmn1iS3bi2K.COOPqhOz/p6FcIm', 'admin', 'active', 4, 1, 2, '', 0, '0000-00-00', 8, '4fc3b2d6b39fa7a71e08e0c9125617cad7c47bbb677dcd316d8a25c2b91e50f5f6f216213068f72827d5b57795ca61559fa1', 312),
(25, 'Parth', '', 'parthdudhwala125@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(26, 'Ananya', 'Pandey', 'ananyapandey@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 1, '0000-00-00', 0, '', 1),
(27, 'Shrey', 'Modi', '19k034@nirmauni.ac.ib', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 1),
(28, 'Vrajesh', 'Vadi', '18bce250@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 2, '', 7),
(29, 'Divyansh ', 'Rai', 'divyansh.rai00@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(30, 'Purvansh', '', '18bec099@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 2, '0000-00-00', 1, '', 7),
(31, 'Chirag', 'Patel', 'chiragpatel5@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 6, 6, 2, '2', 0, '0000-00-00', 0, '', 1),
(32, 'Dhruv', 'Pathak', 'dhruvpathak132000@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(33, 'J', 'S', 'tpass8388@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'disabled', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(34, 'Urja', 'Shah', '18bcl114@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(35, 'Jay', '', 'jaybhuva5257@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 3, '0000-00-00', 0, '', 2),
(36, 'Saurav', 'Shah', 'sauravshah465@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 2, '0000-00-00', 0, '', 3),
(37, 'Het', 'Shah', '19f050@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(38, 'Akash', 'Lathiya', 'xyz035322@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '', 1, '0000-00-00', 0, '', 1),
(39, 'Mustufa', 'Patel ', 'patelmustufa14@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(40, 'Hardik', 'MISTRY', '18bec057@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 6, '0000-00-00', 0, '', 16),
(41, 'Anshuman ', 'Singh', '19d045@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(42, 'Naman', '', '19a023@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(43, 'Shubham', 'Soni', 'shubhamsoni611@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(44, 'Joy', '', '18e072@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 1, '0000-00-00', 0, '', 1),
(45, 'Harshil', 'Mavani', '18bic030@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 6, 2, '', 0, '0000-00-00', 0, '', 5),
(46, 'Rajdeep', 'Sutariya', 'rajdeep.sutariya@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 1, '0000-00-00', 0, '', 27),
(47, 'Bhavya', 'Patel', 'bhavyapatel1902@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(48, 'Dipkumar', '', '19b027@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(49, 'Udit', 'Modi', 'uuditmodi99@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(50, 'Kandarp', 'Patel', 'kandarppatel848@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(51, 'Harshil ', 'Sanghvi', 'harshil1708@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 4),
(52, 'Parth', 'Patel', 'parthlapani3@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(53, 'Raj', 'Solanki', 'rajsolanki2482001@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(54, 'A', 'M', 'am@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 6, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(55, 'Kanisha', 'Shah', 'shahkanisha23@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(56, 'Madhav', '', 'rathodmadhvendrasinh2307@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 2),
(57, 'Dhara ', 'Harsora ', '19g027@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 16),
(58, 'Devang ', 'Rana', '19f041@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(59, 'Savan', '', '19j036@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(60, 'Sagar', 'Om', 'sagarvanita1980@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 6, 2, '2', 0, '0000-00-00', 0, '', 1),
(61, 'Jaimin', 'Sachapara', 'jaiminpatidar9687@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 2),
(62, 'Dhruvit', '', 'dhruvit.nagar@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(63, 'Yash', 'Tana', '19b067@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(64, 'Miraj', 'Chawda', 'chawdamiraj62@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 5, 2, '1', 1, '0000-00-00', 0, '', 1),
(65, 'Asad', 'MOTORWALA', '19f077@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(66, 'Jenil', 'Patel', '7353.stkabirdin@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(67, 'yash', '', '18bee107@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 6, 4, 2, '', 0, '0000-00-00', 0, '', 33),
(68, 'Dharansh', 'Patel', '18bce053@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 2),
(69, 'Milan', 'Ram', 'ramm71504@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '2', 0, '0000-00-00', 0, '', 1),
(70, 'Aryan', 'Patel', 'aryanbpatel2310@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(73, 'Krishna', 'Thakkar', '19N066@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 15),
(76, 'Meet ', 'Makwana ', 'meetmakwana090@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(77, 'Smit', 'Shah', '19i066@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(78, 'Yash', 'Savani', 'yashsavani1611@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(79, 'Saumya', 'Mehta', '19n052@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 2),
(80, 'Pruthvirajsinh', 'Solanki', '19l068@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 2),
(81, 'Mayur ', 'Bhuva', '17bch008@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 2, 2, '1', 1, '0000-00-00', 0, '', 1),
(82, 'Khushal', 'Asawa', '18ce094@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '2', 1, '0000-00-00', 0, '', 1),
(83, 'Tilak', 'Tejani', 'TILAK.TEJANI@GMAIL.COM', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(84, 'Darshan', '', 'darshanadalaja223@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 2, 2, '1', 0, '0000-00-00', 0, '', 1),
(85, 'Abhi', '', 'abhiraval2611@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 2, '0000-00-00', 0, '', 13),
(86, 'Shivam', 'Padmani', '19k051@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 1),
(87, 'smit', 'pambhar', '19a032@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(88, 'Gaurav', 'Sakariya ', 'gauravsakariya99@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(89, 'Parth', '', 'partht388@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '2', 5, '0000-00-00', 0, '', 19),
(90, 'Tulsi', 'Palan', '18bce141@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(91, 'mann', 'mehta', 'mannmehta3826@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(92, 'Tirth', 'Vamja', '18bce253@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(93, 'Dhwanil', 'Sukhadia', 'dhwanilsukhadia12@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 2),
(94, 'Yatharth', 'Goyal', 'yatharthgoyal18@yahoo.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(95, 'Parth', '', 'perryp2001@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 2),
(96, 'Foram', 'Shah', '19j015@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '2', 0, '0000-00-00', 0, '', 3),
(97, 'sagar', 'parmar', '19L034@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(98, 'Ganesh ', 'Gaitonde', 'ganeshg@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(99, 'Nihar', 'Thakkar', 'niharthakkar45@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '2', 1, '0000-00-00', 0, '', 1),
(100, 'Sunny', 'Mistry', 'sunnymistry2673@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 1, '', 1),
(101, 'Dhairya', 'Dutt', 'dhairyadutt2002@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(102, 'Tanmay', '', '19c023@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(103, 'Bhavin', '', '18bec071@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '', 0, '0000-00-00', 0, '', 1),
(104, 'Karan', 'Chauhan', 'karanchauhan1907@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 2, '0000-00-00', 0, '', 1),
(105, 'Aditya', '', '19D016@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(106, 'Digvijay', '', 'digvijay.zydus@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 2),
(107, 'Himanshu', 'Nakrani', 'himanshunakrani123@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 3, '0000-00-00', 2, '', 1),
(108, 'Trilochan Pratap ', 'Singh', '19h058@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(109, 'Nandni', '', '18f027@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(110, 'Parth', 'Thakkar ', 'thakkar1912@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(111, 'Dhruv', 'Parmar', 'dhruv17moma@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(112, 'Darshan', 'Ramani', 'darshanramani36@gmail.con', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(113, 'Aniket', 'Aniket', '19D035@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(114, 'Sannidhya ', 'Singh', 'sannidhya@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(115, 'Yeshu', 'Puj', 'yeshupuj2002@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '2', 0, '0000-00-00', 0, '', 1),
(116, 'Om odedra', '', '18g035@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 1, '0000-00-00', 0, '', 1),
(117, 'Nisarg', '', 'patelnisarg533@yahoo.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(118, 'Jayraj ', 'Rathod', 'jayrajrathod357@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 3, '0000-00-00', 0, '', 1),
(119, 'Dhruval', 'Patel', 'pateldhruval2310@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 2, 2, '1', 0, '0000-00-00', 0, '', 1),
(120, 'Het ', 'Patel', 'whohet@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(121, 'Visheshgiri', 'Goswami', 'visheshgiri1999@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(122, 'Virag', 'Shah', 'viragcshah@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(123, 'Ridham', 'Radadiya', 'ridham99radadiya@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(124, 'x', '', 'dasd@fsa.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 1, '0000-00-00', 0, '', 1),
(125, 'Dev', '', '18bme031@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(126, 'Patel', 'Rushil', 'patelrushil100@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 6, 2, '', 0, '0000-00-00', 0, '', 2),
(127, 'Khush', 'Shah', 'khushshahj@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(128, 'Dhruvit ', 'Ramani ', 'dhruvitramani1958@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 3),
(129, 'Dhruvit ', 'Ramani ', '19h015@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '2', 1, '0000-00-00', 0, '', 1),
(130, 'Rohan', 'Patel', 'rohanpatel1531@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 6, 2, '1', 1, '0000-00-00', 0, '', 1),
(131, 'Arjun', 'Khunt', '19L015@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(132, 'Utkarsh', '', '17bme114@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 6, 7, 2, '1', 1, '0000-00-00', 0, '', 1),
(133, 'Riya', '', '18bec115@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(134, 'Jaipalsinh', 'Rana', '18f039@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(135, 'Jayraj', 'Vakil', 'jayvakil698@gmail.com', 'jv1312', '$2y$10$GoZCIwVSzNDw2oSBw3mhDe3c4elR2mVbIyLj6ZauD7aWoSVV32RWO', 'user', 'active', 4, 1, 2, '2', 4, '0000-00-00', 0, '', 21),
(143, 'Shah ', '', 'adishah1102@icloud.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 2, 2, '1', 0, '0000-00-00', 0, '', 1),
(144, 'Patel', 'Shivang', 'shivangpatel444@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 1),
(145, 'Barun', 'Debnath', 'barundebnath91@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(147, 'Giriraj singh', 'Chouhan', 'girirajsinghchouhan800@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(149, 'Mahammadasim', '', '18bce261@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 1, '', 1),
(150, 'Magatarapara ', 'Brijesh ', 'magataraparabrijesh82255@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(151, 'Mohak', 'Acharya', '18bce003@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(152, 'Dhruv', '', '19f035@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(153, 'Sagar', 'Samtani', 'samtanisagar2263@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(154, 'Keyur', 'Makani', '19l030@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 2, 2, '2', 0, '0000-00-00', 0, '', 0),
(155, 'Kushal', 'Buch', '18bee044@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(156, 'Heyansh', 'Patel', 'patelheyansh@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(157, 'Kirtan', 'Dobariya', '18bce061@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(158, 'Computer', 'Science', 'computerengineer@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'SD', 4, 1, 2, '1', 1, '0000-00-00', 10, '', 4),
(159, 'Parth', 'Patel', '19a013@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(160, 'Rushi ', 'Patel ', 'tarakpatel8535@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(161, 'Harshit', 'Jain', 'harshitjain0041@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 7, 2, '1', 2, '0000-00-00', 0, '', 4),
(162, 'JEELKUMAR ', 'PATEL ', '18BCL039@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(163, 'Arpit ', '', 'arpitdpsg34@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(164, 'Aakash', 'Shah', 'aakash.shah.2401@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 8),
(165, 'Devansh', 'Suthar', '18bce238@nirmauni.ac.in', 'dss0612', '$2y$10$Zk6w.5ONgOjXd/C1XVQ1QeSCjtKcLxZDHOSKuUZwzOZGHv/VYRUaK', 'user', 'active', 4, 1, 2, '', 1, '0000-00-00', 0, '', 744),
(166, 'Damini ', '', 'Damini.rth@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(167, 'sanket', 'shah', '18bce211@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '', 1, '0000-00-00', 0, '', 6),
(168, 'Gazal', 'Gupta', 'gazalgupta1120@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 2),
(169, 'Modi', 'Ishan', 'ishanmodi13@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 3),
(170, 'Karan', '', '19G063@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(171, 'Chirayu', '', '18bcl022@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(172, 'Param', 'Shah', '19i029@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(173, 'El', '', '19b034@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 0),
(174, 'Rohan', 'Vinod', 'rohan.vinod.35@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(175, 'Fg', 'R', 'parth@gmIl.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 5, 2, '1', 1, '0000-00-00', 0, '', 3),
(177, 'Khyati', 'Chaudhari', '19c002@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 0),
(178, 'Khyati', 'Chaudhari', 'chaudharikhyati9@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 2, '', 1),
(184, 'Jugal', 'Patel', 'jugalpatel753@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(185, 'Divyani', 'Patel', 'divyani12kalal@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(186, 'Deep', '', 'deepkhut@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 6, 2, '2', 1, '0000-00-00', 1, '', 1),
(187, 'Himanshu', 'Nakrani', 'himanshunakrani1@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 20, '0000-00-00', 3, '', 73),
(188, 'Tirth', 'Hihoriya', '18bce244@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(189, 'Moksh', 'Shah', 'moksh.shah2820@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 7, 2, '', 3, '0000-00-00', 0, '', 3),
(190, 'Dhairya', 'Sheth', 'dhairya.sheth.1506@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(191, 'Shubh', 'Shah', '18bce220@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 3, '0000-00-00', 0, '', 6),
(192, 'Yuvraj', 'Chauhan', 'hitenchauhan567@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(193, 'Harshil Shah', '', 'hharshil007@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(194, 'Sunny', 'Mistry', '19n015@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 6, '0000-00-00', 0, '', 4),
(195, 'chand', 'vachhani', 'chandvachhani4441@gmail.com', 'chand_123', '$2y$10$gWmBbIMAQvWNZVkseRjA6enLUlSbIm8kpMxqRtfF02aBH8XDA4OhS', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 1, 'ea396b7f94633b7083e35a3d1db6bbbbe4490423cfa4adae31b727c0ab2e3b9daa58958fa5f8432c45af89a3f6724b07463b', 7),
(196, 'Meet', '', 'meetthakar02@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 2, '', 2),
(197, 'Chaitanya', 'Chhichhia', 'chaitanya27111@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(198, 'Ajay', '', 'ajaygadhvi631@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(199, 'Sunny', '', 'km2011740@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 3, '0000-00-00', 1, '', 1),
(200, 'Dhruval ', '', '19h023@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 2, 2, '2', 2, '0000-00-00', 7, '', 2),
(201, 'araj', 'pael', 'patelraj7634@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 2, 2, '1', 1, '0000-00-00', 0, '', 1),
(202, 'Yash', 'Thakkar', '18bce241@nirmauni.ac.in', 'yash_2711', '$2y$10$Ezpqi72yfw..F4p7Udwb2Ohcpfy0dzlGM92BFCTMQA5OgIydegtZe', 'user', 'active', 4, 1, 2, '2', 2, '0000-00-00', 0, '', 15),
(203, 'DARSHAN ', '', '19h024@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 3, '', 9),
(204, 'Vivek', 'ZALARIYA', '18bce264@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(205, 'Vivek', 'ZALARIYA', '18n039@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 0),
(206, 'Smit', 'Patel', 'smitpatel18015@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 0, 3, 2, '2', 3, '0000-00-00', 0, '', 9),
(207, 'Ravi', '', '19H003@NIRMAUNI.AC.IN', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '2', 1, '0000-00-00', 0, '', 1),
(208, 'Yuvrajsinh', '', 'yuvrajsinhthakor100@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 4, '0000-00-00', 1, '', 37),
(209, 'Dixant dhanani', '', '19i004@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 5, 2, '2', 0, '0000-00-00', 0, '', 1),
(210, 'Vyom', 'Shah', 'vyomshah45@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 4, 1, 2, '2', 4, '0000-00-00', 0, '', 8),
(211, 'Yash', '', '19n068@nirmauni.ac.in', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 4, '0000-00-00', 0, '', 15),
(212, 'Aatman', 'Patel', 'aatmanpatel22@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 8),
(216, 'Vatsal', '', 'vatsalswork@gmail.com', 'no@^&null', '$2y$10$3CYuq169iFj2m.Nri9RZtu9XdRdzPQ9Vf870NhKTP3xl.RWdU/XcS', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 0, '', 5),
(219, 'Devansh', 'Suthar', 'devansh061200@gmail.com', 'dss', '$2y$10$IkiLXwYNyL9iTPMaRisQouZb0WK/FY9buBx9O5cSgNjkjfZCMYL8S', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 1, '75d35c3fe34860e3a4dad09b945620c9327c8b862ab77ecae57037c1aeb6794d82dbcdb7f55a03c0945b7f713198a5b8e0b3', 32),
(220, 'Samved', 'Shah', '', 'samved_3', '$2y$10$pzxrYiA.wUzdsHmHpMfWt.sxd0byONgqEH4tKNKgLs6CvvE5C7DG2', 'user', 'active', 4, 1, 2, '2', 1, '0000-00-00', 3, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 4),
(222, 'Vansh', 'Kamdar', 'vansh.kamdar@gmail.com', 'Vansh', '$2y$10$6BFR54n8cZ6YKvTtWNiMSOyUqHq9yqTAR/EIQQJ7Za3XCEypkQ332', 'user', 'SD', 4, 1, 2, '1', 1, '0000-00-00', 10, '872726cf87577da9f238b01955d1c892feed288a1ec671f68f8982a12194c1b1704d2430d7994dd774a335ca1fdcfd91f8e2', 5),
(223, 'Harshil', 'Shah', '', 'harshilshah1', '$2y$10$vwp8eSuXD61KChBosMZbROQj7SHzL6GzSD3jeaWSV79gUi2HgvaRa', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(224, 'Shrey', 'Pansuria', '', '__shrey__11', '$2y$10$D/04hKZQ5oIw11NTfTFvRe1yIcG34VLMMMjKRK0v2SHTLAaHnjg56', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 1, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 3),
(225, 'Smit', 'Patel', '18bce231@nirmauni.ac.in', 'smitmakadia', '$2y$10$ui8VF1GrtuUH8An0vYIXceo5xtRaSFGxhrejNMAMhlTvYL7zI37ri', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 2),
(226, 'Akshat', 'Shah', '18bce215@nirmauni.ac.in', 'akshat_shah17', '$2y$10$cTZBAGI7D3lPpnL5qAyxjuQUQVUw.z4NAzpI8zokqdoX7ikahF5zO', 'user', 'active', 4, 1, 2, '1', 2, '0000-00-00', 0, '', 2),
(227, 'Hitanshu', 'Shah', 'hitanshushah5@gmail.com', 'Hitz2001', '$2y$10$gPOkvpVSGgDOm2EiS0EFVuE.C2w3QYO1BeDVAA5l5AQ9Z6Ks6OFGa', 'user', 'active', 4, 1, 2, '1', 3, '0000-00-00', 0, '', 2),
(228, 'Abhishek', 'Vanani', '18bic055@nirmauni.ac.in', 'Abhi_45', '$2y$10$cjXc9QRFvwFwwpTAwljKHeyYf52WLKDL.4FShyZ9n6GpjIws3OSR.', 'user', 'active', 4, 6, 2, '1', 0, '0000-00-00', 0, 'b5fedbaf9f4d45e2e560b6d970cbdc0a4ba8de04150b189552d37c812147d5e30e5b23e203d1676372fdefb7228e56c9a783', 3),
(229, 'Abhishek', 'Vanani', 'abhishekvanani45@gmail.com', '@bhi_45', '$2y$10$Oq50GadPKmBcs73zO/N.Xu.mWidSAisyVYOBuKAL1WrZ5gl/fnGQa', 'user', 'active', 4, 6, 2, '1', 1, '0000-00-00', 0, '', 1),
(230, 'Smeet', 'Kothari', 'smeet.r.kothari@gmail.com', 's_k', '$2y$10$FCgZlLl2Gv9Pis26G2sRB.bSe5b.jyhrwSV1QGL/Mx6hRD1PvEK/a', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 2),
(231, 'Savan', 'Matariya', '', 'Savan60', '$2y$10$PkaYTfgVa/VINEMyc6PwZ.dE7VBEIM3b1wxDj/AxfR.Rf9N3lpV6K', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(232, 'Harshrajsinh', 'Solanki', 'harshrajsinhsolanki22@gmail.com', 'harshrajsinh_2250', '$2y$10$92S5p/4.OQtboc/wH1ZjuOtVysrH58zExjryhtLRRIUIJrgOgWS1O', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(233, 'Devam', '', '', 'Devam', '$2y$10$G6i7c18U3vRL.caLuGARrOhiHYOq3DKgM3xQBroissokGh16C30Y.', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 1, '1546e03b344714d000967799644d7adaafba1585188ea40a228075d868d7c1807305c264084b75899e32e7aa12b08240366a', 2),
(234, 'Jainam', 'Sanghvi', '18bce208@nirmauni.ac.in', 'Jainam9173', '$2y$10$1xqD8BJYn6Zurkh/FTxgnOYdAFkCx.MmtPKnj83KPLrYABj7BIcSy', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(235, 'Mihirsinh', 'Vaja', '18bce251@nirmauni.ac.in', 'DeviL', '$2y$10$Lj5IGUROIafzM8fzvY8y8uByY5nX8l2kf.46J10702Aq3buNKUNHK', 'user', 'active', 4, 1, 2, '', 0, '0000-00-00', 0, '', 3),
(236, 'Shruti', 'kapadia', '', 'shruti.sk', '$2y$10$NOmEDHjxoIbE0qlKTe//R.WUX8cFYqqTAwAVCA/ZMceEEvYULtvfe', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(237, 'Sanidhya', 'Jain', '', 'Sanidhya 10', '$2y$10$A.fKzZQbFJgtJzBdDz.RIOo3pRvQyDBFR6tVOOUKgmzu2kqBp4/hy', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(238, 'Aditya', 'Thakur', '', 'abcd', '$2y$10$9101mRA02Py9/sEEFVBlJeSDkeJdvnPC8v5E9tPaK8id3aSRGU3R.', 'user', 'SD', 4, 1, 2, '1', 3, '0000-00-00', 10, 'b4ff1fea1896ced7d876790b2ac5206659e66dcb76aa77f0ba2ae39c554ccb9a9b01d94318cdb3c5cec4db266245ab13dbff', 23),
(239, 'Shrey', 'Viradiya', 'shreyviradiya@gmail.com', 'shreyviradiya', '$2y$10$mCtRG2ncAS/WSz000PJzieYgWfVAdZdL6QKvGPU9W2ChUqacyxvvS', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(240, 'Fameer', 'Fuddi', '', 'Oh_Yeah', '$2y$10$jMvpFDblCq1iWj6ZKsTXOOEVdHIyk6sXtbeTMMKwvKh7ghDPmB.Bm', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(241, 'Kartik', 'Bhanderi', '', 'Kartik2712', '$2y$10$sLc245a6Nil6wiBf7.FQDub9wcF0TBsE6d6IfIObQNejMkCAloOq2', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(242, 'Urvashi', 'Ramdasani', 'urvashi.ramdasani@gmail.com', 'urvashiramdasani', '$2y$10$PWa.IryCnTdo93flx7c47egc6TNxw2flJ23GskC.hsvHP4HhMhl9.', 'user', 'active', 4, 1, 2, '1', 3, '0000-00-00', 0, '', 1),
(243, 'keyur', 'chaudhari', '', 'MrKaesy', '$2y$10$.Mc/HAzjItDBibAg5.owk.1k4X.AWMRgn83wmQHUnq4C88RW3Iaky', 'user', 'active', 4, 1, 2, '2', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(244, 'Vora ', 'Mahammadasim ', '18n036@nirmauni.ac.in', 'Asim_2131 ', '$2y$10$3kdND9L98.qOAcbHVXdTPO7XVm6L7dZZNO7M05lgzvF1drsG9MfIW', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(245, 'NiceWork', 'NoReally!', '', 'CreativeNirma', '$2y$10$gJZ6YxQi3JPmk1tGbaA6Jeu5KB.Ds2.gWcdLNzC0M1WFSdagwqiGK', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(246, 'Akshay', 'Suthar', '18bce237@nirmauni.ac.in', 'Akki@123', '$2y$10$J8QuA.yO/HB3mXwe7OLDs.JdpdQ5xs4A0bAuq6XuFdVVZhRYxrjHu', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 6),
(247, 'Sumit', 'Patel', 'sumitpatel813@gmail.com', 'Sumit', '$2y$10$eVWg8BSVEGPU2DlK3LnGKOnbwkNXq.XwuczB.tEv6gXg2dqTnVKoO', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(248, 'Tulsi', 'Palan', 'tulsi.palan1313@gmail.com', 'Tulsi_palan', '$2y$10$RgVAsUL9ysnd22QriJgvpeb4pYiDdNh9W/.AA/gZCFnS0cWnSj1Y.', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(249, 'Ahbana', 'Bshsh', '', 'Nshaab', '$2y$10$EMz9O0dN0oZSYnYKGU8wbupCzNkOgyDA8.Uw29rAwU2QBlV9EfdF6', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(250, 'Tirth', 'Patel', '', 'Tirth@1306', '$2y$10$T1nBNnKW6KtdWl6w4obETuYZwzHFMsIDBvPNSoGwxas.e3raTDodC', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(251, 'Sameer', 'Raturi', 'sameerraturi2001@gmail.com', 'Sam', '$2y$10$Y7NJTyFR5e0cfk1m5TuUHe7i.9DBbFddEY/UyvbdvJKKdCfmWoKPO', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(252, 'Soumyajit', 'Sen', '18bce235@nirmauni.ac.in', 'soumyajit123', '$2y$10$9DVlKMQumy3vsvhTmc5BLu.Ja0G5WGecjQZEUe/m2reu7VVJFAUGS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(253, 'Rudram', 'Vyas', '18bce200@nirmauni.ac.in', 'Rudram', '$2y$10$mcxg2gK83VFqTeTJ7NTgheV8ptBaniUR7RoNYKo3VJrpmxURS8AQm', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(254, 'Sephiroth', '', 'sephiroth23me@gmail.com', 'sephiroth', '$2y$10$q/ILocmnMQDxSzaPgf0nEueItrFreA/4Pl50Iun8OjWeKGMYROZQ.', 'user', 'active', 4, 1, 2, '1', 2, '0000-00-00', 0, '', 1),
(255, 'Sunidhi', 'Tandel', '', 'sugarplum', '$2y$10$JQwhkOcjQ6Q2lt1Fc3Zm6OIKpa3bIn5QNNTwMti2NnwmFXY3hnfoW', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(257, 'First name', '', '', 'Username', '$2y$10$Hm9IdRZaoFMERkWJS5IUneYPk3fTAYcgyOZEX4LYpAB0jL7TOWBcy', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(260, 'Toshita', 'Sharma', 'toshita2000@gmail.com', 'Toshita_Sharma', '$2y$10$CpL0uoAy.6M1u1dhVnhgweJVdbKe7bIHFEY//WR/tvhD3USwnSFi.', 'user', 'active', 4, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(261, 'Kush', 'Dalsaniya', 'kushdalsaniya0312@gmail.com', 'Kdd', '$2y$10$g0kXjyLXvUDrI5j5u129yu0zrZOXJb5.sm/capHZVD9VIh0Vnctim', 'user', 'active', 6, 2, 2, '2', 0, '0000-00-00', 0, '', 1),
(262, 'Kushu', 'Shah', '', 'Kushushah', '$2y$10$HskzukdmWfZozeVU3O1XQu9AkXWWqXxOrnuDdWpshiQxrvCIGvbcO', 'user', 'active', 4, 2, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 2),
(280, 'Harshul', 'Suthar', 'prime@group.com', 'electromagneticwaves', '$2y$10$j8oOF3z2u6Lh9gbMXy6Tn.2JUnrjOx6scIFRfrCJ6KARTH6cK9/t2', 'user', 'active', 1, 3, 2, '1', 0, '0000-00-00', 0, '01924a2e5157f8bf2fbda4f417926a483699521dafe4c2721e38cdf94322dd3ee4ab9d6ed4e32f8c56933827512c5f53acd3', 22),
(281, 'Aagam ', '', '18bee001@nirmauni.ac.in', 'Yeah', '$2y$10$CGyNp/EFvzdMcefECxfdF.fNJ8owO6qeflSjTM6cCHdD1lJxxrny6', 'user', 'active', 4, 4, 2, '1', 1, '0000-00-00', 1, '', 4),
(282, 'Madhav', '', 'bavariamadhav@gmail.com', 'Madhav', '$2y$10$u3kxT8KDq1L5UhB5nD3vqeq2DR6Yv5nayvgiv.FJ6ct5XR2fzGfgW', 'user', 'active', 2, 7, 2, '2', 1, '0000-00-00', 0, '', 1),
(283, 'Thakkar', 'Kunj', '19j024@nirmauni.ac.in', 'Thakkar kunj', '$2y$10$yVUj1YSYXB/S4xHZ0ArOUuKuHgplQwqo7eXu2F3kYjAVaJB77j/7i', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 0, '', 3),
(284, 'Kritika', 'Gupta', '', 'Hahahah', '$2y$10$7jaXNLzwBRsEGZLmRIJYb.6SKkIBpqckmAPvcrw/2UkEpbgl4csc6', 'user', 'active', 4, 4, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(285, 'Gazal', 'Gupta', 'gazalgupta8350@gmail.com', 'Gazal11', '$2y$10$EdZlCNdbjcvSUKdDKOjBhugk0sD6i68dwaO2SDvc0y/0wV/SWexx2', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(286, 'O', 'O', '', 'lbwout', '$2y$10$qnTH5j1vt5XJJz/W29qOlez01t355VsbnsbofsHDlWO6hcS1fpHIK', 'user', 'disabled', 4, 3, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(287, 'Gaurav', 'Sakariya ', 'gauravsakariya9999@gmail.com', 'gayrav99', '$2y$10$C/daZ6KdQMoQi7ZnvjQOP..3msK3cvgV6C70nq90lDju/E5rJJ.4y', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 0, '', 1),
(288, 'Shubham', 'Mungara', 'mungarashubham2002@gmail.com', 'Shubham___1004', '$2y$10$b4NSveISwqsS2jH78gACPONdrI4TGZcY/mXrFW3LsKyOu3uNzgioC', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(289, 'Shivaditya', 'Chhaparwal', '19k070@nirmauni.ac.in', 'Shivaditya21', '$2y$10$QhhRnB5sauNf0ISxvWQDcePGk4op44q483mfYBoLVDV1Zn6wzWKlW', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 2),
(290, 'Deep', 'Khut', 'deepkhut1502@gmail.com', 'Deep', '$2y$10$QBZrVDXkiDW/uuTTIryDdenbakOtGsvFmR8nAsDT/wn.93nGOHR4q', 'user', 'active', 2, 6, 2, '2', 1, '0000-00-00', 0, '', 1),
(291, 'Subham', '', 'mungarashubham1004@gmail.com', 'Shubham___1002', '$2y$10$.7G6MGtg1m6NhmLRRaPQyeP31iaEK.vcDfxYOF6dJ30Z2vBQxmJ.m', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 0, '', 1),
(292, 'Virang', '', '', 'Virang', '$2y$10$h7sxbB/oFK9l7hIHFtFFFuMb9Rxpx3bYMzZDWTOrTM5n6k1NQ0iVu', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(293, 'Jayrajsinh', '', 'jayraj4807@gmail.com', 'Jayraj4807', '$2y$10$/ULPeafXjV.F2NOPqf7JZeDKa7rHyXqIcgLKBrs7kY4KlK2OsUm8u', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(294, 'Jaipalsinh', '', 'ranajaipal2000@gmail.com', 'Jaipal', '$2y$10$ZrN5X9l5jPIpvTkIxeFaG.I6k2m.GXdYWW/OgxyzrGbLZAESI/zsC', 'user', 'active', 4, 4, 2, '1', 1, '0000-00-00', 0, '', 1),
(295, 'Yash', 'Rana', '', 'Yash Rana', '$2y$10$9PshXBBCzrKdCUUXJLhHjucmZDj349q6imb2w4V6OaxycQLcJqM3i', 'user', 'active', 2, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(296, 'Divyansh ', 'Rai', '', 'divyanshrai00', '$2y$10$YWxLIrh7GrhIXzPflUn1NO/0DhxAS3l1NGP1Zjm5UP2abT4yw3c4C', 'user', 'active', 4, 3, 2, '2', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(297, 'Meet', 'Patel', 'meetpatel2965@gmail.con', 'Meetpatel', '$2y$10$z2GbbIqyhKXxQjujJzMyHOsFjFZGpe0jAM.iGw8Akg8/C2ezIFvxW', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 0),
(298, 'John ', 'Doe', '', 'snoopdoggydogg', '$2y$10$1UtA3ha/XdLc2oxvW4eu9eZ78lki82pc3XYr3x0DLi4HV3KsLjI/q', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(299, 'Meet', 'Patel', 'meetpatel2965@gmail.com', 'm_0963', '$2y$10$aJmVTCD6xb4NM/6fWq5Kz.bxWJRs4w3vBGOKC4Hr8YfIyQ1aMwxpq', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(300, 'Rajat', 'Patel', '', 'rajat', '$2y$10$wNHYKhUjX56aU5/9meWUHeNLnPylddJUw37guGm27ZTgRaD6u6WoO', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(301, 'Raj', '', 'rangwaniraj0904@gmail.com', 'raj9400 ', '$2y$10$ahcABKW4ch2mV7UQQg5CeOUyBMqQFiKJx1KyAEAPLiiv0uvnz7oYS', 'user', 'active', 6, 1, 2, '1', 0, '0000-00-00', 0, '', 1);
INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `username`, `username_id`, `user_password`, `user_role`, `user_account_status`, `user_semester_id`, `user_branch_id`, `user_college_id`, `user_group`, `storage`, `user_registration_date`, `wrong_attemps`, `token`, `visits`) VALUES
(302, 'Nihar', 'Thakkar', '', 'Nihar', '$2y$10$Mbfia/OIKN9H1uXIO63WIOk7h811E9Yp0sMd2ASSsvXl6qc1qX/ee', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(303, 'Ishan', 'Makadia', '17bce053@nirmauni.ac.in', 'ishanmakadia', '$2y$10$bzerVwUxs5vVgTf9jZ82VuGjFDUP17EXupYlpPOyef/oCVU/ZgMNO', 'user', 'active', 6, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(304, 'Nisarg ', 'Patel', '18bce136@nirmauni.ac.in', 'Nisarg14', '$2y$10$eqeJpNStjTPMBCcusKmpn.NOiroulk2KG0aVRS3rcDVeTVaBKJoOK', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '8121d7c7b12eb39ff9790455649f64c9694513b53822468870583428200b0eb3020750803d526b7d7e9a4efc830e387f22a1', 2),
(305, 'Dharansh', 'Patel', '', 'Dharansh', '$2y$10$QdvppYGo2TvkeoAU8QF/9Os/Gm2Ykj32xVd0P93Ln0ucGJS00MYRC', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(306, 'Hahahaha', 'Hahahahaha', '', 'Hahahahaha', '$2y$10$yIUZZ8G.V/9C5izXpW.9ruVl8R1gvmI6cs0iLphKk8CvmJUXc2Si.', 'user', 'disabled', 6, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(307, 'First', '', '', 'UserName12345', '$2y$10$F9aMQEBGih1FHOpzuKIiWOXk3OAheQIDjGYuN.hVAfd7MRaMXEK0e', 'user', 'active', 6, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(308, 'Jeet', '', '', 'POISON2299', '$2y$10$J7Gug3.GDN/85ei5D94TM.MmOQ6ZFgcIG8dnKl0UubxYzqhme8L2m', 'user', 'active', 6, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(309, 'Viraj', '', '', 'Vkpatel', '$2y$10$41ulXYeVDIPvoPzTBrYhvuP2PShSQDfUVvl6KV8G5zm1kdPfwYb3y', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(310, 'Nora', '', '', 'noranfs', '$2y$10$E/izs7yDN0AXS4EVUJErzuEf58j35jOCdz1c5K1Z/EGejKyRvy4aq', 'user', 'active', 4, 1, 2, '1', 2, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 8),
(311, 'Xx', 'Xx', '', 'XX XX XX', '$2y$10$2V6tkngC6SNZXdcLNS2CA./tnAqwCc8uEdn2gV9JUNtB94bBs6e4S', 'user', 'disabled', 4, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(312, 'Hela', 'Patel', 'oppskytinga@pay-mysupplier.com', 'Hela_', '$2y$10$vJwbHFrmfStl851lAB1aRukBbxyFaZlP/ix1biX7p1F0N5CXIoFXC', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(313, 'Meet', '', '', 'Meet', '$2y$10$IllHlf/bSCpv.fYlkDdh2ODEmOde461wdK6SBr1VmVmxeAsXEtaBu', 'user', 'active', 2, 3, 2, '2', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(314, 'Khushi', '', 'khushi01641@gmail.com', 'Khushi', '$2y$10$jFc0Q97YuePQWKtK7Eoo6uJZSaK2AzhJnX76KufscIj7TqJyfGvVK', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 8),
(315, 'Sakshi ', 'Ankleshwariya', 'sakshibarot123@gmail.com', 'Sakshi', '$2y$10$A9R0u9L75uPaZlFdAUDTPOPH.zWd7XKNJSfDkx/U36eYl3SOgiAMK', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 0),
(316, 'Sakshi ', 'Ankleshwariya', '19bce502@nirmauni.ac.in', 'Sakshi@123', '$2y$10$jyFU6ufpyXS2SK5uHqRMj.3fIHExg5wY88tXz6NdUxgh6heJ60jY2', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(317, 'Sakshi ', 'Ankleshwariya', '', 'Sakshi_ankleshwariya123456789', '$2y$10$HWa9stvcEhvfFE3K3w9eS.67aMDJifuXcc3yWPIeOFrdbBvdaaK9i', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 3),
(318, 'Rups', 'Chitroda', '', 'irupen', '$2y$10$YqjtdkMvbsNuEvhV1g1VSe6PGMmIfvsHHOO4iM1ZEMnQUsXuUQ2pe', 'user', 'active', 4, 1, 2, '1', 2, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 4),
(319, 'Kush', 'Kapadia', '18bch030@nirmauni.ac.in', 'Kush', '$2y$10$AFb1ZEMb50iXLjuOcYckY.Gomj6dvZFhmKI62o8ty9En4G80STZEm', 'user', 'active', 4, 2, 2, '1', 1, '0000-00-00', 0, '', 1),
(320, 'Fari', '', '', 'Fari_2001', '$2y$10$7FVoX1./Yp49j1ghitH7lutPnd0.yRUHBYPWL5eXI/vgDNvGAgNgu', 'user', 'active', 2, 1, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(322, 'Manan', '', '', 'manan96', '$2y$10$85kYlbnA0/2os5Iu.FQvMeHZj92LQJx3woT/bVmRPcw7KH5m6VnQe', 'user', 'active', 4, 2, 2, '1', 2, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(323, 'Pruthvirajsinh', 'Solanki', 'pruthvirajmsolanki@gmail.com', 'Pruthvirajsinh', '$2y$10$04g5Uuv6HlhKxGXU8GZwHuaXC1LwRT4kh6AvJYL37v5/u008jQ3IG', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(324, 'Pruthvi', 'Solanki', 'solankipruthviraj68@gmail.com', 'Pruthviraj', '$2y$10$69cMXZxVMeyRL5zoCCfRU.MvRh6ggWNVq82LZiopUkHvf0izjnREa', 'user', 'active', 2, 3, 2, '2', 1, '0000-00-00', 0, '', 2),
(325, 'Vaghani', 'Manishbhai', 'vaghani.2112@gmail.com', 'vaghani', '$2y$10$FU7K1ZWVPM6XxEJQtWWMwO/IqQ81Dnk9391Q6fQLC7i8reYR0hWQ2', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(326, 'Gautam', '', 'vavaiyagautam2081@gmail.com', 'Gautam', '$2y$10$MvgEwQugaqP89CRlR4cp..bowhULoUzOEja3ppcP1fBFKuiUeocMa', 'user', 'active', 4, 2, 2, '1', 3, '0000-00-00', 0, '', 3),
(327, 'Sanidhya', 'Singh', 'singh.sanidhya30@gmail.com', 'Shanu', '$2y$10$ppj0xxFiyO7skY0FTk8lS.mcNY9klcJglP54/8RjO5x0c3fZTki.u', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 3),
(328, 'Vivek Kumar', 'Saini', 'vivekkumar.bov@gmail.com', 'Vivek@2001', '$2y$10$XWXTx8G8/VcaS2Rx1C9vsuBE1ShxZ6jXV04OVbBzS91zTJcL1sC6G', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(329, 'Tarang', 'Kathiriya', '', 'Tarang', '$2y$10$hwK1sk1G4uL3PsI4RvZd5eFqQvRoD9aDrWoM9GYlHg1PM5O2KCjSW', 'user', 'active', 4, 2, 2, '2', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(330, 'Rishi', 'Gupta', '', 'Rishi4422', '$2y$10$whBJCx11YYB5ByjU2SoJw.Vcm3VInbFfxwtd1N4sXJvToA5airE1S', 'user', 'active', 4, 4, 2, '2', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(331, 'Pranav', 'Singh', '', 'Pranav0507', '$2y$10$HDxn6f02OFEl2upgB70AFObD2Q7aO/NAQGb0TelX7cLpNm5DbBXSu', 'user', 'active', 4, 3, 2, '1', 3, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 3),
(332, 'Sunny', 'Mistry', 'mistrykiran9887@gmail.com', 'Sunny mistry', '$2y$10$TOdXQhEeIuQftGjuEdfP4uWEyyWkaFJwbEYKhUqZHGWH/HhASaKgK', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 0, '', 1),
(333, 'Pratik', '', '', 'Pratik', '$2y$10$4sa4vBwT6GvxHsSZsZ8o1uslEz9sCArg0qOZcmelA2A9G0o5oNfw6', 'user', 'active', 4, 7, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(334, 'Pratik', '', '', 'Pratikp', '$2y$10$JczYCnM48ulsHmPTi6GHDOV2he9F5IkGututVa7W02FY8rYucPJXS', 'user', 'active', 4, 7, 2, '1', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(335, 'Mayur', 'Bhuva', 'bhuva2022@gmail.com', '17bch008', '$2y$10$O20bkUjkv01bZIrLg2VbLee6XJrc2v72x5.wY2RwROhQCqhJhL83O', 'user', 'active', 4, 2, 2, '1', 1, '0000-00-00', 0, '', 1),
(336, 'Kushal', 'Patel', '', 'Patel.kushal', '$2y$10$ccdjSoHxUh.B5FIp85RPQOSQJrESXLAnJ7opE5MWAs2v8vQU7fQaa', 'user', 'active', 2, 2, 2, '2', 1, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 5),
(337, 'Tester', '', 'd@d', 'Tester', '$2y$10$BmV2BiDVC.f9IqhY3Dv8ouLaF4PyjuNvge5sJUBYBjenBdxZEilOi', 'user', 'active', 4, 7, 2, '', 0, '0000-00-00', 1, '451315e522a95db60aed8cc3be1b9b410fe2e8712362620970e4ce8575719f6a1b83fc9bf7a2705be458aa865755f03390c5', 4),
(338, 'Kishan ', 'Prajapati', '', 'Kishan', '$2y$10$OlUrL54bEPqAeA7BUrx94eQVk3Zx/bkjUbzWrUsk3WjqIN/lvd.5m', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 6),
(339, 'is9ajsisi', '', 'maungapainkamuliatliat@gmail.com', 'kontol', '$2y$10$SuGfbOUmEe3oDP3n6Dbq1.huajgdIASeSWw8Ouyk/ZSUhHneeyZhu', 'user', 'active', 2, 2, 2, '1', 0, '0000-00-00', 0, '', 1),
(340, 'jainil', 'mehta', 'jainiil237@gmail.com', 'jainil237', '$2y$10$KMYo1SMfFJypEoXt7Ixw4ux7R3VuXLRKMPgn32tPwxxjYtIzoPFxW', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(341, 'Yash', 'Savani', '', 'thisisyashsavani', '$2y$10$TYsA8J8u/wDLgrWLkrsJf.XOv/S86Xge4YRjRI4DQSsUtxGVSxB3i', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '2332597443cd7335f9b72ed5640102798d61f9724de40492b30b06eeeff0941f5e20140e571cf3fbb3296bc8ac8ecf04add8', 1),
(342, 'Harshvadan', 'Mihir', 'hmihir4@gmail.com', 'hmihir', '$2y$10$V/.XyWBDQga2c3tLM8IGju2xfVOffogVtOItT6z13PH1FPOMadqK2', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(343, 'Mohak', '', '', 'MSA', '$2y$10$6PB2eq2dhDSvrT8O0.JICuhLNyqChekWubIyCrwNpjkncZ4H96LcK', 'user', 'active', 4, 1, 2, '1', 1, '0000-00-00', 0, '', 2),
(344, 'Shubh', 'Shah', 'shubhshah050@gmail.com', 'ss_7711', '$2y$10$3Wp08Ov4GLpHLVxuF5kFAejiIFngFMnJ5fETN0ppPla5uHDxLrvrS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 3),
(345, 'Abhi', 'Sinojia', 'abhi.sinojia.as@gmail.com', 'abhi_sinojia', '$2y$10$2/LpiiCG4sA0ajEQbG3HGeCFut1D3Ph6Hi4BUZHN5m1PIcHLA/A3m', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 2),
(346, 'Omkar', '', '18bce007@nirmauni.ac.in', 'Omkar', '$2y$10$WEuMLOY1POB0GcknL8uuM.gjzOoxAanoWsX682ZmFPiAUMy7bBo/6', 'user', 'active', 4, 1, 2, '', 0, '0000-00-00', 0, '', 3),
(347, 'Meet', 'Mavani', 'meetmavani56@gmail.com', 'meet89', '$2y$10$clIiKyseJoBbkW6ufvrx3e/V1r9oFDG.l.Sr4hgpovRltXM20g1j2', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(348, 'Tirth', '', '', 'tirth-h', '$2y$10$MTWA1fOxw6R03Q5DQXBAZ.9/Jo6UYjNqrl2IJJHO3lInD2cN8e7hG', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(350, 'Jivansu', 'Vyas', '', 'Jivansu', '$2y$10$JAzmzmKWLXiZNxifhr3ik.T6d8b5RfMhZNN0TQ2o/5BQGCmH2ij.W', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(351, 'Utkarsh', 'Pandya', '', 'utkarsh7kar', '$2y$10$Wnx722CHkkUQRS0BZD25f.3DzMh.RBBA6IBMosc48DqedzBrsQlDO', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 5),
(352, 'Hhx', 'Ccc', '', 'Rrr', '$2y$10$nwjh5cu1L.gxiBlLLWIC5exay8s6JZpcCYIHCAVYqcZ0YRRZ8EMV.', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(353, 'Abc', '', '', 'Rrr1', '$2y$10$jTjWcfkE8Ip7p4qwvXpIceEbHIp3L.wdwZBXhiB3owN1xFjRGoJpq', 'user', 'active', 4, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(354, 'Jay', '', 'jayroy9825@gmail.com', 'Jayroy9825', '$2y$10$uhpzM2n9nXmqnD5n7.m2Ue3lxPt82lCtHjt83PsbPRmVA5j.DT7hK', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(355, 'Kushal', 'Rajput', '19BCE521@NIRMAUNI.AC.IN', 'kushal.rajput7', '$2y$10$BYy9XWehIvoEI/LysZ6anOCd2AVw8ZwdMQp95NxBcbJsHYXg909Fy', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 2, '', 2),
(356, 'Tirth', 'shah', 'tirthshah485@gmail.com', 'tirth485', '$2y$10$COeZ9dmIuQ7.Y/KAwrxwhuKDaDWqysglarABZtyZWzIF3YXMB6W0W', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(357, 'Rahul', 'Soni', '', 'Rahuls', '$2y$10$bXZEnDeagzVelREDcyCSwew7I.mTkwPnfmjV82Hpqe.OkgIRYU6S.', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(358, 'Parshad', '', '', 'Parshad', '$2y$10$SLOPqIGoqHpYgK1YKrio.uE/RtFKM6X2NQTB0cYhLsCreJ92Dk1fG', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(359, 'Meet', 'Patel', 'mr25patel@gmail.com', 'Meetpatel123456', '$2y$10$b1l03NRyFSQlTuDZt/xdSeNHzuiXPh4qIh/n6tJrQ0wUdHhle05VC', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(360, 'Harshrajsinh', 'Solanki', '', 'harshrajsinh_786', '$2y$10$glgTv62unAFZDkRUR75Km.eBgK/8t6xXAW91lV7OXHfxHp/uSS39.', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(361, 'Varshil', 'Shah', '18bic049@nirmauni.ac.in', 'Varshilshah', '$2y$10$iRrl8mQJzlIh3Od4dmlmsO5Krda3gNxqad2o8eh1gaPhgZi8pcdU6', 'user', 'active', 4, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(362, 'h', 'h', 'h@h.com', 'h', '$2y$10$pnrY2EMHT1E.Q5lzEzHSCOVYIAL/IR0MNjUVly4RBtvEZsRujHTuW', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '5ff8dd089064baa28dbcfa36516f02840d7ce6255a5cbe5c0a2a37230b2d3690808ce921dc2d70ab7a7e30a6cc3f31250aa7', 31),
(363, 'Yash', 'Savani', '', 'Yash Savani', '$2y$10$R5uqEEeSI7.CmLTatftzZebjqUMfuvd0AxUTsCiGaNNRPkpl/ehX2', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(364, 'Awaish', '', '', 'Awaish', '$2y$10$U3Km3hksOSO5Dq86Bt2BxO5vfxVukCRHBoNLKQ2xhcoBlADtISFqO', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(365, 'PRINCE', 'ASHOKBHAI', 'princebhadiyadra693@gmail.com', 'Prince', '$2y$10$zzYWwDfF.lMybEZwiVECbecmVsKZRea54JVWZwg55SPInhVAtnfDa', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(366, 'Yash', 'Savani', '', 'Yash ', '$2y$10$DnBznzbLHlBuDHZfF3qQm.3ALxMMbO.mifVAmxrdccpgH5Ag7Ds86', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '872223e8bfd1c6e15295a20d7e39cf746b0c7712c16c1b789aea71971012d744ada7000063aa8a3e65ddf530320e1e740f96', 1),
(367, 'Mansi', 'Jodhani', '19bce510@nirmauni.ac.in', 'manu', '$2y$10$DCB0i2NwVPp0BkKm7O6AKeP0u4DRAyI2hCBUcv2X2gTNOYL2ogKFO', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(368, 'Gopi', 'Koriya', 'shyamkoroya@gmail.com', 'Gopi', '$2y$10$PGv7yVQRdaLJxdyZ5broKOvwBeSrcsOfAKFYPKTkhhSFb1dgE7lX.', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(369, 'Bhavsar', 'Vishvesh', 'vishveshbhavsar2017@gmail.com', 'vishibhavsar', '$2y$10$P/vftOJkyPjgSHiBHnHiIu2Vn.lnjKnZH832ONbuZci/YKx.POhXy', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(370, 'Asheeti ', 'Vyas ', 'asheetivyas2001@gmail.com', 'Asheeti ', '$2y$10$PjemO3/PHkGU6gNI5ZZ4F.dm84M.F6zEcyRvjeKS8QQnd.3603Mdq', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(371, 'Aayush', 'Solanki', 'aayushflipkart1@gmail.com', 'Aayush007', '$2y$10$mAl/7g6LKwiE9zZfTzkQWekVuSEt/MKtuNoeBTyR.EYRp8S9qga.q', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(372, 'Vaibhav', 'Sorathiya', 'vaibhavpatel1921@gmail.com', 'Vaibhav19', '$2y$10$MUL8USDNA7wBvQYbMSYAc.Onl0v95AG/tEn90XTJ/0ZUNhg7DOi82', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(373, 'Vivek Kumar ', 'Saini', '18bce204@nirmauni.ac.in', 'vivekkumar.bov', '$2y$10$CGPO2XrOAbIsqThJtJeEOOtWIU26cI/Ag9Ln/SOhQXjj5qSXC4Vhu', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(374, 'Tushar', 'Harsora', 'tusharharsora95@gmail.com', 'Dark_Thunder', '$2y$10$kaTs5ad64joUmJoD5Rqjx.N.Obu8jM/LxbSFpQP6iVFboxUovR03y', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(375, 'abhishek', '', '', 'abhi', '$2y$10$T2CW9cMOphHJh2fjoiZaSuh1Plqh8GkBDGTTdxH.RJerFvOaqHa2m', 'user', 'active', 4, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(376, 'Chinmay', 'Parmar', '', 'Chinmayparmar', '$2y$10$7.vqr3ImlNWH5080ZgIwVueUHrjjjJ0ZFwDUfEK6B7TsLETbWS43m', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(377, 'Neel', 'Patel', '', 'neelpatel27b', '$2y$10$2ABwP4ijyBAa5Yprn14Oe.Pywm9uspEo4UimnT3v7r68kRRl1mU7a', 'user', 'active', 4, 2, 2, '2', 0, '0000-00-00', 0, '', 1),
(378, 'Yuvrajsinh', 'Parmar', '19h020@nirmauni.ac.in', 'Xyz', '$2y$10$md6nv/2jLVLfAfLQSzdDLexr87NsrnN8uyNp7TuvY.RITmEnh/jbS', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(379, 'Dhruvil ', 'Shah', '', 'Dhruvil shah', '$2y$10$obnmLlYrVWacPEfKexIJ/OXO7rjZaGV/nNF5TbJXkEFA7zRIAMhzS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(380, 'Jeel', 'Tolia', '', 'jeel_tolia_', '$2y$10$.IzInsyQuQ18TBuagp5fdOymc/UOEtCGfZ26HpeDZamBjXD/mTOr.', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(381, 'Dishant', 'Lodaliya', '', 'DishantLodaliya', '$2y$10$WW1JR3Xx5qIIx/OlgF78luYg3SWJQ/iD9ZZ2QfzrLXeH9Yifiquz6', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(382, 'Ansh', 'Ray', '', 'Ansh Ray', '$2y$10$wzc58Le5gJH8sh52dzjFGOX6MPFq7G0neFGsUXZvg1iSUeRhU0ogG', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(383, 'Priyal', 'Dalwadi', 'priyaldalwadi88@gmail.com', 'priyal8', '$2y$10$eGK9RKsaez8TCfxaFRMNmu0q0aX7zglO5XULhpUEg2MkKl8ovi/C.', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 3),
(384, 'utsav', '', '', 'Utsav', '$2y$10$xFsVOxE8uUFinFJ/5tSY.eN.ehHJ/Fez//z7dnXy9Z21h16xYWr2m', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(385, 'Superman', '', '', 'Superman123', '$2y$10$YO9nRYdPkLU9i6SstHXHOuJenygqHlreyllMkNmPRtOY2AHDrouV.', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(386, 'Prithvi ', 'Balwani ', 'prithvibalwani01@gmail.com', 'prithvi.balwani', '$2y$10$13eUiXjUU2DTVtvlyS0dauH.79JzZx9mmTdZDJTO05m2CwZK4CFc6', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(387, 'Henil', 'Patel', '19c012@nirmauni.ac.in', 'Henilpatel', '$2y$10$Q9RbcGAkLi8zC35mluCale9BLygdejjyukoT1ayQ1Tduw.yWO/47O', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(388, 'Maharshi ', '', '', 'Maharshiprajapati', '$2y$10$Yl8AcDP0oTjVWTAy6oOmp.SWb6o7j6SLF3dn3RsntaX1HYsxO3spO', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(389, 'Harsh', 'Mankodiya ', '', 'hmankodiya ', '$2y$10$aomtcd6/hc6usHBhAlSlBOal9GtqVs1loXbbC0rGh.i1VNqXHq.dC', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 2),
(390, 'Aakash', 'Parmar', '', '19c024', '$2y$10$0Hm5aB3EbREii5olr3EXuuOBIHdgFjs7yxUSkoecgpIm6Vm0Ct1QC', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 3),
(391, 'Shubham', 'dusara', 'shubhamdusara@gmail.com', 'Shubham', '$2y$10$DtgEdGFD1EE.IKXtofI5V.dcBirmVOY5GQ12Q1mZLiAIHrfmif.H2', 'user', 'active', 2, 2, 2, '1', 0, '0000-00-00', 0, '', 1),
(392, 'Shivam ', '', '18m042@nirmauni.ac.in', 'C1', '$2y$10$/nGc/s/dIJniutxZ2dTCz.HMTz4nShuSMyR2MoyEvCImZdZqyQXHy', 'user', 'active', 4, 1, 2, '', 0, '0000-00-00', 0, '', 2),
(393, 'Shiv', '', '', 'Shiv', '$2y$10$yDHzW0zHKDdI6sGoXOcBueqo2Ne4.HRORvBFmBPAoCj8JYopdoaha', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(394, 'Divyam', 'Pandya', '19c021@nirmauni.ac.in', 'Divyampandya', '$2y$10$/Utj70Ar8h4Wa2WlgPRcd.thUN05tkpixGYc7Z1CWsnl/QVKJjIg6', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(395, 'Pranay', '', '', 'Pranay', '$2y$10$s81niUcV1NgM0dlC8sSAy.6hUzKMtS664XGIBrRApJveMdy48sYoO', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(396, 'Krupal ', 'Patel ', 'krupalpatel150@gmail.com', 'iamkp1010 ', '$2y$10$bYCXfjbG9nfbe4nQr99qkOGNaNbLomgF5mtzTH4GvqJibC1Ht9sl6', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(397, 'Rohan', 'Modi', '', 'rohan_modi28', '$2y$10$obdOALTV04y5v9Qz8gTgWOYlM5r5WAun3d4ptSvK2OAkbLe1LKOpW', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(398, 'Meet', 'Sakhareliya', 'meetsakhareliya4702@gmail.com', 'Meet Sakhareliya', '$2y$10$evrLlSAVhBS5ebKqfo7i8O668zidFRr22i5gdTEqNS9I8ywqflS7O', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(399, 'Umang ', 'Hirani ', 'umanghirani5272@gmail.com', 'Umanghirani', '$2y$10$06Zp2CYLViJHcx0ExVVx1.ul8DlYspS2xWf7F0Zt.7i4VRXZ/1XWe', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(400, 'Awaish', '', '', 'Awaish2', '$2y$10$jzCqbrBjoY1Z44/rJOziHu9d.kvXQKbcB3ltK8j8XJlaVDkA0zM3O', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 2),
(401, 'Barun', 'Debnath', '19C075@nirmauni.ac.in', 'barun', '$2y$10$V4k6JFDu5Da/uA/YFh031.kCqk2dg.ZZWB9pfiDftcEWxyLC8KKV.', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(402, 'Heyansh', 'Patel', '19f052@nirmauni.ac.in', 'Heyansh', '$2y$10$UYZzhCTtumFDSU8Byrf0ZON3nWZZwhNwN75SnfCkDvX8slQ.U5dT.', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(403, 'Smit', '', '', 'shahsmit', '$2y$10$COoag0FHIKtgKWcpIg4YnO2vIvBHbWO4XsPA4QS/jpo2ZTkUI6z2S', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(404, 'Dev', 'Patel', '', 'Dev1111', '$2y$10$zd7Q2EmSKT7fkRxpIrJQ0ef/Bw8g68r8J8y230xA6PRCNUqlsUbxG', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(405, 'Khant', 'Aum', '19l014@nirmauni.ac.in', 'Khant aum', '$2y$10$CSmmtHd9gbN.Bs3405frfOUvhjfLtMal3AekJG2Is.ms5Pbbs1o4C', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 0),
(406, 'AMIRKHAN', '', '19c037@nirmauni.ac.in', 'Amir', '$2y$10$R33JhVlgYITTIP7nuXjQe.ybDe0ZL6zk/C0tJumkG/VakteCMB/Ii', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(407, 'Divyarajsinh', 'Chavda', 'divyarajsinh1622002@gmail.com', 'Divyarajsinh___', '$2y$10$Z/No7bOCktkDD6Zng.eSruP/PyEcZwiExzoMJ5pyb/kNIhMXVZ7YG', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(408, 'Vedang', 'Sadhu', '', 'Vedang Sadhu', '$2y$10$OkTPxT0GBlUbTOitB5YvSObbManzjXh0ShtWgnsyRKqmBYr4pKCvm', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(409, 'Chaitanya', 'Chhichhia', '19f002@nirmauni.ac.in', 'chaitanya27111@gmail.com', '$2y$10$l02H8OcjqPtVRVrwv0OW0O3HJWI0U6DPd/enmxImoB/vVkEbZSbbK', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(410, 'Khant', 'Aum', 'khantaum@gmail.com', 'Khant Aum 123', '$2y$10$p.sDOMSW78p7QmF9thewnes47KYkVQ7PYTdbDJuQI4vFwSve8sx6u', 'user', 'active', 2, 1, 2, '2', 1, '0000-00-00', 0, '', 1),
(411, 'Kalp prajapati ', '', 'kalpprajapati2002@gmail.com', 'Prajapati', '$2y$10$2k8Dk4eWeYvB9Fo.mdjP.uWvE.HAMeRrTg1rWtZPg4ckw3NyyUdFu', 'user', 'active', 2, 1, 2, '1', 1, '0000-00-00', 0, '', 1),
(412, 'Akshat', '', '', 'Aksh', '$2y$10$zVMeMe2hjEHtuDBhtymcBOIaIHcFmq9r72SCidVIBH.mFMtCxkezC', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(413, 'Ashray ', 'Patel ', '', 'Hanumangod ', '$2y$10$0KkLk07uZ5n7nXSVANnSauRpu.6iG3TIzj.oBloUMzSqLRaCYobM2', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(414, 'Hitika', '', '', 'Hitika', '$2y$10$QuGn7UfgAl8NiX1BHuPbW.gqMd/xmAZCy1qGC3qTVlP1/0TKCMBx2', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(415, 'Chirag', '', '', 'chiragm', '$2y$10$p80Adi4DaYJSQzPGqc2yOOjmSQ9SYW8hW18cHHuZgZ2L3vJ5Vu51e', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(416, 'Smit', '', '', 'shahsmit05', '$2y$10$f7m8IeUVRDWBohFthD6BHeMXZc/U1TvwgCOxKzJXwK20HnPswfSPO', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(417, 'Lul', '', '', 'Lul123', '$2y$10$FTZq8ji0a14SEYwq0AdOn.sVc9ufEpqKEJfn8XtRYhvUm3wemI0qS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(418, 'Patel', 'Het', 'het4902@gmail.com', 'Het patel', '$2y$10$DglU7I56.3EaKDETRwknUOuVbbz.Zm932e8ckn86wJ.0MIhAheOOm', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(419, 'Bansari', 'Prajapati', '', 'Bansarii', '$2y$10$WxXoJMEIsdNa7eKr5ru/vO2oEO6/QTaZzH5VhSugk/SJJXTYKVWDa', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 1, '71368bab73bb1493906a38d50b5561cb2492c6411a7fa8c1fdf94a3064a366a5cb50747575e1c20def2f23e98a1107f5877e', 1),
(420, 'Abc', 'Xyz', '', 'Abc', '$2y$10$KmIXBtEHsaPPkfIUGeX0EuW8.7Mg1LZcx83iphagk0ohBVwwvecRO', 'user', 'active', 2, 2, 2, '1', 0, '0000-00-00', 0, 'b289483feea4e7b34bd46402da13f5e1c3efa69276ee8b6c5ddb16306820f765b8e89ef435252c6f691f182a8c33f83daabd', 1),
(421, 'Jalay ', 'Patel', '', 'jalaypatel122', '$2y$10$jnzH3fbrmrKRVU/dz8mcSOaEw9iRkh1R.ynY4yxP5mYGKe9hplHk.', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(422, 'Tanmay', '', '', 'Tanmay', '$2y$10$PLxA4Cv49jdQgaV1W..9xudkBKDPGIJgB36yxdVJ.f0AiV0e3PwfW', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 2),
(423, 'Devansh', 'Parmar', 'devanshparmar48@gmail.com', 'D007', '$2y$10$cOV8m6H99bYEIXGWnWvOUuoDygIK1cZomQwmn3TNgq5T9ZxUpijk2', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(424, 'Harsh', 'Jadav', 'harshjadav1102@gmail.com', 'Harsh jadav', '$2y$10$l84UgGrulS.S1SvKbbFvBu56eRFivRx6SN8lVSQrH.k.4R.ikIJLW', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(425, 'Jalay ', 'Patel', '', 'Jd1223', '$2y$10$1abJpv3ultf79f2n3R8pfupUUEFN9828Of0RcBCzrOF40jg1A4kwm', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(426, 'Khushi', 'Patel', '', 'Lol', '$2y$10$ifTLUTmjN/pzLYL6vPVj3OKNDvQHP3Vz9SIUfWROf5wAJ4G1Cv36q', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(427, 'Yashvi', 'Shah', 'yashvishah3110@gmail.com', 'Yashvi', '$2y$10$CVOTkctXndhVt0THjsW0IOQ3opvxS1TCetpGCTnMooFFsvM9c/bTe', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(428, 'Darshit ', 'Patel', '', 'darshit1632', '$2y$10$Ga.WEZAfi/fH8ll1ZROF3.1YhFtGKtTlq.XwPHYExtnJyZXor7AFu', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 4, '67fa5ee744ae98cec862c20159eb9b85b5fc9fcd1a23cae0a92815526ad39f75be82918da770986e362117e57886bca577cf', 1),
(429, 'DHAIRYA', 'JADAV', 'jadavdhairya@gmail.com', 'Infinity', '$2y$10$pQPyyKZoHocTbtiuyxPTSe0gw174cnaRFILXhWrUQ59Ot68/dPJ/2', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(430, 'Jignesh', 'Jethava', 'jigneshjethava035@gmail.com', 'Jignesh Jethava', '$2y$10$0muBYZ3LBeqciafcBFX2fOcpEYunHUJpQoMUYmTF4AzlO0vobBWGa', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(431, 'Aryan Patel', '', '', 'aryan_patel', '$2y$10$87naRKWiG08SvCc2alx8/emavmaHqa2DpRHwOYh6HOg9WpFxhQnBi', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 1),
(432, 'Shivam', 'Patel', '', 'Shivam', '$2y$10$ajk/CWxLzwnLfnUoGUUOG.3p3Ep.AJkh8WXYMUbmnpw0q6l4voIuS', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(433, 'Yash', 'Darji', '', 'yashrajmeen', '$2y$10$mpRFPpTsJHHU/YwARZoNFemheWb2flsoht2507Us7jXQm28Wnq5nm', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(434, 'Pat', '', '', 'Pat61', '$2y$10$/xEfbYYj79rHI/qlxpFbaevQjhX4CMlbw3PQOnaI/Z5q3jO0.oFlu', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(435, 'Aman ', 'Chaudhary ', '19c004@nirmauni.ac.in', 'amAn123', '$2y$10$ytfG3Rg6x/.HCDwBtmtmUe/CipUm6iegcIyvWdi5Sw9jMD8rHlbwa', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 0),
(436, 'Aniket', 'Modi', '', 'Aniket', '$2y$10$59dLUn90HNCkfvxCfx4Bwun3ShRMzNE.UaStu2sHJMFw5UQu0mhUe', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(437, 'Pushkar', 'Singh', 'pushkarsingh378@gmail.com', 'Pushkar5142', '$2y$10$OopbfQ7SCrRlRrQJZJfIy.s34A8bpq1eYOQYVlyB7jDnaRYtK3tm.', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(438, 'Yamin ', 'Prajapati ', '19BCL513@nirmauni.ac.in', 'Yaminprajapati ', '$2y$10$yIlW2POmhhgloBC7bu6u2eSFEiC6X1v9wyB5bRN9qvu/mnKY1rNXq', 'user', 'active', 4, 5, 2, '2', 0, '0000-00-00', 0, '', 0),
(439, 'Yamin ', 'Prajapati ', 'yaminprajapati6493@gmail.com', 'YAMIN PRAJAPATI ', '$2y$10$Qvoyaw6MTEAXLVwmppqsV.7owBRMGKJlBM4UuxzEHFseOd8dgAJJK', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(440, 'Krish', 'Gondaliya', 'gondaliyakrish0003@gmail.com', 'krish0003', '$2y$10$zi9Bax4ARrOBIXeKsEr5hOeaD9IeZy3AHU3e2o0tEyh0yv8VpA2wu', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(441, 'Parth', '', '', 'nparth', '$2y$10$PDKeP5ai9IgaP56xiYsCbejLzn0.MBmrLliR5aPBiMlWwfDUgRL.a', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(442, 'Harsh', 'Pujara', 'harshpujara1212@gmil.com', 'Hsp7864', '$2y$10$0eX4JbfNNnRwMhA3UORtg.BbMuDvRhLASTmyMf.cTpuW8SThCxBdq', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 1),
(443, 'Aman', 'Chaudhary ', 'aman1313338@gmail.com', 'Amanjxiwshsk', '$2y$10$ppSphlsuPzTDBNz2MJbiJ.9DYDJvVQ0Sz8kYB5iy8hi9ET.2gkAky', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(444, 'Nisarg', 'Panchal', '', 'Nisarg', '$2y$10$SMNcH7Q61uB/t3Ie5oIT3eMiLnJl5dQ3tZ5bDmJ64K5TdSDuwVah6', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(445, 'Anuj', 'Shah', '19k089@nirmauni.ac.in', 'Anuj shah', '$2y$10$gfGFUbGLkbD5pkHbL9q3a.ZmSw5.GZUNCto4dCIjVjlx9bsdvEQS.', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(446, 'Yash', 'Raval', 'yashraval20022018@gmail.com', 'Yash raval', '$2y$10$CFU7DM.NXandkxPEekEUruK4EPjXUYixCUZaZkQcTXql7Be.sGpOq', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 0),
(447, 'Yash', 'Raval', '', 'Yash jay raval', '$2y$10$efRroaijcHiX1FEkRgUgc.SuKJM579jH/kCqrlmjtDdHBEkmUUNwa', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(448, 'Ruju', 'shah', '', 'ruju', '$2y$10$2B8deUSeZ0L3MXPgSnv0lus.H7FmXNpFIKRv3aMjDHPGZICNqd.XK', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(449, 'Harsh', '', 'hrshprkh112@gmail.com', 'Harsh1102', '$2y$10$1DhaG4WBEDF5h4zN07ysYOeAjZ1vRCYncfQbZ3FFk1soGRCbNdKMS', 'user', 'active', 2, 6, 2, '2', 0, '0000-00-00', 0, '', 2),
(450, 'Tejas', 'Dobariya', 'tejasdobariya8@gmail.com', 'Tdd', '$2y$10$pmBQKBe50XBYyZHpth8mXexHCdmwj9/9W0Tmzz91VqnMRqGygLAtu', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(451, 'Kushal', 'Sidapara', '19k072@nirmauni.ac.in', 'Kushal', '$2y$10$YFhibkBDdW23V18t74n.UetafhMmocQmOldjDsM3Os4Rn4oQP5UYy', 'user', 'active', 2, 2, 2, '1', 0, '0000-00-00', 0, '', 0),
(452, 'shalini', '', '', 'shalini', '$2y$10$eYdbxnh.VHclSURPi.mLFe8PwyTOmVTaJl9ZeDA5zRDmLBlBUdPBK', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(453, 'Kushal', 'Sidapara', 'kushalsidapara87@gmail.com', 'Kushal. ', '$2y$10$qSEUw7p7fxlNlsFUNivkYe9MzXkyOaMhpzlaEQd1Sgt59MwfMX732', 'user', 'active', 2, 2, 2, '1', 0, '0000-00-00', 0, '', 0),
(454, 'Kushal', 'Sidapara', 'kushal6567@gmail.com', 'Kushal sidpara', '$2y$10$iG7KFnJPdaHB8gPDf3vgBOmXTIZevv6/MlziUi.bUGnsCXJxJgxuS', 'user', 'active', 2, 2, 2, '2', 0, '0000-00-00', 0, '', 1),
(455, 'Yahoo', 'Google', '', 'admin', '$2y$10$2U5J2sqYKzkK7vUptpVI5.NW72EfFp7vrIFDeSQO050pFFZfmhaU6', 'user', 'SD', 4, 1, 2, '1', 0, '0000-00-00', 10, '', 3),
(456, 'XyZ', 'Abc', '', 'Bhoot', '$2y$10$bo56lr/Oxq61Mpj6L4sz3.v/aq7ff7zOREs4pBFHdWSaKUFk7Y8Im', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 2),
(457, 'Vrushti', '', 'vrushtigosalia@gmail.com', 'Vrushti', '$2y$10$s2gzy4VX2CRwgC1UeMCFy.0OGuquncibvcM1SAKQcojGYBUahDhFi', 'user', 'active', 2, 5, 2, '2', 0, '0000-00-00', 0, '', 1),
(458, 'naman', '', '19c062@nirmauni.ac.in', 'naman27', '$2y$10$r7O7as/tMsGZjOdvOJVfieLCOf6ZEvqThawuvhDACp.uiJzsP685e', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(459, 'd', '', '', 'd', '$2y$10$Z.myN49woY16IJR0LQXEZOHShGEwGDkp./gIqEXgBTidqhkc7z//.', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 7),
(460, 'Siddhi', 'Mistry', 'sidiimail09@gmail.com', 'Sidii_09', '$2y$10$SXKvsb/T9LfQ70Q6JM.G0eBOZqXe3zOjyZrrZhZ4zwI2z3tsOGCcu', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 2),
(461, 'Manan', 'Parmar', 'mananparmar7042@gmail.com', 'Mann2001', '$2y$10$iwrv9KFyHjvwk7mxNcPRFuBaaW/BaPH8TJPJvGsbtmkz9TjqLva0K', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(462, 'Jay', 'Shah', '', 'Jay shah', '$2y$10$0Hoip8wrHxQwRIj4F1ZWYO1dnT.kYoUDr6dboAfkma/Ea0wrMqKWe', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(463, 'Tanhaji', '', '', 'damnbro123', '$2y$10$Vl.7o2euSVjLUw5YIYQ39Ot3hicwVFlZ.hDIMnyT2ai7y/zb7V4XO', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(464, 'PARAM', 'PATEL', 'parampatel2425@gmail.com', 'Chrollo_Lucifer', '$2y$10$48y.a.SQ3.lyK4MJ/5j7t.DooyLSRbB5wRuztJ.y2wA6VOIZwdB/m', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(465, 'Dhruv', 'Ramani', 'dhruvramani1234@gmail.com', 'Dhruv_7048', '$2y$10$mNkaDRcf8DGmDgv0KfZZ9.qJOG7VolVTLPP.BeFIZh3LcCLqcAsgK', 'user', 'active', 2, 6, 2, '2', 0, '0000-00-00', 0, '', 1),
(466, 'Mihir', '', '', 'Mihir111', '$2y$10$adAaXKslgZSp9lrZtOis9e.hvljA//8OVsCIwskN6jk0wnsh9WxS2', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(467, 'SHAH', 'JAINISH', 'jainish_shah45@yahoo.com', 'JAINISH SHAH', '$2y$10$u//gzBWnOrkb1ThwkeUN5eedPwoN41HDocRRFD4IFnMwtgHVImyFG', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(468, 'Nandan', '', 'nandanmandalia7@gmail.com', 'NandanMV', '$2y$10$DFndhqn0gnTfU0vMh55tquKVSId4UpCYfPlQ9P9sT70HA4HUSkV6y', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(469, 'Monin', 'Modi', '', 'Moni ', '$2y$10$mnY6NPyJ6VLbL3U4F45g1Oq.TTE6hqqXXfc8EdOi1Cw8hrpKhpLqm', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(470, 'Smith', '', '', 'Smith34', '$2y$10$Ey9JewSuejWM7pb0KCCjsu9nzL3RLf15ds4/d7cGKYDqsbIMrH5lS', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(471, 'Malay', '', '', 'Malay', '$2y$10$91E1w.L44YFbDLFitj7ovuBSdPCI9h2cvT6gY85ruPyjQ1rYcpCOC', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(472, 'Nitya', '', '19b044@nirmauni.ac.in', 'Nitya patel', '$2y$10$ak07f/ifcC1vMZ4HdWLg/OQ0z3491ysIdv2dth/5W8tWGdsrIzTa6', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(473, 'Dhruvin', '', '', 'DhruvinK', '$2y$10$ANvJZz9QRqMnmYQmhZ2SeeneFubwwh0HfSpV20ioGvforl/B7kMRq', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(474, 'Bimal ', 'Gajera', '', 'bimal gajera', '$2y$10$DdjjPb7PtfhYMvJUoWFObedCSHGtER0Qisd/r7iAT6ESXSGuUe0Pe', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(475, 'Het', '', '', 'Hetshah', '$2y$10$m.euvjPBRMP4BD9.j3Zxwu4wndYoTcfo546q89i0wJQ7lHS2FhW.C', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(476, 'Krunal ', 'Ghetiya ', '', 'Krunal ', '$2y$10$cXCpsbELcMG1blSj1XyvI.OFpA0aIlox17oBVxt/NSS7TSPsoicjq', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(477, 'Sakshi', '', '', 'Sakshi1601', '$2y$10$3ph/nBtyIlThsp6VcRFiV.RywldN0u1DURkwrJvLLQZ2vvKlLON0y', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 3),
(478, 'Vishvas', 'Hapani', 'vishvashapni332@gmail.com', 'vishvas hapani', '$2y$10$zgRKXFyGXjEo5DwyT.7eOew/FnoZd7Z400Z./rpZWWFXMI44O86Ue', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(479, 'Ranpariya ', 'Jiniyash ', 'jiniyash2007@gmail.com', 'Genius', '$2y$10$AhqIUSGKcTVF1qeYTlif8OHRkwjOQAM9Ti/U9Gm8rTLe8qn8Yr94K', 'user', 'active', 2, 7, 2, '2', 0, '0000-00-00', 0, '', 1),
(480, 'Xya', 'Hij', '', '123', '$2y$10$OGpFj3JEboLLyIgUsnxNg.oc2npyQ6uHFuOSP7ylVa6RiU5jchfn.', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(481, 'Axat', 'Mehta', '', 'Axat', '$2y$10$lz.zgGJm1bAmQyawcXNVBuNQ1ZoL/FNTIBrbRC4rs9F8ZYHuGrmSS', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(482, 'Darsh ', 'Patel ', '19k063@nirmauni.ac.in', 'Darsh1406', '$2y$10$CEWH3O1/fiL0wLmu1F/B4eD4ZN8TicrM6H/d08ActcNUMDWtpXjGW', 'user', 'active', 2, 6, 2, '2', 0, '0000-00-00', 0, '', 1),
(483, 'Smit', '', '', 'Smit', '$2y$10$BxPU7Ddt1Pv85U3ACvl5oe9wYRUYX020snsTAjUZxrZ9FgmSFOw/a', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(484, 'Deep', '', '', 'Dp', '$2y$10$IB/w7eY97NA8o83y/1CoZ.MaIk4ns10SywW/8gi6qUnUpfNcPRRTq', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(485, 'Rishi ', '', '', 'Rishi ', '$2y$10$Cxm34dkoTeVlBG.B1ZsYMOic39btauC0toxuAbxzf7Gsyo8Z9X7Te', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(486, 'Meet', '', '', 'Meet1509', '$2y$10$uVNDYZUmA4/IMkU/VVha0uqGIu9Jj2oImoJfLapNC/i.RODlM1M/u', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(487, 'Yash', 'Patel', 'yashpatel4456@gmail.com', 'yash1616', '$2y$10$Zv8xmAOIrQpNJfDGDOLjOud8IX7Ckbi6B20AQN2RWZ8b.6R2SMsw.', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(488, 'Mayursinh', 'U', 'rmayursinh333@gmail.com', 'rathodmayursinh', '$2y$10$44a5VHXvi1uumlkpVe0w0OMuVMl7QWtnvR.Qu3fFG0Td9Xo2VBaqG', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(489, 'S', 'P', '', 'S', '$2y$10$Ml5yrsiRjxMCoEGfRQMgmOAAzhZGAdXMd9wuNGtR1c.FRB1XBge1y', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(490, 'Bhavya', 'Bhut', '', 'Bhavya bhut', '$2y$10$nuX7d.nlwyIHw7D7Ybqi2u293ryyEQdDF1hXwlp7y989dXQhyCT82', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(491, 'Jayesh', 'Pandya', '', 'Jayesh523', '$2y$10$oI2MVdfzs/6QTZDjvQxbgO5UU.dI6G2AxJkjFl9dVcIagYIJdgfqa', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(492, 'Aryan', 'Manani', '19m020@nirmauni.ac.in', 'Aryan Manani', '$2y$10$1rQaLUq3ealY9dn84DJDbOxeeat3eT87YrYz8oJWvpV8fMUlaaeZu', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(493, 'Abhay ', 'Shah', '', 'abhay4505', '$2y$10$0fx8ua18oRMio5EcPFV5GuF8ToOASRVQcHiZbB.2AQFS7IezW4ZWy', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(494, 'Viraj', 'Patel', 'jgdvirajpatel@gmail.com', 'Jgdvirajpatel@gmail.com', '$2y$10$wb6VZzznxAWMDlbfkYPHyeyzbeCZfke06b/FLmwovzabrOaZRotba', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(495, 'Parth', 'Jain', '', 'jainparth0806', '$2y$10$h8ko6syTv5IPecSjIpR2fePL/tg4K7O0B/zZVy1Tg9cHA0PxxXfnO', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(496, 'Kanjiya ', 'Dipesh', 'dipeshkanjiya580@gmail.com', '19-005', '$2y$10$49sb/2QJdQvxOcCbNDGT0ON3ZeIcBv41MU3VdGNf36Z6qGdeE9dBK', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(497, 'Mayusha', '', '', 'Mayusha', '$2y$10$7RZ/Rkol4c1Pk3o9RYVI.OVlxizG1xN9IK4yC55wrBPcssp6EY2bm', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(498, 'Dhruvil', 'Shah', 'dtshah2001@gmail.com', 'Dhruvil', '$2y$10$xq/CGJsYb7URb2a3q8a4eeNwG/odVsL3B83acMRbUDsC8lBIsgPMW', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(499, 'Meet', 'Makwana ', '', 'Meet makwana ', '$2y$10$9.8HwXyXXlsz14Vt65ekFex8DrSLEBeivrvRum4ogGYy3iZMeasDG', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(500, 'zeel', '', '', 'zeel1234', '$2y$10$pgve7yBlGlO9VKPrnuWPruSMXCP7n5a9doJUDnGB7lGmfHc5l5a2O', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(501, 'Ketul', 'Mehta', '', 'Ketul412', '$2y$10$yxKp4K1Pun/k9ypl.8nLlOUo5fg5.e7wE8PvIllW2O3lvRek9FRhG', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(502, 'Ajay', '', '', 'Ajay', '$2y$10$LznaChXb3ieW8OoOdu2dauJWfWA/hd7c/ecZb6rCiELUfxXN7ATpO', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(503, 'Hetav', '', '', 'Hetav1805', '$2y$10$K5ZQBAnLGwuADjjy2ym7oORBBon0OlXpNIrj53xvZCpfP8khB6ZFy', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(504, 'Shah', 'Panth', 'shahpanth.d@gmail.com', 'Panthmusic', '$2y$10$dk6ImIAUaboRh/4Zr/3qA.bERyXP1qOiWc9LGHcGU2Q8Hw09sroN2', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(505, 'M', 'N', 'mohitknihalani@gmail.com', 'M N ', '$2y$10$li7BWZI1rbvgxgfhwu5p.ekaqs0s.uAUeDmHusH2yWyH14dW7oZh2', 'user', 'active', 4, 5, 2, '', 0, '0000-00-00', 0, '', 1),
(506, 'Dhaval', 'Joshi', 'joshidhaval677@gmail.com', 'Dhaval123', '$2y$10$Xu2/woNE/8cOlVKXh1HkF.EAn7UUo44rhIyyx7UfeDIpGhhymEcjm', 'user', 'active', 4, 4, 2, '2', 0, '0000-00-00', 0, '', 1),
(507, 'Kiran ', 'Pathak', '19c013@nirmauni.ac.in', 'Kiran Pathak', '$2y$10$ZjPKi.QX0F462scZ3ymbHuASjM34nNT7lQriH0mW0oMb77KlArn3y', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 0),
(508, 'A', 'S', '', 'As', '$2y$10$ckqTBqmKAeUIC7j22JLz8./mb8dEZhB9P.7RMgaZVh2xB1C4rnsYe', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(509, 'Het', '', '', '19b032', '$2y$10$dw2uB8.k9HKz6jIBO2c.6.SRElSGjHg9VeSIM6r3OynPa484eK8FS', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(510, 'Smit', '', '', 'smitsonii', '$2y$10$EzmkavDFqx4HSGApAmyzaucDT6nlR8Ic.rSpCNs6eolj7cACF5UQW', 'user', 'active', 2, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(511, 'Nikhil', '', '', 'P', '$2y$10$ZmXg11Mlf32oLDQ6KMfKjelXnOubk4Ihy5AKGAcNdDNfszpTGjy1W', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(512, 'Mukul ', 'Sharda', 'janak.mukul28@gmail.com', 'Mukul Sharda', '$2y$10$qSwO4zc0iVs2VVDhAKlEWumrzCicgcA0w8VHECqrRp8uCOt9O6QV6', 'user', 'active', 2, 4, 2, '2', 0, '0000-00-00', 0, '', 2),
(513, 'Neel', 'Lakdawala', '', 'Neel', '$2y$10$XsFJM/Z10VpWFxkuHOaBYux9rPtyqFho5VUJA/nCu2.MeqD.y3nyy', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(514, 'Aakarshak', 'Nandwani', '', 'Aakarshak8', '$2y$10$6wpfR2gT/aKuygbjEvY4UO1mINrdP9Ag7/eSbhVoFqQMHSy3/ojp2', 'user', 'active', 2, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(515, 'Aaryaveer', 'Rajput', '', 'Aaryaveer', '$2y$10$Y1iboWAV9zJEsvq6WN6uYOBV9jnfZNQ9ZmSQfGc.Jb5NoGpc1V2BC', 'user', 'active', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(516, 'Maarjani', '', '', 'Maarjani', '$2y$10$mEJbboY14aKteLrtZel1.e56TKfduG7YTVHXwuAklR7zjLf0gUzaK', 'user', 'active', 2, 3, 2, '2', 0, '0000-00-00', 0, '', 1),
(517, 'Jainil', '', '', 'Jainil', '$2y$10$C7gyAaglht7sRZLqx9JnXO8KW6cJ3OnnGhkihqmmUzy0w0bNftzFS', 'user', 'active', 2, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(518, 'Punit', 'Bhawnani', 'punit.bhawnani@yahoo.com', 'punitbhavnani', '$2y$10$TmMhrNwA0EE7/odmsNQyJOm6acCGXJEoRZWrgtdnInXebPTJTbYr2', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(519, 'Harmish', 'Patel', '19k065@nirmauni.ac.in', 'Harmishpatel', '$2y$10$ca9JHO6LR0EUrbs4AzlbduHGzwY4g5Lg3tHATMFFSEFoFcIS4yAF2', 'user', 'active', 2, 6, 2, '1', 0, '0000-00-00', 0, '', 1),
(520, 'Sarthak', 'Bhandari', '19h076@nirmauni.ac.in', 'Sarthak_0907', '$2y$10$4W1gpCW3E953LV6cR.FDYetvYAkuuhrxkR/Op1sMtiJ5OV4AORUZ6', 'user', 'active', 2, 5, 2, '2', 1, '0000-00-00', 0, '', 1),
(521, 'Jay', 'Patel', '19d081@nirmauni.ac.in', 'Capt', '$2y$10$K9eew4cjgNYK/HVmVYk3P.Ojtst.MdvLBBjZUkOeJeE9ETjVpf7J2', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(522, 'Bhargav', '', '', 'Bhargav', '$2y$10$Y2exooJU4IXQgYnwJhXb8uaTos9k0V.Qmj2ofSBmgJbQw9h.Maw.2', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(523, 'Tarang', 'Shah', '', 'Tarangshah', '$2y$10$hIhPiTn4rA8GITxre84/texVFk8EZYEPIQzMq.FRnXW3xVCeIs/Fm', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 2),
(524, 'Dharmik', 'Bavishi', 'dharmikdharmik1@gmail.com', 'dharmikbavishi', '$2y$10$yW4usnQC72bMvt8a9ug22u.IjKHrA2WsgDaCUWyoGpZ3c1f5AXG7m', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(525, 'DEEPKUMAR BIPINBHAI SHEKHAT', '', '', 'dbshekhat0', '$2y$10$0ewwhydQxdEPt0BtUxFuXeIcDh0mVVHAqok0QcS8ZSenI.lvCJr0u', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(526, 'Bharat', 'Keshwala ', '', 'Bharat Keshwala ', '$2y$10$bfZ/Hv5V5jBGOPbvOiNFMuITKRLpx5oMrcdwnZRCaLWtXEckcTJnO', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 0),
(527, 'Umamg', 'Suthar', 'bharatgajjar288@gmail.com', 'Umang', '$2y$10$ubhLy53yjRF1u8Pf4ZaFJuDXptGpoXo.gAoneWW9mhY.Coe6KnBAK', 'user', 'active', 4, 4, 2, '2', 0, '0000-00-00', 0, 'b17f2235b583ab23be7eea5f5be971e47f59541d0fa28b8a517509fb88dff8052e37493627ae737a3272deda37d79d95a8f0', 3),
(528, 'Rishabh', '', 'riahabhparmar333@gmail.com', 'Rishabh', '$2y$10$DBisXbPrEFiG0OIDu8OUgOosBTdE3dH0VsSyz7.F9zIWU19zceYVq', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(529, 'Parth', 'Shah', '18bce219@nirmauni.ac.in', 'parth_99', '$2y$10$9CZhvSVYH/9fSjK8zTQ5RODGfGBcwQP7m7G3dSgOqln5TziPiz8Ym', 'user', 'active', 4, 1, 2, '', 0, '0000-00-00', 0, '', 1),
(530, 'Jaimin', 'Sachapara', '', 'Jaimin Sachapara ', '$2y$10$jQIaK8q0Wzqo7Yqhqz3lPOCIjEz0PTNSY3zKXH/WD8N01h0DT5XzK', 'user', 'active', 2, 7, 2, '2', 2, '0000-00-00', 0, '', 1),
(531, 'Keval', 'Kanzariya', 'kevalkanzariya41@gmail.com', 'KKR', '$2y$10$qNtVzqH46vgxQyGheH0B8eda.vtL1x8Uoz6BOx3A5Z5BPQt9y95ke', 'user', 'active', 2, 7, 2, '1', 0, '0000-00-00', 0, '', 1),
(532, 'MIHIRKUMAR', 'PRAJAPATI', '19bee514@nirmauni.ac.in', 'MIHIR', '$2y$10$DX56LfmYjvRz7juusVsJDu/mLucDE5ozDAs29N/YXZUhGKtMf9ZSu', 'user', 'active', 4, 4, 2, '2', 0, '0000-00-00', 4, '', 1),
(533, 'Tirth', 'Patel', '18bce245@nirmauni.ac.in', 'tirth1306', '$2y$10$yxolI9ugtJYXiO1hAzRe8.7DyEivBQ96ItHoKzR0Onno5bDK7ZxPu', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 2),
(534, 'Divy', 'Chavda', 'chavdadivy@gmail.com', 'divy_chavda', '$2y$10$7YXfWYqhPPiypD3Qoh6f1edslICwO0M4N5FuAluvb4xj9ZzmcqBCO', 'user', 'active', 4, 1, 2, '2', 0, '0000-00-00', 0, '', 3),
(535, 'Ayush', 'Jain', '18bce082@nirmauni.ac.in', 'ayushjain1290', '$2y$10$teMuT9jSKzWNbOAgVb5T3.17X1RZ7R4pULw11C8M9q2mdUIKxY7uu', 'user', 'active', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(536, 'Bharat ', 'Keshwala ', '19BEE510@nirmauni.ac.in', 'BharatKeshwala123', '$2y$10$9zJZnXjtjCdt/yIEBjSdLus4UIEMN3Q6f7dF7CdZJEfIzpJeZ44Oy', 'user', 'active', 4, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(537, 'nahoy', 'suvaatkarechhe', 'username@gmail.com', 'usernameusername', '$2y$10$xsivrG20eY0qXvOxszJQZuzG6khzRmhkKS9QtgVOjMSGEMZUHsZh2', 'user', 'disabled', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(538, 'Mihir', 'Prajapati', 'mihirprajapati0001@gmail.com', 'MIHIR2501 ', '$2y$10$2xU3RNnrJg5zXP3Asm/YRelNSpLF85z3nUhbhqiIo.h4USjbHI6vC', 'user', 'active', 4, 4, 2, '2', 0, '0000-00-00', 4, 'e8dd8d5ea59367fb4d9a09f17d507a56f8028a6e08ec23bde2205bdbcfb7c73f9e2f728700320c0a1ac3ec22de886de431c6', 1),
(539, 'yash', '', '18bce263@nirmauni.ac.in', 'hunter0410', '$2y$10$BLqUJprkWV6LQjlSflYdCeagD7dQ4MqPKUqpYJaErssgOFv77O832', 'user', 'active', 4, 1, 2, '2', 1, '0000-00-00', 0, '1517c2a6068b2f460c558271960b58b753987231b05e687e7a34883681e2590cfaceef242fecc9ef0b5dd62db74b9ce63ff3', 2),
(540, 'fname', 'lname', 'email@gmail.com', 'cusername', '$2y$10$3HEyF7PPCt0k.rCh2dXM..QiHSe911YqOLAqqFSKROAOn9bNN08gi', 'user', 'active', 2, 1, 2, '1', 1, '0000-00-00', 1, 'c9c184dd5dd6000d22239c60227cdf79390da604ce0953d63b336cb8abf9f3c857cfee6ce37444ff6d5c6b4333ed81396ad8', 5),
(541, 'sdcn', ' jnjn', 'njnjnj@gmail.com', 'njnjn', '$2y$10$lJMzkWf04wdPr/gVG6WT1ODwozJJeNexLsF6L1JRw/oF9jQEMB.mO', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(542, 'ygg', 'ggc', 'HARSHPARMAR9024@GMAIL.COM', 'yffc', '$2y$10$LG9cfQw3eTu8yW31qp5dK.BdXSWh.bU3E91GAT7HgHJrH7cBXgleO', 'user', 'active', 3, 4, 2, '1', 0, '0000-00-00', 0, '', 1),
(544, 'uhu', 'huhu', 'dhu@gmail.com', 'huhhu', '$2y$10$KnVZh/3rXanNG7FSTGim7un8wZa4.8SjF9UgWmcTtWCxeLwTKgsCO', 'user', 'active', 2, 1, 2, '2', 0, '0000-00-00', 0, '', 1),
(545, 'Dev', 'Patel', '', 'dev1632', '$2y$10$2jfzquJ8M.Di9SQOrF0Qk.TyGCPPZJPcbCdUbVje2XdpOSOtsuKKi', 'user', 'active', 1, 3, 2, '1', 0, '0000-00-00', 1, '', 1),
(546, 'Harshit', '', '', 'Harshit1q1', '$2y$10$1.vQ1rxR/g6hnyV8Kj.PkeWlYnh3vA5SfeujcvqCKe.96Xbe4P6kO', 'user', 'active', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(547, 'Dilipbhai', '', '', 'DSLuhar', '$2y$10$c/onxrBvHHTT5albKfkEae.H3UniW2XhT4q9ZibbdXGuMf/tSK9oG', 'user', 'active', 4, 2, 2, '', 0, '0000-00-00', 0, '', 1),
(548, 'Miraj', 'Chawda', 'chawdamiraj50@gmail.com', 'Normalguy26', '$2y$10$vyZq9zL16z4ycCDJj5n/RubZALTnAnsysgvd68yGfoRfFAtaRLYo2', 'user', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(549, 'Ajit ', 'Patal', '19h021@nirmauni.ac.in', 'Ajit ', '$2y$10$1IRqSSZ2rALSbspwvdv6pO40RmMxM7tkFmZ2u3RKzFh16yE/uIEf.', 'user', 'active', 2, 2, 2, '2', 0, '0000-00-00', 0, '138ea42b96fcdbc249990cce9466b463265e4a0e111c8ef2a4e1c4d4038543e2715471ddf48d6b0ac09d729fcf111b9798c8', 0),
(550, 'Himanshu', 'Nakrani', 'himanshunakrani0@gmail.com', 'Himanshu', '$2y$10$fig7aJbOU3BjmmCgp5/U5OQkpgw2I4EN7/l.YE3JsIOAPThY6Bwg6', 'user', 'active', 1, 3, 2, '1', 0, '0000-00-00', 0, 'de7e10ab8dedd3748c87eefd0d059c7be6973ed5907c54d3ee27b42b367f6e5e1f24218b55a61ba9c6709c2e71c8c5f4d85e', 0),
(551, 'Himanshu1', 'Nakrani', 'him.nakrani@gmail.com', 'Himanshu1', '$2y$10$7xqq9q9v31EYhZ3XhFBl7uK1hJKuix9o96JLMSlbJOlZ8Atv.vU9K', 'user', 'active', 1, 3, 2, '1', 0, '0000-00-00', 0, '', 1),
(552, 'fname1', 'lname1', 'email1@gmail.com', 'username1', '$2y$10$jWfAOE5k6p544ovoeYH5vOGA5foZ0v1PmxDaf0YXon4nX7jVTNoJC', 'user', 'disabled', 5, 2, 2, '2', 0, '0000-00-00', 0, '', 1),
(553, 'sanjay', '', 'sjsuthar@ymail.com', 'sanjay13', '$2y$10$xEm3Vk/LQsAuc0QkL2qsI.DwTMiFwQouNTVvzNkPsv0EyPXGG/g/.', 'admin', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(554, 'fname10', 'lname10', 'email10@gmail.com', 'username10', '$2y$10$C4wiiZ7UZtxZTt87Jj11JO2imdkw5yV9LZoYGZpGcvVK2pSR8arZe', 'user', 'disabled', 4, 2, 2, '', 1, '0000-00-00', 3, '', 1),
(555, 'KCPoBWlY', 'KCPoBWlY', 'KCPoBWlY@burpcollaborator.net', 'KCPoBWlY', '$2y$10$0NQ6g9IZWlmgo6a31CJjV.Sjqt9reoAjlpPXW/UPaZhCRdJ3O5JoS', 'user', 'disabled', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 10),
(556, 'meVFZrnS', 'meVFZrnS', 'meVFZrnS@burpcollaborator.net', 'meVFZrnS', '$2y$10$d7xplnzmSZuXdonMLD8YleM2EzBQzfYD0jmihemA4Lhz7iqWItak6', 'user', 'disabled', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 5),
(557, 'PgzWHqKH', 'PgzWHqKH', 'PgzWHqKH@burpcollaborator.net', 'PgzWHqKH', '$2y$10$jUpxOB.k2KpNNspgSBdkwev/rVffpJPbiUaLf4pHQhVUNIMxPbDE2', 'user', 'disabled', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 5),
(558, 'nAZHIAIG', 'nAZHIAIG', 'nAZHIAIG@burpcollaborator.net', 'nAZHIAIG', '$2y$10$Eb4Asu9ah6GkKtkQAh1gsO/f4dFXRcL4biwF5dmuAVzS3ETkd3Tqu', 'user', 'disabled', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 0),
(559, 'UcxlLAGL', 'UcxlLAGL', 'UcxlLAGL@burpcollaborator.net', 'UcxlLAGL', '$2y$10$RkTOgddavuGHrMCOptzfLesKqChx9qsfukpv7v9CbS.YTFEX3TtY.', 'user', 'disabled', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(560, 'gImkulxt', 'gImkulxt', 'gImkulxt@burpcollaborator.net', 'gImkulxt', '$2y$10$6Plt41DT684XjI.2j0sUfOIONqktvWmYNSPFYr5weNRr8RaAfvmlS', 'user', 'disabled', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(561, 'FxUWpPmw', 'FxUWpPmw', 'FxUWpPmw@burpcollaborator.net', 'FxUWpPmw', '$2y$10$pxz2wEqQVyCO69zeXftxD.5Y7WR4pOlDXlyR.B23iX34La.s1uMWK', 'user', 'disabled', 1, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(562, 'fname11', 'lname11', 'email11@gmail.com', 'username11', '$2y$10$mi42HVHDrqylr0BFYd9zQenE.BxcDr2sNz3DRsg4i8R.lp8y28sB6', 'user', 'disabled', 3, 4, 2, '2', 1, '0000-00-00', 0, '', 1),
(563, 'mniojmo', 'cef', '', 'cwec', '$2y$10$2EoCDZGMNo2f0CwEmlHtRusewghJcwgMFK/V5.UgMKf37INzBVJZu', 'user', 'disabled', 4, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(564, 'fname', 'lname', 'email101@gmail.com', 'uname', '$2y$10$PgaSECSAZC4DpyX0VW621ufSCwgtgogTm0N1.lcnj6foFeuYN24xm', 'user', 'disabled', 2, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(565, 'Dhruval', 'Patel', 'pdhruval2310@gmail.com', 'Dhruval', '$2y$10$.DX8jssHy7xWOcQVFASfiOlm22khWbLsqk68tx4rKHUfQfkGKcRZ6', 'user', 'active', 2, 2, 2, '2', 1, '0000-00-00', 0, '', 1),
(566, 'Sanjay ', '', '', 'SS', '$2y$10$hSUTwLHdCMm4URak8DW6ROOQCQq4Bs6MfzvErKmFlwOjyLpc13Pmu', 'admin', 'active', 4, 5, 2, '1', 0, '0000-00-00', 0, '', 1),
(567, 'yash', 'patel', 'yp74371@gmail.com', 'yash2181', '$2y$10$hLl5tGD9.Oekt3Xo1XZJjembH7oO9sxTGW3EHb9.yjdVa2F7Efv2S', 'user', 'active', 3, 1, 2, '1', 0, '0000-00-00', 0, '', 1),
(568, 'Devansh', 'Suthar', '', 'dss56', '$2y$10$cWpbY/gwY0ARnf0aEWX8K.J/.ZZwR9ueWk30iEgYNOFq6vxZNTAZ.', 'user', 'active', 5, 1, 2, '1', 1, '0000-00-00', 0, '', 1);
INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `username`, `username_id`, `user_password`, `user_role`, `user_account_status`, `user_semester_id`, `user_branch_id`, `user_college_id`, `user_group`, `storage`, `user_registration_date`, `wrong_attemps`, `token`, `visits`) VALUES
(569, 'Devansh', 'Suthar', '', 'NewDss', '$2y$10$fkLXeg30uLEat9KZPI6RZu2U9YTHKl4QDBXCJkO6Oze/1twA/IBR6', 'user', 'active', 5, 1, 2, '1', 0, '0000-00-00', 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_branch`
--

CREATE TABLE `user_branch` (
  `branch_id` int(2) NOT NULL,
  `branch_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_branch`
--

INSERT INTO `user_branch` (`branch_id`, `branch_name`) VALUES
(1, 'CSE'),
(2, 'Chemical Engg.'),
(3, 'Elect. & Comm. Engg.'),
(4, 'Electrical Engg.'),
(5, 'Civil Engg.'),
(6, 'Inst. & Cont. Engg.'),
(7, 'Mechanical Engg.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activate_account`
--
ALTER TABLE `activate_account`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`component_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `online_users`
--
ALTER TABLE `online_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `sub_components`
--
ALTER TABLE `sub_components`
  ADD PRIMARY KEY (`sub_component_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_branch`
--
ALTER TABLE `user_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activate_account`
--
ALTER TABLE `activate_account`
  MODIFY `action_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `component_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online_users`
--
ALTER TABLE `online_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `sub_components`
--
ALTER TABLE `sub_components`
  MODIFY `sub_component_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=570;

--
-- AUTO_INCREMENT for table `user_branch`
--
ALTER TABLE `user_branch`
  MODIFY `branch_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
