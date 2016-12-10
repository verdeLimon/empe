-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: anchor
-- ------------------------------------------------------
-- Server version	5.0.67-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividad` (
  `idactividad` int(5) NOT NULL auto_increment,
  `denominacion` varchar(60) default NULL,
  `tipoactividad` varchar(70) default NULL,
  PRIMARY KEY  (`idactividad`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
INSERT INTO `actividad` VALUES (1,'Agricultura, ganaderia y caza','Bienes'),(2,'Abarrotes e insumos de primera necesidad','Bienes'),(3,'Pesca, criadero de peces y granjas piscicolas','Bienes'),(4,'elaboracion de productos alimenticios y bebidas','Bienes'),(5,'Elaboracion de artesanias en general','Bienes'),(6,'Fabricacion de maquinarias y equipos','Bienes'),(7,'Fabricacion y confeccion de prendas de vestir','Bienes'),(8,'Fab. De prod. De madera, carpinteria y afines','Bienes'),(9,'Fabricacion de talabarteria','Bienes'),(10,'Otros bienes','Bienes'),(11,'Servicio de alojamiento y comidas','Servicios'),(12,'Servicio para la construccion','Servicios'),(13,'Servicios financieros y de seguro','Servicios'),(14,'Servicio de transporte y almacenamiento','Servicios'),(15,'Actividades de agen. De viaje y operadores turisticos','Servicios'),(16,'Servicios educativos y afines','Servicios'),(17,'Servicios personales, recreativos y culturales','Servicios'),(18,'Servicios de comunicación e informatica','Servicios'),(19,'Servicios de salud','Servicios'),(20,'Otros servicios','Servicios');
/*!40000 ALTER TABLE `actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistenciacurso`
--

DROP TABLE IF EXISTS `asistenciacurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asistenciacurso` (
  `idasistenciacurso` int(5) NOT NULL auto_increment,
  `modalidad` varchar(30) default NULL,
  `duracionhoras` int(3) default NULL,
  `capacitador` varchar(60) default NULL,
  `aplicacion` varchar(2) default NULL,
  `idcurso` int(5) default NULL,
  `idencargado` int(8) default NULL,
  PRIMARY KEY  (`idasistenciacurso`),
  KEY `f_cuu` (`idcurso`),
  KEY `f_ecnc` (`idencargado`),
  CONSTRAINT `f_cuu` FOREIGN KEY (`idcurso`) REFERENCES `cursos` (`idcurso`),
  CONSTRAINT `f_ecnc` FOREIGN KEY (`idencargado`) REFERENCES `encargados` (`idencargado`)
) ENGINE=InnoDB AUTO_INCREMENT=116872 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistenciacurso`
--

