-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 05:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `disease` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `medicine`, `disease`, `time`) VALUES
(18, 'Acetaminophen Aspirin Caffeine Salicylamide Tablet', 'Migraine,Tension Headache', '2019-03-05 13:51:12'),
(19, 'Acetaminophen Aspirin Tablet', ' Arthritis,Common Cold (Viral Rhinitis),Flu,Tension Headache', '2019-03-05 13:57:45'),
(20, 'Acetaminophen Brompheniramine Pseudoephedrine Tablets', ' Fever,Hay Fever (Allergic Rhinitis),Scarlet Fever', '2019-03-05 13:58:36'),
(21, 'Acetaminophen Caffeine Pyrilamine Tablet', 'Muscle Strain,Tension Headache', '2019-03-05 14:02:30'),
(22, 'Acetaminophen Caffeine Tablet', 'Back Pain,Heel Pain,Scarlet Fever', '2019-03-05 14:03:28'),
(23, 'Acetaminophen Caffeine Dextromethorphan Pseudoephedrine Powder Packet', 'Allergy,Common Cold (Viral Rhinitis),Hay Fever (Allergic Rhinitis)', '2019-03-06 01:20:36'),
(24, 'Acetaminophen Dextromethorphan Doxylamine', 'Allergy,Cold and Flu,Pain', '2019-03-05 14:07:09'),
(25, 'Bacitracin Neomycin Polymyxin Lotion	', 'Head Injury In Children,Rotator Cuff Injury', '2019-03-05 14:20:37'),
(26, 'Balsam Peru Castor Oil Trypsin Ointment', 'Skin Tags (Acrochordon)', '2019-03-05 14:21:58'),
(27, 'Beclomethasone', 'Asthma ', '2019-03-05 14:23:14'),
(28, 'Benzocaine Glycerin Dextromethorphan Spray', 'Pain,Sore Throat Pharyngitis', '2019-05-13 10:13:12'),
(29, 'Benzoyl Peroxide Salicylic Acid pads', 'Acne', '2019-05-13 10:13:49'),
(30, 'Betamethasone Dipropionate Augmented Cream', 'Allergy,Earache,Rash ', '2019-05-13 10:14:10'),
(31, 'Bexarotene Topical', 'Lymphoma', '2019-05-13 10:14:32'),
(32, 'Bismuth Subsalicylate Capsules', 'Diarrhea', '2019-05-13 10:40:27'),
(33, 'Bivalirudin Injection', 'Heart Failure,Heart Murmur', '2019-05-13 10:40:56'),
(34, 'Black Cohosh', 'Perimenopause,Premenstrual Syndrome (PMS) ', '2019-05-13 10:41:22'),
(35, 'Bleomycin Intra venous injection', 'Cancer ', '2019-05-13 10:41:40'),
(36, 'Cadexomer Iodine Gel', 'Cold Sores and Fever Blisters ', '2019-05-13 10:42:43'),
(37, 'Calamine Pramoxine Lotion', 'Jock Itch (Tinea Cruris),Tick Bites', '2019-05-13 10:43:06'),
(38, 'Calcium Carbonate Tablets', 'Osteoporosis ', '2019-05-13 10:43:32'),
(39, 'Camphor Capsicum Menthol Patch', 'Arthritis,Muscle Strain', '2019-05-13 10:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usia` int(50) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `usia`, `gender`) VALUES
(1, 'Sicillia', 'btssra', '', 0, ''),
(2, 'BTS', '1307', '', 0, ''),
(3, 'Sra', '13', '', 0, ''),
(4, 'RM', 'leader', '', 0, ''),
(5, 'LY', 'ALWAYS', '', 0, ''),
(6, 'Sicillia', 'army', '', 0, ''),
(7, 'Moon', 'Sun', '', 0, ''),
(8, 'Jungkook', 'september', '', 0, ''),
(9, 'Jimin', 'october', '', 0, ''),
(14, 'Suga', 'march', 'email', 0, 'usia'),
(15, 'Rizki Ananda', 'rizki', 'email', 0, 'usia'),
(16, 'a', 'a', 'email', 0, 'usia'),
(17, 'bb', 'bb', 'sicilliasra13@gmail.com', 0, '11'),
(18, 'cc', 'cc', 'sicilliasra13@gmail.com', 18, 'Laki - Laki'),
(19, 'V', 'DECEMBER', 'V31@gmail.com', 24, 'Laki - Laki'),
(20, 'Sicillia13', '13', 'sicilliasra13@gmail.com', 18, 'Perempuan'),
(21, 'J Hope', 'february', 'hope@gmail.com', 25, 'Laki - Laki'),
(22, 'AAAA', 'AAA', 'AA@GMAIL.COM', 25, 'Laki - Laki'),
(23, 'Taehyung', '123', 'taehyung017@gmail.com', 25, 'Laki - Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
