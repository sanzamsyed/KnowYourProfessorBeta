-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 12:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowyourprofessor`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `professorname` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `professorname`, `comment`) VALUES
(1, 'Arnob', 'Syed Azman', ' A+'),
(2, '', '', ' A+'),
(3, 'johnwick', 'Mr Ahsanuzzaman', ' A+'),
(4, 'johnwick', 'Mr Ahsanuzzaman', ' A+'),
(5, 'johnwick', 'Mr Ahsanuzzaman', ' A+'),
(6, 'johnwick', 'Anik Shahzaman', 'Good dude.'),
(7, 'defaultyboii', 'Anik Shahzaman', ' yeah I agree.\r\n'),
(8, 'nanika', 'Aminur Rahman', 'Good teacher :)'),
(9, 'johnwick', 'Aminur Rahman', ' Yep I agree '),
(10, 'dococ', 'Syed Shahjahan', 'Love everything about him.'),
(11, 'johnwick', 'Mr Ahsanuzzaman', ' A+'),
(12, 'johnwick', 'Anik Shahzaman', ' A+'),
(13, 'onim', 'Aminur Rahman', ' He\'s a pretty good human being :)'),
(14, 'johnwick', 'Sanjida Ahmed', ' A+'),
(15, 'johnwick', 'Syed Shahjahan', ' A+'),
(16, 'sarnob96', 'Tahsin Aziz', ' A+\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(11) NOT NULL,
  `contactname` varchar(250) NOT NULL,
  `contactemail` varchar(250) NOT NULL,
  `contactphone` varchar(250) NOT NULL,
  `contactmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `contactname`, `contactemail`, `contactphone`, `contactmessage`) VALUES
