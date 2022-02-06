

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `date`) VALUES
(1, 'FILE 1',	'15-MARCH-2022'),
(2,	'FILE 2',  '25-APRIL-2022'),
(3,	'FILE 3',	'09-OCTOBER-2022'),		
(4,	'FILE 4',	'28-FEBRUARY-2022'),
(5,	'FILE 5',	'11-AUGUST-2022')	,
(6,	'FILE 6',	'30-NOVEMBER-2022'),		
(7,	'FILE 7',	'01-DECEMBER-2022');


