-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 06:24 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mt14`
--

CREATE DATABASE `mt14` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mt14`;

-- --------------------------------------------------------

--
-- Table structure for table `antra`
--

CREATE TABLE `antra` (
  `kabas` varchar(4) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antra`
--


-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `post_id` int(11) NOT NULL auto_increment,
  `topic_id` int(11) NOT NULL,
  `post_text` text,
  `post_create_time` datetime default NULL,
  `post_owner` varchar(150) default NULL,
  PRIMARY KEY  (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `forum_posts`
--

INSERT INTO `forum_posts` (`post_id`, `topic_id`, `post_text`, `post_create_time`, `post_owner`) VALUES
(73, 1, 'Pakalbam', '2011-05-16 19:24:53', 'Saulius'),
(75, 1, 'Nenoriu', '2012-03-22 08:10:38', 'Jonas'),
(76, 1, 'Pasakyk 10 kartü: ??Ø e!ios óŽsys su !e!iais óŽsyŽ?iais". Kai pasakysi, paklausk kŽ daryti toliau.', '2012-03-25 10:08:43', 'Petras'),
(77, 1, 'Taip', '2012-10-24 21:07:56', 'PPPP');

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `topic_id` int(11) NOT NULL auto_increment,
  `topic_title` varchar(150) default NULL,
  `topic_create_time` datetime default NULL,
  `topic_owner` varchar(150) default NULL,
  PRIMARY KEY  (`topic_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`topic_id`, `topic_title`, `topic_create_time`, `topic_owner`) VALUES
(1, 'Pirma tema', '2011-05-15 11:17:15', 'Saulius');

-- --------------------------------------------------------

--
-- Table structure for table `grupes`
--