LOCK TABLES `asistenciacurso` WRITE;
/*!40000 ALTER TABLE `asistenciacurso` DISABLE KEYS */;
INSERT INTO `asistenciacurso` VALUES (113010,'Capacitacion Presencial',280,'Camara de Comercio','SI',2,11301),(113090,'Capacitacion Presencial',4,'Otros','SI',8,11309),(113120,'Capacitacion Presencial',4,'Camara de Comercio','SI',11,11312),(113190,'Capacitacion Presencial',6,'Otros','SI',1,11319),(116210,'Capacitacion Presencial',4,'Otros','SI',7,11621),(116211,'Capacitacion Presencial',4,'Otros','SI',8,11621),(116212,'Capacitacion Presencial',4,'Otros','SI',18,11621),(116213,'Capacitacion Presencial',4,'Otros','SI',19,11621),(116540,'Capacitacion Presencial',4,'Ministerio de la Produccion','SI',8,11654),(116541,'Capacitacion Presencial',4,'Ministerio de la Produccion','SI',11,11654),(116550,'Capacitacion Presencial',4,'Ministerio de la Produccion','SI',1,11655),(116551,'Capacitacion Presencial',4,'Ministerio de la Produccion','SI',8,11655),(116870,'Capacitacion Presencial',16,'Camara de Comercio','SI',11,11687),(116871,'Capacitacion Presencial',16,'Camara de Comercio','SI',18,11687);
/*!40000 ALTER TABLE `asistenciacurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bucle`
--

DROP TABLE IF EXISTS `bucle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bucle` (
  `idbucle` int(5) NOT NULL,
  `numero` int(8) default NULL,
  PRIMARY KEY  (`idbucle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bucle`
--

LOCK TABLES `bucle` WRITE;
/*!40000 ALTER TABLE `bucle` DISABLE KEYS */;
INSERT INTO `bucle` VALUES (1,116551),(2,116552),(3,116554);
/*!40000 ALTER TABLE `bucle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(6) NOT NULL auto_increment,
  `title` varchar(150) NOT NULL,
  `slug` varchar(40) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Uncategorised','uncategorised','Ain\'t no category here.');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_meta`
--

DROP TABLE IF EXISTS `category_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_meta` (
  `id` int(6) NOT NULL auto_increment,
  `category` int(6) NOT NULL,
  `extend` int(6) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `item` (`category`),
  KEY `extend` (`extend`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_meta`
--

LOCK TABLES `category_meta` WRITE;
/*!40000 ALTER TABLE `category_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codigo`
--

DROP TABLE IF EXISTS `codigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codigo` (
  `idcode` int(2) NOT NULL,
  `code` int(6) default NULL,
  PRIMARY KEY  (`idcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigo`
--

LOCK TABLES `codigo` WRITE;
/*!40000 ALTER TABLE `codigo` DISABLE KEYS */;
INSERT INTO `codigo` VALUES (1,11656),(2,91067),(3,91067);
/*!40000 ALTER TABLE `codigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(6) NOT NULL auto_increment,
  `post` int(6) NOT NULL,
  `status` enum('pending','approved','spam') NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `post` (`post`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `idcurso` int(5) NOT NULL auto_increment,
  `tipocurso` varchar(30) default NULL,
  `temacurso` varchar(50) default NULL,
  PRIMARY KEY  (`idcurso`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Gestión Empresarial','Formalización'),(2,'Gestión Empresarial','Compras estatales'),(3,'Gestión Empresarial','Instrumentos financieros'),(4,'Gestión Empresarial','Cadena de suministros'),(5,'Gestión Empresarial','Gestión financiera'),(6,'Gestión Empresarial','Planes de negocio'),(7,'Gestión Empresarial','Innovación'),(8,'Gestión Empresarial','Calidad'),(9,'Gestión Comercial','Marcas y franquicias'),(10,'Gestión Comercial','Exportaciones'),(11,'Gestión Comercial','Marketing'),(12,'Gestión Comercial','Negocios por internet'),(13,'Gestión de Operaciones','Nuevos o mejora de productos'),(14,'Gestión de Operaciones','Nuevos o mejora de servicios'),(15,'Gestión de Operaciones','Procesos de fabricación'),(16,'Gestión de Operaciones','Procesos con proveed. y comprad.'),(17,'Recursos Humanos','Gestión de Recursos Humanos'),(18,'Recursos Humanos','Atención al cliente'),(19,'Recursos Humanos','Seguridad Laboral'),(20,'Tecnologías de la Información','Diseño Web'),(21,'Tecnologías de la Información','Transacciones por Internet'),(22,'Tecnologías de la Información','Operaciones de Banca Electrónica'),(23,'Tecnologías de la Información','Redes Sociales'),(24,'Tecnologías de la Información','Ofimática'),(25,NULL,NULL);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encargados`
--

DROP TABLE IF EXISTS `encargados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encargados` (
  `idencargado` int(8) NOT NULL,
  `nombres` varchar(120) NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` char(1) default NULL,
  `instruccion` int(5) default NULL,
  `cargo` varchar(20) NOT NULL,
  `dni` varchar(8) default NULL,
  `idencuestado` int(6) NOT NULL,
  `celular` varchar(20) default NULL,
  `asistenciacurso` varchar(20) default NULL,
  `interescurso` varchar(20) default NULL,
  PRIMARY KEY  (`idencargado`),
  KEY `f_enc` (`idencuestado`),
  KEY `f_in` (`instruccion`),
  CONSTRAINT `f_enc` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`),
  CONSTRAINT `f_in` FOREIGN KEY (`instruccion`) REFERENCES `instruccion` (`idinstruccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encargados`
--

LOCK TABLES `encargados` WRITE;
/*!40000 ALTER TABLE `encargados` DISABLE KEYS */;
INSERT INTO `encargados` VALUES (11301,'OLAYA AVILEZ HERNAN LAUREANO',42,'M',10,'Propietario','NO',11301,'9647617331','SI','SI'),(11302,'ORDOÑEZ CABEZAS JOSE',70,'M',5,'Propietario','NO',11302,'966679032','NO','SI'),(11305,'YUPANQUI CALDERON VICTOR JULIO',45,'F',10,'Propietario','NO',11305,'966656573','NO','SI'),(11306,'PALOMINO FLORES JUANA CARMEN',53,'F',6,'Propietario','NO',11306,'966905004','NO','SI'),(11307,'PALOMINO QUIHUI MATEO',52,'M',6,'Propietario','NO',11307,'966503130','NO','SI'),(11308,'CERÈNJAICOBERTHA MARIDA',30,'F',9,'Propietario','NO',11308,'CELULAR','NO','SI'),(11309,'GUILLEN CANDELA EDGAR',58,'M',10,'Propietario','NO',11309,'966166774','SI','NO'),(11310,'HINOSTROZA DE LA CRUZ ESTHER LOURDES',29,'F',6,'Propietario','NO',11310,'982248654','NO','SI'),(11312,'JUSCAMAITA QUISPE GIL GEORGE',60,'M',10,'Propietario','NO',11312,'966999937','SI','SI'),(11314,'SEMINARIOJUAREZJANET',44,'F',8,'Propietario','NO',11314,'990422035','NO','SI'),(11315,'HUAMAN FLORES NANCY',39,'F',8,'Propietario','NO',11315,'990908766','NO','SI'),(11316,'GUTIERREZ HINOJOSA LUZ VICTORIA',52,'F',10,'Propietario','NO',11316,'966971978','NO','SI'),(11317,'LEON ARCE BERNARDO JAVIER',36,'M',8,'Propietario','NO',11317,'999166155','NO','SI'),(11318,'LLANTOY MELGAR NERY LEON',48,'M',10,'Propietario','NO',11318,'966853923','NO','SI'),(11319,'AYLAS GUZMAN TANIA ISABEL',42,'F',10,'Propietario','NO',11319,'CELULAR','SI','SI'),(11621,'LLAMOCCA QUICHCA EDWIN JUVENAL',36,'M',6,'Propietario','NO',11621,'984122145','SI','SI'),(11622,'APOLINARIO FLORES PAUL',44,'M',6,'Propietario','NO',11622,'925274636','NO','NO'),(11653,'MEDRANO ESCOBAR RONNY',38,'M',6,'Propietario','NO',11653,'931779365','NO','SI'),(11654,'LANGA MALLQUI DORIS',52,'F',4,'Propietario','NO',11654,'976456416','NO','SI'),(11655,'MEDINA MORALES JACQUELINE',34,'F',10,'Propietario','NO',11655,'966401634','NO','NO'),(11656,'QUISPE YANCE RUTH',35,'F',9,'Propietario','NO',11656,'966990569','',''),(11683,'MENDOZA ROMERO EDY WILMER',34,'M',11,'Propietario','NO',11683,'966317452','NO','SI'),(11685,'BAUTISTA NAJARRO ELIZABETH',38,'F',10,'Propietario','NO',11685,'999653271','NO','SI'),(11686,'CAYLLAHUA PILLACA RAQUEL',36,'F',8,'Propietario','NO',11686,'966992250','NO','SI'),(11687,'GOMEZ HINOSTROZA MARIBEL',34,'F',6,'Propietario','NO',11687,'964579574','SI','SI'),(11804,'QUISPE SULCA MARISOL',40,'F',8,'Propietario','NO',11804,'950602066','NO','SI'),(82001,'CCARHUAS SANCHEZ FELIX',44,'M',5,'Propietario','NO',82001,'','NO','SI'),(82002,'RAMOS TELLO MARIA',28,'F',5,'Propietario','NO',82002,'CELULAR','NO','NO'),(113011,'OLAYA AVILEZ HERNAN LAUREANO',42,'M',10,'Otro','NO',11301,'','',''),(113021,'ORDUÑEZ  ARANGO EVER',26,'M',8,'Encargado','NO',11302,'','',''),(113051,'YUPANQUI CALDERON VICTOR JULIO',45,'M',10,'Administrador','NO',11305,'','',''),(113061,'PALOMINO FLORES JUANA CARMEN',53,'F',6,'Administrador','NO',11306,'','',''),(113071,'PALOMINO QUIHUI MATEO',52,'M',6,'Administrador','NO',11307,'','',''),(113081,'CERÈN JAICO BERTHA MARIDA',30,'F',9,'Gerente','NO',11308,'','',''),(113091,'MENDOZA ESPINOZA MARILU',36,'F',10,'Encargado','NO',11309,'','',''),(113101,'HINOSTROZA DE LA CRUZ ESTHER LOURDES',29,'F',6,'Otro','NO',11310,'','',''),(113121,'VILA TOMAYLLA PLACIDA',46,'F',10,'Administrador','NO',11312,'','',''),(113141,'SEMINARIO JUAREZ JANET',44,'F',8,'Administrador','NO',11314,'','',''),(113151,'BARBOZA  LEON TEODOLFO',44,'M',10,'Administrador','NO',11315,'','',''),(113161,'GUTIERREZ HINOJOSA LUZ VICTORIA',52,'F',10,'Administrador','NO',11316,'','',''),(113171,'LEON ARCE BERNARDO JAVIER',36,'M',8,'Administrador','NO',11317,'','',''),(113181,'LLANTOY MELGAR NERY LEON',48,'M',10,'Otro','NO',11318,'','',''),(113191,'AYLAS GUZMAN TANIA ISABEL',42,'F',10,'Administrador','NO',11319,'','',''),(116211,'LLAMOCCA QUICHCA EDWIN JUVENAL',36,'M',6,'Otro','NO',11621,'','',''),(116221,'APOLINARIO FLORES PAUL',44,'M',6,'Otro','NO',11622,'','',''),(116531,'MEDRANO ESCOBAR RONNY',38,'M',6,'Otro','NO',11653,'','',''),(116541,'LANGA MALLQUI DORIS',52,'F',6,'Otro','NO',11654,'','',''),(116551,'MEDINA MORALES JACQUELINE',34,'F',10,'Otro','NO',11655,'','',''),(116561,'QUISPE YANCE RUTH',35,'F',9,'Otro','NO',11656,'','',''),(116831,'MENDOZA ROMERO EDY WILMER',34,'M',11,'Otro','NO',11683,'','',''),(116851,'BAUTISTA NAJARRO ELIZABETH',38,'F',10,'Otro','NO',11685,'','',''),(116861,'CAYLLAHUA PILLACA RAQUEL',36,'F',8,'Otro','NO',11686,'','',''),(116871,'GOMEZ HINOSTROZA MARIBEL',34,'F',6,'Otro','NO',11687,'','',''),(118041,'QUISPE SULCA MARISOL',40,'F',8,'Administrador','NO',11804,'','',''),(820011,'CCARHUAS SANCHEZ FELIX',44,'M',5,'Otro','NO',82001,'','',''),(820021,'RAMOS TELLO MARIA',28,'F',5,'Otro','NO',82002,'','','');
/*!40000 ALTER TABLE `encargados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuestados`
--

DROP TABLE IF EXISTS `encuestados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuestados` (
  `idencuestado` int(6) NOT NULL,
  `ruc` varchar(11) default NULL,
  `direccion` varchar(120) default NULL,
  `razonsocial` varchar(100) default NULL,
  `nombrenegocio` varchar(200) default NULL,
  `mediopago` varchar(100) default NULL,
  `cambiogiro` varchar(2) default NULL,
  `motivogiro` varchar(60) default NULL,
  `clavesol` varchar(2) default NULL,
  `telfijo` varchar(30) default NULL,
  `email` varchar(40) default NULL,
  `web` varchar(40) default NULL,
  `tiempofun` varchar(30) default NULL,
  `partprograma` varchar(2) default NULL,
  `partefranqui` varchar(30) default NULL,
  `ofrecefranqui` varchar(2) default NULL,
  `certificacion` varchar(50) default NULL,
  `asociacion` varchar(50) default NULL,
  `sucursales` int(2) default NULL,
  `condicionlocal` varchar(50) default NULL,
  `situacionpropiedad` varchar(50) default NULL,
  `idubicacion` int(5) default NULL,
  `idciiu` int(5) default NULL,
  `dificultad` varchar(20) default NULL,
  `areasdificultad` varchar(80) default NULL,
  `programas` varchar(20) default NULL,
  `impactoprograma` varchar(100) default NULL,
  `asiscurso` varchar(20) default NULL,
  `intercurso` varchar(20) default NULL,
  PRIMARY KEY  (`idencuestado`),
  KEY `f_act` (`idciiu`),
  KEY `f_r` (`ruc`),
  KEY `f_ubi` (`idubicacion`),
  CONSTRAINT `f_act` FOREIGN KEY (`idciiu`) REFERENCES `actividad` (`idactividad`),
  CONSTRAINT `f_r` FOREIGN KEY (`ruc`) REFERENCES `mypessunat` (`ruc`),
  CONSTRAINT `f_ubi` FOREIGN KEY (`idubicacion`) REFERENCES `ubicacion` (`idubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestados`
--

LOCK TABLES `encuestados` WRITE;
/*!40000 ALTER TABLE `encuestados` DISABLE KEYS */;
INSERT INTO `encuestados` VALUES (11301,'10215609702','JIRON JOSE ANTONIO DE SUCRE Nro. 123       -','OLAYA AVILEZ HERNAN LAUREANO','','','NO','','SI','TELEFONO','E-MAIL','WEB','15 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',1,12,'SI',',Administración','SI','No tuvo impacto',NULL,NULL),(11302,'10204436351','JIRON LIBERTAD Nro. 303       -','ORDOÑEZ CABEZAS JOSE','BORDAURIA SEÑOR DE MURUHUAY','Pago en efectivo','NO','','SI','','E-MAIL','WEB','9 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',1,7,'SI','','NO','',NULL,NULL),(11305,'10282882383','PROLONG SAN MARTIN Nro. 145       -','YUPANQUI CALDERON VICTOR JULIO','COMERCIAL NUEVA VIDA','','NO','','SI','TELEFONO','VICTORWARI_33@HOTMAIL.COM','WEB','17 AÑOS','N','NO','NO','NO','NO',0,'Prestado en cesion de uso','SIN SELECCIONAR',1,2,'NO',',Logística y producción','NO','',NULL,NULL),(11306,'10282608010','JIRON LIBERTAD Nro. 362       -','PALOMINO FLORES JUANA CARMEN','PIÑATERIA VICTORIA','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','2 AÑOS','N','NO','NO','NO','NO',0,'Prestado en cesion de uso','SIN SELECCIONAR',2,17,'NO','','NO','',NULL,NULL),(11307,'10282026746','JIRON UNSCH Nro. 415       -','PALOMINO QUIHUI MATEO','CERRAJERIA QUIHUI','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','20 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',2,12,'NO','','SI',',Aumentó las ventas',NULL,NULL),(11308,'20600995074','JIRON TUPAC AMARU Nro. 212       PUCA CRUZ','GREIVO CONTRATISTAS Y CONSULTORES S.A.C.','GREIVO CONTRATISTAS Y CONSULTORES S.A.C.','Tranferencia electronica C.C.I.','NO','','SI','310744','GREIVO2@HOTMAIL.COM','WEB','1 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',2,12,'SI','','NO','',NULL,NULL),(11309,'10282237895','JIRON SAN MARTIN Nro. 185       -','GUILLEN CANDELA EDGAR','BOTICA SAN MIGUEL ARCANGEL','Pago en efectivo','NO','','SI','314235','MARYMEN_M@OUTLOK.COM','WEB','25 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',3,19,'NO','','NO','',NULL,NULL),(11310,'10454040363','JIRON CALLAO Nro. 190       -','HINOSTROZA DE LA CRUZ ESTHER LOURDES','','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','8 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',3,10,'SI','Ventas y mercadeo','NO','',NULL,NULL),(11312,'10282043934','JIRON POKRA Nro. 341       BARRIO LIBERTAD','JUSCAMAITA QUISPE GIL GEORGE','CENTRO RECREACIONAL SCORPION','Pago en efectivo','NO','','SI','TELEFONO','PLANTAS@HOTMAIL.COM','WEB','12 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',3,17,'SI','Ventas y mercadeo','NO','',NULL,NULL),(11314,'10106153171','-   Mza. A1  Lt. 01   CIUDAD DE CUMANA','SEMINARIO JUAREZ DE HUAYANAY JANET','BODEGA PILAR','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','3 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',3,2,'NO','','NO','',NULL,NULL),(11315,'10283066521','JIRON POCKRAS Nro. 796       -','HUAMAN FLORES NANCY','BODEGA EL CHINO','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','3 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',4,2,'NO','','NO','',NULL,NULL),(11316,'10081820819','AVENIDA 26 DE ENERO   Mza. B  Lt. 6  URB. UNSCH','GUTIERREZ HINOJOSA LUZ VICTORIA','PERU PON','Pago en efectivo','NO','','SI','310480','PERUPON@HOTMAIL.COM','WEB','3 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',4,4,'NO','Ventas y mercadeo','NO','',NULL,NULL),(11317,'10419588585','JIRON HUAYTARA Nro. 405       BARRIO LA LIBERTAD','LEON ARCE BERNARDO JAVIER','FERRETERIA JAVIER','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','5 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',4,8,'NO','Ventas y mercadeo','NO','',NULL,NULL),(11318,'10215519754','JIRON JOSE OLAYA Nro. 260       -','LLANTOY MELGAR NERY LEON','L Y G TEXTILES','Pago en efectivo','SI','Nuevo mercado','SI','','LEONYGUDEL@HOTMAIL.COM','WEB','8 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',4,10,'NO','','NO','',NULL,NULL),(11319,'10282881689','JIRON UNTIVEROS Nro. 180       -','AYLAS GUZMAN TANIA ISABEL','DINAS MULTISERVICIOS','Pago en efectivo','NO','','SI','311904','MONUOIDEAS2015@HOTMAIL.COM','WEB','12 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',4,7,'SI','','SI','No tuvo impacto',NULL,NULL),(11621,'10413468821','CALLE SANTA CLARA Nro. 148   Int. 111    -','LLAMOCCA QUICHCA EDWIN JUVENAL','','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','7 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',4,7,'SI','','NO','',NULL,NULL),(11622,'10474352825','JIRON SAN MARTIN Nro. 420      URB. CERCADO','APOLINARIO FLORES PAUL','','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','2 SELECCIONE','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',5,7,'NO','','NO','',NULL,NULL),(11653,'10445620136','JIRON HUANTA Nro. 202       -','MEDRANO ESCOBAR RONNY','','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','5 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',5,2,'NO','','NO','',NULL,NULL),(11654,'10282827218','JIRON GARCILAZO DE LA VEGA Nro. 701       -','LANGA MALLQUI DORIS','','Pago en efectivo','NO','','NO','TELEFONO','E-MAIL','WEB','4 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',5,11,'SI',',Logística y producción','NO','',NULL,NULL),(11655,'10402611648','AVENIDA GRAN CHIMU Nro. S/N       BARRIO PILACUCHO','MEDINA MORALES JACQUELINE','','Pago en efectivo','NO','','.','TELEFONO','E-MAIL','WEB','10 SELECCIONE','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',5,2,'SI','','NO','',NULL,NULL),(11656,'10405883860','AV. LA MARINA','QUISPE YANCE RUTH','INNOVA PANADERIA - PASTELERIA','N','N','N','NO','TELEFONO','E-MAIL','WEB','8 SELECCIONE','N','N','N','N','N',0,'N','N',5,NULL,'SI',NULL,NULL,NULL,NULL,NULL),(11683,'10432148489','AVENIDA ARENALES Nro. 363       -','MENDOZA ROMERO EDY WILMER','MULTISERVICIOS','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','3 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',6,2,'NO','','NO','',NULL,NULL),(11685,'10405194487','-   Mza. I  Lt. 19  URB. JOSE ORTIZ VERGARA','BAUTISTA NAJARRO ELIZABETH','','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','8 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',6,17,'NO',',Administración','NO','',NULL,NULL),(11686,'10428401790','JIRON MARIO RAMOS Nro. 109       -','CAYLLAHUA PILLACA RAQUEL','','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','6 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',6,11,'NO',',Logística y producción','NO','',NULL,NULL),(11687,'10473243291','JIRON BELLIDO Nro. 492       -','GOMEZ HINOSTROZA MARIBEL','','Pago en efectivo','NO','','SI','TELEFONO','E-MAIL','WEB','3 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',6,7,'NO','','NO','',NULL,NULL),(11804,'10283162473','JIRON CALLAO Nro. 435       -','QUISPE SULCA MARISOL','BODEGANOYHCI','Pago en efectivo','NO','','SI','327776','CARLITS_LM12@HOTMAIL.COM','WEB','3 AÑOS','N','NO','NO','NO','NO',0,'Alquilado','SIN SELECCIONAR',6,2,'SI','','NO','',NULL,NULL),(82001,'10288487516','JIRON ATAHUALLPA Nro. S/N       -','CCARHUAS SANCHEZ FELIX','','Pago en efectivo','NO','','SI','','E-MAIL','WEB','5 AÑOS','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',6,2,'SI','','NO','',NULL,NULL),(82002,'10442430051','JIRON SAN MARTIN Nro. S/N       -','RAMOS TELLO MARIA','','Pago en efectivo','NO','','NO','TELEFONO','E-MAIL','WEB','9 MESES','N','NO','NO','NO','NO',0,'Propio','Cuenta con titulo de prop',6,3,'SI','','NO','',NULL,NULL);
/*!40000 ALTER TABLE `encuestados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extend`
--

DROP TABLE IF EXISTS `extend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extend` (
  `id` int(6) NOT NULL auto_increment,
  `type` enum('post','page','category','user') NOT NULL,
  `pagetype` varchar(140) NOT NULL default 'all',
  `field` enum('text','html','image','file') NOT NULL,
  `key` varchar(160) NOT NULL,
  `label` varchar(160) NOT NULL,
  `attributes` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extend`
--

LOCK TABLES `extend` WRITE;
/*!40000 ALTER TABLE `extend` DISABLE KEYS */;
/*!40000 ALTER TABLE `extend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financiamiento`
--

DROP TABLE IF EXISTS `financiamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financiamiento` (
  `idfinanciamiento` int(5) NOT NULL auto_increment,
  `tipofinan` varchar(50) default NULL,
  `credito` varchar(2) default NULL,
  `razonnegatcred` varchar(50) default NULL,
  `entidadcred` varchar(50) default NULL,
  `plazocred` varchar(50) default NULL,
  `destinocred` varchar(50) default NULL,
  `conformidadcred` varchar(2) default NULL,
  `fondosconcu` varchar(50) default NULL,
  `montocred` varchar(50) default NULL,
  `rangointer` varchar(50) default NULL,
  `criteriocred` varchar(50) default NULL,
  `tipocred` varchar(50) default NULL,
  `asesorcred` varchar(2) default NULL,
  `deseo` varchar(2) default NULL,
  `idencuestado` int(6) default NULL,
  PRIMARY KEY  (`idfinanciamiento`),
  KEY `f_titi` (`idencuestado`),
  CONSTRAINT `f_titi` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`)
) ENGINE=InnoDB AUTO_INCREMENT=82003 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financiamiento`
--

LOCK TABLES `financiamiento` WRITE;
/*!40000 ALTER TABLE `financiamiento` DISABLE KEYS */;
INSERT INTO `financiamiento` VALUES (11301,'Recursos propios','NO','No lo necesita','','SIN SELECCIONAR','','NO','SI','SIN SELECCIONAR','SIN SELEECCIONAR','','','SI','SI',11301),(11302,'Recursos propios','NO','Tasa de interes elevado','','SIN SELECCIONAR','','NO','NO','SIN SELECCIONAR','SIN SELEECCIONAR','','','NO','SI',11302),(11305,'Prestamos','SI','','Bancos','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 30.001 a 50.000','De 1.2% a 3%','Plazo de pago','Credito comercial','SI','SI',11305),(11306,'Prestamos','SI','','Cajas rurales de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 1.000 a 5.000','De 1.2% a 3%','Tasa de interes','Credito comercial','NO','SI',11306),(11307,'Prestamos','SI','','ADES','Corto plazo(< 12 meses)','Capital de trabajo','NO','NO','De 1.000 a 5.000','De 3% a 5%','Recomendaciones de terceros','Credito comercial','NO','SI',11307),(11308,'Prestamos','SI','','Cooperativas de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 15.001 a 30.000','De 0.8 a 1%','Plazo de pago','Credito personal','NO','SI',11308),(11309,'Recursos propios','NO','No lo necesita','','SIN SELECCIONAR','','NO','NO','SIN SELECCIONAR','SIN SELEECCIONAR','','','NO','SI',11309),(11310,'Prestamos','SI','','Cajas rurales de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 15.001 a 30.000','De 3% a 5%','Plazo de pago','Credito comercial','NO','SI',11310),(11312,'Prestamos','SI','','Bancos','Largo plazo(> 5 años)','Capital de trabajo','SI','NO','De 30.001 a 50.000','De 0.8 a 1%','Tasa de interes','Credito comercial','NO','NO',11312),(11314,'Prestamos','SI','','Bancos','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 1.000 a 5.000','De 1.2% a 3%','Tasa de interes','Credito comercial','NO','SI',11314),(11315,'Recursos propios','NO','No lo necesita','','SIN SELECCIONAR','','NO','NO','SIN SELECCIONAR','SIN SELEECCIONAR','','','NO','NO',11315),(11316,'Prestamos','SI','','Cooperativas de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','NO','NO','De 5.001 a 15.000','De 3% a 5%','Tasa de interes','Credito personal','NO','NO',11316),(11317,'Prestamos','SI','','Cooperativas de ahorro y credito','Corto plazo(< 12 meses)','Capital de trabajo','NO','NO','De 5.001 a 15.000','De 3% a 5%','Tasa de interes','Credito comercial','NO','SI',11317),(11318,'Prestamos','SI','','Bancos','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 50.001 a 100.000','De 1.2% a 3%','Tasa de interes','Credito comercial','SI','NO',11318),(11319,'Prestamos','SI','','Cooperativas de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','NO','NO','De 5.001 a 15.000','De 1.2% a 3%','Tasa de interes','Credito MYPE','NO','SI',11319),(11621,'Prestamos','SI','','Cooperativas de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','NO','NO','De 1.000 a 5.000','De 3% a 5%','Garantias solicitadas','Credito personal','NO','SI',11621),(11622,'Prestamos','SI','','Cooperativas de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 1.000 a 5.000','De 3% a 5%','Garantias solicitadas','Credito personal','NO','NO',11622),(11653,'Prestamos','SI','','Cooperativas de ahorro y credito','Largo plazo(> 5 años)','Capital de trabajo','SI','NO','De 1.000 a 5.000','De 1.2% a 3%','Tasa de interes','Credito personal','NO','NO',11653),(11654,'Prestamos','SI','','Bancos','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 5.001 a 15.000','De 0.8 a 1%','Tasa de interes','Credito personal','NO','NO',11654),(11655,'Recursos propios','NO','Tasa de interes elevado','','SIN SELECCIONAR','','NO','NO','SIN SELECCIONAR','SIN SELEECCIONAR','','','NO','NO',11655),(11683,'Prestamos','SI','','Cooperativas de ahorro y credito','Corto plazo(< 12 meses)','Capital de trabajo','NO','NO','De 1.000 a 5.000','De 3% a 5%','Garantias solicitadas','Credito personal','NO','NO',11683),(11685,'Prestamos','SI','','Cajas rurales de ahorro y credito','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 1.000 a 5.000','De 1.2% a 3%','Beneficios que otorga la entidad','Credito comercial','NO','NO',11685),(11686,'Prestamos','SI','','Bancos','Mediano plazo(> 1 año y <5)','Capital de trabajo','SI','NO','De 1.000 a 5.000','De 1.2% a 3%','Tasa de interes','Credito personal','NO','NO',11686),(11687,'Prestamos','SI','','Cooperativas de ahorro y credito','Corto plazo(< 12 meses)','Capital de trabajo','SI','NO','De 1.000 a 5.000','De 3% a 5%','Garantias solicitadas','Credito comercial','NO','NO',11687),(11804,'Recursos propios','NO','No le gusta pedir prest./cred.','','SIN SELECCIONAR','','NO','NO','SIN SELECCIONAR','SIN SELEECCIONAR','','','NO','SI',11804),(82001,'Recursos propios','NO','Desconoce el proced. para solicitarlo','','SIN SELECCIONAR','','NO','NO','SIN SELECCIONAR','SIN SELEECCIONAR','','','NO','NO',82001),(82002,'Recursos propios','NO','No lo necesita','','SIN SELECCIONAR','','NO','NO','SIN SELECCIONAR','SIN SELEECCIONAR','','','NO','NO',82002);
/*!40000 ALTER TABLE `financiamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instruccion`
--

DROP TABLE IF EXISTS `instruccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instruccion` (
  `idinstruccion` int(5) NOT NULL auto_increment,
  `descripcion` varchar(40) default NULL,
  PRIMARY KEY  (`idinstruccion`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instruccion`
--

LOCK TABLES `instruccion` WRITE;
/*!40000 ALTER TABLE `instruccion` DISABLE KEYS */;
INSERT INTO `instruccion` VALUES (1,'Sin instrucción'),(2,'Inicial'),(3,'Primaria incompleta'),(4,'Primaria completa'),(5,'Secundaria incompleta'),(6,'Secundaria completa'),(7,'Superior no univ. Incompleta'),(8,'Superior no univ. Completa'),(9,'Superior univ. incompleta'),(10,'Superior univ. Completa'),(11,'Educacion tecnica');
/*!40000 ALTER TABLE `instruccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interescurso`
--

DROP TABLE IF EXISTS `interescurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interescurso` (
  `idinterescurso` int(5) NOT NULL auto_increment,
  `idcurso` int(5) default NULL,
  `idencargado` int(8) default NULL,
  PRIMARY KEY  (`idinterescurso`),
  KEY `f_cu` (`idcurso`),
  KEY `f_encc` (`idencargado`),
  CONSTRAINT `f_cu` FOREIGN KEY (`idcurso`) REFERENCES `cursos` (`idcurso`),
  CONSTRAINT `f_encc` FOREIGN KEY (`idencargado`) REFERENCES `encargados` (`idencargado`)
) ENGINE=InnoDB AUTO_INCREMENT=820011 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interescurso`
--

LOCK TABLES `interescurso` WRITE;
/*!40000 ALTER TABLE `interescurso` DISABLE KEYS */;
INSERT INTO `interescurso` VALUES (113010,17,11301),(113011,19,11301),(113020,10,11302),(113021,15,11302),(113022,23,11302),(113050,7,11305),(113051,10,11305),(113052,11,11305),(113053,12,11305),(113054,23,11305),(113055,24,11305),(113060,7,11306),(113061,11,11306),(113062,12,11306),(113063,23,11306),(113070,11,11307),(113071,23,11307),(113080,2,11308),(113081,18,11308),(113100,8,11310),(113101,11,11310),(113102,18,11310),(113103,23,11310),(113120,11,11312),(113121,12,11312),(113140,11,11314),(113141,18,11314),(113142,19,11314),(113150,7,11315),(113151,11,11315),(113152,18,11315),(113160,6,11316),(113161,11,11316),(113162,12,11316),(113163,18,11316),(113170,11,11317),(113171,19,11317),(113180,7,11318),(113181,11,11318),(113182,12,11318),(113183,19,11318),(113190,10,11319),(113191,11,11319),(113192,12,11319),(113193,17,11319),(113194,18,11319),(113195,19,11319),(116210,1,11621),(116211,2,11621),(116212,3,11621),(116213,4,11621),(116214,5,11621),(116215,6,11621),(116216,7,11621),(116220,1,11622),(116540,1,11654),(116541,2,11654),(116542,3,11654),(116543,4,11654),(116544,5,11654),(116545,6,11654),(116546,7,11654),(116547,8,11654),(116548,9,11654),(116549,10,11654),(116550,11,11654),(116551,12,11654),(116552,13,11654),(116553,14,11654),(116554,15,11654),(116555,16,11654),(116556,17,11654),(116557,18,11654),(116558,19,11654),(116559,20,11654),(116560,21,11654),(116561,22,11654),(116562,23,11654),(116563,24,11654),(116830,1,11683),(116831,2,11683),(116832,3,11683),(116833,4,11683),(116834,5,11683),(116835,6,11683),(116836,7,11683),(116837,8,11683),(116838,9,11683),(116839,10,11683),(116840,11,11683),(116841,12,11683),(116842,13,11683),(116843,14,11683),(116844,15,11683),(116845,16,11683),(116846,17,11683),(116847,18,11683),(116848,19,11683),(116849,20,11683),(116850,1,11685),(116851,2,11685),(116852,3,11685),(116853,4,11685),(116854,5,11685),(116855,6,11685),(116856,7,11685),(116857,8,11685),(116858,9,11685),(116859,10,11685),(116860,11,11685),(116861,12,11685),(116862,13,11685),(116863,14,11685),(116864,15,11685),(116865,16,11685),(116866,17,11685),(116867,18,11685),(116868,19,11685),(116869,20,11685),(116870,21,11685),(116871,22,11685),(116872,23,11685),(116873,24,11685),(116874,16,11686),(116875,17,11686),(116876,18,11686),(116877,19,11686),(116878,20,11686),(116879,21,11686),(116880,11,11687),(116881,12,11687),(116882,13,11687),(116883,14,11687),(116884,15,11687),(116885,16,11687),(116886,17,11687),(116887,18,11687),(116888,19,11687),(116889,20,11687),(116890,21,11687),(116891,22,11687),(116892,23,11687),(116893,24,11687),(118040,7,11804),(118041,11,11804),(118042,23,11804),(820010,11,82001);
/*!40000 ALTER TABLE `interescurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta`
--

DROP TABLE IF EXISTS `meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta` (
  `key` varchar(140) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta`
--

LOCK TABLES `meta` WRITE;
/*!40000 ALTER TABLE `meta` DISABLE KEYS */;
INSERT INTO `meta` VALUES ('auto_published_comments','0'),('comment_moderation_keys',''),('comment_notifications','0'),('current_migration','211'),('date_format','jS M, Y'),('description','It’s not just any blog. It’s an Anchor blog.'),('home_page','1'),('posts_page','1'),('posts_per_page','6'),('show_all_posts','0'),('sitename','My First Anchor Blog'),('theme','default');
/*!40000 ALTER TABLE `meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mypessunat`
--

DROP TABLE IF EXISTS `mypessunat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mypessunat` (
  `ruc` varchar(11) NOT NULL,
  `razonsocial` varchar(100) default NULL,
  `estado` varchar(20) default NULL,
  `ciiu` varchar(5) default NULL,
  `actividad` varchar(120) default NULL,
  `tipoc` varchar(60) default NULL,
  `distrito` varchar(40) default NULL,
  `direccion` varchar(120) default NULL,
  `referencia` varchar(100) default NULL,
  PRIMARY KEY  (`ruc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mypessunat`
--

LOCK TABLES `mypessunat` WRITE;
/*!40000 ALTER TABLE `mypessunat` DISABLE KEYS */;
/*!40000 ALTER TABLE `mypessunat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_meta`
--

DROP TABLE IF EXISTS `page_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_meta` (
  `id` int(6) NOT NULL auto_increment,
  `page` int(6) NOT NULL,
  `extend` int(6) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `page` (`page`),
  KEY `extend` (`extend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_meta`
--

LOCK TABLES `page_meta` WRITE;
/*!40000 ALTER TABLE `page_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `page_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(6) NOT NULL auto_increment,
  `parent` int(6) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `pagetype` varchar(140) NOT NULL default 'all',
  `name` varchar(64) NOT NULL,
  `title` varchar(150) NOT NULL,
  `markdown` text,
  `html` text NOT NULL,
  `status` enum('draft','published','archived') NOT NULL,
  `redirect` text NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `menu_order` int(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `status` (`status`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'posts','all','Posts','My posts and thoughts','Welcome!','<p>Welcome!</p>','published','',1,0);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagetypes`
--

DROP TABLE IF EXISTS `pagetypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagetypes` (
  `key` varchar(32) NOT NULL,
  `value` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagetypes`
--

LOCK TABLES `pagetypes` WRITE;
/*!40000 ALTER TABLE `pagetypes` DISABLE KEYS */;
INSERT INTO `pagetypes` VALUES ('all','All Pages');
/*!40000 ALTER TABLE `pagetypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_meta`
--

DROP TABLE IF EXISTS `post_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_meta` (
  `id` int(6) NOT NULL auto_increment,
  `post` int(6) NOT NULL,
  `extend` int(6) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `post` (`post`),
  KEY `extend` (`extend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_meta`
--

LOCK TABLES `post_meta` WRITE;
/*!40000 ALTER TABLE `post_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(6) NOT NULL auto_increment,
  `title` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `markdown` text NOT NULL,
  `html` mediumtext NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  `created` datetime NOT NULL,
  `author` int(6) NOT NULL,
  `category` int(6) NOT NULL,
  `status` enum('draft','published','archived') NOT NULL,
  `comments` tinyint(1) default '0',
  PRIMARY KEY  (`id`),
  KEY `status` (`status`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Hello World','hello-world','This is the first post.','Hello World!\r\n\r\nThis is the first post.','<p>Hello World!</p>\n<p>This is the first post.</p>','','','2016-12-09 00:04:33',1,1,'published',0),(2,'5675757  56y 56u5u6556u','5675757-56y-56u5u6556u','','7665757657','<p>7665757657</p>',' 56',' 56u5u65','2016-12-09 00:07:34',1,1,'published',0),(3,'56y75675757','56y75675757','','**¿Qué es Lorem Ipsum?**\n','<p><strong>¿Qué es Lorem Ipsum?</strong></p>','','','2016-12-09 01:11:36',1,1,'published',0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problemas`
--

DROP TABLE IF EXISTS `problemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problemas` (
  `idproblema` int(5) NOT NULL auto_increment,
  `tipoproblema` varchar(40) default NULL,
  `detalleproblema` varchar(40) default NULL,
  PRIMARY KEY  (`idproblema`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problemas`
--

LOCK TABLES `problemas` WRITE;
/*!40000 ALTER TABLE `problemas` DISABLE KEYS */;
INSERT INTO `problemas` VALUES (1,'Financiamiento externo','Para crecer'),(2,'Financiamiento externo','Por problemas financieros'),(3,'Problemas financieros','Falta de capacitación'),(4,'Problemas financieros','Pocos ingresos o esporádicos'),(5,'Problemas financieros','Problemas de gerenciamiento'),(6,'Problemas financieros','Problemas tributarios'),(7,'Ventas','Investigación de mercado'),(8,'Ventas','Bajas ventas'),(9,'Ventas','Dependencia de pocos clientes'),(10,'Ventas','Canales de distribución'),(11,'Ventas','Falta de promoción o publicidad'),(12,'Ventas','Cambios en el mercado'),(13,'Productos','Problemas en productos o servicios'),(14,'Productos','Cambios en la utilización de productos'),(15,'Produccion','Controles de calidad'),(16,'Produccion','Costos de insumos'),(17,'Produccion','Disponibilidad de Insumos'),(18,'Produccion','Capacidad'),(19,'Produccion','Espacio físico'),(20,'Produccion','Sistematización de procesos'),(21,'Administracion','Falta de experiencia'),(22,'Administracion','Poco personal o tiempo'),(23,'Administracion','Poco control sobre el crecimiento'),(24,'Administracion','Falta de planificación'),(25,'Recursos humanos','Contratación'),(26,'Recursos humanos','Retención'),(27,'Recursos humanos','Insatisfacción'),(28,'Recursos humanos','Modalidad de contrato'),(29,'Recursos humanos','Entrenamiento'),(30,'Recursos humanos','Legislación laboral'),(31,'Recursos humanos','Gremios/sindicatos'),(32,'Ambiente regulatorio','Burocracia estatal'),(33,'Ambiente regulatorio','Seguros'),(34,'Ambiente regulatorio','Licencias'),(35,'Ambiente regulatorio','Cambios frecuentes de leyes'),(36,'Ambiente regulatorio','Desconocimiento de las leyes'),(37,'Ambiente economico','Situación macroeconómica'),(38,'Ambiente economico','Tasas de interés'),(39,'Ambiente economico','Inestabilidad'),(40,'Ambiente economico','Tipo de cambio'),(41,'Ambiente economico','Competencia Interna'),(42,'Ambiente economico','Competencia Externa'),(43,'Impuestos','Montos excesivos'),(44,'Impuestos','Complejidad en los pagos'),(45,'Derecho de autor','Propiedad intelectual'),(46,'Otros','Otro');
/*!40000 ALTER TABLE `problemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productividad`
--

DROP TABLE IF EXISTS `productividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productividad` (
  `idproductividad` int(5) NOT NULL,
  `ventas` varchar(40) default NULL,
  `pagoigv` decimal(10,2) default NULL,
  `pagoir` decimal(10,2) default NULL,
  `pagocs` decimal(10,2) default NULL,
  `pagorus` decimal(10,2) default NULL,
  `estadovolventas` varchar(20) default NULL,
  `variacvolventas` varchar(20) default NULL,
  `valorempresa` decimal(12,2) default NULL,
  `ventaempresa` decimal(12,2) default NULL,
  `cremuneracion` decimal(12,2) default NULL,
  `incremento` varchar(40) default NULL,
  `idencuestado` int(6) default NULL,
  `cservbasico` decimal(10,2) default NULL,
  `calquiler` decimal(10,2) default NULL,
  `cotros` decimal(10,2) default NULL,
  `cinsumos` decimal(10,2) default NULL,
  `cmercaderia` decimal(10,2) default NULL,
  `cvotros` decimal(10,2) default NULL,
  `conoceval` varchar(2) default NULL,
  `conocegas` varchar(2) default NULL,
  PRIMARY KEY  (`idproductividad`),
  KEY `f_sp` (`idencuestado`),
  CONSTRAINT `f_sp` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productividad`
--

LOCK TABLES `productividad` WRITE;
/*!40000 ALTER TABLE `productividad` DISABLE KEYS */;
INSERT INTO `productividad` VALUES (11301,'De 45.001 a 100.000',5700.00,1200.00,0.00,0.00,'Disminuyo','10000.0',0.00,150000.00,0.00,'',11301,220.00,0.00,0.00,300.00,0.00,0.00,'SI','SI'),(11302,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Aumento','',0.00,0.00,0.00,'Incremento del numero de clientes',11302,0.00,0.00,0.00,0.00,0.00,0.00,'NO','NO'),(11305,'De 1.000 a 10.000',0.00,0.00,0.00,50.00,'Aumento','',200000.00,0.00,0.00,'Nuevos mercados',11305,0.00,0.00,0.00,0.00,0.00,0.00,'SI','SI'),(11306,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Disminuyo','1000',8000.00,8000.00,0.00,'',11306,50.00,350.00,0.00,0.00,1000.00,0.00,'SI','SI'),(11307,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Aumento','400.00',10000.00,8000.00,1800.00,'Incremento del numero de clientes',11307,200.00,0.00,0.00,2000.00,0.00,0.00,'SI','SI'),(11308,'De 10.001 a 25.000',3500.00,0.00,0.00,0.00,'Aumento','10000.00',0.00,0.00,0.00,'Incremento del numero de clientes',11308,0.00,0.00,0.00,0.00,0.00,0.00,'NO','NO'),(11309,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',30000.00,30000.00,1500.00,'',11309,280.00,0.00,0.00,0.00,1500.00,0.00,'SI','SI'),(11310,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',50000.00,50000.00,0.00,'',11310,1200.00,3500.00,0.00,0.00,2000.00,0.00,'SI','SI'),(11312,'Menor a 1.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',70000.00,50000.00,1200.00,'',11312,550.00,0.00,0.00,300.00,0.00,0.00,'SI','SI'),(11314,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',15000.00,20000.00,800.00,'',11314,250.00,0.00,0.00,0.00,15000.00,0.00,'SI','SI'),(11315,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Disminuyo','150.00',18000.00,25000.00,1200.00,'Incremento de precios',11315,450.00,700.00,0.00,450.00,350.00,0.00,'SI','SI'),(11316,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Disminuyo','100.00',90000.00,100000.00,2000.00,'',11316,500.00,0.00,0.00,3500.00,0.00,0.00,'SI','SI'),(11317,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Disminuyo','',10000.00,20000.00,800.00,'',11317,100.00,300.00,0.00,400.00,0.00,0.00,'SI','SI'),(11318,'De 10.001 a 25.000',0.00,130.00,0.00,0.00,'Se mantuvo igual','',60000.00,90000.00,1200.00,'',11318,90.00,0.00,0.00,6000.00,0.00,0.00,'SI','SI'),(11319,'De 1.000 a 10.000',0.00,0.00,0.00,50.00,'Se mantuvo igual','',0.00,0.00,1000.00,'',11319,300.00,0.00,0.00,0.00,0.00,0.00,'NO','SI'),(11621,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Disminuyo','100.0',0.00,0.00,0.00,'',11621,100.00,1000.00,0.00,4000.00,0.00,0.00,'NO','SI'),(11622,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Disminuyo','',0.00,0.00,0.00,'',11622,100.00,100.00,0.00,400.00,0.00,0.00,'NO','SI'),(11653,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',0.00,0.00,0.00,'',11653,0.00,0.00,0.00,0.00,0.00,0.00,'NO','NO'),(11654,'SIN SELECCIONAR',0.00,0.00,0.00,50.00,'Aumento','600.0',0.00,0.00,2100.00,'Incremento del numero de clientes',11654,150.00,500.00,0.00,1000.00,0.00,0.00,'NO','SI'),(11655,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',0.00,0.00,850.00,'',11655,80.00,0.00,0.00,4000.00,0.00,0.00,'NO','NO'),(11683,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Disminuyo','1000.00',0.00,0.00,1500.00,'',11683,95.00,150.00,0.00,0.00,0.00,0.00,'NO','SI'),(11685,'De 1.000 a 10.000',0.00,0.00,0.00,50.00,'Disminuyo','800.00',0.00,0.00,2900.00,'',11685,145.00,0.00,0.00,0.00,0.00,0.00,'NO','SI'),(11686,'De 1.000 a 10.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',0.00,0.00,2850.00,'',11686,180.00,0.00,0.00,0.00,0.00,0.00,'NO','SI'),(11687,'Menor a 1.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',0.00,0.00,850.00,'',11687,120.00,0.00,0.00,0.00,0.00,0.00,'NO','SI'),(11804,'Menor a 1.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',900.00,600.00,0.00,'',11804,180.00,200.00,0.00,0.00,0.00,0.00,'SI','SI'),(82001,'Menor a 1.000',0.00,0.00,0.00,20.00,'Disminuyo','',0.00,0.00,0.00,'',82001,0.00,0.00,0.00,0.00,0.00,0.00,'NO','NO'),(82002,'Menor a 1.000',0.00,0.00,0.00,20.00,'Se mantuvo igual','',0.00,0.00,0.00,'',82002,12.00,0.00,0.00,0.00,0.00,0.00,'NO','SI');
/*!40000 ALTER TABLE `productividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` char(32) NOT NULL,
  `expire` int(10) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situacionempresa`
--

DROP TABLE IF EXISTS `situacionempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situacionempresa` (
  `idsituacionempresa` int(5) NOT NULL auto_increment,
  `formalizacion` varchar(2) default NULL,
  `motivoformali` varchar(40) default NULL,
  `razonnegocio` varchar(170) default NULL,
  `tipoorg` varchar(100) default NULL,
  `regimen` varchar(40) default NULL,
  `constitucion` varchar(20) default NULL,
  `periodofunc` varchar(40) default NULL,
  `tiempofunc` varchar(20) default NULL,
  `plazoconst` varchar(20) default NULL,
  `idencuestado` int(6) default NULL,
  `detallegiro` varchar(60) default NULL,
  `sunarp` varchar(2) default NULL,
  `remype` varchar(2) default NULL,
  `funmun` varchar(2) default NULL,
  `funsect` varchar(2) default NULL,
  `trabplan` varchar(2) default NULL,
  `essalud` varchar(2) default NULL,
  `sis` varchar(2) default NULL,
  PRIMARY KEY  (`idsituacionempresa`),
  KEY `f_ene` (`idencuestado`),
  CONSTRAINT `f_ene` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`)
) ENGINE=InnoDB AUTO_INCREMENT=82003 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situacionempresa`
--

LOCK TABLES `situacionempresa` WRITE;
/*!40000 ALTER TABLE `situacionempresa` DISABLE KEYS */;
INSERT INTO `situacionempresa` VALUES (11301,'SI','Por los cost. de formalizacion','Ser su propio jefe/horario flexible','Persona Natural','Reg. General del impuest. a la renta','Un solo dueño','Permanente a tiempo completo','Mayor de 10 años','< a 1 año',11301,'NO','NO','SI','NO','NO','SI','SI','SI'),(11302,'SI','Por la presion del estado',',Para obtener mayores ingresos,Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a media jornada','De 3 a 9 años','< a 1 año',11302,'NO','NO','NO','SI','NO','NO','NO','NO'),(11305,'SI','Por la presion del estado','Ser su propio jefe/horario flexible','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','Mayor de 10 años','< a 1 año',11305,'NO','NO','NO','SI','NO','NO','NO','NO'),(11306,'SI','Por iniciativa propia','Ser su propio jefe/horario flexible','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 10 meses a 2 años','< a 1 año',11306,'NO','NO','NO','SI','NO','NO','NO','NO'),(11307,'SI','Por iniciativa propia','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','Mayor de 10 años','<5 años',11307,'NO','NO','NO','SI','NO','NO','NO','NO'),(11308,'SI','Por iniciativa propia','Ser su propio jefe/horario flexible','S.A.C. Socied. Anonima Cerrada','Reg. General del impuest. a la renta','Familiar','Permanente a tiempo completo','De 10 meses a 2 años','< a 1 año',11308,'NO','SI','NO','SI','NO','NO','NO','NO'),(11309,'SI','Por iniciativa propia','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','Mayor de 10 años','< a 1 año',11309,'NO','NO','NO','SI','NO','NO','NO','NO'),(11310,'SI','Por iniciativa propia','Tradicion familiar/herencia','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 3 a 9 años','< a 1 mes',11310,'NO','NO','NO','SI','NO','NO','NO','NO'),(11312,'SI','Por iniciativa propia','Para obtener mayores ingresos','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','Mayor de 10 años','>a 10 años',11312,'NO','NO','NO','SI','NO','NO','NO','NO'),(11314,'NO','Por la presion del estado','Para obtener mayores ingresos','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 2 a 3 años','< a 1 año',11314,'NO','NO','NO','SI','NO','NO','NO','NO'),(11315,'SI','Por la presion del estado','Para obtener mayores ingresos','Persona Natural','Regimen Unico Simplif. RUS','Familiar','Permanente a tiempo completo','De 2 a 3 años','< a 1 año',11315,'NO','NO','NO','SI','NO','NO','NO','NO'),(11316,'SI','Por iniciativa propia','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 2 a 3 años','< a 1 mes',11316,'NO','NO','NO','SI','NO','NO','NO','NO'),(11317,'SI','Por falta de incetivos','No logro encontrar trabajo','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 3 a 9 años','< a 1 año',11317,'NO','NO','NO','NO','NO','NO','NO','NO'),(11318,'SI','Por iniciativa propia','Tradicion familiar/herencia','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 3 a 9 años','< a 1 año',11318,'SI','NO','NO','SI','NO','NO','NO','NO'),(11319,'SI','Por iniciativa propia','Para obtener mayores ingresos','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','Mayor de 10 años','<5 años',11319,'NO','NO','NO','SI','NO','NO','NO','NO'),(11621,'SI','Por los beneficios de ley','Tradicion familiar/herencia','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 3 a 9 años','<5 años',11621,'NO','NO','NO','SI','NO','NO','NO','NO'),(11622,'SI','Por la presion del estado','','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','SIN SELECCIONAR','SIN SELECCIONAR',11622,'NO','NO','NO','SI','NO','NO','NO','NO'),(11653,'SI','Por iniciativa propia','Para obtener mayores ingresos','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 3 a 9 años','< a 1 año',11653,'NO','NO','NO','SI','NO','NO','NO','NO'),(11654,'SI','Por los beneficios de ley','Ser su propio jefe/horario flexible','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 3 a 9 años','< a 1 año',11654,'NO','NO','NO','SI','NO','NO','NO','NO'),(11655,'SI','Por iniciativa propia','Ser su propio jefe/horario flexible','S.A. Sociedad Anonima','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a media jornada','Mayor de 10 años','< a 1 año',11655,'NO','NO','NO','SI','NO','NO','NO','NO'),(11656,'SI','Por iniciativa propia','Ser su propio jefe/horario flexible','S.A. Sociedad Anonima','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a media jornada','Mayor de 10 años','< a 1 año',11656,'NO','NO','NO','SI','NO','NO','NO','NO'),(11683,'SI','Por iniciativa propia','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 2 a 3 años','< a 1 mes',11683,'NO','NO','NO','SI','NO','NO','NO','NO'),(11685,'SI','Por iniciativa propia','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 3 a 9 años','< a 1 año',11685,'NO','NO','NO','SI','NO','NO','NO','NO'),(11686,'SI','Por iniciativa propia','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Familiar','Permanente a tiempo completo','De 3 a 9 años','< a 1 año',11686,'NO','NO','NO','SI','NO','NO','NO','NO'),(11687,'SI','Por los beneficios de ley','Para obtener mayores ingresos','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 2 a 3 años','< a 1 año',11687,'NO','NO','NO','SI','NO','NO','NO','NO'),(11804,'SI','Por desconocimiento','Ser su propio jefe/horario flexible','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 2 a 3 años','< a 1 año',11804,'NO','NO','NO','NO','NO','NO','NO','NO'),(82001,'SI','Por desconocimiento','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a pocas horas a la sem.','De 3 a 9 años','< a 1 año',82001,'NO','NO','NO','NO','NO','NO','NO','NO'),(82002,'SI','Por la presion del estado','Encontro una oportunidad en el mercado','Persona Natural','Regimen Unico Simplif. RUS','Un solo dueño','Permanente a tiempo completo','De 1 a 9 meses','< a 1 mes',82002,'NO','NO','NO','SI','NO','NO','NO','NO');
/*!40000 ALTER TABLE `situacionempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situacionexportador`
--

DROP TABLE IF EXISTS `situacionexportador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situacionexportador` (
  `idexportador` int(5) NOT NULL auto_increment,
  `lugarexporta` varchar(50) default NULL,
  `modalidad` varchar(40) default NULL,
  `motivo` varchar(30) default NULL,
  `productoespecial` varchar(2) default NULL,
  `areaexportador` varchar(2) default NULL,
  `situacionmercado` varchar(2) default NULL,
  `deseoexportador` varchar(2) default NULL,
  `barreras` varchar(250) default NULL,
  `idencuestado` int(6) default NULL,
  `exporta` varchar(2) default NULL,
  PRIMARY KEY  (`idexportador`),
  KEY `f_ex` (`idencuestado`),
  CONSTRAINT `f_ex` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`)
) ENGINE=InnoDB AUTO_INCREMENT=82003 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situacionexportador`
--

LOCK TABLES `situacionexportador` WRITE;
/*!40000 ALTER TABLE `situacionexportador` DISABLE KEYS */;
INSERT INTO `situacionexportador` VALUES (11301,',,','','','NO','NO','NO','SI','',11301,'NO'),(11302,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Simplificacion de la tributacion,Capacitacion técnica,Buscando nuevos mercados',11302,'NO'),(11305,',,','','','NO','NO','NO','NO',',Simplificacion de la tributacion,Programacion de financiamiento,Mejoramiento de la infraestructura',11305,'NO'),(11306,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Programacion de financiamiento,Buscando nuevos mercados',11306,'NO'),(11307,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Programacion de financiamiento,Capacitacion técnica',11307,'NO'),(11308,',,','','','NO','NO','NO','NO',',Simplificacion de la tributacion,Mejoramiento de la tecnologia,Buscando nuevos mercados',11308,'NO'),(11309,',,','','','NO','NO','NO','NO',',Buscando nuevos mercados,Simplificacion de la tributacion,Programacion de financiamiento,Ninguno,Mejoramiento de la tecnologia',11309,'NO'),(11310,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Simplificacion de la tributacion,Programacion de financiamiento,Capacitacion técnica,Buscando nuevos mercados',11310,'NO'),(11312,',,','','','NO','NO','NO','NO',',Simplificacion de la tributacion,Programacion de financiamiento',11312,'NO'),(11314,',,','','','NO','NO','NO','NO',',Simplificacion de la tributacion,Programacion de financiamiento',11314,'NO'),(11315,',,','','','NO','NO','NO','NO',',Capacitacion técnica,Buscando nuevos mercados,Simplificacion de la tributacion,Mejoramiento de la tecnologia,Mejoramiento de la infraestructura',11315,'NO'),(11316,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Capacitacion técnica,Buscando nuevos mercados,Simplificacion de la tributacion,Mejoramiento de la tecnologia',11316,'NO'),(11317,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Programacion de financiamiento,Capacitacion técnica',11317,'NO'),(11318,',,','','','NO','NO','NO','SI','Simplificacion de la burocracia,Simplificacion de la tributacion,Capacitacion técnica,Programacion de financiamiento',11318,'NO'),(11319,',,','','','NO','NO','NO','SI','Simplificacion de la burocracia,Simplificacion de la tributacion,Buscando nuevos mercados,Programacion de financiamiento,Mejoramiento de la tecnologia',11319,'NO'),(11621,',,','','','NO','NO','NO','SI','Simplificacion de la burocracia',11621,'NO'),(11622,',,','','','NO','NO','NO','SI',',Programacion de financiamiento,Mejoramiento de la infraestructura',11622,'NO'),(11653,',,','','','NO','NO','NO','NO',',Simplificacion de la tributacion',11653,'NO'),(11654,',,','','','NO','NO','NO','NO',',Mejoramiento de la infraestructura,Mejoramiento de la tecnologia',11654,'NO'),(11655,',,','','','NO','NO','NO','NO','',11655,'NO'),(11683,',,','','','NO','NO','NO','SI',',Simplificacion de la tributacion,Programacion de financiamiento',11683,'NO'),(11685,',,','','','NO','NO','NO','SI','Simplificacion de la burocracia,Programacion de financiamiento,Mejoramiento de la tecnologia',11685,'NO'),(11686,',,','','','NO','NO','NO','SI',',Mejoramiento de la tecnologia,Capacitacion técnica',11686,'NO'),(11687,',,','','','NO','NO','NO','NO',',Buscando nuevos mercados',11687,'NO'),(11804,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Simplificacion de la tributacion,Programacion de financiamiento,Capacitacion técnica,Buscando nuevos mercados',11804,'NO'),(82001,',,','','','NO','NO','NO','NO',',Capacitacion técnica',82001,'NO'),(82002,',,','','','NO','NO','NO','NO','Simplificacion de la burocracia,Capacitacion técnica',82002,'NO');
/*!40000 ALTER TABLE `situacionexportador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situacionproblema`
--

DROP TABLE IF EXISTS `situacionproblema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situacionproblema` (
  `idsituacionproblema` int(8) NOT NULL auto_increment,
  `idproblema` int(5) default NULL,
  `idencuestado` int(6) default NULL,
  PRIMARY KEY  (`idsituacionproblema`),
  KEY `f_ee` (`idencuestado`),
  KEY `f_pr` (`idproblema`),
  CONSTRAINT `f_ee` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`),
  CONSTRAINT `f_pr` FOREIGN KEY (`idproblema`) REFERENCES `problemas` (`idproblema`)
) ENGINE=InnoDB AUTO_INCREMENT=820023 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situacionproblema`
--

LOCK TABLES `situacionproblema` WRITE;
/*!40000 ALTER TABLE `situacionproblema` DISABLE KEYS */;
INSERT INTO `situacionproblema` VALUES (113010,22,11301),(113011,43,11301),(113020,6,11302),(113021,43,11302),(113060,1,11306),(113061,4,11306),(113062,22,11306),(113063,24,11306),(113070,2,11307),(113071,4,11307),(113072,9,11307),(113073,22,11307),(113074,38,11307),(113080,22,11308),(113090,8,11309),(113091,11,11309),(113092,17,11309),(113100,4,11310),(113101,6,11310),(113102,22,11310),(113103,43,11310),(113120,9,11312),(113121,22,11312),(113122,43,11312),(113123,44,11312),(113140,8,11314),(113141,12,11314),(113142,43,11314),(113143,44,11314),(113150,2,11315),(113151,11,11315),(113152,43,11315),(113153,44,11315),(113160,5,11316),(113161,6,11316),(113162,43,11316),(113163,44,11316),(113170,8,11317),(113171,9,11317),(113172,43,11317),(113173,44,11317),(113180,1,11318),(113181,8,11318),(113182,12,11318),(113183,43,11318),(113184,44,11318),(113190,8,11319),(113191,9,11319),(113192,24,11319),(113193,43,11319),(113194,44,11319),(116210,4,11621),(116211,8,11621),(116212,9,11621),(116213,32,11621),(116214,1,11621),(116220,8,11622),(116221,16,11622),(116222,22,11622),(116223,27,11622),(116224,34,11622),(116540,11,11654),(116541,19,11654),(116542,38,11654),(116543,43,11654),(116550,16,11655),(116551,39,11655),(116552,43,11655),(116830,4,11683),(116831,14,11683),(116832,21,11683),(116833,27,11683),(116834,36,11683),(116835,41,11683),(116836,44,11683),(116860,5,11686),(116861,8,11686),(116862,14,11686),(116863,24,11686),(116864,35,11686),(116865,41,11686),(116866,44,11686),(116870,4,11687),(116871,8,11687),(116872,16,11687),(116873,38,11687),(116874,43,11687),(118040,1,11804),(118041,8,11804),(118042,23,11804),(118043,24,11804),(820010,1,82001),(820011,3,82001),(820012,7,82001),(820020,4,82002),(820021,8,82002),(820022,9,82002);
/*!40000 ALTER TABLE `situacionproblema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situaciontrabajador`
--

DROP TABLE IF EXISTS `situaciontrabajador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situaciontrabajador` (
  `idsituaciontrabajador` int(5) NOT NULL auto_increment,
  `categoria` varchar(50) default NULL,
  `numvaplan` int(3) default NULL,
  `numvarph` int(3) default NULL,
  `numvanin` int(3) default NULL,
  `nummuplan` int(3) default NULL,
  `nummurph` int(3) default NULL,
  `nummunin` int(3) default NULL,
  `totaltrab` int(3) default NULL,
  `remunvar` varchar(10) default NULL,
  `remunmu` varchar(10) default NULL,
  `nivelsin` int(3) default NULL,
  `nivelini` int(3) default NULL,
  `nivelpri` int(3) default NULL,
  `nivelse` int(3) default NULL,
  `niveltec` int(3) default NULL,
  `nivelsu` int(3) default NULL,
  `nivelmax` int(3) default NULL,
  `idencuestado` int(6) default NULL,
  PRIMARY KEY  (`idsituaciontrabajador`),
  KEY `f_tr` (`idencuestado`),
  CONSTRAINT `f_tr` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`)
) ENGINE=InnoDB AUTO_INCREMENT=820021 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situaciontrabajador`
--

LOCK TABLES `situaciontrabajador` WRITE;
/*!40000 ALTER TABLE `situaciontrabajador` DISABLE KEYS */;
INSERT INTO `situaciontrabajador` VALUES (113010,'Empleador y/o propietario',1,0,0,0,0,0,1,'C','0',0,0,0,0,0,1,0,11301),(113011,'Operativos permanentes',1,0,0,0,0,0,1,'C','0',0,0,0,0,0,1,0,11301),(113020,'Administradores permanentes',0,0,1,0,0,0,1,'A','0',0,0,0,1,0,0,0,11302),(113021,'Administradores permanentes',0,0,0,0,0,1,1,'0','A',0,0,0,0,1,0,0,11302),(113022,'Operativos eventuales',0,0,1,0,0,0,1,'A','0',0,0,0,1,0,0,0,11302),(113023,'Operativos eventuales',0,0,0,0,0,1,1,'0','A',0,0,0,1,0,0,0,11302),(113050,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,0,0,1,0,11305),(113051,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,0,1,0,11305),(113060,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','B',0,0,0,1,0,0,0,11306),(113070,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,1,0,0,0,11307),(113071,'Practicantes',0,0,1,0,0,0,1,'A','0',0,0,0,1,0,0,0,11307),(113080,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,0,1,0,11308),(113081,'Operativos permanentes',0,0,1,0,0,0,1,'C','0',0,0,0,0,0,1,0,11308),(113082,'Operativos eventuales',0,0,1,0,0,0,1,'C','0',0,0,0,0,0,1,0,11308),(113083,'Practicantes',0,0,1,0,0,0,1,'A','0',0,0,0,0,0,1,0,11308),(113090,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,0,0,1,0,11309),(113091,'Operativos permanentes',0,0,0,0,1,0,1,'0','C',0,0,0,0,0,1,0,11309),(113100,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,1,0,0,0,11310),(113101,'Operativos permanentes',0,0,2,0,0,0,2,'C','0',0,0,0,2,0,0,0,11310),(113120,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,0,0,1,0,11312),(113121,'Administradores permanentes',0,0,0,0,0,1,1,'0','C',0,0,0,0,0,1,0,11312),(113140,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','A',0,0,0,1,0,0,0,11314),(113150,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,0,1,0,11315),(113151,'Administradores eventuales',0,0,1,0,0,0,1,'C','0',0,0,0,0,0,1,0,11315),(113160,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,0,1,0,11316),(113161,'Administradores permanentes',0,0,1,0,0,0,1,'A','0',0,0,0,1,0,0,0,11316),(113162,'Administradores permanentes',0,0,0,0,0,1,1,'0','A',0,0,0,1,0,0,0,11316),(113170,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,0,1,0,0,11317),(113180,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,0,0,1,0,11318),(113190,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,0,1,0,11319),(116210,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,1,0,0,0,11621),(116211,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,1,0,0,11621),(116220,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,0,1,0,0,11622),(116221,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,1,0,0,0,11622),(116530,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,1,0,0,0,11653),(116531,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','A',0,0,0,1,0,0,0,11653),(116540,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,1,0,0,0,0,11654),(116541,'Operativos permanentes',0,0,0,0,0,1,1,'0','A',0,0,0,1,0,0,0,11654),(116542,'Operativos eventuales',0,0,0,0,0,1,1,'0','A',0,0,0,1,0,0,0,11654),(116550,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','A',0,0,0,0,0,1,0,11655),(116830,'Empleador y/o propietario',0,0,1,0,0,0,1,'C','0',0,0,0,0,1,0,0,11683),(116850,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,0,1,0,11685),(116851,'Operativos permanentes',0,0,0,0,0,1,1,'0','B',0,0,0,0,1,0,0,11685),(116852,'Operativos eventuales',0,0,1,0,0,0,1,'A','0',0,0,0,1,0,0,0,11685),(116860,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,0,1,0,0,11686),(116861,'Operativos eventuales',0,0,0,0,0,1,1,'0','A',0,0,0,0,1,0,0,11686),(116870,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','C',0,0,0,1,0,0,0,11687),(116871,'Operativos eventuales',0,0,0,0,0,1,1,'0','A',0,0,0,1,0,0,0,11687),(118040,'Empleador y/o propietario',0,0,0,0,0,1,1,'0','A',0,0,0,0,1,0,0,11804),(820010,'Empleador y/o propietario',0,0,1,0,0,0,1,'A','0',0,0,1,0,0,0,0,82001),(820020,'Empleador y/o propietario',0,0,0,0,0,1,1,'','A',0,0,0,1,0,0,0,82002);
/*!40000 ALTER TABLE `situaciontrabajador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tecnologia`
--

DROP TABLE IF EXISTS `tecnologia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tecnologia` (
  `idtecnologia` int(5) NOT NULL,
  `servicios` varchar(120) default NULL,
  `software` varchar(120) default NULL,
  `apoyo` varchar(160) default NULL,
  `redes` varchar(50) default NULL,
  `informacion` varchar(2) default NULL,
  `pedido` varchar(2) default NULL,
  `idencuestado` int(6) default NULL,
  PRIMARY KEY  (`idtecnologia`),
  KEY `f_eee` (`idencuestado`),
  CONSTRAINT `f_eee` FOREIGN KEY (`idencuestado`) REFERENCES `encuestados` (`idencuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tecnologia`
--

LOCK TABLES `tecnologia` WRITE;
/*!40000 ALTER TABLE `tecnologia` DISABLE KEYS */;
INSERT INTO `tecnologia` VALUES (11301,'Linea telef//celular,Conexion a internet,Equipos informaticos,Medios de transporte','',',Identificacion de nuevas oportunidades de negocio',',Pagina web,Whatsapp','SI','SI',11301),(11302,'Linea telef//celularLinea telef//celularLinea telef//celular','NO',',Identificacion de nuevas oportunidades de negocio','NO','NO','NO',11302),(11305,'Linea telef//celular,Medios de transporte,Conexion a internet,Equipos informaticos','Almacen/Logistica',',Diseño y redistribucion de planta y/o almacenes','Facebook','SI','SI',11305),(11306,'Linea telef//celular','NO',',Identificacion de nuevas oportunidades de negocio','NO','NO','NO',11306),(11307,'Linea telef//celular','NO',',Desarrollo de nuevos productos/servicios','NO','NO','NO',11307),(11308,'Linea telef//celular,Conexion a internet,Equipos informaticos,Medios de transporte','NO','Conocer buenas practicas en empresas similares,Identificacion de nuevas oportunidades de negocio','GMAIL','SI','NO',11308),(11309,'','NO',',Mejora de los procesos de gestion de calidad','NO','NO','NO',11309),(11310,'','NO',',Mejora de los procesos de gestion de calidad','NO','NO','NO',11310),(11312,'Linea telef//celular,Conexion a internet','NO','Conocer buenas practicas en empresas similares,Identificacion de nuevas oportunidades de negocio','Facebook','NO','SI',11312),(11314,'','NO','Conocer buenas practicas en empresas similares','NO','NO','NO',11314),(11315,'Linea telef//celular','NO',',Desarrollo de nuevos productos/servicios','NO','NO','NO',11315),(11316,'Linea telef//celular,Conexion a internet','NO','Conocer buenas practicas en empresas similares,Identificacion de nuevas oportunidades de negocio,Diseño y redistribucion de planta y/o almacenes','NO','NO','NO',11316),(11317,'Linea telef//celular','NO','Conocer buenas practicas en empresas similares,Identificacion de nuevas oportunidades de negocio','NO','NO','NO',11317),(11318,'Linea telef//celular,Conexion a internet','NO','Conocer buenas practicas en empresas similares','NO','NO','NO',11318),(11319,'Linea telef//celular','NO','Conocer buenas practicas en empresas similares','Facebook','SI','NO',11319),(11621,'','NO',',Identificacion de nuevas oportunidades de negocio','NO','NO','NO',11621),(11622,'Linea telef//celular','NO',',Identificacion de nuevas oportunidades de negocio','NO','NO','NO',11622),(11653,'','NO','Conocer buenas practicas en empresas similares,Identificacion de nuevas oportunidades de negocio,Mejora de los procesos de gestion de calidad','NO','NO','NO',11653),(11654,'Linea telef//celular','NO','','NO','NO','NO',11654),(11655,'Linea telef//celular','NO','Conocer buenas practicas en empresas similares','Facebook','SI','NO',11655),(11683,'Linea telef//celular','NO','','NO','NO','NO',11683),(11685,'Linea telef//celular,Conexion a internet','NO','Conocer buenas practicas en empresas similares,Identificacion de nuevas oportunidades de negocio','NO','NO','NO',11685),(11686,',Conexion a internet','NO','Conocer buenas practicas en empresas similares','Facebook,Whatsapp','NO','NO',11686),(11687,'Linea telef//celular','NO','','NO','NO','NO',11687),(11804,'Linea telef//celular','NO','.MERCADERIA MAYORISA','NO','NO','NO',11804),(82001,'Linea telef//celular','NO','','NO','NO','NO',82001),(82002,'NO','NO','','NO','NO','NO',82002);
/*!40000 ALTER TABLE `tecnologia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicacion`
--

DROP TABLE IF EXISTS `ubicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicacion` (
  `idubicacion` int(5) NOT NULL auto_increment,
  `provincia` varchar(50) default NULL,
  `distrito` varchar(50) default NULL,
  `iddistrito` int(5) default NULL,
  `idprovincia` int(5) default NULL,
  PRIMARY KEY  (`idubicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicacion`
--

LOCK TABLES `ubicacion` WRITE;
/*!40000 ALTER TABLE `ubicacion` DISABLE KEYS */;
INSERT INTO `ubicacion` VALUES (1,'HUAMANGA','AYACUCHO',1,1),(2,'HUAMANGA','SAN JUAN BAUTISTA',2,1),(3,'HUAMANGA','JESUS NAZARENO',3,1),(4,'HUAMANGA','CARMEN ALTO',4,1),(5,'HUAMANGA','ANDRES A. CACERES',5,1),(6,'HUAMANGA','VINCHOS',6,1),(7,'HUAMANGA','QUINUA',7,1),(8,'HUANTA','HUANTA',1,2),(9,'HUANTA','SIVIA',2,2),(10,'HUANTA','LLOCHEGUA',3,2),(11,'HUANTA','LURICOCHA',4,2),(12,'HUANTA','SANTILLANA',5,2),(13,'LA MAR','AYNA',1,3),(14,'LA MAR','SANTA ROSA',2,3),(15,'LA MAR','SAN MIGUEL',3,3),(16,'LA MAR','TAMBO',4,3),(17,'LA MAR','ANCO',5,3),(18,'LA MAR','SAMUGARI',6,3),(19,'LA MAR','CHUNGUI',7,3),(20,'CANGALLO','CANGALLO',1,4),(21,'CANGALLO','LOS MOROCHUCOS',2,4),(22,'CANGALLO','CHUSCHI',3,4),(23,'CANGALLO','PARAS',4,4),(24,'VILCASHUAMAN','VILCASHUAMAN',1,5),(25,'VILCASHUAMAN','VISCHONGO',2,5),(30,'VICTOR FAJARDO','CANARIA',1,6),(31,'VICTOR FAJARDO','HUANCAPI',2,6),(32,'VICTOR FAJARDO','SARHUA',3,6),(33,'HUANCASANCOS','SANCOS',1,7),(34,'HUANCASANCOS','SACSAMARCA',2,7),(35,'SUCRE','QUEROBAMBA',1,8),(36,'SUCRE','SORAS',2,8),(37,'SUCRE','CHILCAYOC',3,8),(38,'LUCANAS','PUQUIO',1,9),(39,'LUCANAS','LUCANAS',2,9),(40,'LUCANAS','SANTA LUCIA',3,9),(41,'LUCANAS','CARMEN SALCEDO',4,9),(42,'LUCANAS','CABANA',5,9),(43,'PARINACOCHAS','CORA CORA',1,13),(44,'PARINACOCHAS','PULLO',2,13),(45,'PARINACOCHAS','PUYUSCA',3,13),(46,'PARINACOCHAS','CHUMPI',4,13),(47,'PAUCAR DEL SARA SARA','PAUSA',1,14),(48,'PAUCAR DEL SARA SARA','LAMPA',2,14),(49,'PAUCAR DEL SARA SARA','MARCABAMBA',3,14);
/*!40000 ALTER TABLE `ubicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_meta`
--

DROP TABLE IF EXISTS `user_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_meta` (
  `id` int(6) NOT NULL auto_increment,
  `user` int(6) NOT NULL,
  `extend` int(6) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `item` (`user`),
  KEY `extend` (`extend`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_meta`
--

LOCK TABLES `user_meta` WRITE;
/*!40000 ALTER TABLE `user_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(6) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(140) NOT NULL,
  `real_name` varchar(140) NOT NULL,
  `bio` text NOT NULL,
  `status` enum('inactive','active') NOT NULL,
  `role` enum('administrator','editor','user') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$12$Kj4Oh9O3XhJfebGILCwjdeu/JhYcBaoSoo3mj3vF2hnQbArtOfUva','admin@admin.com','Administrator','The bouse','active','administrator');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_posts`
--

DROP TABLE IF EXISTS `web_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_posts` (
  `id` int(6) NOT NULL auto_increment,
  `titulo` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `html` mediumtext NOT NULL,
  `estado` enum('papelera','publicado','archivado') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `usuario_id` int(6) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `status` (`estado`),
  KEY `slug` (`slug`(255)),
  KEY `fk_autor_u45tgf6uy45_idx` (`usuario_id`),
  CONSTRAINT `fk_autor_u45tgf6uy45` FOREIGN KEY (`usuario_id`) REFERENCES `web_usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_posts`
--

LOCK TABLES `web_posts` WRITE;
/*!40000 ALTER TABLE `web_posts` DISABLE KEYS */;
INSERT INTO `web_posts` VALUES (1,'titulo demo','titulo-demo','ggg','<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"26\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgaKAAwAA\">\r\n<div class=\"s\">\r\n<div><span class=\"st\">get rid of coding characters.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"35\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgjKAEwAQ\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/2296347/how-can-i-keep-a-value-in-a-text-input-after-a-submit-occurs\">php - How can I keep a value in a text input after a submit occurs ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/.../how-can-i-<strong>keep</strong>-a-<strong>value-in</strong>-a-text-<strong>input</strong>-aft...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"35\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgjKAEwAQ\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/2296347/how-can-i-keep-a-value-in-a-text-input-after-a-submit-occurs&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">19 feb. 2010 - </span>Place the variable you need into the \"<em>value</em>\" field of your <em>input</em>-tag like this: &lt;<em>input</em> ... I want to validate a form to make sure a user writes in a name and last name. If a user writes in only his last name, the form should show again&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"44\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgsKAIwAg\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/2246227/keep-values-selected-after-form-submission\">php - Keep values selected after form submission - Stack Overflow</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/.../<strong>keep</strong>-<strong>values</strong>-selected-after-<strong>form</strong>-<strong>submission</strong></cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"44\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgsKAIwAg\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/2246227/keep-values-selected-after-form-submission&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">11 feb. 2010 - </span>To avoid many if-else structures, let javascript do the trick automatically:<select>value=\"\'.$loc.\'\"&gt;\'.$loc.\'\'; } } echo \'</select>&lt;<em>input</em> type=\"<wbr /><em>submit</em>\" name=\"<em>submit</em>\" <em>value</em>=\"<em>Submit</em>\" class=\"<em>submit\" /&gt; &gt;\';&nbsp;...</em></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"53\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg1KAMwAw\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/5514897/keep-form-values-after-submit-php\">Keep form values after submit PHP - Stack Overflow</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/questions/.../<strong>keep</strong>-<strong>form</strong>-<strong>values</strong>-after-<strong>submit</strong>-<strong>p</strong>...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"53\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg1KAMwAw\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/5514897/keep-form-values-after-submit-php&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">1 abr. 2011 - </span>To have the radio buttons and checkboxes pre-checked, you need to add the ... &lt;<wbr /><em>input</em> type=\"checkbox\" name=\"foo\" <em>value</em>=\"bar\" &lt;?<em>php</em> echo&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"62\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg-KAQwBA\">\r\n<h3 class=\"r\"><a href=\"http://www.homeandlearn.co.uk/php/php4p9.html\">PHP Tutorials: Keeping the data the user entered - Home and Learn</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">www.homeandlearn.co.uk/<strong>php</strong>/<strong>php</strong>4p9.<strong>html</strong></cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"62\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg-KAQwBA\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://www.homeandlearn.co.uk/php/php4p9.html&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">When the basicForm.<em>php form</em> is <em>submitted</em>, the details that the user entered get ... this <em>value</em> will <em>keep</em> re-appearing in the textbox when the page is <em>submitted</em>.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"70\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QtgIIRigFMAU\">\r\n<h3 class=\"r\"><a href=\"https://www.youtube.com/watch?v=Eq7bGWQsOdI\">PHP Tutorial: How To: Keep Form Data After Submission [Quick Tip ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"th _lyb _YQd\" style=\"height: 65px; width: 116px;\"><a href=\"https://www.youtube.com/watch?v=Eq7bGWQsOdI\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QuAIISDAF\"><img id=\"vidthumb6\" class=\"_WCg\" style=\"top: -11px;\" src=\"data:image/jpeg;base64,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\" alt=\"Video de php preserve input values on form submit\" width=\"116\" height=\"87\" /><span class=\"vdur _dwc\">▶&nbsp;7:44</span></a></div>\r\n</div>\r\n<div style=\"margin-left: 125px;\">\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.youtube.com/watch?v=Eq7bGWQsOdI</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"70\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QtgIIRigFMAU\">\r\n<div class=\"s\">\r\n<div style=\"margin-left: 125px;\">\r\n<div class=\"f slp\">12 ago. 2011 - Subido por SlothScripts</div>\r\n<span class=\"st\">In this tutorial I show you how to save the <em>value of</em> a <em>form</em> field after it has been <em>submitted</em>. This is useful for ...</span></div>\r\n<div style=\"clear: left;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"76\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhMKAYwBg\">\r\n<h3 class=\"r\"><a href=\"https://www.sitepoint.com/community/t/retaining-form-data-after-submit/1772\">Retaining Form Data after Submit - PHP - The SitePoint Forums</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.sitepoint.com/.../t/<strong>retain</strong>ing-<strong>form</strong>-data...<strong>submit</strong>/1772</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"76\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhMKAYwBg\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=https://www.sitepoint.com/community/t/retaining-form-data-after-submit/1772&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">28 oct. 2004 - </span>echo(\'&lt;<em>input</em> type=hidden name=<em>submitted value</em>=1&gt;\'); echo(\'&lt;<em>input</em> ... Some browsers <em>keep</em> that data; i just tried firefox and it kept the data. Could it be ... The difference is that my <em>form</em> is index.<em>php</em>, and it\'s action is mail.<em>php</em>.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"85\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhVKAcwBw\">\r\n<h3 class=\"r\"><a href=\"http://www.w3schools.com/php/php_form_complete.asp\">PHP 5 Complete Form Example - W3Schools</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">www.w3schools.com/<strong>php</strong>/<strong>php</strong>_<strong>form</strong>_complete.asp</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"85\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhVKAcwBw\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://www.w3schools.com/php/php_form_complete.asp&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">This chapter shows how to <em>keep</em> the <em>values</em> in the <em>input</em> fields when the user hits the <em>submit</em> button. <em>PHP</em> - <em>Keep</em> The <em>Values</em> in The <em>Form</em>. To show the <em>values</em> in&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"93\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhdKAgwCA\">\r\n<h3 class=\"r\"><a href=\"http://coursesweb.net/php-mysql/data-form-fields-after-submit_t\">Keep data in form fields after submitting the form - CoursesWeb.net</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">coursesweb.net/<strong>php</strong>-mysql/data-<strong>form</strong>-fields-after-<strong>submit</strong>_t</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"93\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhdKAgwCA\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://coursesweb.net/php-mysql/data-form-fields-after-submit_t&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">How to get and <em>keep</em> data in <em>form</em> fields after <em>submitting</em> the <em>form</em>, <em>PHP</em> tutorial. ... method=\"post\"&gt; Name: &lt;<em>input</em> type=\"text\" name=\"fname\" id=\"fname\" <em>value</em>=\"\'.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"101\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhlKAkwCQ\">\r\n<h3 class=\"r\"><a href=\"https://www.dougv.com/2009/06/retaining-values-in-a-form-following-php-postback-and-clearing-form-values-after-successful-php-form-processing/\">Retaining Values In A Form Following PHP Postback And Clearing ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.dougv.com/.../<strong>retain</strong>ing-<strong>values</strong>-in-a-<strong>form</strong>-following-...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"res\" class=\"med\">\r\n<div id=\"search\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QGggY\">\r\n<div id=\"ires\" data-async-context=\"query:php%20preserve%20input%20values%20on%20form%20submit\">\r\n<div id=\"rso\">\r\n<div class=\"_NId\">\r\n<div class=\"srg\">\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"101\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhlKAkwCQ\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=https://www.dougv.com/2009/06/retaining-values-in-a-form-following-php-postback-and-clearing-form-values-after-successful-php-form-processing/&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">13 jun. 2009 - </span>Retaining <em>Form Values</em> On <em>PHP</em> Postback .... adds in code to <em>send</em> a curl request to the handler for the page if all <em>input</em> is valid. .... I\'ve just started with OOP, and I\'m making an app that uses objects that need to <em>retain</em> their data.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"bottomads\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div id=\"tadsb\" class=\"_Ak c\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0Q9AkIbg\">\r\n<h2 class=\"_hM\">&nbsp;</h2>\r\n<ol>\r\n<li class=\"ads-ad\" data-hveid=\"111\">\r\n<h3><a id=\"vs3p1c0\" class=\"r-imENwByu6s6k\" href=\"https://console.cloud.google.com/launcher?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q2-cloud-latam-launcher-skws-freetrial&amp;\" data-preconnect-urls=\"https://console.cloud.google.com/,http://clickserve.dartsearch.net/\">PHP - Google Cloud - Sus Paquetes de Software&lrm;</a></h3>\r\n<div class=\"ads-visurl\"><span class=\"_mB\">Anuncio</span><cite class=\"_WGk\">cloud.google.com/launcher</cite>&lrm;</div>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<div class=\"col\" style=\"width: 0;\">\r\n<div id=\"center_col\" style=\"visibility: visible;\">\r\n<div id=\"bottomads\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div id=\"tadsb\" class=\"_Ak c\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0Q9AkIbg\">\r\n<ol>\r\n<li class=\"ads-ad\" data-hveid=\"111\">\r\n<div class=\"ellip ads-creative\">Sus Paquetes de Software Preferidos Al Alcance de un Click. Probar Agora!</div>\r\n<div class=\"ellip\">Paga Solo Por lo que Usas&nbsp;&middot;&nbsp;Prueba Gratis&nbsp;&middot;&nbsp;Implementaci&oacute;n Rapida&nbsp;&middot;&nbsp;Implem&eacute;ntelo en Minutos</div>\r\n<ul class=\"_yEo\">\r\n<li><a id=\"vads-3-0-1-1-0\" href=\"https://cloud.google.com/customers/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Historias de &Eacute;xito</a></li>\r\n<li><a id=\"vads-3-0-1-1-1\" href=\"https://cloud.google.com/contact/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Cominece Ahora</a></li>\r\n<li><a id=\"vads-3-0-1-1-2\" href=\"http://cloud.google.com/docs/compare/aws/\">Competitor Guide</a></li>\r\n<li><a id=\"vads-3-0-1-1-3\" href=\"https://cloud.google.com/pricing/#prediction-api?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Precios</a></li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<div id=\"extrares\" class=\"med\">&nbsp;</div>\r\n<div>\r\n<div id=\"foot\">\r\n<div id=\"cljs\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>\r\n<div id=\"navcnt\">\r\n<table id=\"nav\" style=\"border-collapse: collapse; text-align: left; margin: 30px auto 30px;\">\r\n<tbody>\r\n<tr valign=\"top\">\r\n<td class=\"b navend\">&nbsp;</td>\r\n<td class=\"cur\">1</td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=10&amp;sa=N\">2</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=20&amp;sa=N\">3</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=30&amp;sa=N\">4</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=40&amp;sa=N\">5</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=50&amp;sa=N\">6</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=60&amp;sa=N\">7</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=70&amp;sa=N\">8</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=80&amp;sa=N\">9</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=90&amp;sa=N\">10</a></td>\r\n<td class=\"b navend\"><a id=\"pnnext\" class=\"pn\" style=\"text-align: left;\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=10&amp;sa=N\"><span style=\"display: block; margin-left: 53px;\">Siguiente</span></a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div id=\"gfn\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>\r\n<span id=\"fvf\" data-jibp=\"h\" data-jiis=\"uc\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"rhscol\" class=\"col\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>','papelera','2016-12-08 11:58:02','2016-12-09 12:18:21',1),(2,'lorem ipsumlorem ipsumlorem ipsumlorem ipsum lorem ipsum lorem ipsum','ttttt-t-r-ert','rtyryryry','ryrtyrtytryry','archivado','2016-12-08 11:58:02','0000-00-00 00:00:00',1),(3,'titulo demo','titulo-demo','demo','<p>gggg</p>','papelera','2016-12-08 18:11:33','2016-12-09 12:19:31',1),(4,'defg','defg','hijk','<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"26\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgaKAAwAA\">\r\n<div class=\"s\">\r\n<div><span class=\"st\">abc</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"35\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgjKAEwAQ\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/2296347/how-can-i-keep-a-value-in-a-text-input-after-a-submit-occurs\">php - How can I keep a value in a text input after a submit occurs ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/.../how-can-i-<strong>keep</strong>-a-<strong>value-in</strong>-a-text-<strong>input</strong>-aft...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"35\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgjKAEwAQ\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/2296347/how-can-i-keep-a-value-in-a-text-input-after-a-submit-occurs&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">19 feb. 2010 - </span>Place the variable you need into the \"<em>value</em>\" field of your <em>input</em>-tag like this: &lt;<em>input</em> ... I want to validate a form to make sure a user writes in a name and last name. If a user writes in only his last name, the form should show again&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"44\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgsKAIwAg\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/2246227/keep-values-selected-after-form-submission\">php - Keep values selected after form submission - Stack Overflow</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/.../<strong>keep</strong>-<strong>values</strong>-selected-after-<strong>form</strong>-<strong>submission</strong></cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"44\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgsKAIwAg\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/2246227/keep-values-selected-after-form-submission&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">11 feb. 2010 - </span>To avoid many if-else structures, let javascript do the trick automatically:<select>value=\"\'.$loc.\'\"&gt;\'.$loc.\'\'; } } echo \'</select>&lt;<em>input</em> type=\"<wbr /><em>submit</em>\" name=\"<em>submit</em>\" <em>value</em>=\"<em>Submit</em>\" class=\"<em>submit\" /&gt; &gt;\';&nbsp;...</em></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"53\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg1KAMwAw\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/5514897/keep-form-values-after-submit-php\">Keep form values after submit PHP - Stack Overflow</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/questions/.../<strong>keep</strong>-<strong>form</strong>-<strong>values</strong>-after-<strong>submit</strong>-<strong>p</strong>...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"53\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg1KAMwAw\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/5514897/keep-form-values-after-submit-php&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">1 abr. 2011 - </span>To have the radio buttons and checkboxes pre-checked, you need to add the ... &lt;<wbr /><em>input</em> type=\"checkbox\" name=\"foo\" <em>value</em>=\"bar\" &lt;?<em>php</em> echo&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"62\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg-KAQwBA\">\r\n<h3 class=\"r\"><a href=\"http://www.homeandlearn.co.uk/php/php4p9.html\">PHP Tutorials: Keeping the data the user entered - Home and Learn</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">www.homeandlearn.co.uk/<strong>php</strong>/<strong>php</strong>4p9.<strong>html</strong></cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"62\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg-KAQwBA\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://www.homeandlearn.co.uk/php/php4p9.html&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">When the basicForm.<em>php form</em> is <em>submitted</em>, the details that the user entered get ... this <em>value</em> will <em>keep</em> re-appearing in the textbox when the page is <em>submitted</em>.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"70\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QtgIIRigFMAU\">\r\n<h3 class=\"r\"><a href=\"https://www.youtube.com/watch?v=Eq7bGWQsOdI\">PHP Tutorial: How To: Keep Form Data After Submission [Quick Tip ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"th _lyb _YQd\" style=\"height: 65px; width: 116px;\"><a href=\"https://www.youtube.com/watch?v=Eq7bGWQsOdI\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QuAIISDAF\"><img id=\"vidthumb6\" class=\"_WCg\" style=\"top: -11px;\" src=\"data:image/jpeg;base64,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\" alt=\"Video de php preserve input values on form submit\" width=\"116\" height=\"87\" /><span class=\"vdur _dwc\">▶&nbsp;7:44</span></a></div>\r\n</div>\r\n<div style=\"margin-left: 125px;\">\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.youtube.com/watch?v=Eq7bGWQsOdI</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"70\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QtgIIRigFMAU\">\r\n<div class=\"s\">\r\n<div style=\"margin-left: 125px;\">\r\n<div class=\"f slp\">12 ago. 2011 - Subido por SlothScripts</div>\r\n<span class=\"st\">In this tutorial I show you how to save the <em>value of</em> a <em>form</em> field after it has been <em>submitted</em>. This is useful for ...</span></div>\r\n<div style=\"clear: left;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"76\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhMKAYwBg\">\r\n<h3 class=\"r\"><a href=\"https://www.sitepoint.com/community/t/retaining-form-data-after-submit/1772\">Retaining Form Data after Submit - PHP - The SitePoint Forums</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.sitepoint.com/.../t/<strong>retain</strong>ing-<strong>form</strong>-data...<strong>submit</strong>/1772</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"76\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhMKAYwBg\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=https://www.sitepoint.com/community/t/retaining-form-data-after-submit/1772&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">28 oct. 2004 - </span>echo(\'&lt;<em>input</em> type=hidden name=<em>submitted value</em>=1&gt;\'); echo(\'&lt;<em>input</em> ... Some browsers <em>keep</em> that data; i just tried firefox and it kept the data. Could it be ... The difference is that my <em>form</em> is index.<em>php</em>, and it\'s action is mail.<em>php</em>.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"85\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhVKAcwBw\">\r\n<h3 class=\"r\"><a href=\"http://www.w3schools.com/php/php_form_complete.asp\">PHP 5 Complete Form Example - W3Schools</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">www.w3schools.com/<strong>php</strong>/<strong>php</strong>_<strong>form</strong>_complete.asp</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"85\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhVKAcwBw\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://www.w3schools.com/php/php_form_complete.asp&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">This chapter shows how to <em>keep</em> the <em>values</em> in the <em>input</em> fields when the user hits the <em>submit</em> button. <em>PHP</em> - <em>Keep</em> The <em>Values</em> in The <em>Form</em>. To show the <em>values</em> in&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"93\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhdKAgwCA\">\r\n<h3 class=\"r\"><a href=\"http://coursesweb.net/php-mysql/data-form-fields-after-submit_t\">Keep data in form fields after submitting the form - CoursesWeb.net</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">coursesweb.net/<strong>php</strong>-mysql/data-<strong>form</strong>-fields-after-<strong>submit</strong>_t</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"93\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhdKAgwCA\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://coursesweb.net/php-mysql/data-form-fields-after-submit_t&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">How to get and <em>keep</em> data in <em>form</em> fields after <em>submitting</em> the <em>form</em>, <em>PHP</em> tutorial. ... method=\"post\"&gt; Name: &lt;<em>input</em> type=\"text\" name=\"fname\" id=\"fname\" <em>value</em>=\"\'.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"101\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhlKAkwCQ\">\r\n<h3 class=\"r\"><a href=\"https://www.dougv.com/2009/06/retaining-values-in-a-form-following-php-postback-and-clearing-form-values-after-successful-php-form-processing/\">Retaining Values In A Form Following PHP Postback And Clearing ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.dougv.com/.../<strong>retain</strong>ing-<strong>values</strong>-in-a-<strong>form</strong>-following-...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"res\" class=\"med\">\r\n<div id=\"search\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QGggY\">\r\n<div id=\"ires\" data-async-context=\"query:php%20preserve%20input%20values%20on%20form%20submit\">\r\n<div id=\"rso\">\r\n<div class=\"_NId\">\r\n<div class=\"srg\">\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"101\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhlKAkwCQ\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=https://www.dougv.com/2009/06/retaining-values-in-a-form-following-php-postback-and-clearing-form-values-after-successful-php-form-processing/&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">13 jun. 2009 - </span>Retaining <em>Form Values</em> On <em>PHP</em> Postback .... adds in code to <em>send</em> a curl request to the handler for the page if all <em>input</em> is valid. .... I\'ve just started with OOP, and I\'m making an app that uses objects that need to <em>retain</em> their data.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"bottomads\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div id=\"tadsb\" class=\"_Ak c\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0Q9AkIbg\">\r\n<h2 class=\"_hM\">&nbsp;</h2>\r\n<ol>\r\n<li class=\"ads-ad\" data-hveid=\"111\">\r\n<h3><a id=\"vs3p1c0\" class=\"r-imENwByu6s6k\" href=\"https://console.cloud.google.com/launcher?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q2-cloud-latam-launcher-skws-freetrial&amp;\" data-preconnect-urls=\"https://console.cloud.google.com/,http://clickserve.dartsearch.net/\">PHP - Google Cloud - Sus Paquetes de Software&lrm;</a></h3>\r\n<div class=\"ads-visurl\"><span class=\"_mB\">Anuncio</span><cite class=\"_WGk\">cloud.google.com/launcher</cite>&lrm;</div>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<div class=\"col\" style=\"width: 0;\">\r\n<div id=\"center_col\" style=\"visibility: visible;\">\r\n<div id=\"bottomads\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div id=\"tadsb\" class=\"_Ak c\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0Q9AkIbg\">\r\n<ol>\r\n<li class=\"ads-ad\" data-hveid=\"111\">\r\n<div class=\"ellip ads-creative\">Sus Paquetes de Software Preferidos Al Alcance de un Click. Probar Agora!</div>\r\n<div class=\"ellip\">Paga Solo Por lo que Usas&nbsp;&middot;&nbsp;Prueba Gratis&nbsp;&middot;&nbsp;Implementaci&oacute;n Rapida&nbsp;&middot;&nbsp;Implem&eacute;ntelo en Minutos</div>\r\n<ul class=\"_yEo\">\r\n<li><a id=\"vads-3-0-1-1-0\" href=\"https://cloud.google.com/customers/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Historias de &Eacute;xito</a></li>\r\n<li><a id=\"vads-3-0-1-1-1\" href=\"https://cloud.google.com/contact/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Cominece Ahora</a></li>\r\n<li><a id=\"vads-3-0-1-1-2\" href=\"http://cloud.google.com/docs/compare/aws/\">Competitor Guide</a></li>\r\n<li><a id=\"vads-3-0-1-1-3\" href=\"https://cloud.google.com/pricing/#prediction-api?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Precios</a></li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<div id=\"extrares\" class=\"med\">&nbsp;</div>\r\n<div>\r\n<div id=\"foot\">\r\n<div id=\"cljs\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>\r\n<div id=\"navcnt\">\r\n<table id=\"nav\" style=\"border-collapse: collapse; text-align: left; margin: 30px auto 30px;\">\r\n<tbody>\r\n<tr valign=\"top\">\r\n<td class=\"b navend\">&nbsp;</td>\r\n<td class=\"cur\">1</td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=10&amp;sa=N\">2</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=20&amp;sa=N\">3</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=30&amp;sa=N\">4</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=40&amp;sa=N\">5</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=50&amp;sa=N\">6</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=60&amp;sa=N\">7</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=70&amp;sa=N\">8</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=80&amp;sa=N\">9</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=90&amp;sa=N\">10</a></td>\r\n<td class=\"b navend\"><a id=\"pnnext\" class=\"pn\" style=\"text-align: left;\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=10&amp;sa=N\"><span style=\"display: block; margin-left: 53px;\">Siguiente</span></a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div id=\"gfn\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>\r\n<span id=\"fvf\" data-jibp=\"h\" data-jiis=\"uc\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"rhscol\" class=\"col\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>','archivado','2016-12-08 18:15:38','2016-12-09 12:22:06',1),(5,'aaaaaaa','aaaaaaa','bbbbbbbbbb','<p>ccccccccccccccccc</p>','archivado','2016-12-08 18:17:02','2016-12-09 12:23:00',1),(6,'gfff','gfff','','','publicado','2016-12-08 18:31:25','2016-12-08 18:31:25',1),(7,'titulo demo','titulo-demo','titulo demo','','publicado','2016-12-08 18:41:18','2016-12-08 18:41:18',1),(8,'titulo demo','titulo-demo','titulo demo','','publicado','2016-12-08 18:42:14','2016-12-08 18:42:14',1),(9,'titulo demo','titulo-demo','titulo demo','','publicado','2016-12-08 18:42:53','2016-12-08 18:42:53',1),(10,'titulo demo','titulo-demo','titulo demo','','publicado','2016-12-08 18:45:38','2016-12-08 18:45:38',1),(11,'titulo demo','titulo-demo','demo','<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"26\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgaKAAwAA\">\r\n<div class=\"s\">\r\n<div><span class=\"st\">get rid of coding characters.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"35\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgjKAEwAQ\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/2296347/how-can-i-keep-a-value-in-a-text-input-after-a-submit-occurs\">php - How can I keep a value in a text input after a submit occurs ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/.../how-can-i-<strong>keep</strong>-a-<strong>value-in</strong>-a-text-<strong>input</strong>-aft...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"35\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgjKAEwAQ\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/2296347/how-can-i-keep-a-value-in-a-text-input-after-a-submit-occurs&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">19 feb. 2010 - </span>Place the variable you need into the \"<em>value</em>\" field of your <em>input</em>-tag like this: &lt;<em>input</em> ... I want to validate a form to make sure a user writes in a name and last name. If a user writes in only his last name, the form should show again&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"44\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgsKAIwAg\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/2246227/keep-values-selected-after-form-submission\">php - Keep values selected after form submission - Stack Overflow</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/.../<strong>keep</strong>-<strong>values</strong>-selected-after-<strong>form</strong>-<strong>submission</strong></cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"44\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQgsKAIwAg\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/2246227/keep-values-selected-after-form-submission&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">11 feb. 2010 - </span>To avoid many if-else structures, let javascript do the trick automatically:<select>value=\"\'.$loc.\'\"&gt;\'.$loc.\'\'; } } echo \'</select>&lt;<em>input</em> type=\"<wbr /><em>submit</em>\" name=\"<em>submit</em>\" <em>value</em>=\"<em>Submit</em>\" class=\"<em>submit\" /&gt; &gt;\';&nbsp;...</em></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"53\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg1KAMwAw\">\r\n<h3 class=\"r\"><a href=\"http://stackoverflow.com/questions/5514897/keep-form-values-after-submit-php\">Keep form values after submit PHP - Stack Overflow</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">stackoverflow.com/questions/.../<strong>keep</strong>-<strong>form</strong>-<strong>values</strong>-after-<strong>submit</strong>-<strong>p</strong>...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"53\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg1KAMwAw\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://stackoverflow.com/questions/5514897/keep-form-values-after-submit-php&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">1 abr. 2011 - </span>To have the radio buttons and checkboxes pre-checked, you need to add the ... &lt;<wbr /><em>input</em> type=\"checkbox\" name=\"foo\" <em>value</em>=\"bar\" &lt;?<em>php</em> echo&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"62\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg-KAQwBA\">\r\n<h3 class=\"r\"><a href=\"http://www.homeandlearn.co.uk/php/php4p9.html\">PHP Tutorials: Keeping the data the user entered - Home and Learn</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">www.homeandlearn.co.uk/<strong>php</strong>/<strong>php</strong>4p9.<strong>html</strong></cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"62\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQg-KAQwBA\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://www.homeandlearn.co.uk/php/php4p9.html&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">When the basicForm.<em>php form</em> is <em>submitted</em>, the details that the user entered get ... this <em>value</em> will <em>keep</em> re-appearing in the textbox when the page is <em>submitted</em>.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"70\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QtgIIRigFMAU\">\r\n<h3 class=\"r\"><a href=\"https://www.youtube.com/watch?v=Eq7bGWQsOdI\">PHP Tutorial: How To: Keep Form Data After Submission [Quick Tip ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"th _lyb _YQd\" style=\"height: 65px; width: 116px;\"><a href=\"https://www.youtube.com/watch?v=Eq7bGWQsOdI\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QuAIISDAF\"><img id=\"vidthumb6\" class=\"_WCg\" style=\"top: -11px;\" src=\"data:image/jpeg;base64,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\" alt=\"Video de php preserve input values on form submit\" width=\"116\" height=\"87\" /><span class=\"vdur _dwc\">▶&nbsp;7:44</span></a></div>\r\n</div>\r\n<div style=\"margin-left: 125px;\">\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.youtube.com/watch?v=Eq7bGWQsOdI</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"70\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QtgIIRigFMAU\">\r\n<div class=\"s\">\r\n<div style=\"margin-left: 125px;\">\r\n<div class=\"f slp\">12 ago. 2011 - Subido por SlothScripts</div>\r\n<span class=\"st\">In this tutorial I show you how to save the <em>value of</em> a <em>form</em> field after it has been <em>submitted</em>. This is useful for ...</span></div>\r\n<div style=\"clear: left;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"76\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhMKAYwBg\">\r\n<h3 class=\"r\"><a href=\"https://www.sitepoint.com/community/t/retaining-form-data-after-submit/1772\">Retaining Form Data after Submit - PHP - The SitePoint Forums</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.sitepoint.com/.../t/<strong>retain</strong>ing-<strong>form</strong>-data...<strong>submit</strong>/1772</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"76\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhMKAYwBg\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=https://www.sitepoint.com/community/t/retaining-form-data-after-submit/1772&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">28 oct. 2004 - </span>echo(\'&lt;<em>input</em> type=hidden name=<em>submitted value</em>=1&gt;\'); echo(\'&lt;<em>input</em> ... Some browsers <em>keep</em> that data; i just tried firefox and it kept the data. Could it be ... The difference is that my <em>form</em> is index.<em>php</em>, and it\'s action is mail.<em>php</em>.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"85\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhVKAcwBw\">\r\n<h3 class=\"r\"><a href=\"http://www.w3schools.com/php/php_form_complete.asp\">PHP 5 Complete Form Example - W3Schools</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">www.w3schools.com/<strong>php</strong>/<strong>php</strong>_<strong>form</strong>_complete.asp</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"85\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhVKAcwBw\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://www.w3schools.com/php/php_form_complete.asp&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">This chapter shows how to <em>keep</em> the <em>values</em> in the <em>input</em> fields when the user hits the <em>submit</em> button. <em>PHP</em> - <em>Keep</em> The <em>Values</em> in The <em>Form</em>. To show the <em>values</em> in&nbsp;...</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"93\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhdKAgwCA\">\r\n<h3 class=\"r\"><a href=\"http://coursesweb.net/php-mysql/data-form-fields-after-submit_t\">Keep data in form fields after submitting the form - CoursesWeb.net</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">coursesweb.net/<strong>php</strong>-mysql/data-<strong>form</strong>-fields-after-<strong>submit</strong>_t</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"93\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhdKAgwCA\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=http://coursesweb.net/php-mysql/data-form-fields-after-submit_t&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\">How to get and <em>keep</em> data in <em>form</em> fields after <em>submitting</em> the <em>form</em>, <em>PHP</em> tutorial. ... method=\"post\"&gt; Name: &lt;<em>input</em> type=\"text\" name=\"fname\" id=\"fname\" <em>value</em>=\"\'.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"101\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhlKAkwCQ\">\r\n<h3 class=\"r\"><a href=\"https://www.dougv.com/2009/06/retaining-values-in-a-form-following-php-postback-and-clearing-form-values-after-successful-php-form-processing/\">Retaining Values In A Form Following PHP Postback And Clearing ...</a></h3>\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><cite class=\"_Rm\">https://www.dougv.com/.../<strong>retain</strong>ing-<strong>values</strong>-in-a-<strong>form</strong>-following-...</cite></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"res\" class=\"med\">\r\n<div id=\"search\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QGggY\">\r\n<div id=\"ires\" data-async-context=\"query:php%20preserve%20input%20values%20on%20form%20submit\">\r\n<div id=\"rso\">\r\n<div class=\"_NId\">\r\n<div class=\"srg\">\r\n<div class=\"g\">\r\n<div class=\"rc\" data-hveid=\"101\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0QFQhlKAkwCQ\">\r\n<div class=\"s\">\r\n<div>\r\n<div class=\"f kv _SWb\" style=\"white-space: nowrap;\"><a class=\"fl\" href=\"https://translate.google.com/translate?hl=es-419&amp;sl=en&amp;u=https://www.dougv.com/2009/06/retaining-values-in-a-form-following-php-postback-and-clearing-form-values-after-successful-php-form-processing/&amp;prev=search\">Traducir esta p&aacute;gina</a></div>\r\n<span class=\"st\"><span class=\"f\">13 jun. 2009 - </span>Retaining <em>Form Values</em> On <em>PHP</em> Postback .... adds in code to <em>send</em> a curl request to the handler for the page if all <em>input</em> is valid. .... I\'ve just started with OOP, and I\'m making an app that uses objects that need to <em>retain</em> their data.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"bottomads\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div id=\"tadsb\" class=\"_Ak c\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0Q9AkIbg\">\r\n<h2 class=\"_hM\">&nbsp;</h2>\r\n<ol>\r\n<li class=\"ads-ad\" data-hveid=\"111\">\r\n<h3><a id=\"vs3p1c0\" class=\"r-imENwByu6s6k\" href=\"https://console.cloud.google.com/launcher?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q2-cloud-latam-launcher-skws-freetrial&amp;\" data-preconnect-urls=\"https://console.cloud.google.com/,http://clickserve.dartsearch.net/\">PHP - Google Cloud - Sus Paquetes de Software&lrm;</a></h3>\r\n<div class=\"ads-visurl\"><span class=\"_mB\">Anuncio</span><cite class=\"_WGk\">cloud.google.com/launcher</cite>&lrm;</div>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<div class=\"col\" style=\"width: 0;\">\r\n<div id=\"center_col\" style=\"visibility: visible;\">\r\n<div id=\"bottomads\" data-jibp=\"h\" data-jiis=\"uc\">\r\n<div id=\"tadsb\" class=\"_Ak c\" data-ved=\"0ahUKEwik0IKzv-fQAhVE7SYKHaG-Bu0Q9AkIbg\">\r\n<ol>\r\n<li class=\"ads-ad\" data-hveid=\"111\">\r\n<div class=\"ellip ads-creative\">Sus Paquetes de Software Preferidos Al Alcance de un Click. Probar Agora!</div>\r\n<div class=\"ellip\">Paga Solo Por lo que Usas&nbsp;&middot;&nbsp;Prueba Gratis&nbsp;&middot;&nbsp;Implementaci&oacute;n Rapida&nbsp;&middot;&nbsp;Implem&eacute;ntelo en Minutos</div>\r\n<ul class=\"_yEo\">\r\n<li><a id=\"vads-3-0-1-1-0\" href=\"https://cloud.google.com/customers/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Historias de &Eacute;xito</a></li>\r\n<li><a id=\"vads-3-0-1-1-1\" href=\"https://cloud.google.com/contact/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Cominece Ahora</a></li>\r\n<li><a id=\"vads-3-0-1-1-2\" href=\"http://cloud.google.com/docs/compare/aws/\">Competitor Guide</a></li>\r\n<li><a id=\"vads-3-0-1-1-3\" href=\"https://cloud.google.com/pricing/#prediction-api?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=2015-q1-cloud-northam-us-bigdata-bkws-freetrial-en\">Precios</a></li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<div id=\"extrares\" class=\"med\">&nbsp;</div>\r\n<div>\r\n<div id=\"foot\">\r\n<div id=\"cljs\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>\r\n<div id=\"navcnt\">\r\n<table id=\"nav\" style=\"border-collapse: collapse; text-align: left; margin: 30px auto 30px;\">\r\n<tbody>\r\n<tr valign=\"top\">\r\n<td class=\"b navend\">&nbsp;</td>\r\n<td class=\"cur\">1</td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=10&amp;sa=N\">2</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=20&amp;sa=N\">3</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=30&amp;sa=N\">4</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=40&amp;sa=N\">5</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=50&amp;sa=N\">6</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=60&amp;sa=N\">7</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=70&amp;sa=N\">8</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=80&amp;sa=N\">9</a></td>\r\n<td><a class=\"fl\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=90&amp;sa=N\">10</a></td>\r\n<td class=\"b navend\"><a id=\"pnnext\" class=\"pn\" style=\"text-align: left;\" href=\"https://www.google.com/search?q=php+preserve+input+values+on+form+submit&amp;client=firefox-b-ab&amp;ei=89ZKWOSKDcTamwGh_ZroDg&amp;start=10&amp;sa=N\"><span style=\"display: block; margin-left: 53px;\">Siguiente</span></a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div id=\"gfn\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>\r\n<span id=\"fvf\" data-jibp=\"h\" data-jiis=\"uc\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"rhscol\" class=\"col\" data-jibp=\"h\" data-jiis=\"uc\">&nbsp;</div>','papelera','2016-12-08 18:48:16','2016-12-09 12:18:07',1),(12,'ryt','ryt','ytryr','&lt;p&gt;ryttr rty rtt yrtytryrty&lt;/p&gt;','publicado','2016-12-08 19:38:43','2016-12-08 19:38:43',1),(13,'Lorem Ipsum','<b>fffff</b>','Lorem Ipsum','<b>fffff</b>','publicado','2016-12-08 19:40:31','2016-12-08 19:40:31',1),(14,'','','','&lt;div&gt;\r\n&lt;h2&gt;&iquest;Qu&eacute; es Lorem Ipsum?&lt;/h2&gt;\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div&gt;\r\n&lt;h2&gt;&iquest;Por qu&eacute; lo usamos?&lt;/h2&gt;\r\n&lt;p&gt;Es un hecho establecido hace demasiado tiempo que un lector se distraer&aacute; con el contenido del texto de un sitio mientras que mira su dise&ntilde;o. El punto de usar Lorem Ipsum es que tiene una distribuci&oacute;n m&aacute;s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu&iacute;, contenido aqu&iacute;\". Estos textos hacen parecerlo un espa&ntilde;ol que se puede leer. Muchos paquetes de autoedici&oacute;n y editores de p&aacute;ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una b&uacute;squeda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a trav&eacute;s de los a&ntilde;os, algunas veces por accidente, otras veces a prop&oacute;sito (por ejemplo insert&aacute;ndole humor y cosas por el estilo).&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;p&gt;&nbsp;&lt;/p&gt;\r\n&lt;div&gt;\r\n&lt;h2&gt;&iquest;De d&oacute;nde viene?&lt;/h2&gt;\r\n&lt;p&gt;Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl&acute;sica de la literatura del Latin, que data del a&ntilde;o 45 antes de Cristo, haciendo que este adquiera mas de 2000 a&ntilde;os de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontr&oacute; una de las palabras m&aacute;s oscuras de la lengua del lat&iacute;n, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del lat&iacute;n, descubri&oacute; la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de \"de Finnibus Bonorum et Malorum\" (Los Extremos del Bien y El Mal) por Cicero, escrito en el a&ntilde;o 45 antes de Cristo. Este libro es un tratado de teor&iacute;a de &eacute;ticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", viene de una linea en la secci&oacute;n 1.10.32&lt;/p&gt;\r\n&lt;p&gt;El trozo de texto est&aacute;ndar de Lorem Ipsum usado desde el a&ntilde;o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son tambi&eacute;n reproducidas en su forma original exacta, acompa&ntilde;adas por versiones en Ingl&eacute;s de la traducci&oacute;n realizada en 1914 por H. Rackham.&lt;/p&gt;\r\n&lt;/div&gt;','publicado','2016-12-08 19:53:14','2016-12-08 19:53:14',1),(15,'dgfg','dgfg','dgfdgfdgfd','&lt;p&gt;d&lt;strong&gt;fgdgfd&lt;/strong&gt;&lt;/p&gt;','publicado','2016-12-08 20:02:32','2016-12-08 20:02:32',1),(16,'tyi','tyi','tititi','<p><strong>wegfwg</strong> r r<em>grg</em></p>','publicado','2016-12-08 20:21:08','2016-12-08 20:21:08',1),(17,'657576','657576','5757','<div>\r\n<h2>&iquest;Qu&eacute; es Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>&iquest;Por qu&eacute; lo usamos?</h2>\r\n<p>Es un hecho establecido hace demasiado tiempo que un lector se distraer&aacute; con el contenido del texto de un sitio mientras que mira su dise&ntilde;o. El punto de usar Lorem Ipsum es que tiene una distribuci&oacute;n m&aacute;s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu&iacute;, contenido aqu&iacute;\". Estos textos hacen parecerlo un espa&ntilde;ol que se puede leer. Muchos paquetes de autoedici&oacute;n y editores de p&aacute;ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una b&uacute;squeda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a trav&eacute;s de los a&ntilde;os, algunas veces por accidente, otras veces a prop&oacute;sito (por ejemplo insert&aacute;ndole humor y cosas por el estilo).</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2>&iquest;De d&oacute;nde viene?</h2>\r\n<p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl&acute;sica de la literatura del Latin, que data del a&ntilde;o 45 antes de Cristo, haciendo que este adquiera mas de 2000 a&ntilde;os de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontr&oacute; una de las palabras m&aacute;s oscuras de la lengua del lat&iacute;n, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del lat&iacute;n, descubri&oacute; la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de \"de Finnibus Bonorum et Malorum\" (Los Extremos del Bien y El Mal) por Cicero, escrito en el a&ntilde;o 45 antes de Cristo. Este libro es un tratado de teor&iacute;a de &eacute;ticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", viene de una linea en la secci&oacute;n 1.10.32</p>\r\n<p>El trozo de texto est&aacute;ndar de Lorem Ipsum usado desde el a&ntilde;o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son tambi&eacute;n reproducidas en su forma original exacta, acompa&ntilde;adas por versiones en Ingl&eacute;s de la traducci&oacute;n realizada en 1914 por H. Rackham.</p>\r\n</div>','publicado','2016-12-08 20:23:28','2016-12-08 20:23:28',1),(18,'¿Qué es Lorem Ipsum?','iquest-que-es-lorem-ipsum','¿Qué es Lorem Ipsum? desc','<div>\r\n<h2>&iquest;Qu&eacute; es Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>&iquest;Por qu&eacute; lo usamos?</h2>\r\n<p>Es un hecho establecido hace demasiado tiempo que un lector se distraer&aacute; con el contenido del texto de un sitio mientras que mira su dise&ntilde;o. El punto de usar Lorem Ipsum es que tiene una distribuci&oacute;n m&aacute;s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu&iacute;, contenido aqu&iacute;\". Estos textos hacen parecerlo un espa&ntilde;ol que se puede leer. Muchos paquetes de autoedici&oacute;n y editores de p&aacute;ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una b&uacute;squeda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a trav&eacute;s de los a&ntilde;os, algunas veces por accidente, otras veces a prop&oacute;sito (por ejemplo insert&aacute;ndole humor y cosas por el estilo).</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2>&iquest;De d&oacute;nde viene?</h2>\r\n<p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl&acute;sica de la literatura del Latin, que data del a&ntilde;o 45 antes de Cristo, haciendo que este adquiera mas de 2000 a&ntilde;os de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontr&oacute; una de las palabras m&aacute;s oscuras de la lengua del lat&iacute;n, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del lat&iacute;n, descubri&oacute; la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de \"de Finnibus Bonorum et Malorum\" (Los Extremos del Bien y El Mal) por Cicero, escrito en el a&ntilde;o 45 antes de Cristo. Este libro es un tratado de teor&iacute;a de &eacute;ticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", viene de una linea en la secci&oacute;n 1.10.32</p>\r\n<p>El trozo de texto est&aacute;ndar de Lorem Ipsum usado desde el a&ntilde;o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son tambi&eacute;n reproducidas en su forma original exacta, acompa&ntilde;adas por versiones en Ingl&eacute;s de la traducci&oacute;n realizada en 1914 por H. Rackham.</p>\r\n</div>','publicado','2016-12-08 20:24:25','2016-12-08 20:49:29',1),(19,'yyyyyyy','yyyyyyy','yyyyyyyyyyyy','','publicado','2016-12-09 11:50:19','2016-12-09 11:50:19',1);
/*!40000 ALTER TABLE `web_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_sessions`
--

DROP TABLE IF EXISTS `web_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_sessions` (
  `id` char(32) NOT NULL,
  `expire` int(10) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_sessions`
--

LOCK TABLES `web_sessions` WRITE;
/*!40000 ALTER TABLE `web_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_usuarios`
--

DROP TABLE IF EXISTS `web_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_usuarios` (
  `id` int(6) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(140) NOT NULL,
  `real_name` varchar(140) NOT NULL,
  `bio` text NOT NULL,
  `status` enum('inactive','active') NOT NULL,
  `role` enum('administrator','editor','user') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_usuarios`
--

LOCK TABLES `web_usuarios` WRITE;
/*!40000 ALTER TABLE `web_usuarios` DISABLE KEYS */;
INSERT INTO `web_usuarios` VALUES (1,'admin','$2y$12$3eWYBukj.VN7CbqRTVcjlO4OolX1UHd306qLSvq842Etq/Y6LZbVm','admin@localhost.com','Administrator','The bouse','active','administrator');
/*!40000 ALTER TABLE `web_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-09 12:47:32
