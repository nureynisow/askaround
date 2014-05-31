-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ask
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

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
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `idQ` int(11) NOT NULL AUTO_INCREMENT,
  `dateQ` date NOT NULL,
  `titre` varchar(128) NOT NULL,
  `question` text NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idQ`),
  KEY `pseudo` (`pseudo`),
  CONSTRAINT `question_ibfk_1` FOREIGN KEY (`pseudo`) REFERENCES `user` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (18,'2014-05-31','SQL to detect inconsistency between 1:M and M:M relations','I have four tables in a Django app that is backed by a PostgreSQL DB:\r\n\r\nCustomer\r\nSalesOrder\r\nUserGroup\r\nCustomerToUserGroupMembership\r\nThere is a standard foreign key from SalesOrder to UserGroup and there is a M:M relation between Customer and UserGroup. All tables have a uuid column that acts as the PK.\r\n\r\nUltimately I am trying to find orders with a fast SQL query that would be expressed in Python condition as order.userGroup not in order.customer.userGroups.all().\r\n\r\nI tried something like:\r\n	','root'),(19,'2014-06-01','[C] Segfault issues','Comment faire pour eviter des segfault \r\n	','bob'),(20,'2014-06-01','Checking for empty result (php, pdo, mysql)','Please, can anyone tell me what I\'m doing wrong here? I\'m simply retrieving results from a table then adding them to an array. Everything works as expected until I check for an empty result...\r\n\r\nThis gets the match, adds it to my array and echoes the result as expected:','bob');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_tag`
--

DROP TABLE IF EXISTS `question_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_tag` (
  `idQ` int(11) NOT NULL,
  `tag` varchar(32) NOT NULL,
  PRIMARY KEY (`idQ`,`tag`),
  KEY `tag` (`tag`),
  CONSTRAINT `question_tag_ibfk_1` FOREIGN KEY (`idQ`) REFERENCES `question` (`idQ`),
  CONSTRAINT `question_tag_ibfk_2` FOREIGN KEY (`tag`) REFERENCES `tags` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_tag`
--

LOCK TABLES `question_tag` WRITE;
/*!40000 ALTER TABLE `question_tag` DISABLE KEYS */;
INSERT INTO `question_tag` VALUES (19,'C'),(18,'DIANGO'),(19,'ISSUES'),(20,'MYSQL'),(20,'PDO'),(20,'PHP'),(19,'SEGFAULT'),(18,'SQL'),(20,'SQL');
/*!40000 ALTER TABLE `question_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reponse` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `idQ` int(11) NOT NULL,
  `dateR` date NOT NULL,
  `reponse` text NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idR`),
  KEY `idQ` (`idQ`),
  KEY `pseudo` (`pseudo`),
  CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`idQ`) REFERENCES `question` (`idQ`),
  CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`pseudo`) REFERENCES `user` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reponse`
--

LOCK TABLES `reponse` WRITE;
/*!40000 ALTER TABLE `reponse` DISABLE KEYS */;
INSERT INTO `reponse` VALUES (6,18,'2014-05-31','tester des reponses \r\ncool ca marche sa mÃ¨re','root'),(7,18,'2014-05-31','test de bob','bob');
/*!40000 ALTER TABLE `reponse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `tag` varchar(32) NOT NULL,
  PRIMARY KEY (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES ('C'),('DIANGO'),('ISSUES'),('MYSQL'),('PDO'),('PHP'),('SEGFAULT'),('SQL'),('test');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `pseudo` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `nomcomplet` varchar(64) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  PRIMARY KEY (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('bob','bob@ipb.fr','BOB USER','e7c011a4e40b5b7ac4468983224279815807d6b7'),('pit','nurenisow@gmail.com','SOW OUSMANE','cf638e09e0e513e4c7e443181dbad74156f9502b'),('root','sow@local.net','ROOT ADMIN','8374341cbd025e63aeb36960e87ca9d140ed81f8');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vote` (
  `idrep` int(11) NOT NULL DEFAULT '0',
  `pseudo` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`idrep`,`pseudo`),
  KEY `pseudo` (`pseudo`),
  CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`idrep`) REFERENCES `reponse` (`idR`),
  CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`pseudo`) REFERENCES `user` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vote`
--

LOCK TABLES `vote` WRITE;
/*!40000 ALTER TABLE `vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `vote` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-01  1:05:07
