-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2018 at 01:06 PM
-- Server version: 5.6.38-83.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esuncity_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `thread_master`
--

CREATE TABLE `thread_master` (
  `thread_id` int(11) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_description` text NOT NULL,
  `thread_is_active` enum('0','1') NOT NULL DEFAULT '1',
  `thread_is_delete` enum('0','1') NOT NULL DEFAULT '0',
  `thread_is_closed` enum('0','1') NOT NULL DEFAULT '0',
  `thread_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `thread_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread_master`
--

INSERT INTO `thread_master` (`thread_id`, `thread_title`, `thread_description`, `thread_is_active`, `thread_is_delete`, `thread_is_closed`, `thread_created`, `thread_updated`) VALUES
(12, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, nunc nec ultricies volutpat, nunc tortor fringilla mauris, sit amet tincidunt justo risus eu justo. Vivamus ac consectetur neque. Vestibulum tincidunt lacinia justo, eget venenatis lorem fringilla vitae. Donec pellentesque id sem vel volutpat. Sed facilisis, quam scelerisque egestas aliquet, sem lacus fermentum sem, quis euismod tellus turpis id ligula. Suspendisse semper, augue et pretium molestie, urna velit pharetra felis, in placerat massa turpis scelerisque orci. Proin sodales ligula vitae rhoncus tincidunt. Ut vitae lacinia ante. Vivamus a diam rhoncus felis dignissim rutrum ac eu purus. In posuere lacus nec elementum sodales. Aenean ultricies urna sed viverra pharetra. Donec eu sapien pretium mauris blandit gravida ac id libero. Aenean non urna turpis. Vivamus ornare id massa sodales hendrerit.\r\n\r\nIn egestas quis arcu molestie volutpat. Pellentesque eget elit varius, efficitur nibh ut, tempor eros. Nulla et urna quis odio mollis iaculis. Maecenas ullamcorper placerat purus, sed sollicitudin libero placerat venenatis. Nam tristique lacus eu sem tristique, imperdiet maximus dui volutpat. Duis rhoncus at risus quis venenatis. Aenean id volutpat nisl, placerat eleifend tortor. Aliquam gravida eu eros vitae suscipit. In tincidunt libero a scelerisque elementum. Integer et varius velit. Praesent at neque ut libero efficitur eleifend ut nec neque. Cras sollicitudin metus at cursus rutrum. Suspendisse finibus accumsan nisl, facilisis egestas augue venenatis sit amet. Integer ornare eget quam ullamcorper interdum. Donec mollis nulla quis tempus auctor. Morbi rhoncus risus eget lorem tempus, at pulvinar magna sodales.\r\n\r\nAenean aliquet diam lectus, sit amet pellentesque orci vehicula at. Aenean dapibus malesuada turpis, eu hendrerit felis commodo ac. Pellentesque suscipit, turpis eget ultrices porta, eros metus laoreet lacus, vitae bibendum sapien ligula nec lectus. Curabitur vulputate luctus velit, nec tempus mi blandit sit amet. Phasellus nec nibh at nibh vestibulum condimentum. Fusce enim arcu, elementum vitae neque ut, eleifend laoreet tellus. In mollis, metus quis porta placerat, sem risus dapibus magna, eget sodales libero magna vel sem. Curabitur id aliquet nisl. Etiam nec sagittis lectus, non varius tortor. Proin lobortis sollicitudin tristique. Pellentesque pulvinar ornare leo. Curabitur ut egestas quam, in elementum orci. ', '1', '0', '0', '2018-01-19 12:39:46', '0000-00-00 00:00:00'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, nunc nec ultri', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, nunc nec ultricies volutpat, nunc tortor fringilla mauris, sit amet tincidunt justo risus eu justo. Vivamus ac consectetur neque. Vestibulum tincidunt lacinia justo, eget venenatis lorem fringilla vitae. Donec pellentesque id sem vel volutpat. Sed facilisis, quam scelerisque egestas aliquet, sem lacus fermentum sem, quis euismod tellus turpis id ligula. Suspendisse semper, augue et pretium molestie, urna velit pharetra felis, in placerat massa turpis scelerisque orci. Proin sodales ligula vitae rhoncus tincidunt. Ut vitae lacinia ante. Vivamus a diam rhoncus felis dignissim rutrum ac eu purus. In posuere lacus nec elementum sodales. Aenean ultricies urna sed viverra pharetra. Donec eu sapien pretium mauris blandit gravida ac id libero. Aenean non urna turpis. Vivamus ornare id massa sodales hendrerit.\r\n', '1', '0', '0', '2018-01-19 12:44:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `thread_replies`
--

CREATE TABLE `thread_replies` (
  `reply_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `parent_reply_id` int(11) DEFAULT NULL,
  `reply_message` text NOT NULL,
  `reply_sender` varchar(255) NOT NULL,
  `reply_is_active` enum('0','1') NOT NULL DEFAULT '1',
  `reply_is_delete` enum('0','1') NOT NULL DEFAULT '0',
  `reply_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread_replies`
--

INSERT INTO `thread_replies` (`reply_id`, `thread_id`, `parent_reply_id`, `reply_message`, `reply_sender`, `reply_is_active`, `reply_is_delete`, `reply_created`) VALUES
(17, 12, NULL, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, nunc nec ultricies volutpat, nunc tortor fringilla mauris, sit amet tincidunt justo risus eu justo. Vivamus ac consectetur neque. Vestibulum tincidunt lacinia justo, eget venenatis lorem fringilla vitae. Donec pellentesque id sem vel volutpat. Sed facilisis, quam scelerisque egestas aliquet, sem lacus fermentum sem, quis euismod tellus turpis id ligula. Suspendisse semper, augue et pretium molestie, urna velit pharetra felis, in placerat massa turpis scelerisque orci. Proin sodales ligula vitae rhoncus tincidunt. Ut vitae lacinia ante. Vivamus a diam rhoncus felis dignissim rutrum ac eu purus. In posuere lacus nec elementum sodales. Aenean ultricies urna sed viverra pharetra. Donec eu sapien pretium mauris blandit gravida ac id libero. Aenean non urna turpis. Vivamus ornare id massa sodales hendrerit.\r\n\r\nIn egestas quis arcu molestie volutpat. Pellentesque eget elit varius, efficitur nibh ut, tempor eros. Nulla et urna quis odio mollis iaculis. Maecenas ullamcorper placerat purus, sed sollicitudin libero placerat venenatis. Nam tristique lacus eu sem tristique, imperdiet maximus dui volutpat. Duis rhoncus at risus quis venenatis. Aenean id volutpat nisl, placerat eleifend tortor. Aliquam gravida eu eros vitae suscipit. In tincidunt libero a scelerisque elementum. Integer et varius velit. Praesent at neque ut libero efficitur eleifend ut nec neque. Cras sollicitudin metus at cursus rutrum. Suspendisse finibus accumsan nisl, facilisis egestas augue venenatis sit amet. Integer ornare eget quam ullamcorper interdum. Donec mollis nulla quis tempus auctor. Morbi rhoncus risus eget lorem tempus, at pulvinar magna sodales.\r\n\r\nAenean aliquet diam lectus, sit amet pellentesque orci vehicula at. Aenean dapibus malesuada turpis, eu hendrerit felis commodo ac. Pellentesque suscipit, turpis eget ultrices porta, eros metus laoreet lacus, vitae bibendum sapien ligula nec lectus. Curabitur vulputate luctus velit, nec tempus mi blandit sit amet. Phasellus nec nibh at nibh vestibulum condimentum. Fusce enim arcu, elementum vitae neque ut, eleifend laoreet tellus. In mollis, metus quis porta placerat, sem risus dapibus magna, eget sodales libero magna vel sem. Curabitur id aliquet nisl. Etiam nec sagittis lectus, non varius tortor. Proin lobortis sollicitudin tristique. Pellentesque pulvinar ornare leo. Curabitur ut egestas quam, in elementum orci. ', 'jitender singh', '1', '0', '2018-01-19 09:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `rating_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `rating_sender` varchar(255) NOT NULL,
  `rating_sender_email` varchar(255) NOT NULL,
  `rating_value` int(11) NOT NULL,
  `rating_is_verified` enum('0','1') NOT NULL DEFAULT '0',
  `rating_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thread_master`
--
ALTER TABLE `thread_master`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `thread_replies`
--
ALTER TABLE `thread_replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `thread_id` (`thread_id`),
  ADD KEY `parent_reply_id` (`parent_reply_id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `reply_id` (`reply_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thread_master`
--
ALTER TABLE `thread_master`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `thread_replies`
--
ALTER TABLE `thread_replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `thread_replies`
--
ALTER TABLE `thread_replies`
  ADD CONSTRAINT `thread_replies_ibfk_1` FOREIGN KEY (`parent_reply_id`) REFERENCES `thread_replies` (`reply_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thread_replies_ibfk_2` FOREIGN KEY (`thread_id`) REFERENCES `thread_master` (`thread_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`reply_id`) REFERENCES `thread_replies` (`reply_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
