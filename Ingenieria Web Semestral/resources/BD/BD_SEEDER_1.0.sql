-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.3.7-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para humanrightsaresecondary
CREATE DATABASE IF NOT EXISTS `humanrightsaresecondary` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `humanrightsaresecondary`;

-- Volcando estructura para tabla humanrightsaresecondary.equipos
CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` varchar(100) NOT NULL,
  `grupo` char(1) NOT NULL,
  `dir_bandera` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.equipos: ~32 rows (aproximadamente)
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` (`id`, `equipo`, `grupo`, `dir_bandera`) VALUES
	(1, 'Brazil', 'G', 'Brasil.webp'),
	(2, 'Alemania', 'E', 'Alemania.webp'),
	(3, 'Arabia Saudi', 'C', 'ArabiaSaudita.png'),
	(4, 'Argentina', 'C', 'Argentina.webp'),
	(5, 'Australia', 'D', 'Australia.webp'),
	(6, 'Belgica', 'F', 'Belgica.png'),
	(7, 'Camerun', 'G', 'Camerun.png'),
	(8, 'Canada', 'F', 'Canada.jpg'),
	(9, 'Costa Rica', 'E', 'CostaRica.jpg'),
	(10, 'Croacia', 'F', 'Croacia.svg'),
	(11, 'Dinamarca', 'D', 'Dinamarca.png'),
	(12, 'Ecuador', 'A', 'Ecuador.svg'),
	(13, 'España', 'E', 'España.webp'),
	(14, 'USA', 'B', 'EstadosUnidos.webp'),
	(15, 'Francia', 'D', 'Francia.svg'),
	(16, 'Gales', 'B', 'Gales.png'),
	(17, 'Ghana', 'H', 'Ghana.png'),
	(18, 'Paises Bajos', 'A', 'PaisesBajosNoEsSoloHolanda.png'),
	(19, 'Inglaterra', 'B', 'Inglaterra.jpg'),
	(20, 'Iran', 'B', 'AIranNoIran.png'),
	(21, 'Japon', 'E', 'Japon.svg'),
	(22, 'Corea del Sur', 'H', 'Korea.webp'),
	(23, 'Marruecos', 'F', 'Marruecos.png'),
	(24, 'Mexico', 'C', 'Mexico.png'),
	(25, 'Polonia', 'C', 'Polonia.jpg'),
	(26, 'Portugal', 'H', 'Portugal.webp'),
	(27, 'Qatar', 'A', 'Qatar.webp'),
	(28, 'Senegal', 'A', 'Senegal.svg'),
	(29, 'Serbia', 'G', 'Serbia.png'),
	(30, 'Suiza', 'G', 'Suiza.jpg'),
	(31, 'Tunez', 'D', 'Tunez.png'),
	(32, 'Uruguay', 'H', 'Uruguay.webp');
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
