CREATE TABLE IF NOT EXISTS `nb_portlets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `columnPosition` varchar(100) NOT NULL,
  `columnRow` tinyint(4) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `title` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `nb_portlets`
--

INSERT INTO `nb_portlets` (`id`, `name`, `columnPosition`, `columnRow`, `sign`, `title`) VALUES
(1, 'item_1', 'left', 2, 'minus', 'USA 1'),
(2, 'item_2', 'left', 1, 'minus', 'Canada 2'),
(3, 'item_3', 'left', 0, 'minus', 'Mexico 3'),
(4, 'item_4', 'middle', 0, 'minus', 'Germany 4'),
(5, 'item_5', 'right', 0, 'minus', 'Japan 5');
