-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: mysql5
-- Generation Time: Mar 19, 2020 at 05:36 PM
-- Server version: 10.1.44-MariaDB-0+deb9u1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fet18040195`
--

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
  `Longitude` float DEFAULT NULL,
  `Latitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `geo_location`
--

INSERT INTO `geo_location` (`id`, `Name`, `Longitude`, `Latitude`) VALUES
(1, '', -3.5298, 50.7167),
(2, '', -3.5277, 50.7252),
(3, '', -3.52107, 50.7307),
(4, '', 3.462, 50.6431),
(5, '', 3.3973, 50.7014),
(6, '', 3.5806, 50.6536),
(7, '', 3.521, 50.7298),
(8, '', 1.6833, 48.1116),
(9, '', 1.6749, 48.1053),
(10, '', 1.6852, 48.1124),
(11, '', 1.7075, 48.1173),
(12, '', 1.6754, 48.1052),
(13, '', 1.681, 48.1156),
(14, '', 3.0946, 47.6418),
(15, 'Exeter', 50.7184, -3.5339),
(16, '', 48.1173, -1.67779);

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
(1, 'Exeter Cathedral', 'Religious ', 1000, '1 The Cloisters, Exeter EX1 1HS', 'Exeter Cathedral is an Anglican cathedral, and the seat of the Bishop of Exeter, in the city of Exeter, Devon in South West England.', 'https://www.exeter-cathedral.org.uk/', 1392255573, 'https://www.facebook.com/exetercathedral\r\n', 1, NULL),
(2, 'Underground Passages', 'Tourist Attraction', 100, '2 Paris St, Exeter EX1 1GA', 'These medieval passages have always fascinated local people, with stories of wars and sieges, plague and pestilence.', 'https://exeter.gov.uk/leisure-and-culture/our-attractions/underground-passages/visitor-information/', 1392665887, 'https://www.facebook.com/UndergroundPassages/', 1, NULL),
(3, 'Bill Douglas Cinema Museum', 'Museum', 1000, 'Prince of Wales Rd, Exeter EX4 4SB', 'The Bill Douglas Cinema Museum is home to one of the largest collections of material relating to the moving image in Britain.', 'https://www.bdcmuseum.org.uk/', 1392724321, 'https://www.facebook.com/bdcmuseum/', 1, NULL),
(4, 'Powderham Castle', 'Venue/ historic attraction', 10000, 'Exeter, EX6 8JQ', 'The Castle is a remarkable place, with centuries of stories that we are excited to share with our community and guests from near and far.', 'https://www.powderham.co.uk/', 1626890243, 'https://www.facebook.com/powderhamcastle', 1, NULL),
(5, 'Raceworld Ltd', 'Tourist Attraction', 20, 'Unit 4, Greendale Business Park, Sidmouth Road, Woodbury Salterton, Exeter EX5 1EW', 'Professional Go Karting based in Devon, for stag parties, corporate outings, day trips or a fun afternoon with your friends.', 'http://www.raceworld-karting.co.uk/', 1395233397, 'https://www.facebook.com/RaceworldKarting/', 1, NULL),
(6, 'Haldon Forest Park - Forestry', 'Nature Attraction', NULL, 'Hill, Kennford, Exeter EX6 7XR', 'Multi-use forest with horse-riding, orienteering, biking and zip wire through the forest canopy.', 'https://www.forestryengland.uk/haldon-forest-park', 300675826, 'https://www.facebook.com/haldonforestpark/', 1, NULL),
(7, 'St James Park', 'Stadium', 52405, 'Stadium Way, Exeter EX4 6PX', 'St James Park is a football stadium in Exeter and is the home of Exeter City F.C.', 'exetercityfc.co.uk', 1392411243, 'https://www.facebook.com/StJamesParkNE1/', 1, NULL),
(8, 'Cathedral Saint-Pierre de Rennes', 'Religious ', 1100, 'Rue de la Monnaie, 35000 Rennes, France', 'Traditional site of cathedral, demolished in 18th century and rebuilt after the French Revolution.', 'https://cathedralerennescatholique.icodia.info/3patrimoine/saintpierre.html', 332997848, 'https://www.facebook.com/pages/Rennes-Cathedral/110932078958559?rf=129525367098931', 2, NULL),
(9, 'Les Champs Libres', 'Library and Museum', 850, '10 Cours des Alliés, 35000 Rennes, France', 'Home to the main city library & the Museum of Brittany, plus a science museum with planetarium.', 'https://www.leschampslibres.fr/', 322340660, ' https://www.facebook.com/LesChampsLibres/', 2, NULL),
(10, 'Marché des Lices', 'Farmer market', 500, '3 Place du Bas des Lices, 35000 Rennes, France', 'For four centuries now and most likely more, every Saturday from 7:30 AM to 1:30 PM all Rennes converges in great numbers at the Lices square.', 'https://www.itinari.com/the-marche-des-lices-rennes-amazing-market-wqly', NULL, 'https://www.facebook.com/marchedeslices/', 2, NULL),
(11, 'BRAIN', 'Tourist Attraction', 10, '13 Rue Pierre le Baud, 35000 Rennes, France', 'BRAIN, l\'Escape Game ', 'https://www.brainrennes.com/', 339824546, 'https://b-m.facebook.com/brain.rennes/?_ft_=top_level_post_id.1618299361598898%3Atl_objid.1618299361598898%3Athrowback_story_fbid.1618299948265506%3Apage_id.589672701128241%3Apage_insights.%7B%22589672701128241%22%3A%7B%22role%22%3A1%2C%22page_id%22%3A589', 2, NULL),
(12, 'eSpace Sciences', 'Museum', 2000, '10 Cours des Alliés, 35000 Rennes, France', 'Science center & planetarium in a modern building, offering events & lectures with a family focus.', 'https://www.espace-sciences.org/', 332234060, 'https://www.facebook.com/Espacedessciences35/', 2, NULL),
(13, 'Tourist Office of Rennes', 'Info point', NULL, '1 Rue Saint-Malo, 35000 Rennes, France', 'A great place to find your local tourist stuff. Locals aren\'t friendly but they have good leaflets.', 'tourisme-rennes.com', 338916735, 'https://www.facebook.com/visitrennes/?brand_redir=282316792729', 2, NULL),
(14, 'Forêt Adrénaline Rennes', 'Forest/ Nature attraction', NULL, 'Rue du Professeur Maurice Audin, 35700 Rennes, France', '5 minutes from city center, in the heart of Gayeulles park, Forêt Adrenaline offers you an amazing experience!', 'foretadrenaline.com', 336310580, 'https://www.facebook.com/foretadrenaline.rennes/', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('fet18040195', '[{\"db\":\"fet18040195\",\"table\":\"geo_location\"},{\"db\":\"fet18040195\",\"table\":\"places_of_interest\"},{\"db\":\"fet18040195\",\"table\":\"city\"},{\"db\":\"fet18040195\",\"table\":\"comments\"},{\"db\":\"fet18040195\",\"table\":\"pma__bookmark\"},{\"db\":\"fet18040195\",\"table\":\"pma__central_columns\"},{\"db\":\"fet18040195\",\"table\":\"pma__recent\"},{\"db\":\"fet18040195\",\"table\":\"pma__navigationhiding\"},{\"db\":\"fet18040195\",\"table\":\"pma__favorite\"},{\"db\":\"fet18040195\",\"table\":\"pma__table_info\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('fet18040195', 'fet18040195', 'geo_location', '{\"CREATE_TIME\":\"2020-03-10 18:23:01\",\"col_visib\":[\"1\",\"1\",\"1\"],\"sorted_col\":\"`Latitude` ASC\"}', '2020-03-10 20:37:31'),
('fet18040195', 'fet18040195', 'places_of_interest', '{\"sorted_col\":\"`places_of_interest`.`Name_of_place` ASC\"}', '2020-03-10 20:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('fet18040195', '2020-03-10 20:11:48', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poi_id` (`poi_id`);

--
-- Indexes for table `places_of_interest`
--
ALTER TABLE `places_of_interest`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `city_id` (`city_id`),
  ADD KEY `geo_id` (`geo_id`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `geo_location`
--
ALTER TABLE `geo_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `places_of_interest`
--
ALTER TABLE `places_of_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`geo_id`) REFERENCES `geo_location` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`poi_id`) REFERENCES `places_of_interest` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places_of_interest`
--
ALTER TABLE `places_of_interest`
  ADD CONSTRAINT `places_of_interest_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `places_of_interest_ibfk_2` FOREIGN KEY (`geo_id`) REFERENCES `geo_location` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
