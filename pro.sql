/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - pro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pro` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pro`;

/*Table structure for table ` producto` */

DROP TABLE IF EXISTS ` producto`;

CREATE TABLE ` producto` (
  `idproducto` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` blob,
  `stock_minimo` int(10) DEFAULT NULL,
  `idcategoria` int(10) DEFAULT NULL,
  `idmarca` int(10) DEFAULT NULL,
  `idempleado` int(10) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fkidcategoria` (`idcategoria`),
  KEY `fkidmarca` (`idmarca`),
  KEY `fkidempleado` (`idempleado`),
  CONSTRAINT `fkidcategoria` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`),
  CONSTRAINT `fkidempleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`),
  CONSTRAINT `fkidmarca` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table ` producto` */

/*Table structure for table `cardex` */

DROP TABLE IF EXISTS `cardex`;

CREATE TABLE `cardex` (
  `idcardex` int(10) NOT NULL AUTO_INCREMENT,
  `idproducto` int(10) DEFAULT NULL,
  `idrecibo` int(10) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `tipo_transaccion` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idcardex`),
  KEY `fkidproducto` (`idproducto`),
  KEY `fkidrecibo1` (`idrecibo`),
  CONSTRAINT `fkidproducto` FOREIGN KEY (`idproducto`) REFERENCES ` producto` (`idproducto`),
  CONSTRAINT `fkidrecibo1` FOREIGN KEY (`idrecibo`) REFERENCES `recibo` (`idrecibo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cardex` */

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `idcategoria` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `categoria` */

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idcliente` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `apellido_cliente` varchar(50) DEFAULT NULL,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `clave` char(50) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

/*Table structure for table `detalle_recibo` */

DROP TABLE IF EXISTS `detalle_recibo`;

CREATE TABLE `detalle_recibo` (
  `iddetallerecibo` int(10) NOT NULL AUTO_INCREMENT,
  `idproducto` int(10) DEFAULT NULL,
  `idrecibo` int(10) DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  PRIMARY KEY (`iddetallerecibo`),
  KEY `fkidrecibo` (`idrecibo`),
  KEY `fkidproducto1` (`idproducto`),
  CONSTRAINT `fkidproducto1` FOREIGN KEY (`idproducto`) REFERENCES ` producto` (`idproducto`),
  CONSTRAINT `fkidrecibo` FOREIGN KEY (`idrecibo`) REFERENCES `recibo` (`idrecibo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detalle_recibo` */

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `idempleado` int(10) NOT NULL AUTO_INCREMENT,
  `idtipo` int(10) DEFAULT NULL,
  `nombre_empleado` varchar(50) DEFAULT NULL,
  `apellido_empleado` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `clave` char(50) DEFAULT NULL,
  PRIMARY KEY (`idempleado`),
  KEY `fkidtipo` (`idtipo`),
  CONSTRAINT `fkidtipo` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

insert  into `empleado`(`idempleado`,`idtipo`,`nombre_empleado`,`apellido_empleado`,`cargo`,`nombre_usuario`,`clave`) values 
(1,1,'Gerson Edgardo','Coto Rodriguez','Jefe','Gcoto','1234');

/*Table structure for table `marca` */

DROP TABLE IF EXISTS `marca`;

CREATE TABLE `marca` (
  `idmarca` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_marca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `marca` */

/*Table structure for table `recibo` */

DROP TABLE IF EXISTS `recibo`;

CREATE TABLE `recibo` (
  `idrecibo` int(10) NOT NULL AUTO_INCREMENT,
  `idcliente` int(10) DEFAULT NULL,
  PRIMARY KEY (`idrecibo`),
  KEY `fkidcliente` (`idcliente`),
  CONSTRAINT `fkidcliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recibo` */

/*Table structure for table `tipo` */

DROP TABLE IF EXISTS `tipo`;

CREATE TABLE `tipo` (
  `idtipo` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tipo` */

insert  into `tipo`(`idtipo`,`nombre_tipo`) values 
(1,'Administrador'),
(2,'Empleado');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
