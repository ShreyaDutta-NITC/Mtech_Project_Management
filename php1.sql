-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 06:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@test.com', '$2y$10$dpe75fQvXMTYujmLAl.EUOpJ5rzsoP.a2bEZUmB9CWw1qZvYRR2ya');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `thesis_id` int(11) NOT NULL,
  `attachments` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  `marks` varchar(256) NOT NULL,
  `outofmarks` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `remarks` varchar(7000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`id`, `name`, `thesis_id`, `attachments`, `date`, `marks`, `outofmarks`, `status`, `remarks`) VALUES
(31, 'FA1', 17, '$$lamp.jpg$$Tabletennisbat.jpg', '2023-03-23', '15', 20, 2, 'abc,acb,bac'),
(32, 'FA2', 17, '$$ball.jfif$$bat.jfif$$iphone.jpg$$lamp.jpg', '2023-03-26', '25', 30, 2, 'xyz,xxy,yxz,zyx'),
(33, 'SA1', 17, '$$ball.jfif$$iphone.jpg', '2023-04-09', '45', 50, 2, 'rer tete yry'),
(35, 'FA1', 20, '$$bike.jpg$$bike1.jpeg$$book.jpg$$Tabletennisbat.jpg', '2023-03-23', '20', 25, 2, 'fgdtfd hgchch nvn c hg'),
(36, 'FA3', 17, '$$iphone.jpg$$lamp.jpg', '2023-04-10', '22', 25, 2, 'hvj yugvj '),
(37, 'FA4', 17, '$$bat.jfif$$bike.jpg$$bike1.jpeg$$book.jpg$$lamp.jpg$$Tabletennisbat.jpg', '2023-04-30', '19', 25, 2, 'jhj jhvjhv jhvjhv jhvjh'),
(39, 'Mids', 20, '$$bike1.jpeg$$book.jpg', '2023-04-07', '20', 25, 2, 'jbhbb jbjbjb'),
(45, 'dfsg', 20, '$$Clustering_of_data_in_spatial_database (1).pdf$$Shashank_M220251CS.pptx', '2023-04-09', '28', 30, 2, 'kbk kjbkjb'),
(46, 'final', 17, '$$Clustering_of_data_in_spatial_database (1).pdf', '2023-04-30', '15', 50, 2, 'vbvss'),
(48, 'presentation', 20, '$$Creative.pdf$$ER.drawio.pdf', '2023-04-09', '40', 50, 2, 'bkasba jnsdf'),
(49, 'FA3', 20, '', '2023-04-29', '', 30, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `department`, `roll`, `flag`) VALUES
(1, 'varun', 'varun@g.com', '$2y$10$2sFhe5dj48t7DQ9nvYzhOOsI/tlYh246jCof/79aaj9wVCeLiIsx2', 'CSE', '100', 1),
(16, 'y', 'y@g.com', '$2y$10$tznRq9Jk.sO2cew6WqgU0ezcyLmoLZE9hC6iB2chvpnikcY3ZVyoW', 'CSE', '120', 1),
(17, 'z', 'z@g.com', '$2y$10$AZMXLnY6GIW/7QRWSkgxJO8UMkaAPcapFR.uVSCIyyL81lUl5a3Ry', 'CSE', '125', 0),
(18, 'a', 'a@g.com', '$2y$10$U/Ov95zCUGhjiFILrVYSyugRlzcMqVx93L9K30zZwyFOZtOjuFYsy', 'CSE', '130', 0),
(19, 'vaibhav', 'vaibhav@cse.com', '$2y$10$w5lOqcd8RjyiTEvuJaNpqeN1PxT9suqYXSgw4AhFk/ehSRJqY4ixO', 'CSE', 'M220250CS', 1),
(20, 'Durgesh', 'd@g.com', '$2y$10$v4cMa6o0NJ3sl3SKaDRXV.n0ZB6.jAWMKALe.i1MhHxZO34ucLgbW', 'CSE', '285', 1),
(21, 'sharon', 's@g.com', '$2y$10$QHoBflAZDvnB8kqlC2SFgOX3Gmd/gpWpSHlXZcV/ToB2KieFvPjz2', 'CSE', '256', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `department` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `email`, `password`, `department`, `name`, `flag`) VALUES
(10, 'nazeer@nitc.ac.in', '$2y$10$2JOxSABIJgSCxyOPobRx2OdEs3cLB.qV0NsEII1qLQez3xK5LL5w6', 'CSE', 'Abdul Nazeer K A', 1),
(11, 'gopakumarg@nitc.ac.in', '$2y$10$n.nZdGyHPDZVbXRCCoiu3ebr5W7KtNYUU.qmxIWMIx5sWD4OfJk42', 'CSE', 'Gopakumar G', 1),
(12, 'park@nitc.ac.in', '$2y$10$6UdXn55abkD84ukFs0AXrOl8JliA770akNRKdGteXKmxlNhpp73uC', 'CSE', 'Arun Raj Kumar P', 1),
(13, 'jimmy@nitc.ac.in', '$2y$10$6RAIvoK7E2KkJtmAZ7crv.NR7VdrldRoH8kZ/VNI6bG7c7lCi6epS', 'CSE', 'Jimmy Jose', 1),
(14, 'madhu@nitc.ac.in', '$2y$10$eF3SWk.Fb3dS8DmeDFArgu5KpQ12jrvPmWFHAfbRgxsI9YpsplcuW', 'CSE', 'Madhu Kumar S D', 1),
(15, 'kmurali@nitc.ac.in', '$2y$10$s9vFXf1y7jBydjRZpLuZwOctuMMXT9mTmU0W2YcKKEo9/lZaWk8v.', 'CSE', 'Muralikrishnan K', 1),
(16, 'priya@nitc.ac.in', '$2y$10$4MJt9fkZSCpUPJVdp9Y2qOOgOYGpUaJC0wMn2OxAUJ6p6t3KqXkAG', 'CSE', 'Priya Chandran', 1),
(17, 'sheeraz@nitc.ac.in', '$2y$10$302K09P/5/ei4.FinstMveOZbfRX1HwZXjvjg3ZrMfdJzwUYe043e', 'CSE', 'S Sheerazuddin', 1),
(18, 'vpaleri@nitc.ac.in', '$2y$10$J1DNUU.38yZAVV4fVUzXm.FtlbRxHhn61SHxIWU8/W1DI2cgTy5TS', 'CSE', 'Vineeth Paleri', 1),
(19, 'pathari@nitc.ac.in', '$2y$10$TrEYOWeA4HvQzmAT62Bfe.v1.XU.CYJFe9v9yX6J8j2zu/6WrrlwG', 'CSE', 'Vinod Pathari', 1),
(20, 'jay@g.com', '$2y$10$aVuK.GC13YpcjjKBLKViCO4ubZcfX.3nUu42jyNgwMZRcZ8QRW71i', 'CSE', 'Jay', 0),
(21, 'vibe@g.com', '$2y$10$1HrB7MRo8p9zzedYRjQY9uyhSPCrDgoEbLzbOMx/Mb7CLLIp0ytlK', 'CSE', 'Vibe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `final_grade` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `supervisor_name` varchar(200) NOT NULL,
  `keyword` varchar(256) NOT NULL,
  `panel` varchar(256) NOT NULL,
  `abstract` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`id`, `name`, `department`, `status`, `final_grade`, `student_id`, `supervisor_name`, `keyword`, `panel`, `abstract`) VALUES
