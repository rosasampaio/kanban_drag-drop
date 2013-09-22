CREATE DATABASE IF NOT EXISTS `aulas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aulas`;

CREATE TABLE IF NOT EXISTS `ranking` (
  `ranking_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` mediumint(8) unsigned NOT NULL,
  `ranking_value` tinyint(4) NOT NULL,
  `ranking_column` tinyint(3) unsigned NOT NULL,
  `judge_id` tinyint(4) NOT NULL,
  `contest_id` mediumint(8) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(15) NOT NULL,
  PRIMARY KEY (`ranking_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`ranking_id`, `entry_id`, `ranking_value`, `ranking_column`, `judge_id`, `contest_id`, `timestamp`, `ip_address`) VALUES
(1, 2, 1, 0, 1, 1, '2013-02-09 01:54:41', '1.2.3.4','Atividade 1'),
(2, 3, 2, 0, 1, 1, '2013-02-09 01:54:43', '1.2.3.4','Atividade 2'),
(3, 4, 3, 0, 1, 1, '2013-02-09 01:54:43', '1.2.3.4','Atividade 3'),
(4, 5, 4, 0, 1, 1, '2013-02-09 01:54:44', '1.2.3.4','Atividade 4'),
(5, 1, 0, 0, 1, 1, '2013-02-09 01:54:39', '1.2.3.4','Atividade 5');


