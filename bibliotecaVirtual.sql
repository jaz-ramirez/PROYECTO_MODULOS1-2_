-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bibliotecaVirtual
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `id_area` tinyint(4) NOT NULL,
  `Área` varchar(50) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_categoria` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_genero` smallint(6) NOT NULL,
  `id_area` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  KEY `id_genero` (`id_genero`),
  KEY `id_area` (`id_area`),
  CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  CONSTRAINT `categoria_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clasificacion_lib`
--

DROP TABLE IF EXISTS `clasificacion_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clasificacion_lib` (
  `id_lasificacion_lib` tinyint(1) NOT NULL AUTO_INCREMENT,
  `Clasificacion` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_lasificacion_lib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clasificacion_lib`
--

LOCK TABLES `clasificacion_lib` WRITE;
/*!40000 ALTER TABLE `clasificacion_lib` DISABLE KEYS */;
/*!40000 ALTER TABLE `clasificacion_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editorial`
--

DROP TABLE IF EXISTS `editorial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editorial` (
  `id_editorial` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Editorial` varchar(20) NOT NULL,
  PRIMARY KEY (`id_editorial`),
  UNIQUE KEY `Editorial` (`Editorial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editorial`
--

LOCK TABLES `editorial` WRITE;
/*!40000 ALTER TABLE `editorial` DISABLE KEYS */;
/*!40000 ALTER TABLE `editorial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero`
--

DROP TABLE IF EXISTS `genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genero` (
  `id_genero` smallint(6) NOT NULL AUTO_INCREMENT,
  `Género` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_genero`),
  UNIQUE KEY `Género` (`Género`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro`
--

DROP TABLE IF EXISTS `libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libro` (
  `id_libro` smallint(3) NOT NULL AUTO_INCREMENT,
  `id_editorial` tinyint(4) NOT NULL,
  `id_clasificación_lib` tinyint(1) NOT NULL,
  `Titulo` varchar(60) NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Año` year(4) DEFAULT NULL,
  `Descripcion` text NOT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `id_editorial` (`id_editorial`),
  KEY `id_clasificación_lib` (`id_clasificación_lib`),
  CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_editorial`) REFERENCES `editorial` (`id_editorial`),
  CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`id_clasificación_lib`) REFERENCES `clasificacion_lib` (`id_lasificacion_lib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `librohascategoria`
--

DROP TABLE IF EXISTS `librohascategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librohascategoria` (
  `id_lhc` smallint(6) NOT NULL,
  `id_libro` smallint(6) NOT NULL,
  `id_categoria` smallint(6) NOT NULL,
  PRIMARY KEY (`id_lhc`),
  UNIQUE KEY `id_libro` (`id_libro`),
  UNIQUE KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `librohascategoria_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  CONSTRAINT `librohascategoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librohascategoria`
--

LOCK TABLES `librohascategoria` WRITE;
/*!40000 ALTER TABLE `librohascategoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `librohascategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `librohasusuario`
--

DROP TABLE IF EXISTS `librohasusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librohasusuario` (
  `id_lhu` smallint(6) NOT NULL,
  `id_libro` smallint(6) NOT NULL,
  `id_usuario` varchar(30) NOT NULL,
  PRIMARY KEY (`id_lhu`),
  KEY `id_libro` (`id_libro`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `librohasusuario_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  CONSTRAINT `librohasusuario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librohasusuario`
--

LOCK TABLES `librohasusuario` WRITE;
/*!40000 ALTER TABLE `librohasusuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `librohasusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `id_tipo` tinyint(1) NOT NULL,
  `Nombre_tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` varchar(30) NOT NULL,
  `id_tipo` tinyint(4) NOT NULL,
  `Nombre_completo` varchar(50) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Contraseña` varchar(30) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `Correo` (`Correo`),
  KEY `id_tipo` (`id_tipo`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-11 21:28:48
