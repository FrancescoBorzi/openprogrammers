DROP TABLE `quotes`;

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(20) unsigned NOT NULL,
  `quote` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `quotes` (`id`, `quote`, `author`) VALUES
(1, 'Parlare è facile. Mostrami il codice.', 'Linus Torvalds'),
(2, 'Mentre in fisica devi capire come è fatto il mondo, in informatica sei tu a crearlo.', 'Linus Torvalds');
