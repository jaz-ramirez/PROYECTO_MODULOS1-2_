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
INSERT INTO `area` VALUES (1,'Área 1:Ciencias Físico - Matemáticas y de las Inge'),(2,'Área 2: Ciencias Biológicas, Químicas y de la Salu'),(3,'Área 3: Ciencias Sociales'),(4,'Área 4: Humanidades y de las Artes');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,1,1),(2,2,4),(3,1,2),(4,3,4),(5,4,4),(6,5,4),(7,6,3);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clasificacion_lib`
--

LOCK TABLES `clasificacion_lib` WRITE;
/*!40000 ALTER TABLE `clasificacion_lib` DISABLE KEYS */;
INSERT INTO `clasificacion_lib` VALUES (1,1),(2,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editorial`
--

LOCK TABLES `editorial` WRITE;
/*!40000 ALTER TABLE `editorial` DISABLE KEYS */;
INSERT INTO `editorial` VALUES (4,'Cambridge University'),(3,'Desconocido'),(2,'Destino'),(10,'Elsevier'),(5,'Epub Libre'),(7,'Freeditorial'),(6,'Limusa'),(1,'National Geographic'),(9,'Oxford'),(8,'Pearson');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` VALUES (6,'Académico'),(2,'Ciencia Ficción'),(1,'Cientifico'),(3,'Ficción'),(5,'Humor'),(7,'Lírico'),(4,'Terror'),(8,'Thriller');
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
INSERT INTO `libro` VALUES (1,1,1,'FEYNMAN: Cuando el fotón conoce a un electrón','Miguel Ángel Sabadell',2012,'La electrodinámica cuántica es una de las teorías físicas más precisas pero también más complicadas.'),(2,2,1,'1984','George Orwell',1949,'Winston Smith decide rebelarse ante un gobierno totalitario que controla cada uno de los movimientos de sus ciudadanos y castiga incluso a aquellos que delinquen con el pensamiento. Consciente de las terribles consecuencias que puede acarrear la disidencia, Winston se une a la ambigua Hermandad por mediación del líder OBrien. Sin embargo, nuestro protagonista va comprendiendo que ni la Hermandad ni OBrien son lo que aparentan, y que la rebelión quizá sea un objetivo inalcanzable'),(3,1,1,'MAXWELL: Magnetismo de alto voltaje','Miguel Ángel Sabadell',2013,'Las ecuaciones que introdujo Maxwell permiten describir la interacción electromagnética, fundamentada en la idea de que los campos eléctrico y magnético son descripciones complementarias que se derivan de la misma propiedad básica de la materia: la carga eléctrica.'),(4,3,1,'Cortes de Cerebro','Valeria A Frolizzi',2005,'Imagenes de los cortes del cerebro y sus partes'),(5,4,1,'Introduction to Classical Mechanics','David Morin',2007,'Este libro de texto cubre todos los temas introductorios estándar en mecánica clásica, incluidas las leyes de Newton, las oscilaciones, la energía, el momento, el momento angular, el movimiento planetario y la relatividad especial. También explora temas más avanzados, como los modos normales, el método Lagrangiano, el movimiento giroscópico, las fuerzas ficticias, los 4 vectores y la relatividad general.'),(6,5,1,'Diario de un emigrante','Miguel Delibes',1958,'Lorenzo, a quien ya conocimos gracias a Diario de un cazador, reemprende su diario tras haberse casado con la Anita. Ahora, unos tíos de ella, residentes en Santiago de Chile, los animan a probar fortuna en América, ofreciéndoles hogar y trabajo.'),(7,3,1,'La casa hechizada','Charles Dickens',0000,'Un grupo de amigos se reúne en una casa aparentemente encantada con la intención de descubrir evidencias de lo sobrenatural. Recluidos en sus habitaciones durante la navidad, vuelven a juntarse en la noche de reyes con el fin de contar, cada uno, las historias de sus encuentros fantasmales.'),(8,6,1,'Geometria Analitica','Charles H. Lehmann',1980,'Principios fundamentales de geometría analitica, trigonometría plana y álgebra'),(9,3,1,'Greguerias','Ramón Gómez de la Serna',1979,'Publicadas en prensa desde 1910, incrustadas en otros libros, una y otra vez recopiladas, las greguerías siguen siendo pequeñas obras maestras, apuntes deliciosos, minimas gemas depuradas en el laboratorio genial del escritor. Esta seleccion ha seguido el criterio de reunir aquellas que más se acrecan a la fórmula ramoniana de: Greguería = Metáfora + Humor. El apéndice histórico ofrece una muestra de ellas en orden cronológico para captar mejor su evolucion estética.'),(10,3,1,'Introduccion al Derecho','Agustín Gordillo',2000,'Una introduccion al derecho para abogados y los que no lo son.'),(11,3,1,'Platero y yo','Juan Ramón Jiménez',1914,'Platero y yo es una obra lírica escrita por el escritor y Premio Nobel de Literatura español Juan Ramón Jiménez, ? que recrea poéticamente la vida del asno Platero, su inseparable amigo de niñez y juventud.'),(12,3,2,'Tiburón','Peter Benchley',1974,'Amity es una pequeña población de la costa que vive principalmente del turismo. Una noche cualquiera, poco antes de empezar la temporada de verano, aparecen en la playa los restos de una mujer; al parecer ha sido devorada por un tiburón. La policía, la prensa y los comerciantes ocultan la noticia, que podría espantar al turismo. Pero a los pocos días, un bañista ve desde la costa cómo un pez gigantesco ataca a un muchacho. Entonces empieza la batida: un grupo de hombres hábiles y decididos están dispuestos a dar caza al tiburón asesino; pero este aún puede cobrarse nuevas piezas...'),(13,3,1,'Parque Jurásico','Michael Crichton',1990,'En esta espectacular novela, los dinosaurios vuelven a conquistar la Tierra. En una isla remota, un grupo de hombres y mujeres emprende una carrera contra el tiempo para evitar un desastre mundial provocado por la desmedida ambición de comercializar la ingeniería genética. Pero todos los esfuerzos resultarán vanos cuando el inescrupuloso proyecto quede fuera de control y el mundo a merced de unas bestias monstruosas... Parque Jurásico, la novela más célebre de Michael Crichton y una de las más leídas en los últimos años, fue adaptada al cine por Steven Spielberg en una película que se convirtió en el gran acontecimiento cinematográfico de 1993 y en el origen del fenómeno de masas llamado \"dinomanía\".'),(14,3,1,'Muerte en el Nilo','Agatha Christie',1937,'Linnet Rideway es una joven agraciada y millonaria que lo posee todo. Su amiga, Jacqueline de Bellefort, no menos hermosa aunque pobre, sólo tiene amor de su prometido Simon Doyle. Sin embargo, Simon acaba casándose con Linnet. El nuevo matrimonio inicia un crucero por el Nilo a bordo de Karnak y durante el viaje, que habría de haber sido el mejor viaje de su vida, Linnet muere asesinada. Tras su asesinato se suceden otros que serán investigados por Hercule Poirot, que viaja en el mismo crucero.'),(15,7,1,'Fahrenheit 451','Ray Bradbury',1953,'Fahrenheit 451 cuenta la historia de un sombrío y horroroso futuro. Montag, el protagonista, pertenece a una extraña brigada de bomberos cuya misión, paradójicamente, no es la de sofocar incendios, sino la de provocarlos para quemar libros. Porque en el país de Montag está terminantemente prohibido leer. Porque leer obliga a pensar, y en el país de Montag está prohibido pensar. Porque leer impide ser ingenuamente feliz, y en el país de Montag hay que ser feliz a la fuerza.'),(16,8,1,'Química: Timberlake','Karen C. Timberlake',2008,'Libro de Quimica, desde La quimica en nuestras vidas hasta Bioquímica'),(17,9,1,'Teoría general del proceso','José Ovalle Favela',2015,'Sobre la teoría general del proceso'),(18,3,2,'Memorias del Marques de Bradomin','Don Ramon Del Valle Inclan',1905,'Bradomín nos habla del devenir de sus amores, desde la primavera hasta el invierno de la vejez, y sus aventuras con un estilo preciocista, muy evocador y de acentuada musicalidad, que es la quintaesencia del esteticismo fin de siècle y el mejor ejemplo de nuestra prosa modernista.'),(19,7,1,'El huésped de Drácula','Bram Stoker',1914,'La historia trata sobre un inglés que decide salir de Múnich a explorar los bosques contra el consejo de su cochero, que no quiere dejarlo en el exterior durante la noche de Walpurgis, fecha conocida por su intensa actividad sobrenatural, y porque se avecina una tormenta.'),(20,10,1,'T&T Genetics in medicine','Robert L. Nussbaum',2016,'Genética en medicina');
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

-- Dump completed on 2021-05-12  0:21:31
