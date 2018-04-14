-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sw-engg
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_course` int(11) NOT NULL,
  `a_section` varchar(45) NOT NULL,
  `a_status` varchar(15) NOT NULL,
  `a_statusID` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `a_remarks` varchar(140) NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `a_status_idx` (`a_statusID`),
  KEY `a_course_idx` (`a_course`),
  CONSTRAINT `a_course` FOREIGN KEY (`a_course`) REFERENCES `course` (`c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `a_status` FOREIGN KEY (`a_statusID`) REFERENCES `attendance_status` (`as_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` VALUES (1,1,'S15','LA',1,'2018-02-28','15 minutes late'),(2,2,'S15','SB',4,'2018-02-27','N/A'),(3,3,'S14','LA',2,'2018-02-28','N/A'),(4,4,'S14','ED',3,'2018-03-01','N/A');
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance_status`
--

DROP TABLE IF EXISTS `attendance_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance_status` (
  `as_id` int(11) NOT NULL AUTO_INCREMENT,
  `as_code` varchar(10) NOT NULL,
  `as_name` varchar(45) NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance_status`
--

LOCK TABLES `attendance_status` WRITE;
/*!40000 ALTER TABLE `attendance_status` DISABLE KEYS */;
INSERT INTO `attendance_status` VALUES (1,'AB','Absent'),(2,'LA','Late'),(3,'ED','Early Dismissal'),(4,'SB','Substitute'),(5,'SW','Seatwork'),(6,'VR','Vacant Room'),(7,'US','Unscheduled Class');
/*!40000 ALTER TABLE `attendance_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college` (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `cl_code` varchar(45) NOT NULL,
  `cl_name` varchar(45) NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college`
--

LOCK TABLES `college` WRITE;
/*!40000 ALTER TABLE `college` DISABLE KEYS */;
INSERT INTO `college` VALUES (1,'CCS','College of Computer Studies'),(2,'SOE','School of Economics'),(3,'COB','College of Business'),(4,'CLA','College of Liberal Arts'),(5,'COS','College of Science'),(6,'CED','College of Education'),(7,'GCOE','Gokongwei College of Engineering');
/*!40000 ALTER TABLE `college` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_code` varchar(7) NOT NULL,
  `c_name` varchar(45) NOT NULL,
  `c_day` varchar(45) NOT NULL,
  `c_time` varchar(45) NOT NULL,
  `c_room` varchar(45) DEFAULT NULL,
  `c_college` int(11) NOT NULL,
  `c_faculty` int(11) NOT NULL,
  `c_section` varchar(45) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `c_faculty_idx` (`c_faculty`),
  KEY `c_college_idx` (`c_college`),
  CONSTRAINT `c_college` FOREIGN KEY (`c_college`) REFERENCES `college` (`cl_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `c_faculty` FOREIGN KEY (`c_faculty`) REFERENCES `faculty` (`f_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'SW-ENGG','Software Engineering','WF','0730-0900','G202',1,2,'S15'),(2,'ARCPLAN','Architecture Planning','WF','0900-1100','G206',1,2,'S15'),(3,'HUMALIT','Introduction to Literature','TH','1430-1600','G206',1,1,'S14'),(4,'HUMAART','Introduction to Art','WF','1430-1600','G206',1,1,'S14');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(45) NOT NULL,
  `d_college` int(11) NOT NULL,
  PRIMARY KEY (`d_id`),
  KEY `d_college_idx` (`d_college`),
  CONSTRAINT `d_college` FOREIGN KEY (`d_college`) REFERENCES `college` (`cl_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Accountancy',3),(2,'Law',3),(3,'Economics',2),(4,'Educational Leadership and Management',6),(5,'Biology',5),(6,'Chemistry',5),(7,'Chemical Engineering',7),(8,'Manufacturing Engineering and Management',7),(9,'Communication',4),(10,'Literature',4),(11,'Information Technology',1),(12,'Software Technology',1),(13,'Computer Technology',1);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_firstname` varchar(45) NOT NULL,
  `f_lastname` varchar(45) NOT NULL,
  `f_contactno` varchar(45) NOT NULL,
  `f_email` varchar(45) NOT NULL,
  `f_address` varchar(45) NOT NULL,
  `f_dept` int(11) NOT NULL,
  `f_rank` int(11) NOT NULL,
  `f_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`f_id`),
  KEY `f_rank_idx` (`f_rank`),
  KEY `f_dept_idx` (`f_dept`),
  CONSTRAINT `f_dept` FOREIGN KEY (`f_dept`) REFERENCES `department` (`d_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `f_rank` FOREIGN KEY (`f_rank`) REFERENCES `rank` (`r_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'Kurt','Tan','+639171234567','kurt_tan@dlsu.edu.ph','Makati City',1,4,NULL),(2,'Hazel','Ramos','+639173456789','hazel_ramos@dlsu.edu.ph','Pasig City',11,1,NULL);
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rank`
--

DROP TABLE IF EXISTS `rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rank` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(45) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rank`
--

LOCK TABLES `rank` WRITE;
/*!40000 ALTER TABLE `rank` DISABLE KEYS */;
INSERT INTO `rank` VALUES (1,'Full Professor'),(2,'Assistant Professor'),(3,'Associate Professor'),(4,'Lecturer');
/*!40000 ALTER TABLE `rank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(45) NOT NULL,
  `u_password` varchar(45) NOT NULL,
  `u_type` int(11) NOT NULL,
  `u_status` varchar(20) NOT NULL,
  `u_firstname` varchar(45) NOT NULL,
  `u_lastname` varchar(45) NOT NULL,
  `u_contactno` varchar(45) NOT NULL,
  `u_email` varchar(45) NOT NULL,
  `u_address` varchar(45) NOT NULL,
  `u_image` blob,
  PRIMARY KEY (`u_id`),
  KEY `u_type_idx` (`u_type`),
  CONSTRAINT `u_type` FOREIGN KEY (`u_type`) REFERENCES `usertype` (`ut_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','123',1,'ACTIVATED','Chanyeol','Park','+82-3-356-6235','chanyeol_park@gmail.com','Seoul, South Korea',NULL),(2,'tracker','123',2,'ACTIVATED','Baekhyun','Byun','+82-3-356-1234','baekhyun_byun@gmail.com','Bucheon, South Korea',NULL),(3,'hazel','ramos',2,'ACTIVATED','Hazel','Ramos','1234567','hazel_moira@yahoo.com','Pasig City','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_status` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_code` varchar(45) NOT NULL,
  `us_name` varchar(45) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_status`
--

LOCK TABLES `user_status` WRITE;
/*!40000 ALTER TABLE `user_status` DISABLE KEYS */;
INSERT INTO `user_status` VALUES (1,'ACT','Activated'),(2,'DEACT','Deactivated');
/*!40000 ALTER TABLE `user_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertype` (
  `ut_id` int(11) NOT NULL AUTO_INCREMENT,
  `ut_name` varchar(45) NOT NULL,
  PRIMARY KEY (`ut_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertype`
--

LOCK TABLES `usertype` WRITE;
/*!40000 ALTER TABLE `usertype` DISABLE KEYS */;
INSERT INTO `usertype` VALUES (1,'Administrator'),(2,'Tracker');
/*!40000 ALTER TABLE `usertype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-04  8:41:49
