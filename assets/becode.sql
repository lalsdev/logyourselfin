-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Nov 03, 2019 at 06:52 PM
-- Server version: 10.4.2-MariaDB-1:10.4.2+maria~bionic
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `becode`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `linkedin`, `github`) VALUES
(121, 'sss', 'test@test.test', '$1$Wz0gxHzc$MfBt8oE3SO/Gl1RTTSZsk/', NULL, NULL, NULL, NULL),
(122, 'test1', 'test1@test1.test1', '$1$Dm/g04OK$8q2JC.Nzi.VuRaJYOHL6k.', NULL, NULL, NULL, NULL),
(123, 'test3', 'test3@test3.test3', '$1$saC73JLh$8EE/8WBwmz8TZCbOWDdK/.', NULL, NULL, NULL, NULL),
(124, 'test4', 'test4@ok.ok', '$1$BZV5OPVC$23h8JUZujziL0k.0v7p33.', NULL, NULL, NULL, NULL),
(125, 'hihi', 'hihi@hoho.lol', '$1$V4ggol0A$X5FJpiyS98UPg9PJueqSd/', NULL, NULL, NULL, NULL),
(126, 'hello', 'hello@hkj.lk', '$1$Ph9zNQbx$mC1f1mzQzy8F3OES0bhzH/', NULL, NULL, NULL, NULL),
(127, '123', 'lwk@lkd.dk', '$1$aQDnaNa2$M8YaTmgUfyjkmzg373oRy1', NULL, NULL, NULL, NULL),
(128, 'hello', 'francois@ok.com', '$1$IskZ1ItP$vPOqZyoz.Wro6NbCd.YcT.', NULL, NULL, NULL, NULL),
(129, '', 'php@php.php', '$1$mk2SkSAc$vwEQQ9QyRTKfw7F/d8w1W1', NULL, NULL, NULL, NULL),
(130, 'pio', 'dls@lk.dk', '$1$mURm1We1$dLN5boDn0iM4XeePBrBtI1', NULL, NULL, NULL, NULL),
(131, 'hihi', 'hihi@hotmail.ld', '$1$LF5ki6kZ$S5h3l8hMKqBSVOVHunyZT/', NULL, NULL, NULL, NULL),
(132, '', 'hello@ok.ko', '$1$33E2trEX$Othu6W6YR1D2/mQbGqSQg1', NULL, NULL, NULL, NULL),
(133, '', 'test@test.test', '$1$lDjvQWMX$swDU0APkkMIFp4OSV2A3R1', NULL, NULL, NULL, NULL),
(134, '&lt;&lt;I&amp;&quot;', 'kk@kk.com', '$1$O62f7qry$Qev0sJq9gKxyCc6.Dp8.T.', NULL, NULL, NULL, NULL),
(135, '123', '12@ko.ol', '$1$/EyluxNE$f5pfWvWlcpuyD6cJrbx/70', NULL, NULL, NULL, NULL),
(136, 'matcha', 'matcha@matcha.matcha', '$1$N3usB1b9$Na73vnsoVaW/EN7BT/qXt/', NULL, NULL, NULL, NULL),
(137, '', 'dede@dede.com', '$1$L9VcRxWE$bCW4GvJ3getyE8SizWVUo/', NULL, NULL, NULL, NULL),
(138, '', 'i@i.i', '$1$iqOjwHhN$KZfPSPJVlr1mLxj//8l7Q.', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id` (`id`),
  ADD KEY `Id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
