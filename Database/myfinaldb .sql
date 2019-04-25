-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 02:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfinaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `CommentText` text NOT NULL,
  `CommentDate` datetime NOT NULL,
  `CName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `TeacherID`, `UserID`, `CommentText`, `CommentDate`, `CName`) VALUES
(27, 24, 16, 'Testing ', '2019-04-16 14:17:25', 'Introduction To Mutant Life'),
(28, 24, 16, 'Lorem ipsum', '2019-04-16 14:19:47', 'Introduction To Mutant Life'),
(29, 23, 16, 'lorem ipsum\r\n', '2019-04-16 14:37:35', 'Course Test'),
(30, 24, 16, 'Pew pew pew!', '2019-04-16 14:39:13', 'Introduction To Mutant Life'),
(31, 23, 16, 'pew pew pew pew!', '2019-04-16 14:40:35', 'Course Test');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `PhoneNo` varchar(250) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `PhoneNo`, `Message`, `Date`) VALUES
(1, 'Arnob', 'sanzamsyed71@gmail.com', '', 'Hey yo boi', '2019-04-16 14:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`) VALUES
(19, 'Algorithms'),
(6, 'Architecture-1'),
(13, 'Batman'),
(10, 'Course Test'),
(9, 'Data Communication'),
(20, 'Database'),
(17, 'Digital Electronics and Pulse Techniques'),
(1, 'Digital System Design'),
(24, 'Discrete Mathematics'),
(15, 'Industrial Law and Safety Management'),
(23, 'Information System Design and Software Engineering'),
(7, 'Introduction to Assembly Language Programming'),
(8, 'Introduction to C Programming Language'),
(30, 'Introduction To Mutant Life'),
(29, 'Mathematical Analysis for Computer Science'),
(2, 'Mathematics-I'),
(14, 'Microcontroller System Design'),
(22, 'Numerical Method'),
(26, 'Object Oriented Programming'),
(27, 'Operating System'),
(25, 'Software Development I'),
(18, 'Software Development V');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DepartmentID` int(11) NOT NULL,
  `DepartmentName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DepartmentID`, `DepartmentName`) VALUES
(14, 'Aeronautical Engineering'),
(7, 'Architecture'),
(5, 'Arts and Science'),
(3, 'Civil Engineering'),
(1, 'Computer Science and Engineering'),
(19, 'Department Add Test'),
(2, 'Electrical Engineering'),
(4, 'Mechanical Engineering'),
(15, 'Naval Engineering'),
(6, 'Textile Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `junction_course_teacher`
--

CREATE TABLE `junction_course_teacher` (
  `TeacherID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `junction_course_teacher`
--

INSERT INTO `junction_course_teacher` (`TeacherID`, `CourseID`) VALUES
(5, 8),
(6, 7),
(6, 20),
(6, 23),
(7, 24),
(8, 19),
(9, 25),
(10, 26),
(11, 14),
(12, 27),
(13, 29),
(14, 22),
(15, 7),
(16, 20),
(17, 17),
(17, 18),
(18, 14),
(19, 9),
(20, 9),
(21, 15),
(23, 10),
(23, 30),
(24, 30);

-- --------------------------------------------------------

--
-- Table structure for table `junction_department_course`
--

