-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 02:44 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursered`
--

CREATE TABLE `coursered` (
  `id` int(11) NOT NULL,
  `Full_name` varchar(40) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(29) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `regdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursered`
--

INSERT INTO `coursered` (`id`, `Full_name`, `course`, `phone`, `email`, `age`, `regdate`) VALUES
(1, 'Swift Taylor', 'IELTS', '', 'tswift@gmil.com', 24, '2017-05-07 14:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `ms_id` int(11) NOT NULL,
  `massage` varchar(300) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`ms_id`, `massage`, `name`, `email`, `time`) VALUES
(2, 'I like Inha', 'aziz', 'aziz090533@gmail.com', '2017-05-05 00:02:11'),
(3, 'I would happy if you provide me further information about Korean course. Thanks, in advance!', 'Lisa', 'lisa@gmail.com', '2017-05-05 00:42:08'),
(4, 'I liked your websites design!', 'Jasur', 'jasur@inha.uz', '2017-05-05 12:39:52'),
(5, 'I am Leo', 'Leo', 'leo@gmail.com', '2017-05-05 15:44:00'),
(6, 'I will go tomorrow', 'Firuz', 'firuz@gmail.com', '2017-05-06 20:17:57'),
(7, 'Hello, RSG', 'abduoli', 'admin@vetbossel.in', '2017-05-06 21:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE `mst_admin` (
  `loginid` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`loginid`, `pass`) VALUES
('pgdca', 'pgdca'),
('aziz', 'aziz'),
('admin', 'aziz');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE `mst_question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(32, 12, '... Eldor Going crazy because of Moodle?', 'Are', 'Is', 'Will', 'Has', 2),
(33, 16, '51*x - x= 150, find the x', '6', '21', '3', '7', 3),
(34, 16, ' de Fish Dine ordered tomato sauce. de Fish Dine uses 90 kilograms of tomato sauce a day to make their famous dish. After 5 days, there was 2/5 of the', '750 kg', '500 kg', '326 kg', '678kg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('', 12, '0000-00-00', 1),
('', 12, '0000-00-00', 0),
('', 12, '0000-00-00', 1),
('', 12, '0000-00-00', 1),
('eldor', 12, '0000-00-00', 1),
('eldor', 11, '0000-00-00', 0),
('eldor', 12, '0000-00-00', 0),
('eldor', 12, '0000-00-00', 0),
('', 12, '0000-00-00', 1),
('', 12, '0000-00-00', 1),
('', 12, '0000-00-00', 1),
('', 12, '0000-00-00', 0),
('', 12, '0000-00-00', 0),
('', 12, '0000-00-00', 1),
('eldor', 16, '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE `mst_subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(8, 'English'),
(9, 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE `mst_test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(12, 8, 'Elementary', '10'),
(14, 8, 'Advanced', '10'),
(16, 8, 'math elementary', '5');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `regdate` datetime DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `city`, `phone`, `email`, `regdate`, `age`) VALUES
(15, 'admin', '12345', 'aziz', 'Samarkand', '99884543', 'aziz090533@gmail.com', NULL, NULL),
(18, 'eldor', 'eldor', 'Eldor', 'Jizzax', '99884543', 'dostonasus@gmail.com', NULL, NULL),
(19, 'admin', '33', 'aziz', 'Jizzax', '99884543', 'dostonasus@gmail.com', NULL, NULL),
(21, 'doston', 'doston', 'Doston', 'Jizzax', '99884543', 'dostonasus@gmail.com', NULL, NULL),
(24, 'fds', 'dde', 'ssddf', 'sbgt', '345', 'aziz090533@gmail.com', NULL, NULL),
(25, 'fds', 'rre', 'ssddf', 'sbgt', '345', 'aziz090533@gmail.com', NULL, NULL),
(26, 'fds', '54', 'ssddf', 'sbgt', '345', 'aziz090533@gmail.com', NULL, NULL),
(27, 'Abdusoli', 'abdusoli', 'abduoli', 'Samarkand', '0', 'adusoli@vetbossel.in', '2017-05-05 20:12:18', 19),
(28, 'aziz', 'aziz', 'aziz', 'Samarkand', '', 'aziz090533@gmail.com', '2017-05-05 20:18:00', 21);

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('urrrb9qtv34cp4sipo7gb2ffq0', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('urrrb9qtv34cp4sipo7gb2ffq0', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 2),
('urrrb9qtv34cp4sipo7gb2ffq0', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 4),
('pvheebv4k279regikg8nkbn9o1', 12, '... Eldor Going crazy because of Moodle?', 'Are', 'Is', 'Will', 'Has', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `body` varchar(3000) DEFAULT NULL,
  `image` longblob,
  `date` datetime DEFAULT NULL,
  `img_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `heading`, `body`, `image`, `date`, `img_name`) VALUES
(5, 'New Intensive English Course at Real Study', 'The main focus of the course is to prepare students between the ages of 11-15 years with the necessary English skills to enter BIS Phuket (in Year 7, 8, 9 and 10) or other international schools in Thailand or overseas.\r\n\r\nBISP plan to run the IEC every term of the school year from Monday to Friday. Each student experiences intensive English language tuition of approximately 17 periods per week (17 hours) at various times throughout the day.\r\n\r\nFor the remaining periods, students are integrated into mainstream lessons for eight hours per week. The students work as a class, in small groups or individually, on work that is relevant to them.\r\n\r\nAs BIS Phuket has boarding facilities, IEC students have the option to live on campus whilst studying English.\r\n\r\nThe IEC programme aims to assist students not only to develop their language proficiency, but also to enhance their learning in content areas.\r\n\r\nThe students, once they have been accepted into BISP or another schoolâ€™s mainstream, will thereafter be able to successfully access an international schoolâ€™s curriculum whilst continuing their second language development.', 0x4772616d6d61722c20566f636162756c6172792c204964696f6d732c20506872617365732c20456e676c697368313433323131333438302e6a7067, '2017-05-07 11:08:52', NULL),
(8, 'New Integrated Math Courses', 'With the implementation of Common Core standards and instructional practices, math in K-12 has been under the magnifying glass. As a nation, we are redefining the way that we teach subjects, particularly math, to better reflect real-life applications. At Coronado Unified School District, we are beyond proud of the way that our entire math department has risen to the challenge of creating and implementing new curriculum designed to reach these new desired outcomes.\r\nOne of the biggest evolutions to come out of this process is adopting a new curriculum for our middle school and high school math classes: integrated math courses.\r\nThe status quo in math for decades has been to break classes into specific subject areas. Pre-algebra came first, followed by algebra with the progression into geometry and then algebra 2 and trigonometry. Most likely this is how you took math.', 0x787a326f4f76572e6a7067, '2017-05-07 11:12:32', NULL),
(9, 'Intensive Korean 25', 'Our education center offers a range of Korean language programs to meet the needs of language learners of all levels.\r\n \r\nWith small classes and plenty of individual attention from our teachers, you can be assured that your language skills will progress rapidly.\r\nLevel of Korean efficiency\r\nBeginners Program A & B (ì´ˆê¸‰ A & B)\r\nApproximate entry level: CEFR A1\r\nTOPIK: Level 1 / Level 2\r\nTeaching Language: Korean, English, Others by request\r\n \r\n- Most appropriate for absolute beginners or near-beginners of Korean\r\n- An introduction to both written and spoken Korean\r\n- Introductory cultural activities and opportunity for language exchange with local students\r\n- Taught in a mix of Korean and first language\r\nIntermediate A & B (ì¤‘ê¸‰ A& B)\r\nApproximate entry level: CEFR A2 / B1\r\nTOPIK: Level 2 / Level 3\r\nTeaching Language: Korean, English, Others by request\r\n- Most appropriate for students who have completed the Beginnerâ€™s Program (B), or who are continuing their study of Korean language\r\n- Assumes a high level of fluency with Hangul script and exposure to Hanja\r\n- Cultural activities and opportunity for language exchange with local students\r\n- Taught predominately in Korean, with some first language support\r\n ', 0x32333035395f666c6167735f736f7574685f6b6f7265616e5f666c61672e6a7067, '2017-05-07 11:15:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_teachers`
--

CREATE TABLE `tb_teachers` (
  `id` int(5) NOT NULL,
  `number` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `inn` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `ariza` varchar(255) NOT NULL,
  `prikaz` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `contract` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `datebirth` date NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `phone3` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `where` int(11) NOT NULL,
  `filial` int(11) NOT NULL,
  `note` text NOT NULL,
  `destinations` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `mtongue` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_teachers`
--

INSERT INTO `tb_teachers` (`id`, `number`, `education`, `inn`, `resume`, `ariza`, `prikaz`, `passport`, `contract`, `name`, `lastname`, `datebirth`, `phone1`, `phone2`, `phone3`, `email`, `address`, `where`, `filial`, `note`, `destinations`, `subject`, `level`, `mtongue`, `method`, `days`, `date`, `active`) VALUES
(65, '', '', '', '', '', '', '', '', 'Aziz', 'Salohiddinov', '0000-00-00', '01012010', '', '', '', '', 0, 0, '', 0, 0, 0, 0, '', '', '0000-00-00 00:00:00', 0),
(58, '09', '', '', '', '', '', '', '', 'To''lqin', 'Sadullayev', '0000-00-00', '(99) 888-68-74', '', '', '', '', 0, 0, '', 0, 1427048560, 0, 0, '', '', '2017-03-16 17:42:28', 1),
(55, '10', '', '', '', '', '', '', '', 'Umidjon', 'Qo''ldoshev', '0000-00-00', '(97) 746-17-74', '(94) 675-09-75', '', '', '', 0, 0, '', 0, 1427048579, 0, 0, '', '', '2016-11-25 15:07:31', 1),
(60, '', '', '', '', '', '', '', '', 'Shahnoza', 'Japarova', '0000-00-00', '(97) 752-87-79', '', '', '', '', 0, 0, '', 0, 1415380356, 0, 0, '', '', '2017-04-19 16:04:41', 1),
(40, '', '', '', '', '', '', '', '', 'Aziz', 'Saloxiddinov', '0000-00-00', '(97) 917-57-58', '', '', '', '', 0, 0, 'uzb\r\n', 0, 1415380356, 0, 0, '', '', '2016-09-20 15:28:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursered`
--
ALTER TABLE `coursered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tb_teachers`
--
ALTER TABLE `tb_teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursered`
--
ALTER TABLE `coursered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_teachers`
--
ALTER TABLE `tb_teachers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