(17, 'To detect and isolate Zombie attack in cloud computing', 'CSE', 2, 'A', 1, 'Madhu Kumar S D', 'Cloud Computing,SaaS,PaaS,IaaS', 'Gopakumar G,Arun Raj Kumar P,Priya Chandran', 'The cloud computing architecture in which third party, virtual machine and cloud service provider are involved for data uploading and downloading. Security is the main issue for cloud computing architecture. Among security attacks zombie attack is the most advance type of attack.'),
(18, 'The classification scheme for sentiment analysis of twitter data', 'CSE', 0, '', 1, 'Madhu Kumar S D', 'Data Mining,Decision Trees,Genetic Algorithm,Artificial Neural Network,Clustering', '', 'Determining the emotional tone behind a series of words, specifically on Twitter. A sentiment analysis tool is an automated technique that extracts meaningful customer information related to their attitudes, emotions, and opinions.'),
(20, 'Federated Machine Learning', 'CSE', 1, '', 20, 'Madhu Kumar S D', 'ML,AI,NLP,DL', 'Priya Chandran,Gopakumar G,Arun Raj Kumar P', 'Federated learning is a way to train AI models without anyone seeing or touching your data, offering a way to unlock information to feed new AI applications. Federated learning is a way to train AI models without anyone seeing or touching your data, offering a way to unlock information to feed new AI applications.'),
(21, 'Library Management System', 'CSE', 0, '', 21, 'Madhu Kumar S D', 'MySQL,Net beans IDE,Php', '', 'Library management involves maintaining the database of new books, the record of books issued, and their respective dates. The main goal of this computer science project is to provide an easy way to handle and automate the library management system. '),
(22, 'Mobile Application Development', 'CSE', 1, '', 19, 'Priya Chandran', 'AI,HCI', 'Gopakumar G,Muralikrishnan K,S Sheerazuddin', 'In recent time, the development of Mobile learning applications had received lots of attention whilst some researchers referring it as the future of learning. These learning applications are a replacement of the traditional way of learning with some added advantages such as learning anywhere, anytime.'),
(23, 'jpp', 'CSE', 0, '', 21, 'Priya Chandran', 'yuo,njn', '', ''),
(25, 'Click Modular Router on seL4', 'CSE', 1, '', 20, 'Priya Chandran', 'Embedded Systems,Operating Systems,AOS (Comp 9242)', 'Jimmy Jose,Muralikrishnan K,S Sheerazuddin', 'Investigate, design, and implement a Click compatible modular network router architecture on seL4 making use of the CAmkES component framework.\r\nClick is a software architecture for building network router software from small, reusable, software components, while CAmkES is a\r\ncomponent-based framework for developing seL4-based systems.'),
(27, '', '', 0, '', 14, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