CREATE TABLE `junction_department_course` (
  `DepartmentID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `junction_department_course`
--

INSERT INTO `junction_department_course` (`DepartmentID`, `CourseID`) VALUES
(1, 1),
(1, 2),
(1, 7),
(1, 8),
(1, 9),
(1, 14),
(1, 15),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 29),
(1, 30),
(3, 2),
(3, 15),
(7, 6),
(14, 20),
(19, 10),
(19, 13);

-- --------------------------------------------------------

--
-- Table structure for table `junction_teacher_attribute`
--

CREATE TABLE `junction_teacher_attribute` (
  `JunctionTeacherAttributeID` int(11) NOT NULL,
  `AttributeID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `AttributeStatusID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `junction_teacher_attribute`
--

INSERT INTO `junction_teacher_attribute` (`JunctionTeacherAttributeID`, `AttributeID`, `TeacherID`, `AttributeStatusID`) VALUES
(118, 1, 24, 3),
(119, 2, 24, 3),
(120, 3, 24, 3),
(121, 1, 24, 1),
(122, 2, 24, 3),
(123, 3, 24, 2),
(124, 1, 23, 1),
(125, 2, 23, 3),
(126, 3, 23, 2),
(127, 1, 24, 1),
(128, 2, 24, 1),
(129, 3, 24, 1),
(130, 1, 23, 1),
(131, 2, 23, 1),
(132, 3, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profanity`
--

CREATE TABLE `profanity` (
  `id` int(11) NOT NULL,
  `word` varchar(250) NOT NULL,
  `replacement` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profanity`
--

INSERT INTO `profanity` (`id`, `word`, `replacement`) VALUES
(1, '@$$', 'BAD WORD'),
(2, 'a$$', 'BAD WORD'),
(3, 'as$', 'BAD WORD'),
(4, 'a$s', 'BAD WORD'),
(5, '@$s', 'BAD WORD'),
(6, '@s$', 'BAD WORD'),
(7, 'amcik', 'BAD WORD'),
(8, 'andskota', 'BAD WORD'),
(9, 'arschloch', 'BAD WORD'),
(10, 'arse', 'BAD WORD'),
(11, 'ass', 'BAD WORD'),
(12, 'assho', 'BAD WORD'),
(13, 'assram', 'BAD WORD'),
(14, 'ayir', 'BAD WORD'),
(15, 'bi+ch', 'BAD WORD'),
(16, 'b!+ch', 'BAD WORD'),
(17, 'b!tch', 'BAD WORD'),
(18, 'b!7ch', 'BAD WORD'),
(19, 'bi7ch', 'BAD WORD'),
(20, 'b17ch', 'BAD WORD'),
(21, 'b1+ch', 'BAD WORD'),
(22, 'b1tch', 'BAD WORD'),
(23, 'bitch', 'BAD WORD'),
(24, 'bastard', 'BAD WORD'),
(25, 'boiolas', 'BAD WORD'),
(26, 'bollock', 'BAD WORD'),
(27, 'breasts', 'BAD WORD'),
(28, 'buceta', 'BAD WORD'),
(29, 'butt-pirate', 'BAD WORD'),
(30, 'cock', 'BAD WORD'),
(31, 'c0ck', 'BAD WORD'),
(32, 'cabron', 'BAD WORD'),
(33, 'cawk', 'BAD WORD'),
(34, 'cazzo', 'BAD WORD'),
(35, 'chink', 'BAD WORD'),
(36, 'chraa', 'BAD WORD'),
(37, 'chuj', 'BAD WORD'),
(38, 'cipa', 'BAD WORD'),
(39, 'clits', 'BAD WORD'),
(40, 'cum', 'BAD WORD'),
(41, 'cunt', 'BAD WORD'),
(42, 'damn', 'BAD WORD'),
(43, 'd4mn', 'BAD WORD'),
(44, 'dago', 'BAD WORD'),
(45, 'daygo', 'BAD WORD'),
(46, 'dego', 'BAD WORD'),
(47, 'dick', 'BAD WORD'),
(48, 'dike', 'BAD WORD'),
(49, 'dildo', 'BAD WORD'),
(50, 'dyke', 'BAD WORD'),
(51, 'dirsa', 'BAD WORD'),
(52, 'dupa', 'BAD WORD'),
(53, 'dziwka', 'BAD WORD'),
(54, 'ejac', 'BAD WORD'),
(55, 'Ekrem', 'BAD WORD'),
(56, 'Ekto', 'BAD WORD'),
(57, 'enculer', 'BAD WORD'),
(58, 'faen', 'BAD WORD'),
(59, 'fag', 'BAD WORD'),
(60, 'fanculo', 'BAD WORD'),
(61, 'fanny', 'BAD WORD'),
(62, 'fatass', 'BAD WORD'),
(63, 'fat@$$', 'BAD WORD'),
(64, 'fata$$', 'BAD WORD'),
(65, 'fatas$', 'BAD WORD'),
(66, 'fata$s', 'BAD WORD'),
(67, 'fat@$s', 'BAD WORD'),
(68, 'fat@s$', 'BAD WORD'),
(69, 'fatarse', 'BAD WORD'),
(70, 'fcuk', 'BAD WORD'),
(71, 'feces', 'BAD WORD'),
(72, 'feg', 'BAD WORD'),
(73, 'Felcher', 'BAD WORD'),
(74, 'ficken', 'BAD WORD'),
(75, 'fitt', 'BAD WORD'),
(76, 'Flikker', 'BAD WORD'),
(77, 'foreskin', 'BAD WORD'),
(78, 'Fotze', 'BAD WORD'),
(79, 'Fu(', 'BAD WORD'),
(80, 'fuck', 'BAD WORD'),
(81, 'fuk', 'BAD WORD'),
(82, 'futkretzn', 'BAD WORD'),
(83, 'fux0r', 'BAD WORD'),
(84, 'frig', 'BAD WORD'),
(85, 'frigin', 'BAD WORD'),
(86, 'friggin', 'BAD WORD'),
(87, 'gay', 'BAD WORD'),
(88, 'gaydar', 'BAD WORD'),
(89, 'gook', 'BAD WORD'),
(90, 'guiena', 'BAD WORD'),
(91, 'h0r', 'BAD WORD'),
(92, 'hax0r', 'BAD WORD'),
(93, 'h4xor', 'BAD WORD'),
(94, 'h4x0r', 'BAD WORD'),
(95, 'hell', 'BAD WORD'),
(96, 'helvete', 'BAD WORD'),
(97, 'hoer', 'BAD WORD'),
(98, 'honkey', 'BAD WORD'),
(99, 'hore', 'BAD WORD'),
(100, 'Huevon', 'BAD WORD'),
(101, 'hui', 'BAD WORD'),
(102, 'injun', 'BAD WORD'),
(103, 'jackass', 'BAD WORD'),
(104, 'jism', 'BAD WORD'),
(105, 'jizz', 'BAD WORD'),
(106, 'kanker', 'BAD WORD'),
(107, 'kawk', 'BAD WORD'),
(108, 'kike', 'BAD WORD'),
(109, 'klootzak', 'BAD WORD'),
(110, 'knulle', 'BAD WORD'),
(111, 'kuk', 'BAD WORD'),
(112, 'kuksuger', 'BAD WORD'),
(113, 'Kurac', 'BAD WORD'),
(114, 'kurwa', 'BAD WORD'),
(115, 'kusi', 'BAD WORD'),
(116, 'kyrpa', 'BAD WORD'),
(117, 'l3i+ch', 'BAD WORD'),
(118, 'l3itch', 'BAD WORD'),
(119, 'l3i7ch', 'BAD WORD'),
(120, 'l3!tch', 'BAD WORD'),
(121, 'l3!+ch', 'BAD WORD'),
(122, 'lesbian', 'BAD WORD'),
(123, 'lesbo', 'BAD WORD'),
(124, 'mamhoon', 'BAD WORD'),
(125, 'masturbat', 'BAD WORD'),
(126, 'merd', 'BAD WORD'),
(127, 'mibun', 'BAD WORD'),
(128, 'monkleigh', 'BAD WORD'),
(129, 'motherfuck', 'BAD WORD'),
(130, 'mofo', 'BAD WORD'),
(131, 'mouliewop', 'BAD WORD'),
(132, 'muie', 'BAD WORD'),
(133, 'mulkku', 'BAD WORD'),
(134, 'muschi', 'BAD WORD'),
(135, 'nazi', 'BAD WORD'),
(136, 'nepesaurio', 'BAD WORD'),
(137, 'nigga', 'BAD WORD'),
(138, 'nigger', 'BAD WORD'),
(139, 'nutsack', 'BAD WORD'),
(140, 'orospu', 'BAD WORD'),
(141, 'paska', 'BAD WORD'),
(142, 'penis', 'BAD WORD'),
(143, 'perse', 'BAD WORD'),
(144, 'phuck', 'BAD WORD'),
(145, 'picka', 'BAD WORD'),
(146, 'pierdol', 'BAD WORD'),
(147, 'pillu', 'BAD WORD'),
(148, 'pimmel', 'BAD WORD'),
(149, 'pimpis', 'BAD WORD'),
(150, 'piss', 'BAD WORD'),
(151, 'pizda', 'BAD WORD'),
(152, 'poontsee', 'BAD WORD'),
(153, 'poop', 'BAD WORD'),
(154, 'porn', 'BAD WORD'),
(155, 'p0rn', 'BAD WORD'),
(156, 'pr0n', 'BAD WORD'),
(157, 'preteen', 'BAD WORD'),
(158, 'prick', 'BAD WORD'),
(159, 'pula', 'BAD WORD'),
(160, 'pule', 'BAD WORD'),
(161, 'pusse', 'BAD WORD'),
(162, 'pussy', 'BAD WORD'),
(163, 'puta', 'BAD WORD'),
(164, 'puto', 'BAD WORD'),
(165, 'qahbeh', 'BAD WORD'),
(166, 'queef', 'BAD WORD'),
(167, 'queer', 'BAD WORD'),
(168, 'qweef', 'BAD WORD'),
(169, 'rautenberg', 'BAD WORD'),
(170, 'schaffer', 'BAD WORD'),
(171, 'scheiss', 'BAD WORD'),
(172, 'schlampe', 'BAD WORD'),
(173, 'schmuck', 'BAD WORD'),
(174, 'screw', 'BAD WORD'),
(175, 'scrotum', 'BAD WORD'),
(176, 'shit', 'BAD WORD'),
(177, 'sh!t', 'BAD WORD'),
(178, 'sharmuta', 'BAD WORD'),
(179, 'sharmute', 'BAD WORD'),
(180, 'shemale', 'BAD WORD'),
(181, 'shipal', 'BAD WORD'),
(182, 'shiz', 'BAD WORD'),
(183, 'skribz', 'BAD WORD'),
(184, 'skurwysyn', 'BAD WORD'),
(185, 'slut', 'BAD WORD'),
(186, 'smut', 'BAD WORD'),
(187, 'sphencter', 'BAD WORD'),
(188, 'spic', 'BAD WORD'),
(189, 'spierdalaj', 'BAD WORD'),
(190, 'splooge', 'BAD WORD'),
(191, 'suka', 'BAD WORD'),
(192, 'teets', 'BAD WORD'),
(193, 'b00b', 'BAD WORD'),
(194, 'teez', 'BAD WORD'),
(195, 'testicle', 'BAD WORD'),
(196, 'titt', 'BAD WORD'),
(197, 'tits', 'BAD WORD'),
(198, 'twat', 'BAD WORD'),
(199, 'vagina', 'BAD WORD'),
(200, 'viag', 'BAD WORD'),
(201, 'v1ag', 'BAD WORD'),
(202, 'v14g', 'BAD WORD'),
(203, 'vi4g', 'BAD WORD'),
(204, 'vittu', 'BAD WORD'),
(205, 'w00se', 'BAD WORD'),
(206, 'wank', 'BAD WORD'),
(207, 'wetback', 'BAD WORD'),
(208, 'whoar', 'BAD WORD'),
(209, 'whore', 'BAD WORD'),
(210, 'wichser', 'BAD WORD'),
(211, 'wop', 'BAD WORD'),
(212, 'wtf', 'BAD WORD'),
(213, 'yed', 'BAD WORD'),
(214, 'zabourah', 'BAD WORD'),
(215, '2g1c', 'BAD WORD'),
(216, '2 girls 1 cup', 'BAD WORD'),
(217, 'acrotomophilia', 'BAD WORD'),
(218, 'anal', 'BAD WORD'),
(219, 'anilingus', 'BAD WORD'),
(220, 'anus', 'BAD WORD'),
(221, 'arsehole', 'BAD WORD'),
(222, 'ass', 'BAD WORD'),
(223, 'asshole', 'BAD WORD'),
(224, 'assmunch', 'BAD WORD'),
(225, 'auto erotic', 'BAD WORD'),
(226, 'autoerotic', 'BAD WORD'),
(227, 'babeland', 'BAD WORD'),
(228, 'baby batter', 'BAD WORD'),
(229, 'ball gag', 'BAD WORD'),
(230, 'ball gravy', 'BAD WORD'),
(231, 'ball kicking', 'BAD WORD'),
(232, 'ball licking', 'BAD WORD'),
(233, 'ball sack', 'BAD WORD'),
(234, 'ball sucking', 'BAD WORD'),
(235, 'bangbros', 'BAD WORD'),
(236, 'bareback', 'BAD WORD'),
(237, 'barely legal', 'BAD WORD'),
(238, 'barenaked', 'BAD WORD'),
(239, 'bastardo', 'BAD WORD'),
(240, 'bastinado', 'BAD WORD'),
(241, 'bbw', 'BAD WORD'),
(242, 'bdsm', 'BAD WORD'),
(243, 'beaver cleaver', 'BAD WORD'),
(244, 'beaver lips', 'BAD WORD'),
(245, 'bestiality', 'BAD WORD'),
(246, 'bi curious', 'BAD WORD'),
(247, 'big black', 'BAD WORD'),
(248, 'big breasts', 'BAD WORD'),
(249, 'big knockers', 'BAD WORD'),
(250, 'big tits', 'BAD WORD'),
(251, 'bimbos', 'BAD WORD'),
(252, 'birdlock', 'BAD WORD'),
(253, 'bitch', 'BAD WORD'),
(254, 'black cock', 'BAD WORD'),
(255, 'blonde action', 'BAD WORD'),
(256, 'blonde on blonde action', 'BAD WORD'),
(257, 'blow j', 'BAD WORD'),
(258, 'blow your l', 'BAD WORD'),
(259, 'blue waffle', 'BAD WORD'),
(260, 'blumpkin', 'BAD WORD'),
(261, 'bollocks', 'BAD WORD'),
(262, 'bondage', 'BAD WORD'),
(263, 'boner', 'BAD WORD'),
(264, 'boob', 'BAD WORD'),
(265, 'boobs', 'BAD WORD'),
(266, 'booty call', 'BAD WORD'),
(267, 'brown showers', 'BAD WORD'),
(268, 'brunette action', 'BAD WORD'),
(269, 'bukkake', 'BAD WORD'),
(270, 'bulldyke', 'BAD WORD'),
(271, 'bullet vibe', 'BAD WORD'),
(272, 'bung hole', 'BAD WORD'),
(273, 'bunghole', 'BAD WORD'),
(274, 'busty', 'BAD WORD'),
(275, 'butt', 'BAD WORD'),
(276, 'buttcheeks', 'BAD WORD'),
(277, 'butthole', 'BAD WORD'),
(278, 'camel toe', 'BAD WORD'),
(279, 'camgirl', 'BAD WORD'),
(280, 'camslut', 'BAD WORD'),
(281, 'camwhore', 'BAD WORD'),
(282, 'carpet muncher', 'BAD WORD'),
(283, 'carpetmuncher', 'BAD WORD'),
(284, 'chocolate rosebuds', 'BAD WORD'),
(285, 'circlejerk', 'BAD WORD'),
(286, 'cleveland steamer', 'BAD WORD'),
(287, 'clit', 'BAD WORD'),
(288, 'clitoris', 'BAD WORD'),
(289, 'clover clamps', 'BAD WORD'),
(290, 'clusterfuck', 'BAD WORD'),
(291, 'cock', 'BAD WORD'),
(292, 'cocks', 'BAD WORD'),
(293, 'coprolagnia', 'BAD WORD'),
(294, 'coprophilia', 'BAD WORD'),
(295, 'cornhole', 'BAD WORD'),
(296, 'cum', 'BAD WORD'),
(297, 'cumming', 'BAD WORD'),
(298, 'cunnilingus', 'BAD WORD'),
(299, 'cunt', 'BAD WORD'),
(300, 'darkie', 'BAD WORD'),
(301, 'date rape', 'BAD WORD'),
(302, 'daterape', 'BAD WORD'),
(303, 'deep throat', 'BAD WORD'),
(304, 'deepthroat', 'BAD WORD'),
(305, 'dick', 'BAD WORD'),
(306, 'dildo', 'BAD WORD'),
(307, 'dirty pillows', 'BAD WORD'),
(308, 'dirty sanchez', 'BAD WORD'),
(309, 'doggie style', 'BAD WORD'),
(310, 'doggiestyle', 'BAD WORD'),
(311, 'doggy style', 'BAD WORD'),
(312, 'doggystyle', 'BAD WORD'),
(313, 'dog style', 'BAD WORD'),
(314, 'dolcett', 'BAD WORD'),
(315, 'domination', 'BAD WORD'),
(316, 'dominatrix', 'BAD WORD'),
(317, 'dommes', 'BAD WORD'),
(318, 'donkey punch', 'BAD WORD'),
(319, 'double dong', 'BAD WORD'),
(320, 'double penetration', 'BAD WORD'),
(321, 'dp action', 'BAD WORD'),
(322, 'eat my ass', 'BAD WORD'),
(323, 'ecchi', 'BAD WORD'),
(324, 'ejaculation', 'BAD WORD'),
(325, 'erotic', 'BAD WORD'),
(326, 'erotism', 'BAD WORD'),
(327, 'escort', 'BAD WORD'),
(328, 'ethical slut', 'BAD WORD'),
(329, 'eunuch', 'BAD WORD'),
(330, 'faggot', 'BAD WORD'),
(331, 'fecal', 'BAD WORD'),
(332, 'felch', 'BAD WORD'),
(333, 'fellatio', 'BAD WORD'),
(334, 'feltch', 'BAD WORD'),
(335, 'female squirting', 'BAD WORD'),
(336, 'femdom', 'BAD WORD'),
(337, 'figging', 'BAD WORD'),
(338, 'fingering', 'BAD WORD'),
(339, 'fisting', 'BAD WORD'),
(340, 'foot fetish', 'BAD WORD'),
(341, 'footjob', 'BAD WORD'),
(342, 'frotting', 'BAD WORD'),
(343, 'fuck', 'BAD WORD'),
(344, 'fuck buttons', 'BAD WORD'),
(345, 'fudge packer', 'BAD WORD'),
(346, 'fudgepacker', 'BAD WORD'),
(347, 'futanari', 'BAD WORD'),
(348, 'gang bang', 'BAD WORD'),
(349, 'gay sex', 'BAD WORD'),
(350, 'genitals', 'BAD WORD'),
(351, 'giant cock', 'BAD WORD'),
(352, 'girl on girl', 'BAD WORD'),
(353, 'girl on top', 'BAD WORD'),
(354, 'girls gone wild', 'BAD WORD'),
(355, 'goatcx', 'BAD WORD'),
(356, 'goatse', 'BAD WORD'),
(357, 'gokkun', 'BAD WORD'),
(358, 'golden shower', 'BAD WORD'),
(359, 'goodpoop', 'BAD WORD'),
(360, 'goo girl', 'BAD WORD'),
(361, 'goregasm', 'BAD WORD'),
(362, 'grope', 'BAD WORD'),
(363, 'group sex', 'BAD WORD'),
(364, 'g-spot', 'BAD WORD'),
(365, 'guro', 'BAD WORD'),
(366, 'hand job', 'BAD WORD'),
(367, 'handjob', 'BAD WORD'),
(368, 'hard core', 'BAD WORD'),
(369, 'hardcore', 'BAD WORD'),
(370, 'hentai', 'BAD WORD'),
(371, 'homoerotic', 'BAD WORD'),
(372, 'honkey', 'BAD WORD'),
(373, 'hooker', 'BAD WORD'),
(374, 'hot chick', 'BAD WORD'),
(375, 'how to kill', 'BAD WORD'),
(376, 'how to murder', 'BAD WORD'),
(377, 'huge fat', 'BAD WORD'),
(378, 'humping', 'BAD WORD'),
(379, 'incest', 'BAD WORD'),
(380, 'intercourse', 'BAD WORD'),
(381, 'jack off', 'BAD WORD'),
(382, 'jail bait', 'BAD WORD'),
(383, 'jailbait', 'BAD WORD'),
(384, 'jerk off', 'BAD WORD'),
(385, 'jigaboo', 'BAD WORD'),
(386, 'jiggaboo', 'BAD WORD'),
(387, 'jiggerboo', 'BAD WORD'),
(388, 'jizz', 'BAD WORD'),
(389, 'juggs', 'BAD WORD'),
(390, 'kike', 'BAD WORD'),
(391, 'kinbaku', 'BAD WORD'),
(392, 'kinkster', 'BAD WORD'),
(393, 'kinky', 'BAD WORD'),
(394, 'knobbing', 'BAD WORD'),
(395, 'leather restraint', 'BAD WORD'),
(396, 'leather straight jacket', 'BAD WORD'),
(397, 'lemon party', 'BAD WORD'),
(398, 'lolita', 'BAD WORD'),
(399, 'lovemaking', 'BAD WORD'),
(400, 'make me come', 'BAD WORD'),
(401, 'male squirting', 'BAD WORD'),
(402, 'masturbate', 'BAD WORD'),
(403, 'menage a trois', 'BAD WORD'),
(404, 'milf', 'BAD WORD'),
(405, 'missionary position', 'BAD WORD'),
(406, 'motherfucker', 'BAD WORD'),
(407, 'mound of venus', 'BAD WORD'),
(408, 'mr hands', 'BAD WORD'),
(409, 'muff diver', 'BAD WORD'),
(410, 'muffdiving', 'BAD WORD'),
(411, 'nambla', 'BAD WORD'),
(412, 'nawashi', 'BAD WORD'),
(413, 'negro', 'BAD WORD'),
(414, 'neonazi', 'BAD WORD'),
(415, 'nigga', 'BAD WORD'),
(416, 'nigger', 'BAD WORD'),
(417, 'nig nog', 'BAD WORD'),
(418, 'nimphomania', 'BAD WORD'),
(419, 'nipple', 'BAD WORD'),
(420, 'nipples', 'BAD WORD'),
(421, 'nsfw images', 'BAD WORD'),
(422, 'nude', 'BAD WORD'),
(423, 'nudity', 'BAD WORD'),
(424, 'nympho', 'BAD WORD'),
(425, 'nymphomania', 'BAD WORD'),
(426, 'octopussy', 'BAD WORD'),
(427, 'omorashi', 'BAD WORD'),
(428, 'one cup two girls', 'BAD WORD'),
(429, 'one guy one jar', 'BAD WORD'),
(430, 'orgasm', 'BAD WORD'),
(431, 'orgy', 'BAD WORD'),
(432, 'paedophile', 'BAD WORD'),
(433, 'panties', 'BAD WORD'),
(434, 'panty', 'BAD WORD'),
(435, 'pedobear', 'BAD WORD'),
(436, 'pedophile', 'BAD WORD'),
(437, 'pegging', 'BAD WORD'),
(438, 'penis', 'BAD WORD'),
(439, 'phone sex', 'BAD WORD'),
(440, 'piece of shit', 'BAD WORD'),
(441, 'pissing', 'BAD WORD'),
(442, 'piss pig', 'BAD WORD'),
(443, 'pisspig', 'BAD WORD'),
(444, 'playboy', 'BAD WORD'),
(445, 'pleasure chest', 'BAD WORD'),
(446, 'pole smoker', 'BAD WORD'),
(447, 'ponyplay', 'BAD WORD'),
(448, 'poof', 'BAD WORD'),
(449, 'poop chute', 'BAD WORD'),
(450, 'poopchute', 'BAD WORD'),
(451, 'porn', 'BAD WORD'),
(452, 'porno', 'BAD WORD'),
(453, 'pornography', 'BAD WORD'),
(454, 'prince albert piercing', 'BAD WORD'),
(455, 'pthc', 'BAD WORD'),
(456, 'pubes', 'BAD WORD'),
(457, 'pussy', 'BAD WORD'),
(458, 'queaf', 'BAD WORD'),
(459, 'raghead', 'BAD WORD'),
(460, 'raging boner', 'BAD WORD'),
(461, 'rape', 'BAD WORD'),
(462, 'raping', 'BAD WORD'),
(463, 'rapist', 'BAD WORD'),
(464, 'rectum', 'BAD WORD'),
(465, 'reverse cowgirl', 'BAD WORD'),
(466, 'rimjob', 'BAD WORD'),
(467, 'rimming', 'BAD WORD'),
(468, 'rosy palm', 'BAD WORD'),
(469, 'rosy palm and her 5 sisters', 'BAD WORD'),
(470, 'rusty trombone', 'BAD WORD'),
(471, 'sadism', 'BAD WORD'),
(472, 'scat', 'BAD WORD'),
(473, 'schlong', 'BAD WORD'),
(474, 'scissoring', 'BAD WORD'),
(475, 'semen', 'BAD WORD'),
(476, 'sex', 'BAD WORD'),
(477, 'sexo', 'BAD WORD'),
(478, 'sexy', 'BAD WORD'),
(479, 'shaved beaver', 'BAD WORD'),
(480, 'shaved pussy', 'BAD WORD'),
(481, 'shemale', 'BAD WORD'),
(482, 'shibari', 'BAD WORD'),
(483, 'shit', 'BAD WORD'),
(484, 'shota', 'BAD WORD'),
(485, 'shrimping', 'BAD WORD'),
(486, 'slanteye', 'BAD WORD'),
(487, 'slut', 'BAD WORD'),
(488, 's&m', 'BAD WORD'),
(489, 'smut', 'BAD WORD'),
(490, 'snatch', 'BAD WORD'),
(491, 'snowballing', 'BAD WORD'),
(492, 'sodomize', 'BAD WORD'),
(493, 'sodomy', 'BAD WORD'),
(494, 'spic', 'BAD WORD'),
(495, 'spooge', 'BAD WORD'),
(496, 'spread legs', 'BAD WORD'),
(497, 'strap on', 'BAD WORD'),
(498, 'strapon', 'BAD WORD'),
(499, 'strappado', 'BAD WORD'),
(500, 'strip club', 'BAD WORD'),
(501, 'style doggy', 'BAD WORD'),
(502, 'suck', 'BAD WORD'),
(503, 'sucks', 'BAD WORD'),
(504, 'suicide girls', 'BAD WORD'),
(505, 'sultry women', 'BAD WORD'),
(506, 'swastika', 'BAD WORD'),
(507, 'swinger', 'BAD WORD'),
(508, 'tainted love', 'BAD WORD'),
(509, 'taste my', 'BAD WORD'),
(510, 'tea bagging', 'BAD WORD'),
(511, 'threesome', 'BAD WORD'),
(512, 'throating', 'BAD WORD'),
(513, 'tied up', 'BAD WORD'),
(514, 'tight white', 'BAD WORD'),
(515, 'tit', 'BAD WORD'),
(516, 'tits', 'BAD WORD'),
(517, 'titties', 'BAD WORD'),
(518, 'titty', 'BAD WORD'),
(519, 'tongue in a', 'BAD WORD'),
(520, 'topless', 'BAD WORD'),
(521, 'tosser', 'BAD WORD'),
(522, 'towelhead', 'BAD WORD'),
(523, 'tranny', 'BAD WORD'),
(524, 'tribadism', 'BAD WORD'),
(525, 'tub girl', 'BAD WORD'),
(526, 'tubgirl', 'BAD WORD'),
(527, 'tushy', 'BAD WORD'),
(528, 'twat', 'BAD WORD'),
(529, 'twink', 'BAD WORD'),
(530, 'twinkie', 'BAD WORD'),
(531, 'two girls one cup', 'BAD WORD'),
(532, 'undressing', 'BAD WORD'),
(533, 'upskirt', 'BAD WORD'),
(534, 'urethra play', 'BAD WORD'),
(535, 'urophilia', 'BAD WORD'),
(536, 'vagina', 'BAD WORD'),
(537, 'venus mound', 'BAD WORD'),
(538, 'vibrator', 'BAD WORD'),
(539, 'violet blue', 'BAD WORD'),
(540, 'violet wand', 'BAD WORD'),
(541, 'vorarephilia', 'BAD WORD'),
(542, 'voyeur', 'BAD WORD'),
(543, 'vulva', 'BAD WORD'),
(544, 'wank', 'BAD WORD'),
(545, 'wetback', 'BAD WORD'),
(546, 'wet dream', 'BAD WORD'),
(547, 'white power', 'BAD WORD'),
(548, 'women rapping', 'BAD WORD'),
(549, 'wrapping men', 'BAD WORD'),
(550, 'wrinkled starfish', 'BAD WORD'),
(551, 'xx', 'BAD WORD'),
(552, 'xxx', 'BAD WORD'),
(553, 'yaoi', 'BAD WORD'),
(554, 'yellow showers', 'BAD WORD'),
(555, 'yiffy', 'BAD WORD'),
(556, 'zoophilia', 'BAD WORD'),
(557, 'fucker', 'BAD WORD');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `StatusName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusID`, `StatusName`) VALUES
(2, 'Assistant Professor'),
(3, 'Guest Teacher'),
(1, 'Lecturer'),
(4, 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherID` int(11) NOT NULL,
  `DepartmentID` int(11) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `TeacherName` varchar(250) NOT NULL,
  `TeacherEmail` varchar(250) NOT NULL,
  `TeacherPhone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherID`, `DepartmentID`, `StatusID`, `TeacherName`, `TeacherEmail`, `TeacherPhone`) VALUES
(5, 1, 1, 'Aminur Rahman', 'aminur.aust27@gmail.com', '01681646953'),
(6, 1, 2, 'Mir Tafseer Nayeem', 'tafseer.nayeem@gmail.com', '01912584949'),
(7, 1, 2, 'Emam Hossain', 'emamhossain88@gmail.com', '01717584978'),
(8, 1, 2, 'Faisal Mohammad Shah', 'faisal505@hotmail.com', '01911090363'),
(9, 1, 2, 'Jisan Mahmud', 'jisan.mahmud.aust@gmail.com', '01534923178'),
(10, 1, 2, 'Md Wasi Ul Kabir', 'wasi_cse25@yahoo.com', '01670014863'),
(11, 1, 1, 'Taskir Hasan Majumder', 'mythoss1092019@gmail.com', '01704750136'),
(12, 1, 2, 'Mohammad Moinul Hoque', 'moincse@yahoo.com', '01817579779'),
(13, 1, 2, 'Mohammad Shafiul Alam', 'shuvo23@gmail.com', '01715104101'),
(14, 1, 2, 'Shanjida Khatun', 'shanjida2006@yahoo.com', '01919835477'),
(15, 1, 1, 'Tahsin Aziz', 'tahsinaziz77@yahoo.com', '01712019558'),
(16, 1, 2, 'Nazmus Sakib', 'nazmussakib009@gmail.com', '01939900271'),
(17, 1, 2, 'Shoeb Shahriar', 'shahriar2529@gmail.com', '01917256784'),
(18, 1, 2, 'Afsana Ahmed Munia', 'addlater@gmail.com', '01710001232'),
(19, 1, 2, 'Mir Imtiaz Mostafiz', 'addlater@gmail.com', '01717001122'),
(20, 1, 1, 'Anika Sayara', 'addlater@gmail.com', '01717001122'),
(21, 1, 1, 'Mahmudul Hasan Sagar', 'addlater@gmail.com', '01717001122'),
(23, 1, 2, 'Logan', 'clawboi@gmail.com', '0171001122'),
(24, 1, 4, 'Charles Xavier', 'wolverineisthecoolest@gmail.com', '01717001122');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attribute`
--

CREATE TABLE `teacher_attribute` (
  `AttributeID` int(11) NOT NULL,
  `AttributeName` varchar(250) NOT NULL,
  `AttributeWeight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_attribute`
--

INSERT INTO `teacher_attribute` (`AttributeID`, `AttributeName`, `AttributeWeight`) VALUES
(1, 'Patience', 5),
(2, 'Integrity', 3),
(3, 'Professionalism', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attribute_status`
--

CREATE TABLE `teacher_attribute_status` (
  `AttributeStatusID` int(11) NOT NULL,
  `AttributeStatusName` varchar(250) NOT NULL,
  `AttributeStatusPoint` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_attribute_status`
--

INSERT INTO `teacher_attribute_status` (`AttributeStatusID`, `AttributeStatusName`, `AttributeStatusPoint`) VALUES
(1, 'Little', 1),
(2, 'Moderate', 2),
(3, 'Excellent', 3);

-- --------------------------------------------------------

--
-- Table structure for table `testcomment`
--

CREATE TABLE `testcomment` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `CommentText` text NOT NULL,
  `CommentDate` datetime NOT NULL,
  `CNames` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testcomment`
--

INSERT INTO `testcomment` (`CommentID`, `UserID`, `TeacherID`, `CommentText`, `CommentDate`, `CNames`) VALUES
(1, 7, 4, 'gigigi', '2019-04-04 13:03:22', ''),
(2, 7, 4, 'heyhey', '2019-04-04 13:05:25', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `FullName` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `FullName`, `Email`, `Role`) VALUES
(1, 'sanzamsyed71', 'c20ad4d76fe97759aa27a0c99bff6710', 'Syed Sanzam', 'sanzamsyed71@gmail.com', 'Student'),
(2, 'testman', '12', 'testman', 'testman@gmail.com', 'Student'),
(3, 'ss', 'c20ad4d76fe97759aa27a0c99bff6710', 'Syed Sanzam', 'ss@gmail.com', 'Student'),
(5, 'sss', 'c20ad4d76fe97759aa27a0c99bff6710', 'Arnob', 'sss@gmail.com', 'Student'),
(6, 'sss', 'c20ad4d76fe97759aa27a0c99bff6710', 'Arnob', 'sss@gmail.com', 'Student'),
(7, 'anika', 'c20ad4d76fe97759aa27a0c99bff6710', 'anika', 'anika', 'Student'),
(8, '12', 'c20ad4d76fe97759aa27a0c99bff6710', 'Anik Shahzaman', 'anik.syed@gmail.com', 'Student'),
(9, '123', 'c20ad4d76fe97759aa27a0c99bff6710', '123', '123', 'Student'),
(10, 'mefrommobile', 'c20ad4d76fe97759aa27a0c99bff6710', 'mefrommobile', 'test@gmail.com', 'Student'),
(11, 'dipta10', '4124bc0a9335c27f086f24ba207a4912', 'Dipta Das', 'dip9623@gmail.com', 'Student'),
(12, 'newusername', 'c20ad4d76fe97759aa27a0c99bff6710', 'newuser', '**', 'Student'),
(13, '1234', 'c20ad4d76fe97759aa27a0c99bff6710', '12', '1234', 'Student'),
(14, 'fais', 'c20ad4d76fe97759aa27a0c99bff6710', 'faisal', 'f@gmail.com', 'Student'),
(15, 'sanzee', 'c20ad4d76fe97759aa27a0c99bff6710', 'Syed Sanzam', 'sanzee@gmail.com', 'Student'),
(16, 'syedsanzam', 'c20ad4d76fe97759aa27a0c99bff6710', 'Syed Sanzam', 'sanzamsyed712@gmail.com', 'Student'),
(17, '12345', 'c20ad4d76fe97759aa27a0c99bff6710', '123', '12345', 'Student'),
(18, 'fou', 'c20ad4d76fe97759aa27a0c99bff6710', 'Fours', 'fou@gmail.com', 'Student'),
(19, 'five', 'c20ad4d76fe97759aa27a0c99bff6710', 'Five', 'five@gmail.com', 'Student'),
(20, 'fiv', 'c20ad4d76fe97759aa27a0c99bff6710', 'fivee', 'fiv@gmail.com', 'Student'),
(21, 'syedd', 'c20ad4d76fe97759aa27a0c99bff6710', 'Syed', 'sye@gmail.com', 'Student'),
(22, 'anik1', 'c20ad4d76fe97759aa27a0c99bff6710', 'Anik', 'anik@gmail.com', 'Student'),
(23, 'notnabu', 'c20ad4d76fe97759aa27a0c99bff6710', 'Sifat Nabil', 'notnabu@gmail.com', 'Student'),
(24, 'nabu123', 'c20ad4d76fe97759aa27a0c99bff6710', 'Nabil', 'nabu@gmail.com', 'Student'),
(25, 'admin', 'c20ad4d76fe97759aa27a0c99bff6710', 'Syed Sanzam', 'admin@gmail.com', 'Student'),
(26, 'sanzamsyed', 'c20ad4d76fe97759aa27a0c99bff6710', 'Syed Sanzam', 'syedsanzam007@gmail.com', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `TeacherID` (`TeacherID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`),
  ADD UNIQUE KEY `CourseName` (`CourseName`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DepartmentID`),
  ADD UNIQUE KEY `DepartmentName` (`DepartmentName`);

--
-- Indexes for table `junction_course_teacher`
--
ALTER TABLE `junction_course_teacher`
  ADD PRIMARY KEY (`TeacherID`,`CourseID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `junction_department_course`
--
ALTER TABLE `junction_department_course`
  ADD PRIMARY KEY (`DepartmentID`,`CourseID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `junction_teacher_attribute`
--
ALTER TABLE `junction_teacher_attribute`
  ADD PRIMARY KEY (`JunctionTeacherAttributeID`),
  ADD KEY `junction_teacher_attribute_ibfk_1` (`AttributeID`),
  ADD KEY `junction_teacher_attribute_ibfk_2` (`TeacherID`),
  ADD KEY `junction_teacher_attribute_ibfk_3` (`AttributeStatusID`);

--
-- Indexes for table `profanity`
--
ALTER TABLE `profanity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusID`),
  ADD UNIQUE KEY `StatusName` (`StatusName`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`),
  ADD KEY `StatusID` (`StatusID`),
  ADD KEY `DepartmentID` (`DepartmentID`);

--
-- Indexes for table `teacher_attribute`
--
ALTER TABLE `teacher_attribute`
  ADD PRIMARY KEY (`AttributeID`),
  ADD UNIQUE KEY `AttributeName` (`AttributeName`);

--
-- Indexes for table `teacher_attribute_status`
--
ALTER TABLE `teacher_attribute_status`
  ADD PRIMARY KEY (`AttributeStatusID`);

--
-- Indexes for table `testcomment`
--
ALTER TABLE `testcomment`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DepartmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `junction_teacher_attribute`
--
ALTER TABLE `junction_teacher_attribute`
  MODIFY `JunctionTeacherAttributeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `profanity`
--
ALTER TABLE `profanity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teacher_attribute`
--
ALTER TABLE `teacher_attribute`
  MODIFY `AttributeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher_attribute_status`
--
ALTER TABLE `teacher_attribute_status`
  MODIFY `AttributeStatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testcomment`
--
ALTER TABLE `testcomment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `junction_course_teacher`
--
ALTER TABLE `junction_course_teacher`
  ADD CONSTRAINT `junction_course_teacher_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `junction_course_teacher_ibfk_2` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `junction_department_course`
--
ALTER TABLE `junction_department_course`
  ADD CONSTRAINT `junction_department_course_ibfk_1` FOREIGN KEY (`DepartmentID`) REFERENCES `department` (`DepartmentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `junction_department_course_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `junction_teacher_attribute`
--
ALTER TABLE `junction_teacher_attribute`
  ADD CONSTRAINT `junction_teacher_attribute_ibfk_1` FOREIGN KEY (`AttributeID`) REFERENCES `teacher_attribute` (`AttributeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `junction_teacher_attribute_ibfk_2` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `junction_teacher_attribute_ibfk_3` FOREIGN KEY (`AttributeStatusID`) REFERENCES `teacher_attribute_status` (`AttributeStatusID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`StatusID`) REFERENCES `status` (`StatusID`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`DepartmentID`) REFERENCES `department` (`DepartmentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
