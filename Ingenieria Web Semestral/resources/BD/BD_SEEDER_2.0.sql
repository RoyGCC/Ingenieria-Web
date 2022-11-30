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
  PRIMARY KEY (`id`),
  KEY `GRUPO` (`grupo`),
  CONSTRAINT `fK_equipos_grupo` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`grupo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.equipos: ~32 rows (aproximadamente)
DELETE FROM `equipos`;
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

-- Volcando estructura para tabla humanrightsaresecondary.grupos
CREATE TABLE IF NOT EXISTS `grupos` (
  `grupo` char(1) NOT NULL,
  PRIMARY KEY (`grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.grupos: ~8 rows (aproximadamente)
DELETE FROM `grupos`;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` (`grupo`) VALUES
	('A'),
	('B'),
	('C'),
	('D'),
	('E'),
	('F'),
	('G'),
	('H');
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;

-- Volcando estructura para tabla humanrightsaresecondary.jugadores_equipo
CREATE TABLE IF NOT EXISTS `jugadores_equipo` (
  `id_jugador` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `marco_dir` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_jugador`),
  KEY `FK__equipos` (`id_equipo`),
  CONSTRAINT `FK__equipos` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=609 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.jugadores_equipo: ~608 rows (aproximadamente)
DELETE FROM `jugadores_equipo`;
/*!40000 ALTER TABLE `jugadores_equipo` DISABLE KEYS */;
INSERT INTO `jugadores_equipo` (`id_jugador`, `id_equipo`, `nombre`, `marco_dir`) VALUES
	(1, 2, 'Alemania', 'ALEMANIA.gif'),
	(2, 2, 'ANTONIO RUDIGER', 'ANTONIO RUDIGER.gif'),
	(3, 2, 'DAVID RAUM', 'DAVID RAUM.gif'),
	(4, 2, 'ILKAY GUNDOGAN', 'ILKAY GUNDOGAN.gif'),
	(5, 2, 'JONAS HOFMANN', 'JONAS HOFMANN.gif'),
	(6, 2, 'JOSHUA KIMMICH', 'JOSHUA KIMMICH.gif'),
	(7, 2, 'KAI HAVERTZ', 'KAI HAVERTZ.gif'),
	(8, 2, 'LEON GORETZKA', 'LEON GORETZKA.gif'),
	(9, 2, 'LEROY SANE', 'LEROY SANE.gif'),
	(10, 2, 'MARC ANDRE TER STEGEN', 'MARC ANDRE TER STEGEN.gif'),
	(11, 2, 'MARCOS REUS', 'MARCOS REUS.gif'),
	(12, 2, 'MATTHIAS GINTER', 'MATTHIAS GINTER.gif'),
	(13, 2, 'NIKLAS SULE', 'NIKLAS SULE.gif'),
	(14, 2, 'ROBIN GOSENS', 'ROBIN GOSENS.gif'),
	(15, 2, 'SERGE GNABRY', 'SERGE GNABRY.gif'),
	(16, 2, 'THILO KEHRER', 'THILO KEHRER.gif'),
	(17, 2, 'THOMAS MULLER', 'THOMAS MULLER.gif'),
	(18, 2, 'TIMO WERNER', 'TIMO WERNER.gif'),
	(19, 2, 'MANUEL NEUER', 'MANUEL NEUER.gif'),
	(20, 3, 'Arabia Saudi', 'Arabia Saudi.gif'),
	(21, 3, 'ABDULELAH AL AMRI', 'ABDULELAH AL AMRI.gif'),
	(22, 3, 'ABDULELAH AL MALKI', 'ABDULELAH AL MALKI.gif'),
	(23, 3, 'ABDULLAH MADU', 'ABDULLAH MADU.gif'),
	(24, 3, 'ABDULLAH OTAYF', 'ABDULLAH OTAYF.gif'),
	(25, 3, 'ALEM AL DAWSARI', 'ALEM AL DAWSARI.gif'),
	(26, 3, 'ALI AL BOLEAHI', 'ALI AL BOLEAHI.gif'),
	(27, 3, 'FIRAS AL BURAIKAN', 'FIRAS AL BURAIKAN.gif'),
	(28, 3, 'HASSAN AL TAMBAKTI', 'HASSAN AL TAMBAKTI.gif'),
	(29, 3, 'HATTAN BAHEBRI', 'HATTAN BAHEBRI.gif'),
	(30, 3, 'KHALID AL GHANNAM', 'KHALID AL GHANNAM.gif'),
	(31, 3, 'MAHAMMED KANNO', 'MAHAMMED KANNO.gif'),
	(32, 3, 'MOHAMMED AL BURAYK', 'MOHAMMED AL BURAYK.gif'),
	(33, 3, 'MOHAMMED AL OWAIS', 'MOHAMMED AL OWAIS.gif'),
	(34, 3, 'MOHAMMED AL RUBAIE', 'MOHAMMED AL RUBAIE.gif'),
	(35, 3, 'SALMAN AL FARAJ', 'SALMAN AL FARAJ.gif'),
	(36, 3, 'SAMI AL NAJEI.gif', 'SAMI AL NAJEI.gif'),
	(37, 3, 'SULTAN AL GHANNAM', 'SULTAN AL GHANNAM.gif'),
	(38, 3, 'YASSER AL SHAHRANI', 'YASSER AL SHAHRANI.gif'),
	(39, 4, 'ARGENTINA', 'ARGENTINA.gif'),
	(40, 4, 'ALEJANDRO GOMEZ', 'ALEJANDRO GOMEZ.gif'),
	(41, 4, 'ANGEL DI MARIA', 'ANGEL DI MARIA.gif'),
	(42, 4, 'CRISTIAN ROMERO', 'CRISTIAN ROMERO.gif'),
	(43, 4, 'EMILIANO MARTINEZ', 'EMILIANO MARTINEZ.gif'),
	(44, 4, 'FRANCO ARMANI', 'FRANCO ARMANI.gif'),
	(45, 4, 'GERMAN PEZZELLA', 'GERMAN PEZZELLA.gif'),
	(46, 4, 'GIOVANILO CELSO', 'GIOVANILO CELSO.gif'),
	(47, 4, 'GUIDO RODRIGUEZ', 'GUIDO RODRIGUEZ.gif'),
	(48, 4, 'JOAQUIN CORREA', 'JOAQUIN CORREA.gif'),
	(49, 4, 'JULIAN ALVAREZ', 'JULIAN ALVAREZ.gif'),
	(50, 4, 'LAUTARO MARTINEZ', 'LAUTARO MARTINEZ.gif'),
	(51, 4, 'LEANDRO PAREDES', 'LEANDRO PAREDES.gif'),
	(52, 4, 'LIIONEL MESSI', 'LIIONEL MESSI.gif'),
	(53, 4, 'MARCOS ACUÑA', 'MARCOS ACUÑA.gif'),
	(54, 4, 'NAHUEL MOLINA', 'NAHUEL MOLINA.gif'),
	(55, 4, 'NICOLAS GONZALEZ', 'NICOLAS GONZALEZ.gif'),
	(56, 4, 'NICOLAS OTAMENDI', 'NICOLAS OTAMENDI.gif'),
	(57, 4, 'RODRIGO DE PAUL', 'RODRIGO DE PAUL.gif'),
	(58, 5, 'AUSTRALIA', 'AUSTRALIA.gif'),
	(59, 5, 'AARON MOOY', 'AARON MOOY.gif'),
	(60, 5, 'ADAM TAGGART', 'ADAM TAGGART.gif'),
	(61, 5, 'AJDIN HRUSTIC', 'AJDIN HRUSTIC.gif'),
	(62, 5, 'ANDREW REDMAYNE', 'ANDREW REDMAYNE.gif'),
	(63, 5, 'AWER MABIL', 'AWER MABIL.gif'),
	(64, 5, 'AZIZ BEHICH', 'AZIZ BEHICH.gif'),
	(65, 5, 'CRAIG GOODWIN', 'CRAIG GOODWIN.gif'),
	(66, 5, 'HARRY SOUTTAR', 'HARRY SOUTTAR.gif'),
	(67, 5, 'JACKSON IRVINE', 'JACKSON IRVINE.gif'),
	(68, 5, 'JAMES JEGGO', 'JAMES JEGGO.gif'),
	(69, 5, 'JOEL KING', 'JOEL KING.gif'),
	(70, 5, 'MARTIN BOYLE', 'MARTIN BOYLE.gif'),
	(71, 5, 'MATHEW LECKIE', 'MATHEW LECKIE.gif'),
	(72, 5, 'MATHEW RYAN', 'MATHEW RYAN.gif'),
	(73, 5, 'MILOS DEGENEK', 'MILOS DEGENEK.gif'),
	(74, 5, 'MITCHELL DUKE', 'MITCHELL DUKE.gif'),
	(75, 5, 'RHYAN GRANT', 'RHYAN GRANT.gif'),
	(76, 5, 'TRENT SAINBURY', 'TRENT SAINSBURY.gif'),
	(77, 6, 'BELGICA', 'BELGICA.gif'),
	(78, 6, 'AXEL WITSEL', 'AXEL WITSEL.gif'),
	(79, 6, 'CHARLES DE KETELAERE', 'CHARLES DE KETELAERE.gif'),
	(80, 6, 'DRIES MERTENS', 'DRIES MERTENS.gif'),
	(81, 6, 'EDEN HAZARD', 'EDEN HAZARD.gif'),
	(82, 6, 'HANS  VANAKEN', 'HANS  VANAKEN.gif'),
	(83, 6, 'JASON DENAYER', 'JASON DENAYER.gif'),
	(84, 6, 'JEREMY DOKU', 'JEREMY DOKU.gif'),
	(85, 6, 'KEVIN DE BRUYNE', 'KEVIN DE BRUYNE.gif'),
	(86, 6, 'ROMELU LUKAKU', 'ROMELU LUKAKU.gif'),
	(87, 6, 'SIMON MIGNOLET', 'SIMON MIGNOLET.gif'),
	(88, 6, 'JAN VERTONGHEN', 'JAN VERTONGHEN.gif'),
	(89, 6, 'THIBAUT COURTOIS', 'THIBAUT COURTOIS.gif'),
	(90, 6, 'THOMAS MEUNIER', 'THOMAS MEUNIER.gif'),
	(91, 6, 'THORGAN HAZARD', 'THORGAN HAZARD.gif'),
	(92, 6, 'TIMOTHY CASTAGNE', 'TIMOTHY CASTAGNE.gif'),
	(93, 6, 'TOBY ALDERWEIRELD', 'TOBY ALDERWEIRELD.gif'),
	(94, 6, 'YANNICK CARRASCO', 'YANNICK CARRASCO.gif'),
	(95, 6, 'YOURI TIELEMANS', 'YOURI TIELEMANS.gif'),
	(96, 1, 'Brazil', 'Brazil.gif'),
	(97, 1, 'ALEX SANDRO', 'ALEX SANDRO.gif'),
	(98, 1, 'ALISSON', 'ALISSON.gif'),
	(99, 1, 'ANTONY', 'ANTONY.gif'),
	(100, 1, 'CASEMIRO', 'CASEMIRO.gif'),
	(101, 1, 'DANILO', 'DANILO.gif'),
	(102, 1, 'EDER MILITAO', 'EDER MILITAO.gif'),
	(103, 1, 'EDERSON', 'EDERSON.gif'),
	(104, 1, 'FABINHO', 'FABINHO.gif'),
	(105, 1, 'FRED', 'FRED.gif'),
	(106, 1, 'GABRIEL JESUS', 'GABRIEL JESUS.gif'),
	(107, 1, 'LUCAS PAQUETA', 'LUCAS PAQUETA.gif'),
	(108, 1, 'MARQUINHOS', 'MARQUINHOS.gif'),
	(109, 1, 'NEYMAR JR', 'NEYMAR JR.gif'),
	(110, 1, 'PHILIPPE COUTINHO', 'PHILIPPE COUTINHO.gif'),
	(111, 1, 'RAPHINHA', 'RAPHINHA.gif'),
	(112, 1, 'RICHARLISON', 'RICHARLISON.gif'),
	(113, 1, 'THIAGO SILVA', 'THIAGO SILVA.gif'),
	(114, 1, 'VINICIUS JR', 'VINICIUS JR.gif'),
	(115, 7, 'CAMERUN', 'CAMERUN.gif'),
	(116, 7, 'ANDRE ONANA', 'ANDRE ONANA.gif'),
	(117, 7, 'ANDRE ZAMBO', 'ANDRE ZAMBO.gif'),
	(118, 7, 'COLLIN FAI', 'COLLIN FAI.gif'),
	(119, 7, 'DEVIS EPASSY', 'DEVIS EPASSY.gif'),
	(120, 7, 'ERIC MAXIM', 'ERIC MAXIM.gif'),
	(121, 7, 'HAROLD MOUKOUDI', 'HAROLD MOUKOUDI.gif'),
	(122, 7, 'JAMES LEA SILIKI', 'JAMES LEA SILIKI.gif'),
	(123, 7, 'JEAN CHARLES CASTELLETTO', 'JEAN CHARLES CASTELLETTO.gif'),
	(124, 7, 'KARL TOKO', 'KARL TOKO.gif'),
	(125, 7, 'MARTIN HONGLA', 'MARTIN HONGLA.gif'),
	(126, 7, 'MICHAEL NGADEU', 'MICHAEL NGADEU.gif'),
	(127, 7, 'NICOLAS MOUMI', 'NICOLAS MOUMI.gif'),
	(128, 7, 'NOUHOU', 'NOUHOU.gif'),
	(129, 7, 'OLIVIER MBAIZO', 'OLIVIER MBAIZO.gif'),
	(130, 7, 'PIERRE KUNDE', 'PIERRE KUNDE.gif'),
	(131, 7, 'SAMUEL OUM GOUET', 'SAMUEL OUM GOUET.gif'),
	(132, 7, 'STEPHANE BAHOKEN', 'STEPHANE BAHOKEN.gif'),
	(133, 7, 'VINCENT ABOUBAKAR', 'VINCENT ABOUBAKAR.gif'),
	(134, 8, 'CANADA', 'CANADA.gif'),
	(135, 8, 'SAMUEL PIETTE', 'SAMUEL PIETTE.gif'),
	(136, 8, 'STEPHEN EUSTAQUIO', 'STEPHEN EUSTAQUIO.gif'),
	(137, 8, 'STEVEN VITORIA', 'STEVEN VITORIA.gif'),
	(138, 8, 'TAJON BUCHANAN', 'TAJON BUCHANAN.gif'),
	(139, 8, 'ALISTAR JOHNSTON', 'ALISTAR JOHNSTON.gif'),
	(140, 8, 'ALPHONSO DAVIES', 'ALPHONSO DAVIES.gif'),
	(141, 8, 'ATIBA HUTCHINSON', 'ATIBA HUTCHINSON.gif'),
	(142, 8, 'CYLE LARIN', 'CYLE LARIN.gif'),
	(143, 8, 'DAVID JUNIOR HOILETT', 'DAVID JUNIOR HOILETT.gif'),
	(144, 8, 'DONEIL HENRY', 'DONEIL HENRY.gif'),
	(145, 8, 'JONATHAN DAVID', 'JONATHAN DAVID.gif'),
	(146, 8, 'JONATHAN OSORIO', 'JONATHAN OSORIO.gif'),
	(147, 8, 'KAMAL MILLER', 'KAMAL MILLER.gif'),
	(148, 8, 'MARK ANTHONY KAYE', 'MARK ANTHONY KAYE.gif'),
	(149, 8, 'MAXIME CREPEAU', 'MAXIME CREPEAU.gif'),
	(150, 8, 'MILAN BORJAN', 'MILAN BORJAN.gif'),
	(151, 8, 'RICHIE LARYEA', 'RICHIE LARYEA.gif'),
	(152, 8, 'SAMUEL ADEKUGBE', 'SAMUEL ADEKUGBE.gif'),
	(153, 22, 'Corea del Sur', 'Corea del Sur.gif'),
	(154, 22, 'UI JO HWANG', 'UI JO HWANG.gif'),
	(155, 22, 'WOO YOUNG JUNG', 'WOO YOUNG JUNG.gif'),
	(156, 22, 'YONG LEE', 'YONG LEE.gif'),
	(157, 22, 'YOUNG GWON KIM', 'YOUNG GWON KIM.gif'),
	(158, 22, 'CHANG HOON KWON', 'CHANG HOON KWON.gif'),
	(159, 22, 'GUE SUNG CHO', 'GUE SUNG CHO.gif'),
	(160, 22, 'HEE CHAN HWANG', 'HEE CHAN HWANG.gif'),
	(161, 22, 'HEUNG MIN SON', 'HEUNG MIN SON.gif'),
	(162, 22, 'HYEON WOO JO', 'HYEON WOO JO.gif'),
	(163, 22, 'IN BEOM HWANG', 'IN BEOM HWANG.gif'),
	(164, 22, 'JAE SUNG LEE', 'JAE SUNG LEE.gif'),
	(165, 22, 'JIN SU KIM', 'JIN SU KIM.gif'),
	(166, 22, 'MIN JAE KIM', 'MIN JAE KIM.gif'),
	(167, 22, 'MIN KYU SONG', 'MIN KYU SONG.gif'),
	(168, 22, 'SEUNG GYU KIM', 'SEUNG GYU KIM.gif'),
	(169, 22, 'SEUNG HO PAIK', 'SEUNG HO PAIK.gif'),
	(170, 22, 'SHUL HONG', 'SHUL HONG.gif'),
	(171, 22, 'TAE HWAN KIM', 'TAE HWAN KIM.gif'),
	(172, 9, 'COSTA RICA', 'COSTA RICA.gif'),
	(173, 9, 'ORLANDO GALO', 'ORLANDO GALO.gif'),
	(174, 9, 'OSCAR DUARTE', 'OSCAR DUARTE.gif'),
	(175, 9, 'RICARDO BLANCO', 'RICARDO BLANCO.gif'),
	(176, 9, 'YELTSIN TEJEDA', 'YELTSIN TEJEDA.gif'),
	(177, 9, 'ANTHONY CONTRERAS', 'ANTHONY CONTRERAS.gif'),
	(178, 9, 'BRYAN OVIEDO', 'BRYAN OVIEDO.gif'),
	(179, 9, 'BRYAN RUIZ', 'BRYAN RUIZ.gif'),
	(180, 9, 'CELSO BORGES', 'CELSO BORGES.gif'),
	(181, 9, 'FRANCISCO CALVO', 'FRANCISCO CALVO.gif'),
	(182, 9, 'GERSON TORRES', 'GERSON TORRES.gif'),
	(183, 9, 'JEWISON BENNETTE', 'JEWISON BENNETTE.gif'),
	(184, 9, 'JOEL CAMPBELL', 'JOEL CAMPBELL.gif'),
	(185, 9, 'JOHAN VENEGAS', 'JOHAN VENEGAS.gif'),
	(186, 9, 'JUAN PABLO VARGAS', 'JUAN PABLO VARGAS.gif'),
	(187, 9, 'KENDALL WASTON', 'KENDALL WASTON.gif'),
	(188, 9, 'KEYLOR NAVAS', 'KEYLOR NAVAS.gif'),
	(189, 9, 'KEYSHER FULLER', 'KEYSHER FULLER.gif'),
	(190, 9, 'LEONEL MOREIRA', 'LEONEL MOREIRA.gif'),
	(191, 10, 'CROACIA', 'CROACIA.gif'),
	(192, 10, 'MATEO KOVACIC', 'MATEO KOVACIC.gif'),
	(193, 10, 'MISLAV ORSIC', 'MISLAV ORSIC.gif'),
	(194, 10, 'NIKOLA VLASIC', 'NIKOLA VLASIC.gif'),
	(195, 10, 'ANDREJ KRAMARIC', 'ANDREJ KRAMARIC.gif'),
	(196, 10, 'BORNA SOSA', 'BORNA SOSA.gif'),
	(197, 10, 'DEJAN LOVREN', 'DEJAN LOVREN.gif'),
	(198, 10, 'DOMAGOJ VIDA', 'DOMAGOJ VIDA.gif'),
	(199, 10, 'DOMINIK LIVAKOVIC', 'DOMINIK LIVAKOVIC.gif'),
	(200, 10, 'DUJE CALETA CAR', 'DUJE CALETA CAR.gif'),
	(201, 10, 'IVAN PERISIC', 'IVAN PERISIC.gif'),
	(202, 10, 'IVICA IVUSIC', 'IVICA IVUSIC.gif'),
	(203, 10, 'JOSIP BREKALO', 'JOSIP BREKALO.gif'),
	(204, 10, 'JOSIP JURANOVIC', 'JOSIP JURANOVIC.gif'),
	(205, 10, 'JOSKO GVARDIOL', 'JOSKO GVARDIOL.gif'),
	(206, 10, 'LUKA MODRIC', 'LUKA MODRIC.gif'),
	(207, 10, 'MARCELO BROZOVIC', 'MARCELO BROZOVIC.gif'),
	(208, 10, 'MARIO PASALIC', 'MARIO PASALIC.gif'),
	(209, 10, 'MARKO LIVAJA', 'MARKO LIVAJA.gif'),
	(210, 11, 'DINAMARCA', 'DINAMARCA.gif'),
	(211, 11, 'ANDREAS CHRISTENSEN', 'ANDREAS CHRISTENSEN.gif'),
	(212, 11, 'ANDREAS SKOV OLSEN', 'ANDREAS SKOV OLSEN.gif'),
	(213, 11, 'CHRISTIAN ERIKSEN', 'CHRISTIAN ERIKSEN.gif'),
	(214, 11, 'CHRISTIAN NORGAARD', 'CHRISTIAN NORGAARD.gif'),
	(215, 11, 'DANIEL WASS', 'DANIEL WASS.gif'),
	(216, 11, 'FREDERIK RONNOW', 'FREDERIK RONNOW.gif'),
	(217, 11, 'JANNIK VERTERGAARD', 'JANNIK VERTERGAARD.gif'),
	(218, 11, 'JENS STRYGER LARSEN', 'JENS STRYGER LARSEN.gif'),
	(219, 11, 'JOAKIN MAEHLE', 'JOAKIN MAEHLE.gif'),
	(220, 11, 'JONAS WIND', 'JONAS WIND.gif'),
	(221, 11, 'KASPER DOLBERG', 'KASPER DOLBERG.gif'),
	(222, 11, 'KASPER SCHMEICHEL', 'KASPER SCHMEICHEL.gif'),
	(223, 11, 'MARTIN BRAITHWAITE', 'MARTIN BRAITHWAITE.gif'),
	(224, 11, 'MIKKEL DAMSGAARD', 'MIKKEL DAMSGAARD.gif'),
	(225, 11, 'PIERRE EMILE HOJBJERG', 'PIERRE EMILE HOJBJERG.gif'),
	(226, 11, 'SIMON KJAER', 'SIMON KJAER.gif'),
	(227, 11, 'THOMAS DELANEY', 'THOMAS DELANEY.gif'),
	(228, 11, 'YUSSUF POULSEN', 'YUSSUF POULSEN.gif'),
	(229, 12, 'ECUADOR', 'ECUADOR.gif'),
	(230, 12, 'MICHAEL ESTRADA', 'MICHAEL ESTRADA.gif'),
	(231, 12, 'MOISES CAICEDO', 'MOISES CAICEDO.gif'),
	(232, 12, 'PERVIS ESTUPIÑAN', 'PERVIS ESTUPIÑAN.gif'),
	(233, 12, 'PIEDRO HINCAPIE', 'PIEDRO HINCAPIE.gif'),
	(234, 12, 'ROBERT ARBOLEDA', 'ROBERT ARBOLEDA.gif'),
	(235, 12, 'ALAN FRANCO', 'ALAN FRANCO.gif'),
	(236, 12, 'ALEXANDER DOMINGUEZ', 'ALEXANDER DOMINGUEZ.gif'),
	(237, 12, 'ANGEL MENA', 'ANGEL MENA.gif'),
	(238, 12, 'ANGELO PRECIADO', 'ANGELO PRECIADO.gif'),
	(239, 12, 'AYRTON PRECIADO', 'AYRTON PRECIADO.gif'),
	(240, 12, 'BYRON CASTILLO', 'BYRON CASTILLO.gif'),
	(241, 12, 'CARLOS GRUEZO', 'CARLOS GRUEZO.gif'),
	(242, 12, 'ENNER VALENCIA', 'ENNER VALENCIA.gif'),
	(243, 12, 'FELIX TORRES', 'FELIX TORRES.gif'),
	(244, 12, 'GONZALO PLATA', 'GONZALO PLATA.gif'),
	(245, 12, 'HERNAN GALIDEZ', 'HERNAN GALIDEZ.gif'),
	(246, 12, 'JEREMY SARMIENTO', 'JEREMY SARMIENTO.gif'),
	(247, 12, 'JHEGSON MENDEZ', 'JHEGSON MENDEZ.gif'),
	(248, 19, 'Inglaterra', 'Inglaterra.gif'),
	(249, 19, 'AARON RAMSDALE', 'AARON RAMSDALE.gif'),
	(250, 19, 'BUKAYO SAKA', 'BUKAYO SAKA.gif'),
	(251, 19, 'CONOR COADY', 'CONOR COADY.gif'),
	(252, 19, 'DECLAN RICE', 'DECLAN RICE.gif'),
	(253, 19, 'HARRY KANE', 'HARRY KANE.gif'),
	(254, 19, 'HARRY MAGUIRE', 'HARRY MAGUIRE.gif'),
	(255, 19, 'JACK GREALISH', 'JACK GREALISH.gif'),
	(256, 19, 'JOHN STONES', 'JOHN STONES.gif'),
	(257, 19, 'JORDAN HENDERSON', 'JORDAN HENDERSON.gif'),
	(258, 19, 'JORDAN PICKFORD', 'JORDAN PICKFORD.gif'),
	(259, 19, 'JUDE BELLINGHAM', 'JUDE BELLINGHAM.gif'),
	(260, 19, 'KALVIN PHILLIPS', 'KALVIN PHILLIPS.gif'),
	(261, 19, 'KYLE WALKER', 'KYLE WALKER.gif'),
	(262, 19, 'LUKE SHAW', 'LUKE SHAW.gif'),
	(263, 19, 'MASON MOUNT', 'MASON MOUNT.gif'),
	(264, 19, 'PHIL FODEN', 'PHIL FODEN.gif'),
	(265, 19, 'RAHEEM STERLING', 'RAHEEM STERLING.gif'),
	(266, 19, 'TRENT ALEXANDER-ARNOLD', 'TRENT ALEXANDER-ARNOLD.gif'),
	(267, 13, 'ESPAÑA', 'ESPAÑA.gif'),
	(268, 13, 'ALVARO MORATA', 'ALVARO MORATA.gif'),
	(269, 13, 'ANSU FATI', 'ANSU FATI.gif'),
	(270, 13, 'AYMERIC LAPORTE', 'AYMERIC LAPORTE.gif'),
	(271, 13, 'CESAR AZPILICUETA', 'CESAR AZPILICUETA.gif'),
	(272, 13, 'DANI OLMO', 'DANI OLMO.gif'),
	(273, 13, 'ERIC GARCI', 'ERIC GARCI.gif'),
	(274, 13, 'FERRAN TORRES', 'FERRAN TORRES.gif'),
	(275, 13, 'GAVI', 'GAVI.gif'),
	(276, 13, 'JORDI ALBA', 'JORDI ALBA.gif'),
	(277, 13, 'KOKE', 'KOKE.gif'),
	(278, 13, 'MARCOS LLORENTE', 'MARCOS LLORENTE.gif'),
	(279, 13, 'PABLO SARABIA', 'PABLO SARABIA.gif'),
	(280, 13, 'PAU TORRES', 'PAU TORRES.gif'),
	(281, 13, 'PEDRI', 'PEDRI.gif'),
	(282, 13, 'ROBERT SANCHEZ', 'ROBERT SANCHEZ.gif'),
	(283, 13, 'RODRI', 'RODRI.gif'),
	(284, 13, 'SERGIO BUSQUETS', 'SERGIO BUSQUETS.gif'),
	(285, 13, 'UNAI SIMON', 'UNAI SIMON.gif'),
	(286, 15, 'FRANCIA', 'FRANCIA.gif'),
	(287, 15, 'ADRIEN RABIOT', 'ADRIEN RABIOT.gif'),
	(288, 15, 'ANTOINE GRIEZMAN', 'ANTOINE GRIEZMAN.gif'),
	(289, 15, 'AURELIEN TCHOUAMENI', 'AURELIEN TCHOUAMENI.gif'),
	(290, 15, 'BENJAMIN PAVAR', 'BENJAMIN PAVAR.gif'),
	(291, 15, 'CHRISTOPHER NKUNKU', 'CHRISTOPHER NKUNKU.gif'),
	(292, 15, 'HUGO LLORIS', 'HUGO LLORIS.gif'),
	(293, 15, 'JULES KOUNDE', 'JULES KOUNDE.gif'),
	(294, 15, 'KARIM BENZEMA', 'KARIM BENZEMA.gif'),
	(295, 15, 'KINGSLEY COMAN', 'KINGSLEY COMAN.gif'),
	(296, 15, 'KYLIAN MBAPPE', 'KYLIAN MBAPPE.gif'),
	(297, 15, 'LUCAS HERNANDEZ', 'LUCAS HERNANDEZ.gif'),
	(298, 15, 'MIKE MAIGNAN', 'MIKE MAIGNAN.gif'),
	(299, 15, 'NGOLO KANTE', 'NGOLO KANTE.gif'),
	(300, 15, 'PAUL POGBA', 'PAUL POGBA.gif'),
	(301, 15, 'PRESNEL KIMPEMBE', 'PRESNEL KIMPEMBE.gif'),
	(302, 15, 'RAPHAEL VARANE', 'RAPHAEL VARANE.gif'),
	(303, 15, 'THEO HERNANDEZ', 'THEO HERNANDEZ.gif'),
	(304, 15, 'WISSAM BEN YEDDER', 'WISSAM BEN YEDDER.gif'),
	(305, 16, 'GALES', 'GALES.gif'),
	(306, 16, 'KIEFFER MOORE', 'KIEFFER MOORE.gif'),
	(307, 16, 'NECO WILLIAMS', 'NECO WILLIAMS.gif'),
	(308, 16, 'WAYNE HENNESSEY', 'WAYNE HENNESSEY.gif'),
	(309, 16, 'AARON RAMSEY', 'AARON RAMSEY.gif'),
	(310, 16, 'BEN DAVIES', 'BEN DAVIES.gif'),
	(311, 16, 'BRENNAN JOHNSON', 'BRENNAN.gif'),
	(312, 16, 'JONATHAN WILLIAMS', 'Jonathan Williams.gif'),
	(313, 16, 'CHRIS GUNTER', 'CHRIS GUNTER.gif'),
	(314, 16, 'CHRIS MEPHAM', 'CHRIS MEPHAM.gif'),
	(315, 16, 'CONNOR ROBERTS', 'CONNOR ROBERTS.gif'),
	(316, 16, 'DANIEL JAMES', 'DANIEL JAMES.gif'),
	(317, 16, 'DANNY WARD', 'DANNY WARD.gif'),
	(318, 16, 'ETHAN AMPADU', 'ETHAN AMPADU.gif'),
	(319, 16, 'GARETH BALE', 'GARETH BALE.gif'),
	(320, 16, 'HARRY WILSON', 'HARRY WILSON.gif'),
	(321, 16, 'JOE ALLEN', 'JOE ALLEN.gif'),
	(322, 16, 'JOE MORRELL', 'JOE MORRELL.gif'),
	(323, 16, 'JOE RODON', 'JOE RODON.gif'),
	(324, 17, 'GHANA', 'GHANA.gif'),
	(325, 17, 'MOHAMMED KUDUS', 'MOHAMMED KUDUS.gif'),
	(326, 17, 'MUBARAK WAKASO', 'MUBARAK WAKASO.gif'),
	(327, 17, 'RICHARD OFORI', 'RICHARD OFORI.gif'),
	(328, 17, 'THOMAS PARTEY', 'THOMAS PARTEY.gif'),
	(329, 17, 'ABDUL RAHMAN BABA', 'ABDUL RAHMAN BABA.gif'),
	(330, 17, 'ALEXANDER DJIKU', 'ALEXANDER DJIKU.gif'),
	(331, 17, 'ANDRE AYEW', 'ANDRE AYEW.gif'),
	(332, 17, 'ANDY YIADOM', 'ANDY YIADOM.gif'),
	(333, 17, 'DANIEL AMARTEY', 'DANIEL AMARTEY.gif'),
	(334, 17, 'DANIEL KOFI KYEREH', 'DANIEL KOFI KYEREH.gif'),
	(335, 17, 'FELIX AFENA GYAN', 'FELIX AFENA GYAN.gif'),
	(336, 17, 'GIDEON MENSAH', 'GIDEON MENSAH.gif'),
	(337, 17, 'IDDRISU BABA', 'IDDRISU BABA.gif'),
	(338, 17, 'ISSAHAKU ABDUL', 'ISSAHAKU ABDUL.gif'),
	(339, 17, 'JOE WOLLACOTT', 'JOE WOLLACOTT.gif'),
	(340, 17, 'JONATHAN MENSAH', 'JONATHAN MENSAH.gif'),
	(341, 17, 'JORDAN AYEW', 'JORDAN AYEW.gif'),
	(342, 17, 'KAMALDEEN SULEMANA', 'KAMALDEEN SULEMANA.gif'),
	(343, 18, 'Paises Bajos', 'Paises Bajos.gif'),
	(344, 18, 'STEVEN BERWIJN', 'STEVEN BERWIJN.gif'),
	(345, 18, 'TEUN KOOPMEINERS', 'TEUN KOOPMEINERS.gif'),
	(346, 18, 'VIRGIL VAN DIJK', 'VIRGIL VAN DIJK.gif'),
	(347, 18, 'ARNAUT DANJUMA', 'ARNAUT DANJUMA.gif'),
	(348, 18, 'CODY GAKPO', 'CODY GAKPO.gif'),
	(349, 18, 'DALEY BLIND', 'DALEY BLIND.gif'),
	(350, 18, 'DAVY KLASSEN', 'DAVY KLASSEN.gif'),
	(351, 18, 'DENZEL DUMFRIES', 'DENZEL DUMFRIES.gif'),
	(352, 18, 'DONYELL MALEN', 'DONYELL MALEN.gif'),
	(353, 18, 'FRENKIE DE JONG', 'FRENKIE DE JONG.gif'),
	(354, 18, 'GEORGINIO WIJNALDUM', 'GEORGINIO WIJNALDUM.gif'),
	(355, 18, 'JASPER CILLESSEN', 'JASPER CILLESSEN.gif'),
	(356, 18, 'JUSTIN BIJLOW', 'JUSTIN BIJLOW.gif'),
	(357, 18, 'MATTHIJS DELIGT', 'MATTHIJS DELIGT.gif'),
	(358, 18, 'MEMPHIS DEPAY', 'MEMPHIS DEPAY.gif'),
	(359, 18, 'RYAN GRAVENBERCH', 'RYAN GRAVENBERCH.gif'),
	(360, 18, 'STEFAN DE VRIJ', 'STEFAN DE VRIJ.gif'),
	(361, 18, 'STEVEN BERGHUIS', 'STEVEN BERGHUIS.gif'),
	(362, 20, 'IRAN', 'IRAN.gif'),
	(363, 20, 'SAMAN GHODDOS', 'SAMAN GHODDOS.gif'),
	(364, 20, 'SARDAR AZMOUN', 'SARDAR AZMOUN.gif'),
	(365, 20, 'SHOJA KHALILZADEH', 'SHOJA KHALILZADEH.gif'),
	(366, 20, 'VAHID AMIRI', 'VAHID AMIRI.gif'),
	(367, 20, 'AHMAD NOUROLLAHI', 'AHMAD NOUROLLAHI.gif'),
	(368, 20, 'ALI GHOLIZADEH', 'ALI GHOLIZADEH.gif'),
	(369, 20, 'ALIREZA BEIRANVAND', 'ALIREZA BEIRANVAND.gif'),
	(370, 20, 'ALIREZA JAHABAKHSH', 'ALIREZA JAHABAKHSH.gif'),
	(371, 20, 'AMIR ABEDZADEH', 'AMIR ABEDZADEH.gif'),
	(372, 20, 'EHSAN HAJSAFI', 'EHSAN HAJSAFI.gif'),
	(373, 20, 'HOSSEIN KANAANI', 'HOSSEIN KANAANI.gif'),
	(374, 20, 'KARIM ANSARIFARD', 'KARIM ANSARIFARD.gif'),
	(375, 20, 'MAJID HOSSEINI', 'MAJID HOSSEINI.gif'),
	(376, 20, 'MEHDI TAREMI', 'MEHDI TAREMI.gif'),
	(377, 20, 'MILAD MOHAMMADI', 'MILAD MOHAMMADI.gif'),
	(378, 20, 'OMID NOORAFKAN', 'OMID NOORAFKAN.gif'),
	(379, 20, 'SADEGH MOHARRAMI', 'SADEGH MOHARRAMI.gif'),
	(380, 20, 'SAEID EZATOLAHI', 'SAEID EZATOLAHI\r\n.gif'),
	(381, 21, 'JAPON', 'JAPON.gif'),
	(382, 21, 'GAKU SHIBASAKI', 'GAKU SHIBASAKI.gif'),
	(383, 21, 'GENKI HARAGUCHI', 'GENKI HARAGUCHI.gif'),
	(384, 21, 'HIDEMASA  MORITA', 'HIDEMASA  MORITA.gif'),
	(385, 21, 'EIJI KAWASHIMA', 'EIJI KAWASHIMA.gif'),
	(386, 21, 'JUNYA ITO', 'JUNYA ITO.gif'),
	(387, 21, 'KAORU MITOMA', 'KAORU MITOMA.gif'),
	(388, 21, 'KYOGO FURUHASHI', 'KYOGO FURUHASHI.gif'),
	(389, 21, 'MAYA YOSHIDA', 'MAYA YOSHIDA.gif'),
	(390, 21, 'MIKI YAMANE', 'MIKI YAMANE.gif'),
	(391, 21, 'SHUICHI GONDA', 'SHUICHI GONDA.gif'),
	(392, 21, 'TAKEHIRO TOMIYASU', 'TAKEHIRO TOMIYASU.gif'),
	(393, 21, 'TAKUMA ASANO', 'TAKUMA ASANO.gif'),
	(394, 21, 'TAKUMI MINAMINO', 'TAKUMI MINAMINO.gif'),
	(395, 21, 'WATARU ENDO', 'WATARU ENDO.gif'),
	(396, 21, 'YUTA NAKAYAMA', 'YUTA NAKAYAMA.gif'),
	(397, 21, 'YUTO NAGATOMO', 'YUTO NAGATOMO.gif'),
	(398, 21, 'YUYA OSAKO', 'YUYA OSAKO.gif'),
	(399, 21, 'AO TANAKA', 'AO TANAKA.gif'),
	(400, 23, 'MARRUECOS', 'MARRUECOS.gif'),
	(401, 23, 'YASSINE BOUNOU', 'YASSINE BOUNOU.gif'),
	(402, 23, 'YOUSSEF EN NESYRI', 'YOUSSEF EN NESYRI.gif'),
	(403, 23, 'ACHRAF HAKIMI', 'ACHRAF HAKIMI.gif'),
	(404, 23, 'ADAM MASINA', 'ADAM MASINA.gif'),
	(405, 23, 'AYMEN BARKOK', 'AYMEN BARKOK.gif'),
	(406, 23, 'AYOUB EL KAABI', 'AYOUB EL KAABI.gif'),
	(407, 23, 'ILIAS CHAIR', 'ILIAS CHAIR.gif'),
	(408, 23, 'IMRAN LOUZA', 'IMRAN LOUZA.gif'),
	(409, 23, 'MUNIR MOHAMEDI', 'MUNIR MOHAMEDI.gif'),
	(410, 23, 'MUNIR', 'MUNIR.gif'),
	(411, 23, 'NAYEF AGUERD', 'NAYEF AGUERD.gif'),
	(412, 23, 'ROMAIN SAISS', 'ROMAIN SAISS.gif'),
	(413, 23, 'RYAN MMAEE', 'RYAN MMAEE.gif'),
	(414, 23, 'SAMY MMAEE', 'SAMY MMAEE.gif'),
	(415, 23, 'SELIM AMALLAH', 'SELIM AMALLAH.gif'),
	(416, 23, 'SOFIANE BOUFAL', 'SOFIANE BOUFAL.gif'),
	(417, 23, 'SOFYAN AMRABAT', 'SOFYAN AMRABAT.gif'),
	(418, 23, 'TARIK TISSOUDALI', 'TARIK TISSOUDALI.gif'),
	(419, 24, 'MEXICO', 'MEXICO.gif'),
	(420, 24, 'NESTOR ARAUJO', 'NESTOR ARAUJO.gif'),
	(421, 24, 'RAUL JIMENEZ', 'RAUL JIMENEZ.gif'),
	(422, 24, 'ROGELIO FUNES MORI', 'ROGELIO FUNES MORI.gif'),
	(423, 24, 'ALFREDO TALAVERA', 'ALFREDO TALAVERA.gif'),
	(424, 24, 'ANDRES GUARDADO', 'ANDRES GUARDADO.gif'),
	(425, 24, 'CARLOS RODRIGUEZ', 'CARLOS RODRIGUEZ.gif'),
	(426, 24, 'CESAR MONTES', 'CESAR MONTES.gif'),
	(427, 24, 'DIEGO LAINEZ', 'DIEGO LAINEZ.gif'),
	(428, 24, 'EDSON ALVAREZ', 'EDSON ALVAREZ.gif'),
	(429, 24, 'ERICK GUTIERREZ', 'ERICK GUTIERREZ.gif'),
	(430, 24, 'GUILLERMO OCHOA', 'GUILLERMO OCHOA.gif'),
	(431, 24, 'HECTOR HERRERA', 'HECTOR HERRERA.gif'),
	(432, 24, 'HECTOR MORENO', 'HECTOR MORENO.gif'),
	(433, 24, 'HIRVING LOZANO', 'HIRVING LOZANO.gif'),
	(434, 24, 'JESUS GALLARDO', 'JESUS GALLARDO.gif'),
	(435, 24, 'JESUS MANUEL CORONA', 'JESUS MANUEL CORONA.gif'),
	(436, 24, 'JORGE SANCHEZ', 'JORGE SANCHEZ.gif'),
	(437, 24, 'LUIS ROMO', 'LUIS ROMO.gif'),
	(438, 25, 'POLONIA', 'POLONIA.gif'),
	(439, 25, 'ROBERT LEWANDOSKI', 'ROBERT LEWANDOSKI.gif'),
	(440, 25, 'SEBASTIAN SZYMANSKI', 'SEBASTIAN SZYMANSKI.gif'),
	(441, 25, 'TYMOTEUSZ PUCHACZ', 'TYMOTEUSZ PUCHACZ.gif'),
	(442, 25, 'WOJCIECH SZCZESNY', 'WOJCIECH SZCZESNY.gif'),
	(443, 25, 'ARKADIUSZ MILIK', 'ARKADIUSZ MILIK.gif'),
	(444, 25, 'BARTOSZ BERESZYNSKI', 'BARTOSZ BERESZYNSKI.gif'),
	(445, 25, 'GRZEGORZ KRYCHOWIAK', 'GRZEGORZ KRYCHOWIAK.gif'),
	(446, 25, 'JAKUB MODER', 'JAKUB MODER.gif'),
	(447, 25, 'JAN BEDNAREK', 'JAN BEDNAREK.gif'),
	(448, 25, 'KAMIL GLIK', 'KAMIL GLIK.gif'),
	(449, 25, 'KAMIL JOZWIAK', 'KAMIL JOZWIAK.gif'),
	(450, 25, 'KAROL SWIDERSKI', 'KAROL SWIDERSKI.gif'),
	(451, 25, 'KRZYSTOF PIATEK', 'KRZYSTOF PIATEK.gif'),
	(452, 25, 'LUKASZ SKORUPSKI', 'LUKASZ SKORUPSKI.gif'),
	(453, 25, 'MACIEJ RYBUS', 'MACIEJ RYBUS.gif'),
	(454, 25, 'MATEUSZ KLICH', 'MATEUSZ KLICH.gif'),
	(455, 25, 'MATTY CASH', 'MATTY CASH.gif'),
	(456, 25, 'PIOTR ZIELINSKI', 'PIOTR ZIELINSKI.gif'),
	(457, 26, 'PORTUGAL', 'PORTUGAL.gif'),
	(458, 26, 'RUBEN DIAS', 'RUBEN DIAS.gif'),
	(459, 26, 'RUBEN NEVES', 'RUBEN NEVES.gif'),
	(460, 26, 'RUI PATRICIO', 'RUI PATRICIO.gif'),
	(461, 26, 'ANDRE SILVA', 'ANDRE SILVA.gif'),
	(462, 26, 'BERNARDO SILVA', 'BERNARDO SILVA.gif'),
	(463, 26, 'BRUNO FERNANDES', 'BRUNO FERNANDES.gif'),
	(464, 26, 'CRISTIANO RONALDO', 'CRISTIANO RONALDO.gif'),
	(465, 26, 'DANILO PEREIRA', 'DANILO PEREIRA.gif'),
	(466, 26, 'DIEGO COSTA', 'DIEGO COSTA.gif'),
	(467, 26, 'DIOGO JOTA', 'DIOGO JOTA.gif'),
	(468, 26, 'GONCALO GUEDES', 'GONCALO GUEDES.gif'),
	(469, 26, 'JOAO CANCELO', 'JOAO CANCELO.gif'),
	(470, 26, 'JOAO MOUTINHO', 'JOAO MOUTINHO.gif'),
	(471, 26, 'JOSE FONTE', 'JOSE FONTE.gif'),
	(472, 26, 'NUNO MENDES', 'NUNO MENDES.gif'),
	(473, 26, 'PEPE', 'PEPE.gif'),
	(474, 26, 'RAPHAEL GUERREIRO', 'RAPHAEL GUERREIRO.gif'),
	(475, 26, 'RENATO SANCHES', 'RENATO SANCHES.gif'),
	(476, 27, 'QATAR', 'QATAR.gif'),
	(477, 27, 'PEDRO MIGUEL', 'PEDRO MIGUEL.gif'),
	(478, 27, 'SAAD AL SHEEB', 'SAAD AL SHEEB.gif'),
	(479, 27, 'TAREK SALMAN', 'TAREK SALMAN.gif'),
	(480, 27, 'YOUSUF ABDURISAG', 'YOUSUF ABDURISAG.gif'),
	(481, 27, 'ABDULAZIZ HATEM', 'ABDULAZIZ HATEM.gif'),
	(482, 27, 'ABDULKARIM HASSAN', 'ABDULKARIM HASSAN.gif'),
	(483, 27, 'AHMAD ALAAELDIN', 'AHMAD ALAAELDIN.gif'),
	(484, 27, 'AKRAM HASSAN AFIF', 'AKRAM HASSAN AFIF.gif'),
	(485, 27, 'ALMOEZ ALI', 'ALMOEZ ALI.gif'),
	(486, 27, 'ASSIM OMER MADIBO', 'ASSIM OMER MADIBO.gif'),
	(487, 27, 'BASSAM ALRAWI', 'BASSAM ALRAWI.gif'),
	(488, 27, 'BOUALEM KHOUKHI', 'BOUALEM KHOUKHI.gif'),
	(489, 27, 'HASAN AL-HAYDOS', 'HASAN AL-HAYDOS.gif'),
	(490, 27, 'HOMAM AHMED', 'HOMAM AHMED.gif'),
	(491, 27, 'KARIM BOUDIAF', 'KARIM BOUDIAF.gif'),
	(492, 27, 'MESHAAL BARSHAM', 'MESHAAL BARSHAM.gif'),
	(493, 27, 'MOHAMMED MUNTARI', 'MOHAMMED MUNTARI.gif'),
	(494, 27, 'MUSAAB KHIDIR', 'MUSAAB KHIDIR.gif'),
	(495, 28, 'SENEGAL', 'SENEGAL.gif'),
	(496, 28, 'PAPE GUEYE', 'PAPE GUEYE.gif'),
	(497, 28, 'SADIO MANE', 'SADIO MANE.gif'),
	(498, 28, 'SALIOU CISS', 'SALIOU CISS.gif'),
	(499, 28, 'ABDOU DIALLO', 'ABDOU DIALLO.gif'),
	(500, 28, 'ALFRED GOMIS', 'ALFRED GOMIS.gif'),
	(501, 28, 'BAMBA DIENG', 'BAMBA DIENG.gif'),
	(502, 28, 'BOULAYE DIA', 'BOULAYE DIA.gif'),
	(503, 28, 'BOUNA SARR', 'BOUNA SARR.gif'),
	(504, 28, 'CHEIKHOU KOUYATE', 'CHEIKHOU KOUYATE.gif'),
	(505, 28, 'EDOUARD MENDY', 'EDOUARD MENDY.gif'),
	(506, 28, 'FAMARA DIEDHIOU', 'FAMARA DIEDHIOU.gif'),
	(507, 28, 'IBRAHIMA MBAYE', 'IBRAHIMA MBAYE.gif'),
	(508, 28, 'IDRISSA GUEYE', 'IDRISSA GUEYE.gif'),
	(509, 28, 'ISMAILA SARR', 'ISMAILA SARR.gif'),
	(510, 28, 'KALIDOU KOULIBALY', 'KALIDOU KOULIBALY.gif'),
	(511, 28, 'KREPIN DIATTA', 'KREPIN DIATTA.gif'),
	(512, 28, 'NAMPALYS MENDY', 'NAMPALYS MENDY.gif'),
	(513, 28, 'PAPE ABOU CISSE', 'PAPE ABOU CISSE.gif'),
	(514, 29, 'SERBIA', 'SERBIA.gif'),
	(515, 29, 'STRAHINJA PAVLOVIC', 'STRAHINJA PAVLOVIC.gif'),
	(516, 29, 'VANJA MILINKOVIC', 'VANJA MILINKOVIC.gif'),
	(517, 29, 'ALEKSANDAR MITROVIC', 'ALEKSANDAR MITROVIC.gif'),
	(518, 29, 'ANDRIJA ZIVKOVIC', 'ANDRIJA ZIVKOVIC.gif'),
	(519, 29, 'DARKO LAZOVIC', 'DARKO LAZOVIC.gif'),
	(520, 29, 'DUSAN TADIC', 'DUSAN TADIC.gif'),
	(521, 29, 'DUSAN VLAHOVIC', 'DUSAN VLAHOVIC.gif'),
	(522, 29, 'FILIP DURICIC', 'FILIP DURICIC.gif'),
	(523, 29, 'FILIP KOSTIC', 'FILIP KOSTIC.gif'),
	(524, 29, 'LUKA JOVIC', 'LUKA JOVIC.gif'),
	(525, 29, 'MILOS VELJKOVIC', 'MILOS VELJKOVIC.gif'),
	(526, 29, 'NEMANJA GUDELJ', 'NEMANJA GUDELJ.gif'),
	(527, 29, 'NEMANJA MAKSIMOVIC', 'NEMANJA MAKSIMOVIC.gif'),
	(528, 29, 'NEMANJA RADONJIC', 'NEMANJA RADONJIC.gif'),
	(529, 29, 'NIKOLA MILENKOVIC', 'NIKOLA MILENKOVIC.gif'),
	(530, 29, 'PREDRAG RAJKOVIC', 'PREDRAG RAJKOVIC.gif'),
	(531, 29, 'SASA LUKIC', 'SASA LUKIC.gif'),
	(532, 30, 'SUIZA', 'SUIZA.gif'),
	(533, 30, 'XHERDAN SHAQIRI', 'XHERDAN SHAQIRI.gif'),
	(534, 30, 'YANN SOMMER', 'YANN SOMMER.gif'),
	(535, 30, 'BREEL EMBOLO', 'BREEL EMBOLO.gif'),
	(536, 30, 'DENIS ZAKARIA', 'DENIS ZAKARIA.gif'),
	(537, 30, 'DJIBRIL SOW', 'DJIBRIL SOW.gif'),
	(538, 30, 'FABIAN SCHAR', 'FABIAN SCHAR.gif'),
	(539, 30, 'GRANIT XHAKA', 'GRANIT XHAKA.gif'),
	(540, 30, 'GREGOR KOBEL', 'GREGOR KOBEL.gif'),
	(541, 30, 'HARIS SEFEROVIC', 'HARIS SEFEROVIC.gif'),
	(542, 30, 'KEVIN MBABU', 'KEVIN MBABU.gif'),
	(543, 30, 'MANUEL AKANJI', 'MANUEL AKANJI.gif'),
	(544, 30, 'NICO ELVEDI', 'NICO ELVEDI.gif'),
	(545, 30, 'NOAH OKAFOR', 'NOAH OKAFOR.gif'),
	(546, 30, 'REMO FREULER', 'REMO FREULER.gif'),
	(547, 30, 'RICARDO RODRIGUEZ', 'RICARDO RODRIGUEZ.gif'),
	(548, 30, 'RUBEN VARGAS', 'RUBEN VARGAS.gif'),
	(549, 30, 'SILVAN WIDMER', 'SILVAN WIDMER.gif'),
	(550, 30, 'STEVEN ZUBER', 'STEVEN ZUBER.gif'),
	(551, 31, 'TUNEZ', 'TUNEZ.gif'),
	(552, 31, 'AISSA LAIDOUNI', 'AISSA LAIDOUNI.gif'),
	(553, 31, 'ALI MAALOUL', 'ALI MAALOUL.gif'),
	(554, 31, 'ANIS SLIMANE', 'ANIS SLIMANE.gif'),
	(555, 31, 'BECHIR SAID', 'BECHIR SAID.gif'),
	(556, 31, 'BILEL IFA', 'BILEL IFA.gif'),
	(557, 31, 'DYLAN BRONN', 'DYLAN BRONN.gif'),
	(558, 31, 'ELLYES SKHIRI', 'ELLYES SKHIRI.gif'),
	(559, 31, 'FAROUK BEN MUSTAPHA', 'FAROUK BEN MUSTAPHA.gif'),
	(560, 31, 'FERJANI SASSI', 'FERJANI SASSI.gif'),
	(561, 31, 'HAMZA MATHLOUTHI', 'HAMZA MATHLOUTHI.gif'),
	(562, 31, 'MOHAMMED ALI BEN', 'MOHAMMED ALI BEN.gif'),
	(563, 31, 'MOHAMMED DRAGER', 'MOHAMMED DRAGER.gif'),
	(564, 31, 'MONTASSAR TALBI', 'MONTASSAR TALBI.gif'),
	(565, 31, 'NAIM SLITTI', 'NAIM SLITTI.gif'),
	(566, 31, 'SEIFEDDINE JAZIRI', 'SEIFEDDINE JAZIRI.gif'),
	(567, 31, 'WAHBI KHAZRI', 'WAHBI KHAZRI.gif'),
	(568, 31, 'YASSINE MERIAH', 'YASSINE MERIAH.gif'),
	(569, 31, 'YOUSSEF MSAKNI', 'YOUSSEF MSAKNI.gif'),
	(570, 32, 'URUGUAY', 'URUGUAY.gif'),
	(571, 32, 'RODRIGO BENTANCUR', 'RODRIGO BENTANCUR.gif'),
	(572, 32, 'RONALD ARAUJO', 'RONALD ARAUJO.gif'),
	(573, 32, 'SERGIO ROCHET', 'SERGIO ROCHET.gif'),
	(574, 32, 'DARWIN NUÑEZ', 'DARWIN NUÑEZ.gif'),
	(575, 32, 'DIEGO GODIN', 'DIEGO GODIN.gif'),
	(576, 32, 'EDINSON CAVANI', 'EDINSON CAVANI.gif'),
	(577, 32, 'FACUNDO PELLISTRI', 'FACUNDO PELLISTRI.gif'),
	(578, 32, 'FEDERICO VALVERDE', 'FEDERICO VALVERDE.gif'),
	(579, 32, 'FERNANDO MUSLERA', 'FERNANDO MUSLERA.gif'),
	(580, 32, 'GIORGIAN DE ARRASCAETA', 'GIORGIAN DE ARRASCAETA.gif'),
	(581, 32, 'JOSE GIMENEZ', 'JOSE GIMENEZ.gif'),
	(582, 32, 'LUCAS TORREIRA', 'LUCAS TORREIRA.gif'),
	(583, 32, 'LUIS SUAREZ', 'LUIS SUAREZ.gif'),
	(584, 32, 'MARTIN CACERES', 'MARTIN CACERES.gif'),
	(585, 32, 'MATHIAS OLIVERA', 'MATHIAS OLIVERA.gif'),
	(586, 32, 'MATIAS VECINO', 'MATIAS VECINO.gif'),
	(587, 32, 'MATIAS VIÑA', 'MATIAS VIÑA.gif'),
	(588, 32, 'NICOLAS DE LA CRUZ', 'NICOLAS DE LA CRUZ.gif'),
	(589, 14, 'USA', 'USA.gif'),
	(590, 14, 'WALKER ZIMMERMAN', 'WALKER ZIMMERMAN.gif'),
	(591, 14, 'WESTON MCKENNIE', 'WESTON MCKENNIE.gif'),
	(592, 14, 'YUNUS MUSAH', 'YUNUS MUSAH.gif'),
	(593, 14, 'ZACK STEFFEN', 'ZACK STEFFEN.gif'),
	(594, 14, 'AARON LONG', 'AARON LONG.gif'),
	(595, 14, 'ANTONEE ROBINSON', 'ANTONEE ROBINSON.gif'),
	(596, 14, 'BRENDEN AARONSON', 'BRENDEN AARONSON.gif'),
	(597, 14, 'CHRIS RICHARDS', 'CHRIS RICHARDS.gif'),
	(598, 14, 'CHRISTIAN PULISIC', 'CHRISTIAN PULISIC.gif'),
	(599, 14, 'DEANDRE YEDLIN', 'DEANDRE YEDLIN.gif'),
	(600, 14, 'GIOVANNI REYNA', 'GIOVANNI REYNA.gif'),
	(601, 14, 'JESUS FERREIRA', 'JESUS FERREIRA.gif'),
	(602, 14, 'KELLYN ACOSTA', 'KELLYN ACOSTA.gif'),
	(603, 14, 'MATT TURNER', 'MATT TURNER.gif'),
	(604, 14, 'RICARDO PEPI', 'RICARDO PEPI.gif'),
	(605, 14, 'SERGIÑO DEST', 'SERGIÑO DEST.gif'),
	(606, 14, 'TIMOTHY WEAH', 'TIMOTHY WEAH.gif'),
	(607, 14, 'TYLER ADAMS', 'TYLER ADAMS.gif'),
	(608, 29, 'SERGEJ MILINKOVIC', 'SERGEJ MILINKOVIC.gif');