(1, 'Syed Sanzam', 'sanzamsyed71@gmail.com', '+8801777258585', 'Hello, glad to know that you guys are looking out :)'),
(2, 'Syed Sanzam', 'sanzamsyed71@gmail.com', '+8801777258585', 'Hello, glad to know that you guys are looking out :)'),
(3, 'Arnob', 'arnob@gmail.com', '123', 'abc'),
(4, 'Arnob', 'arnob@gmail.com', '123', 'abc'),
(5, 'Arnob', 'arnob@gmail.com', '123', 'abc'),
(6, 'Arnob', 'arnob@gmail.com', '123', 'abc'),
(7, '', '', '', ''),
(8, 'Peter Parker', 'spidey@gmail.com', '123456', 'abc'),
(9, '', '', '', ''),
(10, 'Mary Jane Watson', 'mj@gmail.com', '123456', 'ABCDE'),
(11, 'Gwen Stacy', 'gs@gmailcom', '456', 'ZEX'),
(12, 'Gwen Stacy', 'gs@gmailcom', '456', 'ZEX'),
(13, 'Syed Sanzam', 'sanzamsyed71@gmail.com', '123456', '123'),
(14, 'Peter Parker', 'sanzamsyed71@gmail.com', '123456', '1234567'),
(15, 'Mary Jane Watson', 'mj@gmail.com', '123456', '1234'),
(16, 'Syed Sanzam', 'sanzamsyed71@gmail.com', '123456', '123'),
(17, 'Syed Sanzam', 'sanzamsyed71@gmail.com', '123456', '1234'),
(18, 'Syed Sanzam', 'sanzamsyed71@gmail.com', '01777258585', 'Hey, I am just surfing around, letting you know that this thing works.'),
(19, 'Ahnuf Sabit', 'ahnufsabit@gmail.com', '01717899779', 'Gord websoite.');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `designation`, `email`) VALUES
(1, 'Farzana Ahmed', 'Professor', 'farzanaahmed@gmail.com'),
(2, 'Syed Shahjahan', 'Professor', 'syedshahjahan@gmail.com'),
(3, 'Farzana Ahmed', 'Professor', 'farzanaahmed@gmail.com'),
(4, 'Syed Shahjahan', 'Professor', 'syedshahjahan@gmail.com'),
(5, 'Anik Shahzaman', 'Lecturuer', 'anikek47@gmail.com'),
(6, 'Syed Azman', 'Lecturer', 'mrazman@gmail.com'),
(7, 'Mr Ahsanuzzaman', 'Lecturer', 'ah@gmail.com'),
(8, 'Tahsin Aziz', 'Lecturer', 'ta@gmail.com'),
(9, 'Aminur Rahman', 'Assistant Lecturer', 'aminurrahman@gmail.com'),
(11, 'Sanjida Ahmed', 'Lecturer', 'sanjidaahmed@gmail.com'),
(12, 'Mr Al Mamun', 'Professor', 'sam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Bruce Wayne', 'gothamknight', 'bman@waynefoundation.com', '12'),
(2, 'Syed Sanzam', 'sanzamsyed71', 'sanzamsyed71@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(3, 'Nusrat Anika', 'anikanusrat', 'nusratanika04@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Anik Shahzaman', 'anikasyed', 'aniksyed@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(5, 'Barry Allen', 'ballen', 'b.allen@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(6, 'Barry Allen', 'ballen', 'b.allen@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(7, 'Jordan Belfort', 'jb', 'jb@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(8, 'John Constantine', 'britboydemonhunter', 'jc@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(9, 'John Constantine', 'britboydemonhunter', 'jc@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(10, 'Peter Parker', 'pboi', 'petey@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(11, 'Peter Parker', 'pboi', 'petey@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(12, 'Bruce Banner', 'hulktheincredible', 'bb@gmail.com', '71b60006b8a653588b794b04c5d1ba16'),
(13, 'Bruce Banner', 'hulktheincredible', 'bb@gmail.com', '71b60006b8a653588b794b04c5d1ba16'),
(14, 'Tony', 'Stark', 'ts@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(15, 'Natasha Romanoff', 'blackwidow', 'bw@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(16, 'Bucky Roberts', 'buckrob', 'br@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(17, 'Test', 't', 't@gmail.com', 'e358efa489f58062f10dd7316b65649e'),
(18, 'Ruby Rose', 'batwoman', 'bwa@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(19, 'Adele', 'adele', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(20, 'Poison Ivy', 'pivy', 'pivy@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(21, 'nobonita', 'hello', 'na@gmail.com', '6b694e8cf87fc88d392ed8ebf81d9385'),
(22, 'Darkseid', 'dboi', 'darkseid@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(23, 'Mon Mrittika', 'mon61', 'monmrittikakg@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(25, 'John Wick 2', 'mymanj', 'snabil01@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(26, 'abc', 'def', 'ijklmnop', 'c20ad4d76fe97759aa27a0c99bff6710'),
(27, 'asdf', 'fdssd', 'vvvxc', 'c20ad4d76fe97759aa27a0c99bff6710'),
(28, 'Barry Allen', 'inboy12', 'asdsadsddsds', 'c20ad4d76fe97759aa27a0c99bff6710'),
(29, 'Mr Negative', 'mn', 'asdfgh', 'c20ad4d76fe97759aa27a0c99bff6710'),
(30, 'abc', 'balleniris12', 'snabil01@gmail.com12', 'c20ad4d76fe97759aa27a0c99bff6710'),
(31, 'Barry Allen12', 'balleniris12345', 'snabil01@gmail.com32343', 'c20ad4d76fe97759aa27a0c99bff6710'),
(32, 'Scorpion King', 'sking96', 'sk86@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(33, 'Arnob Sanzam', 'defaultyboii', 'df@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(34, 'Nusrat Anika', 'nanika', 'nanika@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(35, 'Doctor Octavius', 'dococ', 'dococ@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(36, 'Ezio Auditore Da Firenze', 'assassin', 'eadf@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(37, 'Syed Sanzam', 'ultimatearnob', 'sanzamsyed81@gmail.com', '1234'),
(40, 'Onim Chowdhury', 'onim', 'oc@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(41, 'Baba Yaga', 'johnwick', 'jw@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(42, 'Syed Sanzam Arnob', 'sarnob96', 'sanzamsyed712@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
