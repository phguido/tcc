# Host: localhost  (Version 5.5.5-10.4.28-MariaDB)
# Date: 2024-04-02 19:47:49
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "plantas"
#

DROP TABLE IF EXISTS `plantas`;
CREATE TABLE `plantas` (
  `plantaid` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `humidade_presente` float DEFAULT NULL,
  `humidade_boa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`plantaid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "plantas"
#


#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "usuarios"
#

