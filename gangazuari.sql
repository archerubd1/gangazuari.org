-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2025 at 06:05 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gangazuari`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `membership_type` varchar(50) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `motivation` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `approval_reason` text,
  `approved_on` datetime DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `full_name`, `email`, `phone`, `membership_type`, `interest`, `motivation`, `created_at`, `status`, `approval_reason`, `approved_on`) VALUES
(1, 'tretertert', 'archerfdfdgfdgfdgdfgfdgfdgdfgdfgdfubd@gmail.com', '+917411275974', 'individual', 'cultural', 'trtrtertertertr', '2025-09-07 06:44:37', 'pending', NULL, NULL),
(2, 'uday deshpande', 'archerubd@gmail.com', '+917411275974', 'student', 'education', 'bbgbghgfhfghf', '2025-09-07 07:03:28', 'pending', NULL, NULL),
(3, 'uday deshpande', 'archerhgfhgfhggfhgfhgfhgfhgfhgfhgfhgfhghghghghgfhgfhgfhfghfgubd@gmail.com', '+917411275974', 'family', 'education', 'hgfhghgfhfghhfhhghghgf', '2025-09-07 07:05:40', 'approved', 'hghgfhgfhgf', '2025-09-07 18:07:52'),
(4, 'Lisa', 'lisa@lisa.com', '+917411275974', 'individual', 'cultural', 'dsadsadsadasdasdsa', '2025-09-07 07:09:44', 'approved', 'gfhgfhghghg', '2025-09-07 18:04:33'),
(5, 'the trinity', 'trinity@myheart.com', '1111111111111', 'patron', 'social', 'becouse we contribute more than WAHT is ASKED', '2025-09-08 05:10:56', 'approved', 'because all are my darlings ', '2025-09-08 10:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `program_registrations`
--

CREATE TABLE IF NOT EXISTS `program_registrations` (
`id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `program_type` varchar(100) DEFAULT NULL,
  `program_title` varchar(255) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `participant_type` varchar(50) DEFAULT NULL,
  `expectations` text,
  `contribution` text,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `program_registrations`
--

INSERT INTO `program_registrations` (`id`, `program_id`, `program_type`, `program_title`, `name`, `email`, `phone`, `participant_type`, `expectations`, `contribution`, `status`, `created_at`) VALUES
(1, 4, 'unmesh', 'Youth-Wave', 'uday deshpande', 'archerubd@gmail.com', '+917411275974', 'individual', 'hgjhjhgjghjgh', 'jhgjghjhgjhgjghjhgjh', 'pending', '2025-09-06 15:07:32'),
(2, 4, 'unmesh', 'Youth-Wave', 'uday deshpande', 'archerubd@gmail.com', '+917411275974', 'individual', 'jhgjhgjh', 'jhgjhgjhgjhgjh', 'pending', '2025-09-06 15:13:25'),
(3, 4, 'unmesh', 'Youth-Wave', 'uday deshpande', 'archerubd@gmail.com', '+917411275974', 'individual', 'jhgjhgjh', 'jhgjhgjhgjhgjh', 'pending', '2025-09-06 15:13:32'),
(4, 4, 'unmesh', 'Youth-Wave', 'uday deshpande', 'archerubd@gmail.com', '+917411275974', 'individual', 'jhgjhgjh', 'jhgjhgjhgjhgjh', 'pending', '2025-09-06 15:15:26'),
(5, 3, 'unmesh', 'Manthan Dialogue 2', 'uday deshpande', 'archerubd@gmail.com', '+917411275974', 'group', 'jukykuku', 'yujjyujyujyujuyj', 'pending', '2025-09-06 15:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
`comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(200) NOT NULL,
  `comment_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `comment_at`) VALUES
