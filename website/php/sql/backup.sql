-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: codenamey
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `Relationship`
--

DROP TABLE IF EXISTS `Relationship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Relationship` (
  `id_one` int(11) NOT NULL,
  `id_two` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(255) DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Relationship`
--

LOCK TABLES `Relationship` WRITE;
/*!40000 ALTER TABLE `Relationship` DISABLE KEYS */;
INSERT INTO `Relationship` VALUES (1,2,'2013-11-09 13:42:28','42.3638,-71.0835'),(1,5,'2013-11-09 16:47:16','41.3720,-72.9418'),(1,6,'2013-11-09 17:59:51','42.3814,-71.0971');
/*!40000 ALTER TABLE `Relationship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guid` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `position` varchar(255) DEFAULT '',
  `company` varchar(255) DEFAULT '',
  `address` varchar(255) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `fax` varchar(255) DEFAULT '',
  `phone` varchar(20) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'?!test','sean','po','passwordTestTest','s.po@live.com','','','','','','','',''),(2,'?!527dfb5062b757.47857273','Sean','Po','','s.po@live.com','https://scontent-a-iad.xx.fbcdn.net/hphotos-prn1/14809_10201544149633983_28976316_n.jpg','Engineer','Microsoft','','','','','Mechatronics student who is very interested in programming and coding. Loves to rock climb.'),(3,'?!527dfe32dd61a1.41643549','Sean','Po','Password','test','','','','','','','',''),(4,'?!527dfe753e2909.36853231','Sean','Po','Test','test','','','','','','','',''),(5,'?!527e0fa750e001.74632817','Nicole','Flokos','windex1','nicole.flokos@gmail.com','https://scontent-a-iad.xx.fbcdn.net/hphotos-frc1/3372_10151846254081970_2037108204_n.jpg','','','','','','',''),(6,'?!testtest','Tahsin','Mostafiz','PASSWORD','tahsin.mostafiz@gmail.com','https://scontent-a-iad.xx.fbcdn.net/hphotos-ash3/1017386_10151585909679164_1040874138_n.jpg','Engineer','Quanta Computing','285 Third Street, Cambridge, MA','','','857-333-6617','Avoid hackathons at all cost!');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-09 13:10:15
