-- MySQL dump 10.13  Distrib 5.6.33, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: db_sealinked
-- ------------------------------------------------------
-- Server version	5.5.53-MariaDB-1ubuntu0.14.04.1

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
-- Table structure for table `alamat`
--

DROP TABLE IF EXISTS `alamat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alamat` (
  `no_id` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  KEY `no_id` (`no_id`),
  CONSTRAINT `alamat_ibfk_1` FOREIGN KEY (`no_id`) REFERENCES `user` (`no_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alamat`
--

LOCK TABLES `alamat` WRITE;
/*!40000 ALTER TABLE `alamat` DISABLE KEYS */;
INSERT INTO `alamat` VALUES ('2017-003-1','Jawa Barat','Depok','Jl. Melati','16512');
/*!40000 ALTER TABLE `alamat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `co_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_user`
--

DROP TABLE IF EXISTS `history_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_user` (
  `no_id` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `no_id` (`no_id`),
  KEY `no_id_2` (`no_id`),
  KEY `no_id_3` (`no_id`),
  KEY `no_id_4` (`no_id`),
  KEY `no_id_5` (`no_id`),
  CONSTRAINT `history_user_ibfk_1` FOREIGN KEY (`no_id`) REFERENCES `user` (`no_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_user`
--

LOCK TABLES `history_user` WRITE;
/*!40000 ALTER TABLE `history_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_company`
--

DROP TABLE IF EXISTS `login_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_company` (
  `co_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  KEY `co_id` (`co_id`),
  KEY `co_id_2` (`co_id`),
  KEY `co_id_3` (`co_id`),
  CONSTRAINT `login_company_ibfk_1` FOREIGN KEY (`co_id`) REFERENCES `company` (`co_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_company`
--

LOCK TABLES `login_company` WRITE;
/*!40000 ALTER TABLE `login_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_user`
--

DROP TABLE IF EXISTS `login_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_user` (
  `no_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  KEY `no_id` (`no_id`),
  KEY `no_id_2` (`no_id`),
  KEY `no_id_3` (`no_id`),
  CONSTRAINT `login_user_ibfk_1` FOREIGN KEY (`no_id`) REFERENCES `user` (`no_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_user`
--

LOCK TABLES `login_user` WRITE;
/*!40000 ALTER TABLE `login_user` DISABLE KEYS */;
INSERT INTO `login_user` VALUES ('2017-003-1','b87775cd89e04a1e0ebf8bb3c60e469288271afd');
/*!40000 ALTER TABLE `login_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil_company`
--

DROP TABLE IF EXISTS `profil_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil_company` (
  `co_id` varchar(50) NOT NULL,
  KEY `co_id` (`co_id`),
  KEY `co_id_2` (`co_id`),
  KEY `co_id_3` (`co_id`),
  CONSTRAINT `profil_company_ibfk_1` FOREIGN KEY (`co_id`) REFERENCES `company` (`co_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil_company`
--

LOCK TABLES `profil_company` WRITE;
/*!40000 ALTER TABLE `profil_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `profil_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil_user`
--

DROP TABLE IF EXISTS `profil_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil_user` (
  `no_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `umur` varchar(2) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  KEY `no_id` (`no_id`),
  KEY `no_id_2` (`no_id`),
  KEY `no_id_3` (`no_id`),
  CONSTRAINT `profil_user_ibfk_1` FOREIGN KEY (`no_id`) REFERENCES `user` (`no_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil_user`
--

LOCK TABLES `profil_user` WRITE;
/*!40000 ALTER TABLE `profil_user` DISABLE KEYS */;
INSERT INTO `profil_user` VALUES ('2017-003-1','Muhamad Bayu Wilanda','bayu@gmail.com','0000-00-00','00','087');
/*!40000 ALTER TABLE `profil_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinsi`
--

DROP TABLE IF EXISTS `provinsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinsi` (
  `no_id` varchar(11) NOT NULL,
  `prov` varchar(50) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinsi`
--

LOCK TABLES `provinsi` WRITE;
/*!40000 ALTER TABLE `provinsi` DISABLE KEYS */;
INSERT INTO `provinsi` VALUES ('001','DKI Jakarta'),('002','Banten'),('003','Jawa Barat'),('004','Jawa Tengah'),('005','Jawa Timur'),('006','DI Yogyakarta'),('007','Nanggroe Aceh Darussalam '),('008','Sumatera Barat'),('009','Sumatera Utara'),('010','Sumatera Selatan'),('011','Bengkulu'),('012','Jambi'),('013','Riau'),('014','Kepulauan Riau'),('015','Kepulauan Bangka Belitung'),('016','Lampung'),('017','Kalimantan Barat'),('018','Kalimantan Tengah'),('019','Kalimantan Timur'),('020','Kalimantan Selatan'),('021','Bali'),('022','Nusa Tenggara Barat'),('023','Nusa Tenggara Timur'),('024','Gorontalo'),('025','Sulawesi Barat'),('026','Sulawesi Selatan'),('027','Sulawesi Tengah'),('028','Sulawesi Tenggara'),('029','Sulawesi Utara'),('030','Maluku'),('031','Maluku Utara'),('032','Papua (DKI)'),('033','Papua Barat'),('034','Papua Barat (DKI)'),('035','Teluk Cendrawasih');
/*!40000 ALTER TABLE `provinsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `no_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('2017-003-1','bayu@gmail.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-30  0:41:27
