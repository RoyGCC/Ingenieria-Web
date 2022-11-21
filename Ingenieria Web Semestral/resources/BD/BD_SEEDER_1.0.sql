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
  `puntos` int(11) NOT NULL DEFAULT 0,
  `j_jugados` int(11) NOT NULL DEFAULT 0,
  `j_ganados` int(11) NOT NULL DEFAULT 0,
  `j_empatados` int(11) NOT NULL DEFAULT 0,
  `j_perdidos` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.equipos: ~29 rows (aproximadamente)
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` (`id`, `equipo`, `grupo`, `dir_bandera`, `puntos`, `j_jugados`, `j_ganados`, `j_empatados`, `j_perdidos`) VALUES
	(1, 'Brazil', 'G', 'Brasil.webp', 0, 0, 0, 0, 0),
	(2, 'Alemania', 'E', 'Alemania.webp', 0, 0, 0, 0, 0),
	(3, 'Arabia Saudi', 'C', 'ArabiaSaudita.png', 0, 0, 0, 0, 0),
	(4, 'Argentina', 'C', 'Argentina.webp', 0, 0, 0, 0, 0),
	(5, 'Australia', 'D', 'Australia.webp', 0, 0, 0, 0, 0),
	(6, 'Belgica', 'F', 'Belgica.png', 0, 0, 0, 0, 0),
	(7, 'Camerun', 'G', 'Camerun.png', 0, 0, 0, 0, 0),
	(8, 'Canada', 'F', 'Canada.jpg', 0, 0, 0, 0, 0),
	(9, 'Costa Rica', 'E', 'CostaRica.jpg', 0, 0, 0, 0, 0),
	(10, 'Croacia', 'F', 'Croacia.svg', 0, 0, 0, 0, 0),
	(11, 'Dinamarca', 'D', 'Dinamarca.png', 0, 0, 0, 0, 0),
	(12, 'Ecuador', 'A', 'Ecuador.svg', 0, 0, 0, 0, 0),
	(13, 'España', 'E', 'España.webp', 0, 0, 0, 0, 0),
	(14, 'USA', 'B', 'EstadosUnidos.webp', 0, 0, 0, 0, 0),
	(15, 'Francia', 'D', 'Francia.svg', 0, 0, 0, 0, 0),
	(16, 'Gales', 'B', 'Gales.png', 0, 0, 0, 0, 0),
	(17, 'Ghana', 'H', 'Ghana.png', 0, 0, 0, 0, 0),
	(18, 'Paises Bajos', 'A', 'PaisesBajosNoEsSoloHolanda.png', 0, 0, 0, 0, 0),
	(19, 'Inglaterra', 'B', 'Inglaterra.jpg', 0, 0, 0, 0, 0),
	(20, 'Iran', 'B', 'AIranNoIran.png', 0, 0, 0, 0, 0),
	(21, 'Japon', 'E', 'Japon.svg', 0, 0, 0, 0, 0),
	(22, 'Corea del Sur', 'H', 'Korea.webp', 0, 0, 0, 0, 0),
	(23, 'Marruecos', 'F', 'Marruecos.png', 0, 0, 0, 0, 0),
	(24, 'Mexico', 'C', 'Mexico.png', 0, 0, 0, 0, 0),
	(25, 'Polonia', 'C', 'Polonia.jpg', 0, 0, 0, 0, 0),
	(26, 'Portugal', 'H', 'Portugal.webp', 0, 0, 0, 0, 0),
	(27, 'Qatar', 'A', 'Qatar.webp', 0, 0, 0, 0, 0),
	(28, 'Senegal', 'A', 'Senegal.svg', 0, 0, 0, 0, 0),
	(29, 'Serbia', 'G', 'Serbia.png', 0, 0, 0, 0, 0),
	(30, 'Suiza', 'G', 'Suiza.jpg', 0, 0, 0, 0, 0),
	(31, 'Tunez', 'D', 'Tunez.png', 0, 0, 0, 0, 0),
	(32, 'Uruguay', 'H', 'Uruguay.webp', 0, 0, 0, 0, 0);
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;

-- Volcando estructura para tabla humanrightsaresecondary.jugadores_equipo
CREATE TABLE IF NOT EXISTS `jugadores_equipo` (
  `id_jugador` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `marco_dir` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_jugador`),
  KEY `FK__equipos` (`id_equipo`),
  CONSTRAINT `FK__equipos` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.jugadores_equipo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `jugadores_equipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugadores_equipo` ENABLE KEYS */;

-- Volcando estructura para tabla humanrightsaresecondary.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Rank` varchar(25) NOT NULL,
  `id_equipo_fav` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Username` (`Username`),
  KEY `Password` (`Password`),
  KEY `Rank` (`Rank`),
  KEY `Email` (`Email`),
  KEY `Nombre` (`Nombre`),
  KEY `FK_usuarios_equipos` (`id_equipo_fav`),
  CONSTRAINT `FK_usuarios_equipos` FOREIGN KEY (`id_equipo_fav`) REFERENCES `equipos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `Username`, `Password`, `Nombre`, `Email`, `Rank`, `id_equipo_fav`) VALUES
	(34, 'RoyGCC', '12345', 'Roy', 'roycarrington20@gmail.com', 'user', 3),
	(35, 'MiguelV', '1234', 'Miguel', 'roygcc2009@gmail.com', 'admin', 9);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
