-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:23 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fet18040195`

CREATE DATABASE IF NOT EXISTS `fet18040195` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `fet18040195`;

CREATE DATABASE IF NOT EXISTS `fet18040195` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fet18040195`;
--
-- Database: `fet18040195`
--
CREATE DATABASE IF NOT EXISTS `fet18040195` DEFAULT CHARACTER SET hp8 COLLATE hp8_english_ci;
USE `fet18040195`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--
CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `Name` varchar(87) DEFAULT NULL,
  `Country` varchar(43) DEFAULT NULL,
  `County/Province` varchar(64) DEFAULT NULL,
  `Population` bigint(20) DEFAULT NULL,
  `Currency` varchar(3) DEFAULT NULL,
  `Language` varchar(85) DEFAULT NULL,
  `Timezone` varchar(6) DEFAULT NULL,
  `geo_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `Name`, `Country`, `County/Province`, `Population`, `Currency`, `Language`, `Timezone`, `geo_id`, `comment_id`) VALUES
(1, 'Rennes', 'France', 'Brittany', 215366, 'GBP', 'English', 'GMT+1', 16, NULL),
(2, 'Exeter', 'United Kingdom', 'Devon', 128900, 'GBP', 'English', 'GMT+1', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `User_Name` varchar(24) DEFAULT NULL,
  `ImageURL` varchar(128) NOT NULL,
  `Time_Stamp` timestamp NULL DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `geo_location`
--

CREATE TABLE `geo_location` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Latitude` double DEFAULT NULL,
  `Longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `geo_location`
--

INSERT INTO `geo_location` (`id`, `Name`, `Latitude`, `Longitude`) VALUES
(1, 'Exeter Cathedral', 50.722536, -3.529913),
(2, 'Bill Douglas Cinema', 50.733393, -3.534105),
(3, 'St James Park', 50.730736, -3.521068),
(4, 'Powderham Castle', 50.643123, -3.462008),
(5, 'Raceworld Ltd', 50.698383, -3.390081),
(6, 'Underground Passages', 50.725117, -3.526947),
(7, 'Haldon Forest Park - Forestry', 50.653559, -3.580577),
(8, 'Cathedral Saint-Pierre de Rennes', 48.111646, -1.683279),
(9, 'Les Champs Libres', 48.105308, -1.674871),
(10, 'Marché des Lices', 48.112422, -1.685166),
(11, 'BRAIN - Escape Game',  48.096982, -1.692163),
(12, 'eSpace Sciences', 48.105239, -1.675411),
(13, 'Tourist Office of Rennes',  48.115592, -1.680979),
(14, 'Forêt Adrénaline Rennes', 48.135674, -1.646846),
(15, 'Exeter', 50.718412, -3.533899),
(16, 'Rennes', 48.117266, -1.677793);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `Image_Path` varchar(255) DEFAULT NULL,
  `Image_Description` varchar(126) DEFAULT NULL,
  `poi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `places_of_interest`
--

