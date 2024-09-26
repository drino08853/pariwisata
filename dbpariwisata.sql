/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - pariwisata
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pariwisata` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `pariwisata`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `visi` varchar(255) DEFAULT NULL,
  `misi` varchar(255) DEFAULT NULL,
  `gambar_about` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `about` */

insert  into `about`(`id_about`,`visi`,`misi`,`gambar_about`) values 
(1,'Menjadi Tempat Wisata Yang Nyaman','Memberikan Pelayanan Pada Pengunjung','pngtree-travel-tourism-logo-design-template-png-image_5476090.jpg');

/*Table structure for table `armada` */

DROP TABLE IF EXISTS `armada`;

CREATE TABLE `armada` (
  `id_armada` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_armada` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_armada`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `armada` */

insert  into `armada`(`id_armada`,`jenis_armada`,`jurusan`,`foto`) values 
(2,'Bus Pariwisata Marita','Padang - Bukittinggi','287-bus-pariwisata-padang.jpg'),
(3,'Happy Bus','Bandung','714-Big-Bus.png'),
(4,'Kapal Pulau ','Pulau Pasumpahan','534-kapal-ke-pulau-pari-scaled.jpg'),
(5,'Tranex Mandiri','Padang - Sungai Geringgi','18-17436337_1515841231759556_3107127694132459917_o.jpg');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`) values 
(80,'Pantai'),
(81,'Pulau'),
(82,'Hutan'),
(83,'Pegunungan');

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `kontak` */

insert  into `kontak`(`id_kontak`,`facebook`,`instagram`,`no_telp`,`alamat`) values 
(1,'https://www.facebook.com/profile.php?id=1000077185','https://www.instagram.com/dio_al_parino_77?igsh=MW','082384610723','Jalan Marapalam Indah A3.No.24 Kebon  Limau Manix');

/*Table structure for table `tim` */

DROP TABLE IF EXISTS `tim`;

CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tim` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_tim`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tim` */

insert  into `tim`(`id_tim`,`nama_tim`,`jabatan`,`foto`) values 
(14,'Podomoro','Pimpinan','852-man-traveling-logo-black-and-white-vector.jpg'),
(15,'Travics','Kepala  Bagian','399-1600w-V13_JVmg9Q8.jpg'),
(16,'Maxwell','Driver','images.jpg'),
(17,'Lorem Travel','Keuangan','676-pngtree-travel-tourism-logo-design-template-png-image_5476090.jpg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama_lengkap`,`foto`) values 
(5,'markus','12345','Mas Tukang  Perkakas','ai2.jpg'),
(6,'hartono','12345','Pak Hartono','905-ai1.jpg'),
(12,'ryanfeb','12345','Ryan Feb','783-bandung-badge.png'),
(13,'asaltauaja','12345','Shanks','998-history.jpg');

/*Table structure for table `wisata` */

DROP TABLE IF EXISTS `wisata`;

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `tempat_wisata` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `tgl_publish` date DEFAULT NULL,
  `tentang_wisata` varchar(255) DEFAULT NULL,
  `gambar_wisata` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `wisata` */

insert  into `wisata`(`id_wisata`,`id_kategori`,`tempat_wisata`,`slug`,`tgl_publish`,`tentang_wisata`,`gambar_wisata`) values 
(43,80,'Pantai Air Manis','Pantai-Air-Manis','2024-09-04','Pantai Air Manis Adalah Tempat Pantai Dibawah Kaki Gunung Padang Yang Terindah Dan Disediakan Spot Yang Indah.','air-manis-beach.jpg'),
(44,83,'Ngarai Sianok','Ngarai-Sianok','2024-09-10','Ngarai Sianok terletak di Kota Bukittinggi dengan menyajikan panorama yang indah dan udara yang sejuk,serta spot yang bagus.','252-1.jpg'),
(45,82,'Hutan Mangrove Bonang Kaltim','Hutan-Mangrove-Bonang-Kaltim','2024-09-04','Di daerah saya sendiri, di Bontang ada tempat destinasi wisata mangrove yang sering di kunjungi. Maka jika kalian berkunjung ke Bontang rasanya wajib mengunjungi destinasi wisata tersebut.','924-Begini-Peran-Destinasi-Wisata-Hutan-Mangrove-Bontang-Kaltim.jpg'),
(46,81,'Pulau Pasumpahan','Pulau-Pasumpahan','2024-09-10','Sebelumnya, Pulau Pasumpahan mungkin belum begitu populer, namun sekarang banyak diminati wisatawan karena memiliki pasir putih yang halus dan air laut yang relatif masih jernih juga pemandangan alamnya yang indah.','131-image_default_621cef0aab4b9.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
