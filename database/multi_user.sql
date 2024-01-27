/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.28-MariaDB : Database - multi_user
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`multi_user` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `multi_user`;

/*Table structure for table `dokter` */

DROP TABLE IF EXISTS `dokter`;

CREATE TABLE `dokter` (
  `id_dokter` varchar(10) NOT NULL,
  `nama_dokter` varchar(75) DEFAULT NULL,
  `alamat_dokter` varchar(150) DEFAULT NULL,
  `nohp_dokter` varchar(12) DEFAULT NULL,
  `id_poli` int(11) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `dokter` */

insert  into `dokter`(`id_dokter`,`nama_dokter`,`alamat_dokter`,`nohp_dokter`,`id_poli`,`foto`) values 
('1','Teguh Sulistyono','Keputih Tegal VIII/16 Surabaya','0822222222',1,NULL),
('2','Anggi Amodia','Mranggen','0822222222',1,'');

/*Table structure for table `pasien` */

DROP TABLE IF EXISTS `pasien`;

CREATE TABLE `pasien` (
  `id_pasen` int(10) unsigned NOT NULL,
  `nama_pasien` varchar(75) DEFAULT NULL,
  `alamat_pasien` varchar(150) DEFAULT NULL,
  `nktp_pasien` varchar(20) DEFAULT NULL,
  `nohp_pasien` varchar(12) DEFAULT NULL,
  `norm_pasien` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pasen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pasien` */

/*Table structure for table `poli` */

DROP TABLE IF EXISTS `poli`;

CREATE TABLE `poli` (
  `id_poli` varchar(10) NOT NULL,
  `nama_poli` varchar(75) DEFAULT NULL,
  `keterangan_poli` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `poli` */

insert  into `poli`(`id_poli`,`nama_poli`,`keterangan_poli`) values 
('1','Poli Umum','Umum, Ibu Dan Anak'),
('2','Poli Gigi','Poli Gigi Dan Guzi');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`nama`,`username`,`password`,`level`) values 
(1,'Malas Ngoding','malasngoding','malasngoding123','admin'),
(2,'Diki Alfarabi Hadi','diki','diki123','pegawai'),
(3,'Jamaludin','jamaludin','jamaludin123','pengurus'),
(4,'Teguh','teguh','teguh','admin'),
(5,'Ayu','ayu','ayu','pasien'),
(6,'Angga','angga','angga','dokter'),
(7,'admin','admin','admin','admin'),
(8,'dokter','dokter','dokter','dokter'),
(9,'pegawai','pegawai','pegawai','pegawai'),
(10,'apoteker','apoteker','apoteker','apoteker'),
(11,'pasien','pasien','pasien','pasien');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
