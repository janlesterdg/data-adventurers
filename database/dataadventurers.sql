-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2020 at 03:53 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataadventurers`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `details`, `date`, `time`, `place`) VALUES
(12, 'Programming Quiz Bee', 'Please bring your own devices. ', '2019-12-12', '18:00:00', 'Devesse Plaza'),
(13, 'Team Building', 'Lots of fun activities!', '2019-12-11', '12:00:00', 'Zambales');

-- --------------------------------------------------------

--
-- Table structure for table `act_archive`
--

DROP TABLE IF EXISTS `act_archive`;
CREATE TABLE IF NOT EXISTS `act_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `act_archive`
--

INSERT INTO `act_archive` (`id`, `title`, `details`, `date`, `time`, `place`) VALUES
(1, 'Enrollment', 'q', '1111-11-11', '22:00:00', 'Devesse'),
(2, 'ss', 'www', '0011-11-11', '23:11:00', 'Devesse Plaza'),
(3, 'Enrollment', 'e', '0011-11-11', '23:11:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `author`, `date`) VALUES
(30, 'Petition', 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n\r\n1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\n', 'Eva', '2019-12-20 01:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `ann_archive`
--

DROP TABLE IF EXISTS `ann_archive`;
CREATE TABLE IF NOT EXISTS `ann_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ann_archive`
--

INSERT INTO `ann_archive` (`id`, `title`, `content`, `author`, `date`) VALUES
(1, 'dddd', 'eeeee', 'mmm', '2019-12-19 15:09:03'),
(2, 'sssssssss', '1 {\r\n  text-decoration: overline;\r\n}\r\n\r\nh2 {\r\n  text-decoration: line-through;\r\n}\r\n\r\nh3 {\r\n  text-decoration: underline;\r\n}\r\n\r\nh4 {\r\n  text-decoration: underline overline;', 'Array', '2019-12-18 22:53:22'),
(3, 'Enrollment', 'lorem', '', '2019-12-09 20:01:47'),
(4, 'sssssssss', '1 {\r\n  text-decoration: overline;\r\n}\r\n\r\nh2 {\r\n  text-decoration: line-through;\r\n}\r\n\r\nh3 {\r\n  text-decoration: underline;\r\n}\r\n\r\nh4 {\r\n  text-decoration: underline overline;', 'mmm', '2019-12-18 22:54:20'),
(5, 'Petition', 'The petition for subjects is now open at D420.', '2153221', '2019-12-07 23:40:31'),
(6, 'Enrollment', 'lorem', '', '2019-12-09 20:01:47'),
(7, 'Enrollment', 'Good Day Data Adventurers! The enrollment for CIS students is on January 4-7, 2020.\r\nJan 4 - 2nd year\r\nJan 5 - 3rd year\r\nJan 6 - 4th year\r\nJan 7 -  irregular students', '2153221', '2019-12-07 23:39:28'),
(8, 'Enrollment', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Walter', '2019-12-20 01:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

DROP TABLE IF EXISTS `memo`;
CREATE TABLE IF NOT EXISTS `memo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`id`, `title`, `file_name`, `uploaded_on`) VALUES
(7, 'No classes - Jan 14', '38b37ced5bd1150b0318c9c8c40b6c24.png', '2019-12-08 16:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `memo_archive`
--

DROP TABLE IF EXISTS `memo_archive`;
CREATE TABLE IF NOT EXISTS `memo_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo_archive`
--

INSERT INTO `memo_archive` (`id`, `title`, `file_name`, `uploaded_on`) VALUES
(1, 'Memo', '38b37ced5bd1150b0318c9c8c40b6c24.png', '2019-12-19 17:50:52'),
(2, 'memo', '38b37ced5bd1150b0318c9c8c40b6c24.png', '2019-12-19 17:52:27'),
(3, 'memo2', '38b37ced5bd1150b0318c9c8c40b6c24.png', '2019-12-19 17:52:42'),
(4, 'Enrollment', '38b37ced5bd1150b0318c9c8c40b6c24.png', '2019-12-19 17:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

DROP TABLE IF EXISTS `page_info`;
CREATE TABLE IF NOT EXISTS `page_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` varchar(1000) NOT NULL,
  `mission` varchar(1000) NOT NULL,
  `vision` varchar(1000) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `about`, `mission`, `vision`, `address`, `contact`, `email`, `image`) VALUES
(1, '\"Lorem ipsum ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiivelit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 'Saint Louis University, Maryheights, Bakakeng Baguio City', '09395066787', 'dataadventurers@gmail.com', '../img/90b1e58a77c430475f53605c37fdd1e26606d436e01eb6d507a343766ac424cc43cdc55224d6ccf6723e3af6bb42df29logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

DROP TABLE IF EXISTS `polls`;
CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `title`, `desc`) VALUES
(1, 'What\'s your favorite programming language?', ''),
(3, 'Integrative Programming', 'Exam');

-- --------------------------------------------------------

--
-- Table structure for table `poll_answers`
--

DROP TABLE IF EXISTS `poll_answers`;
CREATE TABLE IF NOT EXISTS `poll_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reg_date`
--

DROP TABLE IF EXISTS `reg_date`;
CREATE TABLE IF NOT EXISTS `reg_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_reg` date NOT NULL,
  `end_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_date`
--

INSERT INTO `reg_date` (`id`, `start_reg`, `end_reg`) VALUES
(1, '2019-12-21', '2019-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_initial` varchar(10) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `cpassword` varchar(500) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `contact_num` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `first_name`, `last_name`, `middle_initial`, `id_number`, `email_add`, `password`, `cpassword`, `Birthdate`, `course`, `Year`, `contact_num`, `date`) VALUES
(37, 'Israel', 'Adesanya', 'S', '2167541', 'laststylebender@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '1992-10-27', 'BSIT', '4', '098765432111', '2020-01-15 18:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

DROP TABLE IF EXISTS `school_year`;
CREATE TABLE IF NOT EXISTS `school_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_year` date NOT NULL,
  `end_year` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`id`, `start_year`, `end_year`) VALUES
(22, '2019-12-21', '2019-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_initial` varchar(1) NOT NULL,
  `id_number` int(11) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `role` enum('member','admin','superadmin') NOT NULL,
  `password` varchar(500) NOT NULL,
  `cpassword` varchar(500) DEFAULT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `course` varchar(50) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `contact_num` varchar(50) NOT NULL,
  `activation_status` enum('activated','deactivated') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_initial`, `id_number`, `email_add`, `role`, `password`, `cpassword`, `Birthdate`, `course`, `Year`, `contact_num`, `activation_status`) VALUES
(38, 'John', 'Cena', 'P', 3231231, 'youcantseeme@gmail.com', 'member', '4297f44b13955235245b2497399d7a93', '96e79218965eb72c92a549dd5a330112', '1995-02-07', '', '', '098796878642', 'activated'),
(36, 'Conor', 'McGregor', 'D', 2157541, 'notorious@gmail.com', 'admin', '4297f44b13955235245b2497399d7a93', '4297f44b13955235245b2497399d7a93', '1991-07-02', 'BSIT', '4', '098765432112', 'activated'),
(35, 'Mark Henry', 'hammer', 'S', 2123414, 'sadwaw@gmail.com', 'superadmin', '4297f44b13955235245b2497399d7a93', '4297f44b13955235245b2497399d7a93', '2019-12-05', 'BSIT', '4', '213432534556', 'activated'),
(34, 'Isla', 'Thomas', 'S', 2157541, 'jvwtayaban@gmail.com', 'member', '4297f44b13955235245b2497399d7a93', '4297f44b13955235245b2497399d7a93', '2019-12-05', 'BSIT', '4', '123213123123', 'deactivated'),
(39, 'Anthony', 'Pettis', 'M', 2222222, 'Wheaties32@gmail.com', 'member', '4297f44b13955235245b2497399d7a93', '4297f44b13955235245b2497399d7a93', '1991-04-16', '', '', '1988723564', 'activated');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
