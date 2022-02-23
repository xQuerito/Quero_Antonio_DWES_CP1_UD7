CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `pais_id` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(50) NOT NULL,
  `continente` varchar(60) NOT NULL,
  PRIMARY KEY  (`pais_id`),
  KEY `nombre` (`nombre`),
  KEY `continente` (`continente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