CREATE TABLE `grupes` (
  `id` int(4) NOT NULL auto_increment,
  `gkodas` char(2) collate utf8_lithuanian_ci default NULL,
  `gpavadinimas` varchar(50) collate utf8_lithuanian_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `grupes`
--

INSERT INTO `grupes` (`id`, `gkodas`, `gpavadinimas`) VALUES
(11, '11', 'DÄ—Å¾utÄ—s medinÄ—s'),
(12, '12', 'DÄ—Å¾utÄ—s barchatinÄ—s'),
(15, '31', 'Arbata Å¾alia'),
(16, '13', 'DÄ—Å¾utÄ—s odinÄ—s'),
(17, '14', 'DÄ—Å¾utÄ—s plastmasinÄ—s'),
(18, '32', 'Arbata juoda'),
(20, '33', 'Prieskoniai');

-- --------------------------------------------------------

--
-- Table structure for table `kam_skirta`
--

CREATE TABLE `kam_skirta` (
  `id` int(11) NOT NULL auto_increment,
  `kam` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kam_skirta`
--

INSERT INTO `kam_skirta` (`id`, `kam`) VALUES
(1, 'Visiems'),
(2, 'DOstytojams'),
(3, 'Studentams'),
(4, 'Absolventams');

-- --------------------------------------------------------

--
-- Table structure for table `meniu`
--

CREATE TABLE `meniu` (
  `id` int(4) NOT NULL auto_increment,
  `lygis` int(4) default NULL,
  `m_pav` varchar(20) collate utf8_lithuanian_ci default NULL,
  `nuoroda` varchar(30) collate utf8_lithuanian_ci default NULL,
  `vieta` varchar(4) collate utf8_lithuanian_ci default NULL,
  `poz` int(4) default NULL,
  `idd` int(4) default NULL,
  `eile` char(4) collate utf8_lithuanian_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `meniu`
--

INSERT INTO `meniu` (`id`, `lygis`, `m_pav`, `nuoroda`, `vieta`, `poz`, `idd`, `eile`) VALUES
(1, 1, 'Meniu tvarkymas', 'meniu.php', 'desn', 0, 1, '1'),
(25, 1, 'Testas', 'testas/prma.php', 'desn', 0, 25, '2'),
(27, 1, 'Foto', 'meniu_rodosub5.php', 'main', 0, 27, '3'),
(28, 0, '- Foto 11', '011.jpg', 'desn', 0, 27, '31'),
(29, 0, '- Foto 35', '035.jpg', 'desn', 0, 27, '32'),
(30, 0, '- Kitos foto', 'meniu_rodosub5.php', 'main', 0, 27, '33'),
(31, 0, '-- Foto 033', '033.jpg', 'desn', 0, 30, '331'),
(33, 1, 'Pradinis puslapis', 'remeliai1.html', '_top', 0, 33, '0'),
(35, NULL, '---foto35', '035.jpg', 'desn', 0, 34, '41'),
(34, NULL, '--Dar kitos', 'meniu_rodosub5.php', 'main', 0, 30, '4'),
(36, NULL, 'Forumas', 'vart_pri.php', 'desn', 0, 36, '5');

-- --------------------------------------------------------

--
-- Table structure for table `pardavimai`
--

CREATE TABLE `pardavimai` (
  `id` int(4) NOT NULL auto_increment,
  `pr_kodas` varchar(4) collate utf8_lithuanian_ci default NULL,
  `p_kodas` varchar(11) collate utf8_lithuanian_ci default NULL,
  `kiekis` float(7,3) default NULL,
  `par_kaina` float(9,2) default NULL,
  `par_data` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pardavimai`
--

INSERT INTO `pardavimai` (`id`, `pr_kodas`, `p_kodas`, `kiekis`, `par_kaina`, `par_data`) VALUES
(7, '39', '2', 7.000, 7.77, '2012-03-06'),
(8, '23', '3', 11.000, 12.22, '2012-03-06'),
(9, '47', '2', 77.000, 7.77, '2012-03-06'),
(10, '36', '4', 33.000, 3.33, '2012-03-06'),
(12, '47', '2', 7.770, 14.40, '2012-03-06'),
(13, '34', '1', 11.100, 15.40, '2012-03-06'),
(14, '45', '2', 11.000, 15.50, '2012-03-06'),
(15, '27', '1', 11.000, 11.10, '2012-03-06'),
(16, '42', '2', 11.000, 15.00, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pirkejai`
--

CREATE TABLE `pirkejai` (
  `id` int(4) NOT NULL auto_increment,
  `pir_kodas` varchar(11) collate utf8_lithuanian_ci default NULL,
  `pir_pav` varchar(50) collate utf8_lithuanian_ci default NULL,
  `pir_adr` varchar(50) collate utf8_lithuanian_ci default NULL,
  `pir_bnks` varchar(25) collate utf8_lithuanian_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pirkejai`
--

INSERT INTO `pirkejai` (`id`, `pir_kodas`, `pir_pav`, `pir_adr`, `pir_bnks`) VALUES
(1, '1234567891', 'Uab ''Nija sena''', 'Arkliu 1201', 'LT135467987798987971'),
(2, '23565465', 'Uab "Smaragdas"', 'Vilniaus 222', 'Lt2313131313'),
(3, '23654567', 'UAB 999', 'Vilniaus 150,  iauliai', 'LT23346546'),
(4, '323213137', 'UAB Juvelyrika', 'TilóŽ-s 93,  iauliai', 'LT2334346346');

-- --------------------------------------------------------

--
-- Table structure for table `pirkimai`
--

CREATE TABLE `pirkimai` (
  `id` int(4) NOT NULL auto_increment,
  `pirkodas` varchar(4) collate utf8_lithuanian_ci default NULL,
  `prekodas` varchar(4) collate utf8_lithuanian_ci default NULL,
  `kiekis` float(7,2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pirkimai`
--

INSERT INTO `pirkimai` (`id`, `pirkodas`, `prekodas`, `kiekis`) VALUES
(1, '1111', '0001', 7.20),
(3, '1111', '1001', 1.20),
(6, '1111', '1001', 11.10),
(7, '1117', '1005', 11.00),
(8, '1117', '1005', 17.00),
(9, '1117', '1007', 27.00),
(10, '1111', '1005', 77.00),
(11, '1111', '1005', 11.00),
(12, '1111', '0001', 7.20),
(13, '1118', '1005', 11.00),
(14, '1117', '1002', 77.00),
(15, '1111', '1002', 77.00),
(16, '1111', '1002', 77.70),
(17, '1111', '1002', 11.00),
(18, '1117', '1005', 12.00);

-- --------------------------------------------------------

--
-- Table structure for table `pirma`
--

CREATE TABLE `pirma` (
  `kabas` varchar(4) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pirma`
--


-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `id` int(4) NOT NULL auto_increment,
  `kodas` varchar(4) collate utf8_lithuanian_ci default NULL,
  `pav` varchar(30) collate utf8_lithuanian_ci default NULL,
  `kaina` float(7,2) default NULL,
  `gr` char(4) collate utf8_lithuanian_ci default NULL,
  `likutis` float default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=60 ;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `kodas`, `pav`, `kaina`, `gr`, `likutis`) VALUES
(12, '12', 'auskarams FIN', 2.57, '14', 80),
(13, '13', 'universalios FIN', 3.81, '14', 29),
(14, '14', 'grandinŽ-lŽ-ms FIN', 18.08, '14', 71),
(15, '15', 'Universalios ', 98.00, '13', 3),
(16, '1', 'óiedams', 84.00, '13', 8),
(17, '1', 'universalios', 99.00, '13', 5),
(18, '1', 'auskarams', 74.00, '13', 10),
(19, '1', 'óiedams', 67.00, '13', 27),
(20, '1', 'koljŽ-', 200.00, '13', 4),
(21, '1', 'óiedams', 73.00, '13', 20),
(22, '1', 'universalios', 82.09, '13', 10),
(23, '1', 'universalios', 80.00, '13', 9),
(24, '1', 'pakabukams', 2.54, '12', 75),
(25, '1', 'auskarams', 2.97, '12', 177),
(26, '1', 'óiedams', 2.55, '12', 218),
(27, '1', 'grandinŽ-lŽ-ms', 24.45, '11', -1),
(28, '1', 'apyrankŽ-ms', 19.76, '11', 10),
(29, '1', 'koljŽ-', 40.37, '11', 4),
(30, '1', 'óiedams', 13.51, '11', 50),
(31, '1', 'óiedams', 14.30, '11', 20),
(32, '1', 'auskarams', 14.95, '11', 40),
(33, '1', 'pakabukams', 17.37, '11', 10),
(34, '1', 'grandinŽ-lŽ-ms', 23.38, '11', -1.1),
(35, '1', 'grandinŽ-lŽ-ms', 4.67, '12', 36),
(36, '1', 'pakabukams', 3.39, '12', -21),
(37, '1', 'universalios', 1.36, '14', 67),
(38, '1', 'universalios', 1.70, '14', 150),
(39, '1', 'universalios', 5.09, '12', -3),
(40, '1', 'koljŽ-', 12.71, '12', 21),
(41, '1', 'pakabukams', 1.70, '12', 108),
(42, '1', 'óiedams', 14.58, '11', -6),
(43, '1', 'óiedams', 15.37, '11', 17),
(44, '1', 'auskarams', 16.03, '11', 20),
(45, '1', 'pakabukams', 18.45, '11', -1),
(46, '1', 'óiedams', 13.37, '11', 30),
(47, '1', 'óiedams vestuviniams', 14.14, '11', -46.77),
(48, '1', 'óiedams', 2.67, '12', 36),
(49, '1', 'óiedams', 11.48, '11', 50),
(50, '1', 'óiedams vestuviniams', 12.23, '11', 49),
(51, '1', 'Milanki Assamo', 0.15, '31', 20000),
(52, '1', 'Korakundah Assamo', 0.15, '31', 20000),
(53, '1', 'Darjeelig', 0.16, '32', 20000),
(54, '1', 'mi!inys', 0.12, '33', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL auto_increment,
  `nick` varchar(20) default NULL,
  `vardas` varchar(20) default NULL,
  `pavarde` varchar(20) default NULL,
  `elpastas` varchar(30) default NULL,
  `pass` varchar(1000) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nick` (`nick`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nick`, `vardas`, `pavarde`, `elpastas`, `pass`) VALUES
(53, 'Saulius_M.', 'sad', 'asd', 'sauliussm@splius.lt', '14b17659ed3d35be7d5a2f87ead1e0e4'),
(54, 'Saulius', 'ssss', 'mmmm', 'milasausk.s@gmail.com', '14b17659ed3d35be7d5a2f87ead1e0e4'),
(55, 'php', '', '', 'test@test.lt', 'e1bfd762321e409cee4ac0b6e841963c');

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int(4) NOT NULL auto_increment,
  `v_vardas` varchar(20) default NULL,
  `slaptazodis` varchar(50) default NULL,
  `el_pastas` varchar(30) default NULL,
  `vardas` varchar(20) default NULL,
  `pavarde` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `v_vardas`, `slaptazodis`, `el_pastas`, `vardas`, `pavarde`) VALUES
(1, 'Saulius', '14b17659ed3d35be7d5a2f87ead1e0e4', 'sauliussm@splius.lt', 'Saulius', 'MilaÅ¡auskas');
