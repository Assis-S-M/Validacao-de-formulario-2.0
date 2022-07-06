CREATE DATABASE  IF NOT EXISTS `formulario` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `formulario`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: formulario
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pessoafisica`
--

DROP TABLE IF EXISTS `pessoafisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoafisica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `telefone fixo` varchar(9) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoafisica`
--

LOCK TABLES `pessoafisica` WRITE;
/*!40000 ALTER TABLE `pessoafisica` DISABLE KEYS */;
INSERT INTO `pessoafisica` VALUES (1,'Assis Santos Menezes','290-428-882-87','13901-873','Travessa Canario',209,'Vila Munique N 5','Perto da E & G ','4002-8922','98549-8740','assis.menezes@aluno.ce.gov.br','20121805'),(2,'João da Silva Barbosa','398-216-498-27','11111-111','Rua Travessa Canarinho',456,'Vila Munique N 7','Perto da G & E calcados','4002-8922','98549-8740','joão.barbosa@aluno.ce.gov.br','19191919'),(3,'João Lucas da Silva ','652-918-551-55','13901-873','Rua tal',678,'Bairro tal','Perto da Tal coisa','9037-8210','21094-7249','talEmail@gmail.com','123123123'),(4,'Silvia do Nascimento lorenço','398-216-498-27','09876-098','Rua não sei da onde',609,'Bairro não sei da onde','Perto de não sei aonde','0179-3201','98237-5672','silva078@gmail.com','091209120912'),(5,'Leticia Santos Menezes','652-918-551-55','11111-111','Rua Travessa Canario',209,'Vila Munique N 5','Perto da E & G calcados','4002-8922','98549-8740','leticia.menezes@aluno.ce.gov.br','12344321'),(6,'Janaina','982-299-988-08','27613-873','Rua onde ela mora',1,'Bairro onde ela mora','Perto de onde ela mora','0978-0973','92111-1221','jana98_893@gmail.com','98872345'),(7,'Vitória Felix e Silva','123-823-978-09','12312-974','Eu não sei ate hoje',91,'Tambem não sei','Perto. De onde? Eu não sei','3902-2937','98472-7698','vitoria.silva@aluno.ce.gov.br','89742198'),(8,'Gabriel?','128-128-245-32','5359-632','Ru-rua Gabriel?',69,'Bairro Ga-gagaga-briel?','Perto da ca-casa de alguem','9821-1297','42635-9217','gabriel.el@aluno.ce.gov.br','ee-e-e uu-u-u'),(9,'Minha sanidade','123-007-005-00','00001-001','Inexistente',0,'Nem eu sei onde fica','Perto da minha paciência','0690-4200','23456-7889','socorro.4horasprogramamando@gmail.com','meu-deus-me-ajuda'),(10,'Sandrão','291-253-675-89','12132-984','Rua de O Sandrão',777,'Bairro de O Sandrão','Perto da estatua de O Sandrão','7777-7777','77777-7777','sandrao.top1frombrasil@gmailpremium.com','7777777'),(11,'Maria Joseane Silva Santos ','111-023-018-35','13901-873','Travessa Canario',209,'Vila Munique N 5','Perto da E & G Calçados','4002-8922','98816-9823','joseane.mae@gmail.com','01387892');
/*!40000 ALTER TABLE `pessoafisica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-05 12:01:09