(1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Vincy', '2022-06-30 04:27:11'),
(2, 1, 'Okay, thank you for your comment.', 'Admin', '2022-06-30 04:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_programs`
--

CREATE TABLE IF NOT EXISTS `upcoming_programs` (
`program_id` int(11) NOT NULL,
  `program_title` varchar(255) NOT NULL,
  `program_type` varchar(100) DEFAULT NULL,
  `program_brief` text,
  `venue` varchar(255) DEFAULT NULL,
  `program_date` date DEFAULT NULL,
  `remarks` text,
  `program_status` enum('Draft','Review','Published') DEFAULT 'Draft',
  `lifecycle_status` enum('Upcoming','Completed','Archived','Cancelled') DEFAULT 'Upcoming',
  `cancel_reason` text,
  `archive_reason` text,
  `program_owner` varchar(255) DEFAULT NULL,
  `display_date_venue` varchar(500) DEFAULT NULL,
  `open_registrations_url` varchar(500) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `upcoming_programs`
--

INSERT INTO `upcoming_programs` (`program_id`, `program_title`, `program_type`, `program_brief`, `venue`, `program_date`, `remarks`, `program_status`, `lifecycle_status`, `cancel_reason`, `archive_reason`, `program_owner`, `display_date_venue`, `open_registrations_url`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Bhasha: Spoken Konkani Class', 'unmesh', 'Immerse yourself in the rich linguistic heritage of Goa through interactive Konkani language sessions. \r\nFundamentals of spoken Konkani\r\nCultural context and idiomatic expressions\r\nEngaging conversational practice', 'Panaji', '2025-09-20', 'None', 'Published', 'Upcoming', NULL, NULL, 'Somnath Sarkar', 'Yes', 'Yes', 'uploads/programs/1757160584_bhasha_konkani.jpg', '2025-09-06 12:09:44', '2025-09-07 03:15:42'),
(2, 'Manthan Dialogue 1', 'unmesh', 'An intellectual dialogue series exploring contemporary issues in philosophy, literature, and human values.\r\nCritical discussions on ethics and society\r\nInteractive Q&A sessions\r\nCross-disciplinary perspectives', 'ICG', '2025-10-16', 'n', 'Published', 'Upcoming', NULL, NULL, 'Somnath Sarkar', 'Yes', 'Yes', 'uploads/programs/1757166387_manthan_dialogue1.jpg', '2025-09-06 13:46:27', '2025-09-07 03:16:05'),
(3, 'Manthan Dialogue 2', 'unmesh', 'Continuing the series of reflective conversations bridging classical philosophy, literature, and contemporary thought.\r\nDebates on identity, ethics, and creativity\r\nExploration of universal human questions\r\nEngagement with emerging voices', 'GCCI', '2026-03-06', 'test', 'Published', 'Upcoming', NULL, NULL, 'Somnath Sarkar', 'Yes', 'Yes', 'uploads/programs/1757166823_manthan_dialogue2.jpg', '2025-09-06 13:53:43', '2025-09-07 03:16:38'),
(4, 'Youth-Wave', 'unmesh', 'A youth-focused literary and philosophical program encouraging creative expression, debate, and reflection.\r\nInteractive writing workshops\r\nDialogues on contemporary literature and philosophy\r\nCollaborative intellectual projects', 'DCCE, Cujira', '2026-06-16', 'test', 'Published', 'Upcoming', NULL, NULL, 'Somnath Sarkar', 'Yes', 'Yes', 'uploads/programs/1757166933_youth_wave.jpg', '2025-09-06 13:55:33', '2025-09-07 03:16:57'),
(6, 'Barsat Me', 'chhandovani', 'A rhythmic celebration of monsoon moods expressed through dance and movement.\r\nContemporary interpretations of classical forms\r\nFusion of rhythm with seasonal themes\r\nImmersive choreographic sequences', 'Dona Paula', '2025-08-10', 'as of date past event', 'Published', 'Upcoming', NULL, NULL, 'Dr Anil Chatterjee', 'Yes', 'Yes', 'uploads/programs/1757210442_barsat_me.jpg', '2025-09-07 02:00:42', '2025-09-07 03:17:30'),
(7, 'Melody', 'chhandovani', 'An evening of soulful songs and musical journeys celebrating voice and harmony.\r\nClassical and contemporary song renditions\r\nExploration of rhythm and melody interplay\r\nCommunity sing-along experiences', 'Margao', '2025-12-07', 'up', 'Published', 'Upcoming', NULL, NULL, 'Dr Anil Chatterjee', 'Yes', 'Yes', 'uploads/programs/rhythm_melody.jpg', '2025-09-07 02:02:46', '2025-09-07 03:19:22'),
(10, 'Foundation Day', 'chhandovani', 'A celebration of Chhandovaniâ€™s vision, featuring performances and community participation.\r\nSpecial dance and musical presentations\r\nRecognition of artistic contributions\r\nCultural exchanges and collaborations', 'IMB, Panaji', '2026-05-23', 'up', 'Published', 'Upcoming', NULL, NULL, 'Dr Anil Chatterjee', 'Yes', 'Yes', 'uploads/programs/1757210880_foundation_day.jpg', '2025-09-07 02:08:00', '2025-09-07 03:19:41'),
(9, 'Footprints', 'chhandovani', 'A tribute through dance and music marking the creative journey of Chhandovani.\r\nRetrospective dance showcases\r\nStorytelling through performance\r\nReflection on artistic milestones', 'Sanquelim', '2026-01-11', 'up', 'Published', 'Upcoming', NULL, NULL, 'Dr Anil Chatterjee', 'Yes', 'Yes', 'uploads/programs/1757210688_footprints.jpg', '2025-09-07 02:04:48', '2025-09-07 03:20:00'),
(14, 'Water, Ecology & Sustainability', 'horizon', 'Linking heritage and ecology for a sustainable future through rivers, oceans, and traditional knowledge.\r\nComparative study of riverine civilisations globally\r\nDocumenting indigenous ecological practices\r\nBlue economy & sustainable coastal heritage', '', '0000-00-00', '', 'Published', 'Upcoming', NULL, NULL, 'Dr. Dinesh Verma', NULL, NULL, 'uploads/programs/1757212220_kshijit_program1.jpg', '2025-09-07 02:30:20', '2025-09-07 02:30:20'),
(15, 'Living Traditions & Intangible Heritage', 'horizon', 'Preserving oral traditions, crafts, rituals, and performing arts as dynamic cultural resources.\r\nDocumentation of endangered oral traditions and languages\r\nSafeguarding crafts, music, and rituals\r\nCulinary heritage & Ayurveda as cultural diplomacy', '', '0000-00-00', 'up', 'Published', 'Upcoming', NULL, NULL, 'Dr. Dinesh Verma', NULL, NULL, 'uploads/programs/1757212353_kshijit_program2.jpg', '2025-09-07 02:32:33', '2025-09-07 02:32:33'),
(16, 'Memory, Archives & Digital Futures', 'horizon', 'Building inclusive digital heritage platforms and safeguarding shared human memory responsibly.\r\nEthical digital archiving\r\nRisks of memory distortion in digital media\r\nVirtual museums and global heritage access', '', '0000-00-00', 'up', 'Published', 'Upcoming', NULL, NULL, 'Dr. Dinesh Verma', NULL, NULL, 'uploads/programs/1757212427_kshijit_program3.jpg', '2025-09-07 02:33:47', '2025-09-07 02:33:47'),
(17, 'Maritime & Trade Legacies', 'horizon', 'Highlighting oceans as connectors of civilisations and spaces for cultural dialogue.\r\nGoaâ€™s role in Indian Ocean trade networks\r\nCross-cultural exchanges along spice routes\r\nComparative maritime heritage studies', '', '0000-00-00', 'up', 'Published', 'Upcoming', NULL, NULL, 'Dr. Dinesh Verma', 'No', 'No', 'uploads/programs/1757213800_kshijit_program5.jpg', '2025-09-07 02:56:40', '2025-09-07 02:56:40'),
(18, 'Urban Heritage & Sustainable Development', 'horizon', 'Integrating heritage into urban planning to create resilient, inclusive, and sustainable cities.\r\nComparative study of heritage cities\r\nHeritage-driven urban planning\r\nCommunity-led conservation strategies', '', '0000-00-00', 'h', 'Published', 'Upcoming', NULL, NULL, 'Dr. Dinesh Verma', 'No', 'No', 'uploads/programs/1757214415_kshijit_program5.jpg', '2025-09-07 03:06:55', '2025-09-07 03:06:55'),
(19, 'Philosophy, Ethics & Global Citizenship', 'horizon', 'Inspiring global ethics and shared human values through heritage, dialogue, and education.\r\nComparative studies on Dharma, religion, and humanism\r\nInterfaith and intercultural dialogues\r\nHeritage education for global citizenship', '', '0000-00-00', 'up', 'Published', 'Upcoming', NULL, NULL, 'Dr. Dinesh Verma', 'No', 'No', 'uploads/programs/1757214543_kshijit_program6.jpg', '2025-09-07 03:09:03', '2025-09-07 03:09:03'),
(20, 'my darling trinity', 'unmesh', 'lets rock n roll  \r\nZindagi nahi meelege dobara', 'old goa', '2025-09-09', 'hghghgfhfghgf', 'Published', 'Upcoming', NULL, NULL, 'Somnath Sarkar', 'Yes', 'No', 'uploads/programs/1757308071_banner-2.jpg', '2025-09-08 05:07:51', '2025-09-08 05:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `full_name` varchar(150) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `status` enum('active','inactive','blocked') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password_hash`, `full_name`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', '0e7517141fb53f21ee439b355b5a1d0a', 'System Administrator', 'admin', 'active', '2025-09-07 04:32:41', '2025-09-07 04:53:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `program_registrations`
--
ALTER TABLE `program_registrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `upcoming_programs`
--
ALTER TABLE `upcoming_programs`
 ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `program_registrations`
--
ALTER TABLE `program_registrations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upcoming_programs`
--
ALTER TABLE `upcoming_programs`
MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
