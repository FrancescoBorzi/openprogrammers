SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `quotes`;
CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(20) unsigned NOT NULL,
  `quote` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

TRUNCATE TABLE `quotes`;
INSERT INTO `quotes` (`id`, `quote`, `author`) VALUES
(1, 'Parlare è facile. Mostrami il codice.', 'Linus Torvalds'),
(2, 'Mentre in fisica devi capire come è fatto il mondo, in informatica sei tu a crearlo.', 'Linus Torvalds'),
(3, 'Ai geek piace illudersi di poter ignorare la politica: potete anche ignorarla, ma la politica non ignorerà voi.', 'Richard Stallman'),
(4, 'Io sono ciò che sono per merito di ciò che siamo tutti.', 'Filosofia Ubuntu'),
(5, 'Il progresso della conoscenza avviene perché noi possiamo basarci sul lavoro dei grandi geni che ci hanno preceduto.', 'Margherita Hack'),
(6, 'Fare giocosamente qualcosa di difficile, che sia utile oppure no, questo è hacking.', 'Richard Stallman'),
(7, 'La felicità è reale solo quando condivisa.', 'Christopher McCandless');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
