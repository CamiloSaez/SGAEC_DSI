-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2014 a las 16:10:16
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.4.4-14+deb7u7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `SGAEC`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ADMINISTRADOR`
--

CREATE TABLE IF NOT EXISTS `ADMINISTRADOR` (
  `ADM_RUT` varchar(12) NOT NULL,
  `ADM_CLAVE` varchar(1024) DEFAULT NULL,
  `ADM_NOMBRE` varchar(100) DEFAULT NULL,
  `ADM_APELLIDOS` varchar(100) DEFAULT NULL,
  `ADM_TELEFONO` varchar(10) DEFAULT NULL,
  `ADM_CORREO` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ADM_RUT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ADMINISTRADOR`
--

INSERT INTO `ADMINISTRADOR` (`ADM_RUT`, `ADM_CLAVE`, `ADM_NOMBRE`, `ADM_APELLIDOS`, `ADM_TELEFONO`, `ADM_CORREO`) VALUES
('11.111.111-1', '123', 'Maria', 'asda', 'asda', 'asda'),
('18.154.900-9', '123', 'CLAUDIO', 'ASDAS', 'ASDAS', 'ASDAS'),
('22.222.222-2', '123', 'Juan', 'Perez', '1234567890', 'jmuss2005@gmail.com'),
('99.999.999-9', '123', 'Usuario', 'Prueba', '99999999', 'comunidad@prueba.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ALTERNATIVAS`
--

CREATE TABLE IF NOT EXISTS `ALTERNATIVAS` (
  `ALT_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `ENC_CORREL` int(11) NOT NULL,
  `ALT_OPCION` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ALT_CORREL`),
  KEY `ENC_CORREL` (`ENC_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ARCHIVO`
--

CREATE TABLE IF NOT EXISTS `ARCHIVO` (
  `ARC_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `COM_CORREL` int(11) NOT NULL,
  `ARC_ARCHIVO` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ARC_CORREL`),
  KEY `COM_CORREL` (`COM_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ARRIENDA`
--

CREATE TABLE IF NOT EXISTS `ARRIENDA` (
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  `ESP_CORREL` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`HOG_N_USUARIO`,`ESP_CORREL`),
  KEY `ESP_CORREL` (`ESP_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '11.111.111-1', NULL, NULL),
('admin', '18.154.900-9', NULL, NULL),
('admin', '99.999.999-9', NULL, NULL),
('conserje', '16.179.959-9', NULL, 'N;'),
('conserje', '22.222.222-2', NULL, 'N;'),
('hogar', 'govergara', NULL, 'N;'),
('hogar', 'pedrito', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 1, 'Administrador del sistema', NULL, NULL),
('conserje', 2, 'Cuenta conserje', NULL, NULL),
('hogar', 3, 'Cuenta propietario', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AVISOCLASIFICADO`
--

CREATE TABLE IF NOT EXISTS `AVISOCLASIFICADO` (
  `AVI_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  `AVI_DESCRIPCION` varchar(1024) DEFAULT NULL,
  `AVI_FECHA` date DEFAULT NULL,
  PRIMARY KEY (`AVI_CORREL`),
  KEY `HOG_N_USUARIO` (`HOG_N_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `COMUNA`
--

CREATE TABLE IF NOT EXISTS `COMUNA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15203 ;

--
-- Volcado de datos para la tabla `COMUNA`
--

INSERT INTO `COMUNA` (`id`, `nombre`) VALUES
(1101, 'Iquique'),
(1107, 'Alto Hospicio'),
(1401, 'Pozo Almonte'),
(1402, 'Camiña'),
(1403, 'Colchane'),
(1404, 'Huara'),
(1405, 'Pica'),
(2101, 'Antofagasta'),
(2102, 'Mejillones'),
(2103, 'Sierra Gorda'),
(2104, 'Taltal'),
(2201, 'Calama'),
(2202, 'Ollague'),
(2203, 'San Pedro de Atacama'),
(2301, 'Tocopilla'),
(2302, 'María Elena'),
(3101, 'Copiapó'),
(3102, 'Caldera'),
(3103, 'Tierra Amarilla'),
(3201, 'Chañaral'),
(3202, 'Diego de Almagro'),
(3301, 'Vallenar'),
(3302, 'Alto del Carmen'),
(3303, 'Freirina'),
(3304, 'Huasco'),
(4101, 'La Serena'),
(4102, 'Coquimbo'),
(4103, 'Andacollo'),
(4104, 'La Higuera'),
(4105, 'Paihuano'),
(4106, 'Vicuña'),
(4201, 'Illapel'),
(4202, 'Canela'),
(4203, 'Los Vilos'),
(4204, 'Salamanca'),
(4301, 'Ovalle'),
(4302, 'Combarbalá'),
(4303, 'Monte Patria'),
(4304, 'Punitaqui'),
(4305, 'Río Hurtado'),
(5101, 'Valparaíso'),
(5102, 'Casablanca'),
(5103, 'Concón'),
(5104, 'Juan Fernández'),
(5105, 'Puchuncaví'),
(5106, 'Quilpué'),
(5107, 'Quintero'),
(5108, 'Villa Alemana'),
(5109, 'Viña del Mar'),
(5201, 'Isla de Pascua'),
(5301, 'Los Andes'),
(5302, 'Calle Larga'),
(5303, 'Rinconada'),
(5304, 'San Esteban'),
(5401, 'La Ligua'),
(5402, 'Cabildo'),
(5403, 'Papudo'),
(5404, 'Petorca'),
(5405, 'Zapallar'),
(5501, 'Quillota'),
(5502, 'Calera'),
(5503, 'Hijuelas'),
(5504, 'La Cruz'),
(5505, 'Limache'),
(5506, 'Nogales'),
(5507, 'Olmué'),
(5601, 'San Antonio'),
(5602, 'Algarrobo'),
(5603, 'Cartagena'),
(5604, 'El Quisco'),
(5605, 'El Tabo'),
(5606, 'Santo Domingo'),
(5701, 'San Felipe'),
(5702, 'Catemu'),
(5703, 'Llay Llay'),
(5704, 'Panquehue'),
(5705, 'Putaendo'),
(5706, 'Santa María'),
(6101, 'Rancagua'),
(6102, 'Codegua'),
(6103, 'Coinco'),
(6104, 'Coltauco'),
(6105, 'Doñihue'),
(6106, 'Graneros'),
(6107, 'Las Cabras'),
(6108, 'Machalí'),
(6109, 'Malloa'),
(6110, 'Mostazal'),
(6111, 'Olivar'),
(6112, 'Peumo'),
(6113, 'Pichidegua'),
(6114, 'Quinta de Tilcoco'),
(6115, 'Rengo'),
(6116, 'Requinoa'),
(6117, 'San Vicente'),
(6201, 'Pichilemu'),
(6202, 'La Estrella'),
(6203, 'Litueche'),
(6204, 'Marchihue'),
(6205, 'Navidad'),
(6206, 'Paredones'),
(6301, 'San Fernando'),
(6302, 'Chépica'),
(6303, 'Chimbarongo'),
(6304, 'Lolol'),
(6305, 'Nancagua'),
(6306, 'Palmilla'),
(6307, 'Peralillo'),
(6308, 'Placilla'),
(6309, 'Pumanque'),
(6310, 'Santa Cruz'),
(7101, 'Talca'),
(7102, 'Constitución'),
(7103, 'Curepto'),
(7104, 'Empedrado'),
(7105, 'Maule'),
(7106, 'Pelarco'),
(7107, 'Pencahue'),
(7108, 'Río Claro'),
(7109, 'San Clemente'),
(7110, 'San Rafael'),
(7201, 'Cauquenes'),
(7202, 'Chanco'),
(7203, 'Pelluhue'),
(7301, 'Curicó'),
(7302, 'Hualañé'),
(7303, 'Licantén'),
(7304, 'Molina'),
(7305, 'Rauco'),
(7306, 'Romeral'),
(7307, 'Sagrada Familia'),
(7308, 'Teno'),
(7309, 'Vichuquén'),
(7401, 'Linares'),
(7402, 'Colbún'),
(7403, 'Longaví'),
(7404, 'Parral'),
(7405, 'Retiro'),
(7406, 'San Javier'),
(7407, 'Villa Alegre'),
(7408, 'Yerbas Buenas'),
(8101, 'Concepción'),
(8102, 'Coronel'),
(8103, 'Chiguayante'),
(8104, 'Florida'),
(8105, 'Hualqui'),
(8106, 'Lota'),
(8107, 'Penco'),
(8108, 'San Pedro De La Paz'),
(8109, 'Santa Juana'),
(8110, 'Talcahuano'),
(8111, 'Tomé'),
(8112, 'Hualpén'),
(8201, 'Lebu'),
(8202, 'Arauco'),
(8203, 'Cañete'),
(8204, 'Contulmo'),
(8205, 'Curanilahue'),
(8206, 'Los Alamos'),
(8207, 'Tirua'),
(8301, 'Los Angeles'),
(8302, 'Antuco'),
(8303, 'Cabrero'),
(8304, 'Laja'),
(8305, 'Mulchén'),
(8306, 'Nacimiento'),
(8307, 'Negrete'),
(8308, 'Quilaco'),
(8309, 'Quilleco'),
(8310, 'San Rosendo'),
(8311, 'Santa Bárbara'),
(8312, 'Tucapel'),
(8313, 'Yumbel'),
(8314, 'Alto Biobío'),
(8401, 'Chillán'),
(8402, 'Bulnes'),
(8403, 'Cobquecura'),
(8404, 'Coelemu'),
(8405, 'Coihueco'),
(8406, 'Chillán Viejo'),
(8407, 'El Carmen'),
(8408, 'Ninhue'),
(8409, 'Ñiquén'),
(8410, 'Pemuco'),
(8411, 'Pinto'),
(8412, 'Portezuelo'),
(8413, 'Quillón'),
(8414, 'Quirihue'),
(8415, 'Ranquil'),
(8416, 'San Carlos'),
(8417, 'San Fabián'),
(8418, 'San Ignacio'),
(8419, 'San Nicolás'),
(8420, 'Trehuaco'),
(8421, 'Yungay'),
(9101, 'Temuco'),
(9102, 'Carahue'),
(9103, 'Cunco'),
(9104, 'Curarrehue'),
(9105, 'Freire'),
(9106, 'Galvarino'),
(9107, 'Gorbea'),
(9108, 'Lautaro'),
(9109, 'Loncoche'),
(9110, 'Melipeuco'),
(9111, 'Nueva Imperial'),
(9112, 'Padre Las Casas'),
(9113, 'Perquenco'),
(9114, 'Pitrufquén'),
(9115, 'Pucón'),
(9116, 'Saavedra'),
(9117, 'Teodoro Schmidt'),
(9118, 'Toltén'),
(9119, 'Vilcún'),
(9120, 'Villarrica'),
(9121, 'Cholchol'),
(9201, 'Angol'),
(9202, 'Collipulli'),
(9203, 'Curacautín'),
(9204, 'Ercilla'),
(9205, 'Lonquimay'),
(9206, 'Los Sauces'),
(9207, 'Lumaco'),
(9208, 'Purén'),
(9209, 'Renaico'),
(9210, 'Traiguén'),
(9211, 'Victoria'),
(10101, 'Puerto Montt'),
(10102, 'Calbuco'),
(10103, 'Cochamó'),
(10104, 'Fresia'),
(10105, 'Frutillar'),
(10106, 'Los Muermos'),
(10107, 'Llanquihue'),
(10108, 'Maullín'),
(10109, 'Puerto Varas'),
(10201, 'Castro'),
(10202, 'Ancud'),
(10203, 'Chonchi'),
(10204, 'Curaco de Vélez'),
(10205, 'Dalcahue'),
(10206, 'Puqueldón'),
(10207, 'Queilén'),
(10208, 'Quellón'),
(10209, 'Quemchi'),
(10210, 'Quinchao'),
(10301, 'Osorno'),
(10302, 'Puerto Octay'),
(10303, 'Purranque'),
(10304, 'Puyehue'),
(10305, 'Río Negro'),
(10306, 'San Juan de la Costa'),
(10307, 'San Pablo'),
(10401, 'Chaitén'),
(10402, 'Futaleufú'),
(10403, 'Hualaihue'),
(10404, 'Palena'),
(11101, 'Coihaique'),
(11102, 'Lago Verde'),
(11201, 'Aisén'),
(11202, 'Cisnes'),
(11203, 'Guaitecas'),
(11301, 'Cochrane'),
(11302, 'Ohiggins'),
(11303, 'Tortel'),
(11401, 'Chile Chico'),
(11402, 'Río Ibáñez'),
(12101, 'Punta Arenas'),
(12102, 'Laguna Blanca'),
(12103, 'Río Verde'),
(12104, 'San Gregorio'),
(12201, 'Cabo de Hornos'),
(12202, 'ANTÁRTICA'),
(12301, 'Porvenir'),
(12302, 'Primavera'),
(12303, 'Timaukel'),
(12401, 'Natales'),
(12402, 'Torres del Paine'),
(13101, 'Santiago'),
(13102, 'Cerrillos'),
(13103, 'Cerro Navia'),
(13104, 'Conchalí'),
(13105, 'El Bosque'),
(13106, 'Estación Central'),
(13107, 'Huechuraba'),
(13108, 'Independencia'),
(13109, 'La Cisterna'),
(13110, 'La Florida'),
(13111, 'La Granja'),
(13112, 'La Pintana'),
(13113, 'La Reina'),
(13114, 'Las Condes'),
(13115, 'Lo Barnechea'),
(13116, 'Lo Espejo'),
(13117, 'Lo Prado'),
(13118, 'Macul'),
(13119, 'Maipú'),
(13120, 'Ñuñoa'),
(13121, 'Pedro Aguirre Cerda'),
(13122, 'Peñalolén'),
(13123, 'Providencia'),
(13124, 'Pudahuel'),
(13125, 'Quilicura'),
(13126, 'Quinta Normal'),
(13127, 'Recoleta'),
(13128, 'Renca'),
(13129, 'San Joaquín'),
(13130, 'San Miguel'),
(13131, 'San Ramón'),
(13132, 'Vitacura'),
(13201, 'Puente Alto'),
(13202, 'Pirque'),
(13203, 'San José de Maipo'),
(13301, 'Colina'),
(13302, 'Lampa'),
(13303, 'Til til'),
(13401, 'San Bernardo'),
(13402, 'Buin'),
(13403, 'Calera de Tango'),
(13404, 'Paine'),
(13501, 'Melipilla'),
(13502, 'Alhué'),
(13503, 'Curacaví'),
(13504, 'María Pinto'),
(13505, 'San Pedro'),
(13601, 'Talagante'),
(13602, 'El Monte'),
(13603, 'Isla de Maipo'),
(13604, 'Padre Hurtado'),
(13605, 'Peñaflor'),
(14101, 'Valdivia'),
(14102, 'Corral'),
(14103, 'Lanco'),
(14104, 'Los Lagos'),
(14105, 'Máfil'),
(14106, 'Mariquina'),
(14107, 'Paillaco'),
(14108, 'Panguipulli'),
(14201, 'La Unión'),
(14202, 'Futrono'),
(14203, 'Lago Ranco'),
(14204, 'Río Bueno'),
(15101, 'Arica'),
(15102, 'Camarones'),
(15201, 'Putre'),
(15202, 'General Lagos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `COMUNIDAD`
--

CREATE TABLE IF NOT EXISTS `COMUNIDAD` (
  `COM_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `ADM_RUT` varchar(12) NOT NULL,
  `COM_NOMBRE` varchar(150) DEFAULT NULL,
  `COM_DIRECCION` varchar(200) DEFAULT NULL,
  `COM_N_HOGARES` int(11) DEFAULT NULL,
  `COM_COMUNA` varchar(100) DEFAULT NULL,
  `COM_TELEFONO` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`COM_CORREL`),
  KEY `ADM_RUT` (`ADM_RUT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Volcado de datos para la tabla `COMUNIDAD`
--

INSERT INTO `COMUNIDAD` (`COM_CORREL`, `ADM_RUT`, `COM_NOMBRE`, `COM_DIRECCION`, `COM_N_HOGARES`, `COM_COMUNA`, `COM_TELEFONO`) VALUES
(20, '18.154.900-9', 'C3', 'asd', 5, 'Ppp', '123'),
(29, '18.154.900-9', 'Hualpen', 'Gran Bretaña 2372', 200, 'Tocopilla', '123456789'),
(35, '11.111.111-1', 'Pered', '123', 12, '1101', '412559090'),
(36, '11.111.111-1', 'Sfhdg', 'fgsdgf', 7, 'Iquique', '412556767'),
(37, '11.111.111-1', '7-eleven', '', 2, 'Arauco', '412550000'),
(38, '11.111.111-1', 'Comuniadd', 'blanco 445', 3, 'Macul', '-41255989'),
(39, '11.111.111-1', 'Qd', 'as', 12, 'Iquique', '000000000'),
(58, '99.999.999-9', 'Comunidad ricardiana', 'Rengo', 84, 'Concepción', '999999999'),
(59, '99.999.999-9', 'Comunidad ricardiana', '1071', 84, 'Iquique', '999999999'),
(60, '99.999.999-9', 'Comunidad ricardiana', '', 84, 'Chañaral', '999999999'),
(61, '99.999.999-9', 'Comunidad ricardiana', 'Rengo 1071', 84, 'Iquique', '999999999'),
(64, '99.999.999-9', 'Comunidad ricardiana', 'Rengo #1071', 3, 'Iquique', '999999999'),
(65, '99.999.999-9', 'Comunidad ricardiana', 'Ejercito #2122', 4, 'Iquique', '999999999'),
(66, '99.999.999-9', 'Comunidad ricardiana', 'Ejercito #2122', 999999999, 'Iquique', '999999999'),
(67, '99.999.999-9', 'Comunidad ricardiana', 'Rengo #1071, Lala', 20, 'Iquique', '999999999'),
(68, '99.999.999-9', 'Comunidad ricardiana', 'Ejercito #2122', 20, 'Iquique', '412424828'),
(69, '99.999.999-9', 'Comunidad ricardiana', 'Ejercito #2122', 20, 'Iquique', ''),
(70, '99.999.999-9', 'Nom', '123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 ', 20, 'Iquique', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CONSERJE`
--

CREATE TABLE IF NOT EXISTS `CONSERJE` (
  `CON_RUT` varchar(12) NOT NULL,
  `COM_CORREL` int(11) NOT NULL,
  `CON_CLAVE` varchar(1024) DEFAULT NULL,
  `CON_NOMBRE` varchar(100) DEFAULT NULL,
  `CON_APELLIDOS` varchar(100) DEFAULT NULL,
  `CON_TELEFONO` varchar(10) DEFAULT NULL,
  `CON_CORREO` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`CON_RUT`),
  KEY `COM_CORREL` (`COM_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CONSERJE`
--

INSERT INTO `CONSERJE` (`CON_RUT`, `COM_CORREL`, `CON_CLAVE`, `CON_NOMBRE`, `CON_APELLIDOS`, `CON_TELEFONO`, `CON_CORREO`) VALUES
('16.179.959-9', 20, '1234', 'Johann', 'Molinet valenzuela', '', ''),
('22.222.222-2', 20, '123', 'Mario', 'Baracus', '232323323', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ENCUESTA`
--

CREATE TABLE IF NOT EXISTS `ENCUESTA` (
  `ENC_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `COM_CORREL` int(11) NOT NULL,
  `ENC_PREGUNTA` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ENC_CORREL`),
  KEY `COM_CORREL` (`COM_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESPACIOCOMUN`
--

CREATE TABLE IF NOT EXISTS `ESPACIOCOMUN` (
  `ESP_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `TIP_CORREL` int(11) NOT NULL,
  `ESP_DESCRIPCION` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ESP_CORREL`),
  KEY `TIP_CORREL` (`TIP_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ESPACIOCOMUN`
--

INSERT INTO `ESPACIOCOMUN` (`ESP_CORREL`, `TIP_CORREL`, `ESP_DESCRIPCION`) VALUES
(2, 3, 'Gimnasio que se encuentra en.... '),
(3, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `FALTA`
--

CREATE TABLE IF NOT EXISTS `FALTA` (
  `FAL_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `TFAL_CORREL` int(11) NOT NULL,
  `CON_RUT` varchar(12) NOT NULL,
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  `FAL_DESCRIPCION` varchar(1024) DEFAULT NULL,
  `FAL_FECHA` date DEFAULT NULL,
  PRIMARY KEY (`FAL_CORREL`),
  KEY `TFAL_CORREL` (`TFAL_CORREL`),
  KEY `HOG_N_USUARIO` (`HOG_N_USUARIO`),
  KEY `CON_RUT` (`CON_RUT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `FALTA`
--

INSERT INTO `FALTA` (`FAL_CORREL`, `TFAL_CORREL`, `CON_RUT`, `HOG_N_USUARIO`, `FAL_DESCRIPCION`, `FAL_FECHA`) VALUES
(0, 2, '22.222.222-2', 'pedrito', 'Pinta la escala basura basura ... saca el poto por la ventana.. Se chupa lo pecho', '2014-05-25'),
(34, 1, '22.222.222-2', 'govergara', 'Copeteee', '2014-05-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GASTOCOMUN`
--

CREATE TABLE IF NOT EXISTS `GASTOCOMUN` (
  `GAS_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  `GAS_MONTO` int(11) DEFAULT NULL,
  `GAS_ESTADO` varchar(100) DEFAULT NULL,
  `GAS_DESCRIPCION` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`GAS_CORREL`),
  KEY `HOG_N_USUARIO` (`HOG_N_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HOGAR`
--

CREATE TABLE IF NOT EXISTS `HOGAR` (
  `HOG_RUT` varchar(12) NOT NULL,
  `COM_CORREL` int(11) NOT NULL,
  `HOG_CLAVE` varchar(1024) DEFAULT NULL,
  `HOG_N_HOGAR` int(11) DEFAULT NULL,
  `HOG_MCUADRADOS` int(11) DEFAULT NULL,
  `HOG_NOMBRE` varchar(100) DEFAULT NULL,
  `HOG_APELLIDOS` varchar(100) DEFAULT NULL,
  `HOG_TELEFONO` varchar(10) DEFAULT NULL,
  `HOG_CORREO` varchar(150) DEFAULT NULL,
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  PRIMARY KEY (`HOG_N_USUARIO`),
  KEY `COM_CORREL` (`COM_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `HOGAR`
--

INSERT INTO `HOGAR` (`HOG_RUT`, `COM_CORREL`, `HOG_CLAVE`, `HOG_N_HOGAR`, `HOG_MCUADRADOS`, `HOG_NOMBRE`, `HOG_APELLIDOS`, `HOG_TELEFONO`, `HOG_CORREO`, `HOG_N_USUARIO`) VALUES
('11.111.111-1', 20, '123', 1, 18, 'gonzalo', 'vergara', '12', 'asds@dsfsd.com', 'govergara'),
('55.555.555-5', 20, '123', 812, 20, 'asd', 'asda', '278373649', '', 'pedrito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RECLAMOS`
--

CREATE TABLE IF NOT EXISTS `RECLAMOS` (
  `REC_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  `REC_DESCRIPCION` varchar(1024) DEFAULT NULL,
  `REC_FECHA` date DEFAULT NULL,
  `REC_TIPO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`REC_CORREL`),
  KEY `HOG_N_USUARIO` (`HOG_N_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RESPONDE`
--

CREATE TABLE IF NOT EXISTS `RESPONDE` (
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  `ENC_CORREL` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`HOG_N_USUARIO`,`ENC_CORREL`),
  KEY `ENC_CORREL` (`ENC_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RESPUESTA`
--

CREATE TABLE IF NOT EXISTS `RESPUESTA` (
  `RESP_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `ALT_CORREL` int(11) NOT NULL,
  `RESP_RESULTADO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`RESP_CORREL`),
  KEY `ALT_CORREL` (`ALT_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPOFALTA`
--

CREATE TABLE IF NOT EXISTS `TIPOFALTA` (
  `TFAL_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `TFAL_NOMBRE` varchar(100) DEFAULT NULL,
  `TFAL_MONTO` int(11) DEFAULT NULL,
  PRIMARY KEY (`TFAL_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `TIPOFALTA`
--

INSERT INTO `TIPOFALTA` (`TFAL_CORREL`, `TFAL_NOMBRE`, `TFAL_MONTO`) VALUES
(1, 'Multa por alcohol', 30000),
(2, 'Multa por desorden', 20000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPO_ESP_COMUN`
--

CREATE TABLE IF NOT EXISTS `TIPO_ESP_COMUN` (
  `TIP_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `TIP_NOMBRE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`TIP_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `TIPO_ESP_COMUN`
--

INSERT INTO `TIPO_ESP_COMUN` (`TIP_CORREL`, `TIP_NOMBRE`) VALUES
(1, 'Quincho'),
(2, 'Piscina'),
(3, 'Gimnasio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRABAJADOR`
--

CREATE TABLE IF NOT EXISTS `TRABAJADOR` (
  `TRA_RUT` varchar(12) NOT NULL,
  `COM_CORREL` int(11) NOT NULL,
  `TRA_NOMBRE` varchar(100) DEFAULT NULL,
  `TRA_APELLIDOS` varchar(100) DEFAULT NULL,
  `TRA_TELEFONO` varchar(10) DEFAULT NULL,
  `TRA_FEC_CONTRATO` date DEFAULT NULL,
  `TRA_CARGO` varchar(100) DEFAULT NULL,
  `TRA_SUELDO` int(11) DEFAULT NULL,
  PRIMARY KEY (`TRA_RUT`),
  KEY `COM_CORREL` (`COM_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VEHICULOS`
--

CREATE TABLE IF NOT EXISTS `VEHICULOS` (
  `VEH_CORREL` int(11) NOT NULL AUTO_INCREMENT,
  `VEH_PATENTE` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`VEH_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VISITAS`
--

CREATE TABLE IF NOT EXISTS `VISITAS` (
  `VIS_RUT` varchar(12) NOT NULL,
  `VEH_CORREL` int(11) NOT NULL,
  `CON_RUT` varchar(12) NOT NULL,
  `HOG_N_USUARIO` varchar(100) NOT NULL,
  `VIS_NOMBRE` varchar(100) DEFAULT NULL,
  `VIS_APELLIDOS` varchar(100) DEFAULT NULL,
  `VIS_FECHA` date DEFAULT NULL,
  PRIMARY KEY (`VIS_RUT`),
  KEY `HOG_N_USUARIO` (`HOG_N_USUARIO`),
  KEY `CON_RUT` (`CON_RUT`),
  KEY `VEH_CORREL` (`VEH_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ALTERNATIVAS`
--
ALTER TABLE `ALTERNATIVAS`
  ADD CONSTRAINT `ALTERNATIVAS_ibfk_1` FOREIGN KEY (`ENC_CORREL`) REFERENCES `ENCUESTA` (`ENC_CORREL`);

--
-- Filtros para la tabla `ARCHIVO`
--
ALTER TABLE `ARCHIVO`
  ADD CONSTRAINT `ARCHIVO_ibfk_1` FOREIGN KEY (`COM_CORREL`) REFERENCES `COMUNIDAD` (`COM_CORREL`);

--
-- Filtros para la tabla `ARRIENDA`
--
ALTER TABLE `ARRIENDA`
  ADD CONSTRAINT `ARRIENDA_ibfk_1` FOREIGN KEY (`ESP_CORREL`) REFERENCES `ESPACIOCOMUN` (`ESP_CORREL`),
  ADD CONSTRAINT `ARRIENDA_ibfk_2` FOREIGN KEY (`HOG_N_USUARIO`) REFERENCES `HOGAR` (`HOG_N_USUARIO`);

--
-- Filtros para la tabla `AVISOCLASIFICADO`
--
ALTER TABLE `AVISOCLASIFICADO`
  ADD CONSTRAINT `AVISOCLASIFICADO_ibfk_1` FOREIGN KEY (`HOG_N_USUARIO`) REFERENCES `HOGAR` (`HOG_N_USUARIO`);

--
-- Filtros para la tabla `COMUNIDAD`
--
ALTER TABLE `COMUNIDAD`
  ADD CONSTRAINT `COMUNIDAD_ibfk_1` FOREIGN KEY (`ADM_RUT`) REFERENCES `ADMINISTRADOR` (`ADM_RUT`);

--
-- Filtros para la tabla `CONSERJE`
--
ALTER TABLE `CONSERJE`
  ADD CONSTRAINT `CONSERJE_ibfk_1` FOREIGN KEY (`COM_CORREL`) REFERENCES `COMUNIDAD` (`COM_CORREL`);

--
-- Filtros para la tabla `ENCUESTA`
--
ALTER TABLE `ENCUESTA`
  ADD CONSTRAINT `ENCUESTA_ibfk_1` FOREIGN KEY (`COM_CORREL`) REFERENCES `COMUNIDAD` (`COM_CORREL`);

--
-- Filtros para la tabla `ESPACIOCOMUN`
--
ALTER TABLE `ESPACIOCOMUN`
  ADD CONSTRAINT `ESPACIOCOMUN_ibfk_1` FOREIGN KEY (`TIP_CORREL`) REFERENCES `TIPO_ESP_COMUN` (`TIP_CORREL`);

--
-- Filtros para la tabla `FALTA`
--
ALTER TABLE `FALTA`
  ADD CONSTRAINT `FALTA_ibfk_1` FOREIGN KEY (`TFAL_CORREL`) REFERENCES `TIPOFALTA` (`TFAL_CORREL`),
  ADD CONSTRAINT `FALTA_ibfk_2` FOREIGN KEY (`HOG_N_USUARIO`) REFERENCES `HOGAR` (`HOG_N_USUARIO`),
  ADD CONSTRAINT `FALTA_ibfk_3` FOREIGN KEY (`CON_RUT`) REFERENCES `CONSERJE` (`CON_RUT`);

--
-- Filtros para la tabla `GASTOCOMUN`
--
ALTER TABLE `GASTOCOMUN`
  ADD CONSTRAINT `GASTOCOMUN_ibfk_1` FOREIGN KEY (`HOG_N_USUARIO`) REFERENCES `HOGAR` (`HOG_N_USUARIO`);

--
-- Filtros para la tabla `HOGAR`
--
ALTER TABLE `HOGAR`
  ADD CONSTRAINT `HOGAR_ibfk_1` FOREIGN KEY (`COM_CORREL`) REFERENCES `COMUNIDAD` (`COM_CORREL`);

--
-- Filtros para la tabla `RECLAMOS`
--
ALTER TABLE `RECLAMOS`
  ADD CONSTRAINT `RECLAMOS_ibfk_1` FOREIGN KEY (`HOG_N_USUARIO`) REFERENCES `HOGAR` (`HOG_N_USUARIO`);

--
-- Filtros para la tabla `RESPONDE`
--
ALTER TABLE `RESPONDE`
  ADD CONSTRAINT `RESPONDE_ibfk_1` FOREIGN KEY (`ENC_CORREL`) REFERENCES `ENCUESTA` (`ENC_CORREL`),
  ADD CONSTRAINT `RESPONDE_ibfk_2` FOREIGN KEY (`HOG_N_USUARIO`) REFERENCES `HOGAR` (`HOG_N_USUARIO`);

--
-- Filtros para la tabla `RESPUESTA`
--
ALTER TABLE `RESPUESTA`
  ADD CONSTRAINT `RESPUESTA_ibfk_1` FOREIGN KEY (`ALT_CORREL`) REFERENCES `ALTERNATIVAS` (`ALT_CORREL`);

--
-- Filtros para la tabla `TRABAJADOR`
--
ALTER TABLE `TRABAJADOR`
  ADD CONSTRAINT `TRABAJADOR_ibfk_1` FOREIGN KEY (`COM_CORREL`) REFERENCES `COMUNIDAD` (`COM_CORREL`);

--
-- Filtros para la tabla `VISITAS`
--
ALTER TABLE `VISITAS`
  ADD CONSTRAINT `VISITAS_ibfk_1` FOREIGN KEY (`HOG_N_USUARIO`) REFERENCES `HOGAR` (`HOG_N_USUARIO`),
  ADD CONSTRAINT `VISITAS_ibfk_2` FOREIGN KEY (`CON_RUT`) REFERENCES `CONSERJE` (`CON_RUT`),
  ADD CONSTRAINT `VISITAS_ibfk_3` FOREIGN KEY (`VEH_CORREL`) REFERENCES `VEHICULOS` (`VEH_CORREL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