/*!40000 ALTER TABLE `jugadores_equipo` ENABLE KEYS */;

-- Volcando estructura para tabla humanrightsaresecondary.partidos
CREATE TABLE IF NOT EXISTS `partidos` (
  `id_partido` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipo1` int(11) NOT NULL,
  `id_equipo2` int(11) NOT NULL,
  `horario_juego` datetime NOT NULL,
  `goles_equipo1` int(11) NOT NULL DEFAULT 0,
  `goles_equipo2` int(11) NOT NULL DEFAULT 0,
  `id_equipo_ganador` int(11) DEFAULT NULL,
  `estado` varchar(30) NOT NULL DEFAULT 'Inactivo',
  `grupo_p` char(1) NOT NULL,
  PRIMARY KEY (`id_partido`),
  KEY `FK_partidos_equipos` (`id_equipo1`),
  KEY `FK_partidos_equipos_2` (`id_equipo2`),
  KEY `FK_partidos_equipos_3` (`id_equipo_ganador`),
  KEY `FK_partidos_Grupo` (`grupo_p`),
  CONSTRAINT `FK_partidos_equipos` FOREIGN KEY (`id_equipo1`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_partidos_equipos_2` FOREIGN KEY (`id_equipo2`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_partidos_equipos_3` FOREIGN KEY (`id_equipo_ganador`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_partidos_grupo` FOREIGN KEY (`grupo_p`) REFERENCES `grupos` (`grupo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla humanrightsaresecondary.partidos: ~0 rows (aproximadamente)
DELETE FROM `partidos`;
/*!40000 ALTER TABLE `partidos` DISABLE KEYS */;
INSERT INTO `partidos` (`id_partido`, `id_equipo1`, `id_equipo2`, `horario_juego`, `goles_equipo1`, `goles_equipo2`, `id_equipo_ganador`, `estado`, `grupo_p`) VALUES
	(1, 12, 27, '2022-11-20 11:00:00', 2, 0, 12, 'Finalizado', 'A'),
	(2, 12, 28, '2022-11-29 10:00:00', 0, 0, NULL, 'Inactivo', 'A'),
	(3, 16, 19, '2022-11-29 14:00:00', 0, 0, NULL, 'Inactivo', 'B'),
	(4, 18, 27, '2022-11-29 10:00:00', 0, 0, NULL, 'Inactivo', 'A'),
	(5, 7, 29, '2022-11-28 10:00:00', 3, 3, NULL, 'Finalizado', 'G');
/*!40000 ALTER TABLE `partidos` ENABLE KEYS */;

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
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `Username`, `Password`, `Nombre`, `Email`, `Rank`, `id_equipo_fav`) VALUES
	(34, 'RoyGCC', '12345', 'Roy', 'roycarrington20@gmail.com', 'user', 3),
	(35, 'MiguelV', '1234', 'Miguel', 'roygcc2009@gmail.com', 'admin', 9);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
