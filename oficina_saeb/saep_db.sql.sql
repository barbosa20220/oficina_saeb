-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: oficina_saeb
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `agendamentos`
--

DROP TABLE IF EXISTS `agendamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `veiculo_id` int(11) NOT NULL,
  `servico` varchar(150) NOT NULL,
  `data_agendamento` date NOT NULL,
  `horario` time NOT NULL,
  `descricao` text DEFAULT NULL,
  `status` varchar(30) DEFAULT 'Pendente',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `veiculo_id` (`veiculo_id`),
  CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendamentos`
--

LOCK TABLES `agendamentos` WRITE;
/*!40000 ALTER TABLE `agendamentos` DISABLE KEYS */;
INSERT INTO `agendamentos` VALUES (1,1,1,'Troca de oleo','2026-11-11','11:02:00','Troca de oleo do motor','Pendente','2026-11-16 11:18:08'),(2,2,2,'Revisao completa','2026-11-19','10:00:00','Revisao geral do veiculo','Confirmado','2026-11-16 11:18:08'),(3,3,3,'Alinhamento','2026-11-20','14:00:00','Alinhamento e balanceamento','Pendente','2026-11-16 11:18:08');
/*!40000 ALTER TABLE `agendamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` text DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Carlos Oliveira','eyJpdiI6IlNtRmpsV2N0NkhET3dvS3oxNm9uTkE9PSIsInZhbHVlIjoiQXBPVnZCeGJYaS9kY2ZwendPK1JyZz09IiwibWFjIjoiNzA3NzM5Y2VmZTBmOTEyYWUwNWQ2YTEwZDkzMjFhNzQ0ZjU5MzFhZTVjNjNiZDkwNjQ1NGQ3N2QwNGE1NTA1MCIsInRhZyI6IiJ9','11988887777','carlos@email.com','Rua A, 100','2026-11-16 11:17:59'),(2,'Ana Santos','bcŠY]X???\0Zם','11999990002','ana@email.com','Rua B, 200','2026-11-16 11:17:59'),(3,'Pedro Costa','@?\0\\??;??PS???','11999990003','pedro@email.com','Rua C, 300','2026-11-16 11:17:59');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Administrador','admin@oficina.com','$2y$12$l7x7zer.CTNbmBOxlt8UUeAnLOSeFrGPBLHSlSov1o3OHaPN0Fime','2026-11-16 11:17:52'),(2,'Joao Silva','joao@oficina.com','$2y$12$l7x7zer.CTNbmBOxlt8UUeAnLOSeFrGPBLHSlSov1o3OHaPN0Fime','2026-11-16 11:17:52'),(3,'Maria Souza','maria@oficina.com','$2y$12$l7x7zer.CTNbmBOxlt8UUeAnLOSeFrGPBLHSlSov1o3OHaPN0Fime','2026-11-16 11:17:52');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `marca` varchar(80) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `ano` int(11) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `placa` (`placa`),
  KEY `cliente_id` (`cliente_id`),
  CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculos`
--

LOCK TABLES `veiculos` WRITE;
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
INSERT INTO `veiculos` VALUES (1,1,'Volkswagen','Gol','ABC1D23',2018,'Prata','2026-11-16 11:18:04'),(2,2,'Chevrolet','Onix','DEF4G56',2021,'Preto','2026-11-16 11:18:04'),(3,3,'Fiat','Argo','GHI7J89',2022,'Branco','2026-11-16 11:18:04'),(5,1,'Volkswagen','Gol','GHT2B45',2020,'pretp','2026-11-16 11:54:15');
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'oficina_saeb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-11-16 10:02:52