CREATE TABLE `places_of_interest` (
  `id` int(11) NOT NULL,
  `Name_of_place` varchar(64) DEFAULT NULL,
  `Type_of_place` varchar(32) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `WP_Link` varchar(2048) DEFAULT NULL,
  `Contact_Number` int(11) DEFAULT NULL,
  `Social_Media` varchar(255) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `geo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `places_of_interest`
--

INSERT INTO `places_of_interest` (`id`, `Name_of_place`, `Type_of_place`, `capacity`, `Address`, `Description`, `WP_Link`, `Contact_Number`, `Social_Media`, `city_id`, `geo_id`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(1, 'Exeter Cathedral', 'Religious', 1000, '1 The Cloisters, Exeter EX1 1HS', 'Exeter Cathedral is an Anglican cathedral, and the seat of the Bishop of Exeter, in the city of Exeter, Devon in South West England.', 'https://www.exeter-cathedral.org.uk/', 1392255573, 'https://www.facebook.com/exetercathedral/', 1, NULL),
(2, 'Underground Passages', 'Tourist Attraction', 100, '2 Paris St, Exeter EX1 1GA', 'These medieval passages have always fascinated local people, with stories of wars and sieges, plague and pestilence.', 'https://exeter.gov.uk/leisure-and-culture/our-attractions/underground-passages/visitor-information/', 1392665887, 'https://www.facebook.com/UndergroundPassages/', 1, NULL),
(3, 'Bill Douglas Cinema Museum', 'Museum', 1000, 'Prince of Wales Rd, Exeter EX4 4SB', 'The Bill Douglas Cinema Museum is home to one of the largest collections of material relating to the moving image in Britain.', 'https://www.bdcmuseum.org.uk/', 1392724321, 'https://www.facebook.com/bdcmuseum/', 1, NULL),
(4, 'Powderham Castle', 'Venue/ historic attraction', 10000, 'Exeter, EX6 8JQ', 'The Castle is a remarkable place, with centuries of stories that we are excited to share with our community and guests from near and far.', 'https://www.powderham.co.uk/', 1626890243, 'https://www.facebook.com/powderhamcastle', 1, NULL),
(5, 'Raceworld Ltd', 'Tourist Attraction', 20, 'Unit 4, Greendale Business Park, Sidmouth Road, Woodbury Salterton, Exeter EX5 1EW', 'Professional Go Karting based in Devon, for stag parties, corporate outings, day trips or a fun afternoon with your friends.', 'http://www.raceworld-karting.co.uk/', 1395233397, 'https://www.facebook.com/RaceworldKarting/', 1, NULL),
(6, 'Haldon Forest Park - Forestry', 'Nature Attraction', NULL, 'Hill, Kennford, Exeter EX6 7XR', 'Multi-use forest with horse-riding, orienteering, biking and zip wire through the forest canopy.', 'https://www.forestryengland.uk/haldon-forest-park', 300675826, 'https://www.facebook.com/haldonforestpark/', 1, NULL),
(7, 'St James Park', 'Stadium', 52405, 'Stadium Way, Exeter EX4 6PX', 'St James Park is a football stadium in Exeter and is the home of Exeter City F.C.', 'exetercityfc.co.uk', 1392411243, 'https://www.facebook.com/StJamesParkNE1/', 1, NULL),
(8, 'Cathedral Saint-Pierre de Rennes', 'Religious ', 1100, 'Rue de la Monnaie, 35000 Rennes, France', 'Traditional site of cathedral, demolished in 18th century and rebuilt after the French Revolution.', 'https://cathedralerennescatholique.icodia.info/3patrimoine/saintpierre.html', 332997848, 'https://www.facebook.com/pages/Rennes-Cathedral/110932078958559?rf=129525367098931', 2, NULL),
(9, 'Les Champs Libres', 'Library and Museum', 850, '10 Cours des Alliés, 35000 Rennes, France', 'Home to the main city library & the Museum of Brittany, plus a science museum with planetarium.', 'https://www.leschampslibres.fr/', 322340660, ' https://www.facebook.com/LesChampsLibres/', 2, NULL),
(10, 'Marché des Lices', 'Farmer market', 500, '3 Place du Bas des Lices, 35000 Rennes, France', 'For four centuries now and most likely more, every Saturday from 7:30 AM to 1:30 PM all Rennes converges in great numbers at the Lices square.', 'https://www.itinari.com/the-marche-des-lices-rennes-amazing-market-wqly', NULL, 'https://www.facebook.com/marchedeslices/', 2, NULL),
(11, 'BRAIN', 'Tourist Attraction', 10, '13 Rue Pierre le Baud, 35000 Rennes, France', 'BRAIN, l\'Escape Game ', 'https://www.brainrennes.com/', 339824546, 'https://www.facebook.com/brain.rennes/', 2, NULL),
(12, 'eSpace Sciences', 'Museum', 2000, '10 Cours des Alliés, 35000 Rennes, France', 'Science center & planetarium in a modern building, offering events & lectures with a family focus.', 'https://www.espace-sciences.org/', 332234060, 'https://www.facebook.com/Espacedessciences35/', 2, NULL),
(13, 'Tourist Office of Rennes', 'Info point', NULL, '1 Rue Saint-Malo, 35000 Rennes, France', 'A great place to find your local tourist stuff. Locals aren\'t friendly but they have good leaflets.', 'tourisme-rennes.com', 338916735, 'https://www.facebook.com/visitrennes/?brand_redir=282316792729', 2, NULL),
(14, 'Forêt Adrénaline Rennes', 'Forest/ Nature attraction', NULL, 'Rue du Professeur Maurice Audin, 35700 Rennes, France', '5 minutes from city center, in the heart of Gayeulles park, Forêt Adrenaline offers you an amazing experience!', 'foretadrenaline.com', 336310580, 'https://www.facebook.com/foretadrenaline.rennes/', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `geo_id` (`geo_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`) USING BTREE;

--
-- Indexes for table `geo_location`
--
ALTER TABLE `geo_location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geo_location`
--
ALTER TABLE `geo_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
